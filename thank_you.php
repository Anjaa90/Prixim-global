<?php include ('includes/header.php');?>
<style>
    .service-item {
        height: 190px;
    }

    @media (max-width: 991px) {
        .service-item {
            height: fit-content;
        }
    }
</style>

    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h1 class="breadcrumb-title"></h1>
                
            </div>
            <div class="hero-shape"><img class="hero-shape-1" src="assets/img/shape/01.png"></div>
            <div class="hero-right-circles"></div>
        </div>
<body>
    <div class="container"style="padding-top: 100px; padding-bottom:120px; text-align:center;"> 
        <div class="thank-you-message">
            <h1>Thank You!</h1>
            <p>We appreciate your interest. Our team will get back to you shortly.</p>
        </div>
    </div>
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


</body>

</html>
