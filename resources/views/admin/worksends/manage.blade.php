@extends('Layouts.main')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.works.index') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.works.index') }}">Works</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('contents')
    <div class="row">
        <div class="col-12">
            <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">ชื่องานใหม่</h5>
                                    </div>
                                    <div class="card-body">
                                        <input class="form-control" placeholder="ชื่องาน" autofocus="" required=""
                                               name="name" id="name" type="text"
                                               value="{{ (!empty($article->name)) ? $article->name : old('name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">รายละเอียด </h5>
                                    </div>
                                    <div class="card-body">
                                        <textarea rows="3" name="detail" id="detail" class="form-control"
                                                  placeholder="รายละเอียด">{{ (!empty($article->detail)) ? $article->detail : old('detail') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">ที่อยู่ </h5>
                                    </div>
                                    <div class="card-body">
                                        <textarea rows="3" name="address" id="address" class="form-control"
                                                  placeholder="ที่อยู่">{{ (!empty($article->address)) ? $article->address : old('address') }}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">วันที่</h5>
                                    </div>
                                    <div class="card-body">

                                        <label for="">วันที่กำหนดเริ่มงาน</label>
                                        <input class="form-control" type="date" placeholder="dd-MM-yyyy" format="dd-MM-yyyy">

                                        <label for="" style="margin-top: 10px">วันกำหนดปิดงาน</label>
                                        <input class="form-control" type="date" placeholder="dd-MM-yyyy" format="dd-MM-yyyy">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">รูปภาพปก</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="preview_image">
                                            @if(!empty($article->image))
                                                <img class="coverNews mb-3 w-100"
                                                     src="{{ WebServices::get_imgpath($article->image,'md') }}"
                                                     alt="{{ $article->topic }}">
                                            @endif
                                        </div>
                                        <input id="image" name="image" type="file"><br>
                                        <small class="help-block text-danger">ภาพจะต้องนามสกุล : png, jpeg, jpg. และขนาด
                                            1280x720</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">สถานะการดำเดินงาน</h5>
                                    </div>
                                    <div class="card-body">
                                        <select class="form-control form-control-sm" name="status" required>
                                            <option value="Show" {{ (!empty($article->status) && $article->status == "Show") ? "selected" : "" }}>
                                                ยังไม่ได้เริ่มงาน
                                            </option>
                                            <option value="Show" {{ (!empty($article->status) && $article->status == "Show") ? "selected" : "" }}>
                                                10 %
                                            </option>
                                            <option value="Hidden" {{ (!empty($article->status) && $article->status == "Hidden") ? "selected" : "" }}>
                                                25 %
                                            </option>
                                            <option value="Hidden" {{ (!empty($article->status) && $article->status == "Hidden") ? "selected" : "" }}>
                                                50 %
                                            </option>
                                            <option value="Hidden" {{ (!empty($article->status) && $article->status == "Hidden") ? "selected" : "" }}>
                                                75 %
                                            </option>
                                            <option value="Hidden" {{ (!empty($article->status) && $article->status == "Hidden") ? "selected" : "" }}>
                                                100 % ปิดงาน
                                            </option>
                                        </select>

                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-square btn-info submitBtn float-right" id="submitBtn"
                                                type="submit">บันทึก
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
    <script>
        CKEDITOR.replace('detail_1', {
            {{--filebrowserUploadUrl: "{{ url('ck/upload') }}",--}}
            {{--filebrowserImageUploadUrl: "{{ url('ck/upload') }}"--}}
        });
    </script>
@endsection
