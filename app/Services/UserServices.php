<?php

namespace App\Services;

use App\Models\UserRegister;
use App\Models\Category;
use App\Models\Post;
use App\Models\Shopgoods;
use App\Models\Support;
use App\Models\User;


class UserServices
{
    public function index()
    {
        $count_all = User::count() + Support::count() + Shopgoods::count();
        $userCount = UserRegister::count();
        $user = User::count();
        $post=Post::all()->count();
        $shop=Shopgoods::all()->count();
        $support=Support::all()->count();
        
        return [
            'userCount' =>$userCount,
            'user' =>$user,
            'post'=>$post,
            'shop'=>$shop,
            'support'=>$support,
            'count_all'=>$count_all,
        ];
    }
}
