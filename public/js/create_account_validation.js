$(document).ready(function () {
    $.validator.addMethod("fn1", function (value,element) {
      
        let str1 = /[A-Z]/;
       
        return str1.test(value);
        
    }),
    $.validator.addMethod("fn2", function (value,element) {
        
        let str4 = /[!@#\$%\^\&*\)\(+=._-]/g
        let str2 = /!([a-z A-Z 0-9])/;
        return str4.test(value);
        
    }),
    $.validator.addMethod("fn3", function (value,element) {
        
        
        let str3 = /[0-9]/;
        return str3.test(value);
        
    }),

        $("button[type = 'submit']").on("click", function () {
            $("#formval").validate({
                rules: {
                    first_name: "required",
                    last_name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        fn1: true,
                        fn3:true,
                        fn2:true,
                        minlength: 8,
                        maxlength: 16

                    },
                    confirmpassword: {
                        required: true,
                        equalTo: "#password"
                    },
                    termsagree:{
                        required:true
                    }
                },

                messages: {
                    company_name: "Please enter company name",
                    first_name: "Please enter first name",
                    last_name: "Please enter last name",
                    email: {
                        required: "Please enter your email",
                        email: "Enter valid email"
                    },
                    password: {
                        required: "Please enter password",
                        fn1: "Needs one uppercase letter",
                        fn3: "Needs at least one number",
                        fn2: "Needs at least one special character",
                        minlength: "Needs at least 8 characters"
                    },
                    confirmpassword: {
                        required: "Confirm password",
                        equalTo: "Passwords should match"
                    }
                }
            })
        })
})