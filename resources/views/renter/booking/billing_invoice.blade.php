<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ __('Billing Invoice - CtgHouseRental.com') }} </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
</head>

<body>


<style>
    * {
        font-family: 'Roboto', sans-serif;
        line-height: 26px;
        font-size: 15px;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    /*=========================================================
      [ Table ]
    =========================================================*/

    .custom--table {
        width: 100%;
        color: inherit;
        vertical-align: top;
        font-weight: 400;
        border-collapse: collapse;
        border-bottom: 2px solid #ddd;
        margin-top: 0;
    }
    .table-title{
        font-size: 24px;
        font-weight: 600;
        line-height: 32px;
        margin-bottom: 10px;
    }
    .custom--table thead {
        font-weight: 700;
        background: inherit;
        color: inherit;
        font-size: 16px;
        font-weight: 500;
    }

    .custom--table tbody {
        border-top: 0;
        overflow: hidden;
        border-radius: 10px;
    }
    .custom--table thead tr {
        border-top: 2px solid #ddd;
        border-bottom: 2px solid #ddd;
        text-align: left;
    }
    .custom--table thead tr th {
        border-top: 2px solid #ddd;
        border-bottom: 2px solid #ddd;
        text-align: left;
        font-size: 16px;
        padding: 10px 0;
    }
    .custom--table tbody tr {
        vertical-align: top;
    }
    .custom--table tbody tr td {
        font-size: 14px;
        line-height: 18px
        vertical-align: top;
    }
    .custom--table tbody tr td:last-child{
        padding-bottom: 10px;
    }
    .custom--table tbody tr td .data-span {
        font-size: 14px;
        font-weight: 500;
        line-height: 18px;
    }
    .custom--table tbody .table_footer_row {
        border-top: 2px solid #ddd;
        margin-bottom: 10px !important;
        padding-bottom: 10px !important;

    }
    /* invoice area */
    .invoice-area {
        padding: 10px 0;
    }

    .invoice-wrapper {
        max-width: 650px;
        margin: 0 auto;
        box-shadow: 0 0 10px #f3f3f3;
        padding: 0px;
    }

    .invoice-header {
        margin-bottom: 40px;
    }

    .invoice-flex-contents {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
    }

    .invoice-logo {}

    .invoice-logo img {}

    .invoice-header-contents {
        float: right;
    }

    .invoice-header-contents .invoice-title {
        font-size: 40px;
        font-weight: 700;
    }

    .invoice-details {
        margin-top: 20px;
    }

    .invoice-details-flex {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
    }

    .invoice-details-title {
        font-size: 24px;
        font-weight: 700;
        line-height: 32px;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .invoice-single-details {}

    .details-list {
        margin: 0;
        padding: 0;
        list-style: none;
        margin-top: 10px;
    }

    .details-list .list {
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        color: #666;
        margin: 0;
        padding: 0;
        transition: all .3s;
    }
    .details-list .list strong {
        font-size: 14px;
        font-weight: 500;
        line-height: 18px;
        color: #666;
        margin: 0;
        padding: 0;
        transition: all .3s;
    }

    .details-list .list a {
        display: inline-block;
        color: #666;
        transition: all .3s;
        text-decoration: none;
        margin: 0;
        line-height: 18px
    }

    .item-description {
        margin-top: 10px;
    }

    .products-item {
        text-align: left;
    }

    .invoice-total-count {}

    .invoice-total-count .list-single {
        display: flex;
        align-items: center;
        gap: 30px;
        font-size: 16px;
        line-height: 28px;
    }

    .invoice-total-count .list-single strong {}

    .invoice-subtotal {
        border-bottom: 2px solid #ddd;
        padding-bottom: 15px;
    }

    .invoice-total {
        padding-top: 10px;
    }

    .terms-condition-content {
        margin-top: 30px;
    }

    .terms-flex-contents {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
    }

    .terms-left-contents {
        flex-basis: 50%;
    }

    .terms-title {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        margin: 0;
    }

    .terms-para {
        margin-top: 10px;
    }

    .invoice-footer {}

    .invoice-flex-footer {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 30px;
    }

    .single-footer-item {
        flex: 1;
    }

    .single-footer {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .single-footer .icon {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 30px;
        width: 30px;
        font-size: 16px;
        background-color: #000e8f;
        color: #fff;
    }

    .icon-details {
        flex: 1;
    }

    .icon-details .list {
        display: block;
        text-decoration: none;
        color: #666;
        transition: all .3s;
        line-height: 24px;
    }
</style>

<!-- Invoice area Starts -->
<div class="invoice-area">
    <div class="invoice-wrapper">
        <div class="invoice-header">
            <div class="invoice-flex-contents">
                <div class="invoice-logo">
                    <img style="height: 150px; width: 150px;" src="{{ public_path('frontend/img/ovilogo.png') }}" alt="">
                </div>
                <div class="invoice-header-contents" style="float:right;margin-top:-120px;">
                    <h2 class="invoice-title">{{ __('INVOICE') }}</h2>
                </div>
            </div>
        </div>
        <div class="invoice-details">
            <div class="invoice-details-flex">
                <div class="invoice-single-details">
                    <h4 class="invoice-details-title">{{ __('Bill To:') }}</h4>
                    @foreach ($users as $user)
                    <ul class="details-list">
                        <li class="list"> {{ $user->name }} </li> 
                        <li class="list"> <a href="#">{{ $user->email }} </a> </li>
                        <li class="list"> <a href="#"> {{ $user->contact }}</a> </li>
                    </ul>
                    @endforeach
                </div>
                <div class="invoice-single-details" style="float:right;margin-top:-120px;">
                    <h4 class="invoice-details-title">{{ __('Landlord Details:') }}</h4>
                    <ul class="details-list">
                        <li class="list"> <strong>{{ $landlord->name }}: </strong></li>
                        <li class="list"> <strong>{{ $landlord->email }}: </strong></li>
                        <li class="list"> <strong>{{ $landlord->contact }}: </strong></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="item-description">
            <h5 class="table-title">{{ __('House Details') }}</h5>
            <table class="custom--table">
            
                <thead>
                <tr>
                    <th>{{ __('House Code') }}</th>
                    <th>{{ __('Address') }}</th>
                    <th>{{ __('Transaction ID') }}</th>
                    <th>{{ __('Price') }}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $house->house_code }}</td>
                    <td>{{ $house->address }}</td>
                    <td>{{ $order->transaction_id }}</td>
                    <td>{{ $order->amount }}</td>
                </tr>
                <!-- <tr class="table_footer_row">
                    <td colspan="3"><strong>{{ __('Package Fee') }}</strong></td>
                    <td><strong>$30</strong></td>
                </tr> -->
                </tbody>
            </table>
        </div>

        <!-- <div class="item-description">
            <div class="table-responsive">
                <h5 class="table-title"> {{ __('Additional Services') }} </h5>
                <table class="custom--table">
                    <thead class="head-bg">
                    <tr>
                        <th>{{ __('Title') }}</th>
                        <th>{{ __('Unit Price') }}</th>
                        <th>{{ __('Quantity') }}</th>
                        <th>{{ __('Total') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ __('Car Cleaning') }}</td>
                        <td>$20</td>
                        <td>2</td>
                        <td>$40</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>{{ __('Extra Service') }}</strong></td>
                        <td><strong>$10</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div> -->

        <!-- <div class="item-description page_break">
            <div class="table-responsive table-responsive--md">
                <h5 class="table-title"> {{ __('Coupon Details') }} </h5>
                <table class="custom--table">
                    <thead class="head-bg">
                    <tr>
                        <th>{{ __('Coupon Code') }}</th>
                        <th>{{ __('Coupon Type') }}</th>
                        <th>{{ __('Coupon Amount') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ __('Webjourney') }}</td>
                        <td>{{ __('Percentage') }}</td>
                        <td>$10</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div> -->

        <div class="item-description">
            <div class="table-responsive">
                <h5 class="table-title">{{ __('Orders Details') }}</h5>
                <table class="custom--table">
                    <thead class="head-bg">
                    <tr>
                        <th>{{ __('House Owner Details') }}</th>
                        <th>{{ __('Date & Schedule') }}</th>
                        <th>{{ __('Amount Details') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <span class="data-span"> {{ $landlord->name }}</span> <br>
                            <span class="data-span"> {{ $landlord->email }}</span><br>
                            <span class="data-span"> {{ $landlord->contact }}<br>
                        </td>
                        <td>
                            {{ $order->created_at }}<br>
                        </td>
                        <td>
                            <span class="data-span"> {{ __('House Rent Fee:') }} </span> {{ $order->amount }} <br>
                            <!-- <span class="data-span"> {{ __('Extra Service:') }} </span>$20 <br>
                            <span class="data-span"> {{ __('Sub Total:') }} </span>$100 <br>
                            <span class="data-span"> {{ __('Tax:') }} </span>$10 <br>
                            <span class="data-span"> {{ __('Coupon Amount:') }} </span>$5 <br> -->
                            <span class="data-span"> {{ __('Total:') }} </span>{{ $order->amount }} <br>
                            <span class="data-span"> {{ __('Payment Status:') }} </span><span style="color:green;">{{ $order->status }}</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <footer>
            <h3 style="text-align: center">
                {{ $data }}
            </h3>
        </footer>

    </div>
</div>

<!-- Invoice area end -->

</body>

</html>