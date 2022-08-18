@extends('Layouts.main')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.works.index') }}">Home</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.works.index') }}">Works</a></li>
<li class="breadcrumb-item active">Create</li>
@endsection
@section('contents')
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">คลังรูปภาพของ งาน {{ $work->name }}</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ลำดับ</th>
                                            <th scope="col" width="30%">รูปภาพ</th>
                                            <th scope="col" width="30%">วันที่เพิ่ม</th>
                                            <th scope="col">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php  $count = 0; @endphp

                                        @if(!empty($galleries))
                                            @foreach ($galleries as $gallery)
                                            @php  $count +=1; @endphp
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/images/work_galleries') }}/{{ $gallery->name }}" alt="" width="100">
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($gallery->created_at)->format('d-m-Y H:i') }}</td>
                                                <td>
                                                    <button class="btn btn-danger btn-delete" data-id="{{ $gallery->id }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="row">

                    <div class="col-sm-12">
                        <form method="POST" action="{{ route('admin.gallery.store',['id' => $work->id]) }}" accept-charset="UTF-8" class="form-horizontal"
                            enctype="multipart/form-data">
                            <div class="card">

                                <div class="card-header">
                                    <h5 class="m-0">เพิ่มรูปภาพรายละเอียด</h5>
                                </div>
                                <div class="card-body">
                                    @csrf
                                    <input id="feature_image" name="feature_image[]" type="file" multiple><br>
                                    <small class="help-block text-danger">ภาพจะต้องนามสกุล : png, jpeg, jpg. และขนาด
                                        1280x720</small>

                                    <div class="card-footer">
                                        <button class="btn btn-square btn-info submitBtn float-right" id="submitBtn"
                                            type="submit">บันทึก
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <form method="POST" action="" id="formdelete">
        @csrf
        @method('DELETE')
    </form>

</div>
</div>
@endsection
@section('script')
<script>
    $('.btn-delete').click(function () {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'คำเตือน !?',
            text: "คุณแน่ใจใช่หรือไม่ ว่าคุณต้องการลบรายการนี้ออกจากระบบ!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'ใช่ ฉันต้องการลบ !',
            cancelButtonText: 'ไม่ ฉันไม่ต้องการลบ !',
            reverseButtons: true
        }).then((result) => {
            console.log('test')
            if (result.isConfirmed) {
                let id = $(this).attr('data-id');
                document.getElementById("formdelete").action = '{{ url("admin/works/galleries/") }}/' + id;
                document.getElementById("formdelete").submit();
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'ยกเลิกการลบ',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    });
</script>
@endsection
