// Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
        
        // Add hover effects
        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
        
        // Current language (default: French)
        let currentLang = 'fr';

        // Current theme (default: light)
        let currentTheme = 'light';

        // Language toggle function
        function toggleLanguage() {
            currentLang = currentLang === 'fr' ? 'en' : 'fr';
            updateLanguage();
        }

        function updateLanguage() {
            const elements = document.querySelectorAll('[data-fr][data-en]');
            elements.forEach(element => {
                element.textContent = element.getAttribute(`data-${currentLang}`);
            });
            
            // Update language button text
            document.getElementById('lang-text').textContent = currentLang === 'fr' ? 'EN' : 'FR';
            
            // Update page language attribute
            document.documentElement.lang = currentLang;
        }

        // Theme toggle function
        function toggleTheme() {
            currentTheme = currentTheme === 'light' ? 'dark' : 'light';
            updateTheme();
        }

        function updateTheme() {
            if (currentTheme === 'dark') {
                document.documentElement.setAttribute('data-theme', 'dark');
                document.getElementById('theme-icon').className = 'bi bi-sun';
            } else {
                document.documentElement.removeAttribute('data-theme');
                document.getElementById('theme-icon').className = 'bi bi-moon-stars';
            }
            
            // Store theme preference
            localStorage.setItem('theme', currentTheme);
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.offsetTop;
                    const offsetPosition = elementPosition - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse.classList.contains('show')) {
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                        bsCollapse.hide();
                    }
                }
            });
        });

        // Update active navigation link on scroll
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.clientHeight;
                if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Contact form submission (AJAX)
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const formData = new FormData(form);
            const messageBox = document.getElementById('form-message');
            messageBox.textContent = '';
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    messageBox.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                    form.reset();
                } else {
                    messageBox.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
                }
            })
            .catch(() => {
                messageBox.innerHTML = `<div class="alert alert-danger">${currentLang === 'fr' ? "Erreur lors de l'envoi du message." : "Error sending message."}</div>`;
            });
        });

        // Initialize theme from localStorage
        document.addEventListener('DOMContentLoaded', function() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                currentTheme = savedTheme;
                updateTheme();
            }
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'var(--card-bg)';
                navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
            } else {
                navbar.style.backgroundColor = 'var(--bg-color)';
                navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.05)';
            }
        });
