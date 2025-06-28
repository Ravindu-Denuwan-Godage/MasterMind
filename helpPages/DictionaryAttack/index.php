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

    <style>
    .download-btn {
    background-color: #29d9d5;
    color: #111;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    }

    </style>

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
            <img src="images/m8.png" style="float: left; margin-right: 1px; margin-bottom: -50px" width="430px"
                height="450px">

            <div class="content" data-aos="fade-left" data-aos-delay="600" style="margin-top: 6rem;">
                
                <h3>dictionary attack</h3>
                
                <span>What is a dictionary attack?</span>
                
                <p>
                    A dictionary attack entails inputting every word in a dictionary as a password in order to gain
                    access to a password-protected computer, network, or other IT resource. A dictionary attack can also
                    be used to try to decipher a message or document that has been encrypted.
                    Dictionary attacks are successful because so many people and organizations insist on using common
                   
                    terms as passwords. These attacks frequently fail when conducted against systems that use
                    multiple-word passwords and passwords made up of random combinations of uppercase, lowercase, and
                    numbers and letters.
                    
                    In systems with strong password requirements, the brute-force method of attack, in which every
                    possible combination of characters and spaces is tested up to a certain maximum length, can
                    sometimes be effective. A brute-force attack can, however, take a long time to produce results.
                    
                    Strong, randomly generated passwords are extremely unlikely to be found in the predetermined
                    password library and cannot be easily predicted. It is practically hard to crack nonpredictable
                    passwords using a dictionary attack since the collection of probable guesses is restricted to a
                    predetermined set.
                </p>
                
                <h3>How do dictionary attacks work?</h3>
                
                <p>
                    In a dictionary attack, potential passwords are deciphered using a pre-selected library of words and
                    phrases. It operates on the premise that users frequently choose passwords from a basic list, such
                    as "password", "123abc", and "123456".

                    Predictable patterns that can differ by region are included in these lists. For instance, hackers
                    testing a dictionary attack on targets in New York would seek for words like "knicksfan2020" or
                    "newyorkknicks1234". When developing their attack libraries, attackers include words connected to
                    sports teams, monuments, cities, addresses, and other locally distinctive elements.
                    
                    These lists can grow rather large, though they are not as long as those used in other brute-force
                    attacks. Manually processing and testing each of these passwords is impractical. As a result, adding
                    more technology is frequently needed to speed up the procedure.<br><br> Attackers make use of
                    supporting software, such as password dictionaries or other tools for brute-force attacks.
                   
                    Whether the account, network, or device the attacker is logging into is online or offline affects
                    how dictionary attacks are carried out. The attacker in an online attack needs to be aware of how
                    many times they can try to guess the right password. After a particular number of tries, an
                    intrusion detection system, a site administrator, an account manager, a user, or a password attempt
                    restriction may be activated. The system has the ability to shut out the attacker in any of those instances.<br><br>

                    Dictionary attacks may be more effective when using a prioritized list of shorter likely
                    passwords. Hackers with advanced skills might also be able to disable password attempt limitations
                    or detection features.

                    For offline attacks, a hacker has few restrictions when it comes to the number of passwords they can
                    try. However, access to the password storage file from the system is necessary in order to carry out
                    an offline attack. A dictionary attack can thus be launched in an offline environment.
                </p>
                
                <h3>Brute-force attack vs dictionary attack</h3>
                
                <p>The number of password permutations attempted is the main difference between a brute-force attack and
                    a dictionary attack.
                </p><br>
                
                <span>Brute-force attacks</span>
                
                <p>
                    Typically, a brute-force attack will employ a systematic strategy to test every possible password.
                    It might take quite some time to finish this.
                    A five-digit combination lock provides a familiar, nontech example of the difference. Using a
                   
                    brute-force approach, an attacker would attempt every possible permutation available for the
                    five-digit lock. A five-digit lock with individual values from zero to nine has exactly 100,000
                    possible permutations.
                </p><br>
                
                <span>Dictionary attacks</span>
                
                <p>
                    A dictionary attack will try to hack into a system using a list of likely passwords. Compared to
                    brute-force attacks, these attacks are more targeted. An attacker utilizing a dictionary technique
                    would attempt all the permutations in its predetermined library rather than trying to input every
                    possible permutation.
                   
                    Static passcodes like "00000" and sequential passcodes like "12345" would both be put to the test.
                    The dictionary approach is probably difficult to guess the five-digit permutation if it is
                    especially uncommon. Like phishing attacks, dictionary attacks assume that a reasonable percentage
                    of the users or accounts they target will be vulnerable and will have an easily identifiable five-digit passcode.
                </p>
                
                <h3>Tools Used for Dictionary Attacks</h3>
                
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

                    <b>7. OWASP ZAP:</b>OWASP ZAP is a open source web application security tool. ZAP has many other
                    features, like Passive Scanner, Fuzzer spidering web applications and performing automated scans,
                    plus many more.<br><br>

                    <b>8. Burp Suite:</b> The Burp Suite is a collection of tools for web application penetration
                    testing. This tool allows us to perform a login Dictionary attacks. It is a pre-installed tool in
                    kali Linux.<br><br>
                </p>

                <h3>Dictionary Attack demonstration with Burp Suite</h3>
                
                <span>Setting Burp Suite as a Web Proxy</span>
                
                <p>
                    Burp is intended to be used in conjunction with your browser. Burp serves as an HTTP proxy server,
                    and it receives all HTTP/S traffic sent by your browser. To ensure that Burp’s proxy listener is
                    working, select the Proxy tab and make sure that you see the Intercept is on option is not greyed
                    out, as shown in the below image.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure1.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    Configure your browser's HTTP proxy server to utilize Burp Proxy listener next. To accomplish this,
                    modify the proxy settings in your browser to utilize the proxy host address (127.0.0.1) and port
                    8080 for both HTTP and HTTPS. Burp Suite is being run in Kali in this demonstration. Since Firefox
                    is Kali's default browser, open it and select Preferences. As seen in below image, click Advanced,
                    pick the Network option, and then click Settings.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure2.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    Select the Manual proxy configuration radio button. In the HTTP Proxy field, type 127.0.0.1, and in
                    the Port field, type 8080. Check that the box next to Use this proxy server for all protocols is
                    selected. Remove all entries from the No proxy for: field. To save the settings, click OK (see below
                    image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure3.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    Now, if everything is configured correctly, Burp should process all of your HTTP/S traffic. The
                    Proxy tab in Burp will become orange whenever you visit a website, and Burp will hold onto the
                    request until you decide what to do with it. You can now switch the intercept off and only use it
                    when necessary (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure4.jpg" alt="">
                    </div>
                </p><br>
                
                <span>Let's perform a dictionary attack to a login form</span>
                
                <p>
                    Let’s say you are performing a penetration test against your client’s website, and you come across a
                    Joomla! administrator interface. You will have complete control of the website if you are able to
                    access the admin account by using a dictionary Attack. Open Burp and make sure Burp's intercept is
                    turned on in order to perform a dictionary attack to the login page (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure5.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    We shall brute force the username and password in this instance. If you are unfamiliar with the
                    installation you are attacking, you may find it useful to use existing username/password lists (in
                    Kali, you can find these in /usr/share/wordlists). In this case, we made my own username list
                    because we are certain that the username would be one of these three: root, administrator, or admin
                    (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure6.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    For the password list, we decided to utilize the top 500 passwords from the rockyou password list
                    (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure7.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    Type anything in the username and password slots once you've prepared your lists of usernames and
                    passwords; we are using canary/canary1. Burp will record your HTTP request and wait for you to take
                    action. You’ll be able to see what you’ve put for the username and password, as shown in below
                    image. Send to Intruder can be chosen by right-clicking. Click Drop, and deselect Intercept is on.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure8.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    As seen below image, select the Positions tab after selecting the Intruder tab. Ensure that the
                    drop-down menu's Attack type is set to Cluster bomb (if you already know the username and only want
                    to brute force the password, select Sniper). All the places where payloads can be placed are
                    highlighted by Burp. Only the parameters for the username and passwd are important to us. Select
                    Clear and highlight canary and click Add. Do the same thing for canary1.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure9.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    Click the Payload set drop-down menu under the Payloads tab. As you can see, there are two payloads:
                    one has the password and the other the username. Choose 1 and click Load to load the username list
                    (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure10.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    Do the same thing for password after you select 2 in the Payload set field. Click Start attack in
                    the upper right corner to start the brute force attack now (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure11.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    Check for any anomalies in the responses while Burp is brute forcing the login page (see below
                    image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure12.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    Going through the requests, we noticed that the status for the request 78 is 301 (see below image).
                    All the other requests came back with a 200, displaying “Username and password do not match”. We can
                    tell that this entry is the username because of this.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure13.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    We were able to access the administrator panel (see below image) by entering the username and
                    password used by request 78 (admin/sunshine). Attack completed! 
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/Figure14.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    This demonstration explains how simple it is to carry out a dictionary attack. However, you can take
                    a couple of steps to reduce the chances of succumbing to a successful dictionary attack.
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
                <i class="fa fa-recycle"></i>
                <h3>Burp Suite/OWASP ZAP</h3>
                <p>Use Burp Suite or OWASP ZAP for the attack</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fa fa-check-square"></i>
                <h3>Attack Type</h3>
                <p>Set the attack type (burp suite) as Sniper and use the username as Level_04</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fa fa-file-word"></i>
                <h3>Wordlist</h3>
                <p>Use this wordlist</a> (first 500 words from the rockyou password list)</p>
                <a href="../../exploitation_resources/wordlist/rockyou.txt" download='rockyou.txt' class="download-btn">Download wordlist</a>
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
                    <a href="https://www.csoonline.com/article/3568794/what-is-a-dictionary-attack-and-how-you-can-easily-stop-them.html"
                        class="link">What is a dictionary attack? And how you can easily stop...</a>
                    <p>A dictionary attack is a brute-force technique where attackers run through common words and
                        phrases, such as those from a...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/bruteforceblog2.png" alt="">
                </div>
                <div class="content">
                    <a href="https://cybersecuritylife.wordpress.com/2015/11/07/dictionary-attack-using-burp-suites-intruder/"
                        class="link">Dictionary Attack using Burp Suite’s Intruder</a>
                    <p>This Tutorial will give you a basic understanding of Burp Suite’s Intruder to conduct a
                        Dictionary Attack on Login-Forms...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/m9.png" alt="">
                </div>
                <div class="content">
                    <a href="https://portswigger.net/support/using-burp-to-brute-force-a-login-page" class="link">Using
                        Burp to Brute Force a Login Page</a>
                    <p>Authentication lies at the heart of an application’s protection against unauthorized access. If
                        an attacker is able to break applic...</p>
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
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
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
            offset: 150,
        });

    </script>

</body>

</html>