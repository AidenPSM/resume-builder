@extends('layouts.app')

@section('content')
<div class="container" 
    style="
        display: flex; 
        flex-flow: column nowrap; 
        align-items: center;"
>
    <div class="card" style="width: 70%; min-width: 500px;">
        <div class="card-header" style="text-align: center;">
            <div style="font-size: 40px; font-weight: bold;"> 
                @foreach($data['resumes'] as $item)
                    {{$item->name}}'s Resume
                @endforeach
            </div>
            <div style="font-size: 25px; font-weight: bold;">
                @foreach($data['resumes'] as $item)
                Email: <a href="mailto:{{$item->email}}">{{$item->email}}</a>
                @endforeach
            </div>
        </div>
        <div class="card-body">
            <div class="card" style="margin-bottom: 3%; text-align: center;">
                <div class="card-header" style="font-size: 20px; text-align: center; font-weight: bold;">Skills</div>
                @foreach($data['skills'] as $skill)
                    <div class="list-group-item">
                        <div style="font-weight: bold; font-size: 18px">{{$skill->name}}</div>
                        <div>{{$skill->description}}</div>
                    </div>
                @endforeach
            </div>
            <div class="card" style="margin-bottom: 3%; text-align: center;">
                <div class="card-header" style="font-size: 20px; text-align: center; font-weight: bold;">Education</div>
                @foreach($data['education'] as $education)
                    <div class="list-group-item">
                        <div style="font-weight: bold; font-size: 18px">{{$education->name}}</div>
                        <div>{{$education->description}}</div>
                    </div>
                @endforeach
            </div>
            <div class="card" style="margin-bottom: 3%; text-align: center;">
                <div class="card-header" style="font-size: 20px; text-align: center; font-weight: bold;">Work</div>
                @foreach($data['work'] as $work)
                    <div class="list-group-item">
                        <div style="font-weight: bold; font-size: 18px">{{$work->name}}</div>
                        <div>{{$work->description}}</div>
                    </div>
                @endforeach
            </div>
            <div class="card" style="margin-bottom: 3%; text-align: center;">
                <div class="card-header" style="font-size: 20px; text-align: center; font-weight: bold;">Awards, Projects, Certifications</div>
                @foreach($data['project'] as $project)
                    <div  class="list-group-item">
                        <div style="font-weight: bold; font-size: 18px">{{$project->name}}</div>
                        <div>{{$project->description}}</div>
                    </div>
                @endforeach
            </div>
            <div class="card" style="margin-bottom: 1%; text-align: center;">
                <div class="card-header" style="font-size: 20px; text-align: center; font-weight: bold;">References</div>
                <div class="list-group-item">
                    <div>Matthew Redmond - NSCC</div>
                    <div><a href="mailto:matthew.Redmond@nscc.ca">matthew.Redmond@nscc.ca</a></div>
                </div>
                <div class="list-group-item">
                    <div>Sean Morrow - NSCC</div>
                    <div><a href="mailto:sean.morrow@nscc.ca">sean.morrow@nscc.ca</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection