<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel = "stylesheet" name = "text/css" href = "css/style.css"> 
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <title>TAMPILAN ADMIN</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top " style= "background-color: #1C1F35;">
            <a class="navbar-brand" href="dashboard.php"><i class="fas fa-cloud"></i>ARSIP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 ml-auto">
                <div class = "icon mr-4">
                    <h5>
                    <a href = "page/login.php"><i class="fas fa-sign-out-alt ml-3 text-white" data-toggle = "tooltip" title = "Logout"></i></a>
                    </h5>
                </div>
            </div>
        </nav>

       <!-- SIDEBAR -->
       <div class = "row no-gutters mt-5">
            <div class = "col-md-2 bg-dark mt-2 pr-3 pt-4">
                <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                        <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-user-circle"></i> Admin </a><hr class = "bg-secondary">
                    </li>
                <li class="nav-item">
                        <p class="text-white"> NAVIGATION </p><hr class = "bg-white"></p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="dashadm.php"><i class="fas fa-th-large"></i> Dashboard </a><hr class = "bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="docadm.php"><i class="fas fa-folder"></i> Dokumen </a><hr class = "bg-white">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="peminjam.php"><i class="fas fa-user"></i> User Peminjam </a><hr class = "bg-white">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="transaksi.php"><i class="fas fa-credit-card"></i> Transaksi </a><hr class = "bg-white">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="report.php"><i class="fas fa-print"></i> Report </a><hr class = "bg-white">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="backup.php"><i class="fas fa-cloud-upload-alt"></i> Backup </a><hr class = "bg-white">
                    </li>
                    <hr>
                </ul>
            </div>
            <div class = "col-md-10 p-5 pt-2">
                <h3><i class="fas fa-credit-card mr-2"></i>Transaksi</h3><hr>
                <div class = "row text-white">
                <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Result row of Dokumen</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            
                        ?>
                        
                        <a class="btn btn-primary mb-3" href=".php ? id_=<?php echo $data['id_'];?>"><i class="fas fa-trash">Hapus</i></a>
                        <a class="btn btn-primary mb-3" href=".php ? id_=<?php echo $data['id_'];?>"><i class="fas fa-plus-square mr-2"></i>Tambah Data</a>
                    
                    </table>
                </div><hr>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script type = "text/javascript" src = "../css/admin.js"></script>
    </body>
</html>