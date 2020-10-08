<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <title>Laravel</title>
        @livewireStyles
        @livewireScripts
    </head>
    <body>
{{--    <div class="container-fluid" style="background-color: skyblue;padding: 5px">--}}
{{--        <h1 style="text-align: center"> Counter</h1>--}}
{{--        @livewire('counter')--}}
{{--    </div>--}}
    <div class="container" style="padding: 5px">
        <div class="row">
            <div class="col-md-5">
                <h1 style="text-align: center">Questions</h1>
                <livewire:tickets></livewire:tickets>
            </div>
            <div class="col-md-7">
                <h1 style="text-align: center">Comments</h1>
                <livewire:comments></livewire:comments>
{{--                @livewire('comments')--}}
            </div>
        </div>
    </div>
    </body>
</html>
