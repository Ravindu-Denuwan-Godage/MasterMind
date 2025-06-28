<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterMind</title>

    <!-- Adding font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Adding custom css file -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Adding custom js file -->
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
    
<!-- Starting header section -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fa fa-blind"></i>MasterMind </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="../../#home">Home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="../../#learnings">Learnings</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="../../#challenges">Challenges</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="../../#help">Help Pages</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="../../#blogs">Blogs</a>
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="../../#about">About Us</a>
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="../../level1x324/level1.php" class="btn">Start CTF</a>

</header>


<!-- Starting about section -->

<section class="about" id="about">

    <div class="himg" data-aos="fade-right" data-aos-delay="300">
		<img src="images/b7.png" style="float: left; margin-right: 1px; margin-bottom: -20px" width="430px" height="450px">

    <div class="content" data-aos="fade-left" data-aos-delay="600" style="margin-top: 6rem;">
        
        <h3>Data Leakage vulnerability</h3>
        
        <span>What is data Leakage?</span>
		
        <p>
            Data leakage, frequently called Information Leakage (CWE-200), is a category of software vulnerabilities in which information is unintentionally disclosed to end-users, potentially aiding attackers in their efforts to breach application security. The key criteria for information leakage are that it be inadvertent and beneficial to attackers.
            And also, Information Leakage is different than the failure to protect sensitive information at rest and in-transit. This is a legitimate concern, and involves the exposure of any sensitive data stored and processed by the application. Disclosure of technical information can occasionally be just as dangerous as exposing sensitive user or business data. 
            Even though some of this information will only be slightly useful, it might serve as a starting point for uncovering a new attack surface that could have other interesting weaknesses. The information you are able to obtain might even be the crucial component needed to put together complicated, high-severity attacks. Information leakage could relate to the exposure of details about the application's deployment (including some credentials),
            design, or organizational structure that could be used to support attacks on the application or other infrastructure. Examples of "application sensitive" data that could accidentally leak include:<br><br>
            
            <b>1. Account Identifiers:</b> Access control brute-force attacks are made easier by the availability of a method for identifying existing accounts.<br><br>
            <b>2. Email Addresses:</b> Phishing and other Social Engineering attacks as well as access control attacks can make advantage of internal email addresses that have been made public.<br><br>
            <b>3. File System Structure:</b> Attacks like Path Traversal can be made easier by exposing internal system structure through exposed path references.<br><br>
            
            <b>4. Application Configuration:</b> The exposure of configuration information can alert an attacker to incorrect configuration and assist in narrowing the scope of their attack. An example would be obvious references to Debug Switches that might give attackers the ability to enable debugging.<br><br>
            <b>5. Database Structure:</b> Understanding the application's schema can be useful when creating SQL Injection strings.<br><br>
            <b>6. Session and Authentication Tokens:</b> Attacks such as session hijacking can be carried out by exposing these values.<br><br>
        </p>
        
        <h3>How Does Information Leak ?</h3>
        
        <p>
            Information can be delivered in a variety of ways, so there are numerous ways it could be made available to attackers:<br><br>

            <b>1. Technical Error Messages:</b> This vulnerability frequently manifests as the display of stack traces, database error messages, and other answers that contain technical information that is incomprehensible to end users.<br><br>
            <b>2. Banners:</b> The exposure of software versions of the Operating System, Web-Server, database, or other application components.<br><br>
            <b>3. Account Enumeration:</b> Providing a method for identifying already-existing accounts.<br><br>
            <b>4. Web Page Source: </b> The delivery of comments to end users that contain application-sensitive information (including passwords).<br><br>
            
            <b>5. Supporting Files:</b> Information revealed in the source, comments, or configuration information found in CSS, JavaScript, or other supplemental files.<br><br>
            <b>6. Diagnostic/Debug Messages:</b> The exposure of information through debug data in Responses.<br><br>
            <b>7. Event Timing:</b> Scenarios in which it is possible to discern insight into an internal operation by how long it takes to complete. Event Timing can occasionally be used in Blind Injection attacks.<br><br>
            <b>8. Cookies:</b> The disclosure of authentication tokens, session tokens, and other state data stored in cookies.<br><br>
            <b>9. Caching:</b> When information is not protected against being cached by web browsers, it may be accessible to attackers with local computer access.<br><br>
            
            There is sometimes so great a focus on protecting the sensitive data being processed that we overlook information about the application design or deployment that should be considered “application sensitive” and protected.
            Although not directly exploitable, failure to safeguard application sensitive information might give attackers useful information and help them carry out further attacks.
            
            See the page on <a href="https://affinity-it-security.com/test-information-leakage/">"How To Test For Information Leakage"</a> for further information on how to identify vulnerabilities that could lead to information leakage.
            See the page on <a href="https://affinity-it-security.com/prevent-information-leakage/">"How To Prevent Information Leakage"</a> for advice on how to avoid this type of vulnerability.
        </p>
        
        <h3>Examples of information leakage</h3>
        
        <span>Developer comments left in page responses:</span>
        
        <p>
            As you can see in the below image, there is a comment left by the development/QA personnel indicating what one should do if the image files do not show up. The internal IP address of the content server, "192.168.0.110," which is mentioned in the code directly, is the information being released (see below image).
            
            <br><br>
            <div style="text-align: center;">
                <img src="images/informationleakage1.PNG" alt="">
            </div>
        </p><br>
        
        <span>Improper application or server configurations:</span>
        
        <p>
            This example of a verbose error message would be the response to an invalid SQL query.  Although no prior knowledge is necessary for SQL Injection attacks, the attack process can be significantly expedited by giving the attacker any information about the structure or format of the SQL queries being utilized by the target application. A verbose error message can leak information that can be used to build accurate SQL queries for the backend database.
            When an apostrophe was entered in the username field of a login page, the following response was given. incorrect configurations of the server (see below image).<br><br>
            
            <div style="text-align: center;">
                <img src="images/informationleakage2.PNG" alt="">
            </div>
        </p>
        
        <p>
            A syntax error is reported in the first error statement. The SQL query's query parameters, username and password, are made clear by the error message. An attacker will be significantly helped by this leaked information when they start to develop SQL Injection attacks against the web application.
        </p><br>
        
        <span>Differences in page response behaviors:</span>
        
        <p>
            Here is an example of a "forgot password" function that was added to a program to make it more "user friendly." However, an attacker can utilize this functionality to find legitimate email addresses or account names due to the feature's public access. The password recovery flow performs the following steps:
            
            <br><br>
            <div style="text-align: center;">
                <img src="images/informationleakage3.PNG" alt="">
            </div>
        </p>
        
        <p>
            Information leakage occurs once the entered email address and/or account name is confirmed prior to step-2.  An attacker can determine valid email addresses and/or account names using the difference in behavior.
        </p>
        
        <p>
            Above exmpales shows how simple it is to carry out a information leakage vulnerability. Preventing information disclosure completely is tricky due to the huge variety of ways in which it can occur. However, there are some general best practices that you can follow to minimize the risk of these kinds of vulnerability creeping into your own websites.
        </p>
    </div>

</section>


<!-- Starting services section -->

<section class="services" id="services">

    <div class="heading">
        <h1>Follow these tips to capture the flag</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fa fa-file-code"></i>
            <h3>Page source</h3>
            <p>Right-click, then go to "view page source" and check the comments </p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <i class="fa fa-cogs"></i>
            <h3>Developer tools</h3>
            <p>If the right-click is disabled, use the "developer tools" to get the page source.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <i class="fa fa-window-restore"></i>
            <h3>Burp suite/OWASP ZAP</h3>
            <p>Also you can use the Burp suite or OWASP ZAP to view the page source</p>
            </div>

    </div>

</section>


<!-- Starting blogs section -->

<section class="blogs" id="blogs">

    <div class="heading">
        <span>Still Can't find the flag?</span>
        <h1>Refer following blogs</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/bruteforceblog1.png" alt="">
            </div>
            <div class="content">
                <a href="https://portswigger.net/web-security/information-disclosure#:~:text=Information%20disclosure%2C%20also%20known%20as,as%20usernames%20or%20financial%20information" class="link">Information disclosure vulnerabilities</a>
                <p>In this section, we'll explain the basics of information disclosure vulnerabilities and describe how you can find and exploit the...</p>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/bruteforceblog2.png" alt="">
            </div>
            <div class="content">
                <a href="https://heimdalsecurity.com/blog/what-is-data-leakage/" class="link">What Is Data Leakage? Best Practices on Data Leakage...</a>
                <p>Data leakage, frequently called information leakage, is the unauthorized disclosure of sensitive data from within a company’s...</p>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/bruteforceblog3.png" alt="">
            </div>
            <div class="content">
                <a href="https://www.currentware.com/blog/what-is-data-leakage/" class="link">What is Data Leakage? How Can I Prevent Data Leaks?</a>
                <p>In this article, I will answer the question “What is data leakage?”. I will also explain the difference between data leakage and a dat...</p>
            </div>
        </div>

    </div>

</section>


<!-- Starting destination section -->

<section class="destination" id="destination">

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
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/2.png" alt="">
            </div>
            <div class="content">
                <h3>Directory Traversal</h3>
                <a href="../DirectoryTraversal/index.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/m8.png" alt="">
            </div>
            <div class="content">
                <h3>Dictionary Attack</h3>
                <a href="../DictionaryAttack/index.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="images/m4.png" alt="">
            </div>
            <div class="content">
                <h3>Caesar Cipher Encryption</h3>
                <a href="../CaesarCipher/index.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="750">
            <div class="image">
                <img src="images/m5.png" alt="">
            </div>
            <div class="content">
                <h3>Brute Force Attack</h3>
                <a href="../BruteForceAttack/index.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="900">
            <div class="image">
                <img src="images/m6.png" alt="">
            </div>
            <div class="content">
                <h3>File Upload Vulnerability</h3>
                <a href="../FileUpload/index.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="images/b6.png" alt="">
            </div>
            <div class="content">
                <h3>AES Encryption</h3>
                <a href="../AESEncryption/index.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="images/m2.png" alt="">
            </div>
            <div class="content">
                <h3>SQL Injection Attack</h3>
                <a href="../SQLInjection/index.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="images/b4.png" alt="">
            </div>
            <div class="content">
                <h3>Cross-site Scripting </h3>
                <a href="../CrossSiteScriptingAttack/index.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

    </div>

</section>


<!-- Starting banner section -->

<div class="banner">

    <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>start your CTF now!</span>
        <h3>Let's Explore This World</h3>
        <p>The home of guided and exploitative learning, offering everything that is required to take your training seriously and kickstart a career in cybersecurity</p>
        <a href="../../level1x324/level1.php" class="btn">Start CTF</a>
    </div>

</div>


<!-- Starting footer section -->

<section class="footer">

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
            <h3>quick links</h3>
            <a href="../../#home" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="../../#learnings" class="links"> <i class="fas fa-arrow-right"></i> Learnings </a>
            <a href="../../#challenges" class="links"> <i class="fas fa-arrow-right"></i> Challenges </a>
            <a href="../../#help" class="links"> <i class="fas fa-arrow-right"></i> Help Pages </a>
            <a href="../../#blogs" class="links"> <i class="fas fa-arrow-right"></i> Blogs </a>
            <a href="../../#about" class="links"> <i class="fas fa-arrow-right"></i> About Us </a>
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
            <form action="newsletter.php" method="POST">
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