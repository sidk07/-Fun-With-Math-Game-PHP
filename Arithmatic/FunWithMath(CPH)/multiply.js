const option1 = document.getElementById("option1"),
      option2 = document.getElementById("option2"),
      option3 = document.getElementById("option3"),
      option4 = document.getElementById("option4")
      audio = document.getElementById("myAudio");  
var answer = 0;

function generate_equation(){ 

  document.getElementById("option1").style.color="#fff";
  document.getElementById("option2").style.color="#fff";
  document.getElementById("option3").style.color="#fff";
  document.getElementById("option4").style.color="#fff";

  var num1 = Math.floor(Math.random() * 13),
      num2 = Math.floor(Math.random() * 13),
      dummyAnswer1 = Math.floor(Math.random() * 10),
      dummyAnswer2 = Math.floor(Math.random() * 10),
      dummyAnswer3 = Math.floor(Math.random() * 10),
      allAnswers = [],
      switchAnswers = [];

  answer = eval(num1 * num2);
  
  document.getElementById("num1").innerHTML = num1; 
  document.getElementById("num2").innerHTML = num2; 

  allAnswers = [answer, dummyAnswer1, dummyAnswer2, dummyAnswer3];

  for (i = allAnswers.length; i--;){
    switchAnswers.push(allAnswers.splice(Math.floor(Math.random() * (i + 1)), 1)[0]);
  };

  option1.innerHTML = switchAnswers[0];
  option2.innerHTML = switchAnswers[1];
  option3.innerHTML = switchAnswers[2];
  option4.innerHTML = switchAnswers[3]; 

};

option1.addEventListener("click", function(){
  if(option1.innerHTML == answer){
    generate_equation();
  }
  else{
    audio.play();
    document.getElementById("option1").style.color="#ee4035";
  }
});

option2.addEventListener("click", function(){
  if(option2.innerHTML == answer){
    generate_equation();
  }
  else{
    audio.play();
    document.getElementById("option2").style.color="#ee4035"; 
  }
});

option3.addEventListener("click", function(){
  if(option3.innerHTML == answer){
    generate_equation();
  }
  else{
    audio.play();
    document.getElementById("option3").style.color="#ee4035";
  }
});

option4.addEventListener("click", function(){
if(option4.innerHTML == answer){
  generate_equation();
}
else{
  audio.play();
  document.getElementById("option4").style.color="#ee4035";
}
});

generate_equation()

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
