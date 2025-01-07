
<?php include ('includes/header.php');?>
    <style>
        /* Container holding all the cards */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            /* This ensures space between cards */
            align-items: stretch;
            /* Ensures all cards have the same height */
        }

        /* Each card */
        .plan-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: stretch;
            border-radius: 10px;
            background: #fff;
            color: #333;
            padding: 30px;
            text-align: center;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            margin: 15px 0;
            flex: 1 1 300px;
            /* Ensures equal width with a minimum width */
            min-height: 350px;
            /* All cards will have at least this height */
            height: 100%;
            /* Ensures height stretches to the maximum possible value */

            background-color: #e5ecf1 !important;
            /* Same light blue color for all cards */
        }


        .plan-card ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
            flex-grow: 1;
            /* Ensures the list takes up the remaining space */
            overflow-y: hidden;
        }

        .plan-card .btn-plan {
            background-color: #111878;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: auto;
            /* Push button to the bottom */
        }

        .plan-card .btn-plan:hover {
            background-color: #5949b9;
            color: #fff;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .plan-card {
                padding: 20px;
            }

            .plan-card .price {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 576px) {
            .pricing-header h1 {
                font-size: 1.5rem;
            }

            .toggle-switch {
                flex-direction: column;
            }

            .toggle-switch label {
                margin: 5px 0;
            }

            .plan-card .price {
                font-size: 1.6rem;
            }

            .card-container .plan-card {
                flex: 1 1 100%;
                /* Cards stack vertically on small screens */
            }
        }
    </style>
    

    <style>
        .tab-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .contact-area {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }

        .left-content {
            padding-bottom: 20px;
        }

        .country-images {
            display: flex;
            gap: 15px;
            justify-content: flex-start;
            align-items: center;
        }

        .country-flag {
            text-align: center;
        }

        .country-flag img {
            width: 217px;
            /* Adjust size as needed */
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .country-flag p {
            margin-top: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .country-images {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>

    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h1 class="breadcrumb-title">Pricing
                </h1>
            </div>
            <div class="hero-shape"><img class="hero-shape-1" src="assets/img/shape/01.png" alt="" loading="lazy"></div>
            <div class="hero-right-circles"></div>
        </div>


        <div class="tabs-container">
            <div class="tabs">
                <button class="tab-button active" onclick="openTab(event, 'ForexPlatforms')">Forex Platforms</button>
                <button class="tab-button" onclick="openTab(event, 'PropPlatforms')">Prop Platforms</button>
                <button class="tab-button" onclick="openTab(event, 'BrokerLicense')">Broker License</button>
                <button class="tab-button" onclick="openTab(event, 'Outsourcings')">Outsourcing</button>
            </div>

            <div class="tab-content-container">
                <!-- Tab 1 Content -->
                <div id="ForexPlatforms" class="tab-content active">
                    <!-- <h2>Flexible Forex Platform Pricing for Every Trading Need</h2>
                    <p>Prixim Global offers advanced Forex trading platforms with Flexible Pricing to fit any business model, providing solutions tailored to your needs.</p> -->
                    <div class="service-area  pb-50">
                        <div class="container">
                            <div class="feature-area pt-10">
                                <div class="container">
                                    <div class="feature-wrapper">
                                        <h2 class="text-center site-title">Flexible Forex Platform Pricing
                                            <span>for Every Trading Need</span>

                                        </h2>
                                        <p style="padding-top: 20px;">Fill in the form to get detailed pricing for the best platform you need.</p>
                                        <br><br>

                                        <div class="row">
                                            <!-- MT5 Hosting -->
                                            <div class="col-md-6 col-lg-3">
                                                <div class="feature-item feature-color-4">
                                                    <div class="feature-top">
                                                        <div class="icon">
                                                            <!-- Replace the icon with an image -->
                                                            <img src="assets\img\icon\mt5.jpg" alt="Wow Trader" style="width: 70px; height: 50px;">
                                                        </div>
                                                        <h3 style="font-size: 22px;" class="mb-2">MT5 Trader</h3>
                                                    </div>
                                                    <div class="feature-content">
                                                        <p>A powerful, multi-asset platform with advanced charting and low-latency performance.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Match Trader -->
                                            <div class="col-md-6 col-lg-3">
                                                <div class="feature-item feature-color-4">
                                                    <div class="feature-top">
                                                        <div class="icon">
                                                            <!-- Replace the icon with an image -->
                                                            <img src="assets\img\icon\match  trader icon.png" alt="Wow Trader" style="width: 60px; height: 60px;">
                                                        </div>
                                                        <h3 style="font-size: 22px;" class="mb-2">Match Trader</h3>
                                                    </div>
                                                    <div class="feature-content">
                                                        <p>Perfect for high-frequency trading with fast order matching and top-notch risk management.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Vertex FX -->
                                            <div class="col-md-6 col-lg-3">
                                                <div class="feature-item feature-color-4">
                                                    <div class="feature-top">
                                                        <div class="icon">
                                                            <!-- Replace the icon with an image -->
                                                            <img src="assets\img\icon\vertex-img.webp" alt="Wow Trader" style="width: 50px; height: 50px;">
                                                        </div>
                                                        <h3 style="font-size: 22px;" class="mb-2">Vertex FX</h3>
                                                    </div>
                                                    <div class="feature-content">
                                                        <p>A versatile platform with rich analytics, suitable for individual and institutional traders.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Wow Trader -->
                                            <div class="col-md-6 col-lg-3">
                                                <div class="feature-item feature-color-4">
                                                    <div class="feature-top">
                                                        <div class="icon">
                                                            <!-- Replace the icon with an image -->
                                                            <img src="assets\img\icon\wow trader icon.webp" alt="Wow Trader" style="width: 50px; height: 50px;">
                                                        </div>
                                                        <h3 style="font-size: 22px;" class="mb-2">Wow Trader</h3>
                                                    </div>
                                                    <div class="feature-content">
                                                        <p>User-friendly and straightforward, ideal for brokers who want an easy-to-manage platform.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-area pt-50 pb-50">
                        <!-- Regular form starts here -->
                        <div class="container">
                            <div class="contact-wrapper">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 align-self-center">
                                        <div class="contact-form">
                                            <div class="contact-form-header">
                                                <h2 style="padding-top: 40px;">Fill this form for free consultation.</h2>
                                            </div>
                                            <form id="consult" method="post" action="submit_form.php">
                                                <div class="row">
                                                    <!-- First Name -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="First Name" required>
                                                        </div>
                                                    </div>

                                                    <!-- Last Name -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Last Name" required>
                                                        </div>
                                                    </div>

                                                    <!-- Email -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter Your Email" required>
                                                        </div>
                                                    </div>

                                                    <!-- Phone Number -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="tel" class="form-control" name="phone_number"
                                                                placeholder="Enter Your Phone No." required>
                                                        </div>
                                                    </div>

                                                    <!-- Skype ID -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="skype"
                                                                placeholder="Enter Your Skype ID">
                                                        </div>
                                                    </div>

                                                    <!-- Country -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="country"
                                                                placeholder="Enter Your Country" required>
                                                        </div>
                                                    </div>

                                                    <!-- Services Interested In -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="custom-select-wrapper">
                                                                <select id="service-category" name="serviceCategory"
                                                                    class="form-control" required>
                                                                    <option value="" disabled selected>Choose Category
                                                                    </option>
                                                                    <option value="technology">Technology</option>
                                                                    <option value="outsourcing">Outsourcing</option>
                                                                    <option value="digital">Digital</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Dynamic Specific Service -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="custom-select-wrapper">
                                                                <select id="specific-service" name="specificService"
                                                                    class="form-control" required>
                                                                    <option value="" disabled selected>Select Service
                                                                        First
                                                                    </option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Message -->
                                                <div class="form-group">
                                                    <textarea name="message" cols="30" rows="5" class="form-control"
                                                        placeholder="Enter Your Message"></textarea>
                                                </div>

                                                <!-- Google reCAPTCHA -->
                                                <div class="form-input mb-3">
                                                    <div class="g-recaptcha"
                                                        data-sitekey="6LeMhgUjAAAAAMkJSW4IudUaN0skK5mQ6a6MxbUT"></div>
                                                </div>

                                                <!-- Submit Button -->
                                                <button type="submit" class="theme-btn" value="send">Send
                                                    Message</button>
                                                <div class="col-md-12 mt-3">
                                                    <div class="form-messege text-success"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Regular form ends here -->

                    </div>
                </div>
            </div>
        

        <!-- Tab 2 Content -->
        <div id="PropPlatforms" class="tab-content">
            <h2 class="service-area" style="text-align: center;" >Flexible pricing on <span style="color:#FF366B;">Match Trader & WoW Trader</span> for Prop Trading
            </h2>
            <p style=" text-align: center; padding-top: 20px;">Fill in the form to get a custom quote and find the Best fit for your
                Brokerage</p>
            <!-- <p>We offer Match Trader and WoW Trader platforms designed for Prop Trading. Built for speed and
                        reliability, these platforms help brokers empower traders.</p> -->
            <br>
            <!-- <p>We offer Match Trader and WoW Trader platforms designed for Prop Trading. Built for speed and
                        reliability, these platforms help brokers empower traders.</p> -->
            <section class="prop-trading" style="padding-top: 20px;">
                <div class="container">
                    <!-- <h2 class="text-center mb-5">Platforms for Prop Trading Offered by <span style="color:#FF366B;">Prixim Global</span></h2> -->
                    <div class="row">
                        <!-- Platform 1: Match Trader -->
                        <div class="col-lg-6">
                            <div class="platform-card">
                                <div class="platform-icon " style="color:#FF366B; padding-right: 30px;">
                                    <img src="assets/img/icon/match  trader icon.png"
                                        style="height: 100px; width: 100px;"
                                        alt="Wow Trader Platforms for Prop Trading " loading="lazy">
                                    <!-- Icon for Match Trader -->
                                </div>
                                <div>
                                    <h5 class="platform-title"><a href="match-trader-prop-trading.html"
                                            alt="Match Trader Platforms for Prop Trading ">Match Trader</a>
                                    </h5>
                                    <p class="platform-description">Built for high-frequency trading, Match
                                        Trader offers fast order matching, real-time data, and robust risk
                                        management. Perfect for prop trading brokers seeking speed and
                                        efficiency.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Platform 2: Wow Trader -->
                        <div class="col-lg-6">
                            <div class="platform-card">
                                <div class="platform-icon" style="color:#00D3A0; padding-right: 30px;">
                                    <img src="assets/img/icon/wow trader icon.webp" style="width: 100px; height: 100px;"
                                        loading="lazy">
                                    <!-- Icon for Wow Trader -->
                                </div>
                                <div>
                                    <h5 class="platform-title"><a href="wow-trader-prop-trading.html">Wow
                                            Trader</a>
                                    </h5>
                                    <p class="platform-description">Simple yet powerful, WoW Trader provides an
                                        easy-to-use interface while delivering the performance needed for
                                        successful trading. It is ideal for brokers looking for a user-friendly
                                        solution.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-area py-120">
                    <div class="container">
                        <div class="contact-wrapper">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 align-self-center">
                                    <div class="contact-form">
                                        <div class="contact-form-header">
                                            <h2>Fill this form for free consultation.</h2>
                                        </div>
                                        <form id="consult" method="post" action="submit_form.php">
                                            <div class="row"> <!-- First Name -->
                                                <div class="col-md-6">
                                                    <div class="form-group"> <input type="text" class="form-control"
                                                            name="name" placeholder="First Name" required> </div>
                                                </div>
                                                <!-- Last Name -->
                                                <div class="col-md-6">
                                                    <div class="form-group"> <input type="text" class="form-control"
                                                            name="name" placeholder="Last Name" required> </div>
                                                </div>
                                                <!-- Email -->
                                                <div class="col-md-6">
                                                    <div class="form-group"> <input type="email" class="form-control"
                                                            name="email" placeholder="Enter Your Email" required> </div>
                                                </div>
                                                <!-- Phone Number -->
                                                <div class="col-md-6">
                                                    <div class="form-group"> <input type="tel" class="form-control"
                                                            name="phone_number" placeholder="Enter Your Phone No."
                                                            required> </div>
                                                </div>
                                                <!-- Skype ID -->
                                                <div class="col-md-6">
                                                    <div class="form-group"> <input type="text" class="form-control"
                                                            name="skype" placeholder="Enter Your Skype ID"> </div>
                                                </div>
                                                <!-- Country -->
                                                <div class="col-md-6">
                                                    <div class="form-group"> <input type="text" class="form-control"
                                                            name="country" placeholder="Enter Your Country" required>
                                                    </div>
                                                </div>
                                                <!-- Services Interested In -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="custom-select-wrapper"> <select
                                                                id="service-category" name="serviceCategory"
                                                                class="form-control" required>
                                                                <option value="" disabled selected>Choose
                                                                    Category </option>
                                                                <option value="technology">Technology</option>
                                                                <option value="outsourcing">Outsourcing</option>
                                                                <option value="digital">Digital</option>
                                                            </select> </div>
                                                    </div>
                                                </div>
                                                <!-- Dynamic Specific Service -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="custom-select-wrapper"> <select
                                                                id="specific-service" name="specificService"
                                                                class="form-control" required>
                                                                <option value="" disabled selected>Select
                                                                    Service First </option>
                                                            </select> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Message -->
                                            <div class="form-group"> <textarea name="message" cols="30" rows="5"
                                                    class="form-control" placeholder="Enter Your Message"></textarea>
                                            </div>
                                            <!-- Google reCAPTCHA -->
                                            <div class="form-input mb-3">
                                                <div class="g-recaptcha"
                                                    data-sitekey="6LeMhgUjAAAAAMkJSW4IudUaN0skK5mQ6a6MxbUT">
                                                </div>
                                            </div>
                                            <!-- Submit Button --> <button type="submit" class="theme-btn"
                                                value="send">Send Message</button>
                                            <div class="col-md-12 mt-3">
                                                <div class="form-messege text-success"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Tab 3 Content -->
        <div id="BrokerLicense" class="tab-content">
            <h2 style="text-align: center;">Affordable Forex Broker Licensing Solutions</h2>
           
            <div class="contact-area">
                <!-- Left side text content -->
                <div class="left-content">
                    <p  style="text-align: center; padding-top: 35px;">Prixim Global provides complete turnkey solutions for launching a Forex brokerage with
                        licensing support in Mauritius, Labuan, Comoros Islands, Seychelles, and Vanuatu. We
                        handle every step, from securing your license to setting up banking and compliance, so
                        you can focus on growing your business.</p>
                </div>

                <!-- Right side country images in a horizontal line -->
                <div class="country-images">
                    <div class="country-flag">
                        <img src="https://priximglobal.com/assets/img/Mauritius%20flag.png" alt="Mauritius">
                        <p>Mauritius</p>
                    </div>
                    <div class="country-flag">
                        <img src="https://priximglobal.com/assets/img/labuan%20flag.png" alt="Labuan">
                        <p>Labuan</p>
                    </div>
                    <div class="country-flag">
                        <img src="https://priximglobal.com/assets/img/Comoros%20Islands%20flag.png"
                            alt="Comoros Islands">
                        <p>Comoros Islands</p>
                    </div>
                    <div class="country-flag">
                        <img src="https://priximglobal.com/assets/img/Seychelles%20flag.png" alt="Seychelles">
                        <p>Seychelles</p>
                    </div>
                    <div class="country-flag">
                        <img src="https://priximglobal.com/assets/img/Vanuatu%20flag.png" alt="Vanuatu">
                        <p>Vanuatu</p>
                    </div>
                </div>
            </div>


            <div class="container">
                <p  style="text-align: center; font-size: 18px; padding-top: 80px ; padding-bottom: 50px;">Fill in the form to receive a custom quote on our turnkey packages for Mauritius, Labuan, Comoros
                    Islands, Seychelles, and Vanuatu.</p>
                <div class="contact-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 align-self-center">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                   
                        
                                    <h2>Fill this form for free consultation.</h2>
                                </div>
                                <form id="consult" class="consult-form" method="post" action="submit_form.php">
                                    <!-- Form fields go here -->
                                    <div class="row">
                                        <!-- First Name -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="first_name"
                                                    placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <!-- Last Name -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="last_name"
                                                    placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter Your Email" required>
                                            </div>
                                        </div>
                                        <!-- Phone Number -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="phone_number"
                                                    placeholder="Enter Your Phone No." required>
                                            </div>
                                        </div>
                                        <!-- Skype ID -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="skype"
                                                    placeholder="Enter Your Skype ID">
                                            </div>
                                        </div>
                                        <!-- Country -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="country"
                                                    placeholder="Enter Your Country" required>
                                            </div>
                                        </div>
                                        <!-- Services Interested In (Category) -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="custom-select-wrapper">
                                                    <select id="service-category" name="serviceCategory"
                                                        class="form-control" required>
                                                        <option value="" disabled selected>Choose Category
                                                        </option>
                                                        <option value="technology">Technology</option>
                                                        <option value="outsourcing">Outsourcing</option>
                                                        <option value="digital">Digital</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Dynamic Specific Service -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="custom-select-wrapper">
                                                    <select id="specific-service" name="specificService"
                                                        class="form-control" required>
                                                        <option value="" disabled selected>Select Service
                                                            First</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Message -->
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="5" class="form-control"
                                            placeholder="Enter Your Message"></textarea>
                                    </div>
                                    <!-- Google reCAPTCHA -->
                                    <div class="form-input mb-3">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LeMhgUjAAAAAMkJSW4IudUaN0skK5mQ6a6MxbUT"></div>
                                    </div>
                                    <!-- Submit Button -->
                                    <button type="submit" class="theme-btn" value="send">Send
                                        Message</button>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                  
        <!--Tab content 4-->   
        <div id="Outsourcings" class="tab-content">
                <!-- Your pricing content goes here -->
                <div class="container">
                    <div class="pricing-header">
                        <h1 style="text-align: center; padding-bottom: 20px;">Pricing Plans for Everyone</h1>
                    </div>
                    <div class="row justify-content-center">
                
                        <!-- Email Support -->
                        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
                            <div class="plan-card" style=" padding: 20px; border-radius: 10px;">
                                <h3>Email Support</h3>
                                <ul>
                                    <li><i class="fas fa-check"></i> Helpdesk Support Emails</li>
                                    <li><i class="fas fa-check"></i> Point of Contact Emails</li>
                                    <li><i class="fas fa-check"></i> General Emails</li>
                                </ul>
                                <a href="#" class="btn-plan">Hourly Billing</a>
                            </div>
                        </div>
                
                        <!-- Chat Support -->
                        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
                            <div class="plan-card" style="background-color: #e8f6ff; padding: 20px; border-radius: 10px;">
                                <h3>Chat Support</h3>
                                <ul>
                                    <li><i class="fas fa-check"></i> Chat Survey</li>
                                    <li><i class="fas fa-check"></i> Ticket Management</li>
                                    <li><i class="fas fa-check"></i> Visitor Management & Tagging</li>
                                </ul>
                                <a href="#" class="btn-plan">Hourly Billing</a>
                            </div>
                        </div>
                
                        <!-- Phone Inbound Support -->
                        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
                            <div class="plan-card" style="background-color: #d9efff; padding: 20px; border-radius: 10px;">
                                <h3>Phone Inbound Support</h3>
                                <ul>
                                    <li><i class="fas fa-check"></i> Answer, Screen, and Attend Customer Calls</li>
                                    <li><i class="fas fa-check"></i> Forward Business Calls via Emails</li>
                                    <li><i class="fas fa-check"></i> IVR Configuration & Management</li>
                                    <li><i class="fas fa-check"></i> Support to Sales Scheduling</li>
                                </ul>
                                <a href="#" class="btn-plan">Hourly Billing</a>
                            </div>
                        </div>
                
                        <!-- CRM and Back Office -->
                        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
                            <div class="plan-card" style="background-color: #f0f4ff; padding: 20px; border-radius: 10px;">
                                <h3>CRM and Back Office</h3>
                                <ul>
                                    <li><i class="fas fa-check"></i> Account Creation & KYC Management</li>
                                    <li><i class="fas fa-check"></i> Verification & Compliance Management</li>
                                    <li><i class="fas fa-check"></i> Fundings & Withdrawals Management</li>
                                </ul>
                                <a href="#" class="btn-plan"> Fixed Billing (No Volume Fee)</a>
                            </div>
                        </div>
                
                        <!-- Server / MT4 / MT5 Management -->
                        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
                            <div class="plan-card" style="background-color: #e8f6ff; padding: 20px; border-radius: 10px;">
                                <h3>Server / MT4 / MT5 Management</h3>
                                <ul>
                                    <li><i class="fas fa-check"></i> Windows Server Management</li>
                                    <li><i class="fas fa-check"></i> Administrator Configurations</li>
                                    <li><i class="fas fa-check"></i> MT4/MT5 API Management</li>
                                </ul>
                                <a href="#" class="btn-plan"> Fixed Billing (No Volume Fee)</a>
                            </div>
                        </div>
                
                        <!-- Technical Support -->
                        <div class="col-lg-4 col-md-6 col-sm-10 mb-4">
                            <div class="plan-card" style="background-color: #d9efff; padding: 20px; border-radius: 10px;">
                                <h3>Technical Support</h3>
                                <ul>
                                    <li><i class="fas fa-check"></i> Remote Access Support</li>
                                    <li><i class="fas fa-check"></i> MT4 / MT5 Troubleshooting</li>
                                    <li><i class="fas fa-check"></i> Installations & Configurations</li>
                                </ul>
                                <a href="#" class="btn-plan">Instance Based Billing</a>
                            </div>
                        </div>
                
                    </div>
                </div>
                 
        </div>
        

        </div>

        <script>
            function openTab(event, tabName) {
            // Hide all tab contents
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => {
                content.classList.remove('active');
            });

            // Remove active class from all tab buttons
            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach(button => {
                button.classList.remove('active');
            });

            // Show the clicked tab's content and add active class to the clicked tab button
            document.getElementById(tabName).classList.add('active');
            event.currentTarget.classList.add('active');
        }

        </script>
    </main>
    <style>
        .platform-card {
            border: 1px solid #e2e2e2;
            /* Adjust color and width as needed */
            border-radius: 10px;
            /* Optional: Add rounded corners */
            padding: 20px;
            align-items: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            /* Optional: Add shadow for a card effect */
        }

        /* General Styling */
        .tabs-container {
            background-color: #FFFFFF;
            padding: 20px;
        }

        .tabs {
            display: flex;
            justify-content: center;
            background-color: #F1F1F1;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .tab-button {
            padding: 15px 30px;
            cursor: pointer;
            border: none;
            outline: none;
            font-size: 18px;
            font-weight: bold;
            background-color: #F1F1F1;
            color: #333;
            transition: background-color 0.3s, color 0.3s;
            flex-grow: 1;
            text-align: center;
        }

        .tab-button.active {
            background-color: #111878;
            color: rgb(255, 255, 255);
        }

        .tab-content-container {
            margin-top: 20px;
            background-color: #ffffff;
            padding: 50px;
            text-align: center;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .table-container-fluid {
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 0 270px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Responsive Adjustments for Tablets (up to 768px wide) */
        @media (max-width: 768px) {
            .table-container-fluid {
                padding: 0 20px;
            }

            .tab-button {
                padding: 10px 20px;
                font-size: 16px;
            }

            .tab-content-container {
                padding: 30px;
            }

            th,
            td {
                padding: 8px;
                font-size: 14px;
            }
        }

        /* Additional Adjustments for Small Mobile Devices (up to 480px wide) */
        @media (max-width: 480px) {
            .table-container-fluid {
                padding: 0 10px;
            }

            .tab-button {
                font-size: 14px;
                padding: 8px 15px;
            }

            .tab-content-container {
                padding: 20px;
            }

            th,
            td {
                padding: 6px;
                font-size: 12px;
            }

            .table-container-fluid table,
            .table-container-fluid table tr,
            .table-container-fluid table th,
            .table-container-fluid table td {
                display: block;
                width: 100%;
            }

            .table-container-fluid table tr {
                margin-bottom: 10px;
                border-bottom: 1px solid #d9d9d9;
            }

            th {
                background-color: #f1f1f1;
                font-weight: bold;
            }
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            border: 1px solid #d9d9d9;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #111878;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .section-header {
            background-color: #3F4492;
            font-weight: bold;
        }

        .service-title {
            font-weight: bold;
        }

        .Outsourcings {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>


    <style>
        .footer-section {
            padding: 20px;

            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        /* Responsive for tablets */
        @media (max-width: 768px) {
            .footer-section {
                margin-left: 30px;
                margin-right: 30px;
                padding: 15px;
            }
        }

        /* Responsive for mobile devices */
        @media (max-width: 480px) {
            .footer-section {
                margin-left: 10px;
                margin-right: 10px;
                padding: 10px;
                border: 1px solid #999;
                /* Adjusted border for small devices */
            }

            .legal-notice p {
                font-size: 14px;
                line-height: 1.5;
            }
        }
    </style>
    <div class="cta-area bg pt-60 pb-50">
        <div class="cta-shape"><img class="cta-shape-2" src="assets/img/shape/04.png" alt=""></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto">
                    <div class="cta-content">
                        <h2>Start your Forex brokerage with our trading platforms, Prop Trading, Broker Licensing, and outsourcing support. 

                        </h2>
                        <p style="font-size: 18px;">Contact us to know more

                        </p><button class="theme-btn" onclick="toggleForm()">Start Your Brokerage</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-area">
        <div class="floating-button">
            <div class="text-bubble">
                Say Hello to Prixim Global<br> How may I help you?
            </div>
            <a href="https://wa.me/971544335310" class="whatsapp-button">
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
                                        <li><a href="forex-brokerage-calculator.html"><i class="far fa-caret-right"></i>Brokerage Calculator</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title">Broker License
                            </h3>
                            <ul class="footer-list">
                                <li><a href="labuan.html"><i class="far fa-caret-right"></i>Labuan</a></li>
                                <li><a href="mauritius.html"><i class="far fa-caret-right"></i>Mauritius</a></li>
                                  <li><a class="dropdown-item" href="Broker License - St Lucia.html">Broker License-St Lucia
                                        </a></li>
                                <li><a href="seychelles.html"><i class="far fa-caret-right"></i>Seychelles</a>
                                <li><a href="vanuatu.html"><i class="far fa-caret-right"></i>Vanuatu</a>
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
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h3 class="footer-widget-title"><a href="match-trader-prop-trading.html"
                                    style="color: #fff;"><i class="far fa-caret-right"></i>Pricing
                                </a></h3>

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
                        <p>Copyright 2017-2024 © Prixim Global, Office 71-75, Shelton Street, Covent Garden, London,
                            WC2H 9JQ Ltd <br/><br />All Rights Reserved.
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
    <script>
        function toggleForm() {
            var modal = document.getElementById("formModal");
            modal.style.display = (modal.style.display === "block") ? "none" : "block";
        }

        // Close the modal when clicking outside of the content
        window.onclick = function (event) {
            var modal = document.getElementById("formModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Dynamic Service Selection
        document.getElementById('service-category').addEventListener('change', function () {
            var serviceCategory = this.value;
            var specificService = document.getElementById('specific-service');
            specificService.innerHTML = '';

            if (serviceCategory === 'technology') {
                specificService.innerHTML += '<option value="mt5">MT5</option>';
                specificService.innerHTML += '<option value="matchTrader">Match Trader</option>';
                specificService.innerHTML += '<option value="vertexFX">Vertex FX</option>';
                specificService.innerHTML += '<option value="sirix">Sirix</option>';
                specificService.innerHTML += '<option value="extremeWowTrader">XTreme / Wow Trader</option>';
            } else if (serviceCategory === 'outsourcing') {
                specificService.innerHTML += '<option value="customerSupport">Customer Support</option>';
                specificService.innerHTML += '<option value="techSupport">Technical Support</option>';
                specificService.innerHTML += '<option value="serverManagement">Server Management</option>';
                specificService.innerHTML += '<option value="liveChatEmail">Live Chat & Emails</option>';
            } else if (serviceCategory === 'digital') {
                specificService.innerHTML += '<option value="marketing">Marketing</option>';
                specificService.innerHTML += '<option value="codeDevops">Code/DevOps</option>';
                specificService.innerHTML += '<option value="webDevelopment">Web Development</option>';
            }
        });
    </script>
    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
    <script
        type="text/javascript">var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date(); (function () { var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0]; s1.async = true; s1.src = 'https://embed.tawk.to/645b4eb9ad80445890ec1d03/1h02an22m'; s1.charset = 'UTF-8'; s1.setAttribute('crossorigin', '*'); s0.parentNode.insertBefore(s1, s0); })(); </script>
    <a href="#" id="scroll-top"><i class="far fa-arrow-up-to-line"></i></a>
    <script async src="https://www.google.com/recaptcha/api.js"></script>
    <script>window.onload = function () {
            var recaptcha = document.forms["consult"]["g-recaptcha-response"]; recaptcha.required = true; recaptcha.oninvalid = function (e) { // do something
                alert("Please complete the captcha");
            }
        } </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YJWLNTER06"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments) } gtag('js', new Date()); gtag('config', 'G-YJWLNTER06');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-249509848-1"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments) } gtag('js', new Date()); gtag('config', 'UA-249509848-1');
    </script>
    <script
        type="application/ld+json">{ "@context": "https://schema.org", "@type": "Organization", "name": "Contact Us", "alternateName": "Contact Us", "url": "https://priximglobal.com/contact-us.php", "logo": "https://priximglobal.com/assets/img/logo/logo.webp", "contactPoint":{ "@type": "ContactPoint", "telephone": "+917972359229", "contactType": "customer service", "areaServed": "GB", "availableLanguage": "en"}, "sameAs": [ "https://www.facebook.com/priximglobal/", "https://twitter.com/prixim_global", "https://www.instagram.com/prixim_global/", "https://www.linkedin.com/company/prixim-global-private-limited" ]} </script>
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
    <script src="assets/js/contact-form.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>