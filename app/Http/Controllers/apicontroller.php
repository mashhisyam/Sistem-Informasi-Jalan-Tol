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
}
