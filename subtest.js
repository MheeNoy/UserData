
  function myFunction() {
  let Number = document.getElementByClassName("numb").value;
  
  let text;
     if(isNaN(Number) || Number == "" || Number < 99){
     
      text="กรุณาใส่ตัวเลขเพื่อสร้างQRcode และ มี จำนวน 4 หลักขึ้นไป";
      document.getElementById("demo").innerHTML= text;
      
      
     }else{
      document.getElementById("demo").innerHTML= null;
      new QRCode(document.getElementById("demo"), xqrcode);
      qrcode.clear(); 
      qrcode.makeCode("#");
     
    }
     
  }

  document.getElementById("Productform").addEventListener("click", function(){
    document.getElementByClassName("Productform").innerHTML="กรุณากรอกเฉพาะตัวอักษรภาษาอังกฤษ";
  });
  window.addEventListener("resize", function(){
    document.getElementById("demo").innerHTML = sometext;
  });

    