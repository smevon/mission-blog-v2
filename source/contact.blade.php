@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <h1>Țrr țrr</h1>

    <p>Cum pot să-ți grăiesc dacă nu-ți știu datele de contacte? </p>


    <head>
    <style>
    input[type=button], input[type=submit], input[type=reset] {
      background-color: #A80874;
      border: none;
      color: white;
      padding: 16px 32px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
    }
    input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover {
      background-color: #289720;
    }
    </style>
    </head>

    <form action="https://formcarry.com/s/{{ $page->services->formcarry }}" method="post">
        <div>
            <label for="sender">Prenumele tău preferat</label><br>
            <input type="text" name="sender" id="sender" required>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">De la ce idee vrei să pornim discuția?</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>

        <input type="text" name="_gotcha" style="display: none;">

        <input type="submit" name="submit" value="Către tine">
    </form>
@endsection
