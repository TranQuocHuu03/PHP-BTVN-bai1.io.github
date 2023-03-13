<!doctype html>
<?php
session_start();
?>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="user.css">

  <style>
    * {
      margin: 0;
      padding: 0;
    }

    .container .detail {
      margin-left: 20px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      /* chia làm 4 cột */
      grid-column-gap: 20px;
      /* khoảng cách giữa các cột */
      grid-row-gap: 20px;
      /* khoảng cách giữa các hàng cột */
      grid-gap: 15px;
    }

    .detail {
      margin-top: 50px;
    }

    /* @media(min-width:80%) {} */

    /* .session {
      margin-left: 5px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      grid-gap: 15px;
    } */

    button .detail {
      text-decoration: none;
      color: darkorange;
    }

    .collapse {
      margin-left: 400px;

    }

    .price {
      display: grid;
      grid-template-columns: 1fr 1fr;
      /* chia làm 4 cột */
      grid-column-gap: 20px;
      /* khoảng cách giữa các cột */
      grid-row-gap: 20px;
      /* khoảng cách giữa các hàng cột */
      grid-gap: 15px;
      background-color: darkgoldenrod;
      width: 550px;
      height: 150px;
      border-radius: 20px;


    }

    .price .newprice b {
      margin-left: 10px;
      font-size: 40px;

    }

    .infor b {
      font-size: 20px;
    }

    .cuppon {
      margin-top: 10px;
      margin-left: 12px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      /* chia làm 4 cột */
      grid-column-gap: 20px;
      /* khoảng cách giữa các cột */
      grid-row-gap: 20px;
      /* khoảng cách giữa các hàng cột */
      grid-gap: 15px;
    }

    .vourchprice {
      margin-left: 10px;
    }

    .mottram {
      width: 100px;
      height: 30px;
      background-color: red;
      text-align: center;
      border-radius: 10px;
    }

    .haitram {
      width: 100px;
      height: 30px;
      background-color: red;
      text-align: center;
      border-radius: 10px;
    }

    .batram {
      width: 100px;
      height: 30px;
      background-color: red;
      text-align: center;
      border-radius: 10px;
    }

    .xl {
      margin-top: 10px;
      margin-left: 12px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      /* chia làm 4 cột */
      grid-column-gap: 20px;
      /* khoảng cách giữa các cột */
      grid-row-gap: 20px;
      /* khoảng cách giữa các hàng cột */
      grid-gap: 15px;
    }

    .oldprice b {
      font-size: 40px;
    }

    .measure {
      margin-top: 10px;
      margin-left: 12px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      /* chia làm 4 cột */
      grid-column-gap: 20px;
      /* khoảng cách giữa các cột */
      grid-row-gap: 20px;
      /* khoảng cách giữa các hàng cột */
      grid-gap: 15px;
    }



    .image img {
      width: 100%;
      height: 500px;
      transition-duration: 0.4s;
    }

    .image img:hover {
      transform: scale(1.05);
    }

    .list-image {
      margin-top: 10px;
      margin-left: 12px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      /* chia làm 4 cột */
      grid-column-gap: 10px;
      /* khoảng cách giữa các cột */
      grid-row-gap: 10px;
      /* khoảng cách giữa các hàng cột */
      grid-gap: 10px;
    }

    .imageone img {
      height: 150px;
    }

    .imagetwo img {
      height: 150px;
    }

    .imagethree img {
      height: 150px;
    }
    .detail{
      background-color:burlywood ;
    }
    .infor b{
      color: black;
    }
  </style>
</head>

<body>


  <header>
    <!-- place navbar here -->
    <div class="container-fluild md-5 " style="background-image: url('https://i1-vnexpress.vnecdn.net/2015/08/18/VNE-10-Of-The-Strangest-Trees-Around-The-World-1-1439870467.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=7PWQIqxsuS6T5cVOH2WGyQ'); color: white; font-size: 40px; height: autopx; width: 100%;">
      <div class="header">
        <nav class="navbar navbar-expand-sm navbar-light bg-warning">
          <div class="container">
            <h3><b class="navbar-brand" href="#">Anh Trần Shop</b></h3>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">

              <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
      <div class="container"  >
        <div class="detail">

          <?php if (isset($_GET['detail'])) {

          ?>
            <div class="image">

              <img class="card-img-top" src="<?php echo $_SESSION['traicay'][$_GET['detail']]['image'] ?>" height="400px" alt="">
              <center>
                <div class="list-image">
                  <div class="imagethree">
                    <img class="card-img-top" src="<?php
                                                    if (($_SESSION['traicay'][$_GET['detail']]['image']) != "") {

                                                      echo $_SESSION['traicay'][$_GET['detail']]['image'];
                                                    }
                                                    if (($_SESSION['traicay'][$_GET['detail']]['image']) == "") {
                                                      echo "";} ?>" height="400px" alt="">
                  </div>
                  <div class="imageone">
                    <img class="card-img-top" src="<?php
                                                    if (($_SESSION['traicay'][$_GET['detail']]['imageone']) != "") {
                                                      echo $_SESSION['traicay'][$_GET['detail']]['imageone'];
                                                    } 
                                                    if (($_SESSION['traicay'][$_GET['detail']]['imageone']) == "") {
                                                      echo "";}
                                                    ?>" height="100px" alt="">
                  </div>
                  <div class="imagetwo">
                    <img class="card-img-top" src="<?php
                                                    if (($_SESSION['traicay'][$_GET['detail']]['imagetwo']) != "") {
                                                      echo $_SESSION['traicay'][$_GET['detail']]['imagetwo'];
                                                    } 
                                                    if (($_SESSION['traicay'][$_GET['detail']]['imagetwo']) == "") {
                                                      echo "";}
                                                    ?>" height="100px" alt="">
                  </div>

                </div>
              </center>
            </div>

            <div class="infor">
              <b>Thương hiệu: Anh Trần(Phong cảnh)</b>
              <br>
              <div class="dt"><?php echo  $_SESSION['traicay'][$_GET['detail']]['note'] ?></div>
              <br>
              <br>
              <div class="cost">
                <div class="price">
                  <div class="newprice">
                    <b><?php echo  number_format($_SESSION['traicay'][$_GET['detail']]['price']) ?>đ</b>
                  </div>
                  <div class="oldprice"><b><?php
                                            if (($_SESSION['traicay'][$_GET['detail']]['priceold']) != "") {
                                            ?>
                        <p> <del> <?php echo  number_format($_SESSION['traicay'][$_GET['detail']]['priceold']) ?>đ</del></p>
                      <?php
                                            } else if (($_SESSION['traicay'][$_GET['detail']]['priceold']) == "") {
                                            }
                      ?>
                    </b></div>
                  <div class="vourchprice"><b>Giảm:<?php
                                                    if (($_SESSION['traicay'][$_GET['detail']]['giamgia']) != "") {
                                                      $vourch =  $_SESSION['traicay'][$_GET['detail']]['giamgia'];
                                                      echo $vourch;
                                                    } else if (($_SESSION['traicay'][$_GET['detail']]['giamgia']) == "") {
                                                      $vourch = 0;
                                                    }
                                                    ?> %</b></div>

                  <div class="vourch"><b><?php
                                          echo number_format(($_SESSION['traicay'][$_GET['detail']]['price']) * (($vourch) / 100)) ?>đ</b></div>

                </div>

              </div>
              <br>
              <?php
              if (isset($_GET['detail'])) {
                if (($_SESSION['traicay'][$_GET['detail']]['maone']) != "" && ($_SESSION['traicay'][$_GET['detail']]['matwo']) != "" && ($_SESSION['traicay'][$_GET['detail']]['mathree']) != "") {
              ?>
                  <b>Mã giảm giá</b>
                  <div class="cuppon">

                    <div class="mottram"><?php echo  $_SESSION['traicay'][$_GET['detail']]['maone'] ?></div>
                    <div class="haitram"><?php echo  $_SESSION['traicay'][$_GET['detail']]['matwo'] ?></div>
                    <div class="batram"><?php echo  $_SESSION['traicay'][$_GET['detail']]['mathree'] ?></div>
                  </div>
              <?php

                }
              }
              ?>

              <br>
              <form action="" method="post">
                <div class="xl">
                  <div class="quantity">
                    <b>Số lượng</b>
                    <div class="measure">
                      <div class="lg">
                        <input type="text" class="form-control" name="sl" placeholder="0">
                      </div>
                      <div class="ok">
                        <button type="submit" class="btn btn-primary" name="ok">OK</button>
                      </div>
                    </div>
                    <?php
                    if (isset($_POST['ok'])) {
                      $tong = (int)$_POST['sl'];





                    ?>

                  </div>
                  <div class="tongtien">
                    <b>Tổng tiền</b>
                    <p>
                    <?php
                      if ((($_SESSION['traicay'][$_GET['detail']]['price']) * (number_format($vourch) / 100)) != 0) {
                        echo number_format($tong * ((($_SESSION['traicay'][$_GET['detail']]['price']) * ($vourch)) / 100));
                      } else {
                        echo number_format(($tong) * ($_SESSION['traicay'][$_GET['detail']]['price']));
                      }
                    }

                    ?>
                    </p>
                  </div>
                  <div class="thanhtoan">
                    <button type="submit" class="btn btn-primary" name="mua" value="Chọn mua">Chọn mua</button>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary" name="gop" value="Mua góp">Mua góp</button>
                  </div>
                </div>
              </form>

            </div>
          <?php
          }

          ?>


        </div>







      </div>
    </div>














  </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>