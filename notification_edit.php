
<!doctype html>
<html class="no-js" lang="">


<?php include('metatag.php'); ?>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php include('sidebar.php'); ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
 <?php include('header.php'); ?>
            <!-- Mobile Menu start -->
           <?php include('mobile_menu.php'); ?>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
               
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Course Details</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php include('val.php'); ?>
<?php
include('db_connect.php');
$notification_id=$_REQUEST['notification_id'];
$sql="select * from notification where notification_id='$notification_id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res); 
?>
<form name="form1" method="post" action="notification_update.php">
<input type="hidden" name="notification_id" value="<?php echo $row['notification_id']; ?>">
  <table width="382" height="270" border="0" align="center">
    <tr>
      <td>News Title</td>
      <td><input name="newstitle" type="text" id="newstitle" class="form-control validate[required] form-control" value="<?php echo $row['notification_title']; ?>"></td>
    </tr>
    <tr>
      <td>News Discription</td>
      <td><textarea name="newsdis" id="newsdis" class="form-control validate[required] form-control" ><?php echo $row['notification_discription']; ?></textarea></td>
    </tr>
    <tr>
      <td>News Date</td>
      <td><input name="newsdate" type="date" id="newsdate" class="form-control validate[required,custom[date]] form-control" value="<?php echo $row['notification_date']; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit"class="btn btn-success btn">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form End-->
<?php include('footer.php'); ?>
<?php include('val.php'); ?>
</body>

