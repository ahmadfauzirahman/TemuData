<!DOCTYPE html>
<html lang="es" data-ng-app="app">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Temu Data</title>
    <?= $this->tag->stylesheetLink(['rel' => 'icon', 'href' => 'img/logo.png', 'type' => 'image/x-icon']) ?>
    <link rel="stylesheet" href="<?= $this->url->getStatic('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= $this->url->getStatic('css/styles.css') ?>">
</head>
<body>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#/Home">Temu Data</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#/home">Temu Data</a></li>
                    <li><a href="#/home" class="btn1">Home</a>
                    </li>
                    <li><a href="#/about">About</a>
                    </li>
                    <li><a href="#/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
        <div ng-view></div>
    </div>
    <script type="text/javascript" src="<?= $this->url->getStatic('bower_components/angular/angular.min.js') ?>"></script>
    <script type="text/javascript" src="<?= $this->url->getStatic('bower_components/angular-route/angular-route.min.js') ?>"></script>
    <script type="text/javascript" src="<?= $this->url->getStatic('bower_components/jquery/dist/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= $this->url->getStatic('bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= $this->url->getStatic('js/app.js') ?>"></script>
    <script>
        $(document).ready(function () {
           $(".btn1").click(function () {
              $("#btn2").fadeIn("1000");
           });
        });
    </script>
</body>

</html>
