<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
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

        .order {
            overflow: hidden;
            background-color: #f0f0f0;
            padding: 20px 10px;
            border-radius: 10px;
            border: 2px solid rgb(194, 194, 194);
        }

        .payments {
            overflow: hidden;
            background-color: #f0f0f0;
            padding: 20px 10px;
            border-radius: 10px;
            border: 2px solid rgb(194, 194, 194);
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

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }

        .table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 1.05em;
            min-width: 500px;
        }

        .table thead tr {
            background-color: #cfcfcf;
            text-align: left;
            font-weight: bold;
        }

        .table th,
        .table td {
            padding: 12px 15px;
        }

        .table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .New_button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            margin-right: 20px;
        }

        .Update_button {
            background-color: #b8990f;
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
            margin-right: 20px;
        }

        .Delete_button {
            background-color: rgb(255, 0, 0);
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <p class="logo">Customer Info</p>
    </div>

    <br>
    <br>
    <div class="order">
        <h2>Orders </h2>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Order ID
                    </th>
                    <th>
                        Order Name
                    </th>
                    <th>
                        Order Date
                    </th>
                    <th>
                        Quantity
                    </th>
                    <th>
                        Payment Id
                    </th>
                    <th>
                        Update Entry
                    </th>
                    <th>
                        Delete Entry
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>order id</td>
                    <td>order name</td>
                    <td>Order date</td>
                    <td>Quantity</td>
                    <td>Payment ID</td>
                    <td>
                        <a href="updateOrder.html"><button class="Update_button" type="button">Update Order</button></a>
                    </td>
                    <td>
                        <a href="deleteOrder.html"><button class="Delete_button" type="button">Delete Order</button></a>

                    </td>
                </tr>
            </tbody>
        </table>
        <a href="newOrder.html" target="_blank"><button class="New_button" type="button">New Order</button></a>

    </div>
    <p>Delete this tag after the work is done. bhai ooper jo table bana hua hai wo schema ko dekh kr banaya iss mei bss
        tumhy database sy query run krni hai or data display kr dena hai jaisy iss video mei kya hai iss bandy ny
        https://www.youtube.com/watch?v=pdsfCLtNqus</p>
    <br>
    <br>
    <div class="payments">
        <h2>Payments</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Payment ID
                    </th>
                    <th>
                        Amount
                    </th>
                    <th>
                        Payment Type
                    </th>
                    <th>
                        Tax
                    </th>
                    <th>
                        Update Entry
                    </th>
                    <th>
                        Delete Entry
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Payment id</td>
                    <td>Amount</td>
                    <td>Order Date</td>
                    <td>Tax</td>
                    <td>
                        <a href="updateOrder.html" target="_blank"><button class="Update_button" type="button"
                                ondblclick="link">Update
                                Payment </a>
                    </td>
                    <td>
                        <a href="deletePayments.html" target="_blank"><button class="Delete_button" type="button"
                                ondblclick="link">Delete
                                Payment</button></a>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="newPayments.html" target="_blank"><button class="New_button" type="button" ondblclick="link">New
                Payment</button></a>


    </div>
</body>

</html>