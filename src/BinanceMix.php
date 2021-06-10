<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Binance;

class BinanceMix extends Request
{
    protected $spot; //现货类
    protected $futures; //合约类

    function __construct($spot,$futures){
        $this->spot=$spot;
        $this->futures=$futures;
    }

    function mixGetTickerBookTickerAsync(string $spotName,string $futuresName){
        $requestParams = [];
        $requestParams[] = $this->spot->market()->getTickerBookTickerRequestParams(['symbol'=>'BTCUSDT'],$spotName);
        $requestParams[] = $this->futures->market()->getTickerBookTickerRequestParams(['symbol'=>'BTCUSDT'],$futuresName);
        //print_r($requestParams);
        return $this->execAsync($requestParams);
    }


}
