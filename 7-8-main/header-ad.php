<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>    

     <style>
         .search{
            width: 100%;			
            padding: 10px 20px;
            display: flex;
            align-items: center;
            text-align: center;  
         }

         .search input{
            width: 100%;
            border: 0;
            outline: 0;
            padding: 0;
            font-size: 18px;
         }

         table,th,td{
            border: 1px solid black;
            border-collapse: collapse;	
        }
        th,td{
            text-align: center;
            border: 1px solid black;
            padding: 8px;
        }
        table{
            overflow-x: auto;
        }
        
        .chart-btn{
               background-color: lightblue;
               height: 35px;
               border-radius: 15px;
               padding: 5px 10px;
          }

         .add-btn{
            padding: 5px 10px;
            background-color: pink;
            border: 1px solid pink;
            border-radius: 15px;
            font-size: 18px;
            width: 93%;
            color: white;
         }
     </style>

     <body>
        <?php
            require('ad-header.html');
        ?>

            <div class="row" style="margin-top: 50px; width: 65%">
               <div class="col-10" style="width: 50%;">
                  <div class="surround" style="border-radius: 25px;">
                     <div class="search">
                        <input type="text" placeholder="Search">
                        <img src="search.png" style="width: 3%; cursor: pointer">
                     </div>
                  </div>
               </div>
               
               <div class="col-2" style="text-align: center; ">
                  <a href="add.php"><button class="add-btn">Thêm mới</button></a>
               </div>
            </div>

            <table style="width: 65%;">
               <tr>
                  <th>STT</th>
                  <th>Họ và tên</th>
                  <th>Ngày sinh</th>
                  <th>Giới tính</th>
                  <th>Email</th>
                  <th></th>
               </tr>
            </table>
     </body>