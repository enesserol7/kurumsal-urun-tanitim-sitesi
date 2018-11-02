    <div>
        <div class="ortala">
            <div class="temizle"></div>
                <div>
                    <h1><?php echo $bilgi["urun_adi"]; ?></h1>
                    

                </div>

        </div>
    </div>
    <div class="ortala urundetay">

        <div class="yazdirbar">
                    <a href="<?php echo base_url();echo $bilgi["urun_pdf"]; ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>D&#214;K&#220;MAN</a>
         </div>
        <div class="temizle" style="height:50px;"></div>

        <div class="uruntipiic">
            <ul>
                
                            <li class="uruntip-1">
                                <div class="urunresim">



                                    <ul>
                                        <li id="secilenresim-104" class="column">
                                            <img src="<?php echo base_url();echo $bilgi["urun_resim"]; ?>" onclick="openModal();currentSlide(1)" class="hover-shadow" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="renksag">
                                        <div class="uruntipihead" id="uruntipihead-104">


                                            <?php echo $bilgi["urun_aciklama"]; ?>




                                        </div>

                                    <div class="olculerdis">
                                        <div class="olculer">
                                            <div class="measurements">&#214;L&#199;&#220;LER</div>
                                            <div class="colors">RENKLER</div>
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
    <div id="myModal" class="modal">
  <input class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-contentt">
<div id="html5-close" style="cursor: pointer; position: absolute; top: 0px; right: 0px; margin-top: -16px; margin-right: -16px; display: block;" onclick="closeModal()"><img src="<?php echo base_url("assets/front/img/lightbox-close.png"); ?>"></div>
    <div class="mySlides">
      <div class="numbertext">1 / 3</div>
      <img src="<?php echo base_url();echo $bilgi["urun_resim"]; ?>" style="width:65%; margin-left: 17%;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 3</div>
      <img src="<?php echo base_url();echo $bilgi["urun_resim"]; ?>" style="width:65%; margin-left: 17%;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 3</div>
      <img src="<?php echo base_url();echo $bilgi["urun_resim"]; ?>" style="width:65%; margin-left: 17%;">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="<?php echo base_url();echo $bilgi["urun_resim"]; ?>" onclick="currentSlide(1)" alt="<?php echo $bilgi["urun_adi"]; ?> 1" style="width:45%">
    </div>

    <div class="column">
      <img class="demo" src="<?php echo base_url();echo $bilgi["urun_resim"]; ?>" onclick="currentSlide(2)" alt="<?php echo $bilgi["urun_adi"]; ?> 2" style="width:45%">
    </div>

    <div class="column">
      <img class="demo" src="<?php echo base_url();echo $bilgi["urun_resim"]; ?>" onclick="currentSlide(3)" alt="<?php echo $bilgi["urun_adi"]; ?> 3" style="width:45%">
    </div>
  </div>
</div>


<script>
// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>