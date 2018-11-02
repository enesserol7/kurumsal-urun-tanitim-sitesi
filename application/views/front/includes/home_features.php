    <div class="home-features">
        <div class="features-sol">
            <?php $veriler = urungetir("TR"); foreach ($veriler as $veri) { ?>
            <img src="<?php echo base_url();echo $veri["urun_resim"]; ?>" />
            <div class="ozellik-golge">
                <div>
                    <div>
                        <div>
                            <span><?php echo $veri["urun_adi"]; ?></span>
                            <p>Estetik ve Fonksiyonel Mekanlar</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="features-sag">


            <ul>
                <?php $veriler = urungetir("TR"); foreach ($veriler as $veri) { ?>
                <li>
                    <div class="buyukresim">
                        <a href="<?php echo base_url("urun-detay-");echo $veri["urun_seo"]; ?>">
                        <img src="<?php echo base_url();echo $veri["urun_resim"]; ?>">
                            <div class="ozellik-golge">
                                <div>
                                    <div>
                                        <div><?php echo $veri["urun_adi"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                    <?php $veriler = urungetir2("TR"); foreach ($veriler as $veri) { ?>
                    <div class="margintop10">
                        <a href="<?php echo base_url("urun-detay-");echo $veri["urun_seo"]; ?>">
                            <img src="<?php echo base_url();echo $veri["urun_resim"]; ?>" />
                            <div class="ozellik-golge">
                                <div>
                                    <div>
                                        <div><?php echo $veri["urun_adi"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <?php } ?>
                <?php $veriler = urungetir3("TR"); foreach ($veriler as $veri) { ?>
                <li>
                    <div>
                        <a href="<?php echo base_url("urun-detay-");echo $veri["urun_seo"]; ?>">
                        <img src="<?php echo base_url();echo $veri["urun_resim"]; ?>">
                            <div class="ozellik-golge">
                                <div>
                                    <div>
                                        <div><?php echo $veri["urun_adi"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                    <?php $veriler = urungetir4("TR"); foreach ($veriler as $veri) { ?>
                    <div class="buyukresim margintop10">
                        <a href="<?php echo base_url("urun-detay-");echo $veri["urun_seo"]; ?>">
                            <img src="<?php echo base_url();echo $veri["urun_resim"]; ?>" />
                            <div class="ozellik-golge">
                                <div>
                                    <div>
                                        <div><?php echo $veri["urun_adi"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <?php } ?>
                <?php $veriler = urungetir5("TR"); foreach ($veriler as $veri) { ?>
                <li>
                    <div class="buyukresim">
                        <a href="<?php echo base_url("urun-detay-");echo $veri["urun_seo"]; ?>">
                        <img src="<?php echo base_url();echo $veri["urun_resim"]; ?>">
                            <div class="ozellik-golge">
                                <div>
                                    <div>
                                        <div><?php echo $veri["urun_adi"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                    <?php $veriler = urungetir6("TR"); foreach ($veriler as $veri) { ?>
                    <div class="margintop10">
                        <a href="<?php echo base_url("urun-detay-");echo $veri["urun_seo"]; ?>">
                            <img src="<?php echo base_url();echo $veri["urun_resim"]; ?>" />
                            <div class="ozellik-golge">
                                <div>
                                    <div>
                                        <div><?php echo $veri["urun_adi"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <?php } ?>
                <?php $veriler = urungetir7("TR"); foreach ($veriler as $veri) { ?>
                <li>
                    <div>
                        <a href="<?php echo base_url("urun-detay-");echo $veri["urun_seo"]; ?>">
                        <img src="<?php echo base_url();echo $veri["urun_resim"]; ?>">
                            <div class="ozellik-golge">
                                <div>
                                    <div>
                                        <div><?php echo $veri["urun_adi"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                    <?php $veriler = urungetir8("TR"); foreach ($veriler as $veri) { ?>
                    <div class="buyukresim margintop10">
                        <a href="<?php echo base_url("urun-detay-");echo $veri["urun_seo"]; ?>">
                            <img src="<?php echo base_url();echo $veri["urun_resim"]; ?>" />
                            <div class="ozellik-golge">
                                <div>
                                    <div>
                                        <div><?php echo $veri["urun_adi"]; ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>