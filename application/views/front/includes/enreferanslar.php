    <div class="home-bilgi">
        <ul>
            <li>
                <h4>REFERANSLAR</h4>
                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 400px; height: 300px; overflow: hidden; visibility: hidden; ">
                    <!-- Loading Screen -->
                    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                        <div style="position:absolute;display:block;top:100px;left:0px;width:100%;height:100%;"><div class="cssload-container"><div class="cssload-whirlpool"></div></div></div>
                    </div>
                        <div class="anareferans" data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 400px; height: 200px; overflow: hidden;">
                                <?php $veriler = enreferansgetir(); foreach ($veriler as $veri) { ?>
                                <div data-p="144.50" >
                                    <img data-u="image" src="<?php echo base_url();echo $veri["resim"]; ?>" />
                                    <img data-u="thumb" src="<?php echo base_url();echo $veri["resim"]; ?>" />
                                    <div class="slide-bg">
                                        <ul>
                                            <li>
                                                <div>
                                                    <h4><?php echo $veri["referans_adi"]; ?></h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php } ?>
                        </div>

                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
                        <!-- Thumbnail Item Skin Begin -->
                        <div class="slide-thumb" data-u="slides" style="cursor: default;">
                            <div data-u="prototype" class="p">
                                <div class="w">
                                    <div data-u="thumbnailtemplate" class="t"></div>
                                </div>
                                <div class="c"></div>
                            </div>
                        </div>
                        <!-- Thumbnail Item Skin End -->
                    </div>
                    <!-- Arrow Navigator -->
                    <span data-u="arrowleft" class="jssora05l" style="top:90px;left:8px;width:40px;height:40px;"></span>
                    <span data-u="arrowright" class="jssora05r" style="top:90px;right:8px;width:40px;height:40px;"></span>
                </div>
            </li>
            <li>
                <div class="haberler">
                    <h4>HABERLER</h4>
                    <div class="haber-arrow">
                        <div class="top-arrow">
                            <img src="<?php echo base_url("assets/front/"); ?>img/up-arrow.png" />
                        </div>
                        <div class="bottom-arrow">
                            <img src="<?php echo base_url("assets/front/"); ?>img/down-arrow.png" />
                        </div>
                    </div>
                    <div class="haber-list">
                        <div id="home-news">
                            <ul>
                                <?php $veriler = enhabergetir(); foreach ($veriler as $veri) { ?>
                                <li><a href="<?php echo base_url("media-detail/");echo $veri["haber_sef"]; ?>"><?php echo $veri["haber_adi"]; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="haber-slide">
                    <div id="jssor_2" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 400px; height: 317.25px; overflow: hidden; visibility: hidden; ">
                        <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block; top:62px;left:0px;width:100%;height:100%;"><div class="cssload-container"><div class="cssload-whirlpool"></div></div></div>
                        </div>
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 400px; height: 150px; overflow: hidden;">
                            <?php $veriler = enhabergetir(); foreach ($veriler as $veri) { ?>
                            <div data-p="144.50" >                               
                                <a href="<?php echo base_url("media-detail/");echo $veri["haber_sef"]; ?>">
                                    <img data-u="image" src="<?php echo base_url();echo $veri["haber_resim"]; ?>" />
                                    <div class="haber-slide-yazi">
                                        <p>
                                            360°  - <?php echo $veri["haber_adi"]; ?> 
                                        </p>
                                    </div>
                                </a>                                
                            </div>
                            <?php } ?>
                        </div>
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
                            <!-- Thumbnail Item Skin Begin -->
                            <div class="slide-thumb" data-u="slides" style="cursor: default;">
                                <div data-u="prototype" class="p">
                                    <div class="w">
                                        <div data-u="thumbnailtemplate" class="t"></div>
                                    </div>
                                    <div class="c"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- Arrow Navigator -->
                        <span data-u="arrowleft" class="jssora05l" style="top:65px;left:8px;width:40px;height:40px;"></span>
                        <span data-u="arrowright" class="jssora05r" style="top:65px;right:8px;width:40px;height:40px;"></span>
                    </div>
                </div>

            </li>
        </ul>

    </div>