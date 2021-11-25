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
    <div class="p-2 dosh-container">
        <div class="background-image-container">
            <img src="assets/images/BG-Girl-Model.jpg" class="background-image" alt="">
        </div>
        <div class="content-container">
            
        </div>
        <div class="flex space-x-8 z-50 flex-wrap">
            <div class="dosh-card p-4 flex-1 w-full md:w-auto shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/LoadAccount.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">
                        <a href="./load-account.php">
                            Load Account
                        </a>
                    </p>
                </div>
            </div>

            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/SendMoney.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">
                        <a href="./transfer-money.php">
                            Send Money
                        </a>
                    </p>
                </div>
            </div>

            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/Bulk.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">
                        <a href="./bulk-disbursement.php">
                            Bulk Disbursement
                        </a>
                    </p>
                </div>
            </div>

            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/DoshLoan.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">
                        <a href="./dosh-insurance-login.php">
                            Dosh Loan
                        </a>
                    </p>
                </div>
            </div>

            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/StandingOrder.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">
                        <a href="./standing-order.php">
                            Standing Order
                        </a>
                    </p>
                </div>
            </div>
            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/insurance.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">
                        <a href="./dosh-insurance-register.php">
                            Insurance
                        </a>
                    </p>
                </div>
            </div>
            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/FinancialServices.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">
                        <a href="./dosh-insurance-register.php">
                            Financial Services
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php include("./templates/footer.php"); ?>