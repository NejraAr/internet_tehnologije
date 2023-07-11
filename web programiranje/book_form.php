<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['send'])) {
    // Validacija korisničkog unosa
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone'])) {
        echo 'Please fill in all required fields.';
        return;
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    // Provjera formata email adrese
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Please enter a valid email address.';
        return;
    }

    // Provjera da li broj telefona sadrži samo brojeve
    if (!ctype_digit($phone)) {
        echo 'Please enter a valid phone number.';
        return;
    }

    // Provjera da li unos broja gostiju je nenegativan broj
    if (!ctype_digit($guests) || $guests < 0) {
        echo 'Please enter a valid number of guests.';
        return;
    }

    $stmt = mysqli_prepare($connection, "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($connection));
    }
    
    mysqli_stmt_bind_param($stmt, "ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);
    
    if (!mysqli_stmt_execute($stmt)) {
        die("Execute failed: " . mysqli_stmt_error($stmt));
    }
    
    if(mysqli_stmt_affected_rows($stmt) > 0) {
        header('Location: book.php');
    } else {
        echo 'Something went wrong. Please try again.';
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($connection);
?>