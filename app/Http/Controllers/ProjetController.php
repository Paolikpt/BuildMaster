<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjetController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('user.projects', compact('projects'));
    }


    public function getDashboard()
    {
        $projects = Project::all();
        return view('user.dashboard', compact('projects'));
    }





    public function create(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'type' => 'required',
            'duree' => 'required',
            'budget' => 'required',
        ]);




        $projectData = $request->all();
        $projectData['owner'] = auth()->user()->email;

        Project::create($projectData);

        return redirect('/user/projects')->with('success', 'Le projet a été créé avec succès.');
    }



    public function update(Request $request, $id)
    {

        $projectById =  Project::findOrFail($id);

        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'type' => 'required',
            'duree' => 'required',
        ]);

        $projectById->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Le projet a été mis à jour avec succès.');
    }





    public function delete($id)
    {
        // dd("lorem ipsum");

        $project = Project::findOrFail($id);
        $project->delete();

        // Rediriger ou effectuer d'autres actions après la suppression du projet

        return redirect('/user/projects')->with('success', 'Projet supprimé avec succès');
    }

    public function getUserById($id)
    {
        $project = Project::findOrFail($id);
        return view('user.updateProject', compact('project'));
    }


    public function getManagerDashboard()
    {
        $projects = Project::all();
        return view('manager.dashboard', compact('projects'));
    }


    public function addTaskToProject(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $tache = $request->input('tache');

        $project->taches()->push($tache);
        $project->save();


        return redirect('/manager/projects/manage/' +  $id, compact('project'))->with('success', 'La tâche a été ajoutée au projet.');
    }



    /*
        public function getProjectByIdForAddTask(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $tache = $request->input('tache');

        $taches = $project->taches ?? []; // Récupère le tableau de tâches actuel ou initialise un tableau vide s'il est null
        $taches[] = $tache; // Ajoute la nouvelle tâche au tableau

        $project->taches = $taches; // Met à jour le tableau de tâches
        $project->save();

        return redirect('/manager/projects/manage/' +  $id)->with('success', 'La tâche a été ajoutée au projet.');
    }
    */
}
