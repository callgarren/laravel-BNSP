<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirasi;
use App\InputAspirasi;
class ProfileController extends Controller
{
    public function index(){
        $profile = InputAspirasi::all();
        return view('profile.index',['profile' => $profile]);
    }
}
