<?php
namespace App\Http\Controllers\Asteria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Changelog;
use App\Models\Post;
use App\Models\Reviews;
use App\Models\Shopgoods;
use App\Models\Support;
use Stevebauman\Purify\Facades\Purify;
class HomeController extends Controller
{
public function index()
{ 
$posts = Post::all();
$clean_posts = $posts->map(function ($post) {
$post->title = Purify::clean($post->title);
$post->content = Purify::clean($post->content);
return $post;
});
$first_set = $clean_posts->take(1); // наприклад, перший запис
$second_set = $clean_posts->slice(1); // решта записів
return view('asteria_content.main', [
'first_posts' => $first_set,
'second_posts' => $second_set,
]);
}
public function shop()
{ 
$goods=Shopgoods::paginate(9);
return view('asteria_content.shop',[
'goods'=>$goods,
]);
}
public function shop_show($id)
{
$good = Shopgoods::find($id);
if ($good) {
$good->content = strip_tags($good->content);
}
return view('asteria_content.show_good', [
'good' => $good,
]);
}
public function changelog()
{ 
$changelog = Changelog::paginate(5);
$clean_changelog = $changelog->getCollection()->map(function ($changelog)
{
$changelog->title = strip_tags($changelog->title);
$changelog->content = strip_tags($changelog->content);
return $changelog;
});
$changelog->setCollection($clean_changelog);
return view('asteria_content.changelog',
[
'changelog' => $changelog,
]);
}
public function vote(Request $request)
{   
return view('asteria_content.vote');
}
public function vote_check(Request $request)
{   
$validatedData = $request->validate
([
'name' => 'required|min:5|regex:/^\S+\s\S+$/',
'text' => 'required|min:5|max:100',
]);
$offer=new Reviews();
$offer->name=$request->name;
$offer->text=$request->text;
$offer->save();
return redirect(route('faq'));
}
public function help()
{   
return view('asteria_content.help');
}
public function help_check(Request $request)
{   
$validatedData = $request->validate
([
'email' => 'required|min:4|email',
'content' => 'required|min:10',
]);
$questions=new Support();
$questions->email=$request->email;
$questions->content=$request->content;
$questions->save();
return redirect()->back();
}
public function store()
{
return view('asteria_content.news');
}
public function show()
{
$faq=Reviews::paginate(3);
return view('asteria_content.faq',[
'faq'=>$faq,
]);
}
}