<?php
include"conf.php"; 
$colour="";
$brand="";
$size="";
$eprice="";
$colour = isset($_REQUEST['colour'])?$_REQUEST['colour']:"";
$brand = isset($_REQUEST['brand'])?$_REQUEST['brand']:"";
$size = isset($_REQUEST['size'])?$_REQUEST['size']:"";
$kulyeri = isset($_REQUEST['kulyeri'])?$_REQUEST['kulyeri']:"";

	     $query = "select * from urunler where durum = '1'"; 
		 
		           //filter query start 
					  if(!empty($colour)){
						  $colordata =implode("','",$colour);
						  $query  .= " and urun_rengi in('$colordata')"; 
					  }
					  
					   if(!empty($brand)){
						  $branddata =implode("','",$brand);
						  $query  .= " and urun_adi in('$branddata')"; 
					  }
					  
					  if(!empty($size)){
						  $sizedata =implode("','",$size);
						  $query  .= " and urun_olcu in('$sizedata')"; 
					  }

					  if(!empty($kulyeri)){
						  $kulyeridata =implode("','",$size);
						  $query  .= " and kulyeri_sef in('$kulyeridata')"; 
					  }
                      
				     $rs = mysql_query($query,$conn) or die("Error : ".mysql_error());
					 
					 while($product_data = mysql_fetch_assoc($rs)){
				  ?>
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
					 <?php  } ?>
					                     