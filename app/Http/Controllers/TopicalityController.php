<?php

namespace App\Http\Controllers;

use App\Http\Resources\Topicality as ResourcesTopicality;
use App\Topicality;
use Illuminate\Http\Request;

class TopicalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return  ResourcesTopicality::collection(Topicality::orderByDesc('created_at')->get()); //on recupère tous nos actualites en triant par ordre decroissant de la date de creation et on faire passer dans ResourcesTopicality::collection pour apporter des modification avant le rendu
       //$t= Topicality::orderByDesc()->get(); // 
       //return $t->toJson(JSON_PRETTY_PRINT);// je serialise en json puis je retourne
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Topicality::create($request->all())){
            return response()->json([ 
                'status'=>true,
                'message'=>'Votre article été ajouté avec succès'
            ],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function show(Topicality $topicality)
    {

        return new ResourcesTopicality($topicality); // va permettre d'agit sur les donnée avant de les envoyés
        return $topicality; // va retourner l'actualité a partir de son id
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topicality $topicality)
    {
        if($topicality->update($request->all())){
            return response()->json([ 
                'status'=>true,
                'message'=>'Votre article été modifié avec succès'
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topicality $topicality)
    {
        if($topicality->delete()){ // suppression d' une actualité particulère
            return response()->json([ 
                'status'=>true,
                'message'=>'Votre article été supprimé avec succès'
            ]);
        }
    }
}
