<?php
    $rates = [
            ['currency'=>'USD', 'exchange'=>8.5],
            ['currency'=>'EUR', 'exchange'=>9.9],
            ['currency'=>'TRY', 'exchange'=>1],
    ];
    if(isset($_POST['download'])){
       $titles = array_keys($rates[0]);
       $csvFile = new SplTempFileObject();
       $csvFile->fputcsv($titles);
        foreach ($rates as $currency) {
            $csvFile->fputcsv($currency);
        }
        $csvFile->rewind();
       header('Content-Type : text/csv');
       header('Content-Disposition: attachment; filename="rates.csv"');
       $csvFile->fpassthru();
       exit;


    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Csv SAmple</title>
</head>
<body>
<h1>File Download</h1>

<p>Click the  button for downloading the file</p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <button type="submit" name="download">Download</button>
</form>

</body>
</html>