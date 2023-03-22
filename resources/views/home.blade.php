<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NNXFFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" >
    <title>Document</title>
    
    @extends('layouts.app')
    @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
    

</head>
<body>
    <form action="/add_data" method="post">
        {{ csrf_field() }}

        <div class ="container">
            <div class="jumbotron" style="margin-top: 5%;">
                <h1>Which Dragon would you like to put here in these fields?</h1>
                <hr>
            <div class="form-group">
                <label>baby Dragon</label>
                <input type="text" class ="form-control" name="babydragon" placeholder="Add your favorite Dragon here" >
            </div>
            <div class="form-group">
                <label>Adult Dragon</label>
                <input type="text" class ="form-control" name="adultdragon" placeholder="Add your favorite adult Dragon here" >
            </div>
            <div class="form-group">
                <label>Old Dragon</label>
                <input type="text" class ="form-control" name="olddragon" placeholder="Add your favorite old Dragon here" >
            </div>
            <div class="form-group">
                <label>Special Dragon</label>
                <input type="text" class ="form-control" name="specialdragon" placeholder="Add your favorite special Dragon here" >
            </div>

            <input type="submit" name ="submit" class="btn btn-success" value="Save/Insert Data">
            </div>
        </div>
    </form>

</body>
</html>

