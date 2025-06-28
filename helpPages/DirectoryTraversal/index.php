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
            <img src="images/2.png" style="float: left; margin-right: 1px; margin-bottom: -20px" width="430px"
                height="450px">

            <div class="content" data-aos="fade-left" data-aos-delay="600" style="margin-top: 6rem;">
                
                <h3>Directory Traversal</h3>
                
                <span>What is a Directory Traversal attack?</span>
                
                <p>
                    Properly controlling access to web content is crucial for running a secure web server. Directory traversal or Path Traversal is an HTTP attack that allows attackers to access restricted directories and execute commands outside of the web server’s root directory.
                    Web servers provide two main levels of security mechanisms:<br><br> <b>1. Access Control Lists (ACLs)<br> 2. Root directory</b><br><br>
                    An Access Control List is used in the authorization process.

                    It is a list that the administrator of the web server uses to specify which users or groups have access permissions to view, modify, or execute specific files on the server.
                    The root directory is a specific directory on the server file system in which the users are confined. Nothing above this root is accessible to users.
                    For example: the default root directory of IIS on Windows is <b>C:\Inetpub\wwwroot</b> and with this setup, a user does not have access to <b>C:\Windows</b> but has access to <b>C:\Inetpub\wwwroot\news</b> and any other directories and files under the root directory (provided that the user is authenticated via the ACLs).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/DT1.png" alt="">
                    </div>
                </p>
                
                <p>
                    The root directory prevents users from accessing any files on the server such as <b>C:\WINDOWS/system32/win.ini</b> on Windows platforms and the <b>/etc/passwd</b> file on Linux/UNIX platforms.
                    The web application code or the web server software itself may both contain this vulnerability.
                    An attacker only requires a web browser and some knowledge on where to look for any default files and directories on the system in order to conduct a directory traversal attack.
                </p><br><br>
                
                <span>What an attacker can do if your website is vulnerable</span>
                
                <p>
                    With a system vulnerable to directory traversal, an attacker can make use of this vulnerability to step out of the root directory and access other parts of the file system. This might give the attacker the ability to view restricted files, which could provide the attacker with more information required to further compromise the system.
                    Depending on how the website access is configured, the attacker may run commands by pretending to be a user connected to "the website." Therefore, everything depends on what parts of the system the website user has access to.
                </p><br><br>
                
                <span>Example of a Directory Traversal attack via web application code</span>
                
                <p>
                    In web applications with dynamic pages, input is usually received from browsers through GET or POST request methods. An example of an HTTP GET request URL is provided below.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/DT2.png" alt="">
                    </div>
                </p>
  
                <p>
                    With this URL, the browser requests the dynamic page <b>show.asp</b> from the server and with it also sends the parameter <b>view</b> with the value of <b>oldarchive.html</b>. When this request is executed on the web server, <b>show.asp</b> retrieves the file <b>oldarchive.html</b> from the server’s file system, renders it and then sends it back to the browser which displays it to the user. The attacker would assume that show.asp can retrieve files from the file system and sends the following custom URL.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/DT3.PNG" alt="">
                    </div>
                </p>

                <p>
                    This will cause the dynamic page to retrieve the file <b>system.ini</b> from the file system and display it to the user. The expression <b>../</b> instructs the system to go one directory up which is commonly used as an operating system directive. The attacker has to guess how many directories he has to go up to find the Windows folder on the system, but this is easily done by trial and error.
                </p><br><br>
                
                <span>Example of a Directory Traversal attack via web server</span>
                
                <p>
                    Aside from coding vulnerabilities, directory traversal attacks can also target the web server itself. Either the web server software or some sample script files that were left on the server may contain the issue.
                    Although the vulnerability has been patched in the most recent releases of web server software, earlier versions of IIS and Apache are still in use on certain online web servers, making them vulnerable to directory traversal attacks. Even if the web server software you're using has a remedy for this issue, there may still be certain sensitive default script directories exposed that hackers are aware of.
                    For example, a URL request which makes use of the scripts directory of IIS to traverse directories and execute a command can be:
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/DT4.PNG" alt="">
                    </div>
                </p>

                <p>
                    The request would return to the user a list of all files in the <b>C:\</b> directory by executing the <b>cmd.exe</b> command shell file and run the command <b>dir c:\</b> in the shell. The <b>%5c</b> expression that is in the URL request is a web server escape code which is used to represent normal characters. In this case <b>%5c</b> represents the character <b>\</b>.
                    Newer versions of modern web server software check for these escape codes and do not let them through. Some older versions however, do not filter out these codes in the root directory enforcer and will let the attackers execute such commands.
                </p><br><br>

                <span>How to check for Directory Traversal vulnerabilities</span>
                
                <p>
                    A web vulnerability scanner is the ideal tool to use when determining whether your website and web applications are vulnerable to directory traversal attacks. A web vulnerability scanner automatically scans the entirety of your website for directory traversal vulnerabilities. The vulnerability and an easy patch will be reported. A web application scanner will also look for SQL injection, Cross-site Scripting, and other web vulnerabilities in addition to directory traversal vulnerabilities.
                </p><br><br>
                
                <span>Preventing Directory Traversal attacks</span>

                <P>
                    First of all, ensure you have installed the latest version of your web server software, and sure that all patches have been applied. Next, thoroughly filter all user input. Ideally remove everything but the known good data and filter meta characters from the user input. This will make sure that the server receives only the information that should be entered in the field.
                </P><br>

                <h3>Demonstration of finding directories Using DirBuster</h3>
                
                <p>
                    Understanding a website's structure, directories, and files is important before we attempt to attack it. By doing this, we can start to sketch out the most successful attack method.
                    Additionally, by understanding what files and directories are present, we might be able to locate any confidential or hidden directories or files that the webmaster does not intend for the general public to view or have access to. These could end up becoming the main focus of our work.<br><br>
                    
                    The techniques used by DirBuster are actually fairly easy. You give it a wordlist (it comes with many; you only need to choose the one you want to use) and direct it at a URL and a port (often port 80 or 443). Following that, it makes HTTP GET requests to the website and waits for a response.
                    If the URL elicits a positive response (in the 200 range), it knows the directory or file exists. If it elicits a "forbidden" request, we can probably surmise that there is a directory or file there and that it is private. This may be a file or directory we want to target in our attack.<br><br>

                    Now, let's get started using DirBuster. In this demonstration, we are going to Kali Linux. Since Kali linux comes with DirBuster GUI application, it's not necessary to download or install any software.   
                    Let's start by opening Kali and then opening DirBuster. We can find DirBuster at Applications -> Kali Linux -> Web Applications -> Web Crawlers -> dirbuster, as seen in the screenshot below.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/DT5.jpg" alt="">
                    </div>
                </p>

                <p>
                    When we click on "dirbuster", it opens with a GUI like that below.  The name of the website we wish to scan should be typed in first. For this demonstration, we are going to use "SANS" website which is one of the world's leading IT security training and consulting firms.  Just enter the port number (usually 80 for HTTP and 443 for HTTPS) and the URL of the website you wish to scan (http://sans.org:80). In this instance, port 80 will be scanned (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/DT6.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    The next step is to choose a wordlist we want to use to find the directories and files. Go to the center of the GUI where it says "files with lists of dir/files" and click on "List Info" in the bottom far right. When you do, it will open a screen like that below listing all the available wordlists with a short description.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/DT7.jpg" alt="">
                    </div>
                </p>

                <p>
                    Simply choose the list you want to use and enter into the "File with dir/file" field in the GUI. Here, we have selected to use: <b>/usr/share/dirbuster/wordlists/directory-list-2.3-medium.txt</b>
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/DT8.jpg" alt="">
                    </div>
                </p>

                <p>
                    The "Start" button is all that needs to be done at the last stage. As soon as we do that, DirBuster will start making GET requests and sending them to the URL we've chosen, asking for all of the files and directories that are listed in our wordlist.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/DT9.jpg" alt="">
                    </div>
                </p>

                <p>
                    You can see that after three hours of running, DirBuster has started to create a directory structure for the www.sans.org website based on the responses to the requests.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/DT10.jpg" alt="">
                    </div>
                </p>
                
                <p>
                    This demonstration explains how simple it is to scan hidden directories and files in a website by using DirBuster. DirBuster is another tool we can use to do reconnaissance on target websites before attacking. Our chances of success increase with the amount of information we have.
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
                <i class="fa fa-power-off"></i>
                <h3>DirBuster</h3>
                <p>Scan hidden directories and files by using DirBuster tool</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fa fa-file-word"></i>
                <h3>Wordlist</h3>
                <p>use DirBuster's wordlist called "directory-list-2.3-small.txt"</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fa fa-unlock"></i>
                <h3>Attack type</h3>
                <p>open the files in the found directory and get the password</p>
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
                    <img src="images/DTBlog1.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.invicti.com/blog/web-security/directory-path-traversal-attacks/"
                        class="link">How to Prevent Directory Traversal Attacks</a>
                    <p>Directory traversal, also called path traversal, is a vulnerability that allows attackers to break out of a web server’s root directory...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/DTBlog2.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.geeksforgeeks.org/what-is-a-directory-traversal-attack/"
                        class="link">What is a Directory Traversal Attack?</a>
                    <p>Directory Traversal Attack is a kind of Brute-force attack which will give potential access to restricted files and directories. This attac...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/bruteforceblog3.png" alt="">
                </div>
                <div class="content">
                    <a href="https://ourcodeworld.com/articles/read/417/how-to-list-directories-and-files-of-a-website-using-dirbuster-in-kali-linux"
                        class="link">How to list Directories and Files of a Website using DirBuster in...</a>
                    <p>DirBuster is a multi threaded java application designed to brute force directories and files names on web/application servers. Often... </p>
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
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
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
            offset: 150,
        });

    </script>

</body>

</html>