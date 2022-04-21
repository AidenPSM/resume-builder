@extends('layouts.app')

@section('content')
<div class="card-header" style="font-size: 30px; text-align: center; font-weight: bold">
    Resume Builder - Admin
</div>
<div class="container" style="display: flex; flex-flow: column nowrap; align-items: center;">
    <table class="table table-striped">
        <thead>
            <tr style="font-size: 20px">
                <th scope="col">Username:</th>
                <th scope="col">Email:</th>
                <th scope="col">Date:</th>
                <th scope="col">Option:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['resume'] as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->created_at}}</td>
                    <td style="font-size: 12px;">
                        <a class="btn btn-primary" href="{{ route('resume', $item->cResumeId) }}">
                            View
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection