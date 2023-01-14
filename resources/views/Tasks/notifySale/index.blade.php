<x-admin-layout>
    <h3>  إدارة المشتريات</h3>
    <hr>
    <x-admin-contaner>
        <x-card-message></x-card-message>

        <div class="p-1">
            <a href="{{ url('/admin/SalesType') }}" class="btn btn-success btn-sm ms-3"> اضافة تصنيف</a>

        </div>
        <table class="table  table-striped table-centered mb-0">
            <thead class="table-dark">

                <tr>

                    <th>#</th>
                    <th>العنوان</th>
                    <th>التحكم</th>
                </tr>
            </thead>


            @foreach ($tasks as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('/admin/NotifySales/' . $item->id) }}">

                            <i class="fa-solid fa-list fa-2x"></i>

                            {{ $item->name }}
                        </a>
                    </td>
                    <td class="table-action">
                        <a href="{{ url('/admin/SalesType/' . $item->id  ) }}"><i
                                class="mdi mdi-pencil"></i></a>
                                <br>
                        <a onclick="OpenDeleteModel(showModel({{ $item }}))" href="#"><i
                                class="mdi mdi-delete"></i></a>
                    </td>
                </tr>
            @endforeach
            <script>
                function showModel(e) {
              
                 return `<form method='POST' 
                      
                      action='{{url('/admin/SalesType/${e.id}')}}' >
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
              
              <x-model-box></x-model-box>
   
        </table>
            </x-admin-contaner>
</x-admin-layout>
