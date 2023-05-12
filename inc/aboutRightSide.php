<div class="">
    <!-- mobile view -->
    <div class="mobile_view">
        <div class="mobile__view__logo__container">
            <a href="./index.php"><img src="./assets/images/logo.png" alt="" class="img-fluid"></a>
        </div>
        <div class="">
            <i class="fas fa-bars" id="showMenuBtn"></i>
        </div>
    </div>

    <!-- social icon -->
    <div class="social__icon">
        <a href="mailto:contact@kodetiger.io"><i class="fa fa-envelope"></i></a>
        <a href="https://wa.me/0000000000" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://www.linkedin.com/in/kodetiger/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://www.facebook.com/kodetiger" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
    </div>


    <!-- right side start -->
    <div class="rightSide">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="Card__container">
                        <div class="card about__card">
                            <div class="card-head">
                                <h2>about us</h2>
                            </div>
                            <div class="card-body">
                                <p class="card-text"> <span style="border-left:4px solid #f79328; padding-left: 3px;">Kode Tiger</span> is a cutting-edge software development and technology solutions provider founded in 2020, dedicated to transforming businesses by delivering innovative and efficient digital solutions. Our team of highly skilled and experienced professionals has a passion for technology and a commitment to client success, ensuring seamless integration and exceptional results for businesses of all sizes.</p>
                                <p class="card-text">At Kode Tiger, we specialize in web development, mobile application development, SEO, custom software solutions tailored to meet the unique needs of our diverse clientele. Our mission is to empower businesses by harnessing the potential of technology to streamline operations, enhance customer engagement, and drive growth.</p>
                                <p class="card-text">
                                    Our core values emphasize quality, integrity, and innovation, guiding our approach to every project. We are proud of our track record of consistently exceeding client expectations by delivering customized solutions that surpass industry standards. With our forward-thinking strategies, adaptive methodologies, and dedication to continuous improvement, Kode Tiger has become a trusted partner for businesses across various industries, including healthcare, finance, education, and e-commerce.<span id="dots">...</span> 
                                </p>
                                <span id="more">
                                    <p class="card-text">We recognize the importance of staying at the forefront of the rapidly evolving technological landscape, which is why we invest heavily in research and development. By doing so, Kode Tiger remains a pioneer in emerging technologies, continually pushing the boundaries of what's possible in the digital realm. Our focus on customer satisfaction and long-term success has garnered numerous accolades, solidifying our reputation as a reliable and innovative technology partner.</p>
                                </span>
                                <div class="readmore_btn_container position-absolute d-block mb-5">
                                    <button class="btn readMorebtn__custom" id="read" onclick="read()"> <i class="fa fa-arrow-down" id="readIcon"></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    var i = 0;

                    function read() {

                        if (!i) {
                            document.getElementById('more').style.display = 'inline';
                            document.getElementById('dots').style.display = 'none';
                            document.getElementById('readIcon').classList.remove('fa-arrow-down');
                            document.getElementById('readIcon').classList.add('fa-arrow-up');
                            i = 1;
                        } else {
                            document.getElementById('more').style.display = 'none';
                            document.getElementById('dots').style.display = 'inline';
                            document.getElementById('readIcon').classList.remove('fa-arrow-up');
                            document.getElementById('readIcon').classList.add('fa-arrow-down');
                            i = 0;
                        }

                    }
                </script>
                <!-- imgae -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="rightImage">
                        <!-- contact btn displayer -->
                        <div class="contact__btn__container" id="showContactForm">
                            <h5>Contact Form</h5>
                            <span><i class="fa-sharp fa-solid fa-caret-down"></i></span>
                        </div>

                        <!-- contact form -->
                        <div class="contact__form" id="contact__form">
                            <div class="card">
                                <div class="card__head">
                                    <h2>Contact Form</h2>
                                </div>
                                <div class="card__body">
                                    <div class="form-group mb-4">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name *">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Mobile/WhatsApp Number *">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group mb-4">
                                        <select name="services" id="services" class="form-select" aria-label="Default select example">
                                            <option value="" disabled selected>Service Needed</option>
                                            <option value="web_development">Web Development</option>
                                            <option value="software_development">Software Development</option>
                                            <option value="buisness_development">Business Development</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <textarea name="message" id="message" class="form-control" placeholder="Write your message"></textarea>
                                    </div>
                                    <div class="d-grid col-6 mx-auto">
                                        <input type="submit" value="SUBMIT" class="btn btn__custom btn-lg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- footer -->
                        <div class="footer">
                            <h3>KODETIGER</h3>
                            <a href="./privacy-policy.php">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>