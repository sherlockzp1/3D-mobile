<!DOCTYPE HTML>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap-4.4.1.css">
  <link rel='stylesheet' href='css/x3dom.css'>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <title>Mobile First Web 3D Applications 2020</title>

  <script src="scripts/js/jquery-3.4.1.js"></script>
  <script src="scripts/js/jquery.fancybox.min.js"></script>

  <script src="scripts/js/popper.min.js"></script>
  <script src="scripts/js/bootstrap-4.4.1.js"></script>
  <script src="scripts/js/x3dom.js"></script>
  <script src="scripts/js/functions.js"></script>
  <script src="scripts/js/gallery.js"></script>
  <script src="scripts/js/setup_html.js"></script>
  <script src="scripts/js/animations.js"></script>

</head>

<body id="bodyColor">

<nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
  <div class="container-fluid">

    <div class="logo">
      <a class="navbar-brand" href="index.php">
        <h1>CocaCola Journey</h1>
        <br/>
        <p>Refreshing the world, one story at a time</p>
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a id="navAbout" class="nav-link" href="#">About</a>
        </li>

        <li class="nav-item dropdown">
          <a id="navModels" class="nav-link" href="#">Drinks</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid main_contents">

  <div id="home">
    <div class="row">
      <div class="col-sm-12">
        <div id="main_background">
          <div id="main_text" class="col-xs-12 col-sm-4">
            <div id="title_home"></div>
            <div id="subTitle_home"></div>
            <div id="description_home"></div>
          </div>
        </div>
        <div class="row">
          <?php for ($i=0;$i<count($data);$i++){ ?>

          <div class="card mb-3" >
            <div class="row no-gutters">
              <div class="col-md-4">
                <?php
                  echo '<a href="'.$data[$i]["pictureUrl"].'" data-fancybox data-caption="'.$data[$i]["name"].'">'.
                  '<img class="card-img-top img-fluid img-thumbnail" src="'.$data[$i]["pictureUrl"].'" alt="'.$data[$i]["name"].'">'.
                  '</a>'
                ?>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="card-title drinksText"><h2><?php echo $data[$i]["title"] ?></h2></div>
                  <div class="card-subtitle drinksText"><h3><?php echo $data[$i]["subTitle"] ?></h3></div>
                  <div class="card-text drinksText"><p><?php echo $data[$i]["description"] ?></p></div>
                  <?php echo '<a href="'.$data[$i]["detailUrl"].'" class="btn btn-primary btn-responsive">Find out more ...</a>' ?>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </div>

  </div>

  <div id="models">
    <div class="row">
      <div class="col-sm-8">
        <div class="card text-left">

          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link selected" id="navCoke">Coke</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navDietcoke">Dietcoke</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navfanta">Fanta</a>
              </li>
            </ul>
          </div>

          <div class="card-body">
            <div id="coke">
              <div id="x3dModelTitle_coke" class="card-title drinksText"></div>

              <div class="model3D">
                <x3d id="model">
                  <scene>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/coke.x3d"> </inline>
                  </scene>
                </x3d>
              </div>
              <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
              <a class="btn btn-success btn-responsive" href="index.php/coke">CokePage</a>
            </div>
            <div id="dietcoke">
              <div id="x3dModelTitle_dietcoke" class="card-title drinksText"></div>

              <div class="model3D">
                <x3d id="model">
                  <scene>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/dietcoke.x3d"> </inline>
                  </scene>
                </x3d>
              </div>
              <div id="x3dCreationMethod_dietcoke" class="card-text drinksText"></div>
              <a class="btn btn-success btn-responsive" href="index.php/dietcoke">DietcokePage</a>
            </div>
            <div id="fanta">
              <div id="x3dModelTitle_fanta" class="card-title drinksText"></div>

              <div class="model3D">
                <x3d id="model">
                  <scene>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/fanta.x3d"> </inline>
                  </scene>
                </x3d>
              </div>
              <div id="x3dCreationMethod_fanta" class="card-text drinksText"></div>
              <a class="btn btn-success btn-responsive" href="index.php/fanta">FantaPage</a>
            </div>

            <div id="interaction">
              <div class="col-sm-4" style="min-width: 100%">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">

                      <li class="nav-item dropdown">
                        <a class="nav-link selected dropdown-toggle navbardrop" href="#" data-toggle="dropdown">Cameras</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="javascript:cameraFront();">Front</a>
                          <a class="dropdown-item" href="javascript:cameraBack();">Back</a>
                          <a class="dropdown-item" href="javascript:cameraLeft();">Left</a>
                          <a class="dropdown-item" href="javascript:cameraRight();">Right</a>
                          <a class="dropdown-item" href="javascript:cameraTop();">Top</a>
                          <a class="dropdown-item" href="javascript:cameraBottom();">Bottom</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="card-Title x3dCamera_Subtitle drinksText">
                      <h3>Camera Views</h3>
                    </div>
                    <a class="btn btn-success btn-responsive" href="javascript:cameraFront();">Default</a>
                    <a class="btn btn-primary btn-responsive" href="javascript:cameraBack();">Back</a>
                    <a class="btn btn-secondary btn-responsive" href="javascript:cameraLeft();">Left</a>
                    <a class="btn btn-secondary btn-responsive" href="javascript:cameraRight();">Right</a>
                    <a class="btn btn-secondary btn-responsive" href="javascript:cameraTop();">Top</a>
                    <a class="btn btn-secondary btn-responsive" href="javascript:cameraBottom();">Bottom</a>
                    <!-- <a class="btn btn-outline-dark disabled btn-responsive">Off</a> -->
                  </div>
                </div>
              </div>
              <div class="col-sm-4" style="min-width: 100%">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link selected">Animation</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="card-Title x3dAnimationSubtitle drinksText">
                      <h3>Animation Options</h3>
                    </div>
                    <a class="btn btn-outline-light btn-responsive" href="javascript:rotate('X');">RotX</a>
                    <a class="btn btn-outline-light btn-responsive" href="javascript:rotate('Y');">RotY</a>
                    <a class="btn btn-outline-light btn-responsive" href="javascript:rotate('Z');">RotZ</a>
                    <a class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-4" style="min-width: 100%">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link selected dropdown-toggle navbardrop" href="#" data-toggle="dropdown">Render</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Polygon</a>
                          <a class="dropdown-item" href="javascript:wireframe();">Wireframe</a>
                          <a class="dropdown-item" href="#">Vertex</a>
                        </div>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbardrop" href="#" data-toggle="dropdown">Lights</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Default</a>
                          <a class="dropdown-item" href="#">Onmi On/Off</a>
                          <a class="dropdown-item" href="#">Target On/Off</a>
                          <a class="dropdown-item" href="javascript:headlight();">Headlight On/Off</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="card-Title x3dRendersubtitle drinksText">
                      <h3>Render and Lighting Options</h3>
                    </div>
                    <a href="#" class="btn btn-success btn-responsive">Poly</a>
                    <a href="javascript:wireframe()" class="btn btn-secondary btn-responsive">Wire</a>
                    <a href="javascript:headlight();" class="btn btn-success btn-responsive">Headlight</a>
                    <a href="#" class="btn btn-outline-dark btn-responsive">Default</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="col-sm-4">
        <div class="card text-left">
          <div class="card-header gallery-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link selected" href="#">Gallery</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="card-title title_gallery drinksText"></div>
            <div class="gallery" id="gallery"></div>
            <div class="card-text description_gallery drinksText"></div>
          </div>
        </div>
      </div>
    </div>



    <div id="cokeDescription" class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_coke" class="card-title drinksText"></div>
            <div id="subTitle_coke" class="card-subtitle drinksText"></div>
            <div id="description_coke" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>
          </div>
        </div>
      </div>
    </div>


    <div id="dietcokeDescription" class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_dietcoke" class="card-title drinksText"></div>
            <div id="subTitle_dietcoke" class="card-subtitle drinksText"></div>
            <div id="description_dietcoke" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/dietcoke/dietcoke" class="btn btn-primary btn-responsive">Visit Dietcoke</a>
          </div>
        </div>
      </div>
    </div>

    <div id="fantaDescription" class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div id="title_fanta" class="card-title drinksText"></div>
            <div id="subTitle_fanta" class="card-subtitle drinksText"></div>
            <div id="description_fanta" class="card-text drinksText"></div>
            <a href="http://www.coca-cola.co.uk/drinks/fanta/fanta" class="btn btn-primary btn-responisve">Visit Fanta</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about">
    Insert About Contents
  </div>

</div>

<nav id="footerColor" class="navbar navbar-expand-sm footer">
  <div class="container-fluid">
    <div class="navbar-text float-left copyright">
      <p>
					<span class="align-baseline">&copy 2020 3D Apps |
						<a href="javascript:changeStyle()">Restyle</a> |
						<a href="javascript:resetStyle()">Reset</a>
					</span>
      </p>
    </div>
  </div>
</nav>

</body>

</div>

</html>