<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 5:25 PM
 */
namespace NovakSolutions\FrontDesk;

class FrontDesk {
    public static $debugCurl = false;

    public static function select(ResultSet $resultSet){
        if($resultSet->queryBuilder instanceof ReportingQueryBuilder){
            $postData = array(
                'data' => array(
                    'type' => 'queries',
                    'attributes' => array(
                        'fields' => $resultSet->queryBuilder->getFields(),
                        //'sort' => $resultSet->queryBuilder->sort,
                        'page' => array(
                            'limit' => $resultSet->perPage
                        )
                    )
                )
            );

            if($resultSet->lastKey !== null){
                $postData['data']['attributes']['page']['starting_after'] = $resultSet->lastKey;
            }
        }

        $response = static::call('select', $resultSet->queryBuilder->model, $postData, $resultSet->queryBuilder->businessKey);

        $modelClassName = get_class($resultSet->queryBuilder->model);

        $results = array();
        foreach($response['data']['attributes']['rows'] as $row){
            $model = new $modelClassName();
            $model->setData($row);
            $results[] = $model;
        }

        if($response['data']['attributes']['has_more']){
            $resultSet->lastKey = $response['data']['attributes']['last_key'];
            $resultSet->hasMore = true;
        } else {
            $resultSet->lastKey = null;
            $resultSet->hasMore = false;
        }

        $resultSet->results = $results;

    }

    public static function insert(){

    }

    public static function update(){

    }

    public static function delete(){

    }

    public static function call($operation, $model, $postData, $businessSubdomain = ''){
        $accessToken = Businesses::get($businessSubdomain);

        if($businessSubdomain == ''){
            $businessSubdomain = Businesses::$defaultBusinessSubdomain;
        }
        if(!isset($model::$endPoints[$operation])){
            throw new Exception($operation . ' is not defined in ' . get_class($model) . '\'s endpoints');
        }

        $endPoint = $model::$endPoints[$operation];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://' . $businessSubdomain . '.frontdeskhq.com' . $endPoint['urlPath']);
        switch(strtoupper($endPoint['method'])){
            case 'POST':
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData, JSON_PRETTY_PRINT));
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array(
                'Authorization: Bearer ' . $accessToken,
                'Content-Type: application/vnd.api+json'
            )
        );
        curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/cacert.pem');
        $rawResponse = curl_exec($ch);

        if($rawResponse === false){
            throw new \Exception("Error while communicating with FrontDesk " . curl_error($ch));
        }

        $response = json_decode($rawResponse, true);
        if($response == null){
            throw new \Exception("Error when decoding response to json...  Response was: " . substr($rawResponse, 0, 100));
        }

        if(isset($response['errors'])){
            throw new \Exception("Error from FrontDesk: " . implode(",", $response['errors']));
        }

        return $response;
    }



} 