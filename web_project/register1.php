
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>CILET</title>
   <link rel="stylesheet" href="style.css" />
 <style>
   
 .reg1 {
padding-right:400px;
padding-left:350px;
}

 #kk{
padding-right:400px;
}

#kkk{
 padding-right:310px;
 padding-bottom:5px;
}
</style>
   <script>
function validation() {
  var fname = document.getElementsByName("name")[0].value.trim();
  var fbd = document.getElementsByName("bd")[0].value.trim();
  var fgender = document.getElementsByName("gender");
  var fadr = document.getElementsByName("address")[0].value.trim();
  var fphone = document.getElementsByName("phone")[0].value.trim();
  var femail = document.getElementsByName("email")[0].value.trim();
   var fpw = document.getElementsByName("pw")[0].value.trim();

  // Check if gender is selected
  var genderSelected = false;
  for (var i = 0; i < fgender.length; i++) {
    if (fgender[i].checked) {
      genderSelected = true;
      break;
    }
  }

  // Check for empty fields
  if (fname === "" || fbd === "" || !genderSelected || fadr === "" || fphone === "" || femail === "" || fpw === "") {
    alert("Please fill all fields.");
    return false;
  }

 
  // Validate email
  var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (!emailPattern.test(femail)) {
    alert("You have entered an invalid email address!");
    return false;
  }

  // Validate phone number
  var phonePattern = /^\d{10}$/;
  if (!phonePattern.test(fphone)) {
    alert("Not a valid Phone Number");
    return false;
  }

 // Validate password
  var pwPattern =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
  if (!pwPattern.test(fpw)) {
    alert("Not a valid Pass Word");
    return false;
  }


  return true;
}
</script>

</head>

<body class="reg">

<!-- Main Navigation Bar -->
  <header class="navbar-main">
    <div class="nav-inner">
      <div class="logo" ><img src="logo01.png" width=150 high=150 ></div>

      <nav id="main-nav" >
        <ul>
          <li><a href="home.php" >Home</a></li>
          <li><a href="#about" >About Us</a></li>
          <li><a href="#news" >News &amp; Events</a></li>
          <li><a href="#faculties">Faculties</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="#student-life">Student Life</a></li>
        </ul>
      </nav>
    </div>
  </header>

<div class="reg1">
<h1><u>REGISTER</u></h1>
<form class="form" method="post" onsubmit="return validation( )" action="insertdb.php">
   Student Name:<br>
   <input type="text" placeholder="Name" name="name"  id="kk" ><br><br>
 
   Date of Birth:<br>
    <input type="date" placeholder="MM/DD/YY" name="bd"><br><br>
   
   Gender:<br>
   <input type="radio" name="gender">Male
   <input type="radio" name="gender">Female 
    <br><br>
    NIC:
    <input type="text" placeholder="NIC" name="nic" id="kk"><br><br>
    Address:<br>
   <input type="text" placeholder="Address" name="address" id="kk"><br><br>
    Phone:<br>
    <input type="text" placeholder="Phone" name="phone" id="kk"><br><br>
    Email:<br>
    <input type="text" placeholder="Email" name="email" id="kk"><br><br>
    Faculty :<br>
   <select id="kkk" name="faculty"><option selected="selected">Please Select</option>
                <option>Faculty of Science</option>
                <option>Faculty of Engineering</option>
                <option> Faculty of Social Science & Humanties</option>
               <option> Faculty of Management & Commerce</option>
 </select><br><br>
PassWord:
<input type="text" placeholder="Password" name="pw" id="kk"><br><br>
    <input type="submit" value="S U B M I T  N O W" id="submit"><br><br>
</form>

</div>

<!-- Footer -->
  <footer role="contentinfo" aria-label="Footer">
    <div class="footer-container">
      <section class="footer-section" >
        <img src= "logo01.png" width=350 high=350>
      </section>
      <section class="footer-section" >
        <h3 id="footer-links-title">Quick Links</h3>
        <ul>
          <li><a href="home.php" tabindex="0">Home</a></li>
          <li><a href="#courses" tabindex="0">Faculties</a></li>
          <li><a href="#news" tabindex="0">News &amp; Events</a></li>
          <li><a href="#contact" tabindex="0">Contact Us</a></li>
        </ul>
      </section>
      <section class="footer-section" >
        <h3 id="footer-contact-title">Contact</h3>
        <ul>
          <li><a href="mailto:info@eduinstitute.edu">contact@cilet.ac.lk</a></li>
          <li><a href="tel:+1234567890" >+94 112 903 195</a></li>
          <li><a href="#map">#305,<br>fracis lane,<br>colombo 05</a></li>
        </ul>
      </section>
      <section class="footer-icon" >
        <h3 class="social-icons">Follow Us</h3>
        <ul>
          <li><a href="http://facebook.com" class="fa fa-facebook" target="_blank"></a></li>
          <li><a href="https://twitter.com" class="fa fa-twitter" target="_blank" ></a></li>
          <li><a href="http://limkedin.com" class="fa fa-linkedin" target="_blank"></a></li>
          <li><a href="https://instagram.com" class="fa fa-instagram" target="_blank" ></a></li>
        </ul>
      </section>
    </div>
    <div class="footer-bottom" >
      &copy; 2025 CILET. All rights reserved.
    </div>
  </footer>

 
</body>
</html>

