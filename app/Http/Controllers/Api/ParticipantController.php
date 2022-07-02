<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participants;

class ParticipantController extends Controller
{
    //

    public function get_participants(){

        return Participants::all();
    }
    public function show_participant($id){

        return Participants::find($id);
    }
}
