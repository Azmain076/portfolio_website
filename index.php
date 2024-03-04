<?php

include "config.php";

$sql = "SELECT * FROM about";

 $result = $conn->query($sql);
session_start();

if(isset($_SESSION['loggedin'])){
    $name = "Edit";
    $link = "update-form.php";
}
else{
    $name = "login";
    $link = "login.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5edb1c1b47.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <title>Portfolio | Azmain</title>
</head>

<body>
    <!-- --------------- navbar ------------------ -->
    <nav id="dekstop-nav">
        <div class="logo">
            <a href="index.html">AZMAIN MUBASSIR</a>
        </div>

        <!-- toggle menu -->
        <div class="toggle-btn" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <a href="<?php echo $link;?>"><button><?php echo $name;?></button></a>
    </nav>

    <!-- -------------- hero-section ---------------  -->
    <div id="profile">
        <div class="profile-pic">
            <img src="images/profile-pic.jpg" alt="photo-mahfuz">
        </div>
        <div class="profile-intro">
            <p class="p1">Hello, I'm</p>
            <h1>Azmain Mubassir</h1>
            <p class="p2">Student, CSE Undergrad</p>

            <!-- <div class="buttons">
                <button class="btn" onclick="window.open('images/resume.pdf')">Download CV</button>
                <button class="btn" onclick="location.href='./#contact'">Contact Me</button>
            </div> -->

            <ul class="socials">
                <li><a target="_blank" href="https://www.facebook.com/azmain.mubassir.1"><i class="fab fa-facebook"></i></a>
                </li>
                <li><a target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </li>
                <li><a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a target="_blank" href="https://bd.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                </li>
                <li><a target="_blank" href="https://github.com/Azmain076"><i class="fab fa-github"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- ------------ aboutme ----------------  -->
    <div id="about" class="section">
        <div class="section-header">
            <p>Get To Know More</p>
            <h1>About Me</h1>
        </div>
        <div class="about-area">
            <img src="images/2nd-pic.jpg" alt="">
            <div class="about-text">
                <h2>Who Am I?</h2>
                <?php
                if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {

?>
                <p><?php echo $row['data'];?></p>
                <?php       
                }
             }

                                ?>
            </div>
        </div>
    </div>

    <!-- ------------ education ----------------  -->
    <div id="education" class="section">
        <div class="section-header">
            <p>Journey of My</p>
            <h1>Education</h1>
        </div><br>
        <div class="education-card">
            <img src="images/logo_kuet.png" alt="kuet-logo">
            <div class="edu-text">
                <h3>Khulna University of Engineering & Technology</h3>
                <p>BSc in Computer Science and Engineering (BSCCSE)</p>
                <p>2020 - Present</p>
            </div>
        </div>
        <div class="education-card">
            <img src="images/logo_bnmpc.png" alt="bnmpc-logo">
            <div class="edu-text">
                <h3>BIRSHRESHTHA NOOR MOHAMMAD PUBLIC COLLEGE</h3>
                <p>HSC, Science</p>
                <p>2018 - 2020</p>
            </div>
        </div>
        <div class="education-card">
            <img src="images/logo_mgbhs.jpeg" alt="mgbhs-logo">
            <div class="edu-text">
                <h3>Motijheel Govt. Boys' School</h3>
                <p>SSC, Science</p>
                <p>2015 - 2018</p>
            </div>
        </div>
        <div class="education-card">
            <img src="images/logo_willes.jpeg" alt="willes-logo">
            <div class="edu-text">
                <h3>Willes Little Flower School & College</h3>
                <p>SSC, Science</p>
                <p>2010 - 2015</p>
            </div>
        </div>
    </div>

    <!-- ------------ skils ----------------  -->
    <div id="skills" class="section">
        <div class="section-header"><br><br>
            <p>Explore My</p>
            <h1>Skills</h1>
        </div>
        <ul class="skill-icons">
            <li><img src="images/c.png" alt="c"></li>
            <li><img src="images/cpp.png" alt="cpp"></li>
            <li><i class="fa-brands fa-java"></i></li>
        </ul><br>
        <ul class="skill-icons">
            <li><i class="fa-brands fa-html5"></i></li>
            <li><i class="fa-brands fa-css3-alt"></i></li>
            <li><i class="fa-brands fa-js"></i></li>
        </ul><br>
        <ul class="skill-icons">
            <li><i class="fa-brands fa-python"></i></li>
            <li><img src="images/mysql.png" alt="mysql"></li>
            <li><img src="images/php.png" alt="php"></li>
        </ul>
    </div>

    <!-- ------------ projects ----------------  -->
    <div id="projects" class="section">
        <div class="section-header">
            <p>Browse My</p>
            <h1>Projects & Enterprise</h1>
        </div>

        <div class="projects-container">
            <div class="project-card">
                <img src="images/logo_sugar.jpg" alt="project-card" >
                <h2>Sugar Breeze is Premium perfume oils</h2>
                <h2>made with natural incredients and</h2>
                <h2>long-lastnig frangnence.</h2>
                <a href=https://www.facebook.com/sugarbreezebd target="_blank">
                    <button class="btn">Visit Page</button>
                </a>
            </div>
            <div class="project-card">
                <img src="images/hishab_jontro.png" alt="project-card">
                <h2>Hishab Jontro</h2>
                <ul>
                    <li>Java</li>
                    <li>FXML</li>
                    <li>SceneBuilder</li>
                </ul>
                <a href=https://github.com/Azmain076/hisab-jontro.git target="_blank">
                    <button class="btn">Source Code</button>
                </a>
            </div>
            <div class="project-card">
                <img src="images/logo_screenshot.png" alt="project-card">
                <h2>Portfolio Website</h2>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                </ul>
                <a href="https://github.com/almahfuz777/portfolio-website" target="_blank">
                    <button class="btn">Source Code</button>
                </a>
            </div>
        </div>

    </div>


    <!-- ------------ contact ----------------  -->
    <div id="contact" class="section">
        <div class="section-header">
            <p>Get In Touch</p>
            <h1>Contact Me</h1>
        </div>
        <div class="contact-container">
            <a target="_blank" href="mailto: azmainm2017@gmail.com"><i class="fa-regular fa-envelope"></i>
                azmainm2017@gmail.com@gmail.com</a>
        </div>
    </div>

    <!------------Footer section ------------>
    <footer>
        <p>&copy; 2024 Azmain Mubassir </p>
        <p>All Rights Reserved</p>
    </footer>

    <!-- --------- back to top -------------- -->
    <button id="backToTop" onclick="backToTop()">&uarr;</button>

    
    <script src="script.js"></script>
</body>

</html>
