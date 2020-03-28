<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\GridleUser;

class GridleUserController extends Controller
{
    public function __construct(){

    }

    public function index($user){
        dd(GridleUser::find($user));
        dd($user);
    }

}
