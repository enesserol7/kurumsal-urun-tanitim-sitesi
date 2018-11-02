<?php
/**
 * @param $str
 * @param array $options
 * @return string
 */
function seflink($str, $options = array())
{
    $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
    $defaults = array(
        'delimiter' => '-',
        'limit' => null,
        'lowercase' => true,
        'replacements' => array(),
        'transliterate' => true
    );
    $options = array_merge($defaults, $options);
    $char_map = array(
        // Latin
        'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
        'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
        'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
        'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
        'ß' => 'ss',
        'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
        'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
        'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
        'ÿ' => 'y',
        // Latin symbols
        '©' => '(c)',
        // Greek
        'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
        'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
        'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
        'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
        'Ϋ' => 'Y',
        'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
        'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
        'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
        'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
        'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
        // Turkish
        'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
        'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
        // Russian
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
        'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
        'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
        'Я' => 'Ya',
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
        'я' => 'ya',
        // Ukrainian
        'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
        'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
        // Czech
        'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
        'Ž' => 'Z',
        'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
        'ž' => 'z',
        // Polish
        'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
        'Ż' => 'Z',
        'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
        'ż' => 'z',
        // Latvian
        'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
        'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
        'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
        'š' => 's', 'ū' => 'u', 'ž' => 'z'
    );
    $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
    if ($options['transliterate']) {
        $str = str_replace(array_keys($char_map), $char_map, $str);
    }
    $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
    $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
    $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
    $str = trim($str, $options['delimiter']);
    return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
}
	function siteayarlari(){
	    $ci =& get_instance();
	    $sonuc = $ci->db->select('*')->from('site_ayarlari')->get()->result_array();
	    return $sonuc;
	}
	function kategoriliste(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('sayfa_kategori')->order_by('id','asc')->get()->result_array();
        return $sonuc;
    }
    function katalogkategori(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('katalog_kategori')->order_by('id','asc')->get()->result_array();
        return $sonuc;
    }
    function haberkategori(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haber_kategori')->order_by('id','asc')->get()->result_array();
        return $sonuc;
    }
    function urunkategori(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('urun_kategori')->order_by('id','asc')->get()->result_array();
        return $sonuc;
    }
    function sayfaresim($id){
        $ci =& get_instance();
        $sonuc = $ci->db->from('sayfalar')->where('id',$id)->get()->row();
        return $sonuc->sayfa_resmi;
    }
    function katalogresim($id){
        $ci =& get_instance();
        $sonuc = $ci->db->from('katalog')->where('id',$id)->get()->row();
        return $sonuc->pdf;
    }
    function haberresim($id){
        $ci =& get_instance();
        $sonuc = $ci->db->from('haberler')->where('id',$id)->get()->row();
        return $sonuc->haber_resim;
    }
    function sliderresim($id){
        $ci =& get_instance();
        $sonuc = $ci->db->from('slider')->where('id',$id)->get()->row();
        return $sonuc->slider_resmi;
    }
    function urunresim($id){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('id',$id)->get()->row();
        return $sonuc->urun_resim;
    }
    function referansresim($id){
        $ci =& get_instance();
        $sonuc = $ci->db->from('referanslar')->where('id',$id)->get()->row();
        return $sonuc->resim;
    }
    function habertmb($id){
        $ci =& get_instance();
        $sonuc = $ci->db->select('tmb')->from('haberler')->where('id',$id)->get()->row();
        return $sonuc->tmb;
    }
    function habermini($id){
        $ci =& get_instance();
        $sonuc = $ci->db->select('mini')->from('haberler')->where('id',$id)->get()->row();
        return $sonuc->mini;
    }
    function sayfalar($id,$dil){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('sayfalar')->where('kategori_id',$id)->where('sayfa_dili',$dil)->get()->result_array();
        return $sonuc;
    }
    function karokatalog($id){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('katalog')->where('kategori_id',$id)->get()->result_array();
        return $sonuc;
    }
    function sertifikakatalog($id){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('katalog')->where('kategori_id',$id)->get()->result_array();
        return $sonuc;
    }
    function banyokatalog($id){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('katalog')->where('kategori_id',$id)->get()->result_array();
        return $sonuc;
    }
    function kurumsalkatalog($id){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('katalog')->where('kategori_id',$id)->get()->result_array();
        return $sonuc;
    }
    function katalogcek(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('katalog')->get()->result_array();
        return $sonuc;
    }
    function slidercek(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('slider')->get()->result_array();
        return $sonuc;
    }
    function urundetayi($sef){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('durum','1')->where('katsef',$sef)->get()->row();
        return $sonuc->urun_kategori;
    }
    function urungetir($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('durum','1')->where('urun_dili',$dil)->order_by('rand()')->limit('1')->get()->result_array();
        return $sonuc;
    }
    function urungetir2($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('durum','1')->where('urun_dili',$dil)->order_by('rand()')->limit('1')->get()->result_array();
        return $sonuc;
    }
    function urungetir3($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('durum','1')->where('urun_dili',$dil)->order_by('rand()')->limit('1')->get()->result_array();
        return $sonuc;
    }
    function urungetir4($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('durum','1')->where('urun_dili',$dil)->order_by('rand()')->limit('1')->get()->result_array();
        return $sonuc;
    }
    function urungetir5($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('durum','1')->where('urun_dili',$dil)->order_by('rand()')->limit('1')->get()->result_array();
        return $sonuc;
    }
    function urungetir6($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('durum','1')->where('urun_dili',$dil)->order_by('rand()')->limit('1')->get()->result_array();
        return $sonuc;
    }
    function urungetir7($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('durum','1')->where('urun_dili',$dil)->order_by('rand()')->limit('1')->get()->result_array();
        return $sonuc;
    }
    function urungetir8($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('durum','1')->where('urun_dili',$dil)->order_by('rand()')->limit('1')->get()->result_array();
        return $sonuc;
    }
    function urungetir9($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->from('urunler')->where('durum','1')->where('urun_dili',$dil)->order_by('rand()')->limit('1')->get()->result_array();
        return $sonuc;
    }
    function urunrenk($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->select('urun_rengi','DISTINCT')->from('urunler')->group_by('urun_rengi')->where('durum','1')->where('urun_dili',$dil)->order_by('urun_rengi','asc')->get()->result_array();
        return $sonuc;
    }
    function urunolcu($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->select('urun_olcu','DISTINCT')->from('urunler')->group_by('urun_olcu')->where('durum','1')->where('urun_dili',$dil)->order_by('urun_olcu','asc')->get()->result_array();
        return $sonuc;
    }
    function urunadi($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('urunler')->where('durum','1')->where('urun_dili',$dil)->order_by('urun_adi','asc')->get()->result_array();
        return $sonuc;
    }
    function urunkullanimyeri($dil){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('urun_kullanim_yeri')->where('dil',$dil)->order_by('kullanim_yeri','asc')->get()->result_array();
        return $sonuc;
    }
    function urunkullanimyer(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('urun_kullanim_yeri')->order_by('kullanim_yeri','asc')->get()->result_array();
        return $sonuc;
    }
    function habergetir(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->order_by('rand()')->limit('5')->get()->result_array();
        return $sonuc;
    }
    function referansgetir(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('referanslar')->order_by('rand()')->limit('9')->get()->result_array();
        return $sonuc;
    }
    function enhabergetir(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('haberler')->where('haber_dili','EN')->order_by('rand()')->limit('5')->get()->result_array();
        return $sonuc;
    }
    function enreferansgetir(){
        $ci =& get_instance();
        $sonuc = $ci->db->select('*')->from('referanslar')->where('ref_dili','EN')->order_by('rand()')->limit('9')->get()->result_array();
        return $sonuc;
    }
    function yoneticigetir($email){
        $ci =& get_instance();
        $sonuc = $ci->db->from('yonetici')->where('email',$email)->get()->result_array();
        return $sonuc;
    }
?>