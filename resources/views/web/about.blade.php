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

    .skill-badge {
        display: inline-block;
        padding: 7px 14px;
        margin: 5px;
        border-radius: 20px;
        background: #07182e;
        color: #4aa9ff;
        border: 1px solid #4aa9ff;
        font-size: 14px;
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

                    <span class="skill-badge">PHP</span>
                    <span class="skill-badge">Laravel</span>
                    <span class="skill-badge">Python</span>
                    <span class="skill-badge">Django</span>
                    <span class="skill-badge">MySQL</span>
                    <span class="skill-badge">REST API</span>
                    <span class="skill-badge">Filament</span>

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