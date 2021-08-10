<!DOCTYPE HTML>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
  <link rel='stylesheet' href='../css/x3dom.css'>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

  <title>Mobile First Web 3D Applications 2020</title>

  <script src="../scripts/js/jquery-3.4.1.js"></script>
  <script src="../scripts/js/jquery.fancybox.min.js"></script>

  <script src="../scripts/js/popper.min.js"></script>
  <script src="../scripts/js/bootstrap-4.4.1.js"></script>
  <script src="../scripts/js/x3dom.js"></script>
  <script src="../scripts/js/functions.js"></script>
  <script src="../scripts/js/gallery.js"></script>
  <script src="../scripts/js/setup_html.js"></script>
  <script src="../scripts/js/animations.js"></script>

</head>

<body id="bodyColor">

<nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
  <div class="container-fluid">

    <div class="logo">
      <a class="navbar-brand" href="../index.php">
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
          <a class="nav-link" href="../index.php">Home</a>
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

<div class="container-fluid">

  <div>
    <div class="row">
      <div class="col-sm-8">
        <div class="card text-left">

          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link selected" id="navCoke">Coke</a>
              </li>
            </ul>
          </div>

          <div class="card-body">
            <div id="coke">
              <div id="x3dModelTitle_coke" class="card-title drinksText"></div>

              <div class="model3D">
                <x3d id="model">
                  <scene>
                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assets/x3d/coke.x3d"> </inline>
                  </scene>
                </x3d>
              </div>
              <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
            </div>


          </div>
        </div>
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