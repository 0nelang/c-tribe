<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/metadata/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/metadata/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/metadata/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/metadata/css/style.css">
    <link rel="stylesheet" href="/metadata/file-upload.scss">

    <title>Login #7</title>
</head>

<body>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:400,700,300);
body {
  font-family: "Lato", sans-serif;
}

/* .container {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  -webkit-box-align: center;
  -moz-box-align: center;
  box-align: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  -o-align-items: center;
  align-items: center;
  -ms-flex-align: center;
  display: -webkit-box;
  display: -moz-box;
  display: box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -moz-box-pack: center;
  box-pack: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  -o-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  background-color: #bf7a6b;
  background-image: -webkit-linear-gradient(bottom left, #bf7a6b 0%, #e6d8a7 100%);
  background-image: linear-gradient(to top right,#bf7a6b 0%, #e6d8a7 100%);
} */

.form {
  width: 400px;
}

.file-upload-wrapper {
  background: #edf2f5;
  position: relative;
  width: 100%;
  height: 60px;
}
.file-upload-wrapper:after {
  content: attr(data-text);
  font-size: 18px;
  position: absolute;
  top: 0;
  left: 0;
  background: #edf2f5;
  padding: 10px 15px;
  display: block;
  width: calc(100% - 40px);
  pointer-events: none;
  z-index: 20;
  height: 40px;
  line-height: 40px;
  color: #999;
  border-radius: 5px 10px 10px 5px;
  font-weight: 300;
}
.file-upload-wrapper:before {
  content: "Upload";
  position: absolute;
  top: 0;
  right: 0;
  display: inline-block;
  height: 60px;
  background: #4daf7c;
  color: #edf2f5;
  font-weight: 700;
  z-index: 25;
  font-size: 16px;
  line-height: 60px;
  padding: 0 15px;
  text-transform: uppercase;
  pointer-events: none;
  border-radius: 0 5px 5px 0;
}
.file-upload-wrapper:hover:before {
  background: #3d8c63;
}
.file-upload-wrapper input {
  opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 99;
  height: 40px;
  margin: 0;
  padding: 0;
  display: block;
  cursor: pointer;
  width: 100%;
}
    </style>


    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/metadata/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In</h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos
                                    consectetur adipisicing.</p>
                            </div>
                            <form action="metadata/import_metadata" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Email</label>
                                    <input type="email" class="form-control" name="email" id="username" required>

                                </div>
                                <div class="form-group first">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" required>

                                </div>
                                <div class="file-upload-wrapper mt-3" data-text="Select your file!">
                                    <input name="file" type="file" class="file-upload-field" required>
                                </div>

                                <input type="submit" value="Import" class="btn btn-block btn-primary mt-5">
                                {{-- <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">

              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

              <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>

              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span>
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span>
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span>
                </a>
              </div> --}}
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="/metadata/js/jquery-3.3.1.min.js"></script>
    <script src="/metadata/js/popper.min.js"></script>
    <script src="/metadata/js/bootstrap.min.js"></script>
    <script src="/metadata/js/main.js"></script>
    <script>
        $("form").on("change", ".file-upload-field", function() {
            $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/, ''));
        });
    </script>
</body>

</html>
