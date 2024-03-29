<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title> E-Mart-Online Store </title>
    
    
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice {
            width: 90%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-header h1 {
            margin: 0;
        }

        .invoice-details {
            margin-bottom: 20px;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .invoice-table th,
        .invoice-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .invoice-total {
            text-align: right;
        }
    </style>
</head>
<body>

    

<div class="invoice">
    <div class="invoice-header">
   
        <h2><center><u> E-Mart | Online Store Invoice </u> </center></h2>
         
          <center>  <img src="images/e-mart.png" style="width:180px;height:65px;"> </center>

        <p>Date: {{ date('d-m-y') }} </p> 
    </div>

    <br>


    <div class="invoice-details">
       <h3 style="right"><B>Bill To:</B> </h3>

        <p><B>First Name: </B> {{$order->first_name}} </p>
        <p><B>Last Name: </B> {{$order->last_name}} </p>
        <p><B>Email: </B> {{ $order->email }} </p>
        <p><B>Phone No: </B> +91 {{ $order->phone }} </p>
        <p><B>Address 1: </B> {{ $order->address1 }} </p>
        <p><B>Address 2: </B> {{ $order->address2 }} </p>
        <p><B>Pincode: </B>{{$order->post_code}}</p>
        <p><B>Country: </B>  {{$order->country}}</p>

    </div>
    
    <br>

    <table class="invoice-table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Payment Method </th>
                <th>Order Status </th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{$order->order_number}} </td>

                <td>  {{ $order->name }}  </td>
                <td><center> {{$order->quantity}} </center></td>
                <td><span>INR : {{number_format($order->sub_total,2)}}</span></td>

                <td> @if($order->payment_method=='cod') Cash on Delivery @else Rajor Pay @endif</td>

                <td>{{$order->status}}</td>      
                          
              
            </tr>
            
        </tbody>
    </table>

    <br>

    <div class="invoice-total">
        <p><B>Total Payment: </B> INR :{{number_format($order->total_amount,2)}}</p>
    </div>

    <br>
    <br>

    <center>
        
    <h3>Thank you for your Order. We Hope You've Enjoying Shopping!</h3>
    <p> --------------------------------- </p>
    <p>Authority by Umang Modi</p> 
    </center>

</div>

<br>





</body>
</html>
