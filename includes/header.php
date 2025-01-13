<?php include ('config.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="google-site-verification" content="TlcZxQVoKwJF8vMQ7PEgHn4ocwq4k9JWhXJUqDYSLkI" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:image" content="<?php echo $siteImage; ?>">
 

  
  <title>
        <?php echo $title ?>
  </title>
  <meta name="description" content="<?php echo $description ?> " />
    <meta name="keywords" content="<?php echo $keywords ?> " />
    
  
  <script src="https://kit.fontawesome.com/d9355482a9.js" crossorigin="anonymous"></script>
  
  <link rel="icon" type="image/png" sizes="56x56" href="assets/img/logo/favicon-01 (1).png">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/all-fontawesome.min.css" />
  <link rel="stylesheet" href="assets/css/flaticon.css" />
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon-01 (1).png">
</head>


<body>
  <div class="preloader">
    <div class="loader-ripple">
      <div></div>
      <div></div>
    </div>
  </div>
  <div class="top-header">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="contact-details">
            <ul>
              <li><img src="assets/img/icon/mail.png" alt="" loading="lazy"><a
                  href="mailto:sales@priximglobal.com">sales@priximglobal.com</a></li>
              <li><img src="assets/img/whatsapp.webp" alt="united kingdom" loading="lazy" /><a
                  href="https://wa.me/+917972359229">+971544335310</a></li>
              <li><img src="assets/img/logo/favicon-01 (1).png" alt=""/><a href="https://join.skype.com/invite/xraWIPh4p9eP" target="_blank"> &nbsp;Prixim Global</a></li>

            </ul>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="footer-widget-box about-us">

            <ul class="footer-social" style="margin-top: 15px; justify-content: flex-end;">
              <li><a href="https://www.facebook.com/priximglobal/" aria-label="facebook" target="_blank"><i
                    class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com/prixim_global" aria-label="twitter" target="_blank"><i
                    class="fa-brands fa-x-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/company/prixim-global-private-limited/" aria-label="linkedin"
                  target="_blank"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li><a href="https://www.instagram.com/prixim_global/" aria-label="instagram" target="_blank"><i
                    class="fab fa-instagram"></i></a></li>
              <li><a href="https://join.skype.com/invite/xraWIPh4p9eP" aria-label="skype" target="_blank"><i
                    class="fab fa-skype"></i></a></li>
            </ul>
          </div>
        </div>


      </div>
    </div>
  </div>
  <header class="header" style="background-color:#111878">
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Changed from max-width to container-fluid to remove any extra space -->
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo/logo.webp" alt="logo" loading="lazy" />
                </a>
                <div class="mobile-menu-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-btn-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav" style="background-color:#111878">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="index.php" >Home</a></li>

                        <!-- New Tab Example -->
                        <!----  <li class="nav-item"><a class="nav-link" href="new-tab.php">New Tab</a></li>  --->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  data-bs-toggle="dropdown">Know Us</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="infrastructure.php">Infrastructure</a></li>
                                <li><a class="dropdown-item" href="our-clients.php">Our Clients</a></li>
                                <li><a class="dropdown-item" href="our-certification.php">Our Certification</a>
                                </li>
                                <li><a class="dropdown-item" href="our-expertise.php">Our Expertise</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">FX Platforms</a>
                            <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item" href="turn-key-solution.php">MT5 Turnkey solution</a></li>
                                <li><a class="dropdown-item" href="mt5-hosting-whitelabel.php">MT5 Hosting</a></li>
                                <!-- <li><a class="dropdown-item" href="match-trader-whitelabel.php">Match Trader</a>
                                </li> -->
                                <!-- <li><a class="dropdown-item" href="vertexfx-whitelabel.php">VertexFX</a></li> -->
                                <!-- <li><a class="dropdown-item" href="wow-trader-whitelabel.php">Wow Trader</a></li> -->
                                <li><a class="dropdown-item" href="broker-setup-guide.php">Broker Setup Guide</a>
                                </li>
                                <li><a class="dropdown-item" href="forex-brokerage-calculator.php">Brokerage Calculator</a>
                                </li>
                                <li><a class="dropdown-item" href="payments-psp.php">PSP Solutions</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Prop
                                Platforms</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="match-trader-prop-trading.php">Match Trader</a>
                                </li>
                                <li><a class="dropdown-item" href="wow-trader-prop-trading.php">Wow Trader</a></li>
                                
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Broker
                                License</a>
                            <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item" href="St-Lucia.php">St Lucia
                            </a></li>
                            <li><a class="dropdown-item" href="comoros-islands.php">Comoros Islands
                            </a></li>
                            <li><a class="dropdown-item" href="seychelles.php">Seychelles
                                    </a></li>
                                    <li><a class="dropdown-item" href="mauritius.php">Mauritius
                                    </a></li>
                                <li><a class="dropdown-item" href="labuan.php">Labuan</a></li>
                                <li><a class="dropdown-item" href="vanuatu.php">Vanuatu
                                    </a></li>
                            </ul>
                        </li>

                        <!-- <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li> -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">OutSource</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="customer-care-outsourcing-fxbroker.php">Customer
                                        Care</a></li>
                                <li><a class="dropdown-item" href="tech-support-outsourcing.php">Tech Support</a>
                                </li>
                                <li><a class="dropdown-item" href="live-chat-emails.php">Live Chat & Emails</a>
                                </li>
                                <li><a class="dropdown-item" href="kyc-reporting.php">KYC & Reporting</a></li>
                                <li><a class="dropdown-item" href="server-management.php">Server Management</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Digital</a>
                            <ul class="dropdown-menu fade-down">
                                <li><a class="dropdown-item" href="marketing.php">Marketing</a></li>
                                <li><a class="dropdown-item" href="web-development.php">Web Development</a></li>
                                <li><a class="dropdown-item" href="code-devops.php">Code DevOps</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <style>
      .navbar-nav > .nav-item > .nav-link {
    color: white !important; /* Ensure the main nav links are white */
}
    </style>
</header>
