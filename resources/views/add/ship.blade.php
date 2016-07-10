@extends('base')
@section('content')
    <header class="title page-header text-center">
        <h1>登记邮寄</h1>
    </header>
    <div class="row">

        <div class="col-md-2 col-md-offset-5">
            <form class="text-center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <!-- <input type="text" name="Name" placeholder="姓名" value=""> -->
                <div class="form-group">
                    <i class="fa fa-user"></i> <label>姓名：</label>
                    <select class="form-control" name="Name">
<!--                        --><?php
//                        /*This php include Select Customers Name*/
//                        $Customer_List = mysql_query("SELECT * FROM customers");
//                        while ($CustomerName = mysql_fetch_array($Customer_List)) {
//                            echo "<option value='" . $CustomerName['Name'] . "'>" . $CustomerName['Name'] . "</option>";
//                        }
//                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <i class="fa fa-font"></i> <label>所含物品：</label>
                    <input type="textarea" class="form-control" name="ShipProducts" placeholder="所包含的物品">
                </div>

                <div class="form-group">
                    <label>日期：</label>
                    <input type="date" class="form-control" name="ShipDate">
                </div>

                <div class="form-group">
                    <label>邮寄重量：</label>
                    <input type="number" class="form-control" name="ShipWeight">
                </div>

                <div class="form-group">
                    <label>邮寄费用：</label>
                    <input type="number" class="form-control" name="ShipPrice">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-default"  name="name" value="提交">
                </div>
            </form>
        </div>
    </div>
@stop