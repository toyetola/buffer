<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class newsController extends Controller
{


    Public function addNews(Request $request){
        try{
            if(isset($request)){
                news::create(['title'=>$request->title, 'details'=>$request->details, 'author'=>Auth::id()]);
                return response()->json(['data'=>$request->title], 200);
            }else{
                return response()->json(['errors'=> 'no value inputed'], 204);
            }
        }catch(\Exception $e){
            return response()->json(['errors'=> 'no value inputed'], 500);
        }

    }

    public function allNews(){
        try{
            $news = news::all();
            return response()->json(['status'=>"success", 'news'=>$news], 200);
        }catch(\Exception $e){
            return response()->json(['status'=>"error"], 500);
        }
    }

    Public function removeNews($id){
        try{
        news::where('id', $id)->delete();
        return response()->json(['status'=>'Deleted'], 200);
        }catch(\Exception $e){
            return response()->json(['status'=>"error"], 500);
        }
    }

    Public function getSingleNews($id){
        try{
        $news = news::where('id', $id)->first();
        $news['realauthor'] = $news->authorname->email;
        return response()->json(['status'=>'success', 'news'=>$news], 200);
        }catch(\Exception $e){
            return response()->json(['status'=>"error"], 500);
        }
    }

}
