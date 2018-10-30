<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Sales status</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/js.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
<header>
    <div class="container">
        <h1><a href="#">Barroc-IT | Sales</a></h1>
    </div>
</header>
<button type="submit" onclick="window.location='{{url()->previous()}}';">Back</button>
<button type="submit" onclick="window.location='{{route('sales.index')}}'">Home</button>
<section id="main">
    <div class="container">
        <h2>Invoices {{ $client->company_name }}</h2>
        <div class="nav">
            <div class="search">
                <input type="text" name="search" placeholder="Search.." id="search" onkeyup="search(1)">
            </div>
            <div class="buttons">
                <a class="logout" href="{{route('logout')}}">Logout</a>
                <a class="add" href="create/{{ $client->id}}">Add Invoice</a>
            </div>
        </div>
        <div class="display">
            <table id="table">
                <tr>
                    <th onclick="sort_table(0)">File</th>
                    <th onclick="sort_table(1)">Added At</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
                @foreach($client->invoices as $invoice)
                    <tr>
                        <td><a href="{{ route('invoice.download', ['id'=>$client->id, 'link'=>$invoice->invoice_link]) }}">{{$invoice->invoice_link}}</a></td>
                        <td>{{$invoice->created_at}}</td>
                        <td><a href="{{ route('invoices.show', ['id'=>$client->id, 'link'=>$invoice->invoice_link]) }}">Show</a></td>
                        <td><a href="{{ route('invoice.delete', ['id'=>$client->id, 'link'=>$invoice->invoice_link]) }}">Delete</a></td>
                    </tr>
                @endforeach

            </table>
        </div>
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
</body>

</html>
