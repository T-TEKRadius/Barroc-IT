<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Finance status</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="{{ asset('/css/fontello.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('/js/modelscript.js') }}"></script>
</head>

<body>

    <header>
        <div class="container">
            <h1>Barroc-IT | Finance</h1>
        </div>
    </header>
    <section id="main">
        <div class="container">
            <h2>Finance</h2>
            <div class="nav">
                <div class="search">
                    <input type="text" name="search" placeholder="Search..">
                </div>
                <div class="buttons">
                    <a class="logout" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
            <div class="display">
                <table>
                    <tr>
                        <th width="20%">Client</th>
                        <th width="5%">Status</th>
                        <th width="20%">Latest Invoice</th>
                        <th width="10%">Add Invoice</th>
                        <th width="10%">Edit Status</th>
                    </tr>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{ $client->company_name }}</td>
                            @if( $client->sale->offer_status === 0)
                                <td>
                                    <i class="fas fa-times"></i>
                                </td>
                            @elseif($client->sale->offer_status === 2)
                                <td>
                                    <i class="fas fa-spinner"></i>
                                </td>
                            @else
                                <td>
                                    <i class="fas fa-check"></i>
                                </td>
                            @endif
                            @if(isset($client->invoices[0]->invoice_link ))
                                <td><a href="/finance/invoice/show/{{$client->id}}/{{$client->invoices[0]->invoice_link}}">{{$client->invoices[0]->invoice_link}}</a></td>
                            @else
                                <td>No Invoice</td>
                            @endif
                            <td><a href="/finance/invoice/create/{{$client->id}}">Add</a></td>
                            <td><a href="/finance/edit/{{ $client->id }}">Edit</a></td>

                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </section>
    <section id="help">
        <div class="container">
            <button onclick="button()" id="helpBtn"><span>Help</span><i class="icon-help-circled"></i></button>

            <div id="helpModal" class="modal">
                <div class="help-modal-content">
                    <span class="close">&times;</span>
                    <p>To search a specific type his name in the searchbar. <br>To add an invoice press the Add link. <br> Press the logout button to logout.  </p>
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
