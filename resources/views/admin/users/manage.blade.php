@extends('Layouts.main')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('contents')
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('admin.users.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">ชื่อ - นามสกุล</h5>
                                    </div>
                                    <div class="card-body">
                                        <input class="form-control" placeholder="ชื่อ และ นามสกุล"
                                               name="name" id="name" type="text"
                                               value="{{ (!empty($user->name)) ? $user->name : old('name') }}" required>

                                        @error('name')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">อีเมล</h5>
                                    </div>
                                    <div class="card-body">
                                        <input class="form-control" placeholder="อีเมล"
                                               name="email" id="email" type="text"
                                               value="{{ (!empty($user->email)) ? $user->email : old('email') }}" required>

                                        @error('email')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror

                                        @if(empty($user))
                                            <input type="password" name="password" class="form-control form-control mt-3" placeholder="พาสเวิร์ด" required>
                                        @endif

                                        @error('password')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">ที่อยู่</h5>
                                    </div>
                                    <div class="card-body">
                                        <textarea rows="3" name="address" id="address" class="form-control"
                                                  placeholder="ที่อยู่">{{ (!empty($user->address)) ? $user->address : old('address') }}</textarea>
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
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-square btn-warning submitBtn float-right" id="submitBtn" type="submit">ย้อนกลับ
                                    </a>
                                        <h5 class="m-0">รายละเอียดอื่น</h5>
                                    </div>
                                    <div class="card-body">

                                        <select class="form-control form-control-sm" id="role" name="role_id"
                                                required>
                                            <option value="">เลือกตำแหน่ง</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" {{ !empty($user) && $user->role_id === $role->id ? 'selected' : '' }} >{{ $role->name }}</option>
                                            @endforeach

                                        </select>

                                        <input type="text" name="telephone" value="{{ (!empty($user->telephone)) ? $user->telephone : old('telephone') }}" class="form-control form-control-sm mt-3" placeholder="เบอร์โทรศัพท์">
                                        <input type="text" name="age" class="form-control form-control-sm mt-3" placeholder="อายุ" value="{{ (!empty($user->age)) ? $user->age : old('age') }}">
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
@endsection
