<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventFestival;
use App\Models\TourPackage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        EventFestival::create([
            'judul' => 'Upacara Adat Jawa Timur Kebo-keboan',
            'lokasi' => 'Banyuwangi, Jawa Timur',
            'gambar' => '',
            'excerpt' => 'Pada saat setiap tahun masyarakat daerah Banyuwangi berusaha untuk menjaga sebuah tradisi kemurnian dan juga kesakralan budaya mereka.',
            'deskripsi' => '<p>Pada saat setiap tahun masyarakat daerah Banyuwangi berusaha untuk menjaga sebuah tradisi kemurnian dan juga kesakralan budaya mereka. Asal-usul tradisi kebo-keboan ini bersaal karena banyaknya sebuah musibah pageblok.</p><p>Pada saat waktu itu masyarakat terkena wabah penyakit dan juga tanaman yang dapat merugikan warga daerah tersebut. Banyak dari warga yang meninggal dan juga kelaparan akibat adanya penyakit misterius tersebut.</p><p>Nah, pada saat terjadi bencana wabah tersebut, salah satu dari sesepuh bernama mbah Karti mendapat wangsit atau mimpi dari semedinya di sebuah bukit untuk melakukan kebo-keboan dan juga mengangungkan Dewi Sri</p><p>Singkat cerita ada sebuah keajaiban yang tak disangka muncul ketika waga sekitar melaksanakan ritual Kebo-Keboan. Banyak dari warga yang sakit mendadak menjadi sehat, juga hama yang menyerang tanaman warga hilang tidak tau kemana. Akhirnya mulai saat itu ritual kebo-keboan terus dilestarikan oleh masyarakat daerah itu, kemudian muncul perasaan resah dan juga takut jika tidak melakukan tradisi kebo-keboan tersebut.</p>'
        ]);
        
        EventFestival::create([
            'judul' => 'Upacara Adat Jawa Timur Labuh Sesaji',
            'lokasi' => 'Magetan, Jawa Timur',
            'gambar' => '',
            'excerpt' => 'Labuh sesaji adalah salah satu kebiasaan tahunan yang telah digelar di Telaga Sarangan, Magetan. Waktu untuk melaksanakan tradisi Labuh Sesaji ini pada bulan Ruwah, hari Jum’at Pon.',
            'deskripsi' => '<p>Labuh sesaji adalah salah satu kebiasaan tahunan yang telah digelar di Telaga Sarangan, Magetan. Waktu untuk melaksanakan tradisi Labuh Sesaji ini pada bulan Ruwah, hari Jum’at Pon.</p><p>Tujuan dari upacara Labuh sesaji ini sebagai tanda terima kasih dari masyarakat kepada Tuhan Yang Maha Esa. Masyarakat menganggap bahwa Telaga Sarangan adalah sebuah hadiah dari Tuhan, Telaga Sarangan dianggap dapat mendatangkan kemakmuran bagi masyarakat Magetan dan juga Masyarakat Indonesia.</p>'
        ]);

        EventFestival::create([
            'judul' => 'Upacara Adat Jawa Timur Larung Sesaji',
            'lokasi' => 'Jawa Timur',
            'gambar' => '',
            'excerpt' => 'Upacara adat Larung sesaji berbeda dengan upacara adat Labuh sesaji. Larung sesaji adalah sebuah tradisi upacara adat yang dilakukan oleh masyarakat Jawa Timur yang berada di daerah pesisir pantai utaran dan pantai selatan.',
            'deskripsi' => '<p>Upacara adat Larung sesaji berbeda dengan upacara adat Labuh sesaji. Larung sesaji adalah sebuah tradisi upacara adat yang dilakukan oleh masyarakat Jawa Timur yang berada di daerah pesisir pantai utaran dan pantai selatan.</p><p>Upacara ini dapat dilakukan dengan cara menghanyutkan sesajen ke laut dalam rangka sebagai tanda rasa syukur dari hasil tangkapan ikan selama mereka melaut. Upacara larung sesaji ini umumnya dilaksanakan pada tanggal 1 muharram atau satu suro.</p>'
        ]);

        EventFestival::create([
            'judul' => 'Upacara Adat Jawa Timur Grebegan',
            'lokasi' => 'Jawa Timur',
            'gambar' => '',
            'excerpt' => 'Grebegan adalah salah satu tradisi upacara adat yang memiliki sifat kesyukuran, dilakukan bersama-sama oleh masyarakat suku Jawa dengan tokoh utamanya yaitu seorang raja. Upacara adat Grebegan ini dilaksanakan selama tiga kali dalam datu tahun',
            'deskripsi' => '<p>Grebegan adalah salah satu tradisi upacara adat yang memiliki sifat kesyukuran, dilakukan bersama-sama oleh masyarakat suku Jawa dengan tokoh utamanya yaitu seorang raja. Upacara adat Grebegan ini dilaksanakan selama tiga kali dalam datu tahun, diantaranya yaitu pada tanggal 12 Mulud, 1 Syawal, dan juga tanggal 10 bulan ke-12 Masehi.</p><p>Pada saat upacara grebegan ini raja mengeluarkan sedekahnya berupa hasil alam seperti sayuran dan juga sejenisnya, umumnya sedekah ini dibentuk seperti bidang kerucut seperti gunung, yang akan di rebutkan oleh masyakat.</p>'
        ]);

        TourPackage::create([
            'nama' => 'Bali Travel',
            'nama_paket' => 'Keliling Bali Selatan',
            'email' => 'rizky.royal@gmail.com',
            'nomor_telepon' => '081938713808',
            'alamat' => 'Desa Sukawati, Gianyar',
            'excerpt' => 'Paket travel ini sangat cocok bagi anda yang ingin mengeksplorasi Bali selatan dengan keindahan pantai nya yang sangat-sangat luar biasa. Selain itu, paket travel ini juga sangat cocok buat anda yang...',
            'kegiatan_wisata' => '<ul><li>Mengunjungi Pura Uluwatu</li><li>Mengunjungi Pantai Kuta</li><li>Mengunjungi Pantai Dreamland</li><li>Mengunjungi Pantai Pandawa</li><li>Mengunjungi Krisna Oleh-Oleh Bali</li></ul>',
            'gambar' => '1649672768gambar bali.jpg',
            'deskripsi' => '<div>Paket travel ini sangat cocok bagi anda yang ingin mengeksplorasi Bali selatan dengan keindahan pantai nya yang sangat-sangat luar biasa. Selain itu, paket travel ini juga sangat cocok buat anda yang ingin menikmati sunset yang indah di pantai kuta. Dan untuk kalian yang ingin membawa oleh-oleh khas Bali yang tentunya sangat-sangat keren, paket travel ini juga menawarkan kunjungan ke Krisna Oleh-Oleh Bali, salah satu pusat oleh oleh terkenal di bali</div>',
            'durasi' => '3 Hari',
            'pelayanan' => '<ul><li>Makan 3 kali sehari</li><li>Mobil bisa pilih</li><li>Hotel mewah</li><li>Free es kelapa muda di pantai kuta</li><li>Bisa extend sampe jam 12 malam (Harga disesuaikan)</li></ul>',
            'harga' => 750000,
        ]);

        TourPackage::create([
            'nama' => 'Wayan Travel',
            'nama_paket' => 'Keliling Bali Utara',
            'email' => 'rizky.royal@gmail.com',
            'nomor_telepon' => '081938713808',
            'alamat' => 'Desa Munduk, Tabanan',
            'excerpt' => 'Paket wisata ini sangat cocok bagi kalian yang sangat sumpek dengan pekerjaan duniawi. Pada paket wisata ini, kita akan mengeksplor Bali bagian utara dengan keindahan alam nya dan kesejukan gunung-gun...',
            'kegiatan_wisata' => '<ul><li>Berwisata ke kebun raya Bedugul</li><li>Berwisata ke pantai Buleleng</li><li>Berwisata ke Kintamani (include kopi)</li><li>Mengunjungi hutan pinus</li><li>Mengunjungi pedesaan di Bali Utara</li></ul>',
            'gambar' => '1649673385kintamani.jpg',
            'deskripsi' => '<div>Paket wisata ini sangat cocok bagi kalian yang sangat sumpek dengan pekerjaan duniawi. Pada paket wisata ini, kita akan mengeksplor Bali bagian utara dengan keindahan alam nya dan kesejukan gunung-gunung nya. Pada paket wisata ini, kita juga akan mengunjungi desa-desa kuno yang ada di Bali utara. Selain itu, kita juga akan melakukan <em>chill&nbsp;</em>di coffee shop yang ada di daerah Kintamani, tentu saja disini kalian juga bisa berswafoto dengan latar gunung batur yang sangat cantik dan menawan. Dan tidak kalah penting, pada paket wisata ini kita juga mengunjungi salah satu kebun raya terbesar yang ada di Bali.</div>',
            'durasi' => '4 Hari',
            'pelayanan' => '<ul><li>Makan 3 kali sehari</li><li>Mobil avanza atau kijang innova</li><li>Hotel bintang 5</li><li>Free refill di coffee shop Kintamani</li><li>Free ticket di kebun raya untuk 2 orang</li></ul>',
            'harga' => 800000,
        ]);
    }
}
