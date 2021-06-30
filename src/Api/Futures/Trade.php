<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Binance\Api\Futures;

use Lin\Binance\Request;

class Trade extends Request
{
    //Default required HMAC SHA256
    protected $signature=true;

    function __construct(array $data)
    {
        parent::__construct($data);

        $this->data['timestamp']=time().'000';
    }

    /*
     *GET /fapi/v2/positionSide/dual (HMAC SHA256)
     */
    public function getPositionSideDual(array $data=[]){
        $this->type='get';
        $this->path='/fapi/v2/positionSide/dual';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     * GET /fapi/v2/multiAssetsMargin (HMAC SHA256)
     */
    public function getMultiAssetsMargin(array $data=[]){
        $this->type='get';
        $this->path='/fapi/v2/multiAssetsMargin';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     *POST /fapi/v2/order (HMAC SHA256)
     */
    public function postOrder(array $data=[]){
        $this->type='POST';
        $this->path='/fapi/v2/order';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    public function getPostOrderRequestParams(array $data=[],string $functionName=null){

        if (null === $functionName) {
            return false;
        } else {
            $this->type='POST';
            $this->path='/fapi/v2/order';
            $this->data=array_merge($this->data,$data);
            return $this->getRequestParam($functionName);
        }
    }

    /*
     *POST /fapi/v2/order/test (HMAC SHA256)
     */
    public function postOrderTest(array $data=[]){
        $this->type='POST';
        $this->path='/fapi/v2/order/test';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     *POST /fapi/v2/batchOrders (HMAC SHA256)
     */
    public function postBatchOrders(array $data=[]){
        $this->type='POST';
        $this->path='/fapi/v2/batchOrders';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     *DELETE /fapi/v2/order (HMAC SHA256)
     */
    public function deleteOrder(array $data=[]){
        $this->type='DELETE';
        $this->path='/fapi/v2/order';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     * 撤销单一交易对的所有挂单 (TRADE)
     * DELETE /fapi/v2/allOpenOrders (HMAC SHA256)
     */
    public function deleteAllOpenOrders(array $data=[]){
        $this->type='DELETE';
        $this->path='/fapi/v2/allOpenOrders';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     *DELETE /fapi/v2/batchOrders (HMAC SHA256)
     */
    public function deleteBatchOrders(array $data=[]){
        $this->type='DELETE';
        $this->path='/fapi/v2/batchOrders';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     *POST /fapi/v2/countdownCancelAll (HMAC SHA256)
     */
    public function postCountdownCancelAll(array $data=[]){
        $this->type='POST';
        $this->path='/fapi/v2/countdownCancelAll';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     * 调整开仓杠杆
     * POST /fapi/v2/leverage (HMAC SHA256)
     * {
            "leverage": 21, // 杠杆倍数
            "maxNotionalValue": "1000000", // 当前杠杆倍数下允许的最大名义价值
            "symbol": "BTCUSDT" // 交易对
        }
     */
    public function postLeverage(array $data=[]){
        $this->type='post';
        $this->path='/fapi/v2/leverage';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     *POST /fapi/v2/marginType (HMAC SHA256)
     */
    public function getMarginType(array $data=[]){
        $this->type='POST';
        $this->path='/fapi/v2/marginType';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     *POST /fapi/v2/positionMargin (HMAC SHA256)
     */
    public function postPositionMargin(array $data=[]){
        $this->type='POST';
        $this->path='/fapi/v2/positionMargin';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /*
     *GET /fapi/v2/positionMargin/history (HMAC SHA256)
     */
    public function getPositionMarginHistory(array $data=[]){
        $this->type='get';
        $this->path='/fapi/v2/positionMargin/history';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }
}
