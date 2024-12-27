@extends("Lyouts.app")
@section("content")

    <div class="text-center mt-4">
        <button type="button" class="btn btn-success">
            <a href="{{route('table.action')}}" class="text-white text-decoration-none">Create New Post</a>
        </button>
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
                <td>{{$post['post_creator']}}</td>
                <td>{{$post['created_at']}}</td>


                <td><a href="{{route("table.schow",$post["id"])}}" class="btn btn-info">View</a>
                    <a href="{{route("table.edit",$post["id"])}}" class="btn btn-primary">Edit</a>
                    <form style="display:inline " action="{{route('table.destroy', $post['id'])}}" method="POST">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>


                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

@endsection
