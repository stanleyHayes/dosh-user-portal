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
            <img src="assets/images/Login-BG.jpg" class="background-image" alt="">
        </div>
        <div class="lg:w-1/3 w-2/3 overlay text-opacity-80 p-4 rounded-xl">
            <p class="text-center uppercase font-bold text-lg mb-4 text-white">
                Welcome Back!
            </p>
            <p class="text-center text-base mb-10 text-white">
                Sign in to your DOSH Insurance Account.
            </p>

            <div class="flex flex-col items-start md:flex-row md:space-x-4 space-y-3 md:space-y-auto my-3 md:items-center text-sm">
                <p class="text-left md:text-right lg:w-2/6 sm:w-full text-white">Username</p>
                <label class="md:w-3/4 sm:w-full w-full lg:w-4/6">
                    <input class="rounded-xl w-full p-1" type="text">
                </label>
            </div>

            <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-2 my-3 md:items-center">
                <p class="text-left md:text-right text-sm text-white w-full md:w-2/6 lg:w-2/6">Password</p>
                <label class="w-full md:w-4/6 lg:w-4/6">
                    <input class="rounded-xl w-full p-1" type="password">
                </label>
            </div>

            <div class="flex flex-col items-start md:flex-row space-y-2 md:space-x-4 my-3 md:items-center">
                <label class="text-left md:text-right text-xs text-white w-full md:w-1/3 lg:w-1/3">
                    <input class="rounded-md" type="checkbox">
                    Remember Me
                </label>
                <a href="" class="w-full md:w-2/3 lg:w-2/3 text-link text-xs">I forgot my password</a>
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