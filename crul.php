<?php
    $api_url = "https://dummy.restapiexample.com/api/v1/employees";

    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data);   

    $users = $response_data -> data;

    $users= array_slice($users, 0, 9);

        foreach($users as $user){
        echo "name: ". $user -> employee_name;
        echo "<br>";
        echo "age: ". $user -> employee_age;
        echo "<br> <br>";
    }

    //print_r ($users);
