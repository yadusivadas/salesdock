<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('bootstrap.min.css') }}">

    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="antialiased">
    <div class="container">


        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            {!! Session::get('success') !!}
        </div>
    @endif

        <div class="row" style="padding-top:50px;padding-bottom: 100px">
            <div class="col">
                <h1>Lead</h1>
                <table class="rwd-table" style="padding-top:50px">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>first_name</th>
                            <th>last_name</th>
                            <th>postcode</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($leads as $key => $lead)
                            <tr>
                                <td data-th="Supplier Code">
                                    {{ $key + 1 }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $lead->first_name }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $lead->last_name }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $lead->postcode }}
                                </td>
                                <td data-th="Supplier Code">
                                    <a href="{{ url('/sales?lead_id=' . $lead->id) }}">Action </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="col">
                <h1>relations</h1>
                <table class="rwd-table" style="padding-top:50px">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>first_name</th>
                            <th>last_name</th>
                            <th>postcode</th>
                            <th>city</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($relations as $key => $relation)
                            <tr>
                                <td data-th="Supplier Code">
                                    {{ $key + 1 }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $relation->first_name }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $relation->last_name }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $relation->postcode }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $relation->city }}
                                </td>
                                <td data-th="Supplier Code">
                                    <a href="{{ url('/sales?relation_id=' . $relation->id) }}">Action </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col">
                <h1>sales</h1>
                <table class="rwd-table" style="padding-top:50px">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>first_name</th>
                            <th>last_name</th>
                            <th>postcode</th>
                            <th>city</th>
                            <th>street_name</th>
                        </tr>
                        @foreach ($sales as $key => $sale)
                            <tr>
                                <td data-th="Supplier Code">
                                    {{ $key + 1 }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $sale->first_name }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $sale->last_name }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $sale->postcode }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $sale->city }}
                                </td>
                                <td data-th="Supplier Code">
                                    {{ $sale->street_name }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ url('bootstrap.min.js') }}"></script>
</body>

</html>
