  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url("assets/panel/"); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php $veri = yoneticigetir($this->session->userdata('email')); foreach ($veri as $veri) { ?>
          <p><?php echo $veri["yonetici_adi"]; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          <?php } ?>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url("panel"); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url("panel/ayarlar"); ?>">
            <i class="fa fa-edit"></i> <span>Site Ayarlari</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Sayfalar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url("panel/sayfalar"); ?>"><i class="fa fa-circle-o"></i> Sayfa Listesi</a></li>
            <li><a href="<?php echo base_url("panel/sayfakategori"); ?>"><i class="fa fa-circle-o"></i> Sayfa Kategori Listesi</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url("panel/slider"); ?>">
            <i class="fa fa-laptop"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url("panel/kataloglar"); ?>">
            <i class="fa fa-th"></i> <span>Kataloglar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url("panel/referanslar"); ?>">
            <i class="fa fa-share"></i> <span>Referanslar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Haberler</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url("panel/haberler"); ?>"><i class="fa fa-circle-o"></i> Haber Listesi</a></li>
            <li><a href="<?php echo base_url("panel/haberkategori"); ?>"><i class="fa fa-circle-o"></i> Haber Kategori Listesi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Ürünler</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url("panel/urunler"); ?>"><i class="fa fa-circle-o"></i> Ürün Listesi</a></li>
            <li><a href="<?php echo base_url("panel/urunkategori"); ?>"><i class="fa fa-circle-o"></i> Ürün Kategori Listesi</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url("panel/yoneticiler"); ?>">
            <i class="fa fa-users"></i> <span>Yöneticiler</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="header">İşlemler</li>
        <li><a href="<?php echo base_url(); ?>" target="_blank"><i class="fa fa-circle-o text-aqua"></i> <span>Siteyi Gör</span></a></li>
        <li><a href="<?php echo base_url("panel/cikis"); ?>"><i class="fa fa-circle-o text-red"></i> <span>Çıkış Yap</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>