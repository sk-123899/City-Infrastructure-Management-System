function formValidation()
{
    var uselectgh = document.ghform.selectgh;
    var uselectgh2 = document.ghform.selectgh2;
    var uLmark = document.ghform.Lmark;
    var uLoc =  document.ghform.Loc;
    var uPin = document.ghform.Pin;
if(selectghselect(uselectgh))
{
if(selectghselect2(uselectgh2))
{
if(allLetter1(uLmark))
{
if(allLetter2(uLoc))
{
if(allLetter3(uPin))
{

}
}
}
}
}
return false;
}

function selectghselect(uselectgh)
{
if(uselectgh.value == "Default")
{
alert('Select your Grievances from the list');
uselectgh.focus();
return false;
}
else
{
return true;
}
}

function selectghselect2(uselectgh2)
{
if(uselectgh2.value == "Default")
{
alert('Select your Ward from the list');
uselectgh2.focus();
return false;
}
else
{
return true;
}
}

function allLetter1(uLmark)
{ 
var letters = /^[0-9A-Za-z]+$/;
if(uLmark.value.match(letters))
{
return true;
}
else
{
alert('Landmark required ');
uLmark.focus();
return false;
}
}

function allLetter2(uLoc)
{ 
var letters = /^[A-Za-z]+$/;
if(uLoc.value.match(letters))
{
return true;
}
else
{
alert('Location required');
uLoc.focus();
return false;
}
}

function allLetter3(uPin)
{ 
var letters = /^[0-9]+$/;
if(uPin.value.match(letters))
{
alert('Succesfully submitted form');
return View('dashboard');
return true;
}
else
{
alert('Pincode required in number format');
uPin.focus();
return false;
}
}
