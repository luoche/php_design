# 命令模式

举例说明 ： 如果一个方法 需要多个类的实例化操作


$cls_1 = new Cls1();
$cls_2 = new Cls2();
$cls_3 = new Cls3();

把所有的实例化方法封装起来。


由于不同的类 需要的参数不一样，返回的结果也不一样。





$login = new Login (uid,pass);
$feedback = new Feedback(title,content,date);


##  命令行模式分为三个部分。 Controller Context Factory 

STEP 1 : Context 部分 处理参数的传递问题。 所有的参数放入到一个数组中
        
        添加 和 获取 setParam getParma 

        $contexxt_cls->params[]
 
STEP 2 : Controller部分 实例化的部分。
 
        所以__construct 部分负责 和Context的合作方式
        
        同时初始化的时候 调用Factory
        
STEP 3: Factory 抽取公共实例化部分 getInstance()




个人电脑访问 http://www.sd.com/api/index.php?r=sheji/command


