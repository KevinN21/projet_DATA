<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Date'Art</title>

    <link rel="stylesheet" href="assets/css/favoristyle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</head>

<body>
<?php require_once('template/header.html') ?>

<main>
  <section class="container">
    <article class="musee">
      <?php for ($i=0;$i<12;$i++): ?>
      <figure>
          <figcaption class="col-xs-12 col-md-6">
            <a href="museefav.php">
            <img src="assets/img/louvre.jpg" alt="musée du louvre">
            <p>Nom du musée</p></a>
          </figcaption>
          <figcaption class="col-xs-12 col-md-6">
            <a href="museefav.php">
            <img src="assets/img/louvre.jpg" alt="musée du louvre">
            <p>Nom du musée</p></a>
          </figcaption>
      </figure>
    <?php endfor; ?>
    </article>
  </section>
</main>

</html>
