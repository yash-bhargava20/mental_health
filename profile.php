<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap");
*{
    box-sizing: border-box;
    padding: 0;
    margin:0;
}
body{
    font-family: "Poppins";
}

header {
    background-color:aqua;
  position: fixed;
  width: 100%;
  padding: 20px 50px 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  
 
}
.nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white ;
  color: #ffff;
 padding:12px;

}

.nav-links a {
  position: relative;
  color: black;
  font-size: 1.5rem;
  margin-right: 30px;
  text-decoration: none;
  cursor: pointer;
  opacity: 1;
}

.nav-links a::after {
  content: "";
  height: 2px;
  width: 100%;
  background-color: #ffff;
  position: absolute;
  bottom: -2px;
  transition: 0.3s;
  transition-timing-function: ease-in-out;
  transform: scaleX(0);
  left: 0;
}
.nav-links a:hover::after {
  transform: scaleX(1);
}
footer{
    background-color:black;
    color:white;
    height:10vh;
    margin-top:4rem
}
#button{
    color:white;
    background-color: rgb(54, 223, 223);
}
#button:hover{
    opacity: .9;
}


    </style>
</head>
<body>
    <!-- <div class="container-fluid"> -->
        <div class="row">
            <div class="header">
                <div div class="nav">
                  <div class="logo">    <img src="logo.jpg" height="55px" width="170px"></div>
          
                  <div class="nav-links">
                    <a href="index.html">Home</a>
                    <a href="About.html">About Us</a>
                    <a href="Blogs.html">Blogs</a>
                    <a href="Contact.html">Contact Us</a>
                    <a href="feedback.html">FeedBack</a>
                    <span style="color:black;"><?php echo "".$_SESSION['suser'];?></span>
    </div>
                  </div>
                </div>
              </div>
    <!-- </div> -->

  

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <img src="img.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Online Counselling Support</h5>
    <p class="card-text">Get immediate, round-the-clock assistance for technical queries or emotional support. Our trained professionals are available to address any concerns promptly and provide personalized guidance.</p>
    <a href="support.html" class="btn" id="button">Get Support</a>
  </div>
</div>
</div>
<div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <img src="motivation.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Motivational Videos</h5>
    <p class="card-text">Discover inspiring videos featuring uplifting stories, motivational speeches, and practical tips for personal growth and empowerment. Stay motivated on your goals by incorporating these videos into your daily routine.</p>
    <a href="moti_vid.html" class="btn" id="button" >See here</a>
  </div>
</div>
</div>
<div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <img src="th.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Need Therapist</h5>
    <p class="card-text"> Find tailored counseling with licensed therapists for mental health support. Our platform ensures confidentiality and offers a safe space to explore emotions and challenges like anxiety, depression, and relationship issues.</p>
    <a href="therapist.html" class="btn" id="button">Find Therapist</a>
  </div>
</div>
</div>
</div>

<div class="row mt-5">
    <div class="col-md-4">
<div class="card" style="width: 18rem;">
<img src="chatbot.png" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">AI Chatbot</h5>
<p class="card-text">Get immediate, round-the-clock assistance for technical queries or emotional support. Our trained professionals are available to address any concerns promptly and provide personalized guidance whenever needed.</p>
<a href="chatbot.html" class="btn" id="button">Get Help</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card" style="width: 18rem;">
<img src="meditation.webp" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Meditation</h5>
<p class="card-text">Immerse yourself in guided meditation sessions designed to promote relaxation, mindfulness, and inner peace. Cultivate a deeper connection with yourself and reduce stress by incorporating meditation into your daily routine.</p>
<a href="meditation.html" class="btn" id="button">Meditate</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card" style="width: 18rem;">
<img src="music.webp" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Relaxation Playlist</h5>
<p class="card-text">Indulge in a curated selection of soothing music and ambient sounds to unwind and relax. Create your own tranquil environment and escape the stresses of daily life with our relaxation playlist.</p>
<a href="Meditation_track.html" class="btn" id="button">Listen Music </a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card" style="width: 18rem;">
<img src="breathing.png" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Breathing Exercise</h5>
<p class="card-text">Learn simple yet effective breathing techniques to calm your mind, reduce anxiety, and improve focus. Practice controlled breathing exercises to enhance your emotional resilience and promote overall well-being.</p>
<a href="breath_exercise.html" class="btn" id="button">Breath Exercise</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card" style="width: 18rem;">
<img src="quiz.webp" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title"> Mental Health Quizz</h5>
<p class="card-text">Assess your mental well-being with our comprehensive evaluation tools. Gain insights into your emotional state, stress levels, and coping mechanisms to better understand and manage your mental health.</p>
<a href="quiz.html" class="btn" id="button">Attempt Quizz</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card" style="width: 18rem;">
<img src="self_care.webp" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title"> Self Care Tips</h5>
<p class="card-text">Explore practical self-care strategies to prioritize your physical, emotional, and mental health. From practicing gratitude and setting boundaries to engaging in activities that bring you joy, discover effective ways to nurture and care for yourself.</p>
<a href="Tips&Techniques.html" class="btn" id="button">Get some Tips</a>
</div>
</div>
</div>
</div>
</div>
<footer>
        <div class="footer-content">
        <p>&copy; 2024 Mind Cure. All rights reserved.</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>