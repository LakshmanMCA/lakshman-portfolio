@extends('web.layout')

@section('title', 'Lakshman Pal | Software Developer Portfolio')

@push('styles')

<style>

/* =========================================================
   GLOBAL
========================================================= */

:root {

    --lp-bg: #03111f;
    --lp-bg-2: #061a2d;
    --lp-bg-3: #08233b;

    --lp-card: rgba(11, 36, 60, .65);

    --lp-primary: #20b8ff;
    --lp-primary-light: #62d4ff;

    --lp-white: #f5f9ff;
    --lp-text: #d7e6f3;
    --lp-muted: #8da5b8;

    --lp-border: rgba(255,255,255,.09);

    --lp-radius: 18px;

    --lp-shadow:
        0 25px 70px rgba(0,0,0,.28);

}


html {

    scroll-behavior: smooth;

}


body {

    margin: 0;

    background: var(--lp-bg);

}


.lp-page {

    min-height: 100vh;

    color: var(--lp-white);

    background:

        radial-gradient(
            circle at 80% 10%,
            rgba(32,184,255,.07),
            transparent 25%
        ),

        var(--lp-bg);

    overflow: hidden;

}


.lp-container {

    width: min(
        1180px,
        calc(100% - 40px)
    );

    margin: auto;

}


/* =========================================================
   SECTION
========================================================= */

.lp-section {

    padding: 20px 0;

    position: relative;

}


.lp-section-head {

    text-align: center;

    max-width: 760px;

    margin: 0 auto 55px;

}


.lp-eyebrow {

    display: inline-flex;

    align-items: center;

    gap: 9px;

    color: var(--lp-primary);

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 2px;

    text-transform: uppercase;

    margin-bottom: 14px;

}


.lp-eyebrow::before,
.lp-eyebrow::after {

    content: "";

    width: 24px;

    height: 2px;

    background: var(--lp-primary);

}


.lp-section-title {

    margin: 0;

    color: #fff;

    font-size: clamp(
        30px,
        4vw,
        48px
    );

    line-height: 1.1;

    font-weight: 850;

}


.lp-section-desc {

    margin: 17px auto 0;

    color: var(--lp-muted);

    line-height: 1.8;

    max-width: 680px;

}


/* =========================================================
   HERO
========================================================= */

.lp-hero {

    min-height: calc(100vh - 76px);

    display: flex;

    align-items: center;

    padding:
        30px
        0
        30px;

    position: relative;

    background:

        radial-gradient(
            circle at 85% 35%,
            rgba(32,184,255,.14),
            transparent 30%
        ),

        radial-gradient(
            circle at 10% 90%,
            rgba(32,184,255,.06),
            transparent 28%
        );

}


.lp-hero::before {

    content: "";

    position: absolute;

    width: 450px;
    height: 450px;

    right: -250px;
    top: 70px;

    border: 1px solid
        rgba(32,184,255,.10);

    border-radius: 50%;

    box-shadow:

        0 0 0 70px
            rgba(32,184,255,.025),

        0 0 0 140px
            rgba(32,184,255,.015);

}


.lp-hero-grid {

    display: grid;

    grid-template-columns:
        minmax(0, 1.05fr)
        minmax(390px, .95fr);

    gap: 75px;

    align-items: center;

}


/* =========================================================
   HERO TEXT
========================================================= */

.lp-hero-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;

    padding: 8px 14px;

    border-radius: 999px;

    border: 1px solid rgba(32, 184, 255, .20);

    background: rgba(32, 184, 255, .06);

    color: #bdeaff;

    font-family: 'Space Mono', monospace;
    font-size: 18px;
    font-weight: 400;

    letter-spacing: 1px;

    margin-bottom: 23px;
}


.lp-live-dot {

    width: 8px;
    height: 8px;

    border-radius: 50%;

    background: #28d77b;

    box-shadow:
        0 0 14px
        rgba(40,215,123,.7);

}


.lp-hero h1 {

    margin: 0;

    font-size: clamp(
        30px,
        5vw,
        60px
    );

    line-height: .96;

    letter-spacing: -3px;

    font-weight: 900;

}


.lp-hero h1 span {

    color: var(--lp-primary);

}


.lp-hero-role {

    margin:
        23px
        0
        20px;

    color: #dcecf8;

    font-size: clamp(
        20px,
        3vw,
        29px
    );

    font-weight: 650;

}


.lp-hero-role span {

    color: var(--lp-primary);

}


.lp-hero-description {

    max-width: 650px;

    color: var(--lp-muted);

    font-size: 16px;

    line-height: 1.9;

    margin-bottom: 31px;

}


.lp-hero-description strong {

    color: #e6f7ff;

}


/* =========================================================
   BUTTONS
========================================================= */

.lp-actions {

    display: flex;

    flex-wrap: wrap;

    gap: 12px;

    margin-bottom: 28px;

}


.lp-button {

    min-height: 48px;

    padding:
        0
        21px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 9px;

    border-radius: 9px;

    text-decoration: none !important;

    font-size: 13px;

    font-weight: 750;

    transition: .25s ease;

}


.lp-button-primary {

    color: #031522 !important;

    background: var(--lp-primary);

    border: 1px solid var(--lp-primary);

}


.lp-button-primary:hover {

    color: #031522 !important;

    background: var(--lp-primary-light);

    transform: translateY(-3px);

    box-shadow:
        0 12px 30px
        rgba(32,184,255,.25);

}


.lp-button-outline {

    color: #c7eaff !important;

    border: 1px solid
        rgba(32,184,255,.35);

    background:
        rgba(32,184,255,.04);

}


.lp-button-outline:hover {

    color: #fff !important;

    background:
        rgba(32,184,255,.10);

    border-color:
        var(--lp-primary);

    transform:
        translateY(-3px);

}


/* =========================================================
   SOCIAL
========================================================= */

.lp-social {

    display: flex;

    gap: 9px;

}


.lp-social a {

    width: 40px;
    height: 40px;

    display: flex;

    align-items: center;
    justify-content: center;

    color: #9bb3c7;

    border:
        1px solid
        var(--lp-border);

    border-radius: 9px;

    background:
        rgba(255,255,255,.025);

    text-decoration: none !important;

    transition: .25s ease;

}


.lp-social a:hover {

    color: var(--lp-primary);

    border-color:
        rgba(32,184,255,.35);

    transform:
        translateY(-4px);

}


/* =========================================================
   HERO IMAGE
========================================================= */




.lp-hero-image-card {

    position: relative;

    padding: 5px;

    border-radius: 25px;

    border:
        1px solid
        rgba(32,184,255,.22);

    background:
        linear-gradient(
            145deg,
            rgba(32,184,255,.13),
            rgba(255,255,255,.02)
        );

    box-shadow:
        var(--lp-shadow);

}


.lp-hero-image-card::before {

    content: "";

    position: absolute;

    width: 120px;
    height: 120px;

    right: -25px;
    top: -25px;

    border:
        2px solid
        rgba(32,184,255,.40);

    border-radius: 20px;

    z-index: -1;

}


.lp-hero-image-card img {

    display: block;

    width: 100%;

    height: 520px;

    object-fit: cover;

    object-position: center;

    border-radius: 18px;

}


.lp-image-caption {
    position: absolute;
    left: 27px;
    bottom: 12px;

    padding: 8px 12px;
    border-radius: 10px;

    background: rgba(2, 16, 29, 0.85);
    border: 1px solid rgba(255, 255, 255, 0.11);

    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);

    display: flex;
    flex-direction: column;
    gap: 2px;

    text-align: center;
}

.lp-image-caption strong {
    display: block;
    font-size: 13px;
    font-weight: 700;
    line-height: 1.2;
    margin: 0;

    background: linear-gradient(90deg, #20b8ff, #8b5cf6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.lp-image-caption span {
    display: block;
    color: #62d4ff;
    font-size: 10px;
    font-weight: 500;
    line-height: 1.2;
    margin: 0 !important;
    text-align: center;
}

/* =========================================================
   STATS
========================================================= */

.lp-stats {

    padding: 15px 0;

    background: var(--lp-bg-2);

    border-top:
        1px solid
        var(--lp-border);

    border-bottom:
        1px solid
        var(--lp-border);

}


.lp-stats-grid {

    display: grid;

    grid-template-columns:
        repeat(4, 1fr);

}


.lp-stat {

    text-align: center;

    padding:
        20px;

    border-right:
        1px solid
        var(--lp-border);

}


.lp-stat:last-child {

    border-right: 0;

}


.lp-stat strong {

    display: block;

    color: var(--lp-primary);

    font-size: 28px;

    font-weight: 850;

}


.lp-stat span {

    color: var(--lp-muted);

    font-size: 11px;

    text-transform: uppercase;

    letter-spacing: 1px;

}


/* =========================================================
   ABOUT
========================================================= */

.lp-about {

    background: var(--lp-bg);

}


.lp-about-grid {

    display: grid;

    grid-template-columns:
        .75fr
        1.25fr;

    gap: 70px;

    align-items: center;

}


.lp-about-image {

    position: relative;

    max-width: 400px;

}


.lp-about-image img {

    width: 100%;

    height: 450px;

    object-fit: cover;

    border-radius: 22px;

    border:
        1px solid
        var(--lp-border);

    box-shadow:
        var(--lp-shadow);

}


.lp-about-image::after {

    content: "";

    position: absolute;

    left: -14px;
    bottom: -14px;

    width: 100%;
    height: 100%;

    border:
        1px solid
        rgba(32,184,255,.25);

    border-radius: 22px;

    z-index: -1;

}


.lp-about-content h3 {

    margin: 0 0 18px;

    color: #fff;

    font-size: 30px;

}


.lp-about-content p {

    color: var(--lp-muted);

    line-height: 1.9;

    margin-bottom: 15px;

}


.lp-about-content strong {

    color: #dcefff;

}


.lp-about-points {

    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 11px;

    margin-top: 25px;

}


.lp-about-point {

    padding: 15px;

    border-radius: 11px;

    border:
        1px solid
        var(--lp-border);

    background:
        rgba(255,255,255,.025);

    color: #c9dbe9;

    font-size: 12px;

}


.lp-about-point i {

    color: var(--lp-primary);

    margin-right: 7px;

}


/* =========================================================
   EXPERIENCE
========================================================= */

.lp-experience {

    background: var(--lp-bg-2);

}


.lp-experience-card {

    max-width: 950px;

    margin: auto;

    padding: 36px;

    border-radius: 20px;

    border:
        1px solid
        rgba(32,184,255,.18);

    background:
        linear-gradient(
            145deg,
            rgba(12,43,70,.80),
            rgba(5,26,45,.85)
        );

    box-shadow:
        var(--lp-shadow);

    position: relative;

    overflow: hidden;

}


.lp-experience-card::before {

    content: "";

    position: absolute;

    left: 0;
    top: 0;
    bottom: 0;

    width: 4px;

    background:
        linear-gradient(
            180deg,
            var(--lp-primary),
            #08679f
        );

}


.lp-current {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding:
        6px
        11px;

    color: #7bf0aa;

    background:
        rgba(45,211,111,.07);

    border:
        1px solid
        rgba(45,211,111,.18);

    border-radius: 999px;

    font-size: 10px;

    font-weight: 800;

    text-transform: uppercase;

    margin-bottom: 20px;

}


.lp-current i {

    font-size: 5px;

}


.lp-exp-header {

    display: flex;

    align-items: flex-start;

    justify-content: space-between;

    gap: 20px;

}


.lp-company {

    color: #fff;

    font-size: 24px;

    font-weight: 850;

}


.lp-position {

    color: var(--lp-primary);

    margin-top: 5px;

    font-size: 14px;

    font-weight: 700;

}


.lp-date {

    color: var(--lp-muted);

    padding:
        8px
        11px;

    border:
        1px solid
        var(--lp-border);

    border-radius: 8px;

    font-size: 11px;

}


.lp-experience-summary {

    color: var(--lp-muted);

    line-height: 1.85;

    margin:
        22px
        0;

}


.lp-experience-list {

    margin: 0;

    padding: 0;

    list-style: none;

}


.lp-experience-list li {

    display: flex;

    gap: 10px;

    color: #c6d8e6;

    font-size: 13px;

    line-height: 1.7;

    margin-bottom: 10px;

}


.lp-experience-list i {

    color: var(--lp-primary);

    margin-top: 5px;

}


.lp-tags {

    display: flex;

    flex-wrap: wrap;

    gap: 7px;

    margin-top: 23px;

    padding-top: 20px;

    border-top:
        1px solid
        var(--lp-border);

}


.lp-tag {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding:
        7px
        12px;

    border-radius: 8px;

    color: #d3e4f2;

    background:
        rgba(32,184,255,.06);

    border:
        1px solid
        rgba(32,184,255,.14);

    font-size: 11px;

    font-weight: 650;

    transition:
        background .25s ease,
        border-color .25s ease,
        transform .25s ease;

}


.lp-tag:hover {

    background: rgba(32,184,255,.13);

    border-color: rgba(32,184,255,.4);

    transform: translateY(-2px);

    color: #fff;

}


.lp-tag i {

    font-size: 14px;

    width: 15px;

    text-align: center;

}


/* =========================================================
   SKILLS
========================================================= */

.lp-skills {

    background: var(--lp-bg);

}


.lp-skills-grid {

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 18px;

}


.lp-skill-card {

    padding: 23px;

    border-radius: 17px;

    border:
        1px solid
        var(--lp-border);

    background:
        rgba(255,255,255,.018);

    transition: .25s ease;

}


.lp-skill-card:hover {

    transform:
        translateY(-5px);

    border-color:
        rgba(32,184,255,.3);

    box-shadow:
        0 18px 45px
        rgba(0,0,0,.20);

}


.lp-skill-title {

    display: flex;

    align-items: center;

    gap: 9px;

    color: #fff;

    font-size: 15px;

    font-weight: 750;

    margin-bottom: 17px;

}


.lp-skill-title i {

    color: var(--lp-primary);

}


.lp-skill-list {

    display: flex;

    flex-wrap: wrap;

    gap: 7px;

}


.lp-skill {

    padding:
        7px
        10px;

    border-radius: 7px;

    background:
        rgba(32,184,255,.05);

    border:
        1px solid
        rgba(32,184,255,.10);

    color: #bcd2e2;

    font-size: 10px;

}


/* =========================================================
   EDUCATION
========================================================= */

.lp-education {

    background: var(--lp-bg-2);

}


.lp-education-grid {

    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 18px;

}


.lp-education-card {

    padding: 28px;

    border:
        1px solid
        var(--lp-border);

    border-radius: 17px;

    background:
        rgba(255,255,255,.02);

}


.lp-education-icon {

    width: 45px;
    height: 45px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 10px;

    background:
        rgba(32,184,255,.08);

    color: var(--lp-primary);

    margin-bottom: 20px;

}


.lp-education-card h3 {

    margin: 0 0 7px;

    color: #fff;

    font-size: 19px;

}


.lp-education-card h4 {

    margin: 0 0 9px;

    color: #a9c3d6;

    font-size: 13px;

}


.lp-education-date {

    color: var(--lp-primary);

    font-size: 11px;

    font-weight: 700;

    margin-bottom: 14px;

}


.lp-education-card p {

    color: var(--lp-muted);

    line-height: 1.7;

    font-size: 12px;

    margin: 0;

}


/* =========================================================
   PROJECTS
========================================================= */

.portfolio-projects {
    position: relative;
    padding: 20px 20px;
    background:
        radial-gradient(
            circle at 10% 20%,
            rgba(0, 184, 255, 0.08),
            transparent 35%
        ),
        radial-gradient(
            circle at 90% 80%,
            rgba(82, 245, 212, 0.05),
            transparent 35%
        ),
        #061426;
    overflow: hidden;
}


.projects-container {
    width: 100%;
    max-width: 1250px;
    margin: auto;
}


/* =========================================================
   SECTION HEADER
========================================================= */

.section-heading {
    max-width: 700px;
    margin: 0 auto 55px;
    text-align: center;
}


.section-small-title {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    color: #00b8ff;

    font-size: 13px;
    font-weight: 700;

    letter-spacing: 2px;

    margin-bottom: 12px;
}


.section-heading h2 {
    margin: 0;

    color: #ffffff;

    font-size: clamp(32px, 5vw, 48px);

    font-weight: 800;
}


.section-heading h2 span {
    color: #00b8ff;
}


.section-heading p {
    margin-top: 15px;

    color: #8899b5;

    font-size: 16px;

    line-height: 1.7;
}


/* =========================================================
   PROJECT GRID
========================================================= */

.projects-grid {
    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 25px;
}


/* =========================================================
   PROJECT CARD
========================================================= */

.project-card {
    position: relative;

    background:
        linear-gradient(
            145deg,
            rgba(16, 39, 69, 0.95),
            rgba(6, 22, 40, 0.98)
        );

    border: 1px solid rgba(0, 184, 255, 0.20);

    border-radius: 18px;

    overflow: hidden;

    transition:
        transform .35s ease,
        border-color .35s ease,
        box-shadow .35s ease;
}


.project-card:hover {
    transform: translateY(-8px);

    border-color: rgba(0, 184, 255, 0.65);

    box-shadow:
        0 20px 50px rgba(0, 0, 0, .35),
        0 0 30px rgba(0, 184, 255, .08);
}


/* =========================================================
   IMAGE
========================================================= */

.project-image-wrapper {
    position: relative;

    width: 100%;

    aspect-ratio: 16 / 9;

    overflow: hidden;

    background: #091d33;
}


.project-image {
    width: 100%;
    height: 100%;

    object-fit: cover;

    display: block;

    transition: transform .5s ease;
}


.project-card:hover .project-image {
    transform: scale(1.06);
}


.project-no-image {
    width: 100%;
    height: 100%;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #00b8ff;

    font-size: 50px;
}


/* =========================================================
   IMAGE OVERLAY
========================================================= */

.project-overlay {
    position: absolute;

    inset: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    background:
        rgba(3, 16, 30, .78);

    opacity: 0;

    transition: opacity .3s ease;
}


.project-card:hover .project-overlay {
    opacity: 1;
}


.project-view-btn {
    display: inline-flex;

    align-items: center;

    gap: 9px;

    padding: 12px 20px;

    border: 1px solid #00b8ff;

    border-radius: 8px;

    background: rgba(0, 184, 255, .12);

    color: #ffffff;

    font-size: 14px;

    font-weight: 600;

    cursor: pointer;

    backdrop-filter: blur(8px);

    transition: .3s ease;
}


.project-view-btn:hover {
    background: #00b8ff;

    color: #061426;

    transform: translateY(-2px);
}


/* =========================================================
   PROJECT CONTENT
========================================================= */

.project-content {
    padding: 22px;
}


.project-category {
    display: inline-block;

    margin-bottom: 9px;

    color: #00b8ff;

    font-size: 11px;

    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: 1.5px;
}


.project-content h3 {
    margin: 0 0 10px;

    color: #ffffff;

    font-size: 21px;

    font-weight: 700;
}


.project-content p {
    margin: 0 0 18px;

    color: #91a2ba;

    font-size: 14px;

    line-height: 1.65;
}


/* =========================================================
   TECHNOLOGIES
========================================================= */

.project-technologies {
    display: flex;

    flex-wrap: wrap;

    gap: 7px;

    margin-bottom: 20px;
}


.technology-badge {
    display: inline-flex;

    align-items: center;

    gap: 6px;

    padding: 6px 9px;

    border-radius: 7px;

    background: rgba(0, 184, 255, .06);

    border: 1px solid rgba(0, 184, 255, .15);

    color: #c7d4e8;

    font-size: 11px;

    transition: .25s ease;
}


.technology-badge i {
    font-size: 15px;
}


.technology-badge:hover {
    background: rgba(0, 184, 255, .12);

    border-color: rgba(0, 184, 255, .35);

    transform: translateY(-2px);
}


.technology-more {
    display: inline-flex;

    align-items: center;

    padding: 5px 9px;

    border-radius: 7px;

    background: rgba(255,255,255,.05);

    color: #8fa1b9;

    font-size: 11px;
}


/* =========================================================
   VIEW PROJECT BUTTON
========================================================= */

.project-details-btn {
    width: 100%;

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 12px 15px;

    border: 1px solid rgba(0, 184, 255, .25);

    border-radius: 8px;

    background: transparent;

    color: #00b8ff;

    font-size: 13px;

    font-weight: 600;

    cursor: pointer;

    transition: .3s ease;
}


.project-details-btn:hover {
    background: #00b8ff;

    color: #061426;

    border-color: #00b8ff;
}


.project-details-btn i {
    transition: transform .3s ease;
}


.project-details-btn:hover i {
    transform: translateX(5px);
}


/* =========================================================
   MODAL
========================================================= */

.project-modal {
    position: fixed;

    inset: 0;

    z-index: 99999;

    display: none;

    align-items: center;
    justify-content: center;

    padding: 20px;
}


.project-modal.active {
    display: flex;
}


.project-modal-backdrop {
    position: absolute;

    inset: 0;

    background:
        rgba(1, 8, 17, .86);

    backdrop-filter: blur(12px);

    -webkit-backdrop-filter: blur(12px);
}


/* =========================================================
   MODAL CONTENT
========================================================= */

.project-modal-content {
    position: relative;

    width: 100%;

    max-width: 950px;

    max-height: 90vh;

    overflow-y: auto;

    background:
        linear-gradient(
            145deg,
            #0c223d,
            #061426
        );

    border: 1px solid rgba(0, 184, 255, .30);

    border-radius: 20px;

    box-shadow:
        0 30px 100px rgba(0,0,0,.55);

    animation: modalOpen .3s ease;
}


@keyframes modalOpen {

    from {
        opacity: 0;
        transform: scale(.95) translateY(20px);
    }

    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

}


/* =========================================================
   CLOSE
========================================================= */

.modal-close {
    position: absolute;

    top: 15px;
    right: 15px;

    z-index: 10;

    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    border: 1px solid rgba(255,255,255,.15);

    border-radius: 50%;

    background: rgba(3,15,28,.75);

    color: #ffffff;

    cursor: pointer;

    font-size: 17px;

    transition: .3s ease;
}


.modal-close:hover {
    background: #ff3f6c;

    border-color: #ff3f6c;

    transform: rotate(90deg);
}


/* =========================================================
   MODAL IMAGE
========================================================= */

.modal-project-image {
    width: 100%;

    max-height: 420px;

    overflow: hidden;

    background: #061426;
}


.modal-project-image img {
    width: 100%;

    max-height: 420px;

    object-fit: cover;

    display: block;
}


/* =========================================================
   MODAL BODY
========================================================= */

.modal-project-body {
    padding: 35px;
}


.modal-category {
    color: #00b8ff;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 2px;

    text-transform: uppercase;
}


.modal-project-body h2 {
    margin: 8px 0 18px;

    color: #ffffff;

    font-size: clamp(28px, 4vw, 40px);
}


.modal-description {
    color: #a9b8ca;

    font-size: 15px;

    line-height: 1.8;
}


/* =========================================================
   MODAL TECHNOLOGIES
========================================================= */

.modal-tech-section {
    margin-top: 30px;

    padding-top: 25px;

    border-top: 1px solid rgba(255,255,255,.08);
}


.modal-tech-section h4 {
    margin: 0 0 18px;

    color: #ffffff;

    font-size: 17px;
}


.modal-tech-section h4 i {
    margin-right: 8px;

    color: #00b8ff;
}


.modal-technologies {
    display: flex;

    flex-wrap: wrap;

    gap: 10px;
}


.modal-tech-item {
    display: flex;

    align-items: center;

    gap: 9px;

    padding: 10px 14px;

    border: 1px solid rgba(0, 184, 255, .20);

    border-radius: 9px;

    background: rgba(0, 184, 255, .05);

    color: #dce7f5;

    font-size: 13px;

    transition: .25s ease;
}


.modal-tech-item i {
    font-size: 21px;
}


.modal-tech-item:hover {
    border-color: #00b8ff;

    background: rgba(0,184,255,.10);

    transform: translateY(-2px);
}


/* =========================================================
   MODAL BUTTONS
========================================================= */

.modal-project-actions {
    display: flex;

    flex-wrap: wrap;

    gap: 12px;

    margin-top: 30px;
}


.modal-btn {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 9px;

    min-width: 140px;

    padding: 12px 20px;

    border-radius: 8px;

    text-decoration: none;

    font-size: 14px;

    font-weight: 600;

    transition: .3s ease;
}


.github-btn {
    background: #ffffff;

    color: #07182e;
}


.github-btn:hover {
    transform: translateY(-3px);

    box-shadow: 0 10px 25px rgba(255,255,255,.15);
}


.live-btn {
    background: #00b8ff;

    color: #061426;
}


.live-btn:hover {
    background: #52f5d4;

    transform: translateY(-3px);
}


/* =========================================================
   NO PROJECTS
========================================================= */

.no-projects {
    grid-column: 1 / -1;

    text-align: center;

    padding: 70px 20px;

    color: #8899b5;
}


.no-projects i {
    color: #00b8ff;

    font-size: 45px;

    margin-bottom: 15px;
}


.no-projects h3 {
    color: #ffffff;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1000px) {

    .projects-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 650px) {

    .portfolio-projects {
        padding: 70px 15px;
    }


    .projects-grid {
        grid-template-columns: 1fr;

        gap: 20px;
    }


    .section-heading {
        margin-bottom: 35px;
    }


    .project-content {
        padding: 18px;
    }


    .project-content h3 {
        font-size: 19px;
    }


    .project-technologies {
        gap: 6px;
    }


    .technology-badge {
        padding: 5px 7px;

        font-size: 10px;
    }


    .project-modal {
        padding: 10px;
    }


    .project-modal-content {
        max-height: 94vh;

        border-radius: 15px;
    }


    .modal-project-body {
        padding: 25px 20px;
    }


    .modal-project-image,
    .modal-project-image img {
        max-height: 240px;
    }


    .modal-project-actions {
        flex-direction: column;
    }


    .modal-btn {
        width: 100%;
    }

}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1050px) {

    .lp-hero-grid {

        gap: 45px;

    }

    .lp-project-grid {

        grid-template-columns:
            repeat(2, 1fr);

    }

    .lp-skills-grid {

        grid-template-columns:
            repeat(2, 1fr);

    }

}


@media (max-width: 850px) {

    .lp-section {

        padding:
            80px 0;

    }


    .lp-hero {

        padding:
            100px 0
            70px;

    }


    .lp-hero-grid {

        grid-template-columns: 1fr;

        text-align: center;

    }


    .lp-hero-description {

        margin-left: auto;
        margin-right: auto;

    }


    .lp-actions,
    .lp-social {

        justify-content: center;

    }


    
    .lp-hero-image{
        width:100%;
    }


    .lp-about-grid {

        grid-template-columns: 1fr;

        gap: 45px;

    }


    .lp-about-image {

        margin: auto;

    }


    .lp-about-content {

        text-align: center;

    }


    .lp-about-points {

        text-align: left;

    }


    .lp-exp-header {

        flex-direction: column;

    }


    .lp-date {

        white-space: normal;

    }

}


@media (max-width: 650px) {

    .lp-container {

        width:
            calc(100% - 30px);

    }


    .lp-stats-grid {

        grid-template-columns:
            repeat(2, 1fr);

    }


    .lp-stat {

        border-bottom:
            1px solid
            var(--lp-border);

    }


    .lp-stat:nth-child(2) {

        border-right: 0;

    }


    .lp-stat:nth-child(3),
    .lp-stat:nth-child(4) {

        border-bottom: 0;

    }


    .lp-project-grid,
    .lp-skills-grid,
    .lp-education-grid {

        grid-template-columns: 1fr;

    }


    .lp-about-points {

        grid-template-columns: 1fr;

    }


    .lp-hero h1 {

        letter-spacing:
            -2px;

    }


    .lp-hero-image-card img {

        height: 200px;

    }


    .lp-experience-card {

        padding:
            27px
            22px;

    }


    .lp-contact-card {

        padding:
            45px
            20px;

    }

}


@media (max-width: 430px) {

    .lp-hero {

        padding-top:
            90px;

    }


    .lp-hero h1 {

        font-size:
            30px;

    }


    .lp-hero-role {

        font-size:
            19px;

    }


    .lp-actions {

        flex-direction: column;

    }


    .lp-button {

        width: 100%;

    }




    .lp-stat strong {

        font-size:
            23px;

    }


    .lp-stat span {

        font-size:
            9px;

    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    *,
    *::before,
    *::after {

        scroll-behavior: auto !important;

        transition: none !important;

        animation: none !important;

    }

}
/* =========================================================
   TECHNOLOGY SECTION
========================================================= */

.technology-section {
    position: relative;

    padding: 20px 20px;

    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(0, 184, 255, .08),
            transparent 35%
        ),
        radial-gradient(
            circle at 90% 90%,
            rgba(82, 245, 212, .05),
            transparent 35%
        ),
        #061426;

    overflow: hidden;
}


.technology-container {
    width: 100%;
    max-width: 1200px;

    margin: auto;
}


/* =========================================================
   HEADER
========================================================= */

.technology-heading {
    max-width: 700px;

    margin: 0 auto 55px;

    text-align: center;
}


.technology-label {
    display: inline-flex;

    align-items: center;

    gap: 8px;

    margin-bottom: 12px;

    color: #52f5d4;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 2px;
}


.technology-heading h2 {
    margin: 0;

    color: #ffffff;

    font-size: clamp(32px, 5vw, 48px);

    font-weight: 800;
}


.technology-heading h2 span {
    color: #00b8ff;
}


.technology-heading p {
    margin: 15px 0 0;

    color: #8fa1b9;

    font-size: 16px;

    line-height: 1.7;
}


/* =========================================================
   GRID
========================================================= */

.technology-grid {
    display: grid;

    grid-template-columns:
        repeat(auto-fit, minmax(300px, 1fr));

    gap: 22px;
}


/* =========================================================
   CARD
========================================================= */

.technology-card {
    position: relative;

    padding: 25px;

    background:
        linear-gradient(
            145deg,
            rgba(15, 39, 68, .95),
            rgba(7, 23, 41, .98)
        );

    border: 1px solid rgba(0, 184, 255, .15);

    border-radius: 16px;

    transition:
        transform .3s ease,
        border-color .3s ease,
        box-shadow .3s ease;
}


.technology-card:hover {
    transform: translateY(-5px);

    border-color: rgba(0, 184, 255, .45);

    box-shadow:
        0 20px 45px rgba(0, 0, 0, .25),
        0 0 25px rgba(0, 184, 255, .06);
}


/* =========================================================
   CARD HEADER
========================================================= */

.technology-card-header {
    display: flex;

    align-items: center;

    gap: 15px;

    margin-bottom: 24px;
}


.technology-card-icon {
    flex-shrink: 0;

    width: 50px;
    height: 50px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 12px;

    font-size: 20px;

    color: #52f5d4;

    background: rgba(82, 245, 212, .08);

    border: 1px solid rgba(82, 245, 212, .15);
}


.technology-card-header h3 {
    margin: 0 0 4px;

    color: #ffffff;

    font-size: 18px;

    font-weight: 700;
}


.technology-card-header p {
    margin: 0;

    color: #71849e;

    font-size: 12px;

    line-height: 1.5;
}


/* =========================================================
   TECHNOLOGY LIST
========================================================= */

.technology-list {
    display: flex;

    flex-wrap: wrap;

    gap: 9px;
}


.tech-item {
    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 9px 12px;

    background: rgba(0, 184, 255, .045);

    border: 1px solid rgba(0, 184, 255, .13);

    border-radius: 8px;

    color: #c8d5e5;

    font-size: 12px;

    font-weight: 500;

    transition:
        background .25s ease,
        border-color .25s ease,
        transform .25s ease;
}


.tech-item i {
    width: 19px;

    text-align: center;

    font-size: 19px;
}


.tech-item:hover {
    background: rgba(0, 184, 255, .10);

    border-color: rgba(0, 184, 255, .35);

    transform: translateY(-2px);

    color: #ffffff;
}


/* =========================================================
   SPECIAL ICONS
========================================================= */

.backend-icon {
    color: #ff7b72;
}

.database-icon {
    color: #00b8ff;
}

.frontend-icon {
    color: #f7df1e;
}

.tools-icon {
    color: #52f5d4;
}

.backend-focus-icon {
    color: #c792ea;
}

.professional-icon {
    color: #ff9f43;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 800px) {

    .technology-section {
        padding: 80px 18px;
    }

    .technology-grid {
        grid-template-columns: 1fr;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 500px) {

    .technology-section {
        padding: 70px 14px;
    }

    .technology-heading {
        margin-bottom: 35px;
    }

    .technology-card {
        padding: 20px;
    }

    .technology-card-header {
        align-items: flex-start;
    }

    .technology-card-icon {
        width: 44px;
        height: 44px;

        font-size: 17px;
    }

    .technology-card-header h3 {
        font-size: 16px;
    }

    .technology-card-header p {
        font-size: 11px;
    }

    .tech-item {
        padding: 8px 10px;

        font-size: 11px;
    }

    .tech-item i {
        font-size: 17px;
    }

}

</style>

@endpush


@section('content')

<div class="lp-page">


{{-- =====================================================
     HERO
===================================================== --}}

<section class="lp-hero" id="home">

    <div class="lp-container lp-hero-grid">


        {{-- HERO CONTENT --}}

        <div>

            <div class="lp-hero-badge">

                Welcome to my world of code
            </div>


            <h1>

               I'm Lakshman Pal

            </h1>


            <div class="lp-hero-role">


                <span>Software Developer</span>

                ·  Turning Ideas Into Scalable Solutions

            </div>


            <p class="lp-hero-description">

               I build scalable, high-performance web applications with clean architecture, powerful APIs, and maintainable code. With expertise in

                <strong>
                    Python, Django, Laravel, Machine Learning(ML), Artificial Intelligence(AI), and React.
                </strong>
                    I turn complex ideas into reliable digital solutions built to perform, scale, and deliver real-world impact.
            </p>


            <div class="lp-actions">

                <a href="{{ route('hire-me') }}"
                   class="lp-button lp-button-primary">

                    <i class="fas fa-paper-plane"></i>

                    Hire Me

                </a>


                <a href="{{ url('/#projects') }}"
                   class="lp-button lp-button-outline">

                    <i class="fas fa-code"></i>

                    View My Work

                </a>


                <a href="{{ asset('resume/Lakshman_Pal_CV.pdf') }}"
                   class="lp-button lp-button-outline"
                   download>

                    <i class="fas fa-download"></i>

                    Download CV

                </a>

            </div>


            <div class="lp-social">

                <a href="https://github.com/LakshmanMCA"
                   target="_blank"
                   rel="noopener"
                   aria-label="GitHub">

                    <i class="fab fa-github"></i>

                </a>


                <a href="https://www.linkedin.com/in/lakshman-pal-285b172aa/"
                   target="_blank"
                   rel="noopener"
                   aria-label="LinkedIn">

                    <i class="fab fa-linkedin-in"></i>

                </a>


                <a href="mailto:pallakshman0@gmail.com"
                   aria-label="Email">

                    <i class="fas fa-envelope"></i>

                </a>


                <a href="https://stackoverflow.com/users/33013024/lakshman-pal?tab=profile"
                   target="_blank"
                   rel="noopener"
                   aria-label="Stack Overflow">

                    <i class="fab fa-stack-overflow"></i>

                </a>


                <a href="https://www.instagram.com/lakshman.pal.71216"
                   target="_blank"
                   rel="noopener"
                   aria-label="Instagram">

                    <i class="fab fa-instagram"></i>

                </a>

            </div>

        </div>


        {{-- HERO IMAGE --}}

        <div class="lp-hero-image-wrap">

    <div class="lp-hero-image-card">

        <img
            src="{{ asset('images/banner_portfolio.jpg') }}"
            alt="Lakshman Pal Software Developer"
            loading="eager"
            class="lp-hero-image"
        >

        <div class="lp-image-caption">

            <strong>
               Lakshman Pal
            </strong>
            <span>
                Software Developer
            </span>

        </div>

    </div>

</div>


    </div>

</section>



{{-- =====================================================
     STATS
===================================================== --}}

<section class="lp-stats">

    <div class="lp-container">

        <div class="lp-stats-grid">

            <div class="lp-stat">

                <strong>1+</strong>

                <span>
                    Year Professional Experience
                </span>

            </div>


            <div class="lp-stat">

                <strong>7+</strong>

                <span>
                    Projects
                </span>

            </div>


            <div class="lp-stat">

                <strong>15+</strong>

                <span>
                    Technologies
                </span>

            </div>


            <div class="lp-stat">

                <strong>API</strong>

                <span>
                    Backend Focus
                </span>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     ABOUT
===================================================== --}}

<section class="lp-section lp-about"
         id="about">

    <div class="lp-container">


        <div class="lp-section-head">

            <div class="lp-eyebrow">
                About Me
            </div>

            <h2 class="lp-section-title">
                Building useful software with a backend-first mindset.
            </h2>

            <p class="lp-section-desc">
                I enjoy solving practical problems through clean,
                maintainable and scalable software.
            </p>

        </div>


        <div class="lp-about-grid">


            <div class="lp-about-image">

                <img
                    src="{{ asset('images/about-image.jpg') }}"
                    alt="Lakshman Pal"
                    loading="lazy"
                >

            </div>


            <div class="lp-about-content">

                <h3>
                    Hello, I'm Lakshman Pal.
                </h3>


                <p>

                    I am a
                    <strong>Backend Developer</strong>
                    currently working at
                    <strong>Leelija Web Solutions</strong>.

                    My work focuses on web applications,
                    backend logic, APIs, database operations
                    and admin platforms.

                </p>


                <p>

                    My main development stack includes
                    <strong>
                        PHP, Laravel, Filament, Python,
                        Django and MySQL
                    </strong>,

                    with additional experience across React,
                    JavaScript, TypeScript, Git and modern
                    frontend technologies.

                </p>


                <p>

                    I completed my
                    <strong>Master of Computer Application (MCA)</strong>
                    and enjoy solving real-world development
                    problems while improving code quality,
                    performance and maintainability.

                </p>


                <div class="lp-about-points">


                    <div class="lp-about-point">

                        <i class="fas fa-server"></i>

                        Backend Development

                    </div>


                    <div class="lp-about-point">

                        <i class="fas fa-plug"></i>

                        REST API Development

                    </div>


                    <div class="lp-about-point">

                        <i class="fas fa-database"></i>

                        Database Solutions

                    </div>


                    <div class="lp-about-point">

                        <i class="fas fa-gauge-high"></i>

                        Performance & Clean Code

                    </div>


                </div>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     EXPERIENCE
===================================================== --}}

<section class="lp-section lp-experience"
         id="experience">

    <div class="lp-container">


        <div class="lp-section-head">

            <div class="lp-eyebrow">
                Experience
            </div>

            <h2 class="lp-section-title">
                Professional Journey
            </h2>

            <p class="lp-section-desc">
                My professional experience and technologies
                I work with.
            </p>

        </div>


        <div class="lp-experience-card">


            <div class="lp-current">

                <i class="fas fa-circle"></i>

                Current Position

            </div>


            <div class="lp-exp-header">

                <div>

                    <div class="lp-company">
                        Leelija Web Solutions
                    </div>

                    <div class="lp-position">
                        Backend Developer
                    </div>

                </div>


                <div class="lp-date">

                    <i class="far fa-calendar"></i>

                    June 2025 — Present

                </div>

            </div>


            <p class="lp-experience-summary">

                Working as a Backend Developer,
                contributing to web application development,
                backend architecture, REST API development,
                database operations and admin systems.

            </p>


            <ul class="lp-experience-list">

                <li>

                    <i class="fas fa-check"></i>

                    Developing and maintaining web applications
                    using Laravel, PHP, Python and Django.

                </li>


                <li>

                    <i class="fas fa-check"></i>

                    Working with APIs, database design,
                    backend logic and application performance.

                </li>


                <li>

                    <i class="fas fa-check"></i>

                    Building maintainable backend systems
                    and practical business solutions.

                </li>


                <li>

                    <i class="fas fa-check"></i>

                    Collaborating with team members to
                    deliver production-ready applications.

                </li>

            </ul>


            <div class="lp-tags">

                <span class="lp-tag"><i class="devicon-laravel-plain colored"></i>Laravel</span>
                <span class="lp-tag"><i class="devicon-php-plain colored"></i>PHP</span>
                <span class="lp-tag"><i class="devicon-python-plain colored"></i>Python</span>
                <span class="lp-tag"><i class="devicon-django-plain colored"></i>Django</span>
                <span class="lp-tag"><i class="devicon-mysql-plain colored"></i>MySQL</span>
                <span class="lp-tag"><i class="fas fa-cloud"></i>REST API</span>
                <span class="lp-tag"><i class="devicon-git-plain colored"></i>Git</span>
                <span class="lp-tag"><i class="devicon-filamentphp-plain"></i>Filament</span>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     SKILLS
===================================================== --}}

<!-- =========================================================
     TECHNOLOGIES I WORK WITH
========================================================= -->

<section class="technology-section" id="skills">

    <div class="technology-container">

        <!-- Section Header -->
        <div class="technology-heading">

            <span class="technology-label">
                <i class="fas fa-code"></i>
                MY TECH STACK
            </span>

            <h2>
                Technologies I <span>Work With</span>
            </h2>

            <p>
                Technologies and tools I use to build web applications
                and backend systems.
            </p>

        </div>


        <!-- Technology Categories -->
        <div class="technology-grid">


            <!-- =================================================
                 BACKEND DEVELOPMENT
            ================================================== -->

            <div class="technology-card">

                <div class="technology-card-header">

                    <div class="technology-card-icon backend-icon">
                        <i class="fas fa-server"></i>
                    </div>

                    <div>
                        <h3>Backend Development</h3>

                        <p>
                            Building scalable backend systems and APIs.
                        </p>
                    </div>

                </div>


                <div class="technology-list">

                    <div class="tech-item">
                        <i class="devicon-php-plain colored"></i>
                        <span>PHP</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-laravel-original colored"></i>
                        <span>Laravel</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-python-plain colored"></i>
                        <span>Python</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-django-plain colored"></i>
                        <span>Django</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-filamentphp-plain"></i>
                        <span>Filament</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 DATABASE & APIS
            ================================================== -->

            <div class="technology-card">

                <div class="technology-card-header">

                    <div class="technology-card-icon database-icon">
                        <i class="fas fa-database"></i>
                    </div>

                    <div>
                        <h3>Database & APIs</h3>

                        <p>
                            Designing databases and building secure APIs.
                        </p>
                    </div>

                </div>


                <div class="technology-list">

                    <div class="tech-item">
                        <i class="devicon-mysql-plain colored"></i>
                        <span>MySQL</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-cloud"></i>
                        <span>REST API</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-code"></i>
                        <span>JSON API</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-shield-halved"></i>
                        <span>API Authentication</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-diagram-project"></i>
                        <span>Database Design</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 FRONTEND
            ================================================== -->

            <div class="technology-card">

                <div class="technology-card-header">

                    <div class="technology-card-icon frontend-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>

                    <div>
                        <h3>Frontend</h3>

                        <p>
                            Creating responsive and interactive interfaces.
                        </p>
                    </div>

                </div>


                <div class="technology-list">

                    <div class="tech-item">
                        <i class="devicon-html5-plain colored"></i>
                        <span>HTML5</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-css3-plain colored"></i>
                        <span>CSS3</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-javascript-plain colored"></i>
                        <span>JavaScript</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-react-original colored"></i>
                        <span>React</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-typescript-plain colored"></i>
                        <span>TypeScript</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-bootstrap-plain colored"></i>
                        <span>Bootstrap</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 DEVELOPMENT TOOLS
            ================================================== -->

            <div class="technology-card">

                <div class="technology-card-header">

                    <div class="technology-card-icon tools-icon">
                        <i class="fas fa-toolbox"></i>
                    </div>

                    <div>
                        <h3>Development Tools</h3>

                        <p>
                            Tools I use for development and deployment.
                        </p>
                    </div>

                </div>


                <div class="technology-list">

                    <div class="tech-item">
                        <i class="devicon-git-plain colored"></i>
                        <span>Git</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-github-original"></i>
                        <span>GitHub</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-linux-plain"></i>
                        <span>Linux</span>
                    </div>

                    <div class="tech-item">
                        <i class="devicon-vscode-plain colored"></i>
                        <span>VS Code</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-paper-plane"></i>
                        <span>Postman</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 BACKEND FOCUS
            ================================================== -->

            <div class="technology-card">

                <div class="technology-card-header">

                    <div class="technology-card-icon backend-focus-icon">
                        <i class="fas fa-gears"></i>
                    </div>

                    <div>
                        <h3>Backend Focus</h3>

                        <p>
                            Areas I focus on when developing systems.
                        </p>
                    </div>

                </div>


                <div class="technology-list">

                    <div class="tech-item">
                        <i class="fas fa-code"></i>
                        <span>API Development</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-lock"></i>
                        <span>Authentication</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-database"></i>
                        <span>CRUD</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-gauge-high"></i>
                        <span>Performance</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-check-double"></i>
                        <span>Clean Code</span>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 PROFESSIONAL SKILLS
            ================================================== -->

            <div class="technology-card">

                <div class="technology-card-header">

                    <div class="technology-card-icon professional-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>

                    <div>
                        <h3>Professional Skills</h3>

                        <p>
                            Skills that help me work effectively with teams.
                        </p>
                    </div>

                </div>


                <div class="technology-list">

                    <div class="tech-item">
                        <i class="fas fa-lightbulb"></i>
                        <span>Problem Solving</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-users"></i>
                        <span>Teamwork</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-comments"></i>
                        <span>Communication</span>
                    </div>

                    <div class="tech-item">
                        <i class="fas fa-book-open"></i>
                        <span>Continuous Learning</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     EDUCATION
===================================================== --}}

<section class="lp-section lp-education">

    <div class="lp-container">


        <div class="lp-section-head">

            <div class="lp-eyebrow">
                Education
            </div>

            <h2 class="lp-section-title">
                Academic Background
            </h2>

        </div>


        <div class="lp-education-grid">


            <div class="lp-education-card">

                <div class="lp-education-icon">

                    <i class="fas fa-graduation-cap"></i>

                </div>


                <h3>
                    Master of Computer Application(MCA)
                </h3>


                <h4>
                    Future Institute of Engineering and Management
                </h4>


                <div class="lp-education-date">
                    2023 — 2025
                </div>


                <p>
                    MCA with a focus on computer applications
                    and software development.
                </p>

            </div>


            <div class="lp-education-card">

                <div class="lp-education-icon">

                    <i class="fas fa-graduation-cap"></i>

                </div>


                <h3>
                   Bachelor of Computer Applications (BCA)
                </h3>


                <h4>
                    Vidyasagar University, West Bengal
                </h4>


                <div class="lp-education-date">
                    2020 — 2023
                </div>


                <p>
                    Bachelor's degree in Bachelor of Computer Applications
                    with a foundation in software development
                    and computer technologies.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     PROJECTS SECTION
========================================================= -->

<section class="portfolio-projects" id="projects">

    <div class="projects-container">

        <!-- Section Header -->
        <div class="section-heading">

            <span class="section-small-title">
                <i class="fas fa-code"></i>
                MY WORK
            </span>

            <h2>
                Featured <span>Projects</span>
            </h2>

            <p>
                Some of the projects I've built using modern web,
                backend, AI and machine learning technologies.
            </p>

        </div>


        <!-- Projects Grid -->
        <div class="projects-grid">

            @forelse($projects as $project)

                @php
                    $technologies = $project->technologies;

                    if (is_string($technologies)) {
                        $technologies = json_decode($technologies, true);
                    }

                    $technologies = is_array($technologies)
                        ? $technologies
                        : [];
                @endphp


                <article class="project-card">

                    <!-- Project Image -->
                    <div class="project-image-wrapper">

                        @if(!empty($project->image))

                            <img
                                src="{{ asset('images/' . $project->image) }}"
                                alt="{{ $project->title }}"
                                class="project-image"
                                loading="lazy"
                            >

                        @else

                            <div class="project-no-image">
                                <i class="fas fa-code"></i>
                            </div>

                        @endif


                        <!-- Image Overlay -->
                        <div class="project-overlay">

                            <button
                                type="button"
                                class="project-view-btn"
                                onclick="openProjectModal(
                                    {{ $project->id }}
                                )"
                            >
                                <i class="fas fa-eye"></i>
                                View Details
                            </button>

                        </div>

                    </div>


                    <!-- Project Content -->
                    <div class="project-content">

                        @if(!empty($project->category))

                            <span class="project-category">
                                {{ $project->category }}
                            </span>

                        @endif


                        <h3>
                            {{ $project->title }}
                        </h3>


                        <p>
                            {{ Str::limit(strip_tags($project->description), 120) }}
                        </p>


                        <!-- Technologies -->
                        <div class="project-technologies">

                            @foreach(array_slice($technologies, 0, 4) as $technology)

                                @php
                                    $tech = strtolower(trim($technology));
                                    $icon = 'fas fa-code';
                                @endphp

                                @if(str_contains($tech, 'python'))
                                    @php $icon = 'devicon-python-plain colored'; @endphp

                                @elseif(str_contains($tech, 'django'))
                                    @php $icon = 'devicon-django-plain colored'; @endphp

                                @elseif(str_contains($tech, 'laravel'))
                                    @php $icon = 'devicon-laravel-plain colored'; @endphp

                                @elseif($tech === 'php')
                                    @php $icon = 'devicon-php-plain colored'; @endphp

                                @elseif(str_contains($tech, 'mysql'))
                                    @php $icon = 'devicon-mysql-plain colored'; @endphp

                                @elseif(str_contains($tech, 'javascript'))
                                    @php $icon = 'devicon-javascript-plain colored'; @endphp

                                @elseif(str_contains($tech, 'typescript'))
                                    @php $icon = 'devicon-typescript-plain colored'; @endphp

                                @elseif(str_contains($tech, 'react'))
                                    @php $icon = 'devicon-react-original colored'; @endphp

                                @elseif(str_contains($tech, 'node'))
                                    @php $icon = 'devicon-nodejs-plain colored'; @endphp

                                @elseif(str_contains($tech, 'mongodb'))
                                    @php $icon = 'devicon-mongodb-plain colored'; @endphp

                                @elseif(str_contains($tech, 'java'))
                                    @php $icon = 'devicon-java-plain colored'; @endphp

                                @elseif(str_contains($tech, 'html'))
                                    @php $icon = 'devicon-html5-plain colored'; @endphp

                                @elseif(str_contains($tech, 'css'))
                                    @php $icon = 'devicon-css3-plain colored'; @endphp

                                @elseif(str_contains($tech, 'bootstrap'))
                                    @php $icon = 'devicon-bootstrap-plain colored'; @endphp

                                @elseif(str_contains($tech, 'tailwind'))
                                    @php $icon = 'devicon-tailwindcss-original colored'; @endphp

                                @elseif(str_contains($tech, 'git'))
                                    @php $icon = 'devicon-git-plain colored'; @endphp

                                @elseif(str_contains($tech, 'github'))
                                    @php $icon = 'devicon-github-original'; @endphp

                                @elseif(str_contains($tech, 'linux'))
                                    @php $icon = 'devicon-linux-plain'; @endphp

                                @elseif(str_contains($tech, 'ai'))
                                    @php $icon = 'fas fa-brain'; @endphp

                                @elseif(str_contains($tech, 'machine learning') || str_contains($tech, 'machine-learning') || $tech === 'ml')
                                    @php $icon = 'fas fa-robot'; @endphp

                                @elseif(str_contains($tech, 'api'))
                                    @php $icon = 'fas fa-cloud'; @endphp

                                @endif


                                <span
                                    class="technology-badge"
                                    title="{{ $technology }}"
                                >

                                    <i class="{{ $icon }}"></i>

                                    <span>
                                        {{ $technology }}
                                    </span>

                                </span>

                            @endforeach


                            @if(count($technologies) > 4)

                                <span class="technology-more">
                                    +{{ count($technologies) - 4 }}
                                </span>

                            @endif

                        </div>


                        <!-- View Details -->
                        <button
                            type="button"
                            class="project-details-btn"
                            onclick="openProjectModal({{ $project->id }})"
                        >

                            View Project

                            <i class="fas fa-arrow-right"></i>

                        </button>

                    </div>

                </article>


                <!-- =====================================================
                     PROJECT MODAL DATA
                ====================================================== -->

                <div
                    id="project-modal-{{ $project->id }}"
                    class="project-modal"
                >

                    <div
                        class="project-modal-backdrop"
                        onclick="closeProjectModal({{ $project->id }})"
                    ></div>


                    <div class="project-modal-content">

                        <!-- Close -->
                        <button
                            type="button"
                            class="modal-close"
                            onclick="closeProjectModal({{ $project->id }})"
                        >
                            <i class="fas fa-times"></i>
                        </button>


                        <!-- Modal Image -->

                        <div class="modal-project-image">

                            @if(!empty($project->image))

                                <img
                                    src="{{ asset('images/' . $project->image) }}"
                                    alt="{{ $project->title }}"
                                >

                            @endif

                        </div>


                        <!-- Modal Body -->

                        <div class="modal-project-body">

                            @if(!empty($project->category))

                                <span class="modal-category">
                                    {{ $project->category }}
                                </span>

                            @endif


                            <h2>
                                {{ $project->title }}
                            </h2>


                            <!-- Description -->

                            <div class="modal-description">

                                {!! nl2br(e($project->description)) !!}

                            </div>


                            <!-- Technologies -->

                            @if(count($technologies))

                                <div class="modal-tech-section">

                                    <h4>
                                        <i class="fas fa-layer-group"></i>
                                        Technologies Used
                                    </h4>


                                    <div class="modal-technologies">

                                        @foreach($technologies as $technology)

                                            @php
                                                $tech = strtolower(trim($technology));
                                                $icon = 'fas fa-code';
                                            @endphp


                                            @if(str_contains($tech, 'python'))
                                                @php $icon = 'devicon-python-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'django'))
                                                @php $icon = 'devicon-django-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'laravel'))
                                                @php $icon = 'devicon-laravel-plain colored'; @endphp

                                            @elseif($tech === 'php')
                                                @php $icon = 'devicon-php-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'mysql'))
                                                @php $icon = 'devicon-mysql-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'javascript'))
                                                @php $icon = 'devicon-javascript-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'react'))
                                                @php $icon = 'devicon-react-original colored'; @endphp

                                            @elseif(str_contains($tech, 'node'))
                                                @php $icon = 'devicon-nodejs-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'mongodb'))
                                                @php $icon = 'devicon-mongodb-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'java'))
                                                @php $icon = 'devicon-java-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'html'))
                                                @php $icon = 'devicon-html5-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'css'))
                                                @php $icon = 'devicon-css3-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'bootstrap'))
                                                @php $icon = 'devicon-bootstrap-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'tailwind'))
                                                @php $icon = 'devicon-tailwindcss-original colored'; @endphp

                                            @elseif(str_contains($tech, 'git'))
                                                @php $icon = 'devicon-git-plain colored'; @endphp

                                            @elseif(str_contains($tech, 'github'))
                                                @php $icon = 'devicon-github-original'; @endphp

                                            @elseif(str_contains($tech, 'ai'))
                                                @php $icon = 'fas fa-brain'; @endphp

                                            @elseif(
                                                str_contains($tech, 'machine learning') ||
                                                str_contains($tech, 'machine-learning') ||
                                                $tech === 'ml'
                                            )
                                                @php $icon = 'fas fa-robot'; @endphp

                                            @elseif(str_contains($tech, 'api'))
                                                @php $icon = 'fas fa-cloud'; @endphp

                                            @endif


                                            <div class="modal-tech-item">

                                                <i class="{{ $icon }}"></i>

                                                <span>
                                                    {{ $technology }}
                                                </span>

                                            </div>

                                        @endforeach

                                    </div>

                                </div>

                            @endif


                            <!-- Project Actions -->

                            <div class="modal-project-actions">

                                @if(!empty($project->github_link))

                                    <a
                                        href="{{ $project->github_link }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="modal-btn github-btn"
                                    >

                                        <i class="fab fa-github"></i>

                                        GitHub

                                    </a>

                                @endif


                                @if(!empty($project->live_link))

                                    <a
                                        href="{{ $project->live_link }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="modal-btn live-btn"
                                    >

                                        <i class="fas fa-external-link-alt"></i>

                                        Live Demo

                                    </a>

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="no-projects">

                    <i class="fas fa-folder-open"></i>

                    <h3>No Projects Found</h3>

                    <p>
                        Projects will appear here once they are added.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>

</div>
<script>

function openProjectModal(projectId) {

    const modal =
        document.getElementById('project-modal-' + projectId);

    if (!modal) {
        return;
    }

    modal.classList.add('active');

    document.body.style.overflow = 'hidden';
}


function closeProjectModal(projectId) {

    const modal =
        document.getElementById('project-modal-' + projectId);

    if (!modal) {
        return;
    }

    modal.classList.remove('active');

    document.body.style.overflow = '';
}


/* Close with ESC */

document.addEventListener('keydown', function(event) {

    if (event.key === 'Escape') {

        document
            .querySelectorAll('.project-modal.active')
            .forEach(function(modal) {

                modal.classList.remove('active');

            });

        document.body.style.overflow = '';

    }

});


/* Prevent modal content click from closing modal */

document
    .querySelectorAll('.project-modal-content')
    .forEach(function(content) {

        content.addEventListener('click', function(event) {

            event.stopPropagation();

        });

    });

</script>
@endsection