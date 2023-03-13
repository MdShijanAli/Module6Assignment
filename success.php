<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body>
    <h2 class="text-center text-3xl mt-20">Registration Successful</h2>
    <p class="text-center">Thank you for registering!</p>



    <div class="w-3/4 mx-auto my-12 ">
        <table class="table w-full border-2 border-indigo-600">
            <!-- head -->
            <thead>
                <tr>

                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>


            <tbody class="border-2 border-indigo-600">

                <?php
                // read users data from CSV file
                $file = fopen('users.csv', 'r');


                while (($data = fgetcsv($file)) !== false) {
                    echo '<tr>';

                    echo '<td>
                   <div class="flex items-center space-x-3">
                     <div class="avatar">
                       <div class="mask mask-squircle w-12 h-12">
                       <img src="uploads/' . $data[2] . '">
                       </div>
                     </div>
                    
                       </div>
                   </td>';
                    echo '<td>' . $data[0] . '</td>';
                    echo '<td>' . $data[1] . '</td>';

                    echo ' </tr>';
                }

                ?>

            </tbody>


        </table>
    </div>


</body>

</html>