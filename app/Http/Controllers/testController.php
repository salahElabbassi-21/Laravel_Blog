<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        // Pass the posts to the view
        return view('table.table', compact("posts"));
    }
    public function schow()
    {
        return view("table.schow");
    }

    public function action()

    {

       return view("table.action");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();
       return redirect()->route('index');
    }
    public function edit(){
        return view("table.edit");
    }

    public function update(Request $request)
    {
        $data = $request->all();

        return redirect()->route('table.schow', 1);
    }

    public function destroy()
    {
        return to_route("index");
    }
}
