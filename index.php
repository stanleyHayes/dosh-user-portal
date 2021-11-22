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
    <div class="p-2 dosh-container">
        <div class="background-image-container">
            <img src="assets/images/BG-Girl-Model.jpg" class="background-image" alt="">
        </div>
        <div class="content-container">
            
        </div>
        <div class="flex space-x-8 z-50">
            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/LoadAccount.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">Load Account</p>
                </div>
            </div>

            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/SendMoney.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">Send Money</p>
                </div>
            </div>

            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/Bulk.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">Bulk Disbursement</p>
                </div>
            </div>

            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/DoshLoan.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">Dosh Loan</p>
                </div>
            </div>

            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/StandingOrder.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">Standing Order</p>
                </div>
            </div>
            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/insurance.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">Insurance</p>
                </div>
            </div>
            <div class="dosh-card p-4 flex-1 shadow-xl rounded-md">
                <div class="flex justify-center mb-2">
                    <img class="dosh-card_image" alt="" src="assets/images/FinancialServices.png">
                </div>
                <div>
                    <p class="text-center uppercase text-black text-sm font-bold">Financial Services</p>
                </div>
            </div>
        </div>
    </div>

<?php include("./templates/footer.php"); ?>