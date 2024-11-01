<x-app-layout>

</x-app-layout>




<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    @include('admin.admincss')

    <style>
        .form_deg {

            padding-top: 20px;
            padding-left: 450px;
        }

        .form_element {
            padding: 15px;
        }

        .form_deg img {
            height: 150px;
            width: 220px;

        }
    </style>

</head>


<body>

    <div class="container-scroller">

        @include('admin.navbar')


        <div class="form_deg">

            <h1 style="color: blue">Update Chef's Details:</h1>

            <form action="{{ url('updatefoodchef', $data->id) }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form_element">

                    <label for="title">Name</label>
                    <input type="text" name="name" value="{{ $data->name }}" required>

                </div>

               
                <div class="form_element">

                    <label for="description">Speciality</label>
                    <input type="text" name="speciality" value="{{ $data->speciality }}" required>

                </div>

                
                <div class="form_element">

                    <label for="image">Old Image</label>
                    <img src="/chefimage/{{ $data->image }}">

                </div>

                
                <div class="form_element">

                    <label for="image">New Image</label>
                    <input type="file" name="image">

                </div>

                <div class="form_element">

                    <input class="btn btn-secondary" type="submit" value="Save">

                </div>

            </form>

        </div>


    </div>

    @include('admin.adminscript')

</body>

</html>
