import "./bootstrap";
import "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";

import AOS from "aos";
import "aos/dist/aos.css";
AOS.init();

document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebarMenu");
    const toggleBtn = document.getElementById("sidebarToggle");
    const closeBtn = document.getElementById("sidebarClose");

    if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("show"); // buka/tutup
        });
    }
    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            sidebar.classList.remove("show"); // close
        });
    }
});
