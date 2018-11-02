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
                <div><h1>İletişim Formu</h1>
                    Sizlerin memnuniyeti bizim için çok önemlidir. Amacımız, sizin görüş ve önerilerinizle birlikte size daha kaliteli bir hizmet sunabilmektir. Öneri, istek, şikayet, memnuniyetiniz ile ilgili görüşlerinizi lütfen bizimle paylaşın. Her başvurunuz detaylı bir biçimde incelenecek, sizlere daha kaliteli bir hizmet sunmak için bize yol gösterecektir.
                </div>
            </div>
            <br><br>
          <form action="http://duratiles.com.tr/iletisim/iletisim-formu" enctype="multipart/form-data" method="post">

                    <div>

                        <div class="iletisim-form-div">
                            <input placeholder="Adınız Soyadınız" id="Adsoyad" name="Adsoyad" required />
                            <input placeholder="Telefon Numaranız" id="Telefon" name="Telefon" required />
                            <input placeholder="E-Posta Adresiniz" id="Eposta" name="Eposta" required />
                            <input placeholder="Konu" id="Konu" name="Konu" required />
                        </div>
                        <div class="iletisim-form-div">
                            <textarea placeholder="Mesajınız" id="Mesaj" name="Mesaj" required></textarea>
                            <button>G&#214;NDER</button>
                        </div>

                    </div>

        </form>
    </div>

    <div class="temizle"></div>