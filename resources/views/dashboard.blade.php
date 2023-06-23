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
    <script src="{{asset('js/main_validation.js')}}"></script>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row px-5" style="border-bottom: 1px solid #ececec;">
                <div class="col-12 col-md-8 col-lg-8 p-3">
                    <img class="img-01" src="{{ asset('images/edifice-logo.jpg') }}" alt="logo">
                </div>
                <div class="col-12 col-md-4 col-lg-4 py-4 but-align">
                    <a href="/destroy-session">
                        <button type="button" class="round-button btn btn-outline-dark">Logout</button>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section>

    </section>
    <section class="img-03" style="background-image: url(asset('images/img-03.jpg');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8 p-3">
                    <div class="px-5">
                        <h1 style="font-size:50px;font-weight:bold;">Explore</h1> <br>
                        <p style="font-size:25px;color:grey;">Check out all our features! </p><br>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 " style="padding-left:50px">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('images/img-02.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">About Us</h5>
                                    <p class="card-text">Find out more about our mission and our features</p>
                                    <a href="#" class="btn btn-primary">About Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('images/img-02.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Build Website</h5>
                                    <p class="card-text">Check out various templates for your own website!</p>
                                    <a href="#" class="btn btn-primary">Templates</a>
                                </div>
                            </div>
                        </div>
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