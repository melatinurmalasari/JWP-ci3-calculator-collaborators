<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container bg-light text-blue">
    <?php
    $bil1=null;
    $bil2=null;
    if (isset($_GET['bil1'])) {

        $bil1=$_GET['bil1'];
        $bil2=$_GET['bil2'];
        $hasil=0;
        $operasi=$_GET["operasi"];
        switch ($operasi) {
            case '/':
                $hasil = $bil1/$bil2;
                break;

        }
    }
    ?>
    <div class="rows">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
            <h2>Kalkulator Penjumlahan</h2>
            <div class="form-group">
                <label>Bilangan 1:</label>
                <input type="text" name="bil1" class="form-control" value="<?php echo $bil1; ?>" required>
            </div>
            <div class="form-group">
                <label>Bilangan 2:</label>
                <input type="text" name="bil2" class="form-control" value="<?php echo $bil2; ?>"  required>
            </div>
            <br>
            <div class="form-group">
                <select class="form-control" name="operasi">
                    <option value="/">/</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <br>
        <?php
        if (isset($_GET['bil1'])) {
            echo "<h1>$hasil</h1>";
        }
        ?>
    </div>
</div>
</body>
</html>
=======
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Calculator</title>
</head>

<body>
	<div class="container py-5">
			<div class="card-header text-center mt-5">
				<h1>Pembagian</h1>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('pembagian/hasilBagi') ?>" method="POST">
					<div class="mb-3">
						<label for="num1" class="form-label">Bilangan Pertama</label>
						<input type="number" class="form-control" name="num1" placeholder="0" value="0">
					</div>
					<div class="mb-3">
						<label for="num2" class="form-label">Bilangan Kedua</label>
						<input type="number" name="num2" class="form-control" placeholder="0" value="0">
					</div>
					<div class="mb-3">
						<label for="hasil" class="form-label">Hasil Pembagian</label>
						<input type="number" name="hasil" class="form-control" value="0" disabled>
					</div>
					<button type="submit" class="btn btn-primary float-end mb-5" name="submit">Hitung</button>
					<a href="<?php echo base_url('welcome') ?>"type="btn" class="btn btn-primary float-end mb-5">Kembali</a>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
	</script>
</body>

</html>
>>>>>>> feature/perkalian
