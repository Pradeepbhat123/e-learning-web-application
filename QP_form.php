
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
               
       		   <script>
function getamt() {
var course_id=document.getElementById("course_id").value;
//var university_list=document.getElementById("university_list").value;
var sem=document.getElementById("sem").value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
   
      document.getElementById("subject").innerHTML =this.responseText;
	 
    
  };
   xhttp.open("GET", "getsubject.php?course_id="+course_id+"&sem="+sem, true);
  xhttp.send();
}
</script>         
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Question Paper Details</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
<form action="QP_insert.php" id="formID" method="post" enctype="multipart/form-data" name="form1">
  <table width="538" height="253" border="0" align="center">
    <tr>
      <td>Exam Name</td>
      <td><input name="ename" type="text" id="ename" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td>Course Name </td>
      <td><select name="course_id" id="course_id" class="validate[required] form-control"  >
          <option value=""> Select Course</option>
          <?php
	  include('db_connect.php');
	  $sql1="select * from  course_details";
	  $res1=$conn->query($sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
          <option value="<?php echo $row1['course_id']; ?>"><?php echo $row1['course_name']; ?></option>
          <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Semester</td>
      <td><select name="sem" id="sem" class="validate[required] form-control" onChange="getamt()">
          <option value="">Select Semester</option>
          <option value="First">First</option>
          <option value="Second"> Second</option>
          <option value="Third"> Third</option>
          <option value="Fourth"> Fourth</option>
          <option value="Fifth"> Fifth</option>
          <option value="Sixth"> Sixth</option>
      </select></td>
    </tr>
    <tr>
      <td>Subject ID</td>
      <td><select name="subid" id="subject" class="validate[required] form-control">
        <option value=""> Select Subject</option>
        <?php /*
	  include('db_connect.php');
	  $sql2="select * from subject_details";
	  $res2=$conn->query($sql2);
	  while($row2=mysqli_fetch_array($res2))
	  { */
	  ?>
        <!--   <option value="<?php echo $row2['sub_id']; ?>"><?php echo $row2['sub_name']; ?></option></option> -->
        <?php
	  //}
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Question Paper Attached File</td>
      <td><input name="qpattachedfile" type="file" value=""  id="qpattachedfile" required form-control></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
      </div></td>
    </tr>
  </table>
</form>
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

</html>





