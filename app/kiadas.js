// Bevétel gomb AJAX EVENT
document.getElementById("minusBtn").addEventListener('click', loadData);
function loadData(e) {
// Változók felvétele
var http = new XMLHttpRequest();
var url = 'data.php';
var item = document.getElementById("item").value;
var money = document.getElementById("money").value;
var type = 2; // Ez jelöli a bevételt (Adatábzisban is kommentelve)
var params = "item="+item+"&money="+money+"&type="+type;

// Beviteli mezők ellenőrzése
if(item == '' || money == 0){
	alertMsg("Minden mezőt ki kell tölteni!");
}else {


http.open('POST', url, true);
//Send the proper header information along with the request
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

http.onreadystatechange = function() {
	//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        console.log(this.responseText);
        minuszLista();
        totalMoney();
    }
}


http.send(params);
e.preventDefault()

inputDelete();
	}
}


// Beviteli mezők törlése
function inputDelete() {
	document.getElementById("item").value = '';
	document.getElementById("money").value = '';
}

// figyelmeztető üzenet
function alertMsg(amsg) {
  alert(amsg);
}