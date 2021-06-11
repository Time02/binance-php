<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Binance\Api\Futures;

use Lin\Binance\Exceptions\Exception;
use Lin\Binance\Request;

class User extends Request
{
    //Default required HMAC SHA256
    protected $signature=true;

    function __construct(array $data)
    {
        parent::__construct($data);

        $this->data['timestamp']=time().'000';
    }

    /**
     *POST /fapi/v1/positionSide/dual (HMAC SHA256)  USER_DATA
     * */
    public function postPositionSideDual(array $data=[]){
        $this->type='POST';
        $this->path='/fapi/v1/positionSide/dual';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     *GET /fapi/v1/order (HMAC SHA256) USER_DATA
     * */
    public function getOrder(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/order';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     * 查询指定交易对挂单 (USER_DATA)
     * orderId 与 origClientOrderId 中的一个为必填参数
     * 查询的订单如果已经成交或取消，将返回报错 "Order does not exist."
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function getOpenOrder(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/openOrder';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     * 查看当前全部挂单 (USER_DATA)
     * 权重: - 带symbol 1 - 不带 40
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function getOpenOrders(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/openOrders';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     *GET /fapi/v1/allOrders (HMAC SHA256) USER_DATA
     * */
    public function getAllOrders(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/allOrders';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     * GET /fapi/v1/balance (HMAC SHA256) USER_DATA
     * {
            "accountAlias": "SgsR",    // 账户唯一识别码
            "asset": "USDT",        // 资产
            "balance": "122607.35137903",   // 总余额
            "crossWalletBalance": "23.72469206", // 全仓余额
            "crossUnPnl": "0.00000000"  // 全仓持仓未实现盈亏
            "availableBalance": "23.72469206",       // 下单可用余额
            "maxWithdrawAmount": "23.72469206",     // 最大可转出余额
            "marginAvailable": true,    // 是否可用作联合保证金
            "updateTime": 1617939110373
        }
     * */
    public function getBalance(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/balance';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     *GET /fapi/v1/account (HMAC SHA256) USER_DATA
     * */
    public function getAccount(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/account';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     *GET /fapi/v1/positionRisk (HMAC SHA256) USER_DATA
     **/
    public function getPositionRisk(array $data=[]){
        $this->type='get';
        $this->path='/fapi/v1/positionRisk';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     *GET /fapi/v1/userTrades (HMAC SHA256) USER_DATA
     * */
    public function getUserTrades(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/userTrades';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     *GET /fapi/v1/income (HMAC SHA256) USER_DATA
     * */
    public function getIncome(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/income';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     * 杠杆分层标准
     * GET /fapi/v1/leverageBracket  USER_DATA
     * {
            "symbol": "ETHUSDT",
            "brackets": [{
                "bracket": 1,   // 层级
                "initialLeverage": 75,  // 该层允许的最高初始杠杆倍数
                "notionalCap": 10000,  // 该层对应的名义价值上限
                "notionalFloor": 0,  // 该层对应的名义价值下限
                "maintMarginRatio": 0.0065, // 该层对应的维持保证金率
                "cum":0 // 速算数
            },]
        }
     * */
    public function getLeverageBracket(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/leverageBracket';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     *GET /fapi/v1/forceOrders  USER_DATA
     * */
    public function getForceOrders(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/forceOrders';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     *GET /fapi/v1/adlQuantile USER_DATA
     * */
    public function getAdlQuantile(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/adlQuantile';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     * GET /fapi/v1/commissionRate (HMAC SHA256)
     * */
    public function getCommissionRate(array $data=[]){
        $this->type='GET';
        $this->path='/fapi/v1/commissionRate';
        $this->data=array_merge($this->data,$data);
        return $this->exec();
    }

    /**
     * POST /fapi/v1/listenKey
     */
    public function postListenKey(array $data=[]){
        $this->type='POST';
        $this->path='/fapi/v1/listenKey';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *PUT /fapi/v1/listenKey
     */
    public function putListenKey(array $data=[]){
        $this->type='PUT';
        $this->path='/fapi/v1/listenKey';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *DELETE /fapi/v1/listenKey
     */
    public function deleteListenKey(array $data=[]){
        $this->type='DELETE';
        $this->path='/fapi/v1/listenKey';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *GET /fapi/v1/apiTradingStatus
     */
    public function getApiTradingStatus(array $data=[]){
        $this->type='get';
        $this->path='/fapi/v1/apiTradingStatus';
        $this->data=$data;
        return $this->exec();
    }
}
