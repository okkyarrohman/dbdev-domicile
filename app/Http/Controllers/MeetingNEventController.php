<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingNEventController extends Controller
{
    public function index(){
        return view('meeting_and_event');
    }
}
