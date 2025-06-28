<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterMind</title>

    <!-- Adding font awesome cdn   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Adding custom css file  -->
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Adding custom js file  -->
    <script src="js/script.js" defer></script>

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
    
<!-- Starting header section  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fa fa-blind"></i>MasterMind </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">Home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#learnings">Learnings</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#challenges">Challenges</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#help">Help Pages</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="#blogs">Blogs</a>
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="#about">About Us</a>
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="level1x324/level1.php" class="btn">Start CTF</a>

</header>


<!-- Starting home section  -->

<section class="home" id="home">

    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">A Massive Hacking Playground</span>
        <h3 data-aos="fade-up" data-aos-delay="300">Are you a hacker? Challenge yourself!</h3>
        <p data-aos="fade-up" data-aos-delay="450">No experience? No problem. MasterMind is your interactive playground to explore the world of web hacking — learn by doing, one level at a time.</p>
        <a data-aos="fade-up" data-aos-delay="600" href="level1x324/level1.php" class="btn">Start CTF</a>
    </div>

</section>


<!-- Starting about section  -->

<section class="about" id="about">

    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="images/about-vid-1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-2.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-3.mp4"></span>
        </div>
    </div>

    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>About Us</span>
        <h3>Who we are</h3>
        <p>MasterMind is an interactive learning platform designed to teach web application security through hands-on, gamified challenges. We provide a safe, browser-based environment where beginners and aspiring cybersecurity professionals can practice real-world attack techniques — ethically and legally. Whether you're an individual learner, educator, or part of an organization, MasterMind helps you build both offensive and defensive web security skills in a structured, engaging, and accessible way.</p>
        <a href="./aboutus/aboutus.php" class="btn">Read more</a>
    </div>

</section>


<!-- Starting learnings section -->

<section class="learnings" id="learnings">

    <div class="heading">
        <span>Learnings</span>
        <h1>What You’ll Learn</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fa fa-network-wired"></i>
            <h3>Analyze Web Traffic</h3>
            <p>Learn how to intercept, inspect, and manipulate HTTP requests and responses using tools like Burp Suite.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <i class="fa fa-bug"></i>
            <h3>Identify Vulnerabilities</h3>
            <p>Discover common web vulnerabilities such as XSS, SQL Injection, and insecure file uploads through hands-on practice.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <i class="fa fa-code"></i>
            <h3>Understand Source Code Flaws</h3>
            <p>Develop the ability to spot insecure coding patterns and logic errors in web applications.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <i class="fa fa-folder-open"></i>
            <h3>Discover Hidden Files</h3>
            <p>Use directory brute-forcing and enumeration techniques to uncover sensitive or hidden resources on a web server.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
            <i class="fa fa-lock"></i>
            <h3>Break Weak Encryption</h3>
            <p>Understand how weak cryptographic practices can be exploited and how to decode simple encrypted data.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
            <i class="fa fa-cogs"></i>
            <h3>Set Up Testing Tools</h3>
            <p>Configure proxies and browsers to create a professional penetration testing environment for analyzing web apps.</p>
        </div>

    </div>

</section>


<!-- Starting challenges section -->

<section class="challenges" id="challenges">

    <div class="heading">
        <span>Challenges</span>
        <h1>Hands-On Web Security Challenges You'll Face</h1>
    </div>
    
    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/a9.png" alt="">
            <span>Learn how exposed data in code, headers, or comments can lead to serious breaches.</span>
            <h3>Information Disclosure</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/a25.png" alt="">
            <span>Explore how simple encryption like Caesar Cipher can be easily broken and why it's insecure.</span>
            <h3>Caesar Cipher Attack</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/a43.jpg" alt="">
            <span>Inject scripts into vulnerable pages and understand how XSS impacts users and data.</span>
            <h3>Cross-Site Scripting (XSS)</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/a15.jpg" alt="">
            <span>Decrypt AES-encrypted data when weak keys and encoding techniques are used improperly.</span>
            <h3>Weak AES Encryption</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/a3.png" alt="">
            <span>Manipulate database queries through input fields and retrieve unauthorized information.</span>
            <h3>SQL Injection</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/a11.png" alt="">
            <span>Exploit insecure file uploads or paths to include and execute unauthorized files.</span>
            <h3>File Inclusion</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/a7.jpg" alt="">
            <span>Use wordlists to guess weak passwords and gain access to protected systems.</span>
            <h3>Dictionary Attack</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/a21.jpg" alt="">
            <span>Traverse through directories to access hidden files outside the intended web path.</span>
            <h3>Directory Traversal</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/a4.png" alt="">
            <span>Try all possible combinations to break into systems with weak or common credentials.</span>
            <h3>Brute Force Attack</h3>
        </div>

    </div>

</section>


<!-- Starting help section -->

<section class="help" id="help">

    <div class="heading">
        <span>Help Pages</span>
        <h1>Learn While Playing</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/b7.png" alt="">
            </div>
            <div class="content">
                <h3>Information Leakage</h3>
                <a href="./helpPages/InformationLeakage/index.php">Read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/2.png" alt="">
            </div>
            <div class="content">
                <h3>Directory Traversal</h3>
                <a href="./helpPages/DirectoryTraversal/index.php">Read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/m8.png" alt="">
            </div>
            <div class="content">
                <h3>Dictionary Attack</h3>
                <a href="./helpPages/DictionaryAttack/index.php">Read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="images/m4.png" alt="">
            </div>
            <div class="content">
                <h3>Caesar Cipher Encryption</h3>
                <a href="./helpPages/CaesarCipher/index.php">Read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="750">
            <div class="image">
                <img src="images/m5.png" alt="">
            </div>
            <div class="content">
                <h3>Brute Force Attack</h3>
                <a href="./helpPages/BruteForceAttack/index.php">Read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="900">
            <div class="image">
                <img src="images/m6.png" alt="">
            </div>
            <div class="content">
                <h3>File Upload Vulnerability</h3>
                <a href="./helpPages/FileUpload/index.php">Read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="images/b6.png" alt="">
            </div>
            <div class="content">
                <h3>AES Encryption</h3>
                <a href="./helpPages/AESEncryption/index.php">Read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="images/m2.png" alt="">
            </div>
            <div class="content">
                <h3>SQL Injection Attack</h3>
                <a href="./helpPages/SQLInjection/index.php">Read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="images/b4.png" alt="">
            </div>
            <div class="content">
                <h3>Cross-site Scripting </h3>
                <a href="./helpPages/CrossSiteScriptingAttack/index.php">Read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

    </div>

</section>

<!-- Starting review section -->

<section class="review">

    <div class="content" data-aos="fade-right" data-aos-delay="300">
        <span>Testimonials</span>
        <h3>What Our Players Are Saying</h3>
        <p>MasterMind brings together a welcoming community where beginners can learn, practice, and grow their web security skills in a fun and supportive environment.</p>
    </div>

    <div class="box-container" data-aos="fade-left" data-aos-delay="600">

        <div class="box">
            <p>MasterMind helped me understand web vulnerabilities step-by-step. I feel much more confident now exploring web security!</p>
            <div class="user">
                <img src="images/pic-1.png" alt="">
                <div class="info">
                    <h3>Harry Carter</h3>
                    <span>Cybersecurity Student</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>This platform made learning web app hacking approachable and fun. The challenges really push you to think like a hacker.</p>
            <div class="user">
                <img src="images/pic-2.png" alt="">
                <div class="info">
                    <h3>Elia Navy</h3>
                    <span>Beginner Learner</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>I love how MasterMind breaks down complex concepts into simple steps. It’s perfect for anyone just starting out in cybersecurity.</p>
            <div class="user">
                <img src="images/pic-3.png" alt="">
                <div class="info">
                    <h3>David Felix</h3>
                    <span>Aspiring Hacker</span>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Great place to practice real hacking skills safely. The progressive levels keep me motivated to keep learning every day.</p>
            <div class="user">
                <img src="images/pic-4.png" alt="">
                <div class="info">
                    <h3>Vida Wrenley</h3>
                    <span>Security Enthusiast</span>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- Starting blogs section -->

<section class="blogs" id="blogs">

    <div class="heading">
        <span>Blogs & Posts</span>
        <h1>Explore Critical Web Security Weaknesses</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/4.png" alt="">
            </div>
            <div class="content">
                <a href="https://brightsec.com/blog/file-inclusion-vulnerabilities/" class="link">File Inclusion Vulnerabilities: W...</a>
                <p>File Inclusion vulnerabilities often affect web applications that rely on a scripting run ti...</p>
                <div class="icon">
                    <a href="#blog"><i class="fas fa-clock"></i> 22nd June, 2021</a>
                    <a href="#blog"><i class="fas fa-user"></i> by Dizdar</a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/m7.png" alt="">
            </div>
            <div class="content">
                <a href="https://www.invicti.com/blog/web-security/understanding-cookie-poisoning-attacks/" class="link">Understanding Cookie Poisoni...</a>
                <p>Cookie poisoning is a general term for various attacks that aim to manipulate or f...</p>
                <div class="icon">
                    <a href="#blog"><i class="fas fa-clock"></i> 05th March, 2021</a>
                    <a href="#blog"><i class="fas fa-user"></i> by Banach</a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/m1.png" alt="">
            </div>
            <div class="content">
                <a href="https://brightsec.com/blog/cross-site-request-forgery-csrf/" class="link">Cross-Site Request Forgery: Im...</a>
                <p>Cross-site Request Forgery (CSRF/XSRF), also known as Sea Surf or Session Riding is a we...</p>
                <div class="icon">
                    <a href="#blog"><i class="fas fa-clock"></i> 04th April, 2022</a>
                    <a href="#blog"><i class="fas fa-user"></i> by Besic</a>
                </div>
            </div>
        </div>

    </div>

</section>


<!-- Starting banner section -->

<div class="banner">

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>Begin Your Cybersecurity Journey</span>
        <h3>Unlock the Secrets of Web Security</h3>
        <p>Jump into hands-on challenges designed to build your skills, deepen your knowledge, and prepare you for a successful career in web application security</p>
        <a href="level1x324/level1.php" class="btn">Start CTF</a>
    </div>

</div>

<!-- Starting footer section -->

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> <i class="fa fa-blind"></i>MasterMind </a>
            <p>A Massive Hacking Playground!</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>Quick Links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#learnings" class="links"> <i class="fas fa-arrow-right"></i> Learnings </a>
            <a href="#challenges" class="links"> <i class="fas fa-arrow-right"></i> Challenges </a>
            <a href="#help" class="links"> <i class="fas fa-arrow-right"></i> Help Pages </a>
            <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> Blogs </a>
            <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> About Us </a>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <h3>Contact Info</h3>
            <p> <i class="fas fa-map"></i> Colombo, Sri Lanka </p>
            <p> <i class="fas fa-phone"></i> +94-77432-8795 </p>
            <p> <i class="fas fa-envelope"></i> MasterMind@gmail.com </p>
            <p> <i class="fas fa-clock"></i> 8:00am - 6:00pm </p>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>Newsletter</h3>
            <p>Subscribe for latest updates</p>
            <form action="landingPageNewsletter.php" method="POST">
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