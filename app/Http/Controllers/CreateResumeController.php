<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ResumeItem;
use App\Models\Resume;
use App\Models\CreateResume;

class CreateResumeController extends Controller
{
    public function create(Request $request) {
        $resume = new CreateResume();
        $resume->name = request('name');
        $resume->email = request('email');
        $resume->save();

        $id = DB::table('create_resume')->latest('cResumeId')->first()->cResumeId;
        
        $skills = $request->input('skills');
        foreach($skills as $skill) {
            $rel = new Resume();
            $rel->itemId = $skill;
            $rel->cResumeId = $id;
            $rel->save();
        }
        
        $education = $request->input('education');
        foreach($education as $edu) {
            $rel = new Resume();
            $rel->itemId = $edu;
            $rel->cResumeId = $id;
            $rel->save();
        }
        
        $work = $request->input('work');
        foreach($work as $wor) {
            $rel = new Resume();
            $rel->itemId = $wor;
            $rel->cResumeId = $id;
            $rel->save();
        }

        $project = $request->input('project');
        foreach($project as $pro) {
            $rel = new Resume();
            $rel->itemId = $pro;
            $rel->cResumeId = $id;
            $rel->save();
        }

        return redirect()->route('resume', $id);
    }
}
