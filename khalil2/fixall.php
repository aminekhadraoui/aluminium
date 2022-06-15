<?php
    $html = file_get_contents('http://localhost/khalil/client.php');
    $pdfHtml = 'pdfFile.html';

    // this is probably what you're trying to do
    file_put_contents($pdfHtml, $html);

        // Now you can choose to run a check to see if the new copy exists,
        // or you have the option to do nothing and assume it is made
        if (file_exists($pdfHtml)) {
            echo "Success :  has been made";
        } else {
            echo "Failure:  does not exist";
        }
?>