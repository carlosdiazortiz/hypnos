<?php
require 'database_connection.php';
require 'Branch_offices.php';
ob_start();
        $stmt = $pdo->prepare('SELECT * FROM branch_offices WHERE name = :name');
        $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        if ($stmt->execute()) {
            $name = $stmt->fetchObject('Branch_offices');
            if ($name === false) {
                echo "<script>alert('problème')</script>";
            } else {
                ?>
                <div class="modifybranchoffice-results">
                    <h3>Résultats</h3>
                    <p><span>Nom : </span>
                        <?=$name->getDisplayedName() ?><button class="modify-button">Modifier</button>
                    </p>
                    <p><span>Ville : </span>
                        <?=$name->getDisplayedCity() ?><button class="modify-button">Modifier</button>
                    </p>
                    <p><span>Adresse : </span>
                        <?=$name->getDisplayedAddress() ?><button class="modify-button">Modifier</button>
                    </p>
                    <p><span>Description : </span>
                        <?=$name->getDisplayedDescription() ?><button class="modify-button">Modificar</button>
                    </p>
                </div>
                <?php
            }
        }
$contents = ob_get_clean();
require_once 'admin-account-modify.php';

