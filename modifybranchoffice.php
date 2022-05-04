<?php
require 'database_connection.php';
ob_start();
        $stmt = $pdo->prepare('SELECT * FROM branch_offices WHERE name = :name');
        $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
        if ($stmt->execute()) {
            $name = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($name === false) {
                echo "<script>alert('problème')</script>";
            } else {
                ?>
                <div class="modifybranchoffice-results">
                    <h3>Résultats</h3>
                    <p><span>Nom : </span>
                        <?=$name['name'] ?><button class="modify-button">Modifier</button>
                    </p>
                    <p><span>Ville : </span>
                        <?=$name['city'] ?><button class="modify-button">Modifier</button>
                    </p>
                    <p><span>Adresse : </span>
                        <?=$name['address'] ?><button class="modify-button">Modifier</button>
                    </p>
                    <p><span>Description : </span>
                        <?=$name['description'] ?><button class="modify-button">Modificar</button>
                    </p>
                </div>
                <?php
            }
        }
$contents = ob_get_clean();
require_once 'admin-account-modify.php';
