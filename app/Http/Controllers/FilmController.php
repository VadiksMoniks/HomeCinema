<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use Illuminate\Http\Request;
use App\Services\FilmService;

class FilmController extends Controller
{
    public function __construct(FilmService $service)
    {
        parent::__construct($service);
    }

    public function getFilm($id)
    {
        return response()->json([
            'film' => $this->service->film($id)
        ]);
    }

    public function getFilmList()
    {
        return response()->json([
            'list' => $this->service->list()
        ]);
    }

    public function createFilm(FilmRequest $request)
    {
        $this->service->create($request);

        return response()->json([
            'message' => 'Success',
        ], 201);
    }

    public function updateFilm(FilmRequest $request, $id)
    {
        $this->service->update($request, $id);

        return response()->json([
            'message' => 'Success',
        ], 200);
    }

    public function deleteFilm($id)
    {
        $this->service->delete($id);

        return response()->json([
            'message' => 'Success',
        ], 200);
    }
}
