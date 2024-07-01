<?php

namespace Database\Seeders;

use App\Models\ProfileKelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileKelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfileKelurahan::insert([
            [
                'type' => 'tentang',
                'data' => '
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kelurahan Cibeber, yang terletak di Kota Cimahi, merupakan salah satu daerah yang sarat dengan keindahan dan kekayaan budaya. Dikelilingi oleh pemandangan alam yang memukau, Cibeber menawarkan udara segar dan suasana yang tenang, ideal untuk mereka yang mencari ketenangan dari hiruk-pikuk perkotaan. Berjalan di sekitar kelurahan ini, Anda akan menemukan berbagai macam pepohonan rindang dan taman-taman kecil yang menambah keasrian lingkungan, menjadikannya tempat yang sempurna untuk berjalan-jalan santai atau bersantai dengan keluarga.</p>

                    <p><img alt="" src="images/foto-1_1719556235.jpeg" width="100%"/></p>

                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Selain keindahan alamnya, Cibeber juga kaya akan warisan budaya dan sejarah. Berbagai kegiatan adat dan tradisi lokal masih dilestarikan oleh masyarakat setempat, memberikan warna tersendiri bagi kelurahan ini. Pasar-pasar tradisional yang ada di Cibeber menampilkan beragam produk lokal, dari makanan khas hingga kerajinan tangan, mencerminkan keragaman budaya dan kreativitas warga. Kehangatan dan keramahan penduduknya membuat setiap pengunjung merasa diterima dan menjadi bagian dari komunitas.</p>

                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dalam segi pembangunan, Cibeber terus berkembang dengan infrastruktur yang semakin modern, namun tetap mempertahankan keasriannya. Fasilitas umum seperti sekolah, puskesmas, dan ruang publik lainnya tersedia untuk memenuhi kebutuhan warga. Pembangunan yang berkelanjutan ini menunjukkan bahwa Cibeber tidak hanya berfokus pada kemajuan fisik, tetapi juga pada peningkatan kualitas hidup masyarakatnya. Dengan perpaduan antara keindahan alam, kekayaan budaya, dan pembangunan yang berkelanjutan, Kelurahan Cibeber menjadi salah satu permata tersembunyi di Kota Cimahi yang patut untuk dijelajahi dan dinikmati.</p>

                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'visimisi',
                'data' => '
                    <p><strong>Visi</strong></p>

                    <p>&quot;Mewujudkan Kelurahan Cibeber yang Sejahtera, Berdaya Saing, dan Berkelanjutan melalui Peningkatan Kualitas Hidup Masyarakat serta Pelestarian Lingkungan dan Budaya Lokal.&quot;</p>

                    <p><strong>Misi</strong></p>

                    <ul>
                        <li>
                        <p><strong>Meningkatkan Kesejahteraan Masyarakat:</strong></p>

                        <ul>
                            <li>
                            <p>Mengembangkan program-program pemberdayaan ekonomi masyarakat.</p>
                            </li>
                            <li>
                            <p>Meningkatkan akses terhadap layanan kesehatan dan pendidikan yang berkualitas.</p>
                            </li>
                            <li>
                            <p>Mendorong partisipasi aktif masyarakat dalam kegiatan sosial dan ekonomi.</p>
                            </li>
                        </ul>
                        </li>
                        <li>
                        <p><strong>Memperkuat Infrastruktur dan Pelayanan Publik:</strong></p>

                        <ul>
                            <li>
                            <p>Mengoptimalkan pembangunan infrastruktur yang berkelanjutan dan ramah lingkungan.</p>
                            </li>
                            <li>
                            <p>Meningkatkan kualitas dan efisiensi pelayanan publik.</p>
                            </li>
                            <li>
                            <p>Mengembangkan fasilitas umum yang mendukung kebutuhan masyarakat.</p>
                            </li>
                        </ul>
                        </li>
                        <li>
                        <p><strong>Melestarikan Lingkungan dan Budaya Lokal:</strong></p>

                        <ul>
                            <li>
                            <p>Mengimplementasikan program pelestarian lingkungan dan pengelolaan sumber daya alam yang berkelanjutan.</p>
                            </li>
                            <li>
                            <p>Menjaga dan melestarikan tradisi, adat istiadat, dan kebudayaan lokal.</p>
                            </li>
                            <li>
                            <p>Meningkatkan kesadaran masyarakat akan pentingnya pelestarian lingkungan dan budaya.</p>
                            </li>
                        </ul>
                        </li>
                        <li>
                        <p><strong>Meningkatkan Tata Kelola Pemerintahan yang Baik:</strong></p>

                        <ul>
                            <li>
                            <p>Meningkatkan transparansi, akuntabilitas, dan partisipasi masyarakat dalam proses pemerintahan.</p>
                            </li>
                            <li>
                            <p>Membangun sistem informasi dan komunikasi yang efektif antara pemerintah dan masyarakat.</p>
                            </li>
                            <li>
                            <p>Meningkatkan kapasitas dan kompetensi aparatur kelurahan dalam memberikan pelayanan yang prima.</p>
                            </li>
                        </ul>
                        </li>
                        <li>
                        <p><strong>Mendorong Partisipasi dan Kerjasama Antarwarga:</strong></p>

                        <ul>
                            <li>
                            <p>Membangun semangat gotong royong dan solidaritas di antara warga.</p>
                            </li>
                            <li>
                            <p>Mendorong kerjasama antara masyarakat, pemerintah, dan pihak swasta dalam pembangunan kelurahan.</p>
                            </li>
                            <li>
                            <p>Mengembangkan forum-forum komunikasi untuk menampung aspirasi dan ide-ide kreatif dari masyarakat.</p>
                            </li>
                        </ul>
                        </li>
                        <li>
                        <p>Dengan visi dan misi ini, Kelurahan Cibeber berkomitmen untuk menjadi kelurahan yang maju, sejahtera, dan lestari, di mana masyarakatnya hidup dalam harmoni dengan alam dan budaya lokal, serta memiliki kualitas hidup yang semakin baik.</p>
                        </li>
                    </ul>

                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'sejarah',
                'data' => '
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kelurahan Cibeber, yang terletak di Kota Cimahi, memiliki sejarah panjang yang kaya akan nilai budaya dan tradisi. Nama &quot;Cibeber&quot; sendiri berasal dari bahasa Sunda, yaitu &quot;ci&quot; yang berarti air dan &quot;beber&quot; yang berarti membentang luas. Hal ini menggambarkan kelurahan ini sebagai daerah yang dulunya dikenal dengan sumber daya air yang melimpah dan lingkungan alam yang luas serta subur.</p>

                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pada masa kolonial Belanda, wilayah Cibeber dikenal sebagai salah satu daerah perkebunan yang penting. Banyak penduduk setempat yang bekerja di perkebunan tersebut, yang sebagian besar menghasilkan kopi dan teh. Perkebunan ini menjadi salah satu sumber utama ekonomi warga pada masa itu. Selain itu, Cibeber juga menjadi saksi bisu dari berbagai peristiwa bersejarah, termasuk perjuangan kemerdekaan Indonesia, di mana banyak pahlawan lokal yang berjuang untuk kebebasan.</p>

                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Setelah Indonesia merdeka, Cibeber mengalami berbagai perubahan administratif. Pada awalnya, Cibeber merupakan bagian dari wilayah Kecamatan Cimahi Selatan. Seiring dengan perkembangan kota dan peningkatan jumlah penduduk, wilayah ini kemudian ditetapkan sebagai kelurahan tersendiri. Pada tahun-tahun berikutnya, pembangunan infrastruktur seperti jalan, sekolah, dan fasilitas kesehatan semakin gencar dilakukan untuk meningkatkan kualitas hidup masyarakat.</p>

                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Dalam beberapa dekade terakhir, Cibeber telah mengalami transformasi signifikan dengan hadirnya berbagai program pembangunan yang bertujuan untuk meningkatkan kesejahteraan warga. Meskipun demikian, nilai-nilai budaya dan tradisi lokal tetap dijaga dan dilestarikan oleh masyarakat setempat. Berbagai kegiatan adat, seperti upacara adat Sunda dan festival budaya, masih rutin diselenggarakan dan menjadi bagian tak terpisahkan dari kehidupan sehari-hari warga Cibeber.</p>

                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Kini, Kelurahan Cibeber dikenal sebagai daerah yang berkembang pesat namun tetap mempertahankan keasrian dan kekayaan budayanya. Dengan perpaduan antara sejarah yang kaya dan pembangunan yang berkelanjutan, Cibeber terus berusaha untuk menjadi tempat yang lebih baik bagi generasi sekarang dan mendatang.</p>

                    <p>&nbsp;</p>

                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'geografis',
                'data' => json_encode([
                    'map' => "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.63559455453!2d107.50518878635513!3d-6.89605198577566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e503ce53d5eb%3A0x8e2c9ed5ffc073bd!2sCibeber%2C%20Cimahi%20Selatan%2C%20Cimahi%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1718941351846!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>",
                    'deskripsi' => '
                        <p>Kelurahan Cibeber adalah salah satu kelurahan yang terletak di Kecamatan Cimahi Selatan, Kota Cimahi, Provinsi Jawa Barat, Indonesia. Kelurahan ini dikenal sebagai kelurahan paling barat di Kota Cimahi, berbatasan langsung dengan Kecamatan Batujajar dan Kecamatan Padalarang.</p>

                        <p><strong>Informasi Geografis:</strong></p>

                        <ul>
                            <li><strong>Luas wilayah:</strong> 332,56 km&sup2;</li>
                            <li><strong>Populasi:</strong> 21.109 jiwa</li>
                            <li><strong>Kepadatan penduduk:</strong> 63 jiwa/km&sup2;</li>
                            <li><strong>Kodepos:</strong> 40531</li>
                            <li><strong>Kode Kemendagri:</strong> 32.77.01.1005</li>
                            <li><strong>Kode BPS:</strong> 3277010005</li>
                        </ul>

                        <p><strong>Lokasi Penting:</strong></p>

                        <ul>
                            <li>Di Kelurahan Cibeber terdapat Universitas Jenderal Ahmad Yani (Unjani), yang merupakan salah satu universitas ternama di Kota Cimahi.</li>
                        </ul>

                        <p><strong>Batas Wilayah:</strong></p>

                        <ul>
                            <li><strong>Utara:</strong> Kecamatan Batujajar</li>
                            <li><strong>Barat:</strong> Kecamatan Padalarang</li>
                        </ul>

                        <p>Kelurahan Cibeber juga memiliki berbagai fasilitas umum seperti layanan ambulance, kantor Polsek Cimahi Selatan, PLN Kota Cimahi, Damkar Kota Cimahi, BPBD Kota Cimahi, dan Puskesmas Cibeber.</p>
                    '
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'demografi',
                'data' => '
                  <p>Gambaran Demografi merupakan gambaran kependudukan dalam arti luas terhadap perkembangan dan persebarannya. Oleh karena itu jumlah penduduk yang besar merupakan modal dasar yang efektif bagi pembangunan yang berkelanjutan. Jumlah penduduk yang besar dan berkualitas baik dengan pertumbuhan yang teratur akan menjadi dasar dalam mencapai tujuan pembangunan.</p>

<ol>
	<li><strong>Jumlah Penduduk</strong></li>
</ol>

<p>Berdasarkan Data Administrasi Pemerintahan Desa, jumlah penduduk yang tercatat secara administrasi pada tahun 2023 berjumlah 3.088 jiwa tersebar di 3 (Tiga) RW. Dari jumlah penduduk tersebut, jumlah laki laki sebanyak 1.521 jiwa dan perempuan sebanyak 1.567 Jiwa.</p>

<p>Tabel. 1&nbsp;Jumlah Penduduk tahun 2023</p>

<table align="center">
	<tbody>
		<tr>
			<td>
			<p>RW</p>
			</td>
			<td>
			<p>JUMLAH</p>
			</td>
			<td>
			<p>Laki-laki</p>

			<p>(jiwa)</p>
			</td>
			<td>
			<p>Perempuan</p>

			<p>(jiwa)</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>01</p>
			</td>
			<td>
			<p>1.076</p>
			</td>
			<td>
			<p>522</p>
			</td>
			<td>
			<p>554</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>02</p>
			</td>
			<td>
			<p>857</p>
			</td>
			<td>
			<p>427</p>
			</td>
			<td>
			<p>430</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>03</p>
			</td>
			<td>
			<p>1.155</p>
			</td>
			<td>
			<p>572</p>
			</td>
			<td>
			<p>583</p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Jumlah</p>
			</td>
			<td>
			<p>3.088</p>
			</td>
			<td>
			<p>1521</p>
			</td>
			<td>
			<p>1567</p>
			</td>
		</tr>
	</tbody>
</table>

<p><em>Sumber : Sistem Informasi Desa </em><a href="https://sid.kradenan.desa.id/"><em>https://sid.kradenan.desa.id/</em></a></p>

                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'struktur_organisasi',
                'data' => 'struktur-organisasi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'kontak',
                'data' => json_encode([
                    'email' => 'cibeber@cimahikota.go.id',
                    'no_telp' => '022- 6672994',
                    'alamat' => 'Jl. Ibu Ganirah No. 41 Cibeber Cimahi',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'sosial_media',
                'data' => json_encode([
                    'facebook' => 'https://facebook.com/',
                    'twitter' => 'https://twitter.com/',
                    'instagram' => 'https://instagram.com/',
                    'youtube' => 'https://youtube.com/',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
