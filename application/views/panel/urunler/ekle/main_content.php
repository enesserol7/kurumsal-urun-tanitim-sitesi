<div class="content-wrapper">
  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ürün Ekleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('panel/urunekleme'); ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Title</label>

                  <div class="col-sm-6">
                    <input type="text" name="title" value="" class="form-control" placeholder="Ürün Başlık">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Kategori</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="katID">
                      <?php $bilgi = urunkategori(); foreach ($bilgi as $bilgi) { ?>
                      <option value="<?php echo $bilgi['id']; ?>"><?php echo $bilgi['kategori_adi']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Ölçü</label>

                  <div class="col-sm-6">
                    <input type="text" name="urunolcu" value="" class="form-control" placeholder="Ürün Ölçü">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Rengi</label>

                  <div class="col-sm-6">
                    <input type="text" name="urunrengi" value="" class="form-control" placeholder="Ürün Rengi">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Kullanım Yeri</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="kullanimyeri">
                      <?php $bilgi = urunkullanimyer(); foreach ($bilgi as $bilgi) { ?>
                      <option value="<?php echo $bilgi['kullanim_yeri']; ?>"><?php echo $bilgi['kullanim_yeri']; ?></option>
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
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün İçerik</label>

                  <div class="col-sm-10">
                    <textarea name="icerik" id="editor1" rows="8" cols="80"></textarea>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Dili</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="urundili">
                      <option value="TR">TR</option>
                      <option value="EN">EN</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('panel/urunler'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-primary pull-right">Ekle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
</div>