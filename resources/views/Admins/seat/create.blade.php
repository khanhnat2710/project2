@extends('layouts.appAdmin')

@section('content')

    <h2>Add Seat</h2>

    <a href="{{ route('seat.index') }}">Back</a>

    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('seat.store') }}" method="POST">

        @csrf

        <div>
            <label>Row</label>

            <select name="rowSeat">

                @foreach(range('A','Z') as $row)

                    <option value="{{ $row }}"
                        {{ old('rowSeat') == $row ? 'selected' : '' }}>

                        {{ $row }}

                    </option>

                @endforeach

            </select>

        </div>

        <br>

        <div>
            <label>Column</label>

            <input type="number" name="colSeat"
                   value="{{ old('colSeat') }}"
                   min="1">

        </div>

        <br>

        <div>
            <label>Room</label>

            <select name="roomID">

                @foreach($rooms as $room)

                    <option value="{{ $room->roomID }}"
                        {{ old('roomID') == $room->roomID ? 'selected' : '' }}>

                        {{ $room->roomName }}

                    </option>

                @endforeach

            </select>

        </div>

        <br>

        <div>
            <label>Seat Type</label>

            <select name="seatTypeID">

                @foreach($seatTypes as $type)

                    <option value="{{ $type->seatTypeID }}"
                        {{ old('seatTypeID') == $type->seatTypeID ? 'selected' : '' }}>

                        {{ $type->name }}

                    </option>

                @endforeach

            </select>

        </div>

        <br>

        <button type="submit">
            Add Seat
        </button>

    </form>

@endsection
