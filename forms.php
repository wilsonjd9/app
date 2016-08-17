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
                                <i class="fa fa-edit"></i> Preferences
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Preferences
                        </h1>                        

                        <form role="form">

                            <div class="form-group">
                                <label>E-Mail</label>
                                <input class="form-control" value="wilsonjd9@gmail.com">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <div class="form-group">
                                <label>Mobile Message Number</label>
                                <input class="form-control" placeholder="Enter number" value="416-450-2499">
                            </div>

                            <div class="form-group">
                                <label>Alternate E-Mail</label>
                                <p class="form-control-static">john.wilson@bettercurrent.com</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Jenni Location</label>
                                <p class="form-control-static">248108 5 Sideroad, Mono, ON L9W 6K9</p>
                            </div>                        

                            <div class="form-group">
                                <label>Upload file</label>
                                <input type="file">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Preferences</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Alert on Grid Outage
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Alert on Internet Outage
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Alert on Low Battery
                                    </label>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-default">Update</button>
                            <button type="reset" class="btn btn-default">Cancel</button>

                        </form>

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

</body>

</html>
