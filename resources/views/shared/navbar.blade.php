<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{!! action('HomeController@index') !!}">Learning Laravel</a>
        </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/tickets/create">Contact Us</a></li>
                    <li><a href="/tickets">List All Tickets</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            @if (Auth::check()) 
                                {{ Auth::user()->name }} 
                            @else 
                                Login/Sign-up 
                            @endif                           
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                        @if (Auth::check())
                            <li><a href="#profile">Profile</a></li>                             
                            @if (Auth::user()->hasRole('admin'))
                               <li>
                                    <a href="/admin">Admin Control Panel</a>
                               </li>     
                            @endif  
                            <hr>                       
                            <li>                                
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <li><a href="/register">Register</a></li>
                            <li><a href="/login">Login</a></li>  
                        @endif                          
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>