<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilistas Asia | Salón de belleza unisex</title>
    <link rel="stylesheet" href="/public/css/output.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        asia: {
                            black: "#0d0d0c",
                            gold: "#d9ad62",
                            gold2: "#f0ca82",
                            panel: "#171614"
                        }
                    },
                    fontFamily: {
                        display: ["Cormorant Garamond", "serif"],
                        sans: ["DM Sans", "sans-serif"]
                    }
                }
            }
        };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body class="bg-asia-black text-white font-sans">
    <header class="topbar">
        <div class="nav-shell">
            <a class="logo" href="#inicio" aria-label="Estilistas Asia">
                <span class="logo-small"><i data-lucide="scissors"></i><span>ESTILISTAS</span></span>
                <span class="logo-large">ASIA</span>
            </a>
            <button id="menuToggle" class="mobile-toggle" aria-label="Abrir menú"><i data-lucide="menu"></i></button>
            <nav id="mainNav">
                <a class="active" href="#inicio">Inicio</a><a href="#servicios">Servicios</a><a href="#reservar">Reservar cita</a><a href="#galeria">Galería</a><a href="#contacto">Contacto</a>
            </nav>
            <button id="themeToggle" class="theme-toggle" aria-label="Cambiar tema"><span><i data-lucide="moon"></i></span><i data-lucide="sun"></i></button>
        </div>
    </header>

    <main>
        <section id="inicio" class="hero">
            <div class="hero-ornament"></div>
            <div class="hero-copy">
                <p class="eyebrow">SALÓN DE BELLEZA UNISEX ·</p>
                <h1>ESTILO, CUIDADO<br>Y PERSONALIDAD</h1>
                <p class="hero-subtitle">Cortes, peinados y tratamientos que<br class="desktop-only"> realzan tu imagen.</p>
                <div class="hero-actions">
                    <a href="#reservar" class="btn-gold"><i data-lucide="calendar-days"></i>Reservar cita</a>
                    <a href="#servicios" class="btn-outline">Nuestros servicios <i data-lucide="arrow-right"></i></a>
                </div>
            </div>
            <div class="hero-people" aria-label="Modelos mostrando estilos de cabello">
                <div class="person person-man"><img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=900&q=90" alt="Modelo masculino con corte moderno"></div>
                <div class="person person-woman"><img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=900&q=90" alt="Modelo femenina con cabello estilizado"></div>
            </div>
        </section>

        <section class="benefits">
            <div class="benefit"><i data-lucide="calendar"></i>
                <div>
                    <h3>Agenda en línea</h3>
                    <p>Elige tu fecha y horario</p>
                </div>
            </div>
            <div class="benefit"><i data-lucide="scissors"></i>
                <div>
                    <h3>Profesionales</h3>
                    <p>Estilistas con experiencia</p>
                </div>
            </div>
            <div class="benefit"><i data-lucide="gem"></i>
                <div>
                    <h3>Calidad</h3>
                    <p>Productos de alto nivel</p>
                </div>
            </div>
            <div class="benefit"><i data-lucide="users-round"></i>
                <div>
                    <h3>Para todos</h3>
                    <p>Servicios para mujeres y hombres</p>
                </div>
            </div>
        </section>

        <section id="servicios" class="services-section">
            <div class="section-title"><span></span>
                <h2>NUESTROS SERVICIOS</h2><span></span>
            </div>
            <div class="service-grid">
                <article class="service-card"><img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&w=700&q=85" alt="Corte de cabello">
                    <div><i data-lucide="scissors"></i>
                        <h3>Corte de cabello</h3>
                    </div>
                </article>
                <article class="service-card"><img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=700&q=85" alt="Peinado">
                    <div><i data-lucide="wind"></i>
                        <h3>Peinados</h3>
                    </div>
                </article>
                <article class="service-card"><img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?auto=format&fit=crop&w=700&q=85" alt="Coloración">
                    <div><i data-lucide="droplet"></i>
                        <h3>Coloración</h3>
                    </div>
                </article>
                <article class="service-card"><img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=700&q=85" alt="Barbería">
                    <div><i data-lucide="user-round"></i>
                        <h3>Barbería</h3>
                    </div>
                </article>
                <article class="service-card"><img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=700&q=85" alt="Tratamientos capilares">
                    <div><i data-lucide="flower-2"></i>
                        <h3>Tratamientos</h3>
                    </div>
                </article>
            </div>
        </section>

        <section>
            <form id="form-reserva" class="booking-form">
                <h3>Solicita tu reservación</h3>
                <div class="form-grid">
                    <label>Nombre completo<input name="name" required placeholder="Tu nombre"></label>
                    <label>Teléfono<input name="phone" required type="tel" placeholder="656 000 0000"></label>
                    <label>Servicio<select name="service" required>
                            <option value="">Selecciona</option>
                            <option>Corte de cabello</option>
                            <option>Peinados</option>
                            <option>Coloración</option>
                            <option>Barbería</option>
                            <option>Tratamientos</option>
                        </select></label>
                    <label>Fecha<input name="date" id="date" type="date" required></label>
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
                <button class="btn-gold" type="submit">Enviar solicitud <i data-lucide="arrow-right"></i></button>
                <p id="formMessage" role="status"></p>
            </form>
        </section>
    </main>
    <footer id="contacto"><a class="footer-logo" href="#inicio">ASIA.</a>
        <p>Estilo, cuidado y personalidad.</p>
        <p>Centro, Ciudad Juárez, Chihuahua · Datos de contacto por confirmar</p><small>© <span id="year"></span> Estilistas Asia</small>
    </footer>
    <!-- <script src="public/js/app.js"></script> -->
</body>

</html>