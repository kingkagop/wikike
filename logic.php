<?php
    //creates, updates, deletes and displays articles
    $conn = mysqli_connect("localhost", "debian-sys-maint","acKlYexwACaaHvzL","wikike");

        //check if connection is established
        if(!$conn){
            echo "No connection";
        }
    //selects all data in table for display
    $sql = "SELECT id, title, author, created, updated, tags, content, images, thedescription FROM blogs";
    $query = mysqli_query($conn, $sql);


    //create post
    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $author = $_REQUEST['author'];
        $tags = $_REQUEST['tags'];
        $images = $_REQUEST['images'];
        $thedescription = $_REQUEST['descriptions'];
        
        //exectute a querry
        $sql = "INSERT INTO  blogs (title, content, author, tags, images, thedescription) VALUES('$title', '$content', '$author', '$tags', '$images','$thedescription')";
        mysqli_query($conn, $sql);

        //dirrect to homepage after add
        header("Location: index.php?info=added");
        exit();
    }

    //retrieve data from database for view.php
    //check whether url has variable = id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];

        //retrieve
        $sql = "SELECT id, title, author, created, updated, tags, content, images, thedescription FROM blogs WHERE id=$id";
        $query = mysqli_query($conn, $sql);
    }
    //update
    if(isset($_REQUEST['update'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $author = $_REQUEST['author'];
        $tags = $_REQUEST['tags'];
        $images= $_REQUEST['images'];
        $id = $_REQUEST['id'];
        $thedescription = $_REQUEST['descriptions'];

        //querry to update
        $sql = "UPDATE blogs SET  title = '$title', content='$content', author='$author',tags='$tags', images='$images', thedescription='$thedescription' WHERE id= $id";
        mysqli_query($conn, $sql);
        header("Location: dashboard.php?info=updated");
        exit();
    }
    //delete
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        //delete
        $sql = "DELETE FROM blogs WHERE id=$id";
        $query = mysqli_query($conn, $sql);
        
        header("Location: dashboard.php?info=deleted ");
        exit();
    }
    //create user
    if(isset($_REQUEST["signup"])){
        $firstName = $_REQUEST['firstName'];
        $secondName = $_REQUEST['secondName'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
                
        //exectute a querry
        $sql = "INSERT INTO  credential (firstName, secondName, username, passwords) VALUES('$firstName', '$secondName', '$username', '$password')";
        mysqli_query($conn, $sql);

        //dirrect to homepage after add
        header("Location: dashboard.php?info=added");
        exit();
    }
    //login
    //retrieve data from database for view.php
    //check whether url has variable = id
    if(isset($_REQUEST['login'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        //retrieve
        $sql = "SELECT id, title, author, created, updated, tags, content, images, thedescription FROM blogs WHERE author=$username";
        $query = mysqli_query($conn, $sql);
    }
    //change password or username
    //if(isset($_REQUEST['update'])){
    //    $title = $_REQUEST['title'];
      //  $content = $_REQUEST['content'];
        //$author = $_REQUEST['author'];
        //$tags = $_REQUEST['tags'];
        //$images= $_REQUEST['images'];
        //$id = $_REQUEST['id'];

        //querry to update
       // $sql = "UPDATE blogs SET  title = '$title', content='$content', author='$author',tags='$tags', images='$images' WHERE id= $id";
       // mysqli_query($conn, $sql);
       // header("Location: dashboard.php?info=updated");
       // exit();
   // }
    //delete user
    //if(isset($_REQUEST['delete'])){
     //   $id = $_REQUEST['id'];

        //delete
     //   $sql = "DELETE FROM blogs WHERE id=$id";
       // $query = mysqli_query($conn, $sql);
        
      //  header("Location: dashboard.php?info=deleted ");
       // exit();
    //}
    //add a subscriber
    if(isset($_REQUEST["subscribe"])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $number = $_REQUEST['number'];
        
        //exectute a querry
        $sql = "INSERT INTO  subscriber (names, emails, numbers) VALUES('$name', '$email', '$number')";
        mysqli_query($conn, $sql);

        //dirrect to homepage after add
        header("Location: dashboard.php?info=added");
        exit();
    }

    //retrieve data from database for view.php
    //check whether url has variable = id
    //if(isset($_REQUEST['id'])){
     //   $id = $_REQUEST['id'];

        //retrieve
      //  $sql = "SELECT id, title, author, created, updated, tags, content, images FROM blogs WHERE id=$id";
      //  $query = mysqli_query($conn, $sql);
    //}
    //update
    //if(isset($_REQUEST['update'])){
      //  $title = $_REQUEST['title'];
     //   $content = $_REQUEST['content'];
     //   $author = $_REQUEST['author'];
    //    $tags = $_REQUEST['tags'];
     //   $images= $_REQUEST['images'];
     //   $id = $_REQUEST['id'];

        //querry to update
     //   $sql = "UPDATE blogs SET  title = '$title', content='$content', author='$author',tags='$tags', images='$images' WHERE id= $id";
     //   mysqli_query($conn, $sql);
      //  header("Location: dashboard.php?info=updated");
     //   exit();
   // }
    //delete
   // if(isset($_REQUEST['delete'])){
      //  $id = $_REQUEST['id'];

        //delete
      //  $sql = "DELETE FROM blogs WHERE id=$id";
      //  $query = mysqli_query($conn, $sql);
        
       // header("Location: dashboard.php?info=deleted ");
      //  exit();
    //}
    //POST FEEDBACK 
    if(isset($_REQUEST["submit-feedback"])){
        $name = $_REQUEST['name-feedback'];
        $number = $_REQUEST['number-feedback'];
        $email = $_REQUEST['email-feedback'];
        $feedback = $_REQUEST['feedback-feedback'];
        $subject = $_REQUEST['subject-feedback'];
        
        
        //exectute a querry
        $sql = "INSERT INTO  Feedback (name, number, email, feedback, subject) VALUES('$name', '$number', '$subject', '$feedback', '$email')";
        mysqli_query($conn, $sql);

        //dirrect to homepage after add
        header("Location: index.php?info=added");
        exit();
    }
?>