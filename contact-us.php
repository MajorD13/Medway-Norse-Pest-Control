<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medway Norse Pest Control - Home</title>
    <link rel="stylesheet" media="screen and (min-width: 992px)" href="css/styles.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="css/ssstyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
    <header class="norse-banner">
        <div>
            <a href="https://norsegroup.co.uk/">
            <img src="images/Norse_Group_logo.png" alt="norse group logo" class="norse-logo">
            </a>
            <nav class="norse-nav">
                <a class="norse-nav" href="https://norsegroup.co.uk/about-us/">About US  <button type="menu" class="fa">&#xf078;</button></a>
                <a class="norse-nav" href="https://norsegroup.co.uk/services/">Our Services<button type="menu" class="fa">&#xf078;</button></a>
                <a class="norse-nav" href="https://norsegroup.co.uk/partnerships/">Our Partnerships</a>
                <a class="norse-nav" href="https://www.careers.norsegroup.co.uk/">Careers</a>
                <a class="norse-nav" href="https://norsegroup.co.uk/news/">News</a>
            </nav>
            <button onclick="location.href='https://norsegroup.co.uk/contact-us/'" class="contact-btn">
                Contact Us
        </button>
        </div>
    </header>
        <section class="banner">
            <div>
        <h1 class="medway-header">Medway Norse</h1>
        <img class="medway-logo" src="images/Medway-Rev.png" alt="medway norse logo">
            </div>
        </section>
        <span class="pest-nav">
        <nav class="medway-nav">
            <a class="nav-link" href="index.html">Home</a>
            <a class="nav-link" href="about.html">About</a>
            <a class="nav-link" href="services.html">Services</a>
            <a class="nav-link" href="contact-us.html">Contact Us</a>
            <a class="nav-link" href="faq.html">FAQ</a>
        </nav>
    </span>
    <div class="container">
        <h2>Contact Us</h2>
        <p>Get in touch with us for any inquiries!</p>
    </div>
<!--     Contact Form    -->
    <div class="contact-form">
        <form action="/action_page.php" method="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
      
          <label for="fname">First Name:</label>
          <input type="text" id="fname" name="firstname" placeholder=" Enter Your name..">
      
          <label for="lname">Last Name:</label>
          <input type="text" id="lname" name="lastname" placeholder="Enter Your last name..">
      
          <label for="pnumber">Phone Number:</label>
          <input type="text" id="pnumber" name="pnumber" placeholder="Enter Your Phone Number..">
      
          <label for="email">Email Address:</label>
          <input type="text" id="email" name="email" placeholder="Enter Your Email Address..">

          <label for="address">Address:</label>
          <textarea id="address" name="address" placeholder="Enter Your Address.." style="height:150px"></textarea>
      
          <label for="pest">Pest Service Required:</label>
          <input type="text" id="pest" name="pest" placeholder="What service is required?">

          <label for="additonal-comms">Additional Comments:</label>
          <textarea id="additonal-comms" name="additonal-comms" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Submit">

    <footer>
        <p>&copy; 2024 Medway Norse Pest Control</p>
    </footer>
    <!--       cookies     --> 
<div id="consentBox">
    <img src=
"images/Norse_Group_logo.png"
         alt="Logo">
    <div id="consentContent">
        <header id="consentHeader">
              Cookies: The choice is yours
          </header>
        <p>
          We use cookies to make our site work well
          for you and so we can continually improve it.
          <br>The cookies that are necessary to 
          keep the site functioning are always on
        </p>
        <div class="buttons">
            <button class="consentButton">
                  Accept Cookies
              </button>
            <button class="rejectButton">
                  Reject
              </button>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
