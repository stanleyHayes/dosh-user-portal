<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            
            <div class="flex flex-col items-start md:flex-row md:space-x-4 space-y-3 md:space-y-auto my-3 md:items-baseline text-sm">
                <p class="text-left md:text-right lg:w-2/6 sm:w-full text-white">Enter OTP</p>
                <label class="md:w-3/4 sm:w-full w-full lg:w-4/6">
                    <input class="rounded-xl w-full p-1" type="number"></label>
            </div>
            
            <div  class="text-center my-3">
                <button class="otp-button p-1 w-full  rounded-xl text-xs text-black font-bold">Confirm OTP</button>
            </div>
            <div>
                <p class="text-center text-xs">Didn't receive <a class="text-link text-xs" href="">Resend OTP</a></p>
            </div>
        </div>
    </div>
<?php include("./templates/footer.php"); ?>