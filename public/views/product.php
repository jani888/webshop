<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Design System - Free Design System for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="<?=base_url()?>/public/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Argon CSS -->
  <link type="text/css" href="<?=base_url()?>/public/css/argon.css?v=1.0.1" rel="stylesheet">
</head>

<body>
    <?php include 'components/header.php' ?>
  <main>
    <section class="section pb-0 bg-gradient-warning mt-200">
    </section>
    <section class="section pb-0 mt-5 mb-5">
      <div class="container">
          <a href="<?=base_url()?>/products"><< Vissza</a>
        <div class="row">
          <div class="col-5 mr-3 border-right">
            <img src="<?=base_url() . '/' . $product->img?>" alt="" style="width: 100%">
          </div>
          <div class="col">
            <h3 class="text-primary"><b><?=$product->name?></b></h3>
            <p><?=$product->description?></p>

            <h4 class="text-success mb-0"><?=$product->price()?></h4>
            <small class="text-muted"><i class="fa fa-cube"></i><?=$product->stock?></small>

            <form class="" action="<?=base_url()?>/cart" method="post">
              <input type="hidden" name="product_id" value="<?=$product->id?>">
              <div class="row mt-3">
               <div class="col-md-2">
                 <div class="form-group">
                   <div class="input-group-sm mb-4">
                     <input class="form-control" placeholder="db" type="number" name="amount" value="1">
                   </div>
                 </div>
               </div>
               <div class="col-md-4 ml-0 pl-0">
                <button type="submit" class="btn-primary btn btn-sm"><i class="fa fa-shopping-cart"></i> Kosárba</button>
              </div>
              </div>
            </form>

          </div>
        </div>

      </div>
    </section>
  </main>
  <footer class="footer has-cards">
    <div class="container">
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2018
            <a href="https://www.creative-tim.com" target="_blank">webshop</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">ÁSZF</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">Rólunk</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Kapcsolat</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script
    src="http://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.9.4/headroom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Argon JS -->
  <script src="<?=base_url()?>/public/js/argon.js?v=1.0.1"></script>
</body>

</html>
