<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ResumeItem;
use App\Models\Resume;
use App\Models\CreateResume;


class AdminController extends Controller
{
    /**
     * Show all the resume items
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        
        $data['resume-item'] = DB::table('resume_item')->get();
        $data['skills'] = DB::table('resume_item')->where('section', "1")->get();
        $data['education'] = DB::table('resume_item')->where('section', "2")->get();
        $data['work'] = DB::table('resume_item')->where('section', "3")->get();
        $data['project'] = DB::table('resume_item')->where('section', "4")->get();

        return view('manage.index', ['data' => $data]);
    }

    public function generate() {
        $data['resume'] = DB::table('create_resume')->get();
        return view('manage.generate', ['data' => $data]);
    }

    public function edit($id) {
        $data['item'] = DB::table('resume_item')->where('itemId', $id)->first();
        return view('manage.edit', ['data' => $data]);
    }

    public function editSubmit($id) {
        $item = ResumeItem::find($id);
        $item->name = request('name');
        $item->description = request('description');
        $item->section = request('section');
        $item->save();
        return redirect('manage');
    }

    public function delete($id) {
        Resume::where('itemId', $id)->delete();
        ResumeItem::destroy($id);
        return redirect('manage');
    }
}
