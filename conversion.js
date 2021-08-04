function validate(){
  var from=document.getElementById("from").value;
  var to=document.getElementById("to").value;
  var value=document.getElementById("value").value;
  if(from==""){
    alert("Enter the value from which you WANT TO CONVERT");
    return false;
  }
  if(to == ""){
    alert("Enter The Value  You Want To Convert INTO");
    return false;
  }
  if(value == ""){
    alert("Enter The Value You Want to Convert");
    return false;
  }


  }