$(document).ready(function (){
    $("button[type = 'submit']").on("click", function () {
        $("#formval2").validate({
            rules:{
                email:{
                    required:true,
                    email:true
                },
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 16
                }
            },
            messages:{
                email: {
                    required: "Please enter your email",
                    email: "Enter valid email"
                },
                password: {
                    required: "Please enter password",
                    minlength: "Needs at least 8 characters"
                }
            }
        })
    })
})