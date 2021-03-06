@extends('Admin.master')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>AdminLTE - Dashboard</title>
        <meta charset="UTF-8">
        
        
    </head>
    <body>
        <nav class="navbar navbar-theme bg-blue navbar-static-top" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><span class="fa fa-shield"></span> AdminLTE</a>
                <a href="#" class='lte-menu-sm visible-xs navbar-brand'>
                    <span class="fa fa-list"></span>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i></a>
                        <ul class="dropdown-menu navbar-selector">
                            <li role="presentation" class="dropdown-header font-primary noClick">Navbar Color</li>
                            <li class="font-primary" data-color="bg-primary"><a href="#"><i class="fa fa-gear"></i> Primary</a></li>
                            <li class="font-blue" data-color="bg-blue"><a href="#"><i class="fa fa-gear"></i> Blue <small class="text-muted">(default)</small></a></li>
                            <li class="font-light-blue" data-color="bg-light-blue"><a href="#"><i class="fa fa-gear"></i> Light Blue</a></li>
                            <li class="font-green" data-color="bg-green"><a href="#"><i class="fa fa-gear"></i> Green</a></li>
                            <li class="font-yellow" data-color="bg-yellow"><a href="#"><i class="fa fa-gear"></i> Yellow</a></li>
                            <li class="font-purple" data-color="bg-purple"><a href="#"><i class="fa fa-gear"></i> Purple</a></li>
                            <li class="font-red" data-color="bg-red"><a href="#"><i class="fa fa-gear"></i> Red</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullhorn"></i> <span class="badge bg-green">3</span></a>
                        <ul class="dropdown-menu navbar-dropdown">
                            <li class="dropdown-header">                                
                                <i class="fa fa-warning"></i> You have 4 notifications
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user"></i> 
                                    <span>New user registration</span>
                                </a>
                            </li>
                            <li class="primary">
                                <a href="#">
                                    <i class="fa fa-users"></i> 
                                    <span>New user registration</span>
                                </a>
                            </li>
                            <li class="warning">
                                <a href="#">
                                    <i class="fa fa-warning"></i> 
                                    <span>New user registration</span>
                                </a>
                            </li>
                            <li class="info">
                                <a href="#">
                                    <i class="fa fa-info-circle"></i> 
                                    <span>New user registration</span>
                                </a>
                            </li>
                            <li class="info2">
                                <a href="#">
                                    <i class="fa fa-info"></i> 
                                    <span>New user registration</span>
                                </a>
                            </li>
                            <li class="dropdown-footer"><a href="#">View all notifications</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Friends</a></li>
                            <li><a href="#">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="..."/>
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class="lte-main-content">
            <!-- side bar -->
            <div class="lte-sidebar col-md-2 col-sm-3 hidden-xs">
                <ul class="lte-sidebar-menu">
                    <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="lte-tree">
                        <a href="#"><i class="fa fa-bar-chart-o"></i> Charts <i class="pull-right fa fa-angle-right"></i></a>
                        <ul class="lte-tree-menu">
                            <li><a href="charts/flot.html"><i class="fa fa-bar-chart-o"></i> Flot</a></li>
                            <li><a href="charts/jqplot.html"><i class="fa fa-bar-chart-o"></i> JQplot</a></li>
                            <li><a href="charts/xcharts.html"><i class="fa fa-bar-chart-o"></i> xCharts</a></li>
                        </ul>
                    </li>
                    <li><a href="ui.html"><i class="fa fa-tint"></i> User Interface </a></li>
                    <!--<li><a href="widgets.html"><i class="fa fa-gear"></i> Widgets</a></li>-->
                    <li class="lte-tree">
                        <a href="#"><i class="fa fa-pagelines"></i> Example Pages <i class="pull-right fa fa-angle-right"></i></a>
                        <ul class="lte-tree-menu">
                            <li><a href="examples/invoice.html"><i class="fa fa-money"></i> Invoice</a></li>
                            <li><a href="examples/login.html"><i class="fa fa-sign-in"></i> Login</a></li>
                            <li><a href="examples/register.html"><i class="fa fa-lock"></i> Register</a></li>
                            <li><a href="examples/blank_page.html"><i class="fa fa-paperclip"></i> Blank Page</a></li>
                            <li><a href="examples/404.html"><i class="fa fa-unlink"></i> 404 Error Page</a></li>
                            <li><a href="examples/500.html"><i class="fa fa-unlink"></i> 500 Error Page</a></li>
                        </ul>
                    </li>
                    <li><a href="forms.html"><i class="fa fa-edit"></i> Forms</a></li>
                    <li><a href="typography.html"><i class="fa fa-text-width"></i> Typography</a></li>
                    <li><a href="calendar.html"><i class="fa fa-calendar"></i> Calendar</a></li>

                    <li class="lte-tree">
                        <a href="#"><i class="fa fa-pagelines"></i> Multilevel Dropdown<i class="pull-right fa fa-angle-right"></i></a>
                        <ul class="lte-tree-menu">
                            <li class="lte-tree">
                                <a href="#"><i class="fa fa-pagelines"></i> Level 1<i class="pull-right fa fa-angle-right"></i></a>
                                <ul class="lte-tree-menu">
                                    <li class="lte-tree">
                                        <a href="#"><i class="fa fa-pagelines"></i> Level 2<i class="pull-right fa fa-angle-right"></i></a>
                                        <ul class="lte-tree-menu">
                                            <li><a href="#"><i class="fa fa-pagelines"></i> Level 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.side-bar-->
            <!-- main content -->
            <div class="lte-main-container col-md-10 col-sm-9">
                <div class="page-header">
                    <i class="fa fa-dashboard"></i> Dashboard <small>Custom dashboard #1</small>
                    <div class="btn-group pull-right">
                        <button id="reportrange" class='btn btn-default'>
                            <i class="fa fa-calendar"></i>
                            <span>Date Range Picker</span> <b class="caret"></b>
                        </button>
                    </div>
                </div>
                <!-- /.page-header -->
                <!-- alert info -->
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Welcome to AdminLTE.</strong> Don't forget to check the navbar variant colors using the <i class='fa fa-gears'></i> icon on the top right. Enjoy!
                </div>
                <!-- /.alert -->
                <div class="lte-dashboard">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#">
                                <div class="small-box bg-primary">
                                    <i class="fa fa-users"></i>
                                    <p class="small-box-text">
                                        7,900
                                        <small>Members</small>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#">
                                <div class="small-box bg-red">
                                    <i class="fa fa-bell"></i>
                                    <p class="small-box-text">
                                        16
                                        <small>Alerts</small>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#">
                                <div class="small-box bg-purple">
                                    <i class="fa fa-briefcase"></i>
                                    <p class="small-box-text">
                                        $6,700
                                        <small>Income</small>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#">
                                <div class="small-box bg-light-blue">
                                    <i class="fa fa-inbox"></i>
                                    <p class="small-box-text">
                                        16,000
                                        <small>Orders</small>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#">
                                <div class="small-box bg-green">
                                    <i class="fa fa-camera-retro"></i>
                                    <p class="small-box-text">
                                        900
                                        <small>Images</small>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <a href="#">
                                <div class="small-box bg-yellow">
                                    <i class="fa fa-comments"></i>
                                    <p class="small-box-text">
                                        18,000
                                        <small>Comments</small>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- chart - long-->
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="box box-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-users"></i> Visitors</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>

                                </div>
                                <div class="box-body">
                                    <div id="visitors-chart" class="lte-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="box box-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-cloud"></i> Server Load</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>

                                </div>
                                <div class="box-body">
                                    <div id="barchart" class="lte-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row -->
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="box box-blue box-height-contorl">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-tasks"></i> Tasks Progress</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>

                                </div>
                                <div class="box-body">
                                    <p>Task #1: <span class="pull-right">40%</span></p>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <p>Task #2:<span class="pull-right">20%</span></p>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <p>Task #3:<span class="pull-right">60%</span></p>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <p>Task #4:<span class="pull-right">80%</span></p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                    <p>Task #5:<span class="pull-right">40%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <p>Task #6:<span class="pull-right">20%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <p>Task #7:<span class="pull-right">60%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <p>Task #8:<span class="pull-right">80%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button class="btn btn-purple pull-right"><i class="fa fa-plus"></i> Add Task</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="box box-blue box-height-contorl">
                                <div class="box-header">
                                    <h3 class="box-title"><i class='fa fa-cloud'></i> Latest Comments</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>

                                </div>
                                <div class='table-container'>
                                    <table class="table">
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Comment</th>
                                            <th>Date</th>
                                        </tr>
                                        <tr>
                                            <td><img class='img-circle img-responsive' src='http://adjuntos.estamosrodando.com/imagen/64-brad-pitt-122477.jpg' alt='User image'/></td>
                                            <td>John Doe</td>
                                            <td>What a great theme!</td>
                                            <td>8 Dec. 2013</td>
                                        </tr>
                                        <tr>
                                            <td><img class='img-circle img-responsive' src='http://media.steampowered.com/steamcommunity/public/images/avatars/8f/8fdc0f8281f91bfcd0cba6fc6ba603ac27b996a8_medium.jpg' alt='User image'/></td>
                                            <td>John Doe</td>
                                            <td>What a great theme!</td>
                                            <td>8 Dec. 2013</td>
                                        </tr>
                                        <tr>
                                            <td><img class='img-circle img-responsive' src='http://adjuntos.estamosrodando.com/imagen/64-brad-pitt-122477.jpg' alt='User image'/></td>
                                            <td>John Doe</td>
                                            <td>What a great theme!</td>
                                            <td>8 Dec. 2013</td>
                                        </tr>
                                        <tr>
                                            <td><img class='img-circle img-responsive' src='http://media.steampowered.com/steamcommunity/public/images/avatars/8f/8fdc0f8281f91bfcd0cba6fc6ba603ac27b996a8_medium.jpg' alt='User image'/></td>
                                            <td>John Doe</td>
                                            <td>What a great theme!</td>
                                            <td>8 Dec. 2013</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class='box-footer'>
                                    <button class='btn btn-green pull-right'><i class="fa fa-minus"></i> Clear</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ./row-->

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="box box-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-list"></i> TODO List</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>

                                </div>
                                <div class="box-body clear-pad">
                                    <ul class="todo-list" data-addBtn="#todoAddBtn" data-addText="#todoAddText">
                                        <li class="heading">Important</li>
                                        <li><input type="checkbox"/> Lorem Ipsum is simply dummy text <div class="pull-right label label-danger">Today</div></li>
                                        <li><input type="checkbox"/> Lorem Ipsum is simply dummy text <div class="pull-right label label-danger">Today</div></li>
                                        <li class="done"><input type="checkbox" checked/> Lorem Ipsum is simply dummy <div class="pull-right label label-warning">Today</div></li>
                                        <li><input type="checkbox"/> Lorem Ipsum is simply dummy text <div class="pull-right label label-warning">Tomorrow</div></li>
                                        <li><input type="checkbox"/> Lorem Ipsum is simply dummy text <div class="pull-right label label-warning">Tomorrow</div></li>
                                        <li class="heading">Upcoming</li>
                                        <li><input type="checkbox"/> Lorem Ipsum is simply dummy text <div class="pull-right label label-info">Next week</div></li>
                                        <li><input type="checkbox"/> Lorem Ipsum is simply dummy text <div class="pull-right label label-info">Next week</div></li>
                                        <li><input type="checkbox"/> Lorem Ipsum is simply dummy text <div class="pull-right label label-success">Done</div></li>
                                        <li><input type="checkbox"/> Lorem Ipsum is simply dummy text <div class="pull-right label label-success">Done</div></li>                                        
                                    </ul>
                                </div>   
                                <div class="box-footer">
                                    <form method="post" action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="todoAddText">
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-yellow" id="todoAddBtn"><i class="fa fa-plus"></i></button>
                                            </div><!-- /btn-group -->
                                        </div><!-- /input-group -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="box box-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-calendar"></i> Full Calendar</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>

                                </div>
                                <div class="box-body">
                                    <div id="fullcalendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="box box-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-envelope-o"></i> Compose Email</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>

                                </div>
                                <div class="box-body">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="emailto" placeholder="Email to:"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                                        </div>
                                        <div>
                                            <textarea class="textarea" placeholder="Enter text ..." style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd;"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer">
                                    <button class="pull-right btn btn-light-blue" id="sendEmail">Send</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class='fa fa-comments'></i> Chat</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>

                                </div>
                                <div class="box-body">
                                    <ul class="media-list">
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="http://adjuntos.estamosrodando.com/imagen/64-brad-pitt-122477.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">John Doe</h4>
                                                What a nice theme!
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="http://media.steampowered.com/steamcommunity/public/images/avatars/8f/8fdc0f8281f91bfcd0cba6fc6ba603ac27b996a8_medium.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">John Doe</h4>
                                                What a nice theme!
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="http://adjuntos.estamosrodando.com/imagen/64-brad-pitt-122477.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">John Doe</h4>
                                                What a nice theme!
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="http://media.steampowered.com/steamcommunity/public/images/avatars/8f/8fdc0f8281f91bfcd0cba6fc6ba603ac27b996a8_medium.jpg">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">John Doe</h4>
                                                What a nice theme!
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class='box-footer'>
                                    <div class="input-group">
                                        <input type="text" class="form-control">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-blue"><i class="fa fa-plus"></i></button>
                                        </div><!-- /btn-group -->
                                    </div><!-- /input-group -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-plus"></i> Quick Post</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>

                                </div>
                                <div class="box-body">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Title"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Tags"/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="1">General</option>
                                                <option value="2">Sports</option>
                                                <option value="3">Code</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Post" style="height: 150px"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer">
                                    <button class="pull-right btn btn-primary">Post</button>
                                    <button class="pull-right btn btn-red">Save as Draft</button>
                                </div>
                            </div><!-- box -->
                        </div><!-- ./col -->
                    </div>
                    <!-- ./row-->
                </div>
                <!-- /.dashboard -->
            </div>

        </div>
        <!-- ./.lte-main-content -->
        <footer>
            Copyright &copy; 2013 - <a>Preview</a> - <a>Purchase</a> - Built with <a target="blank" href="http://getbootstrap.com">Bootstrap 3</a>
        </footer>


        <!-- JQuery 1.10.2 -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- LTE Tree -->
        <script src="js/lteTree.js" type="text/javascript"></script>
        <!-- LTE App -->
        <script src="js/lteApp.js" type="text/javascript"></script>
        <!-- Sparklines -->
        <script src="js/sparklines/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- bootstrap WYSIWYG -->
        <script src="js/wysiwyg/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- bootstrap Moment -->
        <script src="js/moment.js"></script>
        <!-- bootstrap Date Range Picker -->
        <script src="js/daterangepicker.js"></script>
        <!-- Full Calendar -->
        <script src="js/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jqplot charts -->
        <script src="js/jqplot/jquery.jqplot.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jqplot/plugins/jqplot.dateAxisRenderer.min.js"></script>
        <script type="text/javascript" src="js/jqplot/plugins/jqplot.logAxisRenderer.min.js"></script>
        <script type="text/javascript" src="js/jqplot/plugins/jqplot.canvasTextRenderer.min.js"></script>
        <script type="text/javascript" src="js/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
        <script type="text/javascript" src="js/jqplot/plugins/jqplot.highlighter.min.js"></script>
        <script type="text/javascript" src="js/jqplot/plugins/jqplot.barRenderer.min.js"></script>
        <script type="text/javascript" src="js/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
        <script type="text/javascript" src="js/jqplot/plugins/jqplot.pointLabels.min.js"></script>
        <script type="text/javascript">
            $(function() {
                //Full Calendar
                $('#fullcalendar').fullCalendar({
                    events: [
                        {
                            title: 'event1',
                            start: '2013-12-01'
                        },
                        {
                            title: 'event2',
                            start: '2013-12-05',
                            end: '2013-12-07'
                        },
                        {
                            title: 'event3',
                            start: '2013-12-09 12:30:00',
                            allDay: false // will make the time show
                        }
                    ]
                });

                //Line chart 1
                $.jqplot._noToImageButton = true;
                var currYear = [["2011-08-01", 796.01], ["2011-08-02", 510.5], ["2011-08-03", 527.8],
                    ["2011-08-05", 420.36], ["2011-08-06", 219.47], ["2011-08-07", 333.82], ["2011-08-08", 660.55],
                    ["2011-08-10", 521], ["2011-08-11", 660.68], ["2011-08-12", 928.65], ["2011-08-13", 864.26],
                    ["2011-08-15", 623.86], ["2011-08-16", 1300.05], ["2011-08-17", 972.25], ["2011-08-18", 661.98],
                    ["2011-08-20", 1546.23], ["2011-08-21", 593], ["2011-08-22", 560.25], ["2011-08-23", 857.8],
                    ["2011-08-25", 1256.14], ["2011-08-26", 1033.01], ["2011-08-27", 811.63], ["2011-08-28", 735.01],
                    ["2011-08-31", 1177], ["2011-09-01", 1023.66], ["2011-09-02", 1442.31], ["2011-09-03", 1299.24],
                    ["2011-09-09", 4118.48], ["2011-09-10", 1988.11], ["2011-09-11", 1485.89], ["2011-09-12", 2681.97],
                    ["2011-09-13", 1679.56], ["2011-09-14", 3538.43], ["2011-09-15", 3118.01], ["2011-09-16", 4198.97],
                    ["2011-09-17", 3020.44], ["2011-09-18", 3383.45], ["2011-09-19", 2148.91], ["2011-09-20", 3058.82],
                    ["2011-09-25", 2785.93], ["2011-09-26", 4329.7], ["2011-09-27", 3493.72], ["2011-09-28", 4440.55]];

                var plot1 = $.jqplot("visitors-chart", [currYear], {
                    seriesColors: ["#fa3031"],
                    highlighter: {
                        show: true,
                        sizeAdjust: 1,
                        tooltipOffset: 9
                    },
                    grid: {
                        background: 'rgba(57,57,57,0.0)',
                        drawBorder: false,
                        shadow: false,
                        gridLineColor: '#eeeeee',
                        gridLineWidth: 2
                    },
                    legend: {
                        show: false,
                        placement: 'inside'
                    },
                    seriesDefaults: {
                        rendererOptions: {
                            smooth: true,
                            animation: {
                                show: true
                            }
                        },
                        showMarker: false
                    },
                    series: [
                        {
                            fill: false,
                            label: '2012',
                            shadow: false
                        }
                    ],
                    axesDefaults: {
                        rendererOptions: {
                            baselineWidth: 1.5,
                            baselineColor: '#444444',
                            drawBaseline: false
                        }
                    },
                    axes: {
                        xaxis: {
                            renderer: $.jqplot.DateAxisRenderer,
                            tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                            tickOptions: {
                                formatString: "%b %e",
                                angle: -30,
                                textColor: '#444444'
                            },
                            min: "2011-08-01",
                            max: "2011-09-30",
                            tickInterval: "7 days",
                            drawMajorGridlines: false
                        },
                        yaxis: {
                            renderer: $.jqplot.LogAxisRenderer,
                            pad: 0,
                            rendererOptions: {
                                minorTicks: 1
                            },
                            tickOptions: {
                                formatString: "%'d",
                                showMark: false
                            }
                        }
                    }
                });

                var s1 = [3200, 5633, 8921, 7842];
                var ticks = ['Jun', 'Jul', 'Aug', 'Sep'];

                var plot2 = $.jqplot('barchart', [s1], {
                    // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
                    animate: !$.jqplot.use_excanvas,
                    grid: {
                        background: 'rgba(57,57,57,0.0)',
                        drawBorder: false,
                        shadow: false,
                        gridLineColor: '#ffffff',
                        gridLineWidth: 2
                    },
                    seriesDefaults: {
                        renderer: $.jqplot.BarRenderer,
                        pointLabels: {show: true},
                        shadow: false,
                        color: "#52b9e9"
                    },
                    axes: {
                        xaxis: {
                            renderer: $.jqplot.CategoryAxisRenderer,
                            ticks: ticks
                        },
                        yaxis: {
                            show: false
                        }
                    },
                    highlighter: {show: false}
                });
                $(window).resize(function() {
                    plot1.replot({resetAxes: true});
                    plot2.replot({resetAxes: true});
                });

                //wysiwyg
                $('.textarea').wysihtml5();

                //date picker
                $('#reportrange').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'Last 7 Days': [moment().subtract('days', 6), moment()],
                                'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                );

            });
        </script>
    </body>
</html>
@endsection