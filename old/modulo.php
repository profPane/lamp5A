<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
?>
<html>
<head>

</head>
<body>
    <form action="conferma.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="cognome">Cognome:</label>
        <input type="text" id="cognome" name="cognome"><br><br>
        <label for="scelta">email:</label>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
        <p>
            <b>Materie Preferite:<b></br>
            <input type="checkbox" id="ita" name="ita" value="italiano">
            <label for="ita"> Mi piace l'italiano</label><br>
            <input type="checkbox" id="inf" name="inf" value="informatica">
            <label for="inf"> Mi piace l'informatica</label><br>
            <input type="checkbox" id="sis" name="sis" value="sisstema">
            <label for="sis"> Mi piace sistemi</label><br><br>
        </p>

        <input type="radio" id="html" name="lan" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="lan" value="CSS">
        <label for="css">CSS</label><br>
    </form>
<body>