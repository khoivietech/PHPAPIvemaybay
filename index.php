<?php
    //include('curl.php');
    require 'lib/nusoap.php';
    
    $wsdl = 'http://subdomain.apivemaybay.net/AirlineTicket.asmx?wsdl';
    $endpoint = 'http://subdomain.apivemaybay.net/AirlineTicket.asmx';
    
    $client = new nusoap_client($wsdl,true);
    $client->setEndpoint($endpoint);
    //string startPoint, string endPoint, string departDate, string returnDate, int adults, int children, int infants, string username, string password, string airline
    $params = array('startPoint'=>'SGN','endPoint'=>'HAN','departDate'=>'07/14/2018','returnDate'=>'','adults'=>1,'children'=>1,'infants'=>0,'username'=>'agentname','password'=>'agentpass', 'airline' => 'VJ');
    
    try{
        $response = $client->call('DomesticResult',$params);      
    
    }  catch (Exception $e){
        $e->getMessage();
    }
    //echo $client;
    
    //var_dump($response);
?>
<?php 

foreach($response as $value){ 
    echo $value;    
?>  <br />
<?php
}
?>