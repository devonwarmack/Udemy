<!doctype html>
<html>
<head>
    <title>Learning php</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>


<body>

    <?php
        $emailTo="test@greenhost.org.uk";
        $subject="this should work"
        $body="body text";
        $headers="From: devonwarmack@blabla.com";

        mail($emailto, $subject, $body, $headers);
    ?>

</body>
</html>
