<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barroc-IT | Add client</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet"> 
</head>

<body>
    <header>
        <div class="container">
            <h1>Barroc-IT | Edit Client</h1>
        </div>
    </header>
    <section id="clientform">
        <div class="container">
            <button type="submit">Back</button>
            <h2>Client information:</h2>
            <form>
                <div>
                    <label for="company_name">Company name:</label>
                    <input type="text" id="company_name" name="company_name">
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="postal_code">Postal code:</label>
                    <input type="text" id="postal_code" name="postal_code">
                </div>
                <div>
                    <label for="residence_name">Residence:</label>
                    <input type="text" id="residence_name" name="residence_name">
                </div>
                <div>
                    <label for="contact_person">Contact  person:</label>
                    <input type="text" id="contact_person" name="contact_person">
                </div>
                <div>
                    <label for="initials">Initials:</label>
                    <input type="text" id="initials" name="initials">
                </div>
                <div>
                    <label for="phone_number">Phone number:</label>
                    <input type="text" id="phone_number" name="phone_number">
                </div>
                <div>
                    <label for="fax_number">Fax number:</label>
                    <input type="text" id="fax_number" name="fax_number">
                </div>
                <div>
                    <label for="offer_numbers">Offer numbers:</label>
                    <input type="text" id="offer_numbers" name="offer_numbers">
                </div>
                <div>
                    <label for="offer_status">Offer status:</label>
                    <input type="text" id="offer_status" name="offer_status">
                </div>
                <div>
                    <label for="prospect">Prospect:</label>
                    <input type="text" id="prospect" name="prospect">
                </div>
                <div>
                    <label for="date_of_action">Date of action:</label>
                    <input type="text" id="date_of_action" name="date_of_action">
                </div>
                <div>
                    <label for="l_contact_date">Last contact date:</label>
                    <input type="text" id="l_contact_date" name="l_contact_date">
                </div>
                <div>
                    <label for="n_action">Next action:</label>
                    <input type="text" id="n_action" name="n_action">
                </div>
                <div>
                    <label for="sales_percentage">Sales percentage</label>
                    <input type="text" id="offer_status" name="sales_percentage">
                </div>
                <div>
                    <label for="credit_worthy">Credit worthy:</label>
                    <input type="text" id="credit_worthy" name="credit_worthy">
                </div>
                <div>
                    <button type="submit">Edit client</button>
                </div>
            </form>
        </div>
    </section>
    <section id="help">
        <div class="container">
            <h2>Help</h2>
        </div>
    </section>
    <footer>
        <p>© BARROC IT | 2018</p>
    </footer>
</body>
</html>