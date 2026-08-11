<!-- Add this in your layout file or before the closing </head> tag -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<header>
  <!-- Main Navigation Container -->
  <div class="nav-container">
    
    <!-- Logo/Brand -->
    <div class="nav-brand">
      <span class="logo-text">Lakshman Pal</span>
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
          <a href="{{ url('/about') }}" class="nav-link">
            <i class="fas fa-user nav-icon"></i>
            <span class="nav-text">About</span>
          </a>
          <div class="nav-highlight"></div>
        </li>
        <li class="nav-item">
          <a href="{{ url('/skills') }}" class="nav-link">
            <i class="fas fa-cogs nav-icon"></i>
            <span class="nav-text">Skills</span>
          </a>
          <div class="nav-highlight"></div>
        </li>
        <li class="nav-item">
          <a href="{{ url('/services') }}" class="nav-link">
            <i class="fas fa-concierge-bell nav-icon"></i>
            <span class="nav-text">Services</span>
          </a>
          <div class="nav-highlight"></div>
        </li>
        <li class="nav-item">
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
        </li>
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
      <div class="mobile-header">
        <div class="mobile-brand">
          <span class="logo-text">Lakshman</span>
          <span class="logo-name">Pal</span>
        </div>
        <button class="close-menu-btn" aria-label="Close menu">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <ul class="mobile-list">
        <li class="mobile-item">
          <a href="{{ url('/') }}" class="mobile-link">
            <i class="fas fa-home mobile-icon"></i>
            <span class="mobile-text">Home</span>
          </a>
        </li>
        <li class="mobile-item">
          <a href="{{ url('/about') }}" class="mobile-link">
            <i class="fas fa-user mobile-icon"></i>
            <span class="mobile-text">About</span>
          </a>
        </li>
        <li class="mobile-item">
          <a href="{{ url('/skills') }}" class="mobile-link">
            <i class="fas fa-cogs mobile-icon"></i>
            <span class="mobile-text">Skills</span>
          </a>
        </li>
        <li class="mobile-item">
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
        </li>
        <li class="mobile-item">
          <a href="{{ url('/career') }}" class="mobile-link">
            <i class="fas fa-chart-line mobile-icon"></i>
            <span class="mobile-text">Career</span>
          </a>
        </li>
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
/* ===== Navbar CSS Variables ===== */
:root {
  --primary: #00b8ff;
  --primary-dark: #0086c3;
  --secondary: #115fa2;
  --dark: #0a192f;
  --dark-light: #112240;
  --light: #ccd6f6;
  --gray: #8892b0;
  --white: #e6f1ff;
  --accent: #ff2e97;
}

/* ===== Header Base Styles ===== */
header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000;
  background: rgba(10, 25, 47, 0.92);
  backdrop-filter: blur(12px) saturate(180%);
  -webkit-backdrop-filter: blur(12px) saturate(180%);
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease;
}

.nav-container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 20px;
  display: flex;
  align-items: center;
  justify-content: space-between; /* This ensures left and right spacing */
  height: 70px;
}

/* ===== Brand Logo - LEFT SIDE ===== */
.nav-brand {
  display: flex;
  align-items: center;
  gap: 4px;
  font-family: 'SF Mono', 'Fira Code', monospace;
  z-index: 1002;
  /* Ensure it stays on left */
  margin-right: auto;
}

.logo-text {
  font-size: 1.3rem;
  font-weight: 700;
  color: var(--primary);
  letter-spacing: 0.5px;
}

.logo-name {
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--white);
}

/* ===== Desktop Navigation ===== */
.desktop-nav {
  display: flex;
  align-items: center;
  /* Center the navigation */
  margin: 0 auto;
}

.nav-list {
  display: flex;
  gap: 0;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav-item {
  position: relative;
}

.nav-link {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 10px 16px;
  color: var(--gray);
  text-decoration: none;
  font-weight: 500;
  font-size: 0.9rem;
  border-radius: 6px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.nav-link::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 184, 255, 0.1);
  border-radius: 6px;
  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.4s ease;
  z-index: -1;
}

.nav-link:hover {
  color: var(--primary);
  transform: translateY(-2px);
}

.nav-link:hover::before {
  transform: scaleX(1);
  transform-origin: left;
}

.nav-icon {
  font-size: 0.95rem;
  color: var(--gray);
  width: 20px;
  text-align: center;
  transition: all 0.3s ease;
}

.nav-link:hover .nav-icon {
  color: var(--primary);
  transform: scale(1.1) rotate(5deg);
}

.nav-highlight {
  position: absolute;
  bottom: -5px;
  left: 50%;
  transform: translateX(-50%) scaleX(0);
  width: 60%;
  height: 2px;
  background: var(--primary);
  border-radius: 2px;
  transition: transform 0.3s ease;
}

.nav-item:hover .nav-highlight {
  transform: translateX(-50%) scaleX(1);
}

/* ===== Action Buttons ===== */
.nav-actions {
  display: flex;
  align-items: center;
  gap: 10px;
  /* Ensure it stays on right in desktop */
  margin-left: auto;
}

.hire-btn {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 10px 20px;
  background: linear-gradient(135deg, var(--accent) 0%, #ff2e63 100%);
  color: var(--white);
  text-decoration: none;
  font-weight: 600;
  font-size: 0.9rem;
  border-radius: 6px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  border: none;
  cursor: pointer;
}

.hire-btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  transition: left 0.6s ease;
}

.hire-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(255, 46, 151, 0.3);
}

.hire-btn:hover::before {
  left: 100%;
}

.hire-icon {
  font-size: 0.95rem;
  transition: transform 0.3s ease;
}

.hire-btn:hover .hire-icon {
  transform: translateY(-2px) rotate(-10deg);
}

.cv-btn {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 10px 20px;
  background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
  color: var(--dark);
  text-decoration: none;
  font-weight: 600;
  font-size: 0.9rem;
  border-radius: 6px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  border: none;
  cursor: pointer;
}

.cv-btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transition: left 0.6s ease;
}

.cv-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0, 184, 255, 0.3);
}

.cv-btn:hover::before {
  left: 100%;
}

.cv-icon {
  font-size: 0.95rem;
  transition: transform 0.3s ease;
}

.cv-btn:hover .cv-icon {
  transform: translateY(-2px) rotate(10deg);
}

/* ===== Mobile Toggle Button - RIGHT SIDE ===== */
.mobile-toggle {
  display: none;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 44px;
  height: 44px;
  background: transparent;
  border: none;
  cursor: pointer;
  padding: 0;
  position: relative;
  z-index: 1002;
  border-radius: 6px;
  transition: all 0.3s ease;
  /* Ensure it stays on right in mobile */
  margin-left: auto;
}

.mobile-toggle:hover {
  background: rgba(0, 184, 255, 0.1);
}

.hamburger-icon {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  width: 22px;
  height: 16px;
  position: absolute;
  transition: all 0.3s ease;
  opacity: 1;
}

.bar {
  width: 100%;
  height: 2px;
  background: var(--white);
  border-radius: 1px;
  transition: all 0.3s ease;
}

.mobile-toggle.active .bar:nth-child(1) {
  transform: translateY(7px) rotate(45deg);
}

.mobile-toggle.active .bar:nth-child(2) {
  opacity: 0;
}

.mobile-toggle.active .bar:nth-child(3) {
  transform: translateY(-7px) rotate(-45deg);
}

.close-icon {
  position: absolute;
  font-size: 1.4rem;
  color: var(--white);
  transition: all 0.3s ease;
  opacity: 0;
  transform: scale(0.8);
}

.mobile-toggle.active .close-icon {
  opacity: 1;
  transform: scale(1);
}

.mobile-toggle.active .hamburger-icon {
  opacity: 0;
  transform: scale(0.8);
}

/* ===== Mobile Navigation Overlay ===== */
.mobile-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background: rgba(10, 25, 47, 0.98);
  backdrop-filter: blur(15px);
  -webkit-backdrop-filter: blur(15px);
  display: none;
  z-index: 1001;
  opacity: 0;
  transition: opacity 0.4s ease;
}

.mobile-overlay.active {
  display: block;
  opacity: 1;
}

.mobile-nav {
  height: 100%;
  display: flex;
  flex-direction: column;
  padding: 80px 20px 30px;
  animation: slideIn 0.4s ease;
}

@keyframes slideIn {
  from {
    transform: translateX(-100%);
  }
  to {
    transform: translateX(0);
  }
}

.mobile-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 40px;
}

.mobile-brand {
  display: flex;
  align-items: center;
  gap: 4px;
  font-family: 'SF Mono', 'Fira Code', monospace;
}

.close-menu-btn {
  background: transparent;
  border: none;
  color: var(--white);
  font-size: 1.5rem;
  cursor: pointer;
  transition: color 0.3s ease;
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 6px;
}

.close-menu-btn:hover {
  color: var(--primary);
  background: rgba(0, 184, 255, 0.1);
}

.mobile-list {
  list-style: none;
  padding: 0;
  margin: 0;
  flex: 1;
}

.mobile-item {
  margin-bottom: 10px;
}

.mobile-link {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px 20px;
  color: var(--gray);
  text-decoration: none;
  font-size: 1.1rem;
  border-radius: 8px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.mobile-link::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: rgba(0, 184, 255, 0.1);
  transition: left 0.4s ease;
  z-index: -1;
}

.mobile-link:hover {
  color: var(--primary);
  transform: translateX(8px);
}

.mobile-link:hover::before {
  left: 0;
}

.mobile-icon {
  font-size: 1.1rem;
  color: var(--gray);
  width: 24px;
  text-align: center;
  transition: all 0.3s ease;
}

.mobile-link:hover .mobile-icon {
  color: var(--primary);
  transform: scale(1.1);
}

.mobile-actions {
  margin-top: 30px;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.mobile-hire-btn,
.mobile-cv-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  width: 100%;
  padding: 15px;
  text-decoration: none;
  font-weight: 600;
  font-size: 1rem;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.mobile-hire-btn {
  background: linear-gradient(135deg, var(--accent) 0%, #ff2e63 100%);
  color: var(--white);
}

.mobile-cv-btn {
  background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
  color: var(--dark);
}

.mobile-hire-btn:hover,
.mobile-cv-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* ===== Scroll Effect ===== */
header.scrolled {
  background: rgba(10, 25, 47, 0.97);
  backdrop-filter: blur(15px) saturate(200%);
  -webkit-backdrop-filter: blur(15px) saturate(200%);
  height: 65px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.3);
}

header.scrolled .nav-container {
  height: 65px;
}

/* ===== RESPONSIVE BREAKPOINTS ===== */

/* Large Tablets and Small Laptops */
@media (max-width: 1100px) {
  .nav-link {
    padding: 10px 14px;
    font-size: 0.85rem;
  }
  
  .hire-btn,
  .cv-btn {
    padding: 10px 16px;
    font-size: 0.85rem;
  }
  
  .logo-text,
  .logo-name {
    font-size: 1.2rem;
  }
}

/* Tablets - Hide desktop nav, show mobile toggle */
@media (max-width: 900px) {
  .desktop-nav {
    display: none;
  }
  
  .nav-actions {
    display: none;
  }
  
  .mobile-toggle {
    display: flex;
  }
  
  .nav-container {
    padding: 0 15px;
    height: 65px;
    /* Ensure proper spacing between left and right items */
    justify-content: space-between;
  }
  
  .nav-brand {
    /* Keep on left */
    margin-right: 0;
  }
  
  .mobile-toggle {
    /* Keep on right */
    margin-left: 0;
  }
  
  header.scrolled .nav-container {
    height: 60px;
  }
}

/* Mobile Phones */
@media (max-width: 480px) {
  .nav-brand {
    gap: 3px;
  }
  
  .logo-text,
  .logo-name {
    font-size: 1.1rem;
  }
  
  .mobile-nav {
    padding: 70px 15px 25px;
  }
  
  .mobile-link {
    padding: 14px 18px;
    font-size: 1rem;
    gap: 12px;
  }
  
  .mobile-header {
    margin-bottom: 30px;
  }
  
  .mobile-hire-btn,
  .mobile-cv-btn {
    padding: 14px;
    font-size: 0.95rem;
  }
  
  /* Ensure proper spacing on small screens */
  .nav-container {
    padding: 0 10px;
  }
}

/* Small Mobile Phones */
@media (max-width: 360px) {
  .logo-text,
  .logo-name {
    font-size: 1rem;
  }
  
  .nav-container {
    padding: 0 10px;
  }
  
  .mobile-nav {
    padding: 60px 10px 20px;
  }
  
  .mobile-link {
    padding: 12px 15px;
    font-size: 0.95rem;
  }
}

/* ===== Active Page Glow Effect ===== */
.nav-item.active .nav-link::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100px;
  height: 100px;
  background: radial-gradient(circle, rgba(0, 184, 255, 0.1) 0%, transparent 70%);
  transform: translate(-50%, -50%);
  z-index: -1;
  opacity: 0.2;
}

/* ===== Subtle Pulse Animation for Hire Button ===== */
@keyframes subtlePulse {
  0%, 100% {
    box-shadow: 0 5px 15px rgba(255, 46, 151, 0.3);
  }
  50% {
    box-shadow: 0 5px 20px rgba(255, 46, 151, 0.5);
  }
}

.hire-btn {
  animation: subtlePulse 3s infinite;
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
    document.body.style.overflow = mobileOverlay.classList.contains('active') ? 'hidden' : '';
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