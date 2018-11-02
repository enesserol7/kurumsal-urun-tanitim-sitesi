<script type="text/javascript">jssor_1_slider_init();</script>



<script>
        var habermargin = 0;
        $(".top-arrow").click(function () {

            var sayi = $(".haber-list>div>ul>li").size();
            sayi = (-39) * (sayi - 4);

            if (sayi < habermargin) {
                habermargin += -39;
                //$(".haber-list>div").css("margin-top", "" + habermargin + "px");

                $(".haber-list>div").animate({
                    "margin-top": "" + habermargin + "px"
                }, 1000, function () {
                    // Animation complete.
                });
            }

        });
        $(".bottom-arrow").click(function () {

            var margindurum = Number(document.getElementById("home-news").style.marginTop.replace("px",""));
            if (margindurum != "" && margindurum != 0 && margindurum < 1) {
                habermargin += 39;
                $(".haber-list>div").animate({
                    "margin-top": "" + habermargin + "px"
                }, 1000, function () {
                    // Animation complete.
                });
            }
        });

</script>

<script type="text/javascript" src="<?php echo base_url("assets/front/"); ?>js/slider3.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/front/"); ?>js/slider4.js"></script>
<script>
    $(".popupkampanyakapat").click(function () {
        $(".popupkampanya").animate({
            opacity: 0
        }, 300, function () {
            $(".popupkampanya").hide();
        });
    });

</script>
    <div class="temizle"></div>
    <div class="footer">
        <div id="twonclick"> <a title="2nclick" target="_blank" href="http://www.2nreklamajansi.com/" class="twonclick">2nclick</a> </div>
        <div class="ortala">
            <ul>
                <li><a href="http://www.akgungrubu.com/" target="_blank"><img src="<?php echo base_url("assets/front/"); ?>img/akgungroup.svg"></a>
                    <p><?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?><?php echo $bilgi["description"];?><?php }?></p>
                    <div class="sosyal-icon">
                        <ul>
                            <a href="https://www.facebook.com/<?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?><?php echo $bilgi["facebook"]; ?> <?php }?>" target="_blank" title="Facebook"><img src="<?php echo base_url("assets/front/"); ?>img/icons/sosyalmedya/facebook-icon.png" /></a>
                            <a href="https://www.instagram.com/<?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?><?php echo $bilgi["isntegram"]; ?> <?php }?>" target="_blank" title="İnstagram"><img src="<?php echo base_url("assets/front/"); ?>img/icons/sosyalmedya/instagram-icon.png" /></a>
                            <a href="https://twitter.com/<?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?><?php echo $bilgi["twitter"]; ?> <?php }?>" target="_blank" title="Twitter"><img src="<?php echo base_url("assets/front/"); ?>img/icons/sosyalmedya/twitter-icon.png" /></a>

                        </ul>
                    </div>
                </li>
          <li class="altmenunbottom">
        <h3>CORPORATE</h3>
            <ul>
        <?php $skat = 11; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
        <li><a href="<?php echo base_url("corporate/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
        <?php } ?>
            </ul>
    </li>
    <li class="altmenunbottom">
        <h3>PRODUCTS</h3>
            <ul>
    <?php $skat = 10; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
        <li><a href="<?php echo base_url("products/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
    <?php } ?>
            </ul>
    </li>
          <li class="altmenunbottom">
        <h3>MEDIA</h3>
            <ul>
                <?php $skat = 9; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
            <li><a href="<?php echo base_url("media/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
            <?php } ?>
            </ul>
    </li>
          <li class="altmenunbottom">
        <h3>CATALOGS</h3>
            <ul>
            <?php $skat = 8; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
          <li><a href="<?php echo base_url("catalog/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
         <?php } ?>
            </ul>
    </li>
          <li class="altmenunbottom">
        <h3>REFERENCES</h3>
            <ul>
        <?php $skat = 7; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
           <li><a href="<?php echo base_url("references/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
            <?php } ?>
            </ul>
    </li>
          <li class="altmenunbottom">
        <h3>İLETİŞİM</h3>
            <ul>
                <li><a href="<?php echo base_url("contact-information"); ?>">Contact information </a></li>
            </ul>
    </li>



            </ul>
        </div>

    </div>  
      
    <script>

        function aramayikapa() {
            $(".searchbox").css("height", "0px");
        }

        function kelimeara(e)
        {
            
            if(e=="")
            {
                $(".searchbox").css("height", "0px");
            }
            else
            {
                var txtdilsec=document.getElementById("dilsecim");
                var txtkelime = document.getElementById("kelime");
                var txtkelime2 = document.getElementById("kelime1");

                var textLength = txtkelime.value.length;
                var textLength2 = txtkelime2.value.length;

                if (textLength > 1 || textLength2 > 1) {
                    
                    $.getJSON("/Urunler/UrunKelimeAra?kelime=" + e + "&dildurum=" + txtdilsec.value, function (result) {
                        $(".searchbox>ul").html("");
                        var sayac = 0;
                        $.each(result, function (i, field) {
                            sayac += 1;
                            //$(".searchbox>ul").append("<li onclick=\"kelimeyaz(this.innerHTML);\">" + field.UrunBaslik + " (" + field.Kategori + ")</li>");
                            $(".searchbox>ul").append("<li onclick=\"kelimeyaz(this.innerHTML);\">" + field.UrunBaslik + " <span>(" + field.Kategori + ")</span></li>");
                        });
                        var heighthesap = sayac * 35;
                        if (heighthesap > 500) {
                            $(".searchbox").css("overflow-y", "scroll");
                        }
                        else {
                            $(".searchbox").css("overflow-y", "hidden");
                        }
                        $("li").live("click", function () {
                            return true;
                        });

                        $(".searchbox").css("height", heighthesap + "px");
                    });
                }
                else
                {
                    $(".searchbox").css("height", "0px");
                }
            }
        }

        function kelimeyaz(e) {


            var res = e.replace("<span>(","").replace(")</span>","");
            $("#kelime").val(res);
            $("#kelime1").val(res);
            $("#formara").submit();

        };


        $(".menuac").click(function () {


            $(".mobil-menu").slideToggle();

            $(".menuac").css("display", "none");
            $(".menukapat").css("display", "block");
            if($(".mobile-arama").css("display")!="none")
            {
                $(".mobile-arama").slideToggle();
            }


        });
        $(".menukapat").click(function () {

            $(".mobil-menu").slideToggle();

            $(".menuac").css("display", "block");
            $(".menukapat").css("display", "none");

        });


        $(".arama-mobile").click(function () {


            $(".mobile-arama").slideToggle();

            if ($(".mobil-menu").css("display") != "none")
            {
                $(".mobil-menu").slideToggle();
                $(".menuac").css("display", "block");
                $(".menukapat").css("display", "none");
            }
        });




        $(".mobmenu>li").click(function () {
            if ($(this).find("div").css("display") == "block") {
                $(this).find("div").slideUp();
            }
            else {
                $(".mobmenu>li>.altmenu").slideUp();

                $(this).find("div").slideDown();
            }

        });

    </script>