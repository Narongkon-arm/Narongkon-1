@extends('Layouts.main')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Home</a></li>
    <li class="breadcrumb-item active"><a href="">Users</a></li>
@endsection
@section('contents')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="card pr-3 pl-3">
                <div class="card-header">
                    <div class="row">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-info">เพิ่มผู้ใช้งาน</a>
                    </div>
                </div>
                <div style="overflow-x:auto;">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">Email</th>
                            <th scope="col">ชื่อ - นามสกุล</th>
                            <th scope="col">เบอร์โทร</th>
                            <th scope="col">ตำแหน่ง</th>
                            <th scope="col">จัดการ</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php  $count = 0; @endphp
                            @foreach ($users as $user)
                                @php  $count +=1; @endphp
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->telephone }}</td>
                                    <td>{{ $user->get_role['name'] }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.edit',['user' => $user->id]) }}" class="btn btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button class="btn btn-danger btn-delete" data-method="DELETE" data-id="{{ $user->id }}">
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
    <div class="modal" tabindex="-1" role="dialog" id="deleteModal">
        <div class="modal-dialog" role="document" >
        <form id="formdelete" method="POST">
          @method('delete')
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">การแจ้งเตือน</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>คุณต้องการลบข้อมูลใช่หรือไม่</p>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">ใช่ ลบเลย</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
            </div>
          </div>
        </form>
        </div>
      </div>
@endsection
@section('script')
    <script>
        $('.btn-delete').click(function() {
            let id = $(this).attr('data-id');
            document.getElementById("formdelete").action = '{{ url("admin/users") }}/' + id;
            $('#deleteModal').modal('show')
        });
    </script>
@endsection
