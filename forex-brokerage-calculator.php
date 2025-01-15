<?php include ('includes/header.php');?>
    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h1 class="breadcrumb-title">Forex Brokerage Calculator
                </h1>
            </div>
            <div class="hero-shape"><img class="hero-shape-1" src="assets/img/shape/01.png" alt="" loading="lazy"></div>
            <div class="hero-right-circles"></div>
        </div>




        <style>
            #msform {
                text-align: center;
                margin-top: 30px;
            }

            #progressbar {
                display: flex;
                justify-content: space-between;
                list-style-type: none;
                padding: 0;
                position: relative;
                counter-reset: step;
                gap: 10px;
            }

            #progressbar li {
                text-align: center;
                text-transform: uppercase;
                font-weight: bold;
                color: #6c757d;
                position: relative;
                flex: 1;
                font-size: 13px;
                min-width: 80px;
            }

            #progressbar li::before {
                content: counter(step);
                counter-increment: step;
                width: 25px;
                height: 25px;
                border: 2px solid #e0e0e0;
                display: block;
                text-align: center;
                margin: 0 auto 10px auto;
                border-radius: 50%;
                background-color: #fff;
                line-height: 22px;
                color: #6c757d;
                font-weight: bold;
                font-size: 14px;
            }

            #progressbar li::after {
                content: "";
                position: absolute;
                width: 100%;
                height: 2px;
                background-color: #e0e0e0;
                top: 12px;
                left: -50%;
                z-index: -1;
            }

            #progressbar li:first-child::after {
                content: none;
            }

            #progressbar li.active::after,
            #progressbar li.completed::after {
                background-color: #dc3545;
            }

            /* Responsive Adjustments */
            @media (max-width: 576px) {
                #progressbar {
                    flex-direction: column;
                    /* Change to vertical alignment */
                    align-items: center;
                    /* Center items vertically */
                }

                #progressbar li {
                    width: 100%;
                    /* Full width on small screens */
                    text-align: center;
                    font-size: 12px;
                    padding: 10px 0;
                    position: relative;
                }

                #progressbar li::after {
                    display: none;
                    /* Remove underline on mobile */
                }
            }
        </style>


        <div class="container">
            <h2 style="text-align: center;">Forex Brokerage Calculator</h2>
            <form id="msform">
                <ul id="progressbar">
                    <li class="active">Compliance</li>
                    <li>Logo</li>
                    <li>Website</li>
                    <li>Trading Platform</li>
                    <li>CRM & Trader's Room</li>
                    <li>Cabinet Mobile App</li>
                    <li>CRM Mobile App</li>
                    <li>Risk Management System</li>
                    <li>Liquidity</li>
                    <li>Copy Trading</li>
                    <li>PAMM</li>
                </ul>
            </form>
        </div>


       

        <style>
            .containers {
                max-width: 1200px;
                width: 100%;
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin: auto;
            }

            h1 {
                color: #080c3c;
                font-size: 1.8em;
                margin-bottom: 20px;
                text-align: center;
            }

            /* Card container styling */
            .card-containers {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
                width: 100%;
            }

            /* Individual card styling */
            .card {
                background-color: #ffe6ed;
                border-radius: 5px;
                padding: 20px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                color: #080c3c;
                display: flex;
                flex-direction: column;
                align-items: start;
            }

            .card.selected {
                background: linear-gradient(135deg, #ff366b, #ff7f9e);
                color: #ffffff;
            }

            .flag {
                font-size: 2em;
                margin-bottom: 10px;
            }

            .card-content h2 {
                font-size: 1.2em;
                font-weight: bold;
            }

            .duration,
            .cost,
            .renewal {
                font-size: 0.9em;
                margin: 5px 0;
            }

            .cost span,
            .renewal span {
                font-weight: bold;
                font-size: 1.1em;
            }

            .select-btn {
                align-self: flex-end;
                background-color: #ff366b;
                color: #ffffff;
                border: none;
                padding: 5px 10px;
                border-radius: 15px;
                cursor: pointer;
                font-size: 0.8em;
            }

            .footer {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
                width: 100%;
            }

            .back-btn,
            .next-btn {
                background-color: #ff366b;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                border-radius: 20px;
                cursor: pointer;
                font-weight: bold;
                font-size: 1em;
            }

            .next-btn {
                background-color: #ff366b;
            }

            /* Total amount section styling */
            .total-amount-section {
                background-color: #080c3c;
                color: #ffffff;
                margin-top: 20px;
                padding: 20px;
                border-radius: 10px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }

            .total-text {
                font-size: 1.2em;
            }

            .total-amount {
                font-weight: bold;
                font-size: 1.5em;
            }

            .proceed-btn {
                background-color: #ff366b;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                border-radius: 20px;
                cursor: pointer;
                font-weight: bold;
                font-size: 1em;
            }

            /* Media query for responsiveness */
            @media (max-width: 900px) {
                .card-containers {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width: 600px) {
                h1 {
                    font-size: 1.5em;
                }

                .card-containers {
                    grid-template-columns: 1fr;
                }

                .select-btn,
                .back-btn,
                .next-btn,
                .proceed-btn {
                    padding: 8px 15px;
                    font-size: 0.9em;
                }

                .total-text,
                .total-amount {
                    font-size: 1em;
                }
            }
        </style>


        <!-- Compliance Container -->
        <div class="containers" id="compliance-container">
            <h1>Compliance</h1>
            <div class="card-containers">
                <!-- Compliance Cards -->
                <div class="card" data-cost="35000">
                    <div class="card-content">
                        <h2><img src="assets/img/vanuatu.png"> Vanuatu</h2>
                        <p class="duration">3-4 Months</p>
                        <p class="cost">Total Cost: <span>$35,000.00</span></p>
                        <p class="renewal">Renewal Cost: <span>$8,000.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="34125">
                    <div class="card-content">
                        <h2><img src="assets/img/mauritius.png"> Mauritius</h2>
                        <p class="duration">2-3 Months</p>
                        <p class="cost">Total Cost: <span>$34,125.00</span></p>
                        <p class="renewal">Renewal Cost: <span>$22,050.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="25850">
                    <div class="card-content">
                        <h2><img src="assets/img/seychelles.png"> Seychelles</h2>
                        <p class="duration">1 Month</p>
                        <p class="cost">Total Cost: <span>$25,850.00</span></p>
                        <p class="renewal">Renewal Cost: <span>$19,800.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="28000">
                    <div class="card-content">
                        <h2><img src="assets/img/labuan.png"> Labuan</h2>
                        <p class="duration">4-7 Months</p>
                        <p class="cost">Total Cost: <span>$28,000.00</span></p>
                        <p class="renewal">Renewal Cost: <span>$19,600.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="32000">
                    <div class="card-content">
                        <h2><img src="assets/img/comoros.png"> Comoros</h2>
                        <p class="duration">3 Weeks</p>
                        <p class="cost">Total Cost: <span>$32,000.00</span></p>
                        <p class="renewal">Renewal Cost: <span>$25,000.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
            </div>
            <div class="footer">
                <button class="back-btn">Back</button>
                <button class="next-btn" onclick="showLogoContainer()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.form">Proceed</a></button>
            </div>
        </div>

        <!-- Logo Container -->
        <div class="containers" id="logo-container" style="display: none;">
            <h1>Logo</h1>
            <div class="card-containers">
                <!-- Logo Cards -->
                <div class="card" data-cost="500">
                    <div class="card-content">
                        <h2>Standard Logo</h2>
                        <p class="duration">5 Days</p>
                        <p class="cost">Total Cost: <span>$500.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="1000">
                    <div class="card-content">
                        <h2>Premium Logo</h2>
                        <p class="duration">10 Days</p>
                        <p class="cost">Total Cost: <span>$1,000.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <!-- Additional logo cards... -->
            </div>
            <div class="footer">
                <button class="back-btn" onclick="showComplianceContainer()">Back</button>
                <button class="next-btn" onclick="showWebsiteContainer()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.html">Proceed</a></button>
            </div>
        </div>

        <!-- website Container -->
        <div class="containers" id="website-container" style="display: none;">
            <h1>Website</h1>
            <div class="card-containers">
                <!-- Website Cards -->
                <div class="card" data-cost="2000">
                    <div class="card-content">
                        <h2>Standard Website</h2>
                        <p class="duration">20-30 Days</p>
                        <p class="cost">Total Cost: <span>$2,000.00</span></p>
                        <p class="renewal">Total Pages: <span>Up to 15</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="4800">
                    <div class="card-content">
                        <h2>Premium Website</h2>
                        <p class="duration">30-45 Days</p>
                        <p class="cost">Total Cost: <span>$4,800.00</span></p>
                        <p class="renewal">Total Pages: <span>Up to 30</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <!-- Additional website cards... -->
            </div>
            <div class="footer">
                <button class="back-btn" onclick="showLogoContainer()">Back</button>
                <button class="next-btn" onclick="showTradingPlatformContainer()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.html">Proceed</a></button>
            </div>
        </div>



        <!-- Trading Platform Container -->
        <div class="containers" id="trading-platform" style="display: none;">
            <h1>Trading Platform</h1>
            <div class="card-containers">
                <!-- Trading Platform Cards -->
                <div class="card" data-cost="6000">
                    <div class="card-content">
                        <h2>MT4 White Label</h2>
                        <p class="duration">15 Days</p>
                        <p class="cost">Total Cost: <span>$6,000.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="5000">
                    <div class="card-content">
                        <h2>MT5 White Label</h2>
                        <p class="duration">15 Days</p>
                        <p class="cost">Total Cost: <span>$5,000.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="3500">
                    <div class="card-content">
                        <h2>VertexFX Admin (CL1)</h2>
                        <p class="duration">15 Days</p>
                        <p class="cost">Total Cost: <span>$3,500.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="2500">
                    <div class="card-content">
                        <h2>WhiteLabel</h2>
                        <p class="duration">15 Days</p>
                        <p class="cost">Total Cost: <span>$2,500.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <!-- Additional trading platform cards... -->
            </div>
            <div class="footer">
                <button class="back-btn" onclick="showWebsiteContainer()">Back</button>
                <button class="next-btn" onclick="showCRMTradersRoomContainer()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.html">Proceed</a></button>
            </div>
        </div>



        <!-- CRM & Trader's Room Container -->
        <div class="containers" id="crm-traders-room" style="display: none;">
            <h1>CRM & Trader's Room</h1>
            <div class="card-containers">
                <!-- CRM & Trader's Room Cards -->
                <div class="card" data-cost="1000">
                    <div class="card-content">
                        <h2>Beginner</h2>
                        <p class="cost">One Time Cost: <span>$1,000.00</span></p>
                        <p class="renewal">Monthly: <span>$500.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="2000">
                    <div class="card-content">
                        <h2>Expert</h2>
                        <p class="cost">One Time Cost: <span>$2,000.00</span></p>
                        <p class="renewal">Monthly: <span>$1,000.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="2000">
                    <div class="card-content">
                        <h2>Enterprise</h2>
                        <p class="cost">One Time Cost: <span>$2,000.00</span></p>
                        <p class="renewal">Monthly: <span>$1,500.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
            </div>
            <div class="footer">
                <button class="back-btn" onclick="showTradingPlatformContainer()">Back</button>
                <button class="next-btn" onclick="showCabinetMobileAppContainer()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.html">Proceed</a></button>
            </div>
        </div>



        <!-- Cabinet Mobile App -->
        <div class="containers" id="cabinet-mobile-app" style="display: none;">
            <h1>Cabinet Mobile App</h1>
            <div class="card-containers">
                <!-- Cabinet Mobile Cards -->
                <div class="card" data-cost="1000">
                    <div class="card-content">
                        <h2>Start-Up</h2>
                        <p class="cost">One Time Cost:<span>$ 1,000.00</span></p>
                        <p class="renewal">Monthly: <span>$ 250.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="1000">
                    <div class="card-content">
                        <h2>
                            Beginner</h2>
                        <p class="cost">One Time Cost:<span>$ 1,000.00</span></p>
                        <p class="renewal">Monthly: <span>$ 350.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="1500">
                    <div class="card-content">
                        <h2>Expert</h2>
                        <p class="cost">One Time Cost:<span>$ 1,500.00</span></p>
                        <p class="renewal">Monthly: <span>$ 500.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
            </div>
            <div class="footer">
                <button class="back-btn" onclick="showCRMTradersRoomContainer()">Back</button>
                <button class="next-btn" onclick="showCRMMobileAppContainer()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.html">Proceed</a></button>
            </div>
        </div>



        <!-- CRM Mobile App Container -->
        <div class="containers" id="crm-moibile-app" style="display: none;">
            <h1>CRM Mobile App</h1>
            <div class="card-containers">
                <!-- CRM Mobile App Cards -->
                <div class="card" data-cost="1000">
                    <div class="card-content">
                        <h2>Start-Up</h2>
                        <p class="cost">One Time Cost: <span>$1,000.00</span></p>
                        <p class="renewal">Monthly: <span>$250.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="1000">
                    <div class="card-content">
                        <h2>Beginner</h2>
                        <p class="cost">One Time Cost: <span>$1,000.00</span></p>
                        <p class="renewal">Monthly: <span>$350.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="1500">
                    <div class="card-content">
                        <h2>Expert</h2>
                        <p class="cost">One Time Cost: <span>$1,500.00</span></p>
                        <p class="renewal">Monthly: <span>$500.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
            </div>
            <div class="footer">
                <button class="back-btn" onclick="showCabinetMobileAppContainer()">Back</button>
                <button class="next-btn" onclick="showRiskManagementContainer()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.html">Proceed</a></button>
            </div>
        </div>



        <!-- Risk Management Container -->
        <div class="containers" id="risk-management" style="display: none;">
            <h1>Risk Management</h1>
            <div class="card-containers">
                <!-- Risk Management Cards -->
                <div class="card" data-cost="1000">
                    <div class="card-content">
                        <h2>RMS with 1 Manager</h2>
                        <p class="cost">One Time Cost: <span>$1,000.00</span></p>
                        <p class="renewal">Monthly: <span>$500.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="1000">
                    <div class="card-content">
                        <h2>RMS with 2 Managers</h2>
                        <p class="cost">One Time Cost: <span>$1,000.00</span></p>
                        <p class="renewal">Monthly: <span>$500.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
            </div>
            <div class="footer">
                <button class="back-btn" onclick="showCRMMobileAppContainer()">Back</button>
                <button class="next-btn" onclick="showLiquidityContainer()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.html">Proceed</a></button>
            </div>
        </div>

        <!-- Liquidity -->
        <div class="containers" id="Liquidity-cont" style="display: none;">
            <h1>Liquidity</h1>
            <div class="card-containers">
                <!-- Liquidity Cards -->
                <div class="card" data-cost="20000">
                    <div class="card-content">
                        <h2>Liquidity</h2>
                        <p class="cost">One Time Cost: <span>Minimum deposit $20k</span></p>
                        <p class="renewal">Monthly: <span>$ 2,000.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="card" data-cost="0">
                    <div class="card-content">
                        <h2>
                            For Live Feed</h2>
                        <p class="cost">One Time Cost: <span>-</span></p>
                        <p class="renewal">Monthly: <span>$500.00 - $750.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
            </div>
            <div class="footer">
                <button class="back-btn" onclick="showRiskManagementContainer()">Back</button>
                <button class="next-btn" onclick="showCopyTrading()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.html">Proceed</a></button>
            </div>
        </div>


        <!-- Copy Trading -->
        <div class="containers" id="copy-trading" style="display: none;">
            <h1>Copy Trading</h1>
            <div class="card-containers">
                <!-- Copy Trading Cards -->
                <div class="card" data-cost="0">
                    <div class="card-content">
                        <h2>Copy Trading</h2>
                        <p class="cost">One Time Cost: <span>-</span></p>
                        <p class="renewal">Monthly: <span>$ 1,099.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
            </div>
            <div class="footer">
                <button class="back-btn" onclick="showLiquidityContainer()">Back</button>
                <button class="next-btn" onclick="showPammContainer()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.html">Proceed</a></button>
            </div>
        </div>


        <!-- PAMM -->
        <div class="containers" id="pamm-trading" style="display: none;">
            <h1>PAMM</h1>
            <div class="card-containers">
                <!-- PAMM Cards -->
                <div class="card" data-cost="0">
                    <div class="card-content">
                        <h2>PAMM</h2>
                        <p class="cost">One Time Cost: <span>-</span></p>
                        <p class="renewal">Monthly: <span>$ 880.00</span></p>
                    </div>
                    <button class="select-btn">Select</button>
                </div>
            </div>
            <div class="footer">
                <button class="back-btn" onclick="showCopyTrading()">Back</button>
                <button class="next-btn" onclick="showComplianceContainer()">Next</button>
            </div>
            <div class="total-amount-section">
                <span class="total-text">Total Amount</span>
                <span class="total-amount">$0</span>
                <button class="proceed-btn"><a href="forex-brokerage-calculator-form.html">Proceed</a></button>
            </div>
        </div>




        <script>
            function showComplianceContainer() {
                document.getElementById("compliance-container").style.display = "block";
                document.getElementById("logo-container").style.display = "none";
                document.getElementById("website-container").style.display = "none";
                document.getElementById("trading-platform").style.display = "none";
                document.getElementById("crm-traders-room").style.display = "none";
                document.getElementById("cabinet-mobile-app").style.display = "none";
                document.getElementById("crm-moibile-app").style.display = "none";
                document.getElementById("risk-management").style.display = "none";
                document.getElementById("copy-trading").style.display = "none";
                document.getElementById("pamm-trading").style.display = "none";
            }
            function showLogoContainer() {
                document.getElementById("compliance-container").style.display = "none";
                document.getElementById("logo-container").style.display = "block";
                document.getElementById("website-container").style.display = "none";
                document.getElementById("trading-platform").style.display = "none";
                document.getElementById("crm-traders-room").style.display = "none";
                document.getElementById("cabinet-mobile-app").style.display = "none";
                document.getElementById("crm-moibile-app").style.display = "none";
                document.getElementById("risk-management").style.display = "none";
                document.getElementById("copy-trading").style.display = "none";
                document.getElementById("pamm-trading").style.display = "none";
            }

            function showWebsiteContainer() {
                document.getElementById("compliance-container").style.display = "none";
                document.getElementById("logo-container").style.display = "none";
                document.getElementById("website-container").style.display = "block";
                document.getElementById("trading-platform").style.display = "none";
                document.getElementById("crm-traders-room").style.display = "none";
                document.getElementById("cabinet-mobile-app").style.display = "none";
                document.getElementById("crm-moibile-app").style.display = "none";
                document.getElementById("risk-management").style.display = "none";
                document.getElementById("copy-trading").style.display = "none";
                document.getElementById("pamm-trading").style.display = "none";
            }

            function showTradingPlatformContainer() {
                document.getElementById("compliance-container").style.display = "none";
                document.getElementById("logo-container").style.display = "none";
                document.getElementById("website-container").style.display = "none";
                document.getElementById("trading-platform").style.display = "block";
                document.getElementById("crm-traders-room").style.display = "none";
                document.getElementById("cabinet-mobile-app").style.display = "none";
                document.getElementById("crm-moibile-app").style.display = "none";
                document.getElementById("risk-management").style.display = "none";
                document.getElementById("copy-trading").style.display = "none";
                document.getElementById("pamm-trading").style.display = "none";
            }

            function showCRMTradersRoomContainer() {
                document.getElementById("compliance-container").style.display = "none";
                document.getElementById("logo-container").style.display = "none";
                document.getElementById("website-container").style.display = "none";
                document.getElementById("trading-platform").style.display = "none";
                document.getElementById("crm-traders-room").style.display = "block";
                document.getElementById("cabinet-mobile-app").style.display = "none";
                document.getElementById("crm-moibile-app").style.display = "none";
                document.getElementById("risk-management").style.display = "none";
                document.getElementById("copy-trading").style.display = "none";
                document.getElementById("pamm-trading").style.display = "none";
            }

            function showCabinetMobileAppContainer() {
                document.getElementById("compliance-container").style.display = "none";
                document.getElementById("logo-container").style.display = "none";
                document.getElementById("website-container").style.display = "none";
                document.getElementById("trading-platform").style.display = "none";
                document.getElementById("crm-traders-room").style.display = "none";
                document.getElementById("cabinet-mobile-app").style.display = "block";
                document.getElementById("crm-moibile-app").style.display = "none";
                document.getElementById("risk-management").style.display = "none";
                document.getElementById("copy-trading").style.display = "none";
                document.getElementById("pamm-trading").style.display = "none";
            }

            function showCRMMobileAppContainer() {
                document.getElementById("compliance-container").style.display = "none";
                document.getElementById("logo-container").style.display = "none";
                document.getElementById("website-container").style.display = "none";
                document.getElementById("trading-platform").style.display = "none";
                document.getElementById("crm-traders-room").style.display = "none";
                document.getElementById("cabinet-mobile-app").style.display = "none";
                document.getElementById("crm-moibile-app").style.display = "block";
                document.getElementById("risk-management").style.display = "none";
                document.getElementById("copy-trading").style.display = "none";
                document.getElementById("pamm-trading").style.display = "none";
            }

            function showRiskManagementContainer() {
                document.getElementById("compliance-container").style.display = "none";
                document.getElementById("logo-container").style.display = "none";
                document.getElementById("website-container").style.display = "none";
                document.getElementById("trading-platform").style.display = "none";
                document.getElementById("crm-traders-room").style.display = "none";
                document.getElementById("cabinet-mobile-app").style.display = "none";
                document.getElementById("crm-moibile-app").style.display = "none";
                document.getElementById("risk-management").style.display = "block";
                document.getElementById("copy-trading").style.display = "none";
                document.getElementById("pamm-trading").style.display = "none";
            }

            function showLiquidityContainer() {
                document.getElementById("compliance-container").style.display = "none";
                document.getElementById("logo-container").style.display = "none";
                document.getElementById("website-container").style.display = "none";
                document.getElementById("trading-platform").style.display = "none";
                document.getElementById("crm-traders-room").style.display = "none";
                document.getElementById("cabinet-mobile-app").style.display = "none";
                document.getElementById("crm-moibile-app").style.display = "none";
                document.getElementById("risk-management").style.display = "none";
                document.getElementById("Liquidity-cont").style.display = "block";
                document.getElementById("copy-trading").style.display = "none";
                document.getElementById("pamm-trading").style.display = "none";

            }

            function showCopyTrading() {
                document.getElementById("compliance-container").style.display = "none";
                document.getElementById("logo-container").style.display = "none";
                document.getElementById("website-container").style.display = "none";
                document.getElementById("trading-platform").style.display = "none";
                document.getElementById("crm-traders-room").style.display = "none";
                document.getElementById("cabinet-mobile-app").style.display = "none";
                document.getElementById("crm-moibile-app").style.display = "none";
                document.getElementById("risk-management").style.display = "none";
                document.getElementById("Liquidity-cont").style.display = "none";
                document.getElementById("copy-trading").style.display = "block";
                document.getElementById("pamm-trading").style.display = "none";

            }

            function showPammContainer() {
                document.getElementById("compliance-container").style.display = "none";
                document.getElementById("logo-container").style.display = "none";
                document.getElementById("website-container").style.display = "none";
                document.getElementById("trading-platform").style.display = "none";
                document.getElementById("crm-traders-room").style.display = "none";
                document.getElementById("cabinet-mobile-app").style.display = "none";
                document.getElementById("crm-moibile-app").style.display = "none";
                document.getElementById("risk-management").style.display = "none";
                document.getElementById("Liquidity-cont").style.display = "none";
                document.getElementById("copy-trading").style.display = "none";
                document.getElementById("pamm-trading").style.display = "block";
            }

        </script>
 

<!-- <script>


let totalCost = 0;

function updateTotalAmount() {
    document.querySelectorAll('.total-amount').forEach(function (amount) {
        amount.textContent = `$${totalCost.toFixed(2)}`;
    });
}

// Select Card functionality
document.querySelectorAll('.card .select-btn').forEach(button => {
    button.addEventListener('click', function () {
        const card = button.closest('.card');
        const cardCost = parseFloat(card.getAttribute('data-cost'));
        
        // Add or subtract cost from total depending on if it is already selected
        if (card.classList.contains('selected')) {
            totalCost -= cardCost;
            card.classList.remove('selected');
        } else {
            totalCost += cardCost;
            card.classList.add('selected');
        }

        // Update the total amount on the page
        updateTotalAmount();
    });
});

// Show next container (keep passing total cost)
function showNextContainer(nextContainerId) {
    // Store the total cost so that it can be passed to the next container
    document.getElementById(nextContainerId).style.display = 'block';
    document.querySelector(`#${nextContainerId}`).querySelector('.total-amount').textContent = `$${totalCost.toFixed(1)}`;
}

// Show previous container
function showPreviousContainer(prevContainerId) {
    document.getElementById(prevContainerId).style.display = 'block';
}

</script> -->


<!-- <script>
    let totalCost = 0;

function updateTotalAmount() {
    document.querySelectorAll('.total-amount').forEach(function (amount) {
        amount.textContent = `$${totalCost.toFixed(2)}`;
    });
}

// Function to clear any previously selected card
function clearPreviousSelection() {
    const selectedCard = document.querySelector('.card.selected');
    if (selectedCard) {
        const previousCost = parseFloat(selectedCard.getAttribute('data-cost'));
        totalCost -= previousCost;
        selectedCard.classList.remove('selected');
    }
}

// Select Card functionality
document.querySelectorAll('.card .select-btn').forEach(button => {
    button.addEventListener('click', function () {
        const card = button.closest('.card');
        const cardCost = parseFloat(card.getAttribute('data-cost'));

        // Deselect any previously selected card
        clearPreviousSelection();

        // Select the new card and update the total cost
        card.classList.add('selected');
        totalCost = cardCost;

        // Update the total amount on the page
        updateTotalAmount();
    });
});



// Show next container (keep passing total cost)
function showNextContainer(nextContainerId) {
    // Hide all containers
    document.querySelectorAll('.containers').forEach(container => {
        container.style.display = 'none';
    });

    // Show the next container
    const nextContainer = document.getElementById(nextContainerId);
    nextContainer.style.display = 'block';

    // Check if the container has an element with the class '.total-amount' and update it
    const totalAmountElement = nextContainer.querySelector('.total-amount');
    if (totalAmountElement) {
        totalAmountElement.textContent = `$${totalCost.toFixed(2)}`;
    } else {
        console.warn(`No element with class 'total-amount' found in container: ${nextContainerId}`);
    }
}


// Show previous container
function showPreviousContainer(prevContainerId) {
    document.querySelectorAll('.containers').forEach(container => {
        container.style.display = 'none';
    });
    document.getElementById(prevContainerId).style.display = 'block';
}


</script> -->

<script>
    let totalCost = 0;
let currentCategoryIndex = 0;
const categories = document.querySelectorAll('.containers');

// Function to update the total amount displayed
function updateTotalAmount() {
    document.querySelectorAll('.total-amount').forEach(function (amount) {
        amount.textContent = `$${totalCost.toFixed(2)}`;
    });
}

// Function to clear any previously selected card in the current category
function clearPreviousSelection() {
    const selectedCard = categories[currentCategoryIndex].querySelector('.card.selected');
    if (selectedCard) {
        const previousCost = parseFloat(selectedCard.getAttribute('data-cost'));
        totalCost -= previousCost;
        selectedCard.classList.remove('selected');
    }
}

// Select Card functionality
categories.forEach((category, index) => {
    const cards = category.querySelectorAll('.card');
    cards.forEach(button => {
        button.querySelector('.select-btn').addEventListener('click', function () {
            clearPreviousSelection();
            const cardCost = parseFloat(button.getAttribute('data-cost'));
            button.classList.add('selected');
            totalCost += cardCost;
            updateTotalAmount();
        });
    });
});

// Show next container and update total cost
function showNextContainer() {
    if (currentCategoryIndex < categories.length - 1) {
        categories[currentCategoryIndex].style.display = 'none';
        currentCategoryIndex++;
        categories[currentCategoryIndex].style.display = 'block';
        updateTotalAmount(); // Update the total amount display for the next category
    }
}

// Show previous container and update total cost
function showPreviousContainer() {
    if (currentCategoryIndex > 0) {
        categories[currentCategoryIndex].style.display = 'none';
        currentCategoryIndex--;
        categories[currentCategoryIndex].style.display = 'block';
        updateTotalAmount(); // Update the total amount display for the previous category
    }
}

// Initial setup: hide all categories except the first one
categories.forEach((category, index) => {
    if (index !== 0) {
        category.style.display = 'none';
    }
});

// Event listeners for Next and Back buttons
document.querySelectorAll('.next-btn').forEach(button => {
    button.addEventListener('click', showNextContainer);
});

document.querySelectorAll('.back-btn').forEach(button => {
    button.addEventListener('click', showPreviousContainer);
});

// Initial total amount display
updateTotalAmount();
</script>
        <style>
            .country-card {
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                padding: 15px;
                border: 2px solid #e0e0e0;
                border-radius: 5px;
                margin: 5px;
                font-weight: 400;
                /* Makes text bold */
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                /* Adds shadow effect */
                background-color: #fff;
                transition: transform 0.2s;
            }

            .country-card:hover {
                transform: scale(1.05);
                /* Slightly enlarges on hover */
            }

            .country-card img {
                width: 20px;
                height: 20px;
                margin-right: 8px;
            }

            .countries-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }
        </style>


        <div class="container my-5">
            <h3 class="text-center mb-4">Countries We Serve</h3>
            <div class="countries-container">
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/au.png" alt="Australia"> Australia
                </div>
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/ca.png" alt="Canada"> Canada
                </div>
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/de.png" alt="Germany"> Germany
                </div>
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/gb.png" alt="United Kingdom"> United Kingdom
                </div>
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/ae.png" alt="United Arab Emirates"> United Arab Emirates
                </div>
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/fr.png" alt="France"> France
                </div>
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/us.png" alt="USA"> USA
                </div>
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/in.png" alt="India"> India
                </div>
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/sg.png" alt="Singapore"> Singapore
                </div>
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/jp.png" alt="Japan"> Japan
                </div>
                <div class="country-card">
                    <img src="https://flagcdn.com/w20/ng.png" alt="Nigeria"> Nigeria
                </div>
            </div>
        </div>


        

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
                            <h2>Calculate Your Expenses of Brokerage With PriximGlobal

                            </h2>
                            <p style="font-size: 18px;">contact us now for more information


                            </p><button class="theme-btn" onclick="toggleForm()">Contact us now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include ('includes/getintouch.php');?>
         <!-- Modal CSS -->
         <style>
            .custom-select-wrapper {
                position: relative;
            }

            select.form-control {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                padding-right: 40px;
            }

            .dropdown-icon {
                position: absolute;
                top: 60%;
                right: 10px;
                transform: translateY(-50%);
                pointer-events: none;
                color: #666;
                font-size: 16px;
            }

            .modal {
                display: none;
                position: fixed;
                z-index: 1000;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.7);
                padding-top: 60px;
            }

            .modal-content {
                background-color: #fff;
                margin: 5% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
                max-width: 800px;
                border-radius: 10px;
                position: relative;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .modal-content {
                    width: 90%;
                    padding: 15px;
                }

                .contact-wrapper .row {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                .col-md-6 {
                    width: 100%;
                    padding: 0 5px;
                    margin-bottom: 15px;
                }

                .col-md-6:last-child {
                    margin-bottom: 0;
                }

                .form-group textarea {
                    width: 100%;
                }

                /* Adjust font sizes for smaller devices */
                .contact-form-header h3 {
                    font-size: 1.25rem;
                }

                .theme-btn {
                    width: 100%;
                    padding: 10px;
                    font-size: 1rem;
                }
            }

            @media (max-width: 480px) {
                .modal-content {
                    width: 95%;
                }

                .contact-form-header h3 {
                    font-size: 1rem;
                }

                .theme-btn {
                    font-size: 0.875rem;
                }
            }

            .custom-select-wrapper {
                position: relative;
            }

            select.form-control {
                -webkit-appearance: none;
                /* Remove default arrow in Chrome */
                -moz-appearance: none;
                /* Remove default arrow in Firefox */
                appearance: none;
                /* Remove default arrow in other browsers */
                padding-right: 40px;
                /* Add space for the dropdown icon */
            }

            .dropdown-icon {
                position: absolute;
                top: 60%;
                right: 10px;
                transform: translateY(-50%);
                pointer-events: none;
                /* Prevent click interaction on the icon */
                color: #666;
                font-size: 16px;
            }

            .modal {
                display: none;
                position: fixed;
                z-index: 1000;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0, 0, 0, 0.7);
                /* Black w/ opacity */
                padding-top: 60px;
            }

            .modal-content {
                background-color: #fff;
                margin: 5% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
                max-width: 800px;
                border-radius: 10px;
                position: relative;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
        </style>
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