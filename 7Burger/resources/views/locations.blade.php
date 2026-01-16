<x-layout>
    <!-- Locations Section -->
    <section class="locations-section">
        <div class="container py-5">
            <!-- Header -->
            <div class="section-title text-center mb-5">
                <h1>I Nostri Punti Vendita</h1>
                <p class="locations-subtitle">Trova il 7 Burger più vicino a te</p>
                <div class="title-underline"></div>
            </div>

            <!-- Locations Grid -->
            <div class="row g-4 mt-5">
                <!-- Location 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="location-card">
                        <div class="location-header">
                            <h3>7 Burger Centro</h3>
                            <span class="badge-open">Aperto</span>
                        </div>
                        
                        <div class="location-info">
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <p class="info-label">Indirizzo</p>
                                    <p class="info-text">Via Roma 42, 00184 Roma</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <p class="info-label">Telefono</p>
                                    <a href="tel:+393912345678" class="info-link">+39 391 234 5678</a>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <p class="info-label">Orari</p>
                                    <p class="info-text">11:00 - 23:00 (Lun-Dom)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="location-card">
                        <div class="location-header">
                            <h3>7 Burger Prati</h3>
                            <span class="badge-open">Aperto</span>
                        </div>
                        
                        <div class="location-info">
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <p class="info-label">Indirizzo</p>
                                    <p class="info-text">Via Ciceroni 23, 00193 Roma</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <p class="info-label">Telefono</p>
                                    <a href="tel:+393912345679" class="info-link">+39 391 234 5679</a>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <p class="info-label">Orari</p>
                                    <p class="info-text">12:00 - 00:00 (Lun-Dom)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="location-card">
                        <div class="location-header">
                            <h3>7 Burger Testaccio</h3>
                            <span class="badge-open">Aperto</span>
                        </div>
                        
                        <div class="location-info">
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <p class="info-label">Indirizzo</p>
                                    <p class="info-text">Via Marmorata 38, 00153 Roma</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <p class="info-label">Telefono</p>
                                    <a href="tel:+393912345680" class="info-link">+39 391 234 5680</a>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <p class="info-label">Orari</p>
                                    <p class="info-text">11:30 - 23:30 (Lun-Dom)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="locations-cta mt-5 text-center">
                <h3>Non Trovi Quello che Cerchi?</h3>
                <p>Contattaci per informazioni su nuove aperture</p>
                <button type="button" class="btn-contact-loc" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <i class="fas fa-phone"></i> Contattaci
                </button>
            </div>
        </div>
    </section>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background: #1a1a1a; border: 2px solid #FFD700; border-radius: 15px;">
                <div class="modal-header" style="border-bottom: 1px solid #FFD700;">
                    <h5 class="modal-title" id="contactModalLabel" style="color: #FFD700; font-weight: bold;">
                        <i class="fas fa-phone"></i> Contattaci
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-5">
                    <p style="color: #ffffff; font-size: 1.1rem; margin-bottom: 30px;">
                        Per informazioni generali, chiama:
                    </p>
                    <a href="tel:+393912345678" class="phone-link">
                        <i class="fas fa-phone-alt"></i>
                        <span style="color: #FFD700; font-size: 2rem; font-weight: bold;">+39 391 234 5678</span>
                    </a>
                    <p style="color: #d0d0d0; font-size: 0.95rem; margin-top: 20px;">
                        Siamo a tua disposizione dalle 11:00 alle 23:00
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .locations-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
            color: #ffffff;
            padding-top: 80px;
        }

        .section-title h1 {
            color: #FFD700;
            font-weight: bold;
            font-size: 3.5rem;
            margin-bottom: 10px;
        }

        .locations-subtitle {
            color: #d0d0d0;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .title-underline {
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #FFD700, #FFC700);
            margin: 0 auto;
        }

        .location-card {
            background: rgba(255, 215, 0, 0.05);
            border: 1px solid rgba(255, 215, 0, 0.2);
            border-radius: 15px;
            padding: 30px;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .location-card:hover {
            background: rgba(255, 215, 0, 0.12);
            border-color: #FFD700;
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(255, 215, 0, 0.2);
        }

        .location-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 215, 0, 0.2);
        }

        .location-header h3 {
            color: #FFD700;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }

        .badge-open {
            background: #4CAF50;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: bold;
        }

        .location-info {
            flex-grow: 1;
            margin-bottom: 25px;
        }

        .info-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            align-items: flex-start;
        }

        .info-item i {
            color: #FFD700;
            font-size: 1.3rem;
            min-width: 25px;
            margin-top: 3px;
        }

        .info-label {
            color: #FFD700;
            font-weight: bold;
            margin: 0 0 5px 0;
            font-size: 0.9rem;
        }

        .info-text {
            color: #d0d0d0;
            margin: 0;
            font-size: 1rem;
        }

        .info-link {
            color: #FFD700;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .info-link:hover {
            text-decoration: underline;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        .btn-location {
            width: 100%;
            background: linear-gradient(135deg, #FFD700, #FFC700);
            color: #000000;
            border: none;
            padding: 12px 20px;
            border-radius: 50px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .btn-location:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);
        }

        .locations-cta {
            background: rgba(255, 215, 0, 0.08);
            padding: 40px;
            border-radius: 15px;
            border: 2px solid #FFD700;
            margin-top: 60px;
        }

        .locations-cta h3 {
            color: #FFD700;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .locations-cta p {
            color: #d0d0d0;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .btn-contact-loc {
            background: linear-gradient(135deg, #FFD700, #FFC700);
            color: #000000;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }

        .btn-contact-loc:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);
        }

        .phone-link {
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
        }

        .phone-link:hover {
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .section-title h1 {
                font-size: 2.5rem;
            }

            .locations-cta h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</x-layout>
<x-footer></x-footer>
