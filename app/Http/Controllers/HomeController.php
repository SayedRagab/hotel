<?php

namespace App\Http\Controllers;

use App\Http\Data\Dumy;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function get(Request $request){
        $dumy = new Dumy();
        $data = $dumy->getHotels();
        return successResponse(null,$data);
    }
}
