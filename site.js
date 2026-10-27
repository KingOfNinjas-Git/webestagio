/* O comportamento da página: o menu do telemóvel e a janela "Contacte-nos".
   O kit e as FAQs são <details>, por isso funcionam sem JavaScript. */

document.addEventListener("DOMContentLoaded", () => {
    /* ===== MENU (telemóvel) ===== */
    const menuButton = document.querySelector(".menu-button");
    const nav = document.querySelector(".nav");

    const setMenu = (open) => {
        nav.classList.toggle("open", open);
        menuButton.setAttribute("aria-expanded", String(open));
        menuButton.setAttribute("aria-label", open ? "Fechar o menu" : "Abrir o menu");
    };

    menuButton.addEventListener("click", () => setMenu(menuButton.getAttribute("aria-expanded") !== "true"));
    nav.querySelectorAll("a").forEach((link) => link.addEventListener("click", () => setMenu(false)));
    document.addEventListener("keydown", (event) => { if (event.key === "Escape") setMenu(false); });

    /* ===== JANELA "CONTACTE-NOS" (<dialog>: o Esc, o foco e o fundo escuro vêm do navegador) ===== */
    const dialog = document.getElementById("contact-dialog");
    const form = dialog.querySelector("form");
    const message = dialog.querySelector(".contact-message");

    const open = () => {
        message.textContent = "";
        message.classList.remove("error");
        dialog.showModal();
    };

    document.querySelectorAll("[data-open-contact]").forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            open();
        });
    });
    dialog.querySelector(".contact-close").addEventListener("click", () => dialog.close());
    dialog.addEventListener("click", (event) => { if (event.target === dialog) dialog.close(); }); // clicar fora fecha

    // Enviar sem sair da página: a resposta aparece dentro da janela
    form.addEventListener("submit", async (event) => {
        event.preventDefault();
        const send = form.querySelector('button[type="submit"]');
        send.disabled = true;
        message.classList.remove("error");
        message.textContent = "A enviar...";

        try {
            const response = await fetch(form.action, { method: "POST", body: new FormData(form), headers: { Accept: "application/json" } });
            const result = await response.json();
            message.textContent = result.message;
            message.classList.toggle("error", !result.ok);
            if (result.ok) {
                form.reset();
                setTimeout(() => dialog.close(), 2500);
            }
        } catch (error) {
            message.textContent = "Não foi possível enviar. Tente novamente.";
            message.classList.add("error");
        } finally {
            send.disabled = false;
        }
    });

    // Se o servidor voltou à página com ?contacto=ok ou ?contacto=erro, abrimos a janela com a resposta
    const result = new URLSearchParams(location.search).get("contacto");
    if (result) {
        open();
        message.textContent = result === "ok" ? "Mensagem enviada. Obrigado!" : "Preencha todos os campos com dados válidos.";
        message.classList.toggle("error", result !== "ok");
    }
});
