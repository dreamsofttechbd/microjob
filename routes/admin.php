<?php

//admin route group
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'adminDashboard'])
            ->name('dashboard');
        //verify routes for admin
        Route::get('/user/verify/request', [UserController::class, 'upgradeRequestList'])->name('upgrade.request');
        Route::get('/user/verify/approve-list/', [UserController::class, 'upgradeApprovedList'])->name('paid.approve.list');
        Route::get('/user/verify/approve/{id}', [UserController::class, 'approve'])->name('paid.approve');
        




        //continents route
        Route::get('/continent-add', [ContinentController::class, 'index'])->name('continent');
        Route::post('/continent-store', [ContinentController::class, 'store'])->name('continent.store');
        Route::get('/continent-delete/{id}', [ContinentController::class, 'delete'])->name('continent.delete');

        Route::post('/continent-update/', [ContinentController::class, 'update'])->name('continent.update');



        //country route
        Route::get('/country-add', [CountryController::class, 'index'])
            ->name('country');
        Route::post('/country-store', [CountryController::class, 'store'])
            ->name('country.store');
        Route::get('/country-delete/{id}', [CountryController::class, 'delete'])
            ->name('country.delete');

        //category route
        Route::get('/category-add', [CategoryController::class, 'index'])
            ->name('category');
        // Route::get('/category/add', [CategoryController::class, 'indexadd'])
        //     ->name('category');

        Route::post('/category-store', [CategoryController::class, 'store'])
            ->name('category.store');
        Route::get('/category-delete/{id}', [CategoryController::class, 'delete'])
            ->name('category.delete');

        //sub category
        Route::get('/subcategory-add', [SubCategoryController::class, 'index'])
            ->name('subcategory');
        Route::post('/subcategory-store', [SubCategoryController::class, 'store'])
            ->name('subcategory.store');
        Route::get('/subcategory-delete/{id}', [SubCategoryController::class, 'delete'])
            ->name('subcategory.delete');

        //method method route
        Route::get('/payment-method', [PaymentMethodController::class, 'index'])
            ->name('payment.method'); 
        Route::post('/payment-method-store', [PaymentMethodController::class, 'store'])
            ->name('payment-method.store');   
        Route::post('/payment-method/update', [PaymentMethodController::class, 'update'])->name('payment-method.update');
       Route::delete('/payment-method/delete/{id}', [PaymentMethodController::class, 'delete'])->name('payment-method.delete');

       //deposit route for admin
       Route::get('/deposit-pending', [DepositController::class, 'pendingDeposit'])->name('pending-deposit');
       Route::get('/deposit-approved', [DepositController::class, 'approvedDeposit'])->name('approved-deposit'); 
       Route::get('/deposit-rejected', [DepositController::class, 'rejectedDeposit'])->name('rejected-deposit');  
       Route::patch('/deposit/{id}/reject', [DepositController::class, 'rejectDeposit'])->name('deposit-reject');  
       Route::patch('/deposit/{id}/approve', [DepositController::class, 'approveDeposit'])->name('deposit-approve'); 

       //withdraw route for admin
     Route::get('/withdraw', [WithdrawController::class, 'index'])->name('withdraw.index');
     Route::get('/pending-withdraw',  [WithdrawController::class, 'pendignWithdraw'])->name('pending.withdraw');
     
     Route::get('/approved-withdraw',[WithdrawController::class, 'approvedWithdraw'])->name('approved.withdraw');
    
     Route::get('/reject-withdraw',[WithdrawController::class, 'rejectedWithdraw'])->name('reject.withdraw');
    
    
    Route::get('/withdraw/{id}/approve', [WithdrawController::class, 'approve'])->name('withdraw.approve');
    Route::post('/withdraw/{id}/reject', [WithdrawController::class, 'reject']) ->name('withdraw.reject');

    

       //site setting route
       Route::get('/website-setting/', [SettingController::class, 'index'])->name('setting');
       Route::post('/settings-update', [SettingController::class, 'update'])->name('settings.update');

       //user route(for admin)
       Route::get('/users/', [UserController::class, 'index'])->name('users');
       Route::post('/user-status-update/', [UserController::class, 'userActiveInactive'])->name('update-user-status');
      Route::get('/user-delete/{id}', [UserController::class, 'delete'])->name('user-delete');

      Route::get('/user/details/{id}', [UserController::class,'userDetails'])
    ->name('user.details');
      
      //jobs route
      Route::get('/all-jobs', [JobController::class, 'jobs'])->name('all-jobs');

      Route::get('/active-jobs', [JobController::class, 'activeJobs'])->name('active-jobs');
      Route::get('/pending-jobs', [JobController::class, 'pendingJobs'])->name('pending-jobs');
      Route::get('/rejected-jobs', [JobController::class, 'rejectedJobs'])->name('rejected-jobs');
      Route::get('/completed-jobs', [JobController::class, 'completedJobs'])->name('completed-jobs');
      Route::get('/paused-jobs', [JobController::class, 'pausedJobs'])->name('paused-jobs');
      Route::get('/delete-job/{id}', [JobController::class, 'deleteJob'])->name('delete-job');
      Route::get('/approve-job/{id}', [JobController::class, 'approveJob'])->name('approve-job');
      Route::get('/details-job/{id}', [JobController::class, 'detailsJob'])->name('job-datails');
      Route::post('reject-job/{id}',  [JobController::class, 'rejectJob'])->name('reject-job');

     Route::get('pause-job/{id}',    [JobController::class, 'pauseJob'])->name('make-pause-job');
     Route::get('/live-job/{id}',     [JobController::class, 'liveJob'])->name('make-un-pause-job');

    

      // Banner Management
    Route::get('/banners',                [BannerController::class, 'index'])   ->name('banners');
    Route::get('/banners/{id}/approve',   [BannerController::class, 'approve']) ->name('banner.approve');
    Route::get('/banners/{id}/inactive',  [BannerController::class, 'inactive'])->name('banner.inactive');
    Route::post('/banners/reject',        [BannerController::class, 'reject'])  ->name('banner.reject');
    Route::get('/banners/{id}/delete',    [BannerController::class, 'delete'])  ->name('banner.delete');
    Route::get('/banner/package', [BannerController::class, 'addPackage'])->name('banner.package');
    Route::post('/banner/package/store', [BannerController::class, 'packageStore'])->name('banner.package.store');
    // routes/web.php


    //notice route
     Route::get('/notice-create',     [BreakingNoticeController::class, 'index'])->name('notice-create');
     Route::post('/notice-store',     [BreakingNoticeController::class, 'store'])->name('notice-store');
     Route::get('/notice-delete/{id}',     [BreakingNoticeController::class, 'destroy'])->name('notice.delete');
    Route::post('/notice-update/',     [BreakingNoticeController::class, 'update'])->name('notice-update');


    Route::get('/profile', [ProfileController::class, 'Profile'])->name('profile');
    Route::put('/profile/update', [ProfileController::class, 'updateProfile'])
        ->name('profile.update')->middleware('throttle:2,1');
    Route::put('/admin/password/update', [ProfileController::class, 'updatePassword'])
        ->name('password.update')->middleware('throttle:5,1');

    });
 
//admin route group end