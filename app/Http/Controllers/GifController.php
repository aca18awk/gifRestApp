<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Gif;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GifController extends Controller
{
    public function index()
    {
        return Gif::all();
    }

    public function show($id)
    {
        return Gif::find($id);
    }

    public function search($title)
    {
        $user = DB::table('gifs')->where('title', 'LIKE', '%'.$title.'%')->first();
        if (empty($user)){
            return 'That gif does not exist.';
        }
        else{
            return "Title: ".$user->title."<br>"."URL: ".$user->url;
        }
    }

    public function random()
    {
        $last = count(Gif::all());
        $id = rand(1,$last);
        $user = DB::table('gifs')->where('id',$id)->first();
        return "Title: ".$user->title."<br>"."URL: ".$user->url;
    }

}
