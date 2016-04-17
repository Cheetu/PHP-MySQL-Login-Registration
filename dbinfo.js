$(function() {
	$("#dbinfo").dialog({
		width: 500,
		height:200,
		modal: true,
		resizable: false,
		draggable: false,
		closeOnEscape: false,
		 dialogClass:'modal',
	});
	$('#modal').css('display', 'block');
	$('#modaltbl').css('width','100%');
	$('#modaltbl').css('margin','0');
	$('#modalbtn').css('width','30%');
	$('#modalbtn').css('margin','5% 35%');
	
});
// Variable to hold request
var request;

// Bind to the submit event of our form
$("#dbform").submit(function(event){

    // Abort any pending request
    if (request){
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, text");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "dbassign.php",
        type: "get",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        $('#dbinfo').dialog('close');
		$('#dbinfo').css('display','none');
		$('#modal').css('display','none');
		$('#modalBG').css('display','none');
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        alert(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

    // Prevent default posting of form
    event.preventDefault();
});