<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Asset extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = [
        'RptDt',
        'TckrSymb',
        'Asst',
        'AsstDesc',
        'SgmtNm',
        'MktNm',
        'SctyCtgyNm',
        'XprtnDt',
        'XprtnCd',
        'TradgStartDt',
        'TradgEndDt',
        'BaseCd',
        'ConvsCritNm',
        'MtrtyDtTrgtPt',
        'ReqrdConvsInd',
        'ISIN',
        'CFICd',
        'DlvryNtceStartDt',
        'DlvryNtceEndDt',
        'OptnTp',
        'CtrctMltplr',
        'AsstQtnQty',
        'AllcnRndLot',
        'TradgCcy',
        'DlvryTpNm',
        'WdrwlDays',
        'WrkgDays',
        'ClnrDays',
        'RlvrBasePricNm',
        'OpngFutrPosDay',
        'SdTpCd1',
        'UndrlygTckrSymb1',
        'SdTpCd2',
        'UndrlygTckrSymb2',
        'PureGoldWght',
        'ExrcPric',
        'OptnStyle',
        'ValTpNm',
        'PrmUpfrntInd',
        'OpngPosLmtDt',
        'DstrbtnId',
        'PricFctr',
        'DaysToSttlm',
        'SrsTpNm',
        'PrtcnFlg',
        'AutomtcExrcInd',
        'SpcfctnCd',
        'CrpnNm',
        'CorpActnStartDt',
        'CtdyTrtmntTpNm',
        'MktCptlstn',
        'CorpGovnLvlNm',
    ];
}
