<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;
use App\Models\Project;


class TacheController extends Controller
{
    public function index()
    {
        $taches = Tache::all();
        return view('taches.index', compact('taches'));
    }

    public function create()
    {
        $projets = Project::all();
        return view('taches.create', compact('projets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'duree' => 'required',
            'budget' => 'required',
            'projet_id' => 'required',
        ]);

        Tache::create($request->all());

        return redirect()->route('taches.index')->with('success', 'La tâche a été créée avec succès.');
    }


    public function addTaskToProject(Request $request, $projectId)
    {
        // Validation des données de la requête
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'duree' => 'required',
            'budget' => 'required',
        ]);

        // Récupération du projet par son ID
        $project = Project::findOrFail($projectId);

        // Création d'une nouvelle tâche liée au projet
        $task = new Tache([
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'duree' => $request->input('duree'),
            'budget' => $request->input('budget'),
        ]);

        // Association de la tâche au projet
        $project->tasks()->save($task);

        return redirect()->back()->with('success', 'La tâche a été ajoutée avec succès au projet.');
    }
        
}
