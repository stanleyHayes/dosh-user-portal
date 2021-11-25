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
        <div class="lg:w-1/3 w-2/3 overlay text-opacity-80 p-4 rounded-xl">
            <p class="text-center font-bold text-lg mb-10 text-white">
                Load your Dosh Wallet
            </p>
            
            <div class="flex flex-col items-start md:flex-row md:space-x-4 space-y-3 md:space-y-auto my-3 md:items-center text-sm">
                <p class="text-left md:text-right lg:w-2/6 sm:w-full text-white">Channel</p>
                <label class="md:w-3/4 sm:w-full w-full lg:w-4/6">
                    <select class="rounded-xl min-w-full p-1">
                        <option class="text-black text-xs" value="">Select Channel</option>
                        <option class="text-black text-xs" value="personal">Personal Account</option>
                        <option class="text-black text-xs" value="business">Business Account</option>
                    </select>
                </label>
            </div>

            <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-2 my-3 md:items-center">
                <p class="text-left md:text-right text-sm text-white w-full md:w-2/6 lg:w-2/6">Amount</p>
                <label class="w-full md:w-1/6 lg:w-1/6">
                    <select class="rounded-xl w-full p-1">
                        <option class="text-black text-xs" value="GHS">GHS</option>
                        <option class="text-black text-xs" value="personal">Euro</option>
                        <option class="text-black text-xs" value="business">Yen</option>
                    </select>
                </label>
                <label class="w-full md:w-3/6 lg:w-3/6">
                    <input class="rounded-xl p-1 w-full" type="number">
                </label>
            </div>

            <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-4 my-3 md:items-center">
                <p class="text-left md:text-right text-sm text-white w-full md:w-1/3 lg:w-1/3">Operator</p>
                <label class="w-full md:w-2/3 lg:w-2/3">
                    <select class="rounded-xl w-full p-1">
                        <option class="text-black text-xs" value=""></option>
                        <option class="text-black text-xs" value="personal">Personal Account</option>
                        <option class="text-black text-xs" value="business">Business Account</option>
                    </select>
                </label>
            </div>

            <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-4  md:space-y-auto my-3 md:items-center">
                <p class="text-left md:text-right text-sm text-white w-full md:w-2/6">Mobile Number</p>
                <label class="w-full md:w-1/6">
                    <select class="rounded-xl w-full p-1">
                        <option class="text-black text-xs" value="">233</option>
                        <option class="text-black text-xs" value="personal">27</option>
                        <option class="text-black text-xs" value="business">30</option>
                    </select>
                </label>
                <label class="w-full md:w-3/6">
                    <input class="rounded-xl w-full p-1 text-sm" type="tel" placeholder="e.g. 0048319">
                </label>
            </div>


            <div class="text-right my-3">
                <button class="otp-button w-full md:w-auto rounded-2xl p-2 px-8 text-xs text-black font-bold">
                    Continue
                </button>
            </div>
        </div>
    </div>
<?php include("./templates/footer.php"); ?>