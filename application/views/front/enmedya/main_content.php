    <div>

    </div>
    <br><br><br>
    <div class="altsayfaic basin ortala">
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
            <div id="ajax-main">

             


<ul class="haberic">
    <?php foreach ($bilgi as $bilgi) { $kid = $bilgi["kategori_id"]; ?> 
            <li>
                <a href="<?php echo base_url("media-detail/");echo $bilgi["haber_sef"]; ?>" >
                        <img src="<?php echo base_url();echo $bilgi["haber_resim"]; ?>">
                    <div>
                        <h1><?php echo $bilgi["haber_adi"]; ?></h1>
                        <p>
                            <?php word_limiter($bilgi["icerik"], 4); ?>
                        </p>       
                    </div>
                </a>
            </li>
        <?php } ?>
</ul>
<div class="temizle"></div>
<div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="http://media/bizden-haberler?Page=2">2</a></li><li class="PagedList-skipToNext"><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="http://media/bizden-haberler?Page=2" rel="next">»</a></li></ul></div>
                

            </div>
           

        </div>
    </div>
    <div class="temizle"></div>