<?php
    session_start();
    include "includes/connect.php";

    if(isset($_SESSION['id']) && isset($_SESSION['uname'])) {
        

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

        <!-- <div class="container float-end">
            <p>Hello <?php echo $_SESSION['uname']; ?>!</p>
            <a href="logout.php" class="btn btn-dark align-content-center">Logout</a>
        </div> -->
    
        <div class="container mt-5">
            <h1 class="text-center">Welcome to admin panel!</h1>
            <div class="container">
                <table class="table table-hover table-dark table-striped table-lg mt-5">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">SL. No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            $cell_query = "SELECT * FROM skills";
                            $cell_run = mysqli_query($conn, $cell_query);
                            
                            while ($fetch = mysqli_fetch_assoc($cell_run)) {                            
                        ?>
                        <tr>
                        <th scope="row"><?php echo $fetch['id']; ?></th>
                        <td><div style="width: 40px; height: 40px;"><?php header("Content-Type: image/png"); echo $fetch['img']; ?></div></td>
                        <td><?php echo $fetch['skill']; ?></td>
                        <td>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                        <td>                            
                            <a href="#" class="btn btn-primary">Edit</a>
                        </td>
                        </tr>
                        <?php }?>
                    </tbody>
                    </table>

                    <?php
                        if(isset($_POST["submit"])) {
                            $image = $_FILES['logo']['tmp_name'];
                            $logo = addslashes(file_get_contents($image));
                            $lang = $_POST['lang'];

                            $query = "INSERT INTO skills (img, skill) VALUES('$logo', '$lang')";
                            $run = mysqli_query($conn, $query);
                
                            if ($run) {
                                echo "<script>alert('Inserted successfully')</script>";
                            }
                            else{
                                echo "<script>alert('Insertion failed')</script>";
                            }
                           }
                                        
                    ?>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 45%;">
                    Add skill
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Enter skill information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        
                        <form action="/firstProject/admin.php" method="post">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="logo" class="form-label">Enter language logo</label>
                                    <input class="form-control" type="file" id="logo" name="logo">
                                </div>
                                <div class="mb-3">
                                    <label for="lang" class="form-label">Language Name</label>
                                    <input type="text" class="form-control" id="lang" name="lang">
                                </div>  
                            </div>
                            <div class="float-end">                                
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a type="button" href="admin.php" class="btn btn-primary" type="submit" name="submit">Submit</a>   
                            </div>                                          
                        </form>
                        </div>
                        </div>
                    </div>
                    </div>
            

    
            <a href="logout.php" class="btn btn-dark float-end mt-5">Logout</a>
        </div>
        



        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        
    </body>
    </html>

    <?php
    }
    else{
        header("Location: index.php");
        exit();
    }
    ?>