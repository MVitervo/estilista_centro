<!-- <link rel="stylesheet" href="/public/css/output.css"> -->
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0b0c0b">
    <title>Estilistas Asia | Estilo, cuidado y personalidad</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/output.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="asia-page">
    <header class="site-header">
        <div class="header-inner">
            <a href="#inicio" class="brand" aria-label="Estilistas Asia">
                <span class="brand-top"><i data-lucide="scissors"></i><span>ESTILISTAS</span></span>
                <span class="brand-name">ASIA</span>
            </a>

            <button class="mobile-menu-button" id="menuButton" aria-label="Abrir menú" aria-expanded="false">
                <i data-lucide="menu"></i>
            </button>

            <nav class="main-nav" id="mainNav">
                <a class="active" href="#inicio">Inicio</a>
                <a href="#servicios">Servicios</a>
                <a href="#reservar">Reservar cita</a>
                <a href="#galeria">Galería</a>
                <a href="#contacto">Contacto</a>
            </nav>

            <button class="theme-toggle" id="themeToggle" type="button" aria-label="Cambiar a modo claro" title="Cambiar tema">
                <span class="sun-side"><i data-lucide="sun"></i></span>
                <span class="moon-side"><i data-lucide="moon"></i></span>
            </button>
        </div>
    </header>

    <main>
        <section class="hero" id="inicio">
            <div class="hero-decoration"></div>
            <div class="hero-copy">
                <p class="eyebrow">SALÓN DE BELLEZA UNISEX ·</p>
                <h1>ESTILO, CUIDADO<br>Y <span>PERSONALIDAD</span></h1>
                <p class="hero-description">Cortes, peinados y tratamientos que<br class="desktop-break"> realzan tu imagen.</p>
                <div class="hero-buttons">
                    <a href="#reservar" class="button-primary"><i data-lucide="calendar-days"></i>Reservar cita</a>
                    <a href="#servicios" class="button-secondary">Nuestros servicios <i data-lucide="arrow-right"></i></a>
                </div>
            </div>

            <div class="hero-gallery" aria-label="Estilos de cabello para hombre y mujer">
                <div class="hero-model hero-model-man"><img src="public/images/hero-man.jpg" alt="Modelo masculino con corte moderno"></div>
                <div class="hero-model hero-model-woman"><img src="public/images/hero-woman.jpg" alt="Modelo femenina con cabello ondulado"></div>
            </div>
        </section>

        <section class="benefits">
            <div class="benefit">
                <i data-lucide="calendar" class="benefit-icon"></i>
                <div>
                    <h2>Agenda en línea</h2>
                    <p>Elige tu fecha y horario</p>
                </div>
            </div>
            <div class="benefit">
                <i data-lucide="scissors" class="benefit-icon"></i>
                <div>
                    <h2>Profesionales</h2>
                    <p>Estilistas con experiencia</p>
                </div>
            </div>
            <div class="benefit">
                <i data-lucide="gem" class="benefit-icon"></i>
                <div>
                    <h2>Calidad</h2>
                    <p>Productos de alto nivel</p>
                </div>
            </div>
            <div class="benefit">
                <i data-lucide="users-round" class="benefit-icon"></i>
                <div>
                    <h2>Para todos</h2>
                    <p>Servicios para mujeres y hombres</p>
                </div>
            </div>
        </section>

        <section class="services-section" id="servicios">
            <div class="section-heading"><span></span>
                <h2>NUESTROS SERVICIOS</h2><span></span>
            </div>
            <div class="services-grid">
                <article class="service-card">
                    <img src="public/images/service-corte.jpg" alt="Corte de cabello">
                    <div class="service-caption"><i data-lucide="scissors"></i>
                        <h3>Corte de cabello</h3>
                    </div>
                </article>
                <article class="service-card">
                    <img src="public/images/service-peinados.jpg" alt="Peinados">
                    <div class="service-caption"><i data-lucide="wind"></i>
                        <h3>Peinados</h3>
                    </div>
                </article>
                <article class="service-card">
                    <img src="public/images/service-coloracion.jpg" alt="Coloración">
                    <div class="service-caption"><i data-lucide="droplet"></i>
                        <h3>Coloración</h3>
                    </div>
                </article>
                <article class="service-card">
                    <img src="public/images/service-barberia.jpg" alt="Barbería">
                    <div class="service-caption"><i data-lucide="user-round"></i>
                        <h3>Barbería</h3>
                    </div>
                </article>
                <article class="service-card">
                    <img src="public/images/service-tratamientos.jpg" alt="Tratamientos">
                    <div class="service-caption"><i data-lucide="flower-2"></i>
                        <h3>Tratamientos</h3>
                    </div>
                </article>
            </div>
        </section>

        <section class="booking-section" id="reservar">
            <div class="booking-banner">
                <div class="booking-photo" role="img" aria-label="Calendario y recepción del salón"></div>
                <div class="booking-title">
                    <p>RESERVA TU CITA ·</p>
                    <h2>Tu próximo look<br>comienza aquí</h2>
                </div>
                <div class="booking-action">
                    <p>Selecciona tu servicio, fecha y horario<br>de forma rápida y sencilla.</p>
                    <button class="button-primary" id="openBooking" type="button"><i data-lucide="calendar-days"></i>Agendar ahora <i data-lucide="arrow-right"></i></button>
                </div>
            </div>

            <form class="booking-form" id="bookingForm">
                <div class="form-title-row">
                    <h2>Solicita tu cita</h2><button type="button" id="closeBooking" aria-label="Cerrar"><i data-lucide="x"></i></button>
                </div>
                <div class="form-grid">
                    <label>Nombre completo<input name="name" required placeholder="Tu nombre"></label>
                    <label>Teléfono<input name="phone" type="tel" required placeholder="656 000 0000"></label>
                    <label>Servicio<select name="service" required>
                            <option value="">Selecciona</option>
                            <option>Corte de cabello</option>
                            <option>Peinados</option>
                            <option>Coloración</option>
                            <option>Barbería</option>
                            <option>Tratamientos</option>
                        </select></label>
                    <label>Fecha<input id="bookingDate" name="date" type="date" required></label>
                    <label>Horario<select name="time" required>
                            <option value="">Selecciona horario</option>
                            <option>10:00</option>
                            <option>11:00</option>
                            <option>12:00</option>
                            <option>13:00</option>
                            <option>15:00</option>
                            <option>16:00</option>
                            <option>17:00</option>
                        </select></label>
                </div>
                <button class="button-primary" type="submit">Enviar solicitud <i data-lucide="arrow-right"></i></button>
                <p id="bookingMessage" role="status"></p>
            </form>
        </section>
    </main>

    <footer id="contacto" class="site-footer">
        <a href="#inicio" class="footer-brand">ASIA</a>
        <p>Estilo, cuidado y personalidad.</p>
        <p>Centro, Ciudad Juárez, Chihuahua</p>
        <small>© <span id="year"></span> Estilistas Asia</small>
    </footer>
    <script src="public/js/app.js"></script>
</body>

</html>