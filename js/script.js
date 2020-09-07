var login = document.getElementById('login');
var div = document.getElementsByClassName('login');
var signup = document.getElementsByClassName('signup');
var test = document.getElementById('test');
var btn = document.getElementById('btn');
console.log(btn)




btn.onclick = function()
{
    div[0].style.display = 'none';
    signup[0].style.display = 'block';

}



login.onclick = function()
{
    div[0].style.display = 'block';
    signup[0].style.display = 'none';
}


