$(document).ready(function(){
	$('dropdown-button').dropdown();
	$('.button-collapse').sideNav();
});

  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 100, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );

$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

function envio(){
document.forms["miform"].submit();
}

function myFunction() {
    var person = prompt("Introduzca una cantidad", "0");
    if (person != null) {
        document.getElementById("demo").innerHTML =
        "Hello " + person + "! How are you today?";
    }
}
