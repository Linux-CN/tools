<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $posts = Post::with('author')->where('category_id', $category->id)->latest()->paginate(10);
        return view('categories.show')->with('category',$category)->with('posts',$posts);
    }
}
