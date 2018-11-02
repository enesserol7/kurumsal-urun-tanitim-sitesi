<div class="altsayfa">
    <div>
        <div class="ortala">
                    <div class="temizle"></div>
                    <div>
                        <h3></h3>
                    </div>

        </div>
    </div>


<form action="<?php echo base_url("urunler/");echo $sonuc; ?>" data-ajax="true" data-ajax-begin="StartCust" data-ajax-success="LoadCust" id="form0" method="post">    <input type="hidden" name="dil" id="dil" value="tr" />
    <input type="hidden" name="kelime" id="kelime" />
    <div class="altsayfaic urunler ortala">
        <div class="urunlermenu">



            <div class="altmenuic">
                        <a class="all-clean-btn museo-500 data-filter-clean" href="<?php echo base_url("urunler/seramik-karo"); ?>" style="color:white;"><i class="fa fa-times" aria-hidden="true"></i> Se&#231;imleri Temizle</a>

                    <select id="altmenu" name="altmenu" onchange="KategoriSecim()">
                        <?php $skat = 2; $dil = "TR"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                            <option value="<?php echo $veri["sayfa_seo"]; ?>"><?php echo $veri["sayfa_adi"]; ?></option>
                        <?php } ?>
                    </select>
                
            </div>
                    <div class="dropdownsecim altmenu2">
                        <span>KATEGORİ</span>
                        <ul class="tab" style="display: none;">
                            <?php $skat = 2; $dil = "TR"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                                <li><a href="<?php echo $veri["sayfa_seo"]; ?>" class="tablinks planlink"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                            <?php } ?>
                        </ul>
                    </div>


            <div class="new-badge" id="cbKutular">
                <span>
                    YENİ
                </span>
              
                <input type="checkbox" name="yeni"  value="yeni"><span>YENİ</span>

            </div>
            <div>
                <h3>Tüm Ürünler <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                <div class="scrollbar-rail">
                    <?php $dil = "TR"; $veri = urunadi($dil); foreach ($veri as $veri) { ?>
                        <div id="cbKutular"><a href="javascript:void(0);" class="list-group-item"><input type="checkbox" name="<?php echo $veri["urun_seo"]; ?>" class="item_filter brand" value="<?php echo $veri["urun_seo"]; ?>" id="<?php echo $veri["urun_seo"]; ?>" ><span><?php echo $veri["urun_adi"]; ?></span></a> </div>
                    <?php } ?>
                </div>
            </div>
            
            <div>
                <h3>Kullanım Yeri <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                <div class="scrollbar-rail">
                    <?php $dil = "TR"; $veri = urunkullanimyeri($dil); foreach ($veri as $veri) { ?>
                        <div id="cbKutular"><a href="javascript:void(0);" class="list-group-item"><input type="checkbox" name="<?php echo $veri["sef"]; ?>" class="item_filter kulyeri" value="<?php echo $veri["sef"]; ?>" id="<?php echo $veri["sef"]; ?>"><span><?php echo $veri["kullanim_yeri"]; ?></span></a> </div>
                    <?php } ?>
                </div>
            </div>
            <div>
                <h3>Ebat <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                <div class="scrollbar-rail">
                    <?php $sayi = 1; $dil = "TR"; $veri = urunolcu($dil); foreach ($veri as $veri) { ?>
                        <div id="cbKutular"><a href="javascript:void(0);" class="list-group-item"><input type="checkbox" name="<?php echo $veri["urun_olcu"]; ?>" class="item_filter size" value="<?php echo $veri["urun_olcu"]; ?>" id="<?php echo $veri["urun_olcu"]; ?>"><span><?php echo $veri["urun_olcu"]; ?></span></a> </div>
                    <?php } ?>
                </div>
            </div>
            
            
            
            <div>
                <h3>Renk <i class="fa fa-angle-down" aria-hidden="true"></i></h3>
                <div class="scrollbar-rail">
                    <?php $sayi = 1; $dil = "TR"; $veri = urunrenk($dil); foreach ($veri as $veri) { ?>
                        <div id="cbKutular"><a href="javascript:void(0);" class="list-group-item"><input type="checkbox" name="<?php echo $veri["urun_rengi"]; ?>" class="item_filter colour" value="<?php echo $veri["urun_rengi"]; ?>" id="<?php echo $veri["urun_rengi"]; ?>"><span><?php echo $veri["urun_rengi"]; ?></span></a> </div>
                    <?php } ?>
                </div>
            </div>
            
            <input type="button" value="Filtrele" id="btnSecilenGor" onchange="$(this.form).submit();" class="btn btn-success btn-block" style="color: white;" />

        </div>
        <div>
            
            <div id="ajax-main product-data">
                
<ul class="black-band-four-column product-data">
            <li>
                <a href="<?php echo base_url("urun-detay-");echo $product_data["urun_seo"]; ?>" title="<?php echo $product_data["urun_adi"]; ?>">
                <img src="<?php echo base_url();echo $product_data["urun_resim"]; ?>">
                    <div class="text">
                        <span class="head"><?php echo $product_data["urun_adi"]; ?></span>
                    </div>
                </a>
            </li>
</ul>

<div class="temizle"></div>





<div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Index857d.html?Page=2&amp;slug=Seramik-Karo">2</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Index8152.html?Page=3&amp;slug=Seramik-Karo">3</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Indexd680.html?Page=4&amp;slug=Seramik-Karo">4</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Indexce9c.html?Page=5&amp;slug=Seramik-Karo">5</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Index0821.html?Page=6&amp;slug=Seramik-Karo">6</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Index56ab.html?Page=7&amp;slug=Seramik-Karo">7</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Indexd092.html?Page=8&amp;slug=Seramik-Karo">8</a></li><li><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Indexb4b4.html?Page=9&amp;slug=Seramik-Karo">9</a></li><li class="PagedList-skipToNext"><a data-ajax="true" data-ajax-mode="replace" data-ajax-update="#ajax-main" href="Index857d.html?Page=2&amp;slug=Seramik-Karo" rel="next">»</a></li></ul></div>
            </div>
        </div>
    </div>
</form>

    <div class="temizle"></div>
</div>
<script src="<?php echo base_url("assets/front/"); ?>js/jquery.js"></script>
<script src="<?php echo base_url("assets/front/"); ?>js/jquery.scrollbar.js"></script>


<script src="<?php echo base_url("assets/front/"); ?>js/bootstrap.min.js"></script>

    <script type="text/javascript">


        function KategoriSecim()
        {
            var e = document.getElementById("altmenu");
            var strUser = e.options[e.selectedIndex].value;
            var dildurum=document.getElementById("dil").value;
           
            if (dildurum == "en")
            {
                
                window.location = "en/products/" + strUser;
            }
            else
            {
                window.location = "/duratiles.com.tr/urunler/" + strUser;
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



<style>
#loaderpro{text-align:center; background: url('loader.gif') no-repeat center; height: 150px;}
</style>
    <script>
    var colour,brand,size;
    $(function(){
        $('.item_filter').click(function(){
            $('.product-data').html('<div id="loaderpro" style="" ></div>');
        
             colour = multiple_values('colour');
             brand  = multiple_values('brand');
             size   = multiple_values('size');
             kulyeri   = multiple_values('kulyeri');
            
            $.ajax({
                url:"<?php echo base_url("duratiles/urunliste"); ?>",
                type:'post',
                data:{colour:colour,brand:brand,size:size,kulyeri:kulyeri.val()},
                success:function(result){
                    $('.product-data').html(result);
                }
            });
        });
        
    });
    
    
    function multiple_values(inputclass){
        var val = new Array();
        $("."+inputclass+":checked").each(function() {
            val.push($(this).val());
        });
        return val;
    }
    
    
  $(function() {
        $( "#slider-range" ).slider({
          range: true,
          min: 0,
          max: 3000,
          values: [ 100, 3000 ],
          slide: function( event, ui ) {
            $( "#priceshow" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            $( ".price1" ).val(ui.values[ 0 ]);
            $( ".price2" ).val(ui.values[ 1 ]);
            $('.product-data').html('<div id="loaderpro" style="" ></div>');
             colour = multiple_values('colour');
             brand  = multiple_values('brand');
             size   = multiple_values('size');
            $.ajax({
                url:"ajax.php",
                type:'post',
                data:{colour:colour,brand:brand,size:size,sprice:ui.values[ 0 ],eprice:ui.values[ 1 ]},
                success:function(result){
                    $('.product-data').html(result);
                }
            });
          }
        });
        
        $( "#priceshow" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
         " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    }); 
    
</script>

<script type="text/javascript">


    $(document).ready(function(){
        $('#btnSecilenGor').click(function(e){
            e.preventDefault();
            var filter = "";
            $('#cbKutular :checked').each(function () {
                //Secilenler.push($(this).val());
                filter += $(this).attr('id') + " ";   
                $('#ajax-main ul li').show();
                $('#ajax-main ul li:not(.' + filter + ')').hide();        
            });       
        });
    });
</script>