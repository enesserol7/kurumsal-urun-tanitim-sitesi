<div class="content-wrapper">
  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Katalog Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('panel/katalogduzenleme'); ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Katalog Title</label>

                  <div class="col-sm-6">
                    <input type="text" name="title" value="<?php echo $bilgi['katolog_adi']; ?>" class="form-control" placeholder="Katalog Başlık">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Katalog Kategori</label>

                  <div class="col-sm-6">
                   
                    <select class="form-control" name="katID">
                      <?php $bilgim = katalogkategori(); foreach ($bilgim as $bilgim) { if($bilgim['id'] == $bilgi['kategori_id']) { ?>
                      <option selected="selected" value="<?php echo $bilgim['id']; ?>"><?php echo $bilgim['kategori_adi']; ?></option>
                      <?php } else{ ?><option value="<?php echo $bilgim['id']; ?>"><?php echo $bilgim['kategori_adi']; ?></option><?php } }?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Katalog PDF</label>

                  <div class="col-sm-6">
                    <input type="file" name="file" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mevcut Resim</label>

                  <div class="col-sm-6">
                    <img src="<?php echo base_url($bilgi['pdf']); ?>" class="img img-responsive profile-user-image" alt="">
                    <p class="text-blue">Mevcut Sayfa Resmini Değiştirmeyecekseniz Seçim Yapmayınız!!!</p>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('panel/kataloglar'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
</div>