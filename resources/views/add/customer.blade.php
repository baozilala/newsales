@extends('base')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="" action="#" method="post">
                <div class="form-group">
                    <i class="fa fa-user"></i> <label>姓名：</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <i class="fa fa-user-secret"></i> <label>昵称：</label>
                    <input class="form-control" type="text" name="alias">
                </div>
                <div class="form-group">
                    <i class="fa fa-mobile"></i> <label>电话：</label>
                    <input class="form-control" type="text" name="phone" maxlength="11">
                </div>
                <div class="form-group">
                    <i class="fa fa-map-marler"></i> <label>地址：</label>
                    <input class="form-control" type="text" name="address">
                </div>
                <div class="form-group">
                    <i class="fa fa-paper-plane-o"></i> <label>邮编：</label>
                    <input class="form-control" type="text" name="zip" maxlength="6">
                </div>
                <div class="form-group">
                    <i class="fa fa-shield"></i> <label>身份证：</label>
                    <input class="form-control" type="text" name="chineseid" maxlength="18">
                </div>
                <div class="form-group">
                    <input class="form-control" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
@stop
