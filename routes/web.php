<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data_arr = array();
    $data_arr['title'] = "Home Page";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Home page";
    $data_arr['canonical'] = "";
    return view('pages.index', ['data_arr' => $data_arr]);
});
Route::get('/index-demo', function () {
    $data_arr = array();
    $data_arr['title'] = "Home Page";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "Home page";
    $data_arr['canonical'] = "";
    return view('pages.index-demo', ['data_arr' => $data_arr]);
});

Route::get('/about-us', function () {
    $data_arr = array();
    $data_arr['title'] = "About Us";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "About Us";
    $data_arr['canonical'] = "";
    return view('pages.about-us', ['data_arr' => $data_arr]);
});
Route::get('/accounting-and-bookkeping', function () {
     $data_arr = array();
    $data_arr['title'] = "Accounting and Bookkeeping";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.accounting-andbookkeping', ['data_arr' => $data_arr]);
});
Route::get('/audit-reports', function () {
     $data_arr = array();
    $data_arr['title'] = "Audit Reports";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.audit-reports',  ['data_arr' => $data_arr]);
});
Route::get('/contact', function () {
     $data_arr = array();
    $data_arr['title'] = "Contact Us";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.contact', ['data_arr' => $data_arr]);
});
Route::get('/corporate-tax-registration', function () {
     $data_arr = array();
    $data_arr['title'] = "Corporate Tax Registration";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.corporate-tax-registration', ['data_arr' => $data_arr]);
});
Route::get('/coworking-space', function () {
     $data_arr = array();
    $data_arr['title'] = "Coworking Space";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.coworking-space', ['data_arr' => $data_arr]);
});
Route::get('/dependent-visa', function () {
    $data_arr = array();
    $data_arr['title'] = "Dependent Visa";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.dependent-visa',['data_arr' => $data_arr] );
});
Route::get('/employee-visa', function () {
     $data_arr = array();
    $data_arr['title'] = "Employee Visa";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.employee-visa', ['data_arr' => $data_arr]);
});
Route::get('/executive-office-space', function () {
      $data_arr = array();
    $data_arr['title'] = "Executive Office Space";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.executive-office-space',  ['data_arr' => $data_arr]);
});
Route::get('/freelance-visa', function () {
     $data_arr = array();
    $data_arr['title'] = "Freelance Visa";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.freelance-visa', ['data_arr' => $data_arr]);
});
Route::get('/freezone-setup', function () {
     $data_arr = array();
    $data_arr['title'] = "Freezone Setup";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.freezone-setup', ['data_arr' => $data_arr]);
});
Route::get('/golden-visa', function () {
     $data_arr = array();
    $data_arr['title'] = "Golden Visa";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.golden-visa', ['data_arr' => $data_arr]);
});
Route::get('/investment-and-asset-management', function () {
    $data_arr = array();
    $data_arr['title'] = "Investment and Asset Management";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.investment-and-asset-management',['data_arr' => $data_arr]);
});
Route::get('/maid-visa', function () {
    $data_arr = array();
    $data_arr['title'] = "Maid Visa";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.maid-visa', ['data_arr' => $data_arr]);
});
Route::get('/meeting-room', function () {
     $data_arr = array();
    $data_arr['title'] = "Meeting Room";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.meeting-room', ['data_arr' => $data_arr]);
});
Route::get('/virtual-office', function () {
    $data_arr = array();
    $data_arr['title'] = "Virtual Office";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.virtual-office', ['data_arr' => $data_arr]);
});
Route::get('/networking-and-meetup', function () {
     $data_arr = array();
    $data_arr['title'] = "Networking and Meetup";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.networking-and-meetup',['data_arr' => $data_arr]);
});
Route::get('/partner-visa', function () {
     $data_arr = array();
    $data_arr['title'] = "Partner Visa";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.partner-visa', ['data_arr' => $data_arr]);
});
Route::get('/silver-visa', function () {
     $data_arr = array();
    $data_arr['title'] = "Silver Visa";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.silver-visa', ['data_arr' => $data_arr]);
});
Route::get('/premium-office', function () {
     $data_arr = array();
    $data_arr['title'] = "Smart Work Space";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.smart-work-space',['data_arr' => $data_arr]);
});
Route::get('/tax-residency-certificate', function () {
     $data_arr = array();
    $data_arr['title'] = "Tax Residency Certificate";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.tax-residency-certificate', ['data_arr' => $data_arr]);
});
Route::get('/trademark-services', function () {
     $data_arr = array();
    $data_arr['title'] = "Trademark Services";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.trademark-services', ['data_arr' => $data_arr]);
});
Route::get('/vat-registration', function () {
    $data_arr = array();
    $data_arr['title'] = "Vat Registration";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.vat-registration', ['data_arr' => $data_arr]);
});
Route::get('/aml-esr-compliance-registration', function () {
    $data_arr = array();
    $data_arr['title'] = "Aml Esr Compliance Registration";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.aml-esr-compliance-registration', ['data_arr' => $data_arr] );
});
Route::get('/audit-reports', function () {
        $data_arr = array();
    $data_arr['title'] = "Audit Reports";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.audit-reports',  ['data_arr' => $data_arr]);
});
Route::get('/corporate-bank-account-opening', function () {
    $data_arr = array();
    $data_arr['title'] = "Corporate Bank Account Opening";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.corporate-bank-account-opening',  ['data_arr' => $data_arr]);
});
Route::get('/mainland', function () {
    $data_arr = array();
    $data_arr['title'] = "Mainland";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.mainland',  ['data_arr' => $data_arr]);
});
Route::get('/offshore', function () {
    $data_arr = array();
    $data_arr['title'] = "Offshore";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.offshore',  ['data_arr' => $data_arr]);
});
Route::get('/business-startup-services', function () {
    $data_arr = array();
    $data_arr['title'] = "Business Startup Services";
    $data_arr['keywords'] = "";
    $data_arr['description'] = "";
    $data_arr['canonical'] = "";
    return view('pages.business-startup-services',  ['data_arr' => $data_arr]);
});

Route::post('emails/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('emails/contact', [ContactController::class, 'send'])->name('contact.send');

//     $data_arr = array();
//     $data_arr['title'] = "Business Startup Services";
//     $data_arr['keywords'] = "";
//     $data_arr['description'] = "";
//     $data_arr['canonical'] = "";
//     return view('pages.thank-you',  ['data_arr' => $data_arr]);
// });

Route::get('/thank-you', function () {
    return view('pages.thank-you'); // make sure you have a "thankyou.blade.php" view
})->name('thank-you');

