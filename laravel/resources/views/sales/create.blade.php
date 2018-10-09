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
            <h1>Barroc IT | Sales </h1>
        </div>
    </header>
    <div class="container">
        <div class="nav">
            <div class="title">
                <h2>Client information:</h2>
            </div>
            <div class="buttons">
                <div class="back"> <a href="#">Back</a></div>
            </div>
        </div>
    </div>
    <section id="questions">
        <div class="container">
            <form>
                <p>
                    <label for="company_name">Company:</label>
                    <input type="text" id="company_name" name="company_name">
                </p>
                <p>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </p>

                <p>
                    <label for="postal_code">Postal code:</label>
                    <input type="text" id="postal_code" name="postal_code">
                </p>

                <p>
                    <label for="residence">Residence:</label>
                    <input type="text" id="residence_name" name="residence_name">
                </p>

                <p>
                    <label for="contact_person">Contact  person:</label>
                    <input type="text" id="contact_person" name="contact_person">
                </p>

                <p>
                    <label for="initials">Initials:</label>
                    <input type="text" id="initials" name="initials">
                </p>

                <p>
                    <label for="phone_number">Phone number:</label>
                    <input type="text" id="phone_number" name="phone_number">
                </p>

                <p>
                    <label for="fax_number">Fax number:</label>
                    <input type="text" id="fax_number" name="fax_number">
                </p>

                <p>
                    <label for="offer_numbers">Offer numbers:</label>
                    <input type="text" id="offer_numbers" name="offer_numbers">
                </p>

                <p>
                    <label for="offer_stat">Offer status:</label>
                    <input type="text" id="offer_status" name="offer_status">
                </p>
                <p>

                    <label for="prospect">Prospect:</label>
                    <input type="text" id="prospect" name="prospect">
                </p>
                <p>

                    <label for="date_of_action">Date of action:</label>
                    <input type="date" id="date_of_action" name="date_of_action">
                </p>
                <p>

                    <label for="l_contact_date">Last contact date:</label>
                    <input type="date" id="l_contact_date" name="l_contact_date">
                </p>

                <p>
                    <label for="n_action">Next action:</label>
                    <input type="date" id="n_action" name="n_action">
                </p>

                <p>
                    <label for="sales_percentage">Sales percentage</label>
                    <input type="text" id="offer_status" name="sales_percentage">
                </p>
                <p>

                    <label for="credit_worthy">Credit worthy:</label>
                    <input type="text" id="credit_worthy" name="credit_worthy">
                </p>
                <div class="add">
                    <a href="#">Add Client</a>
                </div>
            </form>
        </div>
    </section>
    <section id="help">
        <div class="container">
            <button onclick="button()" id="helpBtn"><span>Help</span><i class="icon-help-circled"></i></button>

            <div id="helpModal" class="modal">
                <div class="help-modal-content">
                    <span class="close">&times;</span>
                    <p>To add a client fill in all the requierd fields and press the 'Add Client' button.</p>
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
