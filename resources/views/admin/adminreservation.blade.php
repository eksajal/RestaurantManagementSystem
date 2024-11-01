<x-app-layout>

</x-app-layout>




<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.admincss')


    <style>
        .table_deg {

            position: relative;
            justify-content: center;
            text-align: center;
            top: 100px;
            left: 230px;

        }

        th {

            border-bottom: 3px solid rgb(101, 9, 9);
            font-weight: bold;
            padding: 15px;

        }

        td {
            border-bottom: 3px solid rgb(101, 9, 9);
            padding: 15px;
        }
    </style>

</head>


<body>

    <div class="container-scroller">

        @include('admin.navbar')


        <div class="table_deg">

            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Guests</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Message</th>
                </tr>


                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->guest }}</td>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->time }}</td>
                        <td>{{ $data->message }}</td>
                    </tr>
                @endforeach

            </table>

        </div>

    </div>>

    @include('admin.adminscript')

</body>

</html>
