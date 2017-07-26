# 委托模式

> 有种解释是 委托模式不是GOF的23中之一 只是应用

## 说明

if else的判断放到了设计模式中

所有实现类 继承统一的接口。 处理复杂多样的接口

委托设计模式能够去除核心对象中的判决和复杂的功能性

调用类，不需要去判断 if else 或者以后新增的类型


```
$type = 'mp3';  
if ($type == 'mp3') {  
    $oldCd->playMp3();  
} else {  
    $oldCd->playMp4();  
}  

```

转换为

```
class mp3 {  
    public function playList($list) {  
        return $list[$song];  
    }  
}  

class mp4 {  
    public function playList($list) {  
        return $list[$song];  
    }  
}  

public function play($type, $song) {  
      $obj = new $type;  
      return $obj->playList($this->cdInfo, $song);  
  }  

$oldCd->play('mp3', '1');
```
