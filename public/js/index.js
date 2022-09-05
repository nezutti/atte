document.addEventListener('DOMContentLoaded', () => {
  'use strict'
  const button1 = document.getElementById('workstart');
  const button2 = document.getElementById("workend");
  const button3 = document.getElementById('reststart');
  const button4 = document.getElementById('restend');
    
  
     
    button1.addEventListener('submit', function () {
      button1.disabled = true;
      button2.disabled = false;
      button3.disabled = false;
    

    })
  
    button2.addEventListener('click', function () {
      button1.disabled = false;
      button2.disabled = true;
      button3.disabled = true;
    

    })

    
  }

)