<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function index() {
        $data['resume-item'] = DB::table('resume_item')->get();
        $data['skills'] = DB::table('resume_item')->where('section', "1")->get();
        $data['education'] = DB::table('resume_item')->where('section', "2")->get();
        $data['work'] = DB::table('resume_item')->where('section', "3")->get();
        $data['project'] = DB::table('resume_item')->where('section', "4")->get();

        return view('index', ['data' => $data]);
    }

    public function resume($id) {
        $data['resume'] = DB::table('create_resume')->where('cResumeId', $id)->first();
        $rels = DB::table('resume_connect')->where('cResumeId', $id)->get();
        
        $skills = [];
        $education = [];
        $work = [];
        $project = [];
        
        
        foreach($rels as $rel) {
            $itemId = $rel->itemId;
            $item = DB::table('resume_item')->where('itemId', $itemId)->first();
            if ($item->section == "1") {
                array_push($skills, $item);
            } else if ($item->section == "2") {
                array_push($education, $item);
            } else if ($item->section == "3") {
                array_push($work, $item);
            } else if ($item->section == "4") {
                array_push($project, $item);
            }
        }
        
        $data['resumes'] = DB::table('create_resume')->where('cResumeId', $id)->get();
        $data['skills'] = $skills;
        $data['education'] = $education;
        $data['work'] = $work;
        $data['project'] = $project;
        
        return view('resume', ['data' => $data]);
    }
}
