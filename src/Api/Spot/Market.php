<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Binance\Api\Spot;

use Lin\Binance\Request;

class Market extends Request
{
    //Default Dont required HMAC SHA256
    protected $signature=false;

    /**
     * 测试服务器连通性 PING
    GET /api/v1/ping
     * */
    public function getPing(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/ping';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *获取服务器时间
    GET /api/v1/time
     * */
    public function getTime(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/time';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * 交易规范信息
       GET /api/v1/exchangeInfo
     * */
    public function getExchangeInfo(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/exchangeInfo';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *深度信息
    GET /api/v1/depth

    symbol	STRING	YES
    limit	INT	NO	默认 100; 最大 1000. 可选值:[5, 10, 20, 50, 100, 500, 1000]
     * */
    public function getDepth(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/depth';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *近期成交
    GET /api/v1/trades

    symbol	STRING	YES
    limit	INT	NO	Default 500; max 1000.
     * */
    public function getTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v1/trades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *查询历史成交(MARKET_DATA)
    GET /api/v1/historicalTrades
     * */
    public function getHistoricalTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/historicalTrades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *近期成交(归集)
    GET /api/v1/aggTrades

    symbol	STRING	YES
    fromId	LONG	NO	从包含fromID的成交开始返回结果
    startTime	LONG	NO	从该时刻之后的成交记录开始返回结果
    endTime	LONG	NO	返回该时刻为止的成交记录
    limit	INT	NO	默认 500; 最大 1000.
     * */
    public function getAggTrades(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/aggTrades';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *K线数据
    GET /api/v1/klines
     * */
    public function getKlines(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/klines';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *当前平均价格
    GET /api/v3/avgPrice
    Name	Type	Mandatory	Description
    symbol	STRING	YES
     * */
    public function getAvgPrice(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/avgPrice';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *系统状态 (System)
    GET /sapi/v1/system/status
     * */
    public function getSystemStatus(array $data=[]){
        $this->type='GET';
        $this->path='/sapi/v1/system/status';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *24hr价格变动情况
    GET /api/v1/ticker/24hr
     * */
    public function get24hr(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/ticker/24hr';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * 最新价格接口
    GET /api/v3/ticker/price
     * */
    public function getTickerPrice(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/ticker/price';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *最优挂单接口
    GET /api/v3/ticker/bookTicker
     * */
    public function getTickerBookTicker(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/ticker/bookTicker';
        $this->data=$data;
        return $this->exec();
    }

    /**
     * 请求最优挂单接口参数
     * */
    public function getTickerBookTickerRequestParams(array $data=[],string $functionName=null){
        if (null === $functionName) {
            return false;
        } else {
            $this->type='GET';
            $this->path='/api/v3/ticker/bookTicker';
            $this->data=$data;
            return $this->getRequestParam($functionName);
        }
    }
}
