<div class="modal" id="formModal" style="display:none;">
        <div class="modal-content">
            <span class="close" onclick="toggleForm()"></span>
            <!-- Form starts here -->
            <div class="container" id="formContainer" style="padding-top:20px;">
                <div class="contact-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 align-self-center">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2>Fill this form for free consultation.</h2>
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
                                                        <option value="" disabled selected>Choose Category</option>
                                                        <option value="technology">Technology</option>
                                                        <option value="outsourcing">Outsourcing</option>
                                                        <option value="digital">Digital</option>
                                                    </select>
                                                    <i class="dropdown-icon fa fa-chevron-down"></i>
                                                    <!-- Dropdown Icon -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Dynamic Specific Service -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="custom-select-wrapper">
                                                    <select id="specific-service" name="specificService"
                                                        class="form-control" required>
                                                        <option value="" disabled selected>Select Service First</option>
                                                    </select>
                                                    <i class="dropdown-icon fa fa-chevron-down"></i>
                                                    <!-- Dropdown Icon -->
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
                                    <button type="submit" class="theme-btn" value="send">Send Message </button>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form ends here -->
        </div>
    </div>

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