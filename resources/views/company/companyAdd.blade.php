<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Компании</title>
        <link rel="stylesheet" href="{{ asset('css/companyAdd.css') }}">
    </head>
    <body >
    <form method="post" action="{{ route('addCompany')}}">
        @csrf
        <div class='header'>Добавить компанию</div>
        <label>
            <input class="data" type='text' placeholder='Название' name='name'>
        </label>
        <label>
            <input class="data" type='text' placeholder='Email' name='email'>
        </label>
        <label>
            <input class="data" type='text' placeholder='Адрес сайта' name='link'>
        </label>
        <label>
            <input class="data" type='file' name='logo'>
        </label>
        <div class='cont_query'>
            <input  class="query" type="submit" value="ОК">
            <a class="query" href='/company'>ОТМЕНА</a>
        </div>
    </form>
    </body>
</html>

