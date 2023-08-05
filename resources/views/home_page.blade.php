<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/e674bba739.js" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
  </head>
  <body>
    <div id="header">
        <div class="container">
            <nav>
                <h1 class="fw-bold text-dark">My Profile</h1>
                <ul>
                    <li><a href="#header" class="text-dark fw-semibold">Home</a></li>
                    <li><a href="#about" class="text-dark fw-semibold">About</a></li>
                    <li><a href="#portfolio" class="text-dark fw-semibold">Portfolio</a></li>
                    <li><a href="#contact" class="text-dark fw-semibold">Contact</a></li>
                    <i class="fas fa-times text-dark"></i>
                </ul>
                <i class="fas fa-bars text-dark"></i>
            </nav>
            <div class="header-text text-end">
                <p>Information Systems Student</p>
                <h1>Hi, I'm <span>Aceng</span><br>From Indonesia</h1>
            </div>
        </div>
    </div>
    <!-- ----------ABOUT---------- -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="/image/user_grey.png" class="img-fluid col-2 rounded">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>I am a final student at Widya Dharma University Pontianak majoring in Information Systems. In addition, I am able to work in a team, dare to accept and learn new things which develop my skills, and able to adapt anywhere and anytime. I am passionate about software engineer and systems analysis.</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="openTab('skills')">Skills</p>
                        <p class="tab-links" onclick="openTab('experience')">Experience</p>
                        <p class="tab-links" onclick="openTab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li>
                                <span>Familiar With</span>
                                <br>
                                <ul>
                                    <li>Object Oriented Programming (OOP)</li>
                                    <li>Model View Controller (MVC)</li>
                                    <li>Aplication Programming Interface (API)</li>
                                </ul>
                            </li>
                            <li>
                                <span>Tech Skills</span>
                                <br>
                                <ul>
                                    <li>Java Spring Boot (learning)</li>
                                    <li>Framework Laravel</li>
                                    <li>Bootstrap</li>
                                    <li>MySQL</li>
                                    <li>CSS</li>
                                    <li>Javascript</li>
                                    <li>PHP</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li class="fw-semibold">
                                <span>2019 - 2021</span>
                                <ul>
                                    <li>Marketing Executive</li>
                                    <li><span>Description :</span></li>
                                    <li>As a Marketing Executive, I am responsible for:
                                        <br>
                                        1. Doing product promotion
                                        <br>
                                        2. Doing Canvasing
                                        <br>
                                        3. Make sales reports
                                        <br>
                                        4. Establish relationships with customers
                                        <br>
                                        5. Negotiating with customers
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li>
                                <span>2019 - Current</span>
                                <br>
                                University Widya Dharma Pontianak (Waiting for graduation)
                                <br>
                                Grade : 3.74 / 4.00
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------PORTFOLIO--------- -->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Projects</h1>
            <div class="work-list">
                <div class="work">
                    <img src="/image/logo.png" alt="">
                    <div class="layer">
                        <h2>Rental Marketplace</h2>
                        <p>Applications that can make vehicle rentals effectively and efficiently. This application had e-payment and e-wallet</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-2.png" alt="">
                    <div class="layer">
                        <h2>Music App</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quam facere quibusdam
                            deserunt dolore vero. Incidunt ea nihil sint. Velit.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-3.png" alt="">
                    <div class="layer">
                        <h2>Online Shopping App</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quam facere quibusdam
                            deserunt dolore vero. Incidunt ea nihil sint. Velit.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
            <a href="" class="btn">See more</a>
        </div>
    </div>

    <!-- ----------CONTACT---------- -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fas fa-paper-plane"></i> acengtjhin69@gmail.com</p>
                    <p><i class="fas fa-phone-square-alt"></i> +62 812-5662-2930</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/kim.ceng.940"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/acengtjhin/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/aceng-59402a17a/"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <a href="/cv/resume.pdf" download class="btn btn2">Download Resume</a>
                </div>
                <div class="contact-right">
                    <form>
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn3">submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>copyright @ 2023. Made with <i class="fas fa-heart"></i> by Aceng</p>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>