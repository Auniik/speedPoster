<!DOCTYPE html>
<!--
 $sql="SELECT count(id) AS total FROM tbl_test";
	 $result=mysql_query($con, $sql);
	 $values = mysqli_fetch_assoc($result);
	 $num_rows = $values['total'];
	 echo $num_rows;

----> <!-----login-------->
<!-------./login------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>First Security Integrated Solutions Ltd.</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://firstbd.ltd/work/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="https://firstbd.ltd/work/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="https://firstbd.ltd/work/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://firstbd.ltd/work/dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <!-----navbar navbar-default navbar- static-top  ------->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> First Security Integrated Solutions Ltd.</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i>
                        <h>Hi, <b>hcl56</b></h>
                    </i>
                    <i>
                        <h>ID,<b>12264</b></h>
                    </i>
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php""><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i> Franchisee</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i> Work Form</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <br/><br/>
    <div id="page-wrapper">
        </br>
        <div class="row">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <!-----To retrieve the database records and display them on the page--------------------------------->
                    <table width="100%" border="0">
                        <tr>
                            <a href="https://www.firstbd.ltd/work/uploads/hcfdxs58537843.rar">Download</a>
                        </tr>
                    </table>
                    <!---./ retrive---->
                </li>
            </ol>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div class="card mb-3" id="aaa22">
                        <div class="card-header">
                            <h6 class="btn btn-primary" style="float:left; width: 230px; margin-right: 40px">Fill the
                                Form &amp; Submit</h6>
                            <h2 class="btn btn-success"
                                style="float:left; width: 100px; margin-right: 40px; margin-top:10px;">Count: 0 </h2>
                            <h2 class="btn btn-info"
                                style="float:left; width: 570px; margin-right: 20px; margin-top:10px; background-color:#848a8c;">
                                <!-----To retrieve the database records and display them on the page--------------------------------->
                                <a style="color:red; font-size:21px;"> <strong>0</strong></a>
                                <!---./ retrive---->
                                তারিখের মধ্যে প্রতিমাসে কাজ শেষ করবেন এবং পরের দিনে নতুন কাজ পাবেন।</h2>
                        </div>
                </li>
            </ol>
            <h3 id="msg" class="text-center text-success"></h3>
            <br>
            <div class="container" style="margin-left: 15%; ">
                <!----Message Insert Successfully------------->
                <div class="row">
                    <div class="col-md-3 col-md-offset-0">
                        <form method="post" action="post.php" accept-charset="UTF-8">
                            <input name="_token" type="hidden" value="">
                            <div class="form-group">
                                <label class="l1">Record No.</label>
                                <input tabindex="1" type="text" name="record_no" class="form-control"
                                       placeholder="Enter Record no." autofocus="">
                                <span class="text-danger"> </span>
                            </div>
                            <div class="form-group">
                                <label class="l1">Policy No.</label>
                                <input tabindex="5" type="text" name="policy_no" class="form-control"
                                       placeholder="Enter Policy no.">
                                <span class="text-danger"> </span>
                            </div>
                            <div class="form-group">
                                <label for="email" class="l1">First Name:</label>
                                <input tabindex="7" type="text" name="first_name" class="form-control"
                                       placeholder="Enter First Name">
                                <span class="text-danger"> </span>
                            </div>
                            <div class="form-group">
                                <label for="email" class="l1">City:</label>
                                <input tabindex="9" type="text" name="city" class="form-control"
                                       placeholder="Enter City">
                                <span class="text-danger"> </span>
                            </div>
                            <div class="form-group">
                                <label for="email" class="l1">Phone:</label>
                                <input tabindex="10" type="text" name="phone" class="form-control"
                                       placeholder="Enter Phone no.">
                                <span class="text-danger"> </span>
                            </div>
                            <div class="form-group">
                                <label for="email" class="l1">Generel Practitioner(gp) Code:</label>
                                <input tabindex="13" type="text" name="general_practitioner_code" class="form-control"
                                       placeholder="Enter Generel Practitioner(gp) Code">
                                <span class="text-danger"> </span>
                            </div>
                            <div class="form-group">
                                <label for="email" class="l1">Paid Amount:</label>
                                <input tabindex="15" type="text" name="paid_amount" class="form-control"
                                       placeholder="Enter paid amount">
                                <span class="text-danger"> </span>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pwd" class="l1">Policy Date:</label>
                            <input tabindex="6" type="date" name="policy_date" class="form-control"
                                   placeholder="policy date ">
                            <span class="text-danger"> </span>
                        </div>
                        <div class="form-group">
                            <label for="pwd" class="l1">Medical Card No:</label>
                            <input tabindex="6" type="text" name="medical_card_no" class="form-control"
                                   placeholder="Enter Medical Card No">
                            <span class="text-danger"> </span>
                        </div>
                        <div class="form-group">
                            <label for="email" class="l1">Last Name:</label>
                            <input tabindex="8" type="text" name="last_name" class="form-control"
                                   placeholder="Enter Last Name">
                            <span class="text-danger"> </span>
                        </div>
                        <div class="form-group">
                            <label for="email" class="l1">State:</label>
                            <input tabindex="9" type="text" name="state" class="form-control" placeholder="Enter State">
                            <span class="text-danger"> </span>
                        </div>
                        <div class="form-group">
                            <label for="email" class="l1">Martial Status:</label>
                            <div>
                                <select tabindex="11" class="form-control" name="martial_status">

                                    <option value="Married" selected="selected">Married</option>
                                    <option value="Single">Single</option>
                                </select>
                                <span class="text-danger"> </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="l1">Hospital/Claim Days:</label>
                            <input tabindex="14" type="text" name="hospital_claim_days" class="form-control"
                                   placeholder="Enter Hospital/Claim Days">
                            <span class="text-danger"> </span>
                        </div>
                        <div class="form-group">
                            <label class="l1" for="email">Net Amount:</label>
                            <input tabindex="16" type="text" name="net_amount" class="form-control"
                                   placeholder="Enter Net Amount">
                            <span class="text-danger"> </span>
                        </div>
                    </div>
                </div>
                <button tabindex="17" type="submit" name="save" class="btn btn-primary">Save</button>
                <br/><br/>
            </div>
        </div>
    </div>
    <br/><br/>
</div>
    <!-- /#wrapper -->
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © First Security Integrated Solutions Ltd. 2019</span>
            </div>
        </div>
    </footer>
    <br/><br/>
<!-- jQuery -->
    <script src="https://firstbd.ltd/work/dist/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://firstbd.ltd/work/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="https://firstbd.ltd/work/dist/js/sb-admin-2.js"></script>
</form>
</body>
</div>
</html>
