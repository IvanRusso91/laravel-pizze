<?php

namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{

    public function ingredients(){
        return $this->belongsToMany('App\Ingredient');
    }


    protected $fillable = [
        'nome',
        'immagine',
        'prezzo',
        'popolarita',
        'vegetariana',
        // 'ingredienti',
        'slug',
    ];

    public static function slugGenerator($nome){
        $slug = Str::slug($nome, '-');
        $original_slug = $slug;
        $pizza_esistente = Pizza::where('slug', $slug)->first();
        $c = 1;
        while($pizza_esistente){
            $slug = $original_slug . '-' . $c;
            $c++;
            $pizza_esistente = Pizza::where('slug', $slug)->first();
        }
        return $slug;
    }
}
