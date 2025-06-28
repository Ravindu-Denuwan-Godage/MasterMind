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
            <img src="images/m4.png" style="float: left; margin-right: 1px; margin-bottom: 1px" width="430px"
                height="450px">

            <div class="content" data-aos="fade-left" data-aos-delay="600" style="margin-top: 6rem;">
                
                <h3>Caesar Cipher</h3>
                
                <span>What is Caesar Cipher</span>
                
                <p>
                    The Caesar cipher is the simplest and oldest method of cryptography. The Caesar cipher technique,
                    often known as a shift cipher or additive cipher, is based on a mono-alphabetic cipher. To
                    communicate with his officers, Julius Caesar utilised the shift cipher (also known as the additive
                    cipher) method.
                    
                    For this reason, the shift cipher technique is called the Caesar cipher. The Caesar cipher is a kind
                    of replacement (substitution) cipher, where all letter of plain text is replaced by another letter.
                    Despite modern shortcomings, it’s a great introduction to the field of cryptography due to its
                    simplicity. The Caesar Cipher works by rotating each letter by a set number of rotations. To further
                    
                    understand the Caesar cipher, let's look at an example. If we start shifting with 1, then A will be
                    replaced by B, B will be replaced by C, C will be replaced by D, and so on, until the plain text is
                    complete.
                    
                    Caesar ciphers is a weak method of cryptography. It can be easily hacked. It means the message
                    encrypted by this method can be easily decrypted. Before we jump in to the further details, there
                    are 2 words we need to know,<br><br>

                    <b>1. Plaintext:</b> It is a simple message written by the user.<br>
                    <b>2. Ciphertext:</b> It is an encrypted message after applying some technique.<br><br>                   

                    The formula of encryption is: <b>E<sub>n</sub> (x) = (x + n) mod 26</b><br>
                    
                    The formula of decryption is: <b>D<sub>n</sub> (x) = (xi - n) mod 26</b><br><br>
                    If any case (Dn) value becomes negative (-ve), in this case, we will add 26 in the negative value.<br><br>
                    
                    Where,<br>

                    E denotes the encryption<br>
                    D denotes the decryption<br>
                    x denotes the letters value<br>
                    n denotes the key value (shift value)<br><br>
                    Note: "i" denotes the offset of the ith number of the letters, as shown in the table below.<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher1.jpg" alt="">
                    </div>
                </p>
                
                <h3>Example 01:</h3>
                
                <p>
                    Use the Caesar cipher to encrypt and decrypt the message "JAVATPOINT", and the key (shift) value of
                    this message is 3.<br><br>
                    
                    <span>encryption</span><br>

                    1. We apply encryption formulas by character, based on alphabetical order.<br>
                    2. The formula of encryption is: <b>E<sub>n</sub> (x) = (x + n) mod 26</b><br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher2.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    3. The encrypted message is <b>"MDYDWSRLQW"</b>. Note that the Caesar cipher is monoalphabetic, so
                    the same plaintext letters are encrypted as the same letters. For example, "JAVATPOINT" has "A",
                    encrypted by "D".<br><br>

                    <span>Decryption</span><br>

                    1. We apply decryption formulas by character, based on alphabetical order.<br>
                    2. The formula of decryption is: <b>D<sub>n</sub> (x) = (x<sub>i</sub> - n) mod 26</b>.<br>
                    3. If any case (D<sub>n</sub>) value becomes negative (-ve), in this case, we will add 26 in the negative value.<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher3.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    4. The decrypted message is <b>"JAVATPOINT"</b>.
                </p>
                
                <h3>Example 02:</h3>
                
                <p>
                    Use the Caesar cipher to encrypt and decrypt the message "HELLO," and the key (shift) value of this
                    message is 15.<br><br>

                    <span>encryption</span><br>

                    1. We apply encryption formulas by character, based on alphabetical order.<br>
                    2. The formula of encryption is: <b>E<sub>n</sub> (x) = (x + n) mod 26</b>.<br><br>

                    <div style="text-align: center;">
                        <img src="images/CaeserCipher4.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Note that the Caesar cipher is monoalphabetic, so the same plaintext letters are encrypted as the
                    same letters. Like, "HELLO" has "L", encrypted by "A".<br><br>
                    
                    3. The encrypted message of this plain text is <b>"WTAAD"</b>.
                </p><br>

                <span>Decryption</span><br>
                
                <p>
                    1. We apply decryption formulas by character, based on alphabetical order.<br>
                    2. The formula of decryption is: <b>D<sub>n</sub> (x) = (xi - n) mod 26</b><br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher5.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    3. The decrypted message is <b>"HELLO"</b>.<br><br>
                    Note: If any case (D<sub>n</sub>) value becomes negative (-ve), in this case, we will add 26 in the
                    negative value. Like, the third letter of the ciphertext.<br><br>
                    
                    D<sub>n</sub> = (00 - 15) mod 26 <br>
                    = -15
                    <br><br>

                    The value of dn is negative, so 26 will be added to it.<br><br>
                    = -15 + 26 <br>
                    = 11
                </p>
                
                <h3>Advantages of Caesar cipher</h3>
                
                <p>
                    Its benefits are as follows: -
                    <br><br>

                    1. It is very easy to implement.<br>
                    2. This method is the simplest method of cryptography.<br>
                    3. Only one short key is used in its entire process.<br>
                    4. If a system does not use complex coding techniques, it is the best method for it.<br>
                    5. It requires only a few computing resources.<br>
                </p>
                
                <h3>Disadvantages of Caesar cipher</h3>
                
                <p>
                    Its disadvantages are as follows: -
                    <br><br>

                    1. It can be easily hacked. It means the message encrypted by this method can be easily decrypted.<br>
                    2. It provides very little security.<br>
                    3. By looking at the pattern of letters in it, the entire message can be decrypted.<br>
                </p>
                
                <h3>caesar cipher decryption using Dcode</h3>
                
                <p>
                    Let’s say you are performing a penetration testing against your client’s website, and you come
                    across a login interface (see below image). We already know the username is "test" as it shows in
                    the login page (see below image). Assume your client told you that the password is "xiwx". Also, he
                    told you that the password is encrypted using Caeser Cipher. Your mission is to decrypt it and find the password.<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher6.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    There are plenty of online and offline tools which we can use for caeser cipher decryption. But in
                    this demonstration, we are going to use the online caeser cipher decryption tool called <a href="https://www.dcode.fr/caesar-cipher">"Dcode"</a>.
                    When you visit the <a href="https://www.dcode.fr/caesar-cipher">"Dcode"</a> web application, you can see the Caesar Cipher Decoder panel. enter the
                    given encrypted password (xiwx) into the Decoder box (see below image).

                    And then click the "decrypt (bruteforce)" button. Since we don't know the encrypted shift number, we
                    have to Test all possible shifts (26-letter alphabet A-Z). That's why we brute force it instead of
                    doing Manual decryption.<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher7.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    After clicking the "decrypt (bruteforce)" button, we can see that the <a href="https://www.dcode.fr/caesar-cipher">"Dcode"</a> tool has tested the 25
                    shifts and sorted from most probable to least probable (see below image).<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher8.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Now we can use all these decrypted passwords one by one to check (manually) whether it's going to
                    match for our login credentials or not. But instead of doing it manually, we'are going to use the
                    "Burp Suite" tool. So first, we need to set the burp suite as a web proxy.

                    Burp is intended to be used in conjunction with your browser. Burp serves as an HTTP proxy server,
                    and it receives all HTTP/S traffic sent by your browser. To ensure that Burp’s proxy listener is
                    working, select the Proxy tab and make sure that you see the Intercept is on option is not greyed
                    out, as shown in the below image.<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher9.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Configure your browser's HTTP proxy server to utilize Burp Proxy listener next. To accomplish this,
                    modify the proxy settings in your browser to utilize the proxy host address (127.0.0.1) and port
                    8080 for both HTTP and HTTPS. We are going to demonstrate this Caeser Cipher decryption by using Firefox
                    browser. open firefox and go to settings. then Go down and click the Network settings As seen in
                    below image.<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaserCipher10.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Select the Manual proxy configuration radio button. In the HTTP Proxy field, type 127.0.0.1, and in
                    the Port field, type 8080. Do the same thing for the SOCKS Host field as well. Make sure to select
                    the "Also use this proxy for HTTPS" check box. Remove all entries from the "No proxy for" field. To
                    save the settings, click OK (see below image).<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher11.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Now, if everything is configured correctly, Burp should process all of your HTTP/S traffic. The
                    Proxy tab in Burp will become orange whenever you visit a website, and Burp will hold onto the
                    request until you decide what to do with it. You can now switch the intercept off and only use it
                    when necessary (see below image).<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher12.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Now we need to capture the HTTP/S traffic by using burp suite. Make sure to Intercept is on, then Go
                    to login page and type "test" in the username field (it has given the username in the login page)
                    and type anything in the password field. we are going to use "cicra" as the password for this time.
                    click "login" button after filling the username and password fields (see below image).<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher13.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Burp will record your HTTP request and wait for you to take action. You’ll be able to see what
                    you’ve put for the username and password, as shown in below image. then right-click and select "Send
                    to Intruder". then Click Drop, and deselect Intercept is on.<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher14.png" alt="">
                    </div>
                </p>
                
                <p>
                    As seen below image, select the Positions tab after selecting the Intruder tab. Ensure that the
                    drop-down menu's Attack type is set to "Sniper" (if you don't know the username, you have to select
                    the attack type as "Cluster bomb". but in here, since we alredy know the username, we are going to
                    use "sniper" as our attack type. because we want to find only the password). All the places where
                    payloads can be placed are highlighted by Burp. But Only the parameter for the pass is important to
                    us. Select Clear and highlight "cicra" and click Add (see blow image).<br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher15.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Then we need to create a password list with all the decrypted words (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher16.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Then go to Payload tab and make sure to set the payload type as "simple list" (see below image).
                    Under the "Payload options", there is a button called "load". Click that "Load" button and add our
                    password list (decrypted words list which we created in the previous step) as shown in the below
                    image. Then click Start attack in the upper right corner to start the attack now.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher17.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Check for any anomalies in the responses while Burp is brute forcing the login page (see below
                    image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher18.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    Going through the requests, we noticed that the status for the request 1 is 200 (see below image).
                    All the other requests came back with a status 302, displaying “You must login”. We can tell that
                    this is the password because of this. As you can see in the below image, when we check the response
                    of request 1, it has given the html web page as well (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher19.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    As you can see in the below image, We were able to log in by entering the username and password
                    used by request 1 (username: test, password: test). That means we successfully decrypted the given
                    Caeser Cipher encrypted password. Attack completed and the password is "Test".
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/CaeserCipher20.PNG" alt="">
                    </div>
                </p>
                
                <p>
                    This demonstration explains how simple it is to crack the caeser Cipher. Because there are only 25
                    possible keys, Caesar ciphers are very vulnerable to a “brute force” attack, where the decoder
                    simply tries each possible combination of letters. This might take some patience if a human does it,
                    but nowadays computers can unravel the code in a fraction of a second, so Caesar ciphers are not
                    considered a secure method to encrypt electronic communications.
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
                <i class="fa fa-bug"></i>
                <h3>Dcode</h3>
                <p>Use the online tool called <a href="https://www.dcode.fr/caesar-cipher">"Dcode"</a> for the Caeser Cipher Decryption</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fa fa-file-word"></i>
                <h3>Wordlist</h3>
                <p>Create a wordlist of decrypted words and use Burp suite to check them</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fa fa-bolt"></i>
                <h3>Attack type</h3>
                <p>Set the attack type (burp Suite) as Sniper and use the username as Level_05</p>
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
                    <img src="images/CaserCipherblog1.png" alt="">
                </div>
                <div class="content">
                    <a href="http://practicalcryptography.com/ciphers/caesar-cipher/"
                        class="link">Caesar Cipher</a>
                    <p>The Caesar cipher is one of the earliest known and simplest ciphers. It is a type of substitution cipher in which each letter in...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/CaserCipherblog2.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.geeksforgeeks.org/caesar-cipher-in-cryptography/"
                        class="link">Caesar Cipher in Cryptography</a>
                    <p>The Caesar Cipher technique is one of the earliest and simplest methods of encryption technique. It’s simply a type of substitution...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/CaserCipherblog3.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.boxentriq.com/code-breaking/caesar-cipher"
                        class="link">Caesar Cipher Decoder, Solver...</a>
                    <p>The Caesar cipher, also known as a shift cipher, Caesar's code, or Caesar shift is one of the oldest and most famous ciphers in... </p>
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
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
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