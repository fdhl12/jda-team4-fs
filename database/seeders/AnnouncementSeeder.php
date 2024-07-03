<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 12 ; $i++) {

            $title = [
                'Intervensi Serentak Pencegahan Stunting',
                'Pengumuman Vaksinasi',
                'Pendaftaran Kartu Prakerja',
                'Kegiatan Gotong Royong',
                'Pemberitahuan Jadwal Posyandu'
            ];
            $title_rand = $title[array_rand($title)];
            $image = ['pengumuman-1.png', 'pengumuman-2.jpeg', 'pengumuman-3.jpg', 'pengumuman-4.jpg', 'pengumuman-5.jpg'];
            $image_rand = $image[array_rand($image)];

            $pengumuman = [
'
<p></p><p><strong>PENGUMUMAN</strong></p> <p><strong>BAGI MASYARAKAT YANG AKAN MEMBUAT SURAT KETERANGAN, SURAT PENGANTAR DAN LAIN-LAIN DI KANTOR DESA KERU, AGAR MENUNJUKKAN BUKTI / SERTIFIKAT VAKSINASI COVID-19 AGAR BISA DILAYANI.</strong></p> <p></p>
',
'
<p>Demam berdarah, juga dikenal sebagai Demam Dengue, merupakan salah satu penyakit yang telah lama menjadi momok bagi masyarakat di berbagai wilayah, terutama di daerah tropis seperti Indonesia. Salah satu daerah yang tengah menghadapi ancaman serius dari penyakit ini adalah Desa Sungai Ana. Penyebaran demam berdarah di desa ini semakin mengkhawatirkan, memerlukan kewaspadaan ekstra, edukasi yang tepat, dan tindakan preventif bersama untuk melindungi kesehatan warga.</p>
<p><strong>Pengenalan Demam Berdarah dan Penyebabnya</strong></p>
<p>Demam berdarah disebabkan oleh virus dengue yang ditularkan melalui gigitan nyamuk Aedes aegypti. Nyamuk ini umumnya berkembang biak di daerah yang memiliki lingkungan lembap, seperti genangan air, bak mandi, dan tempat-tempat lain yang bisa mengumpulkan air hujan. Faktor-faktor seperti perubahan iklim, urbanisasi, dan kurangnya kesadaran tentang pentingnya menjaga kebersihan lingkungan dapat berkontribusi pada peningkatan jumlah kasus demam berdarah.</p>
<p><strong>Upaya Penanggulangan dan Pencegahan</strong></p>
<p>Pentingnya edukasi dan kesadaran masyarakat tidak dapat diabaikan dalam upaya penanggulangan demam berdarah. Pemerintah desa, bersama dengan tim medis dan sukarelawan, telah bekerja keras untuk menyebarkan informasi tentang cara mencegah gigitan nyamuk dan menjaga lingkungan tetap bersih. Kampanye penyuluhan tentang pentingnya menghilangkan tempat berkembang biak nyamuk dan mengenali gejala awal demam berdarah telah dilakukan melalui ceramah, brosur, dan kegiatan komunitas.</p>
<p>Selain edukasi, langkah-langkah konkret telah diambil untuk mengurangi penyebaran demam berdarah. Fogging atau penyemprotan insektisida telah dilakukan di daerah yang diidentifikasi sebagai titik rawan nyamuk. Penyuluhan tentang penggunaan kelambu anti-nyamuk dan obat nyamuk juga menjadi fokus utama dalam melindungi warga, terutama anak-anak dan lanjut usia, yang rentan terhadap penyakit ini.</p>
<p><strong>Peran Aktif Masyarakat</strong></p>
<p>Partisipasi aktif dari masyarakat Desa Sungai Ana memiliki peranan yang sangat penting dalam upaya ini. Semua warga diimbau untuk mengambil langkah-langkah preventif di lingkungan sekitar mereka, seperti menguras wadah yang berpotensi menjadi tempat berkembang biak nyamuk, menutup rapat tempat penyimpanan air, dan membersihkan selokan. Melaporkan kasus demam berdarah atau gejala yang mencurigakan juga merupakan tindakan yang dapat membantu petugas medis dalam mengatasi penyebaran penyakit ini.</p>
<p><strong>Kesimpulan</strong></p>
<p>Demam berdarah adalah ancaman serius bagi kesehatan masyarakat, termasuk di Desa Sungai Ana. Dengan langkah-langkah preventif yang tepat dan keterlibatan aktif semua pihak, baik pemerintah, petugas kesehatan, maupun masyarakat, perlahan tetapi pasti kita dapat melawan dan mengurangi penyebaran penyakit mematikan ini. Edukasi dan kesadaran akan pentingnya menjaga lingkungan bersih serta melapor jika ada gejala demam berdarah menjadi kunci dalam menjaga kesehatan dan kesejahteraan warga Desa Sungai Ana.</p>
',
'
<p></p><p><strong>PENGUMUMAN</strong></p> <p><strong>BAGI MASYARAKAT YANG AKAN MEMBUAT SURAT KETERANGAN, SURAT PENGANTAR DAN LAIN-LAIN DI KANTOR DESA KERU, AGAR MENUNJUKKAN BUKTI / SERTIFIKAT VAKSINASI COVID-19 AGAR BISA DILAYANI.</strong></p> <p></p>
',
            ];
            $pengumuman_rand = $pengumuman[array_rand($pengumuman)];

            Announcement::create([
                'title' => $title_rand,
                'description' => $pengumuman_rand,
                'image' => $image_rand,
                'slug' => Str::slug($title_rand) . '-' . Str::random(4),
                'user_id' => 1,
            ]);
        }
    }
}
