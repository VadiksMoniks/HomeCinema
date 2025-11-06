<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Services\PersonService;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function __construct(PersonService $service)
    {
        parent::__construct($service);
    }

    public function viewProfile($id)
    {
        return response()->json([
            'profile' => $this->service->profile($id),
        ]);
    }

    public function list()
    {
        return response()->json([
            'list' => $this->service->list(),
        ]);
    }

    public function addProfile(PersonRequest $request)
    {
        return response()->json([
            'message' => $this->service->create($request),
        ], 201);
    }

    public function updateProfile(PersonRequest $request, $id)
    {
        return response()->json([
            'message' => $this->service->update($request, $id),
        ], 200);
    }

    public function deleteProfile($id)
    {
        $this->service->delete($id);
        return response()->json([
            'message' => 'Success',
        ], 200);
    }
}
