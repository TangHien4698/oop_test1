<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Project 1!</title>
    <style>
        .modal-content
        {
            display: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>LIST STUDENT</h1>
        <div class="col-md-12">
            <table class="table table-striped w-auto">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Point 1</th>
                    <th>Point 2</th>
                    <th>Point 3</th>
                    <th>Average</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $value){ ?>
                    <tr class="table-info">
                        <th scope="row">1</th>
                        <td><?php echo $value->name ?></td>
                        <td><?php echo $value->point_1 ?></td>
                        <td><?php echo $value->point_2 ?></td>
                        <td><?php echo $value->point_3 ?></td>
                        <td><?php echo $value->average ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <button class="test">Add student</button>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ADD STUDENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/add">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name Student</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full name student">
                        <!--                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Point 1</label>
                        <input type="text" class="form-control" name="point_1" id="exampleInputPassword1" placeholder="Point 1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Point 2</label>
                        <input type="text" class="form-control" name="point_2" id="exampleInputPassword1" placeholder="Point 2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Point 3</label>
                        <input type="text" class="form-control" name="point_3" id="exampleInputPassword1" placeholder="Point 3">
                    </div>
                    <button type="submit"  class="btn btn-primary ">Add student</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<script>
    $( ".test" ).click(function() {
        $(".modal-content").css({"display": "block", "z-index": "5","top":"0px","width":"70%","position":"fixed"});
    });
    $( ".close" ).click(function() {
        $(".modal-content").css({"display": "none"});
    });
</script>
</html>