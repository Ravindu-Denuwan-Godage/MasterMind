# 🧠 MasterMind – Beginner Web Application CTF

Welcome to **MasterMind**, a beginner-focused **Web Application Capture The Flag (CTF)** platform. This self-paced web application is specifically designed for **absolute beginners** — No advanced experience in web development or cybersecurity is required, though a basic familiarity with browsers or tools like Inspect Element will be helpful.

> 🎯 Learn ethical hacking in a legal, safe, and hands-on environment by discovering hidden flags in vulnerable web pages. On successful completion of all levels, you'll receive a certificate of achievement!

---

## 📚 Table of Contents

- [About the Project](#about-the-project)
- [Features](#features)
- [Challenges & Vulnerabilities](#challenges--vulnerabilities)
- [How It Works](#how-it-works)
- [Getting Started](#getting-started)
- [Screenshots](#screenshots)
- [Folder Structure](#folder-structure)
- [License](#license)
- [Acknowledgements](#acknowledgements)

---

## 📖 About the Project

**MasterMind** is a hands-on Capture the Flag (CTF) web application that simulates real-world web vulnerabilities. Each level presents a challenge involving a specific type of vulnerability. Your goal is to exploit each vulnerability, find the hidden flag, and progress to the next level.

---

## 🌟 Features

- 🔓 10 intentionally vulnerable web levels
- 📈 Progressive difficulty (Level 1 is easiest, Level 10 is hardest)
- 🧩 Each level has its own login portal
- 🆘 Dedicated help page for every level
- 🏆 Certificate of completion after Level 10
- 🧰 Includes tools & resources (wordlists, backdoors, etc.)

---

## 🕹️ Challenges & Vulnerabilities

| Level | Vulnerability Type                              | Description |
|-------|--------------------------------------------------|-------------|
| 01    | Information Leakage                              | Flag in page source code |
| 02    | Info Leakage (Right-click disabled)              | View source via browser tools or proxy |
| 03    | Directory Traversal                              | Navigate server directories |
| 04    | Dictionary Attack                                | Crack weak credentials with a wordlist |
| 05    | Caesar Cipher Encryption                         | Decrypt Caesar-shifted flag |
| 06    | Brute-Force Permutations                         | Guess all permutations to find the flag |
| 07    | File Upload Vulnerability                        | Upload and access a PHP backdoor |
| 08    | AES Encryption + Weak Key Protection             | Decrypt layered encrypted key (MD5 + Base64 + Caesar) |
| 09    | SQL Injection                                    | Inject SQL to extract flag from DB |
| 10    | Cross-site Scripting (XSS)                       | Inject JS to retrieve flag via tool |

---

## ⚙️ How It Works

1. Start at **Level 01**
2. Use the given **username** and exploit the vulnerability to find the **flag**
3. Enter username and flag on the login form to unlock the next level
4. Each level's Help Page provides:
   - 💡 Explanation of the vulnerability
   - 🧪 Demonstration of exploitation
   - 📦 Tools (e.g., PHP backdoors, wordlists)
   - 🔗 External resources for deeper learning

📷 _Please attach a screenshot of a sample Help Page_  
📷 _Please attach a screenshot of a Level Login Page_

---

## 🚀 Getting Started

Follow these steps to set up and run the MasterMind web application on your local machine.

### 1️⃣ Install XAMPP (or any PHP-supported web server)

- Download from: https://www.apachefriends.org/index.html
- Install and open XAMPP
- Start **Apache** and **MySQL** modules

### 2️⃣ Move Project to `htdocs` Folder

- Download or clone this repository
- Go to: `C:/xampp/htdocs/`
- Paste the entire `MasterMind` project folder here

### 3️⃣ Import the Database

- Open browser → `http://127.0.0.1/dashboard/`
- Click on **phpMyAdmin**
- Create a new database named "mastermind"
- Inside the project, go to "database_to_import" folder
- Import the `mastermind.sql` file into the newly created `mastermind` database

📷 _Please attach a screenshot of the import screen in phpMyAdmin_

### 4️⃣ Launch the Web Application

- Visit: `http://127.0.0.1/MasterMind/` in your browser
- The MasterMind CTF Web App should load successfully

🎉 You're ready to start your CTF journey!

---

## 🖼️ Screenshots

📷 _Attach these screenshots in your GitHub repo:_

- MasterMind Home Page  
- One Level's Login Page  
- Help Page Example  
- Completion Certificate  
- File Structure Overview

---

## 📂 Folder Structure

MasterMind/
├── assets/ # Images, CSS, JS
├── certificate/ # Certificate generator files
├── database_to_import/ # SQL file to import (flags & usernames)
├── levels/ # Level_01 to Level_10
├── Resources_Exploiting_Vulnerabilities/
│ ├── Wordlists/
│ ├── PHP_Backdoor/
│ └── Other tools
├── index.php # Entry point to the application

📷 _Please attach a screenshot of the project folder structure_

---

## 📑 License

**License:** [CC BY-NC-ND 4.0](https://creativecommons.org/licenses/by-nc-nd/4.0/)

- ✅ Free for personal, educational use
- ❌ You may not modify or redistribute the source code
- ❌ Commercial use not permitted

---

## 🙌 Acknowledgements

This project was inspired by platforms like:

- [DVWA](https://dvwa.co.uk/)
- [TryHackMe](https://tryhackme.com/)
- [OWASP ZAP](https://owasp.org/www-project-zap/)
- [HackTheBox](https://www.hackthebox.com/)
- [Burp Suite](https://portswigger.net/burp)

---

## 🏁 Completion Certificate

Upon completing all 10 levels, players receive a digital certificate to mark their accomplishment and inspire further study in cybersecurity.

📷 _Please attach an image of the sample certificate here_

---

## 📮 Contact

For questions or feedback:

- GitHub Issues: [Open here](https://github.com/YOUR_USERNAME/mastermind/issues)
- Email: youremail@example.com

---

🧠 **Made with care for absolute beginners taking their first steps into ethical hacking.**



