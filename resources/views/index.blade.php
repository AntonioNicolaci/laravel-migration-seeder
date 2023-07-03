<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        @vite('resources/scss/app.scss')
    </head>
    <body>
        <ul id="ms_board">
            @foreach ($trains as $train)
                <li>
                    <span>{{ $train['train_company'] }}</span>
                    <span>{{ $train['station_start'] }}</span>
                    <span>{{ $train['station_end'] }}</span>
                    <span>{{ $train['time_start_time'] }}</span>
                    <span>{{ $train['time_end_time'] }}</span>
                    <span>{{ $train['code_train'] }}</span>
                    <span>{{ $train['number_carriage'] }}</span>
                    @if ($train['delay'] != 0)
                        <span>{{ $train['delay'] }}</span>
                    @endif
                    @if ( $train['deleted'] == 0)
                        <span>Cancellato</span>
                    @endif
                </li>
            @endforeach
        </ul>
    </body>
</html>
