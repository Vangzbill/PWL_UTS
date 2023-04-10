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
            ]
        ]);
    }
}
