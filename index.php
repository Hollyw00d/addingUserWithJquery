<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Adding a User with jQuery</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

</head>
<body>

<div id="wrapper">

    <h1>Adding a User with jQuery</h1>

    <p><strong>Assignment Instructions:</strong><br />Create a blank table which has First Name, Last Name, Email and Contact Number as table headings. Have a form at the bottom which will be used to append items on to the table. Make sure that each form field appends to its proper row/column in the table.</p>
    <hr />

    <h2>Table to Add Users To</h2>

    <table class="table">
        <thead>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email Address</td>
                <td>Contact #</td>
            </tr>
        </thead>

        <tbody>


        </tbody>
    </table>

    <hr />

    <h2>Add User Form</h2>

    <form action="#">
        <div class="row">
            <div class="col-md-3">First Name:</div>
            <div class="col-md-9"><input id="first-name" type="text" placeholder="First Name" /></div>
        </div>

        <div class="row">
            <div class="col-md-3">Last Name:</div>
            <div class="col-md-9"><input id="last-name" type="text" placeholder="Last Name" /></div>
        </div>

        <div class="row">
            <div class="col-md-3">Email Address:</div>
            <div class="col-md-9"><input id="email-address" type="text" placeholder="Email Address" /></div>
        </div>

        <div class="row">
            <div class="col-md-3">Contact No.:</div>
            <div class="col-md-9"><input id="phone" type="text" placeholder="Phone #" /></div>
        </div>
    </form>

</div>

</body>
</html>