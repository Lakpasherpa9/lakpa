
var temp = document.querySelector('.temp');
var desc = document.querySelector('.wdesc');
// var clouds = document.querySelector('.clouds');
var button= document.querySelector('.button');
var temp2 = document.querySelector('.temp2');


// button.addEventListener('click', function(name){
fetch('https://api.openweathermap.org/data/2.5/weather?q=Kathmandu&appid=908f045995acee51b01884c7e38ed850')
.then(response => 
    response.json())
 .then(data =>//console.log(data) )
{
 var nameValue = data['name'];//'name','main','temp','description','weather' API contents haru hun hai kta ho 
  var tempValue = data['main']['temp'];
  var wdesc = data['weather'][0]['description'];

  temp.innerHTML = nameValue;
  desc.innerHTML = wdesc;
  temp2.innerHTML =parseInt(tempValue-273)+"°c";

})

.catch(error => console.log(error));