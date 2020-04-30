<?php

namespace IMS\Query;

use IMS\Query\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class QueryClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\GetTransportUnitContentInfo $parameters
     * @return ResultInterface|Type\GetTransportUnitContentInfoResponse
     * @throws SoapException
     */
    public function getTransportUnitContentInfo(\IMS\Query\Type\GetTransportUnitContentInfo $parameters) : \IMS\Query\Type\GetTransportUnitContentInfoResponse
    {
        return $this->call('GetTransportUnitContentInfo', $parameters);
    }

    /**
     * @param RequestInterface|Type\DoFineSortingOnTransportUnit $parameters
     * @return ResultInterface|Type\DoFineSortingOnTransportUnitResponse
     * @throws SoapException
     */
    public function doFineSortingOnTransportUnit(\IMS\Query\Type\DoFineSortingOnTransportUnit $parameters) : \IMS\Query\Type\DoFineSortingOnTransportUnitResponse
    {
        return $this->call('DoFineSortingOnTransportUnit', $parameters);
    }

    /**
     * @param RequestInterface|Type\DoFineSortingOnItem $parameters
     * @return ResultInterface|Type\DoFineSortingOnItemResponse
     * @throws SoapException
     */
    public function doFineSortingOnItem(\IMS\Query\Type\DoFineSortingOnItem $parameters) : \IMS\Query\Type\DoFineSortingOnItemResponse
    {
        return $this->call('DoFineSortingOnItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetAssignedDestinationForTransportUnit $parameters
     * @return ResultInterface|Type\GetAssignedDestinationForTransportUnitResponse
     * @throws SoapException
     */
    public function getAssignedDestinationForTransportUnit(\IMS\Query\Type\GetAssignedDestinationForTransportUnit $parameters) : \IMS\Query\Type\GetAssignedDestinationForTransportUnitResponse
    {
        return $this->call('GetAssignedDestinationForTransportUnit', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetAssignedDestinationForItem $parameters
     * @return ResultInterface|Type\GetAssignedDestinationForItemResponse
     * @throws SoapException
     */
    public function getAssignedDestinationForItem(\IMS\Query\Type\GetAssignedDestinationForItem $parameters) : \IMS\Query\Type\GetAssignedDestinationForItemResponse
    {
        return $this->call('GetAssignedDestinationForItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTransportUnitsWithoutRfid $parameters
     * @return ResultInterface|Type\GetTransportUnitsWithoutRfidResponse
     * @throws SoapException
     */
    public function getTransportUnitsWithoutRfid(\IMS\Query\Type\GetTransportUnitsWithoutRfid $parameters) : \IMS\Query\Type\GetTransportUnitsWithoutRfidResponse
    {
        return $this->call('GetTransportUnitsWithoutRfid', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetChutesWithoutRfid $parameters
     * @return ResultInterface|Type\GetChutesWithoutRfidResponse
     * @throws SoapException
     */
    public function getChutesWithoutRfid(\IMS\Query\Type\GetChutesWithoutRfid $parameters) : \IMS\Query\Type\GetChutesWithoutRfidResponse
    {
        return $this->call('GetChutesWithoutRfid', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLocationsWithoutRfid $parameters
     * @return ResultInterface|Type\GetLocationsWithoutRfidResponse
     * @throws SoapException
     */
    public function getLocationsWithoutRfid(\IMS\Query\Type\GetLocationsWithoutRfid $parameters) : \IMS\Query\Type\GetLocationsWithoutRfidResponse
    {
        return $this->call('GetLocationsWithoutRfid', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetInfoAboutTransportUnit $parameters
     * @return ResultInterface|Type\GetInfoAboutTransportUnitResponse
     * @throws SoapException
     */
    public function getInfoAboutTransportUnit(\IMS\Query\Type\GetInfoAboutTransportUnit $parameters) : \IMS\Query\Type\GetInfoAboutTransportUnitResponse
    {
        return $this->call('GetInfoAboutTransportUnit', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetInfoAboutItem $parameters
     * @return ResultInterface|Type\GetInfoAboutItemResponse
     * @throws SoapException
     */
    public function getInfoAboutItem(\IMS\Query\Type\GetInfoAboutItem $parameters) : \IMS\Query\Type\GetInfoAboutItemResponse
    {
        return $this->call('GetInfoAboutItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetInfoAboutLocation $parameters
     * @return ResultInterface|Type\GetInfoAboutLocationResponse
     * @throws SoapException
     */
    public function getInfoAboutLocation(\IMS\Query\Type\GetInfoAboutLocation $parameters) : \IMS\Query\Type\GetInfoAboutLocationResponse
    {
        return $this->call('GetInfoAboutLocation', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetInfoAboutChute $parameters
     * @return ResultInterface|Type\GetInfoAboutChuteResponse
     * @throws SoapException
     */
    public function getInfoAboutChute(\IMS\Query\Type\GetInfoAboutChute $parameters) : \IMS\Query\Type\GetInfoAboutChuteResponse
    {
        return $this->call('GetInfoAboutChute', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetHistoryOfTransportUnit $parameters
     * @return ResultInterface|Type\GetHistoryOfTransportUnitResponse
     * @throws SoapException
     */
    public function getHistoryOfTransportUnit(\IMS\Query\Type\GetHistoryOfTransportUnit $parameters) : \IMS\Query\Type\GetHistoryOfTransportUnitResponse
    {
        return $this->call('GetHistoryOfTransportUnit', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetHistoryOfItem $parameters
     * @return ResultInterface|Type\GetHistoryOfItemResponse
     * @throws SoapException
     */
    public function getHistoryOfItem(\IMS\Query\Type\GetHistoryOfItem $parameters) : \IMS\Query\Type\GetHistoryOfItemResponse
    {
        return $this->call('GetHistoryOfItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetItemsOfLocation $parameters
     * @return ResultInterface|Type\GetItemsOfLocationResponse
     * @throws SoapException
     */
    public function getItemsOfLocation(\IMS\Query\Type\GetItemsOfLocation $parameters) : \IMS\Query\Type\GetItemsOfLocationResponse
    {
        return $this->call('GetItemsOfLocation', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetItemsOfTransportUnit $parameters
     * @return ResultInterface|Type\GetItemsOfTransportUnitResponse
     * @throws SoapException
     */
    public function getItemsOfTransportUnit(\IMS\Query\Type\GetItemsOfTransportUnit $parameters) : \IMS\Query\Type\GetItemsOfTransportUnitResponse
    {
        return $this->call('GetItemsOfTransportUnit', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetNewDestinationForItem $parameters
     * @return ResultInterface|Type\GetNewDestinationForItemResponse
     * @throws SoapException
     */
    public function getNewDestinationForItem(\IMS\Query\Type\GetNewDestinationForItem $parameters) : \IMS\Query\Type\GetNewDestinationForItemResponse
    {
        return $this->call('GetNewDestinationForItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetClientVersionInfo $parameters
     * @return ResultInterface|Type\GetClientVersionInfoResponse
     * @throws SoapException
     */
    public function getClientVersionInfo(\IMS\Query\Type\GetClientVersionInfo $parameters) : \IMS\Query\Type\GetClientVersionInfoResponse
    {
        return $this->call('GetClientVersionInfo', $parameters);
    }

    /**
     * @param RequestInterface|Type\FindItems $parameters
     * @return ResultInterface|Type\FindItemsResponse
     * @throws SoapException
     */
    public function findItems(\IMS\Query\Type\FindItems $parameters) : \IMS\Query\Type\FindItemsResponse
    {
        return $this->call('FindItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetItemDetails $parameters
     * @return ResultInterface|Type\GetItemDetailsResponse
     * @throws SoapException
     */
    public function getItemDetails(\IMS\Query\Type\GetItemDetails $parameters) : \IMS\Query\Type\GetItemDetailsResponse
    {
        return $this->call('GetItemDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\FindBibliographicRecords $parameters
     * @return ResultInterface|Type\FindBibliographicRecordsResponse
     * @throws SoapException
     */
    public function findBibliographicRecords(\IMS\Query\Type\FindBibliographicRecords $parameters) : \IMS\Query\Type\FindBibliographicRecordsResponse
    {
        return $this->call('FindBibliographicRecords', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetBibliographicRecordDetails $parameters
     * @return ResultInterface|Type\GetBibliographicRecordDetailsResponse
     * @throws SoapException
     */
    public function getBibliographicRecordDetails(\IMS\Query\Type\GetBibliographicRecordDetails $parameters) : \IMS\Query\Type\GetBibliographicRecordDetailsResponse
    {
        return $this->call('GetBibliographicRecordDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetAuthors $parameters
     * @return ResultInterface|Type\GetAuthorsResponse
     * @throws SoapException
     */
    public function getAuthors(\IMS\Query\Type\GetAuthors $parameters) : \IMS\Query\Type\GetAuthorsResponse
    {
        return $this->call('GetAuthors', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTitles $parameters
     * @return ResultInterface|Type\GetTitlesResponse
     * @throws SoapException
     */
    public function getTitles(\IMS\Query\Type\GetTitles $parameters) : \IMS\Query\Type\GetTitlesResponse
    {
        return $this->call('GetTitles', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetMaterialGroupingSpecSums $parameters
     * @return ResultInterface|Type\GetMaterialGroupingSpecSumsResponse
     * @throws SoapException
     */
    public function getMaterialGroupingSpecSums(\IMS\Query\Type\GetMaterialGroupingSpecSums $parameters) : \IMS\Query\Type\GetMaterialGroupingSpecSumsResponse
    {
        return $this->call('GetMaterialGroupingSpecSums', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDestinationForItemWithDebug $parameters
     * @return ResultInterface|Type\GetDestinationForItemWithDebugResponse
     * @throws SoapException
     */
    public function getDestinationForItemWithDebug(\IMS\Query\Type\GetDestinationForItemWithDebug $parameters) : \IMS\Query\Type\GetDestinationForItemWithDebugResponse
    {
        return $this->call('GetDestinationForItemWithDebug', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTransportUnitContents $parameters
     * @return ResultInterface|Type\GetTransportUnitContentsResponse
     * @throws SoapException
     */
    public function getTransportUnitContents(\IMS\Query\Type\GetTransportUnitContents $parameters) : \IMS\Query\Type\GetTransportUnitContentsResponse
    {
        return $this->call('GetTransportUnitContents', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetItemHistory $parameters
     * @return ResultInterface|Type\GetItemHistoryResponse
     * @throws SoapException
     */
    public function getItemHistory(\IMS\Query\Type\GetItemHistory $parameters) : \IMS\Query\Type\GetItemHistoryResponse
    {
        return $this->call('GetItemHistory', $parameters);
    }

    /**
     * @param RequestInterface|Type\FindRequisitions $parameters
     * @return ResultInterface|Type\FindRequisitionsResponse
     * @throws SoapException
     */
    public function findRequisitions(\IMS\Query\Type\FindRequisitions $parameters) : \IMS\Query\Type\FindRequisitionsResponse
    {
        return $this->call('FindRequisitions', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetRequisitionDetails $parameters
     * @return ResultInterface|Type\GetRequisitionDetailsResponse
     * @throws SoapException
     */
    public function getRequisitionDetails(\IMS\Query\Type\GetRequisitionDetails $parameters) : \IMS\Query\Type\GetRequisitionDetailsResponse
    {
        return $this->call('GetRequisitionDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetRequisitionHistory $parameters
     * @return ResultInterface|Type\GetRequisitionHistoryResponse
     * @throws SoapException
     */
    public function getRequisitionHistory(\IMS\Query\Type\GetRequisitionHistory $parameters) : \IMS\Query\Type\GetRequisitionHistoryResponse
    {
        return $this->call('GetRequisitionHistory', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemToTransportUnit $parameters
     * @return ResultInterface|Type\CheckMoveItemToTransportUnitResponse
     * @throws SoapException
     */
    public function checkMoveItemToTransportUnit(\IMS\Query\Type\CheckMoveItemToTransportUnit $parameters) : \IMS\Query\Type\CheckMoveItemToTransportUnitResponse
    {
        return $this->call('CheckMoveItemToTransportUnit', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemToLocation $parameters
     * @return ResultInterface|Type\CheckMoveItemToLocationResponse
     * @throws SoapException
     */
    public function checkMoveItemToLocation(\IMS\Query\Type\CheckMoveItemToLocation $parameters) : \IMS\Query\Type\CheckMoveItemToLocationResponse
    {
        return $this->call('CheckMoveItemToLocation', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemToCentralSorting $parameters
     * @return ResultInterface|Type\CheckMoveItemToCentralSortingResponse
     * @throws SoapException
     */
    public function checkMoveItemToCentralSorting(\IMS\Query\Type\CheckMoveItemToCentralSorting $parameters) : \IMS\Query\Type\CheckMoveItemToCentralSortingResponse
    {
        return $this->call('CheckMoveItemToCentralSorting', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemToPlaced $parameters
     * @return ResultInterface|Type\CheckMoveItemToPlacedResponse
     * @throws SoapException
     */
    public function checkMoveItemToPlaced(\IMS\Query\Type\CheckMoveItemToPlaced $parameters) : \IMS\Query\Type\CheckMoveItemToPlacedResponse
    {
        return $this->call('CheckMoveItemToPlaced', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemsInTransportUnitToTransportUnit $parameters
     * @return ResultInterface|Type\CheckMoveItemsInTransportUnitToTransportUnitResponse
     * @throws SoapException
     */
    public function checkMoveItemsInTransportUnitToTransportUnit(\IMS\Query\Type\CheckMoveItemsInTransportUnitToTransportUnit $parameters) : \IMS\Query\Type\CheckMoveItemsInTransportUnitToTransportUnitResponse
    {
        return $this->call('CheckMoveItemsInTransportUnitToTransportUnit', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemsInTransportUnitToLocation $parameters
     * @return ResultInterface|Type\CheckMoveItemsInTransportUnitToLocationResponse
     * @throws SoapException
     */
    public function checkMoveItemsInTransportUnitToLocation(\IMS\Query\Type\CheckMoveItemsInTransportUnitToLocation $parameters) : \IMS\Query\Type\CheckMoveItemsInTransportUnitToLocationResponse
    {
        return $this->call('CheckMoveItemsInTransportUnitToLocation', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemsInTransportUnitToCentralSorting $parameters
     * @return ResultInterface|Type\CheckMoveItemsInTransportUnitToCentralSortingResponse
     * @throws SoapException
     */
    public function checkMoveItemsInTransportUnitToCentralSorting(\IMS\Query\Type\CheckMoveItemsInTransportUnitToCentralSorting $parameters) : \IMS\Query\Type\CheckMoveItemsInTransportUnitToCentralSortingResponse
    {
        return $this->call('CheckMoveItemsInTransportUnitToCentralSorting', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemsInTransportUnitToPlaced $parameters
     * @return ResultInterface|Type\CheckMoveItemsInTransportUnitToPlacedResponse
     * @throws SoapException
     */
    public function checkMoveItemsInTransportUnitToPlaced(\IMS\Query\Type\CheckMoveItemsInTransportUnitToPlaced $parameters) : \IMS\Query\Type\CheckMoveItemsInTransportUnitToPlacedResponse
    {
        return $this->call('CheckMoveItemsInTransportUnitToPlaced', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemsAtLocationToTransportUnit $parameters
     * @return ResultInterface|Type\CheckMoveItemsAtLocationToTransportUnitResponse
     * @throws SoapException
     */
    public function checkMoveItemsAtLocationToTransportUnit(\IMS\Query\Type\CheckMoveItemsAtLocationToTransportUnit $parameters) : \IMS\Query\Type\CheckMoveItemsAtLocationToTransportUnitResponse
    {
        return $this->call('CheckMoveItemsAtLocationToTransportUnit', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemsAtLocationToLocation $parameters
     * @return ResultInterface|Type\CheckMoveItemsAtLocationToLocationResponse
     * @throws SoapException
     */
    public function checkMoveItemsAtLocationToLocation(\IMS\Query\Type\CheckMoveItemsAtLocationToLocation $parameters) : \IMS\Query\Type\CheckMoveItemsAtLocationToLocationResponse
    {
        return $this->call('CheckMoveItemsAtLocationToLocation', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemsAtLocationToCentralSorting $parameters
     * @return ResultInterface|Type\CheckMoveItemsAtLocationToCentralSortingResponse
     * @throws SoapException
     */
    public function checkMoveItemsAtLocationToCentralSorting(\IMS\Query\Type\CheckMoveItemsAtLocationToCentralSorting $parameters) : \IMS\Query\Type\CheckMoveItemsAtLocationToCentralSortingResponse
    {
        return $this->call('CheckMoveItemsAtLocationToCentralSorting', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemsAtLocationToPlaced $parameters
     * @return ResultInterface|Type\CheckMoveItemsAtLocationToPlacedResponse
     * @throws SoapException
     */
    public function checkMoveItemsAtLocationToPlaced(\IMS\Query\Type\CheckMoveItemsAtLocationToPlaced $parameters) : \IMS\Query\Type\CheckMoveItemsAtLocationToPlacedResponse
    {
        return $this->call('CheckMoveItemsAtLocationToPlaced', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveTransportUnitToTransportUnit $parameters
     * @return ResultInterface|Type\CheckMoveTransportUnitToTransportUnitResponse
     * @throws SoapException
     */
    public function checkMoveTransportUnitToTransportUnit(\IMS\Query\Type\CheckMoveTransportUnitToTransportUnit $parameters) : \IMS\Query\Type\CheckMoveTransportUnitToTransportUnitResponse
    {
        return $this->call('CheckMoveTransportUnitToTransportUnit', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveTransportUnitToLocation $parameters
     * @return ResultInterface|Type\CheckMoveTransportUnitToLocationResponse
     * @throws SoapException
     */
    public function checkMoveTransportUnitToLocation(\IMS\Query\Type\CheckMoveTransportUnitToLocation $parameters) : \IMS\Query\Type\CheckMoveTransportUnitToLocationResponse
    {
        return $this->call('CheckMoveTransportUnitToLocation', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemToPlacedInExhibition $parameters
     * @return ResultInterface|Type\CheckMoveItemToPlacedInExhibitionResponse
     * @throws SoapException
     */
    public function checkMoveItemToPlacedInExhibition(\IMS\Query\Type\CheckMoveItemToPlacedInExhibition $parameters) : \IMS\Query\Type\CheckMoveItemToPlacedInExhibitionResponse
    {
        return $this->call('CheckMoveItemToPlacedInExhibition', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemsInTransportUnitToPlacedInExhibition $parameters
     * @return ResultInterface|Type\CheckMoveItemsInTransportUnitToPlacedInExhibitionResponse
     * @throws SoapException
     */
    public function checkMoveItemsInTransportUnitToPlacedInExhibition(\IMS\Query\Type\CheckMoveItemsInTransportUnitToPlacedInExhibition $parameters) : \IMS\Query\Type\CheckMoveItemsInTransportUnitToPlacedInExhibitionResponse
    {
        return $this->call('CheckMoveItemsInTransportUnitToPlacedInExhibition', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckMoveItemsAtLocationToPlacedInExhibition $parameters
     * @return ResultInterface|Type\CheckMoveItemsAtLocationToPlacedInExhibitionResponse
     * @throws SoapException
     */
    public function checkMoveItemsAtLocationToPlacedInExhibition(\IMS\Query\Type\CheckMoveItemsAtLocationToPlacedInExhibition $parameters) : \IMS\Query\Type\CheckMoveItemsAtLocationToPlacedInExhibitionResponse
    {
        return $this->call('CheckMoveItemsAtLocationToPlacedInExhibition', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetFineSortingDetailsForItem $parameters
     * @return ResultInterface|Type\GetFineSortingDetailsForItemResponse
     * @throws SoapException
     */
    public function getFineSortingDetailsForItem(\IMS\Query\Type\GetFineSortingDetailsForItem $parameters) : \IMS\Query\Type\GetFineSortingDetailsForItemResponse
    {
        return $this->call('GetFineSortingDetailsForItem', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetFineSortingDetailsForTransportUnit $parameters
     * @return ResultInterface|Type\GetFineSortingDetailsForTransportUnitResponse
     * @throws SoapException
     */
    public function getFineSortingDetailsForTransportUnit(\IMS\Query\Type\GetFineSortingDetailsForTransportUnit $parameters) : \IMS\Query\Type\GetFineSortingDetailsForTransportUnitResponse
    {
        return $this->call('GetFineSortingDetailsForTransportUnit', $parameters);
    }

    /**
     * @param RequestInterface|Type\FindTransportUnits $parameters
     * @return ResultInterface|Type\FindTransportUnitsResponse
     * @throws SoapException
     */
    public function findTransportUnits(\IMS\Query\Type\FindTransportUnits $parameters) : \IMS\Query\Type\FindTransportUnitsResponse
    {
        return $this->call('FindTransportUnits', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTransportUnitDetails $parameters
     * @return ResultInterface|Type\GetTransportUnitDetailsResponse
     * @throws SoapException
     */
    public function getTransportUnitDetails(\IMS\Query\Type\GetTransportUnitDetails $parameters) : \IMS\Query\Type\GetTransportUnitDetailsResponse
    {
        return $this->call('GetTransportUnitDetails', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetBibliographicRecordHistory $parameters
     * @return ResultInterface|Type\GetBibliographicRecordHistoryResponse
     * @throws SoapException
     */
    public function getBibliographicRecordHistory(\IMS\Query\Type\GetBibliographicRecordHistory $parameters) : \IMS\Query\Type\GetBibliographicRecordHistoryResponse
    {
        return $this->call('GetBibliographicRecordHistory', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetBibrecLifecycleSimulation $parameters
     * @return ResultInterface|Type\GetBibrecLifecycleSimulationResponse
     * @throws SoapException
     */
    public function getBibrecLifecycleSimulation(\IMS\Query\Type\GetBibrecLifecycleSimulation $parameters) : \IMS\Query\Type\GetBibrecLifecycleSimulationResponse
    {
        return $this->call('GetBibrecLifecycleSimulation', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckDiscardItem $parameters
     * @return ResultInterface|Type\CheckDiscardItemResponse
     * @throws SoapException
     */
    public function checkDiscardItem(\IMS\Query\Type\CheckDiscardItem $parameters) : \IMS\Query\Type\CheckDiscardItemResponse
    {
        return $this->call('CheckDiscardItem', $parameters);
    }


}

