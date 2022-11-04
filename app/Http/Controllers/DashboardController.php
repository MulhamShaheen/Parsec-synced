<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\Project;

class DashboardController extends Controller
{
    public function projects(Request $request){
      $user = Auth::user();
      $role = $user->role == 1? "Employer" : "Activist";

      $projects = Project::get()->all();
      return Inertia::render('Dashboard/Projects/'.$role,[
        'projects' => $projects,
      ]);
    }
}
