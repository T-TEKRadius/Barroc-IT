<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Add client</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fontello.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('/js/modelscript.js') }}"></script>
</head>

<body>
<header>
    <div class="container">
        <h1><a href="#">Barroc-IT | Add Invoice</a></h1>
    </div>
</header>
<button type="submit" onclick="window.location='{{ url()->previous() }}';">Back</button>
<section id="questions">
    <div class="container">
        <h2>Invoice Information:</h2>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" accept=".pdf">
            <input type="submit" value="Add Invoice">
        </form>
    </div>
</section>
<section id="help">
    <div class="container">
        <button onclick="button()" id="helpBtn"><span>Help</span><i class="icon-help-circled"></i></button>

        <div id="helpModal" class="modal">
            <div class="help-modal-content">
                <span class="close">&times;</span>
                <p>To add an </p>
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
