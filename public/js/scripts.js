$(function()
{
    let $submitButton = $(".btn");
    function validateEmailForm(){
        let $clientFirstName = $("[rel=js-clientFirstName]");
        let $clientEmailAddress = $("[rel=js-clientEmailAddress]");


        if ($clientEmailAddress.val() == '' && $clientFirstName.val() == '' )
        {
            alert('Must include your email');
            //exit();
        }
        else
            {

        }

    }


    $submitButton.on("click",function()
    {
        //validateEmailForm()
    });
});