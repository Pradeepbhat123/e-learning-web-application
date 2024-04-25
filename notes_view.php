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
			<!-- <a href="notes_form.php" class="btn btn-info btn">ADD NEW</a><hr> -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Notes Details <!-- <span class="table-project-n">Data</span> Table --></h1>
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
      <th><strong>Sl.No.</strong></th>
      <th>Course Name </th>
      <th><strong>Subject Name </strong></th>
	  <th><strong>Facalaty Name </strong></th>
      <th><strong>Notes Title</strong></th>
      <th><strong>Discription</strong></th>
	  <th>Semester</th>
	  <th><strong>Upload Date </strong></th>
      <th><strong>Notes File</strong></th>
      
      
      <!-- <th><strong>Delete</strong></th> -->
   <!--    <th><strong>Edit</strong></th> -->
    </tr>
	</thead>
	<tbody>
	<?php 
	include('db_connect.php');
	$sql="select * from notes nt,subject_details sd,facalaty_details fd, course_details cd where nt.sub_id=sd.sub_id and nt.facalaty_id=fd.facalaty_id and sd.course_id=cd.course_id";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $row['notes_id']; ?></td>
	   <td>&nbsp; <?php echo $row['course_name']; ?></td>
	   <td>&nbsp;<?php echo $row['sub_name']; ?></td>
      <td>&nbsp;<?php echo $row['facalaty_fullname']; ?></td>
      <td>&nbsp;<?php echo $row['notes_title']; ?></td>
      <td>&nbsp;<?php echo $row['notes_discription']; ?></td>
	  <td>&nbsp;<?php echo $row['sem']; ?></td>
	  <td>&nbsp;<?php echo $row['notes_attached_date']; ?></td>
      <td>&nbsp;<a href="../attached/notes/<?php echo $row['notes_attached_file']; ?>" class="btn btn-info">Read Notes</a></td>
      
     
    <!--   <td><a href="notes_delete.php?notes_id=<?php echo $row['notes_id']; ?>" title="Delete" onclick="return confirm('YOU WANT TO DELETE')"><img src="img/file_delete.png" width="30px" height="30px"></td> -->
    <!--   <td><a href="notes_edit.php?notes_id=<?php echo $row['notes_id']; ?>"title="Edit"><img src="img/file_edit.png"  width="30px" height="30px"></a></td> -->
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

