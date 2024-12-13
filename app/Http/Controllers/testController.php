<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        $posts = [
            ['id'=>1, 'title'=>"php", "post-by"=>"ahmad", "crete-at"=>"2023-10-15 09:04:10" ],
            ['id'=>2, 'title'=>"js", "post-by"=>"salah", "crete-at"=>"2022-10-15 09:04:10" ],
            ['id'=>3, 'title'=>"python", "post-by"=>"ziko", "crete-at"=>"2024-10-15 09:04:10" ],
        ];
      return view('table.table', compact("posts"));
    }
    public function schow()
    {
        return view("table.schow");
    }
}
