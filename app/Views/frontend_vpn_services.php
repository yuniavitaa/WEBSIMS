<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VPN Service</title>
    <style>
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

        .testimonials {
            background-color: #1a1a1a;
            padding: 40px;
        }

        .testimonial {
            font-style: italic;
            margin-bottom: 20px;
            color: #ccc;
        }

        .testimonial-name {
            font-weight: bold;
            color: #00b8d4;
        }
    </style>
</head>

<body>

    <!-- VPN Section -->
    <section class="vpn-section">
        <h1 class="vpn-title">Virtual Private Network (VPN)</h1>
        <p class="vpn-subtitle">Secure your data and enjoy seamless global connectivity.</p>

        <!-- Features Section -->
        <div class="features-container">
            <div class="feature-box">
                <h3>Flexible Bandwidth</h3>
                <p>Select the bandwidth capacity that fits your business needs, from small teams to enterprises.</p>
            </div>
            <div class="feature-box">
                <h3>Global Access Points</h3>
                <p>Access from over 50 strategic global locations with stable and secure connections.</p>
            </div>
            <div class="feature-box">
                <h3>Military-grade Encryption</h3>
                <p>Protect your data with AES-256 encryption, the highest security standard available.</p>
            </div>
        </div>

        <!-- VPN Packages -->
        <div class="package-container">
            <div class="package-box">
                <h3>Essential Plan</h3>
                <p>10 Mbps Bandwidth</p>
                <p>MRTG Traffic Monitoring</p>
                <p>Basic Firewall</p>
                <p>24/7 Technical Support</p>
                <p class="package-price">Rp 100,000 / month</p>
                <button class="cta-button">Choose Plan</button>
            </div>
            <div class="package-box">
                <h3>Business Plan</h3>
                <p>100 Mbps Bandwidth</p>
                <p>MRTG, Custom Firewall</p>
                <p>Zero Log Policy</p>
                <p>Priority Support</p>
                <p class="package-price">Rp 300,000 / month</p>
                <button class="cta-button">Choose Plan</button>
            </div>
            <div class="package-box">
                <h3>Enterprise Plan</h3>
                <p>500 Mbps Bandwidth</p>
                <p>Dedicated VPN Configuration</p>
                <p>All features included</p>
                <p class="package-price">Rp 1,000,000 / month</p>
                <button class="cta-button">Choose Plan</button>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="testimonials">
            <p class="testimonial">"Using this VPN service has secured our remote communication and protected our data across the globe."</p>
            <p class="testimonial-name">- Dian Pratama, CTO at XYZ Company</p>
        </div>
    </section>

</body>

</html>