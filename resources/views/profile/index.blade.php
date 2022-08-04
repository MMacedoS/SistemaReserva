@extends('layout.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row" style="flex-wrap: unset;">
                    <div class="col-md-9">
                        <h4 class="card-title">Usuários</h4>
                    </div>
                    <div class="col-md-2 text-right">
                        <a href="" class="btn btn-sm btn-primary">Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                    <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Foto</th>
                        <th> Nome </th>
                        <th> Email </th>
                        <th> Acesso</th>
                        <th> Criado </th>
                        <th class="text-right"> Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($itens as $item)
                    <tr>
                        <td class="py-1">
                        <img src="{{ url('assets/images/faces-clipart/pic-1.png') }}" alt="image" /> </td>
                        <td> {{ $item->name }} </td>
                        <td>
                            {{ $item->email }}
                        </td>
                        <td> {{ $item->created_at }} </td>
                        <td> May 15, 2015 </td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a href="#" class="btn btn-sm btn-icon-only text-primary" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-arrow-down-drop-circle-outline"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <form action="{{ route('users.destroy', 1)}}" method="post" id="form-">

                                        <a href="" class="dropdown-item">Visualizar</a>
                                        <a href="" class="dropdown-item">Editar</a>
                                        <button class="dropdown-item btn-delete">
                                            Excluir
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="6">sem dados</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
