<?php include ('includes/header.php');?>
    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h1 class="breadcrumb-title">Forex Brokerage Calculator Form
                </h1>
            </div>
            <div class="hero-shape"><img class="hero-shape-1" src="assets/img/shape/01.png" alt="" loading="lazy"></div>
            <div class="hero-right-circles"></div>
        </div>
        <div class="contact-area">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Contact Form Section -->
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h1>Get in touch with us!</h1>
                                <p>Kindly fill out the following form and we will get back to you.</p>
                            </div>
                            <form id="consult" method="post" action="contact.php">
                                <div class="form-group">
                                    <label>Name <span class="required-field">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="required-field">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone <span class="required-field">*</span></label>
                                    <input type="text" class="form-control" name="phone_number" placeholder="Enter Your Phone" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" name="subject" placeholder="Enter Your Company">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Enter Your Message" required></textarea>
                                </div>
                                <div class="form-input mb-3">
                                    <div class="g-recaptcha" data-sitekey="6LeMhgUjAAAAAMkJSW4IudUaN0skK5mQ6a6MxbUT"></div>
                                </div>
                                <button type="submit" class="theme-btn" value="send">Send Message <i class="far fa-paper-plane"></i></button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Office Details Section -->
                </div>
            </div>
        </div>
        


        <style>
          .contact-area {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh; /* Full viewport height */
    padding: 20px;
}

.contact-form {
    max-width: 1200px;
    width: 100%;
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-form-header h1 {
    font-size: 1.8em;
    color: #333;
    margin-bottom: 10px;
}

.contact-form-header p {
    font-size: 1em;
    color: #666;
    margin-bottom: 20px;
}

.theme-btn {
    background-color: #ff366b;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1em;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
}

.theme-btn i {
    margin-left: 5px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .contact-form {
        padding: 20px;
    }

    .contact-form-header h1 {
        font-size: 1.5em;
    }
}

@media (max-width: 576px) {
    .contact-form-header h1 {
        font-size: 1.3em;
    }

    .theme-btn {
        padding: 8px 16px;
        font-size: 0.9em;
    }
}

        </style>



        <footer class="footer-area">
            <div class="floating-button">
                <div class="text-bubble">
                    Say Hello to Prixim Global<br> How may I help you?
                </div>
                <a href="https://wa.me/971544335310 " class="whatsapp-button">
                    <img src="assets/img/icon/whatsapp.webp" alt="WhatsApp" loading="lazy">
                </a>
            </div>
            <script src="script.js"></script>
            <style>
                .floating-button {
                    position: fixed;
                    bottom: 90px;
                    right: 20px;
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
             <div class="cta-area bg pt-60 pb-50">
                <div class="cta-shape"><img class="cta-shape-2" src="assets/img/shape/04.png" alt=""></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 mx-auto">
                            <div class="cta-content">
                                <h2>Calculate Your Expenses of Brokerage With PriximGlobal

                                </h2>
                                <p style="font-size: 18px;">contact us now for more information


                                </p><button class="theme-btn" onclick="toggleForm()">Contact us now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
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
            @media (max-width: 750px) {
            .floating-button {   
                bottom: 160px;
            }
            }
        </style>

<?php include ('includes/footer.php');?>