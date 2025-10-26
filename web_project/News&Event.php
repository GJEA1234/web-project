<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>News & Events - CILET</title>
  <link rel="stylesheet" href="style.css" />

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: url('https://images.unsplash.com/photo-1542327897-8c1f3c5f023b') no-repeat center center fixed;
      background-size: cover;
      color: #333;
    }

    header {
      background-color: rgba(0, 0, 0, 0.8);
      padding: 10px 20px;
    }

    .nav-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    nav ul {
      list-style: none;
      display: flex;
      padding: 0;
      margin: 0;
    }

    nav ul li {
      margin: 0 15px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    h1, h2 {
      text-align: center;
      color: #2c5e2a;
    }

    .section {
      padding: 40px 20px;
      background-color: rgba(220, 245, 220, 0.9);
      margin: 20px;
      border-radius: 10px;
      color: #333;
    }

    .event-gallery, .video-gallery, .upcoming-gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
    }

    .event-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      max-width: 300px;
    }

    .event-gallery a img, .upcoming-gallery img {
      width: 300px;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      transition: transform 0.3s ease;
    }

    .event-gallery a img:hover {
      transform: scale(1.05);
    }

    .event-description {
      background-color: rgba(255, 255, 255, 0.7);
      padding: 10px;
      border-radius: 5px;
      margin-top: 10px;
      text-align: center;
      font-size: 14px;
      width: 100%;
    }

    .video-gallery iframe {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .upcoming-list {
      max-width: 800px;
      margin: 0 auto;
      padding-top: 20px;
    }

    .upcoming-list li {
      background-color: rgba(255, 255, 255, 0.7);
      padding: 15px;
      margin-bottom: 15px;
      border-radius: 8px;
      list-style: none;
      color: #333;
    }

    .activity-category {
      margin-bottom: 25px;
    }

    .activity-category h3 {
      color: #1e4b1c;
      border-bottom: 2px solid #4CAF50;
      padding-bottom: 5px;
      margin-bottom: 15px;
    }

    footer {
      background-color: rgba(44, 94, 42, 0.9);
      padding: 20px;
      color: #fff;
      text-align: center;
    }

    .logo img {
      width: 120px;
      height: auto;
    }
    
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.8);
    }
    
    .modal-content {
      background-color: rgba(220, 245, 220, 0.95);
      margin: 10% auto;
      padding: 20px;
      border-radius: 10px;
      width: 70%;
      max-width: 700px;
      color: #333;
    }
    
    .close {
      color: #2c5e2a;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }
    
    .close:hover {
      color: #1e4b1c;
    }
  </style>
</head>
<body>
<!-- Navigation Bar -->
  <header>
    <div class="nav-inner">
      <div class="logo">
        <img src="logo01.png" alt="CILET Logo" />
      </div>
      <nav>
       <ul> 
         <li><a href="home.php">HOME</a></li> 
        <li><a href="#about" >ABOUT US</a></li>
        <li><a href="News&Event.php">NEWS & EVENTS</a></li> 
       <li><a href="courses.php">COURSES</a></li>
        <li><a href="Faculties.php">FACULTIES</a></li>
        <li><a href="contact.php">CONTACT</a></li> 
        <li><a href="services.php">SERVICES</a></li>
 </ul>
      </nav>
    </div>
  </header>


   
  
  <!-- News Articles (Clickable Images) -->
  <section class="section" id="news">
    <h1>News & Events</h1>
    <div class="event-gallery">
      <div class="event-item">
        <a href="#" onclick="openModal('modal1')">
          <img src="convaction.png" alt="University Convocation">
        </a>
        <div class="event-description">
          <strong>Click to view:</strong> Details about our Annual Convocation Ceremony 2024
        </div>
      </div>
      
      <div class="event-item">
        <a href="#" onclick="openModal('modal2')">
          <img src="research.png" alt="Research Symposium">
        </a>
        <div class="event-description">
          <strong>Click to view:</strong> Highlights from the International Research Symposium
        </div>
      </div>
      
      <div class="event-item">
        <a href="#" onclick="openModal('modal3')">
          <img src="sport.png" alt="Sports Championship">
        </a>
        <div class="event-description">
          <strong>Click to view:</strong> Results from the Inter-University Sports Championship
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Windows -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('modal1')">&times;</span>
      <h2>Annual Convocation Ceremony 2024</h2>
      <p>The University held its 25th Annual Convocation Ceremony on May 15th, 2024, graduating over 1,200 students across various disciplines. The ceremony was graced by the Minister of Education as the Chief Guest, who emphasized the importance of higher education in national development.</p>
      <p>Highlights included:</p>
      <ul>
        <li>15 Gold Medalists recognized for academic excellence</li>
        <li>Special awards for community service and innovation</li>
        <li>Alumni achievement awards presented to distinguished graduates</li>
      </ul>
    </div>
  </div>

  <div id="modal2" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('modal2')">&times;</span>
      <h2>International Research Symposium on Sustainable Technologies</h2>
      <p>Our university successfully hosted the 3rd International Research Symposium on June 5-7, 2024, attracting researchers from 15 countries. The event featured:</p>
      <ul>
        <li>Keynote addresses by leading scientists in renewable energy</li>
        <li>Presentation of 85 research papers across 8 parallel sessions</li>
        <li>Industry-academia collaboration workshop</li>
        <li>Student innovation showcase with 30 projects</li>
      </ul>
      <p>The symposium concluded with signing of three international research collaboration agreements.</p>
    </div>
  </div>

  <div id="modal3" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('modal3')">&times;</span>
      <h2>Inter-University Sports Championship 2024</h2>
      <p>Our university athletes brought home 12 gold medals from the National Inter-University Sports Championship held from May 20-25, 2024. The team achieved:</p>
      <ul>
        <li>1st place in Athletics (Men's & Women's)</li>
        <li>Champions in Basketball and Volleyball</li>
        <li>Record-breaking performances in Swimming events</li>
        <li>Fair Play Award for exemplary sportsmanship</li>
      </ul>
      <p>The championship saw participation from 25 universities with over 1,500 athletes competing in 15 sports disciplines.</p>
    </div>
  </div>

  <!-- YouTube Videos -->
  <section class="section" id="videos">
    <h2>Event Highlights (Videos)</h2>
    <div class="video-gallery">
      <iframe width="360" height="215" src="https://www.youtube.com/embed/lDg7QEe8rTE" title="Research Facilities" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe width="360" height="215" src="https://www.youtube.com/embed/dUlynwxb12c" title="Student Life at CILET" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </section>

  <!-- Upcoming Activities -->
  <section class="section" id="activities">
    <h2>Upcoming Activities</h2>
    <div class="upcoming-gallery">
      <img src="images/field.png" alt="Workshop">
      <img src="images/tour.png" alt="Field Trip">
    </div>
    
    <div class="upcoming-list">
      <div class="activity-category">
        <h3>Academic & Professional Development</h3>
        <ul>
          <li><strong>June 18:</strong> Research Methodology Workshop for Postgraduates - Research Center</li>
          <li><strong>June 25:</strong> Career Fair 2024 - University Sports Complex (50+ Companies Participating)</li>
          <li><strong>July 8:</strong> Interdisciplinary Symposium on Sustainable Development - Lecture Hall B</li>
        </ul>
      </div>

      <div class="activity-category">
        <h3>Industry Engagement</h3>
        <ul>
          <li><strong>June 20:</strong> Field Visit to Tech Park for Computer Science Students</li>
          <li><strong>June 28:</strong> Agriculture Faculty Industrial Tour - Regional Agri-Research Station</li>
          <li><strong>July 10:</strong> Entrepreneurship Bootcamp (Sponsored by Industry Partners)</li>
        </ul>
      </div>

      <div class="activity-category">
        <h3>Cultural & Student Life</h3>
        <ul>
          <li><strong>June 17:</strong> Traditional Arts Festival - Open Air Theater</li>
          <li><strong>June 30:</strong> University Sports Championship Finals</li>
          <li><strong>July 7:</strong> International Student Cultural Exchange Day</li>
        </ul>
      </div>

      <div class="activity-category">
        <h3>Special Lectures</h3>
        <ul>
          <li><strong>June 27:</strong> Keynote on "Future of AI in Education" by Dr. N. Perera</li>
          <li><strong>July 3:</strong> Alumni Talk Series: Leadership in Global Corporations</li>
          <li><strong>July 15:</strong> Health Awareness Seminar by Ministry of Health Officials</li>
        </ul>
      </div>

      <div class="activity-category">
        <h3>Student Competitions</h3>
        <ul>
          <li><strong>June 21:</strong> Annual Debate Competition Preliminaries</li>
          <li><strong>July 1:</strong> Innovation Challenge Project Submissions Deadline</li>
          <li><strong>July 14:</strong> University Hackathon Finals</li>
        </ul>
      </div>

      <div class="activity-category">
        <h3>Important Dates</h3>
        <ul>
          <li><strong>June 24:</strong> Mid-Semester Examinations Begin</li>
          <li><strong>July 12:</strong> Last Day of Semester (Undergraduates)</li>
          <li><strong>July 20:</strong> Convocation Rehearsals Start</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contact">
    <p><strong>Contact Us</strong></p>
    <p>Email: info@cilet.lk | Phone: +94 112 345 678</p>
    <p>Address: #305, Francis Lane, Colombo 05, Sri Lanka</p>
    <p>© 2025 CILET - All rights reserved.</p>
  </footer>

  <script>
    // Modal functions
    function openModal(modalId) {
      document.getElementById(modalId).style.display = "block";
    }
    
    function closeModal(modalId) {
      document.getElementById(modalId).style.display = "none";
    }
    
    // Close modal when clicking outside of it
    window.onclick = function(event) {
      if (event.target.className === "modal") {
        event.target.style.display = "none";
      }
    }
  </script>
</body>
</html>