<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationRequest;
use App\Models\Formation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::all();
        return Inertia::render('Gestion/Formation/Index', [
            'formations' => $formations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Gestion/Formation/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormationRequest $request)
    {
        $request->validated();
        $formation = Formation::create([
            "nom" => $request->nom,
            "libelle" => $request->libelle,
            "diplome" => $request->diplome,
            "ecole" => $request->ecole,
            "description" => $request->description,
            "debut_formation" => $request->debut_formation,
            "fin_formation" => $request->fin_formation,
            "statut" => $request->statut

        ]);

        if ($formation) {
            return  redirect()->route('formation.index')->with("message", "Utilisateur cree avec succes");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        return Inertia::render('Gestion/Formation/Edit', [
            'formation' => $formation
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(FormationRequest $request, Formation $formation)
    {
        // dd($user);
        $formation->update($request->validated());
        return redirect()->route('formation.index')->with("message", "Formation mis a jour avec succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        //
    }
}
