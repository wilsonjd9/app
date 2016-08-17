        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" align="left">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./"><table><tr><td><img src="images/jenni-logo.png" width="140" style=" margin-top: -8px; padding-right: 4px;"></td> <td> </td></tr></table></a>
            </div>
            
<!-----------------      Top Menu Items      

            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

--------->
            

            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
<?php
$currentpage = $_SERVER['REQUEST_URI'];
if($currentpage=='/') {
echo '<li class="active">'; 
} else {
echo '<li>';    
}
?>  
                        <a href="./"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="mydevices.php"><i class="fa fa-fw fa-dashboard"></i> My Devices</a>
                    </li>                
                    <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Energy Mix</a>
                    </li>
                    <li>
                        <a href="mysavings.php"><i class="fa fa-fw fa-money"></i> My Savings</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Remote Control <i class="fa fa-fw fa-caret-down"></i></a>
<?php
$currentpage = $_SERVER['REQUEST_URI'];
if($currentpage=='/blank-page.php' OR $currentpage=='/lsusb-page.php' OR $currentpage=='/psef-page.php' OR $currentpage=='/solar-page.php' OR $currentpage=='/grid-page.php')  {
echo '<ul id="demo">';
} else {
echo '<ul id="demo" class="collapse">';    
}
?>                          


<?php
$currentpage = $_SERVER['REQUEST_URI'];
if($currentpage=='/solar-page.php') {
echo '<li class="active">'; 
} else {
echo '<li>';    
}
?>                     
                        <a href="solar-page.php"><i class="fa fa-fw fa-file"></i> Turn Solar On</a>
                    </li> 
<?php
$currentpage = $_SERVER['REQUEST_URI'];
if($currentpage=='/grid-page.php') {
echo '<li class="active">'; 
} else {
echo '<li>';    
}
?>                     
                        <a href="grid-page.php"><i class="fa fa-fw fa-file"></i> Turn Grid On</a>
                    </li> 
             
                        </ul>
                    </li>                
                    <li>
                        <a href="forms.php"><i class="fa fa-fw fa-gear"></i> Preferences</a>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>