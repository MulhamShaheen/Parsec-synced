<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Faculty;
use App\Models\Info;
use App\Models\User;
use App\Models\Employer;
use App\Models\GalleryPhoto;
use App\Models\Image;

use Inertia\Inertia;


class AccountController extends Controller
{
    public function accountManager(Request $request)
    {
        $user = Auth::user();
        $gallery = $user->gallery()->get()->all();

        if ($user->isEmployer()) {
            $employer = $user->aboutEmployer()->get()[0];
            $projects = $user->projects()->get()->all();

            $data['info'] = $employer?  $employer->toArray(): null;
            $data['projects'] = $projects?  $projects: null;

            return Inertia::render('Auth/Account/Employer',[
                'info'=> $data,
                'gallery'=>$gallery,
                'title'=> "Account"
            ]);
        }

        $info = $user->info()->get()[0];
        $major = null;
        $faculty = null;
        $resume = null;
        $projects = [];
        $data = [];

        $data['info'] = $info?  $info->toArray(): null ;


        return Inertia::render('Auth/Account/Activist',[
            'info'=>$data,
            'gallery'=>$gallery,
            'title'=>"Account"            
        ]);

    }

    public function accountEdit(Request $request){
        $user = Auth::user();
        $role = $user->role == 1? "Employer" : "Activist";
        $gallery = $user->gallery()->get()->toArray();
        $info = $user->info()->get()[0];
        // dd($info);
        return Inertia::render('Auth/Account/Edit/'.$role,[
            'info'=> $info,
            'gallery' => $gallery,
            'title'=> "Edit account"
        ]);
    }

    public function handleEditRequest(Request $request){

        $data = $request->all();

        $user = Auth::user();
        if($data['userData']){
            $user->update([$data['title'] => $data['value']]);
            return;
        }

        $info = $user->info();
        $info->update([$data['title'] => $data['value']]);
        
    }

    public function viewProjects(Request $request){
        $user = Auth::user();
        $role = $user->role == 1? "Employer" : "Activist";
        $hasProjects = [];
        if($user->projects()->exists()){
            $projects = $user->projects()->get()->all();
            $hasProjects = $projects;
        }

        return Inertia::render('Auth/Account/Projects/'.$role,[
            "hasProjects" => $hasProjects,
        ]);
    }

    public function viewReplies(Request $request)
    {

        $user = Auth::user();
        $role = $user->role == 1? "Employer" : "Activist";
        $replies = [];

        if($role == "Activist" && $user->replies()->exists()){
            $replies = $user->replies()->get()->all();
        }
        else if($role == "Employer"){
            $replies = $user->replies();
        }
        foreach ($replies as $reply) {
            $user = $reply->user()->get()->first();
            $info = $user->info()->get()->first();
            $project = $reply->project()->get()->first();
            $reply->user = $info->lastname . " " . $info->firstname . " " . $info->middlename ;
            $reply->user_icon = $user->prof_picture;
            $reply->project_icon = $project->icon;
        }
        return Inertia::render('Auth/Account/Replies/'.$role,[
            "replies" => $replies,
        ]);
    }

    public function viewGallery(Request $request){

        $user = Auth::user();
        dd([1,2,3]);
        dd($request->user()->email);
    }

    public function updateGallery(Request $request)     
    {
        $user = Auth::user();
        if($request->hasFile('images')){
            $title = $request->title;
            $images = $request->images;
            foreach ($images as $image) {
                $file = $image;
                $filename = $file->getClientOriginalName();
                $file->storeAs('/'.$request->user()->id.'/', $filename, 'public_gallery');
            
            }
            
            $gallery_photo = Image::create([
              'title'=>$filename,
              'filename' => $filename,
              'order' => 0,
              'user_id' => $user->id,
            ]);
    
            $gallery_photo->save();
            
          }
    }
    
    public function uploadToGallery(Request $request)
    {
      if($request->hasFile('gallery_photo')){

        $title = $request->title;
        $file = $request->file('gallery_photo');
        $filename = $file->getClientOriginalName();
        $file->storeAs('/'.$request->user()->id.'/', $filename, 'public_gallery');

        $gallery_photo = GalleryPhoto::create([
          'title'=>$title,
          'filename' => $filename,
          'order' => 0,
          'user_id' => $request->user_id,
        ]);

        $gallery_photo->save();
        
      }
    }    
}
