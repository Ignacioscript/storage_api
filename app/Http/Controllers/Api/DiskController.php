<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;


use App\Enums\DiskDriver;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiskRequest;
use App\Http\Requests\UpdateDiskRequest;
use App\Http\Resources\DiskCollection;
use App\Http\Resources\DiskResource;
use App\Models\Disk;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DiskController extends Controller
{

    use ApiResponses;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): DiskCollection
    {
        $query = Disk::query();

        //Filter by active status if requested
        if ($request->filled('active')) {
            $isActive = filter_var($request->active, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE); // transform positive/negative or null string into bool (false or true),
            if ($isActive) {
                $query->active();
            } else {
                $query->inactive();
            }
        }



        if ($request->filled('driver')) {
            $driver = DiskDriver::tryFrom($request->driver);
            if ($driver) {
                $query->driver($driver);
            }
        }

        $query->withCount('files'); // creates a virtual column files_count with a number of files related to the disk

        $perPage = $request->input('per_page', 15); // this set the option of filter based on a given key word, this case per_page and default 15 if you dont use the keyword
        $disks = $query->paginate($perPage); // then pass the number to paginate method.

        return new DiskCollection($disks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiskRequest $request): JsonResponse
    {

            $disk = Disk::create($request->validated());
            return $this->success('Disk created successfully', [
                'disk_id' => $disk->id,
                'disk_name' => $disk->name,
                'disk' =>  new DiskResource($disk)
            ], 201);


    }

    /**
     * Display the specified resource.
     */
    public function show(Disk $disk): DiskResource
    {

       $disk->loadCount('files');
       return new DiskResource($disk);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiskRequest $request, Disk $disk): JsonResponse
    {
        $disk->update($request->validated());
        return $this->success('Update successfully ',[
           'data' => new DiskResource($disk)
       ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disk $disk): JsonResponse
    {
        if ($disk->files()->exists()) {
            return $this->error('Cannot delete disk that contains files', 405);
        }
        $disk->delete();
        return $this->ok('disk was deleted', 201);
    }
}


