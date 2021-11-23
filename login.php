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
<main class="main">

<!--    --><?php //include("./templates/header.php"); ?>

    <div class="dosh-container">
        <div class="background-image-container">
            <img src="assets/images/BG-Keyboard.jpg" class="background-image" alt="">
        </div>
        <div class="lg:w-1/3 w-auto overlay text-opacity-80 p-4 rounded-xl">
            <p class="text-center  font-bold text-lg mb-10 text-white">
                Login to your DOSH account
            </p>
            
            <div class="flex flex-col items-start md:flex-row md:space-x-4 space-y-3 md:space-y-auto my-3 md:items-center text-sm">
                <p class="text-left md:text-right lg:w-2/6 sm:w-full text-white">Account Type</p>
                <label class="md:w-4/6 sm:w-full w-full lg:w-4/6">
                    <select class="rounded-xl min-w-full p-1">
                        <option class="text-black text-xs" value="">Select Account Type</option>
                        <option class="text-black text-xs" value="personal">Personal Account</option>
                        <option class="text-black text-xs" value="business">Business Account</option>
                    </select>
                </label>
            </div>
            
            <div class="flex flex-col items-start md:flex-row space-y-2 md:space-y-auto md:space-x-4 my-3 md:items-center">
                <p class="text-left md:text-right text-sm text-white w-full md:w-2/6 lg:w-2/6">Email/Number</p>
                <div class="w-full flex items-center md:w-4/6">
                    <label class="w-1/2">
                        <span class="text-sm text-white">Email</span>
                        <input class="text-xs" checked type="radio" name="login-with" value="email">
                    </label>
                    <label class="w-1/2">
                        <span class="text-sm text-white">Mobile Number</span>
                        <input class="text-xs" type="radio" name="login-with" value="phone">
                    </label>
                </div>
            </div>

            <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-4 my-3 md:items-center">
                <p class="text-left md:text-right text-sm text-white w-full md:w-1/3 lg:w-1/3">Password</p>
                <label class="w-full md:w-2/3 lg:w-2/3">
                    <input class="rounded-xl min-w-full p-1" placeholder="Enter password" type="password">
                    <a href="" class="text-link text-xs">I forgot my password</a>
                </label>
            </div>

            <div class="text-center my-3">
                <button class="otp-button p-2 w-full md:w-1/3 rounded-2xl px-8 text-xs text-black font-bold">
                    Login
                </button>
            </div>
<!--            -->
<!--            <div>-->
<!--                <p class="text-center text-sm text-white">Didn't have an account? -->
<!--                    <a class="text-link text-sm" href="">-->
<!--                        Sign Up-->
<!--                    </a>-->
<!--                </p>-->
<!--            </div>-->
            
        </div>
    </div>

<?php include("./templates/footer.php"); ?>