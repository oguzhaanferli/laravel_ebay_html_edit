<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Top navbar example · Bootstrap v5.1</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta name="theme-color" content="#7952b3">
    <style>

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <style>
        .ck-editor__editable_inline {
            min-height: 7000px !important;
        }

        body {
            min-height: 100vh;
            min-height: -webkit-fill-available;
        }

        html {
            height: -webkit-fill-available;
        }

        main {
            display: flex;
            flex-wrap: nowrap;
            height: 100vh;
            height: -webkit-fill-available;
            max-height: 100vh;
            overflow-x: auto;
            overflow-y: hidden;
        }

        .b-example-divider {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .bi {
            vertical-align: -.125em;
            pointer-events: none;
            fill: currentColor;
        }

        .dropdown-toggle {
            outline: 0;
        }

        .nav-flush .nav-link {
            border-radius: 0;
        }

        .btn-toggle {
            display: inline-flex;
            align-items: center;
            padding: .25rem .5rem;
            font-weight: 600;
            color: rgba(0, 0, 0, .65);
            background-color: transparent;
            border: 0;
        }

        .btn-toggle:hover,
        .btn-toggle:focus {
            color: rgba(0, 0, 0, .85);
            background-color: #d2f4ea;
        }

        .btn-toggle::before {
            width: 1.25em;
            line-height: 0;
            content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
            transition: transform .35s ease;
            transform-origin: .5em 50%;
        }

        .btn-toggle[aria-expanded="true"] {
            color: rgba(0, 0, 0, .85);
        }

        .btn-toggle[aria-expanded="true"]::before {
            transform: rotate(90deg);
        }

        .btn-toggle-nav a {
            display: inline-flex;
            padding: .1875rem .5rem;
            margin-top: .125rem;
            margin-left: 1.25rem;
            text-decoration: none;
        }

        .btn-toggle-nav a:hover,
        .btn-toggle-nav a:focus {
            background-color: #d2f4ea;
        }

        .scrollarea {
            overflow-y: auto;
        }

        .fw-semibold {
            font-weight: 600;
        }

        .lh-tight {
            line-height: 1.25;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
</head>

<body>

<div id="container1">

    <main class="container">
        <div class="col-12">
            <div class="py-5 text-center">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <input type="text" class="form-control" id="passwordTxt" placeholder="Şifre" id="passwordTxt" value=""
                               required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkRememberMe">
                            <label class="custom-control-label" for="checkRememberMe">Beni Hatırla</label>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <button class="w-100 btn btn-primary btn-lg" onclick="passControl();">Kontrol Et</button>
                    </div>
                </div>
                <hr class="mb-4">
            </div>
        </div>
    </main>

</div>

<div style="display: none" id="container2">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Html Düzenleme Projesi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="cursor: pointer;" onclick="GetHtml();">Html
                            Al</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="cursor: pointer;"
                           onclick="document.getElementById('addmodal').style.display = 'block';">Yeni Html Ekle</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
            <a class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                <svg class="bi me-2" width="30" height="24">
                    <use xlink:href="#bootstrap"/>
                </svg>
                <span class="fs-5 fw-semibold">Tema Seçiniz</span>
                @php
                    $templatelist = DB::table('ebayhtmltemplate')->get();
                @endphp
                <script>
                    var htmlTemplateList = {!! $templatelist !!};
                </script>
                <select id='themeListID' class="form-select" onchange="SelectTemplate();">
                    @foreach($templatelist  as $item)
                        <option value="{{$item->id}}">{{$item->label}}</option>
                    @endforeach
                </select>
                <button class="w-100 btn btn-primary btn-lg" onclick="updateHtml();">Güncelle</button>
            </a>

        </div>

    </main>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="" id="editor1">
                </div>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <textarea rows="40" id="htmldata"></textarea>
        </div>
    </div>

    <div id="addmodal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close addmodalclose">&times;</span>
            <p class="lead">Dikkat Kaydetmeden önce htmlde değiecek linkler için ilgili alanlara parantez içindeki
                kodlardan yerleştirilmesi gerekiyor
                (##LOGO##,##HAVE##,##NEWSLETTER##,##ITEMS##,##ABOUT##,##FEEDBACKURL##,##CONTACT##)
            </p>
            <label for="firstName" class="form-label">Tasarım Adı</label>
            <input type="text" class="form-control" id="templatelabel" placeholder="">
            <label for="firstName" class="form-label">Yeni Html</label>
            <textarea rows="20" id="templatedata"></textarea>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" onclick="addHtml();">Kaydet</button>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="/js/ckeditor/ckeditor.js"></script>

<script src="/js/data.js"></script>
</body>

</html>
