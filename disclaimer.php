<?php include ('includes/header.php');?>
    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h1 class="breadcrumb-title">Disclaimer</h1>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Disclaimer</li>
                </ul>
            </div>
            <div class="hero-shape">
                <img class="hero-shape-1" src="assets/img/shape/01.png" alt="" loading="lazy">
            </div>
            <div class="hero-right-circles"></div>
        </div>
        <div class="pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="terms-content">
                            <h2>Disclaimer for Prixim Global</h2>
                            <p>If you require any more information or have any questions about our site's disclaimer,
                                please feel free to contact us by email at. </p>
                            <p>All the information on this website - https://priximgolbal.com is published in good faith
                                and for general information purposes only. Prixim global makes no guarantees about the
                                accuracy, completeness, or reliability of this information. Any action you take upon the
                                information you find on this website (Prixim Global), is strictly at your own risk. As a
                                result of using our website, Prixim Global is not responsible for any losses and/or
                                damages. </p>
                            <p>Through hyperlinks to external sites on our website, you can visit other websites. While
                                we aim to provide links to useful and ethical websites, we have no control over their
                                content. Please note that such links do not imply a recommendation of the content on
                                these other websites. We may not be able to remove links that might have gone 'bad'
                                before site owners and content change without notice. </p>
                            <p>Make sure to read the Privacy Policies and Terms of Service of these sites before
                                engaging in any business or uploading any information. </p>
                        </div>
                        <div class="terms-content">
                            <h2>Consent</h2>
                            <p>The terms of our disclaimer are hereby accepted and agreed to by you by using this
                                website. </p>
                        </div>
                        <div class="terms-content">
                            <h2>Update</h2>
                            <p>We will prominently post any changes to this document if we update, amend, or make
                                changes. </p>
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
        </style>

<?php include ('includes/footer.php');?>