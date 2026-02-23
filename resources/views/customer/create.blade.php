@extends('layouts.appAdmin')

@section('content')
    <form method="post" action="{{ route('customer.store') }}">
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
            <label for="password">Mật khẩu: </label>
            <input type="text" name="password" id="password" placeholder="Nhập mật khẩu">
        </div>

        <div>
            <label for="phoneNumber">Số điện thoại: </label>
            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Nhập số điện thoại">
        </div>


        <div>
            <label for="address">Địa chỉ: </label>
            <input type="text" name="address" id="address" placeholder="Nhập địa chỉ">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">
                Thêm khách hàng
            </button>
        </div>
    </form>
@endsection
