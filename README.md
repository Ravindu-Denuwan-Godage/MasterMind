# 🧠 MasterMind – Beginner Web Application CTF

![Image](https://github.com/user-attachments/assets/de043162-6f60-46f8-bbe7-49805d8d25ed)

Welcome to **MasterMind**, a beginner-focused **Web Application Capture The Flag (CTF)** platform. This self-paced web application is specifically designed for **absolute beginners** — No advanced experience in web development or cybersecurity is required, though a basic familiarity with browsers or tools like Inspect Element will be helpful.

> 🎯 Learn ethical hacking in a legal, safe, and hands-on environment by discovering hidden flags in vulnerable web pages. On successful completion of all levels, you'll receive a certificate of achievement!

---

## 📚 Table of Contents

- [About the Project](#about-the-project)
- [Features](#features)
- [Challenges & Vulnerabilities](#challenges--vulnerabilities)
- [How It Works](#how-it-works)
- [Getting Started](#getting-started)
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

#### 📘 List of all Help Pages available in the MasterMind web app
![Image](https://github.com/user-attachments/assets/e4d50aed-8117-4e0f-bdb4-9065343aa965)

#### 📷 Level 01 CTF Challenge
![Image](https://github.com/user-attachments/assets/af9fe152-709d-484c-8d9d-64cf9fc32f71)

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

#### 🔐 phpMyAdmin – MasterMind database setup view
![Image](https://github.com/user-attachments/assets/ecad9937-9113-4a93-8c66-8f85131cd827)

### 4️⃣ Launch the Web Application

- Visit: `http://127.0.0.1/MasterMind/` in your browser
- The MasterMind CTF Web App should load successfully

🎉 You're ready to start your CTF journey!

---

## 📂 Project Folder Structure

```

MasterMind/
│
├── Level_01/ to Level_10/       # Challenge folders for each level (01 to 10)
│   ├── login.php                # Login portals for each level
│   └── help.html                # Help Page with guidance and resources
│
├── database_to_import/         # Contains the SQL file to import into phpMyAdmin
│   └── mastermind.sql
│
├── resources/                  # Tools, wordlists, and backdoors for some levels
│   ├── wordlists/
│   └── php_backdoor.php
│
├── certificate/                # Certificate files for successful players
│
├── sidebar.css                 # Styles for the navigation sidebar
├── index.php                   # Entry point or home page
├── README.md                   # Project documentation (this file)
└── .gitignore                  # Optional file to exclude specific files from Git tracking

```

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

![Image](https://github.com/user-attachments/assets/92931a67-ecd6-4b32-9dc9-4fde07d11c57)

---

## 📮 Contact

For questions or feedback:

- GitHub Issues: [Open here](https://github.com/Ravindu-Denuwan-Godage/mastermind/issues)

---

🧠 **Made with care for absolute beginners taking their first steps into ethical hacking.**



