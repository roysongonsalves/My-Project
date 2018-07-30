function validate()
{
  var name=document.form.Name;
  var type=document.form.Type;
  var location=document.form.Location;
  var no=document.form.No;
  var director=document.form.Director;
  var address=document.form.Address;
  if (name.value== "")
  {
    alert("Please Enter your Comapny Name");
    name.focus();
    return 0;
  }
  if (location.value== "")
  {
    alert("Please Enter your Company Location");
    location.focus();
    return 0;
  }
  if (no.value== "")
  {
    alert("Please Enter your Company No.");
    no.focus();
    return 0;
  }
  if (director.value== "")
  {
    alert("Please Enter your Company Director");
    director.focus();
    return 0;
  }
  if (address.value== "")
  {
    alert("Please Enter your Company Address");
    address.focus();
    return 0;
  }
  return 1;
}
