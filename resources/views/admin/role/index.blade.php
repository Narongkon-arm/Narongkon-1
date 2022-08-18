@extends('Layouts.main')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="">Role</a></li>
@endsection
@section('contents')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card pr-3 pl-3">
                <div class="card-header">
                    <div class="row">
                        <a href="{{ route('admin.roles.create') }}" class="btn btn-info">เพิ่ม สิทธิ์การใช้งาน</a>
                    </div>
                </div>
                <div style="overflow-x:auto;">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อสิทธิ์การเข้าถึง</th>
                            <th scope="col">วันที่แก้ไขล่าสุด</th>
                            <th scope="col">จัดการ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @unless(!count($roles))
                            @foreach($roles as $key => $role)
                                <tr>
                                    <td>{{ (int)$key +1 }}</td>
                                    <td>
                                        {{ $role->name }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($role->updated_at)->format('d-m-Y H:i') }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.roles.edit', ['role' => $role->id]) }}" class="btn btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button class="btn btn-danger btn-delete" data-id="{{ $role->id }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">ไม่พบข้อมูล</td>
                            </tr>
                        @endunless

                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        {{ $roles->links() }}
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
                if (result.isConfirmed) {
                    let id = $(this).attr('data-id');
                    document.getElementById("formdelete").action = '{{ url("admin/roles") }}/' + id;
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
