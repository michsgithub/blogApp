<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog App</title>
        <link href="{{ asset('css/bootstrap.css') }}"  rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>{{ $title }}</h1>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td> <button id="editbtn" class="editbtn">edit</button></td>
                                <td> <button id="deletebtn" class="deletebtn">delete</button></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>