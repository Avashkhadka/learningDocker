$(document).ready(function () {
    $('#hideBtn').click(function () {
        $('#image').hide();
    });
    $('#showBtn').click(function () {
        $('#image').show();
    });







    // Form validation

    $('#contactForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true,
            },
            bookDate: {
                required: true,
            },
            bookTime: {
                required: true,
            },
            message: {
                required: true,
                minlength: 10
            }

        },
        message: {
            name: {
                required: "Please enter your name",
                minlength: "Your name must consist of at least 2 characters"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address",
            },
            bookDate: {
                required: "Please select a date",
            },

            bookDate: {
                required: "Please select a time",
            },
            message: {
                required: "Please enter a message",
                minlength: "Your message must consist of at least 10 characters"
            }
        }
    })




})