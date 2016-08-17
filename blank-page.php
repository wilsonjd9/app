<?php require("header.php"); ?> 

<body>

    <div id="wrapper">

<?php require("nav.php"); ?> 

        <div id="page-wrapper">


                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            System Info
                            <small>PHP on Apache webserver</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> System Info
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

<div style="width: 100%; width: 100vw;">                      
<?php
ob_start();
phpinfo();

preg_match ('%<style type="text/css">(.*?)</style>.*?(<body>.*</body>)%s', ob_get_clean(), $matches);

# $matches [1]; # Style information
# $matches [2]; # Body information

echo "<div class='phpinfodisplay'><style type='text/css'>\n",
    join( "\n",
        array_map(
            create_function(
                '$i',
                'return ".phpinfodisplay " . preg_replace( "/,/", ",.phpinfodisplay ", $i );'
                ),
            preg_split( '/\n/', $matches[1] )
            )
        ),
    "</style>\n",
    $matches[2],
    "\n</div>\n";
?>
    </div>  

 

                    </div>
                </div>
                <!-- /.row -->                



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
