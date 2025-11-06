<?php
namespace App\Services;

use App\Http\Requests\PersonRequest;
use App\Http\Resources\PersonCollection;
use App\Http\Resources\PersonResource;
use App\Models\Person;

class PersonService
{
    public function profile($id)
    {
        return new PersonResource(Person::findOrFail($id));
    }

    public function list()
    {
        return new PersonCollection(Person::paginate(10));
    }

    private function fillProfile(Person $person, $data)
    {
        $person->name_en = $data->name_en;
        $person->name_ua = $data->name_ua;
        $person->type = $data->type;

        if($data->hasFile('photo')){
            $person->photo = FileService::storePersonPhoto($data->photo);
        }

        $person->save();

        $tags = $data->input('tags', []);
        if (!is_array($tags)) {
            $tags = explode(',', $tags);
        }

        $person->tags()->sync($tags);
        }

    public function create(PersonRequest $request)
    {
        $this->fillProfile(new Person, $request);
        return "Success";
    }

    public function update(PersonRequest $request, $id)
    {
        $person = Person::where('id', $id)->first();
        if($person != null){
            if($person->photo != null && $request->hasFile('photo')){
                FileService::deletePersonPhoto($person->photo);
            }
            $this->fillProfile($person, $request); 
            return "Success";
        }
        else{
            return "Wrong profile";
        }
    }

    public function delete($id)
    {
        $person = Person::where('id', $id)->first();
        FileService::deletePersonPhoto($person->photo);
        $person->delete();
        return 'Success';
    }
}