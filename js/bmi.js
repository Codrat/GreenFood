function computeBMI()
      {
        var height=Number(document.getElementById("height").value);
        var weight=Number(document.getElementById("weight").value);

        var BMI=weight/Math.pow(height/100,2);

        document.getElementById("output").innerText=Math.round(BMI*100)/100;
        document.getElementById("output").textContent=Math.round(BMI*100)/100;
        
        var output =  Math.round(BMI*100)/100
      }