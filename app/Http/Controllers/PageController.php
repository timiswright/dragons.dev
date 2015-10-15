<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $event = Event::all();
        return $event;
    }


}
