<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dtbs extends CI_Model{
	function Kontrol($email,$sifre){
		$sonuc = $this->db->select('*')->from('yonetici')->where('email',$email)->where('sifre',md5($sifre))->get()->row();
		return $sonuc;
	}
	function listele($from){
		$sonuc = $this->db->select('*')->from($from)->order_by('id','desc')->get()->result_array();
		return $sonuc;
	}
	function cek($from,$id){
		$sonuc = $this->db->select('*')->from($from)->where('id',$id)->get()->row_array();
		return $sonuc;
	}
	function guncelle($data = array(),$id,$where,$from){
		$sonuc = $this->db->where($where,$id)->update($from,$data);
		return $sonuc;
	}
	function ekle($from,$data = array()){
		$sonuc = $this->db->insert($from,$data);
		return $sonuc;
	}
	function sil($id,$where,$from){
		$sonuc = $this->db->delete($from,array($where=>$id));
		return $sonuc;
	}
	function sayfadetay($sef){
		$sonuc = $this->db->select('*')->from('sayfalar')->where('durum','1')->where('sayfa_seo',$sef)->get()->row_array();
		return $sonuc;
	}
	function sayfadetayi($sef){
		$sonuc = $this->db->select('*')->from('katalog')->where('katsef',$sef)->get()->row_array();
		return $sonuc;
	}
	function sayfadetayim($sef){
		$sonuc = $this->db->select('*')->from('urunler')->where('katsef',$sef)->get()->row_array();
		return $sonuc;
	}
	function medyadetay($sef){
		$sonuc = $this->db->select('*')->from('haberler')->where('durum','1')->where('haber_sef',$sef)->get()->row_array();
		return $sonuc;
	}
	function urundetay($sef){
		$sonuc = $this->db->select('*')->from('urunler')->where('durum','1')->where('urun_seo',$sef)->get()->row_array();
		return $sonuc;
	}
	function listeler($from,$sef){
		$sonuc = $this->db->select('*')->from($from)->where("katsef",$sef)->get()->result_array();
		return $sonuc;
	}
}
?>