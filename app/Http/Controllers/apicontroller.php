<?php

namespace App\Http\Controllers;

use App\Models\ApiModel;
use Illuminate\Http\Request;

class apicontroller extends Controller
{
    public function get_all_users()
    {
        return response()->json(ApiModel::all(), 200);
    }
    public function insert_data_users(Request $request)
    {
        $insert_users = new ApiModel;
        $insert_users->fullname = $request->fullname;
        $insert_users->phonenumber = $request->phonenumber;
        $insert_users->address = $request->address;
        $insert_users->email = $request->email;
        $insert_users->password = $request->password;
        $insert_users->save();
        return response([
            'status'=>'OK',
            'message'=>'Users Disimpan',
            'status'=>$insert_users
        ],200);
    }
}
