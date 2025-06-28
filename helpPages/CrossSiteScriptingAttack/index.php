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
            <img src="images/b4.png" style="float: left; margin-right: 1px; margin-bottom: -50px" width="430px"
                height="450px">

            <div class="content" data-aos="fade-left" data-aos-delay="600" style="margin-top: 6rem;">
                
                <h3>Cross Site Scripting (XSS)</h3>
                
                <span>Introduction to XSS Attack</span>
                
                <p>
                    A cross-Site Scripting attack involves the injection of malicious code into the victim's browser. The malicious script can be saved on the webserver and run every time the user invokes the relevant functionality. 
                    It can also be done using the other techniques, without any saved scripts on the webserver. The primary goal of this attack is to steal the identifying data of the other user - cookies, session tokens, and other information. 
                    Most of the time, this approach is used to steal the other person's cookies. Cookies, as we all know, assist us in automatically logging in. As a result, we can log in with the other identities using stolen cookies. This is one of the reasons why this attack is regarded as one of the most dangerous.
                    On the client side, an XSS attack is being carried out. It can be done using a variety of client-side programming languages such as Javascript, HTML, VBScript, Flash, etc. However, Javascript and HTML are the most commonly used languages for carrying out this attack.
                    
                    A cross-site scripting attack entails the sending and injection of malicious code or script. Client-side programming languages such as Javascript, HTML, VBScript, Flash, and others are commonly used to create malicious code. However, Javascript and HTML are the most commonly used tools for carrying out this attack.
                    This attack can be carried out in a variety of ways. The malicious script may be reflected on the victim's browser or stored in the database and run every time the user contacts the proper function, depending on the type of XSS attack.<br><br>
                    The main reason for this attack is inappropriate user input validation, where malicious input can get into the output.  A malicious user can enter a script that will be injected into the code of the website. The browser is then unable to determine whether the executed code is malicious or not.
                    As a result, a malicious script is performed on the victim's browser or a fake form is displayed to the users. XSS attacks can take various different shapes.

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/XSS1.png" alt="">
                    </div>
                </p>
                    
                <p>
                    The following are the most common forms of Cross Site Scripting:<br><br>

                    1. Cross Site Scripting can happen when a malicious script is run on the client side.<br>
                    2. Fake page or form displayed to the user (where the victim types credentials or clicks a malicious link).<br>
                    3. On websites that have advertisements shown.<br>
                    4. Malicious emails were delivered to the victim.<br><br>

                    This attack occurs when a malicious user discovers vulnerable elements of a website and transmits them as malicious input. A malicious script is injected into the code and then delivered to the end user.
                    Let's look at a simple example, consider the following scenario: we have a website with a search area.

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/XSS2.jpg" alt="">
                    </div>
                </p>

                <p>
                    If the search field is vulnerable, any script entered by the user will be executed. Consider the following scenario, a user enters a very simple script:<br><br>
                    <b>&lt;script&gt;alert(‘XSS’)&lt;/script&gt;</b>

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/XSS3.jpg" alt="">
                    </div>
                </p>

                <p>
                    The entered script will then be executed after pressing the "Search" button.

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/XSS4.jpg" alt="">
                    </div>
                </p>

                <p>
                    The script typed into the search field is performed, as shown in the example. This just demonstrates the XSS attack's weakness. However, a more dangerous script might be typed as well.
                    Many testers confuse Cross Site Scripting attacks with Javascript Injection, which is also done on the client side. The malicious script is inserted in both attacks. However, in the case of an XSS attack, <b>&lt;script&gt;</b> tags are not required to run the script.<br><br>
                    For Example: <b>&lt;body onload=alert(‘something’)&gt;;</b><br><br>
                    Also, it can be a script executed on the other event.<br>

                    For Example: On a mouse hover.<br>

                    <b>&lt;b onmouseover=alert(‘XSS testing!‘)&gt;&lt;/b&gt;</b><br><br>

                    Let us look at another example, consider this: we have a page on the website that displays the most recent book review. The code for this page will look like this:<br><br>
                    
                    <b>
                        print "&lt;html&gt;"<br>
                        print "&lt;h1&gt;Latest book review&lt;/h1&gt;"<br>
                        print database.latestReview<br>
                        print "&lt;/html&gt;"<br><br>
                    </b>

                    As a result, if a malicious user puts something harmful in the review form, it will be loaded on this page.
                    Consider the following scenario: A hacker enters the following code in the review field.<br><br>

                    <b>&lt;script&gt;destroyWebsite();&lt;/script&gt;</b><br><br>

                    Then, when the page loads, the function destroyWebsite(); is invoked, and it does its harmful operations.
                    As most of us are aware, this method is mostly used to collect the other person's cookies, which can then be used to log in with other identities. Let's look at another example of a probable XSS script with cookie stealing.<br><br>
                    For example, the hacker injects the proper code into the vulnerable website's field.<br><br>

                    <b>
                        &lt;script type=”text/javascript”&gt;<br>
                        var test=’../example.php?cookie_data=’+escape(document.cookie);<br>
                        &lt;/script&gt;<br><br>
                    </b>

                    As seen in the indicated Example, cookies are escaped and sent to example.php script’s variable ‘cookie_data’. If a malicious user injects this script into the website's code, it is executed in the user's browser and cookies are transferred to the malicious user.
                </p><br>
                
                <h3>Types of Cross Site Scripting Attacks</h3>
                
                <p>
                    The primary goal of an XSS attack is to steal another person's identity. As previously said, it could be cookies, session tokens, or other similar data. XSS can also be used to present fake pages or forms to the victim. This attack, however, can be carried out in a variety of ways.
                    As stated below, this attack is separated into three major categories:<br><br>

                    
                    <b>1. Reflected XSS</b> - This type of attack occurs when a malicious script is not saved on the webserver but instead appears in the website's results.<br>
                    <b>2. Stored XSS</b> - This attack occurs when a malicious script is permanently saved on the webserver.<br>
                    <b>3. DOM</b> - This happens when the DOM environment changes but the code remains the same.<br><br>

                    Let's take a closer look at them.
                </p><br><br>
                
                <span>1. Reflected XSS</span>
                
                <p>
                    This happens when the malicious code is executed and the malicious results are returned. The reflected XSS code is not saved permanently. In this instance, the harmful code appears in any webpage result. The attack code could be embedded in the forged URL or HTTP parameters.
                    It can harm the victim in a variety of ways, like showing a fake harmful page or sending a malicious email. 
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/XSS7.png" alt="">
                    </div>
                </p>
                
                <p>
                    Consider the following example: we have a login page where the user must enter his username and password.

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/XSS5.jpg" alt="">
                    </div>
                </p>

                <p>
                    When incorrect credentials are entered into some websites, an error message such as "Sorry, your username or your credentials are incorrect" is displayed.
                    In this example, the username is a parameter that is typed by the user in the login form. Including the username parameter in the output is a mistake. An attacker can then type the malicious script rather than the correct username or email address.

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/XSS6.jpg" alt="">
                    </div>
                </p>

                <p>
                    For instance, it could be a script that is delivered to the user's malicious email letter, where the victim clicks on the fake link.
                </p><br><br>
                
                <span>2. Stored XSS</span>
                                
                <p>
                    This attack is more dangerous and causes more damage. In this form of attack, the malicious code or script is saved on the webserver (for example, in the database) and is run each time a user invokes the necessary feature. As a result, stored XSS attacks can harm a large number of users. 
                    Furthermore, because the script is stored on the webserver, it will have an extended impact on the website. To carry out a stored XSS attack, the malicious script must be transmitted through the vulnerable input form (For Example, the comment field or review field). As a result, the appropriate script will be saved in the database and run upon page load or function call.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/XSS8.png" alt="">
                    </div>
                </p>
                
                <p>
                    Consider this: we have a website that displays the most recent user feedback. As a result, the script displayed below would be entered in the opinion or comment section.<br><br>

                    <b>&lt;script&gt;alert(document.cookie)&lt;/script&gt;</b><br><br>
                    
                    It will be saved in the database and run when the page is loaded, as the most recent user opinion will be presented. If a website is vulnerable to XSS, a page load popup window containing cookies will appear. This script is simple and less dangerous. Instead of this script, a more dangerous code might be entered.
                    Cookies, for example, may be sent to the malicious user, or a fake page may be shown in the victim's browser.
                </p><br><br>

                <span>3. DOM XSS</span>

                <p>
                    This form of attack happens when the DOM environment changes but the client-side code remains unchanged. When the DOM environment in the victim's browser is modified, the client side code executes differently. 
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/XSS10.png" alt="">
                    </div>
                </p>

                <p>
                    Let us examine the following example to gain a better picture of how an XSS DOM attack is carried out. Consider the following URL: <b>http://testing.com/book.html?default=1</b>. As we all know, <b>"default"</b> is a parameter with the value <b>"1"</b>. As a result, in order to carry out an XSS DOM attack, we would send a script as a parameter.<br><br>
                    For Example:<b> http://testing.com/book.html?default=&lt;script&gt;alert(document.cookie)&lt;/script&gt;</b><br><br>
                    In this Example, the request is sent for the page <b>book.html?default=&lt;script&gt;alert(document.cookie)&lt;/script&gt;</b> to <b>testing.com</b>. Therefore for that page, a DOM object is being created by the browser, where the document location object will contain the appropriate string.<br><br>

                    <b>http://testing.com/book.html?default=&lt;script&gt;alert(document.cookie)&lt;/script&gt;</b>

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/XSS9.jpg" alt="">
                    </div>
                </p>

                <p>
                    In this manner, the DOM environment is affected. Of course, anything more dangerous may be entered instead of this basic script.
                </p><br>

                <h3>Ways to Prevent XSS</h3>

                <p>
                    Despite the fact that this is one of the most harmful and risky types of attacks, a prevention strategy should be developed. Because of the attack's prevalence, there are numerous techniques to prevent it. Main preventative strategies that are commonly employed include:<br><br>
                    
                    <b>
                        1. Data validation<br>
                        2. Filtering<br>
                        4. Escaping<br><br>
                    </b>

                    Input validation is the first step in preventing this attack. Because the user's input may find its way to the output, everything entered by the user should be precisely checked. Data validation is the foundation for ensuring the system's security. we would like to remind you that the purpose of validation is to prevent inappropriate input.
                    As a result, it only helps to reduce risks, but it may not be enough to prevent the potential XSS vulnerability.<br><br>

                    User input filtering is another effective preventative approach. The concept behind the filtering is to look for potentially dangerous terms in the user's input and eliminate or replace them with empty strings. Those keywords may be:<br><br>

                    <b>
                        1. &lt;script&gt;&lt;/script&gt; tags<br>
                        2. Javascript commands<br>
                        3. HTML markup<br><br>
                    </b>

                    Input filtering is a simple process. It can also be done in a variety of ways, like:<br><br>

                    <b>
                        1. Server-side code has been written by developers.<br>
                        2. Aappropriate programming language library is used.<br><br>
                    </b>

                    In this instance, some developers write their own code to search for and eliminate relevant keywords. The easier solution, however, would be to choose an appropriate programming languages library to filter the user's input. we would like to add that using libraries is a more reliable method because those libraries have been used and evaluated by many developers.<br><br>
                    Characters escaping is another possible preventive approach. Special codes are used in this practice to modify relevant characters. It is important to know, that we can find appropriate libraries to escape the characters.Meanwhile, good testing should not be overlooked. It should be invested in the knowledge of excellent software testers as well as dependable software testing instruments. This ensures that good software quality is maintained.
                </p><br><br>

                <span>Prevention According to Technologies</span>

                <p>
                    As previously stated, the primary preventative strategies are filtering and character escape. It can, however, be done differently in other programming languages. Some programming languages have filtering libraries, whereas others do not. It should be noted that filtering is fairly simple with the Java and PHP programming languages, since they provide proper libraries for it.
                    Because Java technology is so widely utilized, there are numerous solutions. If you are utilizing Spring technology and want to escape HTML for the entire application, you must enter the necessary code in the project's web.xml file.<br><br>

                    <b>
                        &lt;context-param&gt;<br>
                        &lt;param-name&gt;defaultHtmlEscape&lt;/param-name&gt;<br>
                        &lt;param-value&gt;true&lt;/param-value&gt;<br>
                        &lt;/context-param&gt;<br><br>
                    </b>

                    This code will disable HTML escaping throughout the program. If you want to change the HTML escaping for the forms on the appropriate page, write the code as follows:<br><br>

                    <b>&lt;spring:htmlEscape defaultHtmlEscape="true" /&gt;</b><br><br>

                    There are many ready XSS filters in the form of a .jar file. we would  like to remind you that the .jar file must be included to your project before its libraries can be utilized. xssflt.jar, a servlet filter, is one such XSS filter. This .jar file is readily acquired from the internet and imported into your project.
                    This filter examines each request provided to the application and cleans it of any potential injection. When adding an external.jar file to the project, it must also be defined in the web.xml file:<br><br>

                    <b>
                        &lt;filter&gt;<br>
                        &lt;filter-name&gt;XSSFilter&lt;/filter-name&gt;<br> 
                        &lt;filter-class&gt;com.cj.xss.XSSFilter&lt;/filter-class&gt;<br> 
                        &lt;/filter&gt;<br><br>
                    </b>

                    Another option is to use the ESAPI library. The ESAPI library is compatible with a wide range of programming languages. ESAPI libraries are available for the Java and PHP programming languages. It is an open-source and free library that aids with application security control.
                    As a conclusion, It is strongly advised to analyze the dangers that may result from XSS attacks while testing.<br><br> XSS attacks can also impact online apps that appear to be secure.
                    It is regarded as one of the most dangerous and perilous attacks. As a result, we should not overlook this form of testing. It is critical to understand the XSS attack while undertaking testing against it. And this is the foundation for correctly analyzing the testing results and selecting the suitable testing tools.
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
                <i class="fa fa-gavel"></i>
                <h3>Burp Suite/OWASP ZAP</h3>
                <p>Intercept the HTTP requests by using Burp Suite or OWASP ZAP</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fa fa-cart-arrow-down"></i>
                <h3>Use the given code</h3>
                <p>Insert the given code into the username parameter in Burp Suite</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fa fa-crosshairs"></i>
                <h3>Attack type</h3>
                <p>Set the attack type as Sniper and start the attack (check the response tab) </p>
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
                    <img src="images/XSSB1.png" alt="">
                </div>
                <div class="content">
                    <a href="https://portswigger.net/web-security/cross-site-scripting"
                        class="link">Cross-site scripting</a>
                    <p>In this section, we'll explain what cross-site scripting is, describe the different varieties of cross-site scripting vulnerabilities, and spell...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/XSSB2.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.veracode.com/security/xss"
                        class="link">Cross-Site Scripting: XSS Chea...</a>
                    <p>Cross-site scripting attacks, also called XSS attacks, are a type of injection attack that injects malicious code into otherwise safe w...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/XSSB3.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.acunetix.com/websitesecurity/cross-site-scripting/"
                        class="link">Cross-site Scripting (XSS)</a>
                    <p>Cross-site Scripting (XSS) is a client-side code injection attack. The attacker aims to execute malicious scripts in a web browser o...</p>
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
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
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