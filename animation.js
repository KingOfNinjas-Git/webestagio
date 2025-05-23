document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.querySelector(".menu-icon");
    const navigation = document.querySelector(".navigation");
    const closeButton = document.createElement("button");

    closeButton.innerHTML = "x";
    closeButton.classList.add("menu-close");
    navigation.appendChild(closeButton);

    menuIcon.addEventListener("click", function () {
        navigation.classList.add("active");
        menuIcon.style.display = "none";
    });

    closeButton.addEventListener("click", function () {
        navigation.classList.remove("active");
        menuIcon.style.display = "flex";
    });
    /* ===== FAQS SECTION ===== */
    document.querySelectorAll('.faq-item').forEach(item => {
        item.addEventListener('click', () => {
            const extraDetails = item.querySelector('.faq-extra-details');

            if (extraDetails) {
                extraDetails.style.display = extraDetails.style.display === 'block' ? 'none' : 'block';
            }

            item.classList.toggle('active');
        });
    });

    document.querySelectorAll('.faq-header').forEach(header => {
        header.addEventListener('click', () => {
            const faqItem = header.parentElement;
            faqItem.classList.toggle('active');
        });
    });
});


function toggleFaq(faqItem) {
    const targetId = faqItem.getAttribute("data-target");
    const details = document.getElementById(targetId);
    details.classList.toggle("visible");
}

/* ===== KITS SECTION ===== */
function toggleDetails(element) {
    const allDetails = document.querySelectorAll(".kit-extra-details");
    const allToggles = document.querySelectorAll(".kit-add");


    const details = element.parentElement.nextElementSibling;
    const isVisible = details.style.display === "block";

    allDetails.forEach((detail) => {
        detail.style.display = "none";
    });
    allToggles.forEach((toggle) => {
        toggle.textContent = "+";
    });

    if (!isVisible) {
        details.style.display = "block";
        element.textContent = "-";
    } else {
        details.style.display = "none";
        element.textContent = "+";
    }

    const container = element.closest(".kit-container");
    if (container) {
        container.style.transition = "height 0.3s ease";
        container.style.height = "auto";
    }
}

function toggleMenu() {
    const nav = document.querySelector(".navigation");
    nav.classList.toggle("active");
}
/* ===== PAGE UNSCROLLABLE WHEN POPUP OPEN ===== */
function togglePopup() {
    const popup = document.getElementById('contact-popup');
    popup.classList.toggle('hidden');
    document.body.classList.toggle('no-scroll');
}

