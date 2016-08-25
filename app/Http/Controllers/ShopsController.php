<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopsController extends Controller
{
    protected $_request;
    protected $page = 1;
    protected $page_size = 5;
    protected $type = 1;

    public function __construct(Request $request)
    {
        $this->_request = $request;
    }
    
    public function getShopsOne()
    {
        if($this->_request->has('type'))
        {
            $this->type = $this->_request->type;
        }
        
        if ($this->_request->has('page')) 
        {
            $this->page = $this->_request->page;
        }
        if ($this->_request->has('page_size')) 
        {
            $this->page_size = $this->_request->page_size;
        }
        
        switch($this->type)
        {
            case 1:
                $shop = array(
                    'id' => 1,
                    'name' => '龙湾小包子',
                    'address' => '龙湾商业大街牧歌铺子56号',
                    'star' => 5,
                    'price' => 168,
                    'distance' => 1.5,
                    'thumbnail' => 'image/1.jpg',
                );
            case 2:
                $shop = array(
                    'id' => 1,
                    'name' => '永和大王',
                    'address' => '富力商业大街牧歌铺子56号',
                    'star' => 3.5,
                    'price' => 305,
                    'distance' => 9.5,
                    'thumbnail' => 'image/4.jpg',
                );

            default:
                    $shop = array(
                        'id' => 1,
                        'name' => '龙湾小包子',
                        'address' => '龙湾商业大街牧歌铺子56号',
                        'star' => 5,
                        'price' => 168,
                        'distance' => 1.5,
                        'thumbnail' => 'image/1.jpg',
                    );
                    
                    break;
        }

        for($i=1;$i<101;$i++)
        {
            $shop['id'] = $i;
            $shops[] = $shop;
        }

        $i =0;
        if($this->page < 1)
        {
            $this->page = 1;
        }

        $shop_pages = array();

        foreach($shops as $key => $shop_page)
        {
            $start = ($this->page - 1) * $this->page_size;
            $end = $this->page * $this->page_size;
            if($start <= $key  && $key < $end)
            {
                $shop_pages[] = (object)$shop_page;
            }
            $i++;
        }

        $data = $this->dataHandle((object)$shop_pages);
        return $data;
    }

    public function getShopsTwo()
    {
        if($this->_request->has('type'))
        {
            $this->type = $this->_request->type;
        }
        
        
        $categorys = array('Category1', 'Category2', 'Category3');
     
        switch($this->type)
        {
            case 1:
                foreach($categorys as $category)
                {
                    for($i=1;$i<6;$i++)
                    {
                        $shop = array(
                            'id' => $i,
                            'name' => '麦当劳',
                            'address' => '东环商业大街牧歌铺子56号',
                            'star' => 4,
                            'price' => 115,
                            'distance' => 1.8,
                            'thumbnail' => 'image/2.jpg',
                        );
                        $shops[$category][$i] = (object)$shop; 
                    }
                }
                break;
            case 2:
                foreach($categorys as $category)
                {
                    for($i=1;$i<6;$i++)
                    {
                        $shop = array(
                            'id' => 1,
                            'name' => '肯德基',
                            'address' => '星光商业大街牧歌铺子56号',
                            'star' => 4.5,
                            'price' => 201,
                            'distance' => 3.2,
                            'thumbnail' => 'image/3.jpg',
                        );
                        $shops[$category][$i] = (object)$shop; 
                    }
                }
                break;

            default:
                 $shop = array(
                    'id' => 1,
                    'name' => '麦当劳',
                    'address' => '东环商业大街牧歌铺子56号',
                    'star' => 4,
                    'price' => 115,
                    'distance' => 1.8,
                    'thumbnail' => 'image/2.jpg',
                 );
                 foreach($categorys as $category)
                 {
                     for($i=1;$i<6;$i++)
                     {
                         $shop['id'] = $i;
                         $shops[$category][$i] = (object)$shop; 
                     }
                 }

                 break;
        }
        $data = $this->dataHandle((object)$shops);
        return $data;
    }


    public function getShopDetail()
    {
        if($this->_request->has('id'))
        {
            $id = $this->_request->id;
        }
        else{
            return $this->dataHandle(array(), 'Missing parameter: id ');
        }

        $product = array(
            'id' => 1,
            'name' => '老家肉饼',
            'price' => '36',
            'discount' => '24',
            'thumbnail' => 'image/1.jpg',
        );
        for($i=1;$i<4;$i++)
        {
            $product['id'] = $i;
            $products[] = (object)$product;
        }

        $neighbor = array(
            'id' => 1,
            'pic' => 'image/3.jpg',
        );

        for($i=1; $i<11;$i++)
        {
            $neighbor['id'] = $i;
            $neighbors[] = (object)$neighbor;
        }

        $shopDetail = array(
            'id'    => $id,
            'name' => '龙湾小包子',
            'star' => 5,
            'price' => 168,
            'address' => '龙湾商业大街牧歌铺子56号',
            'phone' => '13512345678',
            'products' => (object)$products,
            'neighbors' => (object)$neighbors,
            'banner' => 'image/2.jpg',
        );
        
        $data = $this->dataHandle((object)$shopDetail);
        return $data;
    }

    public function getShopProduct()
    {
        if($this->_request->has('id'))
        {
            $id = $this->_request->id;
        }
        else{
            return $this->dataHandle(array(), 'Missing parameter: id ');
        }

        $productDetail = array(
            'id'    => $id,
            'name' => '龙湾小包子',
            'star' => 5,
            'price' => '34.00',
            'discount' => '38.00',
            'description' => '今日网上有消息称，此前在北京八达岭野生动物园被老虎咬伤的女子已身亡，引发网友关注。',
            'comments' => (object)array(),
            'banner' => 'image/2.jpg',
        );
        
        $data = $this->dataHandle((object)$productDetail);
        return $data;
    }

}
