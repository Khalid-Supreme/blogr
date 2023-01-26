<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class Post extends Model
{
    // use HasFactory;
    public static function allPosts(){
        $files = File::files( resource_path('posts/'));
        return array_map(fn($file) => $file->getContents(), $files);
    }
    public static function find($slug)
{

    
    if (!file_exists($path = resource_path("posts/{$slug}.html"))) {

            throw new ModelNotFoundException();
        
    }
    
    return cache()->remember( "posts.{$slug}",10, function () use ($path) {
            
        var_dump($path);
            return file_get_contents($path);

        }
    );
}
}
