@extends('web.layout')

@section('title', 'Lakshman Pal | Full Stack Developer Portfolio')

@push('styles')
<style>
  /* ===== Base Styles ===== */
  :root {
    --primary: #00b8ff;
    --primary-dark: #0086c3;
    --secondary: #115fa2;
    --dark: #0a192f;
    --dark-light: #112240;
    --light: #ccd6f6;
    --gray: #8892b0;
    --white: #e6f1ff;
  }

  /* ===== Hero Section ===== */
  .hero-section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1px 20px 80px;
    background: linear-gradient(135deg, var(--dark) 0%, var(--dark-light) 100%);
    position: relative;
    overflow: hidden;
  }

  .hero-section::before {
    content: '';
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: var(--primary);
    filter: blur(150px);
    opacity: 0.1;
    top: -150px;
    right: -150px;
  }

  .hero-content {
    max-width: 1200px;
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    position: relative;
    z-index: 2;
  }

  .hero-text h3 {
    color: var(--primary);
    font-size: 1.25rem;
    font-weight: 500;
    margin-bottom: 10px;
    font-family: 'SF Mono', 'Fira Code', monospace;
  }

  .hero-text h1 {
    font-size: 3.5rem;
    font-weight: 700;
    color: var(--white);
    line-height: 1.1;
    margin-bottom: 15px;
  }

  .hero-text h2 {
    font-size: 2.5rem;
    color: var(--gray);
    margin-bottom: 25px;
  }

  .hero-text p {
    color: var(--gray);
    font-size: 1.1rem;
    line-height: 1.6;
    max-width: 540px;
    margin-bottom: 40px;
  }

  .hero-buttons {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
  }

  .btn {
    padding: 14px 32px;
    border-radius: 4px;
    font-weight: 600;
    font-size: 0.95rem;
    text-decoration: none;
    transition: all 0.3s ease;
    cursor: pointer;
    border: 1px solid var(--primary);
    background: transparent;
    color: var(--primary);
  }

  .btn:hover {
    background: rgba(0, 184, 255, 0.1);
    transform: translateY(-3px);
  }

  .btn-primary {
    background: var(--primary);
    color: var(--dark);
  }

  .btn-primary:hover {
    background: var(--primary-dark);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 184, 255, 0.2);
  }

  /* ===== Profile Image ===== */
  .profile-wrapper {
    position: relative;
    width: 380px;
    height: 380px;
    margin: 0 auto;
  }

  .profile-container {
    width: 80%;
    height: 90%;
    border-radius: 80%;
    padding: 20px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 80%);
    position: relative;
    animation: float 6s ease-in-out infinite;
    background-color: var(--primary);

  }

  .profile-container::before {
    content: '';
    position: absolute;
    width: calc(100% - 8px);
    height: calc(100% - 8px);
    background: var(--dark-light);
    border-radius: 50%;
    top: 4px;
    left: 4px;
  }

  .profile-container img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    position: relative;
    z-index: 2;
    filter: grayscale(20%);
    transition: all 0.3s ease;
  }

  .profile-container:hover img {
    filter: grayscale(0%);
    transform: scale(1.05);
  }

  @keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
  }

  /* ===== Stats Section ===== */
  .stats-section {
    background: var(--dark-light);
    padding: 80px 20px;
  }

  .stats-grid {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 40px;
    text-align: center;
  }

  .stat-item {
    padding: 30px 20px;
    background: rgba(255, 255, 255, 0.02);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
  }

  .stat-item:hover {
    transform: translateY(-10px);
    border-color: var(--primary);
  }

  .stat-number {
    font-size: 3rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 10px;
  }

  .stat-label {
    color: var(--gray);
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  /* ===== About Section ===== */
  .about-section {
    padding: 120px 20px;
    background: var(--dark);
  }

  .section-title {
    text-align: center;
    margin-bottom: 60px;
  }

  .section-title h2 {
    font-size: 2.5rem;
    color: var(--white);
    margin-bottom: 15px;
  }

  .section-title .underline {
    width: 80px;
    height: 4px;
    background: var(--primary);
    margin: 0 auto;
  }

  .about-content {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
  }

  .about-text p {
    color: var(--gray);
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 25px;
  }

  /* ===== Skills Section ===== */
  .skills-section {
    padding: 120px 20px;
    background: var(--dark-light);
  }

  .skills-grid {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
  }

  .skill-category {
    background: rgba(255, 255, 255, 0.02);
    padding: 40px 30px;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.05);
  }

  .skill-category h3 {
    color: var(--white);
    font-size: 1.5rem;
    margin-bottom: 25px;
    padding-bottom: 10px;
    border-bottom: 2px solid var(--primary);
  }

  .skill-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .skill-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .skill-name {
    color: var(--gray);
    font-size: 1rem;
  }

  .skill-bar {
    width: 60%;
    height: 8px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 4px;
    overflow: hidden;
  }

  .skill-progress {
    height: 100%;
    background: var(--primary);
    border-radius: 4px;
  }

  /* ===== Projects Section ===== */
  .projects-section {
    padding: 120px 20px;
    background: var(--dark);
  }

  .projects-grid {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
  }

  .project-card {
    background: var(--dark-light);
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.05);
  }

  .project-card:hover {
    transform: translateY(-10px);
    border-color: var(--primary);
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.3);
  }

  .project-image {
    height: 200px;
    background: linear-gradient(115deg, var(--primary) 10%, var(--secondary) 80%);
    position: relative;
    overflow: hidden;
  }

  .project-content {
    padding: 30px;
  }

  .project-content h3 {
    color: var(--white);
    font-size: 1.5rem;
    margin-bottom: 15px;
  }

  .project-content p {
    color: var(--gray);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 20px;
  }

  .project-tech {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 25px;
  }

  .tech-tag {
    padding: 5px 12px;
    background: rgba(0, 184, 255, 0.1);
    color: var(--primary);
    border-radius: 17px;
    font-size: 1rem;
    font-family: 'SF Mono', 'Fira Code', monospace;
  }

  .project-links {
    display: flex;
    gap: 15px;
  }

  .project-link {
    color: var(--white);
    text-decoration: none;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s ease;
  }

  .project-link:hover {
    color: var(--primary);
  }

  /* ===== Responsive Design ===== */
  @media (max-width: 1024px) {
    .hero-content {
      gap: 40px;
    }
    
    .hero-text h1 {
      font-size: 2.8rem;
    }
    
    .hero-text h2 {
      font-size: 2rem;
    }
  }

  @media (max-width: 768px) {
    .hero-content {
      grid-template-columns: 1fr;
      text-align: center;
      
    }
    
    .hero-text h1 {
      font-size: 2.5rem;
    }
    
    .hero-buttons {
      justify-content: center;
    }
    
    .profile-wrapper {
      width: 300px;
      height: 300px;
    }
    
    .about-content {
      grid-template-columns: 1fr;
      text-align: center;
    }
    
    .skills-grid {
      grid-template-columns: 1fr;
    }
    
    .projects-grid {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 480px) {
    .hero-text h1 {
      font-size: 2rem;
    }
    
    .hero-text h2 {
      font-size: 1.5rem;
    }
    
    .profile-wrapper {
      width: 250px;
      height: 250px;
    }
    
    .btn {
      padding: 12px 24px;
      width: 100%;
    }
    
    .hero-buttons {
      flex-direction: column;
    }
  }

  /* Project Grid Container */
.projects-grid-container {
    padding: 1rem 0;
}

/* Project Card - Glassmorphism */
.project-card {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
    transition: all 0.3s ease;
    height: 100%;
    position: relative;
}

.project-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 48px 0 rgba(31, 38, 135, 0.2);
}

/* Card Image */
.project-card-image {
    position: relative;
    overflow: hidden;
    background: #f8f9fa;
}

.project-card-image img {
    transition: transform 0.5s ease;
}

.project-card:hover .project-card-image img {
    transform: scale(1.05);
}

/* Status Badge */
.status-badge {
    font-size: 0.75rem;
    font-weight: 600;
    backdrop-filter: blur(10px);
    background: rgba(0, 0, 0, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #fff;
    z-index: 1;
}

.status-badge.bg-success {
    background: rgba(40, 167, 69, 0.9) !important;
}

.status-badge.bg-secondary {
    background: rgba(108, 117, 125, 0.9) !important;
}

/* Category Badge */
.category-badge {
    background: rgba(102, 126, 234, 0.12);
    color: #667eea;
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border: 1px solid rgba(102, 126, 234, 0.15);
}

/* ===== Projects Section ===== */
.projects-section {
    padding: 120px 20px;
    background: var(--dark);
}

.projects-grid-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 1rem 0;
}

.text-gray {
    color: var(--gray) !important;
}

/* Project Card - Dark Theme */
.project-card {
    background: var(--dark-light);
    border: 1px solid rgba(255, 255, 255, 0.05);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
    transition: all 0.4s ease;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.project-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 184, 255, 0.05), rgba(17, 95, 162, 0.05));
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
    border-radius: inherit;
}

.project-card:hover {
    transform: translateY(-10px);
    border-color: var(--primary);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}

.project-card:hover::before {
    opacity: 1;
}

/* Card Image */
.project-card-image {
    position: relative;
    overflow: hidden;
    background: var(--dark-light);
}

.project-card-image img {
    transition: transform 0.6s ease;
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.project-card:hover .project-card-image img {
    transform: scale(1.08);
}

/* Status Badge */
.status-badge {
    font-size: 0.7rem;
    font-weight: 600;
    backdrop-filter: blur(10px);
    background: rgba(0, 0, 0, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #fff;
    z-index: 2;
}

.status-badge.bg-success {
    background: rgba(40, 167, 69, 0.9) !important;
    border-color: rgba(40, 167, 69, 0.3);
}

.status-badge.bg-secondary {
    background: rgba(108, 117, 125, 0.9) !important;
    border-color: rgba(108, 117, 125, 0.3);
}

/* Category Badge */
.category-badge {
    background: rgba(0, 184, 255, 0.1);
    color: var(--primary);
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border: 1px solid rgba(0, 184, 255, 0.15);
    padding: 4px 14px;
}

/* Title */
.project-title {
    font-size: 1.1rem;
    line-height: 1.4;
    min-height: 3rem;
    color: var(--white);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Description */
.project-description {
    font-size: 0.85rem;
    line-height: 1.6;
    min-height: 2.5rem;
    color: var(--gray);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Technologies */
.project-technologies {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    min-height: 2rem;
}

.tech-tag {
    display: inline-block;
    padding: 4px 12px;
    background: rgb(16, 136, 145);
    border-radius: 20px;
    font-size: .75rem;
    font-weight: 500;
    color: var(--white);
    border: 1px solid rgba(207, 186, 186, 0.06);
    transition: all 0.3s ease;
    white-space: nowrap;
}

.tech-tag:hover {
    background: rgba(81, 161, 226, 0.1);
    color: var(--primary);
    border-color: rgba(64, 160, 240, 0.2);
    transform: translateY(-2px);
}

/* Links */
.project-links {
    margin-top: auto;
}

.project-link {
    transition: all 0.3s ease;
    font-size: 0.8rem;
}

.project-link.btn-primary {
    background: var(--primary);
    border: none;
    color: var(--dark);
    font-weight: 600;
}

.project-link.btn-primary:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 184, 255, 0.3);
}

.project-link.btn-outline-primary {
    color: var(--primary);
    border: 1px solid rgba(0, 184, 255, 0.3);
    background: transparent;
}

.project-link.btn-outline-primary:hover {
    background: rgba(0, 184, 255, 0.1);
    color: var(--primary);
    border-color: var(--primary);
    transform: translateY(-2px);
}

.text-gray {
    color: var(--gray) !important;
}

/* Auto Zoom Animation */
.project-card {
    animation: cardZoomOut 0.5s ease forwards;
}

.project-card.active {
    animation: cardZoomIn 0.8s ease forwards;
    z-index: 2;
    transform: scale(1.06);
    border-color: var(--primary);
}

@keyframes cardZoomIn {
    0% {
        transform: scale(1);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
    }
    50% {
        transform: scale(1.06);
        box-shadow: 0 20px 60px 0 rgba(0, 184, 255, 0.15);
    }
    100% {
        transform: scale(1.06);
        box-shadow: 0 20px 60px 0 rgba(0, 184, 255, 0.15);
        border-color: var(--primary);
    }
}

@keyframes cardZoomOut {
    0% {
        transform: scale(1.06);
        box-shadow: 0 20px 60px 0 rgba(0, 184, 255, 0.15);
    }
    100% {
        transform: scale(1);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
    }
}

/* Card Active State Highlight */
.project-card.active {
    border-color: var(--primary) !important;
    background: var(--dark-light) !important;
}

.project-card.active .project-title {
    color: var(--primary) !important;
}

/* Responsive Grid */
@media (max-width: 576px) {
    .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .projects-section {
        padding: 60px 15px;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

@media (min-width: 769px) and (max-width: 992px) {
    .col-lg-4 {
        flex: 0 0 33.333%;
        max-width: 33.333%;
    }
}

@media (min-width: 993px) {
    .col-lg-4 {
        flex: 0 0 33.333%;
        max-width: 33.333%;
    }
}

/* Smooth scroll and animation */
.project-card {
    will-change: transform, box-shadow;
}

/* Fix for when there are only 1 or 2 cards */
.row.justify-content-center {
    justify-content: center !important;
}

/* When 1 card - center it */
.col-12.col-sm-6.col-lg-4:only-child {
    max-width: 400px;
    margin: 0 auto;
}

/* When 2 cards - center them */
@media (min-width: 577px) and (max-width: 768px) {
    .col-sm-6:first-child:nth-last-child(2),
    .col-sm-6:first-child:nth-last-child(2) ~ .col-sm-6 {
        max-width: 45%;
    }
}

/* Section Title Styling */
.section-title {
    text-align: center;
    margin-bottom: 60px;
}

.section-title h2 {
    font-size: 2.5rem;
    color: var(--white);
    margin-bottom: 15px;
}

.section-title .underline {
    width: 80px;
    height: 4px;
    background: var(--primary);
    margin: 0 auto;
    border-radius: 2px;
}

.section-title .text-gray {
    color: var(--gray);
    font-size: 1.1rem;
}
</style>
@endpush

@section('content')

<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-content">
    <div class="hero-text">
      <h3>Hi, my name is</h3>
      <h1>Lakshman Pal</h1>
      <h2>I build exceptional digital experiences.</h2>
      <p>
        I'm a Full Stack Developer specializing in building exceptional digital 
        experiences. Currently, I'm focused on creating accessible, 
        human-centered products at the intersection of design and technology.
      </p>
      <div class="hero-buttons">
        <a href="#contact" class="btn btn-primary">Hire Me</a>
        <a href="#projects" class="btn">View Projects</a>
      </div>
    </div>
    <div class="profile-wrapper">
      <div class="profile-container">
        <img src="/images/lakshman_ai.png" alt="Lakshman Pal - Full Stack Developer">
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
  <div class="stats-grid">
    <div class="stat-item">
      <div class="stat-number">10+</div>
      <div class="stat-label">Years Experience</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">30+</div>
      <div class="stat-label">Completed Projects</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">5+</div>
      <div class="stat-label">Companies Worked</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">100+</div>
      <div class="stat-label">Happy Clients</div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="about-section" id="about">
  <div class="section-title">
    <h2>About Me</h2>
    <div class="underline"></div>
  </div>
  <div class="about-content">
    <div class="about-text">
      <p>
        Hello! I'm Lakshman, a passionate Full Stack Developer with over a decade 
        of experience creating digital solutions that make a difference. My journey 
        in web development began with a curiosity about how things work on the internet, 
        and it has evolved into a career dedicated to building meaningful applications.
      </p>
      <p>
        I specialize in modern web technologies including Laravel, Vue.js, React, 
        and Node.js. My approach combines technical expertise with creative 
        problem-solving to deliver solutions that are not only functional but also 
        provide exceptional user experiences.
      </p>
      <p>
        When I'm not coding, you can find me exploring new technologies, 
        contributing to open-source projects, or mentoring aspiring developers. 
        I believe in continuous learning and staying updated with the latest 
        industry trends.
      </p>
    </div>
    <div class="profile-wrapper">
      <div class="profile-container">
        <img src="/images/lakshman_ai.png" alt="Lakshman Pal - About">
      </div>
    </div>
  </div>
</section>

<!-- Skills Section -->
<section class="skills-section" id="skills">
  <div class="section-title">
    <h2>My Skills</h2>
    <div class="underline"></div>
  </div>
  <div class="skills-grid">
    <div class="skill-category">
      <h3>Frontend</h3>
      <div class="skill-list">
        <div class="skill-item">
          <span class="skill-name">HTML5 & CSS3</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 95%"></div>
          </div>
        </div>
        <div class="skill-item">
          <span class="skill-name">JavaScript</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 90%"></div>
          </div>
        </div>
        <div class="skill-item">
          <span class="skill-name">React.js</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 85%"></div>
          </div>
        </div>
        <div class="skill-item">
          <span class="skill-name">Vue.js</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 88%"></div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="skill-category">
      <h3>Backend</h3>
      <div class="skill-list">
        <div class="skill-item">
          <span class="skill-name">PHP & Laravel</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 92%"></div>
          </div>
        </div>
        <div class="skill-item">
          <span class="skill-name">Node.js</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 85%"></div>
          </div>
        </div>
        <div class="skill-item">
          <span class="skill-name">MySQL</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 90%"></div>
          </div>
        </div>
        <div class="skill-item">
          <span class="skill-name">RESTful APIs</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 95%"></div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="skill-category">
      <h3>Tools & Others</h3>
      <div class="skill-list">
        <div class="skill-item">
          <span class="skill-name">Git & GitHub</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 90%"></div>
          </div>
        </div>
        <div class="skill-item">
          <span class="skill-name">Docker</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 80%"></div>
          </div>
        </div>
        <div class="skill-item">
          <span class="skill-name">AWS</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 75%"></div>
          </div>
        </div>
        <div class="skill-item">
          <span class="skill-name">CI/CD</span>
          <div class="skill-bar">
            <div class="skill-progress" style="width: 85%"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Projects Section -->
<section class="projects-section" id="projects">
    <div class="section-title">
        <h2>My Projects</h2>
        <div class="underline"></div>
        <p class="text-gray mt-3">Here are some of my recent projects that I've worked on</p>
    </div>
    
    <div class="projects-grid-container">
        <div class="row g-4 justify-content-center">
            @forelse($projects ?? [] as $index => $project)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="project-card rounded-4 overflow-hidden h-100 {{ $loop->first ? 'active' : '' }}" data-index="{{ $index }}">
                        {{-- Card Image --}}
                        <div class="project-card-image position-relative">
                            @if(!empty($project->image))
                                <img src="{{ asset('images/' . $project->image) }}" 
                                     alt="{{ $project->title }}" 
                                     class="w-100" 
                                     style="height: 220px; object-fit: cover;">
                            @else
                                <div class="d-flex align-items-center justify-content-center" style="height: 220px; background: var(--dark-light);">
                                    <i class="fas fa-image fa-3x" style="color: var(--gray);"></i>
                                </div>
                            @endif
                            
                            {{-- Status Badge --}}
                            <span class="status-badge position-absolute top-0 end-0 m-3 px-3 py-1 rounded-pill {{ $project->status ? 'bg-success' : 'bg-secondary' }}">
                                <i class="fas {{ $project->status ? 'fa-check-circle' : 'fa-times-circle' }} me-1"></i>
                                {{ $project->status ? 'Active' : 'Inactive' }}
                            </span>
                        </div>

                        {{-- Card Body --}}
                        <div class="project-card-body p-4">
                            {{-- Category --}}
                            <span class="category-badge px-3 py-1 rounded-pill d-inline-block mb-2">
                                <i class="fas fa-tag me-1"></i>
                                {{ ucfirst($project->category ?? '') }}
                            </span>

                            {{-- Title --}}
                            <h5 class="project-title fw-bold mb-2">
                                {{ Str::limit($project->title ?? '', 30) }}
                            </h5>

                            {{-- Description --}}
                            <p class="project-description small mb-3">
                                {{ Str::limit($project->description ?? '', 80) }}
                            </p>

                            {{-- Technologies --}}
                            <div class="project-technologies mb-3">
                                @php
                                    $techs = !empty($project->technologies) ? json_decode($project->technologies, true) : [];
                                @endphp
                                @if(is_array($techs) && count($techs) > 0)
                                    @foreach(array_slice($techs, 0, 3) as $tech)
                                        <span class="tech-tag">{{ $tech }}</span>
                                    @endforeach
                                    @if(count($techs) > 3)
                                        <span class="tech-tag">+{{ count($techs) - 3 }}</span>
                                    @endif
                                
                                @endif
                            </div>

                            {{-- Links --}}
                            <div class="project-links d-flex gap-2">
                                @if(!empty($project->live_link))
                                    <a href="{{ $project->live_link }}" target="_blank" class="project-link btn btn-primary btn-sm rounded-pill flex-fill">
                                        <i class="fas fa-external-link-alt me-1"></i> Live
                                    </a>
                                @endif
                                @if(!empty($project->github_link))
                                    <a href="{{ $project->github_link }}" target="_blank" class="project-link btn btn-outline-primary btn-sm rounded-pill flex-fill">
                                        <i class="fab fa-github me-1"></i> Code
                                    </a>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <i class="fas fa-inbox fa-4x mb-3 d-block" style="color: var(--gray);"></i>
                        <h5 style="color: var(--gray);">No projects found</h5>
                        <p class="text-gray small">Start by adding your first project</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-loop card zoom animation with smooth transitions
    const cards = document.querySelectorAll('.project-card');
    let currentIndex = 0;
    let intervalId = null;
    let isAnimating = false;

    function animateCard(card, type) {
        return new Promise((resolve) => {
            if (type === 'enter') {
                card.style.animation = 'none';
                card.offsetHeight; // Trigger reflow
                card.style.animation = 'cardZoomIn 0.8s ease forwards';
                card.classList.add('active');
            } else if (type === 'exit') {
                card.style.animation = 'none';
                card.offsetHeight; // Trigger reflow
                card.style.animation = 'cardZoomOut 0.5s ease forwards';
                card.classList.remove('active');
            }
            
            setTimeout(resolve, type === 'enter' ? 800 : 500);
        });
    }

    async function startAutoLoop() {
        if (cards.length === 0) return;

        // Clear existing interval
        if (intervalId) {
            clearInterval(intervalId);
            intervalId = null;
        }

        // Set initial active card
        for (let i = 0; i < cards.length; i++) {
            if (i === 0) {
                cards[i].classList.add('active');
                cards[i].style.animation = 'cardZoomIn 0.8s ease forwards';
            } else {
                cards[i].classList.remove('active');
                cards[i].style.animation = 'none';
            }
        }
        currentIndex = 0;

        // Start interval for auto-loop
        intervalId = setInterval(async function() {
            if (isAnimating || cards.length <= 1) return;
            isAnimating = true;

            // Exit current card
            cards[currentIndex].classList.remove('active');
            cards[currentIndex].style.animation = 'cardZoomOut 0.5s ease forwards';
            
            await new Promise(resolve => setTimeout(resolve, 500));
            
            // Move to next
            currentIndex = (currentIndex + 1) % cards.length;
            
            // Enter next card
            cards[currentIndex].classList.add('active');
            cards[currentIndex].style.animation = 'cardZoomIn 0.8s ease forwards';
            
            await new Promise(resolve => setTimeout(resolve, 800));
            
            isAnimating = false;
        }, 3500); // Change card every 3.5 seconds
    }

    // Initialize auto-loop
    if (cards.length > 0) {
        startAutoLoop();

        // Pause on hover
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                if (intervalId) {
                    clearInterval(intervalId);
                    intervalId = null;
                }
                // Keep current card zoomed
                if (!this.classList.contains('active')) {
                    cards.forEach(c => c.classList.remove('active'));
                    this.classList.add('active');
                    this.style.animation = 'cardZoomIn 0.8s ease forwards';
                }
            });

            card.addEventListener('mouseleave', function() {
                // Reset all cards
                cards.forEach(c => {
                    c.classList.remove('active');
                    c.style.animation = 'none';
                });
                // Resume auto-loop
                startAutoLoop();
            });
        });
    }

    // Handle window resize for responsive
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Recalculate card positions if needed
        }, 250);
    });

    // Cleanup on page unload
    window.addEventListener('beforeunload', function() {
        if (intervalId) {
            clearInterval(intervalId);
        }
    });
});
</script>
@endsection