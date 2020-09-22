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



    <!---------------- nav ---------------------->
    <?php include('nav.php'); ?>
    <!---------------- nav ---------------------->



    <!-------------------------------------------------------------------------------------------------------------------------->
    <br><br><br>
    <div class="container">
        <!-- Default form register -->
        <form class="text-center  border-dark p-5" action="sql/enroll.php" method="POST">

            <h1>ลงทะเบียน</h1>
            <br>

            <br>
            <u>
                <h4 align="left">ข้อมูลการศึกษา</h4>
            </u>
            <br>
            <div class="modal-body" align="left">
                <div class="form-row mb-4">

                    <div class="col">
                        <!-- E-mail -->
                        <label> รหัสนักศึกษา </label>
                        <input type="text" class="form-control" name="la" id="la" required>
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> ปีที่จบการศึกษา </label>
                        <input type="text" class="form-control" name="pe" id="pe">
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
                <div class="form-row mb-4">
                    <div class="col">
                        <!-- E-mail -->
                        <label> คำนำหน้า </label>
                        <select class="custom-select">
                            <option selected disabled>เลือก...</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                            <option value="นาย">นาย</option>
                        </select>
                    </div>
                    <div class="col">
                        <!-- E-mail -->
                        <label> ชื่อ</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="xxxxxxxx">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> นามสกุล </label>
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="xxxxx">
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col">
                        <label>เพศ </label>
                        <input type="text" class="form-control" name="gender" id="gender">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label>เลขประจำประชาชน</label>
                        <input type="text" id="p_num" name="p_num" class="form-control" placeholder="0-0000-00000-00-0" required>
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col-6">
                        <!-- E-mail -->
                        <label>วัน / เดือน / ปีเกิด</label>
                        <input type="date" id="date" name="date" class="form-control" placeholder="xxxxxxxx">
                    </div>

                </div>
                <p></p>
                <br>
                <u>
                    <h5 align="left">ที่อยู่ตามทะเบียนบ้าน</h5>
                </u>
                <br>

                <div class="form-row mb-4">
                    <div class="col ">
                        <!-- E-mail -->
                        <label> บ้านเลขที่ </label>
                        <input type="text" id="h_number" name="h_number" class="form-control" placeholder="00/00">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> หมู่ที่ </label>
                        <input type="text" id="swine" name="swine" class="form-control" placeholder="0">
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- E-mail -->
                        <label> ตำบล </label>
                        <input type="text" id="h_dis" name="h_dis" class="form-control" placeholder="xxxxxx">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> อำเภอ </label>
                        <input type="text" id="h_per" name="h_per" class="form-control" placeholder="xxxxx">
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col-6">
                        <!-- E-mail -->
                        <label> จังหวัด </label>
                        <input type="text" class="form-control" name="hpro" id="hpro" placeholder="xxxxx">
                    </div>
                    <div class="col-6">
                        <!-- E-mail -->
                        <label> รหัสไปรษณีย์ </label>
                        <input type="text" id="h_code" name="h_code" class="form-control" placeholder="00000">
                    </div>
                </div>



            </div>

            <br>
            <u>
                <h4 align="left">ข้อมูลการติดต่อ</h4>
            </u>
            <br>
            <div class="modal-body" align="left">
                <div class="form-row mb-4">
                    <div class="col">
                        <!-- E-mail -->
                        <label> E-mail </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="xxxxxx@gmail.com" required>
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> เบอร์โทรศัพท์ </label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="000-000-0000">
                    </div>
                </div>
                <p></p>
                <div class="form-row mb-4">
                    <div class="col">
                        <!-- E-mail -->
                        <label> Facebook </label>
                        <input type="text" name="facebook" id="facebook" class="form-control" placeholder="xxxxxx xxxxx" required>
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> ID Line </label>
                        <input type="text" name="line" id="line" class="form-control" placeholder="xxxxx" required>
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
                <div class="form-row mb-4">
                    <div class="col">
                        <label> ตำแหน่งการทำงาน </label>
                        <input type="text" id="w_ps" name="w_ps" class="form-control" placeholder="xxxxxxxxxxx" required>
                    </div>
                    <div class="col">
                        <label> สถานที่ทำงาน </label>
                        <input type="text" id="w_name" name="w_name" class="form-control" placeholder="xxxxxxxxxxx">
                    </div>

                </div>
                <p></p>
                <br>
                <u>
                    <h5 align="left">ที่ติดต่อที่ทำงาน</h5>
                </u>
                <br>

                <div class="form-row mb-4">
                    <div class="col ">
                        <!-- E-mail -->
                        <label> บ้านเลขที่ </label>
                        <input type="text" id="w_code" name="w_code" class="form-control" placeholder="00/00">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> หมู่ที่ </label>
                        <input type="text" id="w_mu" name="w_mu" class="form-control" placeholder="0">
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col">
                        <!-- E-mail -->
                        <label> ตำบล </label>
                        <input type="text" id="w_tum" name="w_tum" class="form-control" placeholder="xxxxxx">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> อำเภอ </label>
                        <input type="text" id="w_per" name="w_per" class="form-control" placeholder="xxxxx">
                    </div>
                </div>
                <p></p>

                <div class="form-row mb-4">
                    <div class="col-6">
                        <!-- E-mail -->
                        <label> จังหวัด </label>
                        <input type="text" class="form-control" name="w_por" id="w_por" placeholder="xxxxx">
                    </div>
                    <div class="col-6">
                        <!-- E-mail -->
                        <label> รหัสไปรษณีย์ </label>
                        <input type="text" id="w_pai" name="w_pai" class="form-control" placeholder="00000">
                    </div>

                </div>
                <p></p>
            </div>
            <br><br>

            <div class="b1" align="right">
                <!-- Sign up button -->
                <button type="submit" name="submit" class="btn aqua-gradient btn-lg btn-block">ตกลง</button>
            </div>
            <br>
            <div>
                <!-- Forgot password -->
                <a href="">Forgot password?</a>
            </div>
            <p></p>
            <!-- Social register -->
            <p>or sign up with:</p>



            <a href="https://web.facebook.com/" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
            <a href="https://www.instagram.com/?hl=th" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
            <hr>

            <!-- Terms of service -->
            <p>

        </form>
        <!-- Default form register -->
        <br>
        <br>
    </div>





</body>

</html>