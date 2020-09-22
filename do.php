<?php session_start();
include('sql/connect.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Alumni </title>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>


<body>

    <!---------------- status ------------>
    <div class="sticky-top">
        <?php if (isset($_SESSION['status'])) {
            if ($_SESSION['status'] == "admin") {
                include('navA.php');
            } else {
                include('nav.php');
            }
        } else {
            include('nav.php');
        } ?>
    </div>

    <!---------------- status---------------->


    <!-------------------------------------------------------------------------------------------------------------------------->
    <br><br><br>
    <div class="container">
        <div class="card">
            <!-- Default form register -->
            <form class="text-center  border-dark p-5" action="sql/enroll.php" method="POST" align="center">

                <h1>ลงทะเบียน</h1>
                <br>

                <?php
                include('sql/connect.php');
                $sql = "SELECT * FROM `chil`,`profil`,`home`,`cons`,`work`
                    WHERE chil.id = '" . $_GET['pro_id'] . "' 
                    and profil.pro_id = chil.id               
                    and home.h_id = chil.id
                    and cons.c_id=chil.id
                    and work.work_id= chil.id ";

                $stmt = $conn->query($sql);


                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                    <br>
                    <u>
                        <h4 align="left">ข้อมูลการศึกษา</h4>
                    </u>
                    <br>
                    <div class="modal-body" align="left">
                        <div class="form-row ">

                            <div class="col">
                                <!-- E-mail -->
                                <label> รหัสนักศึกษา </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['la']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> ปีที่จบการศึกษา </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['pe']; ?>
                            </div>
                        </div>
                        <p></p>
                    </div>

                    <br>
                    <u>
                        <h4 align="left">ข้อมูลส่วนตัว</h4>
                    </u>
                    <br>
                    <div class="modal-body" align="left">
                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <label> คำนำหน้า </label>&emsp;&emsp;
                                <?php echo  $result['la']; ?>
                            </div>
                            <div class="col">
                                <!-- E-mail -->
                                <label> ชื่อ</label>&emsp;&emsp;
                                <?php echo  $result['name']; ?>
                                &emsp;&emsp;&emsp;
                                <!-- password -->
                                <label> นามสกุล</label>&emsp;&emsp;
                                <?php echo  $result['lastname']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col">
                                <label>เพศ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['gender']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label>เลขประจำประชาชน</label>&emsp;&emsp;
                                <?php echo  $result['p_num']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col-6">
                                <!-- E-mail -->
                                <label>วัน / เดือน / ปีเกิด</label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['date']; ?>
                            </div>

                        </div>
                        <p></p>
                        <br>

                        <u>
                            <h5 align="left">ที่อยู่ตามทะเบียนบ้าน</h5>
                        </u>
                        <br>

                        <div class="form-row">
                            <div class="col ">
                                <!-- E-mail -->
                                <label> บ้านเลขที่ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['h_number']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> หมู่ที่ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['swine']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <label> ตำบล </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['h_dis']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> อำเภอ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['h_per']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col-6">
                                <!-- E-mail -->
                                <label> จังหวัด </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['hpro']; ?>
                            </div>
                            <div class="col-6">
                                <!-- E-mail -->
                                <label> รหัสไปรษณีย์ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['h_code']; ?>
                            </div>
                        </div>
                    </div>

                    <br>
                    <u>
                        <h4 align="left">ข้อมูลการติดต่อ</h4>
                    </u>
                    <br>
                    <div class="modal-body" align="left">
                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <label> E-mail </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['email']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> เบอร์โทรศัพท์ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['phone']; ?>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <label> Facebook </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['facebook']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> ID Line </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['line']; ?>
                            </div>
                        </div>
                        <p></p>

                    </div>
                    <p></p>

                    <br>
                    <u>
                        <h4 align="left">ข้อมูลการทำงาน</h4>
                    </u>
                    <br>
                    <div class="modal-body" align="left">
                        <div class="form-row">
                            <div class="col">
                                <label> ตำแหน่งการทำงาน </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['w_ps']; ?>
                            </div>
                            <div class="col">
                                <label> สถานที่ทำงาน </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['w_name']; ?>
                            </div>

                        </div>
                        <p></p>
                        <br>
                        <u>
                            <h5 align="left">ที่ติดต่อที่ทำงาน</h5>
                        </u>
                        <br>

                        <div class="form-row">
                            <div class="col ">
                                <!-- E-mail -->
                                <label> บ้านเลขที่ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['w_code']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> หมู่ที่ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['w_mu']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <label> ตำบล </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['w_tum']; ?>
                            </div>
                            <div class="col">
                                <!-- password -->
                                <label> อำเภอ </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['w_per']; ?>
                            </div>
                        </div>
                        <p></p>

                        <div class="form-row">
                            <div class="col-6">
                                <!-- E-mail -->
                                <label> จังหวัด </label>&emsp;&emsp;&emsp;&emsp;
                                <?php echo  $result['w_por']; ?>
                            </div>
                            <div class="col-6">
                                <!-- E-mail -->
                                <label> รหัสไปรษณีย์ </label>&emsp;&emsp;&emsp;
                                <?php echo  $result['w_pai']; ?>
                            </div>

                        </div>
                        <p></p>

                    </div>
                    <br><br><br><br><br>


                    <div class="b1" align="right">

                        <a href="update.php"><button type="button" class="btn peach-gradient btn-lg ">อัปเดทข้อมูล</button></a>

                        <!-- Sign up button -->
                        <a href="index.php"><button type="button" class="btn aqua-gradient btn-lg ">ตกลง</button></a>

                    </div>

                <?php
                }
                ?>
            </form>
            <!-- Default form register -->
        </div>
    </div>
    </div>
    <br><br><br><br>



</body>

</html>