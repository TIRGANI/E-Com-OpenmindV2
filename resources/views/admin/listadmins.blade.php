@extends('layouts.admin')
@section('content')
    <div class="card-body px-0 pt-0 pb-2">
        <a class="btn btn-primary" href="/addadmin" role="button"><i class="fa fa-plus me-sm-1"></i> Ajouter</a>
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($list_admin as $elem)
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{asset('uploads/users/'.$elem->image)}}" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$elem->name}}</h6>

                            </div>
                        </div>
                    </td>
                    <td>

                        <p class="text-xs text-secondary mb-0">{{$elem->email}}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><p class="text-xs font-weight-bold mb-0">@if($elem->role_as==1)Admin @else client @endif</p></span>
                    </td>

                    <td class="align-middle">
                        <a href="{{ route('admin.edit', $elem->id) }}#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
