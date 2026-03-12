@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Screening Room List</h2>

        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
            Add Room
        </button>

        <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Capacity</th>
                <th>Action</th>
            </tr>

            @foreach($rooms as $room)

                <tr>

                    <td>{{$room->roomID}}</td>
                    <td>{{$room->roomName}}</td>
                    <td>{{$room->capacity}}</td>

                    <td>

                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{$room->roomID}}">
                            Edit
                        </button>

                        <form action="/screening-rooms/delete/{{$room->roomID}}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger">
                                Delete
                            </button>

                        </form>

                    </td>

                </tr>


                <!-- EDIT MODAL -->

                <div class="modal fade" id="editModal{{$room->roomID}}">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <form action="/screening-rooms/update/{{$room->roomID}}" method="POST">

                                @csrf
                                @method('PUT')

                                <div class="modal-header">
                                    <h5>Edit Room</h5>
                                </div>

                                <div class="modal-body">

                                    <input type="text" name="roomName" value="{{$room->roomName}}" class="form-control mb-2">

                                    <input type="number" name="capacity" value="{{$room->capacity}}" class="form-control mb-2">

                                    <select name="screenTypeID" class="form-control">

                                        @foreach($screenTypes as $type)

                                            <option value="{{$type->screenTypeID}}">
                                                {{$type->typeName}}
                                            </option>

                                        @endforeach

                                    </select>

                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-success">Update</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            @endforeach

        </table>

    </div>


    <!-- CREATE MODAL -->

    <div class="modal fade" id="createModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <form action="/screening-rooms/store" method="POST">

                    @csrf

                    <div class="modal-header">
                        <h5>Add Room</h5>
                    </div>

                    <div class="modal-body">

                        <input type="text" name="roomName" placeholder="Room Name" class="form-control mb-2">

                        <input type="number" name="capacity" placeholder="Capacity" class="form-control mb-2">

                        <select name="screenTypeID" class="form-control">

                            @foreach($screenTypes as $type)

                                <option value="{{$type->screenTypeID}}">
                                    {{$type->typeName}}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary">Save</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection