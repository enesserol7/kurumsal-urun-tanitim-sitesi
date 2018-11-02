<?php
    $conn = @mysql_connect("localhost","root","");
    mysql_select_db("duratiles",$conn);
    $rs = mysql_query($query,$conn) or die("Error : ".mysql_error());

    while($product_data = mysql_fetch_assoc($rs)){ ?>
        <li>
            <a href="<?php echo base_url("urun-detay-");echo $product_data["urun_seo"]; ?>" title="<?php echo $product_data["urun_adi"]; ?>">
                <img src="<?php echo base_url();echo $product_data["urun_resim"]; ?>">
                    <div class="text">
                        <span class="head"><?php echo $product_data["urun_adi"]; ?></span>
                    </div>
                </a>
        </li>
<?php  } ?>