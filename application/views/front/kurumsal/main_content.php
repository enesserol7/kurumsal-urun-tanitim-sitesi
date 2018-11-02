    <div>
        
    </div>
    <br><br><br>
    <div class="altsayfaic kurumsal ortala">
        <div>
            <div class="altmenuic">
                
                    <ul>
                        <?php $skat = 1; $dil = "TR"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                            <li><a href="<?php echo base_url("kurumsal/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                        <?php } ?>
                    </ul>

            </div>
                <div class="dropdownsecim altmenu2">
                    <span>Hakkimizda</span>
                    <ul class="tab" style="display: none;">
                        <?php $skat = 1; $dil = "TR"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                            <li><a href="<?php echo base_url("kurumsal/");echo $veri["sayfa_seo"]; ?>" class="tablinks planlink"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                        <?php } ?>
                    </ul>
                </div>
        </div>
        <div>
            <div><img src="<?php echo base_url();echo $bilgi["sayfa_resmi"]; ?>"></div>
  <div class="altsayfayazi"><p><?php echo html_entity_decode($bilgi["icerik"]); ?></p></div>

        </div>
    </div>
    <div class="temizle"></div>