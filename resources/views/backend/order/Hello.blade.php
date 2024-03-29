{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    

</head>
<body>

    <h2>E-Mart Order Purchase Invoice </h2>
    ------------------------------------------------------------------------------------------------------
    <h3> Thank u for your purchasing From my E-Mart Online Store </h3>
    <h4> You can download your invoice from here  </h4>

    <a href="https://play-lh.googleusercontent.com/nJpQlfW0kUqCyZo6KPRShIYtEKiuWzZG3TxvqIMLwbhHBEdiaphOg1Vu0AjWn8VaAzaR"> Click Here to Download Invoice </a>
    
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Confirmation</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
    }

    p {
      color: #666;
    }

    .order-details {
      margin-top: 20px;
      border-top: 1px solid #ccc;
      padding-top: 10px;
    }

    .product {
      margin-bottom: 10px;
    }

    .product img {
      max-width: 100px;
      margin-right: 10px;
    }

    .footer {
      margin-top: 20px;
      text-align: center;
      color: #999;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1><u>E-Mart - Online Store Invoice </u></h1>
    <p>Date: {{ date('d-m-y') }}</p>

    <script>
      const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
      
      const d = new Date();
      let day = weekday[d.getDay()];
      document.getElementById("demo").innerHTML = day;
      </script>

    <p>Dear Customer,</p>
    <p>Your order has been Delivered. Thank u for your purchasing From my E-Mart Online Store</p>
    <p>Thank you for shopping with us. If you have any questions, please contact our support team.</p>

    <p><B>Authority by : </B> Umang Modi</p>

  </div>
</body>
</html>
