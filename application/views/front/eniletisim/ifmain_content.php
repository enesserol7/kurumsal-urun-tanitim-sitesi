    <div>
        <div class="ortala">
            <ul>
                
                    <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i> ANASAYFA </a></li>
                 <li><i class="fa fa-angle-right" aria-hidden="true"></i> İLETİŞİM</li>
                    <li>/ İLETİŞİM FORMU</li>
                
            </ul>
            <div class="temizle"></div>
                <div><h1>İletişim Formu</h1>
Sizlerin memnuniyeti bizim için çok önemlidir. Amacımız, sizin görüş ve önerilerinizle birlikte size daha kaliteli bir hizmet sunabilmektir. Öneri, istek, şikayet, memnuniyetiniz ile ilgili görüşlerinizi lütfen bizimle paylaşın. Her başvurunuz detaylı bir biçimde incelenecek, sizlere daha kaliteli bir hizmet sunmak için bize yol gösterecektir.</div>


        </div>
    </div>
      
        <form action="http://duratiles.com.tr/iletisim/iletisim-formu" enctype="multipart/form-data" method="post">


                <div class="altsayfaic iletisim ortala">
                    <div>
                <div class="altmenuic">
                    
                    <ul>
                            <li class=active><a href="<?php echo base_url("isayfa-detay/iletisim-bilgileri"); ?>">İletişim Bilgileri</a></li>
                            <li ><a href="<?php echo base_url("isayfa-detay/iletisim-formu"); ?>">İletişim Formu</a></li>
                    </ul>
                </div>
                <div class="dropdownsecim altmenu2">
                    <span>İletişim Bilgileri</span>
                    <ul class="tab" style="display: none;">
                            <li><a href="<?php echo base_url("isayfa-detay/iletisim-bilgileri"); ?>" class="tablinks planlink active">İletişim Bilgileri</a></li>
                            <li><a href="<?php echo base_url("isayfa-detay/iletisim-formu"); ?>" class="tablinks planlink ">İletişim Formu</a></li>
                    </ul>
                </div>
            </div>

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

                </div>

        </form>
     



    <div class="temizle"></div>