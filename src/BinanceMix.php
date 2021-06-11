<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Binance;

/**
 * 期货和现货同时异步操作
 * Class BinanceMix
 * @package Lin\Binance
 */
class BinanceMix extends Request
{
    protected $spot; //现货类
    protected $futures; //合约类

    /**
     * BinanceMix constructor.
     * @param $spot
     * @param $futures
     */
    function __construct($spot,$futures){
        $this->spot=$spot;
        $this->futures=$futures;
    }

    /**
     * 异步同时获取期货和现货最佳盘口
     * @param string $symbol
     * @param string $spotName
     * @param string $futuresName
     * @return array
     */
    function mixGetTickerBookTickerAsync(string $symbol,string $spotName,string $futuresName){
        $requestParams = [];
        $requestParams[] = $this->spot->market()->getTickerBookTickerRequestParams(['symbol'=>$symbol],$spotName);
        $requestParams[] = $this->futures->market()->getTickerBookTickerRequestParams(['symbol'=>$symbol],$futuresName);
        //print_r($requestParams);
        return $this->execAsync($requestParams);
    }

    /**
     * 异步同时下单，
     * @param array $spotData
     * @param array $futuresData
     * @param string $spotName
     * @param string $futuresName
     * @return array
     */
    function mixPostOrderAsync(array $spotData,array $futuresData,string $spotName,string $futuresName){
        $requestParams = [];
        $requestParams[] = $this->spot->trade()->getPostOrderRequestParams($spotData,$spotName);
        $requestParams[] = $this->futures->trade()->getPostOrderRequestParams($futuresData,$futuresName);
        return $this->execAsync($requestParams);
    }
}