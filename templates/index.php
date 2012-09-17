
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>2012 OSU OSC Autumn LAN Party</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }

      #map {
        text-align:center;
        display:none;
      }

      #myModal {
        display: none;
      }
    </style>
    <!-- <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"> -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">OSU OSC Lan</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about" id="about-link">About</a></li>
              <li><a href="#games" id="games-link">Games</a></li>
              <li><a href="#contact" id="contact-link">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">


      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello LANers</h1>
        <p>We are the OSU Open Source club and we are inviting you to join us and make this years LAN party the BEST YET.  We just ask that you register below.</p>
        <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
      </div>



      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Location</h2>
          <p>Saturday, September 22 2012, from 12:00pm - 10:00pm in the Ohio Union Interfaith Prayer and Reflection Room.</p>
          <p><a href="#" class="btn" id="directions-link">Directions &raquo;</a></p>
        </div>
        <div class="span4">
        </div>
        <div class="span4">
          <h2>What to Bring</h2>
          <p>Items you should bring:</p>

          <ul>
            <li>Computer</li>
            <li>Monitor</li>
            <li>Keyboard</li>
            <li>Mice</li>
            <li>Network cable</li>
            <li>Power cable(s)</li>
          </ul>

       </div>
      </div>

      <hr>

      <footer>
        <p>&copy; OSU OSC 2012</p>
      </footer>

    </div> <!-- /container -->
 
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title"></h3>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button class="btn" id="model-close-btn">Close</button>
      </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(function() {
        $('#model-close-btn').click(function() { $('#myModal').modal('hide') })

        $('#about-link').click(function() {
          var body = $('#myModal .modal-body')
          var title = $('#myModal .modal-title')

          title.text('About')
          body.html('<p>OSU Open Source Club has been hosting a lan party for the last 3 years.  This will be our 4th adn we would love if you could help us by making it the best one yet by coming.</p>')
          $('#myModal').modal('toggle')
        })

        $('#directions-link').click(function() {
          var body = $('#myModal .modal-body')
          var title = $('#myModal .modal-title')

          title.text('Directions')
          body.html(" \
            <p> \
              <img src=\"assets/img/union_graphic.png\" /> \
            </p> \
            <p> \
              <a class=\"btn\">Directions via Google &raquo;</a> \
            </p> \
          ")
          $('#myModal').modal('toggle')
        })

        $('#games-link').click(function() {
          var body = $('#myModal .modal-body')
          var title = $('#myModal .modal-title')

          title.text('Games')
          body.html(" \
            <ul> \
              <li><a href=\"http://www.warsow.net/\">Warsow</a></li> \
              <li><a href=\"http://en.wikipedia.org/wiki/StarCraft\">StarCraft</a></li> \
              <li><a href=\"http://www.minecraft.net/\">Minecraft</a></li> \
              <li><a href=\"http://tdemolous.net/\">Tremolous</a></li> \
              <li><a href=\"http://nexuiz.com/\">Nexuiz</a></li> \
              <li><a href=\"http://www.teeworlds.com/\">Teeworlds</a></li> \
              <li><a href=\"http://bzflag.org/\">BZFlag</a></li> \
              <li><a href=\"http://steampowered.com/\">Steam games, such as TF2/CSS/L4D(2), etc..</a></li> \
            </ul> \
          ")
          $('#myModal').modal('toggle')
        })

        $('#contact-link').click(function() {
          var body = $('#myModal .modal-body')
          var title = $('#myModal .modal-title')

          title.text('Contact Us')
          body.html("<p>Please Email us at lan [at] opensource [dot] osu [dot] edu</p>")
          $('#myModal').modal('toggle')
        })


      })
    </script>

  </body>
</html>
