<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barroc-IT | Sales</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>Barroc-IT | Invoice</h1>
        </div>
    </header>
    <section id="main" class="invoice">
        <div class="container">
            <div>
                <h2>Invoice of client</h2>
                <button type="submit" onclick="window.history.back()">Back</button>
            </div>
            <embed type="application/pdf" src="{{ asset('invoices/Invoice_Template.pdf') }}" class="pdfview">
        </div>
    </section>
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
    <footer>
        <p>© BARROC IT | 2018</p>
    </footer>
</body>
</html>
