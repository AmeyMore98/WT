function validPay()
{

var name = document.payment.hname;
var cardno = document.payment.cardno;
if(allLetter(name))
{
if(card_validation(cardno,16))
{
alert('Payment Successful');
window.location.reload()
return true;
} 
} 
return false;
}
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Name must have only alphabets');
uname.focus();
return false;
}
}
function card_validation(cardno,mx)
{
var cardno_len = cardno.value.length;
if (cardno_len != mx)
{
alert("Card No. must be of exactly "+mx+" digits");
passid.focus();
return false;
}
return true;
}