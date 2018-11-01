<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Barroc-IT | Add client</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fontello.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('/js/modelscript.js') }}"></script>
</head>

<body>
    <header>
        <div class="container">
            @if(isset($client) and isset($sales))
                <h1>Barroc-IT | Edit Client</h1>
            @else
                <h1>Barroc-IT | Add Client</h1>
            @endif
        </div>
    </header>
    <section id="questions">
        <div class="container">
            <button class="back" type="submit" onclick="window.location='{{url()->previous()}}';">Back</button>
            <h2>Client information:</h2>
            <form role="form" action="@if(isset($client) and isset($sales)) ../apply/{{ $client->id }} @else {{action('ClientController@create')}} @endif" method="post">
                {{csrf_field()}}
                <p>
                <label for="company_name">Company name* :</label>
                <input type="text" id="company_name" name="company_name" @if(isset($key)) disabled @endif required value="@if(isset($client)){{$client->company_name}}@endif">
                  </p>
                <p>
                <label for="email">Email* :</label>
                <input type="email" id="email" name="email" @if(isset($key)) disabled @endif required value="@if(isset($client)){{$client->email}}@endif">
  </p>
                  <p>
                <label for="postal_code">Adress 1* :</label>
                <input type="text" id="address_1" name="address_1" @if(isset($key)) disabled @endif required value="@if(isset($client)){{$client->address_1}}@endif">
  </p>
                  <p>
                <label for="postal_code">Adress 2:</label>
                <input type="text" id="address_2" name="address_2" @if(isset($key)) disabled @endif value="@if(isset($client)){{$client->address_2}}@endif">
  </p>
                  <p>
                <label for="postal_code">Zip Code 1* :</label>
                <input type="text" id="zipcode_1" name="zipcode_1" @if(isset($key)) disabled @endif required value="@if(isset($client)){{$client->zipcode_1}}@endif">
  </p>
                  <p>
                <label for="postal_code">Zip Code 2:</label>
                <input type="text" id="zipcode_2" name="zipcode_2" @if(isset($key)) disabled @endif value="@if(isset($client)){{$client->zipcode_2}}@endif">
  </p>
                  <p>
                <label for="residence">Residence 1* :</label>
                <input type="text" id="residence_name" name="residence_1" @if(isset($key)) disabled @endif required value="@if(isset($client)){{$client->residence_1}}@endif">
  </p>
                  <p>
                <label for="residence">Residence 2:</label>
                <input type="text" id="residence_name" name="residence_2" @if(isset($key)) disabled @endif value="@if(isset($client)){{$client->residence_2}}@endif">
  </p>
                  <p>
                <label for="contact_person">Contact person* :</label>
                <input type="text" id="contact_person" name="contact_person" @if(isset($key)) disabled @endif required value="@if(isset($client)){{$client->contact_person}}@endif">
  </p>
                  <p>
                <label for="initials">Initials* :</label>
                <input type="text" id="initials" name="initials" @if(isset($key)) disabled @endif required value="@if(isset($client)){{$client->initials}}@endif">
  </p>
                  <p>
                <label for="phone_number">Phone number* :</label>
                <input type="text" id="phone_number" name="phone_number" @if(isset($key)) disabled @endif required value="@if(isset($client)){{$client->phone_number}}@endif">
  </p>
                  <p>
                <label for="fax_number">Fax number:</label>
                <input type="text" id="fax_number" name="fax_number" @if(isset($key)) disabled @endif value="@if(isset($client)){{$client->fax_number}}@endif">
  </p>
                  <p>
                <label for="offer_numbers">Offer numbers* :</label>
                <input type="number" id="offer_numbers" name="offer_numbers" @if(isset($key)) disabled @endif required value="@if(isset($sales)){{$sales->offer_number}}@endif">
  </p>
                  <p class="test">
                <label for="offer_stat">Offer status: </label>
                <select class="dropdown" name="offer_stat" id="offer_stat">
                    <option value="0" @if(isset($sales) and $sales->offer_status==0)selected @endif>Closed</option>
                    <option value="1" @if(isset($sales) and $sales->offer_status==1)selected @endif>Open</option>
                    <option value="2" @if(isset($sales) and $sales->offer_status==2)selected @endif>Pending</option>
                </select>
  </p>
              <p>
                <label for="prospect">Prospect:</label>
                <select  class="dropdown" name="prospect" id="prospect" @if(isset($key)) disabled @endif value="@if(isset($client)){{$client->prospect}}@endif">
                    <option value="0" @if(isset($client) and $client->prospect==0)selected @endif>No</option>
                    <option value="1" @if(isset($client) and $client->prospect==1)selected @endif>Yes</option>
                </select>
  </p>
                  <p>
                <label for="date_of_action">Date of action* :</label>
                <input type="date" id="date_of_action" name="date_of_action" @if(isset($key)) disabled @endif required value="@if(isset($sales)){{$sales->date_of_action}}@endif">
  </p>
                  <p>
                <label for="l_contact_date">Last contact date* :</label>
                <input type="date" id="l_contact_date" name="l_contact_date" @if(isset($key)) disabled @endif required value="@if(isset($sales)){{$sales->last_contact_date}}@endif">
  </p>
                  <p>
                <label for="n_action">Next action* :</label>
                <input type="date" id="n_action" name="n_action" required @if(isset($key)) disabled @endif value="@if(isset($sales)){{$sales->next_action}}@endif">
  </p>
                  <p>
                <label for="sales_percentage">Sales percentage</label>
                <input type="number" id="sales_percentage" name="sales_percentage" @if(isset($key)) disabled @endif step="0.1" value="@if(isset($client)){{$client->discount_percentage}}@endif">
                  </p>
                <p>
                <label for="credit_worthy">Credit worthy:</label>
                <select class="dropdown" name="credit_worthy" id="credit_worthy* " required @if(isset($key)) disabled @endif value="@if(isset($client)){{$client->credit_worthy}}@endif">
                    <option value="0" @if(isset($client) and $client->credit_worthy==0)selected @endif>No</option>
                    <option value="1" @if(isset($client) and $client->credit_worthy==1)selected @endif>Yes</option>
                </select>
  </p>
                  <p>
                    <div class="add">


                @if(isset($client) and isset($sales))
                    <button type="submit" name="apply">Apply</button>
                @else
                    <button type="submit" name="submit">Add client</button>
                @endif
              </p>
                </div>
                <p>* = Required</p>
            </form>
        </div>
    </section>
    <section id="help">
        <div class="container">
            <button onclick="button()" id="helpBtn"><span>Help</span><i class="icon-help-circled"></i></button>

            <div id="helpModal" class="modal">
                <div class="help-modal-content">
                    <span class="close">&times;</span>
                    <p>To add a client fill all the requierd fields and press the 'Add client' button.<br> To edit client's information fill all the fields you want to edit and press the 'Apply' button. <br> To go back, press the 'Back' button.
                    </p>
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
