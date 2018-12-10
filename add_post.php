<?php include('server.php') ?>
<?php 
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Konekin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="custom.css">


</head>
<body>
    

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Konekin</h1>
        </div>
    </div>
    
    
        <nav class="navbar navbar-expand-lg">
            <div class="container col-sm-10">
                <a href = "home.php" class="navbar-brand" href="home.php">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="container col-sm-2">
                <?php if (isset($_SESSION['username'])) : ?>

                    <p>Welcome,</p>
                    <p><?php echo $_SESSION['username']; ?></p>


                    <div class="btn-group">
                        <button class="btn btn-sample" type="button">
                            <a href="home.php?logout='1'" style="color: #aaaaaa;">logout</a>
                        </button>
                    </div>

                <?php endif ?>
            </div>
        </nav>


    <!-- <div class="container"> -->
        <div class="row content">
            <div class="col-sm-2">
                <nav>
                    <ul class="nav flex-column bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="add_post.php">Add Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="del_post.php">Delete Post</a>
                        </li>
                    </ul>
                </nav>
            </div>
                
            <div class="col-sm-10">
                    <div class="container">
                        <div class="row">
                            <form class="col-4" method="post" action="add_post.php">
                                <br>
                                <?php include('errors.php'); ?>
                                <div class="form-group">
                                    <h3 for="isi">Isi Post :</h3>
                                    <textarea class="form-control" name="isi_post" id="isi_post" rows="3" placeholder="Ketikkan unek2mu di sini.."></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-sample" name="kirim">Kirim</button>
                                <br><br><br>
                            </form>
                        </div>
                    </div>
            </div>
        </div>

        

    <!-- </div> -->

    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
