<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserJobController;
use App\Http\Controllers\User\UserDepositController;
use App\Http\Controllers\User\UserDealController;
use App\Http\Controllers\User\UserWithdrawController;
use App\Http\Controllers\User\UserNotificationController;
use App\Http\Controllers\User\UserSubmitJobController;
use App\Http\Controllers\User\FinishJobController;
use App\Http\Controllers\User\BoostJobController;
use App\Http\Controllers\User\UserBannerController;
use App\Http\Controllers\User\HideJobController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\User\TopFreelancerController;
use App\Http\Controllers\User\TopBuyerController;
use App\Http\Controllers\User\AccountUpgradeController;
use App\Http\Controllers\User\VerifiyedController;
use App\Http\Controllers\User\UserReferController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;  
use App\Models\Category;
use App\Models\JobPost;
use App\Models\WebsiteSetting; 

// web pages
Route::get('/', function () {
    $categories = Category::withCount('jobs')->orderBy('id', 'asc')->get();
    $jobCount = JobPost::count();
    $setting = WebsiteSetting::first();
    return view('welcome', compact('categories', 'jobCount', 'setting'));
});

// Sitemap genarate
Route::get('/sitemap.xml', [SitemapController::class, 'index'])
    ->name('sitemap');
// show jpbs
Route::get('/jobs/category/{slug}', [FrontendController::class, 'category'])->name('jobs.category');

Route::get('about_us', [FrontendController::class, 'aboutUs'])->name('about');
Route::get('article', [FrontendController::class, 'article'])->name('article');
Route::get('article-details', [FrontendController::class, 'articledetails'])->name('article.details');
Route::get('privacy_policy', [FrontendController::class, 'policy'])->name('policy');
Route::get('terms_conditions', [FrontendController::class, 'terms'])->name('terms'); 
Route::get('microjob_marketplace', [FrontendController::class, 'marketplace'])->name('marketplace'); 
Route::get('deal_marketplace', [FrontendController::class, 'dealMarketplace'])->name('deal');


// Guest routes (login/register)
Route::middleware('guest.redirect')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);


    // Step 1 - Email form
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showEmailForm'])
        ->name('password.request');

    // Step 2 - Send OTP
    Route::post('/forgot-password/send-otp', [ForgotPasswordController::class, 'sendOtp'])
        ->name('password.otp.send');

    // Step 3 - OTP verify form
    Route::get('/forgot-password/verify-otp', [ForgotPasswordController::class, 'showOtpForm'])
        ->name('password.otp.form');

    // Step 4 - Verify OTP
    Route::post('/forgot-password/verify-otp', [ForgotPasswordController::class, 'verifyOtp'])
        ->name('password.otp.verify');

    // Step 5 - New password form
    Route::get('/forgot-password/reset', [ForgotPasswordController::class, 'showResetForm'])
        ->name('password.reset.form');

    // Step 6 - Save new password
    Route::post('/forgot-password/reset', [ForgotPasswordController::class, 'resetPassword'])
        ->name('password.reset');

});

/*----------------------------------------------------
| account verify
------------------------------------------------------*/ 

Route::get('account/verify', [AccountUpgradeController::class, 'upgrade'])
        ->name('account.verify');
Route::post('account/verify/paid', [AccountUpgradeController::class, 'acpaid'])
        ->name('account.verify.paid');


// Protected routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//user routes group
Route::middleware(['auth', 'user'])->prefix('user')->name('user.')->group(function () {
        
        Route::get('/dashboard', [UserDashboardController::class, 'userDashboard'])
            ->name('dashboard');
       //profile route
        Route::get('/profile', [UserProfileController::class, 'userProfile'])
            ->name('profile');
        Route::post('/profile-update', [UserProfileController::class, 'userProfileUpdate'])
            ->name('profile.update');
        Route::post('/password-update', [UserProfileController::class, 'userPasswordUpdate'])
            ->name('password.update');
        Route::post('/photo-update', [UserProfileController::class, 'userPhotoUpdate'])
            ->name('photo.update');


        //job route
        Route::get('/create-job',  [UserJobController::class, 'create'])->name('create.job');
        Route::post('/create-job', [UserJobController::class, 'store'])->name('create.job.store');
        Route::patch('/jobs/{id}/update-workers', [UserJobController::class, 'update']);

        //Top job route
        Route::patch('/jobs/{id}/make-top', [UserJobController::class, 'makeTopJob']);

         // Job Boost Route
        Route::post('/jobs/{id}/boost', [BoostJobController::class, 'boost'])->name('job.boost');
        
        //job delete route for user
        Route::delete('/delete-job/{id}/{code}', [UserJobController::class, 'delete'])->name('job.delete');
        //job paused route for user
        Route::patch('/pause-job/{id}/{code}', [UserJobController::class, 'jobStopMoneyBack'])->name('job.money-back');


        Route::patch('/mute-job/{id}/{code}', [UserJobController::class, 'jobMute'])->name('job.mute');
        Route::patch('/unmute-job/{id}/{code}', [UserJobController::class, 'jobUnmute'])->name('job.unmute');



        Route::get('/job-details/{code}',  [UserJobController::class, 'details'])->name('job-details');
        Route::get('/my-jobs',  [UserJobController::class, 'myjobs'])->name('my.jobs');
        Route::get('/find-jobs',  [UserJobController::class, 'findjobs'])->name('find.jobs'); 

        //hide job

        Route::post('/jobs/{job}/hide', [HideJobController::class, 'hideJob'])->name('job.hide');
       
        //user submitted jobs
        Route::get('/finished-job',  [FinishJobController::class, 'finishedJobs'])->name('finished.jobs'); 


        //submit job route
        Route::post('/submit-job/{code}/{slug}',  [UserSubmitJobController::class, 'storeSubmitjob'])->name('submit-job')->middleware('user.upgrade'); 


         //submit job proof route
        Route::get('/job-proof/{id}/{code}',  [UserSubmitJobController::class, 'proof'])->name('submit-job-proof');
        Route::patch('/submit-jobs/{id}/approve', [UserSubmitJobController::class, 'submitApprove'])->name('submit-job.approve');
        Route::patch('/submit-jobs/{id}/reject',  [UserSubmitJobController::class, 'submitReject'])->name('submit-job.reject');

      Route::post('/submit-jobs/approve-selected', [UserSubmitJobController::class, 'submitApproveSelected'])->name('submit-job.approve-selected');  


        //banner ads route
        Route::get('/browse-deal',  [UserDealController::class, 'browsedeal'])->name('browse.deal'); 
        Route::get('/deal-create',  [UserDealController::class, 'dealcreate'])->name('deal.create');
        Route::get('/my-deal-post',  [UserDealController::class, 'mydealpost'])->name('my.deal.post'); 
        Route::get('/deal-order',  [UserDealController::class, 'dealorder'])->name('deal.order');
        Route::post('/store-baner-ads',  [UserBannerController::class, 'store'])->name('store.babber.ads');
        Route::get('/banner/click/{id}', [UserBannerController::class, 'bannerClick'])->name('banner.click');




        //deposit route for user
        Route::get('/deposit',  [UserDepositController::class, 'create'])->name('deposit');
         Route::post('/deposit-store',  [UserDepositController::class, 'store'])->name('deposit-store');
        Route::get('/deposit-history',  [UserDepositController::class, 'depositHistory'])->name('deposit.history');



        Route::get('continents/', [UserJobController::class, 'continents']);
        Route::get('continents/{id}/countries',[UserJobController::class, 'countries']);
        Route::get('job-categories',[UserJobController::class, 'categories']);
        Route::get('job-categories/{id}/subcategories',[UserJobController::class, 'subcategories']);
        

        //withdraw route
        Route::get('/withdraw',  [UserWithdrawController::class, 'index'])->name('withdraw');
        Route::post('/withdraw-create',  [UserWithdrawController::class, 'create'])->name('withdraw.create'); 
        Route::get('/withdraw-history',  [UserWithdrawController::class, 'withdrawHistory'])->name('withdraw.history');

        //notification route
        Route::get('/unseen-notifications',  [UserNotificationController::class, 'unSeenNotification'])->name('unseen-notifications');
        Route::get('/seen-notifications',  [UserNotificationController::class, 'SeenNotification'])->name('seen-notifications');
        Route::post('/notification/read/{id}', [UserNotificationController::class, 'markAsRead'])->name('notification.read');

        //top freelancer
      Route::get('/top-freelancers',  [TopFreelancerController::class, 'index'])->name('top-freelancer');

      //top buyers
      Route::get('/top-buyers',  [TopBuyerController::class, 'index'])->name('top-buyers');
      // refer earn
    Route::middleware('auth')->group(function () {
    Route::get('/refer-earn',  [UserReferController::class, 'addRefer'])->name('refer.earn');

     });
      

  });
//user routes group end
 include('admin.php');