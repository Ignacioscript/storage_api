<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;


use App\Enums\DiskDriver;
use App\Http\Controllers\Controller;
use App\Http\Resources\DiskCollection;
use App\Http\Resources\DiskResource;
use App\Models\Disk;
use Illuminate\Http\Request;

class DiskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $disks = Disk::all();
        return new DiskCollection($disks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Disk $disk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disk $disk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disk $disk)
    {
        //
    }
}
