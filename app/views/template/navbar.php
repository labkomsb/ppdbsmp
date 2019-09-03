<!-- Contoh Navbar, termasuk dengan doropdown -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?=BASEURL;?>">
    <img src="<?=BASEURL;?>/assets/img/pbbee.png" alt="smk pb rakit bee" style = "width:55px; height:55px; background-color: #EEEEEE; border-radius: 50%;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menuXYZ">
    <ul class="navbar-nav mr-auto">
      
      <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Beranda <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= BASEURL; ?>/xyz">xyz</a>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="xxyyzz" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu xyz
        </a>
        <div class="dropdown-menu" aria-labelledby="xxyyzz">
          <a class="dropdown-item" href="<?=BASEURL;?>/xxx">xxx</a>>
          <a class="dropdown-item" href="<?=BASEURL;?>/yyy">yyy</a>>
          <a class="dropdown-item" href="<?=BASEURL;?>/zzz">zzz</a>>
        </div> 
      </li>
      
    </ul>
    <ul class="navbar-nav mr-0">
    <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-user"> User</i>
        </a>
      </li>
    <div>
  </div>
</nav>