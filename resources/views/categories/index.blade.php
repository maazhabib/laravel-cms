<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                </div>
            </header>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <ul class="list-group my-5">
                            <li class="list-group-item">
                                <a href="">Posts</a>
                            </li>

                            <li class="list-group-item">
                                <a href="">Category</a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-8 my-5">

                        <main>

                            <div class="d-flex justify-content-end">

                            <a href="{{ route('category.create') }}" class="btn btn-success float-end">Add Categories</a>

                            </div>

                            <div class="card-header my-2">Categories</div>


                        </main>

                    </div>
                </div>
            </div>
        </div>

            <!-- Page Content -->

        </div>
    </body>
</html>
