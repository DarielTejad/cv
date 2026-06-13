<?php
 $currentYear = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dariel Leonardo Ventura Tejada - Desarrollador Web & MC Network Founder</title>
    <meta name="description" content="Portafolio de Dariel Ventura - Desarrollador Web, Founder de redes Minecraft y Technical Support.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Background -->
    <div class="bg-grid"></div>
    <div class="bg-glow"></div>
    <div class="particles" id="particles"></div>

    <!-- Header -->
    <header id="header">
        <div class="container header-inner">
            <a href="#home" class="logo">
                <span class="logo-bracket">{</span>
                <span class="logo-name">DarielVT</span>
                <span class="logo-bracket">}</span>
            </a>
            <nav id="mainNav">
                <ul>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#about">Sobre mí</a></li>
                    <li><a href="#experience">Trayectoria</a></li>
                    <li><a href="#projects">Proyectos</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Abrir menú">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <div class="hero-role">
                <span class="role-cursor" id="roleText"></span><span class="cursor-blink">|</span>
            </div>
            <h1 class="hero-name">Dariel Leonardo<br>Ventura Tejada</h1>
            <p class="hero-desc">Fundador de múltiples redes Minecraft, desarrollador web profesional y soporte técnico. Creando soluciones digitales desde República Dominicana.</p>
            <div class="hero-cta">
                <a href="#projects" class="btn btn-primary">Ver Proyectos <i class="fas fa-arrow-down"></i></a>
                <a href="#contact" class="btn btn-outline">Contactar <i class="fas fa-paper-plane"></i></a>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats" id="stats">
        <div class="container stats-grid">
            <div class="stat-item" data-count="6">
                <span class="stat-number">0</span><span class="stat-plus">+</span>
                <span class="stat-label">Proyectos</span>
            </div>
            <div class="stat-item" data-count="2">
                <span class="stat-number">0</span><span class="stat-plus">+</span>
                <span class="stat-label">Años de Experiencia</span>
            </div>
            <div class="stat-item" data-count="15">
                <span class="stat-number">0</span>
                <span class="stat-label">Años de Edad</span>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Conóceme</span>
                <h2 class="section-title">Sobre mí</h2>
            </div>
            <div class="about-grid">
                <div class="about-text reveal-left">
                    <h3>Desarrollador Web & Network Founder</h3>
                    <p>Tengo 15 años (16 en agosto), soy de República Dominicana y me dedico a dos mundos que me apasionan: el <strong>desarrollo web profesional</strong> y la <strong>creación de redes de Minecraft</strong>.</p>
                    <p>En el lado web, desarrollo sistemas de facturación electrónica, inventarios y portales corporativos para empresas reales. Manejo desde Survivals OP hasta BoxPvP, configurando plugins complejos y optimizando rendimiento.</p>
                    <p>Además, he contado con experiencia laboral como <strong>Support Technical</strong> en <strong>NeonCore</strong>, lo cual me dio una perspectiva profesional sobre atención al usuario y resolución de problemas técnicos en tiempo real.</p>
                    <p>Mi stack incluye PHP nativo, MySQL, administración de servidores Linux (Debian/Ubuntu), Pterodactyl y configuración avanzada de plugins de Minecraft.</p>
                </div>
                <div class="about-visual reveal-right">
                    <div class="about-card-stack">
                        <div class="about-float-card card-1"><i class="fas fa-code"></i> PHP & MySQL</div>
                        <div class="about-float-card card-2"><i class="fas fa-cube"></i> MC Networks</div>
                        <div class="about-float-card card-3"><i class="fab fa-linux"></i> Linux Admin</div>
                        <div class="about-float-card card-4"><i class="fas fa-headset"></i> Tech Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience -->
    <section class="experience" id="experience">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Trayectoria</span>
                <h2 class="section-title">Experiencia Laboral</h2>
            </div>
            <div class="timeline">
                <div class="timeline-item reveal-up">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <div class="timeline-header">
                            <div>
                                <h3>NeonCore</h3>
                                <span class="timeline-role">Support Technical</span>
                            </div>
                            <span class="timeline-badge badge-work">Trabajo / Retirado</span>
                        </div>
                        <p>Soporte técnico especializado. Resolución de tickets, diagnóstico de problemas en servidores y asistencia directa a usuarios. Experiencia real en atención al cliente técnica, gestión de prioridades y comunicación efectiva bajo presión.</p>
                        <div class="timeline-tags">
                            <span>Soporte Técnico</span>
                            <span>Diagnóstico</span>
                            <span>Atención al Usuario</span>
                        </div>
                    </div>
                </div>
                <div class="timeline-item reveal-up" style="transition-delay: 0.15s">
                    <div class="timeline-dot"></div>
                    <div class="timeline-card">
                        <div class="timeline-header">
                            <div>
                                <h3>Network Founder</h3>
                                <span class="timeline-role"> · Omnicraft · </span>
                            </div>
                            <span class="timeline-badge badge-founder">Founder</span>
                        </div>
                        <p>Creación y gestión de 4 redes de Minecraft. Desde la concepción del proyecto hasta la configuración técnica completa: plugins, economía, rangos, optimización TPS, marketing y gestión de comunidad.</p>
                        <div class="timeline-tags">
                            <span>Minecraft</span>
                            <span>Pterodactyl</span>
                            <span>Liderazgo</span>
                            <span>Configuración</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section class="projects" id="projects">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Portafolio</span>
                <h2 class="section-title">Proyectos Destacados</h2>
            </div>

            <div class="filter-bar">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="web">Desarrollo Web</button>
                <button class="filter-btn" data-filter="mc">Minecraft Networks</button>
            </div>

            <div class="projects-grid" id="projectsGrid">

                <!-- WAD Group Facturación -->
                <div class="project-card reveal-up" data-category="web">
                    <span class="project-status status-active">Activo</span>
                    <div class="project-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h3>WAD Group - Facturación</h3>
                    <p class="project-sub">Sistema de Facturación Electrónica</p>
                    <p>Sistema completo de facturación con generación de comprobantes fiscales, gestión de clientes y envío automático de documentos.</p>
                    <div class="project-tags"><span>PHP</span><span>MySQL</span><span>Facturación</span></div>
                    <a href="https://facturacion.wadgroup.camdvr.org/" target="_blank" class="project-link">Ver Demo <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- WAD Group Inventario -->
                <div class="project-card reveal-up" data-category="web" style="transition-delay: 0.1s">
                    <span class="project-status status-active">Activo</span>
                    <div class="project-icon"><i class="fas fa-boxes-stacked"></i></div>
                    <h3>WAD Group - Inventario</h3>
                    <p class="project-sub">Sistema de Gestión de Inventarios</p>
                    <p>Control de inventario en tiempo real, alertas de stock bajo y reportes de movimiento de mercancía.</p>
                    <div class="project-tags"><span>PHP</span><span>MySQL</span><span>Gestión</span></div>
                    <a href="https://inventario.wadgroup.camdvr.org/" target="_blank" class="project-link">Ver Demo <i class="fas fa-arrow-right"></i></a>
                </div>

                <!-- NexGensMC -->
                <div class="project-card reveal-up" data-category="mc" style="transition-delay: 0.2s">
                    <span class="project-status status-active">Activo</span>
                    <div class="project-icon"><i class="fas fa-cube"></i></div>
                    <h3>NexGensMC</h3>
                    <p class="project-sub">Network · Dev</p>
                    <p>Red de Minecraft con configuración completa de Survival, economía, rangos y optimización de rendimiento. Manejo de versiones 1.21+ y configuración de límites de entidades.</p>
                    <div class="project-tags"><span>Founder</span><span>Survival</span><span>Pterodactyl</span><span>1.21+</span></div>
                </div>

                <!-- iKoreX Network -->
                <div class="project-card reveal-up" data-category="mc" style="transition-delay: 0.1s">
                    <span class="project-status status-active">Activo</span>
                    <div class="project-icon"><i class="fas fa-network-wired"></i></div>
                    <h3>iKoreX Network</h3>
                    <p class="project-sub">Network · DevMC & DevWWW</p>
                    <p>Red de Minecraft con múltiples modalidades. Gestión completa de infraestructura, plugins, configuración YAML avanzada y manejo de comunidad.</p>
                    <div class="project-tags"><span>Founder</span><span>Multi-Modo</span><span>YAML</span><span>Pterodactyl</span></div>
                </div>


                <!-- Omnicraft Network -->
                <div class="project-card reveal-up" data-category="mc" style="transition-delay: 0.3s">
                    <span class="project-status status-maintenance">CERRADO</span>
                    <div class="project-icon"><i class="fas fa-shield-halved"></i></div>
                    <h3>Omnicraft Network</h3>
                    <p class="project-sub">Survival OP · Fundador</p>
                    <p>Proyecto colaborativo de Survival OP. Actualmente en fase de mantenimiento y desarrollo para reestructuración completa de la red.</p>
                    <div class="project-tags"><span>Co-Fundador</span><span>Survival OP</span><span>SRV Record</span></div>
                    <a href="https://omnicraft.giize.com/" target="_blank" class="project-link">Ver Sitio <i class="fas fa-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>

    <!-- Skills -->
    <section class="skills" id="skills">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Tecnologías</span>
                <h2 class="section-title">Habilidades Técnicas</h2>
            </div>
            <div class="skills-grid">
                <div class="skill-card reveal-up">
                    <div class="skill-icon"><i class="fab fa-php"></i></div>
                    <h3>PHP & MySQL</h3>
                    <p>Sistemas robustos, APIs, lógica de negocio y consultas optimizadas para aplicaciones web.</p>
                </div>
                <div class="skill-card reveal-up" style="transition-delay: 0.08s">
                    <div class="skill-icon"><i class="fas fa-server"></i></div>
                    <h3>Servidores MC</h3>
                    <p>Pterodactyl, SSH, VPS. Optimización TPS, Spark/Timings, server.properties, spigot.yml, paper.yml.</p>
                </div>
                <div class="skill-card reveal-up" style="transition-delay: 0.16s">
                    <div class="skill-icon"><i class="fas fa-puzzle-piece"></i></div>
                    <h3>Plugins MC</h3>
                    <p>LuckPerms, PlaceholderAPI, Oraxen, TAB, ExcellentCrates. Diagnóstico de consola y dependencias.</p>
                </div>
                <div class="skill-card reveal-up" style="transition-delay: 0.24s">
                    <div class="skill-icon"><i class="fab fa-linux"></i></div>
                    <h3>Linux Admin</h3>
                    <p>Servidores Debian/Ubuntu. Apache, Docker, Certbot, configuración de servicios y seguridad.</p>
                </div>
                <div class="skill-card reveal-up" style="transition-delay: 0.32s">
                    <div class="skill-icon"><i class="fas fa-file-code"></i></div>
                    <h3>YAML Avanzado</h3>
                    <p>Configuraciones complejas, sistemas de rangos, herencias, prefijos y resolución de conflictos.</p>
                </div>
                <div class="skill-card reveal-up" style="transition-delay: 0.4s">
                    <div class="skill-icon"><i class="fas fa-headset"></i></div>
                    <h3>Soporte Técnico</h3>
                    <p>Resolución de tickets, diagnóstico de errores Java, atención al usuario y documentación técnica.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Hablemos</span>
                <h2 class="section-title">Contacto</h2>
            </div>
            <div class="contact-grid">
                <div class="contact-info reveal-left">
                    <h3>¿Tienes un proyecto en mente?</h3>
                    <p>Estoy abierto a desarrollo web freelance, configuración de redes Minecraft o roles de soporte técnico. Respuesta rápida garantizada.</p>
                    <div class="contact-items">
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="fas fa-envelope"></i></div>
                            <div><span class="contact-item-label">Email</span><span>dtejada.dev@gmail.com</span></div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="fas fa-globe"></i></div>
                            <div><span class="contact-item-label">Sitio Web</span><span>dtejadadev.camdvr.org</span></div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div><span class="contact-item-label">Ubicación</span><span>República Dominicana</span></div>
                        </div>
                    </div>
                </div>
                <form class="contact-form reveal-right" id="contactForm">
                    <div class="form-group">
                        <label for="name">Nombre completo</label>
                        <input type="text" id="name" name="name" required placeholder="Tu nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" required placeholder="tu@email.com">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" required placeholder="Cuéntame sobre tu proyecto..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Enviar mensaje <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container footer-inner">
            <div class="footer-top">
                <a href="#home" class="logo">
                    <span class="logo-bracket">{</span>
                    <span class="logo-name">DarielVT</span>
                    <span class="logo-bracket">}</span>
                </a>
                <div class="social-links">
                    <a href="https://github.com/" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://discord.com/" target="_blank" aria-label="Discord"><i class="fab fa-discord"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo $currentYear; ?> Dariel Leonardo Ventura Tejada. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="index.js"></script>
</body>
</html>