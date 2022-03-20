@extends('layouts.app')
@section('content')
      <div id='main' role='main'>
        <div id='main-content-header'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <h1 class='title' style="color:black">
                 
                  <small></small>
                </h1>
              </div>
            </div>
          </div>
        </div>
        <div id='main-content'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon no-mg-t'>
                  <i class='fa fa-briefcase'></i>
                  <h2>
                    Top services
                    <small></small>
                  </h2>
                </div>
                <div class='panels-wrapper'>
                  <div class='row panels'>
                    <div class='col-sm-4 panel-item'>
                      <a class='panel panel-image' href='#'>
                        <div class='panel-icon'>
                          <i class='fa fa-clock-o icon'></i>
                        </div>
                        <div class='panel-heading'><img class="img-responsive-sm" alt="Construction survey" width="768" height="300" src="{{asset('assets/images/map.jpg')}}" /></div>
                        <div class='panel-body'>
                          <h3 class='panel-title'>CONSTRUCTION SURVEY</h3>
                          <p>We stake out proposed roads, buildings, utilities using state of the art survey equipment and technology. The survey team ensures proposed projects are executed with maximum accuracy in order to meet the needs of our clients</p>
                        </div>
                      </a>
                    </div>
                    <div class='col-sm-4 panel-item'>
                      <a class='panel panel-image' href='#'>
                        <div class='panel-icon'>
                          <i class='fa fa-clock-o icon'></i>
                        </div>
                        <div class='panel-heading'><img class="img-responsive-sm" alt="Cadastral survey" width="768" height="300" src="{{asset('assets/images/terrain.jpg')}}" /></div>
                        <div class='panel-body'>
                          <h3 class='panel-title'>CADASTRAL SURVEY</h3>
                          <p>GMT Surveys provide cadastral survey to clients in order to define the limits of their properties and ownership for legal purposes. Our clients receive cadastral plans certified by our Licensed Surveyor and the Regional Director of Surveys.</p>
                        </div>
                      </a>
                    </div>
                    <div class='col-sm-4 panel-item'>
                      <a class='panel panel-image' href='#'>
                        <div class='panel-icon'>
                          <i class='fa fa-clock-o icon'></i>
                        </div>
                        <div class='panel-heading'><img class="img-responsive-sm" alt="Topographic survey" width="768" height="300" src="{{asset('assets/images/2.jpg')}}" /></div>
                        <div class='panel-body'>
                          <h3 class='panel-title'>TOPOGRAPHIC SURVEY</h3>
                          <p>We conduct topographic survey in order to measure and map out physical features such as streams, roads, houses and elevations at suitable scales. This type of survey is often carried out using total stations and or Real time kinematics (RTK). 
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa fa-cloud'></i>
                  <h2>
                    Other services
                  </h2>
                </div>
                <div class='icon-boxes icon-boxes-lg'>
                  <div class='row'>
                    <div class='col-sm-6 icon-box'>
                      <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
                        <i class='fa fa-truck text-white'></i>
                      </div>
                      <div class='content'>
                        <h3 class='title'>Spatial Planning</h3>
                        <p>GMT Surveys produce master plans for clients in the real estate business. We offer advisory services, monitoring and evaluation of projects, on behalf of the client. We also offer land administration services including database management. </p>
                      </div>
                    </div>
                    <div class='col-sm-6 icon-box'>
                      <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
                        <i class='fa fa-wrench text-white'></i>
                      </div>
                      <div class='content'>
                        <h3 class='title'>Sales of Land</h3>
                        <p>We sell lands to and for clients. We ensure  land sold are dispute free. </p>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-sm-6 icon-box'>
                      <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
                        <i class='fa fa-tag text-white'></i>
                      </div>
                      <div class='content'>
                        <h3 class='title'>Dispute Resolution</h3>
                        <p>We help resolve dispute on  land boundries. We employ the state of art surveying tools to give accurate details</p>
                      </div>
                    </div>
                    <div class='col-sm-6 icon-box'>
                      <div class='icon icon-wrap icon-circle icon-lg contrast-bg'>
                        <i class='fa fa-shield text-white'></i>
                      </div>
                      <div class='content'>
                        <h3 class='title'>Farm Survey</h3>
                        <p>We serve both the private and public sectors of agriculture</p>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
                   
                    
                  </div>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa fa-star'></i>
                  <h2>Top features</h2>
                </div>
                <div class='text-boxes'>
                  
                    
                    <div class='col-sm-12'>
                      
                    <div class='table-responsive'>
                      <table class='table table-striped'>
                        <thead>
                          <tr>
                            <th>
                              <i class='fa fa-certificate text-contrast'></i>
                              Project Name
                            </th>
                            <th>
                              <i class='fa fa-map-marker text-contrast'></i>
                              Location
                            </th>
                            <th>
                              <i class='fa fa-user text-contrast'></i>
                              Client 
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                      @foreach ( $projects as $project)
                      <tr >
                        <td class='warning'>
                          {{ $project->name }} 
                        </td>
                        <td class="success">
                          {{ $project->location }}
                        </td>
                        <td class="info">
                           {{ $project->client }} 
                        </td>
                      </tr>
                      @endforeach
                          

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              
			 
					  
					  
                  </div>
                  <hr>
                  <div class='row text-box'>
                    
                    <div class='col-sm-6 col-sm-pull-6'>
                     
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