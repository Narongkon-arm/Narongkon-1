@extends('Layouts.frontend')
@section('contents')
    <div class="breadcrumb">
        <a href="index.html" class="breadcrumb-item">หน้าหลัก</a>
        <a class="breadcrumb-item active" href="#">ติดต่อ</a>
    </div>
    <section class="contact-full mt-4">
        <div class="header">
            <div>ติดต่อเรา</div>
        </div>

        <div class="row mx-0 mt-3">
            <div class="col-md-6 order-md-2 pb-4">
                <div class="full-header">
                    <i class="fas fa-map-marked-alt"></i> ที่อยู่และช่องทางติดต่อเรา
                </div>
                <div class="p-2">
                    <strong>ชื่อ : </strong>
                    <h1 class="d-inline">บริษัท ภควรรณดีเวลลิปเม้นท์ จำกัด</h1>
                </div>

                <div class="p-2">
                    <strong>ที่อยู่ : </strong>
                    <address class="d-inline">247/85 หมู่บ้านพฤกษาวิลเลจ 15 หมู่ที่ 1 ตำบลแพรกษาใหม่
                        อำเภอเมืองสมุทรปราการ จ.สมุทรปราการ
                    </address>
                </div>

                <div class="p-2">
                    <strong>เบอร์ : </strong>
                    088-888-8888
                </div>

                <div class="p-2">
                    <strong>ไลน์ : </strong>
                    @khunA088
                </div>

                <div class="p-2">
                    <strong>เมล : </strong>
                    name@example.com
                </div>

            </div>

            <div class="col-md-6 order-md-1">
                <div class="full-header">
                    <i class="fas fa-envelope-open-text"></i> ข้อความถึงเรา
                </div>
                <form>
                    <div class="form-group px-2">
                        <label for="exampleFormControlInput1">ชื่อ</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="ชื่อ-นามสกุล" name="name">
                    </div>
                    <div class="form-group px-2">
                        <label for="exampleFormControlInput2">อีเมล</label>
                        <input type="email" class="form-control" id="exampleFormControlInput2"
                               placeholder="name@example.com" name="email">
                    </div>
                    <div class="form-group px-2">
                        <label for="exampleFormControlInput3">เบอร์โทร</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3"
                               placeholder="088-888-8888" name="callnumber">
                    </div>
                    <div class="form-group px-2">
                        <label for="exampleFormControlInput3">เรื่อง</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="เรื่อง"
                               name="subject">
                    </div>
                    <div class="form-group px-2">
                        <label for="exampleFormControlTextarea1">ข้อความ</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                  name="description"></textarea>
                    </div>
                    <div class="form-group px-2">
                        <button type="submit" class="btn btn-dark w-100" name="submit">
                            <i class="fas fa-paper-plane"></i> ส่ง
                        </button>

                    </div>
                </form>
            </div>

        </div>

        <div class="row mx-0 mt-3">


        </div>


    </section>
@endsection