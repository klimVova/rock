 if (window.innerWidth <= 768) {
        const btnOpen = document.querySelector(".button_open");
        const btnClose = document.querySelector(".button_close");
        const menu = document.querySelector(".header_mob__ul");
        btnOpen.onclick = () => {
            menu.style.top = "100%";
            btnOpen.style.display = "none";
            btnClose.style.display = "block";
        };
        btnClose.onclick = () => {
            menu.style.top = "-150%";
            btnOpen.style.display = "block";
            btnClose.style.display = "none";
        };

        document.querySelector(".open_lang").onclick = () => {
            if (document.querySelector(".lang").classList.contains("active")) {
                document.querySelector(".lang").classList.remove("active");
            } else {
                document.querySelector(".lang").classList.add("active");
            }
        };
    }
