
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Carrot by Stick Conference</title>
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
      height: 180px;
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
    <a class="active item" href="#about">About</a>
    <a class="item" href="#speakers">Speakers</a>
    <a class="item" href="#where">Where</a>
    <a class="item" href="#when">When</a>
    <a class="item" href="#sponsors">Sponsors</a>
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
  <a class="active item" href="#about">About</a>
  <a class="item" href="#speakers">Speakers</a>
  <a class="item" href="#where">Where</a>
  <a class="item" href="#when">When</a>
  <a class="item" href="#sponsors">Sponsors</a>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item" href="#about">About</a>
        <a class="item" href="#speakers">Speakers</a>
        <a class="item" href="#where">Where</a>
        <a class="item" href="#when">When</a>
        <a class="item" href="#sponsors">Sponsors</a>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        Carrot <img src="/images/carrot-stick-logo-512.png"> Stick
      </h1>
      <h2>August 6-7, 2016</h2>
      <h2>Portland, Oregon</h2>
      <form class="ui form">
        <div class="ui action input">
          <input type="text" placeholder="email">
          <button class="ui button">Notify Me</button>
        </div>
      </form>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Copy copy copy</h3>
      <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Hosts</h3>

      <div class="ui three stackable cards">
        <div class="card">
          <div class="image">
            <img class="" src="/images/anomalily.jpg">
          </div>
          <div class="content">
            <div class="header">Lillian Karabaic</div>
            <div class="meta">
              <a href="http://anomalily.net/">anomalily.net</a>
            </div>
            <div class="content">
              Bio
            </div>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img class="" src="/images/aaronpk.jpg">
          </div>
          <div class="content">
            <div class="header">Aaron Parecki</div>
            <div class="meta">
              <a href="https://aaronparecki.com/">aaronparecki.com</a>
            </div>
            <div class="content">
              Bio
            </div>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <img class="" src="/images/bethany.jpg">
          </div>
          <div class="content">
            <div class="header">Bethany Soule</div>
            <div class="meta">
              <a href="http://bethaknee.com/">bethaknee.com</a>
            </div>
            <div class="content">
              Bio
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <h3 class="ui header">Schedule</h3>

      <h4>Friday</h4>

      7:00pm Pre-Party

      <h4>Saturday</h4>

      8:00 Breakfast / Coffee
      9:00 Speakers
      12:00 Lunch
      13:00 Speakers
      18:00 Break for Dinner
      20:00 Ignite Talks

      <h4>Sunday</h4>

      8:00 Breakfast / Coffee
      9:00 Introduction / Scheduling
      10:00 Unconference Session
      11:00 Unconference Session
      12:00 Lunch
      13:00 Unconference Session
      14:00 Wrap-up

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


  <div class="ui vertical stripe segment" style="border-bottom: 0;">
    Portland State University

    <div id="map"></div>
  </div>


  <div class="ui vertical segment" style="border-bottom: 0; background: #F5E9CE;">
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
          <p>If you're going to make good on your commitments to run or bike, Portland is your urban playground with over 400 miles of beautiful bike trails and paths. Or follow through on your resolution spend more time in nature in the <a href="http://www.travelportland.com/article/forest-park/">world's largest urban rainforest</a> (there's your sticks!)</p>
        </div>
        <div class="column">
          <div class="header-graphic" style="background-image: url(/images/coffee-shop.jpg);">
            <h3>Enjoy Some Food</h3>
          </div>
          <p>Portland's <a href="http://www.foodcartsportland.com/maps/">food carts</a>, <a href="http://www.baileystaproom.com/">microbrews</a>, <a href="http://www.bluestardonuts.com/">pretentiously delicious donuts</a>, and <a href="http://pdx.eater.com/maps/20-great-portland-coffee-shops">local coffee</a> can keep you fueled while you contemplate the best incentive methods for achieving your goals. You can even get a <a href="http://www.pdxmonthly.com/articles/2014/12/5/blue-star-s-new-doughnuts-december-2014">ginger carrot donut</a> as your carrot.</p>
        </div>
      </div>
      <div class="center aligned row">
        <div class="column">
          <div class="header-graphic" style="background-image: url(/images/benson-bubbler.jpg);">
            <h3>Benson Bubblers</h3>
          </div>
          <p>Behavior incentives run through Portland's blood - or at least our water. The ubiquitous "Benson Bubbler" public drinking fountains were originally installed in 1912 by Simon Benson, who believed fresh available drinking water would deter loggers from drinking beer.</p>
        </div>
        <div class="column">
          <div class="header-graphic" style="background-image: url(/images/berries.jpg);">
            <h3>Summer</h3>
          </div>
          <p>Summer in Portland might be one of the West Coast's best kept secrets. Days are long and dry with temperatures hovering around a comfortable 65-75 degrees. The sun doesn't set until 9PM most days, and there's no better time for hikes at nearby Mt. Hood or Multnomah Falls.</p>
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe segment">
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
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
var mymap = L.map('map').setView([45.519666, -122.671118], 13);

</script>
</body>
</html>