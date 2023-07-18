<x-admin-layout>
    <x-slot name="title">Kategori Sayfası</x-slot>
    <div class="container-fluid">
        <div class="row">

            <div class="card col-sm-12 col-md-6 col-lg-5">
                <div class="card-body">
                    <x-tree/>

                </div>
            </div>
            <div class="card col-sm-12 col-md-6 col-lg-7">
                <div class="card-body">
                    <x-create-category-form/>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
