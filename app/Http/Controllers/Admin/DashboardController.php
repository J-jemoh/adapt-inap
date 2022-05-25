<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('pages.dashboard');
    }
    public function participants_listing(){
        return view('pages.participants.list');
    }
    public function participant_add(){

        return view('pages.participants.add');
    }
    public function barrier_categories(){
        return view('pages.barriers.categories');
    }
    public function add_categories(){
        return view('pages.barriers.category_add');
    }
    public function barrier_list(){
        return view('pages.barriers.barrier_list');
    }
    public function barrier_add(){

        return view('pages.barriers.barrier_add');
    }
    public function locator_list(){
        return view('pages.locator.list');
    }

}
