<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Development</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>

<header>
    <div class="container">
        <h1>Barroc-IT | Development</h1>
    </div>
</header>
<section id="main">
    <div class="container">
        <h2>Development</h2>
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
                    <th width="20%">Status</th>
                    <th width="20%">Project done</th>
                    <th width="40%"></th>
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

                        @if($client->sale->offer_status === 1 || $client->sale->offer_status === 2)
                            <td><a href="{{route('development.done',['id'=>$client->id])}}">Done</a></td>
                        @else
                            <td>Already Done</td>
                        @endif
                        <td></td>

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
</body>

</html>
