<?php 
namespace App\Services;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminService
{
    public function login(AdminRequest $request)
    {
        $admin = Admin::where('username', $request->username)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            throw ValidationException::withMessages([
                'message' => ['Wrong credentials'],
            ]);
        }

        $admin->tokens()->delete();
        $token = $admin->createToken('admin_token')->plainTextToken;

        return [
            'token' => $token,
            'user' => [
                'id' => $admin->id,
                'name' => $admin->name,
            ],
        ];
    }

    public function logout(AdminRequest $request)
    {
        $request->user()->currentAccessToken()->delete();

        return [
            'message' => 'Success',
        ];
    }
}