<div class="content-wrapper">
  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ürün Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('panel/urunduzenleme'); ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Title</label>

                  <div class="col-sm-6">
                    <input type="text" name="title" value="<?php echo $bilgi['urun_adi']; ?>" class="form-control" placeholder="Ürün Başlık">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Kategori</label>

                  <div class="col-sm-6">
                   
                    <select class="form-control" name="katID">
                      <?php $bilgim = urunkategori(); foreach ($bilgim as $bilgim) { if($bilgim['id'] == $bilgi['kategori_id']) { ?>
                      <option selected="selected" value="<?php echo $bilgim['id']; ?>"><?php echo $bilgim['kategori_adi']; ?></option>
                      <?php } else{ ?><option value="<?php echo $bilgim['id']; ?>"><?php echo $bilgim['kategori_adi']; ?></option><?php } }?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Ölçü</label>

                  <div class="col-sm-6">
                    <input type="text" name="urunolcu" value="<?php echo $bilgi['urun_olcu']; ?>" class="form-control" placeholder="Ürün Ölçü">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Rengi</label>

                  <div class="col-sm-6">
                    <input type="text" name="urunrengi" value="<?php echo $bilgi['urun_rengi']; ?>" class="form-control" placeholder="Ürün Rengi">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Kullanım Yeri</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="kullanimyeri">
                      <?php $bilgim = urunkullanimyeri(); foreach ($bilgim as $bilgim) { ?>
                      <option value="<?php echo $bilgi['kullanim_yeri']; ?>"><?php echo $bilgim['kullanim_yeri']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Resim</label>

                  <div class="col-sm-6">
                    <input type="file" name="file" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mevcut Resim</label>

                  <div class="col-sm-6">
                    <img src="<?php echo base_url($bilgi['urun_resim']); ?>" class="img img-responsive profile-user-image" alt="">
                    <p class="text-blue">Mevcut Ürün Resmini Değiştirmeyecekseniz Seçim Yapmayınız!!!</p>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün İçerik</label>

                  <div class="col-sm-10">
                    <textarea name="icerik" id="editor1" value="" rows="8" cols="80"><?php echo $bilgi['urun_aciklama']; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Dili</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="urundili">
                      <?php if($bilgi['urun_dili'] == "TR") { ?>
                      <option selected="selected" value="TR">TR</option>
                      <option value="EN">EN</option>
                      <?php }else { ?><option value="TR">TR</option>
                      <option selected="selected" value="EN">EN</option><?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('panel/urunler'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
</div>