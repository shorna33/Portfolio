<?php 
// Include the database configuration file  
include 'includes/connect.php'; 

// For displaying existing information
$f_id = $img = $lang = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;

    $sql = "SELECT * FROM skills WHERE id = '$id'";
    $run = mysqli_query($conn, $sql);

    while ($fetch = mysqli_fetch_assoc($run)) {
        $f_id = $fetch['id'];
        $img = $fetch['img'];
        $lang = $fetch['skill'];
        
    }
}


?>


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

    <div class="container mt-5">
        <h1 class="d-flex justify-content-center pt-4">Update Skill Information!</h1>
        <form action="" method="post" enctype="multipart/form-data" class="has-validation mt-3">
            <div class="form-group">
                <div class="mb-3">
                    <label for="logo" class="form-label">Enter language logo</label>
                    <input type="hidden" name="id" class="form-control" value=<?php echo $f_id;?>>
                    <input class="form-control" type="file" id="logo" name="logo" value = <?php echo $img;?> required>
                    <div class="invalid-feedback">
                        Please choose a Logo.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="lang" class="form-label">Language Name</label>
                    <input type="text" class="form-control" id="lang" name="lang" value = <?php echo $lang;?> required>
                    <div class="invalid-feedback">
                        Please choose the Language name.
                    </div>
                </div>  
            </div>                              
                <a href="./admin.php" class="btn btn-secondary float-start">Back</a>
                <button class="btn btn-primary float-end" type="submit" name="update">Update</button>                                       
        </form>
    </div>
    
    





    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>

</html>

<?php

// For updating values

if (isset($_POST['update'])) {
    $up_id = $_POST['id'];
    $up_lang = $_POST['lang'];

    $logo_img = $_FILES['logo']['name'];
    $logo_img_temp = $_FILES['logo']['tmp_name'];
    move_uploaded_file($logo_img_temp, "./images/$logo_img");

    $up_query = "UPDATE skills SET img = '$logo_img', skill = '$up_lang' WHERE skills.id = '$up_id'";
    $up_run = mysqli_query($conn, $up_query);

    if ($up_run) {
        echo "<script>alert('Update success')</script>";
        header("Location: admin.php");
        return;
    }
    else{
        echo "<script>alert('Update error')</script>";
        header("Location: admin.php");
        return;
    }
}

?>