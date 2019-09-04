function totalMoney() {
	const xhr = new XMLHttpRequest();
	const url = 'total_money.php';
	xhr.open("GET",url,true);

	xhr.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			var sum = JSON.parse(this.responseText);

			document.getElementById("total-money").innerHTML  = numberWithCommas(sum);
		}

	}


	xhr.send();
}

totalMoney();

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}