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
        body{
            background: url(https://i.pinimg.com/originals/84/c5/f2/84c5f2fd5aa7239cc05edd89f663d39b.jpg);

        }
        .container{
            background: #ffff;
        }
    </style>
</head>

<body>
    <?php
        // define variables and set to empty values
            $firstname = $lastname = $place = $seats = $quantity = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstname = test_input($_POST["firstname"]);
                $lastname = test_input($_POST["lastname"]);
                $place = test_input($_POST["place"]);
                $seats = test_input($_POST["seats"]);
                $quantity = test_input($_POST["quantity"]);
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
    ?>

    <div class="container col-md-7 mt-4 mb-3 shadow-lg">
        <div class="row mb-3 mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-9 mt-3" >
                <center><h3>Thank you for your enthusiasm,
                <br>
                <?php
                    $namalengkap = $firstname." ".$lastname;
                    $namapanggilan = explode(" " , $namalengkap);
                    echo  $namapanggilan[0];
                ?>
                !^^ </h3></center>
                <br>

                <h6>We'll see you soon at : </h6>

                    <!--PLACE-->
                    <div class="row mt-3 mb-3">
                        <label for="place" class="col-sm-2">Place</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">

                        <?php
                            if ($place=1) {
                                echo "Lapangan Pancasila Simpanglima Semarang, Jawa Tengah";
                            }
                            else if ($place=2) {
                                echo "Grand City Mall & Convex Surabaya, Jawa Timur";
                            } else {
                                echo "Arena Pekan Raya Jakarta, Jakarta Pusat, DKI Jakarta";
                            }
                        ?>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <label for="place" class="col-sm-2">Date/Time</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">

                        <?php
                            if ($place=1) {
                                echo "25 Nov 2021 / 17:00 - 20:00 WIB";
                            }
                            elseif ($place=2) {
                                echo "22 Nov 2021 / 17:00 - 20:00 WIB";
                            } else {
                                echo "20 Nov 2021 / 17:00 - 20:00 WIB";
                            }
                        ?>
                        </div>
                    </div>

                    <h6>Your ticket's detail : </h6>

                    <!--NAME-->
                    <div class="row mt-3 mb-1">
                        <label for="name" class="col-sm-2">Tagname</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                            <?php
                            echo  $lastname.", ".substr($firstname,0,1);
                            ?>
                        </div>
                    </div>

                    <!--SEATS-->
                    <div class="row mb-1">
                        <label for="seats" class="col-sm-2">Seats</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                            <?php
                            echo  $seats;
                            ?>
                        </div>
                    </div>

                    <!--PRICE-->
                    <div class="row mb-1">
                        <label for="price" class="col-sm-2">Price</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">

                            <?php
                            if ($seats=="VVIP"){
                                $VVIP=500000;
                                echo "Rp. $VVIP";
                            }
                            elseif ($seats=="VIP"){
                                $VIP=375000;
                                echo "Rp. $VIP";
                            }
                            elseif ($seats=="Regular"){
                                $Regular=250000;
                                echo "Rp. $Regular";
                            };
                            ?>
                        </div>
                    </div>

                    <!--QUANTITY-->
                    <div class="row mb-1">
                        <label for="quantity" class="col-sm-2">Amount</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                        <?php echo $quantity;?>
                        </div>
                    </div>

                    <!--TOTAL-->
                    <div class="row mb-1">
                        <label for="total" class="col-sm-2">Total</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                        <?php
                        if ($seats=="VVIP")
                        {
                            $tot_harga=$quantity*$VVIP;
                            echo "Rp. $tot_harga";
                        }
                        elseif ($seats=="VIP")
                        {
                            $tot_harga=$quantity*$VIP;
                            echo "Rp. $tot_harga";
                        }
                        elseif ($seats=="Regular")
                        {
                            $tot_harga=$quantity*$Regular;
                            echo "Rp. $tot_harga";
                        } ?>
                        </div>
                    </div>

                    <!--DISKON-->
                    <div class="row mb-1">
                        <label for="diskon" class="col-sm-2">(-)Discount</label>
                        <p class="col-sm-1">:</p>
                        <div class="col-sm-7">
                        <?php
                        if ($quantity>=5)
                        {
                            $diskon=(($tot_harga*10)/100);
                        }
                        elseif ($quantity>=3)
                        {
                            $diskon=(($tot_harga*5)/100);
                        }
                        elseif ($quantity<3)
                        {
                            $diskon=0;
                        } ?>

                        <?php $tot_bayar=$tot_harga-$diskon;
                        echo "Rp. $tot_bayar";
                        ?>
                    </div>
                </div>

                <center><h6>Please do your payment soon before 24 hours! See you~</h6></center>
    </div>

</body>
</html>
