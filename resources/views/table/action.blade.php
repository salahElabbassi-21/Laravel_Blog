@extends("Lyouts.app")
@section("content")
    <form method="POST" action="{{route("table.store")}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter the description"></textarea>
        </div>
        <div class="mb-3">
            <label for="post_creator" class="form-label">Poster cretor</label>
            <select class="form-select" id="position" name="position">
                <option value="Salah">Salah</option>
                <option value="Ahmed">Ahmed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
