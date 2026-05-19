// --------------------------------------------------
// 1. SIDEBAR TOGGLE FOR MOBILE DEVICES START
// --------------------------------------------------
    
    const menuToggle = document.getElementById('od-menuToggle');
    const sidebar = document.getElementById('od-sidebar');
    const overlay = document.getElementById('od-sidebarOverlay');
    const menuIcon = document.getElementById('od-menuIcon');

    if (menuToggle) {

        menuToggle.addEventListener('click', () => {

            sidebar.classList.toggle('od-open');
            overlay.classList.toggle('hidden');

            const isOpen = sidebar.classList.contains('od-open');

            document.body.style.overflow = isOpen ? 'hidden' : '';

            // icon change
            if (isOpen) {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-times');
            } else {
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
            }

        });

    }

    if (overlay) {

        overlay.addEventListener('click', () => {

            sidebar.classList.remove('od-open');
            overlay.classList.add('hidden');
            document.body.style.overflow = '';

            // reset icon
            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');

        });

    }

    window.addEventListener('resize', () => {

        if (window.innerWidth >= 1024) {

            sidebar.classList.remove('od-open');

            if (overlay) overlay.classList.add('hidden');

            document.body.style.overflow = '';

            // reset icon
            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');

        }

    });


// Sidebar active state
       
document.addEventListener("DOMContentLoaded", function () {

    let currentPage = window.location.pathname.split("/").pop();

    const navItems = document.querySelectorAll(".od-nav-item");

    navItems.forEach(item => {

        const link = item.querySelector("a");

        if (link) {

            let linkPage = link.getAttribute("href").split("/").pop();

            item.classList.remove("od-active");

            if (linkPage === currentPage) {
                item.classList.add("od-active");
            }
        }
    });

});

        
        // const navItems = document.querySelectorAll('.od-nav-item[data-nav]');
        
        // function removeAllActive() {
        //     document.querySelectorAll('.od-nav-item').forEach(item => {
        //         item.classList.remove('od-active');
        //     });
        // }
        
        // navItems.forEach(item => {
        //     item.addEventListener('click', function(e) {
        //         e.stopPropagation();
        //         removeAllActive();
        //         this.classList.add('od-active');
        //     });
        // });

        // Register Boat Dropdown
        const dropdownContainer = document.getElementById('od-registerBoatDropdown');
        const dropdownBtn = document.getElementById('od-registerBoatBtn');
        const chevron = document.getElementById('od-dropdownChevron');
        
        if (dropdownBtn && dropdownContainer) {
            dropdownBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                dropdownContainer.classList.toggle('od-open');
                if (chevron) {
                    chevron.style.transform = dropdownContainer.classList.contains('od-open') ? 'rotate(180deg)' : 'rotate(0deg)';
                }
            });
            document.addEventListener('click', (event) => {
                if (!dropdownContainer.contains(event.target)) {
                    dropdownContainer.classList.remove('od-open');
                    if (chevron) chevron.style.transform = 'rotate(0deg)';
                }
            });
        }
   

// --------------------------------------------------
// 1. SIDEBAR TOGGLE FOR MOBILE DEVICES End 
// --------------------------------------------------


// --------------------------------------------------
// 1. YACHT CHATER START
// --------------------------------------------------

        // Flatpickr for Multiple Date Selection
        flatpickr("#yacht-unavailableDates", {
            mode: "multiple",
            dateFormat: "d/m/Y",
            minDate: "today",
            placeholder: "Select multiple dates",
            allowInput: false
        });

        // Partner Details - Show only when "Someone Proposed Me" selected
        const supportSelect = document.getElementById('yacht-supportSelect');
        const partnerRow = document.getElementById('yacht-partnerRow');

        if (supportSelect) {
            supportSelect.addEventListener('change', function() {
                if (this.value === '1') {
                    partnerRow.classList.add('yacht-show');
                } else {
                    partnerRow.classList.remove('yacht-show');
                }
            });
        }

        // New Period Row - Show only when "Add New Period" selected
        const timeDuration = document.getElementById('yacht-timeDuration');
        const newPeriodRow = document.getElementById('yacht-newPeriodRow');

        if (timeDuration) {
            timeDuration.addEventListener('change', function() {
                if (this.value === 'add_new') {
                    newPeriodRow.classList.add('yacht-show');
                } else {
                    newPeriodRow.classList.remove('yacht-show');
                }
            });
        }

        // Image Preview with Delete Option
        let imageFiles = [];
        const fileInput = document.getElementById('yacht-fileInput');
        const imagePreview = document.getElementById('yacht-imagePreview');

        function updateImagePreview() {
            imagePreview.innerHTML = '';
            imageFiles.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const div = document.createElement('div');
                    div.className = 'yacht-image-preview-item';
                    div.innerHTML = `
                        <img src="${event.target.result}" alt="Preview">
                        <div class="yacht-image-delete" data-index="${index}">
                            <i class="fas fa-times"></i>
                        </div>
                    `;
                    imagePreview.appendChild(div);

                    div.querySelector('.yacht-image-delete').addEventListener('click', function(e) {
                        e.stopPropagation();
                        imageFiles.splice(index, 1);
                        updateImagePreview();
                    });
                };
                reader.readAsDataURL(file);
            });
        }

        if (fileInput) {
            fileInput.addEventListener('change', function(e) {
                const newFiles = Array.from(e.target.files);
                imageFiles.push(...newFiles);
                updateImagePreview();
                fileInput.value = '';
            });
        }

        // Insurance File Name Display
        const insuranceInput = document.getElementById('yacht-insurance');
        const insuranceName = document.getElementById('yacht-insuranceName');
        if (insuranceInput) {
            insuranceInput.addEventListener('change', function(e) {
                if (e.target.files[0]) {
                    insuranceName.textContent = e.target.files[0].name;
                } else {
                    insuranceName.textContent = '';
                }
            });
        }
// --------------------------------------------------
//  YACHT CHATER END
// --------------------------------------------------

// --------------------------------------------------
//  SLEEP AND BOAT START 
// --------------------------------------------------

        
        // Flatpickr for Multiple Date Selection
        flatpickr("#sleepandboat-unavailableDates", {
            mode: "multiple",
            dateFormat: "d/m/Y",
            minDate: "today",
            placeholder: "Select multiple dates",
            allowInput: false
        });

        // Partner Details - Show only when "Someone Proposed Me" selected
        const sleepandboatSupportSelect = document.getElementById('sleepandboat-supportSelect');
        const sleepandboatPartnerRow = document.getElementById('sleepandboat-partnerRow');

        if (sleepandboatSupportSelect) {
            sleepandboatSupportSelect.addEventListener('change', function() {
                if (this.value === '1') {
                    sleepandboatPartnerRow.classList.add('sleepandboat-show');
                } else {
                    sleepandboatPartnerRow.classList.remove('sleepandboat-show');
                }
            });
        }

        // New Period Row - Show only when "Add New Period" selected
        const sleepandboatTimeDuration = document.getElementById('sleepandboat-timeDuration');
        const sleepandboatNewPeriodRow = document.getElementById('sleepandboat-newPeriodRow');

        if (sleepandboatTimeDuration) {
            sleepandboatTimeDuration.addEventListener('change', function() {
                if (this.value === 'add_new') {
                    sleepandboatNewPeriodRow.classList.add('sleepandboat-show');
                } else {
                    sleepandboatNewPeriodRow.classList.remove('sleepandboat-show');
                }
            });
        }

        // Image Preview with Delete Option
        let sleepandboatImageFiles = [];
        const sleepandboatFileInput = document.getElementById('sleepandboat-fileInput');
        const sleepandboatImagePreview = document.getElementById('sleepandboat-imagePreview');

        function sleepandboatUpdateImagePreview() {
            sleepandboatImagePreview.innerHTML = '';
            sleepandboatImageFiles.forEach((file, index) => {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const div = document.createElement('div');
                    div.className = 'sleepandboat-image-preview-item';
                    div.innerHTML = `
                        <img src="${event.target.result}" alt="Preview">
                        <div class="sleepandboat-image-delete" data-index="${index}">
                            <i class="fas fa-times"></i>
                        </div>
                    `;
                    sleepandboatImagePreview.appendChild(div);

                    div.querySelector('.sleepandboat-image-delete').addEventListener('click', function(e) {
                        e.stopPropagation();
                        sleepandboatImageFiles.splice(index, 1);
                        sleepandboatUpdateImagePreview();
                    });
                };
                reader.readAsDataURL(file);
            });
        }

        if (sleepandboatFileInput) {
            sleepandboatFileInput.addEventListener('change', function(e) {
                const newFiles = Array.from(e.target.files);
                sleepandboatImageFiles.push(...newFiles);
                sleepandboatUpdateImagePreview();
                sleepandboatFileInput.value = '';
            });
        }

        // Insurance File Name Display
        const sleepandboatInsuranceInput = document.getElementById('sleepandboat-insurance');
        const sleepandboatInsuranceName = document.getElementById('sleepandboat-insuranceName');
        if (sleepandboatInsuranceInput) {
            sleepandboatInsuranceInput.addEventListener('change', function(e) {
                if (e.target.files[0]) {
                    sleepandboatInsuranceName.textContent = e.target.files[0].name;
                } else {
                    sleepandboatInsuranceName.textContent = '';
                }
            });
        }


// --------------------------------------------------
//  SLEEP AND BOAT END 
// --------------------------------------------------


// --------------------------------------------------
//  BOATS START 
// --------------------------------------------------
        const searchInput = document.getElementById('bmt-searchInput');
        const tableRows = document.querySelectorAll('#bmt-boatsTableBody tr');
        
        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                tableRows.forEach(row => {
                    const title = row.cells[1]?.innerText.toLowerCase() || '';
                    const type = row.cells[4]?.innerText.toLowerCase() || '';
                    if (title.includes(searchTerm) || type.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        }
   // --------------------------------------------------
//  BOATS END 
// --------------------------------------------------


// --------------------------------------------------
//  EDIT PROFILE START 
// --------------------------------------------------

        function previewProfileImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('ep-profilePreview').src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }


// --------------------------------------------------
//  EDIT PROFILE END 
// --------------------------------------------------

// --------------------------------------------------
//  CHANGE PASSWORD START 
// --------------------------------------------------

        // Toggle Password Visibility
        function togglePasswordOwner(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }

        