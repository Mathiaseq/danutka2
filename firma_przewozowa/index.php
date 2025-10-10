 <?php
            $zadanie=$_POST["zadanie"]??NULL;
            $data = $_POST["data"]??NULL;
            if(isset($_POST["submit"])) {
                $zap2 = "INSERT INTO `zadania`(`zadanie`, `data`, `osoba_id`) VALUES('spotkanie_firmowe', '2024-05-10',1)";
                $wynik2 = mysqli_query( $link, $zap2);

            }
            mysqli_close($link);
            ?>

            