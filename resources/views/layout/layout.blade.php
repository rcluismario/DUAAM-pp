{{-- Layout principal para las páginas --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>@yield('title') | Dona un árbol al mundo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/hk-grotesk" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href="{{ asset('web_assets/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('web_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web_assets/css/dona_flow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('web_assets/css/dona_home.css') }}" rel="stylesheet" type="text/css">


    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150678802-2"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164311709-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-164311709-1');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Droid Sans:400,700","Poppins:100,100italic,200,200italic,300,300italic,regular,500,600,700,800,900"]  }});
    </script>
    <script type="text/javascript">
        !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
    </script>

    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        .textshadow,
        .text-block-66 {
            text-shadow: 5px 9px 12px rgba(166, 181, 208, 0.9);
        }

        .noshadow,
        .noshadow5,
        .noshadow1,
        .noshadow2,
        .noshadow3,
        .noshadow4 {
            text-shadow: 0px 0px 0px rgba(166, 181, 208, 0.0) !important;
            box-shadow: 0px 0px 0px rgba(166, 181, 208, 0.0) !important;
        }

        .boxshadow {
            box-shadow: 5px 9px 12px rgba(166, 181, 208, 0.9);
        }

        .w-icon-arrow-down:before,
        .w-icon-dropdown-toggle:before {
            content: "\25be";
        }
    </style>
    @yield('custom-css')
</head>

<body>
    {{-- @sectionMissing('main_div_header_class') --}}

    @include('layout.header2')
    {{-- @else @include('layout.header')
    @endif --}}
    <div class="container">
        @if (isset($errors) && $errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                @foreach (Session::get('success') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    @yield('content')
    @include('layout.footer')
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5fa2d96a523946435f539917"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="{{ asset('web_assets/js/dona_home.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
@yield('custom-js')

</html>
