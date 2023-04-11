<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'author' => 'Muhammad Ali',
                'title' => '10 Manfaat Olahraga bagi Kesehatan',
                'description' => 'Olahraga memiliki banyak manfaat positif bagi kesehatan, apa saja manfaatnya?',
                'content' => 'Olahraga adalah kegiatan yang memiliki banyak manfaat bagi kesehatan tubuh. Berikut adalah 10 manfaat olahraga yang perlu kamu ketahui:

                1. Meningkatkan Kesehatan Jantung
                Olahraga teratur dapat membantu meningkatkan kesehatan jantung dan mencegah berbagai penyakit jantung.

                2. Membantu Menurunkan Berat Badan
                Olahraga dapat membantu membakar kalori dan menurunkan berat badan yang berlebihan.

                3. Meningkatkan Kesehatan Mental
                Olahraga dapat membantu meredakan stres dan kecemasan, serta meningkatkan mood dan kepercayaan diri.

                4. Meningkatkan Kekuatan dan Ketahanan Fisik
                Olahraga dapat membantu meningkatkan kekuatan dan ketahanan fisik tubuh.

                5. Meningkatkan Kesehatan Tulang dan Sendi
                Olahraga dapat membantu menjaga kesehatan tulang dan sendi, serta mencegah berbagai penyakit tulang dan sendi.

                6. Meningkatkan Kesehatan Saluran Pencernaan
                Olahraga dapat membantu meningkatkan kesehatan saluran pencernaan dan mencegah berbagai penyakit pencernaan.

                7. Meningkatkan Kesehatan Paru-Paru
                Olahraga dapat membantu meningkatkan kesehatan paru-paru dan meningkatkan kapasitas paru-paru.

                8. Meningkatkan Kesehatan Kulit
                Olahraga dapat membantu meningkatkan kesehatan kulit dan mencegah berbagai masalah kulit.

                9. Meningkatkan Kesehatan Mata
                Olahraga dapat membantu meningkatkan kesehatan mata dan mencegah berbagai masalah mata.

                10. Meningkatkan Kualitas Tidur
                Olahraga dapat membantu meningkatkan kualitas tidur dan mencegah berbagai masalah tidur.

                Oleh karena itu, jangan ragu untuk mulai rajin berolahraga sekarang juga!',
            ],
            [
                'author' => 'Siti Fatimah',
                'title' => 'Tips Mudah Merawat Kucing Peliharaan',
                'description' => 'Bagaimana cara merawat kucing peliharaan agar tetap sehat dan bahagia?',
                'content' => 'Kucing merupakan hewan peliharaan yang sangat populer di seluruh dunia. Berikut adalah beberapa tips mudah untuk merawat kucing peliharaan kamu:

                1. Memberi Makan
                Pastikan memberi makan kucing dengan porsi yang cukup, jangan terlalu banyak atau terlalu sedikit. Pilih makanan yang kaya akan nutrisi dan vitamin untuk menjaga kesehatannya. Sediakan air bersih di tempat yang mudah dijangkau agar kucing selalu terhidrasi.

                2. Menjaga Kebersihan
                Jaga kebersihan kucing dan lingkungan tempat tinggalnya. Bersihkan kandang atau kotak kotoran setiap hari dan gantilah pasir kucing secara teratur. Selalu beri kesempatan pada kucing untuk membersihkan diri sendiri, namun jika perlu kamu bisa membantunya dengan menyikat bulunya secara berkala.

                3. Memberikan Kasih Sayang
                Kucing merupakan hewan yang membutuhkan perhatian dan kasih sayang. Beri waktu untuk bermain bersama kucingmu dan perhatikan kebutuhannya. Jangan biarkan kucingmu merasa kesepian atau terabaikan.

                4. Vaksinasi dan Perawatan Medis
                Pastikan kucingmu mendapatkan vaksinasi yang diperlukan dan perawatan medis yang sesuai. Segera bawa kucingmu ke dokter hewan jika terlihat tidak sehat atau terjadi masalah kesehatan.

                5. Batasi Akses ke Area Berbahaya
                Batasi akses kucingmu ke area berbahaya seperti dapur atau ruang tamu yang memiliki banyak benda-benda rapuh. Pastikan area tempat tinggal kucingmu aman dan nyaman bagi kucing.

                Dengan merawat kucingmu dengan baik, kamu bisa memastikan kucingmu tetap sehat, bahagia, dan hidup lebih lama.'
            ],
            [
                'author' => 'John Doe',
                'title' => '10 Tempat Wisata Menarik di Indonesia',
                'description' => 'Ingin berlibur ke Indonesia? Simak 10 tempat wisata menarik yang harus dikunjungi!',
                'content' => 'Indonesia memiliki banyak tempat wisata menarik yang bisa dikunjungi oleh wisatawan. Mulai dari keindahan alam yang memukau, budaya yang kaya, hingga kuliner yang lezat, semuanya bisa dinikmati di Indonesia.

                Berikut adalah 10 tempat wisata menarik di Indonesia yang wajib dikunjungi:

                1. Bali
                2. Yogyakarta
                3. Lombok
                4. Raja Ampat
                5. Danau Toba
                6. Bromo Tengger Semeru
                7. Komodo
                8. Tanjung Puting
                9. Pulau Derawan
                10. Labuan Bajo',
            ],
            [
                'author' => 'Jane Smith',
                'title' => '10 Kuliner Khas Indonesia yang Harus Dicoba',
                'description' => 'Ingin mencicipi kuliner khas Indonesia? Coba 10 hidangan lezat ini!',
                'content' => 'Indonesia memiliki beragam kuliner yang lezat dan unik. Setiap daerah di Indonesia memiliki hidangan khasnya sendiri, sehingga wisatawan bisa mencicipi berbagai macam kuliner saat berkunjung ke Indonesia.

                Berikut adalah 10 kuliner khas Indonesia yang wajib dicoba:

                1. Nasi Goreng
                2. Sate
                3. Rendang
                4. Gado-gado
                5. Nasi Padang
                6. Soto
                7. Bakso
                8. Martabak
                9. Pempek
                10. Es Doger',
            ],
            [
                'author' => 'Ahmad Syahid',
                'title' => 'Tips Hemat Liburan Murah Meriah di Jakarta',
                'description' => 'Ingin berlibur hemat di Jakarta? Simak tips-tips berikut ini!',
                'content' => 'Liburan ke Jakarta tidak selalu harus mahal. Anda bisa berlibur dengan cara yang lebih hemat dan tetap seru. Berikut adalah tips hemat liburan murah meriah di Jakarta:

                1. Menginap di hostel atau homestay
                2. Mengunjungi tempat wisata gratis
                3. Memanfaatkan promo dan diskon
                4. Memilih transportasi publik
                5. Mencicipi kuliner khas Jakarta
                6. Berbelanja di pasar tradisional
                7. Berwisata kuliner di kawasan Jalan Sabang
                8. Mengunjungi Taman Mini Indonesia Indah
                9. Menikmati seni dan budaya di Jakarta Art Building
                10. Berfoto di Monas dan sekitarnya',
            ],
            [
                'author' => 'Ratna Sari',
                'title' => 'Inspirasi Dekorasi Kamar Tidur Minimalis',
                'description' => 'Ingin membuat kamar tidur minimalis yang nyaman? Simak inspirasi dekorasi berikut ini!',
                'content' => 'Kamar tidur minimalis bisa terlihat cantik dan nyaman dengan sentuhan dekorasi yang tepat. Berikut adalah beberapa inspirasi dekorasi kamar tidur minimalis yang bisa dicoba:

                1. Pilih warna netral sebagai dasar
                2. Gunakan tekstur pada dinding atau bantal
                3. Tambahkan tanaman hias untuk kesan segar
                4. Letakkan cermin besar untuk kesan luas
                5. Gunakan furnitur minimalis yang multifungsi
                6. Tambahkan lampu yang memberikan kesan hangat
                7. Gunakan bedding yang lembut dan nyaman
                8. Buat ruangan berantakan dengan rapi
                9. Tambahkan aksen atau ornamen yang unik
                10. Jangan terlalu banyak menambahkan aksesori',
            ]
        ]);
    }
}
