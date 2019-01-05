<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog App</title>
        <!--us asset method to include bootstrap.css file. This will result in absolute path for the file -->
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
                                <th>Subjects</th>
                                <th>Descriptions</th>
                                <th>Category</th>
                                <th>Created Date</th>
                                <th>Updated Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($plans as $plan)
                            <tr>
                                <td>{{ $plan->id }}</td>
                                <td>{{ $plan->subjects }}</td>
                                <td>{{ $plan->descriptions }}</td>
                                <td>{{ $plan->category_name }}</td>
                                <td>{{ $plan->created_at }}</td>
                                <td>{{ $plan->updated_at }}</td>
                                <td> <a href="/plans/edit/{{ $plan->id }}" class="btn btn-primary">edit</a></td>
                                <td> <a href="/plans/delete/{{ $plan->id }}" class="btn btn-primary">delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>