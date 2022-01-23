<?php

namespace App\Http\Controllers;

use App\Models\TypeOfRepair;
use Illuminate\Http\Request;

class TypeOfRepairController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->authorizeResource(TypeOfRepair::class, 'typeOfRepair');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $types = TypeOfRepair::all();

        return view('pages.administrator.types_of_repair.index', compact('types'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pages.administrator.types_of_repair.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $type = new TypeOfRepair();
        $type->type_of_repair = $request->typeOfRepair;
        $type->save();

        return redirect('types_of_repair');
    }

    /**
     * @param TypeOfRepair $typeOfRepair
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(TypeOfRepair $typeOfRepair)
    {
        return view('pages.administrator.types_of_repair.edit', compact('typeOfRepair'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $type = TypeOfRepair::all()->where('id', $request->id)->firstOrFail();

        if ($type->type_of_repair != $request->typeOfRepair) $type->type_of_repair = $request->typeOfRepair;
        $type->save();

        return redirect('types_of_repair');
    }
}
