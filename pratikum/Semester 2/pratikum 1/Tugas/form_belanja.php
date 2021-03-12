<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-primary text-white"><i class="fa fa-shopping-cart"></i> Belanja Online
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="name">Costumer</label>
                                    <input type="text" name="costumer" class="form-control" id="name" placeholder="Nama Costumer" required>
                                </div>
                                <div class="form-group">
                                    <label for="produk">Pilih Produk : </label> <br>
                                    <input type="radio" name="produk" value="TV">TV
                                    <input type="radio" name="produk" value="KULKAS">Kulkas
                                    <input type="radio" name="produk" value="MESIN CUCI"> Mesin Cuci
                                </div>
                                <div class="form-group">
                                    <label for="Jumlah">Jumlah</label>
                                    <input type="number" name="jumlah" value="" placeholder="Jumlah" required>
                                </div>
                                <div class="mx-auto">
                                    <button type="submit" class="btn btn-primary text-right">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-truck" aria-hidden="true"></i> Daftar Harga</div>
                        <div class="card-body">
                            <p>TV : 4.200.000</p>
                            <hr>
                            <p>Kulkas : 3.100.000</p>
                            <hr>
                            <p>Mesin Cuci : 3.800.000</p>
                        </div>
                        <div class="a card-header bg-success text-white text-uppercase"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Harga Dapat Berubah Setiap Saat</div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    $costumer = $_POST['costumer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    ?>
    <div class="container bg-light mt-5 mb-5 p-5 shadow">
        <?php
        echo "<br/>Nama Costumer : " . $costumer;
        echo "<br/>Produk Pilihan : " . $produk;
        echo "<br/>Jumlah Beli : " . $jumlah;
        ?>



        <?php
        if ($produk == 'TV') {
            $tv = 'TV';
            $tv = 4200000 * $jumlah;
            echo "</br>Total Harga : Rp. " . number_format($tv, 0, '.', '.');
        } else if ($produk == 'KULKAS') {
            $kulkas = 'KULKAS';
            $kulkas = 3100000 * $jumlah;
            echo "</br>Total Harga : Rp. " . number_format($kulkas, 0, '.', '.');
        } else if ($produk == 'MESIN CUCI') {
            $mesincuci = 'MESIN CUCI';
            $mesincuci = 3800000 * $jumlah;
            echo "</br>Total Harga : Rp." . number_format($mesincuci, 0, '.', '.');
        } else {
            echo "</br> Jumlah Error : " . 0 * $jumlah;
        }
        ?>
    </div>
</body>

</html>