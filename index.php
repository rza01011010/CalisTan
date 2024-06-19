<?php
    require "koneksi.php";
    $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 3 ")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalisTan | Home</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1> CalisTan</h1>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Searh Product or Category" aria-label="Recipient's Username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn warna1 text-white">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Popular Category</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori ketegori-push-up d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=pushup">Push Up</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori ketegori-pull-up d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=pullup">Pull Up</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori ketegori-dips d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=dips">Dips</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid warna1 py-5 text-white">
        <div class="conatiner text-center">
            <h3>About Us !</h3>
            <p class="fs-5 mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint sit numquam hic rem repellendus debitis veniam, sequi rerum fugiat natus, earum corrupti ipsum voluptas eaque nobis at commodi neque quod unde incidunt voluptatum tempora. Vel dicta magnam veniam fugiat, dolore facilis error reiciendis aut adipisci tempora, expedita maxime? Exercitationem nostrum, nihil accusantium cum temporibus enim est non molestias facere magnam vitae dolor modi itaque, aut reprehenderit eveniet pariatur ducimus atque, cupiditate earum quod! Dolor nisi iste sed! Ut, ducimus exercitationem.</p>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Product</h3>

            <div class="row mt-5">
               <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="./image/<?php echo $data['foto']; ?>" class="card-image-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                            <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                            <p class="card-text text-harga">Rp. <?php echo $data['harga']; ?>,00</p>
                            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna1 text-white">See More</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="nav-link" href="./produk.php">See More</a>
        </div>
    </div>

    <?php require "footer.php"; ?>
    
    <script src="./bootstrap/js/bootstrap.bundle.js.map"></script>
    <script src="./fontawesome/js/all.min.js"></script>
</body>
</html>