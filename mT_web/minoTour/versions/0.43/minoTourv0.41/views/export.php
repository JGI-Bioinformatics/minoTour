<?php
// load the functions
require_once("includes/functions.php");

?>
<!DOCTYPE html>
<html>

<?php include "includes/head.php";?>
<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            
            <!-- /.navbar-header -->
			<?php include 'navbar-header.php' ?>
            <!-- /.navbar-top-links -->
			<?php include 'navbar-top-links.php'; ?>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
						<?php include 'includes/run_check.php';?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Current Data Summary - run: <?php echo cleanname($_SESSION['active_run_name']);; ?> - Export Reads</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
			
			<?php runsummary(); ?>
			<h4>Download Fasta/Fastq Files</h4>
			Template Files<br>
			<a href="includes/fetchreads.php?db=<?php echo cleanname($_SESSION['active_run_name']); ?>&job=template" type="button" class="btn btn-success">Download Fasta</a>  <a href="includes/fetchreads.php?db=<?php echo cleanname($_SESSION['active_run_name']); ?>&job=template&type=fastq" type="button" class="btn btn-success">Download Fastq</a><br>
			Complement Files<br>
			<a href="includes/fetchreads.php?db=<?php echo cleanname($_SESSION['active_run_name']); ?>&job=complement" type="button" class="btn btn-success">Download Fasta</a>  <a href="includes/fetchreads.php?db=<?php echo cleanname($_SESSION['active_run_name']); ?>&job=complement&type=fastq" type="button" class="btn btn-success">Download Fastq</a><br>
			2d (consensus) Files<br>
			<a href="includes/fetchreads.php?db=<?php echo cleanname($_SESSION['active_run_name']); ?>&job=2d" type="button" class="btn btn-success">Download Fasta</a>  <a href="includes/fetchreads.php?db=<?php echo cleanname($_SESSION['active_run_name']); ?>&job=2d&type=fastq"type="button" class="btn btn-success">Download Fastq</a><br>
			 
			
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	
	
    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
			    <script type="text/javascript" src="js/pnotify.custom.min.js"></script>
			    <script type="text/javascript">
				PNotify.prototype.options.styling = "fontawesome";
				</script>
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
	
	<!-- Highcharts Addition -->
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript" src="js/themes/grid-light.js"></script>
	<script src="http://code.highcharts.com/4.0.3/modules/heatmap.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
	
	
	
    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="js/demo/dashboard-demo.js"></script>

     <script>
        $( "#infodiv" ).load( "alertcheck.php" ).fadeIn("slow");
        var auto_refresh = setInterval(function ()
            {
            $( "#infodiv" ).load( "alertcheck.php" ).fadeIn("slow");
            //eval(document.getElementById("infodiv").innerHTML);
            }, 10000); // refresh every 5000 milliseconds
    </script>

<?php include "includes/reporting.php";?>
</body>

</html>
