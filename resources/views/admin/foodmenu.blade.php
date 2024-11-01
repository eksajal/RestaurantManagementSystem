<x-app-layout>

</x-app-layout>




<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.admincss')


    <style>
        .form_deg {

            padding-top: 20px;
            
        }

        .form_element {
            padding: 15px;
        }

        .table_deg {

            padding-top: 20px;
            padding-left: 50px;
            
        }

        th {

            border-bottom: 3px solid rgb(101, 9, 9);
            font-weight: bold;
            padding: 15px;
            text-align: center;

        }

        td {
            border-bottom: 3px solid rgb(101, 9, 9);
            padding: 15px;
            text-align: center;
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


        
        <div class="form_deg">

            <h1 style="color: blue; padding-left: 12px;">Add Food Items:</h1>

            <form action="{{ url('uploadfood') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form_element">

                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Write a title" required>

                </div>

                <div class="form_element">

                    <label for="price">Price</label>
                    <input type="number" name="price" placeholder="Price" required>

                </div>

                <div class="form_element">

                    <label for="image">Image</label>
                    <input type="file" name="image" required>

                </div>

                <div class="form_element">

                    <label for="description">Description</label>
                    <input type="text" name="description" placeholder="Description" required>

                </div>

                <div class="form_element">

                    <input class="btn btn-secondary" type="submit" value="Save">

                </div>

            </form>

        </div>




        <div class="table_deg">

            <h1 style="color: blue;" >Edit Food Items:</h1>

            <table>

                <tr>

                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action1</th>
                    <th>Action2</th>

                </tr>


                @foreach ($data as $data)
                    <tr>

                        <td>{{ $data->title }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td><img src="/foodimage/{{ $data->image }}"></td>
                        <td><a class="btn btn-primary" href="{{ url('updatemenu', $data->id) }}">Edit</a></td>
                        <td><a class="btn btn-danger" href="{{ url('deletemenu', $data->id) }}">Delete</a></td>

                    </tr>
                @endforeach


            </table>

        </div>


    </div>

    @include('admin.adminscript')

</body>

</html>
