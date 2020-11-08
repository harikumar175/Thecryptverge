<!DOCTYPE html>
<html>
<title>Crypt Verge</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    }
  ],
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <center>
      <img src="Logo 1.png" class=" w3-margin-right" style="width:120px"></center>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="mainpage2.php" class="w3-bar-item w3-button w3-padding w3-light-green"><i class="fa fa-line-chart fa-fw "></i>  Top Active</a>
    <a href="share.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-eercast fa-fw "></i>  Share Market</a>
    <a href="indices.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-signal fa-fw"></i>  Indices</a>
    <a href="forex.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cubes fa-fw"></i>  Forex Stream</a>
    <a href="commodoties.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-btc fa-fw"></i>  Commodoties</a>
    <a href="bonds.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-file-archive-o fa-fw"></i>  Bonds</a>
    <a href="dashboard.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>  My Dashboard</a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw" style="font-size:20px;color:red"></i>  Logout</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:50px;">

  <!-- Header -->


  <div class="w3-container"  >

    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href=apple.php><div class="w3-card w3-white w3-hover-opacity">
          <img src="apple.png" alt="John" style="width:100%">
          <div class="w3-container">
            <h3>Apple</h3>
            <p class="w3-opacity">Technology Hardware, Storage & Peripherals</p>
            <p>Apple Inc. designs, manufactures, and markets mobile phones and media devices, computers, notably the iPhone, iPad, Mac, iPod</p>
          </div>
        </div></a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="amazon.php">
        <div class="w3-card w3-white w3-hover-opacity">

          <img src="amazon.png" alt="Jane" style="width:100%">
          <div class="w3-container">
            <h3>Amazon</h3>
            <p class="w3-opacity">Consumer Discretionary</p>
            <p>Amazon.com, Inc. is a multinational technology company focused on e-commerce, cloud computing, digital streaming.</p>
          </div>
        </div></a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="google.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="google.png" alt="Mike" style="width:100% ">
          <div class="w3-container">
            <h3>Alphabet</h3>
            <p class="w3-opacity">Technology</p>
            <p>The Google search engine, advertising business, and associated services are the largest part of Alphabet’s activities</p>
          </div>
        </div>
      </a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="microsoft.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="microsoft.png" alt="Dan" style="width:100%">
          <div class="w3-container">
            <h3>Microsoft</h3>
            <p class="w3-opacity">Systems Software</p>
            <p>"Microsoft Corporation is a multinational technology company developing, manufacturing, licensing and selling computer</p>
          </div>
        </div>
      </a>
      </div>
    </div>
  </div>
  <div class="w3-container"  >
    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="facebook.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="facebook.png" alt="John" style="width:100%">
          <div class="w3-container">
            <h3>Facebook</h3>
            <p class="w3-opacity">Interactive Media & Services</p>
            <p>Facebook, Inc. is an online social media and social networking service,. It can be accessed through any device connected </p>
          </div>
        </div>
      </a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="paypal.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="paypal.png" alt="Jane" style="width:100%">
          <div class="w3-container">
            <h3>Paypal</h3>
            <p class="w3-opacity">Data Processing & Outsourced Services</p>
            <p>PayPal Holdings, Inc. is a company operating a worldwide online payment system. Providing an electronic alternative to bills</p>
          </div>
        </div>
      </a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="netflix.php">
        <div class="w3-card w3-white w3-hover-opacity ">
          <img src="netflix.png" alt="Mike" style="width:100% ">
          <div class="w3-container">
            <h3>Netflix</h3>
            <p class="w3-opacity">Movies and Entertainment</p>
            <p>Netflix, Inc. is a company providing a video-on-demand service. Primarily operating in subscription-based streaming, Netflix offers a library of films and television programs</p>
          </div>
        </div>
      </a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="intel.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="intel.png" alt="Dan" style="width:100%">
          <div class="w3-container">
            <h3>Intel</h3>
            <p class="w3-opacity">Semiconductors</p>
            <p>Intel Corporation, commonly known as Intel, is a multinational corporation and microprocessors company</p>
          </div>
        </div>
      </a>
      </div>
    </div>
  </div>
  <div class="w3-container"  >
    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="cisco.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="cisco.png" alt="John" style="width:100%">
          <div class="w3-container">
            <h3>Cisco</h3>
            <p class="w3-opacity">Communications Equipment</p>
            <p>Cisco Systems, Inc. is a multinational technology conglomerate developing, manufacturing and selling networking hardware,</p>
          </div>
        </div>
      </a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="comcast.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="comcast.png" alt="Jane" style="width:100%">
          <div class="w3-container w3-hover-opacity">
            <h3>Comcast</h3>
            <p class="w3-opacity">Communication Service</p>
            <p>Comcast Corporation is a telecommunications conglomerate. One of the leaders in the US and the world, Comcast operates in broadcasting and cable television, pay-TV</p>
          </div>
        </div>
      </a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="nvidia.php">
        <div class="w3-card w3-white w3-hover-opacity ">
          <img src="nvidia.png" alt="Mike" style="width:100% ">
          <div class="w3-container">
            <h3>Nvidia</h3>
            <p class="w3-opacity">Semiconductors</p>
            <p>Nvidia Corporation is a company developing graphics processing units – GPUs – for the gaming and professional markets.</p>
          </div>
        </div>
      </a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="broadcom.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="broadcom.png" alt="Dan" style="width:100%">
          <div class="w3-container">
            <h3>Broadcom</h3>
            <p class="w3-opacity">Communication Services</p>
            <p>Broadcom Inc. is a producer of semiconductors and infrastructure software solutions for data center, networking, software, broadband, wireless.</p>
          </div>
        </div>
      </a>
      </div>
    </div>
  </div>
  <div class="w3-container"  >
    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="costco.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="costco.png" alt="John" style="width:100%">
          <div class="w3-container">
            <h3>Costco</h3>
            <p class="w3-opacity">Hypermarkets & Super Centers</p>
            <p>Costco Wholesale Corporation, simply known as Costco, is a multinational company operating a chain of warehouse clubs.</p>
          </div>
        </div>
      </a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="tesla.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="tesla.png" alt="Jane" style="width:100%">
          <div class="w3-container w3-hover-opacity">
            <h3>Tesla</h3>
            <p class="w3-opacity">Automobile Research</p>
            <p>Tesla's current products include electric cars, battery energy storage from home to grid scale, solar products and related products.</p>
          </div>
        </div>
      </a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="starbucks.php">
        <div class="w3-card w3-white w3-hover-opacity ">
          <img src="starbucks.png" alt="Mike" style="width:100% ">
          <div class="w3-container">
            <h3>Starbucks</h3>
            <p class="w3-opacity">Cafe and Restuarants</p>
            <p>Starbucks Corporation is a multinational coffee company and coffeehouse chain. It serves a range of hot and cold drinks, coffees, teas, fresh juices, and other beverages</p>
          </div>
        </div>
      </a>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="texas.php">
        <div class="w3-card w3-white w3-hover-opacity">
          <img src="texas.png" alt="Dan" style="width:100%">
          <div class="w3-container">
            <h3>Texas Instruments</h3>
            <p class="w3-opacity">Semiconductors</p>
            <p>Texas Instruments is the world’s largest producer of analog technology components, providing analog chips and embedded processors, digital light processing technology, and education technology products such as calculators, microcontrollers, and multi-core processors.</p>
          </div>
        </div>
      </a>
      </div>
    </div>
  </div>

<br>



    </div>
  </div>



  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>


</body>
</html>
