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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

</head>
<body style="background-image: url(background-login.png);" >
<div class="container" style="margin-top: 50px;">
    <h1 style="font-size: 100px;">konekin.</h1>
    <p style="font-size: 20px;">Connect me, pls</p><br>
    <p style="font-size: 30px;"><b>Daftar</b></p>
</div>
<div class="container">
    <div class="row">
        <form class="col-4" action="signup.php">

            <div class="form-group">
                <label for="namaLengkap">Nama Lengkap :</label>
                <input type="text" class="form-control" id="namaLengkap" placeholder="nama lengkap">
            </div>

            <div class="form-group">
                <label for="nrp">NRP :</label>
                <input type="text" class="form-control" id="nrp" placeholder="nrp">
            </div>
            
            <label for="gender">Gender :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="genderLaki" value="L">
                <label class="form-check-label" for="genderLaki">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="genderPerempuan" value="P">
                <label class="form-check-label" for="genderPerempuan">
                    Perempuan
                </label>
            </div>

            <br>

            <div class="form-group">
                <label for="fakultas">Fakultas :</label>
                <select class="form-control" id="fakultas">
                    <option value="1">Ilmu Alam</option>
                    <option value="2">Teknologi Industri</option>
                    <option value="3">Teknologi Elektro</option>
                    <option value="4">Teknik Sipil, Lingkungan, dan Kebumian</option>
                    <option value="5">Arsitektur, Desain, dan Perencanaan</option>
                    <option value="6">Teknologi Kelautan</option>
                    <option value="7">Matematika, Komputasi, dan Sains Data</option>
                    <option value="8">Teknologi Informasi dan Komunikasi</option>
                    <option value="9">Bisnis dan Manajemen Teknologi</option>
                    <option value="10">Vokasi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="uname">Username :</label>
                <input type="text" class="form-control" id="uname" placeholder="username">
            </div>

            <div class="form-group">
                <label for="pass1">Password :</label>
                <input type="text" class="form-control" id="pass1" placeholder="password">
            </div>

            <div class="form-group">
                <label for="pass2">Confirm password :</label>
                <input type="text" class="form-control" id="pass2" placeholder="confirm password">
            </div>

            <button type="submit" class="btn btn-sample">Daftar</button>

        </form>
    </div>
</div>

<script>
    var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 0; j < selElmnt.length; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;
                for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }
    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>
</body>
</html>
