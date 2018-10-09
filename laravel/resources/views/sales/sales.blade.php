<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Invoices</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fontello.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('/js/modelscript.js') }}"></script>
</head>

<body>
    <header>
        <div class="container">
            <h1>Barroc IT | Sales</h1>
        </div>
    </header>
    <div class="container">
        <h2>Choose client:</h2>
        <div class="nav">
            <div class="search">
                <input type="text" name="search" placeholder="Search..">
            </div>
            <div class="buttons">
                <a href="#">Back</a>
            </div>
        </div>
        <h2>Client information:</h2>
    </div>
    <section id="help">
        <div class="container">
            <button id="helpBtn"><span>Help</span><i class="icon-help-circled"></i></button>
            <div id="helpModal" class="modal">
                <div class="help-modal-content">
                    <span class="close">&times;</span>
                    <p>To see client's invoices write his first and last name in the search bar and click on the right name.</p>
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
