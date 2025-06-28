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
            <img src="images/m6.png" style="float: left; margin-right: 1px; margin-bottom: -50px" width="430px"
                height="450px">

            <div class="content" data-aos="fade-left" data-aos-delay="600" style="margin-top: 6rem;">
                
                <h3>File Upload Vulnerability</h3>
                
                <span>What Are File Upload Vulnerabilities?</span>
                
                <p>
                    Before we discuss how to exploit file upload vulnerabilities, it's important to have a basic understanding of what the file upload functions are. Users can upload files to the file system of the web server 
                    using file upload functions. Some restrictions may apply to file upload functions (for example only JPG files are allowed to upload). So what happens if we manage to upload a PHP file to the web server with a file upload function that only accepts JPG? This is where file upload vulnerabilities arise.
                    A file upload vulnerability allows attackers to inject malicious content into the application server. Also known as an unrestricted file upload, an attack is triggered by either tricking a victim user into uploading an arbitrary file or by uploading it directly through a file upload service that does not validate the type of file used. 
                    
                    When files are not uploaded safely, applications are put at danger. Code injection into the target application is frequently the attack's first move. The attacker must figure out how to execute the code after it has been loaded. A file upload assists the attacker in completing the first step. Unrestricted file uploads may lead to defacements, 
                    system/server takeovers, file system and database overloads, and forwarding attacks on back-end systems. This is dependent on the application's handling of the uploaded files and the location of the files' storage.
                    The impact of file upload vulnerabilities depends on a few key factors:<br><br>

                    1. The type and content of the submitted file may occasionally not be correctly validated by the website. By doing so, attackers are able to upload a file that contains server-side code (web shell). It is exceedingly dangerous for the attacker to get control of the server as a result of this.<br><br>
                    2. Attackers can overwrite critical information by submitting a file with the same name if a website doesn't validate the name of submitted files. If the server is also vulnerable to directory traversal, the attacker can overwrite a file from unanticipated locations (for example apache2.conf).<br><br>
                    3. Attackers can quickly fill up the available disk space if the website doesn't adequately verify the submitted file's size. This is a type of DoS attack.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU1.png" alt="">
                    </div>
                </p><br>

                <h3>How To Exploit File Upload Vulnerabilities?</h3>
                
                <p>
                    This section will walk you through "How to Exploit File Upload Vulnerabilities" with a number of useful examples. The lab setups from <a href="https://portswigger.net/">PortSwigger</a> were used as sample examples in this post.
                </p><br><br>

                <span>1. Basic Web Shell Upload</span>
                
                <p>
                    Assume We are now logged in as user "wiener". Our mission is to upload a basic PHP web shell and read the user Carlos' secret. First we have to look for the file upload function in the application (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU2.png" alt="">
                    </div>
                </p>
                
                <p>
                    <b>Step #1:</b> In the user's profile, we have discovered a file upload function (see below image).
                    
                    <br><br>     
                    <div style="text-align: center;">
                        <img src="images/FU3.png" alt="">
                    </div>
                </p><br>

                <p>
                    <b>Step #2:</b> After locating the file upload function, we create a PHP file that contains the code in the screenshot below, allowing us to view the secrets of the user “Carlos”.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU4.png" alt="">
                    </div>
                </p>
                
                <p>
                    <b>Step #3:</b> Now we can upload the PHP file that we created earlier (see below image).                     
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU5.png" alt="">
                    </div>
                </p><br>
                
                <p>
                    <b>Step #4:</b> We must now tell the webserver to execute this file. To accomplish this, we must make a GET request to the previously uploaded file. The image above shows the endpoint for the uploaded folder (/files/avatars/file upload test.php). Make the request and read the secret of the user “Carlos” (see below image). 

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU6.png" alt="">
                    </div>
                </p>
                
                <p>
                    As you can see in the above image, we have successfully performed a file upload attack (Basic Web Shell Upload) and got the secret (the password which is highlighted in the above image's response tab) of the user “Carlos”. Attack Completed!
                </p><br><br>
                
                <span>2. Web Shell Upload via Content-Type Restriction Bypass</span>
                
                <p>
                    In here also, assume We are now logged in as user "wiener". Our mission is to upload a basic PHP web shell and read the user Carlos' secret. First we have to look for the file upload function in the application just like we did in the previous attack.<br><br>            
                    <b>Step #1:</b> We’ve found the same file upload function and tried to upload the same PHP file. Unfortunately, the application has a content-type restriction (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU7.png" alt="">
                    </div>
                </p>
                
                <p>
                    <b>Step #2:</b> The application only supports image/jpeg and image/png content types, as we realized. So we changed the content type to the image/jpeg and the file was successfully uploaded to the <b>/avatars/file_upload.php</b> endpoint (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU8.png" alt="">
                    </div>
                </p><br>
                
                <p>
                    <b>Step #3:</b> Now let's make a GET request for the previously uploaded file. Read the secret of the user “Carlos” (see below image).
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU9.png" alt="">
                    </div>
                </p>
                
                <p>
                    As you can see in the above image, we have successfully performed a file upload attack (Web Shell Upload via Content-Type Restriction Bypass) and got the secret (the password which is in the above image's response tab) of the user “Carlos”. Attack Completed!
                </p><br><br>
                
                <span>3. Web Shell Upload via Directory Traversal</span>

                <p>
                    In here also, assume We are now logged in as user "wiener". Our mission is to upload a basic PHP web shell and read the user Carlos' secret. First we have to look for the file upload function in the application just like we did in the previous attacks.<br><br>
                    <b>Step #1:</b>The first step is to check the file upload function, as was demonstrated in earlier examples. After looking at the function, we discovered that there are no restrictions when it comes to uploading PHP files to the server (see below image).<br><br>
                
                    <div style="text-align: center;">
                        <img src="images/FU10.png" alt="">
                    </div>
                </p>
                
                <p>
                    <b>Step #2:</b> However, the server returned the PHP file's contents as plain text when we made a GET request to the uploaded PHP file (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU11.png" alt="">
                    </div>
                </p>
                
                <p>
                    <b>Step #3:</b> After experimenting with a few bypass methods, we discovered that we could easily upload our PHP file via directory traversal. All that is left to do is alter <b>file_upload_test.php</b> to <b>..%2ffile_upload_test.php</b>. After the change, we can now see that the file was successfully uploaded to the /files directory (the parent directory of /<b>avatars</b>) as seen in the below image.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU12.png" alt="">
                    </div>
                </p>
                
                <p>
                    <b>Step #4:</b> We can now retrieve the user "Carlos"' secret by making a GET request to the <b>/files/avatars/../file_upload_test.php</b> endpoint. A GET request to the endpoint <b>/files/file_upload_test.php</b> also gives us access to the file (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU13.png" alt="">
                        <img src="images/FU14.png" alt="">
                    </div>  
                </p>
                
                <p>
                    As you can see in the above images, we have successfully performed a file upload attack (Web Shell Upload via Directory Traversal) and got the secret (the password: check response tab of the above images) of the user “Carlos”. Attack Completed!
                </p><br><br>
            
                <span>4. Web Shell Upload via Blacklisted Extension Bypass</span>

                <p>
                    In here also, assume We are now logged in as user "wiener". Our mission is to upload a basic PHP web shell and read the user Carlos' secret. First we have to look for the file upload function in the application just like we did in the previous attacks.<br><br>
                    <b>Step #1:</b> The same file upload function can be used for the exploitation procedure. The HTTP response body now contains the error message. This indicates that PHP files are not allowed (see below image).
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU15.png" alt="">
                    </div>  
                </p>

                <p>
                    <b>Step #2:</b> After a few tries we found a way to bypass the blacklist restriction. We will apply what we discovered from the earlier cases in this scenario. To upload the extensions that we wanted to upload, we must first upload and overwrite the .htaccess file. We will therefore modify the file's name to <b>.htaccess</b> and change the content to <b>AddType application/x-httpd-PHP .prplbx</b> as seen in the below image.
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU16.png" alt="">
                    </div>  
                </p>
            
                <p>
                    <b>Step #3:</b> After this step, we can now upload our PHP file with the <b>.prplbx</b> extension (see below image).

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU17.png" alt="">
                    </div> 
                </p>

                <p>
                    <b>Step #4:</b> Now we can access the secret of the user “Carlos” as we did before. The difference is, this time we will make a GET request to <b>file_upload_test.prplbx</b> instead of <b>file_upload_test.php</b> (see below image).
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU18.png" alt="">
                    </div> 
                </p>
            
                <p>
                    As you can see in the above image, we have successfully performed a file upload attack (Web Shell Upload via Blacklisted Extension Bypass) and got the secret (the password which is in the above image's response tab) of the user “Carlos”. Attack Completed!
                </p><br><br>
            
                <span>5. Web Shell Upload via Obfuscated File Extension</span>

                <p>
                    In here also, assume We are now logged in as user "wiener". Our mission is to upload a basic PHP web shell and read the user Carlos' secret. First we have to look for the file upload function in the application just like we did in the previous attacks.<br><br>
                    <b>Step #1:</b> The same file upload function can be used for the exploitation procedure. The HTTP response body contains the error message. PHP files are not allowed. There can only be JPG and PNG files (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU19.png" alt="">
                    </div> 
                </p>

                <p>
                    <b>Step #2:</b> After a few failed attempts, we discovered a workable strategy. We can obfuscate the filename, if we add a NULL byte and an allowed extension to the filename, we can bypass the restriction (see below image).
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU20.png" alt="">
                    </div> 
                </p>

                <p>
                    <b>Step #3:</b> Now we can access the secret of the user Carlos as usual.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU21.png" alt="">
                    </div>
                </p>

                <p>
                    As you can see in the above image, we have successfully performed a file upload attack (Web Shell Upload via Obfuscated File Extension) and got the secret (the password which is highlighted in the above image's response tab) of the user “Carlos”. Attack Completed!
                </p><br><br>

                <span>6. Remote Code Execution via Polyglot Web Shell Upload</span>

                <p>
                    In here also, assume We are now logged in as user "wiener". Our mission is to upload a basic PHP web shell and read the user Carlos' secret. First we have to look for the file upload function in the application just like we did in the previous attacks.<br><br>
                    <b>Step #1:</b> The same file upload function can be used for the exploitation procedure. The HTTP response body contains the error message. PHP files are not permitted. There can only be JPG and PNG files (see below image).

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU22.png" alt="">
                    </div>
                </p>

                <p>
                    <b>Step #2:</b> In order to bypass the restriction, we can now use ExifTool to add a PHP payload to the valid image file (see below image).
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU23.png" alt="">
                    </div>
                </p>

                <p>
                    <b>Step #3:</b> We can now upload our newly created PHP file after the creation phase (see below image).
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU24.png" alt="">
                    </div>
                </p>

                <p>
                    <b>Step #4:</b> Now we can access the secret of the user “Carlos” as usual (see below image).

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/FU25.png" alt="">
                    </div>
                </p>

                <p>
                    As you can see in the above image, we have successfully performed a file upload attack (Remote Code Execution via Polyglot Web Shell Upload) and got the secret (the password which is highlighted in the above image's response tab) of the user “Carlos”. Attack Completed!
                </p><br>

                <h3>How To Prevent File Upload Vulnerabilities?</h3>

                <p>
                    The most effective way is to implement all of the following practices:<br><br>

                    Rather using the blacklist of forbidden extensions, compare the file extension with the whitelist of permitted extensions. Instead of worrying about what extensions an attacker might try to upload, 
                    it is far simpler to estimate which ones you might wish to allow. Make sure there are no substrings in the filename that could be mistaken for a directory or traversal sequence (../). To prevent collisions that could result in existing files being overwritten, 
                    rename any uploaded files. Files should not be uploaded to the server's filesystem until they have undergone thorough validation. Use a preprocessing framework rather than trying to develop your own validation procedures wherever it is possible.<br><br>             
                    As a conclusion, we discussed file upload vulnerabilities in this article as well as the possible damage they could do to systems. Additionally, we have covered how to exploit file upload vulnerabilities and how to guard against them.
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
                <i class="fa fa-retweet"></i>
                <h3>Create a Backdoor</h3>
                <p>Create a PHP backdoor (Use the below backdoor or create your own one)</p>
                <a href="../../exploitation_resources/backdoor/backdoor.php" download='backdoor.php' class="download-btn">Download Backdoor</a>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fa fa-share-alt"></i>
                <h3>Insert the backdoor</h3>
                <p>Insert the backdoor into the web server and run it by changing the URL</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fa fa-key"></i>
                <h3>get the password</h3>
                <p>view server's files by typing the commands in the backdoor</p>
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
                    <a href="https://portswigger.net/web-security/file-upload#:~:text=What%20are%20file%20upload%20vulnerabilities,type%2C%20contents%2C%20or%20size."
                        class="link">File upload vulnerabilities</a>
                    <p>In this section, you'll learn how simple file upload functions can be used as a powerful vector for a number of high-severity attack...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/bruteforceblog2.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.we45.com/post/how-to-exploit-file-upload-vulnerabilities-and-how-to-fix-them"
                        class="link">How to Exploit File Upload Vuln...</a>
                    <p>File upload vulnerabilities arise when a server allows users to upload files without validating their names, size, types, content...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/bruteforceblog3.png" alt="">
                </div>
                <div class="content">
                    <a href="https://crashtest-security.com/file-upload-attack/"
                        class="link">File Upload Vulnerability Exploi...</a>
                    <p>One of the core features of modern web systems is file uploads that allow users to transmit files from client applications to th...</p>
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
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
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