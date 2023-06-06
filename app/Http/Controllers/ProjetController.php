<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Tache;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



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
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'duree' => 'required',
            'budget' => 'required',
        ]);

        $task = new Tache();
        $task->nom = $request->input('nom');
        $task->description = $request->input('description');
        $task->duree = $request->input('duree');
        $task->budget = $request->input('budget');
        $task->project_id = $id;

        $task->save();

        return redirect()->back()->with('success', 'La tâche a été ajoutée au projet avec succès.');
    }





    public function getProjectByIdForAddTask(Request $request, $id)
    {
        $tasks = Tache::where('project_id', $id)->get();

        $project = Project::findOrFail($id);

        $users = User::where('project_id', $project->id)->get();

        // return view('manager.become-manager', compact('project', 'tasks'));
        return view('manager.become-manager', compact('project', 'tasks', 'users'));
    }



    public function addMemberToProject(Request $request, $id)
    {
        $userEmail = $request->input('email');
        $user = User::where('email', $userEmail)->first();

        if (!$user) {
            User::create([
                "nom" => "Doe",
                "prenom" => "John",
                "email" => $userEmail,
                "telephone" => '0000000000',
                "password" => Hash::make("password"),
                "role" => 'Client',
            ]);
            return $this->addMemberToProject($request, $id);
        }

        $user->project_id = $id;
        $user->save();


        $tasks = Tache::where('project_id', $id)->get();

        $project = Project::findOrFail($id);

        $users = User::where('project_id', $project->id)->get();


        // return view('manager.become-manager', compact('project', 'tasks'));

        return view('manager.become-manager', compact('project', 'tasks', 'users'))->with('success', 'Membre ajouté au projet avec succès.');

        // return redirect()->route('manager.become-manager', $projectId)-
    }

    public function manageProject($project_id, $manager_id)
    {
        $projectx = Project::findOrFail($project_id);
        $projectx->manager = $manager_id;
        $projectx->managed = true;
        $projectx->save();


        $tasks = Tache::where('project_id', $project_id)->get();

        $project = Project::findOrFail($project_id);

        $users = User::where('project_id', $project->id)->get();
        $projects = Project::all();


        return redirect('/manager/projects',)->with('success', 'Projet géré avec succès.');
        //creturn view('manager.dashboard', compact('project', 'tasks', 'users', 'projects'))->with('success', 'Membre ajouté au projet avec succès.');
    }


    public function getManagerProjects()
    {
        $projects = Project::all();
        return view('manager.projects', compact('projects'));
    }
}
