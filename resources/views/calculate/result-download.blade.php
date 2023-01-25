<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title ?? 'Scheduler Acceptance' }}</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href="{{ asset('vendor/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Custom styles for this template-->
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <!-- <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body>
<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="col">
                    <div class="row mb-3">
                        <div class="col-lg-3">
                            <img src="{{ asset('img/al-fath.png') }}" alt="al-fath">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="col text-primary">
                                <h3 class="m-0 font-weight-bold">AL-FATH SCHOOL INDONESIA</h3>
                                <h4>SMA-SMP-SD-TK-KB</h4>
                                <h4>CIRENDEU - BUMI SERPONG DAMAI</h4>
                                <h6>Jl. Raya Cirendeu No.24, Pisangan, Kec. Ciputat Timur, Kota Tangerang Selatan, Banten 15419</h6>
                                <h6>Telp. (021) 7415419</h6>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row mb-3 mt-5">
                            <div class="col-lg-6">
                                <h4>Criteria</h4>
                            </div>
                        </div>
                        <div class="card shadow mb-4 mt-3">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Criteria Comparison Table</h6>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Criteria</th>
                                            @php
                                                for ($x = 0; $x <= count($criterias)-1; $x++) { echo "<th>"
                                                    .$criterias[$x]->name."</th>";
                                                    }
                                            @endphp
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for($x = 0; $x <= count($criterias)-1; $x++) <tr>
                                            <th>{{ $criterias[$x]->name }}</th>
                                            @for ($y=0; $y <= count($criterias)-1; $y++) <td>{{
                                                        round($calculateCriteria['matrik'][$x][$y],5); }}</td>
                                            @endfor
                                        </tr>
                                        @endfor
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Jumlah</th>
                                            @php
                                                for ($x = 0; $x <= count($criterias)-1; $x++) { echo "<th>"
                                                    .round($calculateCriteria['jmlmpb'][$x],5)."</th>";
                                                    }
                                            @endphp
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- below is alternative comparison calculate -->

                        <hr>
                        <div class="row mb-2 mt-5">
                            <div class="col-lg-6">
                                <h4>Alternative</h4>
                            </div>
                        </div>
                        @for($i = 0; $i <= count($calculateAlternatives)-1; $i++) <div
                            class="card shadow mb-4 mt-3">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Alternative Comparison
                                    - {{ $criterias[$calculateAlternatives[$i]['criteriaId']]->name }}</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Alternative</th>
                                            @php
                                                for ($x = 0; $x <= count($alternatives)-1; $x++) { echo "<th>"
                                                    .$alternatives[$x]->name."</th>";
                                                    }
                                            @endphp
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @for($x = 0; $x <= count($alternatives)-1; $x++) <tr>
                                            <th>{{ $alternatives[$x]->name }}</th>
                                            @for ($y=0; $y <= count($alternatives)-1; $y++) <td>{{
                                                        round($calculateAlternatives[$i]['matrik'][$x][$y],5); }}</td>
                                            @endfor
                                        </tr>
                                        @endfor
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Jumlah</th>
                                            @php
                                                for ($x = 0; $x <= count($alternatives)-1; $x++) { echo "<th>"
                                                    .round($calculateAlternatives[$i]['jmlmpb'][$x],5)."</th>";
                                                    }
                                            @endphp
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endfor

                        <!--RESULT CALCULATION-->
                        <hr>
                        <div class="row mb-2 mt-5">
                            <div class="col-lg-6">
                                <h4>Result</h4>
                            </div>
                        </div>

                        <div class="card shadow mb-4 mt-3">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Calculation Result</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Overall Composite Height</th>
                                            <th>Priority Vector (Average)</th>
                                            @php
                                                for($i=0; $i <= count($alternatives)-1; $i++) { echo "<th>"
                                                    .$alternatives[$i]->name."</th>\n";
                                                    }
                                            @endphp
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $x = 0;
                                            for($i=0; $i <= count($criterias)-1; $i++) { echo "<tr>" ; echo "<td>"
                                                .$criterias[$i]->name."</td>";
                                                echo "<td>".$resultCriteriaPv[$i]."</td>";
                                                for ($y=0; $y <= count($alternatives)-1; $y++) { echo "<td>"
                                                    .$resultAlternativePv[$x]."</td>";
                                                    $x++;
                                                    }
                                                    echo "</tr>";
                                                    }
                                        @endphp
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th colspan="2">Total</th>
                                            @php
                                                for($i=0; $i <= count($alternatives)-1; $i++) { echo "<th>"
                                                    .round($valueResult[$i],5) ."</th>";
                                                    }
                                            @endphp
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- RANKING SECTION -->
                        <hr>
                        <div class="row mb-2 mt-5">
                            <div class="col-lg-6">
                                <h4>Ranking</h4>
                            </div>
                        </div>

                        <div class="row-md-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ranking</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                            <thead class="bg-gradient-primary">
                                            <tr class="text-white">
                                                <th class="">Rank</th>
                                                <th class="">Alternative</th>
                                                <th class="">Result</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($rank as $r)
                                                <tr class="{{ $loop->iteration != 1 ? '' : '' }}">
                                                    <th>{{ $loop->iteration }}</th>
                                                    <th>{{$r->alternative->name}}</th>
                                                    <th>
                                                        @if ($loop->iteration == 1)
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    {{$r->value}}
                                                                </div>
                                                                <div class="col-sm-10 text-right">
                                                                    <h5><span class="badge bg-primary">Best!</span></h5>
                                                                </div>
                                                            </div>

                                                        @else
                                                            {{$r->value}}
                                                        @endif
                                                    </th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Bootstrap core JavaScript-->
<!-- <script src="vendor/jquery/jquery.min.js"></script> -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<!-- <script src="js/sb-admin-2.min.js"></script> -->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<!-- <script src="vendor/chart.js/Chart.min.js"></script> -->
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<!-- <script src="vendor/datatables/jquery.dataTables.min.js"></script> -->
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<!-- <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script> -->
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<!-- <script src="js/demo/chart-area-demo.js"></script> -->
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
<!-- <script src="js/demo/chart-pie-demo.js"></script> -->
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
<script src="{{ asset('js/table.js') }}"></script>

<!-- Page level custom scripts -->
<!-- <script src="js/demo/datatables-demo.js"></script> -->
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     function printPdf() {
    //         // newWindow object can only be created by window.open()
    //         // in an event listener.
    //         // If we call it elsewhere, null will be returned
    //         const newWindow = window.open();
    //
    //         // creating a new html node
    //         const html = document.createElement("html");
    //
    //         // We can load the CSS by cloning the document head
    //         // NOTE: since we are going to move node to a foreign
    //         // window object, we need to clone the DOM nodes.
    //         // If we dont clone, the node in this original window
    //         // will disappear, because we have moved it to a new location.
    //         // cloneNode(true) will perform a deep clone
    //         const head = document.head.cloneNode(true);
    //
    //         // creating a new body element for our newWindow
    //         const body = document.createElement("body");
    //
    //         // grab the elements that you want to convert to PDF
    //         const section = document
    //             .getElementById("wrapper")
    //             .cloneNode(true);
    //
    //         // you can append as many child as you like
    //         // this is where we add our elements to the new window.
    //         body.appendChild(section);
    //
    //         html.appendChild(head);
    //         html.appendChild(body);
    //
    //         // write content to the new window's document.
    //         newWindow.document.write(html.innerHTML);
    //
    //         // close document to stop writing
    //         // otherwise new window may hang
    //         newWindow.document.close();
    //
    //         // print content in new window as PDF
    //         newWindow.print();
    //
    //         // close the new window after printing
    //         newWindow.close();
    //     }
    //     printPdf();
    // });
    document.addEventListener("DOMContentLoaded", function() {
        window.print();
    });
</script>

</body>

</html>
