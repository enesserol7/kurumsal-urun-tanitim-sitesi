<div class="altsayfa">
    <div>
        <div class="ortala">
                    <div class="temizle"></div>
                    <div>
                        <h3></h3>
                    </div>

        </div>
    </div>


<form action="<?php echo base_url("products/");echo $sonuc; ?>" data-ajax="true" data-ajax-begin="StartCust" data-ajax-success="LoadCust" id="form0" method="post">    <input type="hidden" name="dil" id="dil" value="tr" />
    <input type="hidden" name="kelime" id="kelime" />
    <div class="altsayfaic urunler ortala">
        <div class="urunlermenu">



            <div class="altmenuic">
                    <select id="altmenu" name="altmenu" onchange="KategoriSecim()">
                        <?php $skat = 10; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                            <option value="<?php echo $veri["sayfa_seo"]; ?>"><?php echo $veri["sayfa_adi"]; ?></option>
                        <?php } ?>
                    </select>
                
            </div>
                    <div class="dropdownsecim altmenu2">
                        <span>Products</span>
                        <ul class="tab" style="display: none;">
                            <?php $skat = 10; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                                <li><a href="<?php echo $veri["sayfa_seo"]; ?>" class="tablinks planlink"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                            <?php } ?>
                        </ul>
                    </div>


            <div class="new-badge">
                <span>
                    NEW
                </span>
              
                <input type="checkbox" name="yeniurun" value="true" onchange="$(this.form).submit();"><span>NEW</span>

            </div>
            <div>
                <h3>All Products <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                <div class="scrollbar-rail">
                    <?php $dil = "EN"; $veri = urunadi($dil); foreach ($veri as $veri) { ?>
                        <div id="enurunad"><input type="checkbox" name="renkler" value="<?php echo $veri["urun_seo"]; ?>" id="<?php echo $veri["urun_seo"]; ?>" onchange="$(this.form).submit();"><span><?php echo $veri["urun_adi"]; ?></span> </div>
                    <?php } ?>
                </div>
            </div>
            <div>
                <h3>Place of use <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                <div class="scrollbar-rail">
                    <?php $dil = "EN"; $veri = urunkullanimyeri($dil); foreach ($veri as $veri) { ?>
                        <div id="enkulyeri"><input type="checkbox" name="kullanimyeri" value="<?php echo $veri["sef"]; ?>" id="<?php echo $veri["sef"]; ?>" onchange="$(this.form).submit();"><span><?php echo $veri["kullanim_yeri"]; ?></span> </div>
                    <?php } ?>
                </div>
            </div>
            <div>
                <h3>Dimensions <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                <div class="scrollbar-rail">
                    <?php $sayi = 1; $dil = "EN"; $veri = urunolcu($dil); foreach ($veri as $veri) { ?>
                        <div id="enolcu"><input type="checkbox" name="ebatlar" value="<?php echo $sayi++; ?>-ebatlar" id="<?php echo $veri["urun_olcu"]; ?>" onchange="$(this.form).submit();"><span><?php echo $veri["urun_olcu"]; ?></span> </div>
                    <?php } ?>
                </div>
            </div>          
             <div>
                <h3>Color <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                <div class="scrollbar-rail">
                    <?php $sayi = 1; $dil = "EN"; $veri = urunrenk($dil); foreach ($veri as $veri) { ?>
                        <div id="enrenk"><input type="checkbox" name="renkler" value="<?php echo $sayi++; ?>-renkler" id="<?php echo $veri["urun_rengi"]; ?>" onchange="$(this.form).submit();"><span><?php echo $veri["urun_rengi"]; ?></span> </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div>
            
            <div id="ajax-main">
                
<ul class="black-band-four-column">
        <?php foreach ($bilgi as $bilgi) { $kid = $bilgi["kategori_id"]; ?>
            <li class="<?php echo $bilgi["urun_rengi"]; ?> <?php echo $bilgi["urun_olcu"]; ?> <?php echo $bilgi["urun_seo"]; ?> <?php echo $bilgi["kulyeri_sef"]; ?>">
                <a href="<?php echo base_url("product-detail-");echo $bilgi["urun_seo"]; ?>" title="<?php echo $bilgi["urun_adi"]; ?>">
                <img src="<?php echo base_url();echo $bilgi["urun_resim"]; ?>">
                    <div class="text">
                        <span class="head"><?php echo $bilgi["urun_adi"]; ?></span>
                    </div>
                </a>
            </li>
        <?php } ?>
</ul>

<div class="temizle"></div>





<div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Index857d.html?Page=2&amp;slug=Seramik-Karo">2</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Index8152.html?Page=3&amp;slug=Seramik-Karo">3</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Indexd680.html?Page=4&amp;slug=Seramik-Karo">4</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Indexce9c.html?Page=5&amp;slug=Seramik-Karo">5</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Index0821.html?Page=6&amp;slug=Seramik-Karo">6</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Index56ab.html?Page=7&amp;slug=Seramik-Karo">7</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Indexd092.html?Page=8&amp;slug=Seramik-Karo">8</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Indexb4b4.html?Page=9&amp;slug=Seramik-Karo">9</a></li><li class="PagedList-skipToNext"><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Index857d.html?Page=2&amp;slug=Seramik-Karo" rel="next">»</a></li></ul></div>
            </div>
        </div>
    </div>
</form>

    <div class="temizle"></div>
</div>
<script src="<?php echo base_url("assets/front/"); ?>js/jquery.scrollbar.js"></script>




    <script type="text/javascript">


        function KategoriSecim()
        {
            var e = document.getElementById("altmenu");
            var strUser = e.options[e.selectedIndex].value;
            var dildurum=document.getElementById("dil").value;
           
            if (dildurum == "en")
            {
                
                window.location = "/duratiles.com.tr/products/" + strUser;
            }
            else
            {
                window.location = "/duratiles.com.tr/products/" + strUser;
            }

        }
        var loading = $("#loading");
        function StartCust() {
            loading.show();
        }
        function LoadCust(result)
        {
            $("#ajax-main").html(result);
            loading.hide();
        }
        jQuery(document).ready(function () {
            jQuery('.scrollbar-rail').scrollbar();
        });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#enrenk input').click(function(e){
            e.preventDefault();
            var filter = $(this).attr('id');
            $('#ajax-main ul li').show();
            $('#ajax-main ul li:not(.' + filter + ')').hide();
});
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#enolcu input').click(function(e){
            e.preventDefault();
            var filter = $(this).attr('id');
            $('#ajax-main ul li').show();
            $('#ajax-main ul li:not(.' + filter + ')').hide();
});
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#enurunad input').click(function(e){
            e.preventDefault();
            var filter = $(this).attr('id');
            $('#ajax-main ul li').show();
            $('#ajax-main ul li:not(.' + filter + ')').hide();
});
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#enkulyeri input').click(function(e){
            e.preventDefault();
            var filter = $(this).attr('id');
            $('#ajax-main ul li').show();
            $('#ajax-main ul li:not(.' + filter + ')').hide();
});
});
</script>