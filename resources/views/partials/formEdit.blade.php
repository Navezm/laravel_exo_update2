<div>
    <h1 class="text-center">Edit Member</h1>
    <form action="/updateMember/{{$edit->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" value="{{$edit->nom}}" name="nom">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" value="{{$edit->age}}" name="age">
        </div>
        <div class="form-group">
            <label>Genre</label>
            <select name="genre" id="">
                @if ($edit->genre == "Homme")
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                @else
                <option value="Femme">Femme</option>
                <option value="Homme">Homme</option>
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>