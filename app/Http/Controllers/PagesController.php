<?php
 
namespace app\Http\Controllers;
 
use app\Http\Controllers\Controller;
use app\User;
 
class PagesController extends Controller
{
    
    public function home()
    {
        return view('index');
    }
}