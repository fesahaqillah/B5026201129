<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js%22%3E"> </script>
    <title>PraktikumRegistration</title>
    <style>
        label {
        display: inline-block;
        width: 150px;
        }
        textarea {
        vertical-align: top;
      }

    </style>
</head>
<body style="background-image: url(background.png);background-size:cover;">
    <div class="container mt-4 shadow-lg">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="text-white">Registration Form</h2>
                <hr>
                <!--FORM REGISTRASI -->
                <form action="https://drive.google.com/drive/folders/134_awOPhl6shrlM6fYlMXciSxE82OJ6z">
                    @csrf

                <!--USER ID-->
                <div class="form-group mt-3 mb-3" >
                    <label for="userid">User Id: </label>
                    <input type="text" id="userid" name="userid" required maxlength="12" minlength="5">
                </div>

                <!--PASSWORD-->
                <div class="form-group mt-3 mb-3" >
                    <label for="password">Password: </label>
                    <input type="text" id="password" name="password" required maxlength="12" minlength="7">
                </div>

                <!--NAME-->
                <div class="form-group mt-3 mb-3" >
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" required maxlength="40" minlength="3">
                </div>

                <!--ADDRESS-->
                <div class="form-group mt-3 mb-3" >
                    <label for="address">Address: </label>
                    <input type="text" id="address" name="address">
                </div>

                <!--Country-->
                <div class="row mb-3">
                    <label for="inputState" class="form-group mt-3 mb-3">Country: </label>
                    <div class="col-sm-10">
                        <select id="inputState" class="form-select">
                            <option selected>(Please select a country)</option>
                            <option>USA</option>
                            <option>Belanda</option>
                            <option>China</option>
                    </select>
                    </div>
                  </div>

                <!--ZIP CODE-->
                <div class="form-group mt-3 mb-3" >
                    <label for="zipcode">ZIP Code: </label>
                    <input type="text" id="zipcode" name="zipcode" required="">
                </div>

                <!--EMAIL-->
                <div class="form-group mt-3 mb-3" >
                    <label for="email">Email: </label>
                    <input type="text" id="email" name="email" required="">
                </div>

                <!--SEX-->
                <div class="form-group mt-3 mb-3" >
                    <label for="sex">Sex: </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio" checked>Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Female
                    </label>
                </div>

                <!--LANGUAGE-->
                <div class="form-group mt-3 mb-3" >
                    <label for="langauge">Language: </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="" required="">English
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="" required="">Non English
                    </label>
                </div>

                <!--ABOUT-->
                <div class="form-group mt-3 mb-3">
                    <label for="About" class="form-label">About :</label>
                    <textarea rows="5" id="About"> </textarea>
                </div>

                <!--SUBMIT-->
                <input type="submit">

                </form>
            </div>
        </div>
    </div>
</body>
</html>
