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
          <div class="col">
            <h3 class="text-primary"><b>Kosár</b></h3>

            <table class="table">
                <thead>
                    <tr>
                        <th>Termék</th>
                        <th>Mennyiség</th>
                        <th>Egységár</th>
                        <th>Ár</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $item): ?>
                        <tr>
                            <td><?=$item->name?></td>
                            <td><?=$item->amount?></td>
                            <td><?=$item->price()?></td>
                            <td><?=number_format($item->price* $item->amount/100.0, 2, '.', ' ') . " Ft"?></td>
                            <td>
                                <form action="<?=base_url()?>/cart/remove" method="post">
                                    <input type="hidden" name="id" value="<?=$item->id?>">
                                    <button type="submit" class="btn btn-simple btn-danger">x</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><b>Összesen: </b></td>
                        <td><b><?=number_format($total_price/100.0, 2, '.', ' ') . " Ft"?></b></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
            <form class="" action="<?=base_url()?>/checkout" method="post">
                <div class="form-group">
                  <label for="name">Név</label>
                  <input type="text" name="name" placeholder="Név" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" placeholder="Email cím" class="form-control">
                </div>
                <div class="form-group">
                  <label for="name">Cím</label>
                  <input type="text" name="address" placeholder="Cím" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Várárlás</button>
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
