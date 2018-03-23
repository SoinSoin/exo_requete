
    <?php 
    $connect = mysqli_connect("127.0.0.1", "root", "1a2b3c4D", "colyseum");
    mysqli_set_charset($connect, 'utf8');
    function LastFistN()
    {
        $connect = mysqli_connect("127.0.0.1", "root", "1a2b3c4D", "colyseum");
        mysqli_set_charset($connect, 'utf8');
        $query = "SELECT firstName, lastName FROM clients";
        $lole = mysqli_query($connect, $query);
        $tabhaut .= "<table class='table'><thead class='thead-dark'><tr><th scope='col' class='text-center'>Prénom</th>
<th scope='col' class='text-center'>Nom</th></tr></thead><tbody >";
        echo $tabhaut;
        while ($row = mysqli_fetch_array($lole)) {

            $name .= "<tr><td class='text-center'>" . $row["firstName"] . "</td> <td class='text-center'>" . $row["lastName"] . "</td></tr>";
        }
        echo $name;
        $tabbas .= "</tbody></table>";
        echo $tabbas;
    }

    function genre()
    {
        $connect = mysqli_connect("127.0.0.1", "root", "1a2b3c4D", "colyseum");
        mysqli_set_charset($connect, 'utf8');
        $query = "SELECT DISTINCT genre FROM genres;";
        $result = mysqli_query($connect, $query);
        $tabhaut .= "<table class='table'><thead class='thead-dark'><tr><th scope='col' class='text-center'>Genre</th>
        </tr></thead><tbody >";
        echo $tabhaut;
        while ($row = mysqli_fetch_array($result)) {
            $oui .= "<tr><td class='text-center'>" . $row["genre"] . "<br></td></tr>";
        }
        echo $oui;
        $tabbas .= "</tbody></table>";
        echo $tabbas;
    }
    function Premier()
    {
        $connect = mysqli_connect("127.0.0.1", "root", "1a2b3c4D", "colyseum");
        mysqli_set_charset($connect, 'utf8');
        $query = "SELECT firstName, lastName FROM clients WHERE id BETWEEN '1' AND '20';";
        $result = mysqli_query($connect, $query);
        $tabhaut .= "<table class='table'><thead class='thead-dark'><tr><th scope='col' class='text-center'>Prénom</th>
        <th scope='col' class='text-center'>Nom</th></tr></thead><tbody >";
        echo $tabhaut;
        while ($row = mysqli_fetch_array($result)) {
            $name .= "<tr><td class='text-center'>" . $row["firstName"] . "</td> <td class='text-center'>" . $row["lastName"] . "</td></tr>";
        }
        echo $name;
        $tabbas .= "</tbody></table>";
        echo $tabbas;
    }

    function fidelite()
    {
        $connect = mysqli_connect("127.0.0.1", "root", "1a2b3c4D", "colyseum");
        mysqli_set_charset($connect, 'utf8');
        $query = "SELECT firstName, lastName FROM cards INNER JOIN cardTypes ON  cards.cardTypesId = cardTypes.id INNER JOIN clients ON cards.cardNumber = clients.cardNumber WHERE clients.cardNumber IS NOT NULL AND type = 'Fidelite';";
        $result = mysqli_query($connect, $query);
        $tabhaut .= "<table class='table'><thead class='thead-dark'><tr><th scope='col' class='text-center'>Prénom</th>
        <th scope='col' class='text-center'>Nom</th></tr></thead><tbody >";
        echo $tabhaut;
        while ($row = mysqli_fetch_array($result)) {
            $name .= "<tr><td class='text-center'>" . $row["firstName"] . "</td> <td class='text-center'>" . $row["lastName"] . "</td></tr>";
        }
        echo $name;
        $tabbas .= "</tbody></table>";
        echo $tabbas;
    }

    function nomparM()
    {
        $connect = mysqli_connect("127.0.0.1", "root", "1a2b3c4D", "colyseum");
        mysqli_set_charset($connect, 'utf8');
        $query = "SELECT lastName, firstName
        FROM clients
        WHERE lastName LIKE 'M%'
        ORDER BY lastName ASC;";
        $result = mysqli_query($connect, $query);
        $tabhaut .= "<table class='table'><thead class='thead-dark'><tr><th scope='col' class='text-center'>Prénom</th>
        <th scope='col' class='text-center'>Nom</th></tr></thead><tbody >";
        echo $tabhaut;
        while ($row = mysqli_fetch_array($result)) {
            $name .= "<tr><td class='text-center'>" . $row["firstName"] . "</td> <td class='text-center'>" . $row["lastName"] . "</td></tr>";
        }
        echo $name;
        $tabbas .= "</tbody></table>";
        echo $tabbas;
    }
    function SpectacleS()
    {
        $connect = mysqli_connect("127.0.0.1", "root", "1a2b3c4D", "colyseum");
        mysqli_set_charset($connect, 'utf8');
        $query = "SELECT title, performer, date, startTime 
        FROM shows 
        ORDER BY performer ASC; ";
        $result = mysqli_query($connect, $query);
        $tabhaut .= "<table class='table'><thead class='thead-dark'><tr><th scope='col' class='text-center'>Spectacles</th>
        <th scope='col' class='text-center'>Artiste(s)</th><th scope='col' class='text-center'>date</th><th scope='col' class='text-center'>heure</th></tr></thead><tbody >";
        echo $tabhaut;
        while ($row = mysqli_fetch_array($result)) {
            $name .= "<tr><td class='text-center'>" . $row["title"] . "</td> <td class='text-center'>" . $row["performer"] . "</td><td class='text-center'>" . $row["date"] . "</td><td class='text-center'>" . $row["startTime"]."</td></tr>";
        }
        echo $name;
        $tabbas .= "</tbody></table>";
        echo $tabbas;
    }

    if (isset($_POST['action']) && !empty($_POST['action'])) {
        $act = $_POST['action'];
        switch ($act) {
            case 'nomPren':
                LastFistN();
                break;
            case 'genre':
                genre();
                break;
            case '20premiers':
                Premier();
                break;
            case 'fidelite':
                fidelite();
                break;
            case 'nomM':
                nomparM();
                break;
                case 'spectacles':
                SpectacleS();
                break;    
        }

    }
    ?>    
