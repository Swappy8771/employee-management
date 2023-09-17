<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application Name</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
   
    <div class="container">
        @yield('content')
    </div>
    <style>
        html, body, div, h1, h2, p, ul, li, form, input, button {
            margin: 0;
            padding: 0;
            border: 0;
        }
       
        .pagination .page-link::after {
            content: "»";
            font-size: 14px;
            vertical-align: middle;
        }
        .create-button-container {
            margin-left: auto;
        }
        .float-left {
            float: left;
        }
        .float-right {
            float: right;
        }
        .btn-success {
            background-color: #28a745;
            color: #fff;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 15px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        img {
            max-width: 20pxpx;
            max-height: 50px;
            border: 1px solid #ccc;
           
        }
    </style>
</body>
</html>
