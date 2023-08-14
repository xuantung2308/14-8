<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Thông tin cá nhân</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>    

    <style>
        div{
            position: relative;
        }

        .infor{
            display: inline;
            width: 80%;
        }
        .btn{
            display: inline;
            float: right;
            width: auto;
        }

    </style>
     <body>
        <?php
            require('header.html')
        ?>

        <div class="container" style="margin-top: 20px"> 
            <div class="row">
                <div class="col-5">
                    <h5 style="font-weight: bold;">Thông tin cá nhân</h5>
                    <div>
                        <label>Họ và tên:</label><br>
                        <div>
                            <input type="text" class="infor" disabled/>
                            <input type="button" class="btn" value="Thay đổi" />
                        </div>
                    </div>

                    <div>
                        <label>Ngày sinh:</label><br> 
                        <div> 
                            <input type="date" class="infor" disabled/>
                            <input type="button" class="btn" value="Thay đổi" />
                        </div> 
                    </div>

                    <div>
                        <label>Tuổi</label><br>
                        <input type="text" class="infor" disabled/>
                        <input type="button" class="btn" value="Thay đổi" />
                    </div>

                    <div>
                        <label>Giới tính</label><br>
                        <input type="text" class="infor" disabled/>
                        <input type="button" class="btn" value="Thay đổi" />
                    </div>
                </div>

                <div class="col-1"></div>

                <div class="col-5" >
                    <h5 style="font-weight: bold;">Thông tin tài khoản</h5>
                    <div>
                        <label>Email</label><br>
                        <input type="text" class="infor" disabled/>
                        <input type="button" class="btn" value="Thay đổi" />
                    </div>

                    <div>
                        <label>Số điện thoại</label><br>
                        <input type="text" class="infor" disabled/>
                        <input type="button" class="btn" value="Thay đổi" />
                    </div>
                </div>
            </div>
        </div>
        
        
     </body>