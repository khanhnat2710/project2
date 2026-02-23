@extends('layouts.appAdmin')

@section('content')
    <a href="{{ route('paymentMethod.create') }}">
        <button>
            Thêm phương thức
        </button>
    </a>

    <table class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>Tên phương thức</th>
        </tr>

        @foreach($paymentMethods as $paymentMethod)
            <tr>
                <td>{{ $paymentMethod->paymentID }}</td>
                <td>{{ $paymentMethod->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection
