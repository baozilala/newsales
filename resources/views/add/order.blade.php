@extends('base')
@section('content')

    {!! Form::open(array('url'=>'/add/order')) !!}
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <form class="text-center" action="{{url('/add/order')}}" method="post" >
                <div class="form-group">
                    <i class="fa fa-user"></i> <label>姓名：</label>
                        {{Form::select('CustomerName', $customersName), null ,['class' => 'form-control']}}
                </div>
                <div class="form-group">
                    <i class="fa fa-shopping-cart"></i>
                    {{ Form::label('Order#:', null, ['class' => 'control-label']) }}
                    {{ Form::text('OrderNumber', '', array_merge(['class' => 'form-control', 'placeholder'=>'订单号'])) }}
                </div>

                <div class="form-group">
                    <i class="fa fa-amazon"></i>
                    {{ Form::label('OrderSite', null, ['class' => 'control-label']) }}
                    {{ Form::text('OrderSite', '', array_merge(['class' => 'form-control', 'placeholder'=>'订单网站'])) }}
                </div>

                <div class="form-group">
                    <i class="fa fa-amazon"></i>
                    {{ Form::label('SiteUrl', null, ['class' => 'control-label']) }}
                    {{ Form::text('OrderSiteUrl', '', array_merge(['class' => 'form-control', 'placeholder'=>'订单网站连接'])) }}
                </div>

                <div class="form-group">
                    <i class="fa fa-amazon"></i>
                    {{ Form::label('Products', null, ['class' => 'control-label']) }}
                    {{ Form::text('ProductName', '', array_merge(['class' => 'form-control', 'placeholder'=>'产品名称'])) }}
                </div>

                <div class="form-group">
                    <i class="fa fa-check-square-o"></i>
                    {{ Form::label('Products', null, ['class' => 'control-label']) }}
                    {{ Form::text('Unit', '', array_merge(['class' => 'form-control', 'placeholder'=>'数量'])) }}
                </div>
        </div>

        <div class="col-md-4 text-center">
            <div class="form-group">
                <i class="fa fa-dollar"></i> <label>返现利率：</label>
                <input type="text" class="form-control" name="CashBack" placeholder="返现 0.XX">
            </div>

            <div class="form-group">
                <i class="fa fa-dollar"></i> <label>购买价格：</label>
                <input type="text" class="form-control" name="BuyingPrice" placeholder="购入价格">
            </div>

            <div class="form-group">
                <i class="fa fa-dollar"></i> <label>收取费用：</label>
                <input type="text" class="form-control" name="Price" placeholder="价格">
            </div>

            <div class="form-group">
                <label>日期：</label>
                <input type="date" class="form-control" name="BuyingDate">
            </div>

            <div class="hidden">
                <i class="fa fa-truck"></i> <label>商家发货：</label>
                <select class="form-control" name="ShipStatus">
                    <option value="等待收货">等待收货</option>
                    <option value="收到货物">收到货物</option>
                </select>
            </div>

            <div class="form-group">
                <i class="fa fa-credit-card"></i> <label>银行卡：</label>
                <select class="form-control" name="Bank">
                    <option value="Discover">Discover</option>
                    <option value="Amex">Amex</option>
                    <option value="Chase">Chase</option>
                    <option value="PNC">PNC</option>
                </select>
            </div>
            <div class="hidden">
                <i class="fa fa-spinner"></i> <label>银行状态：</label>
                <select class="form-control" name="BankStatus">
                    <option value="0"></option>
                    <option value="1">已退款</option>
                </select>
            </div>

            <div class="hidden">
                <i class="fa fa-truck"></i> <label>是否退货：</label>
                <select class="form-control" name="PackageReturn">
                    <option value=""></option>
                    <option value="0">不需退货</option>
                    <option value="1">已经退货</option>
                </select>
            </div>

            <div class="form-group">
                <input class="btn btn-default" type="submit" name="name" value="提交">
                <input class="btn btn-warning" type="reset" value="重置">
            </div>
            </form>

        </div>
        <div class="col-md-2 col-md-offset-5">

        </div>
    </div>
    {!! Form::close() !!}
@stop