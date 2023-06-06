<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::latest('created_at')->get();

        return Inertia::render('Gestion/Experience/Index', [
            "experiences" => $experiences
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Gestion/Experience/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExperienceRequest $request)
    {
        $request->validated();
        Experience::create([
            "nom" => $request->nom,
            "entreprise" => $request->entreprise,
            "lien_entreprise" => $request->lien_entreprise,
            "contrat" => $request->contrat,
            "outils" => $request->outils,
            "environnement" => $request->environnement,
            "debut_experience" => $request->debut_experience,
            "fin_experience" => $request->fin_experience,
            "statut" => $request->statut
        ]);
        return redirect()->route('experience.index')->with("message", "Experience mis a jour avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return Inertia::render('Gestion/Experience/Edit', [
            'experience' => $experience
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(ExperienceRequest $request, Experience $experience)
    {
        $experience->update($request->validated());
        return redirect()->route('experience.index')->with("message", "Experience mis a jour avec succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
