
    <?php
    $int_array =array(0,2022,15,7825);
    $string_array = array("raxit babu","dhruvil bhai", "babubha");
    $mixed_array = array(11,"school","Ahmedabad",45,78,"bapo bapo");
    

    echo count($int_array);
    echo count($string_array);
    echo count($mixed_array);
    echo implode(",",$int_array);
  
    print_r($int_array);
    print_r($string_array);
    print_r($mixed_array);
    
  
     $student1 = array(25,"dhruvil",88,10,"silver oak");
     $student2 = array(26,"raxit",89,10,"silver oak");


     echo implode("*",$student1);
     echo implode("/",$student2);

    





    ?>
    
