<?php
include 'partials/header.php';
include 'navView.php';

?>

<body>
    <div class= "container text-center">
  <?php foreach ($articles as $article){ ?>

      <div class="card" style="width: 18rem;">
          <img src="images/miketyson.png" class="card-img-top" alt="photo_portrait_mike">
          <div class="card-body">
          <h5 class="card-title"><?php echo $article["title"]?></h5>
          <p class="card-text"><?php echo $article["content"]?></p>
          <span class="btn btn-primary"><a href="activArticles.php"> Voir plus</a></span>
      </div>
      </div>

<?php } ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<?php
include 'partials/footer.php';
?>
</body>
</html>