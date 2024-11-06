<!-- Create an associative array for user details (name, email, age) and display them. -->
<?php
$userDetails = [[
    'name'  => 'Tops Tech',
    'email' => 'topstech@example.com',
    'age'   => 30
],
[
    'name'=> 'Anjana lad',
    'email'=> 'a@gmail.com',
    'age'=> 29
]
];

// Display the user details
foreach($userDetails as $ud){
echo "Name: " . $ud['name'] . "<br>";
echo "Email: " . $ud['email'] . "<br>";
echo "Age: " . $ud['age'] . "<br>";
}
?>