<?php
$baseurl=base_url();

?>
<link href="<?php echo $baseurl.'/asset/css/datepicker.css'?>" rel="stylesheet">
<script src="<?php echo $baseurl.'/asset/js/jquery_ui_core_1_10.js'?>"></script>
<script src="<?php echo $baseurl.'/asset/js/jq_datepicker_1_10.js'?>"></script>
<script>
  $( function() {
    $(".date_selector").datepicker({minDate:0, dateFormat: "yy-mm-dd",});
  } );
</script>

<div class="page-container contanier" ng-controller='productCtrl'>   
<div id="export" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="card panel ">
                            <div class="panel-heading">
                            <button class="close" type="button" data-dismiss="modal">×</button>
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Download Data</h3>
                                
                            </div>
                            <div class="panel-body ">
                            <div class="row">
          <div class="col-sm-12">
          <a target='_blank' href='<?php echo $baseurl."asset/exportdata/" ?>{{file_name}}'>Download file</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="myModal" class="modal fade" role="dialog" style="margin-left:150px;">
  <div class="modal-dialog modal-lg">
  <div class="card panel ">
                            <div class="panel-heading">
                            <button class="close" type="button" data-dismiss="modal">×</button>
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> ORDER DETAILS</h3>
                                
                            </div>
                              <div class="panel-body ">
                              <div class="col-sm-12">
                                <p><b>Product Name </b>: {{ord.title}}</p>
                                <p><b>Seller SKU </b>: {{ord.ord_sku}}</p>
                                <p><b>Order NO </b>: {{ord.order_id}}</p>
                                


                              </div>
                              <div class="col-sm-5">
                                 <table class="table table-condensed table-striped">
                                   <tr><th colspan="2" class="text-center">Product Details</th></tr>
								   <tr><td>ASIN</td><td class="text-right">{{ord.asin}}</td></tr>
                                   <tr><td>Purchase Date</td><td class="text-right">{{ord.po_date}}</td></tr>
								   <tr><td>Last Update Date</td><td class="text-right">{{ord.last_update_date}}</td></tr>
                                   <tr><td>Quantity</td><td class="text-right">{{ord.qty}}</td></tr>
                                   <tr><td>Item Price</td><td class="text-right">{{ord.itm_price}}</td></tr>
                                   <tr><td>Item Tax</td><td class="text-right">{{ord.itm_tax}}</td></tr>
								   <tr><td>Shipping Price</td><td class="text-right">{{ord.ship_price}}</td></tr>
                                   <tr><td>Shipping Tax</td><td class="text-right">{{ord.ship_tax}}</td></tr>
								   
                                   
                           <!-- <tr><td>Net Fee</td><td class="text-right">{{ord.fee}}</td></tr> -->
                                 </table>
                                 </div>
                                 <div class="col-sm-7">
                                 <table class="table table-condensed table-striped">
                                   <tr><th colspan="2" class="text-center">Buyer Details</th></tr>
                                   <tr><td>Gift Price</td><td class="text-right">{{ord.gift_price}}</td></tr>
								   <tr><td>Gift Tax</td><td class="text-right">{{ord.gift_tax}}</td></tr>
								   <tr><td>Item Promotional Discount</td><td class="text-right">{{ord.itm_promo_discount}}</td></tr>
								   <tr><td>Shipping Promotional Discount</td><td class="text-right">{{ord.itm_ship_discount}}</td></tr>
								   <tr><td>Promotional ID</td><td class="text-right">{{ord.promo_id}}</td></tr>
                                   <tr><td>City</td><td class="text-right">{{ord.ship_city}}</td></tr>
                                   <tr><td>Zip</td><td class="text-right">{{ord.ship_post}}</td></tr>
                                   <tr><td>State </td><td class="text-right">{{ord.ship_state}}</td></tr>
                                   <tr><td>Country</td><td class="text-right">{{ord.ship_country}}</td></tr>
                                   <!-- <tr><td>Net Fee</td><td class="text-right">{{ord.fee}}</td></tr> -->
                                 </table>
                                 </div>
                                 
                                 <div class="col-sm-12">
                                   <a href="#" class='btn btn-danger pull-right' data-dismiss="modal">Close</a>
                                 </div>
                              </div>
   </div>
  </div>
 </div>


    <div class="row">
    
        <div class="col-sm-12">
        <div class="card panel ">
            <div class="panel-heading">
                   <h3 class="panel-title"><i class="fa fa-database"></i> Flat File All Orders Report by Order Date</h3>
            </div>
            <div class="panel-body" >
            <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3">
                                <form role="form">
                                    <div class="form-group contact-search m-b-30">
                                        <input type="text" placeholder="Search..." ng-model = 'filter.search' class="form-control" id="search">
                                        
                                    </div>
                                    <!-- form-group -->
                                </form>

                            </div>
                          <!---  <div class="col-sm-1" style="width:9%">
                              <select class="form-control" ng-model='filter.country_status'>
                                <option value="ALL">ALL</option>
                                <option value="IT">IT</option>
                                <option value="FR">FR</option>
                                <option value="DE">DE</option>
								<option value="ES">ES</option>
								<option value="UK">UK</option>
                              </select> 
                            </div> --->
							 <div class="col-sm-1" style="width:9%">
                              <select class="form-control" ng-model='filter.ord_status'>
                                 <option value="ALL">ALL</option>
                                <option value="SHI">Shipped</option>
                                <option value="UNS">Unshipped</option>
                                <option value="CAN">Cancelled</option>
                                <option value="PEN">Pending</option>
                              </select> 
                            </div>
							
							<div class="col-sm-1" style="width:9%">
                              <select class="form-control" ng-model='filter.itm_status'>
                                 <option value="ALL">ALL</option>
                                <option value="SHI">Shipped</option>
                                <option value="UNS">Unshipped</option>
                                <option value="CAN">Cancelled</option>
                                <option value="PEN">Pending</option>
                              </select> 
                            </div>
						 <!--- 	<div class="col-sm-2">
                                                               <button class="btn btn-default" popover-trigger="'outsideClick'" uib-popover-template="date_filter_tmpl" popover-title="Date Filter" popover-placement="bottom-left" style="width:100%">Filter By Date</button>
                            <!-- <input type="text" class="form-control" ng-model='dt_text' popover-trigger="'outsideClick'" ng-popover-trigger="'outsideClick'" uib-popover-template="date_filter_tmpl" popover-title="Date Filter" popover-placement="bottom-left"> -->
  <!--- <script type="text/ng-template" id="date_filter_tmpl.html">
        
     <div style="padding: 5px 5px; "><a href='#'  ng-click='filter.date_rng="today";filtergrid()'>Today</a></div>
     <div style="padding: 5px 5px; "><a href='#'  ng-click='filter.date_rng="7 days";filtergrid()'>Last 7 Days</a></div>
     <div style="padding: 5px 5px; "><a href='#'  ng-click='filter.date_rng="30 days";filtergrid()'>Last 30 Days</a></div>
     <div style="padding: 5px 5px; "><a href='#'  ng-click='filter.date_rng="this month";filtergrid()'>This month</a></div>
     <div style="padding: 5px 5px; "><a href='#' ng-click='filter.date_rng="last month";filtergrid()'>Last Month</a></ul></div>
   <div style="margin-top:5px">
     <div class="col-sm-6 no-padding">  
     <input type='text' class='form-control date_selector'  jqdatepicker name='from' placeholder='From' ng-model='filter.frm_date'>
   </div>
   <div class="col-sm-6 no-padding">  
     <input type='text' class='form-control date_selector'  jqdatepicker name='to' placeholder='To' ng-model='filter.to_date'>
   </div>
   </div>
   <div class="col-sm-6 no-padding" style="margin-top: 5px">  
     <a href='#' class="btn btn-info" style='width:100%' ng-click="filter.frm_date='';filter.to_date=''">Reset</a>
   </div>
   
   <div class="col-sm-6 no-padding" style="margin-top: 5px">  
     <a href='#' class="btn btn-info" style='width:100%' ng-click='filtergrid()'>Filter</a>
   </div>
   
        
    </script>
                            </div>	--->
							
                            <div class="col-sm-1">
                              <a class='btn btn-info' id="myBtn"  ng-click='filtergrid()'>Search</a>
                            </div>
							<div class="col-sm-1" style="width:10%">
                              <select class="form-control" name='type' ng-model='filter.order_status'>
                                <option value="CSV">CSV</option>
                                <option value="TXT">TXT</option>
                                <option value="XLS">XLS</option>
                              </select> 
                            </div>
                           <div class="col-sm-1">
							<a href='#' ng-click='export_data()'  class="btn btn-success" >Export</a>
							 </div>
						  
            <div class="col-sm-12">
                 <div class="table-responsive">
                                  <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                        <tr>
                                            <th>Order Id</th>
											<th>SKU</th>
											<th>ASIN</th>
                                            <th>Title</th>
											<th>Price</th>
                                            <th>Order Date</th>
                                            <th>Order Status</th>
											<th>FullFillment</th>
											<th>Item Status</th>
											<th>Country</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr   ng-click='show_order_details(tnx)' data-target="#myModal" data-toggle="modal" ng-show='prodList.length>0' ng-repeat="tnx in prodList " >
                                            <td class="col-sm-2">{{tnx.order_id}}</td>
                                            <td>{{tnx.ord_sku}}</td>
											<td><a style="font-weight:600;color:green" href="https://www.amazon.{{tnx.sales_channel}}/dp/{{tnx.asin}}" target="_blank">{{tnx.asin}}</a></td>
                                            <td>{{tnx.title | limitTo:50}}</td>
											<td>{{tnx.itm_price}}</td>
                                            <td class="col-sm-1">{{tnx.po_date}}</td>
                                            <td><span ng-if="tnx.ord_status=='Shipped'" class='label label-success'>{{tnx.ord_status}}</span>
                                                <span ng-if="tnx.ord_status=='Unshipped'" class='label label-warning'>{{tnx.ord_status}}</span>
                                                <span ng-if="tnx.ord_status=='Canceled'" class='label label-danger'>{{tnx.ord_status}}</span>
                                                <span ng-if="tnx.ord_status=='Pending'" class='label label-danger'>{{tnx.ord_status}}</span></td>
												<td>{{tnx.fulfillment}}</td>
												<td><span ng-if="tnx.itm_status=='Shipped'" class='label label-success'>{{tnx.itm_status}}</span>
                                                <span ng-if="tnx.itm_status=='Unshipped'" class='label label-warning'>{{tnx.itm_status}}</span>
                                                <span ng-if="tnx.itm_status=='Canceled'" class='label label-danger'>{{tnx.itm_status}}</span>
                                                <span ng-if="tnx.itm_status=='Pending'" class='label label-danger'>{{tnx.itm_status}}</span></td>
												<td>{{tnx.sales_channel}}</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <h1 ng-show='prodList.length==0' class="text-center">No Transaction found</h1>
                            </div>
                        </div>  
                         <div class="col-sm-12">
                                   <ul class="pagination pull-right">
                                    <li ng-class="prevPageDisabled()">
                                      <a href="javascript:void(0)" ng-click="prevPage()">« Prev</a>
                                    </li>
                                    <li ng-repeat="n in range()" ng-class="{active: n == currentPage}" ng-click="setPage(n)">
                                      <a href="javascript:void(0)">{{n+1}}</a>
                                    </li>
                                    <li ng-class="nextPageDisabled()">
                                      <a href="javascript:void(0)" ng-click="nextPage()">Next »</a>
                                    </li>
                                  </ul>

                             </div>
                            
                 </div>         
                   
            </div>
        </div>
        
    </div>
    <div id="userModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="card panel ">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>COUPON USERS</h3>
                                
                            </div>
                            <div class="panel-body ">
                             <table class="table">
                              <tr><th>Sl.No</th><th>Name</th><th>Email</th></tr>
                              <tr ng-repeat='usr in coupon_user'>
                                <td>{{$index+1}}</td>
                                <td>{{usr.fname}} {{usr.lname}}</td>
                                <td>{{usr.umail}}</td>

                              </tr>
                             </table>

                            </div>
 </div> 
 </div>
 </div>                           



    
    
    
    </div>

</div>
<script>
var input = document.getElementById("search");
input.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("myBtn").click();
    }
});
</script>
<script type="text/javascript">
crawlApp.factory('productFactory', ['$http', '$q','limitToFilter', function($http,$q,limitToFilter) {
    
    var product_list_url        =   "<?php echo $baseurl."orders_report_orderby_date_list/get_product_list/"?>";
	var d_path        =   "<?php echo $baseurl."orders_report_orderby_date_list/export_datasss/"?>";
	 var export_list_url        =   "<?php echo $baseurl."orders_report_orderby_date_list/export_data"?>";
    
    var export_data = function (search) 
    {
          var deferred = $q.defer();
          var path =export_list_url+'/'+search;
          $http.get(path)
          .success(function(data,status,headers,config){deferred.resolve(data);})
          .error(function(data, status, headers, config) { deferred.reject(status);});
          return deferred.promise;
    };
 
    
    var update_product_info=function(product_info)
    {
       return $http({
                      method: "post",
                      url:"<?php echo $baseurl.'orders_report_orderby_date_list/update_product_info'?>",
                      data:{
                          product_title:product_info.product_title,
                          product_asin:product_info.product_asin,
                          actual_price:product_info.actual_price,
                          selling_price:product_info.selling_price
                      }
                     }); 
                   
    };
    
    var get_product_list = function (orderby,direction,offset,limit,search) 
    {
          var deferred = $q.defer();
          var path =product_list_url+orderby+'/'+direction+'/'+offset+'/'+limit+'/'+search;
          $http.get(path)
          .success(function(data,status,headers,config){deferred.resolve(data);})
          .error(function(data, status, headers, config) { deferred.reject(status);});
          return deferred.promise;
    };
   var download_data=function(file)
    {
      return $http({
                      method: "post",
                      url:d_path,
                      data:{
                          export_id:1
                      }
                     }); 
          

    }
    
    return {
        get_product_list:get_product_list,
		download_data:download_data,
		export_data:export_data,
        update_product_info:update_product_info
    };
    
}]);
crawlApp.controller('productCtrl', ['$scope','$parse','$window','productFactory','$http','limitToFilter',function($scope,$parse,$window,productFactory,$http,limitToFilter) {        
      $scope.prodList=[];
      $scope.date_filter_tmpl="date_filter_tmpl.html";  
      $scope.filter={};
      $scope.filter.search='';
      $scope.filter.order_status='CSV';
	  $scope.filter.ord_status='ALL';
	  $scope.filter.itm_status='ALL';
	  $scope.filter.country_status='ALL';
      $scope.reset=function()
      {
        $scope.order={};
        $scope.order_items=[];

      }
      $scope.reset();
      $scope.ord={};
      $scope.show_order_details=function(tnx)
      {
        $scope.ord=tnx;

      }

  $scope.block_site=function()
        {
            $.blockUI({ css: { 
                border: 'none', 
                padding: '3px', 
                backgroundColor: '#000', 
                '-webkit-border-radius': '10px', 
                '-moz-border-radius': '10px', 
                opacity: .5, 
                color: '#fff' 
            }});

        }
      
    $scope.itemsPerPage = 25;
    $scope.currentPage = 0;
    $scope.sortorder='prod_id';
    $scope.direction='DESC';
    $scope.searchJSON=[];
    $scope.filterquery=[];
    $scope.order={};
    
    $scope.range = function()
    {
        var rangeSize = 8;
        var ret = [];
        var start;

        start = $scope.currentPage;

        if ( start > $scope.pageCount()-rangeSize ) {
          start = $scope.pageCount()-rangeSize;
        }

        for (var i=start; i<start+rangeSize; i++) {
          if(i>0)
          ret.push(i);
        }
        return ret;
   };

   $scope.prevPage = function()
   {
        if ($scope.currentPage > 0) 
        {
          $scope.currentPage--;
        }
   };

   $scope.prevPageDisabled = function()
   {
        return $scope.currentPage === 0 ? "disabled" : "";
   };

   $scope.nextPage = function()
   {
        if ($scope.currentPage < $scope.pageCount() - 1)
        {
          $scope.currentPage++;
        }
   };

   $scope.nextPageDisabled = function()
   {
        return $scope.currentPage === $scope.pageCount() - 1 ? "disabled" : "";
   };

   $scope.pageCount = function() 
   {
        return Math.ceil($scope.total/$scope.itemsPerPage);
   };

   $scope.setPage = function(n)
   {
        if (n > 0 && n < $scope.pageCount()) 
        {
          $scope.currentPage = n;
        }
   };

   $scope.$watch("currentPage",function(newValue, oldValue) 
   {
     $scope.get_transaction_list(newValue);
   });
   
   $scope.get_transaction_list=function(currentPage)
   {
      $scope.block_site();
      var promise= productFactory.get_product_list($scope.sortorder,$scope.direction,currentPage*$scope.itemsPerPage,$scope.itemsPerPage,$scope.searchJSON);
         promise.then(function(value){
          $.unblockUI();
         if(value.status_code==1)
         {
              
              $scope.prodList=value.datalist;
              $scope.total=value.total;
              
              
         }
         else
         {
            $scope.prodList=[];
            $scope.total=0;
            console.log(value);
             
         }     
       }, 
      function(reason) 
      {
        console.log("Reason"+reason);
      });
   }
     
   $scope.filtergrid=function()
   {
     $scope.filterquery=[
                          {searchtext:$scope.filter.search},
						  {order_status:$scope.filter.order_status},
						  {country_status:$scope.filter.country_status},
						  {ord_status:$scope.filter.ord_status},
						  {itm_status:$scope.filter.itm_status},
						  {from_date:$scope.filter.frm_date},
                          {to_date:$scope.filter.to_date},
                          {date_rng:$scope.filter.date_rng}
                        
                          
                        ];
    var argum=JSON.stringify($scope.filterquery);
    $scope.searchJSON=encodeURIComponent(argum);
    $scope.get_transaction_list(0);
  
   }
   $scope.export_data=function()
   {
    
     $scope.filterquery=[
                          {searchtext:$scope.filter.search},
						  {order_status:$scope.filter.order_status},
						  {country_status:$scope.filter.country_status},
						  {ord_status:$scope.filter.ord_status},
						  {itm_status:$scope.filter.itm_status},
						  {from_date:$scope.filter.frm_date},
                          {to_date:$scope.filter.to_date},
                          {date_rng:$scope.filter.date_rng}
                        ];
    var argum=JSON.stringify($scope.filterquery);
    $scope.searchJSON=encodeURIComponent(argum);
    $scope.block_site();
      var promise= productFactory.export_data($scope.searchJSON);
         promise.then(function(value){
          $.unblockUI();
         if(value.status_code==1)
         {
            location.href=value.download_url;            
         }
         else
         {
          swal('Error!',value.status_text,'error');
         }     
       }, 
      function(reason) 
      {
        console.log("Reason"+reason);
      });
  
   }
    $scope.export_datass=function()
    {
          swal({
                title: "Export data?",
                text: "!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                  $scope.block_site();
                  productFactory.download_data()
                          .success(
                                    function( html )
                                    {
                                      console.log(html);
                                      $.unblockUI(); 
                                        if(html.status_code==0)
                                        {
                                           swal('Error!',html.status_text,'error');
                                        }                    
                                        else if(html.status_code==1)
                                        {
                                          swal('Success!',html.status_text,'success');
                                          $scope.file_name=html.download_url;
                                          $('#export').modal('show');
                                           
                                        }
                                        
                                    }
                          )
                          .error(
                                 function(data, status, headers, config)
                                      {
                                           
                                       }

                          );              
                    
                } else {
                    swal("Cancelled", "Download cancelled:)", "error");
                }
            }); 
    }
   
    $scope.calc_profit=function()
    {
      if(parseFloat($scope.cpn.actual_price) > 0 && parseFloat($scope.cpn.selling_price) > 0 )
      {
          var act_price = parseFloat($scope.cpn.actual_price);
          var sl_price = parseFloat($scope.cpn.selling_price);
          var amz_fee=sl_price * (15/100);
          var amazon_fee_deducted=sl_price-amz_fee;
          var earnings=amazon_fee_deducted-act_price;
          $scope.cpn.profit=earnings;
      }
      else
      {
        $scope.cpn.profit=''; 
      }
    }

    
   
   

}]);
</script>
