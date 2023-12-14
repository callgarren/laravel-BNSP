<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirasi;

class FeedbackController extends Controller
{
    public function index(){
        $feedback = Aspirasi::all();
        return view('feedback.index',['feedback' => $feedback]);
    }
}
