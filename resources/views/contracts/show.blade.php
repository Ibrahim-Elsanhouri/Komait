<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>اتفاقية العمل</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
	  <!-- CUSTOM STYLE  -->
    <link href="{{ asset('assets/css/custom-style.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
</head>

<body>
 <div class="container" style="direction: rtl;">
     
      <div class="row pad-top-botm">
        
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <strong> منصة كميت الاستشارية التدريبية</strong>
              <br />
                  <i>العنوان :</i> الرياض 
              <br />
                  الرياض 
              <br />
                 المملكة العربية السعودية
              
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 ">
            <img src="https://komait.com/wp-content/uploads/2020/03/C2.png" width="325" height="125" style="padding-bottom:20px;" /> 
         </div>
     </div>
     <div  class="row text-center contact-info" >
         <div class="col-lg-12 col-md-12 col-sm-12" >
             <hr />
             <span>
                 <strong> نوع الاستشارة : </strong>  {{ $contract->offer->consultant->type->name }}
             </span>
             <span>
                 <strong>تاريخ الطلب : </strong>  {{ $contract->offer->consultant->created_at }} 
             </span>
              <span>
                 <strong> مدة التنفيذ بالايام  : </strong>   {{ $contract->offer->period }}
             </span>
             
             <hr />
         </div>
     </div>
     <div  class="row pad-top-botm client-info">
         <div class="col-lg-6 col-md-6 col-sm-6">
         <h4>  <strong>الطرف الثاني (مزود الخدمة)</strong></h4>
           <strong>  منصة كميت الاستشارية</strong>
             <br/>
      
             <b>الجوال :</b> +90-908-567-0987
              <br/>
             <b>البريد الالكتروني :</b> info@clientdomain.com
         </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            
               <h4>  <strong>الطرف الاول (طالب الخدمة) </strong></h4>
               <strong>  {{ CRUDBooster::myName()	 }}  </strong>
               <br />
        
               <b>الجوال :</b> {{ CRUDBooster::myMobile()	 }}
                <br />
               <b>البريد الالكتروني :</b> {{ CRUDBooster::myEmail()	 }}
         </div>
     </div>
     <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>الاستشارة</th>
                                    <th>تكلفة العرض</th>
                                    <th> ضريبة القيمة المضافة (15%)</th>
                                    <th>اجمالي</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <th> {{ $contract->offer->consultant->subject }} </td>
                                    <td>{{ $contract->offer->cost }} </td>
                                    <td>
                                    <?php 
                                    echo $contract->offer->cost * 0.15 ?>
                                    </td>
                                    <td>  <?php 
                                    echo $contract->offer->cost + $contract->offer->cost * 0.15 ?></td>
                                </tr>
                             
                               
                                
                            </tbody>
                        </table>
               </div>
             <hr />
             <div class="ttl-amts">
               <h5> الاجمالي :  <?php 
                                    echo $contract->offer->cost + $contract->offer->cost * 0.15 ?></h5>
             </div>
             <hr />
              <div class="ttl-amts">
                  <h5>       <?php 
                                    echo $contract->offer->cost * 0.15 ?> رسوم الضريبة : (15%) </h5>
             </div>
             <hr />
              <div class="ttl-amts">
                  <h4> <strong><?php 
                                    echo $contract->offer->cost + $contract->offer->cost * 0.15 ?> ريال سعودي</strong> </h4>
             </div>
         </div>
     </div>
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <strong> نقاط مهمة: </strong>
             <ol>
                  <li>
يلتزم فريق عمل كميت الاستشاري بتوفير جميع الادوات اللازمة لتقديم الاستشارة 
يتم تفعيل الاتفاقية بعد السداد

                </li>
 <li>
نشتهر نخن مكتب كميت للخدمات الاستشارية بالمحافظة على سرية المستندات و عدم افشاء اسرار الشركة لاي جهة 
                 </li>


             </ol>
             </div>
         </div>
      <div class="row pad-top-botm">
         <div class="col-lg-12 col-md-12 col-sm-12">
             <hr/>
             <button href="#"  class="btn btn-primary btn-lg" onclick="window.print()
">طباعة الاتفاقية</button>
             &nbsp;&nbsp;&nbsp;
           <!--  <form action="{{ route('paylink.token' , $contract->offer->id) }}" method="post">@csrf    <button type="submit" class="btn btn-success btn-lg">السداد للتفعيل</button></form> -->


 <a href="{{ route('contract.confirmed' , $contract->id) }}"  class="btn btn-success btn-lg">تاكيد الاتفاقية</a>

             </div>
         </div>
 </div>

</body>
</html>
