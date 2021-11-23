<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function add()
    {
        return view('view.add');
    }
}
