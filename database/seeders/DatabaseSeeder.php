<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventFestival;

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
    }
}
