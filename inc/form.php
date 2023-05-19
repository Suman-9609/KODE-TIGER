<div class="contact__form" id="about__form">
  <div class="card">
    <form id="myForm">
      <div class="card__head">
        <h2>Contact Form</h2>
      </div>
      <div class="card__body">
        <div class="form-group mb-4">
          <input type="text" name="name" id="name" class="form-control input__field" placeholder="Name *">
          <span id="nameError" class="badge bg-danger mt-1" style="font-size: 1rem;"></span>
        </div>
        <div class="form-group mb-4">
          <input type="number" name="whatsapp_no" id="whatsapp_no" class="form-control input__field" placeholder="Mobile/WhatsApp Number *">
          <span id="whatsappError" class="badge bg-danger mt-1" style="font-size: 1rem;"></span>
        </div>
        <div class="form-group mb-4">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email Address *">
          <span id="emailError" class="badge bg-danger mt-1" style="font-size: 1rem;"></span>
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
          <input type="submit" value="SUBMIT" class="btn btn__custom btn-lg" id="button">
        </div>
      </div>
    </form>
  </div>
</div>