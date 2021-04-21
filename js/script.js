function checkform(){
  var why = "";
  if(document.getElementById('CaptchaInput').value == ""){
    why += "- Prosze wpisac kod CAPTCHA.\n";
  }
  if(document.getElementById('CaptchaInput').value != ""){
    if(ValidCaptcha(document.getElementById('CaptchaInput').value) == false){
      why += " !CAPTCHA! Nieprawidlowy kod!\n";
    }
  }
  if(why != ""){
    alert(why);
    return false;
  }
}
var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';
var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;
function ValidCaptcha(){
  var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
  var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
  if (str1 == str2){
    return true;
  }else{
    return false;
  }
}  
function removeSpaces(string){
  return string.split(' ').join('');
}


