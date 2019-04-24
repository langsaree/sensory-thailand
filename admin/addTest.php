<?php 
require "../class/TestTemplateClass.php";

$template = new TestTemplateClass;
$template = $template->getTestTemplate();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Sensory Evaluation</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../vender/fontawesome/css/all.css">
    <link rel="stylesheet" href="../vender/DataTables/datatables.min.css">
    <style>
        @media only screen and (max-width: 720px) {
        .footer-custom {
            text-align: center;
        }
        .footer-custom-br {
            display: block;
        }
    }
    @media only screen and (min-width: 720px) {
        .footer-custom-right {
            float: right!important;
        }
    }
    </style>
</head>

<body class="bg-light">

    <!-- Start NAV bar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./dashboard.html">Dashboard</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
                    <div class="dropdown-menu" aria-labelledby="user">
                        <a class="dropdown-item" href="./addUser.html">Create new User</a>
                        <a class="dropdown-item" href="./manageUser.html">Manage user</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="test" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Test</a>
                    <div class="dropdown-menu" aria-labelledby="test">
                        <a class="dropdown-item active" href="./addTest.html">Create new Test</a>
                        <a class="dropdown-item" href="./manageTest.html">Manage Test</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./organization.html" id="organization" aria-expanded="false">Organization</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="../admin.html">Sign out</a></li>
            </ul>
        </div>
    </nav>
    <!-- End NAV bar -->

    <!-- Start Content -->
    <div class="container mt-3">

        <div class="alert alert-info text-center">
            <strong>Add Test!</strong>
        </div>
        <div class="row" style="margin-bottom:80px">
            <!-- Gold -->
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">Information of Test</div>
                    <div class="card-body row">
                        <div class="form-group col-md-12">
                            <label for="">Select testing method</label>
                            <select class="form-control" name="" id="">
                                <option>9-point hedonic scaling</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Organization</label>
                            <select class="form-control" name="" id="">
                                <option>Organization 1</option>
                                <option>Organization 2</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Set Target</label>
                            <input type="text" name="" id="" class="form-control" placeholder="People">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Test Name</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Set Test Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Test picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Test Inforamtion</label>
                            <textarea name="" id="" class="form-control" cols="30" rows="3" placeholder="Set Test Inforamtion"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pretest -->
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">Pre test</div>
                    <div class="card-body row text-center">
                        <div class="col-md-3 form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                Pretest 1
                            </label>
                        </div>
                        <div class="col-md-3 form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                Pretest 2
                            </label>
                        </div>
                        <div class="col-md-3 form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                Pretest 3
                            </label>
                        </div>
                        <div class="col-md-3 form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                Pretest 4
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Test Template -->
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">เลือกชุดคำถาม</div>
                    <div class="card-body row">
                        <div class="form-group col-md-8">
                            <label for="">ชุดคำถาม</label>
                            <select name="template" id="template" class="form-control">
                                <?php for ($i=0; $i < count($template); $i++) :?>
                                    <option value="<?php echo $template[$i][0] ?>" data-qt="<?php echo $template[$i][2] ?>"><?php echo $template[$i][1] ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">จำนวนคำถาม</label>
                            <input type="text" name="" id="questionQT" class="form-control" placeholder="" disabled>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Test -->
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">คำถาม</div>
                    <div class="card-body row" id="questions">
                        
                    </div>
                </div>
            </div>

            <!-- submit -->
            <div class="col-md-12 mb-3">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-secondary">Discard</button>
                        <button class="btn btn-success float-right">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Start Footer -->
    <footer class="footer py-3 bg-dark text-white fixed-bottom">
        <div class="container footer-custom">
            <span class="text-muted footer-custom-br">Sensory Evaluation system | © 2018</span>
            <span class="text-muted footer-custom-right">Version : Prototype</span>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../vender/DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            questionQT();
            getQuestion();
            $("#template").on("change", function () {
                questionQT();
                getQuestion();
            });

            $('.custom-file-input').on('change', function() { 
                let fileName = $(this).val().split('\\').pop(); 
                $(this).next('.custom-file-label').addClass("selected").text(fileName); 
            });
        });

        function questionQT()
        {
            var questionQT = $("#template").children("option:selected").data("qt");
            $("#questionQT").val(questionQT);
        }

        function getQuestion()
        {
            var templateID = $("#template").children("option:selected").val();
            $.ajax({
                type: "get",
                url: "../class/TestTemplateClass.php",
                data: "templateID="+templateID,
                dataType: "json",
                success: function (response) {
                    $("#questions").empty();
                    writeQuestion(response);
                }
            });
        }

        function writeQuestion(data)
        {
            var questions = "";
            
            for (let index = 0; index < data.length; index++) {
                questions += '<div class="form-group col-md-8">'+
                                '<label for="">คำถามที่ '+(index+1)+'</label>'+
                                '<input type="text" name="questions[]" id="" class="form-control" value="'+data[index][1]+'" disabled>'+
                            '</div>'+
                            '<div class="form-group col-md-4">'+
                                '<label for="">Test picture</label>'+
                                '<div class="custom-file">'+
                                    '<input type="file" name="picture[]" class="custom-file-input">'+
                                    '<label class="custom-file-label" for="customFile">Choose file</label>'+
                                '</div>'+
                            '</div>';
            }
            
            $("#questions").append(questions);
        }
    </script>
</body>

</html> 