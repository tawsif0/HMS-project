const form = document.getElementById('form');
const email = document.getElementById('email');
const phno = document.getElementById('phno');
const password = document.getElementById('password');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	
	
	const emailValue = email.value.trim();
	const phnoValue = phno.value.trim();
	const passwordValue = password.value.trim();
	
	
	
	if(emailValue === '') {
		alert('Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		alert('Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(phnoValue === '') {
		alert('Phone number cannot be blank');
	} else {
		setSuccessFor(phno);
	}
	
	if(passwordValue === '') {
		alert('Password cannot be blank');
	} else{
		setSuccessFor(password);
	}
}



function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}