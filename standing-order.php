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

        <div class="overlay w-2/3 md:w-2/3 p-4 rounded-xl">

            <div class="text-opacity-80">

                <p class="text-center font-bold text-lg mb-8 text-white ">
                    Standing Order
                </p>

                <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-4 my-3 md:items-center">
                    <p class="text-left md:text-right text-sm text-white w-full md:w-1/3 lg:w-1/3">Source</p>
                    <label class="w-full md:w-2/3 lg:w-2/3">
                        <select class="rounded-xl w-full p-1">
                            <option class="text-black text-xs" value="">Select Channel</option>
                            <option class="text-black text-xs" value="personal">Personal Account</option>
                            <option class="text-black text-xs" value="business">Business Account</option>
                        </select>
                    </label>
                </div>

                <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-4 my-3 md:items-center">
                    <p class="text-left md:text-right text-sm text-white w-full md:w-1/3 lg:w-1/3">Currency</p>
                    <label class="w-full md:w-2/3 lg:w-2/3">
                        <select class="rounded-xl min-w-full p-1">
                            <option class="text-black text-xs" value="GHS">GHS</option>
                            <option class="text-black text-xs" value="personal">Personal Account</option>
                            <option class="text-black text-xs" value="business">Business Account</option>
                        </select>
                    </label>
                </div>


                <div class="flex flex-col items-start md:flex-row md:space-x-4 space-y-3 md:space-y-auto my-3 md:items-center text-sm">
                    <p class="text-left md:text-right lg:w-2/6 sm:w-full text-white">Start Date</p>
                    <label class="md:w-3/4 sm:w-full w-full lg:w-4/6">
                        <input type="date" class="rounded-xl min-w-full p-1" placeholder="DD/MM/YYYY">
                    </label>
                </div>

                <div class="flex flex-col items-start md:flex-row md:space-x-4 space-y-3 md:space-y-auto my-3 md:items-center text-sm">
                    <p class="text-left md:text-right lg:w-2/6 sm:w-full text-white">End Date</p>
                    <label class="md:w-3/4 sm:w-full w-full lg:w-4/6">
                        <input type="date" class="rounded-xl min-w-full p-1" placeholder="DD/MM/YYYY">
                    </label>
                </div>

                <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-4 my-3 md:items-center">
                    <p class="text-left md:text-right text-sm text-white w-full md:w-1/3 lg:w-1/3">Repeat Cycle</p>
                    <label class="w-full md:w-2/3 lg:w-2/3">
                        <select class="rounded-xl w-full p-1">
                            <option class="text-black text-xs" value="Weekly">Weekly</option>
                            <option class="text-black text-xs" value="personal">Personal Account</option>
                            <option class="text-black text-xs" value="business">Business Account</option>
                        </select>
                    </label>
                </div>

                <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-4 my-3 md:items-center">
                    <p class="text-left md:text-right text-sm text-white w-full md:w-1/3 lg:w-1/3">Time</p>
                    <label class="w-full md:w-2/3 lg:w-2/3">
                        <input type="time" class="rounded-xl w-full p-1">
                    </label>
                </div>

                <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-4 my-3 md:items-center">
                    <p class="text-left md:text-right text-sm text-white w-full md:w-1/3 lg:w-1/3">No. of Cycles</p>
                    <label class="w-full md:w-2/3 lg:w-2/3">
                        <input type="number" class="rounded-xl w-full p-1">
                    </label>
                </div>

                <div class="flex flex-col md:items-center md:flex-row md:justify-end space-y-2 md:space-x-4  md:space-y-auto">
                    <div class="w-full md:w-1/3">
                        <button class="otp-button p-1 w-full rounded-2xl  text-xs text-black font-bold">
                            Save as Template
                        </button>
                    </div>

                    <div class="w-full md:w-1/3">
                        <button class="otp-button p-1 w-full rounded-2xl text-xs text-black font-bold">
                            Load Template
                        </button>
                    </div>
                </div>

                <hr class="my-4">

                <p class="text-center my-4 text-link text-sm">
                    Or simply download the sample CSV file below, edit and upload it
                </p>

                <div class="text-white flex flex-col md:flex-row">
                    <div class="w-full md:w-1/6">
                        <img class="" alt="" src="assets/images/vodafone-cash.png">
                    </div>
                    <div class="w-full md:w-2/6 space-y-2">
                        <input type="file">
                        <button class="text-xs">Upload file</button>
                    </div>
                    <div class="w-full md:w-3/6 space-y-2">
                        <img alt="" src="assets/images/vodafone-cash.png">
                        <p class="text-xs">Please Enter the Captcha Text</p>
                        <label>
                            <input type="text" class="rounded-xl">
                        </label>
                    </div>
                </div>

                <div class="text-right my-4">
                    <button class="w-full md:w-1/3 otp-button p-2 rounded-2xl px-8 text-xs text-black font-bold">
                        Continue
                    </button>
                </div>

            </div>
        </div>
    </div>
<?php include("./templates/footer.php"); ?>