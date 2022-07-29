function nnameFunction() {
    let value = document.getElementById("nursename").value;
    let result = localStorage.getItem(value);
    document.getElementById('res').innerHTML = result;
}

function departFunction() {
	let value = document.getElementById("departnum").value;
    let result = localStorage.getItem(value);
    document.getElementById('res').innerHTML = result;
}

function shiftFunction() {
	let value1 = document.getElementById("departnum1").value;
	let value2 = document.getElementById("shift").value;
	let result = localStorage.getItem(value1 . value2);
	document.getElementById('res').innerHTML = result;
}