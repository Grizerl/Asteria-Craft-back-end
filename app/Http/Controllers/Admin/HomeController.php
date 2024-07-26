<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Shopgoods;
use App\Models\Support;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   $post=Post::all()->count();
        $category=Category::all()->count();
        $shop=Shopgoods::all()->count();
        $support=Support::all()->count();
        $user = User::where('name','like','%Admin')->first();
        return view('admin.index', [
            'user' => $user,
            'post'=>$post,
            'category'=>$category,
            'shop'=>$shop,
            'support'=>$support,
        ]);
       
        
    }
}
