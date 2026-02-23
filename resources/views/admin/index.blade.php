@extends('layouts.appAdmin')

@section('content')
    <a href="{{ route('admin.create') }}">
        <button>
            Thêm nhân viên
        </button>
    </a>

    <table class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>chức vụ</th>
        </tr>
        @foreach($admins as $admin)
        <tr>
            <td>{{ $admin->adminID }}</td>
            <td>{{ $admin->fullName }}</td>
            <td>{{ $admin->email }}</td>
            <td>{{ $admin->role }}</td>
        </tr>
        @endforeach
    </table>
@endsection
