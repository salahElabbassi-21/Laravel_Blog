@extends("Lyouts.app")
@section("content")
    <div class="text-center mt-4">
        <button type="button" class="btn btn-success">Create New Post</button>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Post By</th>
            <th scope="col">Create_at</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post['id']}}</th>
                <td>{{$post['title']}}</td>
                <td>{{$post['post-by']}}</td>
                <td>{{$post['crete-at']}}</td>

                <td><a href="{{route("table.schow",$post["id"])}}" class="btn btn-info">View</a>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

@endsection
