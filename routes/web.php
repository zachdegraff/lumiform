<?php


use Illuminate\Http\Request;

Route::post('/language',function (Request $request){

   app()->setLocale($request->language);

   return redirect()->back();
})->name('language');


foreach (config("app.locales") as $localeSlug => $locale) {
    Route::name($locale)
        ->prefix($localeSlug)
        ->group(function () use ($locale) {
            Route::view("", 'pages/_index')->name('.index');

            Route::name(".product")
                ->group(function () use ($locale) {
                    Route::view("product", 'pages/product/_index');
                    Route::view(__("create-forms", [], $locale), 'pages/product/form_builder')->name('.formBuilder');
                    Route::view(__("administration", [], $locale), 'pages/product/organization')->name('.organization');
                    Route::view(__("conduct-via-app", [], $locale), 'pages/product/conduct')->name('.conduct');
                    Route::view(__("results-reports-analysis", [], $locale), 'pages/product/analysis')->name('.analysis');
                    Route::view(__("solve-issues", [], $locale), 'pages/product/issues')->name('.issues');
                });

            Route::name(".useCases")
                ->group(function () use ($locale) {
                    Route::view("category-solutions", 'pages/use_cases/_index');
                    Route::view(__("audits", [], $locale), 'pages/use_cases/audits')->name('.audits');
                    Route::view(__("inspections", [], $locale), 'pages/use_cases/inspections')->name('.inspections');
                    Route::view(__("checklists", [], $locale), 'pages/use_cases/digital_checklists')->name('.digitalChecklists');
                    Route::view(__("assessments", [], $locale), 'pages/use_cases/assessment')->name('.assessment');
                    Route::view(__("documentation", [], $locale), 'pages/use_cases/documentation')->name('.documentation');
                    Route::view(__("issue-management", [], $locale), 'pages/use_cases/issue')->name('.issue');
                });

            Route::name(".industries")
                ->group(function () use ($locale) {
                    Route::view("industry-solutions", 'pages/industries/_index');
                    Route::view(__("food", [], $locale), 'pages/industries/food')->name('.food');
                    Route::view(__("construction", [], $locale), 'pages/industries/construction')->name('.construction');
                    Route::view(__("manufacturing", [], $locale), 'pages/industries/manufacturing')->name('.manufacturing');
                    Route::view(__("retail", [], $locale), 'pages/industries/retail')->name('.retail');
                    Route::view(__("transport-logistics", [], $locale), 'pages/industries/logistics')->name('.logistics');
                    Route::view(__("facility-management", [], $locale), 'pages/industries/facility_management')->name('.facilityManagement');
                    Route::view(__("pharmaceuticals-chemicals", [], $locale), 'pages/industries/pharma_chemie')->name('.pharmaChemie');
                });
            Route::name(".templateLibrary")
                ->prefix(__("templates", [], $locale))
                ->group(function () use ($locale) {
                    Route::get("", TemplateLibraryController::class."@featured");
                    Route::get("{templateSlug}_{templateId}", TemplateLibraryController::class."@show")->name('.template');
                    Route::get("{categorySlug}", TemplateLibraryController::class."@index")->where('categorySlug', '.*')->name('.index');
                });

            Route::name(".resources")
                ->group(function () use ($locale) {
                    Route::view("resources", 'pages/resources/_index');
                    Route::view(__("contact", [], $locale), 'pages/resources/contact')->name('.contact');
                    Route::view(__("customer-stories", [], $locale), 'pages/resources/customer_stories')->name('.customerStories');
                    Route::view(__("app-uses", [], $locale), 'pages/resources/app_uses')->name('.appUses');
                    Route::name(".appUses")
                        ->prefix(__("app-uses", [], $locale))
                        ->group(function () use ($locale) {
                            Route::get("", AppUseController::class."@index");
                            Route::get("{appUseSlug}", AppUseController::class."@show")->name('.appUse');
                        });
                    Route::view(__("temperature-sensors", [], $locale), 'pages/resources/sensors')->name('.sensors');
                });

            Route::view(__("pricing", [], $locale), 'pages/pricing')->name('.pricing');


            Route::view(__("about", [], $locale), 'pages/about')->name('.about');
            Route::view(__("terms", [], $locale), 'pages/terms')->name('.terms');
            Route::view(__("privacy", [], $locale), 'pages/privacy')->name('.privacy');
        });
}
