@extends('Layouts.frontend')
@section('contents')
    <marquee direction="left">
        <h1>
            รับเขียนแบบ ออกแบบบ้าน โรงงาน คอนโด ฯลฯ / ออกแบบตึกแถว ร้านค้า บ้าน อาคารทุกชนิด / รับสร้างบ้านน็อคดาว บ้าน
            1 ชั้น 2 ชั้น 3 ชั้น
        </h1>
    </marquee>
    <section class="py-3 text-edit">
        <p style="text-indent: 1.5rem">
        <h2>
							<span style="font-size: 2rem; color: red; font-weight: bold;">

								"คุณมีที่ เรามีบ้าน"
							</span>
        </h2>
        คือแนวความคิดพื้นฐานของงานสร้างสรรค์ งานออกแบบบ้านพักอาศัยของเรา เราจึงตั้งใจสร้างสรรค์
        แบบบ้านทุกหลังตามแบบที่ลูกค้าต้องการ เราหวังว่า แบบที่เราตั้งใจสร้าง และออกแบบ ในราคาที่ถูกใจลูกค้า
        รวมถึงบริการที่น่าพึงพอใจ
        </p>
        <p class="pb-3" style="text-indent: 1.5rem">
            จะช่วยให้งานออกแบบดีๆ และทีมงานที่มีคุณภาพ จะได้เป็นที่รู้จักอย่างแพร่หลาย
            และเป็นความภาคภูมิใจแก่ผู้อยู่อาศัย และตัวนักออกแบบเองด้วย ด้วยความตั้งใจนี้
            เราเชื่อว่าเราทำสิ่งที่มีคุณค่าต่อสังคม และลูกค้าทุกท่าน
        </p>
        <p class="text-center">
            <span style="font-size: 2rem; color: red; font-weight: bold;">ตัวอย่างงาน</span>
        </p>
        <p style="font-size: 0;">
            <img class="w-50" src="{{ asset('images/pro/07.jpg') }}" alt="รูปบ้าน - บริษัท ภควรรณดีเวลลิปเม้นท์ จำกัด">
            <img class="w-50" src="{{ asset('images/pro/08.jpg') }}" alt="รูปบ้าน - บริษัท ภควรรณดีเวลลิปเม้นท์ จำกัด">
            <img class="w-100" src="{{ asset('images/pro/05.jpg') }}" alt="รูปบ้าน - บริษัท ภควรรณดีเวลลิปเม้นท์ จำกัด">
        </p>
        <iframe class="mt-3 w-100" width="560" height="315" src="https://www.youtube.com/embed/wnvDIuvwCew"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </section>

    <section class="promotion mt-4">
        <div class="header">
            <div>PROMOTION</div>
        </div>
        <div class="p-3">
            <img class="w-100 border" alt="โปรโมชั่นเกี่ยวกับ" src="{{ asset('images/promote.jpg') }}">
        </div>
    </section>

    <section class="new-pro mt-4">
        <div class="header">
            <div>NEW PRODUCTS</div>
        </div>
        <div class="row py-3 no-gutters outcards">

            <a href="{{ route('products.product_detail',['product_name' => 'test']) }}" class="col-6 col-md-4 cards no-gutters">
                <figure class="row col">
                    <div class=" col-12 cards-header">
                        <div class="shadow-card">
                            <img src="{{ asset('images/pro/02.jpg') }}" alt="แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน (สีขาว)">
                        </div>
                    </div>
                    <figcaption class="cards-body col-12">
                        แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน (สีขาว)
                        <span class="d-block py-2">
										2,200,000.00 บาท
									</span>
                    </figcaption>
                    <div class="btn mt-1 col-12 align-self-end btn-dark">
                        ลายละเอียด
                    </div>
                </figure>
            </a>

            <a href="{{ route('products.product_detail',['product_name' => 'test']) }}" class="col-6 col-md-4 cards no-gutters">
                <figure class="row col">
                    <div class=" col-12 cards-header">
                        <div class="shadow-card">
                            <img src="{{ asset('images/pro/03.jpg') }}" alt="แบบบ้านหลังใหญ่ สองชั้น">
                        </div>
                    </div>
                    <figcaption class="cards-body col-12">
                        แบบบ้านหลังใหญ่ สองชั้น
                        <span class="d-block py-2">
										2,200,000.00 บาท
									</span>
                    </figcaption>
                    <div class="btn mt-1 col-12 align-self-end btn-dark">
                        ลายละเอียด
                    </div>
                </figure>
            </a>

            <a href="{{ route('products.product_detail',['product_name' => 'test']) }}" class="col-6 col-md-4 cards no-gutters">
                <figure class="row col">
                    <div class=" col-12 cards-header">
                        <div class="shadow-card">
                            <img src="{{ asset('images/pro/04.jpg') }}" alt="แบบบ้านหลังใหญ่ สองชั้น">
                        </div>
                    </div>
                    <figcaption class="cards-body col-12">
                        แบบบ้านหลังใหญ่ สองชั้น
                        <span class="d-block py-2">
										2,200,000.00 บาท
									</span>
                    </figcaption>
                    <div class="btn mt-1 col-12 align-self-end btn-dark">
                        ลายละเอียด
                    </div>
                </figure>
            </a>

            <a href="{{ route('products.product_detail',['product_name' => 'test']) }}" class="col-6 col-md-4 cards no-gutters">
                <figure class="row col">
                    <div class=" col-12 cards-header">
                        <div class="shadow-card">
                            <img src="{{ asset('images/pro/09.jpg') }}" alt="แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน ">
                        </div>
                    </div>
                    <figcaption class="cards-body col-12">
                        แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน
                        <span class="d-block py-2">
										2,200,000.00 บาท
									</span>
                    </figcaption>
                    <div class="btn mt-1 col-12 align-self-end btn-dark">
                        ลายละเอียด
                    </div>
                </figure>
            </a>

            <a href="{{ route('products.product_detail',['product_name' => 'test']) }}" class="col-6 col-md-4 cards no-gutters">
                <figure class="row col">
                    <div class=" col-12 cards-header">
                        <div class="shadow-card">
                            <img src="{{ asset('images/pro/11.jpg') }}" alt="แบบบ้านหลังใหญ่ 2 ชั้น">
                        </div>
                    </div>
                    <figcaption class="cards-body col-12">
                        แบบบ้านหลังใหญ่ 2 ชั้น
                        <span class="d-block py-2">
										2,200,000.00 บาท
									</span>
                    </figcaption>
                    <div class="btn mt-1 col-12 align-self-end btn-dark">
                        ลายละเอียด
                    </div>
                </figure>
            </a>

            <a href="{{ route('products.product_detail',['product_name' => 'test']) }}" class="col-6 col-md-4 cards no-gutters">
                <figure class="row col">
                    <div class=" col-12 cards-header">
                        <div class="shadow-card">
                            <img src="{{ asset('images/pro/02.jpg') }}" alt="แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน (สีขาว)">
                        </div>
                    </div>
                    <figcaption class="cards-body col-12">
                        แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน (สีขาว)
                        <span class="d-block py-2">
										2,200,000.00 บาท
									</span>
                    </figcaption>
                    <div class="btn mt-1 col-12 align-self-end btn-dark">
                        ลายละเอียด
                    </div>
                </figure>
            </a>

        </div>
    </section>
@endsection