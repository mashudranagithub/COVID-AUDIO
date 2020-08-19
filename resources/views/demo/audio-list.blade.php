<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Recorder.js demo with record, stop and pause - addpipe.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
    </head>
    <body>

        @if ($msg = Session::get('msg'))
        <div class="alert alert-success">
            <p>{{ $msg }}</p>
        </div>
        @endif
        
        <ul style="max-width: 500px;">
            @foreach($audios as $audio)
            <li>
                <audio src="{{ asset('front/audio/'.$audio->audio_file) }}" controls></audio>
            </li>
            @endforeach
        </ul>



        <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
        <script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
        <script src="{{ asset('front/js/app.js') }}"></script>
    </body>
</html>