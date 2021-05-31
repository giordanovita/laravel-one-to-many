@extends('layout.main-layout')

@section('component')

        <main>

            <ol>
                @foreach ($employees as $employee)
                    <li>
                        <h4>
                            {{ $employee -> firstname}}
                            {{ $employee -> lastname}}
                        </h4>
                        <ul>
                            @foreach ($employee -> tasks as $task)
                                <li class="desc">
                                    - {{ $task -> title }}:
                                    <em>{{ $task -> description }}</em>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ol>
        </main>
    
@endsection