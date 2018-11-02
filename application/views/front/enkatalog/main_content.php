    <div>

    </div>
    <br><br><br>
    <div class="altkatalogic katalog ortala">
        <div>
            <div class="altmenuic">
                
                    <ul>
                        <?php $skat = 6; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                            <li><a href="<?php echo base_url("catalog/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                        <?php } ?>
                    </ul>

            </div>
                <div class="dropdownsecim altmenu2">
                    <span>Catalogs</span>
                    <ul class="tab" style="display: none;">
                        <?php $skat = 6; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                            <li><a href="<?php echo base_url("catalog/");echo $veri["sayfa_seo"]; ?>" class="tablinks planlink"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                        <?php } ?>
                    </ul>
                </div>

        </div>
        <div>
            
            <div class="kataloglist">
                <ul style="margin-left: 115px;">
                    <?php foreach ($bilgi as $bilgi) { $kid = $bilgi["kategori_id"]; ?>  
                    <li style="margin-right: 275px;">
                        <a href="<?php echo base_url();echo $bilgi["pdf"]; ?>" target="_blank">
                            <object width="500" height="600" type="application/pdf" data="<?php echo base_url();echo $bilgi["pdf"]; ?>" id="pdf_content">
                                <p>Pdf dokümanı yüklenemedi...</p>
                            </object>
                            <div>
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