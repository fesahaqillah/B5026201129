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
    </style>
</head>

<body>
    <div class="container mt-4 mb-3 shadow-lg">
        <div class="row mb-3 mt-4">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5">
                <center><h3>Buy Your Tickets, Right Now.</h3></center>
                <br>

                <!--FORM REGISTRATION-->
                <form name="TicketsForm" class="form-horizontal" action="ticket" method="post">
                    @csrf

                    <!--Nama Depan-->
                    <div class="row mt-3 mb-3">
                        <label for="firstname" class="col-sm-4">First name</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                    </div>

                    <!--Nama Belakang-->
                    <div class="row mt-3 mb-3">
                        <label for="lastnama" class="col-sm-4">Last name</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                    </div>

                    <!--GENDER-->
                    <div class="row mt-3 mb-3">
                        <label for="gender" class="col-sm-4">Gender</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                            <label class="radio-inline">
                                <input value="Male" type="radio" name="optradio[]"> Male
                            </label>
                            <label class="radio-inline">
                                <input value="Female" type="radio" name="optradio[]"> Female
                            </label>
                        </div>
                    </div>

                    <!--PLACE-->
                    <div class="row mt-3 mb-3">
                        <label for="place" class="col-sm-4">Place</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                            <select id="place" class="form-select" name="place">
                                <option value=""></option>
                                <option value="1">Semarang</option>
                                <option value="2">Surabaya</option>
                                <option value="3">Jakarta</option>
                            </select>
                        </div>
                    </div>

                    <!--SEATS-->
                    <div class="row mt-3 mb-3">
                        <label for="seats" class="col-sm-4">Seats</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                            <select id="seats" class="form-select" name="seats">
                                <option value="0"></option>
                                <option value="VVIP">VVIP</option>
                                <option value="VIP">VIP</option>
                                <option value="Regular">Regular</option>
                            </select>
                        </div>
                    </div>

                    <!--QUANTITY-->
                    <div class="row mt-3 mb-3" >
                        <label for="quantity" class="col-sm-4">Quantities</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                        <input type="number" id="quantity" name="quantity">
                        </div>
                    </div>

                    <!--KIRIM dan Reset-->
                    <div class="mt-5 mb-5">
                        <center><button type="submit" class="btn btn-primary" id="submit" >Submit</button></center>
                    </div>

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

                var firstname = $("#firstname").val();
                var pattern= /^[a-zA-Z\s]+$/;
                if(!firstname.match(pattern) || firstname.length < 1){
                    alert("First name should be alphabet")
                    return false;
                }

                var lastname = $("#lastname").val();
                var pattern= /^[a-zA-Z\s]+$/;
                if(!lastname.match(pattern) || lastname.length < 1){
                    alert("Last name should be alphabet")
                    return false;
                }

                var place = $('select option:selected').val();
                if (place == 0){
                    alert("Place must be select");
                    return (false);
                }

                var sleeve = $("input[type='radio']:checked");
                if(sleeve.length == 0 ){
                    alert("Sleeve must be select");
                    return (false);
                }

                var seats = $('select option:selected').val();
                if (seats == 0){
                    alert("Seats must be select");
                    return (false);
                }

                var quantity = $("#quantity").val();
                if (quantity.length < 1){
                    alert("You can't buy 0 tickets");
                    return (false);
                }

            });
            });
    </script>
</body>
</html>
