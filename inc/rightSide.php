
    <!-- contact btn displayer -->
    <div class="contact__btn__container" id="showContactForm">
      <h5>Contact Form</h5>
      <span><i class="fa-sharp fa-solid fa-caret-down"></i></span>
    </div>


    <div class="x__content">

      <section class="main__head">
        <h3>Welcome To</h3>
        <h1>KODE TIGER</h1>
        <ul>
          <li><a href="#">Software Development</a></li>
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Business Development</a></li>
        </ul>
      </section>

      <section class="aside">

        <!-- contact form -->
        <div class="<?php echo "$contact__formClass";  ?>" id="contact__form">
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
      </section>

    </div>