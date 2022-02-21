<?php
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        "email"=>'ahmed@gmail.com',
        "phone"=>[11111,22222,3333]

    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        "email"=>'mohamed@gmail.com',
        "phone"=>[11111,22222]
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running', 'm'
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ]
        ,
        "email"=>'',
        "phone"=>[]
    ],
    
];

?>

<!doctype html>
<html lang="en">

<head>
    <title>Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    if (count($users) > 0) {
    ?>
        <table class="table">
            <thead>
                <?php foreach ($users[count($users) - 1] as $property => $value) { ?>
                    <th> <?= $property ?> </th>
                <?php } ?>
            </thead>
            <tbody>
                <?php foreach ($users as  $user) { ?>
                   <tr>
                        <?php foreach ($user as $property => $value) { ?>
                            <td>
                                <?php
                                    if(gettype($value) == 'array' || gettype($value) == 'object'){
                                        foreach ($value as $k => $v) {
                                            if($property  == 'gender'){
                                                if($v == 'm'){
                                                    $v = 'male';
                                                }elseif($v == 'f'){
                                                    $v = 'female';
                                                }
                                            }
                                            echo $v . ' , ';
                                        }
                                    } else{
                                        echo $value;
                                    }
                                ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php
    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>