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
                'tensp' => 'Bánh Kem Bắp KB01',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem hương bắp l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ kem, bột m&igrave;, đường, trứng v&agrave; hạt bắp. B&aacute;nh c&oacute; h&igrave;nh dạng tr&ograve;n hoặc vu&ocirc;ng, được phủ một lớp kem mịn v&agrave; trang tr&iacute; bằng những hạt bắp ngọt. B&aacute;nh kem hương bắp c&oacute; vị ngọt dịu, thơm m&ugrave;i bắp v&agrave; kem, rất hấp dẫn v&agrave; ph&ugrave; hợp cho những dịp sinh nhật, tiệc t&ugrave;ng hay l&agrave;m qu&agrave; tặng. B&aacute;nh kem hương bắp c&oacute; thể được bảo quản trong tủ lạnh từ 2 đến 3 ng&agrave;y m&agrave; kh&ocirc;ng bị cứng hay kh&ocirc;. </strong></span></p>

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
                'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp KB02',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem hương bắp l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ kem, bột m&igrave;, đường, trứng v&agrave; hạt bắp. B&aacute;nh c&oacute; h&igrave;nh dạng tr&ograve;n hoặc vu&ocirc;ng, được phủ một lớp kem mịn v&agrave; trang tr&iacute; bằng những hạt bắp ngọt. B&aacute;nh kem hương bắp c&oacute; vị ngọt dịu, thơm m&ugrave;i bắp v&agrave; kem, rất hấp dẫn v&agrave; ph&ugrave; hợp cho những dịp sinh nhật, tiệc t&ugrave;ng hay l&agrave;m qu&agrave; tặng. B&aacute;nh kem hương bắp c&oacute; thể được bảo quản trong tủ lạnh từ 2 đến 3 ng&agrave;y m&agrave; kh&ocirc;ng bị cứng hay kh&ocirc;. </strong></span></p>

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
                'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp KB03',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem hương bắp l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ kem, bột m&igrave;, đường, trứng v&agrave; hạt bắp. B&aacute;nh c&oacute; h&igrave;nh dạng tr&ograve;n hoặc vu&ocirc;ng, được phủ một lớp kem mịn v&agrave; trang tr&iacute; bằng những hạt bắp ngọt. B&aacute;nh kem hương bắp c&oacute; vị ngọt dịu, thơm m&ugrave;i bắp v&agrave; kem, rất hấp dẫn v&agrave; ph&ugrave; hợp cho những dịp sinh nhật, tiệc t&ugrave;ng hay l&agrave;m qu&agrave; tặng. B&aacute;nh kem hương bắp c&oacute; thể được bảo quản trong tủ lạnh từ 2 đến 3 ng&agrave;y m&agrave; kh&ocirc;ng bị cứng hay kh&ocirc;. </strong></span></p>

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
                'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp KB04',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem hương bắp l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ kem, bột m&igrave;, đường, trứng v&agrave; hạt bắp. B&aacute;nh c&oacute; h&igrave;nh dạng tr&ograve;n hoặc vu&ocirc;ng, được phủ một lớp kem mịn v&agrave; trang tr&iacute; bằng những hạt bắp ngọt. B&aacute;nh kem hương bắp c&oacute; vị ngọt dịu, thơm m&ugrave;i bắp v&agrave; kem, rất hấp dẫn v&agrave; ph&ugrave; hợp cho những dịp sinh nhật, tiệc t&ugrave;ng hay l&agrave;m qu&agrave; tặng. B&aacute;nh kem hương bắp c&oacute; thể được bảo quản trong tủ lạnh từ 2 đến 3 ng&agrave;y m&agrave; kh&ocirc;ng bị cứng hay kh&ocirc;. </strong></span></p>

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
                'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Bắp KB05',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem hương bắp l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ kem, bột m&igrave;, đường, trứng v&agrave; hạt bắp. B&aacute;nh c&oacute; h&igrave;nh dạng tr&ograve;n hoặc vu&ocirc;ng, được phủ một lớp kem mịn v&agrave; trang tr&iacute; bằng những hạt bắp ngọt. B&aacute;nh kem hương bắp c&oacute; vị ngọt dịu, thơm m&ugrave;i bắp v&agrave; kem, rất hấp dẫn v&agrave; ph&ugrave; hợp cho những dịp sinh nhật, tiệc t&ugrave;ng hay l&agrave;m qu&agrave; tặng. B&aacute;nh kem hương bắp c&oacute; thể được bảo quản trong tủ lạnh từ 2 đến 3 ng&agrave;y m&agrave; kh&ocirc;ng bị cứng hay kh&ocirc;. </strong></span></p>

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
                'giatien' => 420000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON DR01',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem h&igrave;nh Doraemon l&agrave; một m&oacute;n qu&agrave; tuyệt vời cho những người y&ecirc;u th&iacute;ch nh&acirc;n vật hoạt h&igrave;nh nổi tiếng n&agrave;y. Bạn c&oacute; thể l&agrave;m b&aacute;nh kem h&igrave;nh Doraemon tại nh&agrave; với những nguy&ecirc;n liệu đơn giản v&agrave; c&aacute;ch trang tr&iacute; dễ d&agrave;ng. Sau đ&acirc;y l&agrave; hướng dẫn chi tiết c&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh Doraemon.</strong></span></p>

                <p><span style="font-size:16px">Bước 1: Chuẩn bị nguy&ecirc;n liệu<br />
                - B&aacute;nh su kem (b&aacute;nh b&ocirc;ng lan) c&oacute; k&iacute;ch thước ph&ugrave; hợp với khu&ocirc;n mặt Doraemon. Bạn c&oacute; thể mua sẵn hoặc tự l&agrave;m theo c&ocirc;ng thức b&aacute;nh su kem.<br />
                - Kem tươi (whipping cream) để phủ v&agrave; trang tr&iacute; b&aacute;nh. Bạn cần khoảng 500ml kem tươi, đ&aacute;nh b&ocirc;ng v&agrave; chia th&agrave;nh 3 phần: 1 phần để phủ to&agrave;n bộ b&aacute;nh, 1 phần để nhuộm m&agrave;u xanh l&aacute; c&acirc;y cho mũi v&agrave; cổ &aacute;o Doraemon, 1 phần để nhuộm m&agrave;u đỏ cho miệng v&agrave; chu&ocirc;ng Doraemon.<br />
                - M&agrave;u thực phẩm xanh l&aacute; c&acirc;y v&agrave; đỏ để nhuộm kem tươi.<br />
                - Socola trắng để l&agrave;m mắt v&agrave; r&acirc;u Doraemon. Bạn cần khoảng 100g socola trắng, nấu chảy v&agrave; cho v&agrave;o t&uacute;i nhỏ, cắt lỗ nhỏ ở đầu để vẽ.<br />
                - Kẹo dẻo m&agrave;u v&agrave;ng để l&agrave;m chu&ocirc;ng Doraemon. Bạn cần khoảng 50g kẹo dẻo m&agrave;u v&agrave;ng, nặn th&agrave;nh h&igrave;nh tr&ograve;n rỗng ở giữa.<br />
                - Dao, k&eacute;o, th&igrave;a, dĩa, khu&ocirc;n tr&ograve;n để cắt b&aacute;nh.</span></p>

                <p><span style="font-size:16px">Bước 2: Cắt v&agrave; phủ b&aacute;nh<br />
                - Lấy khu&ocirc;n tr&ograve;n để cắt b&aacute;nh su kem th&agrave;nh h&igrave;nh tr&ograve;n, k&iacute;ch thước ph&ugrave; hợp với khu&ocirc;n mặt Doraemon. Bạn c&oacute; thể d&ugrave;ng dao để chỉnh sửa cho đều v&agrave; mịn.<br />
                - Lấy kem tươi trắng để phủ to&agrave;n bộ bề mặt b&aacute;nh, d&ugrave;ng th&igrave;a để l&agrave;m cho kem phẳng v&agrave; đều.<br />
                - Đặt b&aacute;nh l&ecirc;n dĩa, để trong tủ lạnh khoảng 15 ph&uacute;t cho kem đ&ocirc;ng lại.</span></p>

                <p><span style="font-size:16px">Bước 3: Trang tr&iacute; b&aacute;nh<br />
                - Lấy kem tươi xanh l&aacute; c&acirc;y để vẽ mũi v&agrave; cổ &aacute;o Doraemon. Bạn c&oacute; thể d&ugrave;ng t&uacute;i nhỏ để vẽ cho dễ.<br />
                - Lấy kem tươi đỏ để vẽ miệng v&agrave; chu&ocirc;ng Doraemon. Bạn c&oacute; thể d&ugrave;ng dao để cắt miệng theo h&igrave;nh chữ nhật cong, sau đ&oacute; d&ugrave;ng kem tươi đỏ để phủ l&ecirc;n. Để chu&ocirc;ng Doraemon v&agrave;o giữa cổ &aacute;o, d&ugrave;ng kem tươi đỏ để vẽ chi tiết.<br />
                - Lấy socola trắng để vẽ mắt v&agrave; r&acirc;u Doraemon. Bạn c&oacute; thể d&ugrave;ng khu&ocirc;n tr&ograve;n nhỏ để cắt socola trắng th&agrave;nh h&igrave;nh tr&ograve;n, sau đ&oacute; d&ugrave;ng socola chảy để vẽ đồng tử. D&ugrave;ng socola chảy để vẽ r&acirc;u Doraemon theo &yacute; th&iacute;ch.<br />
                - Đặt b&aacute;nh v&agrave;o tủ lạnh khoảng 15 ph&uacute;t cho kem v&agrave; socola đ&ocirc;ng lại.</span></p>
                ',
                'hinhanh' => 'DOREMON-AR99.png',
                'loaisanpham_id' => 2,
                'giatien' => 500000,'inanh' => 0,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON DR02',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem h&igrave;nh Doraemon l&agrave; một m&oacute;n qu&agrave; tuyệt vời cho những người y&ecirc;u th&iacute;ch nh&acirc;n vật hoạt h&igrave;nh nổi tiếng n&agrave;y. Bạn c&oacute; thể l&agrave;m b&aacute;nh kem h&igrave;nh Doraemon tại nh&agrave; với những nguy&ecirc;n liệu đơn giản v&agrave; c&aacute;ch trang tr&iacute; dễ d&agrave;ng. Sau đ&acirc;y l&agrave; hướng dẫn chi tiết c&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh Doraemon.</strong></span></p>

                <p><span style="font-size:16px">Bước 1: Chuẩn bị nguy&ecirc;n liệu<br />
                - B&aacute;nh su kem (b&aacute;nh b&ocirc;ng lan) c&oacute; k&iacute;ch thước ph&ugrave; hợp với khu&ocirc;n mặt Doraemon. Bạn c&oacute; thể mua sẵn hoặc tự l&agrave;m theo c&ocirc;ng thức b&aacute;nh su kem.<br />
                - Kem tươi (whipping cream) để phủ v&agrave; trang tr&iacute; b&aacute;nh. Bạn cần khoảng 500ml kem tươi, đ&aacute;nh b&ocirc;ng v&agrave; chia th&agrave;nh 3 phần: 1 phần để phủ to&agrave;n bộ b&aacute;nh, 1 phần để nhuộm m&agrave;u xanh l&aacute; c&acirc;y cho mũi v&agrave; cổ &aacute;o Doraemon, 1 phần để nhuộm m&agrave;u đỏ cho miệng v&agrave; chu&ocirc;ng Doraemon.<br />
                - M&agrave;u thực phẩm xanh l&aacute; c&acirc;y v&agrave; đỏ để nhuộm kem tươi.<br />
                - Socola trắng để l&agrave;m mắt v&agrave; r&acirc;u Doraemon. Bạn cần khoảng 100g socola trắng, nấu chảy v&agrave; cho v&agrave;o t&uacute;i nhỏ, cắt lỗ nhỏ ở đầu để vẽ.<br />
                - Kẹo dẻo m&agrave;u v&agrave;ng để l&agrave;m chu&ocirc;ng Doraemon. Bạn cần khoảng 50g kẹo dẻo m&agrave;u v&agrave;ng, nặn th&agrave;nh h&igrave;nh tr&ograve;n rỗng ở giữa.<br />
                - Dao, k&eacute;o, th&igrave;a, dĩa, khu&ocirc;n tr&ograve;n để cắt b&aacute;nh.</span></p>

                <p><span style="font-size:16px">Bước 2: Cắt v&agrave; phủ b&aacute;nh<br />
                - Lấy khu&ocirc;n tr&ograve;n để cắt b&aacute;nh su kem th&agrave;nh h&igrave;nh tr&ograve;n, k&iacute;ch thước ph&ugrave; hợp với khu&ocirc;n mặt Doraemon. Bạn c&oacute; thể d&ugrave;ng dao để chỉnh sửa cho đều v&agrave; mịn.<br />
                - Lấy kem tươi trắng để phủ to&agrave;n bộ bề mặt b&aacute;nh, d&ugrave;ng th&igrave;a để l&agrave;m cho kem phẳng v&agrave; đều.<br />
                - Đặt b&aacute;nh l&ecirc;n dĩa, để trong tủ lạnh khoảng 15 ph&uacute;t cho kem đ&ocirc;ng lại.</span></p>

                <p><span style="font-size:16px">Bước 3: Trang tr&iacute; b&aacute;nh<br />
                - Lấy kem tươi xanh l&aacute; c&acirc;y để vẽ mũi v&agrave; cổ &aacute;o Doraemon. Bạn c&oacute; thể d&ugrave;ng t&uacute;i nhỏ để vẽ cho dễ.<br />
                - Lấy kem tươi đỏ để vẽ miệng v&agrave; chu&ocirc;ng Doraemon. Bạn c&oacute; thể d&ugrave;ng dao để cắt miệng theo h&igrave;nh chữ nhật cong, sau đ&oacute; d&ugrave;ng kem tươi đỏ để phủ l&ecirc;n. Để chu&ocirc;ng Doraemon v&agrave;o giữa cổ &aacute;o, d&ugrave;ng kem tươi đỏ để vẽ chi tiết.<br />
                - Lấy socola trắng để vẽ mắt v&agrave; r&acirc;u Doraemon. Bạn c&oacute; thể d&ugrave;ng khu&ocirc;n tr&ograve;n nhỏ để cắt socola trắng th&agrave;nh h&igrave;nh tr&ograve;n, sau đ&oacute; d&ugrave;ng socola chảy để vẽ đồng tử. D&ugrave;ng socola chảy để vẽ r&acirc;u Doraemon theo &yacute; th&iacute;ch.<br />
                - Đặt b&aacute;nh v&agrave;o tủ lạnh khoảng 15 ph&uacute;t cho kem v&agrave; socola đ&ocirc;ng lại.</span></p>
                ',
                'hinhanh' => 'DOREMON-AR100.png',
                'loaisanpham_id' => 2,
                'giatien' => 550000,'inanh' => 0,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON DR03',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem h&igrave;nh Doraemon l&agrave; một m&oacute;n qu&agrave; tuyệt vời cho những người y&ecirc;u th&iacute;ch nh&acirc;n vật hoạt h&igrave;nh nổi tiếng n&agrave;y. Bạn c&oacute; thể l&agrave;m b&aacute;nh kem h&igrave;nh Doraemon tại nh&agrave; với những nguy&ecirc;n liệu đơn giản v&agrave; c&aacute;ch trang tr&iacute; dễ d&agrave;ng. Sau đ&acirc;y l&agrave; hướng dẫn chi tiết c&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh Doraemon.</strong></span></p>

                <p><span style="font-size:16px">Bước 1: Chuẩn bị nguy&ecirc;n liệu<br />
                - B&aacute;nh su kem (b&aacute;nh b&ocirc;ng lan) c&oacute; k&iacute;ch thước ph&ugrave; hợp với khu&ocirc;n mặt Doraemon. Bạn c&oacute; thể mua sẵn hoặc tự l&agrave;m theo c&ocirc;ng thức b&aacute;nh su kem.<br />
                - Kem tươi (whipping cream) để phủ v&agrave; trang tr&iacute; b&aacute;nh. Bạn cần khoảng 500ml kem tươi, đ&aacute;nh b&ocirc;ng v&agrave; chia th&agrave;nh 3 phần: 1 phần để phủ to&agrave;n bộ b&aacute;nh, 1 phần để nhuộm m&agrave;u xanh l&aacute; c&acirc;y cho mũi v&agrave; cổ &aacute;o Doraemon, 1 phần để nhuộm m&agrave;u đỏ cho miệng v&agrave; chu&ocirc;ng Doraemon.<br />
                - M&agrave;u thực phẩm xanh l&aacute; c&acirc;y v&agrave; đỏ để nhuộm kem tươi.<br />
                - Socola trắng để l&agrave;m mắt v&agrave; r&acirc;u Doraemon. Bạn cần khoảng 100g socola trắng, nấu chảy v&agrave; cho v&agrave;o t&uacute;i nhỏ, cắt lỗ nhỏ ở đầu để vẽ.<br />
                - Kẹo dẻo m&agrave;u v&agrave;ng để l&agrave;m chu&ocirc;ng Doraemon. Bạn cần khoảng 50g kẹo dẻo m&agrave;u v&agrave;ng, nặn th&agrave;nh h&igrave;nh tr&ograve;n rỗng ở giữa.<br />
                - Dao, k&eacute;o, th&igrave;a, dĩa, khu&ocirc;n tr&ograve;n để cắt b&aacute;nh.</span></p>

                <p><span style="font-size:16px">Bước 2: Cắt v&agrave; phủ b&aacute;nh<br />
                - Lấy khu&ocirc;n tr&ograve;n để cắt b&aacute;nh su kem th&agrave;nh h&igrave;nh tr&ograve;n, k&iacute;ch thước ph&ugrave; hợp với khu&ocirc;n mặt Doraemon. Bạn c&oacute; thể d&ugrave;ng dao để chỉnh sửa cho đều v&agrave; mịn.<br />
                - Lấy kem tươi trắng để phủ to&agrave;n bộ bề mặt b&aacute;nh, d&ugrave;ng th&igrave;a để l&agrave;m cho kem phẳng v&agrave; đều.<br />
                - Đặt b&aacute;nh l&ecirc;n dĩa, để trong tủ lạnh khoảng 15 ph&uacute;t cho kem đ&ocirc;ng lại.</span></p>

                <p><span style="font-size:16px">Bước 3: Trang tr&iacute; b&aacute;nh<br />
                - Lấy kem tươi xanh l&aacute; c&acirc;y để vẽ mũi v&agrave; cổ &aacute;o Doraemon. Bạn c&oacute; thể d&ugrave;ng t&uacute;i nhỏ để vẽ cho dễ.<br />
                - Lấy kem tươi đỏ để vẽ miệng v&agrave; chu&ocirc;ng Doraemon. Bạn c&oacute; thể d&ugrave;ng dao để cắt miệng theo h&igrave;nh chữ nhật cong, sau đ&oacute; d&ugrave;ng kem tươi đỏ để phủ l&ecirc;n. Để chu&ocirc;ng Doraemon v&agrave;o giữa cổ &aacute;o, d&ugrave;ng kem tươi đỏ để vẽ chi tiết.<br />
                - Lấy socola trắng để vẽ mắt v&agrave; r&acirc;u Doraemon. Bạn c&oacute; thể d&ugrave;ng khu&ocirc;n tr&ograve;n nhỏ để cắt socola trắng th&agrave;nh h&igrave;nh tr&ograve;n, sau đ&oacute; d&ugrave;ng socola chảy để vẽ đồng tử. D&ugrave;ng socola chảy để vẽ r&acirc;u Doraemon theo &yacute; th&iacute;ch.<br />
                - Đặt b&aacute;nh v&agrave;o tủ lạnh khoảng 15 ph&uacute;t cho kem v&agrave; socola đ&ocirc;ng lại.</span></p>
                ',
                'hinhanh' => 'DOREMON-AR82.png',
                'loaisanpham_id' => 2,
                'giatien' => 580000,'inanh' => 0,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON DR04',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem h&igrave;nh Doraemon l&agrave; một m&oacute;n qu&agrave; tuyệt vời cho những người y&ecirc;u th&iacute;ch nh&acirc;n vật hoạt h&igrave;nh nổi tiếng n&agrave;y. Bạn c&oacute; thể l&agrave;m b&aacute;nh kem h&igrave;nh Doraemon tại nh&agrave; với những nguy&ecirc;n liệu đơn giản v&agrave; c&aacute;ch trang tr&iacute; dễ d&agrave;ng. Sau đ&acirc;y l&agrave; hướng dẫn chi tiết c&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh Doraemon.</strong></span></p>

                <p><span style="font-size:16px">Bước 1: Chuẩn bị nguy&ecirc;n liệu<br />
                - B&aacute;nh su kem (b&aacute;nh b&ocirc;ng lan) c&oacute; k&iacute;ch thước ph&ugrave; hợp với khu&ocirc;n mặt Doraemon. Bạn c&oacute; thể mua sẵn hoặc tự l&agrave;m theo c&ocirc;ng thức b&aacute;nh su kem.<br />
                - Kem tươi (whipping cream) để phủ v&agrave; trang tr&iacute; b&aacute;nh. Bạn cần khoảng 500ml kem tươi, đ&aacute;nh b&ocirc;ng v&agrave; chia th&agrave;nh 3 phần: 1 phần để phủ to&agrave;n bộ b&aacute;nh, 1 phần để nhuộm m&agrave;u xanh l&aacute; c&acirc;y cho mũi v&agrave; cổ &aacute;o Doraemon, 1 phần để nhuộm m&agrave;u đỏ cho miệng v&agrave; chu&ocirc;ng Doraemon.<br />
                - M&agrave;u thực phẩm xanh l&aacute; c&acirc;y v&agrave; đỏ để nhuộm kem tươi.<br />
                - Socola trắng để l&agrave;m mắt v&agrave; r&acirc;u Doraemon. Bạn cần khoảng 100g socola trắng, nấu chảy v&agrave; cho v&agrave;o t&uacute;i nhỏ, cắt lỗ nhỏ ở đầu để vẽ.<br />
                - Kẹo dẻo m&agrave;u v&agrave;ng để l&agrave;m chu&ocirc;ng Doraemon. Bạn cần khoảng 50g kẹo dẻo m&agrave;u v&agrave;ng, nặn th&agrave;nh h&igrave;nh tr&ograve;n rỗng ở giữa.<br />
                - Dao, k&eacute;o, th&igrave;a, dĩa, khu&ocirc;n tr&ograve;n để cắt b&aacute;nh.</span></p>

                <p><span style="font-size:16px">Bước 2: Cắt v&agrave; phủ b&aacute;nh<br />
                - Lấy khu&ocirc;n tr&ograve;n để cắt b&aacute;nh su kem th&agrave;nh h&igrave;nh tr&ograve;n, k&iacute;ch thước ph&ugrave; hợp với khu&ocirc;n mặt Doraemon. Bạn c&oacute; thể d&ugrave;ng dao để chỉnh sửa cho đều v&agrave; mịn.<br />
                - Lấy kem tươi trắng để phủ to&agrave;n bộ bề mặt b&aacute;nh, d&ugrave;ng th&igrave;a để l&agrave;m cho kem phẳng v&agrave; đều.<br />
                - Đặt b&aacute;nh l&ecirc;n dĩa, để trong tủ lạnh khoảng 15 ph&uacute;t cho kem đ&ocirc;ng lại.</span></p>

                <p><span style="font-size:16px">Bước 3: Trang tr&iacute; b&aacute;nh<br />
                - Lấy kem tươi xanh l&aacute; c&acirc;y để vẽ mũi v&agrave; cổ &aacute;o Doraemon. Bạn c&oacute; thể d&ugrave;ng t&uacute;i nhỏ để vẽ cho dễ.<br />
                - Lấy kem tươi đỏ để vẽ miệng v&agrave; chu&ocirc;ng Doraemon. Bạn c&oacute; thể d&ugrave;ng dao để cắt miệng theo h&igrave;nh chữ nhật cong, sau đ&oacute; d&ugrave;ng kem tươi đỏ để phủ l&ecirc;n. Để chu&ocirc;ng Doraemon v&agrave;o giữa cổ &aacute;o, d&ugrave;ng kem tươi đỏ để vẽ chi tiết.<br />
                - Lấy socola trắng để vẽ mắt v&agrave; r&acirc;u Doraemon. Bạn c&oacute; thể d&ugrave;ng khu&ocirc;n tr&ograve;n nhỏ để cắt socola trắng th&agrave;nh h&igrave;nh tr&ograve;n, sau đ&oacute; d&ugrave;ng socola chảy để vẽ đồng tử. D&ugrave;ng socola chảy để vẽ r&acirc;u Doraemon theo &yacute; th&iacute;ch.<br />
                - Đặt b&aacute;nh v&agrave;o tủ lạnh khoảng 15 ph&uacute;t cho kem v&agrave; socola đ&ocirc;ng lại.</span></p>
                ',
                'hinhanh' => 'DOREMON-AR52.png',
                'loaisanpham_id' => 2,
                'giatien' => 600000,'inanh' => 0,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'BÁNH KEM DOREAMON DR05',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem h&igrave;nh Doraemon l&agrave; một m&oacute;n qu&agrave; tuyệt vời cho những người y&ecirc;u th&iacute;ch nh&acirc;n vật hoạt h&igrave;nh nổi tiếng n&agrave;y. Bạn c&oacute; thể l&agrave;m b&aacute;nh kem h&igrave;nh Doraemon tại nh&agrave; với những nguy&ecirc;n liệu đơn giản v&agrave; c&aacute;ch trang tr&iacute; dễ d&agrave;ng. Sau đ&acirc;y l&agrave; hướng dẫn chi tiết c&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh Doraemon.</strong></span></p>

                <p><span style="font-size:16px">Bước 1: Chuẩn bị nguy&ecirc;n liệu<br />
                - B&aacute;nh su kem (b&aacute;nh b&ocirc;ng lan) c&oacute; k&iacute;ch thước ph&ugrave; hợp với khu&ocirc;n mặt Doraemon. Bạn c&oacute; thể mua sẵn hoặc tự l&agrave;m theo c&ocirc;ng thức b&aacute;nh su kem.<br />
                - Kem tươi (whipping cream) để phủ v&agrave; trang tr&iacute; b&aacute;nh. Bạn cần khoảng 500ml kem tươi, đ&aacute;nh b&ocirc;ng v&agrave; chia th&agrave;nh 3 phần: 1 phần để phủ to&agrave;n bộ b&aacute;nh, 1 phần để nhuộm m&agrave;u xanh l&aacute; c&acirc;y cho mũi v&agrave; cổ &aacute;o Doraemon, 1 phần để nhuộm m&agrave;u đỏ cho miệng v&agrave; chu&ocirc;ng Doraemon.<br />
                - M&agrave;u thực phẩm xanh l&aacute; c&acirc;y v&agrave; đỏ để nhuộm kem tươi.<br />
                - Socola trắng để l&agrave;m mắt v&agrave; r&acirc;u Doraemon. Bạn cần khoảng 100g socola trắng, nấu chảy v&agrave; cho v&agrave;o t&uacute;i nhỏ, cắt lỗ nhỏ ở đầu để vẽ.<br />
                - Kẹo dẻo m&agrave;u v&agrave;ng để l&agrave;m chu&ocirc;ng Doraemon. Bạn cần khoảng 50g kẹo dẻo m&agrave;u v&agrave;ng, nặn th&agrave;nh h&igrave;nh tr&ograve;n rỗng ở giữa.<br />
                - Dao, k&eacute;o, th&igrave;a, dĩa, khu&ocirc;n tr&ograve;n để cắt b&aacute;nh.</span></p>

                <p><span style="font-size:16px">Bước 2: Cắt v&agrave; phủ b&aacute;nh<br />
                - Lấy khu&ocirc;n tr&ograve;n để cắt b&aacute;nh su kem th&agrave;nh h&igrave;nh tr&ograve;n, k&iacute;ch thước ph&ugrave; hợp với khu&ocirc;n mặt Doraemon. Bạn c&oacute; thể d&ugrave;ng dao để chỉnh sửa cho đều v&agrave; mịn.<br />
                - Lấy kem tươi trắng để phủ to&agrave;n bộ bề mặt b&aacute;nh, d&ugrave;ng th&igrave;a để l&agrave;m cho kem phẳng v&agrave; đều.<br />
                - Đặt b&aacute;nh l&ecirc;n dĩa, để trong tủ lạnh khoảng 15 ph&uacute;t cho kem đ&ocirc;ng lại.</span></p>

                <p><span style="font-size:16px">Bước 3: Trang tr&iacute; b&aacute;nh<br />
                - Lấy kem tươi xanh l&aacute; c&acirc;y để vẽ mũi v&agrave; cổ &aacute;o Doraemon. Bạn c&oacute; thể d&ugrave;ng t&uacute;i nhỏ để vẽ cho dễ.<br />
                - Lấy kem tươi đỏ để vẽ miệng v&agrave; chu&ocirc;ng Doraemon. Bạn c&oacute; thể d&ugrave;ng dao để cắt miệng theo h&igrave;nh chữ nhật cong, sau đ&oacute; d&ugrave;ng kem tươi đỏ để phủ l&ecirc;n. Để chu&ocirc;ng Doraemon v&agrave;o giữa cổ &aacute;o, d&ugrave;ng kem tươi đỏ để vẽ chi tiết.<br />
                - Lấy socola trắng để vẽ mắt v&agrave; r&acirc;u Doraemon. Bạn c&oacute; thể d&ugrave;ng khu&ocirc;n tr&ograve;n nhỏ để cắt socola trắng th&agrave;nh h&igrave;nh tr&ograve;n, sau đ&oacute; d&ugrave;ng socola chảy để vẽ đồng tử. D&ugrave;ng socola chảy để vẽ r&acirc;u Doraemon theo &yacute; th&iacute;ch.<br />
                - Đặt b&aacute;nh v&agrave;o tủ lạnh khoảng 15 ph&uacute;t cho kem v&agrave; socola đ&ocirc;ng lại.</span></p>
                ',
                'hinhanh' => 'DOREMON-36.png',
                'loaisanpham_id' => 2,
                'giatien' => 600000,'inanh' => 0,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Sữa Tươi Vani STV01',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem sữa tươi vani l&agrave; một loại b&aacute;nh ngọt rất phổ biến v&agrave; được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh c&oacute; lớp kem b&eacute;o ngậy, mềm mịn, thơm lừng m&ugrave;i vani, kết hợp với b&aacute;nh b&ocirc;ng lan xốp nhẹ, ẩm ướt. B&aacute;nh kem sữa tươi vani kh&ocirc;ng chỉ l&agrave; m&oacute;n tr&aacute;ng miệng ngon miệng, m&agrave; c&ograve;n l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa cho những dịp đặc biệt như sinh nhật, kỷ niệm, lễ tết...</strong></span></p>

                <p>Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn c&aacute;ch l&agrave;m b&aacute;nh kem sữa tươi vani đơn giản v&agrave; dễ d&agrave;ng tại nh&agrave;. Bạn chỉ cần chuẩn bị những nguy&ecirc;n liệu sau:</p>

                <p>- B&aacute;nh b&ocirc;ng lan: bạn c&oacute; thể mua sẵn hoặc tự l&agrave;m theo c&ocirc;ng thức của ch&uacute;ng t&ocirc;i.<br />
                - Sữa tươi: n&ecirc;n chọn loại sữa tươi c&oacute; độ b&eacute;o cao để kem c&oacute; độ đặc v&agrave; b&eacute;o hơn.<br />
                - Kem tươi: n&ecirc;n chọn loại kem tươi kh&ocirc;ng đường để c&oacute; thể điều chỉnh độ ngọt theo &yacute; th&iacute;ch.<br />
                - Đường: để l&agrave;m kem v&agrave; phết l&ecirc;n b&aacute;nh b&ocirc;ng lan.<br />
                - Vani: để tạo hương vị cho kem. Bạn c&oacute; thể d&ugrave;ng vani tinh khiết hoặc vani hạt.<br />
                - Trang tr&iacute;: bạn c&oacute; thể d&ugrave;ng c&aacute;c loại tr&aacute;i c&acirc;y, kẹo, socola... để trang tr&iacute; b&aacute;nh theo sở th&iacute;ch.</p>

                <p>C&aacute;c bước l&agrave;m b&aacute;nh kem sữa tươi vani như sau:</p>

                <p>- Bước 1: Cắt b&aacute;nh b&ocirc;ng lan th&agrave;nh 3 lớp mỏng, phết đường nước l&ecirc;n mỗi lớp để b&aacute;nh ẩm v&agrave; ngọt hơn.<br />
                - Bước 2: Đ&aacute;nh kem tươi c&ugrave;ng với đường v&agrave; vani cho đến khi kem đặc v&agrave; c&oacute; độ cứng vừa phải. Bạn c&oacute; thể kiểm tra bằng c&aacute;ch lấy một muỗng kem v&agrave; &uacute;p ngược, nếu kem kh&ocirc;ng rơi xuống l&agrave; được.<br />
                - Bước 3: Lấy một lớp b&aacute;nh b&ocirc;ng lan, phết một lớp kem l&ecirc;n tr&ecirc;n, rồi đặt lớp b&aacute;nh tiếp theo l&ecirc;n. Lặp lại qu&aacute; tr&igrave;nh n&agrave;y cho đến khi hết b&aacute;nh. Phết kem l&ecirc;n to&agrave;n bộ bề mặt v&agrave; cạnh của b&aacute;nh.<br />
                - Bước 4: Trang tr&iacute; b&aacute;nh theo &yacute; th&iacute;ch. Bạn c&oacute; thể d&ugrave;ng c&aacute;c loại tr&aacute;i c&acirc;y như d&acirc;u, kiwi, xo&agrave;i... để tạo m&agrave;u sắc v&agrave; hương vị cho b&aacute;nh. Hoặc bạn c&oacute; thể d&ugrave;ng kẹo, socola, hạt... để tạo điểm nhấn cho b&aacute;nh. Để b&aacute;nh v&agrave;o tủ lạnh khoảng 2 tiếng để kem cứng lại v&agrave; b&aacute;nh ngấm kem.<br />
                - Bước 5: Thưởng thức b&aacute;nh kem sữa tươi vani ngon l&agrave;nh c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave;.</p>

                <p>B&aacute;nh kem sữa tươi vani l&agrave; một loại b&aacute;nh ngon v&agrave; dễ l&agrave;m. Bạn c&oacute; thể tự tay l&agrave;m cho những người th&acirc;n y&ecirc;u của m&igrave;nh để thể hiện t&igrave;nh cảm v&agrave; sự quan t&acirc;m. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; vui vẻ với b&aacute;nh kem sữa tươi vani nh&eacute;!</p>
                ',
                'hinhanh' => 'VANI-ST299.png',
                'loaisanpham_id' => 4,
                'giatien' => 440000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Sữa Tươi Vani STV02',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem sữa tươi vani l&agrave; một loại b&aacute;nh ngọt rất phổ biến v&agrave; được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh c&oacute; lớp kem b&eacute;o ngậy, mềm mịn, thơm lừng m&ugrave;i vani, kết hợp với b&aacute;nh b&ocirc;ng lan xốp nhẹ, ẩm ướt. B&aacute;nh kem sữa tươi vani kh&ocirc;ng chỉ l&agrave; m&oacute;n tr&aacute;ng miệng ngon miệng, m&agrave; c&ograve;n l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa cho những dịp đặc biệt như sinh nhật, kỷ niệm, lễ tết...</strong></span></p>

                <p>Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn c&aacute;ch l&agrave;m b&aacute;nh kem sữa tươi vani đơn giản v&agrave; dễ d&agrave;ng tại nh&agrave;. Bạn chỉ cần chuẩn bị những nguy&ecirc;n liệu sau:</p>

                <p>- B&aacute;nh b&ocirc;ng lan: bạn c&oacute; thể mua sẵn hoặc tự l&agrave;m theo c&ocirc;ng thức của ch&uacute;ng t&ocirc;i.<br />
                - Sữa tươi: n&ecirc;n chọn loại sữa tươi c&oacute; độ b&eacute;o cao để kem c&oacute; độ đặc v&agrave; b&eacute;o hơn.<br />
                - Kem tươi: n&ecirc;n chọn loại kem tươi kh&ocirc;ng đường để c&oacute; thể điều chỉnh độ ngọt theo &yacute; th&iacute;ch.<br />
                - Đường: để l&agrave;m kem v&agrave; phết l&ecirc;n b&aacute;nh b&ocirc;ng lan.<br />
                - Vani: để tạo hương vị cho kem. Bạn c&oacute; thể d&ugrave;ng vani tinh khiết hoặc vani hạt.<br />
                - Trang tr&iacute;: bạn c&oacute; thể d&ugrave;ng c&aacute;c loại tr&aacute;i c&acirc;y, kẹo, socola... để trang tr&iacute; b&aacute;nh theo sở th&iacute;ch.</p>

                <p>C&aacute;c bước l&agrave;m b&aacute;nh kem sữa tươi vani như sau:</p>

                <p>- Bước 1: Cắt b&aacute;nh b&ocirc;ng lan th&agrave;nh 3 lớp mỏng, phết đường nước l&ecirc;n mỗi lớp để b&aacute;nh ẩm v&agrave; ngọt hơn.<br />
                - Bước 2: Đ&aacute;nh kem tươi c&ugrave;ng với đường v&agrave; vani cho đến khi kem đặc v&agrave; c&oacute; độ cứng vừa phải. Bạn c&oacute; thể kiểm tra bằng c&aacute;ch lấy một muỗng kem v&agrave; &uacute;p ngược, nếu kem kh&ocirc;ng rơi xuống l&agrave; được.<br />
                - Bước 3: Lấy một lớp b&aacute;nh b&ocirc;ng lan, phết một lớp kem l&ecirc;n tr&ecirc;n, rồi đặt lớp b&aacute;nh tiếp theo l&ecirc;n. Lặp lại qu&aacute; tr&igrave;nh n&agrave;y cho đến khi hết b&aacute;nh. Phết kem l&ecirc;n to&agrave;n bộ bề mặt v&agrave; cạnh của b&aacute;nh.<br />
                - Bước 4: Trang tr&iacute; b&aacute;nh theo &yacute; th&iacute;ch. Bạn c&oacute; thể d&ugrave;ng c&aacute;c loại tr&aacute;i c&acirc;y như d&acirc;u, kiwi, xo&agrave;i... để tạo m&agrave;u sắc v&agrave; hương vị cho b&aacute;nh. Hoặc bạn c&oacute; thể d&ugrave;ng kẹo, socola, hạt... để tạo điểm nhấn cho b&aacute;nh. Để b&aacute;nh v&agrave;o tủ lạnh khoảng 2 tiếng để kem cứng lại v&agrave; b&aacute;nh ngấm kem.<br />
                - Bước 5: Thưởng thức b&aacute;nh kem sữa tươi vani ngon l&agrave;nh c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave;.</p>

                <p>B&aacute;nh kem sữa tươi vani l&agrave; một loại b&aacute;nh ngon v&agrave; dễ l&agrave;m. Bạn c&oacute; thể tự tay l&agrave;m cho những người th&acirc;n y&ecirc;u của m&igrave;nh để thể hiện t&igrave;nh cảm v&agrave; sự quan t&acirc;m. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; vui vẻ với b&aacute;nh kem sữa tươi vani nh&eacute;!</p>
                ',
                'hinhanh' => 'VANI-ST294.png',
                'loaisanpham_id' => 4,
                'giatien' => 420000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Sữa Tươi Vani STV03',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem sữa tươi vani l&agrave; một loại b&aacute;nh ngọt rất phổ biến v&agrave; được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh c&oacute; lớp kem b&eacute;o ngậy, mềm mịn, thơm lừng m&ugrave;i vani, kết hợp với b&aacute;nh b&ocirc;ng lan xốp nhẹ, ẩm ướt. B&aacute;nh kem sữa tươi vani kh&ocirc;ng chỉ l&agrave; m&oacute;n tr&aacute;ng miệng ngon miệng, m&agrave; c&ograve;n l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa cho những dịp đặc biệt như sinh nhật, kỷ niệm, lễ tết...</strong></span></p>

                <p>Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn c&aacute;ch l&agrave;m b&aacute;nh kem sữa tươi vani đơn giản v&agrave; dễ d&agrave;ng tại nh&agrave;. Bạn chỉ cần chuẩn bị những nguy&ecirc;n liệu sau:</p>

                <p>- B&aacute;nh b&ocirc;ng lan: bạn c&oacute; thể mua sẵn hoặc tự l&agrave;m theo c&ocirc;ng thức của ch&uacute;ng t&ocirc;i.<br />
                - Sữa tươi: n&ecirc;n chọn loại sữa tươi c&oacute; độ b&eacute;o cao để kem c&oacute; độ đặc v&agrave; b&eacute;o hơn.<br />
                - Kem tươi: n&ecirc;n chọn loại kem tươi kh&ocirc;ng đường để c&oacute; thể điều chỉnh độ ngọt theo &yacute; th&iacute;ch.<br />
                - Đường: để l&agrave;m kem v&agrave; phết l&ecirc;n b&aacute;nh b&ocirc;ng lan.<br />
                - Vani: để tạo hương vị cho kem. Bạn c&oacute; thể d&ugrave;ng vani tinh khiết hoặc vani hạt.<br />
                - Trang tr&iacute;: bạn c&oacute; thể d&ugrave;ng c&aacute;c loại tr&aacute;i c&acirc;y, kẹo, socola... để trang tr&iacute; b&aacute;nh theo sở th&iacute;ch.</p>

                <p>C&aacute;c bước l&agrave;m b&aacute;nh kem sữa tươi vani như sau:</p>

                <p>- Bước 1: Cắt b&aacute;nh b&ocirc;ng lan th&agrave;nh 3 lớp mỏng, phết đường nước l&ecirc;n mỗi lớp để b&aacute;nh ẩm v&agrave; ngọt hơn.<br />
                - Bước 2: Đ&aacute;nh kem tươi c&ugrave;ng với đường v&agrave; vani cho đến khi kem đặc v&agrave; c&oacute; độ cứng vừa phải. Bạn c&oacute; thể kiểm tra bằng c&aacute;ch lấy một muỗng kem v&agrave; &uacute;p ngược, nếu kem kh&ocirc;ng rơi xuống l&agrave; được.<br />
                - Bước 3: Lấy một lớp b&aacute;nh b&ocirc;ng lan, phết một lớp kem l&ecirc;n tr&ecirc;n, rồi đặt lớp b&aacute;nh tiếp theo l&ecirc;n. Lặp lại qu&aacute; tr&igrave;nh n&agrave;y cho đến khi hết b&aacute;nh. Phết kem l&ecirc;n to&agrave;n bộ bề mặt v&agrave; cạnh của b&aacute;nh.<br />
                - Bước 4: Trang tr&iacute; b&aacute;nh theo &yacute; th&iacute;ch. Bạn c&oacute; thể d&ugrave;ng c&aacute;c loại tr&aacute;i c&acirc;y như d&acirc;u, kiwi, xo&agrave;i... để tạo m&agrave;u sắc v&agrave; hương vị cho b&aacute;nh. Hoặc bạn c&oacute; thể d&ugrave;ng kẹo, socola, hạt... để tạo điểm nhấn cho b&aacute;nh. Để b&aacute;nh v&agrave;o tủ lạnh khoảng 2 tiếng để kem cứng lại v&agrave; b&aacute;nh ngấm kem.<br />
                - Bước 5: Thưởng thức b&aacute;nh kem sữa tươi vani ngon l&agrave;nh c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave;.</p>

                <p>B&aacute;nh kem sữa tươi vani l&agrave; một loại b&aacute;nh ngon v&agrave; dễ l&agrave;m. Bạn c&oacute; thể tự tay l&agrave;m cho những người th&acirc;n y&ecirc;u của m&igrave;nh để thể hiện t&igrave;nh cảm v&agrave; sự quan t&acirc;m. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; vui vẻ với b&aacute;nh kem sữa tươi vani nh&eacute;!</p>
                ',
                'hinhanh' => 'VANI-ST270.png',
                'loaisanpham_id' => 4,
                'giatien' => 460000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Sữa Tươi Vani STV04',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem sữa tươi vani l&agrave; một loại b&aacute;nh ngọt rất phổ biến v&agrave; được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh c&oacute; lớp kem b&eacute;o ngậy, mềm mịn, thơm lừng m&ugrave;i vani, kết hợp với b&aacute;nh b&ocirc;ng lan xốp nhẹ, ẩm ướt. B&aacute;nh kem sữa tươi vani kh&ocirc;ng chỉ l&agrave; m&oacute;n tr&aacute;ng miệng ngon miệng, m&agrave; c&ograve;n l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa cho những dịp đặc biệt như sinh nhật, kỷ niệm, lễ tết...</strong></span></p>

                <p>Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn c&aacute;ch l&agrave;m b&aacute;nh kem sữa tươi vani đơn giản v&agrave; dễ d&agrave;ng tại nh&agrave;. Bạn chỉ cần chuẩn bị những nguy&ecirc;n liệu sau:</p>

                <p>- B&aacute;nh b&ocirc;ng lan: bạn c&oacute; thể mua sẵn hoặc tự l&agrave;m theo c&ocirc;ng thức của ch&uacute;ng t&ocirc;i.<br />
                - Sữa tươi: n&ecirc;n chọn loại sữa tươi c&oacute; độ b&eacute;o cao để kem c&oacute; độ đặc v&agrave; b&eacute;o hơn.<br />
                - Kem tươi: n&ecirc;n chọn loại kem tươi kh&ocirc;ng đường để c&oacute; thể điều chỉnh độ ngọt theo &yacute; th&iacute;ch.<br />
                - Đường: để l&agrave;m kem v&agrave; phết l&ecirc;n b&aacute;nh b&ocirc;ng lan.<br />
                - Vani: để tạo hương vị cho kem. Bạn c&oacute; thể d&ugrave;ng vani tinh khiết hoặc vani hạt.<br />
                - Trang tr&iacute;: bạn c&oacute; thể d&ugrave;ng c&aacute;c loại tr&aacute;i c&acirc;y, kẹo, socola... để trang tr&iacute; b&aacute;nh theo sở th&iacute;ch.</p>

                <p>C&aacute;c bước l&agrave;m b&aacute;nh kem sữa tươi vani như sau:</p>

                <p>- Bước 1: Cắt b&aacute;nh b&ocirc;ng lan th&agrave;nh 3 lớp mỏng, phết đường nước l&ecirc;n mỗi lớp để b&aacute;nh ẩm v&agrave; ngọt hơn.<br />
                - Bước 2: Đ&aacute;nh kem tươi c&ugrave;ng với đường v&agrave; vani cho đến khi kem đặc v&agrave; c&oacute; độ cứng vừa phải. Bạn c&oacute; thể kiểm tra bằng c&aacute;ch lấy một muỗng kem v&agrave; &uacute;p ngược, nếu kem kh&ocirc;ng rơi xuống l&agrave; được.<br />
                - Bước 3: Lấy một lớp b&aacute;nh b&ocirc;ng lan, phết một lớp kem l&ecirc;n tr&ecirc;n, rồi đặt lớp b&aacute;nh tiếp theo l&ecirc;n. Lặp lại qu&aacute; tr&igrave;nh n&agrave;y cho đến khi hết b&aacute;nh. Phết kem l&ecirc;n to&agrave;n bộ bề mặt v&agrave; cạnh của b&aacute;nh.<br />
                - Bước 4: Trang tr&iacute; b&aacute;nh theo &yacute; th&iacute;ch. Bạn c&oacute; thể d&ugrave;ng c&aacute;c loại tr&aacute;i c&acirc;y như d&acirc;u, kiwi, xo&agrave;i... để tạo m&agrave;u sắc v&agrave; hương vị cho b&aacute;nh. Hoặc bạn c&oacute; thể d&ugrave;ng kẹo, socola, hạt... để tạo điểm nhấn cho b&aacute;nh. Để b&aacute;nh v&agrave;o tủ lạnh khoảng 2 tiếng để kem cứng lại v&agrave; b&aacute;nh ngấm kem.<br />
                - Bước 5: Thưởng thức b&aacute;nh kem sữa tươi vani ngon l&agrave;nh c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave;.</p>

                <p>B&aacute;nh kem sữa tươi vani l&agrave; một loại b&aacute;nh ngon v&agrave; dễ l&agrave;m. Bạn c&oacute; thể tự tay l&agrave;m cho những người th&acirc;n y&ecirc;u của m&igrave;nh để thể hiện t&igrave;nh cảm v&agrave; sự quan t&acirc;m. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; vui vẻ với b&aacute;nh kem sữa tươi vani nh&eacute;!</p>
                ',
                'hinhanh' => 'VANI-ST291.png',
                'loaisanpham_id' => 4,
                'giatien' => 455000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Sữa Tươi Vani STV05',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem sữa tươi vani l&agrave; một loại b&aacute;nh ngọt rất phổ biến v&agrave; được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh c&oacute; lớp kem b&eacute;o ngậy, mềm mịn, thơm lừng m&ugrave;i vani, kết hợp với b&aacute;nh b&ocirc;ng lan xốp nhẹ, ẩm ướt. B&aacute;nh kem sữa tươi vani kh&ocirc;ng chỉ l&agrave; m&oacute;n tr&aacute;ng miệng ngon miệng, m&agrave; c&ograve;n l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa cho những dịp đặc biệt như sinh nhật, kỷ niệm, lễ tết...</strong></span></p>

                <p>Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn c&aacute;ch l&agrave;m b&aacute;nh kem sữa tươi vani đơn giản v&agrave; dễ d&agrave;ng tại nh&agrave;. Bạn chỉ cần chuẩn bị những nguy&ecirc;n liệu sau:</p>

                <p>- B&aacute;nh b&ocirc;ng lan: bạn c&oacute; thể mua sẵn hoặc tự l&agrave;m theo c&ocirc;ng thức của ch&uacute;ng t&ocirc;i.<br />
                - Sữa tươi: n&ecirc;n chọn loại sữa tươi c&oacute; độ b&eacute;o cao để kem c&oacute; độ đặc v&agrave; b&eacute;o hơn.<br />
                - Kem tươi: n&ecirc;n chọn loại kem tươi kh&ocirc;ng đường để c&oacute; thể điều chỉnh độ ngọt theo &yacute; th&iacute;ch.<br />
                - Đường: để l&agrave;m kem v&agrave; phết l&ecirc;n b&aacute;nh b&ocirc;ng lan.<br />
                - Vani: để tạo hương vị cho kem. Bạn c&oacute; thể d&ugrave;ng vani tinh khiết hoặc vani hạt.<br />
                - Trang tr&iacute;: bạn c&oacute; thể d&ugrave;ng c&aacute;c loại tr&aacute;i c&acirc;y, kẹo, socola... để trang tr&iacute; b&aacute;nh theo sở th&iacute;ch.</p>

                <p>C&aacute;c bước l&agrave;m b&aacute;nh kem sữa tươi vani như sau:</p>

                <p>- Bước 1: Cắt b&aacute;nh b&ocirc;ng lan th&agrave;nh 3 lớp mỏng, phết đường nước l&ecirc;n mỗi lớp để b&aacute;nh ẩm v&agrave; ngọt hơn.<br />
                - Bước 2: Đ&aacute;nh kem tươi c&ugrave;ng với đường v&agrave; vani cho đến khi kem đặc v&agrave; c&oacute; độ cứng vừa phải. Bạn c&oacute; thể kiểm tra bằng c&aacute;ch lấy một muỗng kem v&agrave; &uacute;p ngược, nếu kem kh&ocirc;ng rơi xuống l&agrave; được.<br />
                - Bước 3: Lấy một lớp b&aacute;nh b&ocirc;ng lan, phết một lớp kem l&ecirc;n tr&ecirc;n, rồi đặt lớp b&aacute;nh tiếp theo l&ecirc;n. Lặp lại qu&aacute; tr&igrave;nh n&agrave;y cho đến khi hết b&aacute;nh. Phết kem l&ecirc;n to&agrave;n bộ bề mặt v&agrave; cạnh của b&aacute;nh.<br />
                - Bước 4: Trang tr&iacute; b&aacute;nh theo &yacute; th&iacute;ch. Bạn c&oacute; thể d&ugrave;ng c&aacute;c loại tr&aacute;i c&acirc;y như d&acirc;u, kiwi, xo&agrave;i... để tạo m&agrave;u sắc v&agrave; hương vị cho b&aacute;nh. Hoặc bạn c&oacute; thể d&ugrave;ng kẹo, socola, hạt... để tạo điểm nhấn cho b&aacute;nh. Để b&aacute;nh v&agrave;o tủ lạnh khoảng 2 tiếng để kem cứng lại v&agrave; b&aacute;nh ngấm kem.<br />
                - Bước 5: Thưởng thức b&aacute;nh kem sữa tươi vani ngon l&agrave;nh c&ugrave;ng gia đ&igrave;nh v&agrave; bạn b&egrave;.</p>

                <p>B&aacute;nh kem sữa tươi vani l&agrave; một loại b&aacute;nh ngon v&agrave; dễ l&agrave;m. Bạn c&oacute; thể tự tay l&agrave;m cho những người th&acirc;n y&ecirc;u của m&igrave;nh để thể hiện t&igrave;nh cảm v&agrave; sự quan t&acirc;m. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; vui vẻ với b&aacute;nh kem sữa tươi vani nh&eacute;!</p>
                ',
                'hinhanh' => 'KEMTUOI-352.png',
                'loaisanpham_id' => 4,
                'giatien' => 455000, 'inanh' => 1,

                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA SC01',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem hương socola l&agrave; một m&oacute;n tr&aacute;ng miệng ngon miệng v&agrave; dễ l&agrave;m. Bạn chỉ cần một số nguy&ecirc;n liệu đơn giản như bột m&igrave;, đường, trứng, bơ, sữa, socola v&agrave; kem tươi. Sau đ&acirc;y l&agrave; c&aacute;c bước để l&agrave;m b&aacute;nh kem hương socola:</strong></span></p>

                <p><span style="font-size:16px">- Bước 1: Trộn bột m&igrave;, đường v&agrave; bột nở trong một b&aacute;t lớn. Đặt b&aacute;t sang một b&ecirc;n.<br />
                - Bước 2: Đ&aacute;nh trứng trong một b&aacute;t nhỏ. Th&ecirc;m bơ n&oacute;ng chảy v&agrave; sữa v&agrave;o trứng v&agrave; khuấy đều.<br />
                - Bước 3: Cho hỗn hợp trứng v&agrave;o b&aacute;t bột m&igrave; v&agrave; khuấy nhẹ cho đến khi hỗn hợp đồng nhất. Kh&ocirc;ng n&ecirc;n khuấy qu&aacute; nhiều để b&aacute;nh kh&ocirc;ng bị cứng.<br />
                - Bước 4: Đổ hỗn hợp b&aacute;nh v&agrave;o một khu&ocirc;n nướng đ&atilde; được b&ocirc;i dầu hoặc l&oacute;t giấy nến. Phẳng mặt b&aacute;nh v&agrave; rắc &iacute;t socola l&ecirc;n tr&ecirc;n.<br />
                - Bước 5: Nướng b&aacute;nh trong l&ograve; n&oacute;ng 180 độ C trong khoảng 25-30 ph&uacute;t hoặc cho đến khi b&aacute;nh ch&iacute;n v&agrave;ng. Kiểm tra bằng c&aacute;ch chọc một que gỗ v&agrave;o giữa b&aacute;nh, nếu que kh&ocirc;ng d&iacute;nh th&igrave; b&aacute;nh đ&atilde; ch&iacute;n.<br />
                - Bước 6: Lấy b&aacute;nh ra khỏi l&ograve; v&agrave; để nguội ho&agrave;n to&agrave;n tr&ecirc;n một gi&aacute;. Cắt b&aacute;nh th&agrave;nh c&aacute;c miếng vừa ăn.<br />
                - Bước 7: Đ&aacute;nh kem tươi với &iacute;t đường cho đến khi kem d&agrave;y v&agrave; c&oacute; độ cứng vừa phải. B&ocirc;i kem l&ecirc;n mặt v&agrave; viền của c&aacute;c miếng b&aacute;nh. Trang tr&iacute; th&ecirc;m với socola hoặc c&aacute;c loại hạt kh&aacute;c theo &yacute; th&iacute;ch.</span></p>

                <p><span style="font-size:16px">B&aacute;nh kem hương socola đ&atilde; ho&agrave;n th&agrave;nh! Bạn c&oacute; thể thưởng thức ngay hoặc để trong tủ lạnh cho đến khi d&ugrave;ng. B&aacute;nh kem hương socola l&agrave; m&oacute;n tr&aacute;ng miệng l&yacute; tưởng cho c&aacute;c dịp sinh nhật, tiệc t&ugrave;ng hay chỉ đơn giản l&agrave; để chi&ecirc;u đ&atilde;i gia đ&igrave;nh v&agrave; bạn b&egrave;. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với b&aacute;nh kem hương socola!</span></p>
                ',
                'hinhanh' => 'SOCOLA-S16.png',
                'loaisanpham_id' => 3,
                'giatien' => 435000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA SC02',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem hương socola l&agrave; một m&oacute;n tr&aacute;ng miệng ngon miệng v&agrave; dễ l&agrave;m. Bạn chỉ cần một số nguy&ecirc;n liệu đơn giản như bột m&igrave;, đường, trứng, bơ, sữa, socola v&agrave; kem tươi. Sau đ&acirc;y l&agrave; c&aacute;c bước để l&agrave;m b&aacute;nh kem hương socola:</strong></span></p>

                <p><span style="font-size:16px">- Bước 1: Trộn bột m&igrave;, đường v&agrave; bột nở trong một b&aacute;t lớn. Đặt b&aacute;t sang một b&ecirc;n.<br />
                - Bước 2: Đ&aacute;nh trứng trong một b&aacute;t nhỏ. Th&ecirc;m bơ n&oacute;ng chảy v&agrave; sữa v&agrave;o trứng v&agrave; khuấy đều.<br />
                - Bước 3: Cho hỗn hợp trứng v&agrave;o b&aacute;t bột m&igrave; v&agrave; khuấy nhẹ cho đến khi hỗn hợp đồng nhất. Kh&ocirc;ng n&ecirc;n khuấy qu&aacute; nhiều để b&aacute;nh kh&ocirc;ng bị cứng.<br />
                - Bước 4: Đổ hỗn hợp b&aacute;nh v&agrave;o một khu&ocirc;n nướng đ&atilde; được b&ocirc;i dầu hoặc l&oacute;t giấy nến. Phẳng mặt b&aacute;nh v&agrave; rắc &iacute;t socola l&ecirc;n tr&ecirc;n.<br />
                - Bước 5: Nướng b&aacute;nh trong l&ograve; n&oacute;ng 180 độ C trong khoảng 25-30 ph&uacute;t hoặc cho đến khi b&aacute;nh ch&iacute;n v&agrave;ng. Kiểm tra bằng c&aacute;ch chọc một que gỗ v&agrave;o giữa b&aacute;nh, nếu que kh&ocirc;ng d&iacute;nh th&igrave; b&aacute;nh đ&atilde; ch&iacute;n.<br />
                - Bước 6: Lấy b&aacute;nh ra khỏi l&ograve; v&agrave; để nguội ho&agrave;n to&agrave;n tr&ecirc;n một gi&aacute;. Cắt b&aacute;nh th&agrave;nh c&aacute;c miếng vừa ăn.<br />
                - Bước 7: Đ&aacute;nh kem tươi với &iacute;t đường cho đến khi kem d&agrave;y v&agrave; c&oacute; độ cứng vừa phải. B&ocirc;i kem l&ecirc;n mặt v&agrave; viền của c&aacute;c miếng b&aacute;nh. Trang tr&iacute; th&ecirc;m với socola hoặc c&aacute;c loại hạt kh&aacute;c theo &yacute; th&iacute;ch.</span></p>

                <p><span style="font-size:16px">B&aacute;nh kem hương socola đ&atilde; ho&agrave;n th&agrave;nh! Bạn c&oacute; thể thưởng thức ngay hoặc để trong tủ lạnh cho đến khi d&ugrave;ng. B&aacute;nh kem hương socola l&agrave; m&oacute;n tr&aacute;ng miệng l&yacute; tưởng cho c&aacute;c dịp sinh nhật, tiệc t&ugrave;ng hay chỉ đơn giản l&agrave; để chi&ecirc;u đ&atilde;i gia đ&igrave;nh v&agrave; bạn b&egrave;. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với b&aacute;nh kem hương socola!</span></p>
                ',
                'hinhanh' => 'SOCOLA-S25.png',
                'loaisanpham_id' => 3,
                'giatien' => 400000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA SC03',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem hương socola l&agrave; một m&oacute;n tr&aacute;ng miệng ngon miệng v&agrave; dễ l&agrave;m. Bạn chỉ cần một số nguy&ecirc;n liệu đơn giản như bột m&igrave;, đường, trứng, bơ, sữa, socola v&agrave; kem tươi. Sau đ&acirc;y l&agrave; c&aacute;c bước để l&agrave;m b&aacute;nh kem hương socola:</strong></span></p>

                <p><span style="font-size:16px">- Bước 1: Trộn bột m&igrave;, đường v&agrave; bột nở trong một b&aacute;t lớn. Đặt b&aacute;t sang một b&ecirc;n.<br />
                - Bước 2: Đ&aacute;nh trứng trong một b&aacute;t nhỏ. Th&ecirc;m bơ n&oacute;ng chảy v&agrave; sữa v&agrave;o trứng v&agrave; khuấy đều.<br />
                - Bước 3: Cho hỗn hợp trứng v&agrave;o b&aacute;t bột m&igrave; v&agrave; khuấy nhẹ cho đến khi hỗn hợp đồng nhất. Kh&ocirc;ng n&ecirc;n khuấy qu&aacute; nhiều để b&aacute;nh kh&ocirc;ng bị cứng.<br />
                - Bước 4: Đổ hỗn hợp b&aacute;nh v&agrave;o một khu&ocirc;n nướng đ&atilde; được b&ocirc;i dầu hoặc l&oacute;t giấy nến. Phẳng mặt b&aacute;nh v&agrave; rắc &iacute;t socola l&ecirc;n tr&ecirc;n.<br />
                - Bước 5: Nướng b&aacute;nh trong l&ograve; n&oacute;ng 180 độ C trong khoảng 25-30 ph&uacute;t hoặc cho đến khi b&aacute;nh ch&iacute;n v&agrave;ng. Kiểm tra bằng c&aacute;ch chọc một que gỗ v&agrave;o giữa b&aacute;nh, nếu que kh&ocirc;ng d&iacute;nh th&igrave; b&aacute;nh đ&atilde; ch&iacute;n.<br />
                - Bước 6: Lấy b&aacute;nh ra khỏi l&ograve; v&agrave; để nguội ho&agrave;n to&agrave;n tr&ecirc;n một gi&aacute;. Cắt b&aacute;nh th&agrave;nh c&aacute;c miếng vừa ăn.<br />
                - Bước 7: Đ&aacute;nh kem tươi với &iacute;t đường cho đến khi kem d&agrave;y v&agrave; c&oacute; độ cứng vừa phải. B&ocirc;i kem l&ecirc;n mặt v&agrave; viền của c&aacute;c miếng b&aacute;nh. Trang tr&iacute; th&ecirc;m với socola hoặc c&aacute;c loại hạt kh&aacute;c theo &yacute; th&iacute;ch.</span></p>

                <p><span style="font-size:16px">B&aacute;nh kem hương socola đ&atilde; ho&agrave;n th&agrave;nh! Bạn c&oacute; thể thưởng thức ngay hoặc để trong tủ lạnh cho đến khi d&ugrave;ng. B&aacute;nh kem hương socola l&agrave; m&oacute;n tr&aacute;ng miệng l&yacute; tưởng cho c&aacute;c dịp sinh nhật, tiệc t&ugrave;ng hay chỉ đơn giản l&agrave; để chi&ecirc;u đ&atilde;i gia đ&igrave;nh v&agrave; bạn b&egrave;. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với b&aacute;nh kem hương socola!</span></p>
                ',
                'hinhanh' => 'SOCOLA-S05.png',
                'loaisanpham_id' => 3,
                'giatien' => 395000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA SC04',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem hương socola l&agrave; một m&oacute;n tr&aacute;ng miệng ngon miệng v&agrave; dễ l&agrave;m. Bạn chỉ cần một số nguy&ecirc;n liệu đơn giản như bột m&igrave;, đường, trứng, bơ, sữa, socola v&agrave; kem tươi. Sau đ&acirc;y l&agrave; c&aacute;c bước để l&agrave;m b&aacute;nh kem hương socola:</strong></span></p>

                <p><span style="font-size:16px">- Bước 1: Trộn bột m&igrave;, đường v&agrave; bột nở trong một b&aacute;t lớn. Đặt b&aacute;t sang một b&ecirc;n.<br />
                - Bước 2: Đ&aacute;nh trứng trong một b&aacute;t nhỏ. Th&ecirc;m bơ n&oacute;ng chảy v&agrave; sữa v&agrave;o trứng v&agrave; khuấy đều.<br />
                - Bước 3: Cho hỗn hợp trứng v&agrave;o b&aacute;t bột m&igrave; v&agrave; khuấy nhẹ cho đến khi hỗn hợp đồng nhất. Kh&ocirc;ng n&ecirc;n khuấy qu&aacute; nhiều để b&aacute;nh kh&ocirc;ng bị cứng.<br />
                - Bước 4: Đổ hỗn hợp b&aacute;nh v&agrave;o một khu&ocirc;n nướng đ&atilde; được b&ocirc;i dầu hoặc l&oacute;t giấy nến. Phẳng mặt b&aacute;nh v&agrave; rắc &iacute;t socola l&ecirc;n tr&ecirc;n.<br />
                - Bước 5: Nướng b&aacute;nh trong l&ograve; n&oacute;ng 180 độ C trong khoảng 25-30 ph&uacute;t hoặc cho đến khi b&aacute;nh ch&iacute;n v&agrave;ng. Kiểm tra bằng c&aacute;ch chọc một que gỗ v&agrave;o giữa b&aacute;nh, nếu que kh&ocirc;ng d&iacute;nh th&igrave; b&aacute;nh đ&atilde; ch&iacute;n.<br />
                - Bước 6: Lấy b&aacute;nh ra khỏi l&ograve; v&agrave; để nguội ho&agrave;n to&agrave;n tr&ecirc;n một gi&aacute;. Cắt b&aacute;nh th&agrave;nh c&aacute;c miếng vừa ăn.<br />
                - Bước 7: Đ&aacute;nh kem tươi với &iacute;t đường cho đến khi kem d&agrave;y v&agrave; c&oacute; độ cứng vừa phải. B&ocirc;i kem l&ecirc;n mặt v&agrave; viền của c&aacute;c miếng b&aacute;nh. Trang tr&iacute; th&ecirc;m với socola hoặc c&aacute;c loại hạt kh&aacute;c theo &yacute; th&iacute;ch.</span></p>

                <p><span style="font-size:16px">B&aacute;nh kem hương socola đ&atilde; ho&agrave;n th&agrave;nh! Bạn c&oacute; thể thưởng thức ngay hoặc để trong tủ lạnh cho đến khi d&ugrave;ng. B&aacute;nh kem hương socola l&agrave; m&oacute;n tr&aacute;ng miệng l&yacute; tưởng cho c&aacute;c dịp sinh nhật, tiệc t&ugrave;ng hay chỉ đơn giản l&agrave; để chi&ecirc;u đ&atilde;i gia đ&igrave;nh v&agrave; bạn b&egrave;. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với b&aacute;nh kem hương socola!</span></p>
                ',
                'hinhanh' => 'SOCOLA-S04.png',
                'loaisanpham_id' => 3,
                'giatien' => 425000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem SOCOLA SC05',
                'mota' => '<p><span style="font-size:16px"><strong>B&aacute;nh kem hương socola l&agrave; một m&oacute;n tr&aacute;ng miệng ngon miệng v&agrave; dễ l&agrave;m. Bạn chỉ cần một số nguy&ecirc;n liệu đơn giản như bột m&igrave;, đường, trứng, bơ, sữa, socola v&agrave; kem tươi. Sau đ&acirc;y l&agrave; c&aacute;c bước để l&agrave;m b&aacute;nh kem hương socola:</strong></span></p>

                <p><span style="font-size:16px">- Bước 1: Trộn bột m&igrave;, đường v&agrave; bột nở trong một b&aacute;t lớn. Đặt b&aacute;t sang một b&ecirc;n.<br />
                - Bước 2: Đ&aacute;nh trứng trong một b&aacute;t nhỏ. Th&ecirc;m bơ n&oacute;ng chảy v&agrave; sữa v&agrave;o trứng v&agrave; khuấy đều.<br />
                - Bước 3: Cho hỗn hợp trứng v&agrave;o b&aacute;t bột m&igrave; v&agrave; khuấy nhẹ cho đến khi hỗn hợp đồng nhất. Kh&ocirc;ng n&ecirc;n khuấy qu&aacute; nhiều để b&aacute;nh kh&ocirc;ng bị cứng.<br />
                - Bước 4: Đổ hỗn hợp b&aacute;nh v&agrave;o một khu&ocirc;n nướng đ&atilde; được b&ocirc;i dầu hoặc l&oacute;t giấy nến. Phẳng mặt b&aacute;nh v&agrave; rắc &iacute;t socola l&ecirc;n tr&ecirc;n.<br />
                - Bước 5: Nướng b&aacute;nh trong l&ograve; n&oacute;ng 180 độ C trong khoảng 25-30 ph&uacute;t hoặc cho đến khi b&aacute;nh ch&iacute;n v&agrave;ng. Kiểm tra bằng c&aacute;ch chọc một que gỗ v&agrave;o giữa b&aacute;nh, nếu que kh&ocirc;ng d&iacute;nh th&igrave; b&aacute;nh đ&atilde; ch&iacute;n.<br />
                - Bước 6: Lấy b&aacute;nh ra khỏi l&ograve; v&agrave; để nguội ho&agrave;n to&agrave;n tr&ecirc;n một gi&aacute;. Cắt b&aacute;nh th&agrave;nh c&aacute;c miếng vừa ăn.<br />
                - Bước 7: Đ&aacute;nh kem tươi với &iacute;t đường cho đến khi kem d&agrave;y v&agrave; c&oacute; độ cứng vừa phải. B&ocirc;i kem l&ecirc;n mặt v&agrave; viền của c&aacute;c miếng b&aacute;nh. Trang tr&iacute; th&ecirc;m với socola hoặc c&aacute;c loại hạt kh&aacute;c theo &yacute; th&iacute;ch.</span></p>

                <p><span style="font-size:16px">B&aacute;nh kem hương socola đ&atilde; ho&agrave;n th&agrave;nh! Bạn c&oacute; thể thưởng thức ngay hoặc để trong tủ lạnh cho đến khi d&ugrave;ng. B&aacute;nh kem hương socola l&agrave; m&oacute;n tr&aacute;ng miệng l&yacute; tưởng cho c&aacute;c dịp sinh nhật, tiệc t&ugrave;ng hay chỉ đơn giản l&agrave; để chi&ecirc;u đ&atilde;i gia đ&igrave;nh v&agrave; bạn b&egrave;. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với b&aacute;nh kem hương socola!</span></p>
                ',
                'hinhanh' => 'SOCOLA-120.png',
                'loaisanpham_id' => 3,
                'giatien' => 425000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng HV01',
                'mota' => '<p><strong><span style="font-size:16px">B&aacute;nh kem h&igrave;nh hũ v&agrave;ng l&agrave; một m&oacute;n ăn ngọt độc đ&aacute;o v&agrave; hấp dẫn, được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh kem h&igrave;nh hũ v&agrave;ng kh&ocirc;ng chỉ c&oacute; vị ngon, m&agrave; c&ograve;n mang &yacute; nghĩa phong thủy tốt, mang lại may mắn v&agrave; t&agrave;i lộc cho người thưởng thức. B&agrave;i viết n&agrave;y sẽ hướng dẫn bạn c&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh hũ v&agrave;ng đơn giản v&agrave; nhanh ch&oacute;ng tại nh&agrave;.</span></strong></p>

                <p><span style="font-size:16px">Nguy&ecirc;n liệu cần chuẩn bị:</span></p>

                <p><span style="font-size:16px">- Bột b&aacute;nh gato: 200g<br />
                - Trứng g&agrave;: 4 quả<br />
                - Đường: 150g<br />
                - Dầu ăn: 80ml<br />
                - Sữa tươi: 80ml<br />
                - Vani: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Bột nở: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Kem tươi: 500ml<br />
                - Đường bột: 50g<br />
                - M&agrave;u thực phẩm v&agrave;ng: &iacute;t<br />
                - Khu&ocirc;n b&aacute;nh h&igrave;nh hũ v&agrave;ng</span></p>

                <p><span style="font-size:16px">C&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh hũ v&agrave;ng:</span></p>

                <p><span style="font-size:16px">Bước 1: L&agrave;m b&aacute;nh gato</span></p>

                <p><span style="font-size:16px">- Đ&aacute;nh trứng v&agrave; đường cho đến khi trứng trắng v&agrave; xốp.<br />
                - Th&ecirc;m dầu ăn, sữa tươi, vani v&agrave; khuấy đều.<br />
                - Lọc bột b&aacute;nh gato v&agrave; bột nở qua r&acirc;y nhỏ, rồi cho v&agrave;o hỗn hợp trứng v&agrave; khuấy nhẹ tay cho đến khi kh&ocirc;ng c&ograve;n cục bột.<br />
                - Đổ bột b&aacute;nh v&agrave;o khu&ocirc;n đ&atilde; b&ocirc;i dầu, lắc nhẹ cho bột phẳng mặt.<br />
                - Nướng b&aacute;nh trong l&ograve; nướng đ&atilde; được l&agrave;m n&oacute;ng trước ở nhiệt độ 180 độ C trong khoảng 25 ph&uacute;t hoặc cho đến khi b&aacute;nh ch&iacute;n v&agrave;ng.<br />
                - Lấy b&aacute;nh ra khỏi l&ograve;, để nguội rồi lấy ra khỏi khu&ocirc;n.</span></p>

                <p><span style="font-size:16px">Bước 2: L&agrave;m kem trang tr&iacute;</span></p>

                <p><span style="font-size:16px">- Đ&aacute;nh kem tươi c&ugrave;ng với đường bột cho đến khi kem cứng v&agrave; c&oacute; độ giữa.<br />
                - Chia kem th&agrave;nh hai phần, một phần để nguy&ecirc;n m&agrave;u trắng, một phần nhỏ th&ecirc;m m&agrave;u thực phẩm v&agrave;ng để l&agrave;m m&agrave;u v&agrave;ng cho hũ.<br />
                - Cho kem v&agrave;o t&uacute;i bọc nilon c&oacute; đầu kim loại hoa văn hoặc c&oacute; thể d&ugrave;ng dao để trang tr&iacute;.</span></p>

                <p><span style="font-size:16px">Bước 3: Trang tr&iacute; b&aacute;nh</span></p>

                <p><span style="font-size:16px">- Cắt b&aacute;nh gato th&agrave;nh hai lớp, x&eacute; nhỏ một lớp để l&agrave;m nền cho hũ v&agrave;ng.<br />
                - Xếp lớp b&aacute;nh gato c&ograve;n lại l&ecirc;n đĩa, xoa kem trắng l&ecirc;n to&agrave;n bộ bề mặt.<br />
                - D&ugrave;ng dao hoặc k&eacute;o cắt miếng giấy vụn th&agrave;nh h&igrave;nh hũ, rồi d&ugrave;ng l&agrave;m khu&ocirc;n để vẽ hũ l&ecirc;n b&aacute;nh.<br />
                - D&ugrave;ng kem m&agrave;u v&agrave;ng để t&ocirc; theo khu&ocirc;n giấy, rồi d&ugrave;ng dao hoặc t&uacute;i kem để tạo hoa văn cho hũ.<br />
                - Rải lớp b&aacute;nh gato đ&atilde; x&eacute; nhỏ l&ecirc;n tr&ecirc;n hũ để tạo hiệu ứng tiền rơi ra từ hũ.<br />
                - Trang tr&iacute; th&ecirc;m c&aacute;c chi tiết kh&aacute;c theo &yacute; th&iacute;ch.</span></p>

                <p><span style="font-size:16px">B&aacute;nh kem h&igrave;nh hũ v&agrave;ng đ&atilde; ho&agrave;n th&agrave;nh. Bạn c&oacute; thể thưởng thức ngay hoặc để trong tủ lạnh cho b&aacute;nh cứng lại trước khi cắt. B&aacute;nh kem h&igrave;nh hũ v&agrave;ng kh&ocirc;ng chỉ l&agrave; một m&oacute;n ăn ngon, m&agrave; c&ograve;n l&agrave; một m&oacute;n qu&agrave; &yacute; nghĩa cho người th&acirc;n v&agrave; bạn b&egrave; trong những dịp đặc biệt. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với b&aacute;nh kem h&igrave;nh hũ v&agrave;ng!</span></p>
                ',
                'hinhanh' => 'HUVANG-V98.png',
                'loaisanpham_id' => 5,
                'giatien' => 650000,'inanh' => 0,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng HV02',
                'mota' => '<p><strong><span style="font-size:16px">B&aacute;nh kem h&igrave;nh hũ v&agrave;ng l&agrave; một m&oacute;n ăn ngọt độc đ&aacute;o v&agrave; hấp dẫn, được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh kem h&igrave;nh hũ v&agrave;ng kh&ocirc;ng chỉ c&oacute; vị ngon, m&agrave; c&ograve;n mang &yacute; nghĩa phong thủy tốt, mang lại may mắn v&agrave; t&agrave;i lộc cho người thưởng thức. B&agrave;i viết n&agrave;y sẽ hướng dẫn bạn c&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh hũ v&agrave;ng đơn giản v&agrave; nhanh ch&oacute;ng tại nh&agrave;.</span></strong></p>

                <p><span style="font-size:16px">Nguy&ecirc;n liệu cần chuẩn bị:</span></p>

                <p><span style="font-size:16px">- Bột b&aacute;nh gato: 200g<br />
                - Trứng g&agrave;: 4 quả<br />
                - Đường: 150g<br />
                - Dầu ăn: 80ml<br />
                - Sữa tươi: 80ml<br />
                - Vani: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Bột nở: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Kem tươi: 500ml<br />
                - Đường bột: 50g<br />
                - M&agrave;u thực phẩm v&agrave;ng: &iacute;t<br />
                - Khu&ocirc;n b&aacute;nh h&igrave;nh hũ v&agrave;ng</span></p>

                <p><span style="font-size:16px">C&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh hũ v&agrave;ng:</span></p>

                <p><span style="font-size:16px">Bước 1: L&agrave;m b&aacute;nh gato</span></p>

                <p><span style="font-size:16px">- Đ&aacute;nh trứng v&agrave; đường cho đến khi trứng trắng v&agrave; xốp.<br />
                - Th&ecirc;m dầu ăn, sữa tươi, vani v&agrave; khuấy đều.<br />
                - Lọc bột b&aacute;nh gato v&agrave; bột nở qua r&acirc;y nhỏ, rồi cho v&agrave;o hỗn hợp trứng v&agrave; khuấy nhẹ tay cho đến khi kh&ocirc;ng c&ograve;n cục bột.<br />
                - Đổ bột b&aacute;nh v&agrave;o khu&ocirc;n đ&atilde; b&ocirc;i dầu, lắc nhẹ cho bột phẳng mặt.<br />
                - Nướng b&aacute;nh trong l&ograve; nướng đ&atilde; được l&agrave;m n&oacute;ng trước ở nhiệt độ 180 độ C trong khoảng 25 ph&uacute;t hoặc cho đến khi b&aacute;nh ch&iacute;n v&agrave;ng.<br />
                - Lấy b&aacute;nh ra khỏi l&ograve;, để nguội rồi lấy ra khỏi khu&ocirc;n.</span></p>

                <p><span style="font-size:16px">Bước 2: L&agrave;m kem trang tr&iacute;</span></p>

                <p><span style="font-size:16px">- Đ&aacute;nh kem tươi c&ugrave;ng với đường bột cho đến khi kem cứng v&agrave; c&oacute; độ giữa.<br />
                - Chia kem th&agrave;nh hai phần, một phần để nguy&ecirc;n m&agrave;u trắng, một phần nhỏ th&ecirc;m m&agrave;u thực phẩm v&agrave;ng để l&agrave;m m&agrave;u v&agrave;ng cho hũ.<br />
                - Cho kem v&agrave;o t&uacute;i bọc nilon c&oacute; đầu kim loại hoa văn hoặc c&oacute; thể d&ugrave;ng dao để trang tr&iacute;.</span></p>

                <p><span style="font-size:16px">Bước 3: Trang tr&iacute; b&aacute;nh</span></p>

                <p><span style="font-size:16px">- Cắt b&aacute;nh gato th&agrave;nh hai lớp, x&eacute; nhỏ một lớp để l&agrave;m nền cho hũ v&agrave;ng.<br />
                - Xếp lớp b&aacute;nh gato c&ograve;n lại l&ecirc;n đĩa, xoa kem trắng l&ecirc;n to&agrave;n bộ bề mặt.<br />
                - D&ugrave;ng dao hoặc k&eacute;o cắt miếng giấy vụn th&agrave;nh h&igrave;nh hũ, rồi d&ugrave;ng l&agrave;m khu&ocirc;n để vẽ hũ l&ecirc;n b&aacute;nh.<br />
                - D&ugrave;ng kem m&agrave;u v&agrave;ng để t&ocirc; theo khu&ocirc;n giấy, rồi d&ugrave;ng dao hoặc t&uacute;i kem để tạo hoa văn cho hũ.<br />
                - Rải lớp b&aacute;nh gato đ&atilde; x&eacute; nhỏ l&ecirc;n tr&ecirc;n hũ để tạo hiệu ứng tiền rơi ra từ hũ.<br />
                - Trang tr&iacute; th&ecirc;m c&aacute;c chi tiết kh&aacute;c theo &yacute; th&iacute;ch.</span></p>

                <p><span style="font-size:16px">B&aacute;nh kem h&igrave;nh hũ v&agrave;ng đ&atilde; ho&agrave;n th&agrave;nh. Bạn c&oacute; thể thưởng thức ngay hoặc để trong tủ lạnh cho b&aacute;nh cứng lại trước khi cắt. B&aacute;nh kem h&igrave;nh hũ v&agrave;ng kh&ocirc;ng chỉ l&agrave; một m&oacute;n ăn ngon, m&agrave; c&ograve;n l&agrave; một m&oacute;n qu&agrave; &yacute; nghĩa cho người th&acirc;n v&agrave; bạn b&egrave; trong những dịp đặc biệt. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với b&aacute;nh kem h&igrave;nh hũ v&agrave;ng!</span></p>
                ',
                'hinhanh' => 'HUVANG-V68.png',
                'loaisanpham_id' => 5,
                'giatien' => 600000,'inanh' => 0,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng HV03',
                'mota' => '<p><strong><span style="font-size:16px">B&aacute;nh kem h&igrave;nh hũ v&agrave;ng l&agrave; một m&oacute;n ăn ngọt độc đ&aacute;o v&agrave; hấp dẫn, được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh kem h&igrave;nh hũ v&agrave;ng kh&ocirc;ng chỉ c&oacute; vị ngon, m&agrave; c&ograve;n mang &yacute; nghĩa phong thủy tốt, mang lại may mắn v&agrave; t&agrave;i lộc cho người thưởng thức. B&agrave;i viết n&agrave;y sẽ hướng dẫn bạn c&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh hũ v&agrave;ng đơn giản v&agrave; nhanh ch&oacute;ng tại nh&agrave;.</span></strong></p>

                <p><span style="font-size:16px">Nguy&ecirc;n liệu cần chuẩn bị:</span></p>

                <p><span style="font-size:16px">- Bột b&aacute;nh gato: 200g<br />
                - Trứng g&agrave;: 4 quả<br />
                - Đường: 150g<br />
                - Dầu ăn: 80ml<br />
                - Sữa tươi: 80ml<br />
                - Vani: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Bột nở: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Kem tươi: 500ml<br />
                - Đường bột: 50g<br />
                - M&agrave;u thực phẩm v&agrave;ng: &iacute;t<br />
                - Khu&ocirc;n b&aacute;nh h&igrave;nh hũ v&agrave;ng</span></p>

                <p><span style="font-size:16px">C&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh hũ v&agrave;ng:</span></p>

                <p><span style="font-size:16px">Bước 1: L&agrave;m b&aacute;nh gato</span></p>

                <p><span style="font-size:16px">- Đ&aacute;nh trứng v&agrave; đường cho đến khi trứng trắng v&agrave; xốp.<br />
                - Th&ecirc;m dầu ăn, sữa tươi, vani v&agrave; khuấy đều.<br />
                - Lọc bột b&aacute;nh gato v&agrave; bột nở qua r&acirc;y nhỏ, rồi cho v&agrave;o hỗn hợp trứng v&agrave; khuấy nhẹ tay cho đến khi kh&ocirc;ng c&ograve;n cục bột.<br />
                - Đổ bột b&aacute;nh v&agrave;o khu&ocirc;n đ&atilde; b&ocirc;i dầu, lắc nhẹ cho bột phẳng mặt.<br />
                - Nướng b&aacute;nh trong l&ograve; nướng đ&atilde; được l&agrave;m n&oacute;ng trước ở nhiệt độ 180 độ C trong khoảng 25 ph&uacute;t hoặc cho đến khi b&aacute;nh ch&iacute;n v&agrave;ng.<br />
                - Lấy b&aacute;nh ra khỏi l&ograve;, để nguội rồi lấy ra khỏi khu&ocirc;n.</span></p>

                <p><span style="font-size:16px">Bước 2: L&agrave;m kem trang tr&iacute;</span></p>

                <p><span style="font-size:16px">- Đ&aacute;nh kem tươi c&ugrave;ng với đường bột cho đến khi kem cứng v&agrave; c&oacute; độ giữa.<br />
                - Chia kem th&agrave;nh hai phần, một phần để nguy&ecirc;n m&agrave;u trắng, một phần nhỏ th&ecirc;m m&agrave;u thực phẩm v&agrave;ng để l&agrave;m m&agrave;u v&agrave;ng cho hũ.<br />
                - Cho kem v&agrave;o t&uacute;i bọc nilon c&oacute; đầu kim loại hoa văn hoặc c&oacute; thể d&ugrave;ng dao để trang tr&iacute;.</span></p>

                <p><span style="font-size:16px">Bước 3: Trang tr&iacute; b&aacute;nh</span></p>

                <p><span style="font-size:16px">- Cắt b&aacute;nh gato th&agrave;nh hai lớp, x&eacute; nhỏ một lớp để l&agrave;m nền cho hũ v&agrave;ng.<br />
                - Xếp lớp b&aacute;nh gato c&ograve;n lại l&ecirc;n đĩa, xoa kem trắng l&ecirc;n to&agrave;n bộ bề mặt.<br />
                - D&ugrave;ng dao hoặc k&eacute;o cắt miếng giấy vụn th&agrave;nh h&igrave;nh hũ, rồi d&ugrave;ng l&agrave;m khu&ocirc;n để vẽ hũ l&ecirc;n b&aacute;nh.<br />
                - D&ugrave;ng kem m&agrave;u v&agrave;ng để t&ocirc; theo khu&ocirc;n giấy, rồi d&ugrave;ng dao hoặc t&uacute;i kem để tạo hoa văn cho hũ.<br />
                - Rải lớp b&aacute;nh gato đ&atilde; x&eacute; nhỏ l&ecirc;n tr&ecirc;n hũ để tạo hiệu ứng tiền rơi ra từ hũ.<br />
                - Trang tr&iacute; th&ecirc;m c&aacute;c chi tiết kh&aacute;c theo &yacute; th&iacute;ch.</span></p>

                <p><span style="font-size:16px">B&aacute;nh kem h&igrave;nh hũ v&agrave;ng đ&atilde; ho&agrave;n th&agrave;nh. Bạn c&oacute; thể thưởng thức ngay hoặc để trong tủ lạnh cho b&aacute;nh cứng lại trước khi cắt. B&aacute;nh kem h&igrave;nh hũ v&agrave;ng kh&ocirc;ng chỉ l&agrave; một m&oacute;n ăn ngon, m&agrave; c&ograve;n l&agrave; một m&oacute;n qu&agrave; &yacute; nghĩa cho người th&acirc;n v&agrave; bạn b&egrave; trong những dịp đặc biệt. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với b&aacute;nh kem h&igrave;nh hũ v&agrave;ng!</span></p>
                ',
                'hinhanh' => 'HUVANG-V32.png',
                'loaisanpham_id' => 5,
                'giatien' => 700000,'inanh' => 0,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng HV04',
                'mota' => '<p><strong><span style="font-size:16px">B&aacute;nh kem h&igrave;nh hũ v&agrave;ng l&agrave; một m&oacute;n ăn ngọt độc đ&aacute;o v&agrave; hấp dẫn, được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh kem h&igrave;nh hũ v&agrave;ng kh&ocirc;ng chỉ c&oacute; vị ngon, m&agrave; c&ograve;n mang &yacute; nghĩa phong thủy tốt, mang lại may mắn v&agrave; t&agrave;i lộc cho người thưởng thức. B&agrave;i viết n&agrave;y sẽ hướng dẫn bạn c&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh hũ v&agrave;ng đơn giản v&agrave; nhanh ch&oacute;ng tại nh&agrave;.</span></strong></p>

                <p><span style="font-size:16px">Nguy&ecirc;n liệu cần chuẩn bị:</span></p>

                <p><span style="font-size:16px">- Bột b&aacute;nh gato: 200g<br />
                - Trứng g&agrave;: 4 quả<br />
                - Đường: 150g<br />
                - Dầu ăn: 80ml<br />
                - Sữa tươi: 80ml<br />
                - Vani: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Bột nở: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Kem tươi: 500ml<br />
                - Đường bột: 50g<br />
                - M&agrave;u thực phẩm v&agrave;ng: &iacute;t<br />
                - Khu&ocirc;n b&aacute;nh h&igrave;nh hũ v&agrave;ng</span></p>

                <p><span style="font-size:16px">C&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh hũ v&agrave;ng:</span></p>

                <p><span style="font-size:16px">Bước 1: L&agrave;m b&aacute;nh gato</span></p>

                <p><span style="font-size:16px">- Đ&aacute;nh trứng v&agrave; đường cho đến khi trứng trắng v&agrave; xốp.<br />
                - Th&ecirc;m dầu ăn, sữa tươi, vani v&agrave; khuấy đều.<br />
                - Lọc bột b&aacute;nh gato v&agrave; bột nở qua r&acirc;y nhỏ, rồi cho v&agrave;o hỗn hợp trứng v&agrave; khuấy nhẹ tay cho đến khi kh&ocirc;ng c&ograve;n cục bột.<br />
                - Đổ bột b&aacute;nh v&agrave;o khu&ocirc;n đ&atilde; b&ocirc;i dầu, lắc nhẹ cho bột phẳng mặt.<br />
                - Nướng b&aacute;nh trong l&ograve; nướng đ&atilde; được l&agrave;m n&oacute;ng trước ở nhiệt độ 180 độ C trong khoảng 25 ph&uacute;t hoặc cho đến khi b&aacute;nh ch&iacute;n v&agrave;ng.<br />
                - Lấy b&aacute;nh ra khỏi l&ograve;, để nguội rồi lấy ra khỏi khu&ocirc;n.</span></p>

                <p><span style="font-size:16px">Bước 2: L&agrave;m kem trang tr&iacute;</span></p>

                <p><span style="font-size:16px">- Đ&aacute;nh kem tươi c&ugrave;ng với đường bột cho đến khi kem cứng v&agrave; c&oacute; độ giữa.<br />
                - Chia kem th&agrave;nh hai phần, một phần để nguy&ecirc;n m&agrave;u trắng, một phần nhỏ th&ecirc;m m&agrave;u thực phẩm v&agrave;ng để l&agrave;m m&agrave;u v&agrave;ng cho hũ.<br />
                - Cho kem v&agrave;o t&uacute;i bọc nilon c&oacute; đầu kim loại hoa văn hoặc c&oacute; thể d&ugrave;ng dao để trang tr&iacute;.</span></p>

                <p><span style="font-size:16px">Bước 3: Trang tr&iacute; b&aacute;nh</span></p>

                <p><span style="font-size:16px">- Cắt b&aacute;nh gato th&agrave;nh hai lớp, x&eacute; nhỏ một lớp để l&agrave;m nền cho hũ v&agrave;ng.<br />
                - Xếp lớp b&aacute;nh gato c&ograve;n lại l&ecirc;n đĩa, xoa kem trắng l&ecirc;n to&agrave;n bộ bề mặt.<br />
                - D&ugrave;ng dao hoặc k&eacute;o cắt miếng giấy vụn th&agrave;nh h&igrave;nh hũ, rồi d&ugrave;ng l&agrave;m khu&ocirc;n để vẽ hũ l&ecirc;n b&aacute;nh.<br />
                - D&ugrave;ng kem m&agrave;u v&agrave;ng để t&ocirc; theo khu&ocirc;n giấy, rồi d&ugrave;ng dao hoặc t&uacute;i kem để tạo hoa văn cho hũ.<br />
                - Rải lớp b&aacute;nh gato đ&atilde; x&eacute; nhỏ l&ecirc;n tr&ecirc;n hũ để tạo hiệu ứng tiền rơi ra từ hũ.<br />
                - Trang tr&iacute; th&ecirc;m c&aacute;c chi tiết kh&aacute;c theo &yacute; th&iacute;ch.</span></p>

                <p><span style="font-size:16px">B&aacute;nh kem h&igrave;nh hũ v&agrave;ng đ&atilde; ho&agrave;n th&agrave;nh. Bạn c&oacute; thể thưởng thức ngay hoặc để trong tủ lạnh cho b&aacute;nh cứng lại trước khi cắt. B&aacute;nh kem h&igrave;nh hũ v&agrave;ng kh&ocirc;ng chỉ l&agrave; một m&oacute;n ăn ngon, m&agrave; c&ograve;n l&agrave; một m&oacute;n qu&agrave; &yacute; nghĩa cho người th&acirc;n v&agrave; bạn b&egrave; trong những dịp đặc biệt. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với b&aacute;nh kem h&igrave;nh hũ v&agrave;ng!</span></p>
                ',
                'hinhanh' => 'HUVANG-V31.png',
                'loaisanpham_id' => 5,
                'giatien' => 750000,'inanh' => 0,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Hũ Vàng HV05',
                'mota' => '<p><strong><span style="font-size:16px">B&aacute;nh kem h&igrave;nh hũ v&agrave;ng l&agrave; một m&oacute;n ăn ngọt độc đ&aacute;o v&agrave; hấp dẫn, được nhiều người y&ecirc;u th&iacute;ch. B&aacute;nh kem h&igrave;nh hũ v&agrave;ng kh&ocirc;ng chỉ c&oacute; vị ngon, m&agrave; c&ograve;n mang &yacute; nghĩa phong thủy tốt, mang lại may mắn v&agrave; t&agrave;i lộc cho người thưởng thức. B&agrave;i viết n&agrave;y sẽ hướng dẫn bạn c&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh hũ v&agrave;ng đơn giản v&agrave; nhanh ch&oacute;ng tại nh&agrave;.</span></strong></p>

                <p><span style="font-size:16px">Nguy&ecirc;n liệu cần chuẩn bị:</span></p>

                <p><span style="font-size:16px">- Bột b&aacute;nh gato: 200g<br />
                - Trứng g&agrave;: 4 quả<br />
                - Đường: 150g<br />
                - Dầu ăn: 80ml<br />
                - Sữa tươi: 80ml<br />
                - Vani: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Bột nở: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Kem tươi: 500ml<br />
                - Đường bột: 50g<br />
                - M&agrave;u thực phẩm v&agrave;ng: &iacute;t<br />
                - Khu&ocirc;n b&aacute;nh h&igrave;nh hũ v&agrave;ng</span></p>

                <p><span style="font-size:16px">C&aacute;ch l&agrave;m b&aacute;nh kem h&igrave;nh hũ v&agrave;ng:</span></p>

                <p><span style="font-size:16px">Bước 1: L&agrave;m b&aacute;nh gato</span></p>

                <p><span style="font-size:16px">- Đ&aacute;nh trứng v&agrave; đường cho đến khi trứng trắng v&agrave; xốp.<br />
                - Th&ecirc;m dầu ăn, sữa tươi, vani v&agrave; khuấy đều.<br />
                - Lọc bột b&aacute;nh gato v&agrave; bột nở qua r&acirc;y nhỏ, rồi cho v&agrave;o hỗn hợp trứng v&agrave; khuấy nhẹ tay cho đến khi kh&ocirc;ng c&ograve;n cục bột.<br />
                - Đổ bột b&aacute;nh v&agrave;o khu&ocirc;n đ&atilde; b&ocirc;i dầu, lắc nhẹ cho bột phẳng mặt.<br />
                - Nướng b&aacute;nh trong l&ograve; nướng đ&atilde; được l&agrave;m n&oacute;ng trước ở nhiệt độ 180 độ C trong khoảng 25 ph&uacute;t hoặc cho đến khi b&aacute;nh ch&iacute;n v&agrave;ng.<br />
                - Lấy b&aacute;nh ra khỏi l&ograve;, để nguội rồi lấy ra khỏi khu&ocirc;n.</span></p>

                <p><span style="font-size:16px">Bước 2: L&agrave;m kem trang tr&iacute;</span></p>

                <p><span style="font-size:16px">- Đ&aacute;nh kem tươi c&ugrave;ng với đường bột cho đến khi kem cứng v&agrave; c&oacute; độ giữa.<br />
                - Chia kem th&agrave;nh hai phần, một phần để nguy&ecirc;n m&agrave;u trắng, một phần nhỏ th&ecirc;m m&agrave;u thực phẩm v&agrave;ng để l&agrave;m m&agrave;u v&agrave;ng cho hũ.<br />
                - Cho kem v&agrave;o t&uacute;i bọc nilon c&oacute; đầu kim loại hoa văn hoặc c&oacute; thể d&ugrave;ng dao để trang tr&iacute;.</span></p>

                <p><span style="font-size:16px">Bước 3: Trang tr&iacute; b&aacute;nh</span></p>

                <p><span style="font-size:16px">- Cắt b&aacute;nh gato th&agrave;nh hai lớp, x&eacute; nhỏ một lớp để l&agrave;m nền cho hũ v&agrave;ng.<br />
                - Xếp lớp b&aacute;nh gato c&ograve;n lại l&ecirc;n đĩa, xoa kem trắng l&ecirc;n to&agrave;n bộ bề mặt.<br />
                - D&ugrave;ng dao hoặc k&eacute;o cắt miếng giấy vụn th&agrave;nh h&igrave;nh hũ, rồi d&ugrave;ng l&agrave;m khu&ocirc;n để vẽ hũ l&ecirc;n b&aacute;nh.<br />
                - D&ugrave;ng kem m&agrave;u v&agrave;ng để t&ocirc; theo khu&ocirc;n giấy, rồi d&ugrave;ng dao hoặc t&uacute;i kem để tạo hoa văn cho hũ.<br />
                - Rải lớp b&aacute;nh gato đ&atilde; x&eacute; nhỏ l&ecirc;n tr&ecirc;n hũ để tạo hiệu ứng tiền rơi ra từ hũ.<br />
                - Trang tr&iacute; th&ecirc;m c&aacute;c chi tiết kh&aacute;c theo &yacute; th&iacute;ch.</span></p>

                <p><span style="font-size:16px">B&aacute;nh kem h&igrave;nh hũ v&agrave;ng đ&atilde; ho&agrave;n th&agrave;nh. Bạn c&oacute; thể thưởng thức ngay hoặc để trong tủ lạnh cho b&aacute;nh cứng lại trước khi cắt. B&aacute;nh kem h&igrave;nh hũ v&agrave;ng kh&ocirc;ng chỉ l&agrave; một m&oacute;n ăn ngon, m&agrave; c&ograve;n l&agrave; một m&oacute;n qu&agrave; &yacute; nghĩa cho người th&acirc;n v&agrave; bạn b&egrave; trong những dịp đặc biệt. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với b&aacute;nh kem h&igrave;nh hũ v&agrave;ng!</span></p>
                ',
                'hinhanh' => 'HUVANG-V09.png',
                'loaisanpham_id' => 5,
                'giatien' => 1500000, 'inanh' => 0,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng NT01',
                'mota' => '<p><strong><span style="font-size:16px">B&aacute;nh kem nhiều tầng l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ nhiều lớp b&aacute;nh xốp v&agrave; kem, thường được trang tr&iacute; bằng hoa quả, kẹo, s&ocirc; c&ocirc; la hoặc c&aacute;c loại nguy&ecirc;n liệu kh&aacute;c. B&aacute;nh kem nhiều tầng c&oacute; thể c&oacute; nhiều h&igrave;nh dạng, k&iacute;ch thước v&agrave; m&agrave;u sắc kh&aacute;c nhau, t&ugrave;y thuộc v&agrave;o sở th&iacute;ch v&agrave; dịp của người l&agrave;m b&aacute;nh. B&aacute;nh kem nhiều tầng thường được d&ugrave;ng để ăn mừng c&aacute;c sự kiện đặc biệt như sinh nhật, đ&aacute;m cưới, lễ kỷ niệm hoặc c&aacute;c ng&agrave;y lễ.</span></strong></p>

                <p><span style="font-size:16px">Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn c&aacute;ch l&agrave;m một chiếc b&aacute;nh kem nhiều tầng đơn giản m&agrave; vẫn ngon v&agrave; đẹp mắt. Bạn chỉ cần chuẩn bị những nguy&ecirc;n liệu sau:</span></p>

                <p><span style="font-size:16px">- Bột m&igrave;: 300g<br />
                - Đường: 200g<br />
                - Bơ: 150g<br />
                - Trứng g&agrave;: 4 quả<br />
                - Sữa tươi: 100ml<br />
                - Bột nở: 1 muỗng c&agrave; ph&ecirc;<br />
                - Vani: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Kem tươi: 500ml<br />
                - D&acirc;u t&acirc;y: 200g</span></p>

                <p><span style="font-size:16px">C&aacute;c bước l&agrave;m b&aacute;nh kem nhiều tầng như sau:</span></p>

                <p><span style="font-size:16px">1. Đ&aacute;nh bơ v&agrave; đường cho tan v&agrave; mịn. Th&ecirc;m trứng v&agrave;o đ&aacute;nh đều.<br />
                2. Trộn bột m&igrave;, bột nở v&agrave; vani lại. Th&ecirc;m v&agrave;o hỗn hợp bơ trứng v&agrave; trộn đều.<br />
                3. Chia hỗn hợp th&agrave;nh 3 phần bằng nhau. Cho v&agrave;o c&aacute;c khu&ocirc;n b&aacute;nh tr&ograve;n c&oacute; l&oacute;t giấy nến. Nướng trong l&ograve; ở nhiệt độ 180 độ C trong khoảng 20 ph&uacute;t cho đến khi ch&iacute;n v&agrave;ng.<br />
                4. Lấy b&aacute;nh ra để nguội ho&agrave;n to&agrave;n. Cắt mỏng lớp vỏ của mỗi lớp b&aacute;nh để cho bằng nhau.<br />
                5. Đ&aacute;nh kem tươi cho đặc v&agrave; dẻo. Chia th&agrave;nh 3 phần, mỗi phần c&oacute; m&agrave;u kh&aacute;c nhau (bạn c&oacute; thể d&ugrave;ng thuốc nhuộm thực phẩm để tạo m&agrave;u).<br />
                6. Rửa v&agrave; cắt d&acirc;u t&acirc;y th&agrave;nh miếng nhỏ.<br />
                7. Xếp lớp b&aacute;nh đầu ti&ecirc;n l&ecirc;n đĩa, phết một lớp kem l&ecirc;n tr&ecirc;n, rải một &iacute;t d&acirc;u t&acirc;y l&ecirc;n kem. Lặp lại với lớp b&aacute;nh thứ hai v&agrave; thứ ba.<br />
                8. Phết kem l&ecirc;n to&agrave;n bộ bề mặt của chiếc b&aacute;nh. Trang tr&iacute; theo &yacute; th&iacute;ch của bạn.<br />
                9. Cho b&aacute;nh v&agrave;o tủ lạnh để kem cứng lại. Thưởng thức khi đ&atilde; nguội.</span></p>

                <p><span style="font-size:16px">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng với chiếc b&aacute;nh kem nhiều tầng của m&igrave;nh!</span></p>
                ',
                'hinhanh' => 'TANG-T30.png',
                'loaisanpham_id' => 6,
                'giatien' => 1000000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng NT02',
                'mota' => '<p><strong><span style="font-size:16px">B&aacute;nh kem nhiều tầng l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ nhiều lớp b&aacute;nh xốp v&agrave; kem, thường được trang tr&iacute; bằng hoa quả, kẹo, s&ocirc; c&ocirc; la hoặc c&aacute;c loại nguy&ecirc;n liệu kh&aacute;c. B&aacute;nh kem nhiều tầng c&oacute; thể c&oacute; nhiều h&igrave;nh dạng, k&iacute;ch thước v&agrave; m&agrave;u sắc kh&aacute;c nhau, t&ugrave;y thuộc v&agrave;o sở th&iacute;ch v&agrave; dịp của người l&agrave;m b&aacute;nh. B&aacute;nh kem nhiều tầng thường được d&ugrave;ng để ăn mừng c&aacute;c sự kiện đặc biệt như sinh nhật, đ&aacute;m cưới, lễ kỷ niệm hoặc c&aacute;c ng&agrave;y lễ.</span></strong></p>

                <p><span style="font-size:16px">Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn c&aacute;ch l&agrave;m một chiếc b&aacute;nh kem nhiều tầng đơn giản m&agrave; vẫn ngon v&agrave; đẹp mắt. Bạn chỉ cần chuẩn bị những nguy&ecirc;n liệu sau:</span></p>

                <p><span style="font-size:16px">- Bột m&igrave;: 300g<br />
                - Đường: 200g<br />
                - Bơ: 150g<br />
                - Trứng g&agrave;: 4 quả<br />
                - Sữa tươi: 100ml<br />
                - Bột nở: 1 muỗng c&agrave; ph&ecirc;<br />
                - Vani: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Kem tươi: 500ml<br />
                - D&acirc;u t&acirc;y: 200g</span></p>

                <p><span style="font-size:16px">C&aacute;c bước l&agrave;m b&aacute;nh kem nhiều tầng như sau:</span></p>

                <p><span style="font-size:16px">1. Đ&aacute;nh bơ v&agrave; đường cho tan v&agrave; mịn. Th&ecirc;m trứng v&agrave;o đ&aacute;nh đều.<br />
                2. Trộn bột m&igrave;, bột nở v&agrave; vani lại. Th&ecirc;m v&agrave;o hỗn hợp bơ trứng v&agrave; trộn đều.<br />
                3. Chia hỗn hợp th&agrave;nh 3 phần bằng nhau. Cho v&agrave;o c&aacute;c khu&ocirc;n b&aacute;nh tr&ograve;n c&oacute; l&oacute;t giấy nến. Nướng trong l&ograve; ở nhiệt độ 180 độ C trong khoảng 20 ph&uacute;t cho đến khi ch&iacute;n v&agrave;ng.<br />
                4. Lấy b&aacute;nh ra để nguội ho&agrave;n to&agrave;n. Cắt mỏng lớp vỏ của mỗi lớp b&aacute;nh để cho bằng nhau.<br />
                5. Đ&aacute;nh kem tươi cho đặc v&agrave; dẻo. Chia th&agrave;nh 3 phần, mỗi phần c&oacute; m&agrave;u kh&aacute;c nhau (bạn c&oacute; thể d&ugrave;ng thuốc nhuộm thực phẩm để tạo m&agrave;u).<br />
                6. Rửa v&agrave; cắt d&acirc;u t&acirc;y th&agrave;nh miếng nhỏ.<br />
                7. Xếp lớp b&aacute;nh đầu ti&ecirc;n l&ecirc;n đĩa, phết một lớp kem l&ecirc;n tr&ecirc;n, rải một &iacute;t d&acirc;u t&acirc;y l&ecirc;n kem. Lặp lại với lớp b&aacute;nh thứ hai v&agrave; thứ ba.<br />
                8. Phết kem l&ecirc;n to&agrave;n bộ bề mặt của chiếc b&aacute;nh. Trang tr&iacute; theo &yacute; th&iacute;ch của bạn.<br />
                9. Cho b&aacute;nh v&agrave;o tủ lạnh để kem cứng lại. Thưởng thức khi đ&atilde; nguội.</span></p>

                <p><span style="font-size:16px">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng với chiếc b&aacute;nh kem nhiều tầng của m&igrave;nh!</span></p>
                ',
                'hinhanh' => 'TANG-T25.png',
                'loaisanpham_id' => 6,
                'giatien' => 1500000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng NT03',
                'mota' => '<p><strong><span style="font-size:16px">B&aacute;nh kem nhiều tầng l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ nhiều lớp b&aacute;nh xốp v&agrave; kem, thường được trang tr&iacute; bằng hoa quả, kẹo, s&ocirc; c&ocirc; la hoặc c&aacute;c loại nguy&ecirc;n liệu kh&aacute;c. B&aacute;nh kem nhiều tầng c&oacute; thể c&oacute; nhiều h&igrave;nh dạng, k&iacute;ch thước v&agrave; m&agrave;u sắc kh&aacute;c nhau, t&ugrave;y thuộc v&agrave;o sở th&iacute;ch v&agrave; dịp của người l&agrave;m b&aacute;nh. B&aacute;nh kem nhiều tầng thường được d&ugrave;ng để ăn mừng c&aacute;c sự kiện đặc biệt như sinh nhật, đ&aacute;m cưới, lễ kỷ niệm hoặc c&aacute;c ng&agrave;y lễ.</span></strong></p>

                <p><span style="font-size:16px">Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn c&aacute;ch l&agrave;m một chiếc b&aacute;nh kem nhiều tầng đơn giản m&agrave; vẫn ngon v&agrave; đẹp mắt. Bạn chỉ cần chuẩn bị những nguy&ecirc;n liệu sau:</span></p>

                <p><span style="font-size:16px">- Bột m&igrave;: 300g<br />
                - Đường: 200g<br />
                - Bơ: 150g<br />
                - Trứng g&agrave;: 4 quả<br />
                - Sữa tươi: 100ml<br />
                - Bột nở: 1 muỗng c&agrave; ph&ecirc;<br />
                - Vani: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Kem tươi: 500ml<br />
                - D&acirc;u t&acirc;y: 200g</span></p>

                <p><span style="font-size:16px">C&aacute;c bước l&agrave;m b&aacute;nh kem nhiều tầng như sau:</span></p>

                <p><span style="font-size:16px">1. Đ&aacute;nh bơ v&agrave; đường cho tan v&agrave; mịn. Th&ecirc;m trứng v&agrave;o đ&aacute;nh đều.<br />
                2. Trộn bột m&igrave;, bột nở v&agrave; vani lại. Th&ecirc;m v&agrave;o hỗn hợp bơ trứng v&agrave; trộn đều.<br />
                3. Chia hỗn hợp th&agrave;nh 3 phần bằng nhau. Cho v&agrave;o c&aacute;c khu&ocirc;n b&aacute;nh tr&ograve;n c&oacute; l&oacute;t giấy nến. Nướng trong l&ograve; ở nhiệt độ 180 độ C trong khoảng 20 ph&uacute;t cho đến khi ch&iacute;n v&agrave;ng.<br />
                4. Lấy b&aacute;nh ra để nguội ho&agrave;n to&agrave;n. Cắt mỏng lớp vỏ của mỗi lớp b&aacute;nh để cho bằng nhau.<br />
                5. Đ&aacute;nh kem tươi cho đặc v&agrave; dẻo. Chia th&agrave;nh 3 phần, mỗi phần c&oacute; m&agrave;u kh&aacute;c nhau (bạn c&oacute; thể d&ugrave;ng thuốc nhuộm thực phẩm để tạo m&agrave;u).<br />
                6. Rửa v&agrave; cắt d&acirc;u t&acirc;y th&agrave;nh miếng nhỏ.<br />
                7. Xếp lớp b&aacute;nh đầu ti&ecirc;n l&ecirc;n đĩa, phết một lớp kem l&ecirc;n tr&ecirc;n, rải một &iacute;t d&acirc;u t&acirc;y l&ecirc;n kem. Lặp lại với lớp b&aacute;nh thứ hai v&agrave; thứ ba.<br />
                8. Phết kem l&ecirc;n to&agrave;n bộ bề mặt của chiếc b&aacute;nh. Trang tr&iacute; theo &yacute; th&iacute;ch của bạn.<br />
                9. Cho b&aacute;nh v&agrave;o tủ lạnh để kem cứng lại. Thưởng thức khi đ&atilde; nguội.</span></p>

                <p><span style="font-size:16px">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng với chiếc b&aacute;nh kem nhiều tầng của m&igrave;nh!</span></p>
                ',
                'hinhanh' => 'TANG-T08.png',
                'loaisanpham_id' => 6,
                'giatien' => 1600000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng NT04',
                'mota' => '<p><strong><span style="font-size:16px">B&aacute;nh kem nhiều tầng l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ nhiều lớp b&aacute;nh xốp v&agrave; kem, thường được trang tr&iacute; bằng hoa quả, kẹo, s&ocirc; c&ocirc; la hoặc c&aacute;c loại nguy&ecirc;n liệu kh&aacute;c. B&aacute;nh kem nhiều tầng c&oacute; thể c&oacute; nhiều h&igrave;nh dạng, k&iacute;ch thước v&agrave; m&agrave;u sắc kh&aacute;c nhau, t&ugrave;y thuộc v&agrave;o sở th&iacute;ch v&agrave; dịp của người l&agrave;m b&aacute;nh. B&aacute;nh kem nhiều tầng thường được d&ugrave;ng để ăn mừng c&aacute;c sự kiện đặc biệt như sinh nhật, đ&aacute;m cưới, lễ kỷ niệm hoặc c&aacute;c ng&agrave;y lễ.</span></strong></p>

                <p><span style="font-size:16px">Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn c&aacute;ch l&agrave;m một chiếc b&aacute;nh kem nhiều tầng đơn giản m&agrave; vẫn ngon v&agrave; đẹp mắt. Bạn chỉ cần chuẩn bị những nguy&ecirc;n liệu sau:</span></p>

                <p><span style="font-size:16px">- Bột m&igrave;: 300g<br />
                - Đường: 200g<br />
                - Bơ: 150g<br />
                - Trứng g&agrave;: 4 quả<br />
                - Sữa tươi: 100ml<br />
                - Bột nở: 1 muỗng c&agrave; ph&ecirc;<br />
                - Vani: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Kem tươi: 500ml<br />
                - D&acirc;u t&acirc;y: 200g</span></p>

                <p><span style="font-size:16px">C&aacute;c bước l&agrave;m b&aacute;nh kem nhiều tầng như sau:</span></p>

                <p><span style="font-size:16px">1. Đ&aacute;nh bơ v&agrave; đường cho tan v&agrave; mịn. Th&ecirc;m trứng v&agrave;o đ&aacute;nh đều.<br />
                2. Trộn bột m&igrave;, bột nở v&agrave; vani lại. Th&ecirc;m v&agrave;o hỗn hợp bơ trứng v&agrave; trộn đều.<br />
                3. Chia hỗn hợp th&agrave;nh 3 phần bằng nhau. Cho v&agrave;o c&aacute;c khu&ocirc;n b&aacute;nh tr&ograve;n c&oacute; l&oacute;t giấy nến. Nướng trong l&ograve; ở nhiệt độ 180 độ C trong khoảng 20 ph&uacute;t cho đến khi ch&iacute;n v&agrave;ng.<br />
                4. Lấy b&aacute;nh ra để nguội ho&agrave;n to&agrave;n. Cắt mỏng lớp vỏ của mỗi lớp b&aacute;nh để cho bằng nhau.<br />
                5. Đ&aacute;nh kem tươi cho đặc v&agrave; dẻo. Chia th&agrave;nh 3 phần, mỗi phần c&oacute; m&agrave;u kh&aacute;c nhau (bạn c&oacute; thể d&ugrave;ng thuốc nhuộm thực phẩm để tạo m&agrave;u).<br />
                6. Rửa v&agrave; cắt d&acirc;u t&acirc;y th&agrave;nh miếng nhỏ.<br />
                7. Xếp lớp b&aacute;nh đầu ti&ecirc;n l&ecirc;n đĩa, phết một lớp kem l&ecirc;n tr&ecirc;n, rải một &iacute;t d&acirc;u t&acirc;y l&ecirc;n kem. Lặp lại với lớp b&aacute;nh thứ hai v&agrave; thứ ba.<br />
                8. Phết kem l&ecirc;n to&agrave;n bộ bề mặt của chiếc b&aacute;nh. Trang tr&iacute; theo &yacute; th&iacute;ch của bạn.<br />
                9. Cho b&aacute;nh v&agrave;o tủ lạnh để kem cứng lại. Thưởng thức khi đ&atilde; nguội.</span></p>

                <p><span style="font-size:16px">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng với chiếc b&aacute;nh kem nhiều tầng của m&igrave;nh!</span></p>
                ',
                'hinhanh' => 'TANG-T05.png',
                'loaisanpham_id' => 6,
                'giatien' => 1300000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
        Sanpham::create(
            [
                'tensp' => 'Bánh Kem Nhiều Tầng NT05',
                'mota' => '<p><strong><span style="font-size:16px">B&aacute;nh kem nhiều tầng l&agrave; một loại b&aacute;nh ngọt được l&agrave;m từ nhiều lớp b&aacute;nh xốp v&agrave; kem, thường được trang tr&iacute; bằng hoa quả, kẹo, s&ocirc; c&ocirc; la hoặc c&aacute;c loại nguy&ecirc;n liệu kh&aacute;c. B&aacute;nh kem nhiều tầng c&oacute; thể c&oacute; nhiều h&igrave;nh dạng, k&iacute;ch thước v&agrave; m&agrave;u sắc kh&aacute;c nhau, t&ugrave;y thuộc v&agrave;o sở th&iacute;ch v&agrave; dịp của người l&agrave;m b&aacute;nh. B&aacute;nh kem nhiều tầng thường được d&ugrave;ng để ăn mừng c&aacute;c sự kiện đặc biệt như sinh nhật, đ&aacute;m cưới, lễ kỷ niệm hoặc c&aacute;c ng&agrave;y lễ.</span></strong></p>

                <p><span style="font-size:16px">Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ hướng dẫn bạn c&aacute;ch l&agrave;m một chiếc b&aacute;nh kem nhiều tầng đơn giản m&agrave; vẫn ngon v&agrave; đẹp mắt. Bạn chỉ cần chuẩn bị những nguy&ecirc;n liệu sau:</span></p>

                <p><span style="font-size:16px">- Bột m&igrave;: 300g<br />
                - Đường: 200g<br />
                - Bơ: 150g<br />
                - Trứng g&agrave;: 4 quả<br />
                - Sữa tươi: 100ml<br />
                - Bột nở: 1 muỗng c&agrave; ph&ecirc;<br />
                - Vani: 1/2 muỗng c&agrave; ph&ecirc;<br />
                - Kem tươi: 500ml<br />
                - D&acirc;u t&acirc;y: 200g</span></p>

                <p><span style="font-size:16px">C&aacute;c bước l&agrave;m b&aacute;nh kem nhiều tầng như sau:</span></p>

                <p><span style="font-size:16px">1. Đ&aacute;nh bơ v&agrave; đường cho tan v&agrave; mịn. Th&ecirc;m trứng v&agrave;o đ&aacute;nh đều.<br />
                2. Trộn bột m&igrave;, bột nở v&agrave; vani lại. Th&ecirc;m v&agrave;o hỗn hợp bơ trứng v&agrave; trộn đều.<br />
                3. Chia hỗn hợp th&agrave;nh 3 phần bằng nhau. Cho v&agrave;o c&aacute;c khu&ocirc;n b&aacute;nh tr&ograve;n c&oacute; l&oacute;t giấy nến. Nướng trong l&ograve; ở nhiệt độ 180 độ C trong khoảng 20 ph&uacute;t cho đến khi ch&iacute;n v&agrave;ng.<br />
                4. Lấy b&aacute;nh ra để nguội ho&agrave;n to&agrave;n. Cắt mỏng lớp vỏ của mỗi lớp b&aacute;nh để cho bằng nhau.<br />
                5. Đ&aacute;nh kem tươi cho đặc v&agrave; dẻo. Chia th&agrave;nh 3 phần, mỗi phần c&oacute; m&agrave;u kh&aacute;c nhau (bạn c&oacute; thể d&ugrave;ng thuốc nhuộm thực phẩm để tạo m&agrave;u).<br />
                6. Rửa v&agrave; cắt d&acirc;u t&acirc;y th&agrave;nh miếng nhỏ.<br />
                7. Xếp lớp b&aacute;nh đầu ti&ecirc;n l&ecirc;n đĩa, phết một lớp kem l&ecirc;n tr&ecirc;n, rải một &iacute;t d&acirc;u t&acirc;y l&ecirc;n kem. Lặp lại với lớp b&aacute;nh thứ hai v&agrave; thứ ba.<br />
                8. Phết kem l&ecirc;n to&agrave;n bộ bề mặt của chiếc b&aacute;nh. Trang tr&iacute; theo &yacute; th&iacute;ch của bạn.<br />
                9. Cho b&aacute;nh v&agrave;o tủ lạnh để kem cứng lại. Thưởng thức khi đ&atilde; nguội.</span></p>

                <p><span style="font-size:16px">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng với chiếc b&aacute;nh kem nhiều tầng của m&igrave;nh!</span></p>
                ',
                'hinhanh' => 'TANG-T07.png',
                'loaisanpham_id' => 6,
                'giatien' => 1000000, 'inanh' => 1,
                'trangthai' => 1
            ]
        );
    }
}
