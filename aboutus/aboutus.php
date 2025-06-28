<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterMind</title>

    <!-- Adding font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Adding custom css file  -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Adding custom js file  -->
    <script src="../js/script.js" defer></script>

</head>
<body>
    <?php 
        if(isset($_GET["err"])){
            if($_GET["err"] === "empty_inputs"){
                echo '<script>alert("Please enter your email first.")</script>';
            }
            else if($_GET["err"] === "email_already_exists"){
                echo '<script>alert("This email already exists, please enter another email.")</script>';
            }
            else if($_GET["err"] === "subscribed_to_newsletter"){
                echo '<script>alert("Thank you for subscribing to our newsletter! You have been added to our list and will hear from us soon.")</script>';
            }
        }
    ?>
    
<!-- Starting header section -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fa fa-blind"></i>MasterMind </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="../#home">Home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="../#learnings">Learnings</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="../#challenges">Challenges</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="../#help">Help Pages</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="../#blogs">Blogs</a>
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="#home">About Us</a>
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="../level1x324/level1.php" class="btn">Start CTF</a>

</header>


<!-- Starting home section -->

<section class="home" id="home">

<div class="content">
    <span data-aos="fade-up" data-aos-delay="150">About Us</span>
    <h3 data-aos="fade-up" data-aos-delay="300">Empowering Future Cyber Defenders</h3>
    <p data-aos="fade-up" data-aos-delay="450">We're a passionate global team dedicated to making hands-on cybersecurity training fun, accessible, and impactful — so that anyone, anywhere, can gain real skills and contribute to a safer digital world.</p>
    <a data-aos="fade-up" data-aos-delay="600" href="../level1x324/level1.php" class="btn">Start CTF</a>
</div>

</section>


<!-- Starting about section -->

<section class="about" id="about">

<div class="content" data-aos="fade-left" data-aos-delay="600">
    <span>Who We Are</span>
    <h3>Learning by Doing</h3>
    <p>MasterMind is a locally hosted web application designed for aspiring ethical hackers to explore and understand real-world web vulnerabilities. Built for offline use, it offers an interactive, hands-on experience where beginners can learn by solving practical challenges in a secure environment. No community, no noise — just you, your browser, and a growing skillset.</p>
</div>

</section>


<!-- Starting services section -->

<section class="services" id="services">

<div class="box-container">

    <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
        <i class="fa fa-users"></i>
        <h3>Approachable Learning</h3>
        <p>Designed with beginners in mind, MasterMind makes learning web security accessible, structured, and rewarding—no prior experience needed.</p>
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
        <i class="fa fa-trophy"></i>
        <h3>Gamified Experience</h3>
        <p>Practice ethical hacking through interactive, challenge-based tasks that turn serious skills into a fun and engaging experience.</p>
    </div>

    <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
        <i class="fa fa-file"></i>
        <h3>Focused Content</h3>
        <p>Explore realistic vulnerabilities and scenarios built to reflect real-world issues—carefully crafted for both learning and practical skill-building.</p>
    </div>

</div>

</section>

<!-- services section ended -->


<section class="about" id="about">

    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>Our Mission</span>
        <h3>Empowering Learning Through Ethical Hacking</h3>
        <p>Our mission is to make web application security education accessible, engaging, and impactful. We believe that cybersecurity knowledge should be available to everyone—without limitations. By combining hands-on practice with gamified challenges, MasterMind helps learners understand the real-world importance of cybersecurity while building practical skills. Our goal is to foster curiosity, raise awareness, and inspire the next generation of ethical hackers in a safe and meaningful way.</p>
    </div>

</section>


<!-- Starting blogs section -->

<section class="blogs" id="blogs">

<div class="box-container">

    <div class="box" data-aos="fade-up" data-aos-delay="150">
        <div class="image">
            <img src="images/asd.png" alt="">
        </div>
        <div class="content">
            <a href="#blog" class="link">For Beginners</a>
            <p>Just getting started in web security? MasterMind is built for you. Learn the basics of common vulnerabilities through simple, practical challenges — no prior experience needed.</p>
        </div>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="300">
        <div class="image">
            <img src="images/forbusinesses.jpg" alt="">
        </div>
        <div class="content">
            <a href="#blog" class="link">For Self-Learners</a>
            <p>Perfect for independent learners and hobbyists looking to build a strong foundation in web application security through guided, hands-on exercises.</p>
        </div>
    </div>

    <div class="box" data-aos="fade-up" data-aos-delay="450">
        <div class="image">
            <img src="images/foruniversities.png" alt="">
        </div>
        <div class="content">
            <a href="#blog" class="link">For Educators</a>
            <p>An ideal teaching tool for instructors looking to introduce cybersecurity concepts in classrooms or workshops through an engaging and approachable format.</p>
        </div>
    </div>

</div>

</section>

<!-- blogs section ended -->


<section class="about" id="about">

    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>What Are These Challenges and Who Can Play MasterMind?</span>
        <h3>The Fun and Effective Way to Learn Cybersecurity</h3>
        <p>MasterMind is designed primarily for beginners eager to explore the world of Web Application security. It offers a unique, interactive cybersecurity experience where players solve a variety of web-based challenges by exploiting vulnerabilities, decrypting data, reverse engineering, and applying critical thinking. These challenges provide a safe, legal environment to practice real hacking techniques and build valuable skills — all while having fun and learning at your own pace.</p>
    </div>

</section>


<!-- Starting gallery section -->

<section class="gallery" id="gallery">

    <div class="heading">
        <span>Our Partners</span>
        <h1>Those who help us grow</h1>
    </div>
    
    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/partner1.jpg" alt="">
            <span>Leading institute for cybersecurity education in Sri Lanka</span>
            <h3>CICRA Campus</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/partner7.jpg" alt="">
            <span>Free, high-quality educational resources for aspiring hackers</span>
            <h3>Hacker101</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/partner5.jpg" alt="">
            <span>Interactive courses for hands-on learning in cybersecurity</span>
            <h3>TryHackMe</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/partner3.png" alt="">
            <span>A platform to sharpen your ethical hacking skills with real challenges</span>
            <h3>Hack the Box</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/partner8.png" alt="">
            <span>A beginner-friendly online hacking game to develop cybersecurity skills</span>
            <h3>PicoCTF</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/partner4.jpeg" alt="">
            <span>A deliberately vulnerable web app for practicing penetration testing</span>
            <h3>Damn Vulnerable Web Application</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/partner2.jpg" alt="">
            <span>A university committed to advancing cybersecurity education</span>
            <h3>Wrexham Glyndwr University</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/partner6.png" alt="">
            <span>Providing a vast collection of vulnerable machines for penetration testing</span>
            <h3>VulnHub</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/partner9.JPG" alt="">
            <span>Over 100 vulnerable virtual machines to practice hacking and learn</span>
            <h3>HackMyVM</h3>
        </div>

    </div>

</section>

<!-- Starting banner section -->

<div class="banner">

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>Begin Your Cybersecurity Journey</span>
        <h3>Unlock the Secrets of Web Security</h3>
        <p>Jump into hands-on challenges designed to build your skills, deepen your knowledge, and prepare you for a successful career in web application security</p>
        <a href="../level1x324/level1.php" class="btn">Start CTF</a>
    </div>

</div>


<!-- Starting footer section -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> <i class="fa fa-blind"></i>MasterMind </a>
            <p>A Massive Hacking Playground</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>quick links</h3>
            <a href="../#home" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="../#learnings" class="links"> <i class="fas fa-arrow-right"></i> Learnings </a>
            <a href="../#challenges" class="links"> <i class="fas fa-arrow-right"></i> Challenges </a>
            <a href="../#help" class="links"> <i class="fas fa-arrow-right"></i> Help Pages </a>
            <a href="../#blogs" class="links"> <i class="fas fa-arrow-right"></i> Blogs </a>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> About Us </a>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>contact info</h3>
            <p> <i class="fas fa-map"></i> Colombo, Sri Lanka </p>
            <p> <i class="fas fa-phone"></i> +94-77432-8795 </p>
            <p> <i class="fas fa-envelope"></i> MasterMind@gmail.com </p>
            <p> <i class="fas fa-clock"></i> 8:00am - 6:00pm </p>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="aboutusNewsletter.php" method="POST">
                <input type="email" name="email" placeholder="Enter your email" class="email">
                <input type="submit" name="btnSubmit" value="subscribe" class="btn">
            </form>
        </div>

    </div>

</section>

<div class="credit">created by <span>MasterMind</span> | all rights reserved!</div>

<!-- footer section ended -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

</body>
</html>

