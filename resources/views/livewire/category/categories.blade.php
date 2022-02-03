{{-- @extends('layouts.theme.app') --}}

{{-- @section('content') --}}
<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="cart-title">
                    <b>{{ $componentName }} | {{ $pagetitle }} </b>
                </h4>
                <ul class="tabs tab-pills">
                    <li>
                        <a href="javascript:void(0);" class="tabmenu bg-dark" data-toggle="modal" data-target="#theModal">Agregar</a>
                    </li>
                </ul>
            </div>
            @include('common.searchbox')
            <div class="widget-content">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style=" background: #3B3F5C ">
                            <tr>
                                <th class="table-th text-white">Descripción</th>
                                <th class="table-th text-white">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td><h6>{{ $category->name }}</h6></td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" wire:click="Edit({{$category->id}})" class="btn btn-dark mtmobile" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="Confirm('{{$category->id}}')" class="btn btn-dark mtmobile" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>

            </div>
        </div>
    </div>
    @include('livewire.category.form')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){

        window.livewire.on('show-modal', msg => {//Abre el modal con la data del registro
            $('#theModal').modal('show');
        });

        window.livewire.on('category-added', msg => {//Abre el modal con la data del registro
            $('#theModal').modal('hide');
        });
        
    });
</script>
{{-- @endsection --}}
