<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>CILET</title>
   <link rel="stylesheet" href="style.css" />
<style>
    /* about */

.img2 {
  float: right;
  margin-left: 60px; /*margin between imge and text*/
}

.img2 p {
         font-family:Georgia, serif;
         font-weight: 700;
         font-size: 1.2;
         }

.aboutcenter{
         text-align: justify;
         margin-right: 30px;
          }

.clearfix {
       margin-left: 90px;
       margin-right: 90px;
       margin-bottom: 10px;
           }

.clearfix p{
   color:grey;
   padding-left:10px;
  }

.clearfix  h2{
   color:#022D36;
  }


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.Vvision {
 display: flex;
  align-items: center;
  justify-content: space-between;
  background-color:#F9E6E4;
  }

.Vvision img{
   padding:50px;
   }

.Vvision p{
   color:grey;
   padding-left:10px;
  }

.Vvision h2{
   color:#022D36;
  }

.Vmission {
 display: flex;
  align-items: center;
  justify-content: space-between;
  background-color:#FFFDE7;
  }

.Vmission img{
   padding:50px;
   padding-left:10px;
   }

.Vmission p{
   color:grey;
   padding-right:20px;
   padding-left:10px;
    text-align: justify;
  }

.Vmission h2{
   color:#022D36;
   padding-left:50px;
  }

.Vobjectives {
 display: flex;
  align-items: center;
  justify-content: space-between;
  background-color:#cefad0;
  }

.Vobjectives img{
   padding:50px;
   }

.Vobjectives p{
   color:grey;
   padding-left:10px;
   padding-right:50px;
   text-align:justify;
  }

.Vobjectives h2{
   color:#022D36;
  }

</style>
</head>

<body>
  <!-- Main Navigation Bar -->
  <header class="navbar-main">
    <div class="nav-inner">
      <div class="logo" ><img src="logo01.png" width=150 high=150 ></div>

      <nav id="main-nav" >
        <ul>
          <li><a href="home.php">HOME</a></li>
          <li><a href="#about" >ABOUT Us</a></li>
          <li><a href="News&Event.php">NEWS & EVENT</a></li>
          <li><a href="courses.php">COURSES</a>
          <li><a href="faculties.php">FACULTIES</a></li>
          <li><a href="contact.php">CONTACT Us</a></li>
          <li><a href="services.php">SERVICES</a></li>
        </ul>
      </nav>
    </div>
  </header>

<div class="clearfix">
  <img class="img2" src="Aboutimages.jpeg" alt="welcome" width=500 high = 500>
  <h2 id = "about" >About Us:</h2>
                 <p  class="aboutcenter">CILET stands as a leading non-state institute in Sri Lanka, dedicated to delivering high-quality education and training across diverse disciplines. With a strong focus on academic excellence and industry relevance, CILET has continually empowered students with essential skills, preparing them to meet modern workforce demands. Through its commitment to innovation, practical learning, and personal development, CILET plays a vital role in nurturing talent and contributing meaningfully to the growth of the national economy.
                  </p>
                  <p  class="aboutcenter">
                         At CILET, we cultivate a culture of innovation and continuous learning, where ideas are nurtured and transformed into meaningful contributions to society. Since its inception, CILET has been committed to empowering individuals with the knowledge, skills, and vision needed to drive positive change and lead with purpose. Through a forward-thinking approach and a passion for excellence, CILET continues to shape future leaders who are ready to make a lasting impact.
                  </p>
                 <p  class="aboutcenter">
                        CILET offers UGC-recognized degree programs approved by the Ministry of Education. As a member of the ACU and IAU, we uphold global academic standards. Our Civil and Mechanical Engineering degrees are recognized by IESL, reinforcing our commitment to excellence and positioning CILET among Sri Lanka’s leading non-state higher education institutions.
                 </p>
</div>

<div class="Vvision">
<img class="img1" src="Aboutusvision.jpeg" alt="welcome" width=500 high = 500>
<h2>Vision:</h2>
<p>    To transform the regional landscape of education and training by fostering innovation, excellence, and a culture of knowledge for a brighter, more informed future.</p>
</div>  

<div class="Vmission">
<h2>Mission:</h2>
<p>Establishing an educational setting that encourages innovation through hands-on experiences, aiming to develop impactful individuals who remain dedicated to learning throughout their lives.</p>
<img class="img1" src="aboutmission.jpeg" alt="welcome" width=1200 high = 1200>
</div>

<div class="Vobjectives">
<img class="img1" src="Aboutobjectives.jpeg" alt="welcome" width=500 high = 500>
<h2>Objectives:</h2><br>
<p>We focus on developing managers and supervisors in both public and private sectors through professional training and education. Our services include management consulting, performance improvement, productivity enhancement, and IT training. We also conduct research on management and socio-economic issues to better understand the business environment, while supporting organizations in upgrading systems, processes, and planning to adapt to changing challenges.
</p>
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
          <li><a href="home.php" >Home</a></li>
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