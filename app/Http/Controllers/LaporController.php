<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\profile;
use App\Models\product;
use App\Models\slide;
use App\Models\vdo;
class LaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = slide::all();
        $product[1] = product::where('type','=',1)->get();
        $product[2] = product::where('type','=',2)->get();
        $product[3] = product::where('type','=',3)->get();
        return view('fontend.index',compact('slide','product'));
    }

    public function indexvdo()
    {
        $product[1] = vdo::all();
        // dd($product[1]);
        return view('fontend.vdo',compact('slide','product'));
    }
    
}
