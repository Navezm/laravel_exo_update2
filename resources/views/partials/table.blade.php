<h1 class="text-center">All member List</h1>
<div class="mb-3">
    <form action="/deleteAll" method="POST">
        @csrf
        <button class="btn btn-outline-danger" type="submit">Delete All</button>
    </form>
</div>
<div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($members as $item)
            @if ($item->genre)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->nom}}</td>
                    <td><a class="btn btn-outline-secondary" href="/showMember/{{$item->id}}">Details</a></td>
                </tr>
            @endif
          @endforeach
        </tbody>
    </table>
</div>