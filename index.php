<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

  <style>

        label {
            font-weight: bold;
        }
        input, textarea {
            width: 30%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background: #808080;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #FFC0CB;
        }
  </style>

</head>
<body>

<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">Jane & John</h1>
    <h2>Are getting married</h2>
    <h2><b>12.05.2025</b></h2>
<p id="demo">
<!-- Countdown Timer JS File -->
  <script src="main.js"></script>
</p>
<p class="w3-center"><a href="#wedding" class="w3-button w3-pale-red w3-round w3-padding-large w3-large">Im Excited!</a></p>
  </div>
</header>

<!-- Navbar (sticky bottom) -->
<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
    <a href="#home" style="width:25%" class="w3-bar-item w3-button">Home</a>
    <a href="#us" style="width:25%" class="w3-bar-item w3-button">Jane & John</a>
    <a href="#wedding" style="width:25%" class="w3-bar-item w3-button">Wedding</a>
    <a href="#rsvp" style="width:25%" class="w3-bar-item w3-button w3-hover-black">RSVP</a>
  </div>
</div>

<!-- About / Jane And John -->
<div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min" id="us">
  <div class="w3-content">
    <h1 class="w3-center w3-text-grey"><b>Jane & John</b></h1>
    <img class="w3-round w3-grayscale-min" src="img/wedding_couple2.jpg" style="width:100%;margin:32px 0">
    <p><i>You all know us. And we all know you. We are getting married lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.</i>
    </p><br>
    <p class="w3-center"><a href="#wedding" class="w3-button w3-black w3-round w3-padding-large w3-large">Wedding Details</a></p>
  </div>
</div>

<!-- Background photo -->
<div class="w3-display-container bgimg2">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">You Are Invited</h1><br>
    <h2>Of course..</h2>
  </div>
</div>

<!-- Wedding information -->
<div class="w3-container w3-padding-64 w3-pale-red w3-grayscale-min w3-center" id="wedding">
  <div class="w3-content">
    <h1 class="w3-text-grey"><b>THE WEDDING</b></h1>
    <img class="w3-round-large w3-grayscale-min" src="img/wedding_location.jpg" style="width:100%;margin:64px 0">
    <div class="w3-row">
      <div class="w3-half">
        <h2>When</h2>
        <p>Wedding Ceremony - 2:00pm</p>
        <p>Reception & Dinner - 5:00pm</p>
      </div>
      <div class="w3-half">
        <h2>Where</h2>
        <p>Some place, an address</p>
        <p>Some where, some address</p>
      </div>
    </div>
  </div>
</div>

<!-- RSVP section -->
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="rsvp">
  <h1>HOPE YOU CAN MAKE IT!</h1>
  <p class="w3-large">Kindly Respond Before December 2, 2025</p>
    
   <div class="form-container">
        <form action="rsvp.php" method="POST">
            <input type="name" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <button type="submit">I will attend</button>
        </form>
    </div>

</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48">
   &copy;<script>
              var today=new Date();
              var year=today.getFullYear();
              document.write(year);
            </script> Copyright <strong><span>yourwebsitename</span></strong>. All Rights Reserved
</footer>
<div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>
</html>
