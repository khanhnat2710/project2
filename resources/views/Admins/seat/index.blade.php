@extends('layouts.appAdmin')

@section('content')

    <style>
        .screen {
            width: 600px;
            height: 60px;
            margin: 20px auto;
            background: linear-gradient(#ffb347, #000);
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            color: white;
            font-weight: bold;
        }

        .seat-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .seat-row {
            display: flex;
            margin: 5px;
            align-items: center;
        }

        .row-label {
            width: 30px;
            color: white;
            font-weight: bold;
        }

        .seat {
            width: 40px;
            height: 40px;
            margin: 4px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px;
            position: relative;
            cursor: pointer;
        }

        .normal {
            background: #2c2f36;
        }

        .vip {
            background: #ff8c00;
        }

        .couple {
            background: #ff4040;
        }

        .seat-edit {
            position: absolute;
            bottom: -5px;
            right: -5px;
            font-size: 10px;
            background: white;
            border-radius: 50%;
            padding: 2px;
            text-decoration: none;
        }
    </style>

    <h2>Seat Layout</h2>

    <a href="{{ route('seat.create') }}" class="btn btn-success mb-3">
        Add Seat
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div class="screen">
        SCREEN
    </div>


    <div class="seat-container">

        @php
            $currentRow = null;
        @endphp

        @foreach($seats as $seat)

            @if($currentRow != $seat->rowSeat)

                @if($currentRow !== null)
    </div>
    @endif

    <div class="seat-row">
        <span class="row-label">{{ $seat->rowSeat }}</span>

        @php
            $currentRow = $seat->rowSeat;
        @endphp

        @endif


        <div class="seat
@if($seat->seatTypeID == 1) normal
@elseif($seat->seatTypeID == 2) vip
@elseif($seat->seatTypeID == 3) couple
@endif">

            {{ $seat->rowSeat }}{{ $seat->colSeat }}

            <a href="{{ route('seat.edit',$seat->seatID) }}" class="seat-edit">
                ✏
            </a>

        </div>

        @endforeach

    </div>

@endsection
