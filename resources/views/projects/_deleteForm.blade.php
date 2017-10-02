{!!Form::open(['route'=>['projects.destroy',$project->id],'method'=>'DELETE'])!!}
<li>
<button type="submit">
<i class="fa fa-btn fa-close"></i>
</button>
</li>
{!!Form::close()!!}