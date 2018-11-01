<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Sales status</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/js.js') }}"></script>
    <link href="{{ asset('/css/fontello.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('/js/modelscript.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">
          <h1>Barroc-IT | Sales</h1>
        </div>
    </header>
    <section id="main">
        <div class="container">
            <h2>Clients</h2>
            <div class="nav">
            <div class="search">
                <input type="text" name="search" placeholder="Search.." id="search" onkeyup="search(0)">
            </div>
            <div class="buttons">
              <a class="logout" href="{{ route('logout') }}">Logout</a>
                <a class="add" href="/sales/create">Add client</a>
                </div>
                </div>
            <div class="display">
                <table id="table">
                    <tr>
                        <th onclick="sort_table(0)">Client</th>
                        <th onclick="sort_table(1)">Status</th>
                        <th>Invoice</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->company_name}}</td>
                            @if( $sales[$client->id-1]->offer_status === 0)
                                <td>
                                    <i class="fas fa-times"></i>
                                </td>
                            @elseif($sales[$client->id-1]->offer_status === 2)
                                <td>
                                    <i class="fas fa-spinner"></i>
                                </td>
                            @else
                                <td>
                                    <i class="fas fa-check"></i>
                                </td>
                            @endif
                            <td><a href="{{route('invoice.show',['id'=>$client->id])}}">Show({{ count($client->invoices) }})</a></td>
                            <td><a href="{{route('sales.edit',['id'=>$client->id])}}">Edit</a></td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </section>
    <section id="help">
        <div class="container">
<<<<<<< Updated upstream
            <button onclick="button()" id="helpBtn"><span>Help</span><i class="icon-help-circled"></i></button>

            <div id="helpModal" class="modal">
                <div class="help-modal-content">
                    <span class="close">&times;</span>
                    <p>To search a sepcific client, type his name in the search bar. <br> To add a new client, press the Add Client button. <br> To show client's invoices click on the 'Show(X)' link. <br> To edit client's information click on the 'Edit' link. <br> Press the logout button to logout.</p>
                </div>
            </div>
=======
            <h2>Help</h2>
>>>>>>> Stashed changes
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
