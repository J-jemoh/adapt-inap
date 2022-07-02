<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarrierCategories;
use App\Models\Barriers;
use App\Models\Participants;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories=Barriers::count();
        $bcategories=BarrierCategories::count();
        $participants= Participants::count();
        return view('pages.dashboard',compact('categories','bcategories','participants'));
    }
    public function participants_listing(){
        $participants=Participants::get();
        return view('pages.participants.list',compact('participants'));
    }
    public function participant_add(){
        $categories =BarrierCategories::get();
        $barriers = Barriers::groupBy('category_id')->get();
        return view('pages.participants.add',compact('categories','barriers'));
    }
    public function barrier_categories(){
        $categories =BarrierCategories::get();
        return view('pages.barriers.categories',compact('categories'));
    }
    public function add_categories(){
        return view('pages.barriers.category_add');
    }
    public function barrier_list(){
        $barriers = Barriers::get();
        return view('pages.barriers.barrier_list',compact('barriers'));
    }
    public function barrier_add(){
        $categories =BarrierCategories::get();
        return view('pages.barriers.barrier_add',compact('categories'));
    }
    public function locator_list(){
        return view('pages.locator.list');
    }
    public function show_category($id){
        $category =BarrierCategories::find($id);
        $barriers= Barriers::whereIn('category_id',$category)->get();
        return view('pages.barriers.category_name',compact('category','barriers'));

    }
    public function get_barriers(Request $request){
        $data['barriers']=Barriers::where('category_id',$request->category_id)->get(["barrier_name","category_id"]);
        return response()->json($data);
    }

}
