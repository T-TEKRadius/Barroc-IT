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
            <h1>Barroc-IT | Add Client</h1>
        </div>
    </header>
    <button type="submit" onclick="window.location='/sales/status';">Back</button>
    <section id="questions">
        <div class="container">
            <h2>Client information:</h2>
            <form role="form" action="{{action('ClientController@create')}}" method="post">
                {{csrf_field()}}
                <label for="company_name">Company name:</label>
                <input type="text" id="company_name" name="company_name" required value="@if(isset($client)){{$client->company_name}}@endif">
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value="@if(isset($client)){{$client->email}}@endif">
                <br>
                <label for="postal_code">Adress 1:</label>
                <input type="text" id="address_1" name="address_1" required value="@if(isset($client)){{$client->address_1}}@endif">
                <br>
                <label for="postal_code">Adress 2:</label>
                <input type="text" id="address_2" name="address_2" value="@if(isset($client)){{$client->address_2}}@endif">
                <br>
                <label for="postal_code">Zip Code 1:</label>
                <input type="text" id="zipcode_1" name="zipcode_1" required value="@if(isset($client)){{$client->zipcode_1}}@endif">
                <br>
                <label for="postal_code">Zip Code 2:</label>
                <input type="text" id="zipcode_2" name="zipcode_2" value="@if(isset($client)){{$client->zipcode_2}}@endif">
                <br>
                <label for="residence">Residence 1:</label>
                <input type="text" id="residence_name" name="residence_1" required value="@if(isset($client)){{$client->residence_1}}@endif">
                <br>
                <label for="residence">Residence 2:</label>
                <input type="text" id="residence_name" name="residence_2" value="@if(isset($client)){{$client->residence_2}}@endif">
                <br>
                <label for="contact_person">Contact  person:</label>
                <input type="text" id="contact_person" name="contact_person" required value="@if(isset($client)){{$client->contact_person}}@endif">
                <br>
                <label for="initials">Initials:</label>
                <input type="text" id="initials" name="initials" required value="@if(isset($client)){{$client->initials}}@endif">
                <br>
                <label for="phone_number">Phone number:</label>
                <input type="text" id="phone_number" name="phone_number" required value="@if(isset($client)){{$client->phone_number}}@endif">
                <br>
                <label for="fax_number">Fax number:</label>
                <input type="text" id="fax_number" name="fax_number" required value="@if(isset($client)){{$client->fax_number}}@endif">
                <br>
                <label for="offer_numbers">Offer numbers:</label>
                <input type="text" id="offer_numbers" name="offer_numbers" required value="@if(isset($client)){{$client->offer_numbers}}@endif">
                <br>
                <label for="offer_stat">Offer status:</label>
                <select name="offer_stat" id="offer_stat" value="@if(isset($client)){{$client->offer_stat}}@endif">
                    <option value="0">Closed</option>
                    <option value="1">Open</option>
                    <option value="2">Pending</option>
                </select>
                <br>
                <label for="prospect">Prospect:</label>
                <input type="text" id="prospect" name="prospect" required value="@if(isset($client)){{$client->prospect}}@endif">
                <br>
                <label for="date_of_action">Date of action:</label>
                <input type="date" id="date_of_action" name="date_of_action" required value="@if(isset($client)){{$client->date_of_action}}@endif">
                <br>
                <label for="l_contact_date">Last contact date:</label>
                <input type="text" id="l_contact_date" name="l_contact_date" required value="@if(isset($client)){{$client->l_contact_date}}@endif">
                <br>
                <label for="n_action">Next action:</label>
                <input type="date" id="n_action" name="n_action" required value="@if(isset($client)){{$client->n_action}}@endif">
                <br>
                <label for="sales_percentage">Sales percentage</label>
                <input type="text" id="sales_percentage" name="sales_percentage" value="@if(isset($client)){{$client->sales_percentage}}@endif">
                <br>
                <label for="credit_worthy">Credit worthy:</label>
                <input type="text" id="credit_worthy" name="credit_worthy" required value="@if(isset($client)){{$client->credit_worthy}}@endif">
                <br>
                <button type="submit">Add client</button>
            </form>
        </div>
    </section>
    <div class="container">
        <h2>Help</h2>
    </div>
    </section>
</body>

</html>
