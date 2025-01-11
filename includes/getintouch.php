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