# -strategy
策略模式  ：只要在分析过程中听到需要在不同时间应用不用的业务规则中，就可以使用策略模式处理这种变化的可能性  【来源于大话设计模式】；

类的原则：1，单一职责原则，就一个类而言，应该仅有一个引起它变化的原因。
         2，开放--封闭原则：是说软件实体（类，函数，模块等等），应该可以扩展，但是不可修改。
         3，依赖倒转原则： a，高层模块不应该依赖底层模块，两个都应该依赖抽象。
                          b，抽象不应该依赖细节，细节应该依赖抽象。
         4，里氏代换原则：子类型必须能够替换他们的父类型。
         
装饰模式：动态地给一个对象添加一些额外的职责，就增加功能来说，装饰模式比生成子类更加灵活（为已有的功能添加更多的功能，减装饰功能移核心类，简化原有的类）

代理模式：1，远程代理，也就是为了一个对象在不同的地址空间提供局部代表，这样可以隐藏一个对象存在与不用的空间地址的事实；
         2，虚拟代理，是根据需要创建开销很大的对象，通过它来存放实例化很长的时间的正式对象；
         3，安全代理，用来控制真实对象访问时的权限；
         4，智能指引，是指当调用真实的对象时，代理处理另外一些事。
         
简单工厂模式vs工厂方法：1，简单工厂模式最大的优点在于工厂类中包含了必要的逻辑判断，根据客户端的选择条件动态的实例化相关的类，对于客户端来说，去除了与具                          体产品的依赖；
                      2，工厂方法：定义一个用于创建对象的接口，让子类决定实例化哪一个类，工厂方法使一个类的实例化延迟到其子类；
