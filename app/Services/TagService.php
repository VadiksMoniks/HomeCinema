<?php 
namespace App\Services;

use App\Http\Requests\TagRequest;
use App\Http\Resources\TagCollection;
use App\Models\Tag;

class TagService
{
    public function tagList()
    {
        $tags = Tag::withCount('films')->withCount('people')->paginate(10);
        return new TagCollection($tags);
    }

    public function createTag(TagRequest $request)
    {
        $tag = new Tag;
        $tag->name_ua = $request->name_ua;
        $tag->name_en = $request->name_en;
        $tag->save();
    }

    public function deleteTag($id)
    {
        Tag::where('id', $id)->delete();
    }
}