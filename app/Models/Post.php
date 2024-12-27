<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    // If your table uses custom column names
    protected $fillable = ['id','Title', 'Post_by', 'Create_at']; // Modify based on your table columns
}
