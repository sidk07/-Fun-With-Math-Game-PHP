<!DOCTYPE html>
<html lang="en">

<head>
        <title>Add</title>
        <link href="bootall3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootall3/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootall3/js/jquery-3.6.0.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="style.css">
        <style>
            
        </style>
</head>

<body style="font-family: 'Luckiest Guy', cursive;">

  <audio id="myAudio">
    <source src="wrong.mp3" type="audio/mpeg">
  </audio>

        <!-- header start -->
            <?php
                require '../includes/header.php';
            ?>
        <!-- header end -->

  <div class="">
        <div class="equation" style="min-height: 300px;">
            <h1  id="num1" style="color: darkviolet; font-size: 150px;">1</h1>
            <h1 style="color: #2AB7CA; font-size: 200px;">×</h1>
            <h1  id="num2" style="color: deeppink; font-size: 150px;" >1</h1>
            <h1  style="color: #F86624; font-size: 150px;">=</h1>
            <h1  style="color: gray; font-size: 150px;">?</h1>
    </div>
      
    <div class="answer-options">
            <div class="contain" style="">
                <div class="row">
                    <div class="options col-lg-6" style="background-color: #FE4A49;min-height: 100px;">
                        <h1 id="option1" onmouseover="mouseover1();" onmouseout="mouseout1();">1</h1>
                    </div>
                    <div class="options col-lg-6" style="background-color: #2AB7CA;min-height: 100px;">
                        <h1 id="option2" onmouseover="mouseover2();" onmouseout="mouseout2();">2</h1>
                    </div>
                </div>
            </div>
            <div class="contain">
                <div class="row">
                    <div class="options col-lg-6" style="background-color: #FED766;min-height: 100px;">
                        <h1 id="option3" onmouseover="mouseover3();" onmouseout="mouseout3();">3</h1>
                    </div>
                    <div class="options col-lg-6" style="background-color: #F86624;min-height: 100px;">
                        <h1 id="option4" onmouseover="mouseover4();" onmouseout="mouseout4();">4</h1>
                    </div>
                </div>
            </div>
        </div>
  </div>

  <script src="multiply.js"></script>
</body>

</html>