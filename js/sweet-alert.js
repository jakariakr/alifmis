//Get popup
var modelContent = document.getElementById('taskModal');

//Get sweetAlert element
var sweetAlert = document.getElementById('alert');

//Get open button
var openAlert = document.getElementById('save-btn');

//Get close button
var closeBtn = document.getElementsByClassName('btn-close')[0];

// Listen for open click
openAlert.addEventListener('click', opensweetAlert);
// Listen for close click
closeBtn.addEventListener('click', closesweetAlert);



// Function to open sweetalert
function opensweetAlert(){
	
	sweetAlert.style.display ='block';

	
}

// Function to close sweetalert
function closesweetAlert(){
	sweetAlert.style.display ='none';
}
