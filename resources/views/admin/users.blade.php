@extends('layouts.admin')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
    
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Tous les utilisateurs</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>    
            <a href="" class="btn btn-app">
                <i class="fa fa-edit"></i> Nouveau
            </a>
            <div class="x_content">
            <!-- @if (session('saved'))
                <div class="alert alert-success">
                {{ session('saved') }}
                </div>
            @elseif (session('deleted'))
                <div class="alert alert-danger">
                {{ session('deleted') }}
                </div>
            @endif -->
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" >
                <thead>
                    <tr class="headings">
                    <th>
                        <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">Nom</th>
                    <th class="column-title">Email</th>
                    <th class="column-title">Créé le</th>
                    <th class="column-title">Edité le</th>
                    <th class="column-title no-link last"><span class="nobr">Actions</span>
                    </th>
                    <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr class="even pointer">
                    <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">{{ $user->name }}</td>
                    <td class=" ">{{ $user->email }}</td>
                    <td class=" ">{{ $user->created_at }}</td>
                    <td class=" ">{{ $user->updated_at }}</td>
                    <td class="last" style="display: flex;flex-direction: row;justify-content: space-between;">
                        <a href="" title="Voir"><i class="fa fa-eye"></i></a>
                        <a href="" title="Modifier"><i class="fa fa-pencil"></i></a>
                        <a href="" title="Supprimer"><i style="color:#CF270A" class="fa fa-times"></i></a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
     
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- /page content -->
@endsection