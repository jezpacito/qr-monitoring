@extends('layouts.table')
@section('content')
 <div class="row">
     <div class="col">
         <div class="card">
             <!-- Card header -->
             <div class="card-header border-0">
                 <h3 class="mb-0">Parker's Logs</h3>
             </div>
             <!-- Light table -->
             <div class="table-responsive">
                 <table class="table align-items-center table-flush">
                     <thead class="thead-light">
                     <tr>
                        <th scope="col" class="sort" data-sort="name">Duty Person</th>
                        <th scope="col" class="sort" data-sort="name">Plate Number</th>
                       <th scope="col" class="sort" data-sort="name">Date Time Entered</th>
                        <th scope="col" class="sort" data-sort="name">Date Time Exit</th>

                         <th scope="col"></th>
                     </tr>
                     </thead>
                     <tbody class="list">
                     <tr>
                         @foreach ($logs as $log)
                         <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">{{ $log->user->fname }} {{ $log->user->lname }}</span>
                            </span>
                         </td>
                         <td class="budget">
                          xy-012212
                         </td>
                       
                         <td class="budget">
                            {{ $log->created_at }}
                        </td>
                      
                        <td class="budget">
                            {{ $log->exit_dateTime }}
                        </td>
                      
                         @endforeach
                       

                         
                         {{--                                three dot action--}}
                         <td class="text-right">
                             <div class="dropdown">
                                 <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <i class="fas fa-ellipsis-v"></i>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                     <a class="dropdown-item" href="#">Action</a>
                                     <a class="dropdown-item" href="#">Another action</a>
                                     <a class="dropdown-item" href="#">Something else here</a>
                                 </div>
                             </div>
                         </td>
                     </tr>
                     </tbody>
                 </table>
             </div>
             <!-- Card footer -->
             <div class="card-footer py-4">
                 <nav aria-label="...">
                     <ul class="pagination justify-content-end mb-0">
                         <li class="page-item disabled">
                             <a class="page-link" href="#" tabindex="-1">
                                 <i class="fas fa-angle-left"></i>
                                 <span class="sr-only">Previous</span>
                             </a>
                         </li>
                         <li class="page-item active">
                             <a class="page-link" href="#">1</a>
                         </li>
                         <li class="page-item">
                             <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                         </li>
                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                         <li class="page-item">
                             <a class="page-link" href="#">
                                 <i class="fas fa-angle-right"></i>
                                 <span class="sr-only">Next</span>
                             </a>
                         </li>
                     </ul>
                 </nav>
             </div>
         </div>
     </div>
 </div>
@endsection

