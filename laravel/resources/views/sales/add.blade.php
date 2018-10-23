<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Add client</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
</head>

<body>
<header>
    <div class="container">
        <h1><a href="#">Barroc-IT | Add Invoice</a></h1>
    </div>
</header>
<button type="submit" onclick="window.location='/sales/status';">Back</button>
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
        <h2>Help</h2>
    </div>
</section>
<footer>
    <p>© BARROC IT | 2017</p>
</footer>
</section>
</body>
</html>