@extends('layouts.appAdmin')

@section('content')
    <a href="{{ route('seatType.create') }}">
        <button>
            Thêm kiểu ghế
        </button>
    </a>

    <table class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>Tên kiểu ghế</th>
        </tr>

        @foreach($seatTypes as $seatType)
            <tr>
                <td>{{ $seatType->seatTypeID }}</td>
                <td>{{ $seatType->seatTypeName }}</td>
            </tr>
        @endforeach
    </table>
@endsection
