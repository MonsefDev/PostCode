<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 

class PagesController extends Controller
{
    //

    public function index(){
        /*$name= 'index';
        return view('pages.index')->with('name',$name );*/
        //$posts =   Post::orderBy('created_at','desc')->paginate(6);
        $posts =   DB::select('select * FROM posts ORDER BY id DESC');         
         return view('pages.index')->with('posts',$posts);
    }

    function about() {
        $name= 'about';
        return view('pages.about')->with('name',$name );
      }
      function contact() {
        $name= 'contact';
        return view('pages.contact')->with('name',$name );
      }
      function gag() {
        $posts =   DB::select('select * FROM posts ORDER BY id DESC');         
         return view('pages.gag')->with('posts',$posts);
      }

      function proLanguage() {
        
        $myname= array('J'=>'JAVA','C'=>'C++','P'=>'PHP');
        return view('pages.prolanguage')->with('myname', $myname );
      }
 
}
