<x-admin-layout>

    <br>
    <x-admin-contaner>


        <x-card-message />

  





            <div class="mb-3">
             
                <h3>
                    {{ $NotifyType->name }}
                </h3>
            </div>

            

                        <div class="mb-3">
                        <a class='btn btn-success' href="{{url('admin/addCorpRecordview/'.$NotifyType->id)}}">اضافة سجل </a>
</div>


            <table class="table  table-striped table-centered mb-0">
                <thead class="">
                    <tr>

                        <th> اسم الملف</th>
                        <th> الرقم</th>
                        <th> تاريخ الاصدار</th>
                        <th> تاريخ الانتهاء  </th>
                        <th> تنبيه قبل   </th>
                        <th>  التحكم </th>
                    </tr>
                </thead>

                @foreach ($corps as $item)


                <tr>
                    <td   > 
                        
                        {{$item->name}}

                    </td>
                    <td>
                        {{ $item->number }}

                    </td>
                    <td>
                        {{ $item->issueAt }}
                    </td>
                    <td>
                        {{$item->exp}}
                    </td>
                    <td>
                        {{$item->befor}}
                    </td>
                    <td class="table-action">
                        <a href="{{ url('/admin/CorpRecord/' . $item->id ) }}"><i
                                class="mdi mdi-pencil"></i></a>
                                <br>
                        <a onclick="OpenDeleteModel(showModel({{ $item }}))" href="#"><i
                                class="mdi mdi-delete"></i></a>
                    </td>
                </tr>

                    
                @endforeach



            </table>

            <hr>

       




        <div class=" p-1">



        </div>

        <table class="table  table-striped table-centered mb-0">
            <thead class="table-dark">
                <tr>

                    <th>#</th>
                    <th>الاسم</th>


                </tr>
            </thead>


            @foreach ($alltask as $item)
                <tr>
                    <td>{{ $item->id }}</td>

                    <td>
                        <a href="{{ url('/admin/ShowTasksNotify/' . $item->id . '/' . $NotifyType->id) }}">

                            {{ $item->name }}

                        </a>


                    </td>


                </tr>
            @endforeach
        </table>

      

        <x-model-box></x-model-box>
   <script>
            function showModel(e) {

                return `<form method='POST' 
        
        action='{{ url('/admin/TasksNotify/${e.id}') }}' >
        @method('DELETE')
        @csrf
        <div class='formLaple' >
            <label> هل انت متأكد من حذف العنصر</label>
            <h3>${e.name}</h3>
            <button type='submit' class='btn btn-Danger' >حذف</button>
        </div>
        </form>`

            }
        </script>
    </x-admin-contaner>
</x-admin-layout>
