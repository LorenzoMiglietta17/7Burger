<section class="hero" style="position: relative; overflow: hidden;">
    <div class="hero-background"></div>
    <div class="hero-content">
        <div class="container-fluid d-flex align-items-center">
            <div class="row w-100 align-items-center">
                <div class="col-lg-6 hero-text">
                    <h1 class="hero-title">7 BURGER</h1>
                    <p class="hero-subtitle">Esperienza di Gusto Autentico</p>
                    <p class="hero-description">
                        Scopri i nostri burger gourmet preparati con ingredienti freschi e ricette esclusive. 
                        Ogni morso è un'avventura di sapori.
                    </p>
                    <div class="hero-buttons">
                        <a href="{{ route('menu') }}" class="btn-primary">Scopri il Menu</a>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="satisfaction-counter">
                        <div class="counter-circle">
                            <svg class="progress-ring" width="180" height="180">
                                <circle class="progress-ring-bg" cx="90" cy="90" r="80"/>
                                <circle class="progress-ring-fill" cx="90" cy="90" r="80"/>
                            </svg>
                            <div class="counter-text">
                                <span class="counter-number" id="counter">0</span>
                                <span class="counter-symbol">%</span>
                            </div>
                        </div>
                        <p class="counter-label">Clienti Soddisfatti</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .satisfaction-counter {
            text-align: center;
            animation: fadeInRight 1s ease-out;
        }

        .counter-circle {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0 auto 30px;
        }

        .progress-ring {
            transform: rotate(-90deg);
            filter: drop-shadow(0 0 20px rgba(255, 215, 0, 0.3));
        }

        .progress-ring-bg {
            fill: none;
            stroke: rgba(255, 215, 0, 0.2);
            stroke-width: 8;
        }

        .progress-ring-fill {
            fill: none;
            stroke: url(#gradient);
            stroke-width: 8;
            stroke-linecap: round;
            stroke-dashoffset: 0;
        }

        .counter-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .counter-number {
            display: block;
            font-size: 3.5rem;
            font-weight: bold;
            color: #FFD700;
            line-height: 1;
        }

        .counter-symbol {
            font-size: 1.5rem;
            color: #FFD700;
            font-weight: bold;
        }

        .counter-label {
            color: #ffffff;
            font-size: 1.3rem;
            font-weight: bold;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @media (max-width: 768px) {
            .satisfaction-counter {
                margin-top: 40px;
            }

            .counter-circle {
                width: 150px;
                height: 150px;
            }

            .progress-ring {
                width: 150px;
                height: 150px;
            }

            .counter-number {
                font-size: 2.5rem;
            }

            .counter-label {
                font-size: 1rem;
            }
        }
    </style>

    <svg style="display: none;">
        <defs>
            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#FFD700;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#FFC700;stop-opacity:1" />
            </linearGradient>
        </defs>
    </svg>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counter = document.getElementById('counter');
            const progressRing = document.querySelector('.progress-ring-fill');
            const circumference = 2 * Math.PI * 80; // Calcolo corretto della circonferenza
            
            progressRing.style.strokeDasharray = circumference;
            progressRing.style.strokeDashoffset = circumference;
            
            let currentValue = 0;
            const targetValue = 100;
            const duration = 2500; // 2.5 secondi
            const startTime = Date.now();

            function easeOutQuad(t) {
                return 1 - (1 - t) * (1 - t);
            }

            function updateCounter() {
                const elapsed = Date.now() - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const easedProgress = easeOutQuad(progress);
                
                currentValue = Math.floor(easedProgress * targetValue);
                counter.textContent = currentValue;

                const offset = circumference - (easedProgress * circumference);
                progressRing.style.strokeDashoffset = offset;

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    // Assicurati che sia completamente riempito
                    counter.textContent = '100';
                    progressRing.style.strokeDashoffset = '0';
                }
            }

            updateCounter();
        });
    </script>
</section>

<!-- Specialità Section -->
<section class="specialties">
    <div class="container-fluid py-5">
        <div class="section-title">
            <h2>Le Nostre Specialità</h2>
            <div class="title-underline"></div>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="specialty-card">
                    <div class="specialty-image">
                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400&h=400&fit=crop" alt="Classic Burger">
                    </div>
                    <h3>Classic Burger</h3>
                    <p>Il nostro iconico burger con carne premium, pomodoro fresco e salsa segreta</p>
                    <span class="price">€12.50</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="specialty-card">
                    <div class="specialty-image">
                        <img src="https://images.unsplash.com/photo-1553979459-d2229ba7433b?w=400&h=400&fit=crop" alt="Spicy Inferno">
                    </div>
                    <h3>Spicy Inferno</h3>
                    <p>Per gli amanti del piccante con peperoncini e salsa habanero</p>
                    <span class="price">€14.00</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="specialty-card">
                    <div class="specialty-image">
                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400&h=400&fit=crop" alt="Triple Cheese">
                    </div>
                    <h3>Triple Cheese</h3>
                    <p>Tre formaggi diversi e mozzarella filante, paradiso per gli amanti del formaggio</p>
                    <span class="price">€15.50</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container-fluid py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 about-text">
                <h2>Chi Siamo</h2>
                <p>
                    7 Burger nasce dalla passione per l'eccellenza culinaria. Ogni burger è creato con dedizione, 
                    utilizzando solo ingredienti selezionati e ricette sviluppate dai nostri chef esperti.
                </p>
                <p>
                    Il nostro obiettivo è offrire un'esperienza indimenticabile a ogni visita, 
                    dove qualità e gusto non sono mai compromessi.
                </p>
                <ul class="about-list">
                    <li>✓ Ingredienti 100% freschi e locali</li>
                    <li>✓ Preparazione artigianale</li>
                    <li>✓ Ambiente accogliente e moderno</li>
                    <li>✓ Servizio rapido ed eccellente</li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container-fluid py-5">
        <div class="cta-content">
            <h2>Pronto a Gustare il Miglior Burger della Città?</h2>
            <p>Vieni a trovarci e scopri perché 7 Burger è il preferito di tutti</p>
            <a href="{{ route('menu') }}" class="btn-cta">Ordina Ora</a>
        </div>
    </div>
</section>