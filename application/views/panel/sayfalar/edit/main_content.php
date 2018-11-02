<div class="content-wrapper">
  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sayfa Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('panel/sayfaduzenleme'); ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sayfa Title</label>

                  <div class="col-sm-6">
                    <input type="text" name="title" value="<?php echo $bilgi['sayfa_adi']; ?>" class="form-control" placeholder="Sayfa Başlık">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sayfa Kategori</label>
                  <div class="col-sm-6">
   
                    <select class="form-control" name="katID">
                      <?php $bilgim = kategoriliste(); foreach ($bilgim as $bilgim) { if($bilgim['id'] == $bilgi['kategori_id']) { ?>
                      <option selected="selected" value="<?php echo $bilgim['id']; ?>"><?php echo $bilgim['kategori_adi']; ?></option>
                      <?php } else{ ?><option value="<?php echo $bilgim['id']; ?>"><?php echo $bilgim['kategori_adi']; ?></option><?php } }?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sayfa Resim</label>

                  <div class="col-sm-6">
                    <input type="file" name="file" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mevcut Resim</label>

                  <div class="col-sm-6">
                    <img src="<?php echo base_url($bilgi['sayfa_resmi']); ?>" class="img img-responsive profile-user-image" alt="">
                    <p class="text-blue">Mevcut Sayfa Resmini Değiştirmeyecekseniz Seçim Yapmayınız!!!</p>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sayfa İçerik</label>

                  <div class="col-sm-10">
                    <textarea name="icerik" id="editor1" value="" rows="8" cols="80"><?php echo $bilgi['icerik']; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sayfa Dili</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="sayfadili">
                      <?php if($bilgi['sayfa_dili'] == "TR") { ?>
                      <option selected="selected" value="TR">TR</option>
                      <option value="EN">EN</option>
                      <?php }else { ?><option value="TR">TR</option>
                      <option selected="selected" value="EN">EN</option><?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('panel/sayfalar'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
</div>