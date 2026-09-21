<header class="lp-navbar" id="lpNavbar">

    <div class="lp-nav-container">

        {{-- BRAND --}}
        <a href="{{ route('home') }}" class="lp-brand">
            <span class="lp-brand-mark">LP</span>

            <span class="lp-brand-text">
                <strong>Lakshman Pal</strong>
                <small>Software Developer</small>
            </span>
        </a>


        {{-- DESKTOP NAVIGATION --}}
        <nav class="lp-desktop-nav">

            <a href="{{ route('home') }}" class="lp-nav-link active">
                Home
            </a>

            <a href="{{ url('/#about') }}" class="lp-nav-link">
                About
            </a>

            <a href="{{ url('/#skills') }}" class="lp-nav-link">
                Skills
            </a>

            <a href="{{ url('/#experience') }}" class="lp-nav-link">
                Experience
            </a>

            <a href="{{ url('/#projects') }}" class="lp-nav-link">
                Projects
            </a>

            {{-- <a href="{{ url('/#contact') }}" class="lp-nav-link">
                Contact
            </a> --}}

        </nav>


        {{-- DESKTOP ACTIONS --}}
        <div class="lp-nav-actions">

            <a href="{{ asset('resume/Lakshman_Pal_CV.pdf') }}"
               class="lp-cv-button"
               download>

                <i class="fas fa-download"></i>

                <span>CV</span>

            </a>

            <a href="{{ route('hire-me') }}"
               class="lp-hire-button">

                <i class="fas fa-paper-plane"></i>

                <span>Hire Me</span>

            </a>

        </div>


        {{-- MOBILE BUTTON --}}
        <button type="button"
                class="lp-mobile-toggle"
                id="lpMobileToggle"
                aria-label="Open navigation">

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>

</header>

{{-- MOBILE MENU (kept outside <header> on purpose: the header uses
     backdrop-filter, which creates a containing block for
     position:fixed children and breaks their positioning) --}}
<div class="lp-mobile-menu" id="lpMobileMenu">

        <div class="lp-mobile-inner">

            <div class="lp-mobile-top">

                <div>
                    <span class="lp-mobile-title">Lakshman Pal</span>
                    <small>Software Developer</small>
                </div>

                <button type="button"
                        class="lp-mobile-close"
                        id="lpMobileClose">

                    <i class="fas fa-times"></i>

                </button>

            </div>


            <nav class="lp-mobile-nav">

                <a href="{{ route('home') }}">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>

                <a href="{{ url('/#about') }}">
                    <i class="fas fa-user"></i>
                    <span>About</span>
                </a>

                <a href="{{ url('/#skills') }}">
                    <i class="fas fa-code"></i>
                    <span>Skills</span>
                </a>

                <a href="{{ url('/#experience') }}">
                    <i class="fas fa-briefcase"></i>
                    <span>Experience</span>
                </a>

                <a href="{{ url('/#projects') }}">
                    <i class="fas fa-layer-group"></i>
                    <span>Projects</span>
                </a>

                <a href="{{ url('/#contact') }}">
                    <i class="fas fa-envelope"></i>
                    <span>Contact</span>
                </a>

            </nav>


            <div class="lp-mobile-actions">

                <a href="{{ route('hire-me') }}"
                   class="lp-mobile-hire">

                    <i class="fas fa-paper-plane"></i>

                    Hire Me

                </a>

                <a href="{{ asset('resume/Lakshman_Pal_CV.pdf') }}"
                   class="lp-mobile-cv"
                   download>

                    <i class="fas fa-download"></i>

                    Download CV

                </a>

            </div>

        </div>

    </div>


<style>

:root {
    --lp-nav-bg: rgba(4, 18, 34, 0.90);
    --lp-blue: #20b8ff;
    --lp-blue-light: #62d4ff;
    --lp-white: #f4f9ff;
    --lp-muted: #91a8bc;
    --lp-border: rgba(255,255,255,.09);
}


/* =====================================================
   NAVBAR
===================================================== */

.lp-navbar {

    position: fixed;

    top: 0;
    left: 0;

    width: 100%;

    height: 76px;

    z-index: 9999;

    background: var(--lp-nav-bg);

    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);

    border-bottom: 1px solid var(--lp-border);

    transition: .3s ease;
}


.lp-navbar.scrolled {

    background: rgba(3, 14, 27, .97);

    box-shadow:
        0 10px 40px rgba(0,0,0,.25);

}


/* =====================================================
   CONTAINER
===================================================== */

.lp-nav-container {

    width: min(1280px, calc(100% - 40px));

    height: 100%;

    margin: auto;

    display: flex;

    align-items: center;

    justify-content: space-between;

}


/* =====================================================
   BRAND
===================================================== */

.lp-brand {

    display: flex;

    align-items: center;

    gap: 12px;

    text-decoration: none !important;

}


.lp-brand-mark {

    width: 43px;
    height: 43px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 11px;

    background:
        linear-gradient(
            135deg,
            #20b8ff,
            #0876c9
        );

    color: #fff;

    font-size: 14px;

    font-weight: 900;

    box-shadow:
        0 8px 25px rgba(32,184,255,.25);

}


.lp-brand-text {

    display: flex;

    flex-direction: column;

    line-height: 1.1;

}


.lp-brand-text strong {

    color: var(--lp-white);

    font-size: 16px;

    font-weight: 750;

}


.lp-brand-text small {

    color: var(--lp-muted);

    font-size: 10px;

    margin-top: 4px;

}


/* =====================================================
   DESKTOP NAV
===================================================== */

.lp-desktop-nav {

    display: flex;

    align-items: center;

    gap: 6px;

}


.lp-nav-link {

    position: relative;

    padding: 10px 14px;

    color: #aebfd0;

    text-decoration: none !important;

    font-size: 13px;

    font-weight: 600;

    transition: .25s ease;

}


.lp-nav-link::after {

    content: "";

    position: absolute;

    left: 50%;
    bottom: 1px;

    width: 0;
    height: 2px;

    background: var(--lp-blue);

    transform: translateX(-50%);

    transition: .25s ease;

    border-radius: 10px;

}


.lp-nav-link:hover,
.lp-nav-link.active {

    color: #fff;

}


.lp-nav-link:hover::after,
.lp-nav-link.active::after {

    width: 25px;

}


/* =====================================================
   ACTIONS
===================================================== */

.lp-nav-actions {

    display: flex;

    align-items: center;

    gap: 9px;

}


.lp-cv-button,
.lp-hire-button {

    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 7px;

    min-height: 40px;

    padding: 0 15px;

    border-radius: 8px;

    text-decoration: none !important;

    font-size: 12px;

    font-weight: 700;

    transition: .25s ease;

}


.lp-cv-button {

    color: var(--lp-blue-light);

    border: 1px solid rgba(32,184,255,.35);

    background: rgba(32,184,255,.06);

}


.lp-cv-button:hover {

    color: #fff;

    background: rgba(32,184,255,.13);

    border-color: var(--lp-blue);

    transform: translateY(-2px);

}


.lp-hire-button {

    color: #031522;

    background: var(--lp-blue);

    border: 1px solid var(--lp-blue);

}


.lp-hire-button:hover {

    color: #031522;

    background: var(--lp-blue-light);

    transform: translateY(-2px);

    box-shadow:
        0 10px 25px rgba(32,184,255,.25);

}


/* =====================================================
   MOBILE TOGGLE
===================================================== */

.lp-mobile-toggle {

    display: none;

    width: 43px;
    height: 43px;

    padding: 0;

    border: 1px solid rgba(32,184,255,.25);

    border-radius: 9px;

    background: rgba(32,184,255,.06);

    cursor: pointer;

    align-items: center;
    justify-content: center;

    flex-direction: column;

    gap: 5px;

}


.lp-mobile-toggle span {

    width: 22px;
    height: 2px;

    background: var(--lp-blue-light);

    border-radius: 5px;

    transition: .25s ease;

}


/* =====================================================
   MOBILE MENU
===================================================== */

.lp-mobile-menu {

    display: none;

    position: fixed;

    z-index: 9998;

    inset: 76px 0 0 0;

    background:
        linear-gradient(
            145deg,
            rgba(3,16,31,.98),
            rgba(5,27,48,.98)
        );

    backdrop-filter: blur(20px);

    overflow-y: auto;

}


.lp-mobile-menu.active {

    display: block;

}


.lp-mobile-inner {

    width: min(600px, calc(100% - 35px));

    margin: auto;

    padding: 25px 0 40px;

}


.lp-mobile-top {

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding-bottom: 25px;

    border-bottom: 1px solid var(--lp-border);

}


.lp-mobile-title {

    display: block;

    color: #fff;

    font-size: 18px;

    font-weight: 800;

}


.lp-mobile-top small {

    display: block;

    color: var(--lp-muted);

    margin-top: 5px;

    font-size: 11px;

}


.lp-mobile-close {

    width: 42px;
    height: 42px;

    border-radius: 9px;

    border: 1px solid var(--lp-border);

    background: rgba(255,255,255,.04);

    color: #fff;

    cursor: pointer;

    font-size: 18px;

}


.lp-mobile-nav {

    padding: 25px 0;

}


.lp-mobile-nav a {

    display: flex;

    align-items: center;

    gap: 14px;

    padding: 16px 15px;

    margin-bottom: 7px;

    border-radius: 10px;

    color: #c7d6e3;

    text-decoration: none !important;

    border: 1px solid transparent;

    transition: .25s ease;

}


.lp-mobile-nav a i {

    width: 22px;

    color: var(--lp-blue);

}


.lp-mobile-nav a:hover {

    color: #fff;

    background: rgba(32,184,255,.07);

    border-color: rgba(32,184,255,.15);

    transform: translateX(4px);

}


.lp-mobile-actions {

    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 10px;

}


.lp-mobile-hire,
.lp-mobile-cv {

    min-height: 50px;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    border-radius: 9px;

    text-decoration: none !important;

    font-size: 13px;

    font-weight: 700;

}


.lp-mobile-hire {

    color: #031522;

    background: var(--lp-blue);

}


.lp-mobile-cv {

    color: var(--lp-blue-light);

    border: 1px solid rgba(32,184,255,.3);

    background: rgba(32,184,255,.06);

}


/* =====================================================
   TABLET
===================================================== */

@media (max-width: 1050px) {

    .lp-desktop-nav {

        gap: 0;

    }

    .lp-nav-link {

        padding-left: 9px;
        padding-right: 9px;

        font-size: 12px;

    }

}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 850px) {

    .lp-navbar {

        height: 68px;

    }

    .lp-nav-container {

        width: calc(100% - 30px);

    }

    .lp-desktop-nav,
    .lp-nav-actions {

        display: none;

    }

    .lp-mobile-toggle {

        display: flex;

    }

    .lp-mobile-menu {

        inset: 68px 0 0 0;

    }

}


@media (max-width: 480px) {

    .lp-brand-mark {

        width: 39px;
        height: 39px;

        font-size: 12px;

    }

    .lp-brand-text strong {

        font-size: 14px;

    }

    .lp-brand-text small {

        font-size: 9px;

    }

    .lp-mobile-actions {

        grid-template-columns: 1fr;

    }

}

</style>


<script>

document.addEventListener('DOMContentLoaded', function () {

    const navbar = document.getElementById('lpNavbar');

    const toggle = document.getElementById('lpMobileToggle');

    const menu = document.getElementById('lpMobileMenu');

    const close = document.getElementById('lpMobileClose');


    /* Navbar scroll */

    function handleNavbarScroll() {

        if (window.scrollY > 30) {

            navbar.classList.add('scrolled');

        } else {

            navbar.classList.remove('scrolled');

        }

    }

    window.addEventListener(
        'scroll',
        handleNavbarScroll,
        { passive: true }
    );

    handleNavbarScroll();


    /* Mobile menu */

    function openMenu() {

        menu.classList.add('active');

        document.body.style.overflow = 'hidden';

    }


    function closeMenu() {

        menu.classList.remove('active');

        document.body.style.overflow = '';

    }


    toggle.addEventListener('click', function () {

        if (menu.classList.contains('active')) {

            closeMenu();

        } else {

            openMenu();

        }

    });


    close.addEventListener('click', closeMenu);


    /* Close after clicking link */

    menu.querySelectorAll('a').forEach(function (link) {

        link.addEventListener('click', function () {

            closeMenu();

        });

    });


    /* ESC */

    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {

            closeMenu();

        }

    });


    /* Active navigation */

    const sections = document.querySelectorAll(
        'section[id]'
    );

    const navLinks = document.querySelectorAll(
        '.lp-nav-link'
    );


    window.addEventListener('scroll', function () {

        let current = '';

        sections.forEach(function (section) {

            const top = section.offsetTop - 130;

            if (window.scrollY >= top) {

                current = section.getAttribute('id');

            }

        });


        navLinks.forEach(function (link) {

            link.classList.remove('active');

            const href = link.getAttribute('href');

            if (
                current &&
                href &&
                href.includes('#' + current)
            ) {

                link.classList.add('active');

            }

        });

    });

});

</script>