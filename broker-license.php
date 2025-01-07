<?php include ('includes/header.php');?>
    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h1 class="breadcrumb-title">Apply Now</h1>
            </div>
            <div class="hero-shape"><img class="hero-shape-1" src="assets/img/shape/01.png" alt="" loading="lazy"></div>
            <div class="hero-right-circles"></div>
        </div>
    </main>
    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-8 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Apply For Job</h2>
                            </div>
                            <form method="post" action="applynow.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><input type="text" class="form-control" name="name"
                                                placeholder="Full Name" required></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input type="tel" class="form-control" name="phone"
                                                placeholder="Contact No." required></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input type="email" class="form-control" name="email"
                                                placeholder="Email" required></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input type="text" class="form-control"
                                                name="Position-applied" placeholder="Position Applied" required
                                                list="position"><datalist id="position">
                                                <option value="SEO Expert">
                                                <option value="Business Development Executive">
                                                <option value="Customer Relationship Officer">
                                                <option value="Full Stack Developer">
                                                <option value="Social Media Executive">
                                                <option value="Content Writer">
                                            </datalist></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input type="text" class="form-control"
                                                name="how-hear-about-us" placeholder="How did you hear ?" required
                                                list="Social-connection"><datalist id="Social-connection">
                                                <option value="facebook">
                                                <option value="Twitter">
                                                <option value="linkedin">
                                                <option value="instagram">
                                            </datalist></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><input type="file" class="form-control" name="file"
                                                id="file" placeholder="Upload Resume" required></div>
                                    </div>
                                </div>
                                <div class="form-group"><textarea name="skills" cols="30" rows="5" class="form-control"
                                        placeholder="Ex. HTML, CSS, Wordpress"></textarea></div>
                                <div class="form-input mb-3">
                                    <div class="g-recaptcha" data-sitekey="6LeMhgUjAAAAAMkJSW4IudUaN0skK5mQ6a6MxbUT">
                                    </div>
                                </div><button type="submit" class="theme-btn" value="send">Send Message <i
                                        class="far fa-paper-plane"></i></button>
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
    <?php include ('includes/footer.php');?>