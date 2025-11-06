<?php

namespace App\Services;

use App\Http\Requests\FilmRequest;
use App\Http\Resources\FilmCollection;
use App\Http\Resources\FilmResource;
use App\Models\Film;

class FilmService
{
    public function film($id)
    {
        return new FilmResource(Film::with('people')->with('tags')->findOrFail($id));
    }

    public function list()
    {
        return new FilmCollection(Film::with('tags')->paginate(2));
    }

    private function fillFilmInfo(Film $film, $request)
    {
        $film->status = $request->status;
        $film->name_ua = $request->name_ua;
        $film->description_ua = $request->description_ua;
        $film->description_en = $request->description_en;

        if($film->name_en != null && $film->name_en != $request->name_en){
            FileService::renameFilmDir($film->name_en, $request->name_en);
            $film->name_en = $request->name_en;
        }

        if($request->hasFile("poster")){
            if($film->poster != null){
                FileService::deletePoster($film->name_en);
            }
            $film->poster = FileService::storePoster($film->name_en, $request->file('poster'));
        }

        if($film->screenshots == true){
            FileService::deleteScreenshots($film->name_en);
        }
        if ($request->hasFile('screenshots')) {
                FileService::storeScreenshots($film->name_en, $request->file('screenshots'));
                $film->screenshots = true;
        }

        $film->trailer_url = $request->trailer_url;
        $film->year = $request->year;
        $film->start_date = $request->start_date;
        $film->end_date = $request->end_date;

        $film->save();
        
        $tags = $request->input('tags', []);
        if (!is_array($tags)) {
            $tags = explode(',', $tags);
        }
        $film->tags()->sync($tags);
    }

    public function create(FilmRequest $request)
    {
        $this->fillFilmInfo(new Film, $request);
        return "Success";
    }

    public function update(FilmRequest $request, $id)
    {
        $film = Film::findOrFail($id);
        $this->fillFilmInfo($film, $request);
        return "Success";
    }


    public function delete($id)
    {
        $film = Film::where('id', $id)->first();
        FileService::deleteFilmFolder($film->name_en);
        $film->delete();
    }
}