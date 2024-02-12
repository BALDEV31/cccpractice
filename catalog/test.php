<?php
$a=[1,3,5,7,9];
sort($a);

function getMin($arr=[],$n){
    $sum=array_sum(array_slice($arr,0,$n));
    return $sum;
}
function getMax($arr=[],$n){
    $b=array_reverse($arr);
    $sum=array_sum(array_slice($b,0,$n));
    return $sum;
}

echo getMin($a,4);
echo getMax($a,4);
?>
<!--  
 /app/code/local
            /Product/
                /Model
                /Controller
                /View
            /Customer
                /Model
                /Controller
                /View
        /design/frontend/tempalte/
            /product
                /form.phtml
                /list.phtml
                /grid.phtml
            /customer/
                /form.phtml
                /list.phtml
                /address/
                    form.phtml

https://localhost/myfolderrootdirectory
    product/index/new
    product/index/list
    product/index/save
    product/index/delete

    customer/index/new
    customer/index/list
    customer/index/save
    customer/index/delete

    customer/address/new
    customer/address/list
    customer/address/save
    customer/address/delete

    customer/quot_address/new
    customer/quot_address/list
    customer/quot_address/save
    customer/quot_address/delete -->

select course_id, semester, year, sec_id, avg(tot_cred)
from takes natural join student
where year = 2009
group by course_id, semester, year, sec_id
having count(ID) >= 2;