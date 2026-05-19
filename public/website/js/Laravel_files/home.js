

        // HEADER JS START
    let currentPage = window.location.hash ? window.location.hash.substring(1) : 'home';
    
    function setActivePage(pageId) {
      document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
      });
      
      document.querySelectorAll('.dropdown-menu a').forEach(link => {
        link.classList.remove('active');
      });
      
      document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.classList.remove('active');
      });
      
      document.querySelectorAll('.mobile-submenu a').forEach(link => {
        link.classList.remove('active');
      });
      
      document.querySelectorAll(`.nav-link[data-page="${pageId}"]`).forEach(link => {
        link.classList.add('active');
      });
      
      document.querySelectorAll(`.dropdown-menu a[data-page="${pageId}"]`).forEach(link => {
        link.classList.add('active');
      });
      
      document.querySelectorAll(`.mobile-nav-link[data-page="${pageId}"]`).forEach(link => {
        link.classList.add('active');
      });
      
      document.querySelectorAll(`.mobile-submenu a[data-page="${pageId}"]`).forEach(link => {
        link.classList.add('active');
      });
      
      // Also handle parent dropdown buttons - expand if needed
      if (pageId === 'yacht-charter' || pageId === 'boatel') {
        const bookNowMenu = document.getElementById('bookNowMobile-menu');
        const bookNowIcon = document.getElementById('bookNowMobile-icon');
        if (bookNowMenu && !bookNowMenu.classList.contains('open')) {
          bookNowMenu.classList.add('open');
          if (bookNowIcon) bookNowIcon.classList.add('open');
        }
      }
      
      if (pageId === 'catamarans' || pageId === 'houseboats' || pageId === 'motorboats' || pageId === 'sailboats') {
        const boatTypesMenu = document.getElementById('boatTypesMobile-menu');
        const boatTypesIcon = document.getElementById('boatTypesMobile-icon');
        if (boatTypesMenu && !boatTypesMenu.classList.contains('open')) {
          boatTypesMenu.classList.add('open');
          if (boatTypesIcon) boatTypesIcon.classList.add('open');
        }
      }
    }
    
    // Handle clicks on any navigation link (desktop & mobile)
    function handleNavClick(e, pageId) {
      e.preventDefault();
      currentPage = pageId;
      window.location.hash = pageId;
      setActivePage(pageId);
      
      // Close mobile menu after click on mobile
      if (window.innerWidth < 1024 && mobileMenu && isMenuOpen) {
        setTimeout(() => {
          mobileMenu.style.maxHeight = '0';
          mobileMenu.style.opacity = '0';
          mobileMenu.style.visibility = 'hidden';
          if (mobileBtn) mobileBtn.innerHTML = '<i class="fas fa-bars text-xl"></i>';
          isMenuOpen = false;
        }, 150);
      }
    }
    
    document.querySelectorAll('.nav-link, .dropdown-menu a, .mobile-nav-link, .mobile-submenu a').forEach(link => {
      const pageId = link.getAttribute('data-page');
      if (pageId) {
        link.addEventListener('click', (e) => handleNavClick(e, pageId));
      }
    });
    
    // Language selection handling
    function handleLangClick(e, lang, langLabel) {
      e.preventDefault();
      const langButton = document.querySelector('.dropdown-group button .font-semibold');
      if (langButton) langButton.textContent = lang.toUpperCase();
      const mobileLangLabel = document.getElementById('selectedLangLabel');
      if (mobileLangLabel) mobileLangLabel.textContent = langLabel;
      
      // Remove active class from other language links
      document.querySelectorAll('[data-lang]').forEach(link => {
        link.classList.remove('active');
      });
      e.target.closest('[data-lang]').classList.add('active');
    }
    
    // Currency selection handling
    function handleCurrencyClick(e, currency, currencyLabel) {
      e.preventDefault();
      const currencyButton = document.querySelector('.dropdown-group .fa-coins')?.parentElement?.querySelector('.font-semibold');
      if (currencyButton) currencyButton.textContent = currency.toUpperCase();
      const mobileCurrencyLabel = document.getElementById('selectedCurrencyLabel');
      if (mobileCurrencyLabel) mobileCurrencyLabel.textContent = currencyLabel;
      
      document.querySelectorAll('[data-currency]').forEach(link => {
        link.classList.remove('active');
      });
      e.target.closest('[data-currency]').classList.add('active');
    }
    
    // Attach language click handlers
    document.querySelectorAll('[data-lang]').forEach(link => {
      link.addEventListener('click', (e) => {
        const lang = link.getAttribute('data-lang');
        const label = link.getAttribute('data-lang-label') || lang.toUpperCase();
        handleLangClick(e, lang, label);
      });
    });
    
    // Attach currency click handlers
    document.querySelectorAll('[data-currency]').forEach(link => {
      link.addEventListener('click', (e) => {
        const currency = link.getAttribute('data-currency');
        const label = link.getAttribute('data-currency-label') || currency.toUpperCase();
        handleCurrencyClick(e, currency, label);
      });
    });
    
    // Mobile menu toggle
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    let isMenuOpen = false;
    
    if (mobileBtn && mobileMenu) {
      mobileBtn.addEventListener('click', () => {
        isMenuOpen = !isMenuOpen;
        if (isMenuOpen) {
          mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
          mobileMenu.style.opacity = '1';
          mobileMenu.style.visibility = 'visible';
          mobileBtn.innerHTML = '<i class="fas fa-times text-xl"></i>';
        } else {
          mobileMenu.style.maxHeight = '0';
          mobileMenu.style.opacity = '0';
          mobileMenu.style.visibility = 'hidden';
          mobileBtn.innerHTML = '<i class="fas fa-bars text-xl"></i>';
        }
      });
    }
    
    // Mobile Dropdown Accordion Functionality
    function initMobileDropdowns() {
      const dropdownButtons = document.querySelectorAll('.mobile-dropdown-btn');
      
      dropdownButtons.forEach(button => {
        button.addEventListener('click', function(e) {
          e.stopPropagation();
          
          const dropdownId = this.getAttribute('data-dropdown');
          if (dropdownId) {
            const menu = document.getElementById(`${dropdownId}-menu`);
            const icon = document.getElementById(`${dropdownId}-icon`);
            
            if (menu && icon) {
              const isOpen = menu.classList.contains('open');
              
              document.querySelectorAll('.mobile-submenu').forEach(submenu => {
                if (submenu !== menu) {
                  submenu.classList.remove('open');
                }
              });
              document.querySelectorAll('.rotate-icon').forEach(ic => {
                if (ic !== icon) {
                  ic.classList.remove('open');
                }
              });
              
              if (!isOpen) {
                menu.classList.add('open');
                icon.classList.add('open');
              } else {
                menu.classList.remove('open');
                icon.classList.remove('open');
              }
              
              setTimeout(() => {
                if (isMenuOpen && mobileMenu) {
                  mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                }
              }, 50);
            }
          }
        });
      });
    }
    
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', () => {
        initMobileDropdowns();
        setActivePage(currentPage);
      });
    } else {
      initMobileDropdowns();
      setActivePage(currentPage);
    }
    
    window.addEventListener('hashchange', () => {
      currentPage = window.location.hash ? window.location.hash.substring(1) : 'home';
      setActivePage(currentPage);
    });

   // HEADER SECTION JS END====================

  // HERO SECTION JS START======================

   // Date Pickers 
    const startPicker = flatpickr("#startDate", {
      locale: "fr",
      dateFormat: "d/m/Y",
      minDate: "today",
      onChange: function(selectedDates) {
        if (selectedDates.length) {
          endPicker.set("minDate", selectedDates[0]);
        }
      }
    });

    const endPicker = flatpickr("#endDate", {
      locale: "fr",
      dateFormat: "d/m/Y",
      minDate: "today"
    });
// HERO SECTION JS END ====================

// REVIEWS SECTION JS START
 (function() {
            const wrapper = document.getElementById('reviewsWrapper');
            const leftBtn = document.getElementById('slideLeftBtn');
            const rightBtn = document.getElementById('slideRightBtn');
            const slides = document.querySelectorAll('.reviews-slide');
            const indicatorsContainer = document.getElementById('sliderIndicators');
            let currentIndex = 0;

            function getGapAndSlideWidth() {
                if (!wrapper || !slides.length) return { gap: 0, slideWidth: wrapper.clientWidth };
                const track = document.getElementById('reviewsTrack');
                const computedGap = window.getComputedStyle(track || wrapper).gap || '0px';
                let gap = parseInt(computedGap, 10);
                if (isNaN(gap)) gap = 0;
                const slideWidth = slides[0]?.clientWidth || wrapper.clientWidth;
                return { gap, slideWidth };
            }

            function getScrollPosition(index) {
                const { gap, slideWidth } = getGapAndSlideWidth();
                let totalOffset = 0;
                for (let i = 0; i < index; i++) {
                    totalOffset += slideWidth + gap;
                }
                return totalOffset;
            }

            function scrollToSlide(index, smooth = true) {
                if (!slides.length) return;
                const targetIndex = Math.min(Math.max(0, index), slides.length - 1);
                const scrollLeftValue = getScrollPosition(targetIndex);
                wrapper.scrollTo({
                    left: scrollLeftValue,
                    behavior: smooth ? 'smooth' : 'auto'
                });
                currentIndex = targetIndex;
                updateDots();
            }

            function updateDots() {
                if (!indicatorsContainer) return;
                const dots = document.querySelectorAll('.indicator');
                dots.forEach((dot, i) => {
                    if (i === currentIndex) {
                        dot.classList.add('!w-7', '!rounded-[10px]', '!bg-brand');
                        dot.classList.remove('!w-2');
                    } else {
                        dot.classList.remove('!w-7', '!rounded-[10px]', '!bg-brand');
                        dot.classList.add('!w-2');
                    }
                });
            }

            function rebuildIndicators() {
                if (!indicatorsContainer) return;
                indicatorsContainer.innerHTML = '';
                slides.forEach((_, i) => {
                    const dot = document.createElement('div');
                    dot.className = 'indicator w-2 h-2 rounded-full bg-gray-300 cursor-pointer transition-all duration-300';
                    if (i === currentIndex) dot.classList.add('!w-7', '!rounded-[10px]', '!bg-brand');
                    dot.onclick = (e) => {
                        e.stopPropagation();
                        scrollToSlide(i, true);
                    };
                    indicatorsContainer.appendChild(dot);
                });
                updateDots();
            }

            function onScrollHandler() {
                if (!wrapper || !slides.length) return;
                const scrollLeft = wrapper.scrollLeft;
                const { gap, slideWidth } = getGapAndSlideWidth();
                if (slideWidth === 0) return;
                let newIndex = Math.round(scrollLeft / (slideWidth + gap));
                newIndex = Math.min(Math.max(0, newIndex), slides.length - 1);
                if (newIndex !== currentIndex && newIndex >= 0 && newIndex < slides.length) {
                    currentIndex = newIndex;
                    updateDots();
                }
            }

            function initSlider() {
                rebuildIndicators();
                wrapper.addEventListener('scroll', onScrollHandler);
                leftBtn.onclick = () => {
                    if (currentIndex > 0) scrollToSlide(currentIndex - 1, true);
                };
                rightBtn.onclick = () => {
                    if (currentIndex < slides.length - 1) scrollToSlide(currentIndex + 1, true);
                };
                window.addEventListener('resize', () => scrollToSlide(currentIndex, false));
                scrollToSlide(0, false);
            }

            if (wrapper && slides.length) initSlider();
        })();

        // REVIEWS SECTION JS END 

  