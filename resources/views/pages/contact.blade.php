@extends('layouts.app')
@section('content')
 
      <div id='main' role='main'>
        
        <div id='main-content-header'>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <h1 class='title'>
                  
                </h1>
                <ol class='breadcrumb'>
                  <li>
                    <a href='{{ url('/') }}'>
                      <i class='fa fa-home'></i>
                    </a>
                  </li>
                  <li class='active'>Contact</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div id='main-content'>
          <div id='map-canvas'><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31700.9832215758!2d-1.6728419750318966!3d6.693541063621765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96ecf647e379%3A0x90c109508ae4fbc1!2sGMT%20SURVEYS!5e0!3m2!1sen!2suk!4v1641330272479!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-12'>
                <p class='lead text-center no-mg-b'>Get intouch with us and let's talk </p>
              </div>
            </div>
            <div class='row'>
              <div class='col-sm-12'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa fa-info-circle'></i>
                  <h2>
                    Contact info
                  </h2>
                </div>
                <div class='row text-center'>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa fa-map-marker text-white'></i>
                    </div>
                    <h3>Address</h3>
                    <ul class='list-unstyled'>
                      <li>inside the challenge house</li>
                      <li>Adum - Kumasi</li>
                      <li>Ghana</li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa fa-phone text-white'></i>
                    </div>
                    <h3>Telephone</h3>
                    <ul class='list-unstyled'>
                      <li><a href="tel:+012345678910">+233 208140954</a></li>
                      <li><a href="tel:+012345678911">+233 507713704</a></li>
                      <li><a href="tel:+012345678911">+233 244647252</a></li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa fa-envelope-o text-white'></i>
                    </div>
                    <h3>E-Mail</h3>
                    <ul class='list-unstyled'>
                      <li><a href="mailto:info@gmtsurveys.com">info@gmtsurveys.com</a></li>
                      <li><a href="mailto:support@gmtsurveys.com">support@gmtsurveys.com</a></li>
                      <li><a href="mailto:director@gmtsurveys.com">director@gmtsurveys.com</a></li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <div class='icon-wrap icon-circle contrast-bg icon-md'>
                      <i class='fa fa-clock-o text-white'></i>
                    </div>
                    <h3>Business hours</h3>
                    <ul class='list-unstyled'>
                      <li>
                        Monday - Friday
                        &mdash;
                        <strong>08:00 - 16:00</strong>
                      </li>
                      <li>
                        Saturday
                        &mdash;
                        <strong>Closed</strong>
                      </li>
                      <li>
                        Sunday
                        &mdash;
                        <strong>Closed</strong>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2'>
                <div class='page-header page-header-with-icon'>
                  <i class='fa fa-envelope'></i>
                  <h2>Contact form</h2>
                </div>
                <form class='form form-validation form-contact' method='post'>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <div class='alert alert-success form-contact-success hidden'>Thanks! Your message has been successfully sent!</div>
                      <div class='alert alert-danger form-contact-error hidden'>Ooops! There was an error sending your message.</div>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-sm-6'>
                      <div class='form-group control-group'>
                        <input class='form-control' data-rule-required='true' name='name' placeholder='Name' type='text'>
                        <!-- / this field is required for simple anti spam function, don't remove it! -->
                        <input class='form-control' name='human' placeholder='Are you human?' style='display: none;' type='text'>
                      </div>
                    </div>
                    <div class='col-sm-6'>
                      <div class='form-group control-group'>
                        <input class='form-control' data-rule-email='true' data-rule-required='true' name='email' placeholder='E-Mail' type='email'>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <div class='form-group control-group'>
                        <textarea class='form-control' data-rule-required='true' name='message' placeholder='Your message...'></textarea>
                      </div>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-sm-12'>
                      <button class='btn btn-contrast btn-block form-contact-submit' data-loading-text="&lt;i class='fa fa-refresh fa-spin'&gt;&lt;/i&gt; Sending..." type='submit'>
                        Send message
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class='fade' id='scroll-to-top'>
          <i class='fa fa-chevron-up'></i>
        </div>
      </div>
      <footer id='footer'>
        <div id='footer-main'>
          <div class='container'>
            <div class='row'>
              <div class='col-md-3 col-sm-6 info-box'>
                <h2 class='title'>About us</h2>
                <p class='no-mg-b'>GMT Surveys is a mordern and dynamic Land and Engineering Surveying Company. Talk to us about your projects.</p>
              </div>
              <div class='col-md-3 col-sm-6 info-box'>
                <h2 class='title'>Contact</h2>
                <div class='icon-boxes'>
                  <div class='icon-box'>
                    <div class='icon icon-wrap'>
                      <i class='fa fa-map-marker'></i>
                    </div>
                    <div class='content'>
                     inside challenge house,
                      <br>
                      Adum Kumasi, Ghana
                    </div>
                  </div>
                  <div class='icon-box'>
                    <div class='icon icon-wrap'>
                      <i class='fa fa-phone'></i>
                    </div>
                    <div class='content'>
                      <a href='tel:+233 208140954 /0507713704 '>+233 208140954 / 0507713704 </a>
                    </div>
                  </div>
                  <div class='icon-box'>
                    <div class='icon icon-wrap'>
                      <i class='fa fa-envelope'></i>
                    </div>
                    <div class='content'><a href="mailto:info@gmtsurveys.com">info@gmtsurveys.com</a></div>
                  </div>
                  <div class='icon-box'>
                    <div class='icon icon-wrap'>
                      <i class='fa fa-globe'></i>
                    </div>
                  <div class='content'><a href="#">www.gmtsurveys.com</a></div>
                  </div>
                </div>
              </div>
              <div class='col-md-3 col-sm-6 info-box'>
                <h2 class='title'>Photostream</h2>
                <ul class='list-unstyled list-inline image-list-box'>
                  <li>
                    <a href='#'>
                      <img alt="Jednotka" width="50" height="50" src="http://placehold.it/50x50" />
                    </a>
                  </li>
                  <li>
                    <a href='#'>
                      <img alt="Jednotka" width="50" height="50" src="http://placehold.it/50x50" />
                    </a>
                  </li>
                  <li>
                    <a href='#'>
                      <img alt="Jednotka" width="50" height="50" src="http://placehold.it/50x50" />
                    </a>
                  </li>
                  <li>
                    <a href='#'>
                      <img alt="Jednotka" width="50" height="50" src="http://placehold.it/50x50" />
                    </a>
                  </li>
                  <li>
                    <a href='#'>
                      <img alt="Jednotka" width="50" height="50" src="http://placehold.it/50x50" />
                    </a>
                  </li>
                  <li>
                    <a href='#'>
                      <img alt="Jednotka" width="50" height="50" src="http://placehold.it/50x50" />
                    </a>
                  </li>
                </ul>
              </div>
              <div class='col-md-3 col-sm-6 info-box social-box'>
                <h2 class='title'>Latest tweets</h2>
                <div class='icon-boxes'>
                  <div class='icon-box'>
                    <div class='icon icon-wrap'>
                      <i class='fa fa-twitter text-contrast'></i>
                    </div>
                    <div class='content'>
                      <p>
                        Phasellus vulputate lobortis sem. Mauris id velit in urna.
                        <br>
                        <a class='time' href='#'>
                          <i>1 hour ago</i>
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class='icon-box'>
                    <div class='icon icon-wrap'>
                      <i class='fa fa-twitter text-contrast'></i>
                    </div>
                    <div class='content'>
                      <p>
                        Etiam luctus, dui congue tempus blandit, dui.
                        <br>
                        <a class='time' href='#'>
                          <i>3 hours ago</i>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endsection