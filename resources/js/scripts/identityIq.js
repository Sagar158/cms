// Form Wizard / Stepper

var horizStepper = document.querySelector('#horizStepper');
var horizStepperInstace = new MStepper(horizStepper, {
    // options
    firstActive: 0,
    showFeedbackPreloader: true,
    autoFormCreation: true,
    // validationFunction: defaultValidationFunction,
    stepTitleNavigation: true,
    feedbackPreloader: '<div class="spinner-layer spinner-blue-only">...</div>'
});

horizStepperInstace.resetStepper();

function validationFunction(stepperForm, activeStepContent) {
    // You can use the 'stepperForm' to valide the whole form around the stepper:
    someValidationPlugin(stepperForm);
    // Or you can do something with just the activeStepContent
    //someValidationPlugin(activeStepContent);
    // Return true or false to proceed or show an error
    return true;
}


function defaultValidationFunction(stepperForm, activeStepContent) {
    var inputs = activeStepContent.querySelectorAll('input, textarea, select');
    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].checkValidity()) return false;
    }
    return true;
}

$('.btn-reset').on('click', function () {
    horizStepperInstace.openStep(0);
})


// Ajax Methods
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
})

function submitPersonalInfo(destroyFeedback, form, activeStepContent) {
    // Do your stuff here
    // Call destroyFeedback() function when you're done
    // The true parameter will proceed to the next step besides destroying the preloader

    var email = $("input[name=email]").val();
    var userName = $("input[name=username]").val();
    var firstName = $("input[name=firstName]").val();
    var middleName = $("input[name=middleName]").val();
    var lastName = $("input[name=lastName]").val();
    var suffix = $("#suffix").val();
    var userPassword = $("input[name=userPassword]").val();
    var confirmUserPassword = $("input[name=confirmUserPassword]").val();
    var address = $("input[name=address]").val();
    var city = $("input[name=city]").val();
    var state = $("#state").val();
    var zip = $("input[name=zip]").val();
    var phone = $("input[name=phone]").val();

    var url = "http://localhost/cms/master/public/client-personal-info";
    $.ajax({
        type: "POST",
        url: url,
        data: {
            email: email,
            username: userName,
            firstName: firstName,
            middleName: middleName,
            lastName: lastName,
            suffix: suffix,
            userPassword: userPassword,
            confirmUserPassword: confirmUserPassword,
            address: address,
            city: city,
            state: state,
            zip: zip,
            phone: phone,
        },
        success: function(resp) {
            console.log(resp.status); // show response from the php script.
            if (resp.status == 200) {
                destroyFeedback(true);
            } else {
                destroyFeedback(false);
            }
        }
    });
}
function submitMembershipinfo(destroyFeedback, form, activeStepContent) {
    var creditCardNumber = $("input[name=creditCardNumber]").val();
    var ccCvv = $("input[name=ccCvv]").val();
    var ssn = $("input[name=ssn]").val();
    var confirmSsn = $("input[name=confirmSsn]").val();
    var dob = $("input[name=dob]").val();
    var ccExpYear = $("#ccExpYear").val();
    var ccExpDate = $("#ccExpDate").val();

    var url = "http://localhost/cms/master/public/client-billing-info";
    $.ajax({
        type: "POST",
        url: url,
        data: {
            creditCardNumber: creditCardNumber,
            ccCvv: ccCvv,
            ssn: ssn,
            confirmSsn: confirmSsn,
            dob: dob,
            ccExpYear: ccExpYear,
            ccExpDate: ccExpDate,

        },
        success: function(resp) {
            console.log(resp.status); // show response from the php script.
            if (resp.status == 200) {
                destroyFeedback(true);
            } else {
                destroyFeedback(false);
            }
        }
    });
}
