<div class="container">
    <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                <span class="glyphicon glyphicon-book"> library</span></a>
            </div>
            <div class="center-block">
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"> </span></a></button>
              </form>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-bell"> Inbox</span>
                  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/inbox"><span class="glyphicon glyphicon-envelope"> Messages</a></span></li>
                    <li><a href="/notifications"><span class="glyphicon glyphicon-bullhorn"> Notifications</span></a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-user"> {{ Auth::user()->firstname }}</span>
                  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/timeline"><span class="glyphicon glyphicon-home"> Account</a></span></li>
                    <li><a href="/help"><span class="glyphicon glyphicon-book"> Help</span></a></li>
                    <li><hr></li>
                    <li><a href="/settings/account"><span class="glyphicon glyphicon-wrench"> Settings</span></a></li>
                    <li><a href="/logout"><span class="glyphicon glyphicon-off"> Logout</span></a></li>
                  </ul>
                </li>
              </ul>
            </div>
        </div>
    </div>
</div>
