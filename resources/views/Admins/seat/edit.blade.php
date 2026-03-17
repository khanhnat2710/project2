@extends('layouts.appAdmin')

@section('content')

    <h2>Edit Seat</h2>

    <form action="{{ route('seat.update',$seat->seatID) }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Row</label>
            <input type="text" name="rowSeat" value="{{ $seat->rowSeat }}">
        </div>

        <br>

        <div>
            <label>Column</label>
            <input type="text" name="colSeat" value="{{ $seat->colSeat }}">
        </div>

        <br>

        <div>
            <label>Room</label>

            <select name="roomID">

                @foreach($rooms as $room)

                    <option value="{{ $room->roomID }}"
                        {{ $room->roomID == $seat->roomID ? 'selected' : '' }}>

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
                        {{ $type->seatTypeID == $seat->seatTypeID ? 'selected' : '' }}>

                        {{ $type->name }}

                    </option>

                @endforeach

            </select>

        </div>

        <br>

        <button type="submit">
            Update Seat
        </button>

    </form>

@endsection
