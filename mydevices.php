<?php require("header.php"); ?> 

<body>

    <div id="wrapper">

<?php require("nav.php"); ?> 

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-dashboard"></i> My Devices
                            </li>
                        </ol>

                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-dashboard fa-fw"></i> My Devices</h3>
                            </div>
                            <div class="panel-body">
                                <p align="center"><img src="images/battery.png" width="90%" style="max-width: 320px;"></p>
                                <ul class="list-group">
                                  <a href="jenni-device.php"><li class="list-group-item">
                                    <span class="badge">80%</span>
                                    Jenni - Kitchen - 6 hrs est.
                                  </li></a>
                                  <a href="jenni-device.php"><li class="list-group-item">
                                    <span class="badge">80%</span>
                                    Jenni - Bedroom - 6 hrs est.
                                   </li></a>                                    
                                </ul>
                            </div>
 
                                                     
                        </div>
                    </div>
                </div>
                <!-- /.row -->                
                
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
   

                            
                            

                                
                                
                                
                <div class="row">
                    <div class="col-lg-12">

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Device
                                                    

                                                    
                                                
                                                </td>
                                                <td align="center">Charging</td>
                                                <td>
                                                  
                                                    <p>% Chrg. Est.
</p>
</td>
                                            </tr>                                            
                                            <tr>
                                                <td>
                                                    <a href="charge-device.php">iPhone</a>
                                                    

                                                    
                                                
                                                </td>
                                                <td align="center"><span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: #4B94F4; font-size: 1.2em;"></span></td>
                                                <td>
                                                  
                                                    <p>
<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="200" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="square" />
</p>
</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="charge-device.php">iPad</a>
                                                    

                                                    
                                                
                                                </td>
                                                <td align="center"><span class="glyphicon glyphicon-stop" aria-hidden="true" style="color: #4B94F4; font-size: 1.2em;"></span></td>
                                                <td>
                                                  
                                                    <p>
<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="200" data-slider-step="1" data-slider-value="76" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square" />
</p>
</td>
                                            </tr>  
                                            <tr>
                                                <td>
                                                    <a href="charge-device.php">Samsung</a>
                                                    

                                                    
                                                
                                                </td>
                                                <td align="center"><span class="glyphicon glyphicon-unchecked" aria-hidden="true" style="color: #4B94F4; font-size: 1.2em;"></span></td>
                                                <td>
                                                  
                                                    <p>
<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="200" data-slider-step="1" data-slider-value="178" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="square" />
</p>
</td>
                                            </tr>                                              
                                            
                                        

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                    </div>
                </div>
                <!-- /.row -->                                    


                        </div>
                    </div>
                </div>
                <!-- /.row -->                



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    
    <script src="js/bootstrap-slider.js"></script>
    
    <script>

var RGBChange = function() {
	$('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
};


var g = $('#G').slider()
		.on('slide', RGBChange)
		.data('slider');
        
var g1 = $('#R').slider()
		.on('slide', RGBChange)
		.data('slider'); 
        
var g3 = $('#B').slider()
		.on('slide', RGBChange)
		.data('slider');         
 
    
    
    </script>

</body>

</html>
