<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title>Carrot/Stick Conference - Portland, Oregon</title>
  <link rel="stylesheet" type="text/css" href="/semantic/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/icomoon/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/styles.css">
  <link rel="stylesheet" href="//cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
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

<!-- Page Contents -->
<div class="pusher">

  <div class="ui inverted vertical header segment">
    <div class="ui container">
      <p><a href="/">Carrot/Stick</a> &bull; August 6-7, 2016 &bull; Portland, Oregon</p>
    </div>
  </div>

  <div class="ui vertical segment" id="about">
    <div class="ui text container">

      <h2>Carrot/Stick Code of Conduct</h2>

      <h3>Respect</h3>

      <p>A primary goal of Carrot/Stick is to be inclusive to the largest number of participants, with the most varied and diverse backgrounds possible. Carrot/Stick is an intentionally positive community that recognizes and celebrates the creativity and collaboration of the diversity of people, cultures, and opinions that they bring to Carrot/Stick.</p>
      <p>Carrot/Stick spaces are an inclusive environment, based on treating all individuals respectfully, regardless of gender (including transgender status), sexual orientation, age, disability, medical conditions, nationality, ethnicity, religion (or lack thereof), physical appearance, or software preferences.</p>
      <p>We value respectful behavior above individual opinions.</p>
      <p>The following behaviors are expected and requested of all community members:
      <ul>
        <li>Be considerate, kind, constructive, and helpful.</li>
        <li>Avoid demeaning, discriminatory, harassing, hateful, or physically threatening behavior, speech, and imagery.</li>
        <li>If you're not sure, ask someone instead of assuming.</li>
      </ul></p>

      <h3>Resolve Peacefully</h3>

      <p>We believe peer to peer discussions, feedback, corrections can help build a stronger, safer, and more welcoming community.</p>
      <p>If you see someone behaving disrespectfully, you are encouraged to respectfully discourage them from such behavior. Expect that others in the community wish to help keep the community respectful and welcome your input in doing so.</p>
      <p>If you experience disrespectful behavior and feel in any way unable to respond or resolve it respectfully (for any reason), please immediately bring it to the attention of an organizer. We want to hear from you about anything that you feel is disrespectful, threatening, or just icky in any way. We will listen and work to resolve the matter.</p>

      <h3>Apologize for Mistakes</h3>

      <p>Should you catch yourself behaving disrespectfully, or be confronted as such, own up to your words and actions, and apologize accordingly. No one is perfect, and even well-intentioned people make mistakes. What matters is how you handle them, and avoiding repeating them in the future.</p>

      <h3>Consequences</h3>

      <p>If the organizers determine that an event participant is behaving disrespectfully, the organizers may take any action they deem appropriate, up to and including expulsion and exclusion from the event without warning or refund.</p>
      <p>As organizers, we will seek to resolve conflicts peacefully and in a manner that is positive for the community. We can't foresee every situation however, and thus if in the organizers' judgment the best thing to do is to ask a disrespectful individual to leave, we will do so.</p>

      <h3>License</h3>

      <p>This Code of Conduct is based off of the <a href="http://indiewebcamp.com/code-of-conduct">IndieWebCamp Code of Conduct</a> available under the <a href="http://creativecommons.org/publicdomain/zero/1.0/">CC0</a> license.</p>

    </div>
  </div>





  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <p><a href="/">Carrot/Stick</a> &bull; August 6-7, 2016 &bull; Portland, Oregon</p>
      <ul>
        <li><a href="/code-of-conduct/">Code of Conduct</a></li>
        <li><a href="/sponsor/carrot-stick-sponsorship-prospectus.pdf">Sponsorship Prospectus</a> (PDF)</li>
      </ul>
    </div>
  </div>
</div>

</body>
</html>