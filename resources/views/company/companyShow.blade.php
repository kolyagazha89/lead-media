<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$company->name}}</title>
        <link rel="stylesheet" href="{{ asset('css/companies.css') }}">
    </head>
    <body >
        <div class='main'>
          <div class="header">
            <div class="header_text">{{$company->name}}</div>
            <a href='{{ route("createFormCustomer", $company->id)}}' class="header_btn">
              <div class="header_btn_text">Добавить сотрудника</div>
            </a>
          </div>
          <div class="line"></div>
          <div class="table">
            <div class="table_zag">Имя</div>
            <div class="table_zag">Фамилия</div>
            <div class="table_zag">Email</div>
            <div class="table_zag">Номер телефона</div>
          </div>
          <div class="table_data">
          @forelse ($customers as $customer)
               <div class="row">
                <div class="row_data">{{$customer->name}}</div>
                <div class="row_data">{{$customer->sername}}</div>
                <div class="row_data">{{$customer->email}}</div>
                <div class="row_data">{{$customer->phone}}</div>
                <div class='data_operation'>
                    <a href="{{ route('editFormCustomer',$customer->id)}}" class='icon'>
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                         </svg>
                    </a>
                    <form method="post" action="{{route('deleteCustomer',$customer->id)}}">
                    @csrf
                    <button type='submit'>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                         </svg></button>

                     </form>
                </div>
              </div>
          @empty
          <div>пусто</div>
          @endforelse
          </div>
        </div>
    </body>
</html>
