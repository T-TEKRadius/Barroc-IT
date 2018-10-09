<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fontello.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('/js/modelscript.js') }}"></script>
</head>

<body>
    <header>
        <div id="login_img">
            <img src="/img/login_img.jpg" alt="login_img">
            <h1><span>Barroc-IT</span></h1>
            <h2><span>Software for real</span></h2>
        </div>
        </div>
        <div class="container">
        </div>
    </header>
    <div class="container">
        <section id="login">
            <form>
                <div class="password">
                    <input class="psw" type="password" placeholder="Password" name="psw" required>
                </div>
                <div class="buttons">
                    <a class="login" href="#">login</a>
                </div>
    </div>
    <section id="help">
        <div class="container">
            <button onclick="button()" id="helpBtn"><span>Help</span><i class="icon-help-circled"></i></button>

            <div id="helpModal" class="modal">
                <div class="help-modal-content">
                    <span class="close">&times;</span>
                    <p>To add a client fill in all the requierd fields and press the 'Add Client' button.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
