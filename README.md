# MasterMind
A beginner-friendly local CTF platform to learn Web Application Security
# 🧠 MasterMind – Beginner Web Application CTF

Welcome to **MasterMind**, a beginner-focused **Web Application Capture The Flag (CTF)** platform. This is a self-paced, hands-on training web app specifically designed for **absolute beginners** with **no prior experience in web security or programming**.

> 🚩 Learn to hack – the safe and legal way – by exploiting intentionally vulnerable web pages and uncovering hidden flags. After solving all 10 challenges, you'll earn a certificate of completion!

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

**MasterMind** is a Capture the Flag (CTF) style web application created to help **absolute beginners** explore fundamental web vulnerabilities in a safe, structured way.

Each level presents a unique vulnerability. Players must understand, exploit, and capture the **flag** (a hidden code) to progress to the next level. This learning-by-doing format is ideal for those new to cybersecurity.

---

## 🌟 Features

- 🔐 10 Beginner-Friendly Web Challenges
- 🎯 Step-by-step difficulty progression (Level 1 → 10)
- 📑 In-app Help Pages for every level
- 🏁 Completion Certificate for motivation
- 🛠️ Tools & resources included for learning
- ✅ 100% Offline and free to use

> ❌ **Note:** The chatroom feature has been **removed** from the project.

---

## 🕹️ Challenges & Vulnerabilities

| Level | Vulnerability Type                              | Description |
|-------|--------------------------------------------------|-------------|
| 01    | Information Leakage (Basic)                      | Flag in page source |
| 02    | Information Leakage (Right-click disabled)       | Use dev tools/proxies |
| 03    | Directory Traversal                              | Access hidden directories |
| 04    | Dictionary Attack                                | Crack weak credentials |
| 05    | Caesar Cipher Encryption                         | Decrypt with Caesar cipher |
| 06    | Brute-Force Permutations                         | Try all letter combos |
| 07    | File Upload Vulnerability                        | Upload & use a PHP backdoor |
| 08    | AES + Weak Key Protection                        | Decrypt multi-layer encoded key |
| 09    | SQL Injection                                    | Inject query via input field |
| 10    | Cross-site Scripting (XSS)                       | Inject JS to steal flag |

> 🧩 Each level includes a **username** (displayed) and requires the **correct flag** to log in to the next level.

---

## ⚙️ How It Works

1. Begin at **Level 01**.
2. Each level gives you:
   - A **username**
   - A **login form** for the flag
3. Exploit the level’s vulnerability to find the **flag**.
4. Submit the correct username + flag → progress to next level.
5. On completing **Level 10**, receive a **customized certificate** of success!

💡 Every level has a **Help Page** containing:

- Detailed explanation of the vulnerability
- Demo of the attack
- Downloadable tools/resources
- External links for further reading

📷 _Please attach an image of a sample Help Page_  
📷 _Please attach an image of a Level Login Page_

---

## 🚀 Getting Started

This section helps you set up the MasterMind CTF on your local machine using **XAMPP**.

### 1️⃣ Download & Install XAMPP

- Download from: [https://www.apachefriends.org](https://www.apachefriends.org)
- Install XAMPP
- Launch it and **start Apache and MySQL**

### 2️⃣ Move MasterMind Project to `htdocs`

- Download or clone the MasterMind repo
- Go to `C:/xampp/htdocs/`
- Paste the **MasterMind** folder here

### 3️⃣ Import the Database

- Open your browser → go to: `http://127.0.0.1/dashboard/`
- Click **phpMyAdmin**
- Create a new database:

```text
mastermind
