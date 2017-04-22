<div class="">
    <h2 class=""><a href="/projects/{{$project->id}}">{{$project->name}}</a></h2>
    <p class="blog-post-meta">Published on {{$project->created_at->toFormattedDateString()}} </p>
    <p>
        Description: {{substr($project->description,0,50)}}
        {{strlen($project->description)>50 ? "..." : ""}}
    </p>
</div>

