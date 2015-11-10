<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Norwich Dragons</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/libs.css">
</head>
<body>

<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Norwich Dragons</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Players <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li class="dropdown-header">Players Menu</li>
                <li role="separator" class="divider"></li>
                <li><a href="/players/create">Create Player</a></li>
                <li><a href="/players/" >View Players</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li class="dropdown-header">Events Menu</li>
                <li role="separator" class="divider"></li>
                <li><a href="/events/create">Create Event</a></li>
                <li><a href="/events/">View Events</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teams <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li class="dropdown-header">Teams Menu</li>
                <li role="separator" class="divider"></li>
                <li><a href="/teams/create">Create Team</a></li>
                <li><a href="/teams/">View Teams</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

<script>
    $('.dropdown-toggle').dropdown()
</script>
<script src="/js/libs.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>


@include('flash')
</html>