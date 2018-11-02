    <div>

    </div>
    <br><br><br>
    <div class="altkatalogic katalog ortala">
        <div>
            <div class="altmenuic">
                
                    <ul>
                        <?php $skat = 4; $dil = "TR"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                            <li><a href="<?php echo base_url("katalog/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                        <?php } ?>
                    </ul>

            </div>
                <div class="dropdownsecim altmenu2">
                    <span>Karo Seramik Kataloglari</span>
                    <ul class="tab" style="display: none;">
                        <?php $skat = 4; $dil = "TR"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                            <li><a href="<?php echo base_url("katalog/");echo $veri["sayfa_seo"]; ?>" class="tablinks planlink"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                        <?php } ?>
                    </ul>
                </div>

        </div>
        <div>
            
            <div class="kataloglist">
                <ul style="">
                    <?php foreach ($bilgi as $bilgi) { $kid = $bilgi["kategori_id"]; ?>  
                    <li style="">
                        <a href="<?php echo base_url();echo $bilgi["pdf"]; ?>" target="_blank">
                        <div>
                            <object width="250" height="250" type="application/pdf" data="<?php echo base_url();echo $bilgi["pdf"]; ?>" id="pdf_content">
                                <p>Pdf dokümanı yüklenemedi...</p>
                            </object>
                            <?php echo $bilgi["katolog_adi"]; ?>
                        </div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                
            </div>
        </div>
    </div>
    <div class="temizle"></div>