@extends('layouts.appAdmin')

@section('content')

<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4>Cập nhật khách hàng</h4>
        </div>

```
    <div class="card-body">
        <form method="post" action="{{ route('customer.update', $customers->customerID) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="fullName" class="form-label">Họ tên</label>
                <input type="text" class="form-control" name="fullName" id="fullName"
                    value="{{ $customers->fullName }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email"
                    value="{{ $customers->email }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Password mới (nếu muốn đổi)</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber"
                    value="{{ $customers->phoneNumber }}">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" name="address" id="address"
                    value="{{ $customers->address }}">
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('customer.index') }}" class="btn btn-secondary">
                    Quay lại
                </a>

                <button type="submit" class="btn btn-primary">
                    Cập nhật
                </button>
            </div>

        </form>
    </div>
</div>
```

</div>
@endsection
