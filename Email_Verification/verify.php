<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/verify.css">
</head>
<body>
    <div class="form">
        <h2>Verify Your Account</h2>
        <p>We emailed you the four digit otp code to enter the code below to confirm your email address..</p>
        <form action="" autocomplete="off">
            <div class="error-text">Error</div>
            <div class="fields-input">
                <input type="number" name="otp1" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp2" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp3" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                <input type="number" name="otp4" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
            </div>
            <div class="submit">
                <input type="submit" value="Verify  Now" class="button">
            </div>
        </form>
    </div>
    <script src="js/verify.js"></script>
    
</body>
</html>