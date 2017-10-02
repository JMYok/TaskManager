@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row">
     @if($projects)
            @foreach($projects as $project)
         <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
            
            <ul>
                @include('projects/_deleteForm')
                <li>
                    <!-- 模态框触发键 -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editModal-{{$project->id}}">
                     <i class="fa fa-btn fa-cog"></i>
                    </button>
                </li>
            </ul>    

            <a href="{{route('projects.show',$project->name)}}">
            <img src="{{asset('/thumbnails/'.$project->thumbnail)}}" alt="{{$project->name}}">
            </a>

         <div class="caption">
         
         <a href="{{route('projects.show',$project->name)}}">
            <h4>{{$project->name}}</h4>   
         </a>   
         
         </div>

            @include('projects/_editProjectModal')

            </div>
        </div>
            @endforeach
     @endif
        <div class="col-md-10 col-md-offset-1">
            @include('projects/_createProjectModal')
        </div>
    </div>
</div>
@endsection