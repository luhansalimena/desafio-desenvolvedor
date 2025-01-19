<?php

namespace App;

enum FileHeaders: string
{
    case RptDt = 'RptDt';
    case TckrSymb = 'TckrSymb';
    case Asst = 'Asst';
    case AsstDesc = 'AsstDesc';
    case SgmtNm = 'SgmtNm';
    case MktNm = 'MktNm';
    case SctyCtgyNm = 'SctyCtgyNm';
    case XprtnDt = 'XprtnDt';
    case XprtnCd = 'XprtnCd';
    case TradgStartDt = 'TradgStartDt';
    case TradgEndDt = 'TradgEndDt';
    case BaseCd = 'BaseCd';
    case ConvsCritNm = 'ConvsCritNm';
    case MtrtyDtTrgtPt = 'MtrtyDtTrgtPt';
    case ReqrdConvsInd = 'ReqrdConvsInd';
    case ISIN = 'ISIN';
    case CFICd = 'CFICd';
    case DlvryNtceStartDt = 'DlvryNtceStartDt';
    case DlvryNtceEndDt = 'DlvryNtceEndDt';
    case OptnTp = 'OptnTp';
    case CtrctMltplr = 'CtrctMltplr';
    case AsstQtnQty = 'AsstQtnQty';
    case AllcnRndLot = 'AllcnRndLot';
    case TradgCcy = 'TradgCcy';
    case DlvryTpNm = 'DlvryTpNm';
    case WdrwlDays = 'WdrwlDays';
    case WrkgDays = 'WrkgDays';
    case ClnrDays = 'ClnrDays';
    case RlvrBasePricNm = 'RlvrBasePricNm';
    case OpngFutrPosDay = 'OpngFutrPosDay';
    case SdTpCd1 = 'SdTpCd1';
    case UndrlygTckrSymb1 = 'UndrlygTckrSymb1';
    case SdTpCd2 = 'SdTpCd2';
    case UndrlygTckrSymb2 = 'UndrlygTckrSymb2';
    case PureGoldWght = 'PureGoldWght';
    case ExrcPric = 'ExrcPric';
    case OptnStyle = 'OptnStyle';
    case ValTpNm = 'ValTpNm';
    case PrmUpfrntInd = 'PrmUpfrntInd';
    case OpngPosLmtDt = 'OpngPosLmtDt';
    case DstrbtnId = 'DstrbtnId';
    case PricFctr = 'PricFctr';
    case DaysToSttlm = 'DaysToSttlm';
    case SrsTpNm = 'SrsTpNm';
    case PrtcnFlg = 'PrtcnFlg';
    case AutomtcExrcInd = 'AutomtcExrcInd';
    case SpcfctnCd = 'SpcfctnCd';
    case CrpnNm = 'CrpnNm';
    case CorpActnStartDt = 'CorpActnStartDt';
    case CtdyTrtmntTpNm = 'CtdyTrtmntTpNm';
    case MktCptlstn = 'MktCptlstn';
    case CorpGovnLvlNm = 'CorpGovnLvlNm';
}
