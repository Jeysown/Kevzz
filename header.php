<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="index.php">Kevzzz</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php" style="cursor: pointer;">Reports</a></li>
    <li><a href="report-maps.php" style="cursor: pointer;">Maps</a></li>
    <li><a href="temporary-report.php">Temporary</a></li>
    <li><a href="prone-maps.php">Prone</a></li>
                    <li class="dropdown">
                                       <a href="http://phpoll.com/login" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
                                       <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                                           <div class="col-lg-12">
                                               <div class="text-center"><h3><b>Log In</b></h3></div>
                                               <form id="ajax-login-form" action="http://phpoll.com/login/process" method="post" role="form" autocomplete="off">
                                                   <div class="form-group">
                                                       <label for="username">Username</label>
                                                       <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                                   </div>

                                                   <div class="form-group">
                                                       <label for="password">Password</label>
                                                       <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                                   </div>

                                                   <div class="form-group">
                                                       <div class="row">
                                                           <div class="col-xs-7">
                                                               <input type="checkbox" tabindex="3" name="remember" id="remember">
                                                               <label for="remember"> Remember Me</label>
                                                           </div>
                                                           <div class="col-xs-5 pull-right">
                                                               <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                                                           </div>
                                                       </div>
                                                   </div>

                                                   <div class="form-group">
                                                       <div class="row">
                                                           <div class="col-lg-12">
                                                               <div class="text-center">
                                                                   <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                                               </form>
                                           </div>
                                       </ul>
                                   </li>
  </ul>
</div>
</div>
</nav>
