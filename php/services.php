<?php
session_start();
if(!isset($_SESSION['privilleged'])){
  header("location:loginForm.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css/servicesstyle.css">
</head>
<body>
    <center>
    <header>
        <h1>services</h1>
    </header>
    <div class="card" style="width: 18rem;">
        <img src="images/1603980285905.jfif" class="card-img-top" alt="this is an image about booking a flight">
        <div class="card-body">
          <h5 class="card-title">Booking a flight</h5>
          <p class="card-text">Booking tickets well in advance can often lead to lower prices, especially for flights. Airlines, trains, and buses tend to offer lower fares for those who book early.
            If you're a member of loyalty programs or have reward points or miles from credit cards, consider using them to get discounts or even free tickets.</p>
          <a href="booking.php" class="btn btn-primary">Book</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="images/travel-transportation-flight-terminal-business-suitcase-air-bag-departure-baggage-generative-ai-photo.jpg" class="card-img-top" alt="sutecase">
        <div class="card-body">
          <h5 class="card-title">Regester your bag</h5>
          <p class="card-text">Registering your bag online before your flight can save you time, reduce stress, offer customization options, and contribute to a more efficient and enjoyable travel experience. It's a simple step that can make a significant difference in the way you start your journey.</p>
          <a href="bag.html" class="btn btn-primary">Rester</a>
        </div>
      </div>
    </center>
<footer>
    <a href="index.html">press here to go back to the home screen</a>
</footer>
</body>
</html>