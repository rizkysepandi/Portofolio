<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Keuangan</title>
</head>

<body>

<style>
    * {
        margin: 0;
    }

    html {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        font-size: 16px;
    }

    #root {
        padding: 4rem;
        margin: auto;
    }

    #headline-company {
        color: #545454;
        font-size: 1.15rem;
    }

    .page-break {
        page-break-before: always;
    }

</style>

<main id="root">
    @yield('content')
</main>

</body>

</html>
