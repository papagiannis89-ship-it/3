<?php
$pageTitle = 'IGMI Sample | WebCy Solutions';
$pageDescription = 'A modern starter landing page for webcy.solutions/igmisample.';
$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="site-header" id="top">
        <div class="container header-inner">
            <a href="#top" class="logo">IGMI<span>Sample</span></a>
            <button class="nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="main-nav" aria-label="Primary">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero" id="hero">
            <div class="container hero-inner">
                <div class="hero-content">
                    <p class="hero-eyebrow">webcy.solutions/igmisample</p>
                    <h1>Build something remarkable on the web</h1>
                    <p class="hero-lead">
                        A clean, responsive PHP starter site — ready to customize for your next project with WebCy Solutions.
                    </p>
                    <div class="hero-actions">
                        <a href="#services" class="btn btn-primary">Explore Services</a>
                        <a href="#contact" class="btn btn-outline">Get in Touch</a>
                    </div>
                </div>
                <div class="hero-visual" aria-hidden="true">
                    <div class="hero-card">
                        <span class="hero-stat">100%</span>
                        <span class="hero-stat-label">Framework-free</span>
                    </div>
                    <div class="hero-card hero-card--accent">
                        <span class="hero-stat">3</span>
                        <span class="hero-stat-label">Core files</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="services section" id="services">
            <div class="container">
                <header class="section-header">
                    <p class="section-eyebrow">What we offer</p>
                    <h2>Services</h2>
                    <p>Practical solutions designed to help you launch quickly and scale with confidence.</p>
                </header>
                <div class="services-grid">
                    <article class="service-card">
                        <div class="service-icon">01</div>
                        <h3>Web Development</h3>
                        <p>Fast, accessible websites built with modern standards and clean, maintainable code.</p>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">02</div>
                        <h3>UI &amp; Design</h3>
                        <p>Responsive layouts and thoughtful typography that look great on every device.</p>
                    </article>
                    <article class="service-card">
                        <div class="service-icon">03</div>
                        <h3>Consulting</h3>
                        <p>Expert guidance on architecture, performance, and best practices for your stack.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="about section section--alt" id="about">
            <div class="container about-inner">
                <div class="about-content">
                    <header class="section-header section-header--left">
                        <p class="section-eyebrow">Who we are</p>
                        <h2>About IGMI Sample</h2>
                    </header>
                    <p>
                        This starter template demonstrates a lightweight approach to building professional landing pages
                        using plain PHP, HTML, CSS, and JavaScript — no database or heavy frameworks required.
                    </p>
                    <p>
                        Perfect as a foundation for client demos, microsites, or internal tools hosted at
                        <strong>webcy.solutions/igmisample</strong>.
                    </p>
                    <ul class="about-list">
                        <li>Semantic, accessible markup</li>
                        <li>Mobile-first responsive design</li>
                        <li>Easy to extend and deploy</li>
                    </ul>
                </div>
                <div class="about-stats">
                    <div class="stat-block">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Support ready</span>
                    </div>
                    <div class="stat-block">
                        <span class="stat-number">&lt;1s</span>
                        <span class="stat-label">Load target</span>
                    </div>
                    <div class="stat-block">
                        <span class="stat-number">∞</span>
                        <span class="stat-label">Customizable</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact section" id="contact">
            <div class="container">
                <header class="section-header">
                    <p class="section-eyebrow">Let's connect</p>
                    <h2>Contact</h2>
                    <p>Send us a message — we'll get back to you as soon as possible.</p>
                </header>
                <div class="contact-wrapper">
                    <form class="contact-form" id="contact-form" action="#" method="post" novalidate>
                        <div class="form-row">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required placeholder="Your name">
                        </div>
                        <div class="form-row">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required placeholder="you@example.com">
                        </div>
                        <div class="form-row">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required placeholder="How can we help?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                        <p class="form-note" id="form-feedback" role="status" aria-live="polite"></p>
                    </form>
                    <aside class="contact-info">
                        <h3>Reach us</h3>
                        <ul>
                            <li>
                                <strong>Email</strong>
                                <a href="mailto:hello@webcy.solutions">hello@webcy.solutions</a>
                            </li>
                            <li>
                                <strong>Website</strong>
                                <a href="https://webcy.solutions/igmisample">webcy.solutions/igmisample</a>
                            </li>
                            <li>
                                <strong>Location</strong>
                                <span>Cyprus &amp; Remote</span>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <p>&copy; <?php echo $currentYear; ?> WebCy Solutions — IGMI Sample. All rights reserved.</p>
            <a href="#top" class="back-to-top">Back to top</a>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
