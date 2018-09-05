<?php

phpinfo();

#步骤1；创建memcache对象



















// 使用PHP存储标量类型
// 数据：整型（8）、浮点型（8.88）、字符串型（php0225）、布尔型（true）
//1.创建memcache对象
// $mem = new memcache;
// //2.连接服务
// $mem->connect('localhost', 11211);
// //3.设置服务
// $rs = $mem->set('int1', 8);
// var_dump($rs);
// $rs = $mem->set('int2', 8.88);
// var_dump($rs);
// $rs = $mem->set('int3', 'php12');
// var_dump($rs);
// $rs = $mem->set('int4', true);
// var_dump($rs);

// echo '<hr />';
// $rs = $mem->get('int1');
// var_dump($rs);
// $rs = $mem->get('int2');
// var_dump($rs);
// $rs = $mem->get('int3');
// var_dump($rs);
// $rs = $mem->get('int4');
// var_dump($rs);
// die;




// 使用PHP存储复合类型
// 数组：array('name'=>zhangsan,'age'=>18)
// 对象：class test { public $name = 123}    $obj = new test()
//1.创建memcache对象
// $mem = new memcache;
// //2.连接服务
// $mem->connect('localhost', 11211);
// //3.设置服务
// $data1 = array('name'=>'zhangsan','age'=>18);
// class test { public $name = 123;}   
// $data2 = new test();

// $rs = $mem->set('arr1', $data1);
// var_dump($rs);
// $rs = $mem->set('obj2', $data2);
// var_dump($rs);

// echo '<hr />';
// $rs = $mem->get('arr1');
// var_dump($rs);
// echo '<br />';
// $rs = $mem->get('obj2');
// var_dump($rs);
// die;


// 使用PHP存储特殊类型
//1.创建memcache对象
// $mem = new memcache;
// //2.连接服务
// $mem->connect('localhost', 11211);
// //3.设置服务
// $data = fopen('xxxx', 'a+');
// $rs = $mem->set('resource', $data);
// var_dump($rs);
// $rs = $mem->set('null1', null);
// var_dump($rs);

// echo '<hr />';
// $rs = $mem->get('resource');
// var_dump($rs);
// echo '<br />';
// $rs = $mem->get('null1');
// var_dump($rs);
// die;
