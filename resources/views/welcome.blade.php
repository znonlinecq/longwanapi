@extends('layouts.master')

@section('title', 'APP')


@section('content')
<div class="jumbotron">
  <h3>龙湾APP接口说明</h3>
<ul>
  <li><a href="#image">图片</a></li>
  <li><a href="#shopsOne">店铺列表一级</a></li>
  <li><a href="#shopsTwo">店铺列表二级</a></li>
  <li><a href="#shop_detail">店铺详情</a></li>
  <li><a href="#shop_product">店铺商品</a></li>
</ul>
</div>
<div id="image">
<blockquote>
  <p>获取图片接口</p>
  <footer>方式: GET</footer>
  <footer>地址: http://api.rongdatonghe.com/image/{参数}</footer>
  <footer>例子: http://api.rongdatonghe.com/image/1.jpg</footer>
</blockquote>
</div>

<!-- 店铺列表一级 -->
<div id="shopsOne">
<blockquote>
  <p>获取店铺列表一级</p>
  <footer>方式: POST </footer>
  <footer>地址: http://api.rongdatonghe.com/shopsone</footer>
  <footer>参数1: type { 类型, 1=美食 | 2=酒店, 默认=1，选填 }</footer>
  <footer>参数2: page { 页码, 默认=1, 选填}</footer>
  <footer>参数3: page_size { 每页显示条数, 默认=5, 选填}</footer>
  <footer>返回: JSON对象 code = 200 成功 = 400 失败, msg = 提示, data = 数据</footer>
  <pre>{
"code":200,
"message":"success",
"data":{
    "0":{"id":6,"name":"\u9f99\u6e7e\u5c0f\u5305\u5b50","address":"\u9f99\u6e7e\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7","star":5,"price":168,"distance":1.5,"thumbnail":"image\/1.jpg"},
    "1":{"id":7,"name":"\u9f99\u6e7e\u5c0f\u5305\u5b50","address":"\u9f99\u6e7e\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7","star":5,"price":168,"distance":1.5,"thumbnail":"image\/1.jpg"},
    "2":{"id":8,"name":"\u9f99\u6e7e\u5c0f\u5305\u5b50","address":"\u9f99\u6e7e\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7","star":5,"price":168,"distance":1.5,"thumbnail":"image\/1.jpg"},
    "3":{"id":9,"name":"\u9f99\u6e7e\u5c0f\u5305\u5b50","address":"\u9f99\u6e7e\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7","star":5,"price":168,"distance":1.5,"thumbnail":"image\/1.jpg"},
    "4":{"id":10,"name":"\u9f99\u6e7e\u5c0f\u5305\u5b50","address":"\u9f99\u6e7e\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7","star":5,"price":168,"distance":1.5,"thumbnail":"image\/1.jpg"},
    "5":{"id":11,"name":"\u9f99\u6e7e\u5c0f\u5305\u5b50","address":"\u9f99\u6e7e\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7","star":5,"price":168,"distance":1.5,"thumbnail":"image\/1.jpg"}
    }
}</pre>
</blockquote>
</div>

<!-- 店铺列表二级 -->
<div id="shopsTwo">
<blockquote>
  <p>获取店铺列表二级</p>
  <footer>方式: POST </footer>
  <footer>地址: http://api.rongdatonghe.com/shopstwo</footer>
  <footer>参数1: type { 类型, 1=休闲 | 2=生活, 默认=1，选填 }</footer>
  <footer>返回: JSON对象 code = 200 成功 = 400 失败, msg = 提示, data = 数据</footer>
  <pre>{
"code":200,
"message":"success",
"data":{  
    "Category1":{
        "1":{
                "id":1,
                "name":"\u9ea6\u5f53\u52b3",
                "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
                "star":4,
                "price":115,
                "distance":1.8,
                "thumbnail":"image\/2.jpg"
            },
        "2":{
            "id":2,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "3":{
            "id":3,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "4":{
            "id":4,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "5":{
            "id":5,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        }
    },
    "Category2":{
        "1":{
            "id":1,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "2":{
            "id":2,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "3":{
            "id":3,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "4":{
            "id":4,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "5":{
            "id":5,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        }
    },
    "Category3":{
        "1":{
            "id":1,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "2":{
            "id":2,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "3":{
            "id":3,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "4":{
            "id":4,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
        },
        "5":{
            "id":5,
            "name":"\u9ea6\u5f53\u52b3",
            "address":"\u4e1c\u73af\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
            "star":4,
            "price":115,
            "distance":1.8,
            "thumbnail":"image\/2.jpg"
       }
    }
}</pre>
</blockquote>
</div>



<!-- 店铺详情 -->
<div id="shop_detail">
<blockquote>
  <p>获取店铺详情</p>
  <footer>方式: POST </footer>
  <footer>地址: http://api.rongdatonghe.com/shop</footer>
  <footer>参数1: id {店铺ID, 类型 Int, 必填}</footer>
  <footer>返回: JSON对象 code = 200 成功 = 400 失败, msg = 提示, data = 数据</footer>
  <pre>{
"code":200,
"message":"success",
"data":{
    "id":"1",
    "name":"\u9f99\u6e7e\u5c0f\u5305\u5b50",
    "star":5,"price":168,"address":"\u9f99\u6e7e\u5546\u4e1a\u5927\u8857\u7267\u6b4c\u94fa\u5b5056\u53f7",
    "phone":"13512345678",
    "products":{
        "0":{"id":1,"name":"\u8001\u5bb6\u8089\u997c","price":"36","discount":"24","thumbnail":"image\/1.jpg"},
        "1":{"id":2,"name":"\u8001\u5bb6\u8089\u997c","price":"36","discount":"24","thumbnail":"image\/1.jpg"},
        "2":{"id":3,"name":"\u8001\u5bb6\u8089\u997c","price":"36","discount":"24","thumbnail":"image\/1.jpg"}
   },
    "neighbors":{
        "0":{"id":1,"pic":"image\/3.jpg"},
        "1":{"id":2,"pic":"image\/3.jpg"},
        "2":{"id":3,"pic":"image\/3.jpg"},
        "3":{"id":4,"pic":"image\/3.jpg"},
        "4":{"id":5,"pic":"image\/3.jpg"},
        "5":{"id":6,"pic":"image\/3.jpg"},
        "6":{"id":7,"pic":"image\/3.jpg"},
        "7":{"id":8,"pic":"image\/3.jpg"},
        "8":{"id":9,"pic":"image\/3.jpg"},
        "9":{"id":10,"pic":"image\/3.jpg"}
    },
    "banner":"image\/2.jpg"   
}
}</pre>
</blockquote>
</div>

<!-- 店铺商品 -->
<div id="shop_product">
<blockquote>
  <p>获取商品详情</p>
  <footer>方式: POST </footer>
  <footer>地址: http://api.rongdatonghe.com/product</footer>
  <footer>参数1: id { 商品id, 类型Int, 必填}</footer>
  <footer>返回: JSON对象 code = 200 成功 = 400 失败, msg = 提示, data = 数据</footer>
  <pre>{
"code":200,
"message":"success",
"data":{
    "id":"1",
    "name":"\u9f99\u6e7e\u5c0f\u5305\u5b50",
    "star":5,
    "price":"34.00",
    "discount":"38.00",
    "address":"\u4eca\u65e5\u7f51\u4e0a\u6709\u6d88\u606f\u79f0\uff0c\u6b64\u524d\u5728\u5317\u4eac\u516b\u8fbe\u5cad\u91ce\u751f\u52a8\u7269\u56ed\u88ab\u8001\u864e\u54ac\u4f24\u7684\u5973\u5b50\u5df2\u8eab\u4ea1\uff0c\u5f15\u53d1\u7f51\u53cb\u5173\u6ce8\u3002",
    "comments":{},
    "banner":"image\/2.jpg"   
    }
}</pre>
</blockquote>
</div>


@endsection
