@extends('base')
@section('content')
    <div class="row">
        <header class="title page-header text-center">
            <h1>All Order List</h1>
        </header>
        <div class="col-md-12 table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID:</th>
                    <th><i class="fa fa-user"></i></th>
                    <!-- <th>单号/<i class="fa fa-chrome"></i></th> -->
                    <th><i class="fa fa-tags"></i></th>
                    <!--             <th>价格/实价：</th>
                               <th><i class="fa fa-calendar"></i></th>
                                <th>数量：</th> -->
                    <th><i class="fa fa-truck"></i></th>
                    <th><i class="fa fa-balance-scale"></i>、<i class="fa fa-money"></i></th>
                    <th><i class="fa fa-truck"></i></th>
                    <th><i class="fa fa-gear"></i></th>
                </tr>
                </thead>

                    <tbody>
                    <tr>
                        @foreach($orders as $order)
                        <td>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->productname}}</td>
                        <td>{{$order->orderstatus}}</td>
                        <td>{{$order->bank}}、
                            @if( $order->packagereturn==1&&$order->bankstatus==0)
                            等待汇款
                            @elseif($order->packagereturn==1 && $order->bankstatus==1)
                            已退款
                            @elseif($order->bankstatus==1&&$order->packagereturn==0)
                            您忘记选择已经退货.
                            @elseif($order->packagereturn==1)
                            等待退款
                            @elseif($order->packagereturn==0)
                            @endif
                        </td>
                         <td>
                             @if($order->packagereturn==0)
                                 不需退回
                             @elseif($order->packagereturn==1)
                                 <a href='http://www.google.com/?q={{$order->returntracking}}' target='_blank'>已经退货</a>
                            @endif
                         </td>

                        <td>
                            <ul class="list-inline">
                                <li><a href="{{url('order/detail/'.$order->id)}}" class="btn btn-primary btn-sm">详情<a></li>
                                <li><a href="{{url('order/edit/'.$order->id)}}" class="btn btn-warning btn-sm">修改</a></li>
                                <li><a href="{{url('order/remove/'.$order->id)}}" class="btn btn-danger btn-xs" id="delbutton">删除</a></li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                <tfoot>
<!--

                echo "<div class='text-center'>";
                $count_result = mysql_query("SELECT count(*) as count FROM orders");
                $count_array = mysql_fetch_array($count_result);
                $pagenum=ceil($count_array['count']/$pagesize);
                echo "共",$count_array['count'],"条订单";
                //循环输出各页数目及连接
                if ($pagenum > 1) {
                for($i=1;$i<=$pagenum;$i++) {
                if($i==$p) {
                echo ' [',$i,']';
                } else {
                echo ' <a href="orders.php?p=',$i,'">',$i,'</a>';
                }
                }
                }
                echo "</div>";
                //分页结束

                /*统计订单数量*/
                $need_return_orders = mysql_query("SELECT PackageReturn FROM Orders WHERE PackageReturn=0");
                $after_return_orders = mysql_query("SELECT PackageReturn FROM Orders WHERE PackageReturn=2");
                $need_return_orders = mysql_num_rows($need_return_orders);
                $after_return_orders = mysql_num_rows($after_return_orders);
                $returned = $count_array['count']-$need_return_orders;

                echo "<pre class='text-center'>"."总共有".$count_array['count']. "个订单 &nbsp";
                echo "实际".$need_return_orders ."单&nbsp";
                echo $returned . "单需要退货&nbsp";
                echo "已退". $after_return_orders ."单&nbsp"."</pre>";
                ?>
-->
                </tfoot>
            </table>
        </div>
    </div>
@stop
