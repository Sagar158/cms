<?php
use App\Http\Controllers\LanguageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Auth::routes();
    // Dashboard Route
Route::get('logout-user', ['as' => 'logout.user', 'uses' => 'Auth\LoginController@logout']);
Route::group(['middleware' => ['auth']], function () {
Route::get('/', 'DashboardController@dashboardEcommerce');

// Application Route
Route::get('/app-email', 'ApplicationController@emailApp');
Route::get('/app-email/content', 'ApplicationController@emailContentApp');
Route::get('/app-chat', 'ApplicationController@chatApp');
Route::get('/app-todo', 'ApplicationController@todoApp');
Route::get('/app-kanban', 'ApplicationController@kanbanApp');
Route::get('/app-file-manager', 'ApplicationController@fileManagerApp');
Route::get('/app-contacts', 'ApplicationController@contactApp');
Route::get('/app-calendar', 'ApplicationController@calendarApp');
Route::get('/app-invoice-list', 'ApplicationController@invoiceList');
Route::get('/app-invoice-view', 'ApplicationController@invoiceView');
Route::get('/app-invoice-edit', 'ApplicationController@invoiceEdit');
Route::get('/app-invoice-add', 'ApplicationController@invoiceAdd');
Route::get('/eCommerce-products-page', 'ApplicationController@ecommerceProduct');
Route::get('/eCommerce-pricing', 'ApplicationController@eCommercePricing');

// User profile Route
Route::get('/user-profile-page', 'UserProfileController@userProfile');

// Page Route
Route::get('/page-contact', 'PageController@contactPage');
Route::get('/page-blog-list', 'PageController@pageBlogList');
Route::get('/page-search', 'PageController@searchPage');
Route::get('/page-knowledge', 'PageController@knowledgePage');
Route::get('/page-knowledge/licensing', 'PageController@knowledgeLicensingPage');
Route::get('/page-knowledge/licensing/detail', 'PageController@knowledgeLicensingPageDetails');
Route::get('/page-timeline', 'PageController@timelinePage');
Route::get('/page-faq', 'PageController@faqPage');
Route::get('/page-faq-detail', 'PageController@faqDetailsPage');
Route::get('/page-account-settings', 'PageController@accountSetting');
Route::get('/page-blank', 'PageController@blankPage');
Route::get('/page-collapse', 'PageController@collapsePage');

// Media Route
Route::get('/media-gallery-page', 'MediaController@mediaGallery');
Route::get('/media-hover-effects', 'MediaController@hoverEffect');

// User Route
Route::get('/users-list', 'UserController@usersList');
Route::get('/users-view', 'UserController@usersView');
Route::get('/users/edit/{id}', 'UserController@usersEdit');
Route::get('/user-add', 'UserController@user_form');
Route::post('/user/add', 'UserController@user_add');

Route::get('/roles-list', 'RolesPermissionController@roles_list');
Route::get('/roles-add', 'RolesPermissionController@role_form');
Route::get('/permissions-add', 'RolesPermissionController@permission_form');
Route::post('/add-role', 'RolesPermissionController@role_add');
Route::post('/add-permissions', 'RolesPermissionController@permission_add');
Route::get('/roles/edit/{id}', 'RolesPermissionController@role_edit');
Route::get('/permissions/edit/{id}', 'RolesPermissionController@permission_edit');
Route::post('/permissions/update/{id}', 'RolesPermissionController@permission_add');
Route::post('/roles/update/{id}', 'RolesPermissionController@role_add');
Route::get('/permissions-list', 'RolesPermissionController@permissions_list');

// Authentication Route
Route::get('/user-login', 'AuthenticationController@userLogin');
Route::get('/user-register', 'AuthenticationController@userRegister');
Route::get('/user-forgot-password', 'AuthenticationController@forgotPassword');
Route::get('/user-lock-screen', 'AuthenticationController@lockScreen');

// Misc Route
Route::get('/page-404', 'MiscController@page404');
Route::get('/page-maintenance', 'MiscController@maintenancePage');
Route::get('/page-500', 'MiscController@page500');

// Card Route
Route::get('/cards-basic', 'CardController@cardBasic');
Route::get('/cards-advance', 'CardController@cardAdvance');
Route::get('/cards-extended', 'CardController@cardsExtended');

// Css Route
Route::get('/css-typography', 'CssController@typographyCss');
Route::get('/css-color', 'CssController@colorCss');
Route::get('/css-grid', 'CssController@gridCss');
Route::get('/css-helpers', 'CssController@helpersCss');
Route::get('/css-media', 'CssController@mediaCss');
Route::get('/css-pulse', 'CssController@pulseCss');
Route::get('/css-sass', 'CssController@sassCss');
Route::get('/css-shadow', 'CssController@shadowCss');
Route::get('/css-animations', 'CssController@animationCss');
Route::get('/css-transitions', 'CssController@transitionCss');

// Basic Ui Route
Route::get('/ui-basic-buttons', 'BasicUiController@basicButtons');
Route::get('/ui-extended-buttons', 'BasicUiController@extendedButtons');
Route::get('/ui-icons', 'BasicUiController@iconsUI');
Route::get('/ui-alerts', 'BasicUiController@alertsUI');
Route::get('/ui-badges', 'BasicUiController@badgesUI');
Route::get('/ui-breadcrumbs', 'BasicUiController@breadcrumbsUI');
Route::get('/ui-chips', 'BasicUiController@chipsUI');
Route::get('/ui-chips', 'BasicUiController@chipsUI');
Route::get('/ui-collections', 'BasicUiController@collectionsUI');
Route::get('/ui-navbar', 'BasicUiController@navbarUI');
Route::get('/ui-pagination', 'BasicUiController@paginationUI');
Route::get('/ui-preloader', 'BasicUiController@preloaderUI');

// Advance UI Route
Route::get('/advance-ui-carousel', 'AdvanceUiController@carouselUI');
Route::get('/advance-ui-collapsibles', 'AdvanceUiController@collapsibleUI');
Route::get('/advance-ui-toasts', 'AdvanceUiController@toastUI');
Route::get('/advance-ui-tooltip', 'AdvanceUiController@tooltipUI');
Route::get('/advance-ui-dropdown', 'AdvanceUiController@dropdownUI');
Route::get('/advance-ui-feature-discovery', 'AdvanceUiController@discoveryFeature');
Route::get('/advance-ui-media', 'AdvanceUiController@mediaUI');
Route::get('/advance-ui-modals', 'AdvanceUiController@modalUI');
Route::get('/advance-ui-scrollspy', 'AdvanceUiController@scrollspyUI');
Route::get('/advance-ui-tabs', 'AdvanceUiController@tabsUI');
Route::get('/advance-ui-waves', 'AdvanceUiController@wavesUI');
Route::get('/fullscreen-slider-demo', 'AdvanceUiController@fullscreenSlider');

// Extra components Route
Route::get('/extra-components-range-slider', 'ExtraComponentsController@rangeSlider');
Route::get('/extra-components-sweetalert', 'ExtraComponentsController@sweetAlert');
Route::get('/extra-components-nestable', 'ExtraComponentsController@nestAble');
Route::get('/extra-components-treeview', 'ExtraComponentsController@treeView');
Route::get('/extra-components-ratings', 'ExtraComponentsController@ratings');
Route::get('/extra-components-tour', 'ExtraComponentsController@tour');
Route::get('/extra-components-i18n', 'ExtraComponentsController@i18n');
Route::get('/extra-components-highlight', 'ExtraComponentsController@highlight');

// Basic Tables Route
Route::get('/table-basic', 'BasicTableController@tableBasic');

// Data Table Route
Route::get('/table-data-table', 'DataTableController@dataTable');

// Form Route
Route::get('/form-elements', 'FormController@formElement');
Route::get('/form-select2', 'FormController@formSelect2');
Route::get('/form-validation', 'FormController@formValidation');
Route::get('/form-masks', 'FormController@masksForm');
Route::get('/form-editor', 'FormController@formEditor');
Route::get('/form-file-uploads', 'FormController@fileUploads');
Route::get('/form-layouts', 'FormController@formLayouts');
Route::get('/form-wizard', 'FormController@formWizard');

// Charts Route
Route::get('/charts-chartjs', 'ChartController@chartJs');
Route::get('/charts-chartist', 'ChartController@chartist');
Route::get('/charts-sparklines', 'ChartController@sparklines');


// locale route
Route::get('lang/{locale}',[LanguageController::class, 'swap']);

 });


 //mail modules route

 //inbox
 Route::get('message/inbox',   'Messages\InboxController@index');
 Route::delete('/deleteAll',   'Messages\InboxController@deleteALl');
 
 
 //sent mail
 Route::get('message/sentMessage','Messages\SentMessageController@index');
 Route::post('/sendMessage',   'Messages\InboxController@insert');
 Route::delete('/deleteSent',   'Messages\SentMessageController@DeleteSent');

 //trash
 Route::get('message/trash',     'Messages\TrashController@trash');
 Route::delete('/deleteTrash',   'Messages\TrashController@deleteTrash');
 //import star
//star
 Route::get('message/Star','Messages\StarController@index');
 Route::delete('message/Star',   'Message\StarController@deleteStar');
 Route::resource('/updateStar','Message\StarController@UpdateStar');
 //important
Route::get('message/important','Messages\ImportantController@index');
