<?php
$students =
    [
        ['name'=>'Heba',
        'age'=> 21,
        'grade' => 'A+',
        'Subjects' => ['Math','Science','English'],
    ],
    
    
[      'name'=>'Israa',
        'age'=> 21,
        'grade' => 'A+',
        'Subjects' => ['Math','Science','English'],
],
[
    
        'name'=>'Sukiana',
        'age'=> 20,
        'grade' => 'A+',
        'Subjects' => ['Math','Science','English']
],
    ];
     foreach($students as $student){
        echo $student['name'].",". $student['age'].",". $student['grade'].",". $student[ 'Subjects'][0].",".$student[ 'Subjects'][1].",". $student[ 'Subjects'][2].'<br>' ;
    };

    $numStudent= count($students);
    echo $numStudent;
    
    foreach ($students as $student){
        $Sum=+$student['age'];
        $c=+1;
    };

    $Avg= $Sum/$c;
    echo $Avg;




    

?>
