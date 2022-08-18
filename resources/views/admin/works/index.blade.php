@extends('Layouts.main')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.works.index') }}">Home</a></li>
    <li class="breadcrumb-item active"><a href="">Works</a></li>
@endsection
@section('contents')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card pr-3 pl-3">
                <div class="card-header">
                    <div class="row">
                        <a href="{{ route('admin.works.create') }}" class="btn btn-info">เพิ่มงาน</a>
                    </div>
                </div>
                <div style="overflow-x:auto;">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">รูปภาพปก</th>
                            <th scope="col">ชื่องาน</th>
                            <th scope="col">กำหนดเริ่มงาน</th>
                            <th scope="col">กำหนดส่งงาน</th>
                            <th scope="col">สถานะงาน</th>
                            <th scope="col">จัดการ</th>
                        </tr>
                        </thead>
                        <tbody>

                            @php  $count = 0; @endphp
                            @foreach ($works as $work)
                            @php  $count +=1; @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td>
                                    <img src="{{ asset('storage/images') }}/{{ $work->feature_image }}" alt="" width="100">
                                </td>
                                <td>{{ $work->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($work->starter_date)->format('d-m-Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($work->ender_date)->format('d-m-Y') }}</td>
                                <td>
                                    @if ($work->status == 0)
                                        <button type="button" class="btn btn-danger"><span class="cil-contrast btn-icon mr-2"></span> ยังไม่ได้เริ่มงาน</button>
                                    @elseif ($work->status == 1)
                                        <button type="button" class="btn btn-secondary"><span class="cil-contrast btn-icon mr-2"></span> เริ่มงานแล้ว 0 %</button>
                                    @elseif ($work->status == 2)
                                        <button type="button" class="btn btn-dark"><span class="cil-contrast btn-icon mr-2"></span> 10 %</button>
                                    @elseif ($work->status == 3)
                                        <button type="button" class="btn btn-info"><span class="cil-contrast btn-icon mr-2"></span> 25 %</button>
                                    @elseif ($work->status == 4)
                                        <button type="button" class="btn btn-warning"><span class="cil-contrast btn-icon mr-2"></span> 50 %</button>
                                    @elseif ($work->status == 5)
                                        <button type="button" class="btn btn-primary"><span class="cil-contrast btn-icon mr-2"></span> 75 %</button>
                                    @elseif ($work->status == 6)
                                        <button type="button" class="btn btn-success"><span class="cil-contrast btn-icon mr-2"></span> 100 % ปิดงาน</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/works/galleries') . '/' . $work->id }}" class="btn btn-primary">
                                        <i class="fas fa-image"></i>
                                    </a>
                                    <a href="{{ route('admin.works.edit', ['work' => $work->id]) }}" class="btn btn-warning">
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
                    document.getElementById("formdelete").action = '{{ url("admin/works") }}/' + id;
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
