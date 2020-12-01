<?php

namespace App\Libs;

use Illuminate\Http\Request;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
// use Illuminate\Http\Request;

class identityIq
{
    private $client;
    public $res;
    public $pageTitle;
    public function __construct()
    {
        $this->client = new Client();
    }
    public function index()
    {
        //
        $p_crawler = $this->personalinfobot($data = array());
        $m_crawler = $this->membershipinfobot($p_crawler, $data = array());
        echo $m_crawler->html();
    }

    /**
     * Bot to fill in personal info details.
     *
     * @param  $data user data array containing user info
     * @return $crawler response
     */
    public function personalinfobot($data)
    {
        //
        $crawler = $this->client->request('GET', 'https://www.identityiq.com/signup-personalinfo.aspx');

        $form = $crawler->selectButton('Submit and Continue')->form();
        $form['FBfbenrollment$txtFirstName'] = $data['firstName']; //'Tes'
        $form['FBfbenrollment$txtMiddleName'] = $data['middleName']; //'Ting';
        $form['FBfbenrollment$txtLastName'] = $data['lastName']; //'ric';
        $form['FBfbenrollment$ddlSuffix'] = $data['suffix']; //'Sr';
        $form['FBfbenrollment$txtEmail'] = $data['email']; //'anyangorene@gmail.com';
        $form['FBfbenrollment$txtUsername'] = $data['username']; //'anyangorene@gmail.com';
        $form['FBfbenrollment$txtPassword'] = $data['userPassword']; //'Testing@123';
        $form['FBfbenrollment$txtConfirmPassword'] = $data['confirmUserPassword']; //'Testing@123';
        $form['FBfbenrollment$txtCurrentAddress'] = $data['address']; //'PO BOX, ADDISON, TX';
        $form['FBfbenrollment$txtCurrentCity'] = $data['city']; //'Addison';
        $form['FBfbenrollment$ddlCurrentState'] = $data['state']; //'AA';
        $form['FBfbenrollment$txtCurrentZip'] = $data['zip']; //'75001';
        $form['FBfbenrollment$txtHomePhone'] = $data['phone']; //'3103569261';
        $crawler = $this->client->submit($form);
        $this->res = $this->client->getResponse();
        $this->pageTitle = trim(strtolower($crawler->filter('title')->html()));
        return $crawler;
    }

    /**
     * Bot to fill in payment details and SSN.
     *
     * @param  $crawler data returned from personalinfobot
     * @param  $data user data array containing payment info and SSN
     * @return \Illuminate\Http\Response
     */
    public function membershipinfobot($crawler, $data)
    {
        //
        $form = $crawler->selectButton('Activate and Continue')->form();
        $form['FBfbenrollment$txtCardNumber'] = '';
        $form['FBfbenrollment$ddlCcExpDate'] = '';
        $form['FBfbenrollment$ddlCcExpYear'] = '';
        $form['FBfbenrollment$txtCVV2'] = '';
        $form['FBfbenrollment$txtSsn'] = '643664684';
        $form['FBfbenrollment$txtConfirmSsn'] = '';
        $form['FBfbenrollment$txtdob'] = '';

        $crawler = $this->client->submit($form);
        return $crawler;
        // $crawler->filter('#InvalidEmailOnEnrollUpdateEmailText')->each(function ($node) {
        //     print $node->text()."\n";
        // });
        // $crawler->filter('.text-danger')->each(function ($node) {
        //     print $node->text()."\n";
        // });
    }

    /**
     * Bot to verify identity.
     *
     * @param  $crawler data returned from personalinfobot
     * @param  $data user data array containing payment info and SSN
     * @return \Illuminate\Http\Response
     */
    public function verifyidentitybot($crawler, $data)
    {
        //
        $form = $crawler->selectButton('Activate and Continue')->form();
        $form['FBfbenrollment$txtCardNumber'] = '';
        $form['FBfbenrollment$ddlCcExpDate'] = '';
        $form['FBfbenrollment$ddlCcExpYear'] = '';
        $form['FBfbenrollment$txtCVV2'] = '';
        $form['FBfbenrollment$txtSsn'] = '643664684';
        $form['FBfbenrollment$txtConfirmSsn'] = '';
        $form['FBfbenrollment$txtdob'] = '';

        $crawler = $this->client->submit($form);
        return $crawler;
    }
}
