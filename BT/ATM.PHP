<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border:1px solid black;
            width: 800px;
            height: 600px;
        }
        .image{
            display: flex;
        }
        .image .form b{
            font-size: 40px;
            color: red;
        }
        .form{
            padding: 30px;
        }
        .form p{
            font-size: 20px;
        }
        .src{
            padding: 20px;
        }
        .form input{
            margin-bottom: 20px;
        }
        table tr th{
            font-size: 20px;
        }
        table{
            width: 700px;
        }
        .logout button{
            margin-top: 40px;
            background-color: yellow;
        }
    </style>
</head>
<body>
    <center>
        <div class="container">
                <form action="" method="post">
                    <div class="image">
                        <div class="src">
                            <img style="height:200px; width:200px;" src="https://play-lh.googleusercontent.com/HDvcBYx8o2RqTeviL40N_HyP-ccg68LH9Sa1MN_sEkxI8cOKwRYWS3XrEda38PolbT0">
                        </div>
                        <div class="form">
                            <b>MÔ PHỎNG MÁY ATM</b>
                            <br>
                            <br>
                            <p>Hãy nhập số tiền bạn muốn thực hiện giao dịch này!</p>
                            <input type="text" name="money" value="" placeholder="0">
                            <input type="submit" name="ok" value="Thực hiện">
                        </div>
                    </div>
                    <br>
                    <br>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Mệnh giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $quanlity=0;
                            $quanlitys=0;
                            $quanlityss=0;
                            $quanlitysss=0;
                            $quantity=0;
                            $quantitys=0;
                            $quantityss=0;
                            $quantitysss=0;
                            $total=0;
                            if(isset($_POST['money'])){
                                $price=(int)$_POST['money'];
                            }
                            if(isset($_POST['ok'])){
                                $quanlity=((int)($price/500000));
                                $du=((int)$price%500000);
                                if($du==0){
                                    $quantity=$quanlity*500000;
                                    $total=$quantity;
                                }
                                else if($du>=200000 && $du<500000){
                                    $next=((int)($du/200000));
                                    $quanlitys+=$next;
                                    $dus=((int)($du%200000));
                                    if($dus==0){
                                        $quantity=$quanlity*500000;
                                        $quantitys=$quanlitys*200000;
                                        $total=$quantity +$quantitys; 
                                    }
                                    else if($dus>=100000 && $dus<200000){
                                        $nexts=((int)($dus/100000));
                                        $quanlityss+=$nexts;
                                        $duss=((int)($dus%100000));
                                        if($duss==0){
                                            $quantity=$quanlity*500000;
                                            $quantitys=$quanlitys*200000;
                                            $quantityss=$quanlityss*100000;
                                            $total = $quantity +$quantitys + $quantityss;
                                        }
                                        else if($duss>=50000 && $duss<100000){
                                            $nextss=((int)($duss/50000));
                                            $quanlitysss+=$nextss;
                                            $dusss=$duss%50000;
                                            if($dusss==0){
                                                $quantity=$quanlity*500000;
                                                $quantitys=$quanlitys*200000;
                                                $quantityss=$quanlityss*100000;
                                                $quantitysss=$quanlitysss*50000;
                                                $total =$quantity +$quantitys +$quantityss + $quantitysss;  
                                            }
                                        }
                                    }
                                    else if($dus>=50000 && $dus<100000){
                                        $nextss=((int)($dus/50000));
                                        $quanlitysss+=$nextss;
                                        $duss=$dus%50000;
                                        if($duss==0){
                                            $quantity=$quanlity*500000;
                                            $quantitys=$quanlitys*200000;
                                            $quantityss=$quanlityss*100000;
                                            $quantitysss=$quanlitysss*50000;
                                            $total =$quantity +$quantitys +$quantityss + $quantitysss;
                                        }
                                    }
                                }
                                if($du>=100000 && $du<200000){
                                    $next=((int)($du/100000));
                                    $quanlityss+=$next;
                                    $dus=((int)($du%100000));
                                    if($dus==0){
                                        $quantity=$quanlity*500000;
                                        $quantitys=$quanlitys*200000;
                                        $quantityss=$quanlityss*100000;
                                        $quantitysss=$quanlitysss*50000;
                                        $total =$quantity +$quantitys +$quantityss + $quantitysss;   
                                    }
                                    else if($dus>=50000 && $dus<100000){
                                        $nexts=((int)($dus/50000));
                                        $quanlitysss+=$nexts;
                                        $duss=((int)($dus%50000));
                                        if($duss==0){
                                            $quantity=$quanlity*500000;
                                            $quantitys=$quanlitys*200000;
                                            $quantityss=$quanlityss*100000;
                                            $quantitysss=$quanlitysss*50000;
                                            $total =$quantity +$quantitys +$quantityss + $quantitysss;
                                       
                                        }
                                    }
                                }
                                else if($du>=50 && $du<100000){
                                    $nexts=((int)($du/50000));
                                    $quanlitysss+=$nexts;
                                    $duss=((int)($du%50000));
                                    if($duss==0){
                                        $quantity=$quanlity*500000;
                                        $quantitys=$quanlitys*200000;
                                        $quantityss=$quanlityss*100000;
                                        $quantitysss=$quanlitysss*50000;
                                        $total =$quantity +$quantitys +$quantityss + $quantitysss;   
                                    }
                                }    
                            }
                            echo "<tr>";
                            echo " <td> Mệnh giá 500.000 </td>" ;   
                            echo " <td> $quanlity </td>";
                            echo " <td>".number_format($quantity)."</td>"; 
                            echo "</tr>";
                            echo "<tr>";
                            echo " <td> Mệnh giá 200.000  </td> ";
                            echo " <td> $quanlitys </td> ";
                            echo " <td>".number_format($quantitys)."</td>"; 
                            echo "</tr>";
                            echo "<tr>";
                            echo " <td> Mệnh giá 100.000 </td>";
                            echo " <td> $quanlityss </td>";
                            echo " <td>".number_format($quantityss)."</td>"; 
                            echo "</tr>";
                            echo "<tr>";
                            echo " <td> Mệnh giá 50.000 </td>";
                            echo " <td> $quanlitysss  </td>";
                            echo " <td>".number_format($quantitysss)."</td>";
                            echo "</tr>";
                            ?>

                            <?php
                                session_start();
                                unset($_SESION['tk']);  
                                // để xóa một địa chỉ tk khỏi trang đó 
                                if(!isset($_SESSION['tk'])){  // kiểm tra xem tk mình đăng nhập từ trang nào
                                    header('location:login.php'); 
                                }
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <div class="price" name="price">
                        <b>Tổng tiền:<b>
                        <input type="text" name="text" value="<?php  echo number_format($total)?>" placeholder="0">
                    </div>
                    <div class="logout" name="logout">
                        <a href="logout.php">
                            <button type="submit" name="Logout">Logout</button>
                        </a>
                    </div>
                </form>  
            </center>
    
</body>
</html>