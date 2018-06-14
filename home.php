    <?php
        include('php/connection.php');
        session_start();
        if (!isset($_SESSION['staff_id'])) 
        {
        die(header('Location: ../index.php'));
        }
        $staff_id = $_SESSION['staff_id'];
        $qry = mysql_query("SELECT * FROM register_staff WHERE staff_id = '$staff_id'");
        ?>
        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Lasit Stuff </title>
            <!-- Bootstrap core CSS -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/style.css" rel="stylesheet">
            <script type="text/javascript">
                function proceed() {
                    return confirm('Compute Payroll');
                }
            </script>
            <!-- <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" /> -->
        </head>

        <body>
            <?php include 'inc/header.php'; ?>
            <section id="main">
                <a class="fix-me button" data-target="#feed" data-toggle="modal" href="">Feedback <span class="glyphicon glyphicon-comment"></span></a>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 asidep">
                            <div class="list-group">
                                <a href="home.php" class="list-group-item active main-color-bg">
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Home </a>
                                <a href="#" id="regc" class="list-group-item">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Register Clerk <span class="badge"></span></a>
                                <a href="#" id="inbox" class="list-group-item">
                                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Messages <span class="badge"> 2</span></a>
                                <a href="#" id="payHist" class="list-group-item">
                                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Payment</a>
                                <a href="#" id="pay" class="list-group-item">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Payroll <span class="badge"></span></a>
                                <a href="#" id="stuff" class="list-group-item">
                                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Staff <span class="badge"></span></a>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle list-group-item glyphicon glyphicon-user" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Profile
                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#" id="con">ContactInfo</a></li>
                                        <li><a href="#" id="acc">Account Info</a></li>
                                    </ul>
                                </div>
                                <a href="#!" id="st" class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Reports <span class="badge"></span></a>
                            </div>

                            <div class="well">
                                <ul class="list-group">
                                    <br> <span class="glyphicon glyphicon-flag"></span> <a href="">System Update</a><br><br>
                                    <span class="glyphicon glyphicon-flag"></span><a href="">Specialization</a><br><br>
                                    <span class="glyphicon glyphicon-flag"></span> <a href="">Managing Your Acc</a><br><br>
                                    <span class="glyphicon glyphicon-flag"></span> <a href="">FAQ</a><br><br>
                                    <span class="glyphicon glyphicon-flag"></span> <a href="">How to Earn more </a><br><br>
                                    <span id="lg" class="glyphicon glyphicon-flag" aria-hidden="true"></span><a href="#">Change Password</a>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-10" id="pan">
                            <!-- Latest Users -->
                            <div class="panel panel-default">
                                <div class="panel-heading main-color-bg">
                                    <h3 class="panel-title">Workers Infomation</h3>

                                    <?php
                                    echo $_SESSION['staff_id'].",  ....    ";
                                    echo $_SESSION['username'].",  ...    ";
                                     echo $_SESSION['name'].",   ....   ";
                                     echo $_SESSION['level'].", ....     ";
                                    ?>
                                </div>
                                <div class="panel-body">
                                    <div id="scrolTable">
                                        <?php
        if (!isset($_SESSION['username'])) 
        {
        die(header('Location: ../index.php'));
        }
        $qry = "SELECT count(*), sum(basic), sum(meal), sum(housing), sum(transport), sum(entertainment), sum(long_service), sum(tax), sum(totall), monthname(date_s) FROM salary GROUP BY month(date_s)";
        $run =  $con->query($qry);

        $qry2 = "SELECT count(*) FROM register_staff";
        $run2 =  $con->query($qry2);

        $qry3 = "SELECT *, count(*) FROM register_staff GROUP BY sex";
        $run3 =  $con->query($qry3);

        $qry4 = "SELECT *, count(*) FROM register_staff GROUP BY position";
        $run4 =  $con->query($qry4);

        $qry5 = "SELECT *, count(*) FROM register_staff GROUP BY department";
        $run5 =  $con->query($qry5);
        ?>
                                            <ol class="breadcrumb">
                                                <h5 align="left" class="two">TOTAL NO. OF REGISTERED STAFFS: &nbsp;&nbsp;&nbsp;
     <?php while ($rows = $run2->fetch_array()) {
        echo $rows['count(*)'];
        echo '&nbsp;&nbsp;';
        echo '||';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    }
                while($rowsb = $run3->fetch_array()) {
                echo $rowsb['sex'];
                echo ':';
                echo '&nbsp;&nbsp;';
                echo $rowsb['count(*)'];
                echo '&nbsp;&nbsp;';
                echo '||'; 
                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            }    ?>
                                                </h5>
                                            </ol><br>
                                            <table class="table table-striped table-hover">
                                               <div class="bre">
                                                   <h3>SALARY BREAKDOWN BY MONTH </h3>
                                               </div> 
                                                <tr>
                                                    <td width="121"><strong>No of Salaries Paid</strong></td>
                                                    <td width="124"><strong>Sum of Basic Salary</strong></td>
                                                    <td width="62"><strong>Meal</strong></td>
                                                    <td width="73"><strong>Housing</strong></td>
                                                    <td width="72"><strong>Transport</strong></td>
                                                    <td width="102"><strong>Entertainment</strong></td>
                                                    <td width="89"><strong>Long Service</strong></td>
                                                    <td width="68"><strong>Tax</strong></td>
                                                    <td width="67"><strong>Total</strong></td>
                                                    <td width="67"><strong>Month</strong></td>
                                                </tr>
                                                <?php while ($row = $run->fetch_array()) {?>
                                                <tr>
                                                    <td>
                                                        <?php echo $row['count(*)']; ?>
                                                    </td>
                                                    <td>Ksh
                                                        <?php echo round($row['sum(basic)']); ?>
                                                    </td>
                                                    <td>ksh
                                                        <?php echo round($row['sum(meal)']); ?>
                                                    </td>
                                                    <td>Ksh
                                                        <?php echo round($row['sum(housing)']); ?>
                                                    </td>
                                                    <td>Ksh
                                                        <?php echo round($row['sum(transport)']); ?>
                                                    </td>
                                                    <td>Ksh
                                                        <?php echo round($row['sum(entertainment)']); ?>
                                                    </td>
                                                    <td>Ksh
                                                        <?php echo round($row['sum(long_service)']); ?>
                                                    </td>
                                                    <td>Ksh
                                                        <?php echo round($row['sum(tax)']); ?>
                                                    </td>
                                                    <td>Ksh
                                                        <?php echo round($row['sum(totall)']); ?>
                                                    </td>
                                                    <td>
                                                        <a href="view_month.php?month=<?php echo $row['monthname(date_s)'];?>">
                                                            <?php echo $row['monthname(date_s)'];?>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php }?>

                                            </table>
                                            <div class=" col-md-4">
                                                <table class="table table-condensed" id="tabl">
                                                    <h4 align="center">Update payment Variables</h4>
                                                    <tr>
                                                        <td width="89">Housing</td>
                                                        <td width="108"><span id="sprytextfield1">
                <input type="text" name="housing" id="housing" />
                <span class="textfieldRequiredMsg"> </span></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transport</td>
                                                        <td><span id="sprytextfield2">
                <input type="text" name="transport" id="transport" />
                <span class="textfieldRequiredMsg"> </span></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Entertainment</td>
                                                        <td><span id="sprytextfield3">
                <input type="text" name="entertainment" id="entertainment" />
                <span class="textfieldRequiredMsg"> </span></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Long Service</td>
                                                        <td><span id="sprytextfield4">
                <input type="text" name="long_service" id="long_service" />
                <span class="textfieldRequiredMsg"> </span></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tax</td>
                                                        <td>
                <input type="text" name="tax" id="tax" />
        </span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td><input class="btn btn-success" type="submit" name="submit" id="submit" value="Submit" onclick="proceed()" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class=" col-md-4">
                                                <table class="table table-responsive">
                                                    <h4 align="center">Staff Breakdown by Position</h4>
                                                    <tr>
                                                        <td><strong>Position</strong></td>
                                                        <td><strong>Number of Staffs</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <?php  while($rb = $run4->fetch_array()) {?>
                                                        <td width="104">
                                                            <a href="position.php?position=<?php echo $rb['position'];?>">
                                                                <?php echo $rb['position'];?>
                                                            </a>
                                                        </td>
                                                        <td width="124">
                                                            <?php echo $rb['count(*)']; ?>&nbsp;</td>
                                                    </tr>
                                                    <?php }?>
                                                </table>
                                            </div>
                                            <div class=" col-md-4">
                                                <table class="table table-condensed" id="tabl">
                                                    <h4 align="center">Staff Breakdown by Departments</h4>
                                                    <tr>
                                                        <td width="131"><strong>Department</strong></td>
                                                        <td width="117"><strong>Number of Staffs</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <?php  while($r = $run5->fetch_array()) {?>
                                                        <td>
                                                            <a href="department.php?department=<?php echo $r['department']; ?>">
                                                                <?php echo $r['department'];?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <?php echo $r['count(*)']; ?>
                                                        </td>
                                                    </tr>
                                                    <?php }?>
                                                </table>
                                            </div>
                                           
                                            <table width="900" border="0">
                                                <tr>
                                                    <td width="124">&nbsp;</td>
                                                    <td width="860" rowspan="5" align="left" valign="top">
                                                        <table width="100%" border="0">
                                                            <tr>
                                                                <td width="46%" rowspan="3" align="left" valign="top">
                                                                    <table width="395" border="1" align="center">
                                                                        <tr>
                                                                            <?php
                    while ($row = $run->fetch_array()) {
                        ?>
                                                                                <td width="126"><strong>Staff ID</strong></td>
                                                                                <td width="237">&nbsp;

                                                                                    <?php 
                    echo $row['staff_id'];
                    ?>
                                                                                </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Full Name</strong></td>
                                                                            <td>&nbsp;
                                                                                <?php 
                    echo $row['fname'];
                    ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>ID</strong></td>
                                                                            <td>&nbsp;
                                                                                <?php 
                    echo $row['id_number'];
                    ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Phone</strong></td>
                                                                            <td>&nbsp;
                                                                                <?php 
                    echo $row['phone_number'];
                    ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Department</strong></td>
                                                                            <td>&nbsp;
                                                                                <?php 
                    echo $row['department'];
                    ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Position</strong></td>
                                                                            <td>&nbsp;
                                                                                <?php 
                    echo $row['position'];
                    ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Date Joined</strong></td>
                                                                            <td>&nbsp;
                                                                                <?php 
                    echo $row['date_registered'];
                    ?>
                                                                            </td>
                                                                        </tr>
                                                                        <?php
                    } 
                ?>
                                                                    </table>
                                                                </td>
                                                                <td width="48%">&nbsp;</td>
                                                                <td width="3%">&nbsp;</td>
                                                                <td width="3%">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <script src="assets/jquery-3.2.1.min.js"></script>
            <script src="assets/script.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <?php include 'inc/feed.php';?>
            <?php include 'inc/footer.php';  ?>
        </body>

        </html>