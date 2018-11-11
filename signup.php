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
<body style="background-image: url(background-login.png); ">
<div class="container" style="margin-top: 50px;">
    <h1 style="font-size: 100px;">konekin.</h1>
    <p style="font-size: 20px;">Connect me, pls</p><br>
    <p style="font-size: 30px;"><b>Sign Up</b></p>
</div>
<div class="container">
    <div class="row">
        <form class="col-4">
            <div class="form-group">
                <label for="fullname">Full Name :</label>
                <input type="text" class="form-control" id="username" placeholder="username">
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" class="form-control" id="password" placeholder="password">
            </div>
            <label for="gender">Gender :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="M">
                <label class="form-check-label" for="genderMale">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="F">
                <label class="form-check-label" for="genderFemale">
                    Female
                </label>
            </div>
            <br><br>
            <button type="submit" class="btn btn-sample">Log in</button>
        </form>
    </div>
</body>
</html>
