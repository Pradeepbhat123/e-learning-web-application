
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
                                    <h1>All Form Element</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
<form name="form1" method="post" id="formID" action="client_payment_insert.php" class="form-horizontal">
  <table width="494" height="520" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Client Payment </div></td>
    </tr>
    <tr>
      <td><div align="center">Client ID </div></td>
      <td><div align="center">
        <select name="client_id" id="client_id" class="form-control validate[required,custom[onlyLetter]]">
		<option value="select">select</option>
		<?php
		include('db_connect.php');
		$sql="select * from client";
		$r=mysql_query($sql);
		while($row=mysql_fetch_array($r))
		{
		?>
		<option value="<?php echo $row['client_id'];?>"><?php echo $row['client_name'];?></option>
		<?php
		}
		?>
        </select>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Description</div></td>
      <td><div align="center">
        <textarea name="description" id="description" class="form-control validate[required,custom[onlyLetter]]"></textarea>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Payment Type </div></td>
      <td><div align="center">
        <select name="p_type" id="p_type" class="form-control validate[required,custom[onlyLetter]]">
          <option>select</option>
          <option>Development</option>
          <option>Renewal</option>
          <option>Hosting</option>
          <option>SMS</option>
          <option>Development/Hosting</option>
          <option>SEO</option>
          <option>Services</option>
          <option>Other</option>
        </select>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Payment Mode </div></td>
      <td><div align="center">
        <select name="p_mode" id="p_mode" class="form-control validate[required,custom[onlyLetter]]">
          <option>select</option>
          <option>Cash</option>
          <option>Check</option>
          <option>DD</option>
        </select>
</div></td>
    </tr>
    <tr>
      <td><div align="center">Bank Name </div></td>
      <td><div align="center">
        <input name="bank_name" type="text" id="bank_name" class="form-control validate[required,custom[onlyLetter]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Chech/DD Number </div></td>
      <td><div align="center">
        <input name="check_dd" type="text" id="check_dd" class="form-control validate[required,custom[onlyLetter]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Amount</div></td>
      <td><div align="center">
        <input name="amount" type="text" id="amount" class="form-control validate[required,custom[onlyLetter]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Chech Date </div></td>
      <td><div align="center">
        <input name="check_date" type="date" id="check_date" class="form-control validate[required,custom[onlyLetter]]">
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Payment Date </div></td>
      <td><div align="center">
        <input name="pay_date" type="date" id="pay_date" class="form-control validate[required,custom[onlyLetter]]">
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
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