<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <section>
        <div class="container py-4">
            <div class="row">
                <div class="col-10 ">
                <div class="">
                    <img src="{{asset('images/edifice.jpeg')}}" style="height:8vh" alt="logo">
                </div>  
                </div>
                <div class="col-2 ">
                    <button type="button" class="btn btn-outline-dark rounded" data-mdb-ripple-color="dark">Create account</button>
                </div>
            </div>
            
        </div>
    </section>

    <section>
            <div class="row py-5">
                <div class="col-8">
                    <div class="container px-5">
                        <h1>
                            Build Your Own Online Presence!
                        </h1>
                        <h4>
                            Create your own website by simple steps
                        </h4>
                    </div>
                </div>
                <div class="col-4 py-5 px-5"  style="background-color:#FCF5E5">
                    <div class="row">
                    <h4>Sign in to your account</h4>
                    </div>
                    <form >
                        <div class="row py-2 px-3">
                            <input class="form-control" type="text" placeholder="Name">
                        </div>
                        <div class="row py-2 px-3">
                            <input class="form-control" type="Email" placeholder="Email">
                        </div>
                        <div class="row pt-4 px-3">
                            <button class="btn" style="background-color:#FE5652; color:white;">Sign In</button>
                        </div>
                        <div class="row text-center" >
                            <a href="#" style="color:#FE5652; text-decoration:none;">Forgot Password</a>
                        </div>
                        <div class="row">
                            <div class="col12">
                                <div class="container">
                                    <a class="btnRounded" href="{{route('google-auth')}}" >Sign in with google</a>
                                </div>
                            </div>
                        </div>

                    </form>

                    

                </div>
            </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>

