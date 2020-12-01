<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\identityIq;

class ClientController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Client"], ['name' => "Client Register"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.identityiq', ['breadcrumbs' => $breadcrumbs], ['pageConfigs' => $pageConfigs]);
    }

    /**
     * Pass personal info to identity IQ.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function injectPersonalInfo(Request $request)
    {
        //
        // $this->validate($request, [
        //     'firstName'       => 'required',
        //     'email'      => 'required|email',
        //     'lastName' => 'required',
        //     'middleName'       => 'required',
        //     'username'      => 'required',
        //     'password' => 'required',
        //     'confirmPassword' => 'required',
        //     'address' => 'required',
        //     'city'       => 'required',
        //     'state'      => 'required',
        //     'zip' => 'required',
        //     'phone'      => 'required',
        // ]);
        $data = array(
            'suffix' => $request->input('suffix'),
            'firstName' => $request->input('firstName'),
            'email' => $request->input('email'),
            'lastName' => $request->input('lastName'),
            'middleName' => $request->input('middleName'),
            'username' => $request->input('username'),
            'userPassword' => $request->input('userPassword'),
            'confirmUserPassword' => $request->input('confirmUserPassword'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'phone' => $request->input('phone'),
        );
        $iq = new identityIq();
        $result = $iq->personalinfobot($data);
        $status = $iq->res;
        $pageTitle = $iq->pageTitle;
        // echo $pageTitle;
        if ($pageTitle == "membership info") :
            return response()->json([
                'status' => '200',
                'data' => "Data Saved",
            ]);
        else :
            return response()->json([
                'status' => '500',
                'data' => $status,
            ]);
        endif;
    }

    /**
     * Pass Billing info to identity IQ.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function injectBillingInfo(Request $request)
    {
        //
        $data = array(
            'creditCardNumber' => $request->input('creditCardNumber'),
            'ccCvv' => $request->input('ccCvv'),
            'ssn' => $request->input('ssn'),
            'confirmSsn' => $request->input('confirmSsn'),
            'dob' => $request->input('dob'),
            'ccExpYear' => $request->input('ccExpYear'),
            'ccExpDate' => $request->input('ccExpDate'),
        );
        $iq = new identityIq();
        $crawler = "";
        $result = $iq->membershipinfobot($crawler, $data);
        $status = $iq->res;
        $pageTitle = $iq->pageTitle;
        if ($pageTitle == "verify identity") :
            return response()->json([
                'status' => '200',
                'data' => "Data Saved",
            ]);
        else :
            return response()->json([
                'status' => '500',
                'data' => $status,
            ]);
        endif;
    }
}
