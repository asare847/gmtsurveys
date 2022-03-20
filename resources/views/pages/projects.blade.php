@extends('layouts.app')
@section('content')
  <body class=''>
    <div id='wrapper'>
     
      <div id='main' role='main'>
        <div id='main-content-header'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <h1 class='title'>
                  Projects
                  <small>List of Projects</small>
                </h1>
              </div>
            </div>
          </div>
        </div>
        <div id='main-content'>
          <div class='container'>
            <div class='row' id='portfolio-filter'>
              <div class='col-sm-12'>
                <ul class='nav nav-pills'>
                  <li class='active'><a data-filter="*" href="#">All</a></li>
                  <li><a data-filter=".portfolio-filter-photography" href="#">Photography</a></li>
                  <li><a data-filter=".portfolio-filter-identity" href="#">Identity</a></li>
                  <li><a data-filter=".portfolio-filter-webdesign" href="#">Webdesign</a></li>
                  <li><a data-filter=".portfolio-filter-marketing" href="#">Marketing</a></li>
                </ul>
              </div>
            </div>
            <div class='row portfolio-boxes' id='portfolio-container'>
            @foreach ($projects as $project)
              <div class='col-sm-6 portfolio-box portfolio-filter-photography portfolio-item'>
                <a href='project/{{$project->id}}' >
                  <div class='image-link'>
                    <i class='fa fa-link'></i>
                    <img class="img-responsive img-rounded center-block" alt={{ $project->name }}ight="382" src="/storage/images/{{$project->image}}" />
                  </div>
                  <h3 class='title'>{{ $project->name }}</h3>
                  <p class='category'>{{ $project->client }}</p>
                </a>
              </div>
            @endforeach
            </div>
          </div>
        </div>
        <div class='fade' id='scroll-to-top'>
          <i class='fa fa-chevron-up'></i>
        </div>
      </div>
      
    </div>
   
@endsection