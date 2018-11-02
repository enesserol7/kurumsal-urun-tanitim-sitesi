<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="content-language" content="tr">
    <title><?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?> <?php echo $bilgi["site_adi"]; ?> <?php }?></title>
    <meta name="keywords" content="<?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?> <?php echo $bilgi["kaywords"]; ?> <?php }?>" />
    <meta name="description" content="<?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?> <?php echo $bilgi["description"]; ?> <?php }?>" />
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <?php $this->load->view("front/includes/style"); ?>
    <script type="text/javascript" src="<?php echo base_url("assets/front/"); ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/front/"); ?>js/jquery.unobtrusive-ajax.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url("assets/front/"); ?>fonts/fontawesome-webfont.woff2">
    <link rel="stylesheet" href="<?php echo base_url("assets/front/"); ?>css/bootstrap.min.css">
    <script src="<?php echo base_url("assets/front/"); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url("assets/front/"); ?>js/bootstrap.min.js"></script>

    <script>
      <?php $veri = siteayarlari(); foreach ($veri as $veri) { ?>
        <?php echo $veri["analistik"];?>
      <?php } ?>
    </script>
    <script>
      <?php $veri = siteayarlari(); foreach ($veri as $veri) { ?>
        <?php echo $veri["metrica"];?>
      <?php } ?>
    </script>
</head>