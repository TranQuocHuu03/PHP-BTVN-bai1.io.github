<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        table{
            width: 500px;
            margin: auto;
            background-color:palevioletred ;
        }
        td{
            padding: 10px;
        }
        .center{
            text-align: center;
            font-weight: bold;
            background: fuchsia;
            color:black;
        }
        .footer button{
            margin-left: 150px;
        }
        input{
            width: 300px;
        }
        button{
            background: #34a853;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }
        button:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
  <header>
  <?php
     if(isset($_POST['typerooms'],$_POST['in'],$_POST['out'],$_POST['dv'])){
    $rooms = $_POST['typerooms'];
    $in = $_POST['in'];
    $out = $_POST['out'];
    $service = $_POST['dv'];
        if($room=="Phòng thường"){
            $room=$rooms;
        }
        else if($room=="Phòng VIP"){
            $room=$rooms;
        }
        else if($room=="Phòng Đơn"){
            $room=$rooms;
        }
        else if($room=="Phòng Đôi"){
            $room=$rooms;
        }
     }

     
?>
  
    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    <b>Tính tiền<b>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Loại phòng</b>
                </td>
                <td>
                    <select value="option" name="typerooms" >
                        <option name="typeroom" value="1">Phòng thường</option>
                        <option name="typeroom" value="2">Phòng VIP</option>
                        <option name="typeroom" value="3">Phòng Đơn</option>
                        <option name="typeroom" value="4">Phòng Đôi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Check in</b>
                </td>
                <td>
                    <input type="date" name="in">
                </td>
            </tr>
            <tr>
                <td>
                    <b>Check out</b>
                </td>
                <td>
                    <input type="date" name="out">
                </td>
            </tr>
            <tr class=checkbox>
                <td class="checkboxs"><b> Dịch vụ</b></td>
                <td class=" favourites" >
                    <input type="checkbox" value="giat" name="dv"> giặt là <br/>
                    <input type="checkbox" value="an" name="dv"> Ăn sáng <br/>
                    <input type="checkbox" value="tam" name="dv"> Tắm hơi
                </td>
            </tr>
            <tr class="footer">
                <td colspan="2">
                <button type="button" name="ok" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">OK</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="font-size:30px; padding:20px;">Bill</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="typeroom">
                                    Type room: <input class="type" placeholder="0" value="<?php echo $room ?>">
                                </div>
                                <br>
                                <br>
                                <div class="hours">
                                    Rental Hour: <input class="hour" placeholder="0">
                                </div>
                                <br>
                                <br>
                                <div class="meals">
                                    Money for meals: <input class="meal" placeholder="0">
                                </div>
                                <br>
                                <br>
                                <div class="services">
                                    Money for services: <input class="service" placeholder="0" value="">
                                </div>
                                <br>
                                <br>
                                <div class="Total">
                                    Total: <input class="totals" placeholder="0">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="CANCLE">CANCLE</button>
                </td>
            </tr>
        </table>
    </form>
</div>
   
  </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>