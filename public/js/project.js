function formValidation()
{
var fname = document.pjform.fname;
var lname = document.pjform.lname;
var city = document.pjform.city;
var state = document.pjform.state;
var urregion = document.pjform.rregion;
var unregion = document.pjform.nregion;
var upurpose1 = document.pjform.purpose1;
var upurpose2 = document.pjform.purpose2;
var upurpose3 = document.pjform.purpose3;
var upurpose4 = document.pjform.purpose4;
var upurpose5 = document.pjform.purpose5;
var upurpose6 = document.pjform.purpose6;
var upurpose7 = document.pjform.purpose7;
// var other = document.pjform.other;
var area = document.pjform.area;
var mob = document.pjform.mob;
var url = document.pjform.url; 

if(allLetter1(fname))
{
if(allLetter2(lname))
{
if(allLetter3(city))
{
if(allLetter4(state))
{
if(validregion(urregion,unregion))
{ 
if(validpurpose(upurpose1,upurpose2,upurpose3,upurpose4,upurpose5,upurpose6,upurpose7))
{
if(allnumeric1(area))
{
if(allnumeric2(mob))
{
if(allLetter5(url))
{

} 
} 
}
}
}
}
}
}
}
else
{
return false;
}
}

function allLetter1(fname)
{ 
var letters = /^[A-Za-z]+$/;
if(fname.value.match(letters))
{
return true;
}
else
{
alert('First Name required');
fname.focus();
return false;
}
}

function allLetter2(lname)
{ 
var letters = /^[A-Za-z]+$/;
if(lname.value.match(letters))
{
return true;
}
else
{
alert('last name required ');
lname.focus();
return false;
}
}

function allLetter3(city)
{ 
var letters = /^[A-Za-z]+$/;
if(city.value.match(letters))
{
return true;
}
else
{
alert('City required');
city.focus();
return false;
}
}

function allLetter4(state)
{ 
var letters = /^[A-Za-z]+$/;
if(state.value.match(letters))
{
return true;
}
else
{
alert('State required');
state.focus();
return false;
}
}

function validregion(urregion,unregion)
{
x=0;

if(urregion.checked) 
{
x++;
} if(unregion.checked)
{
x++; 
}
if(x==0)
{
alert('Select Region');
urregion.focus();
return false;
}
else
{
return true;}
}

function validpurpose(upurpose1,upurpose2,upurpose3,upurpose4,upurpose5,upurpose6,upurpose7)
{
x=0;

if(upurpose1.checked || upurpose2.checked ||upurpose3.checked ||upurpose4.checked ||upurpose5.checked ||upurpose6.checked || upurpose7.checked) 
{
x++;
} 
if(x==0)
{
alert('Select Project Type');
upurpose1.focus();
return false;
}
else
{
return true;
}
}

// function allLetter5(other)
// { 
// var letters = /^[A-Za-z]+$/;
// if(other.value.match(letters))
// {
// return true;
// }
// else
// {
// alert('First Name required');
// other.focus();
// return false;
// }
// }


function allnumeric1(area)
{ 
var letters = /^[0-9]+$/;
if(area.value.match(letters))
{
return true;
}
else
{
alert('Enter Area and it must be Numeric only');
area.focus();
return false;
}
}

function allLetter5(url)
{ 
var letters = /^[A-Za-z]+$/;
if(url.value.match(letters))
{
alert('form Sucesfully submitted');
window.location.href={{route('statusnew')}};
return true;
}
else
{
alert('Google drive link required');
city.focus();
return false;
}
}

function allnumeric2(mob)
{ 
var letters = /^[0-9]+$/;
if(mob.value.match(letters))
{
return true;
}
else
{
alert('Enter Mobile No. and it must be Numeric');
mob.focus();
return false;
}
} 
















// function validateFileType(){
//     var fileName = document.pjform.getElementById("file").value;
//     var idxDot = fileName.lastIndexOf(".") + 1;
//     var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
//     if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
//         //TO DO
//     }else{
//         alert("Only jpg/jpeg and png files are allowed!");
//     }   
// }

// function isValidUrl(string) {
//     try {
//       new URL(string);
//     } catch (_) {
//       return false;  
//     }
  
//     return true;
//   }










































// const fname = document.getElementById('fname')
// const lname = document.getElementById('lname')
// const city = document.getElementById('city')
// const state = document.getElementById('state')
// const region = document.getElementById('region')
// const purpose = document.getElementById('purpose')
// const other = document.getElementById('other')
// const area = document.getElementById('area')
// const mob = document.getElementById('mob')
// const file = document.getElementById('file')
// const form = document.getElementById('form')
// const errorElement = document.getElementById('error')

// form.addEventListener('submit', (e) =>{
//     let messages =[]
//     if(fname.value ===' '|| fname.value == null){
//         messages.push("Name is required")
//     }

//     if (messages.length >0){
//         e.preventDefault()
//         errorElement.innerText = messages.join(', ')
//     }
// }