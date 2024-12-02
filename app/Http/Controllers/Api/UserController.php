<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function createUser(Request $request)
    {

        $validator  = Validator::make($request->all(), [
            'PhoneNumber' => 'required|max:10|min:10|unique:user,PhoneNumber',
            'Password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => 'error']);
        }
        $user = User::create([
            'PhoneNumber' => $request['PhoneNumber'],
            'Password' => Hash::make($request['Password']),
        ]);

        if ($user) {
            return response()->json(['message' => 'done']);
        }
        return response()->json(['message' => 'not valid']);
    }
    public function editUser(Request $request, $id)
    {
        User::where('UserId', $id)
            ->update([
                'FirstName' => $request->input('FirstName'),
                'LastName' => $request->input('LastName'),
                'Address' => $request->input('Address'),
                'ProfileImgUrl' => $request->input('ProfileImgUrl'),
            ]);
    }
}
