$(document).ready(function()
{
    $("#textplus").click(function()
	{
        $("#serviceTypes").css({'font-size':'+=10px'});
    });
    
	$("#textminus").click(function()
	{
        $("#serviceTypes").css({'font-size':'-=10px'});
    });
    
	$("#compliance").click(function()
	{
        $("#complianceInfo").slideToggle("slow");
    });
    
	$("#managed").click(function()
	{
        $("#managedInfo").slideToggle("slow");
    });
   
   $("#consult").click(function()
	{
        $("#consultInfo").slideToggle("slow");
    });
});
