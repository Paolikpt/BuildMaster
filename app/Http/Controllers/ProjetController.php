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

    public function getDashboard(){
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
        ]);

        Project::create($request->all());

        return redirect('/user_projects')->with('success', 'Le projet a été créé avec succès.');
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
        
        return redirect('/user_projects')->with('success', 'Projet supprimé avec succès');
      
    }

    public function getUserById($id){
        $project = Project::findOrFail($id);
        return view('user.updateProject', compact('project'));
    }

}
