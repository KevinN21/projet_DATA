<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Date'Art</title>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets//css/style.css">
</head>

<body>

</body>
<?php require_once('template/header.html') ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-md-6 col-lg-6 col-lg-push-2">
                <form id="contact-form" class="form" action="#" method="POST" role="form">
                    <div class="form-group">
                        <label class="form-label" for="name"></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom et Prénom" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email"></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message"></label>
                        <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-start-order">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

</html>
</div>
</main>

</html>
