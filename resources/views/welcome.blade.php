<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
    <!-- MDB -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
            rel="stylesheet"
    />
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class=" title card-title">
                        Tasks List
                    </div>
                    <div class="accordion card-description" id="accordionExample">
                        <div class="accordion-item">
                            @foreach($allTasks as $task)
                                <h2 class="accordion-header" id="headingOne{{$task->_id}}">
                                    <button
                                            class="accordion-button"
                                            type="button"
                                            data-mdb-toggle="collapse"
                                            data-mdb-target="#collapseOne{{$task->_id}}"
                                            aria-expanded="false"
                                            aria-controls="collapseOne{{$task->_id}}"
                                    >
                                        {{$task->title}} ({{$task->_id}})
                                    </button>
                                </h2>
                                <div id="collapseOne{{$task->_id}}" class="accordion-collapse collapse"
                                     aria-labelledby="headingOne{{$task->_id}}"
                                     data-mdb-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{$task->description}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- MDB -->
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
></script>
</body>
</html>