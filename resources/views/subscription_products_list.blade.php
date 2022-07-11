<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->

    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="antialiased">


    <div class="container">
        <h1>Subscription Products</h1>




        <table class="rwd-table" style="padding-top:50px">
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>upload_speed</th>
                    <th>download_speed</th>
                    <th>technology</th>
                    <th>static_ip</th>
                </tr>

                @foreach ($subscriptionProducts as $key => $subscriptionProduct)
                    <tr>
                        <td data-th="Supplier Code">
                            {{ $key + 1 }}
                        </td>
                        <td data-th="Supplier Name">
                            {{ $subscriptionProduct->name }}
                        </td>
                        <td data-th="Invoice Number">
                            {{ $subscriptionProduct->upload_speed }}
                        </td>
                        <td data-th="Invoice Date">
                            {{ $subscriptionProduct->download_speed }}
                        </td>
                        <td data-th="Due Date">
                            {{ $subscriptionProduct->technology }}
                        </td>
                        <td data-th="Net Amount">
                            {{ $subscriptionProduct->static_ip ? 'Yes' : 'No' }}
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>


        <div style="padding-top: 50px">
            <h3>Rules:</h3><br>
            @foreach ($rules as $rule)
                @if (isset($rule[0]) && isset($rule[1]))
                    {{ $rule[0] . '::' . implode(' ->', $rule[1]) }} <br>
                @endif
            @endforeach
        </div>

    </div>
</body>

</html>
