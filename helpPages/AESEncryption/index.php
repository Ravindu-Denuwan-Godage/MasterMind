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
            <img src="images/b6.png" style="float: left; margin-right: 1px; margin-bottom: -50px" width="430px"
                height="450px">

            <div class="content" data-aos="fade-left" data-aos-delay="600" style="margin-top: 6rem;">
                
                <h3>Encryption Algorithms</h3>
                
                <span>What Is Encryption?</span>
                
                <p>
                    Encryption is a technique for securing the information so only the authorized parties can interpret the data. What happens is that encryption provides transformations 
                    on the plaintext and transforms it into ciphertext which isn’t human-readable.
                    Ciphers have been frequently employed not only in the digital era but also throughout history. We show the broad perspective of the ciphers' classification in the graphic below. As we've seen, 
                    ciphers are categorized based on certain characteristics they possess or based on how they are used. They are primarily separated into two categories: classical classes and modern classes. Modern 
                    class is the most prevalent and widely used in digital areas. Its symmetric and asymmetric ciphers, which are more in-depth classes, are made possible by its dynamic and static cryptographic techniques
                
                    The majority of security experts aim to employ an encryption technique with a key that is so lengthy that it would be unfeasible to perform all possible iterations. Sometimes it doesn't matter how long it 
                    would take to brute force a specific key. The cipher itself, however, is secure. A strong algorithm is one that has no flaws or cryptographic vulnerabilities, then we can consider that particular algorithm to be strong.
                    Here is the broad perspective of the ciphers' classification:
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES1.png" alt="">
                    </div>
                </p>

                <p>
                    Asymmetric encryption uses two separate keys in contrast to symmetric encryption, which uses just one key to encrypt and decrypt data. A public key is used for encryption, and a private key is used for 
                    decryption. Although the public and private keys are distinct from one another, they are connected, therefore we refer to them as a key pair. The symmetric-key block cipher class includes the members DES, 3DES, AES, which 
                    we'll describe and compare throughout the article.
                </p><br>
                
                <h3>Data Encryption Standard (DES)</h3>
                
                <p>
                    DES is developed by IBM and based on a design by Horst Feistel. When it was first made available, it was one of the cryptographic systems that was widely utilized and publicly accessible. Although it made its debut in the 1970s, 
                    the National Institute of Standards and Technology later accepted it (NIST). The technique uses symmetric keys to encrypt digital data. It utilizes the Feistel network and has a block size of 64 bits. It’s slow and not used in the software.                
                    It significantly influenced the development of cryptography. However, it’s insecure for applications due to the short key length of 56 bits. A DES key was cracked by distributed.net in 1999 in 22 hours and 15 minutes. When such things happen, 
                    NIST withdraws this algorithm's status as a standard. 3DES emerged after the vulnerabilities in DES.
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES2.jpg" alt="">
                    </div>        
                </p><br>
                
                <h3>Triple Data Encryption Algorithm (3DES)</h3>
                
                <p>
                    The Triple Data Encryption Algorithm is also known as Triple DES, 3DES, or TDES. It’s a symmetric-key block cipher and it applies the DES algorithm three times to each block. It has a key length of 112 or 168 bits and a block size of 64 bits. 
                    Because it is built on DES, it also utilizes the Feistel network.
                    Due to the modern cryptology techniques and supercomputing, like the DES, 3DES has also some serious vulnerabilities. That’s why the NIST has deprecated DES and 3DES for new applications in 2017 and for all applications by 2023. As a result, AES entered the scene and replaced these encryption techniques.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES3.png" alt="">
                    </div> 
                </p><br>
                
                <h3>Advanced Encryption Standard (AES)</h3>

                <p>
                    In 2001, it was published as a FIPS 197 standard. AES data encryption is a more theoretically efficient and elegant cryptographic technique, but its greatest advantage is the ability to use different key lengths. AES lets you select a 128-bit, 192-bit, or 256-bit key, making it exponentially stronger than the 56-bit key of DES.
                    Each key length has different possible key combinations.
                    Because of AES effectively balances speed and security, it allows us to continue with our online activities without interruption.
                    DES employs the Feistel network, which divides the block into two half before proceeding with the encryption procedures. AES on the other hand, uses permutation-substitution, which involves a series of substitution and permutation steps to create the encrypted block. The original DES creators made significant contributions to data security, 
                    but the collective effort of cryptographers for the AES algorithm was significantly greater. While the AES encryption method's key length varies, its block size is set at 128 bits or 16 bytes.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES4.jpg" alt="">
                    </div>
                </p><br>
                
                <h3>MD5 Algorithm</h3>

                <p>
                    MD5 (Message Digest Method 5) is a cryptographic hash method that produces a 128-bit digest from any length string. The digests are represented as 32-digit hexadecimal numbers.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES5.png" alt="">
                    </div>
                </p>
                
                <p>
                    Ronald Rivest created this algorithm in 1991 to enable digital signature verification. It was afterwards applied into a number of different frameworks to improve security indexes.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES6.png" alt="">
                    </div>
                </p><br>
                
                <p>
                    The digest size is always 128 bits, and due to hashing algorithm rules, a little change in the input string produces a significantly different digest. This is critical in order to avoid similar hash generation, often known as a hash collision.
                    You will now understand the stages involved in the operation of the MD5 algorithm. The algorithm is divided into four primary sections: <b>Padding Bits, Padding Length, Initialize MD Buffer, and Process Each Block </b>.
                </p><br><br>
                
                <span>Padding Bits</span>

                <p>
                    When you receive the input string, you have to make sure the size is 64 bits short of a multiple of 512. When it comes to padding the bits, you must first add one(1), then zeroes to round out the extra characters.

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES7.png" alt="">
                    </div>
                </p><br><br>
                
                <span>Padding Length</span>

                <p>
                    To make your final string a multiple of 512, you must add a few more characters. To do so, take the length of the first input and convert it to 64 bits. When the two are combined, the final string is ready to be hashed.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES8.png" alt="">
                    </div>
                </p><br><br>

                <span>Initialize MD Buffer</span>
                
                <p>
                    The entire string is converted into multiple blocks of 512 bits each. You also need to initialize four different buffers, namely A, B, C, and D. These buffers are 32 bits in size and are set up as follows:<br><br>
                    
                    <b>
                    A = 01 23 45 67<br>
                    B = 89 ab cd ef<br>
                    C = fe dc ba 98<br>
                    D = 76 54 32 10<br>
                    </b>
                </p><br><br>

                <span>Process Each Block</span>
                
                <p>
                    Each 512-bit block gets broken down further into 16 sub-blocks of 32 bits each. There are four rounds of operations, each of which uses all of the sub-blocks, buffers, and a constant array value.<br><br>
                    
                    <b>
                    This constant array can be denoted as T[1] -> T[64].<br>
                    Each of the sub-blocks are denoted as M[0] -> M[15].
                    </b>

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES9.png" alt="">
                    </div>
                </p>
                
                <p>
                    The values are being run for a single buffer A, as seen in the graphic above. The proper sequence is as follows:<br><br>

                    1. It passes B, C, and D onto a non-linear process.<br>
                    2. The result is added with the value present at A.<br>
                    3. It adds the sub-block value to the result above.<br>
                    4. Then, it adds the constant value for that particular iteration.<br>
                    5. There is a circular shift applied to the string.<br>
                    6. As a final step, it adds the value of B to the string and is stored in buffer A.<br><br>
                
                    The above procedures are repeated for each buffer and sub-block. When the final buffer of the last block is finished, you will receive the MD5 digest.
                    The non-linear mechanism described above differs for each round of the sub-block.<br><br>

                    <b>
                    Round 1: (b AND c) OR ((NOT b) AND (d))<br>
                    Round 2: (b AND d) OR (c AND (NOT d))<br>
                    Round 3: b XOR c XOR d<br>
                    Round 4: c XOR (b OR (NOT d))</b>
                </p><br>

                <h3>Can you crack MD5?</h3>
                
                <p>
                    The MD5 technique is no longer regarded safe for storing passwords because it is becoming more easier to crack them. For instance, it is possible to brute force an 8-character password in a matter of minutes.
                    
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES10.png" alt="">
                    </div>
                
                </p>
                
                <p>
                    MD5 decryption does not exist because there is no reverse function to decrypt an MD5 hash. However, approaches such as brute-force or dictionary attacks are extremely efficient in producing the same result. The goal is to hash a large number of words into MD5, then look for a match.
                </p><br><br>
                
                <span>Brute-force attacks</span>
                
                <p>
                    The first method for decrypting an MD5 hash is brute force. The purpose of a brute force attack is to test several words, convert them to MD5, and see if the MD5 hash matches what we're looking for.
                    In general, you'll begin with the shortest password (for example, "a"), convert it to an MD5, then check for a match. If not, you proceed to the next option. Computers can continue this for days until they locate a match; no human interaction is required.
                    The hacker will just check to see if there are any new results and go from there if he discovers anything interesting.
                </p><br><br>

                <span>MD5 databases</span>

                <p>
                    An MD5 database works on the same idea, but each hash is stored in a file. This allows you to quickly check for matches against a file containing a large number of MD5 hashes.
                    If a hacker does this on a frequent basis, it could increase the speed by having a database containing the most common passwords, for example.
                </p><br>

                <h3>Base 64 Encoding</h3>

                <p>
                    Base64 encoding is a standard designed to prevent communication "mishaps" during binary data transfer. It accomplishes this by converting binary data and using a "lookup table" — data is eventually converted into a stream of ASCII characters, which can then be transferred and decoded. 
                    The output string from base 64 encoded data is always longer than the original (i.e. this is not a compression algorithm). Another key distinction is that base 64 does not encrypt any information; instead, it encodes and decodes data using a "standard" table of characters. In other words, 
                    any base-64 string that was encoded using a standard set of characters can be decoded (which the decoder can also understand).
                </p><br><br>

                <span>Uses for Base64</span>

                <p>
                    On top of being used for safely encoding image/media data (you may have seen images on the web encoded in the following format: data:image/png;base64,(...)), it is used for SSL certificates, email transmissions, and virtually any transfer of information that requires special (control) characters to be escaped.
                </p><br><br>

                <span>Encoding Base64</span>

                <p>
                    While many programming languages (for example, Java, Python, and JS) have built-in functions for converting base64 encoded information and binary data, the algorithm used to achieve the conversion is rather simple. Starting with binary information, base 64 splits a binary string into 6-bit groups 
                    (note: each zero or one in a binary string is one bit) of three bytes. The result is an ASCII-readable string that can be safely transmitted and received.
                    To demonstrate the encoding procedure, we'll use a short string for simplicity. Assume we have <b><u class="lowercase">"hi"</u></b> as our string, and the ASCII equivalent is: <b>104 (<u class="lowercase">h</u>), 105 (<u class="lowercase">i</u>)</b>.<br><br>
                
                    The ASCII string must be converted to its binary representation:<br><br>

                    01101000 01101001 (<b>0110100001101001</b> without spaces)<br><br>

                    then, divide the binary representation into 6-bit groups as follows:<br><br>

                    011010 000110 100100
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES11.png" alt="">
                    </div>
                </p>

                <p>
                    We can then utilize an ASCII lookup table above with the binary form of our string. For the binary representation of our string, we get the following ASCII characters:<br><br>

                    <b>
                    011010 => “<u class="lowercase">a</u>”<br>
                    000110 => “G”<br>
                    100100 => “<u class="lowercase">k</u>”<br>
                    </b>

                </p>

                <p>
                    Before we can complete the conversion, we must first identify the missing padding: Base 64 strings must be made up of groups of three characters (6 byte binary representations). As a result, our string "<b>hi</b>" only includes two characters; therefore, we must add a "<b>=</b>" to the end of the string to make it a legitimate base 64 string.<br><br>
                
                    The result is finally: <b>“<u class="lowercase">a</u>Gk=”</b> (<u class="lowercase">h</u>i).              
                </p><br><br>

                <span>Decoding Base64</span>

                <p>
                    Decoding base64 strings follows a similar process, just in reverse. Using the previous section's result (<b>"<u class="lowercase">a</u>Gk="</b>), we will utilize the same Base 64 lookup table:<br><br>
                
                    <b>
                    “<u class="lowercase">a</u>” --> 011010<br>
                    “G” --> 000110<br>
                    “<u class="lowercase">k</u>” --> 100100<br>
                    “=” --> padding
                    </b><br><br>

                    This leaves us with three 6-bit binary groups:<br><br>

                    <b>011010 000110 100100</b><br><br>

                    When we convert this to 8-bit groups, we get (the last two zeros can be ignored):<br><br>

                    <b>01101000 01101001</b><br><br>

                    … which results in <b>“<u class="lowercase">h</u>i”</b> in ASCII.
                </p><br>

                <h3>Caesar Cipher</h3>

                <p>
                    We have an entire article about this <a href="../CaeserCipher/index.html">Caeser Cipher</a> with examples and demontration. but we will give you a summary here.<br><br>
                    A Caesar cipher is a straightforward way of message encoding. To generate an encoding alphabet, Caesar ciphers use a substitution mechanism in which letters in the alphabet 
                    are displaced by a specified number of spaces. With a shift of 1, a Caesar cipher would encode <u class="lowercase">an</u> A <u class="lowercase">as a</u> B, 
                    <u class="lowercase">a</u> M <u class="lowercase">as an</u> N, and <u class="lowercase">a</u> Z <u class="lowercase">as an</u> A, and so on. The approach was named after Julius Caesar, the Roman leader who used it in his private communication.
                    Here is the image of Caesar Cipher with a shift of 3:

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES14.png" alt="">
                    </div>
                </p><br><br>

                <span>Steps for designing and using a Caesar cipher</span>

                <p>
                    1. Select a value to shift the alphabet by.<br>
                    2. Make a table with the letters in regular alphabetical order on the top row and the new shifted alphabet on the bottom row.<br>
                    3. Encode the message by replacing each letter with the appropriate shifted letter.<br>
                    4. Ascertain that the message's intended receiver is aware of the shifting scheme used to encrypt the message so that they can decode it.<br>
                    5. To decrypt a Caesar cipher-encoded message, simply take the value of 26 minus the shift value, and apply that new value to shift the encoded message back to its original form.
                </p><br><br>

                <span>Example 01</span>
                
                <p>
                    Encode the message <b>"I like chemistry"</b> using the Caesar cipher described in the table below. (Note: shift is 10).

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES15.PNG" alt="">
                    </div>
                </p>

                <p>
                    "I like chemistry" is encoded as <b>"S <u class="lowercase">vsuo mrowscdbi</u>"</b> with a shift of 10.
                </p><br><br>

                <span>Example 02</span>

                <p>                    
                    Encode the following message using a Caesar cipher with a shift of 14: <b>I send secret messages</b>.

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES16.PNG" alt="">
                    </div>
                </p>

                <p>
                    Work your way through the table, matching each letter in the sentence "I send secret messages" to the corresponding encoded letter. 
                    For example, the letter "<u class="lowercase">s</u>" is encoded as "<u class="lowercase">g</u>" and the letter "<u class="lowercase">c</u>" is encoded as "<u class="lowercase">q</u>".
                    "I send secret messages" can be encoded as <b>"W <u class="lowercase">gsbr gsqfsh asggousg</u>"</b> using this method.<br><br>

                    For more information on this Caeser Cipher, read our entire article: <a href="../CaeserCipher/index.html">Caeser Cipher</a>
                </p><br>

                <h3>demontration of AES decryption</h3>

                <p>
                    Assume, we have a AES encrypted password (Cipher Mode of Encryption is <b>"ECB"</b> and the Key Size in Bits is <b>"128"</b>) as well as a key to decrypt it. But the key also has encrypted with MD5 hashing algorithm, base64 encoding and a Caeser Cipher with shift 6.
                    Our mission is to decrypt the encrypted the password.<br><br>

                    AES encrypted password = <b>XRQafLzaLtGcCvqy8ggpkg==</b> (Cipher Mode of Encryption = "ECB", Key Size in Bits = "128")<br>
                    decryption key = <b>SfFrUMLsEsAeFCOfFCK0FCPqFMEdUMS1E2SeSCTrE2E=</b> (encrypted with MD5 hashing, base64 encoding and a Caeser Cipher with shift 6)<br><br>

                    Let's start the decryption process now. As we already now, the decrypting key is encrypted with MD5 hashing, base64 encoding and a Caeser Cipher with shift 6. Therefore, we need to perform a Caeser Cipher decryption first. you can use any offline or online tools for
                    Caeser Cipher decryption process. But in here, we are going to use the online tool called <a href="https://www.dcode.fr/caesar-cipher">Dcode</a> for the decryption. Go to "Dcode" and start decryption process. Make sure to set the shift key as 6. (see below image).
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES17.PNG" alt="">
                    </div>
                </p>

                <p>
                    After completed the Caeser Cipher decryption process, now we have Base64 encoded key. Therefore, our next step is decode that Base64 encoded key. Once we completed our Caeser Cipher decryption, it has given 2 results (see above image). Select the second result which is <b>"MzZlOGFmYmUyZWIzZWE0ZWJkZGYxOGM1Y2MyMWNlY2Y="</b>.
                    Now we are going to decode the base64 encoded key. For that purpose, we are going to use the online tool called <a href="https://www.base64encode.org/">Base64 Decode and Encode</a>. Go to "Base64 Decode and Encode" and complete the Base64 decoding process. (see below image).

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES18.PNG" alt="">
                    </div>
                </p>

                <p>
                    After completed the base64 decoding process, now we have the MD5 Hash of our AES decryption key. That is <b>"36e8afbe2eb3ea4ebddf18c5cc21cecf"</b>. Our next step is to check whether this MD5 hash matches with a plaintext (a known password) or not. For that purpose, we are going to use the online tool called <a href="https://crackstation.net/">CrackStation</a>.
                    CrackStation cracks password hashes using massive pre-computed lookup tables. These tables keep a mapping between a password hash and the correct password for that hash. The hash values are indexed so that a given hash can be easily searched for in the database. The password can be recovered in a fraction of a second if the hash is present in the database.
                    Go to "CrackStation" and check whether if this hash present in their database or not. (see below image).

                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES19.PNG" alt="">
                    </div>
                </p>

                <p>
                    As you can see in the above image, our MD5 hash is presented in their database. Our hash's plaitext is <b>"<u class="lowercase">e</u>nvironmentalism"</b>. That mean's now we have the key of given AES encrypted password. Our next step is to decrypted the given AES encrypted password by using our founded key (<u class="lowercase">e</u>nvironmentalism). For this purpose, we are going to use the online tool called <a href="https://the-x.cn/en-US/cryptography/Aes.aspx">the-x</a>.
                    Go to "the-x" and complete the decryption process of AES encrypted password. Make sure to set the Cipher Mode of decryption as <b>"ECB"</b> and the Key Size as <b>"128"</b>. And then enter the given AES encrypted password (XRQafLzaLtGcCvqy8ggpkg==), and the founded key (<u class="lowercase">e</u>nvironmentalism), and then complete the decryption process. (see below image).
                
                    <br><br>
                    <div style="text-align: center;">
                        <img src="images/AES20.PNG" alt="">
                    </div>
                </p>

                <p>
                    As you can see in the above image, we have successfully decrypted the given AES encrypted password with our founded key. The plaintext of the given AES encrypted password is <b>"<u class="lowercase">p</u>ineapple"</b>.
                    This demonstration explains how simple it is to crack the Caeser Cipher, Base64 encoding and MD5 hashing algorithm. 
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
                <i class="fa fa-wrench"></i>
                <h3>Caeser Cipher Decryption</h3>
                <p>Take the given encrypted keys and perform the Ceaser Cipher decryption first (Use <a href="https://www.dcode.fr/caesar-cipher">Dcode</a>)</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fa fa-life-ring"></i>
                <h3>Base64 Decoding</h3>
                <p>Take the Caeser Cipher decryption output and start Base64 decoding process (use <a href="https://www.base64encode.org/">Base64 Decode and Encode</a>)</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fa fa-reply-all"></i>
                <h3>Check the MD5 Hash</h3>
                <p>Get the Base64 Decoded output and check whether that hash matches with plaintext or not (Use <a href="https://crackstation.net/">CrackStation</a>)</p>
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
                    <img src="images/AESBlog1.png" alt="">
                </div>
                <div class="content">
                    <a href="https://infosecscout.com/how-md5-decryption-works/" class="link">How MD5 Decryption Works?</a>
                    <p>MD5 stands for “Message Digest 5 algorithm” and is a well-known cryptographic hash function. They designed this function to ma...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/AESBlog2.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.base64encoder.io/learn/" class="link">What is Base64 Encoding and...</a>
                    <p>Base64 is a binary-to-text encoding scheme. It represents binary data in a printable ASCII string format by translating it into a radix-6...</p>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/AESBlog3.png" alt="">
                </div>
                <div class="content">
                    <a href="https://www.simplilearn.com/tutorials/cryptography-tutorial/aes-encryption" class="link">What Is AES Encryption and Ho...</a>
                    <p>Encryption has found a place in today’s digital world, by cultivating a culture of security and privacy. When the AES Encrypti... </p>
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
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
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