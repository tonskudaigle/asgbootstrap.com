<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8 iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>arctic-connect.com mockup layout</title>
    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- <link rel="stylesheet" href="css/bootswatch.min.css" /> -->
    <!-- Custom CSS -->
      <link rel="stylesheet" href="css/asgbootstrap.css" />
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src=""></script>
      <![endif]-->
    <body>
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Näytä valikko</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-text">
                  <form class="form-inline">
                     <div class="form-group">
                        <label for="username">Käyttäjätunnus: </label>
                        <input type="text" class="form-control" id="username" placeholder="käyttäjätunnuksesi" />
                     </div>
                     <div class="form-group">
                        <label for="password">Salasana: </label>
                        <input type="password" class="form-control" id="password">
                     </div>
                     <button type="submit" class="btn btn-default">Kirjaudu</button>
                  </form>
            </div>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Etusivu</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" onmouseover="this.click();">Arctic Cloud <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Arctic Cloud -kokonaisuus</li>
                  <li><a href="#">Tietoa</a></li>
                  <li class="dropdown-header">Tuotteet</li>
                  <li><a href="#">Arctic Conference</a></li>
                  <li><a href="#">Arctic Firewall Traversal</a></li>
                  <li><a href="#">Arctic Phone</a></li>
                  <li><a href="#">Arctic Streaming</a></li>
                  <li><a href="#">Arctic Recording</a></li>
                </ul>
              </li>
              <li><a href="#">Ohjelmisto</a></li>
              <li><a href="#">Referenssit</a></li>
              <li><a href="#">Palvelukeskus</a></li>
              <li><a href="#">Yhteystiedot</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div id="stage">
         <div id="stage-caption">

         </div>
      </div>
    </body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
  </head>
</html>
