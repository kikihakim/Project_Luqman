<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Grid</title>
</head>

<body>
    
    <div class="container">
        <!-- Grid membagi kolom secara otomatis-->
        <div class="row">
            <div class="col">
            1 0f 3   
            </div>
            <div class="col">
            2 of 3
            </div>
            <div class="col">
            3 of 3
            </div>
        </div>

        <!-- Grid membagi kolom dengan ditambahkan ukuran-->
        <div class="row">
            <div class="col">
            1 0f 3   
            </div>
            <div class="col-5">
            2 of 3 (wider)
            </div>
            <div class="col">
            3 of 3
            </div>
        </div>

        <!-- Grid membagi kolom dengan posisi center-->
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
            1 0f 3   
            </div>
            <div class="col-md-auto">
            Variable width content
            </div>
            <div class="col col-lg-2">
            3 of 3
            </div>
        </div>
    </div>

</body>
</html>

<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>