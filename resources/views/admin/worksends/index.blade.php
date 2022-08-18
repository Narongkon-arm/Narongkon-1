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
                </div>
                <div style="overflow-x:auto;">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">วันที่</th>
                            <th scope="col">ชื่องาน</th>
                            <th scope="col">ส่งโดย</th>
                            <th scope="col">รายละเอียดการส่งงาน</th>
                            <th scope="col">วันที่ส่ง</th>
                            <th scope="col" style="text-align: center">รูปภาพการส่งงาน</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php  $count = 0; @endphp
                            @foreach ($send_works as $send_work)
                            @php  $count +=1; @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td>
                                    {{ $send_work->get_work ? $send_work->get_work->name : "-" }}
                                </td>
                                <td>
                                    {{ $send_work->get_user ? $send_work->get_user->name  : "-" }}
                                </td>
                                <td>
                                    {{ $send_work->detail  }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($send_work->created_at)->format('d-m-Y H:i') }}
                                </td>
                                <td style="text-align: center">
                                    @if ($send_work->get_work)
                                    <a href="{{ route('admin.worksends.gallery_sendworks',['id'=>$send_work->get_work->id, 'work_send_id' => $send_work->id]) }}" class="btn btn-primary">
                                        <i class="fas fa-image"></i>
                                    </a>
                                    @endif
                                    
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
@endsection
@section('script')
    <script>
        $('.btn-delete').click(function() {
            let id = $(this).attr('data-id');
            document.getElementById("formdelete").action = '{{ url("admin/product") }}/' + id;
            $('#deleteModal ').modal('show')
        });
    </script>
@endsection
