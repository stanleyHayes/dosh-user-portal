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
        <div class="w-1/2 min-w-xl overlay text-opacity-80 p-4 rounded-md">
            <p class="text-center font-bold text-lg mb-10 text-white">
                Transfer Money
            </p>
            <div class="flex space-x-4 my-3 items-center">
                <p class="text-right text-sm text-white w-1/4">Source</p>
                <label class="flex-1">
                    <select class="rounded-md min-w-full w-3/4">
                        <option class="text-black text-xs" value="">Select Channel</option>
                        <option class="text-black text-xs" value="personal">Personal Account</option>
                        <option class="text-black text-xs" value="business">Business Account</option>
                    </select>
                </label>
            </div>

            <div class="flex space-x-4 my-3 items-center">
                <p class="text-right text-sm text-white w-1/4">Amount</p>
                <label class="">
                    <select class="rounded-md">
                        <option class="text-black text-xs" value="">USD</option>
                        <option class="text-black text-xs" value="personal">GHS</option>
                        <option class="text-black text-xs" value="business">Euro</option>
                    </select>
                </label>
                <label class="flex-1 w-1/2">
                    <input  class="rounded-md min-w-full" type="number">
                </label>
            </div>


            <div class="flex space-x-4 my-3 items-center">
                <p class="text-right text-sm text-white w-1/4">Destination</p>
                <label class="flex-1">
                    <select class="rounded-md min-w-full">
                        <option class="text-black text-xs" value="">Select Channel</option>
                        <option class="text-black text-xs" value="personal">Personal Account</option>
                        <option class="text-black text-xs" value="business">Business Account</option>
                    </select>
                </label>
            </div>

            <div class="flex space-x-4 my-3 items-center">
                <p class="text-right text-sm text-white w-1/4">Destination Account</p>
                <label class="flex-1">
                    <input  class="rounded-md min-w-full" type="number">
                </label>
            </div>

            <div class="flex space-x-4 mt-3 mb-8 items-center">
                <p class="text-right text-sm text-white w-1/4">Reference</p>
                <label class="flex-1">
                    <input  class="rounded-md min-w-full" type="text">
                </label>
            </div>

            <div class="text-right my-3">
                <button class="otp-button p-1 rounded-2xl px-8 text-xs text-black font-bold">
                    Continue
                </button>
            </div>
        </div>
    </div>
<?php include("./templates/footer.php"); ?>