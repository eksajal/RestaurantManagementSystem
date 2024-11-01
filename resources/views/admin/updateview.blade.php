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

            <h1 style="color: blue">Update Food Items:</h1>

            <form action="{{ url('updatefood', $data->id) }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form_element">

                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $data->title }}" required>

                </div>

                <div class="form_element">

                    <label for="price">Price</label>
                    <input type="number" name="price" value="{{ $data->price }}" required>

                </div>


                <div class="form_element">

                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{ $data->description }}" required>

                </div>

                
                <div class="form_element">

                    <label for="image">Old Image</label>
                    <img src="/foodimage/{{ $data->image }}">

                </div>

                
                <div class="form_element">

                    <label for="image">New Image</label>
                    <input type="file" name="image" required>

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
