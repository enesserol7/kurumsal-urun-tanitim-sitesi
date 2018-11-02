<div class="content-wrapper">
  <section class="content">
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ürün Kategori Düzenleme Formu</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('panel/urunkategoriduzenleme'); ?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Kategori Title</label>

                  <div class="col-sm-6">
                    <input type="text" name="title" value="<?php echo $bilgi['kategori_adi']; ?>" class="form-control" placeholder="Ürün Kategori Başlık">
                    <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ürün Kategori Dili</label>

                  <div class="col-sm-6">
                    <select class="form-control" name="urunkatdili">
                      <?php if($bilgi['dil'] == "TR") { ?>
                      <option selected="selected" value="TR">TR</option>
                      <option value="EN">EN</option>
                      <?php }else { ?><option value="TR">TR</option>
                      <option selected="selected" value="EN">EN</option><?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <a class="btn btn-warning" href="<?php echo base_url('panel/urunkategori'); ?>">Vazgeç</a>
                <button type="submit" class="btn btn-info pull-right">Güncelle</button>
              </div>
            </form>
          </div>
      </div>
  </section>
</div>