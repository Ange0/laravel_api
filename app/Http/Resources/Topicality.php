<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Topicality extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title'=>'Titre de mon actualité :'.$this->title, // je modifie un peu le rendu du titre 
            'content'=> substr($this->content,0,20).' ... ' // je veux garder les 20 premiers caratères  du contenu
        ];
    }
}
