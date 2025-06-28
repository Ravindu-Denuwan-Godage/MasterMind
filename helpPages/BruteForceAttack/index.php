<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        u.lowercase {
            text-transform: lowercase;
        }
    </style>
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

        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fa fa-blind"></i>MasterMind
        </a>

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
            <img src="images/m5.png" style="float: left; margin-right: 1px; margin-bottom: -20px" width="430px"
                height="450px">

            <div class="content" data-aos="fade-left" data-aos-delay="600" style="margin-top: 6rem;">
                
                <h3>Brute Force Attack</h3>
                
                <span>What Is A Brute Force Attack?</span>
                
                <p>
                    A brute force attack is a technique used by cybercriminals to repeatedly try different password
                    combinations in order to gain access to a website. The hackers actively pursue this effort and use
                    bots they have placed maliciously on other machines to increase the computing capacity needed to
                    carry out these kinds of attacks.
                    
                    The most straightforward way to access a website or server (or anything that is password protected)
                    is using a brute force attack. It tries various combinations of usernames and passwords again and
                    again until it gets in. This constant activity like an army advancing on a fort.
                    Now, you'll be thinking, "Wow, that's simple, I can do that too". You can definitely give it a try!
                    
                    Every common ID, such as "admin," typically has a password. All you have to do is try to guess the
                    password. Consider a 2-digit pin that has 10 digits from 0 to 9. This implies that there are 100
                    possibilities. You can solve this problem with pen and paper, just like Mr. Bean did in the movie
                    Mr. Bean's Holiday when he sought to determine the correct final two numbers of the father of the
                    
                    lost child's phone number.
                    However, the truth is that no password in existence has just two characters. Even the pin numbers
                    (a sort of password), used in banks or on mobile devices, have a minimum of four characters.<br><br>
                    Additionally, 8 is typically considered to be the shortest password length on the internet. In order
                    
                    to make a password more secure, additional alphabets are added, which increases complexity. A
                    password is case sensitive since letters can be used in both UPPER and LOWER CASE.
                    How many possible combinations are there if our password is an alphanumeric 8-character password? In
                    English, there are 26 alphabets. In both UPPER and LOWER CASE, double them by two to get the final
                    
                    total of 26+26 = 52. Next, we add the numeric digits: 52+10 = 62. Now, the total number of
                    characters is 62.

                    <br><br>The number for an 8-character password will be 62<sup>8</sup>, resulting in a total of
                    2.1834011×10<sup>14</sup> possible combinations.

                    It would take 218 trillion seconds or 3.6 trillion minutes to test 218 trillion combinations at a
                    rate of one per second. Simply put, it would take roughly 7 million years to crack the password
                    using the final combination. Although it can probably be done in less time, the maximum amount of
                    time is 7 million years to break an 8-character alphanumeric password.
                    
                    <br><br>Well, you won't live that long.
                </p>
                
                <h3>Then, how it can happen?</h3>
                
                <p>
                    Well, if you are interested in cracking passwords, you will have to use computers. To do that, you
                    need to write some simple lines of code. Such programming skills are basic to any coder.
                    You will need to use computers if you're interested in breaking passwords. You must create few
                    straightforward lines of code to accomplish it. Such coding abilities are fundamental to all programmers.

                    Let's say you've created a password-cracking program that attempts 1,000 different combinations
                    every second. The duration shortens to 7,000 years.<br><br>
                    Not possible!<br><br>

                    You must have a supercomputer. So, let’s say you get a supercomputer that can try 1×10<sup>9</sup>
                    attempts per second. All 218 trillion tries will be put to the test in just 22 seconds. (Ideally,
                    you will already be logged into the account, but if the password is 9 characters long, you will need
                    to wait a little longer.)

                    These types of computing resources are not accessible to the general public. Password hackers,
                    however, are not regular people. They can gather computer resources in a variety of ways, such as by
                    creating a powerful computing engine using software, etc.

                    Furthermore, the calculation above is for all the possible combinations of an
                    8-character-password. What happens, though, if your password is the 10th or the 100th combination?
                    To identify and prevent any attempt to crack a password, it is essential to have additional layers
                    of security.
                </p>
                
                <h3>Tools Used for Brute Force Attacks</h3>
                
                <p>
                    On the open internet, there are various free tools that can be used to attack a wide range of
                    platforms and protocols. Here are a few examples:<br><br>

                    <b>1. Aircrack-ng:</b> Aircrack-ng is a brute force wifi password tool that is available for
                    free. It may be used with any NIC that supports raw monitoring mode and includes a WEP/WPA/WPA2-PSK
                    cracker and analysis tools to conduct attacks on Wi-Fi 802.11.<br><br>

                    <b>2. DaveGrohl:</b> DaveGrohl is a brute forcing tool for Mac OS X that supports dictionary
                    attacks. It offers a distributed mode that lets an attacker run attacks on the same password hash
                    from multiple computers.<br><br>

                    <b>3. Hashcat:</b> Hashcat is a CPU-based password cracking tool available for free. It is
                    compatible with systems running Windows, Mac OS, and Linux and is effective against a variety of
                    attacks, including simple brute force, dictionary, and hybrid.<br><br>

                    <b>4. THC Hydra:</b> Passwords for network authentications can be cracked by THC Hydra. It performs
                    dictionary attacks against more than 30 protocols, including HTTPS, FTP, and Telnet.<br><br>

                    <b>5. John the Ripper:</b> This is a free password-cracking tool that was developed for Unix
                    systems.  It is currently accessible on 15 other operating systems, including DOS, Windows, and
                    OpenVMS. John the Ripper automatically detects the type of hashing used in a password , allowing it
                    to be tested against encrypted password storage.<br><br>

                    <b>6. L0phtCrack:</b> Windows passwords can be cracked using L0phtCrack's simple brute force,
                    dictionary, hybrid, and rainbow table attacks.<br><br>

                    <b>7. NL Brute:</b> Since at least 2016, an RDP brute-forcing tool has been accessible on the dark
                    web.<br><br>

                    <b>8. Ophcrack:</b> Ophcrack is a free, open source Windows password cracking tool. It utilizes
                    rainbow tables and LM hashes.<br><br>

                    <b>9. Rainbow Crack:</b>Rainbow Crack generates rainbow tables to use while executing an attack. The
                    pre-computed nature of rainbow tables speeds up attack execution.<br><br>

                    <b>10. Burp Suite:</b> The Burp Suite is a collection of tools for web application penetration
                    testing. This tool allows us to perform a login brute force. It is a pre-installed tool in kali
                    Linux.<br><br>
                </p>
                
                <h3>Brute Force Attack demonstration with Burp Suite</h3>
                
                <span>Setting Burp Suite as a Web Proxy</span>
                
                <p>
                    Burp is intended to be used in conjunction with your browser. Burp serves as an HTTP proxy server,
                    and it receives all HTTP/S traffic sent by your browser. To ensure that Burp’s proxy listener is
                    working, select the Proxy tab and make sure that you see the Intercept is on option is not greyed
                    out, as shown in the below image.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure1.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Configure your browser's HTTP proxy server to utilize Burp Proxy listener next. To accomplish this,
                    modify the proxy settings in your browser to utilize the proxy host address (127.0.0.1) and port
                    8080 for both HTTP and HTTPS. We are going to demonstrate this brute force attack by using Firefox
                    browser. open firefox and go to settings. then Go down and click the Network settings As seen in
                    below image.

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure2.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Select the Manual proxy configuration radio button. In the HTTP Proxy field, type 127.0.0.1, and in
                    the Port field, type 8080. Do the same thing for the SOCKS Host field as well. Make sure to select
                    the "Also use this proxy for HTTPS" check box. Remove all entries from the "No proxy for" field. To
                    save the settings, click OK. (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure3.PNG" alt="">
                    </div>
                </p>
               
                <p>
                    Now, if everything is configured correctly, Burp should process all of your HTTP/S traffic. The
                    Proxy tab in Burp will become orange whenever you visit a website, and Burp will hold onto the
                    request until you decide what to do with it. You can now switch the intercept off and only use it
                    when necessary. (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure4.png" alt="">
                    </div>
                </p><br>
                
                <span>How to Brute Force a Login Page</span>
                
                <p>
                    Let’s say you are performing a brute force attack against your client’s website, and you come across
                    a login interface (see below image). Your mission is to perform a brute force attack and find the
                    credentials. Open Burp and make sure Burp's intercept is turned on in order to brute force the login
                    page. Also, it has already given the username as "test". (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure5.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Go to login page and type "test" in the username field (it has given the username in the login page)
                    and type anything in the password field. we are going to use "cicra" as the password for this time.
                    click "login" button after filling the username and password fields. (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure6.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Burp will record your HTTP request and wait for you to take action. You’ll be able to see what
                    you’ve put for the username and password, as shown in below image. then right-click and select "Send
                    to Intruder". then Click Drop, and deselect Intercept is on.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure7.png" alt="">
                    </div>
                </p>
                
                <p>
                    As seen below image, select the Positions tab after selecting the Intruder tab. Ensure that the
                    drop-down menu's Attack type is set to "Sniper" (if you don't know the username, you have to select
                    the attack type as "Cluster bomb". but in here, since we alredy know the username, we are going to
                    use "sniper" as our attack type. because we want to brute force only the password). All the places
                    where payloads can be placed are highlighted by Burp. But Only the parameter for the pass is
                    important to us. Select Clear and highlight "cicra" and click Add (see blow image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure8.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Then go to Payload tab and select the payload type as "Brute forcer". Assume we know the letters
                    that should contain in the password. those are "s, t, t, e" (assume all letters are lowercase). Now
                    we have to check all the possbile permutations of those letters. That's why we set our payload type
                    as "brute forcer", because it checks all the possible permutations automatically. Then enter our
                    password letters (s, t, t, e) in to the "character set" field (see below image). Then click Start
                    attack in the upper right corner to start the brute force attack now.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure9.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Check for any anomalies in the responses while Burp is brute forcing the login page (see below
                    image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure10.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Going through the requests, we noticed that the status for the request 78 is 200 (see below image).
                    All the other requests came back with a status 302, displaying “You must login”. We can tell that
                    this is the password because of this. As you can see in the below image, when we check the response
                    of request 78, it has given the html web page as well. (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure11.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    As you can see in the below image, We were able to log in by entering the username and password
                    used by request 78 (username: test, password: test). Attack completed!
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FIgure12.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    This demonstration explains how simple it is to carry out a brute force attack. However, you can
                    take a couple of steps to reduce the chances of succumbing to a successful brute force attack.
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
                <i class="fa fa-random"></i>
                <h3>Burp Suite/OWASP ZAP</h3>
                <p>Use Burp Suite or OWASP ZAP for the attack</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fa fa-key"></i>
                <h3>Check permutations</h3>
                <p>Check all the possible permutations of the given word (<u class="lowercase">h</u>eros)</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fa fa-check"></i>
                <h3>Attack type</h3>
                <p>Set the attack type (burp Suite) as Sniper and use the username as Level_06</p>
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
                    <a href="https://www.kaspersky.com/resource-center/definitions/brute-force-attack"
                        class="link">Brute Force Attack: Definition and Examples</a>
                    <p>A brute force attack uses trial-and-error to guess login info, encryption keys, or find a hidden
                        web page. Hackers work through...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/bruteforceblog2.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.systemconf.com/2021/07/11/what-is-burp-suite-how-to-use-example-brute-force-attack-with-burp-suite/"
                        class="link">What is Burp Suite? How to use? Example Brute Force Attack wit...</a>
                    <p>We will view the requests between “Burp Suite” and the client/server and make the necessary
                        changes to the requests. As...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/bruteforceblog3.png" alt="">
                </div>
                <div class="content">
                    <a href="https://rajendrakv.wordpress.com/2020/06/14/brute-force-using-burp-suite-and-owasp-zap/"
                        class="link">Brute Force using Burp Suite and OWASP ZAP</a>
                    <p>Hello friends .. Are you a beginner to Cyber Security? Are you passionate about cyber security?
                        If you are interested to learn how... </p>
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
                <a href="../InformationLeakage/index.php">read more <i class="fas fa-angle-right"></i></a>
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
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
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
            offset: 150,
        });

    </script>

</body>

</html>