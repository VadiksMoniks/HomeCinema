<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __construct(TagService $service)
    {
        parent::__construct($service);
    }

    public function list()
    {
        return response()->json([
            'list' => $this->service->tagList()
        ]);
    }

    public function create(TagRequest $request)
    {
        $this->service->createTag($request);
        return response()->json([
            'message' => 'Success'
        ], 201);
    }

    public function delete($id)
    {
        $this->service->deleteTag($id);

        return response()->json([
            'message' => 'Success'
        ], 200);
    }
}
