<!-- footer -->
<section class="footer">
  <div class="footer__container">
    <div class="mobile__social__icon">
      <a href="mailto:contact@kodetiger.io"><i class="fa fa-envelope"></i></a>
      <a href="https://wa.me/0000000000" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
      <a href="https://www.linkedin.com/in/kodetiger/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="https://www.facebook.com/kodetiger" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
    </div>
    <h3 style="<?php echo $footerColor; ?>">KODETIGER</h3>
    <a href="./privacy-policy.php">Privacy Policy</a>
  </div>
</section>


<!-- preloader js -->
<script>
  var preloader = document.getElementById('loading');


  function preLoad() {
    preloader.style.display = 'none';
  }
</script>


<script src="https://smtpjs.com/v3/smtp.js"></script>

<script>
  function validation() {

    var userName = document.getElementById('name').value;
    var userPhone = document.getElementById('whatsapp_no').value;
    var userEmail = document.getElementById('email').value;
    var userService = document.getElementById('services').value;
    var button = document.getElementById('button');

    console.log('validation function work...');

    // errro true or not
    Errorname = false;
    Errorphone = false;
    Erroremail = false;
    Errorservice = false;


    // user name
    if (userName == "") {
      document.getElementById('nameError').innerHTML = "** Please fill the username";
      document.getElementById('nameError').style.fontSize = "1rem";
      return false;
      nameError = true;
    } else if (userName.length <= 2 || userName.length >= 26) {
      document.getElementById('nameError').innerHTML = "** Please fill the username between 3 to 26";
      document.getElementById('nameError').style.fontSize = "1rem";
      return false;
      nameError = true;
    } else if (!isNaN(userName)) {
      document.getElementById('nameError').innerHTML = "** Username should only character";
      document.getElementById('nameError').style.fontSize = "1rem";
      return false;
      nameError = true;
    } else {
      // alert(userName);
      return true
      nameError = false;
      document.getElementById('nameError').innerHTML = "";
    }

    // phoen number
    if (userPhone == "") {
      document.getElementById('whatsappError').innerHTML = "** Please fill the Phone number";
      document.getElementById('whatsappError').style.fontSize = "1rem";
      return false;
      Errorphone = true;
    } else if (userPhone.length != 10) {
      document.getElementById('whatsappError').innerHTML = "** Only 10 digit number validate";
      document.getElementById('whatsappError').style.fontSize = "1rem";
      return false;
      Errorphone = true;
    } else {
      // alert(userPhone);
      return true
      Errorphone = false;
      document.getElementById('whatsappError').innerHTML = "";
    }

    // email id 
    if (userEmail == "") {
      document.getElementById('emailError').innerHTML = "** Please fill the Email Id";
      document.getElementById('emailError').style.fontSize = "1rem";
      return false;
      Erroremail = true;
    } else if (userEmail.indexOf('@') <= 0) {
      document.getElementById('emailError').innerHTML = "** Please fill the email id in proper format";
      document.getElementById('emailError').style.fontSize = "1rem";
      return false;
      Erroremail = true;
    } else if ((userEmail.charAt(userEmail.length - 4) != '.') && (email.charAt(email.length - 3) != '.')) {
      document.getElementById('emailError').innerHTML = "** Please fill the email id in proper format .";
      document.getElementById('emailError').style.fontSize = "1rem";
      return false;
      Erroremail = true;
    } else {
      // alert(userEmail);
      return true
      Erroremail = false;
      document.getElementById('emailError').innerHTML = "";
    }


    if (Errorname == false && Errorphone == false && Erroremail == false && Errorservice == false) {
      return true;
    }
  }
</script>

<!-- send email -->
<script>
  function sendEmail() {
    console.log('clicked me');

    var userName = document.getElementById('name').value;
    var userPhone = document.getElementById('whatsapp_no').value;
    var userEmail = document.getElementById('email').value;
    var userService = document.getElementById('services').value;
    var userMessage = document.getElementById('message').value;

    var bodydata = "Name :" + userName + "<br> Phone Number :" + userPhone + "<br> Email :" + userEmail + "<br> Service :" + userService + "<br> Message :" + userMessage;

    Email.send({
      SecureToken: "4cf27db1-08d9-4510-a14b-636bdd1e1555",
      To: 'sumandaskamg@gmail.com',
      From: "sdsp32391@gmail.com",
      Subject: "Try to send message",
      Body: bodydata
    }).then(
      message => {
        if (message == "OK") {
          alert("Your Message Has Been Sent Successfully");

          // userName = document.getElementById('name').value = "";
          // userPhone = document.getElementById('whatsapp_no').value = "";
          // userEmail = document.getElementById('email').value = "";
          // userService = document.getElementById('services').value = "";
          // userMessage = document.getElementById('message').value = "";
        } else {
          alert("Something went wrong!!!");
        }
      }
    );
  }
</script>


<script src="./assets/js/displayTime.js"></script>
<script src="./assets/js/activePage.js"></script>
<script src="./assets/js/custom.js"></script>
<script src="./assets/js/main.js"></script>
<!-- sweet alert js -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script>
  $(document).ready(() => {
    $('#myForm').submit((e) => {
      e.preventDefault();
      // console.log("submit clicked");

      if (validation() == true) {


        var name = $("#name").val();
        var phone = $("#whatsapp_no").val();
        var email = $("#email").val();
        var services = $("#services").val();
        var message = $("#message").val();



        // Send the Ajax request
        $.ajax({
          url: './php/contactForm.php', // Specify the URL to which you want to send the data
          type: 'POST', // Use the appropriate HTTP method (POST, GET, etc.)
          data: {
            Name: name,
            Phone: phone,
            Email: email,
            Service: services,
            Message: message
          }, // Pass the form data
          success: function(response) {
            // Handle the success response
            swal("Thank You!", response, "success");
            sendEmail();
            $("#name").val('');
            $("#whatsapp_no").val('');
            $("#email").val('');
            $("#services").val('');
            $("#message").val('');
          },
          error: function(xhr, status, error) {
            // Handle the error
            swal("Sorry!", response, "error");
          }
        });


      }
    })
  });
</script>


</body>

</html>