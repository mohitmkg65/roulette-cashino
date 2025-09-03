<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Admin as Admin;

Route::get('/', function () {
    return redirect('/admin');
});

Route::controller(Admin\Login\LoginController::class)->group(function () {
    Route::get('/admin', 'index');
    Route::post('login', 'login')->name('login');
});

Route::controller(Admin\Login\ForgotPasswordController::class)->group(function () {
    Route::get('admin/forget-password', 'index');
    Route::post('admin/forget-password/store-token', 'store_token')->name('admin.forget_password.store_token');
    Route::get('admin/reset-password/create/{token}', 'create');
    Route::post('admin/reset-password/match-token', 'match_token')->name('admin.reset_password.match_token');
    Route::get('admin/reset-password', function(){ return abort(404); });
});

Route::group(['prefix' => 'admin', 'middleware' => ['prevent-back-history', 'is_admin']], function () {

    Route::get('/dashboard', [Admin\Dashboard\DashboardController::class, 'index'])->name('dashboard')->middleware('check.permission:dashboard');

    Route::group(['prefix' => 'master'], function(){
        Route::controller(Admin\Master\ChipController::class)->group(function () {
            Route::get('chip', 'index');
            Route::post('chip/store', 'store')->name('chip_value.store');
            Route::get('chip/data-table','data_table');
            Route::get('chip/edit/{id}','edit');
        });
        
        Route::controller(Admin\Master\ReferralBonusController::class)->group(function () {
            Route::get('referral-bonus', 'index');
            Route::post('referral-bonus/store', 'store')->name('referral_bonus.store');
        });
        
        Route::controller(Admin\Master\GameSettingController::class)->group(function () {
            Route::get('game-setting', 'index');
            Route::post('game-setting/store', 'store')->name('game_setting.store');
        });
    });

    Route::controller(Admin\Settings\GeneralSettings::class)->group(function () {
        Route::get('general-setting', 'index');
        Route::post('general-settings-store', 'store')->name('geraral.settings.store');
    });

    Route::controller(Admin\Settings\VisualSettings::class)->group(function () {
        Route::get('visual-setting', 'index');
        Route::post('visual-settings-store', 'store')->name('visual.settings.store');
    });

    Route::controller(Admin\SystemUsers\RolesPrivilegesController::class)->group(function () {
        Route::get('roles-privileges','index');
        Route::get('roles-privileges/add','create');
        Route::post('roles-privileges/store','store')->name('roles-previllages.store');
        Route::get('roles-privileges/data-table','data_table');
        Route::get('roles-privileges/edit/{id}','edit');
        Route::get('roles-privileges/check-role-exist','check_role_exist');
    });

    Route::controller(Admin\SystemUsers\SystemUserController::class)->group(function () {
        Route::get('system-user','index');
        Route::get('system-user/add','create');
        Route::post('system-user/store','store')->name('system-user.store');
        Route::get('system-user/data-table','data_table');
        Route::get('system-user/edit/{id}','edit');
        Route::get('system-user/check-user-exist','check_user_exist');
    });

    Route::controller(Admin\Login\LoginController::class)->group(function () {
        Route::get('change-password', 'view_change_password');
        Route::post('change-password', 'change_password')->name('change-password');
        Route::get('logout', 'logout')->name('admin.logout');
    });

    Route::controller(BaseController::class)->group(function () {
        Route::post('change-status', 'status');
        Route::get('linkstorage', 'link_storage');
        Route::get('clear', 'clear');
        route::get('/404', 'not_found');
    });
});

Route::fallback(function () {
    return redirect('admin/404');
});
