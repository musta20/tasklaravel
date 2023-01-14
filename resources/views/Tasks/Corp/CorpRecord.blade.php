<x-admin-layout>

    <h3>اضافة سجل </h3>

    <hr>
    <x-admin-contaner>
        <x-card-message></x-card-message>

        @if ($errors->any())
            <div class="alert alert-danger">
                <p><strong>حدث خطاء</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/admin/putCorpRecord/' . $corp->id) }}">
            @csrf






            <table class="table  table-striped table-centered mb-0">
                <thead class="">
                    <tr>

                        <th> اسم السجل</th>
                        <th> الرقم</th>
                        <th> تاريخ الاصدار</th>
                        <th> تاريخ الانتهاء </th>
                        <th>تنبيه قبل</th>
                    </tr>
                </thead>

                <tr>
                    <td>
                        <input name="name" value="{{ $corp->name }}" placeholder="اسم السجل  " class="form-control">

                    </td>
                    <td> <input type="text" class="form-control" name="number" value="{{ $corp->number }}"
                            placeholder="الرقم  ">
                        @error('number')
                            <span class="helper">
                                {{ $message }}
                            </span>
                        @enderror
                    </td>


                    <td>
                        <input class="form-control" type="date" name="issueAt" value="{{ $corp->issueAt }}"
                            placeholder="  تاريخ الاصدار" />
                        @error('issueAt')
                            <span class="helper">
                                {{ $message }}
                            </span>
                        @enderror
                    </td>
                    <td>
                        <input class="form-control" type="date" value="{{ $corp->exp }}" name="exp"
                            placeholder="  تاريخ الانتهاء" />
                        @error('exp')
                            <span class="helper">
                                {{ $message }}
                            </span>
                        @enderror
                    </td>


                    <td>
                        <select class="form-select select2 select2-hidden-accessible" name="befor">
                            @for ($i = 1; $i < 25; $i++)
                            @if($corp->befor==$i)
                                <option selected>{{ $i }}</option>

                            @else
                                <option>{{ $i }}</option>

                            @endif
                          
                            @endfor
                        </select>
                    </td>
                </tr>

            </table>

            <hr>

            <div class="mb-3">

                <div class="px-3 pb-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="mdi mdi-send me-1"></i> حفظ</button>

                    <a type="button" href="{{ url('admin/Corp') }}" class="btn btn-light">الغاء</a>
                </div>
            </div>





        </form>

    </x-admin-contaner>
</x-admin-layout>
