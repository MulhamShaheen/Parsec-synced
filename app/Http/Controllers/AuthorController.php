<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use Inertia\Inertia;

class AuthorController extends Controller
{
    public function editProject(Request $request, $id)
    {
        $user = Auth::user();

        $project = Project::find($id);
        $employer = $project->employer->get()->first();
        $info = $user->info()->get()->first();

        if ($employer != $info)
            return abort(403);

        return Inertia::render('Projects/Edit/Author', [
            'project' => $project,
        ]);
    }

    public function updateProject(Request $request){
        $data = $request->all();

        if ($file = $request->file('icon')) {

            $now = time();

            $filename = $now . $file->getClientOriginalName();
            $file->storeAs('/', $filename, 'public_projects');

            $data['icon'] = $now . $request['icon']->getClientOriginalName();
        }

        $project= Project::find($data['project_id']);
        $project->update($data);
        $project->save();
        // dd($project);

        return redirect()->route('project.view', $data['project_id']);
    }
}
