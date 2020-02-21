<?php

namespace App\Http\Controllers;
use App\Voter;
use Illuminate\Http\Request;

class VoterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() 
    {
        $first_20_voters = Voter::limit(20)->get();
        return response()->json($first_20_voters);
    }
}
