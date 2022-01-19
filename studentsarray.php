<html>
    <body>
        <?php
        $student=array("Nikhila","Amritha","Surya","Anushiya","Parvathy","Mahima","Visakh","Vyshnav","Dev");
        echo"array_students :";
        print_r($student);
        echo"<br>";
        echo"The sorted form of array :";
        asort($student);
        print_r($student);
        echo"<br>";
        echo"The sorted form in reverse order of the array :";
        arsort($student);
        print_r($student);
        ?>
    </body>
</html>    
