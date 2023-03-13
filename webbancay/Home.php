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

        .container {
            display: grid;
            width: 100%;
            height: auto;
        }

        .session {
            display: grid;
        }

        @media(min-width:100%) {}

        .session {
            margin-left: 1px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 15px;
        }

        button .detail {
            text-decoration: none;
            color: darkorange;
        }

        .detail .btn {
            width: 100%;
        }
        .detail button {
            width: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        a .detail {
            width: 100%;
        }
        .price {
            color: black;
        }

        .card-title {
            color: black;
        }

        .card img {
            transition-duration: 0.3s;
        }

        .card img:hover {
            transform: scale(1.05);
        }

        .container-fluild {
            background-color: blanchedalmond;
        }

        .title {
            color: yellow;
        }

        .image img {
            width: 100%;
            height: 500px;
            transition-duration: 0.4s;
        }

        .image img:hover {
            transform: scale(1.05);
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
              <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Main function</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                  </div>
                </li>
              </ul>
              <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
            <div class="container">
                <div class="session">
                    <?php
                    include "connect.php";
                    $sql = "SELECT *FROM sanpham";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {

                    ?>
                        <div class=" col-12 mt-5">
                            <div class="card product p-2" styte="width:auto">
                                <img class="card-img-top" src="<?php echo $row['image'] ?>" height="250px" alt="">
                                <div class="card-title product-title text-center h5"><?php echo $row['name'] ?></div>
                                <div class="price text-center h6"><?php echo $row['price'] ?></div>
                                <a class="detail" href="detail.php? detail=<?php echo $row['id']; ?>" style="width:200px; height:60px; ">
                                    <button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Detail</button>
                                </a>
                                <button class="text-center add-to-cart btn btn-outline-warning add-cart">
                                    <a>
                                        <span class="material-symbols-outlined"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                            </svg></span>
                                    </a>
                                </button>
                            </div>
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