<!DOCTYPE html>
<html>
<head>
    <title>  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
    .wrapper{
        margin:0 auto;
        width:75%;
        margin-top:10px;
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <section class="panel panel-primary">
            <div class="panel-heading">
            Download file laravel
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <th>Title</th>
                        <th>Upload Date</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($downloads as $download)
                        <tr>
                            <td>{{$download->file_title}}</td>
                            <td>{{$download->created_at}}</td>
                            <td>
                            <a href="download/{{$download->file_name}}"
                            download="{{$download->file_name}}">
                            <button type="button" class="btn btn-primary">
                            <i class="glyphicon glyphicon-download">download</i> </button>
                            </a>
                            </td>
                        </tr>   
                        @endforeach 
                    </tbody>

                </table>

            </div>
        </section>
    </div>
</body>
</html>