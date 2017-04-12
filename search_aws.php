<?php

$searchQuery = "";

$type = "";

$lat = "";

$lng = "";

$id = "";

$details = false;

$highResolution = false;

$idHigh = "";

if(isset($_GET['search_query'])){
    $searchQuery = $_GET['search_query'];
}

if(isset($_GET['type'])){
    $type = $_GET['type'];
}

if(isset($_GET['lat'])){
    $lat = $_GET['lat'];
}

if(isset($_GET['lng'])){
    $lng = $_GET['lng'];
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

if(isset($_GET['details'])){
    $details = true;
}

if(isset($_GET['highresolution'])){
    $highResolution = true;
}

if(isset($_GET['idhigh'])){
    $idHigh = $_GET['idhigh'];
}

require_once __DIR__ . '/php-graph-sdk-5.0.0/src/Facebook/autoload.php';

date_default_timezone_set("America/Los_Angeles");
$fb = new Facebook\Facebook([
    'app_id' => '748982581944529',
    'app_secret' => '7cfe6986f9736d1fb34ef8f24fcedd9d',
    'default_graph_version' => 'v2.8',
]);
$fb->setDefaultAccessToken('EAAKpMhi9YNEBAOsdyPQDe9ZBxFHZB33QzrRO60dLWI8W6ZBEmJnrrLPhAz2CxYEHujb4hDUUhelohNFtZAITQz9RnpRMEcxRVbAGwTqka9PU6VZC0990tXLemLH6JJ4Nwd7ALO93RBPhNDDDuGngiZB8ZBxr6LaJTAZD');

function getResult($qValue,$type){

    try {
        $encodeURL = urlencode($qValue);
        $var = '/search?q='.$encodeURL.'&type='.$type.'&fields=id,name,link,picture.width(700).height(700)';
        if($type == 'event'){
            $var = '/search?q='.$encodeURL.'&type='.$type.'&fields=id,name,picture.width(700).height(700),place';
        }
        $response = $GLOBALS['fb']->get($var);
        $search = $response->getDecodedBody();
        $result = json_encode($search);
       // var_dump($result);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    return $result;

}

function getResultLocationNoDistance($qValue,$type,$lat,$lng){
    $encodeURL = urlencode($qValue);

    try {
        $var = '/search?q='.$encodeURL.'&type='.$type.'&center='.$lat.','.$lng.'&fields=id,name,link,picture.width(700).height(700)';
        $response = $GLOBALS['fb']->get($var);
        $search = $response->getDecodedBody();
        $result = json_encode($search);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    return $result;
}

function getDetails($id){
    try {
        // $id = '124984464200434';albums.limit(5){name,photos.limit(2){images}}
        $var = '/'.$id.'?fields=id,name,picture.width(700).height(700),albums.limit(5){name,photos.limit(2){images}},posts.limit(5)';
        $response = $GLOBALS['fb']->get($var);
        $search = $response->getDecodedBody();
        $result = json_encode($search);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    return $result;
}

function getHighResolutionImageUrlProfile($id){
    try {
        $var = '/'.$id.'/picture?redirect=false&type=large';
        $response = $GLOBALS['fb']->get($var);
        $search = $response->getDecodedBody();
        if(isset($search['data']['url'])){
            $result = $search['data']['url'];
        }else{
            $result = null;
        }
        return $result;
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    return null;
}

if($highResolution==true){
    $searchResult = getHighResolutionImageUrlProfile($idHigh);
    echo $searchResult;
}else if($details==true){
     $searchResult = getDetails($id);
     echo $searchResult;
}else if(sizeof($lat)==0 && sizeof($lng)==0){
    $searchResult = getResult($searchQuery,$type);
    echo $searchResult;
}else{
    $searchResult = getResult($searchQuery,$type,$lat,$lng);
    echo $searchResult;
}

?>