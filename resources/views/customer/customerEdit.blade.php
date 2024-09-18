<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Редактирование</title>
        <link rel="stylesheet" href="{{ asset('css/companyAdd.css') }}">
    </head>
    <body >
    <form method="post" action="{{ route('editCustomer',$customer->id)}}">
        @csrf
        <div class='header'>Редактировать сотрудника</div>
                <label>
                    <input class="data" type='text' placeholder='Имя' name='name' value="{{$customer->name}}">
                </label>
                <label>
                    <input class="data" type='text' placeholder='Фамилия' name='sername' value="{{$customer->sername}}">
                </label>
                <input class="data" type='text' hidden name='company_id' value="{{$customer->company_id}}">
                <label>
                    <input class="data" type='text' placeholder='Email' name='email' value="{{$customer->email}}">
                </label>
                <label>
                    <input class="data" type='text' placeholder='Номер телефона' name='phone' value="{{$customer->phone}}">
                </label>
        <div class='cont_query'>
            <input  class="query" type="submit" value="ОК">
            <a class="query" href='/company'>ОТМЕНА</a>
        </div>
    </form>
    </body>
</html>

