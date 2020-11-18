<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('posts.update', $post->id) }}" method="POST" role="form">
                    @csrf
                    @method('put')
                    <legend>Create new posts</legend>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" value="{{ $post->title }}" name="title" class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Content</label>
                        <input type="text" value="{{ $post->content }}" name="content" class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="input" class="form-control" required="required">
                            <option {{ $post->status == 1 ? 'selected' : '' }} value="1">Public</option>
                            <option {{ $post->status == 2 ? 'selected' : '' }} value="2">Draft</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update post</button>
                </form>
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
