<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samia Sharnami</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- js aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <div class="container" style="width: 90vh; margin-top: 12%;">
        <h2 class="text-center mb-5">Admin Log In</h2>
        <form action="login.php" method="post">
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error'];?></p>
            <?php } ?>
            <div class="form-group row mb-2">
              <div class="col-sm-12">
                <input class="form-control" type="text" placeholder="Enter Username" name="uname">
              </div>
            </div>
            <div class="form-group row mb-3">
              <div class="col-sm-12">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass">
              </div>
            </div>
            <button class="btn btn-dark rounded-pill d-flex justify-content-center col-sm-12" style="width: 87vh;" type="submit">Enter</button>
            
            
          </form>
    </div>
    



    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    
</body>
</html>