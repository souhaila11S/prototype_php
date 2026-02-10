<table border="1">
    <tr>
        <th>Champ</th>
        <th>Valeur</th>
    </tr>

    <tr>
        <td>Nom</td>
        <td>
            <?php 
            if(isset($_POST['nom']) && $_POST['nom']!="") 
                echo $_POST['nom']; 
            else 
                echo "Vide"; 
            ?>
        </td>
    </tr>

    <tr>
        <td>Prénom</td>
        <td>
            <?php 
            if(isset($_POST['prenom']) && $_POST['prenom']!="") 
                echo $_POST['prenom']; 
            else 
                echo "Vide"; 
            ?>
        </td>
    </tr>

    <tr>
        <td>Adresse</td>
        <td>
            <?php 
            if(isset($_POST['adresse']) && $_POST['adresse']!="") 
                echo $_POST['adresse']; 
            else 
                echo "Vide"; 
            ?>
        </td>
    </tr>

    <tr>
        <td>Ville</td>
        <td>
            <?php 
            if(isset($_POST['ville']) && $_POST['ville']!="") 
                echo $_POST['ville']; 
            else 
                echo "Vide"; 
            ?>
        </td>
    </tr>

    <tr>
        <td>Code Postal</td>
        <td>
            <?php 
            if(isset($_POST['cp']) && $_POST['cp']!="") 
                echo $_POST['cp']; 
            else 
                echo "Vide"; 
            ?>
        </td>
    </tr>
</table>




