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
                                <i class="fa fa-money"></i> My Savings
                            </li>
                        </ol>

                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> My Savings</h3>
                            </div>
                            <div class="panel-body">
                                <p align="center" style="font-size: 3em; color: green;"><strong>$61.23 YTD</strong></p>
                            </div>                            
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Today
                                                    

                                                    
                                                
                                                </td>
                                                <td><table><tr><td width="10" style=" background-color: #4B94F4;">&nbsp;</td><td style="width: 14; background-color: purple;">&nbsp;</td><td width="10">&nbsp;</td></tr></table></td>
                                                <td align="right">$0.75
                                                  
</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Week
                                                    

                                                    
                                                
                                                </td>
                                                <td><table><tr><td width="20" style=" background-color: #4B94F4;">&nbsp;</td><td style="width: 14; background-color: purple;">&nbsp;</td><td width="30">&nbsp;</td></tr></table></td>
                                                <td align="right">$1.81
                                                  
</td>
                                            </tr> 
                                            <tr>
                                                <td>
                                                    Month
                                                    

                                                    
                                                
                                                </td>
                                                <td><table><tr><td width="30" style=" background-color: #4B94F4;">&nbsp;</td><td style="width: 14; background-color: purple;">&nbsp;</td><td width="60">&nbsp;</td></tr></table></td>
                                                <td align="right">$6.74
                                                  
</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Year
                                                    

                                                    
                                                
                                                </td>
                                               <td><table><tr><td width="35" style=" background-color: #4B94F4;">&nbsp;</td><td style="width: 14; background-color: purple;">&nbsp;</td><td width="65">&nbsp;</td></tr></table></td>
                                                <td align="right">$61.23
                                                  
</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Lifetime
                                                    

                                                    
                                                
                                                </td>
                                                <td><table width="100%"><tr><td style="width: 80; background-color: #4B94F4;">&nbsp;</td><td style="width: 14; background-color: purple;">&nbsp;</td><td style="width: 20; ">&nbsp;</td></tr></table></td>
                                                <td align="right">$123.56
                                                  
</td>
                                            </tr>                                            
                                            
                                        

                                        </tbody>
                                    </table>
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
