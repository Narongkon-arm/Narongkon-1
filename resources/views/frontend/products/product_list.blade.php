@extends('Layouts.frontend')
@section('contents')
        <div class="breadcrumb" >
            <a href="index.html" class="breadcrumb-item">หน้าหลัก</a>
            <a class="breadcrumb-item active" href="#">ออกแบบบ้าน</a>
        </div>

        <section class="promotion mt-4">
            <div class="header">
                <h1>ออกแบบบ้าน</h1>
            </div>
            <div class="p-3">
                <img class="w-100 mb-4 rounded" alt="ออกแบบบ้าน" src="images/pro/01.jpg">
                <p style="text-indent: 1.5rem">
                <h2><span style="font-size: 1.8rem; color: red; font-weight: bold;">"คุณมีที่ เรามีบ้าน"</span></h2> คือแนวความคิดพื้นฐานของงานสร้างสรรค์ งานออกแบบบ้านพักอาศัยของเรา เราจึงตั้งใจสร้างสรรค์ แบบบ้านทุกหลังตามแบบที่ลูกค้าต้องการ เราหวังว่า แบบที่เราตั้งใจสร้าง และออกแบบ ในราคาที่ถูกใจลูกค้า รวมถึงบริการที่น่าพึงพอใจ
                </p>
            </div>
        </section>

        <section class="new-pro mt-4">
            <div class="full-header text-right"><i class="fas fa-boxes"></i> สินค้า ใน <h3>ออกแบบบ้าน</h3> (12 ชนิด)</div>
            <div class="row py-3 no-gutters outcards">

                <a href="{{ route('products.product_detail',['product_name' => 'test']) }}" class="col-6 col-md-4 cards no-gutters">
                    <figure class="row col">
                        <div class=" col-12 cards-header">
                            <div class="shadow-card">
                                <img src="images/pro/02.jpg" alt="แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน (สีขาว)">
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
                                <img src="images/pro/03.jpg" alt="แบบบ้านหลังใหญ่ สองชั้น">
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
                                <img src="images/pro/04.jpg" alt="แบบบ้านหลังใหญ่ สองชั้น">
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
                                <img src="images/pro/09.jpg" alt="แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน ">
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
                                <img src="images/pro/11.jpg" alt="แบบบ้านหลังใหญ่ 2 ชั้น">
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
                                <img src="images/pro/02.jpg" alt="แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน (สีขาว)">
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
                                <img src="images/pro/02.jpg" alt="แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน (สีขาว)">
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
                                <img src="images/pro/03.jpg" alt="แบบบ้านหลังใหญ่ สองชั้น">
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
                                <img src="images/pro/04.jpg" alt="แบบบ้านหลังใหญ่ สองชั้น">
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
                                <img src="images/pro/09.jpg" alt="แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน ">
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
                                <img src="images/pro/11.jpg" alt="แบบบ้านหลังใหญ่ 2 ชั้น">
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
                                <img src="images/pro/02.jpg" alt="แบบบ้านหลังใหญ่ - ทรงจั่วมุกซ้อน (สีขาว)">
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

                <div class="full-header w-100 text-center">
                    <a class="btn btn-dark mx-1 active" href="#">1</a>
                    <a class="btn btn-dark mx-1" href="#">2</a>
                    <a class="btn btn-dark mx-1" href="#">3</a>
                    <div class="border-top mt-2 pt-3 h6">แสดงสินค้าที่ 1-12 จากทั้งหมด 12 ชิ้น</div>
                </div>
                <div class="row py-3 no-gutters">

                </div>
        </section>
@endsection