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
<div class="w3-main" style="margin-left:300px;margin-top:60px;">

  <!-- Header -->
  <!-- TradingView Widget BEGIN -->
  <!-- TradingView Widget BEGIN -->
  <div class="tradingview-widget-container" style="padding-left:22px">
    <div id="tradingview_4dfd4"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.MediumWidget(
    {
    "symbols": [
      [
        "Amazon",
        "NASDAQ:AMZN|12M"
      ]
    ],
    "chartOnly": false,
    "width": 1100,
    "height": 440,
    "locale": "in",
    "colorTheme": "light",
    "gridLineColor": "#F0F3FA",
    "trendLineColor": "#2196F3",
    "fontColor": "#787B86",
    "underLineColor": "#E3F2FD",
    "isTransparent": false,
    "autosize": false,
    "container_id": "tradingview_4dfd4"
  }
    );
    </script>
  </div>

  <!-- TradingView Widget END -->

  <br>
  <!-- TradingView Widget BEGIN -->
  <!-- TradingView Widget BEGIN -->
  <div class="tradingview-widget-container" style="padding-left:22px">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
    {
    "symbol": "NASDAQ:AMZN",
    "colorTheme": "light",
    "isTransparent": false,
    "largeChartUrl": "",
    "displayMode": "regular",
    "width": "880",
    "height": "830",
    "locale": "in"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->
  <!-- TradingView Widget END -->




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
