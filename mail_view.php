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
			<a href="mail_form.php" class="btn btn-info btn"> NEW MAIL</a><hr>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Mail Details <!-- <span class="table-project-n">Data</span> Table --></h1>
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
      <th><strong>Sl.No</strong></th>
      <th><strong>Student Name</strong></th>
      <th><strong>Facalaty Name </strong></th>
      <th><strong>Subject</strong></th>
      <th>Course</th>
      <th><strong>Discription</strong></th>
      <th><strong>Date</strong></th>
  <!--     <th><strong>Status</strong></th> -->
      <th><strong>Delete</strong></th>
    <!--   <th><strong>Edit</strong></th> -->
    </tr>
	</thead>
	<tbody>
	<?php
	include('db_connect.php');
	$sl=1;
	$uname=$_SESSION['uname'];
	$sql="select * from mail m,student_details sd,facalaty_details fd, course_details cd where m.student_id=sd.student_id and m.facalaty_id=fd.facalaty_id and sd.couse_id=cd.course_id and sd.student_reg_no='$uname'";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl++; ?></td>
      <td>&nbsp;<?php echo $row['student_fullname']; ?></td>
      <td>&nbsp;<?php echo $row['facalaty_fullname']; ?></td>
      <td>&nbsp;<?php echo $row['subject']; ?></td>
      <td>&nbsp;<?php echo $row['course_name']; ?></td>
      <td>&nbsp;<?php echo $row['discription']; ?></td>	
      <td>&nbsp;<?php echo $row['mail_date']; ?></td>
    <!--   <td>&nbsp;<?php echo $row['status']; ?></td> -->
      <td><a href="mail_delete.php?mail_id=<?php echo $row['mail_id']; ?>" title="Delete"onclick="return confirm('YOU WNAT TO DELETE')"><img src="img/file_delete.png" width="30px" height="30px"></td>
    <!--   <td><a href="mail_edit.php?mail_id=<?php echo $row['mail_id']; ?>" title="Edit"><img src="img/file_edit.png" width="30px" height="30px"></a></td>
    </tr> -->
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
