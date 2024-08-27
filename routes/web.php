<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageController;

Route::group(['prefix'=>'vms'],function(){
    Route::get('/',[ManageController::class,'index'])->name('vms.index');
});

// Route::prefix('Vehicles')->group(function(){
//     Route::get('/ManageVehicles', function(){
//         return view('/ManageVehicles');

//     })->name('managepage');
// });
// Route::prefix('Vehicles')->group(function(){
//     Route::get('/manageVehicles', function(){
//         return view('ManageVehicles');
//     })->name('managepage');
// });

Route::prefix('vehicles')->group(function(){
    Route::get('/manageVehicle/index', function(){
        return view('vehicles.manageVehicle.index');
    })->name('indexpage');
    Route::get('/manageVehicle/create', function(){
        return view('vehicles.manageVehicle.create');
    })->name('manageVehicle');

    Route::get('/vehicalRoutes/go/index', function(){
        return view('vehicles.vehicalRoutes.go.index');
    })->name('goindex');

    Route::get('/vehicalRoutes/go/creatego', function(){
        return view('vehicles.vehicalRoutes.go.creatego');
    })->name('gocreate');

    Route::get('/vehicleType/index', function(){
        return view('vehicles.vehicleType.index');
    })->name('typeindex');

    Route::get('/vehicalType/creaettype', function(){
        return view('vehicles.vehicleType.creaettype');
    })->name('typecreate');

    Route::get('/vehiclesTracker/index', function(){
        return view('vehicles.vehiclesTracker.index');
    })->name('trackerindex');
    Route::get('/vehicalType/creaettype', function(){
        return view('vehicles.vehicleType.creaettype');
    })->name('typecreate');

    Route::get('/vehiclesTracker/index', function(){
        return view('vehicles.vehiclesTracker.index');
    })->name('trackerindex');

    Route::get('/fule/creaettype', function(){
        return view('vehicles.fule.addfule');
    })->name('addfule');

    Route::get('/fule/index', function(){
        return view('vehicles.fule.fuleHistory');
    })->name('fuleHistory');
});


Route::prefix('parts')->group(function(){

Route::get('/parts/index', function(){
    return view('parts.index');
})->name('partindex');

Route::get('/parts/create', function(){
    return view('parts.create');
})->name('createpart');


});

Route::prefix('tags')->group(function(){

    Route::get('/tags/etags/index', function(){
        return view('tags.etags.index');
    })->name('tagindex');
    
    Route::get('/tags/etags/add_E_Tags', function(){
        return view('tags.etags.add_E_Tags');
    })->name('createtag');

    Route::get('/tags/m_tags/index', function(){
        return view('tags.m_tags.index');
    })->name('m-index');
    
    Route::get('/tags/m_tags/add_M_Tags', function(){
        return view('tags.m_tags.add_M_Tags');
    })->name('createmtag');
    
    
    Route::get('/tags/token/index', function(){
        return view('tags.token.index');
    })->name('token_index');
    
    Route::get('/tags/token/add_E_Tags', function(){
        return view('tags.token.add_Token_Tags');
    })->name('createtoken');
    
    });


// Route::get('/manageVehicles',function() {
//     return view('/Vehicles/ManageVehicles ');
// } )->name('managepage');