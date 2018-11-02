    <div>

    </div>
    <br><br><br>
    <div class="altsayfaic medya-detay ortala">
        <div>
            <div class="altmenuic">
                
                    <ul>
                        <?php $skat = 9; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                            <li><a href="<?php echo base_url("media/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                        <?php } ?>
                    </ul>

            </div>
                <div class="dropdownsecim altmenu2">
                    <span>News from us</span>
                    <ul class="tab" style="display: none;">
                        <?php $skat = 9; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                            <li><a href="<?php echo base_url("media/");echo $veri["sayfa_seo"]; ?>" class="tablinks planlink"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                        <?php } ?>
                    </ul>
                </div>

        </div>
        <div>
            <div class="altsayfayazi haberdetay">
                
                <h1><?php echo $bilgi["haber_adi"]; ?></h1>
                <?php echo html_entity_decode($bilgi["icerik"]); ?>
                
            </div>

            <div class="medya-galeri">
                <ul>
                    <li>
                        <a class="html5lightbox" data-group="mygroup" href="<?php echo base_url();echo $bilgi["haber_resim"]; ?>"><img src="<?php echo base_url();echo $bilgi["haber_resim"]; ?>"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="temizle"></div>