<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        ::-webkit-scrollbar {
            display:none;
        }
        .tracking{
            width: 100%;
            height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 182, 193, 0.544);
        }.tracking input{
            width: 500px;
            height: 80px;
            padding-left: 10px;
            margin-right: 1rem;
            margin-left: 1rem;
        }
        .tracking input:focus{
            outline: none;
        }
        .tracking input::placeholder{
            font-size: 1.5rem;
            letter-spacing: 5px;
        }
        #search-btn{
            width: 200px;
            background-color: #fff !important;
            border: none;
            color: #d64867;
            transition: 0.5s all;
            font-size: 1.5rem;
            letter-spacing: 3px;
        }
        #search-btn:hover{
            background-color: #d64867 !important;
            color: #fff;
            border: 1px solid black;
        }
        
    </style>
</head>
<body>
<?php include 'header.php';?>
    <div class="tracking">
        <form action="">
            <input type="text" name="trackingId" id="trackingid" placeholder="Order ID...">
            <input type="submit" name="" id="search-btn" value="Search">
        </form>
    </div>
</body>
</html>