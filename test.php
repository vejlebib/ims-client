<?php

require 'vendor/autoload.php';

// IMS WSLD URLs.
// For complete list see: https://ims.lyngsoesystems.com/vejlebib/ImsWs/soap.
const SECURITY_WSDL = 'https://ims.lyngsoesystems.com/vejlebib/ImsWs/soap/Security?wsdl';
const QUERY_WSDL = 'https://ims.lyngsoesystems.com/vejlebib/ImsWs/soap/Query?wsdl';

// IMS credentials.
const IMS_USER = '';
const IMS_PASS = '';
const IMS_CLIENT_INFO = '';

use IMS\Security;
use IMS\Security\SecurityClientFactory;
use IMS\Query;
use IMS\Query\QueryClientFactory;

$login = (new Security\Type\Login())
  ->withUsername(IMS_USER)
  ->withPassword(IMS_PASS)
  ->withClientInfo(IMS_CLIENT_INFO);

$client = SecurityClientFactory::factory(SECURITY_WSDL);

// Log in and get token.
$response = $client->login($login);
$token = $response->getToken();
echo "Token: $token\n\n";

$query = QueryClientFactory::factory(QUERY_WSDL);

// Test findItems method for PID: 870970-basis:47631084 ("Dukkerne : fire fortællinger")
echo "Test findItems method with 870970-basis:47631084\n";
$findItems = (new Query\Type\FindItems())
  ->withToken($token)
  ->withBibliographicRecordId('47631084');
$response = $query->findItems($findItems);
$items = $response->getItems();
$material_id = 0;
foreach ($items as $item) {
  $material_id = $item->getItemId();
  echo "Material ID: $material_id\n";
  $placement = $item->getPlacementInfo();
  $shortPlacementText = $placement->getShortPlacementText();
  echo "Short placement text: $shortPlacementText\n";
  $longPlacementText = $placement->getLongPlacementText();
  echo "Long placement text: $longPlacementText\n";
  $ilsLocation = $item->getCurrentIlsLocation()->getName();
  echo "Ils Location: $ilsLocation\n";
  $ilsSublocation = $item->getCurrentIlsSublocation()->getName();
  echo "Ils sub Location: $ilsSublocation\n";
  $collection = $item->getCurrentCollection()->getName();
  echo "Collection: $collection\n";
}

echo "\n";

// Test getItemDetails medthod (using last $material_id from above).
echo "Test getItemDetails method with material id: $material_id\n";
$itemDetails = (new Query\Type\GetItemDetails())
  ->withToken($token)
  ->withItemId($material_id);
$response = $query->getItemDetails($itemDetails);
$itemDetails = $response->getItemDetails();
$placementText = $itemDetails->getPlacementText();
echo "Placement text: $placementText\n";
$materialGrouping = $itemDetails->getCurrentMaterialGrouping()->getMaterialGroupingName();
echo "Material group name: $materialGrouping\n";


// Log out.
$logout = (new Security\Type\Logout())->withToken($token);
$client->logout($logout);
