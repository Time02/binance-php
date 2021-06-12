<?php
require __DIR__ .'../../vendor/autoload.php';
use Lin\Binance\Binance;
use Lin\Binance\BinanceFuture;
use Lin\Binance\BinanceMix;

$action = 1;
$startTime = microtime(true);

//测试网支持的现货
$coins = ['XRPUSDT','TRXUSDT','ETHUSDT','BTCUSDT','BNBUSDT'];
//现货
$spotKey = 'D9u7tZoU6wt2ijI2b2JSHPPLxwrDWlFXoW1FAT044lFnKdrKgTmNndHtHuNeqS2X';
$spotSecret = 'TEmkmTAnn1OcDzzDmwDv1IL1yddR79sl0DwhdPvBRlLgXdrBNlL6WgaEVHql6lWs';
$spotHost = 'https://testnet.binance.vision';
$spot = new Binance($spotKey,$spotSecret,$spotHost);

switch ($action) {
    case 1:
        $spotRate = $spot->user()->getTradeFee(['symbol'=>'BTCUSDT']);
        print_r($spotRate);// maker,taker 使用BNB25%+反佣20% 0.0006
        break;
    default:
        echo "no action";
}

