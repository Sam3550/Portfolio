
<?php
get_header();
?>
    <header class="header">

        <div class="container d-flex">

            <div class="logo">
                <p>Samir Glaglou</p>
            </div>

            <nav class="navbar show-nav">
                <ul class="menu list-unstyled">
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#about">A propos </a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#skills">Compétences</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="right">
                <ul class="socials list-unstyled  ">
                    <li><a href="https://www.linkedin.com/in/samir-glaglou-160717253/" target="_blank"> <svg
                                height="18px" width="18px" class="icon linkedin" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                            </svg>

                        </a></li>
                </ul>
                <button class="burger "> <span class="bar "></span></button>
            </div>

        </div>

    </header>

    <section id="hero" class="hero ">
        <div class="container">
            <div class="grid">

                <div class="hero__item left">
                    <span>Intégrateur Web</span>
                    <h1 class="title "> Bonjour, je suis Glaglou Samir de Rennes. </h1>
                    <p>Recherche Alternance</p>
                </div>

                <div class="hero__item right">
                    <div class="hero__avatar">
                        <img src="Images/avatar.jpg" alt="avatar" width="400px" style="border: solid black;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="grid">
                <div class="grid__item">
                    <img width="500" height="500" src="./Images/personne.jpg" alt="Glaglou Samir">
                </div>
                <div class="grid__item">
                    <h2 class="section-title title-about">A propos</h2>
                    <h3>Qui suis-je ?</h3>
                    <p>Lorem ipsum dolor sit <strong> mot ou phrase
                            importante</strong></p>
                    <p>Lorem ipsum dolor <strong> mot ou phrase
                            importante</strong></p>
                    <ul>
                        <li>Liste</li>
                        <li>Liste</li>
                        <li>Liste</li>
                        <li>Liste</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Mes services</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem eveniet debitis expedita possimus
                    ducimus dolores! Consequuntur dignissimos aut dolore excepturi velit voluptas dolorem reprehenderit,
                    magnam, earum molestiae corrupti. Quod, placeat.</p>
            </div grid__service-icon>
            <div class="grid">
                <div class="grid__item left">
                    <div class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M112.1 454.3c0 6.297 1.816 12.44 5.284 17.69l17.14 25.69c5.25 7.875 17.17 14.28 26.64 14.28h61.67c9.438 0 21.36-6.401 26.61-14.28l17.08-25.68c2.938-4.438 5.348-12.37 5.348-17.7L272 415.1h-160L112.1 454.3zM192 0C90.02 .3203 16 82.97 16 175.1c0 44.38 16.44 84.84 43.56 115.8c16.53 18.84 42.34 58.23 52.22 91.45c.0313 .25 .0938 .5166 .125 .7823h160.2c.0313-.2656 .0938-.5166 .125-.7823c9.875-33.22 35.69-72.61 52.22-91.45C351.6 260.8 368 220.4 368 175.1C368 78.8 289.2 .0039 192 0zM288.4 260.1c-15.66 17.85-35.04 46.3-49.05 75.89h-94.61c-14.01-29.59-33.39-58.04-49.04-75.88C75.24 236.8 64 206.1 64 175.1C64 113.3 112.1 48.25 191.1 48C262.6 48 320 105.4 320 175.1C320 206.1 308.8 236.8 288.4 260.1zM176 80C131.9 80 96 115.9 96 160c0 8.844 7.156 16 16 16S128 168.8 128 160c0-26.47 21.53-48 48-48c8.844 0 16-7.148 16-15.99S184.8 80 176 80z" />
                            </svg>
                        </div>
                        <div class="service__content">
                            <h3>GESTION DE PROJETS WEB</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z" />
                            </svg>
                        </div>
                        <div class="service__content">
                            <h3>INTÉGRATION WEB</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM104 432c0 13.3-10.7 24-24 24s-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24z" />
                            </svg>
                        </div>
                        <div class="service__content">
                            <h3>DÉVELOPPEMENTS SPÉCIFIQUES</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M211.8 339.8C200.9 350.7 183.1 350.7 172.2 339.8L108.2 275.8C97.27 264.9 97.27 247.1 108.2 236.2C119.1 225.3 136.9 225.3 147.8 236.2L192 280.4L300.2 172.2C311.1 161.3 328.9 161.3 339.8 172.2C350.7 183.1 350.7 200.9 339.8 211.8L211.8 339.8zM0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96zM48 96V416C48 424.8 55.16 432 64 432H384C392.8 432 400 424.8 400 416V96C400 87.16 392.8 80 384 80H64C55.16 80 48 87.16 48 96z" />
                            </svg>
                        </div>
                        <div class="service__content">
                            <h3>RÉFÉRENCEMENT NATUREL</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="grid__item right">
                    <div class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                            </svg>
                        </div>
                        <div class="service__content">
                            <h3>CONCEPTION GRAPHIQUE & WEBDESIGN</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z" />
                            </svg>
                        </div>
                        <div class="service__content">
                            <h3>DYNAMISME DES PAGES</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                        </div>
                        <div class="service__content">
                            <h3>INTERFACE D'ADMINISTRATION</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M80 0C44.7 0 16 28.7 16 64V448c0 35.3 28.7 64 64 64H304c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H80zm80 432h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                            </svg>
                        </div>
                        <div class="service__content">
                            <h3>RESPONSIVE DESIGN</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="skills" class="skills">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Mes compétences</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem eveniet debitis expedita possimus
                    ducimus dolores! Consequuntur dignissimos aut dolore excepturi velit voluptas dolorem reprehenderit,
                    magnam, earum molestiae corrupti. Quod, placeat.</p>
            </div>
            <div class="grid">
                <div class="grid__item">
                    <h3>Domaine de compétences</h3>
                    <ul class="list-unstyled">
                        <li>
                            <h4>Compétence</h4>
                            <p>Déscription de la compétence</p>
                        </li>
                        <li>
                            <h4>Compétence</h4>
                            <p>Déscription de la compétence</p>
                        </li>
                        <li>
                            <h4>Compétence</h4>
                            <p>Déscription de la compétence</p>
                        </li>
                        <li>
                            <h4>Compétence</h4>
                            <p>Déscription de la compétence</p>
                        </li>
                        <li>
                            <h4>Compétence</h4>
                            <p>Déscription de la compétence</p>
                        </li>
                        <li>
                            <h4>Compétence</h4>
                            <p>Déscription de la compétence</p>
                        </li>
                        <li>
                            <h4>Compétence</h4>
                            <p>Déscription de la compétence</p>
                        </li>
                    </ul>
                </div>
                <div class="grid__item">
                    <h3>Compétences en développement</h3>
                    <div class="progressbar">
                        <div class="bar" data-width="85">HTML</div>
                    </div>
                    <div class="progressbar">
                        <div class="bar" data-width="75">CSS</div>
                    </div>
                    <div class="progressbar">
                        <div class="bar" data-width="20">JAVASCRIPT</div>
                    </div>
                    <div class="progressbar">
                        <div class="bar" data-width="20">PHP</div>
                    </div>
                    <h3>Compétences en conception graphique</h3>
                    <div class="progressbar">
                        <div class="bar" data-width="70">PHOTOSHOP</div>
                    </div>
                    <div class="progressbar">
                        <div class="bar" data-width="65">ILLUSTRATOR</div>
                    </div>
                    <div class="progressbar">
                        <div class="bar" data-width="30">FIGMA</div>
                    </div>
                    <div class="progressbar">
                        <div class="bar" data-width="50">ADOBE XD</div>
                    </div>
                    <div class="progressbar">
                        <div class="bar" data-width="45">ADOBE PREMIERE PRO</div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Portfolio</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem eveniet debitis expedita possimus
                    ducimus dolores! Consequuntur dignissimos aut dolore excepturi velit voluptas dolorem reprehenderit,
                    magnam, earum molestiae corrupti. Quod, placeat.</p>
            </div>
            <ul class="grid portfolio-filters list-unstyled">
                <li class="grid__item">
                    <a href="#" class="active" data-filter="all">Tous les projets</a>
                </li>
                <li class="grid__item">
                    <a href="#" class="active" data-filter="design">Design</a>
                </li>
            </ul>
            <div class="grid">
                <div class="grid__item">
                    <div class="card" data-category="all">
                        <img src="https://picsum.photos/600/400?random=1" alt="" class="card__image">
                        <div class="card__inner">
                            <h3 class="card__title">Titre du projet</h3>
                            <p class="category">Développement Web</p>
                        </div>
                        <div class="card__overlay">
                            <a href="#" class="card__link" data-id="modal-1">+</a>
                        </div>
                    </div>
                    <div class="modal" id="modal-1">
                        <button class="modal__close">&times;</button>
                        <div class="modal__content">
                            <div class="container">
                                <div class="grid">
                                    <!-- ceci contient les deux grille pour la photo du projet et le texte -->
                                    <div class="grid__item">
                                        <img style="border: 1px solid black; " src="./Images/avatar.jpg" alt="">

                                    </div>
                                    <div class="grid__item">
                                        <h2>Modal 1 le tire de mon projet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="card" data-category="all">
                        <img src="https://picsum.photos/600/400?random=2" alt="" class="card__image">
                        <div class="card__inner">
                            <h3 class="card__title">Titre du projet</h3>
                            <p class="category">Développement Web</p>
                        </div>
                        <div class="card__overlay">
                            <a href="#" class="card__link" data-id="modal-2">+</a>
                        </div>
                    </div>
                    <div class="modal" id="modal-2">
                        <button class="modal__close">&times;</button>
                        <div class="modal__content">
                            <div class="container">
                                <div class="grid">
                                    <!-- ceci contient les deux grille pour la photo du projet et le texte -->
                                    <div class="grid__item">
                                        <img style="border: 1px solid black; " src="./Images/avatar.jpg" alt="">

                                    </div>
                                    <div class="grid__item">
                                        <h2>Modal 2 le tire de mon projet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="card" data-category="all">
                        <img src="https://picsum.photos/600/400?random=3" alt="" class="card__image">
                        <div class="card__inner">
                            <h3 class="card__title">Titre du projet</h3>
                            <p class="category">Développement Web</p>
                        </div>
                        <div class="card__overlay">
                            <a href="#" class="card__link" data-id="modal-3">+</a>
                        </div>
                    </div>
                    <div class="modal" id="modal-3">
                        <button class="modal__close">&times;</button>
                        <div class="modal__content">
                            <div class="container">
                                <div class="grid">
                                    <!-- ceci contient les deux grille pour la photo du projet et le texte -->
                                    <div class="grid__item">
                                        <img style="border: 1px solid black; " src="./Images/avatar.jpg" alt="">

                                    </div>
                                    <div class="grid__item">
                                        <h2>Modal 3 le tire de mon projet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="card" data-category="all">
                        <img src="https://picsum.photos/600/400?random=4" alt="" class="card__image">
                        <div class="card__inner">
                            <h3 class="card__title">Titre du projet</h3>
                            <p class="category">Développement Web</p>
                        </div>
                        <div class="card__overlay">
                            <a href="#" class="card__link" data-id="modal-4">+</a>
                        </div>
                    </div>
                    <div class="modal" id="modal-4">
                        <button class="modal__close">&times;</button>
                        <div class="modal__content">
                            <div class="container">
                                <div class="grid">
                                    <!-- ceci contient les deux grille pour la photo du projet et le texte -->
                                    <div class="grid__item">
                                        <img style="border: 1px solid black; " src="./Images/avatar.jpg" alt="">

                                    </div>
                                    <div class="grid__item">
                                        <h2>Modal 4 le tire de mon projet</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Contact</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem eveniet debitis expedita possimus
                    ducimus dolores! Consequuntur dignissimos aut dolore excepturi velit voluptas dolorem reprehenderit,
                    magnam, earum molestiae corrupti. Quod, placeat.</p>
            </div>
            <form action="contact.php" class="form">
                <label for="firstname">
                    <input type="text" name="firstname" id="fisrtname" placeholder="Nom">
                </label>
                <label for="lastname">
                    <input type="text" name="lastname" id="lastname" placeholder="Prénom">
                </label>
                <label for="email">
                    <input type="email" name="email" id="email" placeholder="Email">
                </label>
                <textarea name="message" id="message" placeholder="Message"></textarea>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="grid">
                <div class="grid__item">
                    <p>Glaglou Samir</p>
                </div>
                <div class="grid__item">
                    <ul class="socials list-unstyled  ">
                        <li><a href="https://www.linkedin.com/in/samir-glaglou-160717253/" target="_blank"> <svg
                                    height="18px" width="18px" class="linkedin" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path id="linkedIn"
                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                                </svg>

                            </a></li>
                    </ul>
                </div>
                <div class="grid__item">
                    <p>Copyright © 2021 portfolio Glaglou Samir. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <?php get_footer();?>