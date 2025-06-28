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
            <img src="images/m2.png" style="float: left; margin-right: 1px; margin-bottom: -50px" width="430px"
                height="450px">

            <div class="content" data-aos="fade-left" data-aos-delay="600" style="margin-top: 6rem;">
                
                <h3>SQL Injection (SQLi)</h3>
                
                <span>What is SQL Injection</span>
                
                <p>
                    SQL Injection (SQLi) is a type of an injection attack that makes it possible to execute malicious SQL statements. These statements control a database server behind a web application. SQL Injection vulnerabilities allow 
                    attackers to bypass application security measures. The full content of a SQL database can be retrieved by getting past authentication and authorization of a web page or web application. They can also add, modify, and delete records in the database using SQL Injection.
                    
                    Any website or web application that makes use of a SQL database, such as MySQL, Oracle, SQL Server, or another one, may be vulnerable to a SQL Injection vulnerability. Criminals may use it to gain unauthorized access to your sensitive data such as customer information, 
                    personal data, trade secrets, intellectual property, and more. One of the oldest, most common, and most harmful web application vulnerabilities are SQL Injection attacks. Injections are ranked as the number one threat to web application security by the OWASP 
                    organization (Open Web Application Security Project) in their list of the top 10 threats for 2017.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL1.png" alt="">
                    </div>
                </p><br>
                
                <h3>How and Why Is an SQL Injection Attack Performed</h3>
                
                <p>
                    An attacker must first locate vulnerable user inputs within the web page or web application in order to launch a SQL Injection attack. A web page or web application that has an SQL Injection vulnerability uses such user input directly in an SQL query. The attacker 
                    has the ability to input content. This content is the main component of the attack and is frequently referred to as a malicious payload. After the attacker sends this content, malicious SQL commands are executed in the database.
                    A query language called SQL was created specifically to manage data kept in relational databases. It allows you to view, modify, and delete data. Many web applications and websites store all the data in SQL databases. In some circumstances, you can also execute operating system 
                    commands using SQL commands. Thus, a successful SQL Injection attack may result in very bad outcomes. 
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL2.png" alt="">
                    </div>
                </p>
                
                <p>
                    Here are some of the serious consequences of SQL Injection attack:<br><br>

                    1. SQL Injections can be used by attackers to discover other users' login credentials in the database. They can then impersonate these users. The impersonated user could have full database administrator privileges.<br><br>
                    2. You can choose which data to output from the database using SQL. An attacker may be able to access all the data on a database server through a SQL Injection vulnerability.<br><br>
                    3. SQL also enables you to add new data and change existing data in a database. For example, in a financial application, an attacker could use SQL Injection to alter balances, void transactions, or transfer money to their account.<br><br>
                    4. You can drop tables and delete records from a database using SQL. Even if the database administrator creates backups, data deletion may reduce the availability of an application until the database is restored. Additionally, backups could not include the newest data.<br><br>
                    5. Some database servers allow you to use the database server to access the operating system. Whether this was done on purpose or by mistake. Such an attack could start with a SQL Injection and move on to attack the internal network protected by a firewall.<br><br>
                </p>
                
                <h3>Types of SQL Injection</h3>
                
                <p>
                    There are several types of SQL Injection attacks: in-band SQLi (Error-based and Union-based), blind SQLi (Boolean-based and Time-based), and out-of-band SQLi.

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL3.png" alt="">
                    </div>
                </p>

                <p>
                    <b>1. In-band SQLi:</b> The attackers launch and gather data from attacks using the same communication channel.
                    Union-based SQL injection and error-based SQL injection are the two most frequent types of in-band SQL injections.<br><br>

                    Error-based SQL injection - Here, the attacker carries out specific actions that trigger error messages to be produced by the database. Using the error message, you can identify what database it utilizes, the version of the server where the handlers are located, etc.<br><br>
                    Union-based SQL injection - Here, the UNION SQL operator is used in combining the results of two or more select statements generated by the database, to get a single HTTP response. In order to try to produce a response, you can either craft your queries within the URL or combine several statements within the input fields.<br><br>

                    <b>2. Blind SQLi:</b> Here, it does not transfer the data via the web application. The attacker cannot see the result of an attack in-band. Here are the 2 types of Blind SQLi,<br><br>

                    Boolean-based SQL Injection - Here, the attacker will send an SQL query to the database asking the application to return a different result depending on whether the query returns True or False.<br><br>

                    Time-based SQL Injection - In this attack, the attacker sends a SQL query to the database, causing the database to hold the results for a predetermined period of time before returning them. The attacker uses the response time to determine if a query is True or False.<br><br>
                
                    <b>3. Out-of-bound SQL Injection:</b> Out-of-bound is not so popular, as it depends on the features that are enabled on the database server being used by the web applications. It can be like a misconfiguration error by the database administrator.
                </p><br>
                
                <h3>Example of a Union-Based SQL Injection</h3>

                <p>
                    The UNION operator is used in one of the most common varieties of SQL Injection. It allows the attacker to combine the results of two or more SELECT statements into a single result. It is known as union-based SQL Injection.
                    This method is demonstrated in the following. It takes advantage of the intentionally insecure website <b>testphp.vulnweb.com</b>, which Acunetix hosts. The following HTTP request is a normal request that a legitimate user would send: <br><br>

                    <b>
                    GET http://testphp.vulnweb.com/artists.php?artist=1 HTTP/1.1<br>
                    Host: testphp.vulnweb.com
                    </b>

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL4.png" alt="">
                    </div>
                </p>
                
                <p>
                    The <b>artist</b> parameter is vulnerable to SQL Injection. The following payload modifies the query to look for an inexistent record. It sets the value in the URL query string to <b>-1</b>. Of course, it could be any other 
                    value that does not exist in the database. However, a negative value is a good guess because an identifier in a database is rarely a negative number.
                    The <b>UNION</b> operator is frequently used in SQL Injection to attach on a malicious SQL query to the original one that was meant to be executed by the web application. The results of the original query and the inserted query will be combined. The attacker can now get column values from other tables thanks to this.<br><br>

                    <b>
                    GET http://testphp.vulnweb.com/artists.php?artist=-1 UNION SELECT 1, 2, 3 HTTP/1.1<br>
                    Host: testphp.vulnweb.com
                    </b>

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL5.png" alt="">
                    </div>
                </p>
               
                <p>
                    The example below demonstrates how a SQL Injection payload could be used to extract more useful information from this purposefully vulnerable website:<br><br>

                    <b>
                    GET http://testphp.vulnweb.com/artists.php?artist=-1 UNION SELECT 1,pass,cc FROM users WHERE uname='test' HTTP/1.1<br>
                    Host: testphp.vulnweb.com
                    </b>
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL6.png" alt="">
                    </div>
                </p><br>
                
                <h3>Demonstration of a SQL Injection</h3>
                
                <p>
                    In this demonstration, we are going to look at how an attacker can use an SQL Injection vulnerability to go around application security and authenticate as a valid user.
                    Also, we are going to use "OWASP Broken Web Applications Project" for this demonstration. First we have to set up the "OWASP Broken Web Applications Project" in our local machine. Here are the steps:<br><br>

                    <b>Step 01:</b> Search for "owasp broken web apps" in Google Chrome or any other web browser.<br>
                    <b>Step 02:</b> Click on the sourceforge.net link<br>
                    <b>Step 03:</b> To download the "OWASP Broken Web Applications Project", choose the Download option (see below image).

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL7.PNG" alt="">
                    </div>
                </p>

                <p>
                    The Open Web Application Security Project, which periodically publishes the top 10 threats that an application will encounter for a specific year, developed this application. It distributes a number of web apps that are weakly secured on a virtual machine.
                    This project includes vulnerabilities that allow users to practice and improve their understanding of SQL injection.
                    Also, remember It is illegal to use SQL Injection on any website in the real world.<br><br>

                    <b>Step 04:</b> Open the OWASP Broken Web Apps virtual machine on a VMware workstation after downloading it.<br>
                    <b>Step 05:</b> check the machine's IP address. In this example, It is 192.168.71.132 (see below image).
                    <br><br>
                    
                    <div style="text-align: center;">
                        <img src="images/SQL8.png" alt="">
                    </div>
                </p>
                
                <p>
                    <b>Step 06:</b> Once you got the IP address, Open it on a browser.<br>
                    <b>Step 07:</b> Applications for training, realistic and purposefully vulnerable applications are available. Along with other things, you can find outdated versions of real applications as well (see below images).  
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL9.png" alt="">
                        <img src="images/SQL10.png" alt="">
                        <img src="images/SQL11.png" alt="">
                    </div>
                </p>
                
                <p>
                    We are going to use "Mutillidae II" application for this demonstration (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL12.png" alt="">
                    </div>
                </p>
                
                <p>
                    <b>Step 08:</b> The OWASP top 10 threats for 2013, 2010, and 2007 are displayed on the left. Click on SQLi - Bypass Authentication > Login (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL13.png" alt="">
                    </div>
                </p>
                
                <p>
                    You'll get a standard login and authentication page that any application would require (see below image).

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL14.png" alt="">
                    </div>
                </p>
                
                <p>
                    We have successfully created our lab. Let's perform the SQL injection now. Suppose you enter an anonymous username and password, that won’t allow you to log in (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL15.png" alt="">
                    </div>
                </p>
                
                <p>
                    Let's try logging in again after entering a SQL statement in the username (see below image).<br><br>

                    My Username will be: <b>‘ or 1=1 --</b><br>
                    Click on Login<br>
                    You will log in this time with a status update saying that the user has been authenticated.

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL16.png" alt="">
                    </div>
                </p>
                
                <p>
                    The single quote <b>(‘)</b> is an operator that goes to the database server, selects the default user tables, and 
                    compares it to the condition that is given. That condition that you gave was <b>1=1</b>, which is always true. So, it selected the default user table that was available in the database, and instead of comparing it to a password, it compared it to the condition.
                    But If you give a false condition like 1=2, you will get an error message “Account does not exist”.
                    As seen in the below image, now we have successfully logged in and you can see that there is a updated status saying that the user has been authenticated.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/SQL17.png" alt="">
                    </div>
                </p>
                
                <p>
                    Now that you've seen an example of how to log into an application using a SQL query. And also, this demonstration explains how simple it is to carry out a SQL Injection attack.
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
                <i class="fa fa-star"></i>
                <h3>Burp Suite/OWASP ZAP</h3>
                <p>Use Burp Suite/OWASP ZAP. It will help you to inject multiple SQL Injection queries</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fa fa-tags"></i>
                <h3>SQLi queries</h3>
                <p>Use this wordlist of SQL Injection payloads</p>
                <a href="../../exploitation_resources/SQL_injection_payload/SQL_injection_payload.txt" download='SQL_injection_payload.txt' class="download-btn">Download the SQL Injection Payloads Wordlist</a>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fa fa-rocket"></i>
                <h3>Attack type</h3>
                <p>Set the attack type (burp Suite) as Sniper and use the username as Level_9</p>
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
                    <img src="images/SQLBlog1.png" alt="">
                </div>
                <div class="content">
                    <a href="https://portswigger.net/web-security/sql-injection"
                        class="link">SQL injection</a>
                    <p>In this section, we'll explain what SQL injection (SQLi) is, describe some common examples, explain how to find and exploit va...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/SLQBlog2.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.invicti.com/blog/web-security/sql-injection-vulnerability/"
                        class="link">What is SQL Injection?</a>
                    <p>What is SQL injection? The SQL injection vulnerability allows malicious hackers to inject arbitrary code in SQL queries, thus being ab...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/SQLBlog3.png" alt="">
                </div>
                <div class="content">
                    <a href="https://securetriad.io/sql-injection-attack/"
                        class="link">SQL Injections - Attacks and Pr...</a>
                    <p>Structured Query Language or SQL injection is another word associated with computer hacking. It is deliberately formulated in a wa... </p>
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
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
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