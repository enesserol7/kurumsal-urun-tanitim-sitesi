    <div class="home-hakkinda">
        <?php $veriler = siteayarlari(); foreach ($veriler as $veri) { ?>
        <p class="head"><?php echo $veri["site_adi"]; ?></p>
        <p>
           <?php echo $veri["description"]; ?>
        </p>
        <?php } ?>
    </div>