<?php session_start();
include('sql/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Alumni </title>

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

<body><br><br><br>

    <!-- -------------------------------------------------------------------------------------------------------- -->
    <div class="container ">

        <div class="container  " align="center">
            <div class="card shadow" style="padding:20px;">
                <p></p>
                <h3><b><strong> ข้อมูลคนที่ลงทะเบียน </strong></b></h3>
                <br>
                <table border="1" id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
                    <thead class="thead" style="background-color: #00CCCC ; color :white">
                        <tr>
                            <th>

                                <div align="center">รหัสนักศึกษา</div>

                            </th>
                            <th>
                                <div align="center">ชื่อ</div>
                            </th>
                            <th>
                                <div align="center">นามสกุล</div>
                            </th>
                            <th>
                                <div align="center">รายละเอียด</div>
                            </th>

                        </tr>
                    </thead>

                    <?php
                    include('sql/connect.php');
                    $sql = "SELECT * FROM `profil`,`chil`
                    WHERE profil.pro_id = chil.id";
                    $stmt = $conn->query($sql);


                    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr align="center">
                            <td>
                                <z>
                                    <div align="center">
                                        <?php echo  $result['la']; ?>
                                    </div>
                                </z>
                            </td>
                            <td>
                                <z>
                                    <div align="center">
                                        <?php echo  $result['name']; ?>
                                    </div>
                                </z>
                            </td>
                            <td>
                                <z>
                                    <div align="center">
                                        <?php echo  $result['lastname']; ?>
                                    </div>
                                </z>
                            </td>
                            <td>
                                <z>
                                    <div align="center">
                                        <a role="button" class="btn btn-info btn-sm" href="do.php?pro_id=<?php echo $result["pro_id"]; ?>">
                                            <?php echo "ดูรายละเอียดข้อมูล"; ?>
                                        </a>
                                    </div>
                                </z>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>


            </div>
        </div>
    </div>

    <!-- -------------------------------------------------------------------------------------------------------- -->

</body>

</html>


<br><br>