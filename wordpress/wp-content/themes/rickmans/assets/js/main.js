if (window.innerWidth >= 1200) {
    console.log('/ss')
    const slides = document.querySelectorAll(".box-services_slide");
    const widthItemSlider = slides[0].offsetWidth;
    const margin = 30;
    const widthItemSlideWithMargin = widthItemSlider + margin;
    const count_slides = slides.length;

    const wrapBlockSlider = document.querySelector(".block-services_slider");
    let lineSlider = document.querySelector(".line-services_slider");
    let widthLineSlider = lineSlider.offsetWidth;
    let widthWrapBlockSlider = wrapBlockSlider.offsetWidth;

    let visibleCountSLides = Math.floor(
        widthWrapBlockSlider / widthItemSlider
    );

    let positionLineSlider = 0;

    let currentLeft = 0;

    const dots = Array(count_slides - visibleCountSLides + 1).fill(0);
    let arrayDots = [];
    let activeDot = 0;

    wrapBlockSlider.style.width = `${
        visibleCountSLides * widthItemSlider + (visibleCountSLides - 1) * margin
    }px`;
    lineSlider.style.left = `${positionLineSlider}px`;

    const setPositionLineSlider = (left) => {
        currentLeft += left;
        lineSlider.style.left = `${currentLeft}px`;
    };
    const setAndRemoveActiveDot = (index) => {
        arrayDots.map((el) => {
            if (el.getAttribute("index") == index) el.classList.add("active");
            else if (el.classList.contains("active"))
                el.classList.remove("active");
        });
    };
    const sliderSwipe = (el) => {
        let index = el.target.getAttribute("index");

        if (index > activeDot) {
            setPositionLineSlider(
                Math.abs(index - activeDot) * -widthItemSlideWithMargin
            );
            setAndRemoveActiveDot(index);
            activeDot = index;
        } else if (index < activeDot) {
            setPositionLineSlider(
                widthItemSlideWithMargin * Math.abs(index - activeDot)
            );
            setAndRemoveActiveDot(index);
            activeDot = index;
        } else return;
    };
    dots.map((dot, ind) => {
        const active = ind == 0 ? "active" : "";
        const newDiv = document.createElement("div");
        newDiv.setAttribute("index", ind);
        newDiv.className = `dots_item-services_slider ${active}`;
        newDiv.addEventListener("click", sliderSwipe);
        arrayDots.push(newDiv);
        document.querySelector(".dots-services_slider").append(newDiv);
    });
}