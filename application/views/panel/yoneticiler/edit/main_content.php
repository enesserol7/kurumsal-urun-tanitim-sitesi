<div class="content-wrapper">
  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Yönetici Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('panel/yoneticiduzenleme'); ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yönetici Adı</label>

                  <div class="col-sm-6">
                    <input type="text" name="title" value="<?php echo $bilgi['yonetici_adi']; ?>" class="form-control" placeholder="Yönetici Adı">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                    <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yönetici Email</label>

                  <div class="col-sm-10">
                    <input type="email" name="email" value="<?php echo $bilgi['email']; ?>" class="form-control" placeholder="Yönetici Email">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yönetici Şifre</label>

                  <div class="col-sm-10">
                    <input type="password" name="sifre" value="<?php echo $bilgi['sifre']; ?>" class="form-control" placeholder="Yönetici Şİfre">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('panel/yoneticiler'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
</div>