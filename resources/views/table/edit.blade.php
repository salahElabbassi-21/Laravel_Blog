@extends("Lyouts.app")
@section("content")
    <form method="POST" action="{{route("table.update", 1)}}">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter the description"></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Poster cretor</label>
            <select class="form-select" id="post_creator" name="post_creator">
                <option value="Salah">Salah</option>
                <option value="Ahmed">Ahmed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>

@endsection
