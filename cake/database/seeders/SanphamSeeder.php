<?php

namespace Database\Seeders;

use App\Models\sanpham;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanphamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp BT116',
                'mota' => '<p style="text-align:center"><span style="color:#e74c3c"><u><span style="font-size:20px"><strong>M&ocirc; tả về chiếc b&aacute;nh</strong></span></u></span></p>

                <p><span style="font-size:16px"><strong>B&aacute;nh kem hương bắp l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ kem, bột m&igrave;, đường, trứng v&agrave; hạt bắp. B&aacute;nh c&oacute; h&igrave;nh dạng tr&ograve;n hoặc vu&ocirc;ng, được phủ một lớp kem mịn v&agrave; trang tr&iacute; bằng những hạt bắp ngọt. B&aacute;nh kem hương bắp c&oacute; vị ngọt dịu, thơm m&ugrave;i bắp v&agrave; kem, rất hấp dẫn v&agrave; ph&ugrave; hợp cho những dịp sinh nhật, tiệc t&ugrave;ng hay l&agrave;m qu&agrave; tặng. B&aacute;nh kem hương bắp c&oacute; thể được bảo quản trong tủ lạnh từ 2 đến 3 ng&agrave;y m&agrave; kh&ocirc;ng bị cứng hay kh&ocirc;. </strong></span></p>

                <p><span style="font-size:16px"><strong>Để l&agrave;m b&aacute;nh kem hương bắp, bạn cần chuẩn bị những nguy&ecirc;n liệu sau:</strong></span></p>

                <ul>
                    <li><span style="font-size:16px">200g bột m&igrave;</span></li>
                    <li><span style="font-size:16px">150g đường</span></li>
                    <li><span style="font-size:16px">4 quả trứng</span></li>
                    <li><span style="font-size:16px">100ml sữa tươi</span></li>
                    <li><span style="font-size:16px">50g bơ</span></li>
                    <li><span style="font-size:16px">1 g&oacute;i men nở</span></li>
                    <li><span style="font-size:16px">1 muỗng c&agrave; ph&ecirc; vani</span></li>
                    <li><span style="font-size:16px">200ml kem tươi</span></li>
                    <li><span style="font-size:16px">100g đường k&iacute;nh</span></li>
                    <li><span style="font-size:16px">200g hạt bắp ngọt</span></li>
                </ul>

                <p>&nbsp;</p>

                <p><strong><span style="font-size:16px">C&aacute;c bước l&agrave;m b&aacute;nh kem hương bắp như sau:</span></strong></p>

                <p><span style="font-size:16px">Bước 1: Đ&aacute;nh trứng v&agrave; đường cho tan đều, sau đ&oacute; cho sữa tươi, bơ lạnh v&agrave; vani v&agrave;o v&agrave; đ&aacute;nh tiếp cho hỗn hợp mịn.<br />
                Bước 2: Cho men nở v&agrave;o bột m&igrave; v&agrave; r&acirc;y qua r&acirc;y lưới để loại bỏ cục. Sau đ&oacute;, cho hỗn hợp trứng v&agrave;o v&agrave; nh&agrave;o đều cho tới khi được một khối bột mềm v&agrave; kh&ocirc;ng d&iacute;nh tay.<br />
                Bước 3: L&agrave;m n&oacute;ng l&ograve; nướng ở nhiệt độ 180 độ C. D&ugrave;ng khu&ocirc;n b&aacute;nh tr&ograve;n hoặc vu&ocirc;ng c&oacute; l&oacute;t giấy nến, cho bột v&agrave;o v&agrave; d&agrave;n đều. Cho v&agrave;o l&ograve; nướng khoảng 25 ph&uacute;t cho tới khi ch&iacute;n v&agrave;ng.<br />
                Bước 4: Đun n&oacute;ng kem tươi v&agrave; đường k&iacute;nh trong một nồi nhỏ cho đến khi tan đều. Để nguội một ch&uacute;t rồi d&ugrave;ng m&aacute;y đ&aacute;nh kem để đ&aacute;nh cho kem d&agrave;y l&ecirc;n.<br />
                Bước 5: Lấy b&aacute;nh ra khỏi khu&ocirc;n v&agrave; để nguội ho&agrave;n to&agrave;n. Sau đ&oacute;, cắt miếng b&aacute;nh ra th&agrave;nh hai lớp. Phết một lớp kem l&ecirc;n lớp b&aacute;nh dưới, rải một &iacute;t hạt bắp l&ecirc;n rồi đặt lớp b&aacute;nh tr&ecirc;n l&ecirc;n. Phết lại một lớp kem l&ecirc;n to&agrave;n bộ bề mặt của b&aacute;nh v&agrave; trang tr&iacute; th&ecirc;m với những hạt bắp c&ograve;n lại.<br />
                Bước 6: Cho b&aacute;nh v&agrave;o tủ lạnh để kem cứng lại. Thưởng thức b&aacute;nh kem hương bắp ngon l&agrave;nh c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave;.</span></p>

                <p><span style="font-size:16px">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</span></p>

                ',
                'hinhanh' => 'KEMBAP-BT116.png',
                'loaisanpham_id' => 1,
                'giatien' => 400000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp BT111',
                'mota' => '<p style="text-align:center"><span style="color:#e74c3c"><u><span style="font-size:20px"><strong>M&ocirc; tả về chiếc b&aacute;nh</strong></span></u></span></p>

                <p><span style="font-size:16px"><strong>B&aacute;nh kem hương bắp l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ kem, bột m&igrave;, đường, trứng v&agrave; hạt bắp. B&aacute;nh c&oacute; h&igrave;nh dạng tr&ograve;n hoặc vu&ocirc;ng, được phủ một lớp kem mịn v&agrave; trang tr&iacute; bằng những hạt bắp ngọt. B&aacute;nh kem hương bắp c&oacute; vị ngọt dịu, thơm m&ugrave;i bắp v&agrave; kem, rất hấp dẫn v&agrave; ph&ugrave; hợp cho những dịp sinh nhật, tiệc t&ugrave;ng hay l&agrave;m qu&agrave; tặng. B&aacute;nh kem hương bắp c&oacute; thể được bảo quản trong tủ lạnh từ 2 đến 3 ng&agrave;y m&agrave; kh&ocirc;ng bị cứng hay kh&ocirc;. </strong></span></p>

                <p><span style="font-size:16px"><strong>Để l&agrave;m b&aacute;nh kem hương bắp, bạn cần chuẩn bị những nguy&ecirc;n liệu sau:</strong></span></p>

                <ul>
                    <li><span style="font-size:16px">200g bột m&igrave;</span></li>
                    <li><span style="font-size:16px">150g đường</span></li>
                    <li><span style="font-size:16px">4 quả trứng</span></li>
                    <li><span style="font-size:16px">100ml sữa tươi</span></li>
                    <li><span style="font-size:16px">50g bơ</span></li>
                    <li><span style="font-size:16px">1 g&oacute;i men nở</span></li>
                    <li><span style="font-size:16px">1 muỗng c&agrave; ph&ecirc; vani</span></li>
                    <li><span style="font-size:16px">200ml kem tươi</span></li>
                    <li><span style="font-size:16px">100g đường k&iacute;nh</span></li>
                    <li><span style="font-size:16px">200g hạt bắp ngọt</span></li>
                </ul>

                <p>&nbsp;</p>

                <p><strong><span style="font-size:16px">C&aacute;c bước l&agrave;m b&aacute;nh kem hương bắp như sau:</span></strong></p>

                <p><span style="font-size:16px">Bước 1: Đ&aacute;nh trứng v&agrave; đường cho tan đều, sau đ&oacute; cho sữa tươi, bơ lạnh v&agrave; vani v&agrave;o v&agrave; đ&aacute;nh tiếp cho hỗn hợp mịn.<br />
                Bước 2: Cho men nở v&agrave;o bột m&igrave; v&agrave; r&acirc;y qua r&acirc;y lưới để loại bỏ cục. Sau đ&oacute;, cho hỗn hợp trứng v&agrave;o v&agrave; nh&agrave;o đều cho tới khi được một khối bột mềm v&agrave; kh&ocirc;ng d&iacute;nh tay.<br />
                Bước 3: L&agrave;m n&oacute;ng l&ograve; nướng ở nhiệt độ 180 độ C. D&ugrave;ng khu&ocirc;n b&aacute;nh tr&ograve;n hoặc vu&ocirc;ng c&oacute; l&oacute;t giấy nến, cho bột v&agrave;o v&agrave; d&agrave;n đều. Cho v&agrave;o l&ograve; nướng khoảng 25 ph&uacute;t cho tới khi ch&iacute;n v&agrave;ng.<br />
                Bước 4: Đun n&oacute;ng kem tươi v&agrave; đường k&iacute;nh trong một nồi nhỏ cho đến khi tan đều. Để nguội một ch&uacute;t rồi d&ugrave;ng m&aacute;y đ&aacute;nh kem để đ&aacute;nh cho kem d&agrave;y l&ecirc;n.<br />
                Bước 5: Lấy b&aacute;nh ra khỏi khu&ocirc;n v&agrave; để nguội ho&agrave;n to&agrave;n. Sau đ&oacute;, cắt miếng b&aacute;nh ra th&agrave;nh hai lớp. Phết một lớp kem l&ecirc;n lớp b&aacute;nh dưới, rải một &iacute;t hạt bắp l&ecirc;n rồi đặt lớp b&aacute;nh tr&ecirc;n l&ecirc;n. Phết lại một lớp kem l&ecirc;n to&agrave;n bộ bề mặt của b&aacute;nh v&agrave; trang tr&iacute; th&ecirc;m với những hạt bắp c&ograve;n lại.<br />
                Bước 6: Cho b&aacute;nh v&agrave;o tủ lạnh để kem cứng lại. Thưởng thức b&aacute;nh kem hương bắp ngon l&agrave;nh c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave;.</span></p>

                <p><span style="font-size:16px">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</span></p>

                ',
                'hinhanh' => 'KEMBAP-BT111.png',
                'loaisanpham_id' => 1,
                'giatien' => 390000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp BT106',
                'mota' => '<p style="text-align:center"><span style="color:#e74c3c"><u><span style="font-size:20px"><strong>M&ocirc; tả về chiếc b&aacute;nh</strong></span></u></span></p>

                <p><span style="font-size:16px"><strong>B&aacute;nh kem hương bắp l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ kem, bột m&igrave;, đường, trứng v&agrave; hạt bắp. B&aacute;nh c&oacute; h&igrave;nh dạng tr&ograve;n hoặc vu&ocirc;ng, được phủ một lớp kem mịn v&agrave; trang tr&iacute; bằng những hạt bắp ngọt. B&aacute;nh kem hương bắp c&oacute; vị ngọt dịu, thơm m&ugrave;i bắp v&agrave; kem, rất hấp dẫn v&agrave; ph&ugrave; hợp cho những dịp sinh nhật, tiệc t&ugrave;ng hay l&agrave;m qu&agrave; tặng. B&aacute;nh kem hương bắp c&oacute; thể được bảo quản trong tủ lạnh từ 2 đến 3 ng&agrave;y m&agrave; kh&ocirc;ng bị cứng hay kh&ocirc;. </strong></span></p>

                <p><span style="font-size:16px"><strong>Để l&agrave;m b&aacute;nh kem hương bắp, bạn cần chuẩn bị những nguy&ecirc;n liệu sau:</strong></span></p>

                <ul>
                    <li><span style="font-size:16px">200g bột m&igrave;</span></li>
                    <li><span style="font-size:16px">150g đường</span></li>
                    <li><span style="font-size:16px">4 quả trứng</span></li>
                    <li><span style="font-size:16px">100ml sữa tươi</span></li>
                    <li><span style="font-size:16px">50g bơ</span></li>
                    <li><span style="font-size:16px">1 g&oacute;i men nở</span></li>
                    <li><span style="font-size:16px">1 muỗng c&agrave; ph&ecirc; vani</span></li>
                    <li><span style="font-size:16px">200ml kem tươi</span></li>
                    <li><span style="font-size:16px">100g đường k&iacute;nh</span></li>
                    <li><span style="font-size:16px">200g hạt bắp ngọt</span></li>
                </ul>

                <p>&nbsp;</p>

                <p><strong><span style="font-size:16px">C&aacute;c bước l&agrave;m b&aacute;nh kem hương bắp như sau:</span></strong></p>

                <p><span style="font-size:16px">Bước 1: Đ&aacute;nh trứng v&agrave; đường cho tan đều, sau đ&oacute; cho sữa tươi, bơ lạnh v&agrave; vani v&agrave;o v&agrave; đ&aacute;nh tiếp cho hỗn hợp mịn.<br />
                Bước 2: Cho men nở v&agrave;o bột m&igrave; v&agrave; r&acirc;y qua r&acirc;y lưới để loại bỏ cục. Sau đ&oacute;, cho hỗn hợp trứng v&agrave;o v&agrave; nh&agrave;o đều cho tới khi được một khối bột mềm v&agrave; kh&ocirc;ng d&iacute;nh tay.<br />
                Bước 3: L&agrave;m n&oacute;ng l&ograve; nướng ở nhiệt độ 180 độ C. D&ugrave;ng khu&ocirc;n b&aacute;nh tr&ograve;n hoặc vu&ocirc;ng c&oacute; l&oacute;t giấy nến, cho bột v&agrave;o v&agrave; d&agrave;n đều. Cho v&agrave;o l&ograve; nướng khoảng 25 ph&uacute;t cho tới khi ch&iacute;n v&agrave;ng.<br />
                Bước 4: Đun n&oacute;ng kem tươi v&agrave; đường k&iacute;nh trong một nồi nhỏ cho đến khi tan đều. Để nguội một ch&uacute;t rồi d&ugrave;ng m&aacute;y đ&aacute;nh kem để đ&aacute;nh cho kem d&agrave;y l&ecirc;n.<br />
                Bước 5: Lấy b&aacute;nh ra khỏi khu&ocirc;n v&agrave; để nguội ho&agrave;n to&agrave;n. Sau đ&oacute;, cắt miếng b&aacute;nh ra th&agrave;nh hai lớp. Phết một lớp kem l&ecirc;n lớp b&aacute;nh dưới, rải một &iacute;t hạt bắp l&ecirc;n rồi đặt lớp b&aacute;nh tr&ecirc;n l&ecirc;n. Phết lại một lớp kem l&ecirc;n to&agrave;n bộ bề mặt của b&aacute;nh v&agrave; trang tr&iacute; th&ecirc;m với những hạt bắp c&ograve;n lại.<br />
                Bước 6: Cho b&aacute;nh v&agrave;o tủ lạnh để kem cứng lại. Thưởng thức b&aacute;nh kem hương bắp ngon l&agrave;nh c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave;.</span></p>

                <p><span style="font-size:16px">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</span></p>

                ',
                'hinhanh' => 'KEMBAP-BT106.png',
                'loaisanpham_id' => 1,
                'giatien' => 450000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp BT108',
                'mota' => '<p style="text-align:center"><span style="color:#e74c3c"><u><span style="font-size:20px"><strong>M&ocirc; tả về chiếc b&aacute;nh</strong></span></u></span></p>

                <p><span style="font-size:16px"><strong>B&aacute;nh kem hương bắp l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ kem, bột m&igrave;, đường, trứng v&agrave; hạt bắp. B&aacute;nh c&oacute; h&igrave;nh dạng tr&ograve;n hoặc vu&ocirc;ng, được phủ một lớp kem mịn v&agrave; trang tr&iacute; bằng những hạt bắp ngọt. B&aacute;nh kem hương bắp c&oacute; vị ngọt dịu, thơm m&ugrave;i bắp v&agrave; kem, rất hấp dẫn v&agrave; ph&ugrave; hợp cho những dịp sinh nhật, tiệc t&ugrave;ng hay l&agrave;m qu&agrave; tặng. B&aacute;nh kem hương bắp c&oacute; thể được bảo quản trong tủ lạnh từ 2 đến 3 ng&agrave;y m&agrave; kh&ocirc;ng bị cứng hay kh&ocirc;. </strong></span></p>

                <p><span style="font-size:16px"><strong>Để l&agrave;m b&aacute;nh kem hương bắp, bạn cần chuẩn bị những nguy&ecirc;n liệu sau:</strong></span></p>

                <ul>
                    <li><span style="font-size:16px">200g bột m&igrave;</span></li>
                    <li><span style="font-size:16px">150g đường</span></li>
                    <li><span style="font-size:16px">4 quả trứng</span></li>
                    <li><span style="font-size:16px">100ml sữa tươi</span></li>
                    <li><span style="font-size:16px">50g bơ</span></li>
                    <li><span style="font-size:16px">1 g&oacute;i men nở</span></li>
                    <li><span style="font-size:16px">1 muỗng c&agrave; ph&ecirc; vani</span></li>
                    <li><span style="font-size:16px">200ml kem tươi</span></li>
                    <li><span style="font-size:16px">100g đường k&iacute;nh</span></li>
                    <li><span style="font-size:16px">200g hạt bắp ngọt</span></li>
                </ul>

                <p>&nbsp;</p>

                <p><strong><span style="font-size:16px">C&aacute;c bước l&agrave;m b&aacute;nh kem hương bắp như sau:</span></strong></p>

                <p><span style="font-size:16px">Bước 1: Đ&aacute;nh trứng v&agrave; đường cho tan đều, sau đ&oacute; cho sữa tươi, bơ lạnh v&agrave; vani v&agrave;o v&agrave; đ&aacute;nh tiếp cho hỗn hợp mịn.<br />
                Bước 2: Cho men nở v&agrave;o bột m&igrave; v&agrave; r&acirc;y qua r&acirc;y lưới để loại bỏ cục. Sau đ&oacute;, cho hỗn hợp trứng v&agrave;o v&agrave; nh&agrave;o đều cho tới khi được một khối bột mềm v&agrave; kh&ocirc;ng d&iacute;nh tay.<br />
                Bước 3: L&agrave;m n&oacute;ng l&ograve; nướng ở nhiệt độ 180 độ C. D&ugrave;ng khu&ocirc;n b&aacute;nh tr&ograve;n hoặc vu&ocirc;ng c&oacute; l&oacute;t giấy nến, cho bột v&agrave;o v&agrave; d&agrave;n đều. Cho v&agrave;o l&ograve; nướng khoảng 25 ph&uacute;t cho tới khi ch&iacute;n v&agrave;ng.<br />
                Bước 4: Đun n&oacute;ng kem tươi v&agrave; đường k&iacute;nh trong một nồi nhỏ cho đến khi tan đều. Để nguội một ch&uacute;t rồi d&ugrave;ng m&aacute;y đ&aacute;nh kem để đ&aacute;nh cho kem d&agrave;y l&ecirc;n.<br />
                Bước 5: Lấy b&aacute;nh ra khỏi khu&ocirc;n v&agrave; để nguội ho&agrave;n to&agrave;n. Sau đ&oacute;, cắt miếng b&aacute;nh ra th&agrave;nh hai lớp. Phết một lớp kem l&ecirc;n lớp b&aacute;nh dưới, rải một &iacute;t hạt bắp l&ecirc;n rồi đặt lớp b&aacute;nh tr&ecirc;n l&ecirc;n. Phết lại một lớp kem l&ecirc;n to&agrave;n bộ bề mặt của b&aacute;nh v&agrave; trang tr&iacute; th&ecirc;m với những hạt bắp c&ograve;n lại.<br />
                Bước 6: Cho b&aacute;nh v&agrave;o tủ lạnh để kem cứng lại. Thưởng thức b&aacute;nh kem hương bắp ngon l&agrave;nh c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave;.</span></p>

                <p><span style="font-size:16px">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</span></p>

                ',
                'hinhanh' => 'KEMBAP-BT108.png',
                'loaisanpham_id' => 1,
                'giatien' => 350000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp BT79',
                'mota' => '<p style="text-align:center"><span style="color:#e74c3c"><u><span style="font-size:20px"><strong>M&ocirc; tả về chiếc b&aacute;nh</strong></span></u></span></p>

                <p><span style="font-size:16px"><strong>B&aacute;nh kem hương bắp l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ kem, bột m&igrave;, đường, trứng v&agrave; hạt bắp. B&aacute;nh c&oacute; h&igrave;nh dạng tr&ograve;n hoặc vu&ocirc;ng, được phủ một lớp kem mịn v&agrave; trang tr&iacute; bằng những hạt bắp ngọt. B&aacute;nh kem hương bắp c&oacute; vị ngọt dịu, thơm m&ugrave;i bắp v&agrave; kem, rất hấp dẫn v&agrave; ph&ugrave; hợp cho những dịp sinh nhật, tiệc t&ugrave;ng hay l&agrave;m qu&agrave; tặng. B&aacute;nh kem hương bắp c&oacute; thể được bảo quản trong tủ lạnh từ 2 đến 3 ng&agrave;y m&agrave; kh&ocirc;ng bị cứng hay kh&ocirc;. </strong></span></p>

                <p><span style="font-size:16px"><strong>Để l&agrave;m b&aacute;nh kem hương bắp, bạn cần chuẩn bị những nguy&ecirc;n liệu sau:</strong></span></p>

                <ul>
                    <li><span style="font-size:16px">200g bột m&igrave;</span></li>
                    <li><span style="font-size:16px">150g đường</span></li>
                    <li><span style="font-size:16px">4 quả trứng</span></li>
                    <li><span style="font-size:16px">100ml sữa tươi</span></li>
                    <li><span style="font-size:16px">50g bơ</span></li>
                    <li><span style="font-size:16px">1 g&oacute;i men nở</span></li>
                    <li><span style="font-size:16px">1 muỗng c&agrave; ph&ecirc; vani</span></li>
                    <li><span style="font-size:16px">200ml kem tươi</span></li>
                    <li><span style="font-size:16px">100g đường k&iacute;nh</span></li>
                    <li><span style="font-size:16px">200g hạt bắp ngọt</span></li>
                </ul>

                <p>&nbsp;</p>

                <p><strong><span style="font-size:16px">C&aacute;c bước l&agrave;m b&aacute;nh kem hương bắp như sau:</span></strong></p>

                <p><span style="font-size:16px">Bước 1: Đ&aacute;nh trứng v&agrave; đường cho tan đều, sau đ&oacute; cho sữa tươi, bơ lạnh v&agrave; vani v&agrave;o v&agrave; đ&aacute;nh tiếp cho hỗn hợp mịn.<br />
                Bước 2: Cho men nở v&agrave;o bột m&igrave; v&agrave; r&acirc;y qua r&acirc;y lưới để loại bỏ cục. Sau đ&oacute;, cho hỗn hợp trứng v&agrave;o v&agrave; nh&agrave;o đều cho tới khi được một khối bột mềm v&agrave; kh&ocirc;ng d&iacute;nh tay.<br />
                Bước 3: L&agrave;m n&oacute;ng l&ograve; nướng ở nhiệt độ 180 độ C. D&ugrave;ng khu&ocirc;n b&aacute;nh tr&ograve;n hoặc vu&ocirc;ng c&oacute; l&oacute;t giấy nến, cho bột v&agrave;o v&agrave; d&agrave;n đều. Cho v&agrave;o l&ograve; nướng khoảng 25 ph&uacute;t cho tới khi ch&iacute;n v&agrave;ng.<br />
                Bước 4: Đun n&oacute;ng kem tươi v&agrave; đường k&iacute;nh trong một nồi nhỏ cho đến khi tan đều. Để nguội một ch&uacute;t rồi d&ugrave;ng m&aacute;y đ&aacute;nh kem để đ&aacute;nh cho kem d&agrave;y l&ecirc;n.<br />
                Bước 5: Lấy b&aacute;nh ra khỏi khu&ocirc;n v&agrave; để nguội ho&agrave;n to&agrave;n. Sau đ&oacute;, cắt miếng b&aacute;nh ra th&agrave;nh hai lớp. Phết một lớp kem l&ecirc;n lớp b&aacute;nh dưới, rải một &iacute;t hạt bắp l&ecirc;n rồi đặt lớp b&aacute;nh tr&ecirc;n l&ecirc;n. Phết lại một lớp kem l&ecirc;n to&agrave;n bộ bề mặt của b&aacute;nh v&agrave; trang tr&iacute; th&ecirc;m với những hạt bắp c&ograve;n lại.<br />
                Bước 6: Cho b&aacute;nh v&agrave;o tủ lạnh để kem cứng lại. Thưởng thức b&aacute;nh kem hương bắp ngon l&agrave;nh c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave;.</span></p>

                <p><span style="font-size:16px">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</span></p>

                ',
                'hinhanh' => 'KEMBAP-BT79.png',
                'loaisanpham_id' => 1,
                'giatien' => 420000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON - AR99',
                'mota' => 'Bánh kem doraemon là một loại bánh kem được trang trí hình nhân vật hoạt hình nổi tiếng Doraemon. Bánh kem này thường được dùng để tổ chức sinh nhật cho trẻ em yêu thích Doraemon. Bánh kem doraemon có nhiều hương vị khác nhau, như sô cô la, dâu tây, vani, hoặc trà xanh. Bánh kem doraemon cũng có thể được làm theo yêu cầu của khách hàng, ví dụ như thêm tên, tuổi, hoặc lời chúc mừng. Bánh kem doraemon là một món quà ý nghĩa và ngọt ngào cho những người yêu mến Doraemon.
                ',
                'hinhanh' => 'DOREMON-AR99.png',
                'loaisanpham_id' => 2,
                'giatien' => 500000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON - AR100',
                'mota' => 'Bánh kem doraemon là một loại bánh kem được trang trí hình nhân vật hoạt hình nổi tiếng Doraemon. Bánh kem này thường được dùng để tổ chức sinh nhật cho trẻ em yêu thích Doraemon. Bánh kem doraemon có nhiều hương vị khác nhau, như sô cô la, dâu tây, vani, hoặc trà xanh. Bánh kem doraemon cũng có thể được làm theo yêu cầu của khách hàng, ví dụ như thêm tên, tuổi, hoặc lời chúc mừng. Bánh kem doraemon là một món quà ý nghĩa và ngọt ngào cho những người yêu mến Doraemon.
                ',
                'hinhanh' => 'DOREMON-AR100.png',
                'loaisanpham_id' => 2,
                'giatien' => 550000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON - AR82',
                'mota' => 'Bánh kem doraemon là một loại bánh kem được trang trí hình nhân vật hoạt hình nổi tiếng Doraemon. Bánh kem này thường được dùng để tổ chức sinh nhật cho trẻ em yêu thích Doraemon. Bánh kem doraemon có nhiều hương vị khác nhau, như sô cô la, dâu tây, vani, hoặc trà xanh. Bánh kem doraemon cũng có thể được làm theo yêu cầu của khách hàng, ví dụ như thêm tên, tuổi, hoặc lời chúc mừng. Bánh kem doraemon là một món quà ý nghĩa và ngọt ngào cho những người yêu mến Doraemon.
                ',
                'hinhanh' => 'DOREMON-AR82.png',
                'loaisanpham_id' => 2,
                'giatien' => 580000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON - AR52',
                'mota' => 'Bánh kem doraemon là một loại bánh kem được trang trí hình nhân vật hoạt hình nổi tiếng Doraemon. Bánh kem này thường được dùng để tổ chức sinh nhật cho trẻ em yêu thích Doraemon. Bánh kem doraemon có nhiều hương vị khác nhau, như sô cô la, dâu tây, vani, hoặc trà xanh. Bánh kem doraemon cũng có thể được làm theo yêu cầu của khách hàng, ví dụ như thêm tên, tuổi, hoặc lời chúc mừng. Bánh kem doraemon là một món quà ý nghĩa và ngọt ngào cho những người yêu mến Doraemon.
                ',
                'hinhanh' => 'DOREMON-AR52.png',
                'loaisanpham_id' => 2,
                'giatien' => 600000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem ST299',
                'mota' => 'Bánh kem sữa tươi vani là một loại bánh ngọt được làm từ sữa tươi, kem tươi, bột mì, trứng và hương vani. Bánh có lớp kem mịn màng, bông xốp và thơm ngon. Bánh kem sữa tươi vani thường được dùng làm bánh sinh nhật, bánh kỉ niệm hoặc bánh tráng miệng. Bánh có thể được trang trí với các loại hoa quả, kẹo, sô cô la hoặc kem cheese tuỳ theo sở thích của người làm bánh và người ăn bánh.',
                'hinhanh' => 'VANI-ST299.png',
                'loaisanpham_id' => 4,
                'giatien' => 440000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem ST294',
                'mota' => 'Bánh kem sữa tươi vani là một loại bánh ngọt được làm từ sữa tươi, kem tươi, bột mì, trứng và hương vani. Bánh có lớp kem mịn màng, bông xốp và thơm ngon. Bánh kem sữa tươi vani thường được dùng làm bánh sinh nhật, bánh kỉ niệm hoặc bánh tráng miệng. Bánh có thể được trang trí với các loại hoa quả, kẹo, sô cô la hoặc kem cheese tuỳ theo sở thích của người làm bánh và người ăn bánh.',
                'hinhanh' => 'VANI-ST294.png',
                'loaisanpham_id' => 4,
                'giatien' => 420000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem ST270',
                'mota' => 'Bánh kem sữa tươi vani là một loại bánh ngọt được làm từ sữa tươi, kem tươi, bột mì, trứng và hương vani. Bánh có lớp kem mịn màng, bông xốp và thơm ngon. Bánh kem sữa tươi vani thường được dùng làm bánh sinh nhật, bánh kỉ niệm hoặc bánh tráng miệng. Bánh có thể được trang trí với các loại hoa quả, kẹo, sô cô la hoặc kem cheese tuỳ theo sở thích của người làm bánh và người ăn bánh.',
                'hinhanh' => 'VANI-ST270.png',
                'loaisanpham_id' => 4,
                'giatien' => 460000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem ST291',
                'mota' => 'Bánh kem sữa tươi vani là một loại bánh ngọt được làm từ sữa tươi, kem tươi, bột mì, trứng và hương vani. Bánh có lớp kem mịn màng, bông xốp và thơm ngon. Bánh kem sữa tươi vani thường được dùng làm bánh sinh nhật, bánh kỉ niệm hoặc bánh tráng miệng. Bánh có thể được trang trí với các loại hoa quả, kẹo, sô cô la hoặc kem cheese tuỳ theo sở thích của người làm bánh và người ăn bánh.',
                'hinhanh' => 'VANI-ST291.png',
                'loaisanpham_id' => 4,
                'giatien' => 455000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA S16',
                'mota' => 'Bánh kem socola là một loại bánh ngọt được làm từ kem và socola, thường được dùng để ăn mừng sinh nhật, kỷ niệm hay các dịp đặc biệt khác. Bánh kem socola có nhiều hương vị và kiểu dáng khác nhau, tùy thuộc vào sở thích và nhu cầu của người dùng. Bánh kem socola không chỉ ngon miệng mà còn có nhiều lợi ích cho sức khỏe, như cung cấp năng lượng, chất béo, protein và chất chống oxy hóa. Bánh kem socola cũng là một món quà ý nghĩa để thể hiện tình cảm và sự quan tâm đến người thân và bạn bè.',
                'hinhanh' => 'SOCOLA-S16.png',
                'loaisanpham_id' => 3,
                'giatien' => 435000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA S25',
                'mota' => 'Bánh kem socola là một loại bánh ngọt được làm từ kem và socola, thường được dùng để ăn mừng sinh nhật, kỷ niệm hay các dịp đặc biệt khác. Bánh kem socola có nhiều hương vị và kiểu dáng khác nhau, tùy thuộc vào sở thích và nhu cầu của người dùng. Bánh kem socola không chỉ ngon miệng mà còn có nhiều lợi ích cho sức khỏe, như cung cấp năng lượng, chất béo, protein và chất chống oxy hóa. Bánh kem socola cũng là một món quà ý nghĩa để thể hiện tình cảm và sự quan tâm đến người thân và bạn bè.',
                'hinhanh' => 'SOCOLA-S25.png',
                'loaisanpham_id' => 3,
                'giatien' => 400000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA S05',
                'mota' => 'Bánh kem socola là một loại bánh ngọt được làm từ kem và socola, thường được dùng để ăn mừng sinh nhật, kỷ niệm hay các dịp đặc biệt khác. Bánh kem socola có nhiều hương vị và kiểu dáng khác nhau, tùy thuộc vào sở thích và nhu cầu của người dùng. Bánh kem socola không chỉ ngon miệng mà còn có nhiều lợi ích cho sức khỏe, như cung cấp năng lượng, chất béo, protein và chất chống oxy hóa. Bánh kem socola cũng là một món quà ý nghĩa để thể hiện tình cảm và sự quan tâm đến người thân và bạn bè.',
                'hinhanh' => 'SOCOLA-S05.png',
                'loaisanpham_id' => 3,
                'giatien' => 395000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA S04',
                'mota' => 'Bánh kem socola là một loại bánh ngọt được làm từ kem và socola, thường được dùng để ăn mừng sinh nhật, kỷ niệm hay các dịp đặc biệt khác. Bánh kem socola có nhiều hương vị và kiểu dáng khác nhau, tùy thuộc vào sở thích và nhu cầu của người dùng. Bánh kem socola không chỉ ngon miệng mà còn có nhiều lợi ích cho sức khỏe, như cung cấp năng lượng, chất béo, protein và chất chống oxy hóa. Bánh kem socola cũng là một món quà ý nghĩa để thể hiện tình cảm và sự quan tâm đến người thân và bạn bè.',
                'hinhanh' => 'SOCOLA-S04.png',
                'loaisanpham_id' => 3,
                'giatien' => 425000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng V98',
                'mota' => 'Bánh kem hình hủ vàng là một loại bánh kem độc đáo và đẹp mắt, được làm từ kem tươi, bột mì, trứng, đường và các nguyên liệu khác. Bánh kem có hình dáng giống như một chiếc hủ vàng, biểu tượng của sự may mắn và phú quý trong văn hóa Á Đông. Bánh kem hình hủ vàng thường được dùng để ăn mừng các dịp lễ tết, sinh nhật hay kỷ niệm đặc biệt. Bánh kem có vị ngọt thanh, béo ngậy và thơm mùi kem tươi. Bánh kem cũng có thể được trang trí thêm các loại hoa quả, socola hay kẹo để tăng thêm sự hấp dẫn và đa dạng cho bánh.',
                'hinhanh' => 'HUVANG-V98.png',
                'loaisanpham_id' => 5,
                'giatien' => 650000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng V68',
                'mota' => 'Bánh kem hình hủ vàng là một loại bánh kem độc đáo và đẹp mắt, được làm từ kem tươi, bột mì, trứng, đường và các nguyên liệu khác. Bánh kem có hình dáng giống như một chiếc hủ vàng, biểu tượng của sự may mắn và phú quý trong văn hóa Á Đông. Bánh kem hình hủ vàng thường được dùng để ăn mừng các dịp lễ tết, sinh nhật hay kỷ niệm đặc biệt. Bánh kem có vị ngọt thanh, béo ngậy và thơm mùi kem tươi. Bánh kem cũng có thể được trang trí thêm các loại hoa quả, socola hay kẹo để tăng thêm sự hấp dẫn và đa dạng cho bánh.',
                'hinhanh' => 'HUVANG-V68.png',
                'loaisanpham_id' => 5,
                'giatien' => 600000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng V32',
                'mota' => 'Bánh kem hình hủ vàng là một loại bánh kem độc đáo và đẹp mắt, được làm từ kem tươi, bột mì, trứng, đường và các nguyên liệu khác. Bánh kem có hình dáng giống như một chiếc hủ vàng, biểu tượng của sự may mắn và phú quý trong văn hóa Á Đông. Bánh kem hình hủ vàng thường được dùng để ăn mừng các dịp lễ tết, sinh nhật hay kỷ niệm đặc biệt. Bánh kem có vị ngọt thanh, béo ngậy và thơm mùi kem tươi. Bánh kem cũng có thể được trang trí thêm các loại hoa quả, socola hay kẹo để tăng thêm sự hấp dẫn và đa dạng cho bánh.',
                'hinhanh' => 'HUVANG-V32.png',
                'loaisanpham_id' => 5,
                'giatien' => 700000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng V31',
                'mota' => 'Bánh kem hình hủ vàng là một loại bánh kem độc đáo và đẹp mắt, được làm từ kem tươi, bột mì, trứng, đường và các nguyên liệu khác. Bánh kem có hình dáng giống như một chiếc hủ vàng, biểu tượng của sự may mắn và phú quý trong văn hóa Á Đông. Bánh kem hình hủ vàng thường được dùng để ăn mừng các dịp lễ tết, sinh nhật hay kỷ niệm đặc biệt. Bánh kem có vị ngọt thanh, béo ngậy và thơm mùi kem tươi. Bánh kem cũng có thể được trang trí thêm các loại hoa quả, socola hay kẹo để tăng thêm sự hấp dẫn và đa dạng cho bánh.',
                'hinhanh' => 'HUVANG-V31.png',
                'loaisanpham_id' => 5,
                'giatien' => 750000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng V09',
                'mota' => 'Bánh kem hình hủ vàng là một loại bánh kem độc đáo và đẹp mắt, được làm từ kem tươi, bột mì, trứng, đường và các nguyên liệu khác. Bánh kem có hình dáng giống như một chiếc hủ vàng, biểu tượng của sự may mắn và phú quý trong văn hóa Á Đông. Bánh kem hình hủ vàng thường được dùng để ăn mừng các dịp lễ tết, sinh nhật hay kỷ niệm đặc biệt. Bánh kem có vị ngọt thanh, béo ngậy và thơm mùi kem tươi. Bánh kem cũng có thể được trang trí thêm các loại hoa quả, socola hay kẹo để tăng thêm sự hấp dẫn và đa dạng cho bánh.',
                'hinhanh' => 'HUVANG-V09.png',
                'loaisanpham_id' => 5,
                'giatien' => 1500000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng T30',
                'mota' => 'Bánh kem nhiều tầng là một loại bánh ngọt được làm từ nhiều lớp bánh gato và kem, thường được trang trí bằng hoa quả, sô cô la, kẹo hay những nguyên liệu khác. Bánh kem nhiều tầng thường được dùng để ăn mừng các dịp đặc biệt như sinh nhật, đám cưới hay kỷ niệm. Bánh kem nhiều tầng có nhiều hương vị và kiểu dáng khác nhau, tùy thuộc vào sở thích và ngân sách của người mua.',
                'hinhanh' => 'TANG-T30.png',
                'loaisanpham_id' => 6,
                'giatien' => 1000000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng T25',
                'mota' => 'Bánh kem nhiều tầng là một loại bánh ngọt được làm từ nhiều lớp bánh gato và kem, thường được trang trí bằng hoa quả, sô cô la, kẹo hay những nguyên liệu khác. Bánh kem nhiều tầng thường được dùng để ăn mừng các dịp đặc biệt như sinh nhật, đám cưới hay kỷ niệm. Bánh kem nhiều tầng có nhiều hương vị và kiểu dáng khác nhau, tùy thuộc vào sở thích và ngân sách của người mua.',
                'hinhanh' => 'TANG-T25.png',
                'loaisanpham_id' => 6,
                'giatien' => 1500000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng T08',
                'mota' => 'Bánh kem nhiều tầng là một loại bánh ngọt được làm từ nhiều lớp bánh gato và kem, thường được trang trí bằng hoa quả, sô cô la, kẹo hay những nguyên liệu khác. Bánh kem nhiều tầng thường được dùng để ăn mừng các dịp đặc biệt như sinh nhật, đám cưới hay kỷ niệm. Bánh kem nhiều tầng có nhiều hương vị và kiểu dáng khác nhau, tùy thuộc vào sở thích và ngân sách của người mua.',
                'hinhanh' => 'TANG-T08.png',
                'loaisanpham_id' => 6,
                'giatien' => 1600000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng T05',
                'mota' => 'Bánh kem nhiều tầng là một loại bánh ngọt được làm từ nhiều lớp bánh gato và kem, thường được trang trí bằng hoa quả, sô cô la, kẹo hay những nguyên liệu khác. Bánh kem nhiều tầng thường được dùng để ăn mừng các dịp đặc biệt như sinh nhật, đám cưới hay kỷ niệm. Bánh kem nhiều tầng có nhiều hương vị và kiểu dáng khác nhau, tùy thuộc vào sở thích và ngân sách của người mua.',
                'hinhanh' => 'TANG-T05.png',
                'loaisanpham_id' => 6,
                'giatien' => 1300000,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng T07',
                'mota' => 'Bánh kem nhiều tầng là một loại bánh ngọt được làm từ nhiều lớp bánh gato và kem, thường được trang trí bằng hoa quả, sô cô la, kẹo hay những nguyên liệu khác. Bánh kem nhiều tầng thường được dùng để ăn mừng các dịp đặc biệt như sinh nhật, đám cưới hay kỷ niệm. Bánh kem nhiều tầng có nhiều hương vị và kiểu dáng khác nhau, tùy thuộc vào sở thích và ngân sách của người mua.',
                'hinhanh' => 'TANG-T07.png',
                'loaisanpham_id' => 6,
                'giatien' => 1000000,
                'trangthai' => 1
            ]
        );
    }
}
