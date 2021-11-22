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
                <p class="text-sm text-white w-32 text-right">First Name</p>
                <label class="flex-1">
                    <input class="rounded-md min-w-full" name="fname" type="text">
                </label>
            </div>

            <div class="flex space-x-4 my-3 items-center">
                <p class=" text-sm text-white w-32 text-right">Last Name</p>
                <label class="flex-1">
                    <input class="rounded-md min-w-full" name="lname" type="text">
                </label>
            </div>

            <div class="flex space-x-2 my-3 items-center mb-8">
                <p class="text-sm text-white w-32 text-right">Mobile Number</p>
                <label class="">
                    <select class="rounded-md">
                        <option class="text-black text-xs" value="">+1</option>
                        <option class="text-black text-xs" value="personal">27</option>
                        <option class="text-black text-xs" value="business">30</option>
                    </select>
                </label>
                <label class="flex-1">
                    <input  class="rounded-md min-w-full" type="tel">
                </label>
            </div>


            <div class="flex space-x-4 my-3 items-center">
                <p class="text-sm text-white w-32 text-right">Email</p>
                <label class="flex-1">
                    <input class="rounded-md min-w-full" name="email" type="email">
                </label>
            </div>

            <div class="flex space-x-4 my-3 items-center">
                <p class="text-sm text-white w-32 text-right">Username</p>
                <label class="flex-1">
                    <input class="rounded-md min-w-full" name="username" type="text">
                </label>
            </div>

            <div class="flex space-x-4 my-3 items-center">
                <p class="text-sm text-white w-32 text-right">Password</p>
                <label class="flex-1">
                    <input class="rounded-md min-w-full" type="password">
                </label>
            </div>

            <div class="flex space-x-4 mt-3 items-center">
                <p class="text-sm text-white w-32 text-right">Password</p>
                <label class="flex-1">
                    <input class="rounded-md min-w-full" type="password">
                    <a href="" class="text-link text-xs">I forgot my password</a>
                </label>
            </div>

            <div class="text-center my-3">
                <button class="otp-button p-1 rounded-2xl px-8 text-xs text-black font-bold">
                    Select Plan
                </button>
            </div>
            <div>
                <p class="text-center text-sm text-white">
                    By registering, you agree to the DOSH Insurance
                    <a class="text-link text-sm" href="">
                        Terms of Use
                    </a>
                </p>
            </div>
            <div>
                <p class="text-center text-sm text-white">Already have an account?
                    <a class="text-link text-sm" href="">
                        Sign Up
                    </a>
                </p>
            </div>
        </div>
    </div>
<?php include("./templates/footer.php"); ?>