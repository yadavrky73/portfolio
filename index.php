
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="/assets/css/styles.css">

    <title>Responsive Portfolio Website</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Prince</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-home nav__icon"></i>Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i>About
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">Skills
                            <i class="uil uil-file-alt nav__icon"></i>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i>Services
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i>Portfolio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i>Contact me
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>

    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/in/paras-grover-949233204/?trk=nav_responsive_tab_profile_pic"
                                class="home__social-icon" target="_blank">
                                <i class="uil uil-linkedin"></i>
                            </a>
                            <a href="https://www.instagram.com/prince_grover01/" class="home__social-icon"
                                target="_blank">
                                <i class="uil uil-instagram-alt"></i>
                            </a>
                            <a href="https://github.com/Paras-Web-developer" class="home__social-icon" target="_blank">
                                <i class="uil uil-github"></i>
                            </a>
                        </div>
                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                    <image class="home__blob-img" x='17' y='24' href="assets/img/me1.png" />
                                </g>
                            </svg>
                        </div>
                        <div class="home__data">
                            <h1 class="home__title">Hi, I'am Prince</h1>
                            <h3 class="home__subtitle">Front-End Web Developer</h3>
                            <p class="home__description">Hign level experience in web design & development. </p>
                            <a href="#contact" class="button button--flex">Contact me
                                <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>

        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section__title">About me</h2>
            <span class="section__subtitle">My introduction</span>

            <div class="about__container container grid">
                <img src="/assets/img/prince.png" alt="" class="about__img">

                <div class="about__data">
                    <p class="about__description">
                        Web developer, with extensive knoowledge and years of experience,
                        working in web technoloies and ui / ux design, delivering work.
                    </p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">01+</span>
                            <span class="about__info-name">Year <br> experience</span>
                        </div>

                        <div>
                            <span class="about__info-title">06+</span>
                            <span class="about__info-name">Completed <br> Project</span>
                        </div>

                        <div>
                            <span class="about__info-title">Worked</span>
                            <span class="about__info-name">at<br>
                                Sunfocus Solution Pvt.Ltd
                            </span>
                        </div>
                    </div>

                    <div class="about__buttons">
                        <a download="" href="/assets/pdf/React Software Engineer.pdf"
                            class="button button--flex">Download
                            CV
                            <i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level </span>

            <div class="skills__container container grid">
                <div>
                    <!-- ================Slills 1 =================== -->
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>
                            <div>
                                <h1 class="skills__title">Frontend Developer</h1>
                                <span class="skills__subtitle">More than 1 years</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__CSS"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">SCSS</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__tailwind"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">tailwind CSS</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__tailwind"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__javaScript"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">react js</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__react"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">UI/UX</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__UI-UX"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ================Slills 2 =================== -->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icons"></i>

                            <div>
                                <h1 class="skills__title">Backend developer</h1>
                                <span class="skills__subtitle">More than 1 years</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Nodejs</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__node"></span>
                                </div>
                            </div>


                            <!-- <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">C/C++</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__C"></span>
                                </div>
                            </div> -->

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">mongodb</h3>
                                    <span class="skills__number">30%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__mongodb"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">git/github</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__github"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <!-- ================Slills 3 =================== -->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-swatchbook skills__icons"></i>
                            <div>
                                <h1 class="skills__title">Designer</h1>
                                <span class="skills__subtitle">More than 1 years</span>
                            </div>

                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>

                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Figma</h3>
                                    <span class="skills__number">65%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__figma"></span>
                                </div>
                            </div>


                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Photoshop</h3>
                                    <span class="skills__number">40%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__photoshop"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My personal Journey</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target='#education'>
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>

                    <div class="qualification__button button--flex" data-target='#work'>
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Work
                    </div>
                </div>

                <div class="qualification__section">
                    <!--==================== QUALIFICATION CONTENT 1 ====================-->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!--==================== QUALIFICATION 1====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Computer Enginner</h3>
                                <span class="qualification__subtitle">Gateway institute of engineering and
                                    technology</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020-2023
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 2====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title">Deploma on Computer Application.</h3>
                                <span class="qualification__subtitle">Hartron Center</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019-2020
                                </div>
                            </div>


                        </div>

                        <!--==================== QUALIFICATION 3====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">12th class</h3>
                                <span class="qualification__subtitle">government senior secondary school</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018-2019
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 4====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>

                            <div>
                                <h3 class="qualification__title">10th class</h3>
                                <span class="qualification__subtitle">government senior secondary school.</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2017-2018
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== QUALIFICATION CONTENT 2 ====================-->
                    <div class="qualification__content" data-content id="work">
                        <!--==================== QUALIFICATION 1====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Web Developer</h3>
                                <span class="qualification__subtitle">React js
                                    - Sonfocus Solution PVT.LTD</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2023-Present
                                </div>
                            </div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 2====================-->
                        <div class="qualification__data">
                            <span></span>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title">Frontend Developer</h3>
                                <span class="qualification__subtitle">Html, CSS, JS, React, SCSS, Tailwind CSS, Bootsrap
                                </span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018-2022
                                </div>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 3====================-->
                        <div class="qualification__data">


                            <div>
                                <h3 class="qualification__title">UI/UX</h3>
                                <span class="qualification__subtitle">Figma</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021-2022
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>
                        </div>

                        <!-- ==================== QUALIFICATION 4==================== -->
                        <!-- <div class="qualification__data">
                            <span></span>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                            <div>
                                <h3 class="qualification__title">Backend development</h3>
                                <span class="qualification__subtitle">Nodejs - YouTube</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022-2023
                                </div>
                            </div>
                        </div> -->

                        <!--==================== QUALIFICATION 5====================-->
                        <!-- <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Web design</h3>
                                <span class="qualification__subtitle">Responsive Design - YouTube</span>
                                <div class="qualification__calender">
                                    <i class="uil uil-calendar-alt"></i>
                                    2017-2018
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">
            <h2 class="section__title">Services</h2>
            <span class="section__subtitle">What i offer</span>

            <div class="services__container container grid">
                <!--==================== SERVICES 1 ====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"></i>
                        <h3 class="services__title">Ui/Ux <br> Designer</h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Ui/Ux <br> Designer</h4>
                            <i class="uil uil-times services__modal-close"></i>
                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I design the user interface.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>i design the Website page's</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I design the mobile App interface..</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I Create Ux element interactions.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I position your company brand.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--==================== SERVICES 2 ====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-arrow services__icon"></i>
                        <h3 class="services__title">Website <br> Developer</h3>
                    </div>

                    <span class="button button--flex button-small button--link services__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Website <br> Developer</h4>
                            <i class="uil uil-times services__modal-close"></i>
                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I develope the user interface</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p> I develope the Responsive Website's.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I develope the SCO friendly website's.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I develope the attractive website.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I provide the 24/7 support..</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--==================== SERVICES 3 ====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-pen services__icon"></i>
                        <h3 class="services__title">Branding<br>Designer</h3>
                    </div>

                    <span class="button button--flex button-small button--link services__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Branding<br>Designer</h4>
                            <i class="uil uil-times services__modal-close"></i>
                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I develope the user interface</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>Web page development.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I develope the user interface.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I Create Ux element interactions.</p>
                                </li>

                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p>I position your company brand.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Most recent work</span>

            <div class="portfolio__container container swiper mySwiper">
                <div class="swiper-wrapper">
                    <!--==================== PORTFOLIO 1====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/project1.png" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Marketing Website</h3>
                            <p class="portfolio__description">Canada's top influencer marketing platform
                                for campaigns on Facebook, Instagram, YouTube, TikTok, Snapchat and more.
                                facebook Instagram twitter.</p>
                            <a href="https://www.ramax.media/"
                                class="button button--flex button--small portfolio__button">
                                demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <!--==================== PORTFOLIO 2====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/project2.png" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Snapchat lens Creator </h3>
                            <p class="portfolio__description">Snapchat lens & develop AR & VR Website adaptable to all
                                devices,with ui components.</p>
                            <a href="https://vishucreation.com/"
                                class="button button--flex button--small portfolio__button">
                                demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--==================== PORTFOLIO 3====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/shahji.png" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Catering Website</h3>
                            <p class="portfolio__description">Filling every occasion with great Veg or Non-Veg food and
                                service.
                                Shah Ji Catering Services, situated at 47 mapleview ave Brampton, Canada.</p>
                            <a href="https://www.shahjicatering.com/"
                                class="button button--flex button--small portfolio__button">
                                demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--==================== PORTFOLIO 4====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/stream.png" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Flixr Streaming</h3>
                            <p class="portfolio__description">Introducing "Streamify React" - a cutting-edge streaming
                                web app built with React. Enjoy a seamless streaming experience with a sleek user
                                interface and a vast library of movies, TV shows, and music. Dive into endless
                                entertainment at your fingertips.</p>
                            <a href="https://flixr-six.vercel.app/"
                                class="button button--flex button--small portfolio__button">
                                demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--==================== PORTFOLIO 5====================-->
                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/spotyfy.png" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Spotify Clone</h3>
                            <p class="portfolio__description">
                                Presenting "SpotiClone" - an innovative web app that mirrors the beloved features of
                                Spotify. Discover and stream a vast collection of music from various genres, create
                                personalized playlists, and experience a sleek, user-friendly interface that delivers an
                                immersive music streaming experience. Indulge in the joy of music with SpotiClone, your
                                ultimate Spotify clone web app.</p>
                            <a href="https://spotify-clone-web-app-blush.vercel.app/"
                                class="button button--flex button--small portfolio__button">
                                demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/LOYVERSE.png" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">LOYVERSE POINT OF SALE</h3>
                            <p class="portfolio__description">
                                Introducing "MiniMarket" - a sleek and efficient e-commerce web app built with React.
                                Experience seamless browsing, secure transactions, and a user-friendly interface while
                                exploring a wide range of products. From easy product search to hassle-free checkout,
                                MiniMarket provides a delightful shopping experience in a compact package.</p>
                            <a href="https://loyverse-e-commernce.vercel.app/"
                                class="button button--flex button--small portfolio__button">
                                demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <!--Add Arrows-->
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                </div>

                <!-- Add pagination -->
                <div class="swiper-pagination adjust"></div>
            </div>
        </section>

        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section">
            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title">You have a new project.</h2>
                        <p class="project__description">Contact me now and get a 30% discount on your new project.</p>
                        <a href="#contact" class="button button--flex button--white">
                            Contact me
                            <i class="uil uil-message project__icon button__icon"></i>
                        </a>
                    </div>

                    <img src="assets/img/me1.png" alt="" class="project__img">
                </div>
            </div>
        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section">
            <h2 class="section__title">Testimonial</h2>
            <span class="section__subtitle">My client saying</span>
            <div class="testimonial__container container swiper mySwiper">
                <div class="swiper-wrapper">
                    <!--==================== TESTIMONIAL 1====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data ">
                            <div class="testimonial__header">
                                <img src="/assets/img/jeet.png" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Rahul Canada</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">Working with Paras and their streaming web app has been an
                            amazing experience! The attention to detail and commitment to quality is evident in every
                            aspect of the project. Moreover, their 24-hour support ensures that any issues or questions
                            are promptly addressed. I highly recommend their services to anyone seeking a reliable and
                            exceptional streaming platform.</p>
                    </div>

                    <!--==================== TESTIMONIAL 2====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data ">
                            <div class="testimonial__header">
                                <img src="/assets/img/vishal.png" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Vishal Saini</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">Paras has truly exceeded my expectations with their
                            streaming web app. The attention to detail and dedication to delivering a high-quality
                            product is unmatched. With their round-the-clock support, I have never felt alone in this
                            project. I am grateful to have found a partner who not only delivers excellence but also
                            provides unwavering support throughout. Highly recommended</p>
                    </div>

                    <!--==================== TESTIMONIAL 3====================-->
                    <div class="testimonial__content swiper-slide">
                        <div class="testimonial__data ">
                            <div class="testimonial__header">
                                <img src="/assets/img/jeet.png" alt="" class="testimonial__img">

                                <div>
                                    <h3 class="testimonial__name">Jeet</h3>
                                    <span class="testimonial__client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                                <i class="uil uil-star testimonial__icon-star"></i>
                            </div>
                        </div>

                        <p class="testimonial__description">I am thrilled to have chosen Paras and their streaming web
                            app for my project. The level of expertise and professionalism they bring is outstanding.
                            From the initial development stages to ongoing support, they have been there every step of
                            the way, ensuring a seamless and impressive streaming experience. With their 24-hour
                            availability, I feel confident knowing that my project is in capable hands. Thank you,
                            Paras, for your exceptional work!</p>
                    </div>
                </div>
                <!-- add paginaton -->
                <div class="swiper-pagination swiper-pagination-testimonial"></div>

            </div>
        </section>

        <!--==================== CONTACT ME ====================-->
        <section class="contact section" id="contact">
            <h2 class="section__title">Contact me</h2>
            <span class="section__subtitle">Get in touch</span>

            <div class="contact__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Call me</h3>
                            <span class="contact__subtitle">91+9996407289</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Gmail</h3>
                            <span class="contact__subtitle">parasgrover932@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__subtitle">India</span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact__form grid"></form>
                <div class="contact__inputs grid">
                    <div class="contact__content">
                        <label for="" class="contact__lable">Name</label>

                        <input type="text" class="contact__input">
                    </div>

                    <div class="contact__content">
                        <label for="" class="contact__lable">Email</label>
                        <input type="email" class="contact__input">
                    </div>

                    <div class="contact__content">
                        <label for="" class="contact__lable">Project</label>
                        <input type="text" class="contact__input">
                    </div>

                    <div class="contact__content">
                        <label for="" class="contact__lable">Message</label>
                        <textarea name="" id="" cols="0" rows="7" class="contact__input"></textarea>
                    </div>

                    <div>
                        <a href="" class="button button--flex">
                            Send Message
                            <i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Prince Grover</h1>
                    <span class="footer__subtitle">Front-End developer</span>
                </div>

                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Services</a>
                    </li>

                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>

                    <li>
                        <a href="#contact" class="footer__link">Contact me</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://www.instagram.com/prince_grover01/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>

                    <a href="https://wa.me/9996407289" target="_blank" class="footer__social whatsapp_float">
                        <i class="uil uil-whatsapp"></i>
                    </a>

                    <a href="https://github.com/Paras-Web-developer" target="_blank" class="footer__social">
                        <i class="uil uil-github"></i>
                    </a>
                </div>
            </div>

            <p class="footer__copy">&#169; Prince. All right reserved</p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scroolup__icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="/assets/js/swiper-bundle.min.js"></script>


    <!--==================== MAIN JS ====================-->
    <script src="/assets/js/main.js"></script>
</body>

</html>