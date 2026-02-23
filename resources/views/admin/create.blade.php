@extends('layouts.appAdmin')

@section('content')
    <form method="post" action="{{ route('admin.store') }}">
        @csrf

        <div>
            <label for="fullName">Họ tên: </label>
            <input type="text" name="fullName" id="fullName" placeholder="Nhập họ tên">
        </div>

        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" placeholder="Nhập email">
        </div>

        <div>
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password" placeholder="Nhập mật khẩu">
        </div>

        <div>
            <label for="role">Chức vụ</label>
            <select name="role" id="role">
                <option>Quản trị viên</option>
                <option>Nhân viên bán vé</option>
                <option>Nhân viên bán đồ ăn</option>
            </select>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">
                Thêm nhân viên
            </button>
        </div>
    </form>
@endsection
