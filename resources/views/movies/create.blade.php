

<div class="modal fade" id="createModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="{{route('movies.store')}}" method="POST">
                @csrf

                <div class="modal-header">
                    <h5>Add Movie</h5>
                </div>

                <div class="modal-body">

                    <input type="text" name="movieTitle" class="form-control mb-2" placeholder="Movie Title">

                    <input type="text" name="director" class="form-control mb-2" placeholder="Director">

                    <input type="date" name="releaseDate" class="form-control mb-2">

                    <textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>

                    <select name="ageRatingID" class="form-control mb-2">
                        @foreach($ageRatings as $age)
                            <option value="{{$age->ageRatingID}}">{{$age->code}}</option>
                        @endforeach
                    </select>

                    <select name="studioID" class="form-control">
                        @foreach($studios as $studio)
                            <option value="{{$studio->studioID}}">{{$studio->name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-success">Save</button>
                </div>

            </form>

        </div>
    </div>
</div>
