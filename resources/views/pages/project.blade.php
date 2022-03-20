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
                  Project detail
                </h1>
                <ol class='breadcrumb'>
                  <li>
                    <a href='index.html'>
                      <i class='fa fa-home'></i>
                    </a>
                  </li>
                  <li>
                    <a href='portfolio.html'>
                      Portolio
                    </a>
                  </li>
                  <li class='active'>{{ $project->name }}</li>
                </ol>
                <div class='directional'>
                  <a class='has-tooltip left' data-placement='right' data-title='Previous project' href='#'>
                    <i class='fa fa-chevron-left'></i>
                  </a>
                  <a class='has-tooltip right' data-placement='left' data-title='Next project' href='#'>
                    <i class='fa fa-chevron-right'></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id='main-content'>
          <div class='container'>
            <div class='row'>
              <div class='col-md-push-9 col-sm-push-8 col-sm-4 col-md-3'>
                <nav class='sidebar sidebar-fixed'>
                  <button class='btn btn-block btn-contrast sidebar-toggle' data-target='.sidebar-collapse' data-toggle='collapse' type='button'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                  </button>
                  <div class='sidebar-collapse collapse'>
                    <div class='box'>
                      <h3 class='title'>Info</h3>
                      <ul class='list-unstyled list-padded'>
                        <li>
                          <i class='fa fa-user text-contrast fa fa-fixed-width'></i>
                          {{ $project->client }}
                        </li>
                        <li>
                          <i class='fa fa-calendar text-contrast fa fa-fixed-width'></i>
                          {{date('l j.M.Y h:i:s a ',strtotime($project->created_at))}}
                        </li>
                      </ul>
                    </div>
                    <div class='box'>
                      <h3 class='title'>Services</h3>
                      <ul class='list-unstyled list-padded'>
                        <li>
                          <i class='fa fa-check text-contrast fa fa-fixed-width'></i>
                          Webdesign
                        </li>
                        <li>
                          <i class='fa fa-check text-contrast fa fa-fixed-width'></i>
                          HTML / CSS
                        </li>
                        <li>
                          <i class='fa fa-check text-contrast fa fa-fixed-width'></i>
                          Marketing
                        </li>
                        <li>
                          <i class='fa fa-check text-contrast fa fa-fixed-width'></i>
                          Identity
                        </li>
                      </ul>
                    </div>
                    <div class='box'><a class="btn btn-contrast btn-bordered btn-block" href="{{ url('/projects') }}">Show project</a></div>
                  </div>
                </nav>
              </div>
              <div class='col-md-pull-3 col-sm-pull-4 col-sm-8 col-md-9'>
                <div class='row'>
                  <div class='col-sm-12'>
                    <h2 class='no-mg-t'>{{ $project->name }}</h2>
                    <p class='lead lead-sm'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu justo vitae odio rhoncus pulvinar. Morbi ac congue orci. Nulla tristique ultrices purus vel egestas. Aliquam viverra volutpat facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin commodo sit amet eros non dapibus. Aenean vitae fermentum diam.</p>
                    <div class='row'>
                      <div class='col-sm-12'>
                        <img alt="" width="100%" height="500" src="/storage/images/{{$project->image}}" />
                      </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu justo vitae odio rhoncus pulvinar. Morbi ac congue orci. Nulla tristique ultrices purus vel egestas. Aliquam viverra volutpat facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin commodo sit amet eros non dapibus. Aenean vitae fermentum diam.</p>
                    <hr class='hr-invisible hr-half'>
                    
                    <hr class='hr-invisible hr-half'>
                    <p>Aliquam viverra volutpat facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin commodo sit amet eros non dapibus. Aenean vitae fermentum diam.</p>
                  </div>
                </div>
                <div class='row'>
                  <div class='col-sm-12'>
                    <div class='page-header page-header-with-icon'>
                      <i class='fa fa-leaf'></i>
                      <h2>
                        Related work
                      </h2>
                    </div>
                    <div class='row portfolio-boxes'>
                      <div class='carousel carousel-default slide carousel-auto' id='carousel-related-work'>
                        <div class='carousel-inner'>
                          <div class='item active'>
                            <div class='col-sm-4 portfolio-box'>
                              <a href='portfolio_detail.html'>
                                <div class='image-link'>
                                  <i class='fa fa-search'></i>
                                  <img class="img-responsive img-rounded center-block" alt="Etiam vestibulum" width="262" height="171" src="http://placehold.it/262x171" />
                                </div>
                                <h3 class='title'>Etiam vestibulum</h3>
                                <p class='category'>Photography</p>
                              </a>
                            </div>
                            <div class='col-sm-4 portfolio-box'>
                              <a href='portfolio_detail.html'>
                                <div class='image-link'>
                                  <i class='fa fa-link'></i>
                                  <img class="img-responsive img-rounded center-block" alt="Malesuada" width="262" height="171" src="http://placehold.it/262x171" />
                                </div>
                                <h3 class='title'>Malesuada</h3>
                                <p class='category'>Webdesign</p>
                              </a>
                            </div>
                            <div class='col-sm-4 portfolio-box'>
                              <a href='portfolio_detail.html'>
                                <div class='image-link'>
                                  <i class='fa fa-search'></i>
                                  <img class="img-responsive img-rounded center-block" alt="Dictum vulputate" width="262" height="171" src="http://placehold.it/262x171" />
                                </div>
                                <h3 class='title'>Dictum vulputate</h3>
                                <p class='category'>Identity</p>
                              </a>
                            </div>
                          </div>
                          
                          <div class='item'>
                            <div class='col-sm-4 portfolio-box'>
                              <a href='portfolio_detail.html'>
                                <div class='image-link'>
                                  <i class='fa fa-search'></i>
                                  <img class="img-responsive img-rounded center-block" alt="Malesuada" width="262" height="171" src="http://placehold.it/262x171" />
                                </div>
                                <h3 class='title'>Malesuada</h3>
                                <p class='category'>Webdesign</p>
                              </a>
                            </div>
                            <div class='col-sm-4 portfolio-box'>
                              <a href='portfolio_detail.html'>
                                <div class='image-link'>
                                  <i class='fa fa-search'></i>
                                  <img class="img-responsive img-rounded center-block" alt="Cullamcorper" width="262" height="171" src="http://placehold.it/262x171" />
                                </div>
                                <h3 class='title'>Cullamcorper</h3>
                                <p class='category'>Marketing</p>
                              </a>
                            </div>
                            <div class='col-sm-4 portfolio-box'>
                              <a href='portfolio_detail.html'>
                                <div class='image-link'>
                                  <i class='fa fa-search'></i>
                                  <img class="img-responsive img-rounded center-block" alt="Etiam posuere" width="262" height="171" src="http://placehold.it/262x171" />
                                </div>
                                <h3 class='title'>Etiam posuere</h3>
                                <p class='category'>Identity, Marketing</p>
                              </a>
                            </div>
                          </div>
                        </div>
                        <ol class='carousel-indicators'>
                          <li class='active' data-slide-to='0' data-target='#carousel-related-work'></li>
                          <li data-slide-to='1' data-target='#carousel-related-work'></li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='fade' id='scroll-to-top'>
          <i class='fa fa-chevron-up'></i>
        </div>
      </div>
   @endsection