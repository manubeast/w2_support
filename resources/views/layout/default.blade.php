<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Sample') - W2 Support System</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
  </head>
  <body>
  <header class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          <img class="logo" src="/images/whiti-logo.png" width="60px" height="80px"/>
          <img class="logo" src="/images/wel-logo.png" width="150px" height="60px" />
          <p href="/" id="header_title">W2 Student Learning Support System</p>
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/help">Help</a></li>
              <li><a href="/about">About</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="container">
      @yield('content')
    </div>    
  </body>
</html>