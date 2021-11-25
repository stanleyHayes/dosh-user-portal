<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="../public/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<main>

<header>
    <nav class="flex justify-between items-center header_nav px-20 py-2">
        <div class="">
            <img alt="Dosh Logo" src="./../assets/images/DOSHLogoFull.png">
        </div>
        <div class="">
            <div class="flex">
                <div class="mr-2 hidden md:block">
                    <label class="">
                        <input class="focus:outline-none text-white px-2 py-1 header_nav_label rounded-2xl" type="text">
                    </label>
                </div>
                <div>
                    <button class="px-2 text-xs text-white py-1 font-bold uppercase header_nav_login-button">
                        <a href="../login.php">Login</a>
                    </button>
                </div>
            </div>
            <div class="hidden md:block">
                <p class="text-right">
                    <span class="text-white text-xs">Not registered,</span>
                    <span class="header_nav_signup-text text-xs">
                            <a class="text-xs" href="./../pages/signup.php">
                                <a href="../otp-login.php">Signup</a>
                            </a>
                        </span>
                </p>
            </div>
        </div>
    </nav>
    <div>

    </div>
    <img class="max-w-full" alt="" src="./../assets/images/HeaderBottomLine.png">
</header>

