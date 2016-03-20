
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
      font-size: 5vw;
      text-shadow: 0px 0px 3px rgba(0, 0, 0, 1);
    }


    #map {
      height: 280px;
    }

    .signup-form {
      max-width: 400px;
      margin-top: 1em;
    }

    .popup {
      border-bottom: 1px #ccc dashed;
      cursor: pointer;
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
      padding-top: 5em;
      padding-bottom: 5em;
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
          <input type="email" name="EMAIL" placeholder="email">
          <button class="ui button" name="subscribe">Notify Me</button>
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

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <div style="font-size: 2em; text-align: center;" class="carrot-brown">
        #carrotstick
      </div>
      <div style="font-size: 4em; text-align: center;" class="social-media-icons">
        <a href="https://twitter.com/carrotstick"><i class="ui twitter icon"></i></a>
        <a href="https://instagram.com/carrotstick"><i class="ui instagram icon"></i></a>
        <a href="https://facebook.com/carrotstick"><i class="ui facebook icon"></i></a>
        <a href="https://beeminder.com/carrotstick"><i class="ui linkify icon"></i></a>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe segment nopadding" style="border-bottom: 0;" id="where">
    <div id="map"></div>
  </div>


  <div class="ui vertical segment" style="border-bottom: 0; background: #F5E9CE;" id="portland">
    <h4 class="ui horizontal header divider">
      Why Portland?
    </h4>
  </div>

  <div class="ui vertical stripe quote segment" style="background: #F5E9CE;">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <div class="header-graphic" style="background-image: url(/images/bicycle.jpg);">
            <h3>Explore</h3>
          </div>
          <?php include('../copy/explore.php'); ?>
        </div>
        <div class="column">
          <div class="header-graphic" style="background-image: url(/images/coffee-shop.jpg);">
            <h3>Enjoy Some Food</h3>
          </div>
          <?php include('../copy/food.php'); ?>
        </div>
      </div>
      <div class="center aligned row">
        <div class="column">
          <div class="header-graphic" style="background-image: url(/images/benson-bubbler.jpg);">
            <h3>Benson Bubblers</h3>
          </div>
          <?php include('../copy/benson-bubblers.php'); ?>
        </div>
        <div class="column">
          <div class="header-graphic" style="background-image: url(/images/berries.jpg);">
            <h3>Summer</h3>
          </div>
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

      <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
      <a class="ui large button">Get in Touch</a>
    </div>
  </div>









  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      Carrot/Stick<br>
      Beeminder, Inc.<br>
      330 SE MLK Blvd, 2nd Floor<br>
      Portland, OR, 97214
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