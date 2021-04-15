@extends('layouts.table')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header border-0">
                    <!-- <h3 class="mb-0">Light table</h3> -->
                    <div class="col text-right">
                        <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">Add CSU</a>

                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-light table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                {{--                            <th scope="col" class="sort" data-sort="budget"></th>--}}
                                <th scope="col">Email</th>
                                <th scope="col" class="sort" data-sort="status">Contact Number</th>
                                <th scope="col" class="sort" data-sort="status">RFID UUID</th>
                                <th scope="col" class="sort" data-sort="completion">Action</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="list">

                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                                            </a>
                                            <div class="media-body">
                                                {{--                                        <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>--}}
                                                <span class="name mb-0 text-sm">{{$user->fname}}</span>

                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        {{$user->email}}
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">{{$user->contact_no}}</span>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="completion mr-2">{{$user->rfid_uuid}}</span>

                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                       <a class="dropdown-item" href="/userDetails/{{$user->id}}">View Details</a>
                                                <a class="dropdown-item" href="#">Update Details</a>
                                                {{--                                            <a class="dropdown-item" href="#">Something else here</a>--}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="m-3 pagination justify-content-end mb-0">
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

