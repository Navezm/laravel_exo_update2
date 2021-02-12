<div class="jumbotron">
    <h1 class="display-4">{{$show->nom}}</h1>
    <hr class="my-4">
    <p>{{$show->age}}</p>
    <p>{{$show->genre}}</p>
    <div class="d-flex">
        <a class="btn btn-success mr-3" href="/editMember/{{$show->id}}" role="button">Edit</a>
        <form action="/deleteMember/{{$show->id}}" method="POST">
            @csrf
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>