-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Kas 2018, 00:25:17
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `duratiles`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(11) NOT NULL,
  `haber_adi` varchar(255) NOT NULL,
  `haber_sef` varchar(300) NOT NULL,
  `icerik` longtext NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `haber_kategori` varchar(255) NOT NULL,
  `katsef` varchar(255) NOT NULL,
  `durum` tinyint(4) NOT NULL,
  `haber_resim` varchar(255) NOT NULL,
  `haber_dili` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `haber_adi`, `haber_sef`, `icerik`, `kategori_id`, `haber_kategori`, `katsef`, `durum`, `haber_resim`, `haber_dili`) VALUES
(2, 'AKGÜN ŞİRKETLER GRUBU 40. ULUSLARARASI YAPI FUARI\'NA KATILDI', 'akgun-sirketler-grubu-40-uluslararasi-yapi-fuari-na-katildi', '<p>Yapı-End&uuml;stri Merkezi tarafından bu sene 40.sı d&uuml;zenlenen Uluslararası Yapı Fuarı&rsquo;nda Akg&uuml;n Şirketler Grubu ziyaret&ccedil;ileri ile buluştu. Bu sene 23 -27 Mayıs tarihleri arasında 40.sı ger&ccedil;ekleştirilen Uluslararası Yapı Fuarı İstanbul&#39;da yenilik&ccedil;i pazarlama yaklaşımı ve s&uuml;rd&uuml;r&uuml;lebilirlik odaklı &ccedil;alışmalarıyla geliştirdiği &uuml;r&uuml;nleriyle t&uuml;m dikkatleri &uuml;zerine &ccedil;ekti. Yapı sekt&ouml;r&uuml;n&uuml;n t&uuml;m temsilcilerini bir araya getiren fuarda, Akg&uuml;n Şirketler Grubu kendi &uuml;r&uuml;nleriyle tasarlanmış, farklı ve fonksiyonel standıyla fuarda b&uuml;y&uuml;k ilgi topladı.</p>\r\n', 1, 'Bizden Haberler', 'bizden-haberler', 1, 'assets/front/img/haber/ae395f50b8fcbd8e5ede1be2c43932b5.jpg', 'TR'),
(3, 'AKGÜN SERAMİK 2017 UNICERA FUARI\'NDA', 'akgun-seramik-2017-unicera-fuari-nda', '<p>Akg&uuml;n Seramik, CNR EXPO Fuar ve Kongre merkezinde 8-12 Mart 2017 tarihleri arasında d&uuml;zenlenen UNICERA Uluslararası Seramik Banyo Mutfak Fuarı&#39;nda yeni teknolojilerle hazırladığı &uuml;r&uuml;nlerini sergiledi. Seramik sekt&ouml;r&uuml;n&uuml;n t&uuml;m temsilcilerini bir araya getiren fuarda, Akg&uuml;n Şirketler Grubu kendi &uuml;r&uuml;nleriyle tasarlanmış, farklı ve fonksiyonel standıyla fuarda b&uuml;y&uuml;k ilgi topladı.</p>\r\n', 1, 'Bizden Haberler', 'bizden-haberler', 1, 'assets/front/img/haber/31de0f6343dfa2209a01ac033cf3bd5f.jpg', 'TR'),
(4, 'Bloomberg Çıkış Yolu', 'bloomberg-cikis-yolu', '<p><a href="https://www.youtube.com/watch?v=yko4UeVOKGM" target="_blank">https://www.youtube.com/watch?v=yko4UeVOKGM</a></p>\r\n', 2, 'Basında Duratiles', 'basinda-duratiles', 1, 'assets/front/img/haber/1f958d76264b221a566bafe6eae2c003.jpg', 'TR'),
(5, 'Akgün Seramik\'e Avrupa Kalite Ödülü', 'akgun-seramik-e-avrupa-kalite-odulu', '<p><a href="https://www.sabah.com.tr/ekonomi/2011/12/17/akgun-seramike-avrupa-kalite-odulu" target="_blank">https://www.sabah.com.tr/ekonomi/2011/12/17/akgun-seramike-avrupa-kalite-odulu</a></p>\r\n', 2, 'Basında Duratiles', 'basinda-duratiles', 1, 'assets/front/img/haber/3d43ef906aa0457dc504881fe7f85386.jpg', 'TR'),
(6, '2018 Unicera Fuarı', '2018-unicera-fuari', '', 3, 'Sanal Gezinti', 'sanal-gezinti', 1, 'assets/front/img/haber/c61f1766e68f4a61a3269f42afdb0288.jpg', 'TR'),
(7, '2017 Uluslararası Yapı Fuarı', '2017-uluslararasi-yapi-fuari', '', 3, 'Sanal Gezinti', 'sanal-gezinti', 1, 'assets/front/img/haber/069754ee0794257a1249897fcc854ab9.jpg', 'TR'),
(8, 'English News 1', 'english-news-1', '<p>English News 1</p>\r\n', 5, 'English Page 5', 'english-page-5', 1, 'assets/front/img/haber/d9f966086c1f03d092aa283e84c82e39.jpg', 'EN'),
(9, 'English News 2', 'english-news-2', '<p>English News 2</p>\r\n', 5, 'English Page 5', 'english-page-5', 1, 'assets/front/img/haber/b67dc15982ac61981d100c568cb95077.jpg', 'EN'),
(10, 'English News 3', 'english-news-3', '<p>English News 3</p>\r\n', 4, 'English Page 6', 'english-page-6', 1, 'assets/front/img/haber/d7b0e5207b70d396b678b31966bc7ce4.jpg', 'EN'),
(11, 'English News 4', 'english-news-4', '<p>English News 4</p>\r\n', 4, 'English Page 6', 'english-page-6', 1, 'assets/front/img/haber/51ad4a488e5afaae57d42587fff788e1.png', 'EN');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haber_kategori`
--

CREATE TABLE `haber_kategori` (
  `id` int(11) NOT NULL,
  `kategori_adi` varchar(25) NOT NULL,
  `seo` varchar(255) NOT NULL,
  `dil` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `haber_kategori`
--

INSERT INTO `haber_kategori` (`id`, `kategori_adi`, `seo`, `dil`) VALUES
(1, 'Bizden Haberler', 'bizden-haberler', 'TR'),
(2, 'Basında Duratiles', 'basinda-duratiles', 'TR'),
(3, 'Sanal Gezinti', 'sanal-gezinti', 'TR'),
(4, 'English Page 6', 'english-page-6', 'EN'),
(5, 'English Page 5', 'english-page-5', 'EN');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `katolog_adi` varchar(255) NOT NULL,
  `seo` varchar(255) NOT NULL,
  `kategori_adi` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `katsef` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `katalog`
--

INSERT INTO `katalog` (`id`, `katolog_adi`, `seo`, `kategori_adi`, `kategori_id`, `pdf`, `katsef`) VALUES
(1, 'DENEME', 'deneme', 'Karo Seramik Katalogları', 1, 'assets/front/pdf/Kataloglar/e7221667d9c93f4070f070332a5a6cf4.pdf', 'karo-seramik-kataloglari'),
(2, 'deneme2', 'deneme2', 'Sertifikalar', 2, 'assets/front/pdf/Kataloglar/7e5326f91608159f1091881052f47d20.pdf', 'sertifikalar'),
(3, 'deneme3', 'deneme3', 'Banyo Katalogları', 3, 'assets/front/pdf/Kataloglar/edae3f647e189dbe1b729e50e5154774.pdf', 'banyo-kataloglari'),
(4, 'deneme4', 'deneme4', 'Kurumsal Kataloglar', 4, 'assets/front/pdf/Kataloglar/75407cf1abefa5377c0b098c1a0e756d.pdf', 'kurumsal-kataloglar'),
(5, 'Karo Seramik', 'karo-seramik', 'Karo Seramik Katalogları', 1, 'assets/front/pdf/Kataloglar/b8c6955b6c9b79f159fc0815e295cffe.pdf', 'karo-seramik-kataloglari'),
(6, 'Karo Seramik 2', 'karo-seramik-2', 'Karo Seramik Katalogları', 1, 'assets/front/pdf/Kataloglar/dc7b9baa807ed56963ea471e7f23bf6b.pdf', 'karo-seramik-kataloglari'),
(7, 'English Catalog 1', 'english-catalog-1', 'English Page 7', 5, 'assets/front/pdf/Kataloglar/21302a0a5dd188df99bd9a57b3f27bc6.pdf', 'english-page-7'),
(8, 'English Catalog 2', 'english-catalog-2', 'English Page 7', 5, 'assets/front/pdf/Kataloglar/73e4e53b05c75f290caf6ba47f89cec2.pdf', 'english-page-7'),
(9, 'English Catalog 3', 'english-catalog-3', 'English Page 8', 6, 'assets/front/pdf/Kataloglar/fd84e71090b109b97840d8bb0fd5a889.pdf', 'english-page-8'),
(10, 'English Catalog 4', 'english-catalog-4', 'English Page 8', 6, 'assets/front/pdf/Kataloglar/6a852ca45e3a09b15fface191c5d5633.pdf', 'english-page-8'),
(11, 'deneme 4', 'deneme-4', 'Karo Seramik Katalogları', 1, 'assets/front/pdf/Kataloglar/bcf412e888556857195ad4ef11cd4e8b.pdf', 'karo-seramik-kataloglari');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `katalog_kategori`
--

CREATE TABLE `katalog_kategori` (
  `id` int(11) NOT NULL,
  `kategori_adi` varchar(255) NOT NULL,
  `seo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `katalog_kategori`
--

INSERT INTO `katalog_kategori` (`id`, `kategori_adi`, `seo`) VALUES
(1, 'Karo Seramik Katalogları', 'karo-seramik-kataloglari'),
(2, 'Sertifikalar', 'sertifikalar'),
(3, 'Banyo Katalogları', 'banyo-kataloglari'),
(4, 'Kurumsal Kataloglar', 'kurumsal-kataloglar'),
(5, 'English Page 7', 'english-page-7'),
(6, 'English Page 8', 'english-page-8');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `id` int(11) NOT NULL,
  `referans_adi` varchar(255) NOT NULL,
  `resim` varchar(255) NOT NULL,
  `durum` tinyint(4) NOT NULL,
  `ref_seo` varchar(255) NOT NULL,
  `ref_dili` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`id`, `referans_adi`, `resim`, `durum`, `ref_seo`, `ref_dili`) VALUES
(1, 'Referans 1 deneme', 'assets/front/img/referans/c72e49059a0f863e4b8a2345d8f7d314.jpg', 1, 'referans-1-deneme', 'TR'),
(2, 'Referans 2 deneme', 'assets/front/img/referans/62eb6e3ad4c349f4bb334ab7090e66f0.jpg', 1, 'referans-2-deneme', 'TR'),
(3, 'Referans 3 deneme', 'assets/front/img/referans/89d4c066356cd31a712c97c408c8d3fc.jpg', 1, 'referans-3-deneme', 'TR'),
(4, 'Referans 4 deneme', 'assets/front/img/referans/fc0bd29ba651e0b711b26870e86706bd.jpg', 1, 'referans-4-deneme', 'TR'),
(5, 'Referans 5 deneme', 'assets/front/img/referans/c7e2dcead8c80eac4906ebbb42184be8.jpg', 1, 'referans-5-deneme', 'TR'),
(6, 'Referans 6 deneme', 'assets/front/img/referans/e0e929dbbec3f485daae4665cc08eea5.jpg', 1, 'referans-6-deneme', 'TR'),
(7, 'Referans 7 deneme', 'assets/front/img/referans/75ddf2132ab61adf60f40593147fa1f2.jpg', 1, 'referans-7-deneme', 'TR'),
(8, 'Referans 8 deneme', 'assets/front/img/referans/49f87ff9e2627cdc6f894af539320609.jpg', 1, 'referans-8-deneme', 'TR'),
(9, 'Referans 9 deneme', 'assets/front/img/referans/353ad352b24b8259d7e20aa2b92a380b.jpg', 1, 'referans-9-deneme', 'TR'),
(10, 'English References 1', 'assets/front/img/referans/ad75a972f6af3dd3daefe695c9d4058e.jpg', 1, 'english-references-1', 'EN'),
(13, 'English References 2', 'assets/front/img/referans/3bf4b86e2b5b68380ae378e33f8e3297.jpg', 1, 'english-references-2', 'EN'),
(12, 'English References 3', 'assets/front/img/referans/ed5eae215cb46af036d31f84f76cb328.jpg', 1, 'english-references-3', 'EN'),
(14, 'English References 4', 'assets/front/img/referans/2ce1377ae85690ec4b0eb65655f8410c.jpg', 1, 'english-references-4', 'EN'),
(15, 'English References 5', 'assets/front/img/referans/c0d99ab49016aefe9350371263ef030c.jpg', 1, 'english-references-5', 'EN'),
(16, 'English References 6', 'assets/front/img/referans/0664e4e42b536fcc6c65daee721db5cb.jpg', 1, 'english-references-6', 'EN'),
(17, 'English References 7', 'assets/front/img/referans/156a4d9a75181c92b8a96a09cd974b4a.jpg', 1, 'english-references-7', 'EN'),
(18, 'English References 8', 'assets/front/img/referans/71948fe82ff43bae90b87a8af4ef004d.jpg', 1, 'english-references-8', 'EN'),
(19, 'English References 9', 'assets/front/img/referans/8cdfef556f0ea8be081ae3129b3b799a.jpg', 1, 'english-references-9', 'EN');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(11) NOT NULL,
  `sayfa_adi` varchar(255) NOT NULL,
  `sayfa_seo` varchar(255) NOT NULL,
  `sayfa_resmi` varchar(255) NOT NULL,
  `icerik` longtext NOT NULL,
  `durum` tinyint(4) NOT NULL,
  `sayfa_dili` varchar(3) NOT NULL,
  `sayfa_kategori` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `katsef` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `sayfa_adi`, `sayfa_seo`, `sayfa_resmi`, `icerik`, `durum`, `sayfa_dili`, `sayfa_kategori`, `kategori_id`, `katsef`) VALUES
(11, 'Kalite', 'kalite', 'assets/front/img/altsayfa/8ff5274375e92bfa2604787884575e7b.jpg', '<p>Hammadde se&ccedil;imi ile başlayan Akg&uuml;n Seramik toplam kalite anlayışı, bilgisayar kontroll&uuml; teknolojisi ile &uuml;retim ve paketlemenin t&uuml;m aşamalarında devam eder. Konusunda uzman tasarım, &uuml;retim ve kalite kontrol ekibi ile &ccedil;izgisini daima en &uuml;st noktalarda tutmayı hedefler.</p>\r\n\r\n<p>Duratiles, ulusal standardımız olan ve aynı zamanda diğer &uuml;retici Avrupa &uuml;lkelerinin de kullandığı kalite değerlerini belirten TSE standardına uygun &uuml;retim yapmakta ve &uuml;r&uuml;nlerinin Avrupa Birliği &uuml;yesi &uuml;lkelerde satılabilmesi i&ccedil;in gerekli olan CE belgesine sahiptir.</p>\r\n', 1, 'TR', 'Kurumsal', 1, 'kurumsal'),
(12, 'Vizyon ve Misyon', 'vizyon-ve-misyon', 'assets/front/img/altsayfa/0ed257b03303b4029d386b9ab6bc3add.jpg', '<h2>MİSYONUMUZ</h2>\r\n\r\n<p>Hızlı, profesyonel, rekabet yaratacak uygun ve uygulanabilir, iş ortaklarımızın kalite ve karını arttırıcı yapı sekt&ouml;r&uuml;ne yeni &uuml;r&uuml;nleriyle &ccedil;&ouml;z&uuml;mler sunarak, bireyin ve mek&acirc;nların yaşam standartlarını artırmak ve mimari &ccedil;izgilerini geliştirmektir. Verimliliğin ve başarının kuşaklar boyu devamlılığını sağlamak i&ccedil;in se&ccedil;tiğimiz yol, s&uuml;rekli gelişmek i&ccedil;in Ar-Ge ve insan kaynakları yaratmak ve geliştirmektir.</p>\r\n\r\n<p>Bu doğrultuda Grup şirketlerinin her biri, kendi sekt&ouml;rlerinde ge&ccedil;erli y&uuml;ksek standartları kullanmaları ve geniş &uuml;r&uuml;n yelpazesi ve servis kaliteleriyle m&uuml;şteri taleplerini karşılamaları konusunda teşvik edilirler.</p>\r\n\r\n<h2>VİZYONUMUZ</h2>\r\n\r\n<p>Modern teknolojiler kullanarak y&uuml;ksek kalite ve standartlarda &uuml;retim yapan &ouml;nc&uuml; kuruluşlardan biri olarak, hizmet verdiğimiz t&uuml;m alanlarda yenilik&ccedil;i sistemlerimiz ve etik &ccedil;alışma anlayışımız ile global bir seramik &uuml;reticisi olmaktır. Beceri, bilgi ve tecr&uuml;beleriyle hem kaliteli &uuml;r&uuml;n hem de uygulama hizmetleri sunan, &ccedil;&ouml;z&uuml;m geliştirme ve sunmaya y&ouml;nelik pazar trendlerini belirleyen, partner firmalarına bu yolla değer yaratmayı ilke edinmiş, gelecekteki olası gelişmeleri araştıran, bunları &ouml;nceden belirleyerek gerekli değişiklikleri hızla uygulayan bir seramik &uuml;reticisi olarak hizmet sunmak.</p>\r\n\r\n<p>Akg&uuml;n Şirketler Grubu&rsquo;nun vizyonu &ldquo;yaptığı her şeyde m&uuml;kemmellik&rdquo; olarak &ouml;zetlenebilir.</p>\r\n\r\n<p>Bunun temelinde, birlikte olduğu &ccedil;alışanlarının y&uuml;ksek vasıflarına dayanan, s&uuml;rd&uuml;r&uuml;lebilir, uzun vadeli, b&uuml;y&uuml;yen hedeflerle kurgulanmış bir iş anlayışı yatmaktadır. Uzun yıllara dayanan tecr&uuml;besiyle ve b&uuml;y&uuml;me hedefleriyle, Akg&uuml;n Şirketler Grubu olarak bizler, 1925ten bu yana s&uuml;regelen sanayici ge&ccedil;mişimizle gurur duyuyor ve geleceğe g&uuml;venle bakıyoruz.</p>\r\n\r\n<h2>DEĞERLERİMİZ</h2>\r\n\r\n<p>&Uuml;st&uuml;n iş ahlakı ve d&uuml;r&uuml;st &ccedil;alışma ilkelerine uymak d&uuml;sturumuzdur. İyi niyet ve anlayışla davranmak, ahlak kuralları ve yasalara her zaman uymak ilkemizdir. T&uuml;m ilişkilerde &ldquo;g&uuml;ven&rdquo; esastır. &Ouml;nemli projelerde, bizimle ortaklık anlayışı i&ccedil;inde &ccedil;alışarak, bize g&uuml;ven duyan m&uuml;şterilere sahip olmakla gurur duyarız.</p>\r\n\r\n<p>M&uuml;şterilerimizle ve ortaklarımızla y&uuml;ksek g&uuml;vene dayalı bir ilişki kurmaktayız. Birlikte &ccedil;alıştığımız organizasyonlarla ve bireysel m&uuml;şterilerimizle, uzun d&ouml;nemli, karşılıklı fayda esasına dayalı ilişkilere inanmaktayız.</p>\r\n\r\n<p>D&uuml;r&uuml;stl&uuml;k, s&uuml;rd&uuml;r&uuml;lebilirlik ve &ccedil;eşitlilik, kişisel yaşamımızdaki ve iş yaşamımızdaki esas değerlerimizdir.</p>\r\n\r\n<h2>KAYNAKLARIMIZ</h2>\r\n\r\n<p>İnsan ve kalite odaklı &ccedil;alışma prensiplerimiz, g&uuml;ven duymaya ve g&uuml;venilir olmaya g&ouml;sterdiğimiz hassasiyet, şeffaflık ilkemiz ve y&uuml;ksek &ouml;zg&uuml;venli ve başarılı bir takım oluşumuzdur.</p>\r\n\r\n<p>Başarmak arzusu insanın sosyal bir varlık olmaya başladığı andan itibaren peşini bırakmaz. Okul yıllarında veya iş yaşamında bireyler kendilerine hedefler se&ccedil;erler. Aynı şekilde işletmeler de g&uuml;n&uuml;m&uuml;z&uuml;n ağır rekabet koşullarında var olmak, kar etmek ve gelişmek zorundadır. Bu nedenle işinizi şansa bırakmayın! Kurumların en &ouml;nemli sermayesi, insan kaynaklarıdır. Hizmet ve &uuml;r&uuml;nlerin kalitesi &ccedil;alışanların kalitesiyle başlar.</p>\r\n\r\n<p>Başarılı kurumlar, insan kaynağını ve iş g&uuml;c&uuml; yapısını; ortak bir d&uuml;nya pazarında, her g&uuml;n daha da artan rekabet koşullarıyla birlikte yaşamayı ve gelişmeyi sağlamak &uuml;zere oluşturmaktadır. Bu s&uuml;recin en &ouml;nemli koşulu &ldquo; hizmet ve &uuml;r&uuml;n kalitesidir&rdquo;. Rakipler arasında &ouml;ne &ccedil;ıkmanın ilk koşulu &ldquo;kaliteyi&rdquo; yakalamak ve bunu &ldquo; s&uuml;rd&uuml;r&uuml;lebilir&rdquo; hale getirmektir. Bunu işletmelere sağlayan şey nitelikli &ldquo; insan g&uuml;c&uuml;d&uuml;r &ldquo;.</p>\r\n\r\n<p>Kurum k&uuml;lt&uuml;r&uuml; yerleşmiş, iş ve sosyal yaşamında kendine g&uuml;venen, d&uuml;nya ile barışık, &ccedil;evresi ile iletişim kurabilen, saygın bireylerden oluşan &ccedil;alışanları ile uzun vadeli gelişim planlarını yapmış organizasyonlar, 21. y&uuml;zyılda her koşulda başarılı olacak, olumsuz şartlardan en az etkilenecek firmalar kurumlar olacaktır.</p>\r\n', 1, 'TR', 'Kurumsal', 1, 'kurumsal'),
(13, 'Akgün Group', 'akgun-group', 'assets/front/img/altsayfa/4b59fb1282f6e1a4df01ee4a70d96a53.jpg', '<p>&Uuml;retim, ihracat, istihdam rakamlarının b&uuml;y&uuml;kl&uuml;ğ&uuml; ve d&uuml;nya pazarlarındaki rekabet g&uuml;c&uuml;yle T&uuml;rkiye ekonomisinde &ccedil;ok &ouml;nemli bir yere sahip olan Akg&uuml;n Şirketler Grubu&rsquo;nu başarı &ouml;yk&uuml;s&uuml;n&uuml;n temellerini, 1925&rsquo;te S&uuml;leyman Akg&uuml;n atmıştır. 1975 yılında makineleşme yatırımını başlatan Veli Akg&uuml;n, Akg&uuml;n Tuğla Fabrikasını kurmuştur.</p>\r\n\r\n<p>2005 yılında Akg&uuml;n Şirketler Grubu&#39;nu T&uuml;rkiye&#39;nin en g&uuml;&ccedil;l&uuml; gruplarından biri yapmak i&ccedil;in bayrağı devralan Erhan Akg&uuml;n yapı malzemeler, otomotiv, sigorta, lojistik ve petrol alanında yatırımlar yaparak; &uuml;retim, ihracat ve istihdam alanında b&uuml;y&uuml;meği sağlamıştır.</p>\r\n\r\n<p>Bug&uuml;n Akg&uuml;n Şirketler Grubu, 4000 &ccedil;alışanı 13 fabrikası ile 45 &uuml;lkeye ihracat yapmaktadır. Amerika, Almanya, İngiltere, Hollanda, Bel&ccedil;ika, Yunanistan, Bulgaristan, komşu &uuml;lkeler, Afrika &uuml;lkeleri, Orta Doğu b&ouml;lgesi ihracat yaptığımız başlıca yerler arasındadır. Akg&uuml;n Şirketler Grubu, sahip olduğu saygınlık ve marka imajı ve T&uuml;rkiye piyasaları hakkındaki bilgi ve deneyimi sayesinde ana faaliyet alanlarında b&uuml;y&uuml;m&uuml;ş ve T&uuml;rkiye ekonomisinin gelişimine katkı sağlayan &ouml;nemli bir g&uuml;&ccedil; haline gelmiştir. Akg&uuml;n Şirketler Grubu şirketleri yapı malzemeleri, otomotiv, sigorta, lojistik ve petrol alanında faaliyet g&ouml;stermektedir.</p>\r\n', 1, 'TR', 'Kurumsal', 1, 'kurumsal'),
(14, 'Hakkımızda', 'hakkimizda', 'assets/front/img/altsayfa/733cd78b0f112fdff5ba73002fcc8a52.jpg', '<p>Duratiles hızla b&uuml;y&uuml;yen yapısı ile bug&uuml;n, teknik porselen seramik, sırlı porselen seramik, yer ve duvar karoları, dış cephe uygulama &ccedil;&ouml;z&uuml;m ortağı ve projelendirme ve &ouml;rnekleme &ndash; 3D &uuml;reten bir sanayi kuruluşudur.</p>\r\n\r\n<p>&Ccedil;ağdaş, yenilik&ccedil;i ve farklı beğenilere yanıt verebilecek koleksiyonlar hazırlayan Duratiles, &uuml;retim kalitesine paralel, g&uuml;n&uuml;nde teslimat ve istikrarlı fiyat politikası ile m&uuml;şterilerinde yarattığı g&uuml;venle birlikte gerek yurt i&ccedil;i gerekse yurt dışı m&uuml;şterilerinin sayısını her ge&ccedil;en g&uuml;n arttırmaktadır.</p>\r\n\r\n<p>Alanında en gelişmiş granit seramik teknolojisi ile kurulan modern ve &uuml;retim esnekliğine sahip Akg&uuml;n Seramik , 2004 yılı Temmuz ayından itibaren başlattığı kapasite artırımı yatırımları ile tessislerinde yıllık 10.800.000 m&sup2; mat ve parlak granit seramik karo &uuml;retimine başlamıştır. Bu &uuml;retim kapasitesi ile; sadece porselen seramik &uuml;reticeleri arasında bir d&uuml;nya markası olmayı hedefleyen Akg&uuml;n Seramik, T&uuml;rkiye&#39;de lider konumuna gelmiştir.</p>\r\n', 1, 'TR', 'Kurumsal', 1, 'kurumsal'),
(9, 'Çevre', 'cevre', 'assets/front/img/altsayfa/f827222e4b3be65d26972229a32ec0cd.jpg', '<p>Sosyal sorumluluklarının bilincinde, &uuml;lke ekonomisine katkıda bulunan, &ccedil;evreye ve insana &ouml;nem veren bir kuruluş olarak;</p>\r\n\r\n<ul>\r\n	<li>S&uuml;rekli gelişme ve iyileşme prensibini esas alarak, &ccedil;evreyle uyumlu, insan sağlığını &ouml;n plana &ccedil;ıkaran &uuml;r&uuml;n, &ccedil;&ouml;z&uuml;m ve faaliyetlerimizi planlamak &uuml;zere &ccedil;evre, sağlık ve g&uuml;venlik risklerini belirleyerek &ouml;nlemler geliştirme, tehlikeleri tamamen ortadan kaldıracak y&ouml;ntemleri uygulamak,</li>\r\n	<li>Ger&ccedil;ekleştirdiğimiz faaliyetler sırasında ortaya &ccedil;ıkan sağlık, g&uuml;venlik riskleri ve &ccedil;evre boyutlarıyla bağlantılı yasal sorumluluklarımızı yerine getirmek,</li>\r\n	<li>Geliştirme ve uygulama faaliyetlerimizi, oluşabilecek sağlık, g&uuml;venlik ve &ccedil;evresel riskleri &ouml;nleyecek şekilde planlamak,</li>\r\n	<li>S&uuml;rd&uuml;r&uuml;lebilir gelişmemizin bir g&ouml;stergesi olarak &ccedil;evre kirliliğinin azaltılmasını, enerji ve doğal kaynakların verimli kullanılmasını sağlamak,</li>\r\n	<li>&Ccedil;alışanların bireysel sağlıklarını koruyarak, &ccedil;alışma ve ortam şartlarını sağlıklı hale getirerek iş kazası ve meslek hastalıklarının oluşmasını &ouml;nlemek,</li>\r\n	<li>Tesislerimizde, şantiyelerimizde, projelerimizde g&ouml;rev yapan &ccedil;alışanlarımız ile tedarik&ccedil;ilerimizin &quot;&Ouml;nce İnsan Sağlığı, G&uuml;venliği ve &Ccedil;evre Koruma&quot; felsefesinden hareketle bilgi ve bilin&ccedil; d&uuml;zeylerini geliştirmek y&ouml;n&uuml;nde &ccedil;alışmalar yapmak,</li>\r\n	<li>&Uuml;r&uuml;n ve &ccedil;&ouml;z&uuml;mlerimize ait &ccedil;evre, sağlık ve g&uuml;venlikle ilgili bilgileri m&uuml;şterilerimize iletmek,</li>\r\n	<li>Resmi ve &ouml;zel kuruluşların faaliyetlerine katılıp destek vermek &Ccedil;evre ve İş Sağlığı</li>\r\n	<li>G&uuml;venliği Y&ouml;netim Sistemimizi geliştirecek ama&ccedil; ve hedeflerimizin belirlenmesinde temel olan unsurlardır.</li>\r\n</ul>\r\n\r\n<p>Bu g&uuml;ne kadar yaptıklarımız ve bundan sonra yapacaklarımız kamuoyunun bilgisine a&ccedil;ık olup, Toplam Kalite Y&ouml;netimi b&uuml;t&uuml;n&uuml; i&ccedil;erisinde, &ccedil;evre kalitesinin sağlanması,insan sağlığının korunması, g&uuml;venli &ccedil;alışma ortamlarının oluşturulması ve s&uuml;rd&uuml;r&uuml;lmesi AKG&Uuml;N SERAMİK SAN. ve TİC. A.Ş. &ccedil;alışanları olarak hepimizin temel g&ouml;revidir.</p>\r\n', 1, 'TR', 'Kurumsal', 1, 'kurumsal'),
(10, 'İnsan Kaynakları', 'insan-kaynaklari', 'assets/front/img/altsayfa/8c3ab95fcc5197284d0617466482f290.jpg', '<p>Duratiles, &ccedil;alışanları ile ortak hedef doğrultusunda hareket etmeyi ama&ccedil;layan, personeline sosyal ve iş g&uuml;venliği konusunda en uygun şartlarda &ccedil;alışma ortamı sunanmaktadır. &Ccedil;alışan elemanlarının performansına g&ouml;re &uuml;cretlendirme, kabiliyetlerine g&ouml;re kariyer ve sorumluluklarını arttıran yapısı ile gelişmeye a&ccedil;ık, dinamik bir insan kaynakları politikası y&uuml;r&uuml;tmektedir.</p>\r\n\r\n<p>İşe alımlarda herkese eşit fırsat tanımak, şirkete bağlılık g&ouml;sterecek ve işbirliği sağlayacak, Duratiles&#39;ı geleceğe taşıyacak etkin insan kaynaklarını istihdam etmek temel ilkemizdir. Bu nedenle; &ccedil;alışanlarımızı, kurumun değerlerini ve işin yetkinliklerini tam olarak karşılayacak adaylar arasından se&ccedil;eriz. Şirketimizde staj yapmış &ouml;ğrencilerimiz de potansiyel adaylarımızdır.</p>\r\n\r\n<p>Duratiles&rsquo;ta g&ouml;revine başlayan &ccedil;alışana oryantasyon eğitimi verilmesi işe alım s&uuml;recinin bir par&ccedil;asıdır. Oryantasyon eğitiminin hedefleri; işletmemizin genel iş akışını, kurum k&uuml;lt&uuml;r&uuml; ve y&ouml;netim sistemlerini anlatmak ve iş g&uuml;venliği ile ilgili konularda bilgilendirmek, adaptasyon s&uuml;recini hızlandırıp işe uyumunu sağlayarak işg&uuml;c&uuml; devir oranını azaltmaktır.</p>\r\n\r\n<p>İş başvurularınız i&ccedil;in, fabrikamızda şahsen form doldurabilir yada &ouml;zge&ccedil;mişinizi ik@duratiles.com adresine g&ouml;nderebilirsiniz.</p>\r\n', 1, 'TR', 'Kurumsal', 1, 'kurumsal'),
(15, 'Seramik Karo', 'seramik-karo', 'assets/front/img/altsayfa/074d9ca06a74242c4d1736523cda178c.jpg', '', 1, 'TR', 'Ürünler', 2, 'urunler'),
(16, 'Porselen Karo', 'porselen-karo', 'assets/front/img/altsayfa/2abe542ab4bfd62156fdd1e80866eea4.jpg', '', 1, 'TR', 'Ürünler', 2, 'urunler'),
(17, '20MM Karo', '20mm-karo', 'assets/front/img/altsayfa/538b3658836289b52499ae9915971da2.jpg', '', 1, 'TR', 'Ürünler', 2, 'urunler'),
(18, 'Bizden Haberler', 'bizden-haberler', 'assets/front/img/altsayfa/520f9c77a5a393fae9ff663e5a85fc31.jpg', '', 1, 'TR', 'Medya', 3, 'medya'),
(19, 'Basında Duratiles', 'basinda-duratiles', 'assets/front/img/altsayfa/32ed73dd5802a3befeafe6ef511deba4.jpg', '', 1, 'TR', 'Medya', 3, 'medya'),
(20, 'Sanal Gezinti', 'sanal-gezinti', 'assets/front/img/altsayfa/aa9ba0411894bef2cc60f0b709bd08fa.jpg', '', 1, 'TR', 'Medya', 3, 'medya'),
(21, 'Karo Seramik Katalogları', 'karo-seramik-kataloglari', 'assets/front/img/altsayfa/1f40e03087a2d8d6132ad962265e0724.jpg', '', 1, 'TR', 'Kataloglar', 4, 'kataloglar'),
(22, 'Sertifikalar', 'sertifikalar', 'assets/front/img/altsayfa/621dc3380c2e8f8823b6db9e7a8554b6.jpg', '', 1, 'TR', 'Kataloglar', 4, 'kataloglar'),
(23, 'Banyo Katalogları', 'banyo-kataloglari', 'assets/front/img/altsayfa/798fc389b3d4b01fbc904648c109e079.jpg', '', 1, 'TR', 'Kataloglar', 4, 'kataloglar'),
(24, 'Kurumsal Kataloglar', 'kurumsal-kataloglar', 'assets/front/img/altsayfa/1661607d06b73e1b79af224fd0244a46.jpg', '', 1, 'TR', 'Kalite', 4, 'kalite'),
(25, 'Resmi Kuruluşlar', 'resmi-kuruluslar', 'assets/front/img/altsayfa/ee1842f35f53d99787b947468e572886.jpg', '<ul>\r\n	<li>1.Ordu Selimiye Kışlası &ndash; İstanbul</li>\r\n	<li>8.Ana Jet &Uuml;ss&uuml; U&ccedil;ak Bakım Komutanlığı / Diyarbakır Ssk</li>\r\n	<li>Adıyaman H&uuml;k&uuml;met Konağı &ndash; Adıyaman</li>\r\n	<li>Afşin Adliye Sarayı &ndash; Kahramanmaraş</li>\r\n	<li>Akademik Odalar Birliği &ndash; Bursa</li>\r\n	<li>Akseki Adliye Sarayı &ndash; Antalya</li>\r\n	<li>Amasya Adliye Sarayı &ndash; Amasya</li>\r\n	<li>Batışehir - Ege Yapı</li>\r\n	<li>Bilkent Şehir Hastanesi</li>\r\n	<li>Dedeman Hotel</li>\r\n	<li>Dışişleri Bakanlığı Binası &ndash; Ankara</li>\r\n	<li>Diyarbakır K&uuml;lt&uuml;r Merkezi &ndash; Diyarbakır</li>\r\n	<li>Emniyet Sarayı &ndash; Sinop</li>\r\n	<li>Erzincan Adliye Sarayı &ndash; Erzincan</li>\r\n	<li>Harp Akademileri Komutanlığı &ndash; İstanbul</li>\r\n	<li>Hava Kuvvetleri Komutanlığı &ndash; Kızılay&ndash; Ankara</li>\r\n	<li>H&uuml;kumet Konağı İnşaatı &ndash; Şanlıurfa</li>\r\n	<li>İga Havalimanı</li>\r\n	<li>İller Bankası Binası &ndash; Ankara</li>\r\n	<li>İski Genel M&uuml;d&uuml;rl&uuml;ğ&uuml; &ndash; İstanbul</li>\r\n	<li>İstanbul Medipol &Uuml;niversitesi Kavacık Kamp&uuml;s&uuml;</li>\r\n	<li>İstanbul Metrosu</li>\r\n	<li>Kale Adliye Sarayı &ndash; Malatya</li>\r\n	<li>Karaman H&uuml;k&uuml;met Konağı &ndash; Karaman</li>\r\n	<li>Kartal Adliye Sarayı &ndash; İstanbul</li>\r\n	<li>Konya Adliye Sarayı &ndash; Konya</li>\r\n	<li>Korkuteli Adliye Sarayı &ndash; Antalya</li>\r\n	<li>L&uuml;tfi Kirdar Eğitim Ve Araştirma Hastanesi</li>\r\n	<li>Manisa Adliye Sarayı &ndash; Manisa</li>\r\n	<li>Menderes Adliye Sarayı&ndash; İzmir</li>\r\n	<li>Menemen Adliye Sarayı &ndash; İzmir</li>\r\n	<li>Mersin İl &Ouml;zel İdare Binası &ndash; İ&ccedil;el</li>\r\n	<li>Nazilli Adliye Sarayı &ndash; Aydın</li>\r\n	<li>Niksar Adliye Sarayı &ndash; Tokat</li>\r\n	<li>Rize Adliye Sarayı &ndash; Rize</li>\r\n	<li>Sağlık İşleri Genel M&uuml;d&uuml;rl&uuml;ğ&uuml; &ndash; Ankara</li>\r\n	<li>Sakarya H&uuml;k&uuml;met Konağı &ndash; Adapazarı</li>\r\n	<li>Sivil Savunma Arama Ve Kurtarma Birlik M&uuml;d&uuml;rl&uuml;ğ&uuml; &ndash; D.Bakır</li>\r\n	<li>Torbalı Adliye Sarayı &ndash; İzmir</li>\r\n	<li>T&uuml;bitak Ume Gebze Kamp&uuml;s&uuml; &ndash; Kocaeli</li>\r\n</ul>\r\n', 1, 'TR', 'Çevre', 5, 'cevre'),
(26, 'Öğretim Binaları', 'ogretim-binalari', 'assets/front/img/altsayfa/51074050b73d0e4496d9a2528fe21e50.jpg', '<ul>\r\n	<li>19 Mayıs &Uuml;ni.Kurupelit Kampus&uuml; Teknoloji Merkez &ndash; Samsun</li>\r\n	<li>Adıyaman &Uuml;niversitesi &ndash; Adıyaman</li>\r\n	<li>Anabilim Koleji &ndash; Ataşehir İstanbul</li>\r\n	<li>Ankara Polis Koleji &ndash; Ankara</li>\r\n	<li>Bağcılar End&uuml;stri Meslek Lisesi &ndash; G&uuml;neşli &ndash; İstanbul</li>\r\n	<li>Balıkesir &Uuml;niversitesi Rekt&ouml;rl&uuml;k Binası &ndash; Balıkesir</li>\r\n	<li>Batman &Uuml;niversitesi Fen Edebiyat Fak&uuml;ltesi &ndash; Batman</li>\r\n	<li>Bilgi &Uuml;niversitesi Kuştepe Kampus&uuml; &ndash; İstanbul</li>\r\n	<li>&Ccedil;imko İlk&ouml;ğretim Okulu&ndash; K.Maraş</li>\r\n	<li>Dumlupınar &Uuml;niversitesi &ndash; K&uuml;tahya</li>\r\n	<li>Ege &Uuml;niversitesi Fen Bilimleri Fak&uuml;ltesi &ndash; İzmir</li>\r\n	<li>Fen Lisesi &ndash; Adıyaman</li>\r\n	<li>Gazi Osman Paşa &Uuml;niversitesi Rekt&ouml;rl&uuml;ğ&uuml; &ndash; Tokat</li>\r\n	<li>Harran &Uuml;niversitesi &ndash; Şanlıurfa</li>\r\n	<li>Hisar Eğitim Vakfı Okulları &ndash; İstanbul</li>\r\n	<li>İ.&Uuml;. Eczacılık Fak&uuml;ltesi &ndash; İstanbul</li>\r\n	<li>İktisadi İdari Bilimler Fak&uuml;ltesi &ndash; Boyabat &ndash; Sinop</li>\r\n	<li>İstanbul &Uuml;ni. İktisat Fak&uuml;ltesi K&uuml;t&uuml;phanesi &ndash; İstanbul</li>\r\n	<li>Kadir Has Lisesi &ndash; K&uuml;&ccedil;&uuml;kyalı İstanbul</li>\r\n	<li>Karadeniz T.&Uuml;.Diş Hekimliği Fak&uuml;ltesi &ndash; Trabzon</li>\r\n	<li>Karaelmas &Uuml;ni. Tıp Fak&uuml;ltesi Eğitim Blokları &ndash; Zonguldak</li>\r\n	<li>Kırıkkale &Uuml;niversitesi &ndash; Kırıkkale</li>\r\n	<li>Kocaeli &Uuml;ni. Umuttepe Kampus&uuml; Hukuk Fak&uuml;ltesi &ndash; Kocaeli</li>\r\n	<li>Kuleli Askeri Lisesi</li>\r\n	<li>M.Kemal &Uuml;niversitesi Diş Hekimliği Fak&uuml;ltesi. İskenderun</li>\r\n	<li>Mustafa Kemal &Uuml;niversitesi &ndash; İskenderun</li>\r\n	<li>Okan &Uuml;niversitesi &ndash; Rekt&ouml;rl&uuml;k Binası</li>\r\n	<li>&Ouml;zel Bilfen Okulları &ndash; Adana</li>\r\n	<li>Pamukkale &Uuml;niversitesi Tıp Fak&uuml;ltesi &ndash; Denizli</li>\r\n	<li>Sakarya &Uuml;niversitesi &ndash; Adapazarı</li>\r\n	<li>Sel&ccedil;uk &Uuml;niversitesi Diş Hekimliği Fak&uuml;ltesi &ndash; Konya</li>\r\n	<li>S&uuml;t&ccedil;&uuml; İmam &Uuml;niversitesi &ndash; Kahramanmaraş</li>\r\n	<li>Turgay Ciner Teknik End. Mes. Lisesi &ndash; Afşin &ndash; K.Maraş</li>\r\n	<li>Yabancı Diller Y&uuml;ksekokulu &ndash; Niğde</li>\r\n	<li>Zihinsel &Ouml;z&uuml;rl&uuml;ler Rehabilitasyon Merkezi &ndash; Adapazarı</li>\r\n</ul>\r\n', 1, 'TR', 'Çevre', 5, 'cevre'),
(27, 'Sağlık Kuruluşları', 'saglik-kuruluslari', 'assets/front/img/altsayfa/6b55ea4e10f575885528925a8f8d43ed.jpg', '<ul>\r\n	<li>100.Yıl &Uuml;niversitesi Araştırma Hastanesi &ndash; Van</li>\r\n	<li>400 Yataklı Devlet Hastanesi &ndash; K. Maraş</li>\r\n	<li>Akdeniz &Uuml;nv. Fizik Tedavi Ve Rehabilitasyon Merkezi &ndash; Antalya</li>\r\n	<li>Atat&uuml;rk Eğitim Ve Araştırma Hastanesi &ndash; İzmir</li>\r\n	<li>&Ccedil;ukurova &Uuml;niversitesi Balcalı Hastanesi - Adana</li>\r\n	<li>Denizli Devlet Hastanesi &ndash; Denizli</li>\r\n	<li>Derince Devlet Hastanesi &ndash; İzmit</li>\r\n	<li>Hacettepe &Uuml;niversitesi Diş Hekimliği Fak&uuml;ltesi&ndash; Ankara</li>\r\n	<li>Haseki Hastanesi &ndash; İstanbul</li>\r\n	<li>Kahramanmaraş Kadın Doğum Hastanesi &ndash; K. Maraş</li>\r\n	<li>Kardiyoloji Hastanesi &ndash; Diyarbakır</li>\r\n	<li>Karlıova Devlet Hastanesi &ndash; Bing&ouml;l</li>\r\n	<li>Kastamonu Devlet Hastanesi &ndash; Kastamonu</li>\r\n	<li>Kocaeli Ssk Hastanesi &ndash; Kocaeli</li>\r\n	<li>Metropark Hastanesi &ndash; Adana</li>\r\n	<li>Namık Kemal Diş Hastanesi &ndash; K. Maraş</li>\r\n	<li>Nevşehir Ssk Hastanesi &ndash; Nevşehir</li>\r\n	<li>Nimet Bayraktar Diş Hastanesi &ndash; Kayseri</li>\r\n	<li>&Ouml;zel Acıbadem Hastanesi</li>\r\n	<li>Samatya Ssk Eğitim Hastanesi &ndash; İstanbul</li>\r\n	<li>Samsun Ssk Hastanesi &ndash; Samsun</li>\r\n	<li>Sivas Cumhuriyet &Uuml;nv. Hastanesi &ndash; Sivas</li>\r\n	<li>Solhan İl&ccedil;esi Devlet Hastanesi &ndash; Bing&ouml;l</li>\r\n	<li>Suat Seren G&ouml;ğ&uuml;s Hastalıkları Hastanesi &ndash; İzmir</li>\r\n	<li>Tokat Devlet Hastanesi &ndash; Tokat</li>\r\n	<li>Trabzon Farabi Hastanesi &ndash; Trabzon</li>\r\n	<li>Trakya &Uuml;niversitesi Tıp Fak&uuml;ltesi &ndash; Edirne</li>\r\n	<li>Zekai Tahir Burak Doğumevi,Kadın Hastalıkları Has. &ndash; Ankara</li>\r\n</ul>\r\n', 1, 'TR', 'Çevre', 5, 'cevre'),
(28, 'Özel Kuruluşlar', 'ozel-kuruluslar', 'assets/front/img/altsayfa/e339015931a8f75f065577183c5591a0.jpg', '<ul>\r\n	<li>352 Konut Toki Konutları &ndash; Afyon</li>\r\n	<li>Antalya Havalimanı Yeni Terminal Binası</li>\r\n	<li>Armonipark Alışveriş Merkezi &ndash; Sefak&ouml;y İstanbul</li>\r\n	<li>Atapark Avm &ndash; Varlıbaşlar İnş. &ndash; Trabzon</li>\r\n	<li>Avrupa Konutları &ndash; İstanbul</li>\r\n	<li>Batik &Ouml;rme Mağazaları</li>\r\n	<li>Beyaz İnşaat &ndash; İstanbul</li>\r\n	<li>Bosch Mağazaları</li>\r\n	<li>B&uuml;y&uuml;khanlı Otel &ndash; İstanbul</li>\r\n	<li>&Ccedil;etinkaya Mağazaları&ndash; &Uuml;sk&uuml;dar &ndash; &Uuml;mraniye &ndash; Mersin</li>\r\n	<li>Citroen Showroomları</li>\r\n	<li>Colın&#39;s Jeans Mağazaları</li>\r\n	<li>Emre Mimarlık &ndash; Kayseri</li>\r\n	<li>Ender Mağazaları&ndash; İstanbul &ndash; Adana &ndash; Eskişehir</li>\r\n	<li>Erdek Permar Alışveriş Merkezi &ndash; Balıkesir</li>\r\n	<li>Gemlik Belediye Avm &ndash; Bursa</li>\r\n	<li>Honda Plaza &ndash; Adapazarı</li>\r\n	<li>Hyundai Plaza&ndash; Bursa &ndash; Ordu &ndash; İzmit &ndash; Ataşehir &ndash; L&uuml;leburgaz</li>\r\n	<li>İş Bankası Şubeleri</li>\r\n	<li>İsuzu Plaza &ndash; Antakya &ndash; Bursa</li>\r\n	<li>Kazan İl&ccedil;esi Toki Konutları &ndash; Ankara</li>\r\n	<li>Kempinsky Otel &ndash; Muğla</li>\r\n	<li>Kia Showroom&ndash; Eskişehir &ndash; Ankara &ndash; Antalya</li>\r\n	<li>Koray İnşaat G&uuml;zelbiryer Rezidansları &ndash; Bursa</li>\r\n	<li>Kuzu Group Rezidansları &ndash; İstanbul</li>\r\n	<li>Loft Jeans Mağazaları</li>\r\n	<li>Mazda Plaza &ndash; Denizli &ndash; Erzurum</li>\r\n	<li>Mercedes Showroomları</li>\r\n	<li>Metin Dinlenme Tesisleri &ndash; Pamukova</li>\r\n	<li>Mey Alkoll&uuml; İ&ccedil;kiler Sanayi &ndash; Tekirdağ</li>\r\n	<li>Mirapark Alış Veriş Merkezi &ndash; Trabzon</li>\r\n	<li>Opet Benzin İstasyonları</li>\r\n	<li>&Ouml;z Ok Ticaret Merkezi İnşaatı &ndash; Van</li>\r\n	<li>&Ouml;zak Tekstil İş Merkezi &ndash; İstanbul</li>\r\n	<li>Panafilm St&uuml;dyoları &ndash; İstanbul</li>\r\n	<li>Renault Showroom&ndash; &Ccedil;orlu &ndash; Adapazarı &ndash; Muğla &ndash; Eskişehir</li>\r\n	<li>Riva Konakları &ndash; İstanbul</li>\r\n	<li>Rome Resort Hotel Alanya</li>\r\n	<li>R&ouml;nesans Avm &ndash; Malatya</li>\r\n	<li>Seba İnşaat Rezidansları &ndash; İstanbul</li>\r\n	<li>Sel&ccedil;uk Ecza Depoları &ndash; Gaziantep &ndash; Samsun</li>\r\n	<li>Selimoğlu Group Rezidansları &ndash; İstanbul</li>\r\n	<li>Serdivan Avm / 5M Migros &ndash; Adapazarı</li>\r\n	<li>Solarkent Rezidansları &ndash; İstanbul</li>\r\n	<li>Soyak Olimpia Kent Villaları &ndash; İstanbul</li>\r\n	<li>Tatvan Belediyesi Alışveriş Merkezi İnşaatı &ndash; Bitlis</li>\r\n	<li>Titan Garden Otel &ndash; Antalya</li>\r\n	<li>Veli Meşe Toki İnşaatı &ndash; Tekirdağ &Ccedil;orlu</li>\r\n	<li>Vestel Mağaza Ve Servisleri</li>\r\n	<li>Yeni Karam&uuml;rsel Mağazaları</li>\r\n	<li>Yeni Otob&uuml;s Terminali &ndash; Adapazarı</li>\r\n	<li>Yeni Otob&uuml;s Terminali &ndash; Bandırma</li>\r\n	<li>Yeni Otob&uuml;s Terminali &ndash; Nevşehir</li>\r\n	<li>Y&uuml;cesoy Hotel &ndash; Mersin</li>\r\n	<li>Yurti&ccedil;i Kargo Şubeleri</li>\r\n	<li>Ziraat Bankası Şubeleri</li>\r\n</ul>\r\n', 1, 'TR', 'Çevre', 5, 'cevre'),
(36, 'English Page 4', 'english-page-4', 'assets/front/img/altsayfa/cc617a2c1aeab993c5df2adc1437c169.jpg', '<p>English Page 4</p>\r\n', 1, 'EN', 'Products', 10, 'products'),
(33, 'English Page 1', 'english-page-1', 'assets/front/img/altsayfa/a1abda15ea1a41196213397c5897a5ce.jpg', '<p>English Page 1</p>\r\n', 1, 'EN', 'Corporate', 11, 'corporate'),
(34, 'English Page 2', 'english-page-2', 'assets/front/img/altsayfa/7119d445cc58dacab6b62810a166171e.jpg', '<p>English Page 2</p>\r\n', 1, 'EN', 'Corporate', 11, 'corporate'),
(35, 'English Page 3', 'english-page-3', 'assets/front/img/altsayfa/b95601ee56c5f3f35fcabfddf3fd0120.jpg', '<p>English Page 3</p>\r\n', 1, 'EN', 'Products', 10, 'products'),
(37, 'English Page 5', 'english-page-5', 'assets/front/img/altsayfa/462a945fc8da9fc9f3628100d692601e.jpg', '<p>English Page 5</p>\r\n', 1, 'EN', 'Media', 9, 'media'),
(38, 'English Page 6', 'english-page-6', 'assets/front/img/altsayfa/479962a355f6ebf0a20dac296e70997e.jpg', '<p>English Page 1</p>\r\n', 1, 'EN', 'Media', 9, 'media'),
(39, 'English Page 7', 'english-page-7', 'assets/front/img/altsayfa/4047e012e81b73e41d5e465ed5bd5a61.jpg', '<p>English Page 7</p>\r\n', 1, 'EN', 'Catalogs', 8, 'catalogs'),
(40, 'English Page 8', 'english-page-8', 'assets/front/img/altsayfa/9aa2dd7cfa2198f172361f8e6d81a3f1.jpg', '<p>English Page 8</p>\r\n', 1, 'EN', 'Catalogs', 8, 'catalogs'),
(41, 'English Page 9', 'english-page-9', 'assets/front/img/altsayfa/f4386fce0ddc3feb3477f019445c2917.jpg', '<p>English Page 9</p>\r\n', 1, 'EN', 'Referances', 7, 'referances'),
(42, 'English Page 10', 'english-page-10', 'assets/front/img/altsayfa/66a717d593079c4c95f82359ea00390e.jpg', '<p>English Page 10</p>\r\n', 1, 'EN', 'Referances', 7, 'referances');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfa_kategori`
--

CREATE TABLE `sayfa_kategori` (
  `id` int(11) NOT NULL,
  `kategori_adi` varchar(255) NOT NULL,
  `seo` varchar(255) NOT NULL,
  `dil` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sayfa_kategori`
--

INSERT INTO `sayfa_kategori` (`id`, `kategori_adi`, `seo`, `dil`) VALUES
(1, 'Kurumsal', 'kurumsal', 'TR'),
(2, 'Ürünler', 'urunler', 'TR'),
(3, 'Medya', 'medya', 'TR'),
(4, 'Kataloglar', 'kataloglar', 'TR'),
(5, 'Referanslar', 'referanslar', 'TR'),
(6, 'İletişim', 'iletisim', 'TR'),
(7, 'Referances', 'referances', 'EN'),
(8, 'Catalogs', 'catalogs', 'EN'),
(12, 'Contact', 'contact', 'EN'),
(9, 'Media', 'media', 'EN'),
(10, 'Products', 'products', 'EN'),
(11, 'Corporate', 'corporate', 'EN');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_ayarlari`
--

CREATE TABLE `site_ayarlari` (
  `id` int(11) NOT NULL,
  `site_adi` varchar(255) NOT NULL,
  `kaywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `google_maps` varchar(255) NOT NULL,
  `analistik` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `isntegram` varchar(255) NOT NULL,
  `linkadin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `metrica` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `site_ayarlari`
--

INSERT INTO `site_ayarlari` (`id`, `site_adi`, `kaywords`, `description`, `logo`, `telefon`, `fax`, `email`, `adres`, `google_maps`, `analistik`, `facebook`, `twitter`, `isntegram`, `linkadin`, `youtube`, `metrica`) VALUES
(1, 'Duratiles', 'Duratiles', 'Duratiles', 'assets/front/img/5c3bd358a5e67e4517766d25da65e891.svg', '05555555555', '02122121212', 'duratiles@duratiles.com', 'Duratiles Adres', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.5957821134007!2d29.12287476283579!3d40.94652543566103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x50752cbb589506a3!2sAkg%C3%BCn+Seramik!5e0!3m2!1str!2str!4v1487750845107', 'aaaaa', 'duratiles', 'duratile', 'duratiles', 'duratiles', 'duratiles', 'aaaaa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_adi` varchar(255) NOT NULL,
  `slider_resmi` varchar(255) NOT NULL,
  `slider_seo` varchar(255) NOT NULL,
  `durum` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `slider_adi`, `slider_resmi`, `slider_seo`, `durum`) VALUES
(5, 'a', 'assets/front/img/slider/93c76803cd0d0e162106ce8f7b802888.jpg', 'a', 1),
(6, 'b', 'assets/front/img/slider/1d6b60b3b818f689b1520e175bd88a2b.jpg', 'b', 1),
(7, 'c', 'assets/front/img/slider/82ca8bf4f57c577f03b99e1ef48ec53c.jpg', 'c', 1),
(8, 'd', 'assets/front/img/slider/384b288a1039e0a851e847e37fae579a.jpg', 'd', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `urun_adi` varchar(255) NOT NULL,
  `urun_olcu` varchar(255) NOT NULL,
  `urun_aciklama` text CHARACTER SET utf8 COLLATE utf8_german2_ci NOT NULL,
  `urun_resim` varchar(255) NOT NULL,
  `urun_rengi` varchar(255) NOT NULL,
  `urun_kategori` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_seo` varchar(255) NOT NULL,
  `katsef` varchar(255) NOT NULL,
  `urun_dili` varchar(3) NOT NULL,
  `durum` tinyint(4) NOT NULL,
  `urun_pdf` varchar(255) NOT NULL,
  `kullanim_yeri` varchar(255) NOT NULL,
  `kulyeri_sef` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `urun_adi`, `urun_olcu`, `urun_aciklama`, `urun_resim`, `urun_rengi`, `urun_kategori`, `kategori_id`, `urun_seo`, `katsef`, `urun_dili`, `durum`, `urun_pdf`, `kullanim_yeri`, `kulyeri_sef`) VALUES
(1, 'Venüs', '60x60', '<p>60 x 60 VENUS FON GRI</p>\r\n', 'assets/front/img/urun/df4ee7dec5aedf43f9c563b9ac45f251.jpg', 'Gri', 'Seramik Karo', 1, 'venus', 'seramik-karo', 'TR', 1, '', '', ''),
(2, 'Alaska Wood', '25x75', '<p>25 x 75 ALASKA WOOD FON BONE</p>\r\n', 'assets/front/img/urun/670c045a34d1cc5a176453e9bf8fe839.jpg', 'Bone', 'Seramik Karo', 1, 'alaska-wood', 'seramik-karo', 'TR', 1, '', '', ''),
(3, 'Andrax', '45x45', '<p>45 x 45 ANDRAX FON GRI</p>\r\n', 'assets/front/img/urun/bc4ac7b46f84b19cc0b0a8b5dca0af27.jpg', 'Gri', 'Seramik Karo', 1, 'andrax', 'seramik-karo', 'TR', 1, '', '', ''),
(4, 'Alabastro', '60x60', '<p>60 x 60 ALABASTRO FON NATURA</p>\r\n', 'assets/front/img/urun/f151f5bbc82f1ecfce263eb5a00a81bf.jpg', 'Natura', 'Porselen Karo', 2, 'alabastro', 'porselen-karo', 'TR', 1, '', '', ''),
(5, 'Altea', '40x80', '<p>40 x 80 ALTEA FON BEJ</p>\r\n', 'assets/front/img/urun/e302f6dbcf6ac8de4bb7788dcb2be0ab.jpg', 'Bej', 'Porselen Karo', 2, 'altea', 'porselen-karo', 'TR', 1, '', '', ''),
(6, 'Alveo', '30x60', '<p>30 x 60 ALVEO FON BEYAZ</p>\r\n', 'assets/front/img/urun/11f38f100994f49084abbb0dfb8923f3.jpg', 'Beyaz', 'Porselen Karo', 2, 'alveo', 'porselen-karo', 'TR', 1, '', '', ''),
(7, 'Alfa', '40x40', '<p>40 x 40 ALFA FON GRI</p>\r\n', 'assets/front/img/urun/c12dc1892ddfe0adb46e9905cb9ecb3e.jpg', 'Gri', '20MM Karo', 3, 'alfa', '20mm-karo', 'TR', 1, '', '', ''),
(8, 'Arena', '40x40', '<p>40 x 40 ARENA FON GRI</p>\r\n', 'assets/front/img/urun/23567c8649663614574eb2f585fd49b1.jpg', 'Gri', '20MM Karo', 3, 'arena', '20mm-karo', 'TR', 1, '', '', ''),
(9, 'Artica', '40x40', '<p>40 x 40 ARTİCA FON CAMEL</p>\r\n', 'assets/front/img/urun/919e42ea1bc64523b487b584ff2c9b81.jpg', 'Camel', '20MM Karo', 3, 'artica', '20mm-karo', 'TR', 1, '', '', ''),
(18, 'denemee', '50', '<p>aerhgkhm</p>\r\n', 'assets/front/img/urun/88ece8cbdf7d3850cb2de023f3696a93.jpg', 'kırmızı', 'Porselen Karo', 2, 'denemee', 'porselen-karo', 'TR', 1, '', '', ''),
(19, 'English Product 1', '35', '<p>English Product 1</p>\r\n', 'assets/front/img/urun/e40267799eced429646b3e59604fbad6.jpg', 'red', 'English Page 4', 5, 'english-product-1', 'english-page-4', 'EN', 1, '', '', ''),
(20, 'English Product 2', '35', '<p>English Product 2</p>\r\n', 'assets/front/img/urun/03e3bbe5d3f4a229e13f1bb930aae9b6.jpg', 'blue', 'English Page 4', 5, 'english-product-2', 'english-page-4', 'EN', 1, '', '', ''),
(21, 'English Product 3', '35', '<p>English Product 3</p>\r\n', 'assets/front/img/urun/b19d4691ad70a064512352f397ea3da0.jpg', 'purple', 'English Page 4', 5, 'english-product-3', 'english-page-4', 'EN', 1, '', '', ''),
(22, 'English Product 4', '35', '<p>English Product 4</p>\r\n', 'assets/front/img/urun/c36f3d97ff6f45d41a6265b3ac8eff4f.jpg', 'yellow', 'English Page 3', 8, 'english-product-4', 'english-page-3', 'EN', 1, '', '', ''),
(23, 'English Product 5', '35', '<p>English Product 5</p>\r\n', 'assets/front/img/urun/c8133e72ab05f9b7069b72562c9df85f.jpg', 'green', 'English Page 3', 8, 'english-product-5', 'english-page-3', 'EN', 1, '', '', ''),
(24, 'English Product 6', '35', '<p>English Product 6</p>\r\n', 'assets/front/img/urun/d127de0fc04f8385a2a4732e49ba5122.jpg', 'gray', 'English Page 3', 8, 'english-product-6', 'english-page-3', 'EN', 1, '', '', ''),
(25, 'urun deneme', '35x35', '<p>urun deneme</p>\r\n', 'assets/front/img/urun/67ea0ecfff6983717b282671a735eba7.jpg', 'mor', 'Porselen Karo', 2, 'urun-deneme', 'porselen-karo', 'TR', 1, '', '', ''),
(26, 'urun deneme 2', '45x45', '<p>urun deneme 2</p>\r\n', 'assets/front/img/urun/25cdbdc687c4fb53ca8ade4a30465263.jpg', 'mavi', '20MM Karo', 3, 'urun-deneme-2', '20mm-karo', 'TR', 1, '', 'Yer Karosu', 'yer-karosu'),
(27, 'urun deneme 3', '60x60', '<p>urun deneme 3</p>\r\n', 'assets/front/img/urun/8def06ee0946f7ba06ab3bd72eee6fab.jpg', 'sarı', '20MM Karo', 3, 'urun-deneme-3', '20mm-karo', 'TR', 1, '', 'Duvar Karosu', 'duvar-karosu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_kategori`
--

CREATE TABLE `urun_kategori` (
  `id` int(11) NOT NULL,
  `kategori_adi` varchar(255) NOT NULL,
  `kategori_seo` varchar(255) NOT NULL,
  `dil` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urun_kategori`
--

INSERT INTO `urun_kategori` (`id`, `kategori_adi`, `kategori_seo`, `dil`) VALUES
(1, 'Seramik Karo', 'seramik-karo', 'TR'),
(2, 'Porselen Karo', 'porselen-karo', 'TR'),
(3, '20MM Karo', '20mm-karo', 'TR'),
(5, 'English Page 4', 'english-page-4', 'EN'),
(8, 'English Page 3', 'english-page-3', 'EN');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun_kullanim_yeri`
--

CREATE TABLE `urun_kullanim_yeri` (
  `id` int(11) NOT NULL,
  `kullanim_yeri` varchar(255) NOT NULL,
  `sef` varchar(255) NOT NULL,
  `dil` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urun_kullanim_yeri`
--

INSERT INTO `urun_kullanim_yeri` (`id`, `kullanim_yeri`, `sef`, `dil`) VALUES
(1, 'Duvar Karosu', 'duvar-karosu', 'TR'),
(2, 'Yer Karosu', 'yer-karosu', 'TR'),
(3, 'Wall Shade', 'wall-shade', 'EN'),
(4, 'Floor Cover', 'floor-cover', 'EN');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `yonetici_adi` varchar(50) NOT NULL,
  `durum` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `email`, `sifre`, `yonetici_adi`, `durum`) VALUES
(1, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1),
(3, 'siteadmin@siteadmin.com', '733d7be2196ff70efaf6913fc8bdcabf', 'Site Admin', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haber_kategori`
--
ALTER TABLE `haber_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `katalog_kategori`
--
ALTER TABLE `katalog_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfa_kategori`
--
ALTER TABLE `sayfa_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `site_ayarlari`
--
ALTER TABLE `site_ayarlari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_kategori`
--
ALTER TABLE `urun_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urun_kullanim_yeri`
--
ALTER TABLE `urun_kullanim_yeri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `haber_kategori`
--
ALTER TABLE `haber_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `katalog_kategori`
--
ALTER TABLE `katalog_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Tablo için AUTO_INCREMENT değeri `sayfa_kategori`
--
ALTER TABLE `sayfa_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `site_ayarlari`
--
ALTER TABLE `site_ayarlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Tablo için AUTO_INCREMENT değeri `urun_kategori`
--
ALTER TABLE `urun_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `urun_kullanim_yeri`
--
ALTER TABLE `urun_kullanim_yeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
