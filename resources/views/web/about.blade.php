@extends('web.layout')

@section('title', 'About Me - Devfolio Lakshman')

@push('styles')
<style>
    .about-page {
        padding: 80px 7%;
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-title h2 {
        font-size: 42px;
        font-weight: 700;
        color: #4aa9ff;
        margin-bottom: 10px;
    }

    .section-title p {
        color: #b8c7d9;
        font-size: 17px;
    }

    /* Experience */
    .experience-card {
        background: #0c2442;
        border: 1px solid rgba(74, 169, 255, 0.2);
        border-radius: 15px;
        padding: 35px;
        margin-bottom: 70px;
        transition: 0.3s;
    }

    .experience-card:hover {
        transform: translateY(-5px);
        border-color: #4aa9ff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
    }

    .experience-card h3 {
        color: #fff;
        font-size: 28px;
        margin-bottom: 8px;
    }

    .experience-card .company {
        color: #4aa9ff;
        font-size: 18px;
        font-weight: 600;
    }

    .experience-card .duration {
        color: #aaa;
        margin: 10px 0 20px;
    }

    .experience-card p {
        color: #c9d4e3;
        line-height: 1.8;
    }

    .experience-card ul {
        color: #c9d4e3;
        line-height: 2;
    }

    /* Technologies grid */
    .tech-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(84px, 1fr));
        gap: 14px;
    }

    .tech-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 16px 8px;
        border-radius: 14px;
        background: #07182e;
        border: 1px solid rgba(74, 169, 255, 0.2);
        transition: 0.3s ease;
    }

    .tech-item:hover {
        transform: translateY(-6px);
        border-color: var(--tech-color, #4aa9ff);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
        background: #0a1f3c;
    }

    .tech-icon-wrap {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: color-mix(in srgb, var(--tech-color, #4aa9ff) 15%, transparent);
        border: 1px solid color-mix(in srgb, var(--tech-color, #4aa9ff) 40%, transparent);
        transition: 0.3s ease;
    }

    .tech-item:hover .tech-icon-wrap {
        background: color-mix(in srgb, var(--tech-color, #4aa9ff) 25%, transparent);
        transform: scale(1.08);
    }

    .tech-icon-wrap i {
        font-size: 26px;
        color: var(--tech-color, #4aa9ff);
    }

    .tech-item span {
        color: #c9d4e3;
        font-size: 12.5px;
        font-weight: 600;
        text-align: center;
    }

    /* Cards */
    .portfolio-card {
        height: 100%;
        background: #0c2442;
        border: 1px solid rgba(74, 169, 255, 0.2);
        border-radius: 15px;
        overflow: hidden;
        transition: 0.3s;
    }

    .portfolio-card:hover {
        transform: translateY(-8px);
        border-color: #ff2e97;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
    }

    .portfolio-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .portfolio-card-body {
        padding: 25px;
    }

    .portfolio-card h4 {
        color: #fff;
        margin-bottom: 10px;
    }

    .portfolio-card p {
        color: #b8c7d9;
        line-height: 1.6;
    }

    .certificate-section,
    .education-section {
        margin-top: 100px;
    }

    .education-icon {
        font-size: 45px;
        color: #ff2e97;
        margin-bottom: 15px;
    }

    @media (max-width: 768px) {
        .about-page {
            padding: 50px 20px;
        }

        .section-title h2 {
            font-size: 32px;
        }

        .experience-card {
            padding: 25px;
        }
    }
</style>
@endpush


@section('content')

<div class="about-page">

    {{-- ================= EXPERIENCE ================= --}}
    <section class="experience-section">

        {{-- <div class="section-title">
            <h2>My Experience</h2>
            <p>My professional journey and current work experience</p>
        </div> --}}

        <div class="experience-card">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <h3>Backend Developer</h3>

                    <div class="company">
                        Leelija Web Solutions Private Limited
                    </div>

                    <div class="duration">
                        Current Position
                    </div>

                    <p>
                        I am currently working as a Backend Developer,
                        where I develop and maintain scalable web applications,
                        APIs and backend systems.
                    </p>

                    <p>
                        My work involves developing secure, efficient and
                        maintainable applications while working with modern
                        backend technologies.
                    </p>

                </div>

                <div class="col-lg-4 text-center">

                    <h5 class="text-white mb-3">
                        Technologies
                    </h5>

                    <div class="tech-grid">

                        <div class="tech-item" style="--tech-color:#777bb4;">
                            <div class="tech-icon-wrap"><i class="devicon-php-plain colored"></i></div>
                            <span>PHP</span>
                        </div>

                        <div class="tech-item" style="--tech-color:#ff2d20;">
                            <div class="tech-icon-wrap"><i class="devicon-laravel-plain colored"></i></div>
                            <span>Laravel</span>
                        </div>

                        <div class="tech-item" style="--tech-color:#3776ab;">
                            <div class="tech-icon-wrap"><i class="devicon-python-plain colored"></i></div>
                            <span>Python</span>
                        </div>

                        <div class="tech-item" style="--tech-color:#0c4b33;">
                            <div class="tech-icon-wrap"><i class="devicon-django-plain colored"></i></div>
                            <span>Django</span>
                        </div>

                        <div class="tech-item" style="--tech-color:#4479a1;">
                            <div class="tech-icon-wrap"><i class="devicon-mysql-plain colored"></i></div>
                            <span>MySQL</span>
                        </div>

                        <div class="tech-item" style="--tech-color:#4aa9ff;">
                            <div class="tech-icon-wrap"><i class="fa-solid fa-diagram-project"></i></div>
                            <span>REST API</span>
                        </div>

                        <div class="tech-item" style="--tech-color:#f59e0b;">
                            <div class="tech-icon-wrap"><i class="fa-solid fa-layer-group"></i></div>
                            <span>Filament</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= CERTIFICATIONS ================= --}}
    <section class="certificate-section">

        <div class="section-title">
            <h2>Certifications</h2>
            <p>Professional certifications and achievements</p>
        </div>

        <div class="row g-4">
            @foreach($certifications as $certification)
                <div class="col-md-6 col-lg-4">

                    <div class="portfolio-card">

                        <img
                            src="{{ asset($certification->image) }}"
                            alt="{{ $certification->name }}">

                        <div class="portfolio-card-body">

                            <h4>{{ $certification->name }}</h4>

                            <p>
                                {{ $certification->description }}
                            </p>
                            @if($certification->issued_date)
                            <small class="text-secondary">
                                Issued: {{ $certification->issued_date }}
                            </small>
                            @endif

                        </div>

                    </div>

                </div>
            @endforeach
           

    </section>


    {{-- ================= EDUCATION ================= --}}
    <section class="education-section">

        <div class="section-title">

            <h2>Academic Journey</h2>

            <p>
                My academic background and educational journey
            </p>

        </div>


        <div class="row g-4">
        @foreach($educations as $education)
            {{-- College --}}
            <div class="col-md-6">

                <div class="portfolio-card">

                    <img
                        src="{{ asset($education->institution_image) }}"
                        alt="{{ $education->institution }}">

                    <div class="portfolio-card-body">

                        <h4>
                            {{ $education->institution_name }}
                        </h4>

                        <p>
                            {{ $education->degree }}
                        </p>
                         <p>
                        <small class="text-secondary">
                            {{ $education->description }} 
                        </small>
                        </p>
                        <small class="text-secondary">
                            {{ $education->start_date->format('Y') }} - {{ $education->completion_date->format('Y') }}
                        </small>

                    </div>

                </div>

            </div>

        @endforeach
            

    </section>

</div>

@endsection