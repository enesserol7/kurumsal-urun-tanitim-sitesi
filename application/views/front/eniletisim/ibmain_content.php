    <div>
        <div class="ortala">
            <div class="temizle"></div>
            <?php $veriler = siteayarlari(); foreach ($veriler as $veri) { ?>
            <div><h1><?php echo $veri["site_adi"]; ?></h1>
                <p><?php echo $veri["adres"]; ?></p>
                <p>T:<?php echo $veri["telefon"]; ?> (pbx)  /  F:<?php echo $veri["fax"]; ?> (pbx)</p>
                <p><?php echo $veri["email"]; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
        <div class="iletisim ortala">
            <div>
                <iframe src="<?php echo $veri["google_maps"]; ?>" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
                  
        </div>
        <br><br>
        <div class="iletisim ortala">
            <div class="ortala">
            <div class="temizle"></div>
                <div><h1>Contact Form</h1>
                    Your satisfaction is very important to us. Our aim is to offer you a better quality service with your views and suggestions. Please share with us your views on suggestions, requests, complaints, satisfaction. Each application will be examined in detail and will guide you to provide a better quality service.
                </div>
            </div>
            <br><br>
          <form action="http://duratiles.com.tr/iletisim/iletisim-formu" enctype="multipart/form-data" method="post">

                    <div>

                        <div class="iletisim-form-div">
                            <input placeholder="Name Surname" id="Adsoyad" name="Adsoyad" required />
                            <input placeholder="Your phone number" id="Telefon" name="Telefon" required />
                            <input placeholder="Email" id="Eposta" name="Eposta" required />
                            <input placeholder="Subject" id="Konu" name="Konu" required />
                        </div>
                        <div class="iletisim-form-div">
                            <textarea placeholder="Message" id="Mesaj" name="Mesaj" required></textarea>
                            <button>SEND</button>
                        </div>

                    </div>

        </form>
    </div>

    <div class="temizle"></div>