<?php
  //构造一个websocket服务器
  $serv = new swoole_websocket_server('0.0.0.0',9501);

  //定义连接事件
  $serv->on('open',function(swoole_websocket_server $serv,$request){
    echo '客户 '.$request->fd.' 连接服务器'.PHP_EOL;
  });

  //定义消息事件
  $serv->on('message',function(swoole_websocket_server $serv,$request){
    //构造一个memcache对象并连接
    $mem = new Memcached();
    $mem->addServer('127.0.0.1',11211);

    if(($data = json_decode($request->data,true))['action'] == 'add'){
      $mem->set($request->fd,$data['data']);
    }else{
      echo '来自 '.$mem->get($request->fd).' 的信息: '.$request->data.PHP_EOL;
      //取出所有已连接服务器的FD列表
      $clientList = $serv->connection_list();
      //遍历fd列表,单独最每个fd发送message
      foreach ($clientList as $fd) {
          $serv->push($fd,$mem->get($request->fd).':'.$request->data);
      }
    }
  });

  //定义关闭事件
  $serv->on('close',function(swoole_websocket_server $serv,$fd){
    $mem = new Memcached();
    $mem->addServer('127.0.0.1',11211);

    foreach ($serv->connection_list() as $fd) {
      $serv->push($fd,$mem->get($request->fd).' 离开房间.');
    }
  });

  $serv->start();
?>
