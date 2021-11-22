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
        <div class="w-30 min-w-xl overlay text-opacity-80 p-4 rounded-md">
            <p class="text-center uppercase font-bold text-lg mb-10 text-white">
                Login to your dosh account
            </p>
            <div class="flex space-x-4 my-3 items-center">
                <p class="text-center text-sm text-white">Account Type</p>
                <label class="flex-1">
                    <select class="rounded-md min-w-full">
                        <option class="text-black text-xs" value="">Select Account Type</option>
                        <option class="text-black text-xs" value="personal">Personal Account</option>
                        <option class="text-black text-xs" value="business">Business Account</option>
                    </select>
                </label>
            </div>
            <div class="flex space-x-4 my-3 items-center">
                <p class="text-center text-sm text-white">Email/Number</p>
                <div>
                    <label>
                        <span class="text-sm text-white">Email</span>
                        <input class="text-xs" checked type="radio" name="login-with" value="email">
                    </label>
                    <label>
                        <span class="text-sm text-white">Mobile Number</span>
                        <input class="text-xs" type="radio" name="login-with" value="phone">
                    </label>
                </div>
            </div>

            <div class="flex space-x-4 mt-3 items-center">
                <p class="text-right text-sm text-white w-24">Password</p>
                <label class="flex-1">
                    <input class="rounded-md min-w-full" type="password">
                    <a href="" class="text-link text-xs">I forgot my password</a>
                </label>
            </div>

            <div class="text-center my-3">
                <button class="otp-button p-1 rounded-2xl px-8 text-xs text-black font-bold">
                    Login
                </button>
            </div>
            <div>
                <p class="text-center text-sm text-white">Didn't have an account? 
                    <a class="text-link text-sm" href="">
                        Sign Up
                    </a>
                </p>
            </div>
        </div>
    </div>
<?php include("./templates/footer.php"); ?>