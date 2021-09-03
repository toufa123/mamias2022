<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\DataTables\CountriesDataTable;


class CountryController extends Controller
{
    public function index(CountriesDataTable $dataTable)
    {
        return $dataTable->render('country.index');
    }

    public function getCountry(Request $request)
    {
        if ($request->ajax()) {
            $data = Country::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
