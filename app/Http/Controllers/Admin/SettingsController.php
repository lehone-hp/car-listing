<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use QCod\AppSettings\Setting\AppSettings;

class SettingsController extends Controller {

    use ValidatesRequests;

    public function index() {
        $settingsUI = config('app_settings', []);

        return view('admin.settings', compact('settingsUI'));
    }

    public function store(Request $request, AppSettings $appSettings)
    {
        // validate the settings
        $this->validate($request, $appSettings->getValidationRules());
        // save settings
        $appSettings->save($request);
        return redirect(config('app_settings.url', '/'))
            ->with([
                'status' => config('app_settings.submit_success_message', 'Settings Saved.')
            ]);
    }

}
