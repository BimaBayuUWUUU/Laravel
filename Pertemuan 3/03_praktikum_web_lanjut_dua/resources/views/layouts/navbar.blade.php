<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
        </button>
        <a href="{{URL('/home')}}" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item {{ Request::is('home') ? 'active' : '' }}"><a href="{{URL('/home')}}">HOME</a></li>
            <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}"><a href="{{URL('/about-us')}}">ABOUT US</a></li>
            <li class="nav-item {{ Request::is('portofolio') ? 'active' : '' }}"><a href="{{URL('/portofolio')}}">PORTFOLIO</a></li>
            <li class="nav-item {{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{URL('/contact-us')}}">CONTACT</a></li>
        </ul>
    </div>
</div>