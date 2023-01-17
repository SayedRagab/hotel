<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\BookingCollection;
use App\Http\Resources\UserCollection;
use App\Models\booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class BookingController extends Controller
{

    public function get(Request $request){
        $user = new UserCollection(auth()->user());
        $bookings = booking::where('user_id',$user->id)->get();
        return successResponse(null,BookingCollection::collection($bookings));
    }

    public function add(BookingRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        booking::create($data);
        return successResponse(null, null);
    }

    public function delete(Request $request,$id)
    {
        try {
            booking::find($id)->delete();
        } catch (\Throwable $th) {
            //throw $th;
        }
      
        return successResponse(null, null);
    }

}
