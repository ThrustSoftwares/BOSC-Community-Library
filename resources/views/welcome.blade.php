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
                <li><a href="#about">{{ __('About') }}</a></li>
                <li><a href="#collections">{{ __('Collections') }}</a></li>
                <li><a href="#community">{{ __('Community') }}</a></li>
                <li>
                    <select onchange="window.location.href=this.value" class="bg-transparent text-white border-none cursor-pointer outline-none ml-4" style="background: transparent; color: inherit; border: none; font-size: 1rem;">
                        <option value="{{ route('lang.switch', 'en') }}" {{ App::getLocale() == 'en' ? 'selected' : '' }} style="color: black;">English</option>
                        <option value="{{ route('lang.switch', 'lg') }}" {{ App::getLocale() == 'lg' ? 'selected' : '' }} style="color: black;">Luganda</option>
                    </select>
                </li>
            </ul>
        </nav>
        <div class="auth-buttons">
            @if(Auth::check())
                <span class="text-white">{{ __('Welcome') }}, {{ Auth::user()->name }}</span>
                <a href="{{ route('dashboard') }}" class="btn-login">{{ __('Dashboard') }}</a>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn-signup">{{ __('Logout') }}</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn-login">{{ __('Login') }}</a>
                <a href="{{ route('register') }}" class="btn-signup">{{ __('Get Started') }}</a>
            @endif
        </div>
    </header>

    <main>
        <section class="hero">
            <!-- Decorative floating elements -->
            <div class="floating-element el-1"></div>
            <div class="floating-element el-2"></div>
            <div class="floating-element el-3"></div>

            <div class="hero-content">
                <h1>{!! nl2br(e(__('Open Knowledge for Every Community'))) !!}</h1>
                <p>{{ __('Welcome to the BOSC Community Library. A centralized, open-source repository of educational materials tailored for public-sector and academic institutions across Uganda.') }}</p>
                <div class="cta-group">
                    @if(Auth::check())
                        <a href="{{ route('dashboard') }}" class="btn-primary">{{ __('Go to Dashboard') }}</a>
                    @else
                        <a href="{{ route('register') }}" class="btn-primary">{{ __('Browse Library') }}</a>
                    @endif
                    <a href="https://github.com/ThrustSoftwares/BOSC-Community-Library" target="_blank" class="btn-secondary">{{ __('Contribute on GitHub') }}</a>
                </div>
            </div>
        </section>

        <section class="stats">
            <div class="stat-card">
                <div class="stat-number">10K+</div>
                <div class="stat-label">{{ __('Digital Resources') }}</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">50+</div>
                <div class="stat-label">{{ __('Partner Schools') }}</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">100%</div>
                <div class="stat-label">{{ __('Open Source') }}</div>
            </div>
        </section>

        <section class="search-section">
            <div class="search-container">
                <input type="text" id="search-input" placeholder="{{ __('Search for resources...') }}">
                <button id="search-btn">{{ __('Search') }}</button>
            </div>
        </section>

        <section id="collections" class="collections">
            <h2>{{ __('Our Collections') }}</h2>
            <div class="resource-grid" id="resource-grid">
                <div class="resource-card" data-title="Introduction to Computer Science" data-author="John Doe" data-category="Technology">
                    <h3>Introduction to Computer Science</h3>
                    <p>Author: John Doe</p>
                    <p>Category: Technology</p>
                    <a href="#">Download</a>
                </div>
                <div class="resource-card" data-title="Mathematics Fundamentals" data-author="Jane Smith" data-category="Mathematics">
                    <h3>Mathematics Fundamentals</h3>
                    <p>Author: Jane Smith</p>
                    <p>Category: Mathematics</p>
                    <a href="#">Download</a>
                </div>
                <div class="resource-card" data-title="History of Uganda" data-author="Robert Brown" data-category="History">
                    <h3>History of Uganda</h3>
                    <p>Author: Robert Brown</p>
                    <p>Category: History</p>
                    <a href="#">Download</a>
                </div>
                <div class="resource-card" data-title="Biology Basics" data-author="Alice Johnson" data-category="Science">
                    <h3>Biology Basics</h3>
                    <p>Author: Alice Johnson</p>
                    <p>Category: Science</p>
                    <a href="#">Download</a>
                </div>
                <div class="resource-card" data-title="English Literature" data-author="Michael Davis" data-category="Literature">
                    <h3>English Literature</h3>
                    <p>Author: Michael Davis</p>
                    <p>Category: Literature</p>
                    <a href="#">Download</a>
                </div>
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

            // Search functionality
            const searchInput = document.getElementById('search-input');
            const resourceGrid = document.getElementById('resource-grid');
            const resources = resourceGrid.querySelectorAll('.resource-card');

            function performSearch() {
                const query = searchInput.value.toLowerCase();
                resources.forEach(card => {
                    const title = card.dataset.title.toLowerCase();
                    const author = card.dataset.author.toLowerCase();
                    const category = card.dataset.category.toLowerCase();
                    if (title.includes(query) || author.includes(query) || category.includes(query)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            searchInput.addEventListener('input', performSearch);
        });
    </script>
</body>
</html>
