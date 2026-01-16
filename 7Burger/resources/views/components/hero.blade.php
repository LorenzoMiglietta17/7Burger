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
            </div>
        </div>
    </div>
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