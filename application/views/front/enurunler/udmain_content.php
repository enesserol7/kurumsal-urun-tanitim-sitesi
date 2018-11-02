    <div>
        <div class="ortala">
            <div class="temizle"></div>
                <div>
                    <h1><?php echo $bilgi["urun_adi"]; ?></h1>
                    

                </div>

        </div>
    </div>
    <div class="ortala urundetay">

        <!--<div class="yazdirbar">
                    <a href="<?php // echo base_url();echo $bilgi["urun_pdf"]; ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>D&#214;K&#220;MAN</a>
         </div>-->
        <div class="temizle" style="height:50px;"></div>

        <div class="uruntipiic">
            <ul>
                
                            <li class="uruntip-1">
                                <div class="urunresim">



                                    <ul>
                                        <li id="secilenresim-104">
                                                    <a id="secilenresim-104-469" href="<?php echo base_url();echo $bilgi["urun_resim"]; ?>" data-group="mygroup-0" data-thumbnail="<?php echo $bilgi["urun_resim"]; ?>" class="html5lightbox">
                                                        <img src="<?php echo base_url();echo $bilgi["urun_resim"]; ?>" />
                                                    </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="renksag">
                                        <div class="uruntipihead" id="uruntipihead-104">


                                            <?php echo $bilgi["urun_aciklama"]; ?>




                                        </div>

                                    <div class="olculerdis">
                                        <div class="olculer">
                                            <div class="measurements">DİMENSİONS</div>
                                            <div class="colors">COLORS</div>
                                        </div>



                                            <div class="olculer">
                                                <div class="measurements"><?php echo $bilgi["urun_olcu"]; ?></div>
                                                <div class="colors">

                                                        <div class="uruncolor" style="background-image:url(<?php echo base_url();echo $bilgi["urun_resim"]; ?>)">
                                                            <input type="hidden" name="renk-resim" class="secilenresim-104-469" value="<?php echo base_url();echo $bilgi["urun_resim"]; ?>">

                                                            
                                                                <input type="hidden" name="renk-baslik" class="uruntipihead-104" value="<?php echo $bilgi["urun_aciklama"]; ?>" />
                                                            
                                                        </div>
                                                    <div class="temizle"></div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="temizle"></div>
                                </div>
                            </li>
                
            </ul>
            <div class="temizle"></div>
        </div>

    </div>