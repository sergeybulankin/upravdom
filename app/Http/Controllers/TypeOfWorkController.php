<?php

namespace App\Http\Controllers;

use App\Models\TypeOfRepair;
use App\Models\TypeOfWork;
use Illuminate\Http\Request;

class TypeOfWorkController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->authorizeResource(TypeOfWork::class, 'typeOfWork');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $types = TypeOfWork::with('repairs')->get();
        $types = $types->sortBy('type_of_repair_id');

        return view('pages.administrator.types_of_work.index', compact('types'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $types = TypeOfRepair::all();

        return view('pages.administrator.types_of_work.create', compact('types'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $type = new TypeOfWork();
        $type->type_of_repair_id = $request->type_of_repair;
        $type->type_of_work = $request->typeOfWork;
        $type->save();

        return redirect('types_of_work');
    }

    /**
     * @param TypeOfWork $typeOfWork
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(TypeOfWork $typeOfWork)
    {
        $types = TypeOfRepair::all();

        return view('pages.administrator.types_of_work.edit', compact('typeOfWork', 'types'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $type = TypeOfWork::all()->where('id', $request->id)->firstOrFail();

        if ($type->type_of_work != $request->typeOfWork) $type->type_of_work = $request->typeOfWork;
        if ($type->type_of_repair_id != $request->type_of_repair) $type->type_of_repair_id = $request->type_of_repair;

        $type->save();

        return redirect('types_of_work');
    }
}
