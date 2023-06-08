<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RB001-001 | Re-Bot Dashboard</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-light">
    @include('nav')

    <div class="mt-5">
        &nbsp;
    </div>

    <div class="container py-3 px-4 mt-3">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <div class="h4">{{ $data['exercise']->code }}</div>
                <div>{{ date('d M Y H:i:s', strtotime($data['exercise']->start_time)) }} to {{ $data['exercise']->end_time ? date('d M Y H:i:s', strtotime($data['exercise']->end_time)) : '-' }}</div>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2 mt-3">
                    <a href="{{ route('exercises.index') }}" class="btn btn-dark">
                        <i class="bi bi-chevron-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @if (count($data['latest']) !== 0)
            <div class="row">
                <div class="col-xl-6">
                    <div class="bg-primary p-4 rounded shadow-sm mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="fs-6 text-white">Exercise Duration</div>
                                <div class="fs-4 text-white blink-me">{{ $data['latest']['duration'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-stopwatch fs-1 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bg-white p-4 rounded shadow-sm mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="fs-6 text-secondary">Number of Steps</div>
                                <div class="fs-4">{{ $data['latest']['step_amount'] }} <small>steps</small></div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-arrow-repeat fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bg-white p-4 rounded shadow-sm mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="fs-6 text-secondary"><i class="bi bi-graph-up me-2 fs-4"></i> Ankle Position</div>
                                <div>
                                    <canvas id="pChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="bg-white p-4 rounded shadow-sm mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="fs-6 text-secondary"><i class="bi bi-bar-chart me-2 fs-4"></i> Ankle Angular Velocity</div>
                                <div>
                                    <canvas id="voutChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="bg-white p-4 rounded shadow-sm mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="fs-6 text-secondary">Maximum Dorsiflexion</div>
                                <div class="fs-4">{{ $data['latest']['dorsimax'] }} <small>degrees</small></div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-journal-medical fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="bg-white p-4 rounded shadow-sm mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="fs-6 text-secondary">Maximum Plantarflexion</div>
                                <div class="fs-4">{{ $data['latest']['plantarmax'] }} <small>degrees</small></div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-clipboard2-pulse fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="bg-white p-4 rounded shadow-sm mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="fs-6 text-secondary">Range of Motion</div>
                                <div class="fs-4">{{ $data['latest']['rom'] }} <small>degrees</small></div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-file-earmark-medical fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="bg-white p-4 rounded shadow-sm mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="fs-6 text-secondary">Correct Gait Sequence Percentage</div>
                                <div class="fs-4">{{ $data['latest']['percentage'] }} <small>%</small></div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-card-checklist fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="bg-white p-4 rounded shadow-sm mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="fs-6 text-secondary">Correct Step Duration</div>
                                <div class="fs-4">{{ $data['latest']['step_duration'] }} <small>seconds</small></div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-clock-history fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="bg-white p-4 rounded shadow-sm mb-4">
                        <div class="row">
                            <div class="col">
                                <div class="fs-6 text-secondary">Steps Per Second</div>
                                <div class="fs-4">{{ $data['latest']['step_per_second'] }} <small>steps</small></div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-repeat fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container text-center bg-white rounded shadow-sm">
                <img width="40%" src="{{ Vite::asset('resources/images/no-data.jpg') }}" alt="No Data Image">
            </div>
        @endif

        <div class="mt-5">
            &nbsp;
        </div>
    </div>

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const color = '#0E6EFD';
        const labels = {{ Js::from($data['label']) }}

        const pChart = document.getElementById('pChart');
        const pData = {{ Js::from($data['p_data']) }}
        new Chart(pChart, {
                type: 'line',
                data: {
                    labels: labels,
                datasets: [{
                    label: 'Nilai P',
                    data: pData,
                    borderWidth: 1,
                    backgroundColor: color,
                    borderColor: color,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const voutChart = document.getElementById('voutChart');
        const voutData = {{ Js::from($data['vout_data']) }}
        new Chart(voutChart, {
                type: 'line',
                data: {
                    labels: labels,
                datasets: [{
                    label: 'Nilai VOUT',
                    data: voutData,
                    borderWidth: 1,
                    backgroundColor: color,
                    borderColor: color,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
      </script>
</body>
</html>
