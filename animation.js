/* O comportamento da página: menu, kit, FAQs e a janela "Contacte-nos".
   Os botões são <button> a sério: funcionam com o teclado e dizem ao leitor de ecrã se estão abertos (aria-expanded). */

document.addEventListener("DOMContentLoaded", () => {
    /* ===== MENU (telemóvel) ===== */
    const menuIcon = document.querySelector(".menu-icon");
    const navigation = document.querySelector(".navigation");

    const setMenu = (open) => {
        navigation.classList.toggle("active", open);
        menuIcon.style.display = open ? "none" : "";
        menuIcon.setAttribute("aria-expanded", String(open));
    };

    menuIcon.addEventListener("click", () => setMenu(true));
    navigation.querySelector(".menu-close").addEventListener("click", () => setMenu(false));
    navigation.querySelectorAll("a").forEach((link) => link.addEventListener("click", () => setMenu(false)));

    /* ===== KIT E FAQS: um bloco abre e fecha ao clicar ===== */
    const toggleBlock = (button, panel, isOpen, mark) => {
        button.setAttribute("aria-expanded", String(isOpen));
        panel.classList.toggle("visible", isOpen);
        mark.textContent = isOpen ? "−" : "+";
    };

    // Kit: só um sabonete aberto de cada vez
    const kitItems = document.querySelectorAll(".kit-item");
    kitItems.forEach((item) => {
        const button = item.querySelector(".kit-toggle");
        button.addEventListener("click", () => {
            const willOpen = button.getAttribute("aria-expanded") !== "true";
            kitItems.forEach((other) => toggleBlock(other.querySelector(".kit-toggle"), other.querySelector(".kit-extra-details"), false, other.querySelector(".kit-add")));
            toggleBlock(button, item.querySelector(".kit-extra-details"), willOpen, item.querySelector(".kit-add"));
        });
    });

    // FAQs: cada pergunta abre e fecha sozinha
    document.querySelectorAll(".faq-item").forEach((button) => {
        const panel = document.getElementById(button.getAttribute("aria-controls"));
        button.addEventListener("click", () => {
            toggleBlock(button, panel, button.getAttribute("aria-expanded") !== "true", button.querySelector(".faq-toggle"));
        });
    });

    /* ===== JANELA "CONTACTE-NOS" ===== */
    const popup = document.getElementById("contact-popup");
    const form = popup.querySelector("form");
    const message = popup.querySelector(".popup-message");
    let opener = null;

    const setPopup = (open) => {
        popup.classList.toggle("hidden", !open);
        document.body.classList.toggle("no-scroll", open); // a página não se mexe por trás da janela
        if (open) {
            message.textContent = "";
            form.querySelector("input").focus();
        } else if (opener) {
            opener.focus();
        }
    };

    document.querySelectorAll("[data-open-contact]").forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            opener = link;
            setPopup(true);
        });
    });
    popup.querySelector(".close-popup").addEventListener("click", () => setPopup(false));
    popup.addEventListener("click", (event) => { if (event.target === popup) setPopup(false); }); // clicar fora fecha
    document.addEventListener("keydown", (event) => { if (event.key === "Escape" && !popup.classList.contains("hidden")) setPopup(false); });

    // Enviar sem sair da página: a resposta aparece dentro da janela
    form.addEventListener("submit", async (event) => {
        event.preventDefault();
        const send = form.querySelector('button[type="submit"]');
        send.disabled = true;
        message.textContent = "A enviar...";

        try {
            const response = await fetch(form.action, { method: "POST", body: new FormData(form), headers: { Accept: "application/json" } });
            const result = await response.json();
            message.textContent = result.message;
            message.classList.toggle("error", !result.ok);
            if (result.ok) {
                form.reset();
                setTimeout(() => setPopup(false), 2500);
            }
        } catch (error) {
            message.textContent = "Não foi possível enviar. Tente novamente.";
            message.classList.add("error");
        } finally {
            send.disabled = false;
        }
    });

    // Sem JavaScript, o servidor volta à página com ?contacto=ok ou ?contacto=erro: abrimos a janela com a resposta
    const result = new URLSearchParams(location.search).get("contacto");
    if (result) {
        setPopup(true);
        message.textContent = result === "ok" ? "Mensagem enviada. Obrigado!" : "Preencha todos os campos com dados válidos.";
        message.classList.toggle("error", result !== "ok");
    }
});
