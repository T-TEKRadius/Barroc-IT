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
    <button type="submit">Back</button>
    <section id="questions">
        <div class="container">
            <h2>Client information:</h2>
            <form>
                <label for="company_name">Company name:</label>
                <input type="text" id="company_name" name="company_name">
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <br>
                <label for="postal_code">Postal code:</label>
                <input type="text" id="postal_code" name="postal_code">
                <br>
                <label for="residence">Residence:</label>
                <input type="text" id="residence_name" name="residence_name">
                <br>
                <label for="contact_person">Contact  person:</label>
                <input type="text" id="contact_person" name="contact_person">
                <br>
                <label for="initials">Initials:</label>
                <input type="text" id="initials" name="initials">
                <br>
                <label for="phone_number">Phone number:</label>
                <input type="text" id="phone_number" name="phone_number">
                <br>
                <label for="fax_number">Fax number:</label>
                <input type="text" id="fax_number" name="fax_number">
                <br>
                <label for="offer_numbers">Offer numbers:</label>
                <input type="text" id="offer_numbers" name="offer_numbers">
                <br>
                <label for="offer_stat">Offer status:</label>
                <input type="text" id="offer_status" name="offer_status">
                <br>
                <label for="prospect">Prospect:</label>
                <input type="text" id="prospect" name="prospect">
                <br>
                <label for="date_of_action">Date of action:</label>
                <input type="text" id="date_of_action" name="date_of_action">
                <br>
                <label for="l_contact_date">Last contact date:</label>
                <input type="text" id="l_contact_date" name="l_contact_date">
                <br>
                <label for="n_action">Next action:</label>
                <input type="text" id="n_action" name="n_action">
                <br>
                <label for="sales_percentage">Sales percentage</label>
                <input type="text" id="offer_status" name="sales_percentage">
                <br>
                <label for="credit_worthy">Credit worthy:</label>
                <input type="text" id="credit_worthy" name="credit_worthy">
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
