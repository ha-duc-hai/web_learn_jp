<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- import bootstrap -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="viewBai1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="footer.css">
</head>

<body>
  <?php

    $lesson = $_GET['lesson'];

  ?>
  <div id="navbar">
    <a href="home.html">Home</a>
    <a href="viewListCourse.html">View List Course</a>
    <a>Từ vựng</a>
    <a>Ngữ pháp</a>
  </div>

  <div class="card-deck row content">
    <div class="card col-3">
      <a href="">
        <img src="https://jes.edu.vn/wp-content/uploads/2017/08/b%C3%A0i-1.jpg" height="200px" width="302px"
          class="card-img-top" alt="">
      </a>

      <div class="card-body">
        <?php
        echo '<a href="./backend/view_tu_vung_n5.php?lesson='.$lesson.'">';
        ?>
          <h3 class="card-title">Phần 1: Từ vựng</h3>
        </a>
      </div>
    </div>
    <div class="card col-3">
      <a href="">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAe72Fqt_lVL9hsBESSfNqJkqwcFujtsv3aA&usqp=CAU"
          width="302px" height="200px" class="card-img-top" alt="">

      </a>
      <div class="card-body">
        <?php 
        echo '<a href="./backend/view_ngu_phap_n5.php?lesson='.$lesson.'">';
        ?>
          <h3 class="card-title">Phần 2: Ngữ pháp</h3>
        </a>
      </div>
    </div>
    <div class="card col-3">
      <a href="">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgG9bzUUk_VNS4ZfoTOg_B3-Mm5svfwbWUVg&usqp=CAU"
          class="card-img-top" alt="">
      </a>
      <div class="card-body">
      <?php 
        echo '<a href="./backend/view_kanji_n5.php?lesson='.$lesson.'">';
        ?>
          <h3 class="card-title">Phần 3: Kanji</h3>
        </a>
      </div>
    </div>
  </div>

  <footer class="footer-distributed">

    <div class="footer-left">
      <img src="https://phenikaa-uni.edu.vn:3600/pu/vi/modules/logo_vn.png">
      <h3>Phenikaa<span>University</span></h3>

      <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">About</a>
        |
        <a href="#">Team</a>
        |
        <a href="#">Contact</a>
      </p>

      <p class="footer-company-name">© 2021 Nihongo Learning Solutions Pvt. Ltd.</p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>A4 - 405,
            K13 CNTT - Việt Nhật</span>
          Khoa CNTT - Đại học Phenikaa</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>+91 22-27782183</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@eduonix.com">support@eduonix.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the team</span>
        We offer training and skill building courses across Technology, Design, Management, Science and
        Humanities.
      </p>
      <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
      </div>
    </div>
  </footer>
</body>

</html>