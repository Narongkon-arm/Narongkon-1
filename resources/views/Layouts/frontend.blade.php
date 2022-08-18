<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="รับเขียนแบบ ออกแบบบ้าน โรงงาน คอนโด ฯลฯ ออกแบบตึกแถว ร้านค้า บ้าน อาคารทุกชนิด รับสร้างบ้านน็อคดาว บ้าน 1 ชั้น 2 ชั้น  3 ชั้น">
    <meta name="og:title" property="og:title"
          content="รับเขียนแบบ ออกแบบบ้าน โรงงาน คอนโด ฯลฯ : บริษัท ภควรรณดีเวลลิปเม้นท์ จำกัด">
    <title>รับเขียนแบบ ออกแบบบ้าน โรงงาน คอนโด ฯลฯ</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/ui-js.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('js/ui-menu.js') }}"></script>
</head>
<body style="background-image: url({{ asset('images/bg01s.jpg') }});">
<div class="container main">
    <div class="row">
        <div class="banner col-12 mx-0 order-2 px-0">
            <img src="{{ asset('images/a4.jpg') }}" alt="บริษัท ภควรรณดีเวลลิปเม้นท์ จำกัด">
        </div>
        <nav class="navbars col-12 mx-0 order-1 order-md-3 text-right text-md-center px-md-0 px-3">
				<span class="d-none d-md-inline-block">
					<a href="{{ route('index') }}" class="active">หน้าหลัก</a>
					<a href="{{ route('about_us') }}">เกี่ยวกับเรา</a>
					<a href="{{ route('products.product_list') }}">ออกแบบบ้าน</a>
					<a href="{{ route('contract') }}">ติดต่อ</a>
				</span>

            <a href="#select-serv" class="open-menu d-none d-md-inline-block d-lg-none"><i
                        class="fas fa-search"></i></a>
            <a href="#select-serv" class="open-menu d-inline-block d-md-none"><i class="fas fa-bars"></i></a>
        </nav>

        <div class="col-lg-3 menu p-3 order-4" data-click="0">

            <div class="mobile-menu d-lg-none">
                <div class="text-right times h4 pb-2 pr-2">
                    <i class="fas fa-times open-menu"></i>
                </div>
                <div class="navbars d-md-none">
                    <a href="#" class="active">หน้าหลัก</a>
                    <a href="{{ route('about_us') }}">เกี่ยวกับเรา</a>
                    <a href="{{ route('products.product_list') }}">ออกแบบบ้าน</a>
                    <a href="{{ route('contract') }}">ติดต่อ</a>
                </div>
            </div>

            <form class="search grp">
                <div class="header">SEARCH</div>
                <div class="pt-3">
                    <select id="select-serv">
                        <option>ออกแบบบ้าน</option>
                        <option>เขียนแบบ</option>
                        <option>โรงงาน</option>
                        <option>คอนโด</option>
                    </select>
                    <label class="d-none" for="#select-serv">ค้นหา</label>
                </div>
                <div class="sl-range">
                    <label>ราคา :</label>
                    <div class="px-1">
                        <div id="sl-range"></div>
                    </div>
                    <div class="row pt-2">
                        <input id="min" type="hidden" name="min">
                        <input id="max" type="hidden" name="max">
                        <div id="min-txt" class="col-5">100,000</div>
                        <div class="col-2 text-center">-</div>
                        <div id="max-txt" class="col-5 text-right">ขึ้นไป</div>

                    </div>
                </div>
                <div class="text-center pb-3">
                    <button type="submit" class="btn btn-dark w-100">
                        <i class="fas fa-search"></i> ค้นหา
                    </button>
                </div>
            </form>

            <div class="category">
                <div class="header">
                    CATEGORY
                </div>

                <div class="category-grp grp">
                    <a href="#">ราคาบ้านน็อคดาวน์</a>
                    <a href="#">ราคา 100,000 - 200,000 บาท</a>
                    <a href="#">ราคา 200,000 - 300,000 บาท</a>
                    <a href="#">ราคา 300,000 - 400,000 บาท</a>
                    <a href="#">ราคา 400,000 - 500,000 บาท</a>
                    <a href="#">ราคา 500,000 - 1,000,000 บาท</a>
                    <a href="#">ราคา 1,000,000 บาท ขึ้นไป</a>
                </div>

                <div class="category-grp grp">
                    <a href="#">ขนาดบ้านน็อคดาวน์</a>
                    <a href="#">บ้านน็อคดาวน์ ขนาด 3x4</a>
                    <a href="#">บ้านน็อคดาวน์ ขนาด 3x5</a>
                    <a href="#">บ้านน็อคดาวน์ ขนาด 3x6</a>
                    <a href="#">บ้านน็อคดาวน์ ขนาด 4x6</a>
                    <a href="#">บ้านน็อคดาวน์ ขนาด 5x6</a>
                    <a href="#">บ้านหลังใหญ่</a>
                </div>

                <div class="category-grp grp">
                    <a href="#">รูปทรงบ้านน็อคดาวน์</a>
                    <a href="#">บ้านน็อคดาวน์ - ทรงแฝด</a>
                    <a href="#">บ้านน็อคดาวน์ - ทรงจั่ว</a>
                    <a href="#">บ้านน็อคดาวน์ - ทรงจั่วมุกซ้อน</a>
                    <a href="#">บ้านน็อคดาวน์ - ทรงเพิงหมาแหงน</a>
                    <a href="#">บ้านน็อคดาวน์ - ทรงปั้นหยา</a>
                    <a href="#">บ้านน๊อคดาวน์ - ร้านกาแฟ</a>
                    <a href="#">บ้านน็อคดาวน์ - โมเดิร์น</a>
                </div>

            </div>

            <div class="contact grp">
                <div class="mx-auto">
                    <div class="cont-grp">
                        <span style="color: blue">คุณเอ</span>
                        <span style="color: red">088-888-8888</span>
                    </div>
                    <div class="icon-con">
                        <i class="fas fa-phone-square"></i>
                    </div>
                </div>
                <div class="mx-auto">
                    <div class="cont-grp">
                        <span style="color: blue">Line ID</span>
                        <span style="color: red">@khunA088</span>
                    </div>
                    <div class="icon-con">
                        <i class="fab fa-line"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="open-menu"></div>
        <div class="col-lg-9 mains p-3 order-5">
            @yield('contents')
        </div>
    </div>

    <footer>
        <div class="navbars">
            <a href="{{ route('index') }}">หน้าหลัก</a>
            <a href="{{ route('about_us') }}">เกี่ยวกับเรา</a>
            <a href="{{ route('products.product_list') }}">ออกแบบบ้าน</a>
            <a href="{{ route('contract') }}">ติดต่อ</a>
        </div>
        <div>
            Copyright © 2021
        </div>
    </footer>
</div>
</body>
</html>