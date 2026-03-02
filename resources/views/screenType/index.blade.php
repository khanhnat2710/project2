@extends('layouts.appAdmin')

@section('content')
    <a href="{{ route('screenType.create') }}">
        <button>
            Thêm định dạng
        </button>
    </a>

    <table class="table table-bordered">
        <tr>
            <th>STT</th>
            <th>Tên định dạng</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($screenTypes as $screenType)
            <tr>
                <td>{{ $screenType->screenTypeID }}</td>
                <td>{{ $screenType->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection
