<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Title of the document</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Your custom styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
    </style>
</head>

<body>
    <header>
        <nav class="blue-grey darken-4">
        <!-- TODO: nav-wrapper, container, brand-logo center -->
            <div class="nav-wrapper">
                <div class="container">
                    <a href="" class="brand-logo center">Realtime form validations</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <br><br>
    <div class="container">
    <form action="" method="post" autocomplete="off">
        <div class="row">
            <div class="input-field col s12">
                <input id="username" type="text" name="username">
                <label for="username">Enter username</label>
                <span id="output"></span>
            </div>
        </div>
    </form>
        </div>
    </main>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
        $("document").ready(function() {
            $(".button-collapse").sideNav();
        });
        $("document").ready(function(e) {
            $('#username').keyup(function() {
                var username = $(this).val(); //VALUE OF TEXT FIELD
                var output = $('#output'); //OUTPUT PLACEHOLDER

                var file  = 'check.php';

                if(username != "") {
                    // Check if username exists
                    $.post(file, {checkUser: username}, function(data) {
                        output.html(data); //Display data on span
                    });
                }
            });
        });
    </script>
</body>

</html>