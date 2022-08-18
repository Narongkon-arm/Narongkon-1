@extends('Layouts.main')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.employee_worksends.index') }}">Home</a></li>
    <li class="breadcrumb-item active"><a href="">Works Send</a></li>
@endsection
@section('contents')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card pr-3 pl-3">
                <div class="card-header">
                    <a href="{{ url('admin/employee_worksends/id') . '/' . $id }}" class="btn btn-info">ส่งงาน</a>
                    <a href="{{ route('admin.employee_worksends.index') }}" class="btn btn-square btn-warning submitBtn float-right" id="submitBtn" type="submit">ย้อนกลับ </a>
                </div>
                <div style="overflow-x:auto;">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">รายละเอียดการส่งงาน</th>
                            <th scope="col">วันที่ส่งงาน</th>
                            <th scope="col">จัดการ</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php  $count = 0; @endphp
                            @foreach ($works as $work)
                            @php  $count +=1; @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $work->detail }}</td>
                                <td>{{ \Carbon\Carbon::parse($work->created_at)->format('d-m-Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.employee_worksends.edit', ['id' => $id, 'work_send_id' => $work->id]) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-danger btn-delete" data-id="{{ $work->id }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <form method="POST" action="" id="formdelete">
        @csrf
        @method('DELETE')
    </form>
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
                    document.getElementById("formdelete").action = '{{ url("admin/worksends/") }}/' + id;
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
