<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->date('RptDt');
            $table->string('TckrSymb', 10);
            $table->string('Asst', 10);
            $table->string('AsstDesc', 255);
            $table->string('SgmtNm', 50);
            $table->string('MktNm', 50);
            $table->string('SctyCtgyNm', 50)->nullable();
            $table->date('XprtnDt')->nullable();
            $table->string('XprtnCd', 20)->nullable();
            $table->date('TradgStartDt')->nullable();
            $table->date('TradgEndDt')->nullable();
            $table->string('BaseCd', 10)->nullable();
            $table->string('ConvsCritNm', 100)->nullable();
            $table->date('MtrtyDtTrgtPt')->nullable();
            $table->boolean('ReqrdConvsInd')->nullable();
            $table->string('ISIN', 20)->nullable();
            $table->string('CFICd', 10)->nullable();
            $table->date('DlvryNtceStartDt')->nullable();
            $table->date('DlvryNtceEndDt')->nullable();
            $table->string('OptnTp', 10)->nullable();
            $table->integer('CtrctMltplr')->default(1);
            $table->decimal('AsstQtnQty', 15, 2)->nullable();
            $table->integer('AllcnRndLot')->nullable();
            $table->string('TradgCcy', 3)->nullable();
            $table->string('DlvryTpNm', 20)->nullable();
            $table->integer('WdrwlDays')->nullable();
            $table->integer('WrkgDays')->nullable();
            $table->integer('ClnrDays')->nullable();
            $table->string('RlvrBasePricNm', 100)->nullable();
            $table->integer('OpngFutrPosDay')->nullable();
            $table->string('SdTpCd1', 10)->nullable();
            $table->string('UndrlygTckrSymb1', 10)->nullable();
            $table->string('SdTpCd2', 10)->nullable();
            $table->string('UndrlygTckrSymb2', 10)->nullable();
            $table->decimal('PureGoldWght', 15, 6)->nullable();
            $table->decimal('ExrcPric', 15, 6)->nullable();
            $table->string('OptnStyle', 20)->nullable();
            $table->string('ValTpNm', 50)->nullable();
            $table->boolean('PrmUpfrntInd')->nullable();
            $table->date('OpngPosLmtDt')->nullable();
            $table->string('DstrbtnId', 50)->nullable();
            $table->decimal('PricFctr', 15, 6)->nullable();
            $table->integer('DaysToSttlm')->nullable();
            $table->string('SrsTpNm', 50)->nullable();
            $table->boolean('PrtcnFlg')->nullable();
            $table->boolean('AutomtcExrcInd')->nullable();
            $table->string('SpcfctnCd', 50)->nullable();
            $table->string('CrpnNm', 255)->nullable();
            $table->date('CorpActnStartDt')->nullable();
            $table->string('CtdyTrtmntTpNm', 50)->nullable();
            $table->decimal('MktCptlstn', 20, 2)->nullable();
            $table->string('CorpGovnLvlNm', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
