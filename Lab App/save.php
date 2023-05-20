    <?php
    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'students');

    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        // Get the form data
        $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);

        // Validate the form data
        $errors = array();
        if (empty($full_name)) {
            $errors[] = 'Full name is required';
        }
        if (empty($email)) {
            $errors[] = 'Email is required';
        }
        if (empty($gender)) {
            $errors[] = 'Gender is required';
        }

        // Check if there are any errors
        if (count($errors) == 0) {
            // Insert the student's information into the database
            $query = "INSERT INTO students (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";
            mysqli_query($db, $query);

            // Display a success message
            echo 'Student registered successfully!';
        } else {
            // Display the errors
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
        }
    }

            // Display the list of registered students
        $query = "SELECT * FROM students";
        $result = mysqli_query($db, $query);

        echo '<ul>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li>' . $row['full_name'] . ' - ' . $row['email'] . ' - ' . $row['gender'] . '</li>';
        }
        echo '</ul>';

    ?>
