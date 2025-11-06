<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Services\AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct(AdminService $service)
    {
        parent::__construct($service);
    }

    public function login(AdminRequest $request)
    {
        return response()->json([
            $this->service->login($request),
        ], 201);
    }

    public function logout(AdminRequest $request)
    {
        return response()->json([
            $this->service->logout($request),
        ], 201);
    }
}
