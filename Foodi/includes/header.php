<header>
    <?php switch($view){
        case "inicio":
			echo "<div class='card shadow-sm'>
                    <div class='card-body'>
                        <img src='img/icons/inicio.png' class='me-3'>Inicio
                    </div>
                 </div>";
			break;
		case "platos":
			echo "<div class='card shadow-sm'>
                    <div class='card-body'>
                        <img src='img/icons/platos.png' class='me-3'>Platos
                    </div>
                 </div>";
			break;
		case "calendario":
			echo "<div class='card shadow-sm'>
                    <div class='card-body'>
                        <img src='img/icons/calendar.png' class='me-3'>Calendario
                    </div>
                 </div>";
			break;
		case "suministros":
			echo "<div class='card shadow-sm'>
                    <div class='card-body'>
                        <img src='img/icons/suministros.png' class='me-3'>Suministros
                    </div>
                 </div>";
			break;
    }
    ?>   
</header>
