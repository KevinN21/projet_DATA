<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Date'Art</title>

    <link rel="stylesheet" href="assets//css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <?php require_once('template/header.html') ?>
    <main class="container">
        <section class="row">
            <div class="col-md-12 text-center">
                <img class="img-responsive" src="assets/img/louvre.jpg">
            </div>
            <div class="row">
                <h1 class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nom-musee">MUSEE DU LOUVRE qui est beau</h1>
            </div>
            <div class="row">
                <h2 class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ville-musee">Paname City</h2>
            </div>
        </section>
        <section class="row da-buttons">
            <div class="col-xs-6 col-xs-push-1 text-center">
                <button class="button1"><img class="red-cross" src="assets/img/red_cross.svg" alt=""></button>
            </div>
            <div class="col-xs-6 col-xs-pull-1 text-center">
                <button class="button2"><img class="green-heart" src="assets/img/green_heart.svg" alt=""></button>
            </div>
        </section>
    </main>
</body>

</html>
