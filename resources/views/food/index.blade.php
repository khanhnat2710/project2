@extends('layouts.appAdmin')

@section('content')
    <a href="{{ route('food.create') }}">
        <button>
            Thêm món ăn
        </button>
    </a>

    <table class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>Tên đồ ăn</th>
            <th>Giá</th>
            <th>Kiểu</th>
        </tr>
        @foreach($foods as $food)
        <tr>
            <td>{{ $food->foodID }}</td>
            <td>{{ $food->foodName }}</td>
            <td>{{ $food->price }}đ</td>
            <td>{{ $food->foodType }}</td>
        </tr>
        @endforeach
    </table>
@endsection
