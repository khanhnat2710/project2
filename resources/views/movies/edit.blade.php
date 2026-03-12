<div class="modal fade" id="editModal{{$movie->movieID}}">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="{{route('movies.update', $movie->movieID)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5>Chỉnh sửa phim</h5>
                </div>

                <div class="modal-body">
                    <label for="name">Tên: </label>
                    <input type="text" name="movieTitle" class="form-control mb-2" value="{{$movie->movieTitle}}">
                    <label for="name">Poster: </label>
                    <input type="text" name="poster" class="form-control mb-2" value="{{$movie->poster}}">
                    <label for="name">Trailer: </label>
                    <input type="text" name="trailer" class="form-control mb-2" value="{{$movie->trailer}}">
                    <label for="name">Đạo diễn: </label>
                    <input type="text" name="director" class="form-control mb-2" value="{{$movie->director}}">
                    <label for="name">Mô tả: </label>
                    <textarea name="description" class="form-control mb-2">{{$movie->description}}</textarea>
                    <label for="name">Thời gian phát hành: </label>
                    <input type="date" name="releaseDate" class="form-control mb-2" value="{{$movie->releaseDate}}">
                    <label for="name">Kiểm duyệt</label>
                    <select name="ageRatingID" class="form-control mb-2">
                        @foreach($ageRatings as $age)
                            <option value="{{$age->ageRatingID}}" @if($movie->ageRatingID == $age->ageRatingID) selected
                            @endif>
                                {{$age->code}}
                            </option>
                        @endforeach
                    </select>
                    <label for="name">Hãng sản xuất</label>
                    <select name="studioID" class="form-control">
                        @foreach($studios as $studio)
                            <option value="{{$studio->studioID}}" @if($movie->studioID == $studio->studioID) selected @endif>
                                {{$studio->name}}
                            </option>
                        @endforeach
                    </select>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Cập nhập</button>
                </div>

            </form>

        </div>
    </div>
</div>