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
                <p>Cibeber adalah salah satu kelurahan di Kecamatan Cimahi Selatan, Kota Cimahi, Jawa Barat, Indonesia, dan merupakan kelurahan paling Barat di Kota Cimahi yang berbatasan langsung dengan Kecamatan Batujajar dan Kecamatan Padalarang.</p>

                <p>Di kelurahan ini terdapat universitas yang ternama di Kota Cimahi, yaitu Universitas Jenderal Ahmad Yani (Unjani).</p>
                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'visimisi',
                'data' => '
                <h2><strong>Visi</strong></h2>

                <p>Menjadi kelurahan yang inklusif, inovatif, dan berdaya saing di tingkat nasional.</p>

                <h2><strong>Misi</strong></h2>

                <ul>
                    <li>Mengutamakan pelayanan publik yang berkualitas dan responsif.</li>
                    <li>Membangun lingkungan yang bersih, hijau, dan berkelanjutan.</li>
                    <li>Meningkatkan kualitas hidup masyarakat melalui program pendidikan dan kesehatan.</li>
                    <li>Mendorong partisipasi aktif warga dalam pembangunan dan pengelolaan kelurahan.</li>
                </ul>
                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'sejarah',
                'data' => '
                <p>Nama Cimahi berasal dari kata bahasa Sunda&nbsp;<strong>cai mahi</strong>&nbsp;yang berarti &quot;air yang cukup&quot;. Cimahi mulai dikenal ketika pada tahun 1811, Gubernur&nbsp;<strong>Jenderal Herman Willem Daendels</strong>&nbsp;membuat jalan Anyer-Panarukan, dengan dibuatnya pos penjagaan di Alun-Alun Cimahi sekarang.</p>

                <p>Tahun 1874&ndash;1893, dilaksanakan pembuatan jalan kereta api Bandung-Cianjur sekaligus pembuatan Stasiun Cimahi. Tahun 1886 dibangun pusat pendidikan militer beserta fasilitas lainnya seperti Rumah Sakit Dustira dan rumah tahanan militer. Pada tahun 1935, Cimahi ditetapkan sebagai kecamatan berdasarkan lampiran staad tahun 1935.</p>

                <p>Pada tahun 1962, dibentuk Kawedanaan Cimahi yang meliputi Kecamatan Cimahi, Padalarang, Batujajar, dan Cipatat.</p>

                <p>Cimahi yang berasal dari status Kecamatan yang berada di wilayah Kabupaten Bandung sesuai dengan perkembangan dan kemajuannya maka berdasarkan Undang-undang Republik Indonesia Nomor 5 Tahun 1974 tentang Pemerintahan dan Otonomi Daerah dan Peraturan Pemerintah Nomor 29 Tahun 1975 tentang Pembentukan Kota Administratif, Cimahi dapat ditingkatkan statusnya dari Kecamatan menjadi Kota Administratif yang berada di wilayah Kabupaten Bandung.</p>

                <p>Pada tahun 2001, Kota Cimahi statusnya diangkat menjadi kota otonom berdasarkan Undang Undang Republik Indonesia Nomor 9 Tahun 2001.</p>
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

                <table border="1" cellspacing="0" style="border-collapse:collapse; width:425px">
                    <tbody>
                        <tr>
                            <td style="background-color:#dbe4f0; border-color:black; height:29.1pt; width:74.7pt">
                            <p>RW</p>
                            </td>
                            <td style="background-color:#dbe4f0; border-color:black; height:29.1pt; width:67.05pt">
                            <p>JUMLAH</p>
                            </td>
                            <td style="background-color:#dbe4f0; border-color:black; height:29.1pt; width:3.0cm">
                            <p>Laki-laki</p>

                            <p>(jiwa)</p>
                            </td>
                            <td style="background-color:#dbe4f0; border-color:black; height:29.1pt; width:92.15pt">
                            <p>Perempuan</p>

                            <p>(jiwa)</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:17.95pt; vertical-align:top; width:74.7pt">
                            <p>01</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:67.05pt">
                            <p>1.076</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:3.0cm">
                            <p>522</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:92.15pt">
                            <p>554</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:17.95pt; vertical-align:top; width:74.7pt">
                            <p>02</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:67.05pt">
                            <p>857</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:3.0cm">
                            <p>427</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:92.15pt">
                            <p>430</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:17.95pt; vertical-align:top; width:74.7pt">
                            <p>03</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:67.05pt">
                            <p>1.155</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:3.0cm">
                            <p>572</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:92.15pt">
                            <p>583</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:17.95pt; vertical-align:top; width:74.7pt">
                            <p>Jumlah</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:67.05pt">
                            <p>3.088</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:3.0cm">
                            <p>1521</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:92.15pt">
                            <p>1567</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p><em>Sumber : Sistem Informasi Desa </em><a href="https://sid.kradenan.desa.id/"><em>https://sid.kradenan.desa.id/</em></a></p>

                <ol>
                    <li>Jumlah Penduduk Menurut Wilayah dan Gender</li>
                </ol>

                <p>Guna melakukan kebijakan yang berprespektif gender maka sangat diperlukan pengetahuan mengenai persebaran penduduk berdasarkan jenis kelamin. Kebijakan pada persebaran penduduk yang seimbang antara laki- laki dan perempuan sudah seharusnya berbeda dengan persebaran yang didominasi salah satunya, dengan demikian kebijakan yang diambil lebih efektif. Guna melakukan kebijakan yang berprespektif gender maka sangat diperlukan pengetahuan mengenai persebaran penduduk berdasarkan jenis kelamin.</p>

                <p>Berikut Jumlah penduduk Desa Kradenan menurut jenis kelamin per RW tercantum dalam tabel sebagai berikut :</p>

                <p>Tabel. 2&nbsp;Jumlah Penduduk Desa Kradenan Menurut Jenis Kelamin per Rw Tahun 2023&nbsp;(dalam jiwa)</p>

                <table border="1" cellspacing="0" style="border-collapse:collapse; width:539px">
                    <tbody>
                        <tr>
                            <td style="background-color:#d9d9d9; border-color:black; height:28.4pt; width:42.55pt">
                            <p>NO</p>
                            </td>
                            <td style="background-color:#d9d9d9; border-color:black; height:28.4pt; width:3.0cm">
                            <p>RW</p>
                            </td>
                            <td style="background-color:#d9d9d9; border-color:black; height:28.4pt; width:97.6pt">
                            <p>laki-laki (Jiwa)</p>
                            </td>
                            <td style="background-color:#d9d9d9; border-color:black; height:28.4pt; width:93.75pt">
                            <p>Perempuan (Jiwa)</p>
                            </td>
                            <td style="background-color:#d9d9d9; border-color:black; height:28.4pt; width:3.0cm">
                            <p>Jumlah</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:17.35pt; vertical-align:top; width:42.55pt">
                            <p>1</p>
                            </td>
                            <td style="height:17.35pt; vertical-align:top; width:3.0cm">
                            <p>RW. 001</p>
                            </td>
                            <td style="height:17.35pt; vertical-align:top; width:97.6pt">
                            <p>522</p>
                            </td>
                            <td style="height:17.35pt; vertical-align:top; width:93.75pt">
                            <p>554</p>
                            </td>
                            <td style="height:17.35pt; vertical-align:top; width:3.0cm">
                            <p>1.076</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.65pt; vertical-align:top; width:42.55pt">
                            <p>2</p>
                            </td>
                            <td style="height:14.65pt; vertical-align:top; width:3.0cm">
                            <p>RW. 002</p>
                            </td>
                            <td style="height:14.65pt; vertical-align:top; width:97.6pt">
                            <p>427</p>
                            </td>
                            <td style="height:14.65pt; vertical-align:top; width:93.75pt">
                            <p>430</p>
                            </td>
                            <td style="height:14.65pt; vertical-align:top; width:3.0cm">
                            <p>857</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:17.25pt; vertical-align:top; width:42.55pt">
                            <p>3</p>
                            </td>
                            <td style="height:17.25pt; vertical-align:top; width:3.0cm">
                            <p>RW. 003</p>
                            </td>
                            <td style="height:17.25pt; vertical-align:top; width:97.6pt">
                            <p>572</p>
                            </td>
                            <td style="height:17.25pt; vertical-align:top; width:93.75pt">
                            <p>583</p>
                            </td>
                            <td style="height:17.25pt; vertical-align:top; width:3.0cm">
                            <p>1.155</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="border-color:black; height:17.25pt; vertical-align:top; width:127.6pt">
                            <p>Jumlah</p>
                            </td>
                            <td style="height:17.25pt; vertical-align:top; width:97.6pt">
                            <p>1.521</p>
                            </td>
                            <td style="height:17.25pt; vertical-align:top; width:93.75pt">
                            <p>1.567</p>
                            </td>
                            <td style="height:17.25pt; vertical-align:top; width:3.0cm">
                            <p>3.088</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p><em>Sumber : Sistem Informasi Desa </em><a href="https://sid.kradenan.desa.id/data-wilayah">https://sid.kradenan.desa.id/</a></p>

                <ol>
                    <li>Jumlah Penduduk Menurut Umur</li>
                </ol>

                <p>Guna menentukan kebijakan pembangunan secara tepat diperlukan pula data kependudukan berdasarkan kelompok umur. Persebaran penduduk menurut umur sangat diperlukan untuk mengambil kebijakan yang berkaitan dengan banyak sektor seperti tenaga kerja, pendidikan, dan lain-lain. Dengan mengetahui sebaran penduduk kelompok umur dominan disuatu wilayah maka dapat dilakukan kebijakan yang lebih tepat dan efisien untuk pengembangan wilayah tersebut. Jumlah penduduk Desa Kradenan berdasarkan kelompok umur tahun 2023 pada tercantum dalam tabel sebagai&nbsp; berikut :</p>

                <p>Tabel. 3&nbsp;Jumlah penduduk Desa Kradenan&nbsp;Berdasarkan kelompok umur tahun 2022</p>

                <table border="1" cellspacing="0" style="border-collapse:collapse; width:522px">
                    <tbody>
                        <tr>
                            <td style="background-color:#ededed; border-color:black; height:36.7pt; width:43.0pt">
                            <p>&nbsp;</p>

                            <p><strong>No</strong></p>
                            </td>
                            <td style="background-color:#ededed; border-color:black; height:36.7pt; width:124.25pt">
                            <p>&nbsp;</p>

                            <p><strong>Umur (Rentang)</strong></p>
                            </td>
                            <td style="background-color:#ededed; border-color:black; height:36.7pt; width:66.65pt">
                            <p>&nbsp;</p>

                            <p><strong>Jumlah</strong></p>
                            </td>
                            <td style="background-color:#ededed; border-color:black; height:36.7pt; width:78.55pt">
                            <p>&nbsp;</p>

                            <p><strong>Laki-laki</strong></p>
                            </td>
                            <td style="background-color:#ededed; border-color:black; height:36.7pt; width:78.9pt">
                            <p>&nbsp;</p>

                            <p><strong>Perempuan</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:15.0pt; vertical-align:top; width:43.0pt">
                            <p>1</p>
                            </td>
                            <td style="height:15.0pt; vertical-align:top; width:124.25pt">
                            <p>0 S/D 1 TAHUN</p>
                            </td>
                            <td style="height:15.0pt; vertical-align:top; width:66.65pt">
                            <p>41</p>
                            </td>
                            <td style="height:15.0pt; vertical-align:top; width:78.55pt">
                            <p>21</p>
                            </td>
                            <td style="height:15.0pt; vertical-align:top; width:78.9pt">
                            <p>20</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>2</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>2 S/D 4 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>127</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>67</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>60</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>3</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>5 S/D 9 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>231</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>113</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>118</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>4</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>10 S/D 14 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>242</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>130</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>112</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>5</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>15 S/D 19 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>240</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>127</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>113</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>6</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>20 S/D 24 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>252</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>112</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>140</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>7</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>25 S/D 29 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>224</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>119</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>105</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>8</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>30 S/D 34 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>211</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>102</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>109</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>9</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>35 S/D 39 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>234</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>121</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>113</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>10</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>40 S/D 44 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>263</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>124</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>139</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>11</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>45 S/D 49 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>257</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>139</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>118</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.05pt; vertical-align:top; width:43.0pt">
                            <p>12</p>
                            </td>
                            <td style="height:14.05pt; vertical-align:top; width:124.25pt">
                            <p>50 S/D 54 TAHUN</p>
                            </td>
                            <td style="height:14.05pt; vertical-align:top; width:66.65pt">
                            <p>207</p>
                            </td>
                            <td style="height:14.05pt; vertical-align:top; width:78.55pt">
                            <p>102</p>
                            </td>
                            <td style="height:14.05pt; vertical-align:top; width:78.9pt">
                            <p>105</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.1pt; vertical-align:top; width:43.0pt">
                            <p>13</p>
                            </td>
                            <td style="height:14.1pt; vertical-align:top; width:124.25pt">
                            <p>55 S/D 59 TAHUN</p>
                            </td>
                            <td style="height:14.1pt; vertical-align:top; width:66.65pt">
                            <p>182</p>
                            </td>
                            <td style="height:14.1pt; vertical-align:top; width:78.55pt">
                            <p>85</p>
                            </td>
                            <td style="height:14.1pt; vertical-align:top; width:78.9pt">
                            <p>97</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>14</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>60 S/D 64 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>125</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>59</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>66</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>15</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>65 S/D 69 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>116</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>55</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>61</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>16</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>70 S/D 74 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>74</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>24</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>50</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>17</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>DI ATAS 75 TAHUN</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>62</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>21</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>41</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:14.15pt; vertical-align:top; width:43.0pt">
                            <p>&nbsp;</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:124.25pt">
                            <p>JUMLAH</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:66.65pt">
                            <p>3088</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.55pt">
                            <p>1521</p>
                            </td>
                            <td style="height:14.15pt; vertical-align:top; width:78.9pt">
                            <p>156</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p>Sumber : Sistem Informasi Desa https://sid.kradenan.desa.id/</p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <ol>
                    <li>Jumlah Penduduk Menurut Pendidikan</li>
                </ol>

                <p>Jumlah penduduk berdasarkan pendidikan dapat digunakan untuk mengetahui seberapa banyak penduduk usia sekolah yang sudah memanfaatkan fasilitas pendidikan. Jumlah penduduk Desa Kradenan berdasarkan pendidikan tahun 2023 tercantum dalam table berikut :</p>

                <p>Tabel. 4&nbsp;Jumlah Penduduk Desa Kradenan Berdasarkan Pendidikan</p>

                <table border="1" cellspacing="0" style="border-collapse:collapse; width:605px">
                    <tbody>
                        <tr>
                            <td style="background-color:#ededed; border-color:black; height:38.85pt; width:35.45pt">
                            <p>&nbsp;</p>

                            <p><strong>No</strong></p>
                            </td>
                            <td style="background-color:#ededed; border-color:black; height:38.85pt; width:205.55pt">
                            <p>&nbsp;</p>

                            <p><strong>Pendidikan Dalam KK</strong></p>
                            </td>
                            <td style="background-color:#ededed; border-color:black; height:38.85pt; width:2.0cm">
                            <p>&nbsp;</p>

                            <p><strong>Jumlah</strong></p>
                            </td>
                            <td style="background-color:#ededed; border-color:black; height:38.85pt; width:77.75pt">
                            <p>&nbsp;</p>

                            <p><strong>Laki-laki</strong></p>
                            </td>
                            <td style="background-color:#ededed; border-color:black; height:38.85pt; width:78.15pt">
                            <p>&nbsp;</p>

                            <p><strong>Perempuan</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.85pt; vertical-align:top; width:35.45pt">
                            <p>1</p>
                            </td>
                            <td style="height:12.85pt; vertical-align:top; width:205.55pt">
                            <p>TIDAK / BELUM SEKOLAH</p>
                            </td>
                            <td style="height:12.85pt; vertical-align:top; width:2.0cm">
                            <p>542</p>
                            </td>
                            <td style="height:12.85pt; vertical-align:top; width:77.75pt">
                            <p>267</p>
                            </td>
                            <td style="height:12.85pt; vertical-align:top; width:78.15pt">
                            <p>275</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.65pt; vertical-align:top; width:35.45pt">
                            <p>2</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:205.55pt">
                            <p>BELUM TAMAT SD/SEDERAJAT</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:2.0cm">
                            <p>318</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:77.75pt">
                            <p>156</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:78.15pt">
                            <p>162</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.55pt; vertical-align:top; width:35.45pt">
                            <p>3</p>
                            </td>
                            <td style="height:12.55pt; vertical-align:top; width:205.55pt">
                            <p>TAMAT SD / SEDERAJAT</p>
                            </td>
                            <td style="height:12.55pt; vertical-align:top; width:2.0cm">
                            <p>914</p>
                            </td>
                            <td style="height:12.55pt; vertical-align:top; width:77.75pt">
                            <p>462</p>
                            </td>
                            <td style="height:12.55pt; vertical-align:top; width:78.15pt">
                            <p>452</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.65pt; vertical-align:top; width:35.45pt">
                            <p>4</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:205.55pt">
                            <p>SLTP/SEDERAJAT</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:2.0cm">
                            <p>597</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:77.75pt">
                            <p>283</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:78.15pt">
                            <p>314</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.65pt; vertical-align:top; width:35.45pt">
                            <p>5</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:205.55pt">
                            <p>SLTA / SEDERAJAT</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:2.0cm">
                            <p>576</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:77.75pt">
                            <p>294</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:78.15pt">
                            <p>282</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.65pt; vertical-align:top; width:35.45pt">
                            <p>6</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:205.55pt">
                            <p>DIPLOMA I / II</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:2.0cm">
                            <p>8</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:77.75pt">
                            <p>4</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:78.15pt">
                            <p>4</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.65pt; vertical-align:top; width:35.45pt">
                            <p>7</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:205.55pt">
                            <p>AKADEMI/ DIPLOMA III/S. MUDA</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:2.0cm">
                            <p>21</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:77.75pt">
                            <p>10</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:78.15pt">
                            <p>11</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.55pt; vertical-align:top; width:35.45pt">
                            <p>8</p>
                            </td>
                            <td style="height:12.55pt; vertical-align:top; width:205.55pt">
                            <p>DIPLOMA IV/ STRATA I</p>
                            </td>
                            <td style="height:12.55pt; vertical-align:top; width:2.0cm">
                            <p>111</p>
                            </td>
                            <td style="height:12.55pt; vertical-align:top; width:77.75pt">
                            <p>44</p>
                            </td>
                            <td style="height:12.55pt; vertical-align:top; width:78.15pt">
                            <p>67</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.65pt; vertical-align:top; width:35.45pt">
                            <p>9</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:205.55pt">
                            <p>STRATA II</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:2.0cm">
                            <p>1</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:77.75pt">
                            <p>1</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:78.15pt">
                            <p>0</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.65pt; vertical-align:top; width:35.45pt">
                            <p>10</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:205.55pt">
                            <p>STRATA III</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:2.0cm">
                            <p>0</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:77.75pt">
                            <p>0</p>
                            </td>
                            <td style="height:12.65pt; vertical-align:top; width:78.15pt">
                            <p>0</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:12.4pt; vertical-align:top; width:35.45pt">
                            <p>&nbsp;</p>
                            </td>
                            <td style="height:12.4pt; vertical-align:top; width:205.55pt">
                            <p>TOTAL</p>
                            </td>
                            <td style="height:12.4pt; vertical-align:top; width:2.0cm">
                            <p>3088</p>
                            </td>
                            <td style="height:12.4pt; vertical-align:top; width:77.75pt">
                            <p>1521</p>
                            </td>
                            <td style="height:12.4pt; vertical-align:top; width:78.15pt">
                            <p>1567</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sumber : Sistem Informasi Desa <a href="https://sid.kradenan.desa.id/">https://sid.kradenan.desa.id/</a></p>

                <p>Salah satu faktor penting yang tidak dapat diabaikan dalam kerangka pembangunan daerah adalah menyangkut kualitas sumber daya manusia (SDM) yang berkaitan erat dengan kualitas tenaga kerja yang tersedia untuk mengisi kesempatan kerja. Kualitas tenaga kerja disuatu wilayah sangat ditentukan oleh tingkat pendidikan. Artinya semakin tinggi pendidikan yang ditamatkan penduduk suatu wilayah maka semakin baik kualitas tenaga kerjanya.</p>

                <ol>
                    <li><strong>Jumlah Keluarga</strong>

                    <ol>
                        <li><strong>Jumlah Keluarga Menurut Wilayah</strong></li>
                    </ol>
                    </li>
                </ol>

                <p>Berdasarkan data monografi semester I tahun 2023, jumlah keluarga atau KK&nbsp;&nbsp; tercantum dalam tabel sebagai berikut :</p>

                <p>Tabel. 5&nbsp;Jumlah Keluarga atau KK (Kepala Keluarga) Desa Kradenan Semester I Tahun 2023</p>

                <table border="1" cellspacing="0" style="border-collapse:collapse; width:482px">
                    <tbody>
                        <tr>
                            <td style="background-color:#dbe4f0; border-color:black; height:29.1pt; width:77.95pt">
                            <p>RW</p>
                            </td>
                            <td style="background-color:#dbe4f0; border-color:black; height:29.1pt; width:59.25pt">
                            <p>KK</p>
                            </td>
                            <td style="background-color:#dbe4f0; border-color:black; height:29.1pt; width:103.75pt">
                            <p>KK (laki-laki)</p>
                            </td>
                            <td style="background-color:#dbe4f0; border-color:black; height:29.1pt; width:120.5pt">
                            <p>KK</p>

                            <p>(perempuan)</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:17.95pt; vertical-align:top; width:77.95pt">
                            <p>01</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:59.25pt">
                            <p>331</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:103.75pt">
                            <p>275</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:120.5pt">
                            <p>56</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:17.95pt; vertical-align:top; width:77.95pt">
                            <p>02</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:59.25pt">
                            <p>264</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:103.75pt">
                            <p>216</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:120.5pt">
                            <p>48</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:17.95pt; vertical-align:top; width:77.95pt">
                            <p>03</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:59.25pt">
                            <p>381</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:103.75pt">
                            <p>305</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:120.5pt">
                            <p>76</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-color:black; height:17.95pt; vertical-align:top; width:77.95pt">
                            <p>Jumlah</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:59.25pt">
                            <p>976</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:103.75pt">
                            <p>796</p>
                            </td>
                            <td style="height:17.95pt; vertical-align:top; width:120.5pt">
                            <p>180</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p>Sumber : Sistem Informasi Desa <a href="https://sid.kradenan.desa.id/">https://sid.kradenan.desa.id/</a></p>

                <p>Dilihat dari tabel diatas jumlah keluarga yang paling banyak terdapat di RW 03 (381 KK) dan terendah terdapat di RW 02 (264 KK)</p>
                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'struktur_organisasi',
                'data' => 'storage/struktur-organisasi.png',
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
