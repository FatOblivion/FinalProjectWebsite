function calc(){
  var bln = validateForm();
  if (bln == false){
    return;
  }
  var bmi;
  var weight = document.fitnessCalc.weight.value;
  var height = document.fitnessCalc.height.value;
  var age = document.fitnessCalc.age.value;
  var hrRate = document.fitnessCalc.hrRest.value;
  var male = document.fitnessCalc.radMale.checked;
  var idealBmi;
  var vo2max;
  var BMIstatus;
  var HrMax =parseFloat(Math.round( 205.8 -(0.685 * age)).toFixed(2));

  if(male == false){
    idealBmi = 0.5*weight /(height/100)^2+11.5;
  } else {
    idealBmi = 0.5 *weight/(height/100)^2+0.03 * age + 11;
  }
  bmi = parseFloat(Math.round(weight / (height /100) ^ 2).toFixed(2));
  
  vo2max = parseFloat(Math.round(15 *  HrMax / hrRate).toFixed(2));

  if (bmi < 20){
    BMIstatus = "Underweight";
  } else if(bmi <= 20 && bmi < 25){
    BMIstatus = "Normal";
  } else if (bmi >=25){
    BMIstatus = "Overweight";
  } else if (bmi>30){
    BMIstatus = "Obese";
  }

  document.getElementById('idealBmi').textContent = 'Your ideal bmi is: ' + idealBmi 
  document.getElementById('currentBmi').textContent = 'Your actual BMI: ' + bmi
  document.getElementById('vo2max').textContent = 'Your Vo2Max is: ' + vo2max
  document.getElementById('bmiStatus').textContent = 'Your BMI status is: ' + BMIstatus 

}

function validateForm() {
    var x = document.forms["fitnessCalc"]["weight"].value;
    var y = document.forms["fitnessCalc"]["height"].value;
    var z = document.forms["fitnessCalc"]["age"].value;
    var a = document.forms["fitnessCalc"]["hrRest"].value;

    if (x == null || x == "" || isNaN(x)) {
      alert("Please enter a valid weight");
      return false;
    }
   if (y == null || y == "" || isNaN(y)) {
      alert("Please enter a valid height");
      return false ;
    }
    if (z == null || z == "" || isNaN(z)) {
      alert("Please enter a valid age");
      return false ;
    }
    if (a == null || z == "" || isNaN(a)) {
      alert("Please enter a valid resting heart rate");
      return false ;
    }

}