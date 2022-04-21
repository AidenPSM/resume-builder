@extends('layouts.app')

@section('content')
<div class="container" style="
    display: flex; 
    flex-flow: column nowrap; 
    align-items: center;"
>
    <div class="card" style="width: 70%; min-width: 650px;" >
        <div class="card-header" style="font-size: 30px; text-align: center; font-weight: bold">
            Resume Builder
        </div>
        <div class="card-body" >
            <form method="POST" action="{{ route('create') }}">
                @csrf
                <div class="card-text" style="margin-bottom: 5%;">
                    <h3 style="font-weight: bold">Tell me Who this resume is for?</h3>
                    <div class="form-row" style="margin-top:20px; text-align: center;">
                        <div class="col" style="margin-bottom: 10px;">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Full Name" style="width: 30%;" maxlength="150">
                        </div>
                        <div class="col">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email@email.com" style="width: 30%;" maxlength="300">
                        </div>
                    </div>
                </div>
                <div class="card-text" style="margin-bottom: 5%; text-align: center;">
                    <h3 style="font-weight: bold; text-align: center;">What Interests You?</h3>
                    <div class="form-row" style="text-align: center; margin-top: 20px;">
                        <div class="card" style="margin-bottom: 5%">
                            <div class="card-header">
                                Skill
                            </div>
                            <select class="form-control" multiple style="height: 200px; width: 100%;" id="skills" name="skills[]" required>
                                @foreach($data['skills'] as $skill)
                                    <option class="dropdown-item" value="{{$skill->itemId}}">{{$skill->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card" style="margin-bottom: 5%">
                            <div class="card-header">
                                Education
                            </div>
                            <select class="form-control" multiple style="height: 200px; width: 100%;" id="education" name="education[]" required>
                                @foreach($data['education'] as $education)
                                    <option class="dropdown-item" value="{{$education->itemId}}">{{$education->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card" style="margin-bottom: 5%">
                            <div class="card-header">
                                Work Experience
                            </div>
                            <select class="form-control" multiple style="height: 200px; width: 100%;" id="work" name="work[]" required>
                                @foreach($data['work'] as $work)
                                    <option class="dropdown-item" value="{{$work->itemId}}">{{$work->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Award, Projects, and Other Awesomeness...
                            </div>
                            <select class="form-control" multiple style="height: 200px; width: 100%;" id="project" name="project[]" required>
                                @foreach($data['project'] as $project)
                                    <option class="dropdown-item" value="{{$project->itemId}}">{{$project->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group col text-center" style="align-items: center; margin-bottom: 5%">
                    <button type="submit" class="btn btn-primary" style="width: 40%; ">Build Resume</button>
                    <input type="reset" class="btn btn-danger" style="width: 40%;"  value="Start Over">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection