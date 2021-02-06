<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DotNetTec - Invoice html template bootstrap</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"></head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Invoices History
                <strong>{{  now() }}</strong>
            <!--    <span class="float-right"> <strong>Status:</strong> Pending</span>
-->
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>Komait Company - Accounting Department</strong>
                        </div>
                        <div>King Fahd Road</div>
                        <div>Riyadh - Saudi Arabia</div>
                        <div>Email: accountung@komait.com</div>
                        <div>Phone: +966 565555555</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>{{ CRUDBooster::myName() }}</strong>
                        </div>
                        <div>Saudi Arabia</div>
                        <div>Email: {{ CRUDBooster::myEmail() }}</div>
                        <div>{{ CRUDBooster::myMobile() }}</div>
                    </div>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>PaymentURL</th>
                                <th class="right">amount</th>
                                <th class="center">paid</th>
                                <th class="right">Invoicing Date</th>
                                <th class="right">Payment Date</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($invoices  as $invoice )
                                <tr>
                                <td class="center">{{ $invoice->InvoiceId }}</td>
                                <td class="left strong">{{ $invoice->PaymentURL }}</td>
                                <td class="left">{{ $invoice->amount }}</td>
                                <td class="left">
                                @if($invoice->paid == 1)
                                <button class="btn btn-success" disable>Paid</button>
                                @else 
                            <button class="btn btn-warning" disable>Pending</button>

                                @endif
                                </td>

                                <td class="center">{{ $invoice->created_at }}</td>
                                <td class="right">{{ $invoice->updated_at }}</td>
                            </tr>
                        @endforeach
                        
                    
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Totol Invoiced</strong>
                                    </td>
                                    <td class="right">{{ $invoices->sum('amount') }} SAR</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Total Payment</strong>
                                    </td>
                                    <td class="right">{{ $invoices->where('paid' , 1)->sum('amount') }} SAR</td>
                                </tr>
                            
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>