<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $item=["Name"=>"Shirt","Color"=>"blue","prize"=>320,"value"=>50];
        
        print_r($item);

        echo ("<br>");

        $about_me=array(
            "full_name"=>"Raxit Kotadiya",
            "my_place"=>"jetpur",
            "social"=>123456789
        );

        print_r($about_me);
        echo ("<br>");


        $Raxit=["bipin"=>"He is good person","lizard"=>"woman's weakness"];
        echo $Raxit["bipin"];
        echo ("<br>");

        echo $about_me["full"."_"."name"];
        echo ("<br>");
       
        $key="my_place";
        echo $about_me[$key];
        echo ("<br>");

        $num_array=[1000=>"one thousend",100=>"one hundred"];
        echo $num_array[1000];
        echo ("<br>");
      
        $ordered= [99,97,25,27];
        echo $ordered[3];//$ordered ni under 0 thi count start thai
        echo ("<br>");

        $num_array[]="new number";
        echo $num_array[1001];//plus one in biggest int. $num_array
        echo ("<br>");

        $animal_array=["panda"=>"cute","lizard"=>"cutest"];
        array_push($animal_array,"new animal");
        echo $animal_array[0];//koi pn int. nathi aetle 0 thi start thai

























    ?>
</body>
</html>