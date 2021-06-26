@extends("layouts.plantilla")
@section("tituloenca")
    <h2 style="text-align:center">Lista de Pacientes</h2>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clínica Medica Plasencia</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>

        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }
        .table-responsive {
            margin: 30px 0;
        }
        .table-wrapper {
            width: 850px;
            background: #fff;
            margin: 0 auto;
            padding: 20px 30px 5px;
            box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
        }
        .table-title .btn-group {
            float: right;
        }
        .table-title .btn {
            min-width: 50px;
            border-radius: 2px;
            border: none;
            padding: 6px 12px;
            font-size: 95%;
            outline: none !important;
            height: 30px;
        }
        .table-title {
            min-width: 100%;
            border-bottom: 1px solid #e9e9e9;
            padding-bottom: 15px;
            margin-bottom: 5px;
            background: rgb(0, 50, 74);
            margin: -20px -31px 10px;
            padding: 15px 30px;
            color: #fff;
        }
        .table-title h2 {
            margin: 2px 0 0;
            font-size: 24px;
        }
        table.table {
            min-width: 100%;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }
        table.table tr th:first-child {
            width: 40px;
        }
        table.table tr th:last-child {
            width: 100px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }
        table.table td a {
            color: #2196f3;
        }
        table.table td .btn.manage {
            padding: 2px 10px;
            background: #37BC9B;
            color: #fff;
            border-radius: 2px;
        }
        table.table td .btn.manage:hover {
            background: #2e9c81;
        }
    </style>
    <script>
        $(document).ready(function(){
            $(".btn-group .btn").click(function(){
                var inputValue = $(this).find("input").val();
                if(inputValue != 'all'){
                    var target = $('table tr[data-status="' + inputValue + '"]');
                    $("table tbody tr").not(target).hide();
                    target.fadeIn();
                } else {
                    $("table tbody tr").fadeIn();
                }
            });
            // Changing the class of status label to support Bootstrap 4
            var bs = $.fn.tooltip.Constructor.VERSION;
            var str = bs.split(".");
            if(str[0] == 4){
                $(".label").each(function(){
                    var classStr = $(this).attr("class");
                    var newClassStr = classStr.replace(/label/g, "badge");
                    $(this).removeAttr("class").addClass(newClassStr);
                });
            }
        });
    </script>
@endsection
@section("contenido")

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6"><h2>Antecendentes</h2></div>
                </div>
            </div>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Patología</th>
                    <td></td>
                    <th>Si</th>
                    <th>No</th>
                </tr>
                </thead>
                <tbody>
                <tr data-status="active">
                    <td>APP</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="#" class="btn btn-sm manage">Agregar</a></td>
                </tr>
                <tr data-status="inactive">
                    <td></td>
                    <td>HTA</td>
                    <td><label class="checkbox-inline" id="htasi"><input id="htasi"type="checkbox" value=""></label></td>
                    <td><label class="checkbox-inline" id="htano"><input id="htano" type="checkbox" value=""></label></td>

                </tr>
                <tr data-status="active">
                    <td>3</td>
                    <td><a href="#">convallissed.com</a></td>
                    <td>11/05/2015</td>
                    <td><span class="label label-success">Active</span></td>
                    <td>United Kingdom</td>
                    <td><a href="#" class="btn btn-sm manage">Manage</a></td>
                </tr>
                <tr data-status="expired">
                    <td>4</td>
                    <td><a href="#">phasellusri.org</a></td>
                    <td>06/09/2016</td>
                    <td><span class="label label-danger">Expired</span></td>
                    <td>Romania</td>
                    <td><a href="#" class="btn btn-sm manage">Manage</a></td>
                </tr>
                <tr data-status="inactive">
                    <td>5</td>
                    <td><a href="#">facilisleo.com</a></td>
                    <td>12/08/2017</td>
                    <td><span class="label label-warning">Inactive</span></td>
                    <td>Germany</td>
                    <td><a href="#" class="btn btn-sm manage">Manage</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

