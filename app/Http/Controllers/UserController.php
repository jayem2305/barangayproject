<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use Illuminate\Validation\ValidationException;
use App\Models\Comment;
use App\Models\Reply;
class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
        //return "Hello, this is the welcome page!";
    }
}

?>