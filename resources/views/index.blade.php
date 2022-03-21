@extends('layouts.app')
@section('content')
      <div id='main' role='main'>
        <!-- / carousel contrast -->
        <div class='hero-carousel carousel-contrast carousel-contrast-arrows carousel-contrast-pagination flexslider' id='carousel-example-2'>
          <ul class='slides'>
            <li class='item forest'>
              <div class='container'>
                <div class='row'>
                  <div class='col-lg-12 animate'>
                    <h1 class='big fadeInUp animated'>
                      <span>
                        Competent
                        &amp;
                        Efficient 
                      </span>
                    </h1>
                    <p class='normal fadeInUp animated'>
                      <span> Team of Engineers and Planners </span>
                    </p>
                    <p class='fadeInRight animated'>
                      <a class='btn btn-squared btn-contrast btn-lg' href='{{url('/services') }}'>
                        Show more
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </li>
            <li class='item sea'>
              <div class='container'>
                <div class='row'>
                  <div class='col-lg-12 animate'>
                    <h2 class='big fadeInLeftBig animated'>
                      <span>
                        Land
                        &amp;
                        Engineering Surveys
                      </span>
                    </h2>
                    <p class='normal fadeInRightBig animated'>
                      <span>Construction Survey,<br> Cadastral Survey,<br>Topographical Surveys,<br>Geographic Information System</span>
                    </p>
                    <p class='fadeInRightBig animated'>
                      <a class='btn btn-squared btn-contrast btn-lg' href='{{ url('/services') }}'>
                        Show more
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </li>
            <li class='item bokeh'>
              <div class='container'>
                <div class='row'>
                  <div class='col-lg-12 animate'>
                    <h2 class='big fadeInRightBig animated'>
                      <span>Precision</span>
                    </h2>
                    <p class='normal fadeInLeftBig animated'>
                      <span>We employ cutting edge technology</span>
                    </p>
                    <p class='fadeInUpBig animated'>
                      <a class='btn btn-squared btn-contrast btn-lg' href='{{ url('/services') }}'>
                        Show more
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div id='main-content'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <p class='lead lead-lg text-center'>We pride ourselves in our COMPETENCE to deliver ACCURATE results to our clients. GMT SURVEYS apply modern methodologies and advanced surveying equipment in rendering land surveying services</p>
              </div>
            </div>
            <div class='panels-wrapper'>
              <div class='row panels'>
                <div class='col-sm-4 panel-item'>
                  <a class='panel panel-circle-big-contrast' href='#'>
                    <div class='panel-icon'>
                      <i class='fa fa-clock-o icon'></i>
                    </div>
                    <div class='panel-body'>
                      <h3 class='panel-title'>CONSTRUCTION SURVEY</h3>
                      <p>We stake out proposed roads, buildings, utilities using state of the art survey equipment and technology. The survey team ensures proposed projects are executed with maximum accuracy in order to meet the needs of our clients</p>
                    </div>
                  </a>
                </div>
                <div class='col-sm-4 panel-item'>
                  <a class='panel panel-circle-big-contrast' href='#'>
                    <div class='panel-icon'>
                      <i class='fa fa-cog icon'></i>
                    </div>
                    <div class='panel-body'>
                      <h3 class='panel-title'>CADASTRAL SURVEY</h3>
                      <p>GMT Surveys provide cadastral survey to clients in order to define the limits of their properties and ownership for legal purposes. Our clients receive cadastral plans certified by our Licensed Surveyor and the Regional Director of Surveys. </p>
                    </div>
                  </a>
                </div>
                <div class='col-sm-4 panel-item'>
                  <a class='panel panel-circle-big-contrast' href='#'>
                    <div class='panel-icon'>
                      <i class='fa fa-rocket icon'></i>
                    </div>
                    <div class='panel-body'>
                      <h3 class='panel-title'>TOPOGRAPHIC SURVEY</h3>
                      <p>We conduct topographic survey in order to measure and map out physical features such as streams, roads, houses and elevations at suitable scales. This type of survey is often carried out using total stations and or Real time kinematics (RTK). </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            
            <!-- Creating ProjectsController and making this section dynamic -->
            <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa fa-suitcase'></i>
                  <h2>
                    Our latest projects
                    <small>We have projects all over Ghana and beyond</small>
                  </h2>
                </div>
                <div class='row portfolio-boxes'>
                  @foreach ( $projects as $project )
                  <div class='col-sm-3 col-xs-6 no-mb-t-xs portfolio-box'>
                    <a class='image-link' href='project/{{$project->id}}'>
                      <i class='fa fa-search'></i>
                      <img class="img-responsive img-rounded center-block" width="262" height="262" src="/storage/images/{{$project->image}}" />
                    </a>
                    <h3 class='title'>{{ $project->name }}</h3>
                    <p class='category'>{{ $project->location}}</p>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <!--End of Projects -->
            <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa fa-quote-right'></i>
                  <h2>Testimonials</h2>
                </div>
                <div class='row quotes'>
                  <div class='carousel carousel-default slide carousel-auto' id='carousel-testimonials'>
                    <div class='carousel-inner'>
                      <div class='item active quote'>
                        <div class='col-sm-12 text-center'>
                          <p class='lead'>They delivered a world class services on our new site. We couldn't have done it better without GMT Surveys</p>
                          <div class='author-wrapper'>
                            <p class='author'>
                              <strong>Stool Lands</strong>,
                              Asokore Mampong
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class='item quote'>
                        <div class='col-sm-12 text-center'>
                          <p class='lead'>They did an excellent job at our quary site at Barekese. We would always want to work with hem again.</p>
                          <div class='author-wrapper'>
                            <p class='author'>
                              <strong>Engineer</strong>,
                              Consar Limited
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class='item quote'>
                        <div class='col-sm-12 text-center'>
                          <p class='lead'>With GMT Surveys, my projects are sorted. I can relax and be confident of world class job done.</p>
                          <div class='author-wrapper'>
                            <p class='author'>
                              <strong>Iddrisu Fatau</strong>,
                              Public Works
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class='item quote'>
                        <div class='col-sm-12 text-center'>
                          <p class='lead'>We would always recommend GMT Surveys to any company. Their staff are real professionals and the their turn around time is great</p>
                          <div class='author-wrapper'>
                            <p class='author'>
                              <strong>Engineer</strong>,
                               Energyone Solar Company, Canada
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <ol class='carousel-indicators'>
                      <li class='active' data-slide-to='0' data-target='#carousel-testimonials'></li>
                      <li data-slide-to='1' data-target='#carousel-testimonials'></li>
                      <li data-slide-to='2' data-target='#carousel-testimonials'></li>
                      <li data-slide-to='3' data-target='#carousel-testimonials'></li>
                    </ol>
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