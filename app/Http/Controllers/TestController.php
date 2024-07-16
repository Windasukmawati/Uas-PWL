<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function home(Request $request)
    {
        //method path
        $path = $request->path();
        echo 'Method path:'.$path;
        echo '<br>';
        //method is
        $pattern = $request->is('admin/*');
        echo 'Method is:'.$pattern;
        echo '<br>';
        //method url
        $url = $request->url();
        echo 'Method URL:'.$url;
        echo '<br>';
        //method method
        $method = $request->method();
        echo 'Method method:'.$method;
        echo '<br>';
        //method isMethod
        if($request->isMethod('past')) {
            echo 'Method post';
            echo '<br>';
        }
        if($request->isMethod('get')) {
            echo 'Method get';
        }
    }
}
