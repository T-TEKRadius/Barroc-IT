<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Sales</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fontello.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('/js/modelscript.js') }}"></script>
</head>

<body>
    <div id="nav">
        <div class="container">
            <h1>Sales</h1>
            <nav class="salesnav">
                <ul>
                    <li> <a href="{{route('sales.create')}}"><span>Add Client</span></a></li>
                    <li><a href="{{route('sales.edit')}}"> <span>Edit Client</span></a></li>
                    <li><a href="{{route('sales.status')}}"><span> Client's status</span></a></li>
                    <li><a href="{{route('sales.invoice')}}"><span> Invoices</span></a></li>
                    <li><a href="#"> Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
</body>

</html>
