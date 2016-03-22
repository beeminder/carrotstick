
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Carrot/Stick Conference - Portland, Oregon</title>
  <link rel="stylesheet" type="text/css" href="/semantic/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/icomoon/style.css">

  <link rel="stylesheet" href="//cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />

  <style type="text/css">

    .ui.inverted.segment, .ui.primary.inverted.segment {
      background-color: #EEAD3D;
    }
    .ui.secondary.inverted.pointing.menu {
      border-color: rgba(255,255,255,.1);
    }


    .header-graphic {
      font-size: 3rem;
      color: white;
      text-align: left;
      background-size: cover; 
      color: white; 
      padding-top: 4em;
      margin-bottom: 12px;
    }
    .ui.vertical.stripe .header-graphic h3 {
      padding-left: 6px;
      font-size: 5vh;
      text-shadow: 0px 0px 3px rgba(0, 0, 0, 1);
    }

    #portland-section h3 {
      color: #673718;
    }


    #social-media-section {
      background: #CC510B;
    }
    #social-media-section a {
      color: white;
    }

    #portland-section, #portland {
      background: #EEAD3D;
    }



    #portland-section .ui.centered.grid {
      max-width: 1000px;
      margin: 0 auto;
    }
    @media (max-width: 990px) {
      #portland-section .ui.centered.grid {
        max-width: 600px;
      }
    }

    @media (max-width: 767px) {
      .ui.stackable.cards>.card {
        max-width: 300px;
        margin-left: auto;
        margin-right: auto;
      }
    }



    #map {
      height: 320px;
    }

    .signup-form {
      max-width: 400px;
      margin-top: 1em;
    }

    .popup {
      border-bottom: 1px #ccc dashed;
      cursor: pointer;
    }


    .inverted a {
      color: white;
      text-decoration: underline;
    }
    .inverted a:hover {
      color: ;
    }

    #portland-section a {
      color: #673718;
    }
    #portland-section a:hover {
      color: #8c4d24;
      border-bottom: 1px #8c4d24 dashed;
    }


    .carrot-orange {
      color: #CC510B;
    }
    .carrot-brown, .ui.header {
      color: #673718;
    }
    .carrot-green {
      color: #5E6524;
    }
    .carrot-yellow {
      color: #EEAD3D;
    }
    .carrot-white {
      color: #F5E9CE;
    }

    .ui.button.subscribe-button {
      background-color: #CC510B;
      color: white;
    }


    .social-media-icons a {
      color: #CC510B;
    }
    .social-media-icons a:hover {
      color: #e07131;
    }


    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe.nopadding {
      padding: 0;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 3em;
      padding-bottom: 3em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <script src="/assets/jquery-2.2.0.min.js"></script>
  <script src="/semantic/semantic.min.js"></script>
  <script src="//cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <?php include('../copy/nav.php'); ?>
<!--     
    <div class="right menu">
      <div class="item">
        <a class="ui primary button">Sign Up</a>
      </div>
    </div>
 -->
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <?php include('../copy/nav.php'); ?>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <?php include('../copy/nav.php'); ?>
      </div>
    </div>

    <div class="ui text container">

      <h1 class="ui inverted header">
        Carrot <img src="/images/carrot-stick-logo-512.png"> Stick
      </h1>

      <h2>August 6-7, 2016</h2>
      <h2>Portland, Oregon</h2>

      <form class="ui form" action="//carrotbystick.us13.list-manage.com/subscribe/post?u=cdbaf12e21728a8482fed7015&amp;id=8c9012b353" method="post">
        <div class="ui action input signup-form">
          <input type="email" name="EMAIL" placeholder="email" style="border-color: #CC510B;">
          <button class="ui button subscribe-button" name="subscribe">Notify Me</button>
        </div>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdbaf12e21728a8482fed7015_8c9012b353" tabindex="-1" value=""></div>
      </form>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

    </div>

  </div>

  <div class="ui vertical stripe segment" id="about">
    <div class="ui text container">
      <?php include('../copy/main-description.php'); ?>
    </div>
  </div>

  <div class="ui vertical stripe segment" id="hosts">
    <div class="ui text container">
      <h3 class="ui header">Hosts</h3>

      <div class="ui three stackable cards">
        <div class="card">
          <div class="image">
            <img class="" src="/images/anomalily.jpg">
          </div>
          <div class="content">
            <?php include('../copy/bio-anomalily.php'); ?>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img class="" src="/images/aaronpk.jpg">
          </div>
          <div class="content">
            <?php include('../copy/bio-aaronpk.php'); ?>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img class="" src="/images/bethany.jpg">
          </div>
          <div class="content">
            <?php include('../copy/bio-bethaknee.php'); ?>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="ui vertical stripe segment" id="when">
    <div class="ui text container">
      <h3 class="ui header">Schedule</h3>
      <?php include('../copy/schedule.php'); ?>
    </div>
  </div>

  <div class="ui vertical stripe segment" id="social-media-section">
    <div class="ui text container">
      <div style="font-size: 2em; text-align: center;" class="carrot-white">
        #carrotstick
      </div>
      <div style="font-size: 4em; text-align: center;" class="social-media-icons">
        <a href="https://twitter.com/carrotstick"><i class="ui twitter icon"></i></a>
        <a href="https://instagram.com/carrotstick"><i class="ui instagram icon"></i></a>
        <a href="https://facebook.com/carrotstick"><i class="ui facebook icon"></i></a>
        <a href="https://beeminder.com/carrotstick"><i class="icon-beeminder"></i></a>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe segment nopadding" style="border-bottom: 0;" id="where">
    <div id="map"></div>
  </div>


  <div class="ui vertical segment" style="border-bottom: 0;" id="portland">
    <h4 class="ui horizontal header divider">
      Why Portland?
    </h4>
  </div>

  <div class="ui vertical stripe quote segment" id="portland-section">
    <div class="ui centered grid">
      <div class="center aligned row">
        <div class="sixteen wide tablet eight wide computer column">
          <div class="header-graphic" style="background-image: url(/images/bicycle.jpg);">
          </div>
          <h3>Explore</h3>
          <?php include('../copy/explore.php'); ?>
        </div>
        <div class="sixteen wide tablet eight wide computer column">
          <div class="header-graphic" style="background-image: url(/images/coffee-shop.jpg);">
          </div>
          <h3>Enjoy Some Food</h3>
          <?php include('../copy/food.php'); ?>
        </div>
      </div>
      <div class="center aligned row">
        <div class="sixteen wide tablet eight wide computer column">
          <div class="header-graphic" style="background-image: url(/images/benson-bubbler.jpg);">
          </div>
          <h3>Benson Bubblers</h3>
          <?php include('../copy/benson-bubblers.php'); ?>
        </div>
        <div class="sixteen wide tablet eight wide computer column">
          <div class="header-graphic" style="background-image: url(/images/berries.jpg);">
          </div>
          <h3>Summer</h3>
          <?php include('../copy/summer.php'); ?>
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe segment" id="sponsors">
    <div class="ui text container">
      <h3 class="ui header">Sponsors</h3>



      <h4 class="ui horizontal header divider">
        How to Sponsor
      </h4>
      <?php include('../copy/how-to-sponsor.php'); ?>
      <a class="ui large button" href="/sponsor/carrot-stick-sponsorship-prospectus.pdf">Download Sponsorship PDF</a>
    </div>
  </div>









  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <p>Carrot/Stick &bull; August 6-7, 2016 &bull; Portland, Oregon</p>
      <ul>
        <li><a href="/code-of-conduct/">Code of Conduct</a></li>
        <li><a href="/sponsor/carrot-stick-sponsorship-prospectus.pdf">Sponsorship Prospectus</a> (PDF)</li>
      </ul>
    </div>
  </div>
</div>

<script>
var map = L.map('map', {
  scrollWheelZoom: false,
  center: [45.519666, -122.671118],
  zoom: 13
});

var tileProtocol = (window.location.protocol !== 'https:') ? 'http:' : 'https:';
var layer = L.tileLayer(tileProtocol+'//{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="http://cartodb.com/attributions">CartoDB</a>'
});
map.addLayer(layer);

var marker = L.marker([45.512058, -122.683392]).addTo(map);
marker.bindPopup("<b>Portland State University</b><br>1825 SW Broadway").openPopup();

$(function(){
  $(".popup").popup();
});

</script>
</body>
</html>