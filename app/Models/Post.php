<?php 

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post{

    public string $title;
    public string $excerpt;
    public string $date;
    public string $body;
    public string $slug;

    public function __construct(string $title,string $excerpt, string $date, string $body, string $slug){
        $this->title = $title;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all(){
        return cache()->rememberForever('post.all', fn () => 
            collect(File::files(resource_path("posts")))
                ->map(function($file){
                    return YamlFrontMatter::parseFile($file);
                })
                ->map(function($document){
                    return new Post(
                        $document->title,
                        $document->excerpt,
                        $document->date,
                        $document->body(),
                        $document->slug
                    );
                })
                ->sortByDesc('date')
        );
    }

    public static function find($slug){
        return static::all()->firstWhere('slug',$slug);
    }

    public static function findOrFail($slug){
        $post = static::find($slug); 

        if(!$post){
            throw new ModelNotFoundException();
        }

        return $post;
    }    

}
