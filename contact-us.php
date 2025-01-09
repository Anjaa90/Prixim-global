<?php include ('includes/header.php');?>
    <style>
    @media (max-width: 991px) {
        .pt-120 {
            padding-top: 0px
        }
    }

    @media (max-width: 786px) {
        .contact-info {
            display: block;
        }
    }

    .required-field {
        color: red;
    }
</style>
    <main class="main main-body">
        <div class="site-breadcrumb">
            <div class="container">
                <h1 class="breadcrumb-title">Contact Us</h1>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
            <div class="hero-shape"><img class="hero-shape-1" src="assets/img/shape/01.png" alt="" loading="lazy">
            </div>
            <div class="hero-right-circles"></div>
        </div>
        <div class="contact-area py-110">
            <div class="container">
                <div class="row">
                    <!-- Contact Form Section -->
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h1>Get in touch with us!</h1>
                                <p>Kindly fill out the following form and we will get back to you.</p>
                            </div>
                            <form id="consult" method="post" action="contact.php">
                                <div class="form-group">
                                    <label>Name <span class="required-field">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="required-field">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Phone<span class="required-field">*</span></label>
                                    <input type="text" class="form-control" name="phone_number"
                                        placeholder="Enter Your Phone" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" name="subject"
                                        placeholder="Enter Your Company">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="3" class="form-control"
                                            placeholder="Enter Your Message" required></textarea>
                                    </div>
                                </div>
                                <div class="form-input mb-3">
                                    <div class="g-recaptcha" data-sitekey="6LeMhgUjAAAAAMkJSW4IudUaN0skK5mQ6a6MxbUT">
                                    </div>
                                </div>
                                <button type="submit" class="theme-btn" value="send">Send Message
                                    <i class="far fa-paper-plane"></i>
                                </button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Office Details Section -->
                    <div class="col-lg-6">
                        <h2>Offices</h2>
                        <div class="office-card">
                            <img src="assets\img\icon\Flag_of_the_United_Kingdom_(1-2).svg" alt="UK"
                                style="max-width: 50px; padding-right: 10px; " loading="lazy">United
                            Kingdom<br>Corporate Registered Office<br>
                            <strong>Prixim Analytics EU Ltd</strong><br>
                            <p><strong>Address:</strong> Office 71-75, Shelton Street, Covent Garden, London,<br>
                                WC2H 9JQ Ltd</p>
                            <p><strong>Phone:</strong> +44 20 36952310</p>
                        </div>
                        <div class="office-card">
                            <img src="assets\img\icon\Flag_of_the_United_Arab_Emirates.svg.png" alt="UAE"
                                style="max-width: 50px; padding-right: 10px;" loading="lazy">UAE<br>Consulting
                            Office<br>
                            <strong>Fintech & FX </strong><br>
                            <p><strong>Address:</strong> Level 1, C1 Building, Central One District,Next to Ibis One
                                <br>Central - Dubai - (UAE)
                            </p>
                            <p><strong>Whatsapp:</strong> +971544335310</p>
                        </div>
                        <div class="office-card">
                            <img src="assets\img\icon\Flag_of_India.svg" alt="India"
                                style="max-width: 50px; padding-right: 10px;" loading="lazy">India<br>APAC Relationship
                            Center<br>
                            <strong>Prixim Global</strong><br>
                            <p><strong>Address:</strong> Awfis, 2nd Floor, Vishwaroop IT Park, Vashi, Navi Mumbai,
                                400703</p>
                            <p><strong>Phone:</strong> +917972359229 </p>
                        </div>
                        <div class="office-card">
                            <img src="assets\img\icon\Flag_of_India.svg" alt="UAE"
                                style="max-width: 50px; padding-right: 10px;" loading="lazy">India<br>
                            IT Support Office<br>
                            <p><strong>Address:</strong> F09, Vashi Fantasia, Sector 30A, Vashi, Navi Mumbai - 400703
                            </p>
                            <p><strong>Phone:</strong> +91 22 65011568</p>
                        </div>
                    </div>
                    <div class="container" style="padding-top: 50px;">
                        <div class="office-card" style="text-align: center;">

                            <h4>Human Resources, Vacancies, Admin or Ex Employees Verifications
                            </h4><br>

                            <p><strong>Phone:</strong> <a href="tel:+919167061505">+91 9167061505</a></p>
                            <p><strong>Email:</strong> <a href="mailto:hr@priximglobal.com">hr@priximglobal.com</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CSS -->
        <style>
            .contact-form {
                border: 1px solid #ddd;
                padding: 20px;
                border-radius: 5px;
                background-color: #fff;
            }

            .contact-form-header h2 {
                font-size: 28px;
                font-weight: bold;
            }

            .contact-form-header p {
                margin-bottom: 15px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-control {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .office-card {
                border: 1px solid #ddd;
                padding: 15px;
                margin-bottom: 20px;
                background-color: #f9f9f9;
                border-radius: 5px;
            }

            .office-card img {
                vertical-align: middle;
            }

            @media (max-width: 768px) {
                .col-lg-6 {
                    width: 100%;
                }

                .office-card img {
                    max-width: 40px;
                }
            }
        </style>
        <footer class="footer-area">
        <div class="floating-button"> 
            <a href="https://wa.me/971544335310" class="whatsapp-button">
                <img src="assets/img/icon/whatsapp.webp" alt="WhatsApp" loading="lazy">
            </a>
            <div class="text-bubble">
                Say Hello to Prixim Global<br> How may I help you?
            </div>
        </div>
            <script src="script.js"></script>
            <style>
                .floating-button {
                    position: fixed;
                    bottom: 90px;
                    left: 20px;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    z-index: 9999;
                    /* Very high value to ensure it stays above other elements */
                }

                .text-bubble {
                    background-color: white;
                    border-radius: 10px;
                    padding: 10px;
                    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
                    opacity: 0;
                    transform: translateX(20px);
                    animation: fadeInText 1s forwards;
                    animation-delay: 0.5s;
                    font-size: 14px;
                }

                @keyframes fadeInText {
                    0% {
                        opacity: 0;
                        transform: translateX(20px);
                    }

                    100% {
                        opacity: 1;
                        transform: translateX(0);
                    }
                }

                .whatsapp-button {
                    background-color: #25D366;
                    border-radius: 50%;
                    padding: 15px;
                    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
                }

                .whatsapp-button img {
                    width: 30px;
                    height: 30px;
                }
            </style>

<?php include ('includes/footer.php');?>