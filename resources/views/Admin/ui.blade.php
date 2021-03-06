@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>AdminLTE - UI</title>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <!-- Theme style -->
        <link href="theme/theme.css" rel="stylesheet" />
        <!-- Google font Signika -->
        <link href='http://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>
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
                <a class="navbar-brand" href="#"><span class="fa fa-shield"></span> AdminLTE</a>
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
                    <li><a href="#"><i class="fa fa-bullhorn"></i></a></li>
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
                    <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="lte-tree">
                        <a href="#"><i class="fa fa-bar-chart-o"></i> Charts<i class="pull-right fa fa-angle-right"></i></a>
                        <ul class="lte-tree-menu">
                            <li><a href="charts/flot.html"><i class="fa fa-bar-chart-o"></i> Flot</a></li>
                            <li><a href="charts/jqplot.html"><i class="fa fa-bar-chart-o"></i> JQplot</a></li>
                            <li><a href="charts/xcharts.html"><i class="fa fa-bar-chart-o"></i> xCharts</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="ui.html"><i class="fa fa-tint"></i> User Interface </a></li>
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

            <div class="lte-main-container col-md-10 col-sm-9">
                <!-- main content -->
                <div class="page-header">
                    <i class="fa fa-tint"></i> User Interface <small>all what you need</small>
                </div>
                <!-- /.page-header -->
                <div class="lte-dashboard">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-light-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-tint"></i> Progress bars</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>Striped Success: <span class="pull-right">40%</span></p>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <p>Striped Info:<span class="pull-right">20%</span></p>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <p>Striped Warning:<span class="pull-right">60%</span></p>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <p>Striped Danger:<span class="pull-right">80%</span></p>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                    <p>Success:<span class="pull-right">40%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <p>Info:<span class="pull-right">20%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <p>Warning:<span class="pull-right">60%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <p>Danger:<span class="pull-right">80%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                    <p>Striped Success Active: <span class="pull-right">40%</span></p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <p>Striped Info Active:<span class="pull-right">20%</span></p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <p>Striped Warning Active:<span class="pull-right">60%</span></p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <p>Striped Danger Active:<span class="pull-right">80%</span></p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div><!-- box body -->
                            </div><!-- box -->
                        </div><!-- col -->
                    </div><!-- row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-light-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-tint"></i> Buttons</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="table-container table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Color</th>
                                            <th>Regular</th>
                                            <th>Large</th>
                                            <th>Small</th>
                                            <th>Block</th>
                                        </tr>
                                        <tr>
                                            <th>Default</th>
                                            <td><button class="btn btn-default">Regular</button></td>
                                            <td><button class="btn btn-default btn-lg">Large</button></td>
                                            <td><button class="btn btn-default btn-sm">Small</button></td>
                                            <td><button class="btn btn-default btn-block">Block</button></td>
                                        </tr>
                                        <tr>
                                            <th>Primary</th>
                                            <td><button class="btn btn-primary">Regular</button></td>
                                            <td><button class="btn btn-primary btn-lg">Large</button></td>
                                            <td><button class="btn btn-primary btn-sm">Small</button></td>
                                            <td><button class="btn btn-primary btn-block">Block</button></td>
                                        </tr>
                                        <tr>
                                            <th>Blue</th>
                                            <td><button class="btn btn-blue">Regular</button></td>
                                            <td><button class="btn btn-blue btn-lg">Large</button></td>
                                            <td><button class="btn btn-blue btn-sm">Small</button></td>
                                            <td><button class="btn btn-blue btn-block">Block</button></td>
                                        </tr>
                                        <tr>
                                            <th>Light blue</th>
                                            <td><button class="btn btn-light-blue">Regular</button></td>
                                            <td><button class="btn btn-light-blue btn-lg">Large</button></td>
                                            <td><button class="btn btn-light-blue btn-sm">Small</button></td>
                                            <td><button class="btn btn-light-blue btn-block">Block</button></td>
                                        </tr>
                                        <tr>
                                            <th>Yellow</th>
                                            <td><button class="btn btn-yellow">Regular</button></td>
                                            <td><button class="btn btn-yellow btn-lg">Large</button></td>
                                            <td><button class="btn btn-yellow btn-sm">Small</button></td>
                                            <td><button class="btn btn-yellow btn-block">Block</button></td>
                                        </tr>
                                        <tr>
                                            <th>Purple</th>
                                            <td><button class="btn btn-purple">Regular</button></td>
                                            <td><button class="btn btn-purple btn-lg">Large</button></td>
                                            <td><button class="btn btn-purple btn-sm">Small</button></td>
                                            <td><button class="btn btn-purple btn-block">Block</button></td>
                                        </tr>
                                        <tr>
                                            <th>Red</th>
                                            <td><button class="btn btn-red">Regular</button></td>
                                            <td><button class="btn btn-red btn-lg">Large</button></td>
                                            <td><button class="btn btn-red btn-sm">Small</button></td>
                                            <td><button class="btn btn-red btn-block">Block</button></td>
                                        </tr>
                                        <tr>
                                            <th>Green</th>
                                            <td><button class="btn btn-green">Regular</button></td>
                                            <td><button class="btn btn-green btn-lg">Large</button></td>
                                            <td><button class="btn btn-green btn-sm">Small</button></td>
                                            <td><button class="btn btn-green btn-block">Block</button></td>
                                        </tr>
                                    </table>
                                </div><!-- table container -->
                            </div>
                        </div>
                    </div><!-- row 2 -->

                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="box box-light-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-tint"></i> Alerts</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="alert alert-warning alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Warning!</strong> Cool dismissable alert box.
                                    </div>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Danger!</strong> Cool dismissable alert box.
                                    </div>
                                    <div class="alert alert-info alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Info!</strong> Cool dismissable alert box.
                                    </div>
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Success!</strong> Cool dismissable alert box.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="box box-light-blue">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa fa-tint"></i> Button Dropdown & Groups</h3>
                                    <div class="box-tools">
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-angle-down lte-hider"></i>
                                        <i class="off fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="table-container table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">Left</button>
                                                    <button type="button" class="btn btn-default">Middle</button>
                                                    <button type="button" class="btn btn-default">Right</button>
                                                </div>
                                            </td>
                                        </tR>
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">1</button>
                                                    <button type="button" class="btn btn-default">2</button>

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                            Dropdown
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Dropdown link</a></li>
                                                            <li><a href="#">Dropdown link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">Action</button>
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="btn-group-vertical dropup">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        Dropup
                                                        <span class="caret"></span>                                                        
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                    <button type="button" class="btn btn-default">Top</button>
                                                    <button type="button" class="btn btn-default">Middle</button>
                                                    <button type="button" class="btn btn-default">Bottom</button>                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.lte-dashboard -->
            </div><!-- /.lte-main-container -->
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
    </body>
</html>
@endsection