<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-10 py-4">
                    <img class="img-01" src="public/images/edifice-logo.jpg" alt="logo">
                </div>
                <div class="col-12 col-md-2 col-lg-2 py-4 but-align">
                    <button type="button" class="btn btn-outline-dark round-button">Create account</button>
                </div>
            </div>
        </div>
    </header>
    <section class="img-03">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8 py-3" >

                    <h1>Build Your Unique Online Presence</h1> <br>
                    Create your own website, by simple steps <br>
                    <img src="app/public/images/img-02.jpg" alt="img-2">

                </div>
                <div class="col-12 col-md-4 col-lg-4 py-3" style="background-color:#FCF5E5">
                    <div class="row">
                        <h4>Sign in to your account</h4>
                    </div>
                    <form>
                        <div class="row py-2 px-3">
                            <input class="form-control" type="text" placeholder="Name">
                        </div>
                        <div class="row py-2 px-3">
                            <input class="form-control" type="Email" placeholder="Email">
                        </div>
                        <div class="row pt-4 px-3 pt-2">
                            <button class="btn" style="background-color:#FE5652; color:white;">Sign In</button>
                        </div>
                        <div class="row text-center pt-2">
                            <a href="#" style="color:#FE5652; text-decoration:none;">Forgot Password</a>
                        </div>
                        
                        <div class="row pt-4 px-3 pt-2">
                            <button class="btn" style="background-color:#4285f4; color:white;">
                            <a class="btnRounded" href="{{route('google-auth')}}" 
                            style="text-decoration:none">Sign in with google</a></button>
                        </div>
                            
                        

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
