@extends('layouts.table')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">List of Registered People</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Name</th>
                            <th scope="col" class="sort" data-sort="name">Contact No</th>
                            <th scope="col" class="sort" data-sort="name">Email</th>
                            <th class="text-center" >Action</th>

                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($people as $person)
                            <tr>

                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$person->fname}} {{$person->lname}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                   {{$person->contact_no}}
                                </td>
                                <td>
                                  <span class="badge badge-dot mr-4">
                                    <i class="bg-success"></i>
                                    <span class="status">{{$person->email}}</span>
                                  </span>
                                </td>

                                <td class="text-center">
                                    <a href="/guest/show/{{$person->id}}" class="btn btn-default btn-sm">View Details</a>
{{--                                    <div class="dropdown">--}}
{{--                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                            <i class="fas fa-ellipsis-v"></i>--}}
{{--                                        </a>--}}

{{--                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">--}}
{{--                                            <a class="dropdown-item" href="#">View Details</a>--}}
{{--                                            <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                            <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="m-3 pagination justify-content-end mb-0">
                        {{$people->links()}}
                    </div>
                </div>
                <!-- Card footer -->

            </div>
        </div>
    </div>
@endsection

