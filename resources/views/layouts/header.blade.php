<!-- Main Header -->
<header class="main-header" >
    <!-- Logo -->
      <a href="#" class="logo" style="height: 80px;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img style="height: 80px; width: 100%;" src="{{ asset('images/logo.png')}}"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img style="height: 80px; width: 100%;" src="{{ asset('images/adm.png')}}"></span>
      </a>
    <nav class="navbar navbar-static-top">
     
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="navbar-custom-menu" style="display: inline-block;">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                  
                    
                <p class="dropdown-toggle" data-toggle="dropdown">
                  <img height="160px" width="160px" class="user-image" src="{{ asset('images/user4-128x128.jpg')}}" alt="Small">
                     <span class="hidden-xs">
                      <small>
                            Welcome User
                        </small>
                     </span>
                </p>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
  
  
                          <img width="150px" height="150px" class="img-circle" src="{{ asset('images/user4-128x128.jpg')}}" alt="Small img 20170303 180515">
  
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                      <div class="col-xs-4 text-center">
  
                      </div>
                      <div class="col-xs-4 text-center">
  
                      </div>
                      <div class="col-xs-4 text-center">
                      </div>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a class="btn btn-default btn-flat" href="/auth/edit">Account Settings</a>
                        <br>
  
                      </div>
                      <div class="pull-right">
                         <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                    </li>
  
                  </ul>
                
              </li>
            </ul>
          </div>
    </nav>
  </header>