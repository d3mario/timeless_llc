$(function()
{



});

/**
 *
 *
 * @param emailInput input form for clients email addree
 * @param $firstNameInput input form for clients firstName
 * @param clientFirstName stores the value entered in the $firstNameInput
 * @param clientEmail stores the value entered in the emailInput
 * @returns {boolean}
 */
function validateContactForm(){
    var $emailInput = $("[rel=js-clientEmailAddress]");
    var $firstNameInput = $("[rel=js-clientFirstName]");
    var clientFirstName = $("[rel=js-clientEmailAddress]").val();
    var clientEmail = $("[rel=js-clientFirstName]").val();
    var $emailNote = $("#emailHelp");
    var $firstNameNote = $("#firstNameHelp");
    var $emailMessageNote = $("#emailMessageHelp");
    var $emailMessageInput = $("[rel=js-clientEmailMessage]");
    var $emailMessage = $("[rel=js-clientEmailMessage]").val();


    if ((clientFirstName == "") || (clientEmail == "") && ($emailMessage ==""))
    {
        $emailInput.toggleClass("form-validation-input");
        $firstNameInput.toggleClass("form-validation-input");

        $emailNote.html("Must fill out email").toggleClass("form-validation-alert-text");

        $firstNameNote.html("Please include your first name").toggleClass("form-validation-alert-text");

        $emailMessageNote.html("Please include your message").toggleClass("form-validation-alert-text");
        $emailMessageInput.toggleClass("form-validation-input");

        return false;
    }
    else{
        return true;
    }
}