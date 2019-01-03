<!doctype html>
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
                        <h1>{{ $page_label_text }}</h1>
                        <form action="/categories/add/" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="nameA" class="form-control" id="name">
                            </div>
                            <input type="submit" value="Add" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
