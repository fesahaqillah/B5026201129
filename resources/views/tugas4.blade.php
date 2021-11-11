<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Animation</title>
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script>
        $(document).ready(function(){
        $("#start").click(function(){
            $("div").animate({fontSize: '3em'}, 500);
            $("div").slideDown();
        });

        $("#stop").click(function(){
            $("div").stop();
        });

        $("#stop2").click(function(){
            $("div").stop(true);
        });

        $("#stop3").click(function(){
            $("div").stop(true, true);
        });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            setTimeout(function() {
                $('.text-animation').removeClass('hidden');
            }, 500);
        })();
    </script>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: rgb(51, 68, 219);
        }
        .text-animation{
            list-style: none;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
        .text-animation li{
            display: inline-block;
            margin-right: 5px;
            font-family: sans-serif;
            font-weight:300;
            font-size: 3em;
            color: #ffffff;
            opacity: 1;
            transition: all 2s ease;
        }
        .text-animation li:last-child{
            margin-right: 0;
        }
        .text-animation.hidden{
            opacity: 0;
        }
        .text-animation.hidden li:nth-child(1) { transform: translateX(-200px) translateY(-200px);}
        .text-animation.hidden li:nth-child(2) { transform: translateX(20px) translateY(100px);}
        .text-animation.hidden li:nth-child(3) { transform: translateX(-150px) translateY(-80px);}
        .text-animation.hidden li:nth-child(4) { transform: translateX(10px) translateY(-200px);}
        .text-animation.hidden li:nth-child(5) { transform: translateX(-300px) translateY(200px);}
        .text-animation.hidden li:nth-child(6) { transform: translateX(20px) translateY(-20px);}
        .text-animation.hidden li:nth-child(7) { transform: translateX(30px) translateY(200px);}
        .text-animation.hidden li:nth-child(8) { transform: translateX(-200px) translateY(-200px);}
        .text-animation.hidden li:nth-child(9) { transform: translateX(20px) translateY(100px);}
        .text-animation.hidden li:nth-child(10) { transform: translateX(-150px) translateY(-80px);}
        .text-animation.hidden li:nth-child(11) { transform: translateX(10px) translateY(-200px);}
        .text-animation.hidden li:nth-child(12) { transform: translateX(-300px) translateY(200px);}
    </style>
</head>

<body>
    <button id="start">Start</button>
    <button id="stop">Stop</button>
    <button id="stop2">Stop all</button>
    <button id="stop3">Stop but finish</button>

    <div>
        <ul class="text-animation hidden">
            <li>F</li>
            <li>E</li>
            <li>S</li>
            <li>A</li>
            <li></li>
            <li>H</li>
            <li>A</li>
            <li>Q</li>
            <li>I</li>
            <li>L</li>
            <li>L</li>
            <li>A</li>
            <li>H</li>
        </ul>
    </div>
</body>
</html>
