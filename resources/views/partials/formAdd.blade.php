<div>
    <h1 class="text-center">Add Member</h1>
    <form action="/addMember" method="POST">
        @csrf
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age">
        </div>
        <div class="form-group">
            <label>Genre</label>
            <select name="genre" id="">
                <option value="Femme">Femme</option>
                <option value="Homme">Homme</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>