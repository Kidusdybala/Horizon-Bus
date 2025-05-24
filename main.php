<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Horizon</title>
  <link rel="stylesheet" href="main page.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> 

  <style>
    .book {
  margin-bottom: 3rem;
}

.heading {
  color: #333;
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 1.5rem;
  text-align: center;
}

.box-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 0 -1rem;
}
.logo-text{
  margin-left: 10px;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
}
.box {
  background-color: #f5f5f5;
  border-radius: 0.5rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  flex: 1 0 calc(50% - 2rem);
  margin: 1rem;
  overflow: hidden;
  position: relative;
  display: flex;
}

.box img {
  width: 50px;
  height: 50px;
  float: left;
  margin-right: 1rem;
  margin-bottom: 70px;
}
.bus-img {
    width: 200px; /* Set the width */
    height: auto; /* Maintain aspect ratio */
    border-radius: 10px; /* Add rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Add shadow */
}


.content {
  flex: 1;
  padding: 1rem;
}

.paragraph {
  margin: 1rem 0;
}

.paragraph p {
  color: #333;
  font-size: 1.1rem;
  line-height: 1.5;
  margin-bottom: 1.5rem;
}
.btn {
  position: absolute;
  bottom: 15px;
  left: 50%;
  transform: translateX(-50%);
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}
.bus-image{
  border-radius: 10px; 
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
}
.con-img{
  border-radius: 10px; 
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
.btn:hover {
  background-color: #0056b3;
}

@media (max-width: 768px) {
  .box {
    flex: 1 0 100%;
  }

  .box img {
    width: 100%;
    height: auto;
    float: none;
    margin-right: 0;
  }
}
</style>
</head>
<link rel="icon" href="Horizon.png">
<body>
  <h1>Horizon</h1>
  <nav class="nav">  
    <div class="logo">
      <img src="Horizon.png" width="62px" height="62px" alt="">
      <span class="logo-text">Horizon</span>
    </div>
    <ul class="nav__menu">
      <li class="nav__menu-item">
        <a href="#">Plan a Trip</a>
        <ul class="nav__submenu">
          <div class="nav__submenu-item">
            <a href="destination.php">Booking Preferences</a>
          </div>
         <li class="nav__submenu-item">
        </ul>
      </li>
      <li class="nav__menu-item">
        <a href="#">Travel Information</a>
        <ul class="nav__submenu">
          <li class="nav__submenu-item"><a href="Location.html">Offices Location</a></li>
          <li class="nav__submenu-item"><a href="features.html">Bus Features</a></li>      
        </ul>
      </li>
      <li class="nav__menu-item"><a href="bookchecking.php">Manage My Bookings</a></li>
      <li class="nav__menu-item">
        <a href="#">About</a>
        <ul class="nav__submenu">
          <li class="nav__submenu-item"><a href="aboutus.html">About us</a></li>
        </ul>
      </li>
      <li class="nav__menu-item">
        <a href="#">Help </a>
        <ul class="nav__submenu">
          <li class="nav__submenu-item"><a href="#">Tips for Your Journey & FAQs</a></li>
          <li class="nav__submenu-item"><a href="payment.html">Payments & Tickets</a></li>
          <li class="nav__submenu-item"><a href="contact us.html">Contact Us</a></li>
        </ul>
      </li>
      <li class="nav__menu-item">
        <a href="signup.php">logout </a>
    </ul>
  </nav>
  <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="bus-container">
        <img src="Bus.jpg" alt="Bus Image" class="bus-image">
        <h3 class="bus-text">Travel around Ethiopia</h3>
      </div>
    </div>
  </div>
</div>
        <form>
          <div class="mb-3">
        </form>
      </div>
    </div>
  </div>
<section class="book">
  <h2 class="heading">Horizon</h2>
  <div class="box-container">
    <div class="box">
      <img src="remover.png" alt="Bus Image" class="bus-img">
      <div class="content">
      
    </div>
    <div class="paragraph">
    <p>Welcome to Horizon, where your journey across Ethiopia begins. Founded with a passion for providing convenient and reliable transportation, Alpha Bus Station strives to connect communities and create memorable travel experiences for our passengers.</p>
<p>With a commitment to excellence, we offer a diverse range of bus routes, covering major cities like Addis Ababa, Dire Dawa, and Bahir Dar, as well as charming towns like Adama, Harar, and Gondar. Our extensive network ensures that you can explore Ethiopia's rich cultural heritage and breathtaking landscapes with ease.</p>
<p>As a customer-centric company, we are dedicated to providing exceptional service at every step of your journey. From easy booking options to real-time bus tracking, we strive to make your travel experience hassle-free and convenient. Join us on board Alpha Bus Station and embark on an unforgettable adventure across Ethiopia.</p>
</div>
  </div>
  </div>
  <section>
    <div class="container">   
      <div class="row mt-5 justify-content-center">
        <div class="col-lg-3 col-9 mb-3 mb-lg-0">
          <div class="card rounded-4 pt-3 text-center">
            <div class="card-body cus-font py-5">
              <div class="border border-light rounded-4 p-3 cus-w-process m-auto">
                <h2 class="h2 mb-0 text-primary fw-bold fs-1">1</h2>
              </div>
              <div class="mt-3">
              <h3 class="h5"><a href="destination.php" style="text-decoration: none; color: inherit;">Book Travel</a></h3>
                <p>Find available buses and choose your preferred route.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-9 mb-3 mb-lg-0">
          <div class="card rounded-4 pt-3 text-center">
            <div class="card-body cus-font py-5">
              <div class="border border-light rounded-4 p-3 cus-w-process m-auto">
                <h2 class="h2 mb-0 text-primary fw-bold fs-1">2</h2>
              </div>
              <!--
              <div class="mt-3">
                <h3 class="h5">Select Seats</h3>
                <p>Choose your desired seats for the selected bus.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-9 mb-3 mb-lg-0">
          <div class="card rounded-4 pt-3 text-center">
            <div class="card-body```html
cus-font py-5">
              <div class="border border-light rounded-4 p-3 cus-w-process m-auto">
                <h2 class="h2 mb-0 text-primary fw-bold fs-1">3</h2>
              </div>
-->
              <div class="mt-3">
              <h3 class="h5"><a href="payment.html" style="text-decoration: none; color: black;">Make Payment</a></h3>
                <p>Pay and complete the booking.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="service">
    <h2 class="heading-title">Destinations To Explore</h2>
    <div class="box-container">
    <div class="box">
        <img src="Adm.jpg" alt="" class="con-img">
        <div class="content">
            <h3>Adama</h3>
            <p>Adama, also known as Nazret, is a lively city in Ethiopia, just 100 kilometers southeast of Addis Ababa. This bustling hub is packed with charm and adventure, covering around 13,000 square kilometers. Dive into the rejuvenating Sodere Hot Springs, explore the serene Lake Bishoftu, or wander through its vibrant markets.</p>
        </div>
    </div>
    <div class="box">
        <img src="bcity.png" alt="" class="con-img">
        <div class="content">
            <h3>Bahir Dar</h3>
            <p>Discover Bahir Dar, Ethiopia's hidden gem, located about 565 kilometers northwest of Addis Ababa. Nestled on the southern shore of the stunning Lake Tana, Bahir Dar offers an irresistible blend of natural beauty and cultural richness. Covering a vibrant landscape, this city is home to the majestic Blue Nile Falls, charming island monasteries, and lush, palm-lined avenues. Whether you're cruising on the lake, exploring ancient churches, or simply soaking up the serene atmosphere, Bahir Dar promises an unforgettable adventure. Visit Bahir Dar—where history meets nature in the most captivating way!</p>
        </div>
    </div>
    <div class="box">
        <img src="Add.jpg" alt="" class="con-img" >
        <div class="content">
            <h3>Addis Ababa</h3>
            <p>Covering a vibrant landscape that stretches across the Ethiopian highlands, Addis Ababa is a melting pot of culture, history, and modernity. Just a stone's throw away from the breathtaking Entoto Mountains, this dynamic city boasts an array of attractions, from the vibrant Mercato market to the iconic National Museum, home to the fossilized remains of Lucy.</p>
        </div>
    </div>
    <div class="box">
        <img src="gondar.avif" alt="" class="con-img">
        <div class="content">
            <h3>Gondar</h3>
            <p>Step into the majestic city of Gondar, a historical jewel located in northern Ethiopia, approximately 748 kilometers from Addis Ababa. Embracing an area rich in regal splendor and architectural wonders, Gondar invites you to explore its royal castles, ancient churches, and tranquil gardens. Lose yourself in the grandeur of Fasil Ghebbi, a UNESCO World Heritage site, or marvel at the intricate artwork adorning Debre Berhan Selassie Church.</p>
        </div>
    </div>
    <div class="box">
        <img src="Harar.webp" alt="" class="con-img">
        <div class="content">
            <h3>Harar</h3>
            <p>Step into the enchanting city of Harar, a cultural treasure just 525 kilometers east of Addis Ababa. This historic gem, often dubbed the "City of Saints," spans a vibrant landscape teeming with colorful markets and ancient walls. Lose yourself in the maze of alleys within the UNESCO-listed old town, home to 82 mosques and over 100 shrines. Don’t miss the exhilarating hyena feeding ritual or the lively Harar Jugol, where history comes alive.</p>
        </div>
    </div>
    <div class="box">
        <img src="diredawa.jfif" alt="" class="con-img">
        <div class="content">
            <h3>Dire Dawa</h3>
            <p>Welcome to Dire Dawa, a vibrant city nestled in the eastern highlands of Ethiopia, just 515 kilometers from Addis Ababa. Covering an area brimming with rich history and cultural diversity, Dire Dawa invites you to explore its lively streets and bustling markets. Dive into the past at the nostalgic Dire Dawa Railway Station, or wander through the colorful alleys of the Kefira Market. Don’t forget to indulge your taste buds with the city’s famous spicy cuisine and aromatic coffee.</p>
        </div>
    </div>
</div>
</section>
<footer>
  <div class="footer">
    <div class="footer-section">
      <h3 class="footer-heading">Quick Links</h3>
      <ul class="footer-links">
        <li><a href="main page.html"><i class="fas fa-angle-right"></i> Home</a></li>
        <li><a href="about.html"><i class="fas fa-angle-right"></i> About</a></li>
        <li><a href="transport.html"><i class="fas fa-angle-right"></i> Transport</a></li>
        <li><a href="book.html"><i class="fas fa-angle-right"></i> Book</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3 class="footer-heading">Extra Links</h3>
      <ul class="footer-links">
        <li><a href="#"><i class="fas fa-angle-right"></i> Ask Question</a></li>
        <li><a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a></li>
        <li><a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3 class="footer-heading">About Us</h3>
      <ul class="footer-links">
        <li><a href="#"><i class="fab fa-google-plus-g"></i> Google</a></li>
        <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
        <li><a href="#"><i class="fab fa-telegram"></i> Telegram</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h3 class="footer-heading">Contact Us</h3>
      <ul class="footer-links">
        <li><a href="#"><i class="fas fa-phone"></i> +251987765755</a></li>
        <li><a href="#"><i class="fas fa-phone"></i> +251111111111</a></li>
        <li><a href="#"><i class="fas fa-envelope"></i> Buddykk07@gmail.com</a></li>
        <li><a href="#"><i class="fas fa-map-marker"></i> Adama, Ethiopia</a></li>
      </ul>
    </div>
  </div>
  <p class="text-center mt-3">© <?php echo date("Y"); ?> Horizon Travels. All rights reserved.</p>
</footer>
</section>
</body>
</html>


