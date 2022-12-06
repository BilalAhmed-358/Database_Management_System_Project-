<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <style>
    body 
    {
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
  .customer {
            overflow: hidden;
            background-color: #f0f0f0;
            padding: 20px 10px;
            border-radius: 10px;
            border: 2px solid rgb(194, 194, 194);
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
  </style>
</head>
  <body>
    <div class="header">
        <p class="logo">Admin panel</p>
    </div>
    <br>
    <br>
    <div class="customer">
        <h2>Customers</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Customer ID
                    </th>
                    <th>
                        Customer Name
                    </th>
                    <th>
                        Customer Address
                    </th>
                    <th>
                        Delete Entry
                    </th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Customer Id data
                </td>
                <td>
                  Customer name data
                </td>
                <td>
                  Customer address data
                </td>
                <td>
                <a href=""><button class="Delete_button" type="button">Delete Customer</button></a>
                </td>
              </tr>
            </tbody>
        </table>

    </div>

    <br><br>
    <div class="customer">
        <h2>Ports</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Port ID
                    </th>
                    <th>
                        Port Name
                    </th>
                    <th>
                        Delete Entry
                    </th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Port Id
                </td>
                <td>
                  Port Name
                </td>
                <td>
                <a href=""><button class="Delete_button" type="button">Delete</button></a>
                </td>
              </tr>
            </tbody>
        </table>
        <a href="newPort.php" target="_blank"><button class="New_button" type="button">Add Port</button></a>

    </div>
    <br>
    <br>
    <div class="customer">
        <h2>Ports and ships</h2>

        <form action="">
          <label for="portid" class="row">Search Port ID to get data of ships docked on that port:</label>
          <input class="input" type="text" name="portid" id="portid" placeholder="Enter port ID">
          <input  id ="button_action" type="submit" name="submit" value="Search for ships" class="btn btn-default">

        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Ship ID
                    </th>
                    <th>
                        Route
                    </th>
                    <th>
                        Docktime
                    </th>
                    <th>
                        Number of containers
                    </th>
                    <th>
                        Weight
                    </th>
                    <th>
                        Refuel Duration
                    </th>
                    <th>
                        Price per hour
                    </th>
                    <th>
                        Arrival date
                    </th>
                    <th>
                        Container Id
                    </th>
                    <th>
                        Port Id
                    </th>
                    <th>
                        Delete Entry
                    </th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Ship Id data
                </td>
                <td>
                  Route data
                </td>
                <td>
                  Docktime data
                </td>
                <td>
                  Number of containers data
                </td>
                <td>
                  weight data
                </td>
                <td>
                  refuel duration data
                </td>
                <td>
                  price per hour data
                </td>
                <td>
                  arrival data 
                </td>
                <td>
                  container id data
                </td>
                <td>
                  port id data
                </td>
                <td>
                <a href=""><button class="Delete_button" type="button">Delete</button></a>
                </td>
              </tr>
            </tbody>
        </table>
        <a href="newShip.php" target="_blank"><button class="New_button" type="button">Add ship</button></a>

    </div>

    <br>
    <br>
    <div class="customer">
        <h2>Ships and containers</h2>

        <form action="">
          <label for="shipid" class="row">Search Ship Id to see container data:</label>
          <input class="input" type="text" name="shipid" id="shipid" placeholder="Enter ship ID">
          <input  id ="button_action" type="submit" name="submit" value="Search for containers" class="btn btn-default">

        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        Container Id
                    </th>
                    <th>
                        Goods name
                    </th>
                    <th>
                        Delete Entry
                    </th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  container Id data
                </td>
                <td>
                  Goods name data
                </td>
                <td>
                <a href=""><button class="Delete_button" type="button">Delete</button></a>
                </td>
              </tr>
            </tbody>
        </table>
        <a href="newContainer.php" target="_blank"><button class="New_button" type="button">Add container</button></a>

    </div>
  </body>
</html>