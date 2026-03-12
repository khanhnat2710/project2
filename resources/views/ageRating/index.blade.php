@extends('layouts.appAdmin')

@section('content')
    <a href="{{ route('ageRating.create') }}">
        <button>
            Thêm độ tuổi
        </button>
    </a>

    <table class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>Tên kiểm duyệt</th>
            <th>Mô tả</th>
            <th>Thao tác</th>
        </tr>

        @foreach($ageRatings as $ageRating)
            <tr>
                <td>{{ $ageRating->id }}</td>
                <td>{{ $ageRating->code }}</td>
                <td>{{ $ageRating->description }}</td>
                <td> </td>

            </tr>
        @endforeach
    </table>
@endsection
