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
        <div class="w-30 min-w-lg overlay text-opacity-80 p-8 rounded-md">
            <p class="text-center uppercase font-bold text-lg mb-4 text-white">
                Welcome Back!
            </p>
            <p class="text-center text-base mb-10 text-white">
                Sign in to your DOSH Insurance Account.
            </p>

            <div class="flex space-x-4 my-3 items-center">
                <p class="text-center text-sm text-white">Username</p>
                <label class="flex-1">
                    <input class="rounded-md min-w-full" type="text">
                </label>
            </div>

            <div class="flex space-x-4 my-3 items-center">
                <p class="text-center text-sm text-white">Password</p>
                <label class="flex-1">
                    <input class="rounded-md min-w-full" type="password">
                </label>
            </div>

            <div class="flex space-x-4 my-3 justify-end items-center">
                <label class="text-white text-xs flex items-center">
                    <input class="rounded-md" type="checkbox">
                    Remember Me
                </label>
                <a href="" class="text-link text-xs">I forgot my password</a>
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