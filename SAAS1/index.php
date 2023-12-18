<?php 
@session_start();
if (isset($_SESSION["login"])){
 




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
    

    <!-- form -->


    <!-- <div class="row bg-info text-center rounded-3 m-1">
      <div class="col-sm-12">
        <h4 class="text-center">Form Pendaftaran Siswa Baru</h4>
        <h5 class="text-center">SMK BUDI MULIA PAKISAJI</h5>
        <H6 class="text-center">Tahun Ajaran 2023-2024</H6>
      </div>
    </div>

    <div class="row bg-primary text-center rounded-3 m-2">
      <div class="col-sm-12 p-3">BIO DATA CALON SISWA BARU</div>
    </div>

    <div class="container"> -->
            <form action="vendor/system.php" method="post">
                <input type="hidden" name="form" value="form1">

    
    <div class="my-3">
        <label  for="inputPhone" class="form-label">NAMA:</label>
        <input type="text" name="namadiweb" class="form-control" id="inputPhone">
    </div>

    <div class="my-3">
        <label for="inputPhone" class="form-label">KELAS:</label>
        <input type="text" name="kelasdiweb" class="form-control" id="inputPhone">
    </div>

    <div class="my-3">
        <label for="inputPhone" class="form-label">JURUSAN:</label>
        <input type="text" name="jurusandiweb" class="form-control" id="inputPhone">
    </div>

    <div class="py-3">
        <label for="inputAddress" class="form-label">ALAMAT:</label>
        <input type="text" name="alamatdiweb" class="form-control" id="inputAddress">
    </div>
    <div class="py-3">
        <label for="inputAddress" class="form-label">JK:</label>
        <input type="text" name="jkdiweb" class="form-control" id="inputAddress">
    </div>

    <div id="liveAlertPlaceholder"></div>
        <button type="submit" class="btn btn-secondary" id="liveAlertBtn">submit</button>
        <!-- <button type="submit" class="btn btn-dark">Submit</button> -->
            </form>
    </div>

    <!-- end form -->

    <?php
    include "vendor/konek.php"
    ?>
    <div class="my-5">
        <table border="1px" cellspacing="0px" cellpadding="10px" class="table table-bordered">
            <tr class="table-primary">
                <td>NO</td>
                <td>NAMA</td>
                <td>KELAS</td>
                <td>JURUSAN</td>
                <td>ALAMAT</td>
                <td>JK</td>
                <td>ACTION</td>
            </tr>

        <?php
        $sql = "select * from tb_siswa";
        $ambil = mysqli_query($con, $sql);
        $NU = 0;
        foreach ($ambil as $key){
            $NU++;
            $id = $key['NO'];
            $nm = $key['NAMA'];
            $kl = $key['KELAS'];
            $jr = $key['JURUSAN'];
            $alm = $key['ALAMAT'];
            $jk = $key['JK'];
        
        ?>
            <tr class="table-primary">
                <td><?= $id; ?></td>
                <td><?= $nm; ?></td>
                <td><?= $kl; ?></td>
                <td><?= $jr; ?></td>
                <td><?= $alm; ?></td>
                <td><?= $jk; ?></td>
                <td><button type="button" class="btn btn-outline-primary"><a style="text-decoration: none;" href="edit.php?id=<?=$id?>">edit</a></button>
                    <button type="button" class="btn btn-outline-primary"><a style="text-decoration: none;" href="delete.php?del=<?=$id?>">delete</a></button>
                </td>
            </tr>
        <?php }; ?>
        </table>
    </div>


    </div>















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- <script>
            const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert('Nice, you triggered this alert message!', 'success')
  })
}
        </script> -->
</body>
</html>

<?php 

    }else{
    header("location: log.php");
    exit();
    }
    
 ?>