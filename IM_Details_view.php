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
        <!-- Static Table Start -->
		
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
			<!-- <a href="IM_Details_form.php" class="btn btn-info btn">ADD NEW</a><hr> -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Internal Exam Marks Details <!-- <span class="table-project-n">Data</span> Table --></h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
      <th>Sl.No</th>
      <th><h1 style="box-sizing: border-box; font-size: 20px; margin: 0px 0px 10px; font-family: &quot;Times New Roman&quot;; font-weight: 700; line-height: 1.1; color: rgb(48, 48, 48); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;">Internal Exam</h1></th>
      <th>Course</th>
      <th>Student Name </th>
      <th>&nbsp;Registere No.</th>
      <th>Subject Name </th>
      <th>Exam Total Marks</th>
      <th>Obtain Marks</th>
      <th>Semester</th>
     <!--  <th>Delete</th>
      <th>Edit</th> -->
    </tr>
	</thead>
	<tbody>
	<?php
	include('db_connect.php');
	$uname=$_SESSION['uname'];
	$sl=1;
	 $sql="select * from  int_marks_details  imd,internal_exam ie, student_details sd,subject_details sub,course_details cd where imd.int_exam_id=ie.internal_exam_id and imd.student_id=sd.student_id and imd.sub_id=sub.sub_id and cd.course_id=sub.course_id and sd.couse_id=cd.course_id and sd.student_reg_no='$uname'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl++; ?></td>
      <td>&nbsp;<?php echo $row['internal_exam_name']; ?></td>
      <td>&nbsp;<?php echo $row['course_name']; ?></td>
      <td>&nbsp;<?php echo $row['student_fullname']; ?></td>
      <td>&nbsp;<?php echo $row['student_reg_no']; ?></td>
      <td>&nbsp;<?php echo $row['sub_name']; ?></td>
      <td>&nbsp;<?php echo $row['exam_total_marks']; ?></td>
      <td>&nbsp;<?php echo $row['obtain_marks']; ?></td>
      <td>&nbsp;<?php echo $row['sem']; ?></td>
     <!--  <td><a href="IM_Details_delete.php?int_marks_details_id=<?php echo $row['int_marks_details_id']; ?>" title="Delete"onclick="return confirm('YOU WANT TO DELETE')"><img src="img/file_delete.png" width="30px" height="30px"></td>
      <td><a href="IM_Details_edit.php?int_marks_details_id=<?php echo $row['int_marks_details_id']; ?>" title="Edit"><img src="img/file_edit.png" width="30px" height=30px"></a></td> -->
    </tr>
	<?php
	}
	?>
    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
<?php include('footer.php'); ?>

<?php include('script.php'); ?>
</body>

</html>
