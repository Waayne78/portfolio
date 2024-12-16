<!DOCTYPE html>
<html>

<head>
    <title>Mon Portfolio</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#about">Moi</a></li>
                <li><a href="#skills">Compétences</a></li>
                <li><a href="#projects">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="about">
        <h1>Moi c'est
            <br>
            <span>Milane Mehalebi</span>
            <br>
            et je suis en
            <br>
            <span>BTS SIO SLAM</span>
        </h1>
        <a href="assets/mehalebi-milane-cv-nov.pdf" download>
            <button type="button" class="btn">Télécharger Mon CV</button>
        </a>

    </section>
    <section id="education">
        <h2>Parcours Étudiant</h2>
        <ul>
            <li><strong>BTS SIO SLAM</strong> - IPSSI ,Septembre 2023 à présent</li>
            <li><strong>Baccalauréat Général</strong> - Lycée Emilie de Breteuil ,2020 à 2023</li>
        </ul>
    </section>

    <section id="professional">
        <h2>Parcours Professionnel</h2>
        <ul>
            <li><strong>Stage Développeur Web </strong> - Osmoz, Mai 2024</li>
            <li><strong>Alternant Développeur Web </strong> - Lovely Smile, Septembre 2024</li>
        </ul>
    </section>

    <section id="school">
        <div class="container">
            <h2>IPSSI Yvelines - Grande école d'informatique</h2>
            <div class="content">
                <div class="info">
                    <p>L'IPSSI est une école spécialisée dans les domaines de l'informatique et de la cybersécurité.</p>
                    <p>Adresse :</p>
                    <p>Immeuble Le Sésame, 8 Rue Germain Soufflot, 78180 Montigny-le-Bretonneux</p>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.908327100691!2d2.0395402999999997!3d48.784716399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e687f6e551bc3d%3A0x2e27be3edbf16f8b!2sIpssi%20Yvelines%20-%20School%20Computer%20Cybers%C3%A9curit%C3%A9!5e0!3m2!1sen!2sfr!4v1624664763912!5m2!1sen!2sfr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Ajout de la section BTS SIO et options SLAM/SISR -->
    <div class="school-description">
        <h2>Le BTS SIO</h2>
        <div class="options">
            <div class="option">
                <h3><i class="fas fa-code"></i> Option SLAM</h3>
                <p>L'option SLAM (Solutions Logicielles et Applications Métiers) se concentre sur le développement et la
                    programmation d'applications informatiques, la gestion des bases de données et la création de
                    solutions
                    logicielles sur mesure.</p>
            </div>
            <div class="option">
                <h3><i class="fas fa-network-wired"></i> Option SISR</h3>
                <p>L'option SISR (Solutions d'Infrastructure, Systèmes et Réseaux) est orientée vers l'administration
                    des
                    réseaux, la gestion des systèmes informatiques et la mise en place des infrastructures techniques au
                    sein des entreprises.</p>
            </div>
        </div>
    </div>

    </div>
    </section>

    <section id="skills">
        <h2>Mes Compétences</h2>
        <div class="skills-container">
            <div class="skill-card">
                <img src="assets/flutter.svg" alt="Flutter Logo" class="skill-icon">
                <h3>Flutter</h3>
            </div>
            <div class="skill-card">
                <ion-icon name="logo-html5" class="skill-icon"></ion-icon>
                <h3>HTML</h3>
            </div>
            <div class="skill-card">
                <ion-icon name="logo-css3" class="skill-icon"></ion-icon>
                <h3>CSS</h3>
            </div>
            <div class="skill-card">
                <ion-icon name="logo-javascript" class="skill-icon"></ion-icon>
                <h3>JavaScript</h3>
            </div>
            <div class="skill-card">
                <ion-icon name="server-outline" class="skill-icon"></ion-icon>
                <h3>SQL</h3>
            </div>
            <div class="skill-card">
                <img src="assets/php.svg" alt="PHP Logo" class="skill-icon">
                <h3>PHP</h3>
            </div>
            <div class="skill-card">
                <ion-icon name="logo-python" class="skill-icon"></ion-icon>
                <h3>Python</h3>
            </div>



        </div>
        </div>
    </section>


    <section id="projects">
        <h2>Mes projets</h2>
        <div class="projects-container">
            <div class="project-card">
                <div class="image-container">
                    <img src="assets/osmoz.png" alt="Osmoz">
                </div>
                <div class="project-info">
                    <h3>Osmoz</h3>
                    <p>Site officiel de l'association Osmoz</p>
                    <a href="https://osmoz.center/" class="project-link">Voir le projet</a>
                </div>
            </div>
            <div class="project-card">
                <div class="image-container">
                    <img src="assets/litsa.png" alt="Litsa et ses Loulous">
                </div>
                <div class="project-info">
                    <h3>Litsa et ses Loulous</h3>
                    <p>Site officiel de l'association Litsa et ses Loulous</p>
                    <a href="http://localhost/php/cinema/appphp/E-Shop/organization/index.php" class="project-link">Voir
                        le projet</a>
                </div>
            </div>
            <div class="project-card">
                <div class="image-container">
                    <img src="assets/spaceodyssey.png" alt="Space Odyssey">
                </div>
                <div class="project-info">
                    <h3>Space Odyssey</h3>
                    <p>Projet scolaire en groupe pour l'AP1 </p>
                    <a href="#" class="project-link">Voir le projet</a>
                </div>
            </div>
            <div class="project-card">
                <div class="image-container">
                    <img src="assets/freemeal.png" alt="E-shop">
                </div>
                <div class="project-info">
                    <h3>FreeMeal</h3>
                    <p>Projet scolaire avec le professeur</p>
                    <a href="" class="project-link">Voir le projet</a>
                </div>
            </div>
        </div>
    </section>



    <section id="vieille">
        <div class="container">
            <h2>Ma veille technologique</h2>
            <div class="content">
                <div class="left">
                    <img src="assets/vt1.png" alt="Image 1">
                </div>
                <div class="right">
                    <img src="assets/vt2.png" alt="Image 2">
                </div>
            </div>
        </div>
    </section>


    <section id="contact">
        <h1>Contactez-nous</h1>
        <form action="submit_form.php" method="post">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </section>

    <hr class="animated-hr">
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <p>&copy; 2024 Mon Portfolio. Tous droits réservés.</p>
                <ul class="footer-links">
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#privacy">Politique de confidentialité</a></li>
                    <li><a href="#terms">Conditions d'utilisation</a></li>
                </ul>
            </div>
            <div class="footer-socials">
                <a href="www.linkedin.com/in/milane-mehalebi" target="_blank" class="social-link">LinkedIn</a>
                <a href="https://github.com/Waayne78" target="_blank" class="social-link">GitHub</a>
            </div>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="script.js"></script>
</body>

</html>