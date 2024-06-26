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

            $title = fake()->name;
            $image = ['berita-1.jpg', 'berita-2.jpg', 'berita-3.jpg'];
            $image_rand = $image[array_rand($image)];

            $berita = [
                '<p>CIMAHI.- Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana (DP3AP2KB) Kota Cimahi menggelar sosialisasi pencegahan kekerasan terhadap perempuan dan anak di Aula Gedung A Kantor Pemkot Cimahi Jalan Raden Demang Hardjakusumah Kota Cimahi. Kegiatan digelar untuk mencegah terjadinya kekerasan terhadap perempuan dan anak yang harus didukung semua kalangan.</p>

<p>Kegiatan diikuti 75 orang perwakilan para Pengurus posyandu se Kota Cimahi yang melaksanakan konseling kekerasan terhadap Perempuan dan anak. Hadir sebagai narsumber Agung Yunus Andianto, SH dan Mauritz Marx Williams, SH, MH dari Kejaksaan Negeri Kota Cimahi dan Euis Hotimah Dikdik, S.Pd selaku Ketua Puspaga Kota Cimahi.</p>

<p>Sekretaris DP3AP2KB Kota Cimahi dr. Dikke Suseno Isako, MM dalam laporannya menyampaikan, kegiatan bertujuan untuk meningkatkan pengetahuan, penguatan dan pemahaman kepada para pengurus posyandu tentang kekerasan terhadap perempuan dan anak. &quot;Sehingga mereka dapat melakukan pelayanan konseling kepada masyarakat dalam menyelesaikan permasalahan kekerasan terhadap perempuan-anak yang ada di lingkungannya,&quot; ujarnya.&nbsp;</p>

<p>Sekretaris Daerah Kota Cimahi Dikdik S. Nugrahawan menjelaskan Kota Cimahi memiliki permasalahan sosial yang cukup kompleks, terutama permasalahan kekerasan terhadap perempuan dan anak, pekerja anak, perkawinan anak, trafiking, perlakuan tidak adil terhadap perempuan dan anak, kesenjangan ekonomi terhadap perempuan dan sebagainya.</p>

<p>&quot;Perlu adanya sinergitas untuk mencegah terjadinya kasus kekerasan tersebut. Dimulai dari keluarga, masyarakat, lembaga pendidikan, dunia usaha, lembaga masyarakat, serta lembaga pemerintah baik itu di tingkat Kelurahan, Kecamatan sampai di tingkat kota, untuk menghapuskan faktor penyebab kekerasan dan memberikan hak-hak bagi para korban dan saksi,&quot; ungkapnya.</p>

<p>Dikdik berharap dengan adanya sosialisasi pencegahan kekerasan terhadap perempuan dan anak dapat meningkatkan pengetahuan, pemahaman dan peran kader Posyandu. &quot;Mereka sebagai mitra pemerintah dalam menangani permasalahan perempuan dan anak yang terjadi di lingkungannya. Mari kita berkoordinasi melaksanakan pencegahan kekerasan terhadap perempuan dan anak. Sehingga Kota Cimahi menjadi kota yang aman, nyaman dan menjadi kota yang ramah untuk perempuan dan anak,&quot; tandasnya.**</p>
',
                '<p>CIMAHI - Permintaan surat keterangan Data Terpadu Kesejahteraan Sosial (DTKS) di Kota Cimahi, Jawa Barat meningkat drastis seiring dibukanya Penerimaan Peserta Didik Baru (PPDB) 2024. Warga ramai-ramai mendaftar hingga mencetak surat keterangan terdaftar dalam DTKS.</p>

<p>&quot;Memang kalau masuk PPDB seperti sekarang pengajuan untuk masuk DTKS dan pencetakan surat keterangan DTKS selalu mengalami kenaikan,&quot; kata Kepala Seksi Pengolahan dan Analisa Data Dinas Sosial (Dinsos) Kota Cimahi Ratri Susanti, Selasa (28/5/2024).</p>

<p>Dia mengungkapkan biasanya warga yang mengajukan permohonan untuk masuk ke dalam DTKS normalnya 2-3 orang setiap hari, namun saat dibuka PPDB ini meningkat hingga 10 lebih setiap harinya. Namun setelah dilakukan pengecekan ternyata kebanyakan ada yang sudah terdaftar dalam DTKS.</p>

<p>&quot;Sudah konfirmasi ke peksos di kelurahan ada kenaikan pemohon DTKS ke kelurahan tapi ternyata kebanyakan setelah di cek mereka sudah terdaftar di DTKS. Banyak yang gak (sadar) kalau sudah didaftarkan di DTKS karena tidak mendapatkan bantuan karena sistem SIKS-nya sudah semakin diperbaiki jadi yang terdaftar di DTKS lebih tepat sasaran,&quot; jelasnya.</p>

<p>Ratri menegaskan, warga Kota Cimahi yang terdaftar dalam DTKS belum tentu mendapatkan Bantuan Pangan Non Tunai (BPNT) atau Program Keluarga Harapan (PKH). &quot;Tapi hanya terdaftar di DTKS belum tentu mendapatkan bantuan, sedangkan untuk pengusulan bantuan BPNT dan PKH itu kuota Cimahi sudah penuh,&quot; tegasnya.</p>

<p>Warga yang sudah tercantum dalam DTKS, terang Ratri, diarahkan untuk melakukan pencetakan di Mal Pelayanan Publik (MPP) Kota Cimahi. Sehingga berdasarkan informasi, kata dia, proses pencetakan surat keterangan DTKS pun mengalami peningkatan dimusim PPDB ini.</p>

<p>Ratri menjelaskan, warga membutuhkan surat keterangan tersebut untuk PPDB jalur afirmasi baik tingkat SMP maupun SMA sederajat serta kebutuhan bantuan Kartu Indonesia Pintar (KIP) di perguruan tinggi.&nbsp;</p>

<p>&quot;Makanya angka pencetakan surat DTKS di MPP meningkat, sehari bisa 30 orang lebih. Untuk bulan Mei ini baru PPDB SMA sama KIP kuliah yang banyak mengakses. Tahun lalu cetak DTKS bulan Mei 178 orang, bulan Juni 479 orang,&quot; ujarnya.</p>

<p>Untuk mengurangi kepadatan pencetakan surat keterangan DTKS, Dinas Sosial Kota Cimahi mengembangkam inovasi pelayanan online pencetakan DTKS yang dapat diakses cendolasem.cimahikota.go.id yang sudah bisa diakes sejak tanggal 23 Mei 2024</p>

<p>&quot;Selain itu bagi warga kota cimahi yang akan mengusulkan diri ke DTKS atau menyanggah dapat mengakses usulan mandiri melalui cekbansos.kemensos.go.id,&quot; imbuhnya.</p>

<p>Ratri juga mengatakan pihaknya sudah berkordinasi dengan Dinas Pendidikan bahwa untuk jalur Afirmasi PPDB Sekolah diprioritaskan bagi warga yang menerima bantuan BPNT dan PKH, bukan hanya tercantum di DTKS saja.</p>

<p>Ratri menambahkan di Kota Cimahi ada sekitar 32.285 Keluarga Penerima Manfaat (KPM) penerima BPNT dan sekitar 11.664 KPM penerima PKH data terhitung hingga Mei 2024.</p>

<p>&quot;Data tersebut hingga bulan Mei 2024, dan biasanya naik turun tergantung dari data masuk,&quot; katanya.</p>
',
                'CIMAHI.- Pj. Wali Kota Cimahi Dicky Saromi melakukan peletakan batu pertama pembangunan Sistem Pengelolaan air Limbah Domestik Terpusat (SPALD-T) di RW 01 Kelurahan Melong Kecamatan Cimahi Selatan Kota Cimahi. Sebanyak 50 kepala keluarga disekitarnya mendapat manfaat dari pembangunan tersebut untuk peningkatan kualitas sanitasi lingkungan.

Kegiatan merupakan program bantuan BRI peduli dan Forum ITB Angkatan Tahun 1984. Dana pembangunan SPALD-T berasal dari dana Tanggung Jawab Sosial dan Lingkungan (TJSL) Bank BRI sebesar Rp 500 juta rupiah.
Sekretaris Daerah Kota Cimahi Dikdik S. Nugrahawan dalam laporannya menyampaikan tujuan dari pembangunan SPALD yaitu meningkatkan kolaborasi multi pihak sebagai mitra pembangunan khususnya dalam penyediaan sarana sanitasi.

"Keberadaan SPALD dapat meningkatkan kualitas hidup masyarakat di kawasan padat penduduk serta menurunkan faktor risiko stunting," katanya.

Pj. Wali Kota Cimahi Dicky Saromi dalam sambutannya sangat mengapresiasi pentahelix collaboration yang terwujud dalam menangani sanitasi di Kota Cimahi. "Bantuan ini sangat mendukung tujuan Cimahi dalam mewujudkan new zero stunting dan bebas kawasan kumuh," ungkapnya.

Dicky menyebutkan bahwa tahun 2024, pemerintah menargetkan angka stunting nasional dari 21,6% harus turun menjadi 14%.

"Sanitasi yang baik membawa lingkungan yang baik, terutama bagi generasi penerus kita yaitu anak-anak kita agar terbebas dari stunting," ucapnya.

Komisaris BRI Nurmaria Sarosa menyebutkan, dana CSR BRI dimanfaatkan untuk membantu meningkatkan kesejahtahteraan masyarakat. "Dari BRI program CSR, kami manfaatkan untuk masyakyat. InsyaAllah program ini akan kami teruskan karena kita masih butuh banyak perbaikan di bidang sanitasi" tuturnya.

Senada Nurmaria, Ketua forum ITB\'84 VH. Gadjahmada juga menyebutkan bahwa Forum ITB \'84 mempunyai kepedulian terhadap kebutuhan masyarakat "Kami berupaya mengembalikan apa yang sudah kami terima, ada teman-teman yang punya kebutuhan, ada teman-teman yang bisa memberikan bantuan.  Sinergi di antara kami semoga bisa membantu dan kembali kepada masyarakat,\" tuturnya.**'
            ];
            $berita_rand = $berita[array_rand($berita)];

            Announcement::create([
                'title' => $title,
                'description' => $berita_rand,
                'image' => $image_rand,
                'slug' => Str::slug($title),
                'user_id' => 1,
            ]);
        }
    }
}
