<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Bhutta Dawa Khana Token</title>
    {{-- @include('includes.head') --}}
</head>
<body>
    <style type="text/css">
    @page 
    {
        size:  auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
    * {
        font-size: 20px;
        font-family: 'Times New Roman';
    }

    td,
    th,
    tr,
    table {
        border-top: 1px solid black;
        border-collapse: collapse;
    }

    td.description,
    th.description {
        width: 500px;
        max-width: 500px;
    }

    td.quantity,
    th.quantity {
        width: 500px;
        max-width: 500px;
        word-break: break-all;
    }

    td.price,
    th.price {
        width: 40px;
        max-width: 40px;
        word-break: break-all;
    }

    .centered {
        text-align: center;
        align-content: center;
    }

    .ticket {
        width: 500px;
        max-width: 500px;
    }

    img {
        max-width: inherit;
        width: inherit;
    }

    @media print {
        .hidden-print,
        .hidden-print * {
            display: none !important;
        }
    }
</style>
<div class="ticket">
    <p style="font-size: 20px; text-align: center; !important"><u><b> Bhutta Dua Khana</b></u></p>
        <p>New Noora Koot Road Ghakkhar Near <br>Girls College</p>
        <p>Mobile Number 03006474177</p>
    <table>
        <thead>
        </thead>
        <tbody>
            <tr>
                <td class="quantity">Date Time :</td>
                <td class="description">{{ $model->visit_datetime ?? "" }}</td>
            </tr>
            <tr>
                <td class="quantity">Token #</td>
                <td class="description">{{ $model->token_no ?? "" }}</td>
            </tr>
            <tr>
                <td class="quantity">Name:</td>
                <td class="description">{{ $model->title ?? "" }} {{ $model->name ?? "" }}</td>
            </tr>
            <tr>
                <td class="quantity">Phone:</td>
                <td class="description">{{ $model->phone ?? "" }}</td>
            </tr>
            <tr>
                <td class="quantity">Address:</td>
                <td class="description">{{ $model->address ?? "" }}</td>
            </tr>
            <tr>
                <td class="quantity">Injury:</td>
                <td class="description">{{ $model->injury ?? "" }}</td>
            </tr>
            <tr>
                <td class="quantity">Amount</td>
                <td class="description">RS:{{ $model->amount ?? "" }}</td>
            </tr>
            <!-- <tr>
                <td class="quantity"></td>
                <td class="description"></td>
            </tr> -->
        </tbody>
    </table>
    {{-- <p class="centered">System generated slip does not require signature</p> --}}
</div>
@include('includes.scripts')
<script type="text/javascript">
    $(document).ready(function(){
        window.print();
    });
</script>
</body>
</html>
