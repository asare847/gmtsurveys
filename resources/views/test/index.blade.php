<ol>
@foreach ($projects as $project )
    <li><strong>{{ $project->name }}</strong><br><img src="/storage/images/{{$project->image}}" height="40px" width="60px"><br>{{ $project->location }}<br>{{ $project->client }}</li>
@endforeach
</ol>