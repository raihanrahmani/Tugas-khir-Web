<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Cafe</title>
    <link rel="stylesheet" href="/css/style2.css">
</head>
<body id="top" class="dark_theme">
    <!-- HEADER -->
    <div class="text-center-container">
        <div class="container">
            <h1 class="text-center">Study Cafe</h1>
            <p class="text-center">Dari Afni, Raihan dan Sinta</p>
            <h4 class="text-center">26 Nov 2017</h4>
        </div>
    </div>
    <header class="header" data-header>
        <div class="container">
            <h1 class="h1 1ogo">
                <a href="#">Study Cafe <span>.</span></a>
            </h1>
            
            <div class="navbar-actions">
                <select name="languange" id="lang">
                    <option value="en">En</option>
                    <option value="ar">Ar</option>
                </select>

                <button class="theme-btn" aria-label="Change Theme" title="Change Theme" data-theme-btn>
                    <span class="icon"></span>
                </button>
            </div>

            <button class="nav-toogle-btn" aria-label="Toggle Menu" title="Toogle Menu" data-nav-toogle-btn>
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
            </button>

            <nav class="navbar" data-navbar>
                <ul class="nabvar-list">
                    <li>
                        <a href="#home" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="#page" class="navbar-link">Page</a>
                    </li>
                    <li>
                        <a href="#room" class="navbar-link">Room</a>
                    </li>
                    <li>
                        <a href="#reservasi" class="navbar-link">Reservasi</a>
                    </li>
                    <li>
                        <a href="#fitur" class="navbar-link">fitur</a>
                    </li>
                </ul>
            </nav>

        </div>

    </header>

    <main>
        <article class="container">

        <section class="hero" id="home">
            <figure class="hero-banner">

                <picture>
                <!-- masukan foto cafe     -->
                <source srcset="/images/kafe.jpg" media="(min-width: 768px)">
                <source srcset="/images/kafe.jpg" media="(min-width: 500px)">
                <img src="/images/kafe.jpg" alt="A man in a blue shirt with a happy expression"
              class="w-100">
                </picture>

            </figure>

            <div class="hero-content">
                <h2 class="h3 hero-title">WELOCOME TO</h2>
                <h2 class="h2 hero-title2">STUDY CAFE</h2>
                <a href="#contact" class="btn btn-primary">Get in touch</a>
            </div>

        </section>

        </article>
    </main>

</body>
</html>