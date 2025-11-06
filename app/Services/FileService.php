<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileService
{
    public static function storePoster(string $folder_name, $poster): string
    {
        $poster->storeAs("film/".str_replace(' ', '-', $folder_name)."/", $poster->getClientOriginalName(), 'public');
        return $poster->getClientOriginalName();
    }

    public static function renameFilmDir($old_name, $new_name)
    {
        Storage::disk('public')->move("film/".str_replace(' ', '-', $old_name), "film/".str_replace(' ', '-', $new_name));
    }

    public static function storePersonPhoto($poster): string
    {
        $poster->storeAs("people/", $poster->getClientOriginalName(), 'public');
        return $poster->getClientOriginalName();
    }

    public static function storeScreenshots(string $folder_name, array $screenshots)
    {
        foreach($screenshots as $screenshot){
            $screenshot->storeAs("film/$folder_name/screenshots", $screenshot->getClientOriginalName(), 'public');
        }
    }

    public static function getScreenshots(string $folder_name): array
    {
        $path = "film/" . str_replace(" ", "-", $folder_name) . "/screenshots";
        $files = Storage::disk('public')->files($path);

        return array_map(fn($file) => env('APP_URL')."/HomeCinema/storage/app/public/$file", $files);
    }

    public static function deleteFilmFolder(string $folder_name)
    {
        $folder = "film/" . str_replace(' ', '-', $folder_name);
        if (Storage::disk('public')->exists($folder)) {
            Storage::disk('public')->deleteDirectory($folder);
        }
    }

    public static function deletePoster(string $folder_name): void
    {
        $folder = "film/" . str_replace(' ', '-', $folder_name);
        $files = Storage::disk('public')->files($folder);

        foreach ($files as $file) {
            if (!str_contains($file, '/screenshots/')) {
                Storage::disk('public')->delete($file);
            }
        }
    }

    public static function deletePersonPhoto($path)
    {
        Storage::disk('public')->delete("people/$path");
    }

    public static function deleteScreenshots(string $folder_name): void
    {
        $path = "film/" . str_replace(' ', '-', $folder_name) . "/screenshots";
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->deleteDirectory($path);
        }
    }
}