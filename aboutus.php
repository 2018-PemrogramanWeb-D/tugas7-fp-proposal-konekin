<?php include('server.php'); ?>
<?php
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
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
    
    <?php $fakultas = 0; ?>
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
        
                <div class="collapse navbar-collapse" id="navbarsExample07">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Faculties</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown07">
                                    <h1 class="dropdown-header">Faculties</h1>
                                    <a class="dropdown-item" href="home.php?fak=1">FIA</a>
                                    <a class="dropdown-item" href="home.php?fak=2">FTI</a>
                                    <a class="dropdown-item" href="home.php?fak=3">FTE</a>
                                    <a class="dropdown-item" href="home.php?fak=4">FTSLK</a>
                                    <a class="dropdown-item" href="home.php?fak=5">FADP</a>
                                    <a class="dropdown-item" href="home.php?fak=6">FTK</a>
                                    <a class="dropdown-item" href="home.php?fak=7">FMKSD</a>
                                    <a class="dropdown-item" href="home.php?fak=8">FTIK</a>
                                    <a class="dropdown-item" href="home.php?fak=9">FBMT</a>
                                    <a class="dropdown-item" href="home.php?fak=10">FV</a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a href = "aboutus.php" a class="nav-link" href="aboutus.php">About</a>
                        </li>
                    </ul>

                </div>
                
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

    <div class="container">
        <br>
        <h1>About Us</h1>
        <p>Konekin is Social Media Platform Exclusive for student of Institute Teknologi Sepuluh Nopember.</p>
        <br><br><br>

        <h5>Developers:</h5>
        <p>Irshad</p>
        <p>Taufiq</p>
        <p>Jihad</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
