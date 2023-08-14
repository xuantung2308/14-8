<!DOCTYPE html>
<html lang="en">
<html lang="en">
     <head>
      <title>Xuất Excel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>

     <style>
        .date{
            width: 35%;
            border-radius: 5px
        }

        .ex-btn{
            padding: 5px 10px;
            background-color: lightblue;
            border-radius: 5px;
            border: 1px solid lightblue;
            font-size: 20px;
        }
     </style>

     <body>
         <?php
            require('header.html');
        ?>
        <div style="width: 65%;">
            <form action="excel.php" style="border: none;margin-top: 40px ;float: left; width: 80%">
                <div class="row" style="font-size: 20px;">
                    <div class="col-10">
                        <label>Từ: &ensp;</label><input type="date" id="from" class="date"/> <label>&ensp; - Đến&ensp;</label><input type="date" id="to" class="date"/>
                    </div>
                    <div class="col-2">
                        <input type="submit" class="ex-btn" value="Tìm"/>
                    </div>
                </div>
            </form>
        </div>
     </body>