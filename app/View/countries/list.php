<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Country</title>
</head>
<body>
<div class="container">
    <div class="row-fluid col-md-offset-1 col-md-10">
        <a class="btn btn-primary col-md-offset-3 col-md-6" href="/">
            Back
        </a>
    </div>
    <div class="row-fluid col-md-offset-1 col-md-10">
        <h3>Country List</h3>
        <hr>
        <table class="table table-hover table-condensed">
            <thead>
            <th>Country Name</th>
            <th>Country Code</th>
            </thead>
            <?php

            foreach($countries as $country){
                $html = "<tr><td>";
                $html .= $country->getCountryName();
                $html .= "</td><td>";
                $html .= $country->getCountryCode();
                $html .= "</td>";

                echo $html;
            }

            ?>
        </table>
    </div>
</div>
</body>
</html>