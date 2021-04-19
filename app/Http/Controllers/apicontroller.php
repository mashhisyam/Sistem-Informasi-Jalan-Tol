<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;

class apicontroller extends Controller
{
    public function get_all_users()
    {
        return response()->json(UsersModel::all(), 200);
    }

    public function insert_data_users(Request $request)
    {
        $insert_users = new UsersModel;
        $insert_users->fullname = $request->fullname;
        $insert_users->phonenumber = $request->phonenumber;
        $insert_users->address = $request->address;
        $insert_users->email = $request->email;
        $insert_users->password = $request->password;
        $insert_users->save();
        return response([
            'status' => 'OK',
            'message' => 'Users Disimpan',
            'status' => $insert_users
        ], 200);
    }

    public function update_data_users(Request $request, $id)
    {
        $check = UsersModel::firstWhere('users_id', $id);
        if ($check) {
            echo 'data yang anda cari tersedia';
            $data_users = UsersModel::find($id);
        } else {
            echo 'tidak ada';
        }
    }
}
