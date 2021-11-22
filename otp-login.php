<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="./public/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<main>

    <?php include("./templates/header.php"); ?>
    <div class="dosh-container">
        <div class="background-image-container">
            <img src="assets/images/BG-Keyboard.jpg" class="background-image" alt="">
        </div>
        <div class="max-w-lg overlay text-opacity-80 p-4 rounded-md text-white">
            <p class="text-center uppercase font-bold text-lg">Eric Kamasa</p>
            <p  class="text-center my-3 text-xs">Please confirm OTP to proceed to login</p>
            <div class="flex space-x-4 my-3">
                <p  class="text-center text-xs">Enter OTP</p>
                <label class="flex-1">
                    <input class="rounded-md min-w-full" type="number"></label>
            </div>
            <div  class="text-center my-3">
                <button class="otp-button p-1 rounded-md text-xs text-black font-bold">Confirm OTP</button>
            </div>
            <div>
                <p class="text-center text-xs">Didn't receive <a class="text-link text-xs" href="">Resend OTP</a></p>
            </div>
        </div>
    </div>
<?php include("./templates/footer.php"); ?>