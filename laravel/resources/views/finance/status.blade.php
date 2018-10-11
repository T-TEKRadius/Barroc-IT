<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Finance status</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fontello.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('/js/modelscript.js') }}"></script>
</head>

<body>

    <header>
        <div class="container">
            <h1>Barroc-IT | Finance</h1>
        </div>
    </header>
    <div class="container">
        <div class="nav">
            <div class="title">
                <h2>Client information:</h2>
            </div>
            <div class="buttons">
              <div class="back"><a href="javascript:history.back()">Back</a></div>
            </div>
        </div>
        <div class="search">
            <input type="text" name="search" placeholder="Client's name...">
        </div>
        <div class="buttons">
            <a class="add" href="#">Add invoice</a>
            <a class="invoice" href="#">Edit status</a>
        </div>
        <div class="display">
            <div class="client">
                <h3>Client</h3>
            </div>
            <div class="status">
                <h3>Status</h3>
            </div>
            <div class="invoice">
                <h3>Latest invoice</h3>
            </div>
        </div>
    </div>
    </div>
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
