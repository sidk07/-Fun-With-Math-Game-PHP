<?php
        $con=mysqli_connect("localhost", "root", "", "funwithmath") or die(mysqli_error($con));
        $query="SELECT * FROM `equation` WHERE `sr`=1";
        $result=mysqli_query($con, $query);
        $row=mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>Equation</title>
        <link href="bootall3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootall3/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootall3/js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="equation-style.css">
        <style>   
        </style>
</head>
<body style="font-family: 'Luckiest Guy', cursive;">
  <audio id="myAudio">
    <source src="wrong.mp3" type="audio/mpeg">
  </audio>
  <header>
    <div class="Container">
        <div class="navbar-header" style=" min-height: 100px;">
            <h1><b>FUN WITH MATH</b></h1>
      </div>
      <div>
        <nav>
            <ul>
                <li><a href="direct.html"><h4><span class="glyphicon glyphicon-home"></span> Home</h4></a></li>
                
            <li><a href="direct.html"><h4><span class="glyphicon glyphicon-log-out"></span> Logout</h4></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  
    <div>
        <div class="equation" style="min-height: 300px;">
            <h4 id="question" style="color: darkviolet; font-size: 50px;">1</h4>
        </div>
      
        <div class="answer-options">
            <div class="contain" style="">
                <div class="row">
                    <div  onclick="opt1()" class="options col-lg-6" style="background-color: #FE4A49;min-height: 100px;">
                        <h1 id="option1"  onmouseover="mouseover1();" onmouseout="mouseout1();">1</h1>
                    </div>
                    <div onclick="opt2()" class="options col-lg-6" style="background-color: #2AB7CA;min-height: 100px;">
                        <h1 id="option2" onmouseover="mouseover2();" onmouseout="mouseout2();">2</h1>
                    </div>
                </div>
            </div>
            <div class="contain">
                <div class="row">
                    <div onclick="opt3()" class="options col-lg-6" style="background-color: #FED766;min-height: 100px;">
                        <h1 id="option3" onmouseover="mouseover3();" onmouseout="mouseout3();">3</h1>
                    </div>
                    <div  onclick="opt4()" class="options col-lg-6" style="background-color: #F86624;min-height: 100px;">
                        <h1 id="option4" onmouseover="mouseover4();" onmouseout="mouseout4();">4</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <script language="javascript">
      
      option1 = document.getElementById("option1"),
      option2 = document.getElementById("option2"),
      option3 = document.getElementById("option3"),
      option4 = document.getElementById("option4"),
      audio = document.getElementById("myAudio");

        function generate_equation()
        { 
          
          document.getElementById("option1").style.color="#fff";
          document.getElementById("option2").style.color="#fff";
          document.getElementById("option3").style.color="#fff";
          document.getElementById("option4").style.color="#fff";   

          document.getElementById("question").innerHTML="<?php echo $row['question'] ?>";
          option1.innerHTML = "<?php echo $row['option1'] ?>";
          option2.innerHTML = "<?php echo $row['option2'] ?>";
          option3.innerHTML = "<?php echo $row['option3'] ?>";
          option4.innerHTML = "<?php echo $row['option4'] ?>"; 
          answer="<?php echo $row['answer'] ?>";
        };

        function opt1()
        {
            if(option1.innerHTML == answer){
              generate_equation();
              window.alert("Correct");
            }
            else{
              audio.play();
              document.getElementById("option1").style.color="#ee4035";
            }
        }

        function opt2()
        {
            if(option2.innerHTML == answer){
              generate_equation();
              window.alert("Correct");
            }
            else{
              audio.play();
              document.getElementById("option2").style.color="#ee4035"; 
            }
        }

        function opt3()
        {
            if(option3.innerHTML == answer){
              generate_equation();
              window.alert("Correct");
            }
            else{
              audio.play();
              document.getElementById("option3").style.color="#ee4035";
            }
        }

        function opt4()
        {
          if(option4.innerHTML == answer){
            generate_equation();
            window.alert("Correct");
          }
          else{
            audio.play();
            document.getElementById("option4").style.color="#ee4035";
          }
        }
        generate_equation();


















        function mouseover1(){
          document.getElementById("option1").style.color="#7bc043";
        }

        function mouseout1(){
          document.getElementById("option1").style.color="#fff"; 
        }

        function mouseover2(){
          document.getElementById("option2").style.color="#7bc043";
        }

        function mouseout2(){
          document.getElementById("option2").style.color="#fff"; 
        }

        function mouseover3(){
          document.getElementById("option3").style.color="#7bc043";
        }

        function mouseout3(){
          document.getElementById("option3").style.color="#fff"; 
        }

        function mouseover4(){
          document.getElementById("option4").style.color="#7bc043";
        }

        function mouseout4(){
          document.getElementById("option4").style.color="#fff"; 
        }
  </script>  
</body>
</html>