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
<h2>Contact Us</h2>
    <form action="process_form.php" method="post">
        <label for="fullName">Full Name:</label><br>
        <input type="text" id="fullName" name="fullName" required><br><br>

        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="streetAddress">Street Address:</label><br>
        <textarea id="streetAddress" name="streetAddress" rows="4" required></textarea><br><br>

        <label for="pestService">Pest Service Required:</label><br>
        <input type="text" id="pestService" name="pestService" required><br><br>

        <label for="comments">Additional Comments:</label><br>
        <textarea id="comments" name="comments" rows="4"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

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