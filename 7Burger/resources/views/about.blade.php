<x-layout>
    <!-- About Section -->
    <section class="about-page-section">
        <div class="container py-5">
            <!-- Header -->
            <div class="section-title text-center mb-5">
                <h1>Chi Siamo</h1>
                <div class="title-underline"></div>
            </div>

            <!-- Developer Info -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="developer-info">
                        <h2 class="mb-3">Lorenzo Miglietta</h2>
                        <p class="developer-location mb-3">
                            <i class="fas fa-map-marker-alt"></i> Roma, Italia
                        </p>
                        <p class="developer-title mb-4">Full Stack Developer</p>
                        <p class="developer-description">
                            Ciao! Sono Lorenzo, uno sviluppatore Full Stack appassionato di creazione di esperienze digitali 
                            innovative. Lavoro quotidianamente con tecnologie moderne per trasformare idee in realtà web funzionali 
                            e affascinanti.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="developer-image">
                        <img src="{{ asset('img/lorenzo.jpg') }}" alt="Lorenzo Developer">
                    </div>
                </div>
            </div>

            <!-- About the Restaurant -->
            <div class="about-content mb-5">
                <h3 class="mb-4">Sulla Piattaforma 7 Burger</h3>
                <p class="mb-3">
                    <strong>7 Burger</strong> è un progetto digitale innovativo che unisce la passione per il cibo di qualità 
                    con la tecnologia all'avanguardia. La piattaforma è stata sviluppata con dedizione per offrire ai clienti 
                    un'esperienza di navigazione intuitiva, veloce e piacevole.
                </p>
                <p class="mb-3">
                    Ogni dettaglio è stato curato con attenzione: dalla scelta dei colori che richiamano l'eleganza e l'appetibilità, 
                    alla struttura che permette ai clienti di esplorare facilmente il nostro menu completo e scoprire i nostri 
                    burger gourmet più apprezzati.
                </p>
                <p>
                    Crediamo che la qualità inizia dall'esperienza visiva. Per questo, ogni immagine, ogni animazione e ogni 
                    interazione è stata pensata per far sentire i nostri clienti speciali e apprezzati.
                </p>
            </div>

            <!-- Skills & Services -->
            <div class="row mt-5">
                <div class="col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h4>Sviluppo Web</h4>
                        <p>Creo siti web moderni, responsivi e performanti utilizzando le tecnologie più attuali come Laravel, React e Vue.js</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Design Responsivo</h4>
                        <p>Sviluppo interfacce che funzionano perfettamente su tutti i dispositivi, dal mobile al desktop</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h4>Backend Development</h4>
                        <p>Implemento logiche complesse e gestisco database per garantire prestazioni ottimali e sicurezza</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h4>UI/UX Design</h4>
                        <p>Disegno interfacce intuitive e attraenti che mettono al centro l'esperienza dell'utente</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="about-cta mt-5 text-center">
                <h3 class="mb-4">Pronto a Scoprire i Nostri Burger?</h3>
                <a href="{{ route('menu') }}" class="btn btn-lg" style="background-color: #FFD700; color: #000000; font-weight: bold;">
                    <i class="fas fa-utensils"></i> Vai al Menu
                </a>
            </div>
        </div>
    </section>

    <style>
        .about-page-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
            color: #ffffff;
            padding-top: 80px;
        }

        .section-title h1 {
            color: #FFD700;
            font-weight: bold;
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .title-underline {
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #FFD700, #FFC700);
            margin: 0 auto;
        }

        .developer-info h2 {
            color: #FFD700;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .developer-location {
            font-size: 1.2rem;
            color: #FFC700;
        }

        .developer-title {
            font-size: 1.3rem;
            color: #FFD700;
            font-weight: 600;
        }

        .developer-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #e0e0e0;
        }

        .developer-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(255, 215, 0, 0.3);
        }

        .developer-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .about-content {
            background: rgba(255, 215, 0, 0.05);
            padding: 40px;
            border-radius: 15px;
            border-left: 5px solid #FFD700;
        }

        .about-content h3 {
            color: #FFD700;
            font-size: 2rem;
            font-weight: bold;
        }

        .about-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #d0d0d0;
        }

        .service-card {
            background: rgba(255, 215, 0, 0.08);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 215, 0, 0.2);
        }

        .service-card:hover {
            background: rgba(255, 215, 0, 0.15);
            transform: translateY(-5px);
            border-color: #FFD700;
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.2);
        }

        .service-icon {
            font-size: 3rem;
            color: #FFD700;
            margin-bottom: 20px;
        }

        .service-card h4 {
            color: #FFD700;
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .service-card p {
            color: #d0d0d0;
            font-size: 1rem;
            line-height: 1.6;
        }

        .about-cta {
            padding: 50px;
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.1) 0%, rgba(255, 199, 0, 0.05) 100%);
            border-radius: 15px;
            border: 2px solid #FFD700;
        }

        .about-cta h3 {
            color: #FFD700;
            font-size: 2rem;
            font-weight: bold;
        }

        .about-cta .btn {
            padding: 15px 40px;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            border: none;
        }

        .about-cta .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);
            color: #000000;
        }

        @media (max-width: 768px) {
            .about-page-section {
                padding-top: 60px;
            }

            .section-title h1 {
                font-size: 2.5rem;
            }

            .developer-info h2 {
                font-size: 1.8rem;
            }

            .about-content {
                padding: 25px;
            }

            .about-content h3 {
                font-size: 1.5rem;
            }

            .about-cta h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</x-layout>
