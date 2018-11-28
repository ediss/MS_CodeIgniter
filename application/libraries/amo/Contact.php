<?php

class Contact{
    
    public $subdomain = 'office21';

public function index(){
    $this->prepare();
    $this->auth();
    $this->account_curent();
    $this->fields_info();
    $this->contacts_list();
    $this->contact_add();


}
    function CheckCurlResponse($code)
    {
        $code = (int)$code;
        $errors = array(
            301 => 'Moved permanently',
            400 => 'Bad request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not found',
            500 => 'Internal server error',
            502 => 'Bad gateway',
            503 => 'Service unavailable'
        );
        try {
            # If the response code is not equal to 200 or 204 - returns an error message
            if ($code != 200 && $code != 204)
                throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error', $code);
        } catch (Exception $E) {
            die('Error: ' . $E->getMessage() . PHP_EOL . 'Error code: ' . $E->getCode());
        }
    }

    function prepare(){
        $data = array(
            'name'     	    => isset($_POST['name']) ? $_POST['name'] : '',
            'company'  	    => isset($_POST['company']) ? $_POST['company'] : '',
            'position' 	    => isset($_POST['position']) ? $_POST['position'] : '',
            'phone'    	    => isset($_POST['phone']) ? $_POST['phone'] : '',
            'email'    	    => isset($_POST['email']) ? $_POST['email'] : '',
            'skype'    	    => isset($_POST['skype']) ? $_POST['skype'] : '',
            'web'      	    => isset($_POST['web']) ? $_POST['web'] : '',
            #'countryip'     => isset($_POST['countryip']) ? $countryip : 'no data for country' ,
            
           /* 'hiddenTag' 	=> isset($_POST['hiddenTag']) ? $_POST['hiddenTag'] : '',*/
            'tbname'   		=> isset($_POST['tbname']) ? $_POST['tbname'] : '',
            'message'  		=> isset($_POST['message']) ? $_POST['message'] : '',
            'country'  		=> isset($_POST['country']) ? $_POST['country'] : '',
            'gender'   		=> isset($_POST['gender']) ? $_POST['gender'] : '',
            'birth'    		=> isset($_POST['birth']) ? $_POST['birth'] : '',
            'weight'   		=> isset($_POST['weight']) ? $_POST['weight'] : '',
            'diagnosis'		=> isset($_POST['diagnosis']) ? $_POST['diagnosis'] : '',
            'howlong'  		=> isset($_POST['howlong']) ? $_POST['howlong'] : '',
            'medications'	=> isset($_POST['medications']) ? $_POST['medications'] : '',
            'headinjury' 	=> isset($_POST['headinjury']) ? $_POST['headinjury'] : '',
            'assistance' 	=> isset($_POST['assistance']) ? $_POST['assistance'] : '',
            'allergytxt' 	=> isset($_POST['allergytxt']) ? $_POST['allergytxt'] : '',
            'treatedtxt' 	=> isset($_POST['treatedtxt']) ? $_POST['treatedtxt'] : '',
            'problemstxt' 	=> isset($_POST['problemstxt']) ? $_POST['problemstxt'] : '',
            'hiddenTag' 	=> isset($_POST['hiddenTag']) ? $_POST['hiddenTag'] : '',
            'hiddenTag2' 	=> isset($_POST['hiddenTag2']) ? $_POST['hiddenTag2'] : '',
            'heart'   		=> isset($_POST['heart']) ? $_POST['heart'] : '',
            'lungs'   		=> isset($_POST['lungs']) ? $_POST['lungs'] : '',
            'liver'   		=> isset($_POST['liver']) ? $_POST['liver'] : '',
            'digestive'   	=> isset($_POST['digestive']) ? $_POST['digestive'] : '',
            'muscular'   	=> isset($_POST['muscular']) ? $_POST['muscular'] : '',
        
        );

        
        # If no name or e-mail - notify
        if (empty($data['name']))
            die('Contact name is not filled');
        if (empty($data['email']))
            die('Contact E-mail is not filled');
        
        return $data;
    }

    function auth(){
        # An array of parameters that must be passed by the POST method to the API
        $subdomain = 'office21';
        $user = array(
            'USER_LOGIN' => 'office@swissmedica.info', # Your login (email)
            'USER_HASH'  => 'c964257247d7bff477c38ad42554d2d0bf9fc564' # Hash to access the API (see profile)
        );
        
        $link = 'https://' . $subdomain . '.amocrm.com/private/api/auth.php?type=json';

        /*curl*/
        # Set the necessary options for cURL session
        $curl = curl_init(); # Save the cURL session handle

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($user));
        curl_setopt($curl, CURLOPT_HEADER, FALSE);
        curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        $out = curl_exec($curl); # Initiate a request to the API and stores the response variable
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE); # Obtain the HTTP-server response code
        curl_close($curl); # Close cURL session

        $this->CheckCurlResponse($code);

                
        /**

        * Obtain data in JSON-format, therefore, to obtain the data being read,

         * we have to translate the answer into a format understood by PHP

        */

        $Response = json_decode($out, TRUE);
        $Response = $Response['response'];

        if (isset($Response['auth'])) # Flag of authorization is available in the property "auth"
            return 'Authorization successful';
        return 'Authorization failed';

        //$this->account_curent();

    }

    function account_curent(){
        $subdomain = 'office21';

        $link = 'https://' . $subdomain . '.amocrm.com/private/api/v2/json/accounts/current'; # $subdomain already announced above
        $curl = curl_init(); # Save the cURL session handle
        # Set the necessary options for cURL session
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_HEADER, FALSE);
        curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

        $out = curl_exec($curl); # Initiate a request to the API and stores the response variable
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        
        $this->CheckCurlResponse($code);
        /**
         * Obtain data in JSON-format, therefore, to obtain the data being read,
         * we have to translate the answer into a format understood by PHP
        */
        $Response = json_decode($out, TRUE);
        $account = $Response['response']['account'];

        return $account;
/*echo "<pre>";
        var_dump($account);
        echo "</pre>";*/
    }
    
    function fields_info(){

        /*$tag=$_POST['hiddenTag'];*/
        $account=$this->account_curent();
        
        $need = array_flip(array('POSITION', 'PHONE', 'EMAIL',  'MESSAGE', 'COUNTRY', 'IM','GENDER','BIRTH', 'WEIGHT', 'DIAGNOSIS','DISEASE DURATION','MEDICATIONS','CO-EXISTING DISEASES', 'ASSISTANCE','ALLERGIC','TREATED WITH STEMCELLS','OTHER PROBLEMS', /*'COUNTRY BY IP',*/'HEART', 'LUNGS','LIVER','DIGESTIVE','MUSCULAR',));
        if (isset($account['custom_fields'], $account['custom_fields']['contacts']))
        do {
            foreach ($account['custom_fields']['contacts'] as $field)
                if (is_array($field) && isset($field['id'])) {
                    if (isset($field['code']) && isset($need[$field['code']]))
                        $fields[$field['code']] = (int)$field['id'];
                    #SCOPE - non-standard field, so treat it separately
                    elseif (isset($field['name']) && $field['name'] == 'Scope')
                        $fields['SCOPE'] = $field;
                    
                        if(isset($field['name']) && strtoupper($field['name']) == 'WEB')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                    if(isset($field['name']) && strtoupper($field['name']) == 'SKYPE')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
                    
                        
                    if(isset($field['name']) && strtoupper($field['name']) == 'MYNAME')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                        
                    if(isset($field['name']) && strtoupper($field['name']) == 'GENDER')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
                        
                    if(isset($field['name']) && strtoupper($field['name']) == 'BIRTH')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
                    //proveri jel radi bez ovoga	
                    if(isset($field['name']) && strtoupper($field['name']) == 'MESSAGE')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                    
                    if(isset($field['name']) && strtoupper($field['name']) == 'COUNTRY')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
                        
                    if(isset($field['name']) && strtoupper($field['name']) == 'WEIGHT')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
                        
                    if(isset($field['name']) && strtoupper($field['name']) == 'DIAGNOSIS')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
                        
                    if(isset($field['name']) && strtoupper($field['name']) == 'DISEASE DURATION')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                    if(isset($field['name']) && strtoupper($field['name']) == 'MEDICATIONS')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
                        
                    if(isset($field['name']) && strtoupper($field['name']) == 'CO-EXISTING DISEASES')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
                        
                    /*if(isset($field['name']) && strtoupper($field['name']) == 'LIST ILLNESS')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];*/
                    
                    if(isset($field['name']) && strtoupper($field['name']) == 'ASSISTANCE')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                    if(isset($field['name']) && strtoupper($field['name']) == 'ALLERGIC')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
                        
                    if(isset($field['name']) && strtoupper($field['name']) == 'TREATED WITH STEMCELLS')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                    if(isset($field['name']) && strtoupper($field['name']) == 'OTHER PROBLEMS')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                    /*if(isset($field['name']) && strtoupper($field['name']) == 'COUNTRY BY IP')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];*/
        
                    if(isset($field['name']) && strtoupper($field['name']) == 'HEART')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                    if(isset($field['name']) && strtoupper($field['name']) == 'LUNGS')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                    if(isset($field['name']) && strtoupper($field['name']) == 'LIVER')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                    if(isset($field['name']) && strtoupper($field['name']) == 'DIGESTIVE')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
        
                    if(isset($field['name']) && strtoupper($field['name']) == 'MUSCULAR')
                        $fields [strtoupper($field['name'])] = (int)$field['id'];
                        
                        $diff = array_diff_key($need, $fields);
                    if (empty($diff))
                        break 2;
                }
            if (isset($diff))
                die('In amoCRM missing the following fields: ' . join(', ', $diff));
            else
                die('Unable to get additional fields');
        } while (FALSE);
        else
            die('Unable to get additional fields2');
        $custom_fields = isset($fields) ? $fields : FALSE;

        return $custom_fields;
    }

    function contacts_list(){
        $subdomain = 'office21';
        $data=$this->prepare();
        $link = 'https://' . $subdomain . '.amocrm.com/private/api/v2/json/contacts/list?query=' . $data['email'];
        $curl = curl_init(); # Save the cURL session handle
        # Set the necessary options for cURL session
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_HEADER, FALSE);
        curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

        $out = curl_exec($curl); # Initiate a request to the API and stores the response variable
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        
        $this->CheckCurlResponse($code);
        /*if ($out)
            die('Such contact already exists in amoCRM');*/
    }
    
    function lead_add(){

        $lead_number=time();
        $lead_name='New Lead from Parkinson #'.$lead_number;
        $lead=array(
            'name'=>$lead_name,
          /*  'tags'=>'from website, drugi'*/
           /* 'tags'=>"$tag"*/
        );

        //var_dump($lead);
        /*if(!empty($data['phone']))
            $lead['custom_fields'][]=array(
                'id'     => $custom_fields['PHONE'],
                    'values' => array(
                        array(
                            'value' => $data['phone']
                        )
                    )
        );*/
        $set['request']['leads']['add'][]=$lead;
        # Create a link for request
        $subdomain = 'office21';

        $link='https://'.$subdomain.'.amocrm.com/private/api/v2/json/leads/set';
        $curl=curl_init(); # Save the cURL session handle
        # Set the necessary options for cURL session
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
        curl_setopt($curl,CURLOPT_URL,$link);
        curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
        curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($set));
        curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
        curl_setopt($curl,CURLOPT_HEADER,false);
        curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
        $out=curl_exec($curl); # Initiate a request to the API and stores the response to variable
        $code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
        //CheckCurlResponse($code);
        /**
         * Obtain data in JSON-format, therefore, to obtain the data being read,
         * we have to translate the answer into a format understood by PHP
         */
        $Response=json_decode($out,true);
        $Response=$Response['response']['leads']['add'];
        $output='Added leads IDs:'.PHP_EOL;
        foreach($Response as $v)
            if(is_array($v))
                $output.=$v['id'].PHP_EOL;
                $lead_id = $v['id'];
             
   // var_dump($output);
   
        return $lead_id;
    }

    function contact_add(){
        $data=$this->prepare();
        $lead_id = $this->lead_add();
     
        $custom_fields = $this->fields_info();
        if(empty($contact['id'])) {
             
            $contact = array(
                'name' => $data['name'],
                'linked_leads_id'=>array($lead_id),
                /*'tags' => $data['hiddenTag'],*/
                            
                'custom_fields' => array(
                    array(
                        'id'     => $custom_fields['EMAIL'],
                        'values' => array(
                            array(
                                'value' => $data['email'],
                                'enum'  => 'WORK'
                            )
                        )
                    )
                )
            );
            
                if (!empty($data['company']))
                $contact += array('company_name' => $data['company']);
                if (!empty($data['position']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['POSITION'],
                    'values' => array(
                        array(
                            'value' => $data['position']
                        )
                    )
                );
                if (!empty($data['phone']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['PHONE'],
                    'values' => array(
                        array(
                            'value' => $data['phone'],
                            'enum'  => 'OTHER'
                            
                        )
                    )
                );
            
            
                if (!empty($data['countryip']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['COUNTRY BY IP'],
                    'values' => array(
                        array(
                            'value' => 'drzava na osnovu ip adrese'
                            
                            
                        )
                    )
                );
            
            
                if (!empty($data['web']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['WEB'],
                    'values' => array(
                        array(
                            'value' => $data['web']
                        )
                    )
                );
            
            
                if (!empty($data['tbname']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['MYNAME'],
                    'values' => array(
                        array(
                            'value' => $data['tbname']
                        )
                    )
                );
            
                if (!empty($data['message']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['MESSAGE'],
                    'values' => array(
                        array(
                            'value' => $data['message']
                        )
                    )
                );
            
            
            
                if (!empty($data['gender']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['GENDER'],
                    'values' => array(
                        array(
                            'value' => $data['gender']
                        )
                    )
                );
            
            
            
                if (!empty($data['diagnosis']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['DIAGNOSIS'],
                    'values' => array(
                        array(
                            'value' => $data['diagnosis']
                        )
                    )
                );
            
                if (!empty($data['howlong']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['DISEASE DURATION'],
                    'values' => array(
                        array(
                            'value' => $data['howlong']
                        )
                    )
                );
            
                if (!empty($data['medications']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['MEDICATIONS'],
                    'values' => array(
                        array(
                            'value' => $data['medications']
                        )
                    )
                );
            
                if (!empty($data['headinjury']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['CO-EXISTING DISEASES'],
                    'values' => array(
                        array(
                            'value' => $data['headinjury']
                        )
                    )
                );
            
                if (!empty($data['birth']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['BIRTH'],
                    'values' => array(
                        array(
                            'value' => $data['birth']
                        )
                    )
                );
            
                if (!empty($data['country']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['COUNTRY'],
                    'values' => array(
                        array(
                            'value' => $data['country']
                        )
                    )
                );
            
                if (!empty($data['allergytxt']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['ALLERGIC'],
                    'values' => array(
                        array(
                            'value' => $data['allergytxt']
                        )
                    )
                );
                
            
                if (!empty($data['problemstxt']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['OTHER PROBLEMS'],
                    'values' => array(
                        array(
                            'value' => $data['problemstxt']
                        )
                    )
                );
            
                if (!empty($data['treatedtxt']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['TREATED WITH STEMCELLS'],
                    'values' => array(
                        array(
                            'value' => $data['treatedtxt']
                        )
                    )
                );
            #RADIO BATONI ZA OSMO PITANJE
            
                if (!empty($data['heart']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['HEART'],
                    'values' => array(
                        array(
                            'value' => $data['heart']
                        )
                    )
                );
            
                if (!empty($data['lungs']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['LUNGS'],
                    'values' => array(
                        array(
                            'value' => $data['lungs']
                        )
                    )
                );
            
                if (!empty($data['liver']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['LIVER'],
                    'values' => array(
                        array(
                            'value' => $data['liver']
                        )
                    )
                );
                
                if (!empty($data['digestive']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['DIGESTIVE'],
                    'values' => array(
                        array(
                            'value' => $data['digestive']
                        )
                    )
                );
            
                if (!empty($data['muscular']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['MUSCULAR'],
                    'values' => array(
                        array(
                            'value' => $data['muscular']
                        )
                    )
                );
            #KRAJ
                if (!empty($data['weight']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['WEIGHT'],
                    'values' => array(
                        array(
                            'value' => $data['weight']
                        )
                    )
                );
            
                if (!empty($data['assistance']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['ASSISTANCE'],
                    'values' => array(
                        array(
                            'value' => $data['assistance']
                        )
                    )
                );
                /*if (!empty($data['skype']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['SKYPE'],
                    'values' => array(
                        array(
                            'value' => $data['skype'],
                            'enum'  => 'OTHER'
                        )
                    )
                );*/
            if (!empty($data['skype']))
                $contact['custom_fields'][] = array(
                    'id'     => $custom_fields['IM'],
                    'values' => array(
                        array(
                            'value' => $data['skype'],
                            'enum'  => 'SKYPE'
                        )
                    )
                );
            if (!empty($data['scope'])) {
                foreach ($data['scope'] as &$enum)
                    $enum = trim($scope_info[$enum]);
                unset($enum);
                $intersect = array_intersect($custom_fields['SCOPE']['enums'], $data['scope']);
                foreach ($intersect as $k => $v)
                    $values[] = array(
                        'value' => $v,
                        'enum'  => $k
                    );
            
                $scope = array(
                    'id'     => (int)$custom_fields['SCOPE']['id'],
                    'values' => $values
                );
            
                $contact['custom_fields'][] = $scope;
            }
            $set['request']['contacts']['add'][] = $contact;
            
            $subdomain = 'office21';
            $link = 'https://' .$subdomain . '.amocrm.com/private/api/v2/json/contacts/set';
            $curl = curl_init(); # Save the cURL session handle
            # Set the necessary options for cURL session
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
            curl_setopt($curl, CURLOPT_URL, $link);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($set));
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($curl, CURLOPT_HEADER, FALSE);
            curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
            curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
            
            $out = curl_exec($curl); # Initiate a request to the API and stores the response variable
            $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            
            $this->CheckCurlResponse($code);
            
            /**
             * Obtain data in JSON-format, therefore, to obtain the data being read,
             *  * we have to translate the answer into a format understood by PHP
             */
            $Response = json_decode($out, TRUE);
            $Response = $Response['response']['contacts']['add'];
            
            $output = 'ID added contacts:' . PHP_EOL;
            foreach ($Response as $v)
                if (is_array($v))
                    $output .= $v['id'] . PHP_EOL;
            return $output;
            }
            else {
                   # If such Contact already exists in amoCRM, we attach new Lead to it
                $contact=array(
                    'id' => $contact['id'],
                    'linked_leads_id' => array($lead_id),
                    'last_modified' => time(),
                    'name' => $data['name']
                    );
                
                $set['request']['contacts']['update'][] = $contact;


                $subdomain = 'office21';
                # Create a link for request
                //$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';
                $link='https://'.$subdomain.'.amocrm.com/private/api/v2/json/contacts/set';
                $curl=curl_init(); # Save the cURL session handle
                # Set the necessary options for cURL session
                curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
                curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
                curl_setopt($curl,CURLOPT_URL,$link);
                curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
                curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($set));
                curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
                curl_setopt($curl,CURLOPT_HEADER,false);
                curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
                curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
                curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
                curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
                
                $out=curl_exec($curl); # Initiate a request to the API and stores the response to variable
                $code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
                $Response=json_decode($out,true);
                $Response2=$Response['response']['contacts']['update'];
                //echo 'Such Сontact already exists in the CRM. <br> New Lead is added to it.';
                
            }
        }

   
}
