<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOSC Community Library | Empowering Education</title>
    <meta name="description" content="An open-source digital library system designed to provide accessible educational resources for Uganda.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <a href="/" class="logo">BOSC Library</a>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#collections">Collections</a></li>
                <li><a href="#community">Community</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <a href="#" class="btn-login">Login</a>
            <a href="#" class="btn-signup">Get Started</a>
        </div>
    </header>

    <main>
        <section class="hero">
            <!-- Decorative floating elements -->
            <div class="floating-element el-1"></div>
            <div class="floating-element el-2"></div>
            <div class="floating-element el-3"></div>

            <div class="hero-content">
                <h1>Open Knowledge for <br>Every Community</h1>
                <p>Welcome to the BOSC Community Library. A centralized, open-source repository of educational materials tailored for public-sector and academic institutions across Uganda.</p>
                <div class="cta-group">
                    <a href="#browse" class="btn-primary">Browse Library</a>
                    <a href="https://github.com/ThrustSoftwares/BOSC-Community-Library" target="_blank" class="btn-secondary">Contribute on GitHub</a>
                </div>
            </div>
        </section>

        <section class="stats">
            <div class="stat-card">
                <div class="stat-number">10K+</div>
                <div class="stat-label">Digital Resources</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">50+</div>
                <div class="stat-label">Partner Schools</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">100%</div>
                <div class="stat-label">Open Source</div>
            </div>
        </section>
    </main>

    <!-- Interactive Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.querySelector('header');
            
            // Glassmorphism scroll effect
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.style.background = 'rgba(15, 23, 42, 0.9)';
                    header.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
                } else {
                    header.style.background = 'rgba(15, 23, 42, 0.7)';
                    header.style.boxShadow = 'none';
                }
            });

            // Interactive floating elements logic (Optional smooth mouse follow)
            document.addEventListener('mousemove', (e) => {
                const x = e.clientX / window.innerWidth;
                const y = e.clientY / window.innerHeight;
                
                document.querySelector('.el-1').style.transform = `translate(${x * 30}px, ${y * 30}px)`;
                document.querySelector('.el-2').style.transform = `translate(${x * -40}px, ${y * -40}px)`;
            });
        });
    </script>
</body>
</html>
