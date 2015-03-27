function specialSelectHandler(){
	var selectBox = document.getElementById('special');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Special--'){
		document.getElementById('major1group').style.visibility = 'none';
	}
}

function major1SelectHandler(){
	var selectBox = document.getElementById('major1');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Major--'){
		document.getElementById('specialgroup').style.visibility = 'none';
		document.getElementById('major2group').style.visibility = 'visible';
		document.getElementById('minor1group').style.visibility = 'visible';
	}
}

function major2SelectHandler(){
	var selectBox = document.getElementById('major2');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Major--'){
		document.getElementById('minor1').style.visibility = 'none';
	}
}

function minor1SelectHandler(){
	var selectBox = document.getElementById('minor1');
	chosenValue = selectBox.options[selectBox.selectedIndex].value;
	if(chosenValue != '--Select Minor--'){
		document.getElementById('major2group').style.visibility = 'none';
		document.getElementById('minor2group').style.visibility = 'visible';
	}
}