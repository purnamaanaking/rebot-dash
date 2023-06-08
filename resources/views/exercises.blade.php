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
                    @if (count($exercises) !== 0)
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th style="min-width: 150px;">Exercise Code</th>
                                        <th style="min-width: 200px;">Start Time</th>
                                        <th style="min-width: 200px;">End Time</th>
                                        <th style="min-width: 150px;" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($exercises as $exercise)
                                        <tr>
                                            <td class="text-center">{{ $no }}.</td>
                                            <td>{{ $exercise->code }}</td>
                                            <td>{{ $exercise->start_time ? date('d M Y H:i:s', strtotime($exercise->start_time)) : '-' }}</td>
                                            <td>{{ $exercise->end_time ? date('d M Y H:i:s', strtotime($exercise->end_time)) : '-' }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('exerciseDetails.show', [ 'exerciseId' => $exercise->id ]) }}" class="btn btn-primary btn-sm me-2">
                                                        <i class="bi bi-eye me-2"></i>Show
                                                    </a>
                                                    <form action="{{ route('exercises.destroy', ['exercise' => $exercise->id]) }}" method="POST">
                                                        @csrf @method('delete')
                                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @php $no++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center">
                            <img width="40%" src="{{ Vite::asset('resources/images/no-data.jpg') }}" alt="No Data Image">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
