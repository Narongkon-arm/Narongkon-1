@extends('Layouts.main')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Role</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('contents')
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ !empty($role) ? route('admin.roles.update', ['role' => $role->id]) : route('admin.roles.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">เพิ่มประเภท สิทธิ์การใช้งาน</h5>
                                    </div>
                                    @csrf

                                    @if(!empty($role))
                                        @method('PUT')
                                    @endif
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">ชื่อสิทธิ์การใช้งาน</label>
                                            <input type="text" class="form-control" name="name"
                                                   value="{{ (!empty($role->name)) ? $role->name : old('name') }}">
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button class="btn btn-square btn-info submitBtn float-right" id="submitBtn"
                                                type="submit"> บันทึก
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
