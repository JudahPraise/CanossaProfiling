const birthBtn = document.querySelector('.birthBtn');
const marriageBtn = document.querySelector('.marriageBtn');
const baptismalBtn = document.querySelector('.baptismalBtn');
const nbiBtn = document.querySelector('.nbiBtn');


document.addEventListener('click', function(ev) {
  var ele = ev.target;
  if (ele.classList.contains("birthBtn")) {

    document.querySelector('.fileLabel').innerHTML ="Birth Certificate";
    document.getElementById('fileType').value = "Birth Certificate"

  }else if(ele.classList.contains("marriageBtn")) {
      
    document.querySelector('.fileLabel').innerHTML ="Marriage Certificate";
    document.getElementById('fileType').value = "Marriage Certificate"

  }
  else if(ele.classList.contains("baptismalBtn")) {

    document.querySelector('.fileLabel').innerHTML ="Baptismal Certificate";
    document.getElementById('fileType').value = "Baptismal Certificate"

  }
  else if(ele.classList.contains("nbiBtn")) {

    document.querySelector('.fileLabel').innerHTML ="NBI Clearance";
    document.getElementById('fileType').value = "NBI Clearance"

  }
});







// birthBtn.addEventListener("click", function(){
//     document.querySelector('.fileLabel').innerHTML ="Birth Certificate";
// });


const plusMinusBtn = document.getElementById('plusMinusBtn');
plusMinusBtn.addEventListener("click", function(){

    if(document.getElementById("toggleIcon").className == "fas fa-minus"){

        document.getElementById("toggleIcon").className = "fas fa-plus";

        
    }else{

        document.getElementById("toggleIcon").className = "fas fa-minus";

    }
       
   
});


