@extends('layouts.app')

@section('content')
<div class="card-header" style="font-size: 30px; text-align: center; font-weight: bold">
    Resume Builder - Admin
</div>
<div class="container" style="display: flex; text-align: center; align-items: center;">
    <table class="table table-striped">
        <thead>
            <tr style="font-size: 20px">
                <th scope="col">Name:</th>
                <th scope="col">Section:</th>
                <th scope="col">Detail:</th>
                <th scope="col">Date:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['resume-item'] as $item)
                <tr>
                    <td class="text-center" style="font-weight: bold;">{{$item->name}}</td>
                    <td>
                        @if($item->section == "1")
                            Skill
                        @elseif($item->section == "2")
                            Education
                        @elseif($item->section == "3")
                            Work Experience
                        @elseif($item->section == "4")
                            Project, Etc
                        @endif
                    </td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->created_at}}</td>
                    <td style="font-size: 12px;">
                        <a href="{{ route('manage.edit', $item->itemId) }}" class="btn btn-primary" style="font-size: 11px; padding: 5px margin-top: 2px;">Edit</a><br>
                        <form action="{{ route('manage.delete', $item->itemId)}}" method="post">
                            {{ method_field('DELETE')}}
                            @csrf
                            <button type="submit" class="btn btn-danger" style="font-size: 11px; padding: 5px margin-top: 2px;">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection