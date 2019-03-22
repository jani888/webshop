<header class="header-global">
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="<?=$_SERVER['DOCUMENT_ROOT']?>">
        A gagyi webshop
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../index.html">
                <img src="../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">

        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
              <i class="fa fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="fa fa-shopping-cart "></i>
              <span class="nav-link-inner--text"><?=count($cart)?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl">
                <div class="dropdown-menu-inner">
                    <?php foreach ($cart as $item): ?>
                        <div class="media d-flex align-items-center">
                            <a class="media-body ml-3" href="<?=$item->url()?>">
                                <h6 class="heading text-pri mary mb-md-1"><?=$item->name?></h6>
                                <p class="description text-black d-none d-md-inline-block mb-0"><?=$item->amount?> db | <?=$item->price()?> * <?=$item->amount?></p>
                            </a>
                            <form action="<?=base_url()?>/cart/remove" method="post">
                                <input type="hidden" name="id" value="<?=$item->id?>">
                                <button type="submit" class="btn btn-simple btn-danger">x</button>
                            </form>
                        </div>
                    <?php endforeach ?>
                    <a href="<?=base_url()?>/checkout" class="media d-flex align-items-center">
                        <div class="media-body ml-3">
                            <h6 class="heading text-primary mary mb-md-1"><b>Pénztárhoz >></b></h6>
                        </div>
                    </a>
                </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
