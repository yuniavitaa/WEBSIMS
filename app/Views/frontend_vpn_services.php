<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VPN Service</title>
    <style>
        /* Main Styles */
        body {
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            color: white;
        }

        .vpn-section {
            padding: 60px;
            background-color: #262626;
            text-align: center;
        }

        .vpn-title {
            font-size: 3rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            color: #00b8d4;
        }

        .vpn-subtitle {
            font-size: 1.5rem;
            margin-bottom: 40px;
            color: #ccc;
        }

        .features-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 60px;
        }

        .feature-box {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            width: 30%;
        }

        .feature-box h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #00b8d4;
        }

        .feature-box p {
            font-size: 1rem;
            color: #ccc;
        }

        .package-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 60px;
        }

        .package-box {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            width: 30%;
            text-align: center;
        }

        .package-box h3 {
            font-size: 1.5rem;
            color: #00b8d4;
            margin-bottom: 15px;
        }

        .package-box p {
            font-size: 1rem;
            color: #ccc;
            margin-bottom: 15px;
        }

        .package-price {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #fff;
        }

        .cta-button {
            padding: 15px 30px;
            background-color: #00b8d4;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #007a8a;
        }

        /* Pop-up Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: #262626;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            color: white;
            text-align: center;
        }

        .modal-content h2 {
            color: #00b8d4;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #333;
            border-radius: 5px;
            color: #333;
        }

        .close-button {
            background: #00b8d4;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .switch-button {
            background: none;
            border: none;
            color: #00b8d4;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- VPN Section -->
    <section class="vpn-section">
        <h1 class="vpn-title">Virtual Private Network (VPN)</h1>
        <p class="vpn-subtitle">Secure your data and enjoy seamless global connectivity.</p>

        <!-- VPN Packages -->
        <div class="package-container">
            <div class="package-box">
                <h3>Essential Plan</h3>
                <p>10 Mbps Bandwidth</p>
                <p class="package-price">Rp 100,000 / month</p>
                <button class="cta-button" onclick="openModal()">Choose Plan</button>
            </div>
            <div class="package-box">
                <h3>Business Plan</h3>
                <p>100 Mbps Bandwidth</p>
                <p class="package-price">Rp 300,000 / month</p>
                <button class="cta-button" onclick="openModal()">Choose Plan</button>
            </div>
            <div class="package-box">
                <h3>Enterprise Plan</h3>
                <p>500 Mbps Bandwidth</p>
                <p class="package-price">Rp 1,000,000 / month</p>
                <button class="cta-button" onclick="openModal()">Choose Plan</button>
            </div>
        </div>
    </section>

    <!-- Modal for Login/Register -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <h2 id="modalTitle">Login</h2>
            <div id="loginForm">
                <div class="form-group"><input type="email" placeholder="Email" required></div>
                <div class="form-group"><input type="password" placeholder="Password" required></div>
                <button class="close-button" onclick="continueToPurchase()">Login</button>
                <p>Don't have an account? <button class="switch-button" onclick="showRegister()">Register</button></p>
            </div>
            <div id="registerForm" style="display: none;">
                <div class="form-group"><input type="text" placeholder="Full Name" required></div>
                <div class="form-group"><input type="email" placeholder="Email" required></div>
                <div class="form-group"><input type="password" placeholder="Password" required></div>
                <div class="form-group"><input type="password" placeholder="Repeat Password" required></div>
                <button class="close-button" onclick="continueToPurchase()">Register</button>
                <p>Already have an account? <button class="switch-button" onclick="showLogin()">Login</button></p>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById("loginModal").style.display = "flex";
            showLogin();
        }

        function closeModal() {
            document.getElementById("loginModal").style.display = "none";
        }

        function showLogin() {
            document.getElementById("modalTitle").textContent = "Login";
            document.getElementById("loginForm").style.display = "block";
            document.getElementById("registerForm").style.display = "none";
        }

        function showRegister() {
            document.getElementById("modalTitle").textContent = "Register";
            document.getElementById("loginForm").style.display = "none";
            document.getElementById("registerForm").style.display = "block";
        }

        function continueToPurchase() {
            closeModal();
            alert("Redirecting to purchase form...");
            // Redirect to purchase form page here
        }
    </script>

</body>

</html>
