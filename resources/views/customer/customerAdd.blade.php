<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Добавить сотрудника</title>
        <link rel="stylesheet" href="{{ asset('css/companyAdd.css') }}">
    </head>
    <body >
    <form method="post" action="{{ route('addCustomer')}}">
        @csrf
        <div class='header'>Добавить сотрудника</div>
        <label>
            <input class="data" type='text' placeholder='Имя' name='name'>
        </label>
        <label>
            <input class="data" type='text' placeholder='Фамилия' name='sername'>
        </label>
        <input class="data" type='text' hidden name='company_id' value="{{$company->id}}">
        <label>
            <input class="data" type='text' placeholder='email' name='email'>
        </label>
        <label>
            <input class="data" type='text' placeholder='Номер телефона' name='phone'>
        </label>
        <div class='cont_query'>
            <input  class="query" type="submit" value="ОК">
            <a class="query" href='/company'>ОТМЕНА</a>
        </div>
    </form>
    </body>
</html>

