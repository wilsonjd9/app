<?php require("header.php"); ?> 

<body>

    <div id="wrapper">

<?php require("nav.php"); ?> 

        <div id="page-wrapper">


                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Solar ON!
                            <small>Switch to solar done.</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Solar ON!
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

<p>
<?php
exec('gpio write 7 0', $outputArray);
?>
Solar ON!    
</p>    

 

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
