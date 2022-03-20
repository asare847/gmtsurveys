@extends('layouts.app')
@section('content')
<div id='wrapper'>
    
      <div id='main-content'>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-12'>
              <div class='page-header page-header-with-icon'>
                <i class='fa fa-user'></i>
                <h2>
                  User Login
                </h2>
              </div>
              <div class='row'>
                <div class='col-sm-12'>
                              <form class="form form-horizontal" method="post" action="#" accept-charset="UTF-8"><input name="authenticity_token" type="hidden" /><div class='form-group'>
                    <label class='col-md-3 control-label' for='input-text'>Email</label>
                    <div class='col-md-5'>
                      <input class='form-control' id='input-text' placeholder='' type='text'>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-md-3 control-label' for='input-password'>Password </label>
                    <div class='col-md-5'>
                      <input class='form-control' id='input-password' placeholder='Password ' type='password' >
                    </div>
                  </div>
                  
                  <div class='form-group'>
                    <label class='col-md-3 control-label' for='input-disabled-input-1'>Disabled input</label>
                    <div class='col-md-3'>
                        <button class='btn btn-contrast' type='submit'>
                            <i class='icon-save'></i>
                            submit
                          </button>
                    </div>
                  </div>
                  

                  
                  </form>
      
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
    
  </div>
  @endsection