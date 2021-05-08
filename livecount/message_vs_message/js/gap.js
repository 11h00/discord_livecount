const CULER = new XMLHttpRequest();
const VS = new XMLHttpRequest();
var updatecount = 0;
var oldcount = 0;
var UPsound = new Audio("lesonn/up.mp3");
var DOWNsound = new Audio("lesonn/down.mp3");
var vsresult;
var post1 = 0;
var sonHD = true;
var post2 = 0;
let prifle1;
let useuname1 = "alex messages";
let useuname2 = "mathias messages"
VS.onreadystatechange = function (event) {
	if (this.readyState === XMLHttpRequest.DONE) {
		if (this.status === 200) {
			degar2 = JSON.parse(VS.responseText); //gen 2
			post2 = degar2.message_count
			oldcount = vsresult
			conmapere()
			odometer3.innerHTML = post2;
			odometer2.innerHTML = post1;
		}
	}
};
CULER.onreadystatechange = function (event) {
	if (this.readyState === XMLHttpRequest.DONE) {
		if (this.status === 200) {
			degar = JSON.parse(CULER.responseText);
			post1 = degar.message_count;
			//prifle1 = "img/alex.jpg";
		}
		VS.open('GET', "get_message_mathias.php");
		VS.send();
	}
};
function sonsetting() {
	if (sonHD == true) {
		document.getElementById("soundstting").style.background = "#FF0000"
		document.getElementById("soundstting").innerText = "sound : OFF"
		sonHD = false
	} else {
		document.getElementById("soundstting").style.background = "#00FF00"
		document.getElementById("soundstting").innerText = "sound : ON"
		sonHD = true
	}
}
function conmapere() {
	if (post1 < post2) {
		vsresult = post2 - post1
		odometer1.innerHTML = vsresult;
		document.getElementById("lecomba").innerText = "before " + useuname1 + " beat " + useuname2
		document.getElementById("name2lol").innerText = useuname2
		document.getElementById("name1").innerText = useuname1
		if (sonHD == true) {testcount();}
	} else {
		vsresult = post1 - post2
		odometer1.innerHTML = vsresult;
		document.getElementById("lecomba").innerText = "before " + useuname2 + " beat " + useuname1
		document.getElementById("name1").innerText = useuname1
		document.getElementById("name2lol").innerText = useuname2
		if (sonHD == true) {testcount();}
	}
}

function testcount() {
	if (vsresult > oldcount) {
		UPsound.cloneNode(true).play();
	}
	if (vsresult < oldcount) {
		DOWNsound.cloneNode(true).play();
	}
}

function tg() {
	setTimeout(function () {
		CULER.open('GET', "get_message_alex.php");
		CULER.send(null);
		updatecount = 5000;
		tg();
	}, updatecount)
}

tg();  
