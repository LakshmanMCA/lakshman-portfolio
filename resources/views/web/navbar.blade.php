<!-- Add this in your layout file or before the closing </head> tag -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<header>
  <!-- Main Navigation Container -->
  <div class="nav-container">
    
    <!-- Logo/Brand -->
    <div class="nav-brand">
      <a href="{{ route('home') }}" class="nav-link">
        <span class="logo-text">Lakshman Pal</span>
      </a>
      {{-- <span class="logo-name">Pal</span> --}}
    </div>

    <!-- Desktop Navigation -->
    <nav class="desktop-nav">
      <ul class="nav-list">
        <li class="nav-item">
          <a href="{{ url('/') }}" class="nav-link">
            <i class="fas fa-home nav-icon"></i>
            <span class="nav-text">Home</span>
          </a>
          <div class="nav-highlight"></div>
        </li>
        <li class="nav-item">
          <a href="{{ route('about') }}" class="nav-link">
            <i class="fas fa-user nav-icon"></i>
            <span class="nav-text">About</span>
          </a>
          <div class="nav-highlight"></div>
        </li>
        <li class="nav-item">
          <a href="{{ url('/#skills') }}" class="nav-link">
            <i class="fas fa-cogs nav-icon"></i>
            <span class="nav-text">Skills</span>
          </a>
          <div class="nav-highlight"></div>
        </li>
        {{-- <li class="nav-item">
          <a href="{{ url('/services') }}" class="nav-link">
            <i class="fas fa-concierge-bell nav-icon"></i>
            <span class="nav-text">Services</span>
          </a>
          <div class="nav-highlight"></div>
        </li> --}}
        {{-- <li class="nav-item">
          <a href="{{ url('/portfolio') }}" class="nav-link">
            <i class="fas fa-briefcase nav-icon"></i>
            <span class="nav-text">Portfolio</span>
          </a>
          <div class="nav-highlight"></div>
        </li>
        <li class="nav-item">
          <a href="{{ url('/career') }}" class="nav-link">
            <i class="fas fa-chart-line nav-icon"></i>
            <span class="nav-text">Career</span>
          </a>
          <div class="nav-highlight"></div>
        </li> --}}
      </ul>
    </nav>

    <!-- Action Buttons -->
    <div class="nav-actions">
      <!-- Hire Me Button -->
      <a href="{{ route('hire-me') }}" class="hire-btn">
        <i class="fas fa-paper-plane hire-icon"></i>
        <span class="hire-text">Hire Me</span>
      </a>
      
      <!-- Download CV Button -->
      {{-- <a href="#" class="cv-btn">
        <i class="fas fa-download cv-icon"></i>
        <span class="cv-text">Download CV</span>
      </a> --}}
    </div>

    <!-- Mobile Menu Toggle - NOW ON RIGHT SIDE -->
    <button class="mobile-toggle" aria-label="Toggle navigation">
      <span class="hamburger-icon">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </span>
      <span class="close-icon">
        <i class="fas fa-times"></i>
      </span>
    </button>
  </div>

  <!-- Mobile Navigation Overlay -->
  <div class="mobile-overlay">
    <div class="mobile-nav">
      {{-- <div class="mobile-header"> --}}
        {{-- <div class="mobile-brand">
          <span class="logo-text">Lakshman</span>
          <span class="logo-name">Pal</span>
        </div> --}}
        {{-- <button class="close-menu-btn" aria-label="Close menu"> --}}
          {{-- <i class="fas fa-times"></i> --}}
        {{-- </button> --}}
      {{-- </div> --}}
      <ul class="mobile-list">
        <li class="mobile-item">
          <a href="{{ url('/') }}" class="mobile-link">
            <i class="fas fa-home mobile-icon"></i>
            <span class="mobile-text">Home</span>
          </a>
        </li>
        <li class="mobile-item">
          <a href="{{ route('about') }}" class="mobile-link">
            <i class="fas fa-user mobile-icon"></i>
            <span class="mobile-text">About</span>
          </a>
        </li>
        <li class="mobile-item">
          <a href="{{ url('/#skills') }}" class="mobile-link">
            <i class="fas fa-cogs mobile-icon"></i>
            <span class="mobile-text">Skills</span>
          </a>
        </li>
        {{-- <li class="mobile-item">
          <a href="{{ url('/services') }}" class="mobile-link">
            <i class="fas fa-concierge-bell mobile-icon"></i>
            <span class="mobile-text">Services</span>
          </a>
        </li>
        <li class="mobile-item">
          <a href="{{ url('/portfolio') }}" class="mobile-link">
            <i class="fas fa-briefcase mobile-icon"></i>
            <span class="mobile-text">Portfolio</span>
          </a>
        </li> --}}
        {{-- <li class="mobile-item">
          <a href="{{ url('/career') }}" class="mobile-link">
            <i class="fas fa-chart-line mobile-icon"></i>
            <span class="mobile-text">Career</span>
          </a>
        </li> --}}
      </ul>
      <div class="mobile-actions">
        <a href="mailto:hire@lakshman.dev" class="mobile-hire-btn">
          <i class="fas fa-paper-plane"></i>
          <span>Hire Me</span>
        </a>
        <a href="#" class="mobile-cv-btn">
          <i class="fas fa-download"></i>
          <span>Download CV</span>
        </a>
      </div>
    </div>
  </div>
</header>

<style>
/* =========================================================
   NAVBAR VARIABLES
========================================================= */

:root {
    --primary: #00b8ff;
    --primary-dark: #0086c3;
    --secondary: #115fa2;

    --dark: #07182e;
    --dark-light: #112240;

    --light: #ccd6f6;
    --gray: #8892b0;
    --white: #e6f1ff;

    --accent: #ff2e97;
}


/* =========================================================
   HEADER
========================================================= */

header {
    position: fixed;

    top: 0;
    left: 0;

    width: 100%;
    height: 70px;

    z-index: 1000;

    background: rgba(7, 24, 46, 0.95);

    backdrop-filter: blur(12px) saturate(180%);
    -webkit-backdrop-filter: blur(12px) saturate(180%);

    border-bottom: 1px solid rgba(255, 255, 255, 0.08);

    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);

    transition: 0.3s ease;
}


/* =========================================================
   NAV CONTAINER
========================================================= */

.nav-container {
    position: relative;

    width: 100%;
    max-width: 1400px;

    height: 70px;

    margin: auto;

    padding: 0 30px;

    display: flex;
    align-items: center;
    justify-content: space-between;
}


/* =========================================================
   LOGO
========================================================= */

.nav-brand {
    display: flex;
    align-items: center;

    z-index: 1002;
}

.nav-brand a {
    text-decoration: none;
}

.logo-text {
    font-family: 'SF Mono', 'Fira Code', monospace;

    font-size: 1.3rem;

    font-weight: 700;

    color: #52f5d4;

    letter-spacing: 0.5px;
    
}


/* =========================================================
   DESKTOP NAVIGATION
========================================================= */

.desktop-nav {
    position: absolute;

    left: 50%;

    transform: translateX(-50%);

    display: flex;
    align-items: center;
}

.nav-list {
    display: flex;

    align-items: center;

    gap: 4px;

    list-style: none;

    margin: 0;
    padding: 0;
}

.nav-item {
    position: relative;
}

.nav-link {
    position: relative;

    display: flex;

    align-items: center;

    gap: 8px;

    padding: 10px 16px;

    color: var(--gray);

    text-decoration: none;

    font-size: 0.9rem;

    font-weight: 500;

    border-radius: 6px;

    transition: all 0.3s ease;
}

.nav-link:hover {
    color: #52f5d4;

    transform: translateY(-2px);
}

.nav-icon {
    width: 20px;

    text-align: center;

    font-size: 0.9rem;

    color: var(--gray);

    transition: 0.3s ease;
}

.nav-link:hover .nav-icon {
    color: #52f5d4;

    transform: scale(1.1);
}


/* Bottom active/hover line */

.nav-highlight {
    position: absolute;

    bottom: 0;

    left: 50%;

    width: 60%;

    height: 2px;

    background: #52f5d4;

    border-radius: 2px;

    transform: translateX(-50%) scaleX(0);

    transition: 0.3s ease;
}

.nav-item:hover .nav-highlight,
.nav-item.active .nav-highlight {
    transform: translateX(-50%) scaleX(1);
}


/* =========================================================
   ACTION BUTTONS
========================================================= */

.nav-actions {
    display: flex;

    align-items: center;

    gap: 10px;

    margin-left: auto;
}

.hire-btn {
    position: relative;

    display: flex;

    align-items: center;

    gap: 8px;

    padding: 11px 20px;

    background: linear-gradient(
        135deg,
        #ff2e97,
        #ff2e63
    );

    color: white;

    text-decoration: none;

    font-size: 0.9rem;

    font-weight: 600;

    border-radius: 6px;

    border: none;

    overflow: hidden;

    transition: all 0.3s ease;
}

.hire-btn:hover {
    color: white;

    transform: translateY(-3px);

    box-shadow:
        0 10px 25px rgba(255, 46, 151, 0.3);
}

.hire-icon {
    font-size: 0.9rem;
}


/* =========================================================
   MOBILE TOGGLE
========================================================= */

.mobile-toggle {
    display: none;

    width: 42px;
    height: 42px;

    align-items: center;
    justify-content: center;

    margin-left: 10px;

    padding: 0;

    background: transparent;

    border: none;

    color: white;

    cursor: pointer;

    z-index: 1003;
    
}


/* Hamburger */

.hamburger-icon {
    display: flex;

    flex-direction: column;

    gap: 5px;
}

.hamburger-icon .bar {
    display: block;

    width: 24px;
    height: 2px;

    background: white;

    border-radius: 2px;

    transition: 0.3s ease;
}


/* Close icon hidden initially */

.close-icon {
    display: none;

    font-size: 25px;
}


/* When menu is active */

.mobile-toggle.active .hamburger-icon {
    display: none;
}

.mobile-toggle.active .close-icon {
    display: block;
}


/* =========================================================
   MOBILE OVERLAY
========================================================= */

.mobile-overlay {
    position: fixed;

    top: 0;
    left: 0;

    width: 100%;

    height: 100dvh;

    max-height: 100dvh;

    background: rgba(7, 24, 46, 0.98);

    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);

    display: none;

    z-index: 1001;

    overflow-y: auto;

    overflow-x: hidden;

    -webkit-overflow-scrolling: touch;
}

.mobile-overlay.active {
    display: block;
}


/* =========================================================
   MOBILE NAV
========================================================= */

.mobile-nav {
    min-height: 100%;

    height: auto;

    padding: 80px 25px 40px;

    display: flex;

    flex-direction: column;
}


/* =========================================================
   MOBILE HEADER
========================================================= */

.mobile-header {
    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-bottom: 30px;
}

.mobile-brand {
    font-family: 'SF Mono', 'Fira Code', monospace;
}

.mobile-brand .logo-text {
    color: #52f5d4;
}


/* Close button */

.close-menu-btn {
    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    border: none;

    background: transparent;

    color: white;

    font-size: 25px;

    cursor: pointer;
}


/* =========================================================
   MOBILE LIST
========================================================= */

.mobile-list {
    list-style: none;

    margin: 0;
    padding: 0;
}

.mobile-item {
    margin-bottom: 10px;
}

.mobile-link {
    display: flex;

    align-items: center;

    gap: 15px;

    width: 100%;

    padding: 16px;

    color: white;

    text-decoration: none;

    font-size: 18px;

    border-radius: 8px;

    transition: 0.3s ease;
}

.mobile-link:hover,
.mobile-item.active .mobile-link {
    background: rgba(82, 245, 212, 0.08);

    color: #52f5d4;
}

.mobile-icon {
    width: 25px;

    text-align: center;
}


/* =========================================================
   MOBILE ACTIONS
========================================================= */

.mobile-actions {
    display: flex;

    flex-direction: column;

    gap: 12px;

    margin-top: 30px;

    padding-bottom: 30px;
}

.mobile-hire-btn,
.mobile-cv-btn {
    display: flex;

    align-items: center;
    justify-content: center;

    gap: 10px;

    width: 100%;

    padding: 14px;

    border-radius: 6px;

    text-decoration: none;

    font-weight: 600;

    transition: 0.3s ease;
}

.mobile-hire-btn {
    background: #ff2e97;

    color: white;
}

.mobile-cv-btn {
    background: #00b8ff;

    color: #07182e;
}


/* =========================================================
   DESKTOP
========================================================= */

@media (min-width: 901px) {

    .mobile-toggle,
    .mobile-overlay {
        display: none !important;
    }

}


/* =========================================================
   TABLET / MOBILE
========================================================= */

@media (max-width: 900px) {

    .nav-container {
        padding: 0 20px;
    }

    .desktop-nav {
        display: none;
    }

    .nav-actions {
        margin-left: auto;
    }

    .nav-actions .hire-btn {
        display: none;
    }

    .mobile-toggle {
        display: flex;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 576px) {

    .nav-container {
        padding: 0 15px;
    }

    .logo-text {
        font-size: 1.1rem;
    }

    .mobile-nav {
        padding-left: 20px;
        padding-right: 20px;
    }

}

</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Mobile Menu Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const mobileOverlay = document.querySelector('.mobile-overlay');
  const closeMenuBtn = document.querySelector('.close-menu-btn');
  const mobileLinks = document.querySelectorAll('.mobile-link');
  
  // Toggle mobile menu
  function toggleMobileMenu() {

    mobileToggle.classList.toggle('active');
    mobileOverlay.classList.toggle('active');

    if (mobileOverlay.classList.contains('active')) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
    }
}
  // Close mobile menu
 function closeMobileMenu() {

    mobileToggle.classList.remove('active');
    mobileOverlay.classList.remove('active');

    document.body.style.overflow = '';
}
  // Event listeners
  mobileToggle.addEventListener('click', toggleMobileMenu);
  
  if (closeMenuBtn) {
    closeMenuBtn.addEventListener('click', closeMobileMenu);
  }
  
  mobileLinks.forEach(link => {
    link.addEventListener('click', closeMobileMenu);
  });
  
  // Close menu when clicking outside
  mobileOverlay.addEventListener('click', function(e) {
    if (e.target === mobileOverlay) {
      closeMobileMenu();
    }
  });
  
  // Header Scroll Effect
  const header = document.querySelector('header');
  
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
  
  // Active Navigation Highlight
  const navItems = document.querySelectorAll('.nav-item');
  const mobileItems = document.querySelectorAll('.mobile-item');
  const currentPath = window.location.pathname;
  
  // Function to set active state
  function setActiveState(items, isMobile = false) {
    items.forEach(item => {
      const link = item.querySelector(isMobile ? '.mobile-link' : '.nav-link');
      const href = link.getAttribute('href');
      
      // Remove active class first
      item.classList.remove('active');
      
      // Check if current path matches
      if (href === currentPath || 
          (href === '/' && currentPath === '') ||
          (currentPath !== '/' && href.includes(currentPath))) {
        item.classList.add('active');
      }
    });
  }
  
  // Set active state for both desktop and mobile
  setActiveState(navItems);
  setActiveState(mobileItems, true);
  
  // Add click effect to buttons
  const buttons = document.querySelectorAll('.hire-btn, .cv-btn, .mobile-hire-btn, .mobile-cv-btn');
  
  buttons.forEach(button => {
    button.addEventListener('click', function(e) {
      // Create ripple effect
      const ripple = document.createElement('span');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;
      
      ripple.style.cssText = `
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
        width: ${size}px;
        height: ${size}px;
        left: ${x}px;
        top: ${y}px;
      `;
      
      this.appendChild(ripple);
      
      // Remove ripple after animation
      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
  });
  
  // Add CSS for ripple animation
  const style = document.createElement('style');
  style.textContent = `
    @keyframes ripple-animation {
      to {
        transform: scale(4);
        opacity: 0;
      }
    }
  `;
  document.head.appendChild(style);
  
  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 80,
          behavior: 'smooth'
        });
        
        // Close mobile menu if open
        closeMobileMenu();
      }
    });
  });
  
  // Keyboard navigation support
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && mobileOverlay.classList.contains('active')) {
      closeMobileMenu();
    }
  });
});
</script>