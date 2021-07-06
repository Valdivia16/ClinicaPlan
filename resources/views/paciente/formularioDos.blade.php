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

            font-family: 'Roboto', sans-serif;
        }
        .table-responsive {
            margin: 30px 0;
        }
        .table-wrapper {
            width: 850px;

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

        .par {
            display: grid;
            grid-gap: 5px;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .pare {
            display: grid;
            grid-gap: 5px;
            grid-template-columns: 1fr 1fr;
        }

        .box{

        }
    </style>

@endsection
@section("contenido")

    <div class="container-xl">
        <div class="table-responsive">
            <form method="post" action="{{route("formularioDos.crear")}}" enctype="multipart/form-data"
                  enctype="multipart/form-data">
                @csrf
            <div class="table-wrapper">

                <div class="table-title">
                    <div class="row">
                        <div  style="color: white"><h2>Antecendentes</h2></div>
                        <br>
                    </div>
                    <br>
                    <div class="accordion" id="app">
                        <div class="accordion-item">

                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    APP
                                </button>
                            </h2>

                            <div id="flush-collapseOne" class="accordion-collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body par">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="htp"  name="htp"  id="htp">
                                        <label class="form-check-label" for="flexCheckDefault">HTP</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="dm" name="dm" id="dm">
                                        <label class="form-check-label" for="flexCheckDefault">DM</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="ab" name="ab" id="ab">
                                        <label class="form-check-label" for="flexCheckDefault">Asma/Bronquial</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="ca" name="ca" id="ca">
                                        <label class="form-check-label" for="flexCheckDefault">Cardiópatia</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="hipe" name="hipe" id="hipe">
                                        <label class="form-check-label" for="flexCheckDefault">Hipertirodea</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="depe" name="depe"  id="depe">
                                        <label class="form-check-label" for="flexCheckDefault">Depresión</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="vih" name="vih" id="vih">
                                        <label class="form-check-label" for="flexCheckDefault">VIH</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="taba" name="taba" id="taba">
                                        <label class="form-check-label" for="flexCheckDefault">Tabaquismo</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="ede" name="ede" id="ede">
                                        <label class="form-check-label" for="flexCheckDefault">Uso de esteroides</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="aco" name="aco" id="aco">
                                        <label class="form-check-label" for="flexCheckDefault">Uso de Aco</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="alco" name="alco" id="alco">
                                        <label class="form-check-label" for="flexCheckDefault">Alcohol</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="drogas" name="drogas"  id="drogas">
                                        <label class="form-check-label" for="flexCheckDefault">Drogas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="tvp" name="tvp" id="tvp">
                                        <label class="form-check-label" for="flexCheckDefault">TVP</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="otroapp" name="otroapp" id="otroapp">
                                        <label class="form-check-label" for="flexCheckDefault">Otro</label>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <label>Observaciones: </label>
                                    <div class="col-12">
                                        <textarea class="form-control col-sm-12" name="descripcionapp" id= "descripcionapp"></textarea>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    APF
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse show" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body par">


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="dia" name="dia" id="dia">
                                        <label class="form-check-label" for="flexCheckDefault">Diabetes</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="epi"  name="epi" id="epi">
                                        <label class="form-check-label" for="flexCheckDefault">Epilepsia</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="aler" name="aler" id="aler">
                                        <label class="form-check-label" for="flexCheckDefault">Alergias</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="otroapf" name="otroapf" id="otroapf">
                                        <label class="form-check-label" for="flexCheckDefault">Otro</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label>Observaciones: </label>
                                    <div class="col-12">
                                        <textarea class="form-control col-sm-12" name="descripcionapf" id= "descripcionapf"></textarea>
                                        <br>
                                    </div>
                                </div>

                            </div>


                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Quirúrgicos y Traumáticos
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse show" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">

                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="traumasi" name="traumasi" id="traumasi">
                                        <label class="form-check-label" for="flexCheckDefault">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="traumano" name="traumano" id="traumano">
                                        <label class="form-check-label" for="flexCheckDefault">No</label>
                                    </div>
                                    <div class="col-12">
                                        <label>Observaciones: </label>
                                        <div class="col-12">
                                            <textarea class="form-control col-sm-12" name="descripcionqui" id= "descripcionqui"></textarea>
                                            <br>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                    Alérgicos
                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse show" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">

                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="alersi" name="alersi" id="alersi">
                                        <label class="form-check-label" for="flexCheckDefault">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="alerno" name="alerno" id="alerno">
                                        <label class="form-check-label" for="flexCheckDefault">No</label>
                                    </div>
                                    <div class="col-12">
                                        <label>Observaciones: </label>
                                        <div class="col-12">
                                            <textarea class="form-control col-sm-12" name="descripcionaler" id= "descripcionaler"></textarea>
                                            <br>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                    HGO
                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse show" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body pare">

                                    <div class="col-12 pare">
                                        <div class="accordion-body" >
                                            <label>Embarazos</label>
                                            <input type="number" name="emba" id="emba">
                                        </div>
                                    </div>

                                    <div class="col-12 pare">
                                        <div class="accordion-body">
                                            <label>Partos</label>
                                            <input type="number" name="partos" id="partos">

                                        </div>
                                    </div>

                                    <div class="col-12 pare">
                                        <div class="accordion-body">
                                            <label>Cesarias</label>
                                            <input type="number" name="cesaria" id="cesaria">
                                        </div>
                                    </div>

                                    <div class="col-12 pare">
                                        <div class="accordion-body">
                                            <label>Abortos</label>
                                            <input type="number" name="aborto" id="aborto">
                                        </div>
                                    </div>


                                    <div class="col-12 pare">
                                        <div class="accordion-body">
                                            <label>Hijos Vivos</label>
                                            <input type="number" name="hijovivo">
                                        </div>
                                    </div>
                                        <div class="col-12 pare">
                                        <div class="accordion-body" >
                                            <label>Método de planificación</label>
                                            <select name="pla"
                                                    class="disponible form-control @error('disponible') is-invalid @enderror" id="disponible">
                                                <option disabled selected value="pla">Seleccione </option>
                                                @foreach($formularioDo as $formularioDos)
                                                    <option value="">{{$formularioDos->pla}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 pare">
                                        <div class="accordion-body">
                                            <label>Emb. Actual</label>
                                            <input type="checkbox" name="embaActual" id="embaActual">
                                        </div>
                                    </div>
                                    <div class="col-12 pare">
                                        <div class="accordion-body">
                                            <label>Lactando</label>
                                            <input  type="checkbox" name="lacta">
                                        </div>
                                    </div>

                                    <div class="col-12 pare">
                                        <div class="accordion-body">
                                            <label>Citología</label>
                                            <input  type="checkbox" name="cito">
                                        </div>
                                    </div>


                                    <div class="col-12 ">
                                        <div class="accordion-body">
                                            <label>Fecha de última mestruación</label>
                                            <input  class="form-control" type="date" name="mestrua">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <label>Observaciones: </label>
                                    <div class="col-12">
                                        <textarea class="form-control col-sm-12" name="descripcionfin" id= "descripcionfin"></textarea>
                                        <br>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <BR>
                    <div class="form-group"  >
                        <button
                            type="submit" class="btn btn-primary " name="login"
                            value="login"
                        >Guardar
                        </button>
                    </div>
                </div>

            </div>
            </form>
        </div>

    </div>

@endsection

