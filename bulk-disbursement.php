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

        <div class="min-w-xl w-1/2 text-opacity-80 overlay  p-8 rounded-md">
            
            <div class="my-4">
                <p class="text-center font-bold text-lg mb-10 text-white">
                    Bulk Disbursement
                </p>

                <div class="flex justify-center space-x-4">

                    <div class="flex flex-1 space-x-4 my-3 items-center">
                        <p class="text-right text-sm text-white">Source</p>
                        <label class="flex-1">
                            <select class="rounded-md min-w-full">
                                <option class="text-black text-xs" value="">Select Channel</option>
                                <option class="text-black text-xs" value="personal">Personal Account</option>
                                <option class="text-black text-xs" value="business">Business Account</option>
                            </select>
                        </label>
                    </div>

                    <div class="flex flex-1 space-x-4 my-3 items-center">
                        <p class="text-sm text-white">Currency</p>
                        <label class="flex-1">
                            <select class="rounded-md min-w-full">
                                <option class="text-black text-xs" value="">Select Channel</option>
                                <option class="text-black text-xs" value="personal">Personal Account</option>
                                <option class="text-black text-xs" value="business">Business Account</option>
                            </select>
                        </label>
                    </div>
                </div>

                <div class="flex my-4 justify-center space-x-4">

                    <div class="flex space-x-4 my-3 items-center">
                        <p class="text-right text-sm text-white">Date</p>
                        <label class="">
                            <input type="date" class="rounded-xl" placeholder="DD/MM/YYYY">
                        </label>
                    </div>

                    <div class="flex space-x-4 my-3 items-center">
                        <p class="text-right text-sm text-white">Time</p>
                        <label class="">
                            <input type="time" class="rounded-xl">
                        </label>
                    </div>

                    <div class="flex flex-1 space-x-4 my-3 items-center">
                        <p class="text-sm text-white">No. of Entries</p>
                        <label>
                            <input type="number" class="rounded-xl">
                        </label>
                    </div>

                </div>


                <div class="flex space-x-4 justify-end my-4">
                    <div class="">
                        <button class="otp-button p-1 rounded-2xl px-8 text-xs text-black font-bold">
                            Save as Template
                        </button>
                    </div>
                    <div class="">
                        <button class="otp-button p-1 rounded-2xl px-8 text-xs text-black font-bold">
                            Load Template
                        </button>
                    </div>
                </div>
                
            </div>
            
            <hr class="my-4">
            
            <p class="text-center text-link text-sm my-4">
                Or simply download the sample CSV file below, edit and upload it
            </p>
            
            <div class="flex my-4">
                <div class="flex-1">
                    <img alt="" src="assets/images/vodafone-cash.png">
                </div>
                <div class="flex-1">
                    <input type="file">
                    <button>Upload file</button>
                </div>
                <div class="flex-1">
                    <img alt="" src="assets/images/vodafone-cash.png">
                    <p class="text-xs text-white">Please Enter the Captcha Text</p>
                    <label>
                        <input type="text" class="rounded-xl">
                    </label>
                </div>
            </div>
            
            <div class="text-right my-4">
                <button class="otp-button p-1 rounded-2xl px-8 text-xs text-black font-bold">
                    Continue
                </button>
            </div>
        </div>
    </div>

<?php include("./templates/footer.php"); ?>