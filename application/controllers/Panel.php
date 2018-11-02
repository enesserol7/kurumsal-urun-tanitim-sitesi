<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {
	function protect(){
		$giris = $this->session->userdata('giris');
		if (!$giris) {
			redirect('panel');
		}
	}
	public function __construct() { parent::__construct(); }
	public function index(){
		$giris = $this->session->userdata('giris');
		$data["email"] = $this->session->userdata('email');
  		if ($giris) {
  			redirect('panel/anasayfa',$data);
  		}
		$this->load->view("panel/giris");
	}
	public function girisyap()
  	{
	  	$email = $this->input->post('email');
	  	$sifre = $this->input->post('sifre');
	  	$kontrol = $this->dtbs->kontrol($email,$sifre);

	  	if ($kontrol) {
	  		$this->session->set_userdata('giris',true);
	  		$this->session->set_userdata('email',$email);
	  		redirect('panel/index');
	  	}
	  	else{
	  		$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Email adresi ya da şifreniz uyuşmuyor!!. Lütfen bilgilerinizi tekrar giriniz.
              </div>
	  		</div>');

	  		redirect('panel');
	  	}
	}
	public function anasayfa(){
		$this->protect();
	  	$this->load->view('panel/anasayfa');
	}
	public function cikis(){
		$this->session->sess_destroy();
		redirect('panel');
	}
	public function ayarlar(){

		$sonuc = $this->dtbs->listele('site_ayarlari');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/ayarlar/anasayfa',$data);
	}

	public function ayarduzenle($id){

		$sonuc = $this->dtbs->cek('site_ayarlari',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/ayarlar/edit/anasayfa',$data);
	}
	public function ayarguncelle(){
		$id = $this->input->post('id');
		$site_adi = $this->input->post('title');
		$desc = $this->input->post('desc');
		$keyw = $this->input->post('keyw');
		$email = $this->input->post('email');
		$telefon = $this->input->post('telefon');
		$fax = $this->input->post('fax');
		$adres = $this->input->post('adres');
		$maps = $this->input->post('maps');
		$analistik = $this->input->post('analistik');
		$facebook = $this->input->post('facebook');
		$twitter = $this->input->post('twitter');
		$instagram = $this->input->post('instagram');
		$youtube = $this->input->post('youtube');
		$metrica = $this->input->post('metrica');
		$linkedin = $this->input->post('linkedin');


		$config['upload_path'] = FCPATH.'assets/front/img';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|svg';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 920;
			$config['height'] = 728;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();

		$data = array('id'=>$id,'site_adi'=>$site_adi,'description'=>$desc,'kaywords'=>$keyw,'email'=>$email,'telefon'=>$telefon,'fax'=>$fax,'adres'=>$adres,'google_maps'=>$maps,'analistik'=>$analistik,'facebook'=>$facebook,'twitter'=>$twitter,'isntegram'=>$instagram,'youtube'=>$youtube,'metrica'=>$metrica,'linkadin'=>$linkedin,'logo'=>$resimkayit
		);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','site_ayarlari');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Site Ayarlarını Başarıyla Güncellediniz...
              </div>
	  		</div>');

	  		redirect('panel/ayarlar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/ayarlar');
		}

	}else{
			$data = array('id'=>$id,'site_adi'=>$site_adi,'description'=>$desc,'kaywords'=>$keyw,'email'=>$email,'telefon'=>$telefon,'fax'=>$fax,'adres'=>$adres,'google_maps'=>$maps,'analistik'=>$analistik,'facebook'=>$facebook,'twitter'=>$twitter,'isntegram'=>$instagram,'youtube'=>$youtube,'metrica'=>$metrica,'linkadin'=>$linkedin);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','site_ayarlari');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Site Ayarları Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/ayarlar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/ayarlar');
		}
		}

	}
	public function yoneticiler(){
		$sonuc = $this->dtbs->listele('yonetici');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/yoneticiler/anasayfa',$data);
	}

	public function yoneticiekle(){
		$this->load->view('panel/yoneticiler/ekle/anasayfa');
	}

	public function yoneticiekleme(){

		$title = $this->input->post('title');
		$email = $this->input->post('email');
		$sifre = md5($this->input->post('sifre'));
		$durum = 1;

		$data = array('yonetici_adi'=>$title,'email'=>$email,'sifre'=>$sifre,'durum'=>$durum);

		$sonuc = $this->dtbs->ekle('yonetici',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Yönetici Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('panel/yoneticiler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/yoneticiler');
		}

	}

	public function yoneticiset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('yonetici',array('durum'=>$durum));
	}

	public function yoneticiduzenle($id){

		$sonuc = $this->dtbs->cek('yonetici',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/yoneticiler/edit/anasayfa',$data);
	}

	public function yoneticiduzenleme(){
		$id = $this->input->post('id');
		$durum = $this->input->post('durum');
		$title = $this->input->post('title');
		$email = $this->input->post('email');
		$sifre = $this->input->post('sifre');

		$data = array('yonetici_adi'=>$title,'email'=>$email,'sifre'=>$sifre,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','yonetici');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Yönetici Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/yoneticiler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/yoneticiler');
		}
	}

	public function yoneticisil($id,$where,$from){
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Yönetici Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('panel/yoneticiler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('panel/yoneticiler');
		}

	}
	public function sayfalar(){
		$sonuc = $this->dtbs->listele('sayfalar');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/sayfalar/anasayfa',$data);
	}

	public function sayfaekle(){
		$this->load->view('panel/sayfalar/ekle/anasayfa');
	}

	public function sayfaekleme(){

		$title = $this->input->post('title');
		$sef = seflink($title);
		$katID = $this->input->post('katID');
		$veri = kategoriliste();
		foreach ($veri as $veri) {
			if ($veri["id"] == $katID) {
				$kategori = $veri["kategori_adi"];
			}
		}		
		$katsef = seflink($kategori);
		$icerik = $this->input->post('icerik');
		$sayfadili = $this->input->post('sayfadili');
		$durum = 1;

		$kadi = $title;
		$kseo = $sef;

		$config['upload_path'] = FCPATH.'assets/front/img/altsayfa';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/altsayfa/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/altsayfa/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/altsayfa/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 1920;
			$config['height'] = 928;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();


		$data = array('sayfa_resmi'=>$resimkayit,'sayfa_adi'=>$title,'sayfa_seo'=>$sef,'kategori_id'=>$katID,'sayfa_kategori'=>$kategori,'katsef'=>$katsef,'icerik'=>$icerik,'sayfa_dili'=>$sayfadili,'durum'=>$durum);

		$sonuc = $this->dtbs->ekle('sayfalar',$data);

		if($katID == 4){
			$data2 = array('kategori_adi'=>$kadi,'seo'=>$kseo);
			$this->dtbs->ekle('katalog_kategori',$data2);
		}

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sayfa Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('panel/sayfalar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/sayfalar');
		}


		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Resim Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/sayfalar');
		}

	}

	public function sayfaset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('sayfalar',array('durum'=>$durum));
	}

	public function sayfaduzenle($id){

		$sonuc = $this->dtbs->cek('sayfalar',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/sayfalar/edit/anasayfa',$data);
	}

	public function sayfaduzenleme(){
		$id = $this->input->post('id');
		$durum = $this->input->post('durum');
		$title = $this->input->post('title');
		$sef = seflink($title);
		$katID = $this->input->post('katID');
		$veri = kategoriliste();
		foreach ($veri as $veri) {
			if ($veri["id"] == $katID) {
				$kategori = $veri["kategori_adi"];
			}
		}	
		$katsef = seflink($kategori);
		$icerik = $this->input->post('icerik');
		$sayfadili = $this->input->post('sayfadili');

		$config['upload_path'] = FCPATH.'assets/front/img/altsayfa';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/altsayfa/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/altsayfa/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/altsayfa/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 1920;
			$config['height'] = 928;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();

			$ssil = sayfaresim($id);
			unlink($ssil);


		$data = array('sayfa_resmi'=>$resimkayit,'sayfa_adi'=>$title,'sayfa_seo'=>$sef,'kategori_id'=>$katID,'sayfa_kategori'=>$kategori,'katsef'=>$katsef,'icerik'=>$icerik,'sayfa_dili'=>$sayfadili,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','sayfalar');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sayfa Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/sayfalar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/sayfalar');
		}


		}else{
			$data = array('sayfa_adi'=>$title,'sayfa_seo'=>$sef,'kategori_id'=>$katID,'sayfa_kategori'=>$kategori,'katsef'=>$katsef,'icerik'=>$icerik,'sayfa_dili'=>$sayfadili,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','sayfalar');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sayfa Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/sayfalar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/sayfalar');
		}
		}		
	}

	public function sayfasil($id,$where,$from){
		$ssil = sayfaresim($id);
		unlink($ssil);
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sayfa Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('panel/sayfalar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('panel/sayfalar');
		}

	}
	public function haberler(){
		$sonuc = $this->dtbs->listele('haberler');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/haberler/anasayfa',$data);
	}

	public function haberekle(){
		$this->load->view('panel/haberler/ekle/anasayfa');
	}

	public function haberekleme(){

		$title = $this->input->post('title');
		$sef = seflink($title);
		$katID = $this->input->post('katID');
		$veri = haberkategori();
		foreach ($veri as $veri) {
			if ($veri["id"] == $katID) {
				$kategori = $veri["kategori_adi"];
			}
		}		
		$katsef = seflink($kategori);
		$icerik = $this->input->post('icerik');
		$haberdili = $this->input->post('haberdili');
		$durum = 1;

		$config['upload_path'] = FCPATH.'assets/front/img/haber';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/haber/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/haber/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/haber/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 1024;
			$config['height'] = 728;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();


		$data = array('haber_resim'=>$resimkayit,'haber_adi'=>$title,'haber_sef'=>$sef,'kategori_id'=>$katID,'haber_kategori'=>$kategori,'katsef'=>$katsef,'icerik'=>$icerik,'haber_dili'=>$haberdili,'durum'=>$durum);

		$sonuc = $this->dtbs->ekle('haberler',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('panel/haberler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/haberler');
		}


		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Resim Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/haberler');
		}

	}

	public function haberset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('haberler',array('durum'=>$durum));
	}

	public function haberduzenle($id){

		$sonuc = $this->dtbs->cek('haberler',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/haberler/edit/anasayfa',$data);
	}

	public function haberduzenleme(){
		$id = $this->input->post('id');
		$durum = $this->input->post('durum');
		$title = $this->input->post('title');
		$sef = seflink($title);
		$katID = $this->input->post('katID');
		$veri = haberkategori();
		foreach ($veri as $veri) {
			if ($veri["id"] == $katID) {
				$kategori = $veri["kategori_adi"];
			}
		}		
		$katsef = seflink($kategori);
		$icerik = $this->input->post('icerik');
		$haberdili = $this->input->post('haberdili');

		$config['upload_path'] = FCPATH.'assets/front/img/haber';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/haber/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/haber/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/haber/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 1024;
			$config['height'] = 728;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();

			$hsil = haberresim($id);
			unlink($hsil);


		$data = array('haber_resim'=>$resimkayit,'haber_adi'=>$title,'haber_sef'=>$sef,'kategori_id'=>$katID,'haber_kategori'=>$kategori,'katsef'=>$katsef,'icerik'=>$icerik,'haber_dili'=>$haberdili,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','haberler');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/haberler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/haberler');
		}


		}else{
			$data = array('haber_adi'=>$title,'haber_sef'=>$sef,'kategori_id'=>$katID,'haber_kategori'=>$kategori,'katsef'=>$katsef,'icerik'=>$icerik,'haber_dili'=>$haberdili,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','haberler');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/haberler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/haberler');
		}
		}		
	}

	public function habersil($id,$where,$from){
		$hsil = haberresim($id);
		unlink($hsil);
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('panel/haberler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('panel/haberler');
		}

	}
	public function kataloglar(){
		$sonuc = $this->dtbs->listele('katalog');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/kataloglar/anasayfa',$data);
	}
	public function katalogekle(){
		$this->load->view('panel/kataloglar/ekle/anasayfa');
	}

	public function katalogekleme(){

		$title = $this->input->post('title');
		$sef = seflink($title);
		$katID = $this->input->post('katID');
		$veri = katalogkategori();
		foreach ($veri as $veri) {
			if ($veri["id"] == $katID) {
				$kategori = $veri["kategori_adi"];
			}
		}		
		$katsef = seflink($kategori);

		$config['upload_path'] = FCPATH.'assets/front/pdf/Kataloglar';
		$config['allowed_types'] = 'pdf|PDF';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('dosya')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/pdf/Kataloglar/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;


		$data = array('pdf'=>$resimkayit,'katolog_adi'=>$title,'seo'=>$sef,'kategori_id'=>$katID,'kategori_adi'=>$kategori,'katsef'=>$katsef);

		$sonuc = $this->dtbs->ekle('katalog',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Katalog Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('panel/kataloglar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/kataloglar');
		}


		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Katalog Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>'.$this->upload->display_errors());

	  		redirect('panel/kataloglar');
		}

	}

	public function katalogduzenle($id){

		$sonuc = $this->dtbs->cek('katalog',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/kataloglar/edit/anasayfa',$data);
	}

	public function katalogduzenleme(){
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$sef = seflink($title);
		$katID = $this->input->post('katID');
		$veri = katalogkategori();
		foreach ($veri as $veri) {
			if ($veri["id"] == $katID) {
				$kategori = $veri["kategori_adi"];
			}
		}		
		$katsef = seflink($kategori);

		$config['upload_path'] = FCPATH.'assets/front/pdf/Kataloglar';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('dosya')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/pdf/Kataloglar/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;


		$data = array('pdf'=>$resimkayit,'katolog_adi'=>$title,'seo'=>$sef,'kategori_id'=>$katID,'kategori_adi'=>$kategori,'katsef'=>$katsef);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','katalog');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Katalog Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/kataloglar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/kataloglar');
		}


		}else{
			$data = array('katalog_adi'=>$title,'seo'=>$sef,'kategori_id'=>$katID,'kategori_adi'=>$kategori,'katsef'=>$katsef,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','katalog');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Katalog Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/kataloglar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/kataloglar');
		}
		}		
	}

	public function katalogsil($id,$where,$from){
		$ssil = sayfaresim($id);
		unlink($ssil);
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Katalog Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('panel/kataloglar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('panel/kataloglar');
		}

	}
	public function slider(){
		$sonuc = $this->dtbs->listele('slider');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/slider/anasayfa',$data);
	}

	public function sliderekle(){
		$this->load->view('panel/slider/ekle/anasayfa');
	}

	public function sliderekleme(){

		$title = $this->input->post('title');
		$sef = seflink($title);
		$durum = 1;

		$config['upload_path'] = FCPATH.'assets/front/img/slider';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/slider/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/slider/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/slider/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 1920;
			$config['height'] = 880;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();


		$data = array('slider_resmi'=>$resimkayit,'slider_adi'=>$title,'slider_seo'=>$sef,'durum'=>$durum);

		$sonuc = $this->dtbs->ekle('slider',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Slider Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('panel/slider');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/slider');
		}


		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Resim Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/slider');
		}

	}

	public function sliderset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('slider',array('durum'=>$durum));
	}

	public function sliderduzenle($id){

		$sonuc = $this->dtbs->cek('slider',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/slider/edit/anasayfa',$data);
	}

	public function sliderduzenleme(){
		$id = $this->input->post('id');
		$durum = $this->input->post('durum');
		$title = $this->input->post('title');
		$sef = seflink($title);

		$config['upload_path'] = FCPATH.'assets/front/img/slider';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/slider/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/slider/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/slider/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 1920;
			$config['height'] = 880;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();

			$slsil = sliderresim($id);
			unlink($slsil);


		$data = array('slider_resmi'=>$resimkayit,'slider_adi'=>$title,'slider_seo'=>$sef,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','slider');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                slider Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/slider');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/slider');
		}


		}else{
			$data = array('slider_adi'=>$title,'slider_seo'=>$sef,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','slider');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                slider Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/sayfalar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/sayfalar');
		}
		}		
	}

	public function slidersil($id,$where,$from){
		$slsil = sliderresim($id);
		unlink($slsil);
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                slider Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('panel/slider');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('panel/slider');
		}

	}
	public function urunler(){
		$sonuc = $this->dtbs->listele('urunler');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/urunler/anasayfa',$data);
	}

	public function urunekle(){
		$this->load->view('panel/urunler/ekle/anasayfa');
	}

	public function urunekleme(){

		$title = $this->input->post('title');
		$sef = seflink($title);
		$katID = $this->input->post('katID');
		$veri = urunkategori();
		foreach ($veri as $veri) {
			if ($veri["id"] == $katID) {
				$kategori = $veri["kategori_adi"];
			}
		}		
		$katsef = seflink($kategori);
		$icerik = $this->input->post('icerik');
		$sayfadili = $this->input->post('urundili');
		$urunolcu = $this->input->post('urunolcu');
		$urunrengi = $this->input->post('urunrengi');
		$kulyeri = $this->input->post("kullanimyeri");
		$durum = 1;

		$config['upload_path'] = FCPATH.'assets/front/img/urun';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/urun/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/urun/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/urun/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 1200;
			$config['height'] = 1200;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();


		$data = array('urun_resim'=>$resimkayit,'urun_adi'=>$title,'urun_seo'=>$sef,'kategori_id'=>$katID,'urun_kategori'=>$kategori,'katsef'=>$katsef,'urun_aciklama'=>$icerik,'urun_dili'=>$sayfadili,'durum'=>$durum,'urun_olcu'=>$urunolcu,'urun_rengi'=>$urunrengi,'kullanim_yeri'=>$kulyeri);

		$sonuc = $this->dtbs->ekle('urunler',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Ürün Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('panel/urunler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/urunler');
		}


		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Resim Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/urunler');
		}

	}

	public function urunset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('urunler',array('durum'=>$durum));
	}

	public function urunduzenle($id){

		$sonuc = $this->dtbs->cek('urunler',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/urunler/edit/anasayfa',$data);
	}

	public function urunduzenleme(){
		$id = $this->input->post('id');
		$durum = $this->input->post('durum');
		$title = $this->input->post('title');
		$sef = seflink($title);
		$katID = $this->input->post("katID");
		$veri = urunkategori();
		foreach ($veri as $veri) {
			if ($veri["id"] == $katID) {
				$kategori = $veri["kategori_adi"];
			}
		}		
		$katsef = seflink($kategori);
		$icerik = $this->input->post('icerik');
		$sayfadili = $this->input->post('urundili');
		$urunolcu = $this->input->post('urunolcu');
		$urunrengi = $this->input->post('urunrengi');
		$kulyeri = $this->input->post("kullanimyeri");


		$config['upload_path'] = FCPATH.'assets/front/img/urun';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/urun/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/urun/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/urun/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 1200;
			$config['height'] = 1200;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();

			$usil = urunresim($id);
			unlink($usil);


		$data = array('urun_resim'=>$resimkayit,'urun_adi'=>$title,'urun_seo'=>$sef,'kategori_id'=>$katID,'urun_kategori'=>$kategori,'katsef'=>$katsef,'urun_aciklama'=>$icerik,'urun_dili'=>$sayfadili,'durum'=>$durum,'urun_olcu'=>$urunolcu,'urun_rengi'=>$urunrengi,'kullanim_yeri'=>$kulyeri);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','urunler');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Ürün Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/urunler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/urunler');
		}


		}else{
			$data = array('urun_adi'=>$title,'urun_seo'=>$sef,'kategori_id'=>$katID,'urun_kategori'=>$kategori,'katsef'=>$katsef,'urun_aciklama'=>$icerik,'urun_dili'=>$sayfadili,'durum'=>$durum,'urun_olcu'=>$urunolcu,'urun_rengi'=>$urunrengi,'kullanim_yeri'=>$kulyeri);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','urunler');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Ürün Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/urunler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/urunler');
		}
		}		
	}

	public function urunsil($id,$where,$from){
		$usil = urunresim($id);
		unlink($usil);
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Ürün Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('panel/urunler');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('panel/urunler');
		}

	}
	public function referanslar(){
		$sonuc = $this->dtbs->listele('referanslar');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/referanslar/anasayfa',$data);
	}

	public function referansekle(){
		$this->load->view('panel/referanslar/ekle/anasayfa');
	}

	public function referansekleme(){

		$title = $this->input->post('title');
		$sef = seflink($title);
		$refdil = $this->input->post("refdili");
		$durum = 1;

		$config['upload_path'] = FCPATH.'assets/front/img/referans';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/referans/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/referans/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/referans/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 920;
			$config['height'] = 728;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();


		$data = array('resim'=>$resimkayit,'referans_adi'=>$title,'ref_seo'=>$sef,'ref_dili'=>$refdil,'durum'=>$durum);

		$sonuc = $this->dtbs->ekle('referanslar',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Referans Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('panel/referanslar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/referanslar');
		}


		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Resim Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/referanslar');
		}

	}

	public function referansset(){
		$id = $this->input->post('id');
		$durum = ($this->input->post('durum') == "true") ? 1 : 0;
		$this->db->where('id',$id)->update('referanslar',array('durum'=>$durum));
	}

	public function referansduzenle($id){

		$sonuc = $this->dtbs->cek('referanslar',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/referanslar/edit/anasayfa',$data);
	}

	public function referansduzenleme(){
		$id = $this->input->post('id');
		$durum = $this->input->post('durum');
		$title = $this->input->post('title');
		$refdil = $this->input->post("refdili");
		$sef = seflink($title);

		$config['upload_path'] = FCPATH.'assets/front/img/referans';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('file')) {
			$resim = $this->upload->data();
			$resimyolu = $resim['file_name'];
			$resimkayit = 'assets/front/img/referans/'.$resimyolu.'';
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'assets/front/img/referans/'.$resimyolu.'';
			$config['new_image'] = 'assets/front/img/referans/'.$resimyolu.'';
			$config['create_thumb'] = false;
			$config['maintain_ratio'] = false;
			$config['quality'] = '90%';
			$config['width'] = 920;
			$config['height'] = 728;
			$this->load->library('image_lib',$config);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			$this->image_lib->clear();

			$rsil = referansresim($id);
			unlink($rsil);


		$data = array('resim'=>$resimkayit,'referans_adi'=>$title,'ref_seo'=>$sef,'ref_dili'=>$refdil,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','referanslar');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Referans Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/referanslar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/referanslar');
		}


		}else{
			$data = array('referans_adi'=>$title,'ref_seo'=>$sef,'ref_dili'=>$refdil,'durum'=>$durum);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','referanslar');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sayfa Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/referanslar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/referanslar');
		}
		}		
	}

	public function referanssil($id,$where,$from){
		$rsil = referansresim($id);
		unlink($rsil);
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Referans Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('panel/referanslar');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('panel/referanslar');
		}

	}
	public function urunkategori(){
		$sonuc = $this->dtbs->listele('urun_kategori');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/urunkategori/anasayfa',$data);
	}

	public function urunkategoriekle(){
		$this->load->view('panel/urunkategori/ekle/anasayfa');
	}

	public function urunkategoriekleme(){

		$title = $this->input->post('title');
		$sef = seflink($title);
		$dil = $this->input->post('urunkatdili');

		$data = array('kategori_adi'=>$title,'kategori_seo'=>$sef,'dil'=>$dil);

		$sonuc = $this->dtbs->ekle('urun_kategori',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Ürün Kategorisi Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('panel/urunkategori');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/urunkategori');
		}

	}
	public function urunkategoriduzenle($id){

		$sonuc = $this->dtbs->cek('urun_kategori',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/urunkategori/edit/anasayfa',$data);
	}
	public function urunkategoriduzenleme(){
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$sef = seflink($title);
		$dil = $this->input->post('urunkatdili');

		$data = array('kategori_adi'=>$title,'kategori_seo'=>$sef,'dil'=>$dil);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','urun_kategori');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Ürün Kategorisi Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/urunkategori');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/urunkategori');
		}
	}

	public function urunkategorisil($id,$where,$from){
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Ürün Kategorisi Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('panel/urunkategori');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('panel/urunkategori');
		}

	}
	public function haberkategori(){
		$sonuc = $this->dtbs->listele('haber_kategori');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/haberkategori/anasayfa',$data);
	}

	public function haberkategoriekle(){
		$this->load->view('panel/haberkategori/ekle/anasayfa');
	}

	public function haberkategoriekleme(){

		$title = $this->input->post('title');
		$sef = seflink($title);
		$dil = $this->input->post('haberkatdili');

		$data = array('kategori_adi'=>$title,'seo'=>$sef,'dil'=>$dil);

		$sonuc = $this->dtbs->ekle('haber_kategori',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Kategorisi Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('panel/haberkategori');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/haberkategori');
		}

	}
	public function haberkategoriduzenle($id){

		$sonuc = $this->dtbs->cek('haber_kategori',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/haberkategori/edit/anasayfa',$data);
	}
	public function haberkategoriduzenleme(){
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$sef = seflink($title);
		$dil = $this->input->post('haberkatdili');

		$data = array('kategori_adi'=>$title,'seo'=>$sef,'dil'=>$dil);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','haber_kategori');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Kategorisi Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/haberkategori');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/haberkategori');
		}
	}

	public function haberkategorisil($id,$where,$from){
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Haber Kategorisi Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('panel/haberkategori');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('panel/haberkategori');
		}

	}
	public function sayfakategori(){
		$sonuc = $this->dtbs->listele('sayfa_kategori');
		$data['bilgi'] = $sonuc;
		$this->load->view('panel/sayfakategori/anasayfa',$data);
	}

	public function sayfakategoriekle(){
		$this->load->view('panel/sayfakategori/ekle/anasayfa');
	}

	public function sayfakategoriekleme(){

		$title = $this->input->post('title');
		$sef = seflink($title);
		$dil = $this->input->post('sayfakatdili');

		$data = array('kategori_adi'=>$title,'seo'=>$sef,'dil'=>$dil);

		$sonuc = $this->dtbs->ekle('sayfa_kategori',$data);

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sayfa Kategorisi Başarıyla Eklendi...
              </div>
	  		</div>');

	  		redirect('panel/sayfakategori');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Ekleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/sayfakategori');
		}

	}
	public function sayfakategoriduzenle($id){

		$sonuc = $this->dtbs->cek('sayfa_kategori',$id);

		$data['bilgi'] = $sonuc;

		$this->load->view('panel/sayfakategori/edit/anasayfa',$data);
	}
	public function sayfakategoriduzenleme(){
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$sef = seflink($title);
		$dil = $this->input->post('sayfakatdili');

		$data = array('kategori_adi'=>$title,'seo'=>$sef,'dil'=>$dil);

		$sonuc = $this->dtbs->guncelle($data,$id,'id','sayfa_kategori');

		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sayfa Kategorisi Başarıyla Güncellendi...
              </div>
	  		</div>');

	  		redirect('panel/sayfakategori');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Güncelleme İşlemi Yapılamadı !!!
              </div>
	  		</div>');

	  		redirect('panel/sayfakategori');
		}
	}

	public function sayfakategorisil($id,$where,$from){
		$sonuc = $this->dtbs->sil($id,$where,$from);
		if ($sonuc) {
			$this->session->set_flashdata('durum','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!!</h4>
                Sayfa Kategorisi Başarıyla Silindi...
              </div>
	  		</div>');
	  		redirect('panel/sayfakategori');
		}else{
			$this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                Silme İşlemi Yapılamadı !!!
              </div>
	  		</div>');
	  		redirect('panel/sayfakategori');
		}

	}

}