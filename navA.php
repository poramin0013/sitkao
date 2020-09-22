<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <img src="img/logo.png" alt="" width="50px " height="50px "> &nbsp;&nbsp;&nbsp;&nbsp;
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">SE-NPRU</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="enroll.php">ลงทะเบียนศิษย์เก่า</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sadd.php">เช็คข้อมูลคนที่ลงทะเบียน</a>
      </li>
    </ul>

    <?php if (isset($_SESSION['use_id'])) { ?>
      <div class="btn-group dropleft">
        <div class="dropdown" data-toggle="dropdown" style="color: white">

          <div>
            <a href="!#">
              <bank><?php echo  $_SESSION['Student_ID']; ?></bank>
            </a>
          </div>

        </div>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">ตั้งค่าบัญชี</a>
          <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>

        </div>
        &nbsp;

      <?php } else { ?>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item ">
            <a class="nav-link" href="login.php">เข้าสู่ระบบ
            </a>
          </li>


        </ul>
      <?php } ?>
      </div>
  </div>
  </div>
</nav>
<!--/.Navbar -->