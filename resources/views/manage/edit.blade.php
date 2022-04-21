@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
<div class="card" style="width: 60%;">
    <div class="card-header" style="font-size: 20px; text-align: center; font-weight: bold">
        Edit Resume Item
    </div>
    <div class="card-body">
        <div class="text-center" style="font-size: 15px; font-weight: bold;">
            Do you want to edit your resume item?
        </div>
        <form method="post" action="{{ route('manage.editItem', ($data['item']->itemId)) }}">
            @csrf
            <div style="margin-bottom: 10px;">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" class="form-control" value="{{ $data['item']->name }}" required autocomplete="name" maxlength="150">
            </div>

            <div style="margin-bottom: 10px;">
                <label for="description">Description</label>
                <input id="description" type="text" name="description" class="form-control" value="{{ $data['item']->description }}" required autocomplete="description" maxlength="250">
            </div>

            <div>
                <label for="section">Section</label>
                <select name="section" required class="form-control">
                    @if($data['item']->section == "1")
                        <option value="1" selected>Skills</option>
                        <option value="2">Education</option>
                        <option value="3">Work Experience</option>
                        <option value="4">Project, Etc</option>
                    @elseif($data['item']->section == "2")
                        <option value="1">Skills</option>
                        <option value="2" selected>Education</option>
                        <option value="3">Work Experience</option>
                        <option value="4">Project, Etc</option>
                    @elseif($data['item']->section == "3")
                        <option value="1">Skills</option>
                        <option value="2">Education</option>
                        <option value="3" selected>Work Experience</option>
                        <option value="4">Project, Etc</option>
                    @elseif($data['item']->section == "4")
                        <option value="1">Skills</option>
                        <option value="2">Work Experience</option>
                        <option value="3">Education</option>
                        <option value="4" selected>Project, Etc</option>
                    @endif
                </select>
            </div>
            <div class="form-group col text-center" style="align-items: center; margin-top: 5%">
                <button type="submit" class="btn btn-primary">Edit Resume</button>
                <a class="btn btn-danger" href="{{ route('manage.index') }}">Cancel</a>
            </div>
        </form>
    </div>

</div>
@endsection