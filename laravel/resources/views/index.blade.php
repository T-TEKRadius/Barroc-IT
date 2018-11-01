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
          <form method="post" action="/">
            @csrf
            <div class="select_login">
              <div class="select">
            <select name="department" id="department">
              <option value="development">Development</option>
              <option value="sales">Sales</option>
              <option value="finance">Finance</option>
            </select>
            </div>
            </div>
            <label for="password">Password:</label>
            <input class="psw" type="password" placeholder="Enter Password" name="password" required>
            <button class="login_btn" type="submit">Login</button>
          </form>
          </section>
    <section id="help">
        <div class="container">
            <button onclick="button()" id="helpBtn"><span>Help</span><i class="icon-help-circled"></i></button>

            <div id="helpModal" class="modal">
                <div class="help-modal-content">
                    <span class="close">&times;</span>
                    <p>To see client's status write his first and last name in the search bar and click on the right name.</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>© BARROC IT | 2018</p>
    </footer>
    <script type="text/javascript">
        openHelpModal();
    </script>
</body>

</html>
