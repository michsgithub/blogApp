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
                        <h1>{{ $title }}</h1>
                        <form action="/plans/add/" method="POST">
                            {{ csrf_field() }} <!-- needs this because broswer session stops. This generate a security token each time the app is run -->
                            <div class="form-group">
                                <label for="title">Subject</label>
                                <input type="text" name="subjects" class="form-control" id="title">
                            </div>

                            <div class="form-group">
                                <label for="body">Descriptions</label>
                                <textarea name="descriptions" class="form-control" rows="10" cols="50" id="descriptions"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id"  class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" value="Add" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
