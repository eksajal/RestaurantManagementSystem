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
            left: 420px;

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
                    <th>Action</th>
                </tr>


                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>

                        @if ($data->usertype == '0')
                            <td><a class="btn btn-danger" href="{{ url('delete_user', $data->id) }}">Delete</a></td>
                        @else
                            <td><a class="btn btn-danger">Denied</a></td>
                        @endif

                    </tr>
                @endforeach

            </table>

        </div>
    </div>


    @include('admin.adminscript')

</body>

</html>
