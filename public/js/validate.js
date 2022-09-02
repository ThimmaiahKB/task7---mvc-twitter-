
function validateform() {
  let name = document.forms["vlform"]["fname"].value;
  let lastname = document.forms["vlform"]["lname"].value;
  let email= document.forms["vlform"]["email"].value;
  let  phone= document.forms["vlform"]["phone"].value;
  let  password= document.forms["vlform"]["password"].value;
  if (name == "" || name==null) {
    alert("please fill out all the fields");
    return false;
  }else if(lastname == "" || lastname==null)
  {
    alert("please fill out all the fields")
    return false;
  }else if(email=="" || email==null)
  {
    alert("please fill out all the fields");
    return false;
  }else if(phone=="" || phone==null)
  {
    alert("please fill out all the fields");
    return false;
  }else if(password==null || password=="")
  {
    alert("please fill out all the fields");
    return false;
  }
  else
  {
    return true;
  }
  
}