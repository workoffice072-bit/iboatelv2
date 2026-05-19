//   ========================= yacht chater js start
(function () {

    const overlay = document.getElementById('yc_sidebarOverlay');
    const panel = document.getElementById('yc_sidebarPanel');
    const closeBtn = document.getElementById('yc_closeSidebar');
    const showAllBtn = document.getElementById('yc_showAllFilters');
    const desktopSidebar = document.querySelector('.yc-desktop-sidebar');
    const mobileContent = document.getElementById('yc_mobileSidebarContent');

    function byId(prefix, id) {
        return document.getElementById(prefix + id);
    }

    function openSidebar() {
        if (overlay) overlay.classList.add('active');
        if (panel) panel.classList.add('active');
        document.body.style.overflow = 'hidden';

        setTimeout(function () {
            refreshSliders('m_');
        }, 80);
    }

    function closeSidebar() {
        if (overlay) overlay.classList.remove('active');
        if (panel) panel.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (showAllBtn) showAllBtn.addEventListener('click', openSidebar);
    if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
    if (overlay) overlay.addEventListener('click', closeSidebar);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && panel && panel.classList.contains('active')) {
            closeSidebar();
        }
    });

    if (desktopSidebar && mobileContent) {
        const clonedSidebar = desktopSidebar.cloneNode(true);

        clonedSidebar.classList.remove('yc-desktop-sidebar');
        clonedSidebar.classList.add('yc-mobile-sidebar-clone');
        clonedSidebar.style.display = 'block';

        mobileContent.innerHTML = '';
        mobileContent.appendChild(clonedSidebar);

        clonedSidebar.querySelectorAll('[id]').forEach(function (el) {
            el.id = 'm_' + el.id;
        });
    }

    // PRICE + LENGTH SLIDERS
    function initBudgetSliders(prefix) {

        const priceSlider = $('#' + prefix + 'yc_price_range');
        const lengthSlider = $('#' + prefix + 'yc_length_range');

        if (priceSlider.length && !priceSlider.data('ycReady')) {

            priceSlider.slider({
                range: true,
                min: 0,
                max: 15000,
                values: [0, 15000],

                slide: function (e, ui) {
                    $('#' + prefix + 'yc_showPriceRange')
                        .html('€' + ui.values[0].toLocaleString() + ' - €' + ui.values[1].toLocaleString());
                }
            });

            priceSlider.data('ycReady', true);
        }

        if (lengthSlider.length && !lengthSlider.data('ycReady')) {

            lengthSlider.slider({
                range: true,
                min: 0,
                max: 60,
                values: [0, 60],

                slide: function (e, ui) {
                    $('#' + prefix + 'yc_showPriceRange1')
                        .html(ui.values[0] + ' - ' + ui.values[1] + ' m');
                }
            });

            lengthSlider.data('ycReady', true);
        }
    }

    function refreshSliders(prefix) {

        const priceSlider = $('#' + prefix + 'yc_price_range');
        const lengthSlider = $('#' + prefix + 'yc_length_range');

        if (priceSlider.length && priceSlider.data('ycReady')) {
            priceSlider.slider('values', priceSlider.slider('values'));
        }

        if (lengthSlider.length && lengthSlider.data('ycReady')) {
            lengthSlider.slider('values', lengthSlider.slider('values'));
        }
    }

    // COUNTER
    function setupCounter(prefix, minusId, plusId, hiddenId, displayId, minVal) {

        const minusBtn = byId(prefix, minusId);
        const plusBtn = byId(prefix, plusId);
        const hiddenInput = byId(prefix, hiddenId);
        const displaySpan = byId(prefix, displayId);

        if (!minusBtn || !plusBtn || !hiddenInput || !displaySpan) return;

        const update = function () {
            displaySpan.innerText = hiddenInput.value;
        };

        minusBtn.addEventListener('click', function (e) {

            e.preventDefault();

            let v = parseInt(hiddenInput.value, 10) || minVal;

            if (v > minVal) {
                hiddenInput.value = v - 1;
                update();
            }
        });

        plusBtn.addEventListener('click', function (e) {

            e.preventDefault();

            let v = parseInt(hiddenInput.value, 10) || minVal;

            hiddenInput.value = v + 1;

            update();
        });

        update();
    }

    // DATE PICKER
    function setupDatePicker(prefix) {

        const dateInput = byId(prefix, 'yc_date_range');

        if (!dateInput || dateInput._flatpickr) return;

        flatpickr(dateInput, {
            mode: 'range',
            dateFormat: 'd/m/Y',
            minDate: 'today',
            appendTo: panel && prefix === 'm_' ? panel : document.body
        });
    }

    // SEARCH BUTTON
    function setupSearchButton(prefix) {

        const searchBtn = byId(prefix, 'yc_searchBoatsBtn');

        if (!searchBtn) return;

        searchBtn.addEventListener('click', function (e) {

            e.preventDefault();

            const country =
                byId(prefix, 'yc_search_country')?.value || 'Any';

            const city =
                byId(prefix, 'yc_search_city')?.value || 'Any';

            alert('🔍 Searching yachts in ' + country + ', ' + city);

            closeSidebar();
        });
    }

    // MAIN
    function setupFilterGroup(prefix) {

        initBudgetSliders(prefix);

        setupCounter(
            prefix,
            'yc_peopleMinus',
            'yc_peoplePlus',
            'yc_peopleCount',
            'yc_peopleCountDisplay',
            1
        );

        setupCounter(
            prefix,
            'yc_cabinMinus',
            'yc_cabinPlus',
            'yc_cabinCount',
            'yc_cabinCountDisplay',
            0
        );

        setupDatePicker(prefix);

        setupSearchButton(prefix);
    }

    $(document).ready(function () {

        setupFilterGroup('');
        setupFilterGroup('m_');
    });

})();


//   ========================= yacht chater js end


//   ========================= yacht chater details pages js start

        let slideIndex = 1;
        let slides = [];

        flatpickr("#yachtbooking_dates", {
            mode: "range",
            dateFormat: "d/m/Y",
            minDate: "today",
        });

        function showSlides(n) {
            if (!slides || slides.length === 0) {
                slides = document.getElementsByClassName("yachtbooking-mySlides");
                if (!slides.length) return;
            }

            if (n > slides.length) slideIndex = 1;
            if (n < 1) slideIndex = slides.length;

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                slides[i].style.opacity = "0";
            }

            if (slides[slideIndex - 1]) {
                slides[slideIndex - 1].style.display = "block";
                slides[slideIndex - 1].style.opacity = "1";
            }
        }

        function plusSlides(n) {
            slideIndex += n;
            showSlides(slideIndex);
        }

        function openModal(id) {
            const modal = document.getElementById(id);

            if (!modal) return;

            modal.classList.remove("hidden");
            modal.classList.add("flex");
            document.body.classList.add("modal-open");

            if (id === "yachtbookingModal") {
                slides = document.getElementsByClassName("yachtbooking-mySlides");

                if (slides.length) {
                    showSlides(slideIndex);
                }
            }
        }

        function closeModal(id) {
            const modal = document.getElementById(id);

            if (!modal) return;

            modal.classList.add("hidden");
            modal.classList.remove("flex");
            document.body.classList.remove("modal-open");
        }

        document.querySelectorAll(".yachtbooking-main-img, .yachtbooking-side-img").forEach((el, idx) => {
            el.addEventListener("click", () => {
                let targetIndex = idx;

                if (targetIndex === 4) targetIndex = 4;

                slideIndex = targetIndex + 1;

                openModal("yachtbookingModal");

                setTimeout(() => {
                    slides = document.getElementsByClassName("yachtbooking-mySlides");

                    if (slides.length) {
                        showSlides(slideIndex);
                    }
                }, 50);
            });
        });

        document.getElementById("yachtbookingPrevBtn")?.addEventListener("click", function (e) {
            e.preventDefault();
            plusSlides(-1);
        });

        document.getElementById("yachtbookingNextBtn")?.addEventListener("click", function (e) {
            e.preventDefault();
            plusSlides(1);
        });

        document.addEventListener("click", function (e) {
            if (e.target.id === "yachtbookingModal") {
                closeModal("yachtbookingModal");
            }

            if (e.target.id === "yachtbookingAmenitiesModal") {
                closeModal("yachtbookingAmenitiesModal");
            }
        });

        document.addEventListener("keydown", function (e) {
            if (e.key === "Escape") {
                closeModal("yachtbookingModal");
                closeModal("yachtbookingAmenitiesModal");
            }
        });

        setTimeout(() => {
            slides = document.getElementsByClassName("yachtbooking-mySlides");
        }, 200);
 
//   ========================= yacht chater details pages js end