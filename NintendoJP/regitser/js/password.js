function password() {
	if(document.getElementById("password1").value != document.getElementById("password2").value) {
		document.getElementById("error_password").style.display = "block";
		document.getElementById("password1").style.borderColor = "red";
		document.getElementById("password1").style.borderWidth = "2px";
		document.getElementById("password2").style.borderColor = "red";
		document.getElementById("password2").style.borderWidth = "2px";
	}
	if(document.getElementById("password1").value == document.getElementById("password2").value) {
		document.getElementById("error_password").style.display = "none";
		document.getElementById("password1").style.borderColor = "#CCC";
		document.getElementById("password1").style.borderWidth = "1px";
		document.getElementById("password2").style.borderColor = "#ccc";
		document.getElementById("password2").style.borderWidth = "1px";
	}
}

function answer() {
	if(document.getElementById("answer1").value == "") {
		document.getElementById("error_answer1").style.display = "block";
		document.getElementById("answer1").style.borderColor = "red";
		document.getElementById("answer1").style.borderWidth = "2px";
	}
	if(document.getElementById("answer1").value != "") {
		document.getElementById("error_answer1").style.display = "none";
		document.getElementById("answer1").style.borderColor = "#ccc";
		document.getElementById("answer1").style.borderWidth = "1px";
	}

}

function answer2() {
	if(document.getElementById("answer2").value == "") {
		document.getElementById("error_answer2").style.display = "block";
		document.getElementById("answer2").style.borderColor = "red";
		document.getElementById("answer2").style.borderWidth = "2px";
	}
	if(document.getElementById("answer2").value != "") {
		document.getElementById("error_answer2").style.display = "none";
		document.getElementById("answer2").style.borderColor = "#ccc";
		document.getElementById("answer2").style.borderWidth = "1px";
	}
}

function answer3() {
	if(document.getElementById("answer3").value == "") {
		document.getElementById("error_answer3").style.display = "block";
		document.getElementById("answer3").style.borderColor = "red";
		document.getElementById("answer3").style.borderWidth = "2px";
	}
	if(document.getElementById("answer3").value != "") {
		document.getElementById("error_answer3").style.display = "none";
		document.getElementById("answer3").style.borderColor = "#ccc";
		document.getElementById("answer3").style.borderWidth = "1px";
	}
}

$("#email").blur(function() {
	var email = $("#email").val();
	var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
	if(reg.test(email) == false) {
		document.getElementById("email").style.borderColor = "red";
		document.getElementById("error_email").style.display = "block";
		document.getElementById("email").style.borderWidth = "2px";
	} else {
		document.getElementById("error_email").style.display = "none";
		document.getElementById("email").style.borderColor = "#ccc";
		document.getElementById("email").style.borderWidth = "1px";
	}
});

$(".inputBox").focus(function() {
	var inputitems = $(".inputBox");
	var index = $(".inputBox").index(this);
	var oldBrother = $(inputitems[index]).prev();
	$(oldBrother).animate({
		fontSize: '12px',
	}, 500);
});

function wenhao() {
	document.getElementById("wenhao").style.display = "block";
}

function wenhao1() {
	document.getElementById("wenhao").style.display = "none";
}

$(".inputBox").blur(function() {
	if($(this).val() == "") {
		var inputitems = $(".inputBox");
		var index = $(".inputBox").index(this);
		var oldBrother = $(inputitems[index]).prev();
		$(oldBrother).animate({
			fontSize: '30px',
		}, 500);
	}
});

function tj() {
	password();
	$(".box").fadeIn();
	$("#buttonContinue").fadeOut();
}
var ii = 1;
var sb1, sb2, sb3, sb4, sb5, sb6, sb7, sb8;

function qq() {
	document.getElementById("ww").value = "yyyy/mm/dd";
}

function qq1() {
	switch(ii) {
		case 1:
			sb1 = event.keyCode;
			sb1 = String.fromCharCode(sb1);
			document.getElementById("ww").value = "";
			document.getElementById("ww").value = sb1 + "yyy/mm/dd";
			ii++;
			break;
		case 2:
			sb2 = event.keyCode;
			sb2 = String.fromCharCode(sb2);
			document.getElementById("ww").value = "";
			document.getElementById("ww").value = sb1 + sb2 + "yy/mm/dd";
			ii++;
			break;
		case 3:
			sb3 = event.keyCode;
			sb3 = String.fromCharCode(sb3);
			document.getElementById("ww").value = "";
			document.getElementById("ww").value = sb1 + sb2 + sb3 + "y/mm/dd";
			ii++;
			break;
		case 4:
			sb4 = event.keyCode;
			sb4 = String.fromCharCode(sb4);
			document.getElementById("ww").value = "";
			document.getElementById("ww").value = sb1 + sb2 + sb3 + sb4 + "/mm/dd";
			ii++;
			break;
		case 5:
			sb5 = event.keyCode;
			sb5 = String.fromCharCode(sb5);
			document.getElementById("ww").value = "";
			document.getElementById("ww").value = sb1 + sb2 + sb3 + sb4 + "/" + sb5 + "m/dd";
			ii++;
			break;
		case 6:
			sb6 = event.keyCode;
			sb6 = String.fromCharCode(sb6);
			document.getElementById("ww").value = "";
			document.getElementById("ww").value = sb1 + sb2 + sb3 + sb4 + "/" + sb5 + sb6 + "/dd";
			ii++;
			break;
		case 7:
			sb7 = event.keyCode;
			sb7 = String.fromCharCode(sb7);
			document.getElementById("ww").value = "";
			document.getElementById("ww").value = sb1 + sb2 + sb3 + sb4 + "/" + sb5 + sb6 + "/" + sb7 + "d";
			ii++;
			break;
		case 8:
			sb8 = event.keyCode;
			sb8 = String.fromCharCode(sb8);
			document.getElementById("ww").value = "";
			document.getElementById("ww").value = sb1 + sb2 + sb3 + sb4 + "/" + sb5 + sb6 + "/" + sb7 + sb8;
			ii++;
			break;
	}
}