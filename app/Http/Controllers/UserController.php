<?php

namespace App\Http\Controllers;

use App\Guest;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list_people(){
        $people = Guest::paginate(6);

        return view('people.index',compact('people'));
    }
    public function employee()
    {
        $users = User::role('staff')->paginate(6);
        return view('user.index-emp', compact('users'));
    }
    public function admin()
    {
        $users = User::role('admin')->paginate(6);
        return view('user.index', compact('users'));
    }
    public function index()
    {
         $users = User::paginate(6);
        return view('user.index', compact('users'));
    }

    public function dataTable()
    {
        return DataTables::of(User::select('id', 'name', 'email', 'created_at'))
        ->editColumn('created_at', function(User $user){
            return $user->created_at->diffForHumans();
        })
        // ->addColumn('delete', '<form action="{{route(\'user.destroy\', $id)}}" method="POST">
        //                     <input type="hidden" name="_method" value="DELETE">
        //                     <input type="submit" name="submit" value="'.('Eliminar').'" class="btn btn-danger btn-sm"
        //                     onClick="return confirm(\'¿Seguro?\')">
        //                     {{csrf_field()}}
        //                     </form>')
        // ->addColumn('show', '<a href="{{route(\'user.show\', $id)}}" class="btn btn-info btn-sm">' .('Ver'). '</a>')
        // ->addColumn('edit', '<a href="{{route(\'user.edit\', $id)}}" class="btn btn-warning btn-sm">' . ('Editar') . '</a>')

        // ->addColumn('show', 'user.dataTable.show')
        // ->addColumn('edit', 'user.dataTable.edit')
        // ->addColumn('delete', 'user.dataTable.delete')
        ->addColumn('btn', 'user.dataTable.btn')
        ->rawColumns(['btn'])
        ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        $user = User::create($input);
        $user->assignRole('staff');
        return redirect()->route('user.employee')->with('success', 'Created Successfully!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->back()->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
