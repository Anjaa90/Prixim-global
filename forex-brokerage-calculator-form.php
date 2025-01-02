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

        <div class="footer-widget">
            <div class="container">
                <div class="footer-top pt-40 pb-40">
                    <div class="footer-newsletter">
                        <div class="col-md-12">
                            <div class="footer-newsletter-content">
                                <img src="assets/img/partner/DUNS img.jpeg"
                                    style="border-radius: 50%; justify-content: center;" alt="" class="img1"
                                    loading="lazy" />
                                <img src="assets/img/partner/iso27001.webp" alt="" class="img1" loading="lazy" />
                                <img src="assets/img/partner/iso9001.webp" alt="" class="img1" loading="lazy" />
                                <img src="assets/img/partner/maccia.webp" alt="" class="img1" loading="lazy" />
                                <img src="assets/img/partner/nasscom.webp" alt="" class="img1" loading="lazy" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer-widget-wrapper pt-100">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box about-us"><a href="#" class="footer-logo"><img
                                    src="assets/img/logo/logo.webp" alt="" style="height: 64px; width: 272px"
                                    aria-label="logo" loading="lazy" /></a>
                            <p class="mb-3">Prixim Global is a Specializes in FX Platforms Technology and BPM
                                Outsourcing
                                Solutions to companies around the World. </p>
                            <ul class="footer-social">
                                <li><a href="https://www.facebook.com/priximglobal/" aria-label="facebook"
                                        target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/prixim_global" aria-label="twitter" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/prixim-global-private-limited/"
                                        aria-label="linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/prixim_global/" aria-label="instagram"
                                        target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://join.skype.com/invite/xraWIPh4p9eP" aria-label="skype"
                                        target="_blank"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title">Know Us</h3>
                            <ul class="footer-list">
                                <li><a href="infrastructure.html"><i class="far fa-caret-right"></i>Infrastructure</a>
                                </li>
                                <li><a href="our-clients.html"><i class="far fa-caret-right"></i>Our Clients</a></li>
                                <li><a href="our-certification.html"><i class="far fa-caret-right"></i>Our
                                        Certification</a></li>
                                <li><a href="our-expertise.html"><i class="far fa-caret-right"></i>Our Expertise</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title">FX Platforms</h3>
                            <ul class="footer-list">
                                <li><a href="mt5-hosting-whitelabel.html"><i class="far fa-caret-right"></i>MT5
                                        Hosting</a></li>
                                <li><a href="match-trader-whitelabel.html"><i class="far fa-caret-right"></i>Match
                                        Trader</a></li>
                                <li><a href="vertexfx-whitelabel.html"><i class="far fa-caret-right"></i>VertexFX</a>
                                </li>
                                <li><a href="wow-trader-whitelabel.html"><i class="far fa-caret-right"></i>Wow
                                        Trader</a></li>
                                <li><a href="broker-setup-guide.html"><i class="far fa-caret-right"></i>Broker Setup
                                        Guide </a></li>
                                <li><a href="forex-brokerage-calculator.html"><i
                                            class="far fa-caret-right"></i>Brokerage Calculator</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title">Prop Platforms</h3>
                            <ul class="footer-list">
                                <li><a href="match-trader-prop-trading.html"><i class="far fa-caret-right"></i>Match
                                        Trader</a></li>
                                <li><a href="wow-trader-prop-trading.html"><i class="far fa-caret-right"></i>Wow
                                        Trader</a></li>
                                <li><a href="turn-key-solution.html"><i class="far fa-caret-right"></i>Turnkey
                                        Solution</a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title">Outsource</h3>
                            <ul class="footer-list">
                                <li><a href="customer-care-outsourcing-fxbroker.html"><i
                                            class="far fa-caret-right"></i>Customer Care</a></li>
                                <li><a href="tech-support-outsourcing.html"><i class="far fa-caret-right"></i>Tech
                                        Support</a></li>
                                <li><a href="live-chat-emails.html"><i class="far fa-caret-right"></i>Live Chat &
                                        Emails</a></li>
                                <li><a href="kyc-reporting.html"><i class="far fa-caret-right"></i>KYC & Reporting</a>
                                </li>
                                <li><a href="server-management.html"><i class="far fa-caret-right"></i>Server
                                        Management</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title">Digital</h3>
                            <ul class="footer-list">
                                <li><a href="marketing.html"><i class="far fa-caret-right"></i>Marketing</a></li>
                                <li><a href="web-development.html"><i class="far fa-caret-right"></i>Web Development</a>
                                </li>
                                <li><a href="code-devops.html"><i class="far fa-caret-right"></i>Code DevOps</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row footer-widget-wrapper pt-20 pb-70">
                    <div class="disclaimer-div">
                        <p><b>Disclaimer : </b>Prixim Global is a company registered in India and other companies
                            bearing the Prixim Global brand, intellectual property and trademark are registered in their
                            respective jurisdictions. Prixim Global offers CX, outsourcing and software development
                            services and is therefore not subject to any regulatory requirements. Prixim Global is not a
                            broker and does not hold client funds. Prixim Global is a software, outsourcing and
                            integration company and does not provide financial, stock exchange, investment or consulting
                            services. Prixim Global does not provide any financial or other services advertised on this
                            website and does not trade crypto currencies. <br /><br />This website serves as a common
                            showcase for the marketing services of various products/ services/ affiliate companies that
                            operate under their local law and have the appropriate licenses and permits for the services
                            offered to B2B Clients. All the Contractual Nature of assignments with Prixim Global are
                            subjected to NDA, SLA, KYC and Invoicings. <br /><br />Please carefully study the documents
                            posted on this website: Legal information and Disclaimers, Privacy Policy, Cookie Policy and
                            Website Summary. These documents are available only in English. You acknowledge that you
                            know the English language at a sufficient level to understand the text of these documents.
                            <br /><br />Prixim Global and its affiliates does not holds any copyright infringement
                            intents. All the logo or Intellectual propery names mentioned on the website (if any) belong
                            to their original owner and jurisdictions.
                        </p><br />
                        <p>Copyright 2017-2024 © Prixim Global, Office F-09, Nano Wing, Vashi Fantasia Business Park,
                            Sector 30A, Vashi, Navi Mumbai 400703, Maharashtra, India <br /><br />All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="//www.dmca.com/Protection/Status.aspx?ID=b09c909e-1592-4ec0-9398-8803fbb34c53"
                            title="DMCA.com Protection Status" class="dmca-badge"> <img
                                src="https://images.dmca.com/Badges/DMCA_logo-std-btn140w.png?ID=b09c909e-1592-4ec0-9398-8803fbb34c53"
                                alt="DMCA.com Protection Status" loading="lazy" /></a>
                    </div>
                    <div class="col-lg-8 align-self-center">
                        <ul class="copyright-list">
                            <li><a href="terms-of-use.html">Terms of Use</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="gdpr-compliances.html">GDPR Compliances</a></li>
                            <li><a href="disclaimer.html">Disclaimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
    <!-- <script
type="text/javascript">var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date(); (function () { var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0]; s1.async = true; s1.src = "https://embed.tawk.to/645b4eb9ad80445890ec1d03/1h02an22m"; s1.charset = "UTF-8"; s1.setAttribute("crossorigin", "*"); s0.parentNode.insertBefore(s1, s0); })(); </script> -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up-to-line"></i></a>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YJWLNTER06"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag("js", new Date()); gtag("config", "G-YJWLNTER06"); </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-249509848-1"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag("js", new Date()); gtag("config", "UA-249509848-1"); </script>
    <script
        type="application/ld+json">{ "@context": "https://schema.org", "@type": "Organization", "name": "Infrastructure", "alternateName": "Infrastructure", "url": "https://priximglobal.com/infrastructure.html", "logo": "https://priximglobal.com/assets/img/logo/logo.webp", "contactPoint":{ "@type": "ContactPoint", "telephone": "+917972359229", "contactType": "customer service", "areaServed": "GB", "availableLanguage": "en"}, "sameAs": [ "https://www.facebook.com/priximglobal/", "https://twitter.com/prixim_global", "https://www.instagram.com/prixim_global/", "https://www.linkedin.com/company/prixim-global-private-limited" ]} </script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/popup.js"></script>
</body>

</html>