<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Sales status</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
          <h1><a href="#">Barroc-IT | Sales</a></h1>
        </div>
    </header>
    <section id="main">
        <div class="container">
            <h2>Clients</h2>
            <div class="nav">
            <div class="search">
                <input type="text" name="search" placeholder="Search..">
            </div>
            <div class="buttons">
              <a class="logout" href="#">Logout</a>
                <a class="add" href="#">Add client</a>
                </div>
                </div>
            <div class="display">
                <table>
                    <tr>
                        <th>Client</th>
                        <th>Status</th>
                        <th>Invoice</th>
                    </tr>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->name}}</td>
                            <td>{{$client->status}}</td>
                            <td><a href="{{ route('invoice.show', $client->id) }}">{{$client->id}}, </a></td>
                            <td><a href="{{ route('invoice.edit', $client->id) }}">{{$client->id}}, </a></td>
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
