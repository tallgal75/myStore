<div class="header-area">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <div class="site_logo visible-sm visible-xs">
                        <a class="navbar-brand" href="/"><img src="assets/images/logo2.png" alt="Logo"></a>
                    </div>
                    <!--
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                -->
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                
                    <ul class="nav navbar-nav navbar-right nav-side">  
                       <!--<li class="location"><a href="#"><span class="flaticon-map"></span> english <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>-->
                       @guest
                            <li class="location"><a href="/login">login/register <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>      
                        @else
                           <li> 
                            <a href="/account/{{ Auth::user()->id }}"><span class="fa fa-user"></span> {{ Auth::user()->name }} </a>
                            </li>
                            <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              <span class="fa fa-logout"></span> Logout
                            </a>

                            <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endguest            
                    </ul> 
                    <ul class="nav navbar-nav navbar-left">  
                        <li class="mega-menu-item hidden-xs">
                            <a href="/">home</a>
                        </li>
                        <li><a href="/page/about">about</a></li>  
                        <li class="dropdown hidden-xs">
                            <a href="/shop" class="dropdown-toggle" data-toggle="dropdown">shop <span class="caret"></span></i></a>
                            <ul class="dropdown-menu">
                              @foreach($categories AS $cat)
                                <li><a href="/shop/{{ $cat->category }}">{{ $cat->category}}</a></li>
                              @endforeach
                            </ul>
                        </li>
                        <li><a href="/blog">blog</a></li>  
                        <li><a href="/page/contact">contact</a></li>                       
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </div>