<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Portfolio</title>
    <link rel="stylesheet" href="/views/css/style.css" />
    <link rel="stylesheet" href="media.css" />
</head>

<body>
<nav id="desktop-nav">
    <div class="logo">Mohammed Konti</div>
    <div>
        <ul class="nav-links">
            <li><a href="/home">Home</a></li>
            <li><a href=#portfolio>Portfolio</a></li>
            <li><a href="#about">Over Mij</a></li>
            <li><a href=#contact>Contact</a></li>
            <li><a href=#vaardigheden>Vaardigheden</a></li>
        </ul>
    </div>
</nav>
<nav id="hamburger-nav">
    <div class="logo">Mohammed Konti</div>
    <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu-links">
            <li><a href="/home" onclick="toggleMenu()">Home</a></li>
            <li><a href=#portfolio onclick="toggleMenu()">Portfolio</a></li>
            <li><a href=#about onclick="toggleMenu()">Over mij</a></li>
            <li><a href=#contact onclick="toggleMenu()">Contact</a></li>
            <li><a href=#vaardigheden onclick="toggleMenu()">Vaardigheden</a></li>
        </div>
    </div>
</nav>
<section id="profile">
    <div class="section_pic container">
        <img src="/views/images/unnown-modified.png" alt="Mohammed Konti profile picture" />




    </div>

    <div class="section__text">
        <p class="section__text__p1">Hello i'm</p>
        <h1 class="title">Mohammed</h1>
        <p class="section__text__p2">Software Developer</p>
        <div class="btn-container">
            <button
                    class="btn btn-color-2"
                    onclick="window.open('./assets/cv mo.docx.pdf')">
                Download Cv
            </button>
            <button class="btn btn-color-1" onclick="location.href='./#contact'">
                Contact Info
            </button>

        </div>
        <div id="socials-container">
            <img src="./assets/teams.jpg" alt="My Teams Profile"
                 class="icon"
                 onclick="location.href='https://teams.microsoft.com/v2/'"
            />
            <img src="./assets/github.jpg" alt="My Github Profile"
                 class="icon"
                 onclick="location.href='https://github.com/MohammedKonti'"
            />
        </div>
    </div>
</section>
<section id="about">
    <p class="section__text__p1">More Info</p>
    <h1 class="title">Over Mij</h1>
    <div class="section-container">
        <div class="section_pic-container">
        <img src="./images/mama.jpeg" alt="Profile picture" class="about-pic" />
    </div>

    <div class="about-details-container">
        <div class="about-containers">
            <div class="details-container">
                <img src="./images/medal.png" alt="experience icon" class="icon" />
                <h3>Experience</h3>
                <p>3months<br />Software developer</p>
            </div>
            <div class="details-container">
                <img src="./images/education.png" alt="Education icon" class="icon" />
                <h3>Education</h3>
                <p>Havo diploma<br />(current study)AD software development </p>
            </div>
        </div>
        <div class="text-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
            </p>
        </div>
    </div>
    </div>
    <img src="./images/arrow.png"
         alt="Arrow icon"
          class="icon arrow"
    onclick="location.href='./#vaardigheden'">
</section>
<section id="vaardigheden">
    <p class="section__text__p1">Explore My</p>
    <h1 class="title">Vaardigheden</h1>
    <div class="vaardigeheden-details-container">
        <!-- Frontend Development Section -->
        <div class="details-container">
            <h2 class="vaardigheden-sub-title">Frontend Development</h2>
            <div class="article-container">
                <div class="skills-container">
                    <div class="skill">
                        <label>HTML - Gemiddeld</label>
                        <div class="progress-bar" style="--width: 60%;"></div>
                    </div>
                    <div class="skill">
                        <label>CSS - Gemiddeld</label>
                        <div class="progress-bar" style="--width: 50%;"></div>
                    </div>
                    <div class="skill">
                        <label>JavaScript - Beginner</label>
                        <div class="progress-bar" style="--width: 30%;"></div>
                    </div>
                    <div class="skill">
                        <label>Type script - Beginner</label>
                        <div class="progress-bar" style="--width: 10%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Backend Development Section -->
        <div class="details-container">
            <h2 class="vaardigheden-sub-title">Backend Development</h2>
            <div class="article-container">
                <div class="skills-container">
                    <div class="skill">
                        <label>Git - Beginner</label>
                        <div class="progress-bar" style="--width: 30%;"></div>
                    </div>
                    <div class="skill">
                        <label>MySQL - Beginner</label>
                        <div class="progress-bar" style="--width: 25%;"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section id="projects"></section>-->
<!--<p class="section__text__p1">Browse My Recent</p>-->
<!--<h1 class="title">Projects</h1>-->
<!--<div class="vaardigeheden-details-container">-->
<!--    <div class="details-container color-container">-->
<!--        <div class="article-container">-->
<!--            <img src="" alt="Project 1" class="Project-img"/>-->
<!--        </div>-->
<!--        <h2 class="vaardigheden-sub-title project-title">Project One</h2>-->
<!--        <div class="btn-container">-->
<!--            <button-->
<!--         class="btn-color-2 Project-btn" ONCLICK="location.href='https://github.com'">Github-->
<!--                </button>-->
<!--            <img src="" alt="Project 1" class="Project-img"/>-->
<!--        </div>-->
<!--        <h2 class="vaardigheden-sub-title project-title">Project One</h2>-->
<!--        <div class="btn-container">-->
<!--            <button-->
<!--                    class="btn-color-2 Project-btn" ONCLICK="location.href='https://github.com'">Github-->
<!--            </button>-->
<!--            <img src="" alt="Project 1" class="Project-img"/>-->
<!--        </div>-->
<!--        <h2 class="vaardigheden-sub-title project-title">Project One</h2>-->
<!--        <div class="btn-container">-->
<!--            <button-->
<!--                    class="btn-color-2 Project-btn" ONCLICK="location.href='https://github.com'">Github-->
<!--            </button>-->
<!---->
<!---->
<!--            <button-->
<!--                    class="btn-color-2 Project-btn" ONCLICK="location.href='https://github.com'">Live Demo-->
<!--            </button>-->
<!--    </div>-->
<!--</div>-->
<section id="portfolio">
    <img src="./images/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='#projects'" />
    <p class="section__text__p1">Browse My Recent</p>
    <h1 class="title">Portfolio</h1>

    <div class="vaardigeheden-details-container">
        <!-- Project 1 -->
        <div class="details-container">
            <div class="article-container">
                <img src="./images/pro.avif" alt="Project 1" class="Project-img"/>
            </div>
            <h2 class="vaardigheden-sub-title project-title">Professional Skills</h2>
            <p class="project-description">A description of Project One goes here, highlighting features and technologies used.</p>
            <div class="btn-container">
                <button class="btn-color-2 Project-btn" onclick="location.href='https://github.com/project1'">GitHub</button>
                <button class="btn-color-2 Project-btn" onclick="location.href='https://project1-demo.com'">Live Demo</button>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="details-container">
            <div class="article-container">
                <img src="./images/pro.avif" alt="Project 2" class="Project-img"/>
            </div>
            <h2 class="vaardigheden-sub-title project-title">Project Two</h2>
            <p class="project-description">A description of Project Two goes here, highlighting features and technologies used.</p>
            <div class="btn-container">
                <button class="btn-color-2 Project-btn" onclick="location.href='https://github.com/project2'">GitHub</button>
                <button class="btn-color-2 Project-btn" onclick="location.href='https://project2-demo.com'">Live Demo</button>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="details-container">
            <div class="article-container">
                <img src="./images/pro.avif" alt="Project 3" class="Project-img"/>
            </div>
            <h2 class="vaardigheden-sub-title project-title">Project Three</h2>
            <p class="project-description">A description of Project Three goes here, highlighting features and technologies used.</p>
            <div class="btn-container">
                <button class="btn-color-2 Project-btn" onclick="location.href='https://github.com/project3'">GitHub</button>
                <button class="btn-color-2 Project-btn" onclick="location.href='https://project3-demo.com'">Live Demo</button>
            </div>
        </div>
    </div>
</section>

<!--<section id="contact">-->
<!--    <p class="section__text__p1">Neem Contact Op</p>-->
<!--    <h1 class="title">Contactinformatie</h1>-->
<!--    <div class="contact-container">-->
<!--        <div class="contact-details">-->
<!--            <h2>Mijn Gegevens</h2>-->
<!--            <p><strong>Adres:</strong> Minnellistraat 68, Almere</p>-->
<!--            <p><strong>Telefoon:</strong> 0684445111</p>-->
<!--            <p><strong>E-mail:</strong> <a href="mailto:your-email@example.com">your-email@example.com</a></p>-->
<!--        </div>-->
<!--        <div class="contact-form">-->
<!--            <h2>Stuur een Bericht</h2>-->
<!--            <form>-->
<!--                <label for="name">Naam:</label>-->
<!--                <input type="text" id="name" name="name" required>-->
<!---->
<!--                <label for="email">E-mail:</label>-->
<!--                <input type="email" id="email" name="email" required>-->
<!---->
<!--                <label for="message">Bericht:</label>-->
<!--                <textarea id="message" name="message" rows="5" required></textarea>-->
<!---->
<!--                <button type="submit" class="btn btn-color-1">Verstuur</button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section id="contact">
    <h1 class="title">Contact Mij</h1>
    <div class="contact-container">
        <!-- Mail Mij Box -->
        <div class="contact-box">
            <img src="./images/email.png" alt="Email Icon" class="contact-icon" />
            <h2>Mail Mij</h2>
            <p> <a href="mailto:s1219122@student.windesheim.nl">s1219122@student.windesheim.nl</a></p>
            <button class="btn btn-color-2" onclick="location.href='mailto:your-email@example.com'">Email Mij</button>
        </div>

        <!-- Bel Mij Box -->
        <div class="contact-box">
            <img src="./images/telefoon.png" alt="Phone Icon" class="contact-icon" />
            <h2>Bel Mij</h2>
            <p>Telefoon:<a href="tel:0684445111">06 844 435 111</a></p>
            <button class="btn btn-color-2" onclick="location.href='tel:06844435111'">Bel Mij</button>
        </div>

        <!-- Bezoek Mij op Afspraak Box -->
        <div class="contact-box">
            <img src="./images/location.png" alt="Location Icon" class="contact-icon" />
            <h2>Bezoek Mij</h2>
            <p>Minnellistraat 68</p>
            <button class="btn btn-color-2" onclick="location.href='https://www.google.com/maps/search/?api=1&query=Minnellistraat+68,+Almere'">Bekijk Kaart</button>
        </div>
    </div>

    <!-- Message Box -->
    <div class="message-box">
        <h2>Bericht Mij</h2>
        <textarea placeholder="Schrijf hier uw bericht..." rows="5"></textarea>
        <button class="btn btn-color-1">Verzend Bericht</button>
    </div>
</section>
<footer id="footer">
    <div class="footer-container">
        <div class="footer-logo">Mohammed Konti</div>

        <ul class="footer-links">
            <li><a href="index.view.php">Home</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#about">Over Mij</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#vaardigheden">Vaardigheden</a></li>
        </ul>

        <div class="footer-socials">
            <a href="https://teams.microsoft.com/v2/" target="_blank">
                <img src="./assets/teams.jpg" alt="Teams" class="icon">
            </a>
            <a href="https://github.com/MohammedKonti" target="_blank">
                <img src="./assets/github.jpg" alt="Github" class="icon">
            </a>
        </div>

        <p class="footer-copyright">&copy; 2024 Mohammed Konti. All rights reserved.</p>
    </div>
</footer>





<script src="myscript.js"></script>
</body>
</html>


