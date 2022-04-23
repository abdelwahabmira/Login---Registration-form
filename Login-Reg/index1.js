
function valid(){
    var x = document.getElementById("emailfeild").value;
    var y = document.getElementById("passfeild").value;
    if (x==""){
      alert("fill the email");
  }
  if (y==""){
    alert("put a password");
  }
  
  
  }
  function validate_register(){
    var x = document.getElementById("regemail").value;
    var y = document.getElementById("regpassword").value;
    var c = document.getElementById("confregpassword").value;
    var z = document.getElementById("regusername").value;
    if (x==""){
      alert(" please insert an email. ");
  }
  if (y==""){
    alert("you can't leave the password empty.  ");
  }
  if (c==""){
    alert("you can't leave confirm password empty.  ");
  }
  if (c!=y){
    alert("Please Confirm The Password.  ");
  }
  if (z==""){
    alert("please put your username!");
  }
  }
  function regemailFormat(){
    var email = document.getElementById("regemail").value;
  
    var boo =  /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    if (boo==false&&email!=""){
      alert("INVALID EMAIL FORMAT !!!");
      return false;
    }
  
  
  }
  function loginemailFormat(){
    var email =document.getElementById("emailfeild").value;
  
    var boo =  /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    if (boo==false&&email!=""){
      alert("INVALID EMAIL FORMAT !!!");
      return false;
    }
  
  
  }
  