<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Sales status</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
                        <th>Edit</th>
                    </tr>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->company_name}}</td>
                            @if($client->credit_worthy === 0)
                                <td>
                                    <i class="fas fa-times"></i>
                                </td>
                            @else
                                <td>
                                    <i class="fas fa-check"></i>
                                </td>
                            @endif
                            <td><a href="">Show</a></td>
                            <td><a href="">Edit</a></td>
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
