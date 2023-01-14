<x-admin-layout>

    <br>
    <x-admin-contaner>


        <x-card-message />

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

        <form method="POST" action="{{ url('/admin/Corp/'.$NotifyType->id) }}">
            @csrf

            @method('PUT')




            <div class="mb-3">
                <label for="projectName" class="form-label"> اسم مؤسسة </label>
                <input type="text" class="form-control w-50" name="c_name" value="{{ $NotifyType->name }}"
                    placeholder="عنوان التصنيف">
                @error('c_name')
                    <span class="helper">
                        {{ $message }}
                    </span>
                @enderror
            </div>



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
