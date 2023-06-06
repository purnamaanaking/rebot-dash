<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercises | Re-Bot Dashboard</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-light">
    @include('nav')

    <div class="mt-5">
        &nbsp;
    </div>

    <div class="container py-3 px-4 mt-3">
        <div class="row">
            <div class="col">
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <div><span class="h4">Your Exercise Data</span> <small>RB001</small></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Exercise ID</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=1; $i<=10; $i++)
                                    <tr>
                                        <td class="text-center">{{ $i }}.</td>
                                        <td>RB001-00{{ $i }}</td>
                                        <td>6 June 2023 10:02:00</td>
                                        <td>6 June 2023 10:56:00</td>
                                        <td class="text-center">
                                            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm">
                                                <i class="bi bi-eye me-2"></i>Show
                                            </a>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
