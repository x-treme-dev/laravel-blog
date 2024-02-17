<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPost($slug){
      // return 'posts'.$slug;
      $post = Post::where('slug','=', $slug)->get(); // получим содержание статьи из БД, выбрав ее по полю slug
      return view('posts.show')->with('post', $post);
      /* полученное содержание статьи выведем в шаблоне posts/show.blade.php
      создадим переменную $post, которая будет содержать данные из БД полученные через sql-запрос  */
    }
}
