<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance</title>
    <link rel="stylesheet" href="style.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <div class="container1">
        <div class="navbar">
            <div class="logo">
                <img src="images/compass1.png" width="100px"></div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home <i class="fa-solid fa-house"></i></a></li>
                        <li><a href="coachandmentor.html">Mentors<i class="fa-solid fa-chalkboard-user"></i></a></li>
                        <li><a href="contact.html">Contact <i class="fa-solid fa-phone"></i></a></li>
                        <?php if ($username): ?>
                            <a href="#" id="userLink"><?php echo htmlspecialchars($username); ?> <i class="fa-solid fa-user"></i></a>
                            <ul class="dropdown" id="userDropdown" style="display: block;">
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="login.html" id="userLink">login/signup <i class="fa-solid fa-user"></i></a>
                        <?php endif; ?>
                    </ul>
                </nav>
        </div>
    </div>
    <section>
        <div class="header">
          <div class="container">
            <div class="backgroundimage">
                <div class="hero">
                    <div class="row">
                      <button onclick="scrollToSection('products')" class="btn-x">Explore Services</button>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </section>
      <section class="products" id="products">
        <div class="container">
          <h2 class="title">OUR SERVICES</h2>
          <br />
          <div class="card-container">
            <div class="card">
                <img src="images/career_counselling.jpg" class="card-img-top" alt="Career Counselling">
                <div class="card-body">
                    <h5 class="card-title">Career Counselling</h5>
                    <p class="card-text">Get guidance on your career choices.</p>
                    <a href="career.html" class="btn">Explore</a>
                </div>
            </div>
        
            <div class="card">
                <img src="images/persona_develop.webp" class="card-img-top" alt="Personality Development">
                <div class="card-body">
                    <h5 class="card-title">Personality Development</h5>
                    <p class="card-text">Enhance your personal & professional skills.</p>
                    <a href="personality_development.html" class="btn">Explore</a>
                </div>
            </div>
        
            <div class="card">
                <img src="images/coach_mentor.jpg" class="card-img-top" alt="Coach & Mentor">
                <div class="card-body">
                    <h5 class="card-title">Coach & Mentor</h5>
                    <p class="card-text">Get mentorship to advance in your career.</p>
                    <a href="coachandmentor.html" class="btn">Explore</a>
                </div>
            </div>
        
            <div class="card">
                <img src="images/restartcareer.avif" class="card-img-top" alt="Restart Career">
                <div class="card-body">
                    <h5 class="card-title">Restart Career</h5>
                    <p class="card-text">Resume your career after a break.</p>
                    <a href="restartcareer.html" class="btn">Explore</a>
                </div>
            </div>
        </div>
        </div>
      </section>
      <section>
        <footer>
            <div class="row1">
                <div class="coll logo-section">
                    <img src="images/compass1.png" class="logo" />
                    <p>
                        <b><i class="fa-solid fa-phone"></i> +91-9876543210</b><br>
                        <br>
                        <h2 style="color:black">Where Uncertainty Fades!</h2>
                    </p>
                </div>
                
                <div class="coll links">
                    <h3 class="title">Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Mentors</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="coll contact">
                    <h3 class="title">Get in Touch</h3>
                    <form class="footer-form">
                        <input type="text" placeholder="Enter your name" required />
                        <input type="email" placeholder="Enter your email" required />
                        <input type="tel" placeholder="Enter your phone number" required />
                        <select required>
                            <option value="" disabled selected>Preferred call time</option>
                            <option value="Morning">Morning</option>
                            <option value="Afternoon">Afternoon</option>
                            <option value="Evening">Evening</option>
                        </select>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
    <script>
      document.querySelector(".menu-toggle").addEventListener("click", function() {
          document.querySelector(".nav-links").classList.toggle("show");
      });
      function scrollToSection(id) {
      document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
    }
  </script> 
  <script>
  // Simulate a logged-in user (you can replace with actual logic)
  const isLoggedIn = true;
  const username = "Login/SignUp"; 

  window.onload = function () {
    if (isLoggedIn) {
      const userLink = document.getElementById("userLink");
      userLink.innerHTML = `${username} <i class="fa-solid fa-user"></i>`;
      userLink.href = "#";
    }
  };

  function logout() {
    window.location.href = "login.html";
  }
</script>
   
</body>
</html>