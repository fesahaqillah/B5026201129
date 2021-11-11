<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js%22%3E"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>ETS</title>
    <style>
        label{
            display: inline-block;
            width: 150px;
        }
        input::-webkit-outer-spin-button,
                input::-webkit-inner-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                }
    </style>
</head>

<body>
    <div class="container mt-4 mb-3 shadow-lg">
        <div class="row mb-3 mt-4">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <div class="mt-4">Fesa Haqillah Haya <br>Fesa <br>5026201129</div>
                <br>
                <br>
                <center><h3>Form Pendaftaran Kuota Internet</h3></center>
                <br>

                <!--FORM REGISTRATION-->
                <form name="RegistrationForm" class="form-horizontal" action="https://classroom.its.ac.id/login/index.php" method="post">

                    <!--Nama Mahasiswa-->
                    <div class="row mt-3 mb-3">
                        <label for="nama" class="col-sm-4">Nama Mahasiswa</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama">
                        </div>
                    </div>

                    <!--NRP Mahasiswa-->
                    <div class="row mb-3">
                        <label for="nrp" class="col-sm-4">NRP Mahasiswa</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                          <input type="number" class="form-control" id="nrp">
                        </div>
                    </div>

                    <!--JURUSAN-->
                    <div class="row mb-3">
                        <label for="jurusan" class="col-sm-4">Jurusan</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                            <select id="jurusan" class="form-select">
                                <option value=""></option>
                                <option value="1">Sistem Informasi</option>
                                <option value="1">Elektro</option>
                                <option value="1">Informatika</option>
                        </select>
                        </div>
                    </div>

                    <!--NOMOR HANDPHONE-->
                    <div class="row mb-3">
                        <label for="notelp" class="col-sm-4">Nomor Handphone</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                        <input type="number" class="form-control" id="notelp">
                        </div>
                    </div>

                    <!--KIRIM dan Reset-->
                    <div class="row mt-5 mb-3 text-center">
                        <div class="col-3 offset-2">
                        <button class="btn btn-primary" type="submit" id="submit">Kirim</button>
                        </div>
                        <div class="col-3 offset-2">
                        <button class="btn btn-success" type="submit" id="submit">Reset</button>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>

    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js%22%3E"></script>

    <script>
        $(document).ready(function(){
            $("#submit").click(function(){

                var name = $("#nama").val();
                var pattern= /^[a-zA-Z\s]+$/;
                if(!name.match(pattern) || name.length == 1){
                    alert("Nama harus alfabet dan di atas 1 huruf")
                    return false;
                }

                var nrp = $("#nrp").val();
                if (nrp.length < 10 || nrp.length > 10){
                    alert("NRP must be 10 digit");
                    return (false);
                }

                var jurusan = $('select option:selected').val();
                if (jurusan == 0){
                    alert("Jurusan must be select");
                    return (false);
                }

                var nohp = $("#notelp").val();
                if (nohp.length < 10){
                    alert("Please input a valid phone number");
                    return (false);
                }

            });
            });
    </script>
</body>
</html>
