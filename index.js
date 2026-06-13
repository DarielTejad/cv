/* ========================================
   CUSTOM CURSOR
======================================== */
(function initCursor() {
    const dot = document.createElement('div');
    const ring = document.createElement('div');
    dot.className = 'cursor-dot';
    ring.className = 'cursor-ring';
    document.body.appendChild(dot);
    document.body.appendChild(ring);

    let mouseX = 0, mouseY = 0;
    let ringX = 0, ringY = 0;
    let raf;

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        dot.style.left = mouseX + 'px';
        dot.style.top = mouseY + 'px';
    });

    function animateRing() {
        ringX += (mouseX - ringX) * 0.12;
        ringY += (mouseY - ringY) * 0.12;
        ring.style.left = ringX + 'px';
        ring.style.top = ringY + 'px';
        raf = requestAnimationFrame(animateRing);
    }
    animateRing();

    const hoverEls = document.querySelectorAll('a, button, .project-card, .skill-card, .stat-item, .contact-item, .filter-btn');
    hoverEls.forEach(el => {
        el.addEventListener('mouseenter', () => {
            ring.style.width = '52px';
            ring.style.height = '52px';
            ring.style.borderColor = 'rgba(94, 234, 212, 0.7)';
            dot.style.transform = 'translate(-50%, -50%) scale(0)';
        });
        el.addEventListener('mouseleave', () => {
            ring.style.width = '32px';
            ring.style.height = '32px';
            ring.style.borderColor = 'rgba(94, 234, 212, 0.4)';
            dot.style.transform = 'translate(-50%, -50%) scale(1)';
        });
    });

    document.addEventListener('mouseleave', () => {
        dot.style.opacity = '0';
        ring.style.opacity = '0';
    });
    document.addEventListener('mouseenter', () => {
        dot.style.opacity = '1';
        ring.style.opacity = '1';
    });
})();

/* ========================================
   PARTICLES
======================================== */
(function createParticles() {
    const container = document.getElementById('particles');
    const count = window.innerWidth > 768 ? 50 : 25;
    const colors = ['rgba(94,234,212,', 'rgba(167,139,250,', 'rgba(249,115,22,'];
    for (let i = 0; i < count; i++) {
        const p = document.createElement('div');
        p.classList.add('particle');
        const size = Math.random() * 3 + 1;
        const color = colors[Math.floor(Math.random() * colors.length)];
        const opacity = Math.random() * 0.5 + 0.2;
        p.style.cssText = `
            left: ${Math.random() * 100}%;
            width: ${size}px; height: ${size}px;
            background: ${color}${opacity});
            animation-delay: ${Math.random() * 25}s;
            animation-duration: ${20 + Math.random() * 18}s;
        `;
        container.appendChild(p);
    }
})();

/* ========================================
   ROLE TYPEWRITER
======================================== */
(function roleTypewriter() {
    const el = document.getElementById('roleText');
    if (!el) return;
    const roles = [
        'Desarrollador Web',
        'MC Network Founder',
        'Server Developer',
        'Technical Support',
        'Linux Administrator'
    ];
    let roleIndex = 0, charIndex = 0, isDeleting = false, delay = 110;

    function tick() {
        const role = roles[roleIndex];
        if (isDeleting) {
            el.textContent = role.substring(0, charIndex - 1);
            charIndex--;
            delay = 55;
        } else {
            el.textContent = role.substring(0, charIndex + 1);
            charIndex++;
            delay = 110;
        }
        if (!isDeleting && charIndex === role.length) { delay = 2200; isDeleting = true; }
        else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            roleIndex = (roleIndex + 1) % roles.length;
            delay = 450;
        }
        setTimeout(tick, delay);
    }
    setTimeout(tick, 900);
})();

/* ========================================
   NAV DATA-TEXT ATTRIBUTE (for fill effect)
======================================== */
document.querySelectorAll('#mainNav a').forEach(a => {
    a.setAttribute('data-text', a.textContent);
});

/* ========================================
   MOBILE MENU
======================================== */
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mainNav = document.getElementById('mainNav');

mobileMenuBtn.addEventListener('click', () => {
    const isOpen = mainNav.classList.toggle('active');
    mobileMenuBtn.classList.toggle('active');
    document.body.style.overflow = isOpen ? 'hidden' : '';
});

document.querySelectorAll('#mainNav a').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenuBtn.classList.remove('active');
        mainNav.classList.remove('active');
        document.body.style.overflow = '';
    });
});

/* ========================================
   HEADER SCROLL
======================================== */
const header = document.getElementById('header');
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const current = window.scrollY;
    header.classList.toggle('scrolled', current > 60);
    lastScroll = current;
}, { passive: true });

/* ========================================
   SMOOTH SCROLL
======================================== */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offset = 90;
            window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - offset, behavior: 'smooth' });
        }
    });
});

/* ========================================
   ACTIVE NAV ON SCROLL
======================================== */
(function initActiveNav() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('#mainNav a[href^="#"]');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navLinks.forEach(link => {
                    link.classList.toggle('active', link.getAttribute('href') === '#' + id);
                });
            }
        });
    }, { threshold: 0.35, rootMargin: '-80px 0px -40% 0px' });

    sections.forEach(s => observer.observe(s));
})();

/* ========================================
   REVEAL ON SCROLL
======================================== */
const revealEls = document.querySelectorAll('.reveal-left, .reveal-right, .reveal-up');
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

revealEls.forEach(el => revealObserver.observe(el));

/* ========================================
   STATS COUNTER (with easing)
======================================== */
(function initStats() {
    const statItems = document.querySelectorAll('.stat-item');
    let done = false;

    const obs = new IntersectionObserver((entries) => {
        if (entries.some(e => e.isIntersecting) && !done) {
            done = true;
            statItems.forEach(item => {
                const target = parseInt(item.dataset.count);
                const numEl = item.querySelector('.stat-number');
                const duration = 1600;
                const start = performance.now();

                function easeOut(t) { return 1 - Math.pow(1 - t, 3); }

                function update(now) {
                    const elapsed = now - start;
                    const progress = Math.min(elapsed / duration, 1);
                    numEl.textContent = Math.round(easeOut(progress) * target);
                    if (progress < 1) requestAnimationFrame(update);
                }
                requestAnimationFrame(update);
            });
        }
    }, { threshold: 0.4 });

    statItems.forEach(item => obs.observe(item));
})();

/* ========================================
   PROJECT FILTER (with animation)
======================================== */
(function initFilter() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;
            let visibleIndex = 0;

            projectCards.forEach(card => {
                const show = filter === 'all' || card.dataset.category === filter;
                if (show) {
                    card.classList.remove('hidden');
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(24px)';
                    const delay = visibleIndex * 60;
                    setTimeout(() => {
                        card.style.transition = 'opacity 0.4s ease, transform 0.4s ease, border-color 0.35s ease, box-shadow 0.35s ease';
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, delay);
                    visibleIndex++;
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });
})();

/* ========================================
   MAGNETIC BUTTONS
======================================== */
(function initMagneticButtons() {
    const btns = document.querySelectorAll('.btn');
    btns.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            const strength = 0.25;
            btn.style.transform = `translate(${x * strength}px, ${y * strength - 3}px)`;
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = '';
        });
    });
})();

/* ========================================
   TILT EFFECT ON CARDS
======================================== */
(function initTilt() {
    const cards = document.querySelectorAll('.project-card, .skill-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            card.style.transform = `translateY(-7px) rotateX(${-y * 4}deg) rotateY(${x * 4}deg)`;
            card.style.transformStyle = 'preserve-3d';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
            card.style.transformStyle = '';
        });
    });
})();

/* ========================================
   GLITCH EFFECT ON LOGO (hover)
======================================== */
(function initLogoGlitch() {
    const logo = document.querySelector('.logo');
    if (!logo) return;
    let glitching = false;

    logo.addEventListener('mouseenter', () => {
        if (glitching) return;
        glitching = true;
        let count = 0;
        const chars = '!@#$%^&*{}[]|/\\<>';
        const logoName = logo.querySelector('.logo-name');
        const original = logoName.textContent;
        const interval = setInterval(() => {
            logoName.textContent = original.split('').map(c =>
                Math.random() > 0.6 ? chars[Math.floor(Math.random() * chars.length)] : c
            ).join('');
            if (++count > 6) {
                clearInterval(interval);
                logoName.textContent = original;
                glitching = false;
            }
        }, 60);
    });
})();

/* ========================================
   CONTACT FORM
======================================== */
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const h = contactForm.offsetHeight;
        contactForm.style.minHeight = h + 'px';
        contactForm.innerHTML = `
            <div class="form-success">
                <div class="success-icon">
                    <i class="fas fa-check"></i>
                </div>
                <h3>¡Mensaje enviado!</h3>
                <p>Gracias por contactarme. Te respondo lo antes posible.</p>
            </div>
        `;
    });
}

/* ========================================
   SMOOTH SECTION ENTRANCE GRADIENT
======================================== */
(function initSectionGlow() {
    const sections = document.querySelectorAll('section');
    const glow = document.querySelector('.bg-glow');
    if (!glow) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id;
                if (id === 'projects') {
                    glow.style.transition = 'opacity 1.2s ease';
                } else if (id === 'skills') {
                    glow.style.transition = 'opacity 1.2s ease';
                }
            }
        });
    }, { threshold: 0.2 });

    sections.forEach(s => observer.observe(s));
})();