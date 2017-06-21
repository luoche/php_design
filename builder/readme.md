# 建造者模式


php中的拦截器 __set()


使用场景 ： 实例化比较多的 流程 步骤比较多的


$cls_1 = new Product();

$cls_1->setStep1();

$cls_1->setStep2();

$cls_1->setStep3();

$cls_1->getResult();



如果另外一个地方调用

$cls_2 = new Product();

$cls_2->setStep1();

$cls_2->setStep2();

$cls_2->setStep3();

$cls_2->getResult();

（phpstrom --> window--->alt + j 可以依次向下选择）

================


如果一个类多次被调用

p1:或者增加一个step4() 则所有实例化的方法都要被修改.

p2: 如果方法名称被修改


应该统一一个bulid 一块管理




