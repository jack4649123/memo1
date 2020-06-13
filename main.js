document.getElementById("explain").style.display ="none";
 function clickBtn(){
     const explain = document.getElementById("explain");

     if(explain.style.display=="block"){
         explain.style.display ="none";
     } else {
         explain.style.display ="block";
     }
 }