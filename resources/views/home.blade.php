<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog App</title>
        <!--us asset method to include bootstrap.css file. This will result in absolute path for the file -->
        <link href="{{ asset('css/bootstrap.css') }}"  rel="stylesheet" type="text/css">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="plans/add" class="btn btn-primary">Start A Plan</a>
                        <a href="categories/add" class="btn btn-warning">Add Category</a>
                        <a href="plans/" class="btn btn-success">View Plans</a>
                        <a href="categories/" class="btn btn-info">View Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
