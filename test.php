<?php 

interface demo { 
    const NAME = "名稱"; 
    function fun1(); 
    function fun2(); 
} 

interface demo2 { 
    function fun3(); 
    function fun4(); 
} 

interface demo3 { 
    const TEST = "Test"; 
    function fun5(); 
} 

class MyPc implements demo, demo2 { 

    function fun1() { 
        echo "          <br />"; 
    } 
    function fun2() { 
        echo "----------<br />"; 
    } 
    function fun3() { 
        echo "1111111111<br />"; 
    } 
    function fun4() { 
        echo "2222222222<br />"; 
    } 
} 

class MyPs extends MyPc implements demo3 { 
    function fun5() { 
        echo "繼承類後引用介面"; 
    } 
} 

    $p = new MyPs; 
    $p->fun1(); 
    $p->fun2(); 
    $p->fun3(); 
    $p->fun4(); 
    $p->fun5(); 

    var_dump($p);
?> 