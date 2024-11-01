<x-app-layout>

</x-app-layout>




<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.admincss')

    <style>
        .table_deg {

            padding-top: 20px;

        }

        td {

            border-bottom: 3px solid rgb(101, 9, 9);
            font-weight: bold;
            padding: 25px;
            text-align: center;

        }

        th {

            border-bottom: 3px solid rgb(101, 9, 9);
            font-size: 20px;
            font-weight: bold;
            padding: 25px;
            text-align: center;
            color: lightgreen;
        }



        .table_deg img {

            height: 150px;
            width: 220px;

        }
    </style>

</head>


<body>

    <div class="container-scroller">

        @include('admin.navbar')


        <div class="table_deg">

            <h1 style="color: blue;">Ordered Items:</h1>

            <form action="{{ url('search') }}" method="GET">
                <input type="text" name="search" style="color: black; width: 350px; height: 32px; border: 3px solid green;">
                <input type="submit" value="Search" class="btn btn-success"
                    style="color: black; font-weight: bold; font-size: 18px;">
            </form>

            <table>

                <tr>

                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Foodname</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>

                </tr>


                @foreach ($data as $data)
                    <tr>

                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->foodname }}</td>
                        <td>{{ $data->price }}$</td>
                        <td>{{ $data->quantity }}</td>
                        <td>{{ $data->price * $data->quantity }}$</td>
                        <td>

                            <a class="btn btn-danger" href="{{ url('/deleteorder', $data->id) }}">Delete</a>

                        </td>


                    </tr>
                @endforeach


            </table>

        </div>


    </div>>

    @include('admin.adminscript')

</body>

</html>
