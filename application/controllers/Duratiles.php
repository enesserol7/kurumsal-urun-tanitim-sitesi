<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Duratiles extends CI_Controller {

	public function index()
	{
		$this->load->view('front/index');
	}
	public function enindex(){
		$this->load->view("front/enindex");
	}
	public function kurumsal($sef){
		$sonuc = $this->dtbs->sayfadetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view("front/kurumsal/sayfa",$data);
	}
	public function medya($sef){
		$sonuc = $this->dtbs->listeler("haberler",$sef);
		$viewData = new stdclass();
		$viewData->bilgi = $sonuc;
		$this->load->view("front/medya/sayfa",$viewData);
	}
	public function sayfadetay($sef){
		$sonuc = $this->dtbs->medyadetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view("front/medya/sayfadetay",$data);
	}
	public function referanslar($sef){
		$sonuc = $this->dtbs->sayfadetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view("front/referanslar/sayfadetay",$data);
	}
	public function ibilgi(){
		$this->load->view("front/iletisim/ibsayfa");
	}
	public function katalog($sef){
		$sonuc = $this->dtbs->listeler("katalog",$sef);
		$viewData = new stdclass();
		$viewData->bilgi = $sonuc;
		$this->load->view("front/katalog/katalog",$viewData);
	}
	public function urunler($sef){
		$urlim = $this->uri->segment(2);
		$data['sonuc'] = $urlim;
		$query = "select * from urunler where durum = '1' and katsef = '$urlim'";
		$colour="";
		$brand="";
		$size="";
		$colour = isset($_REQUEST['colour'])?$_REQUEST['colour']:"";
		$brand = isset($_REQUEST['brand'])?$_REQUEST['brand']:"";
		$size = isset($_REQUEST['size'])?$_REQUEST['size']:"";
		$kulyeri = isset($_REQUEST['kulyeri'])?$_REQUEST['kulyeri']:"";         
                   //filter query start 
        if(!empty($colour)){
            $colordata =implode("','",$colour);
            $query  .= " and urun_rengi in('$colordata')"; 
            $data["colordata"] = $colordata;
        }
  
        if(!empty($brand)){
            $branddata =implode("','",$brand);
            $query  .= " and urun_adi in('$branddata')"; 
            $data["branddata"] = $branddata;
        }
                     
        if(!empty($size)){
            $sizedata =implode("','",$size);
            $query  .= " and urun_olcu in('$sizedata')"; 
            $data["sizedata"] = $sizedata;
        }

        if(!empty($kulyeri)){
            $kulyeridata =implode("','",$kulyeri);
            $query  .= " and kulyeri_sef in('$kulyeridata')"; 
            $data["kulyeridata"] = $kulyeridata;
        }		 
		$data["query"] = $query;
		
		//$sonuc = $this->dtbs->listeler("urunler",$sef);
		//$data['bilgi'] = $sonuc;
		$this->load->view("front/urunler/urunler",$data);
	}
	
	public function urunlerliste($sef){
		$urlim = $this->uri->segment(2);
		$data['sonuc'] = $urlim;
		$query = "select * from urunler where durum = '1'";
		$colour="";
		$brand="";
		$size="";
		$colour = isset($_REQUEST['colour'])?$_REQUEST['colour']:"";
		$brand = isset($_REQUEST['brand'])?$_REQUEST['brand']:"";
		$size = isset($_REQUEST['size'])?$_REQUEST['size']:"";
		$kulyeri = isset($_REQUEST['kulyeri'])?$_REQUEST['kulyeri']:"";         
                   //filter query start 
        if(!empty($colour)){
            $colordata =implode("','",$colour);
            $query  .= " and urun_rengi in('$colordata')"; 
            $data["colordata"] = $colordata;
        }
  
        if(!empty($brand)){
            $branddata =implode("','",$brand);
            $query  .= " and urun_adi in('$branddata')"; 
            $data["branddata"] = $branddata;
        }
                     
        if(!empty($size)){
            $sizedata =implode("','",$size);
            $query  .= " and urun_olcu in('$sizedata')"; 
            $data["sizedata"] = $sizedata;
        }

        if(!empty($kulyeri)){
            $kulyeridata =implode("','",$kulyeri);
            $query  .= " and kulyeri_sef in('$kulyeridata')"; 
            $data["kulyeridata"] = $kulyeridata;
        }		 
		$data["query"] = $query;
		
		//$sonuc = $this->dtbs->listeler("urunler",$sef);
		//$data['bilgi'] = $sonuc;
		
		$list = $this->load->view("front/urunler/urun",$data);
	}
	public function urundetay($sef){
		$sonuc = $this->dtbs->urundetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view("front/urunler/urundetay",$data);
	}
	public function enibilgi(){
		$this->load->view("front/eniletisim/ibsayfa");
	}
	public function enkurumsal($sef){
		$sonuc = $this->dtbs->sayfadetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view("front/enkurumsal/sayfa",$data);
	}
	public function enmedya($sef){
		$sonuc = $this->dtbs->listeler("haberler",$sef);
		$viewData = new stdclass();
		$viewData->bilgi = $sonuc;
		$this->load->view("front/enmedya/sayfa",$viewData);
	}
	public function ensayfadetay($sef){
		$sonuc = $this->dtbs->medyadetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view("front/enmedya/sayfadetay",$data);
	}
	public function enreferanslar($sef){
		$sonuc = $this->dtbs->sayfadetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view("front/enreferanslar/sayfadetay",$data);
	}
	public function enkatalog($sef){
		$sonuc = $this->dtbs->listeler("katalog",$sef);
		$viewData = new stdclass();
		$viewData->bilgi = $sonuc;
		$this->load->view("front/enkatalog/katalog",$viewData);
	}
	public function enurunler($sef){
		$urlim = $this->uri->segment(2);
		$data['sonuc'] = $urlim;
		$sonuc = $this->dtbs->listeler("urunler",$sef);
		$data['bilgi'] = $sonuc;
		$this->load->view("front/enurunler/urunler",$data);
	}
	public function enurundetay($sef){
		$sonuc = $this->dtbs->urundetay($sef);
		$data['bilgi'] = $sonuc;
		$this->load->view("front/enurunler/urundetay",$data);
	}
}
