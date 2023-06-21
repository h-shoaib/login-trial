<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js">
    </script>
    <script src="{{asset('js/create_account_validation.js')}}"></script>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row px-5" style="border-bottom: 1px solid #ececec;">
                <div class="col-12 col-md-8 col-lg-8 p-3">
                    <img class="img-01" src="{{ asset('images/edifice-logo.jpg') }}" alt="logo">
                </div>
                <div class="col-12 col-md-4 col-lg-4 py-4 but-align">
                    <a href="/main">
                    <button type="button" class="round-button btn btn-outline-dark ">Login</button>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="img-03" style="background-image: url(asset('images/img-03.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8 p-3" >
                    <div class="px-5">
                    <h1 style="font-size:50px;font-weight:bold;">Build Your Unique Online Presence</h1> <br>
                    <p style="font-size:25px;color:grey;">Create your own website, by simple steps </p><br>
                    <img src="{{ asset('images/img-02.jpg') }}" alt="img-2">
                    </div>
                </div>
                <div class="signin col-12 col-md-4 col-lg-4 py-3" style="background-color:#FCF5E5">
                    <div class="signin_inside">
                    <div class="row pb-4">
                        <h3><b>Create account</b></h3>
                    </div>
                    <form id="formval">
                        <div class="row py-2 px-3">
                            <input class="form-control frm" type="text" placeholder="Company name" name="company_name" id="company_name">
                        </div>
                        <div class="row py-2 px-3">
                            <input class="form-control frm" type="text" placeholder="First name" name="first_name" id="first_name">
                        </div>
                        <div class="row py-2 px-3">
                            <input class="form-control frm" type="text" placeholder="Last name" name="last_name" id="last_name">
                        </div>
                        <div class="row py-2 px-3">
                            <input class="form-control frm" type="email" placeholder="Email" name="email" id="email">
                        </div>
                        <div class="row py-2 px-3">
                            <input class="form-control frm" type="text" placeholder="Password" name="password" id="password">
                        </div>
                        <input type="radio" id="termsagree" value="1" name="TermsAgree">
                        <label >I agree to the <a href="{{ asset('tnc')}}">Terms and Conditions and Privacy Policy</a></label>
                        <div class="row pt-4 px-3">
                            <button type="submit" class="btn h-100 button" style="background-color:#FE5652; color:white;">Create an account</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>