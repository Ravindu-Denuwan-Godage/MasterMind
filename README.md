# 🧠 MasterMind – Beginner Web Application CTF

Welcome to **MasterMind**, a beginner-focused **Web Application Capture The Flag (CTF)** platform. This self-paced web application is specifically designed for **absolute beginners** — no prior experience in web development or cybersecurity is required.

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

> 🚫 The chatroom feature has been removed from this version of the application.

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
- Create a new database named:

mastermind

- Inside the project, go to:

database_to_import/


- Import the `.sql` file into the newly created `mastermind` database

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

