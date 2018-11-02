  <div class="content-wrapper">
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Site Ayarları Düzenleme Formu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url("panel/ayarguncelle"); ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Title</label>

                  <div class="col-sm-10">
                    <input type="text" name="title" value="<?php echo $bilgi['site_adi']; ?>" class="form-control" placeholder="Site Başlık">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                  </div>
                </div>
                <br><br><br>
                 <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Logo</label>

                  <div class="col-sm-6">
                    <input type="file" name="file" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mevcut Logo</label>

                  <div class="col-sm-6">
                    <img src="<?php echo base_url(); ?><?php echo $bilgi['logo']; ?>" class="img img-responsive profile-user-image" alt="">
                    <p class="text-blue">Mevcut Logoyu Değiştirmeyecekseniz Seçim Yapmayınız!!!</p>
                  </div>
                </div>
              </div>
                                <br><br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Mail</label>

                  <div class="col-sm-10">
                    <input type="email" name="email" value="<?php echo $bilgi['email']; ?>" class="form-control" placeholder="Site Mail">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Telefon</label>

                  <div class="col-sm-10">
                    <input type="tel" class="form-control" value="<?php echo $bilgi['telefon']; ?>" name="telefon" placeholder="Site Telefon">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Fax</label>

                  <div class="col-sm-10">
                    <input type="tel" class="form-control" value="<?php echo $bilgi['fax']; ?>" name="fax" placeholder="Site Fax">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Açıklama</label>

                  <div class="col-sm-10">
                    <input type="tel" class="form-control" value="<?php echo $bilgi['description']; ?>" name="desc" placeholder="Site Açıklama">
                  </div>
                </div>
              </div>
              <br>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Site Anahtar Kelimeler</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $bilgi['kaywords']; ?>" name="keyw" placeholder="Site Anahtar Kelimeler">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Site Adres</label>

                  <div class="col-sm-10">
                    <textarea name="adres" rows="8" cols="80" class="form-control"><?php echo $bilgi['adres']; ?></textarea>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Google Maps</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $bilgi['google_maps']; ?>" name="maps" placeholder="Google Maps">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Google Analytics</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $bilgi['analistik']; ?>" name="analistik" placeholder="Google Analytics">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yandex Metrica</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $bilgi['metrica']; ?>" name="metrica" placeholder="Yandex Metrica">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Facebook</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $bilgi['facebook']; ?>" name="facebook" placeholder="Facebook">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Twitter</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $bilgi['twitter']; ?>" name="twitter" placeholder="Twitter">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">İnstagram</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $bilgi['isntegram']; ?>" name="instagram" placeholder="İnstagram">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Linkedin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $bilgi['linkadin']; ?>" name="linkedin" placeholder="Linkedin">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Youtube</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $bilgi['youtube']; ?>" name="youtube" placeholder="Youtube">
                  </div>
                </div>
                <br><br>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('panel/ayarlar'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </section>
</div>