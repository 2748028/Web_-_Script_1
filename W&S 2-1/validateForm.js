function validateForm()
{
	message+= validateName(supportForm.name);
	message+= validateClientId(supportForm.clientID);
	
	if(message !== "")
	{
		alert("Error:\n" + message);
		return false;
	}
	
	alert("Form Submitted");
	return true;
}

function validateName()
{
	var name = document.forms["supportForm"]["name"].value;
	var error="";
	var alphaChars = /^[a-zA-Z]+$/; //Regex for letters
	
	if(name < 3 || name > 50) //Validate name length
	{
		error="Name field must be between 3-50 characters\n";
	}
	
	if(!name.match(alphaChars)) //Validates characters\
	{
		error+="Name must contain only letters\n";
	}

return error;
}

function validateClientID()
{
	var name = document.forms["supportForm"]["clientid"].value;
	var error="";
	var alphaChars = /n[0-9]m/;

	if(clientid <5 || clientid >5)
	{
		error="Client field must be exactly 5 characters in length, and be composed of numbers\n";
	}

	if(!clientid.match(alphaChars))
	{
		error+="Client ID must contain only numbers\n";
	}

	function validateE-Mail
}