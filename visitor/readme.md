# 访问者模式

### 举例说明

如果增加访问的属性，不需要再原来的基础上在做改变

```php
$article = new Article (uid,date);
```

如果需要增加 `Article` 属性，不需要把以前的实例化方法做出改变


个人电脑访问 http://www.sd.com/api/index.php?r=sheji/visit


### 理解访问者模式P

原因 ：不同的访问者 带来不同的属性

如果 __construct(xxx,yyy) 只有二个属性，新来的 user 带来新的属性ZZZ

不同的属性zzz(如level) 可以建立一个属性类，改类重写 Article() 基本方法


// Article()  中的getLevel() 调用的新实例化的类Level中的类 getLevel()


新增一个属性 增加一个类 和 一个调用方法

二个类（`Article` 和 `Level` ）获取最新message()  都继承了 OAddAttr()

基本的使用的 Article 中 getAttr()
新增的 使用 Level 中的 getAttr()


所以实例化对象为  Article 和 Level

新增的Level 可以处理新增的字段，而不需要变动最初的Article类
