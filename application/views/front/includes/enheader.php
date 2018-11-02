    <div class="head ortala">
        <ul>
            <li>
                <?php $veriler = siteayarlari(); foreach ($veriler as $veri) { ?>
                <a href="<?php echo base_url("en/index"); ?>">
                    <img src="<?php echo base_url();echo $veri["logo"]; ?>" />
                </a>
                <?php } ?>
            </li>
            <li>       
                <form action="<?php echo base_url("urunler/ara"); ?>" enctype="multipart/form-data" id="formara">
                    <div class="sosyal-menu">
                        <div>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/<?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?><?php echo $bilgi["facebook"]; ?> <?php }?>" target="_blank" title="Facebook"><img src="<?php echo base_url("assets/front/"); ?>img/icons/sosyalmedya/facebook-icon.png" /></a>
                                    <a href="https://www.instagram.com/<?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?><?php echo $bilgi["isntegram"]; ?> <?php }?>" target="_blank" title="İnstagram"><img src="<?php echo base_url("assets/front/"); ?>img/icons/sosyalmedya/instagram-icon.png" /></a>
                                    <a href="https://twitter.com/<?php $bilgi = siteayarlari(); foreach ($bilgi as $bilgi) { ?><?php echo $bilgi["twitter"]; ?> <?php }?>" target="_blank" title="Twitter"><img src="<?php echo base_url("assets/front/"); ?>img/icons/sosyalmedya/twitter-icon.png" /></a>
                                </li>
                                <li>
                                    <ul>
                                       
                                        <li><a href="<?php echo base_url(); ?>" class="active"><i class="fa fa-caret-down" aria-hidden="true"></i>TR</a></li>
                                        <li><span></span><a href="<?php echo base_url("en/index"); ?>"><i class="fa fa-caret-down" aria-hidden="true"></i>EN</a></li>
                                        

                                    </ul>

                                </li>
                                <li style="position:relative;z-index: 9999;" onchange="aramayikapa()">
                                    <input name="dilsecim" id="dilsecim" type="hidden" value="tr" />
                                    <input name="kelime" id="kelime" type="text" onkeyup="kelimeara(this.value)"  required autocomplete="off"/>
                                    <div class="searchbox"  >
                                        <ul id="searchbox">
                                         <li></li>
                                     </ul>
                                 </div>
                                 <button><i class="fa fa-search" aria-hidden="true"></i></button>
                             </li>

                         </ul>
                     </div>
                 </div>
             </form>
             
             <div class="head-menu">
                <div>
                    <ul>
                        <li>
                            <div>
                                <ul>

                                    <li>
                                        <a href="#">CORPORATE</a>
                                        <div class="altmenu">
                                            <ul>
                                                <?php $skat = 11; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                                                <li><a href="<?php echo base_url("corporate/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">PRODUCTS</a>
                                        <div class="altmenu">
                                            <ul>
                                                <?php $skat = 10; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                                                <li><a href="<?php echo base_url("products/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">MEDIA</a>
                                        <div class="altmenu">
                                            <ul>
                                                <?php $skat = 9; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                                                <li><a href="<?php echo base_url("media/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">CATALOGS</a>
                                        <div class="altmenu">
                                            <ul>
                                                <?php $skat = 8; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                                                <li><a href="<?php echo base_url("catalog/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">REFERENCES</a>
                                        <div class="altmenu">
                                            <ul>
                                                <?php $skat = 7; $dil = "EN"; $veriler = sayfalar($skat,$dil); foreach ($veriler as $veri) { $kid = $veri['kategori_id'] ?>
                                                <li><a href="<?php echo base_url("references/");echo $veri["sayfa_seo"]; ?>"> <?php echo $veri["sayfa_adi"]; ?> </a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">CONTACT</a>
                                        <div class="altmenu">
                                            <ul>
                                                <li><a href="<?php echo base_url("contact-information"); ?>">Contact information </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>

        </li>
    </ul>
</div>
<div class="mobile-head">
    <ul>
        <li>
            <?php $veriler = siteayarlari(); foreach ($veriler as $veri) { ?>
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url();echo $veri["logo"]; ?>" />
                </a>
            <?php } ?>
        </li>
        <li>
            <div class="menutik">

                <img class="menuac" src="<?php echo base_url("assets/front/"); ?>img/mobil-menu-icon.png" style="display: block;">
                <img class="menukapat" src="<?php echo base_url("assets/front/"); ?>img/close-icon.png" style="display: none;">
            </div>
            <div class="arama-mobile">
                <div><i class="fa fa-search" aria-hidden="true"></i></div>                
            </div>
            <div class="mobile-arama">
                <form action="http://duratiles.com.tr/urunler/ara" enctype="multipart/form-data" id="formara">
                    <div style="position:relative;z-index: 9999;" onchange="aramayikapa()">
                        <input name="dilsecim" id="dilsecim" type="hidden" value="tr" />
                        <input name="kelime" id="kelime1" type="text" onkeyup="kelimeara(this.value)" required autocomplete="off" />
                        <div class="searchbox">
                            <ul id="searchbox">
                                <li></li>
                            </ul>
                        </div>
                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>

                    
                </form>
            </div>
            
            <div class="mobil-menu" style="display: none;">


                <ul id="menu" class="mobmenu">

                    <li>
                        <a href="<?php echo base_url("corporate/"); ?>">CORPORATE</a>

                        
                    </li>
                    <li>
                        <a href="<?php echo base_url("products/"); ?>">PRODUCTS</a>

                        
                    </li>
                    <li>
                        <a href="<?php echo base_url("media/"); ?>">MEDİA</a>

                        
                    </li>
                    <li>
                        <a href="<?php echo base_url("catalog/"); ?>">CATALOGS</a>

                        
                    </li>
                    <li>
                        <a href="<?php echo base_url("references/"); ?>">REFERENCES</a>

                        
                    </li>
                    <li>
                        <a href="<?php echo base_url("contact-information"); ?>">CONTACT</a>

                        
                    </li>

                    <li style="background-color: #000;"><a href="<?php echo base_url(); ?>" class="active">TR</a></li>
                    <li style="background-color: #000;"><span></span><a href="<?php echo base_url("en/index"); ?>">EN</a></li>
                    

                </ul>

            </div>
        </li>
    </ul>
</div>