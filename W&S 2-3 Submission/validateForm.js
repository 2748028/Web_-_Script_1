

function validateForm(){
            nam = document.getElementById('na').value;
            ident = document.getElementById('ide').value;
            emai = document.getElementById('em').value; 
            numb = document.getElementById('num').value;
            var alphaChars = /^[a-zA-Z]+$/; 
            var atChars = /\S+@\S+\.\S+/;
            var numChars = /[0-9]+$/;
            var error = "";
            if ( nam === "" ){
                error += "Enter a name. ";
            } else if (nam.length < 3 || nam.length > 50) {
                error += "Name must between 3 and 50 characters. ";
            }
            if (!nam.match(alphaChars)) {
                error += "Name must contain only letters. ";
            }
            if ( ident === "" ){
                error += "Enter an ID. ";
            } else if (!ident.match(numChars)){
				error += "ID should only contain numbers. ";
			}
            if ( emai === "" ){
                error += "Enter an Email. ";
            }
            if (!emai.match(atChars)) {
                error += "Improper Email format(stuff@stuff.stuff). ";
            }
            if (emai.length < 6 || emai.length > 30) {
                error += "Email must be between 6 - 30 characters. ";
            }
            if (numb === "") {
                error += "Enter a phone number. ";
            } else if (!numb.match(numChars)) {
                error += "Phone number must be in numerical characters. ";
            } else if (numb.length !== 10) {
                error += "Phone must have 10 numbers. "
            }
            if (!document.getElementById('check').checked) {
                error += "Agree to the terms and conditions."
            }
  
           return error;
}


