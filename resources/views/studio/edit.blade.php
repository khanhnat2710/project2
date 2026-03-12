@extends('layouts.appAdmin')

@section('content')
<form action="{{ route('studio.update', $studio->studioID) }}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Tên nhà sản xuất: </label>
        <input type="text" name="name" id="name" value="{{ $studio->name }}" placeholder="Nhập tên nhà sản xuất">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">
            Cập nhật
        </button>
    </div>
</form>
@endsection