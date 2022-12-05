<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order</title>
    <style>
        body {
            background-color: #f8f8f8;
        }

        .header {
            overflow: hidden;
            background-color: #e4e4e4;
            padding: 10px 10px;
            border-radius: 10px;
        }

        .header p.logo {
            float: left;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 30px;
            line-height: 20px;
            border-radius: 4px;
            font-weight: bold;
        }
        .form {
            overflow: hidden;
            background-color: #f0f0f0;
            border-radius: 10px;
            border: 2px solid rgb(194, 194, 194);
        }
        .form label, .form input{
            font-size:17px;
            padding:10px 10px;
            text-decoration: none;
            margin-top:10px;
        }   
        .form label{
            font-weight:bold;
            display: inline-block;
            width:100px;
            text-align: left;

        }
        .form .input{
            text-align: left;
            align:right;
            min-width:300px;
        }
        .New_button {
            background-color: #b8990f;
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            border-radius: 10px;    
            cursor: pointer;
            margin: 20px;
            min-width:100px;
            align:left;
        }
    </style>
</head>

<body>
    <div class="header">
        <p class="logo">Update Payment</p>
    </div>
        <br><br>
        <div>
    <form action="" class="form" >
        <label for="paymentId" class="row">Payment Id:</label>
        <input class="input" type="text" name="paymentId" id="paymentId" placeholder="Enter the Payment Id">
        <br>

        <label for="amount" class="row">Amount:</label>
        <input class="input"  type="text" name="amount" id="amount" placeholder="Enter the Amount">
        <br>

        <label for="paymentType" class="row">Payment Type:</label>
        <input class="input"  type="text" name="paymentType" id="paymentType" placeholder="Enter the payment type">
        <br>

        <label for="tax" class="row">Tax:</label>
        <input class="input"  type="text" name="tax" id="tax" placeholder="Enter the Quantity">
        <br>
        <input  id ="button" type="submit" value="Update Payment" class="New_button">
    </form>
    </div>
</body>